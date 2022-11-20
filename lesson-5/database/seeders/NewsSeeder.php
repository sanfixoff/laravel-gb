<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }
    private function getData() {
        $data = [];
        $faker = Faker\Factory::create('ru_RU');
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'title' => $faker->realText(rand(10,30)),
                'desc' => $faker->realText(rand(1000,3000)),
                'isPrivate' => false,
                'category_id' => $faker->numberBetween(1,8),
                'source_id' => $faker->numberBetween(1,10)
            ];
        }
        return $data;
    }
}
