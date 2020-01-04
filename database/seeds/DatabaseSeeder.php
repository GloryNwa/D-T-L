<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Tape::class, 20)->create();

        // $this->call([
        //     UsersTableSeeder::class,
        //     TapeTableSeeder::class,
        //     // CommentsTableSeeder::class,
        // ]);

        // DB::tble('tabes')->insert([
        //     'program' =>str_random(10),
        //     'minister' => str_random(10),
        //     'programDescription' =>str_random(10),
        //     'producer'  => str_random(10),
        //     'shelfNo' => str_random(10),
        //     'rowNo' => str_random(10),
        //     'tapeNumbering' =>str_random(10),
        //     'dateYear' =>now(),

        // ])
    }
}
