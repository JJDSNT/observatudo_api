<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EixoTableSeeder extends Seeder
{
     /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('eixos')->insert([
            'order' => 0,
            'name' => 'Educação',
            'color' => 'red',
            'icon' => 'teste',
            'indicators' => '10,153,200,350'
        ]);
    }
}
