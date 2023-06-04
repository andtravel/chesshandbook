<?php

namespace App\Http\Controllers;

use App\Services\DatabaseToPGNFile;
use Chess\Exception\UnknownNotationException;
use Chess\Variant\Classical\PGN\AN\Termination;
use Chess\Variant\Classical\PGN\Tag;
use Illuminate\Http\Request;
use App\Models\ChessGame;
use App\Services\PGNFileToDatabase;
use Illuminate\Support\Facades\DB;

class ChessGameController extends Controller
{

        public function file_to_db($filepath, $table): void
    {
        $result = (object) [
            'total' => 0,
            'valid' => 0,
        ];
        $tags = [];
        $movetext = '';
        $file = new \SplFileObject(public_path($filepath));
        while (!$file->eof()) {
            $line = rtrim($file->fgets());
            try {
                $tag = Tag::validate($line);
                $tags[$tag->name] = $tag->value;
            } catch (UnknownNotationException $e) {
                if ($this->isOneLinerMovetext($line)) {
                    if ($this->insert($tags, $movetext, $table)) {
                        $result->valid++;
                    }
                    $tags = [];
                    $movetext = '';
                    $result->total++;
                } elseif ($this->startsMovetext($line)) {
                    if (!array_diff(Tag::mandatory(), array_keys($tags))) {
                        $movetext .= ' ' . $line;
                    }
                } elseif ($this->endsMovetext($line)) {
                    $movetext .= ' ' . $line;
                    if ($this->insert($tags, $movetext, $table)) {
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
        return (strncmp($line, '1.', 2) === 0) || (strncmp($line, '{[%evp', 6) === 0);
    }

        public function endsMovetext(string $line): bool
    {
        $Termination = [
            Termination::WHITE_WINS,
            Termination::BLACK_WINS,
            Termination::DRAW,
            Termination::UNKNOWN
        ];

        foreach ($Termination as $term) {
            if (str_ends_with($line, $term)) {
                return true;
            };
        }
        return false;
    }

        protected function insert(array $tags, string $movetext, string $table): bool
    {
        $tags['movetext'] = trim(rtrim($movetext, $tags['Result']));

        return DB::table($table)->insert($tags);

    }

    public function db_to_file_pgn($filepath): void
    {
        $games = ChessGame::where('id', 1)->get();

        $games = json_decode($games, JSON_OBJECT_AS_ARRAY);

        $file = '';
        for ($i = 0; $i < count($games); $i++) {
            foreach ($games[$i] as $k => $v) {
                if ($v === null || $v === "" || $k === "id") {
                    unset($games[$i][$k]);
                } elseif ($k !== "movetext") {
                    $file .= "[" . $k . " \"" . $v . "\"]\n";
                } else {
                    $file .= "\n" . $v . " " . $games[$i]['Result'] . "\n\n";
                }
            }
        }

        file_put_contents(public_path($filepath), $file, FILE_APPEND);

    }
   /* use App\Http\Controllers\ChessGameController;
        $cgc = new ChessGameController;
   $cgc->db_to_file_pgn('chess-games/fpc.pgn');   */
}
