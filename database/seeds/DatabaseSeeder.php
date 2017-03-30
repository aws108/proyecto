<?php

use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;
//use Pensio13Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Pensio13Seeder::class);
    }
}
