<?php

namespace Database\Seeders;

use App\Models\Flower;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flowers = [
            ['name' => 'Роза', 'description' => 'Красивая красная роза.', 'price' => 100.99, 'img' => 'https://cdn1.ozone.ru/s3/multimedia-y/6740851498.jpg'],
            ['name' => 'Тюльпан', 'description' => 'Яркий желтый тюльпан.', 'price' => 50.99, 'img' => 'https://cdn1.ozone.ru/s3/multimedia-y/6740851498.jpg'],
            ['name' => 'Лилия', 'description' => 'Элегантная белая лилия.', 'price' => 70.99, 'img' => 'https://cdn1.ozone.ru/s3/multimedia-y/6740851498.jpg'],
            ['name' => 'Ромашка', 'description' => 'Веселая ромашка.', 'price' => 30.99, 'img' => 'https://cdn1.ozone.ru/s3/multimedia-y/6740851498.jpg'],
            ['name' => 'Подсолнух', 'description' => 'Яркий подсолнух.', 'price' => 60.99, 'img' => 'https://cdn1.ozone.ru/s3/multimedia-y/6740851498.jpg'],
            ['name' => 'Орхидея', 'description' => 'Экзотическая орхидея.', 'price' => 120.99, 'img' => 'https://cdn1.ozone.ru/s3/multimedia-y/6740851498.jpg'],
            ['name' => 'Нарцисс', 'description' => 'Милая нарцисс.', 'price' => 40.99, 'img' => 'https://cdn1.ozone.ru/s3/multimedia-y/6740851498.jpg'],
            ['name' => 'Ирис', 'description' => 'Нежный ирис.', 'price' => 80.99, 'img' => 'https://cdn1.ozone.ru/s3/multimedia-y/6740851498.jpg'],
            ['name' => 'Гвоздика', 'description' => 'Цветная гвоздика.', 'price' => 50.49, 'img' => 'https://cdn1.ozone.ru/s3/multimedia-y/6740851498.jpg'],
            ['name' => 'Пион', 'description' => 'Ароматный пион.', 'price' => 90.99, 'img' => 'https://cdn1.ozone.ru/s3/multimedia-y/6740851498.jpg'],
        ];

        foreach ($flowers as $flower) {
            Flower::create($flower);
        }
    }
}
