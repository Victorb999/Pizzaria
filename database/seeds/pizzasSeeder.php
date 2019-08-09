<?php

use Illuminate\Database\Seeder;

class pizzasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Pizza::class,12)->create();
    }
}
