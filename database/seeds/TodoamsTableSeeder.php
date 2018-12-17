<?php

use Illuminate\Database\Seeder;

class TodoamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Todoam::class, 5)->create();
    }
}
