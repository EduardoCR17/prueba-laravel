<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'name' => 'JUAN',
            'lastname' => 'PEREZ',
            'address' => 'PIURA',
            
        ]);

        DB::table('teachers')->insert([
            'name' => 'PEDRO',
            'lastname' => 'GRACIA',
            'address' => 'SULLANA',
        ]);

        DB::table('teachers')->insert([
            'name' => 'CARLOS',
            'lastname' => 'PEÑA',
            'address' => 'PAITA',
        ]);
    }
}
