<?php

use Illuminate\Database\Seeder;

class WordTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $file = fopen(__DIR__ . '/words.txt', 'r');
        while ($row = fgetcsv($file)) {
            if ($row[0] != '') {
                DB::table('word')->insert([
                    'word' => ucwords(strtolower($row[0]))
                ]);
            }

        }
    }
}
