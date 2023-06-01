<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Opening;
use Illuminate\Database\Seeder;
use Chess\Movetext;
use Chess\Variant\Classical\PGN\Move;
use Illuminate\Support\Facades\DB;

class OpeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $file = fopen(public_path('/openings-table/a.csv'), 'r');
        while (($line = fgetcsv($file)) !== FALSE) {
            $move = new Move();
            $text = $line[2];
            if ($movetext = (new Movetext($move, $text))->validate()) {
                $values = [
                        'eco' => $line[0],
                        'name'=> $line[1],
                        'movetext' => $movetext,
                ];

                DB::table('openings')->insert($values);
            }
        }
        fclose($file);
    }
}
