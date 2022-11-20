<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;
use Illuminate\Support\Facades\DB;

class SourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->insert($this->getData());
    }
    private function getData() {
        $data = [];
        $faker = Faker\Factory::create('ru_RU');
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'url' => $faker->url
            ];
        }
        return $data;
    }
}
