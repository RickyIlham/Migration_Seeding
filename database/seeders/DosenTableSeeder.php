<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DosenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\dosen::factory(10)->create();
    }
}
