<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getData());
    }
    private function getData() {
        $data = [];
        $faker = Faker\Factory::create('ru_RU');
        for ($i = 0; $i < 8; $i++) {
            $data[] = [
                'title' => $faker->realText(rand(10,20)),
            ];
        }
        return $data;
    }
}
