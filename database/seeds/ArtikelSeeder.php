<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create('id_ID');
			for($i = 1; $i <= 20; $i++){
				DB::table('artikels')->insert([
					'judul_artikel' => $faker->sentence($nbWords = 6, $variableNbWords = true),
					'isi_artikel' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
					'thumbnail_artikel' => $faker->imageUrl($width = 640, $height = 480),
					'tag_artikel' => $faker->sentence($nbWords = 2, $variableNbWords = true),
					'penulis' => $faker->userName,
					'kategori_artikel' => $faker->randomElement(['Kesehatan', 'Bisnis', 'Teknologi']),
				]);
			}
    }
}
