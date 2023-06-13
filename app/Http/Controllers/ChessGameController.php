<?php

namespace App\Http\Controllers;

use App\Services\DatabaseToPGNFile;
use Chess\Exception\UnknownNotationException;
use Chess\Movetext;
use Chess\Variant\Classical\PGN\AN\Termination;
use Chess\Variant\Classical\PGN\Tag;
use Illuminate\Http\Request;
use App\Models\ChessGame;
use App\Services\PGNFileToDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Chess\Variant\Classical\PGN\Move;

class ChessGameController extends Controller
{

        public function pgnToDatabase(): void //$filepath, $table
    {
        $result = (object) [
            'total' => 0,
            'valid' => 0,
        ];
        $tags = [];
        $movetext = '';
        $file = new \SplFileObject(storage_path('app/Nakamura-Carlsen.pgn'));

        while (!$file->eof()) {
            $line = rtrim($file->fgets());
            try {
                $tag = Tag::validate($line);
                $tags[$tag->name] = $tag->value;
                 } catch (UnknownNotationException $e) {
                     if ($this->isOneLinerMovetext($line)) {
                        if ($this->insert($tags, $movetext)) {
                             $result->valid++;
                         }
                         $tags = [];
                         $movetext = '';
                         $result->total++;
                     } elseif ($this->startsMovetext($line)) {
                             $movetext .= ' ' . $line;
                     } elseif ($this->endsMovetext($line)) {
                         $movetext .= ' ' . $line;
                         if ($this->insert($tags, $movetext)) {
                             $result->valid++;
                         }
                         $tags = [];
                         $movetext = '';
                         $result->total++;
                     } else {
                         $movetext .= ' ' . $line;
                     }
                 }
        }
    }

        public function isOneLinerMovetext(string $line): bool
    {
        return $this->startsMovetext($line) && $this->endsMovetext($line);
    }

        public function startsMovetext(string $line): bool
    {
        return  Str::startsWith($line, ['1.', '{[%evp']);
    }

        public function endsMovetext(string $line): bool
    {
        $termination = [
            Termination::WHITE_WINS,
            Termination::BLACK_WINS,
            Termination::DRAW,
            Termination::UNKNOWN
        ];

        return Str::endsWith($line, $termination);
    }

        protected function insert(array $tags, string $movetext): bool
    {

        $tags['movetext'] = trim(Str::remove($tags['Result'], $movetext));

        return ChessGame::insert($tags);
    }

    public function databaseToPgn(): void
    {
        $games = ChessGame::where('id','<', 5)->get();

        $games = json_decode($games, JSON_OBJECT_AS_ARRAY);

        $file = '';

        foreach ($games as $game) {
           foreach ($game as $k => $v) {
               if ($v === null || $v === "" || $k === "id") {
                    unset($game[$k]);
                } elseif ($k !== "movetext") {
                    $file .= "[" . $k . " \"" . $v . "\"]\n";
                } else {
                    $file .= "\n" . $v . " " . $game['Result'] . "\n\n";
                }
           }
        }

        Storage::disk('local')->put('site.pgn', $file);
    }
   /* use App\Http\Controllers\ChessGameController;
        $cgc = new ChessGameController;
   $cgc->databaseToPgn();
   $cgc->pgnToDatabase();
      */
}
