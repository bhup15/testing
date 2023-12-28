<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class todosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'todoname' => 'Sample Post 3',
            'description' => 'This is the content of the first sample post3.',
            'info' => 'information3',
            'address_at' => '789 adress',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('todos')->insert([
            'todoname' => 'Sample Post 4',
            'description' => 'This is the content of the first sample post4.',
            'info' => 'information4',
            'address_at' => '000 adress',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
