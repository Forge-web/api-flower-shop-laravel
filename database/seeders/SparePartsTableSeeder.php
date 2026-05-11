<?php

namespace Database\Seeders;

use App\Models\SpareParts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SparePartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spare_parts = [
            [
                'name' => 'Амортизатор подвески передний КАМАЗ', 
                'description' => 'Амортизатор подвески передний КАМАЗ 65115, 6520, 5490 А1-300/475 под втулки MARSHALL M6001011', 
                'price' => 4290, 
                'img' => 'https://autopolus.pro/thumb/2/0h1hOo5gcc9DnMG4FwdE3w/400r400/d/2025-08-18_12-59-59.png'
            ],
            [
                'name' => 'Амортизатор подвески передний КАМАЗ', 
                'description' => 'Амортизатор подвески передний КАМАЗ 65115, 6520, 5490 А1-300/475 сайлентблок MARSHALL M6001010', 
                'price' => 4490, 
                'img' => 'https://autopolus.pro/thumb/2/xN4sTvwGY8BHKXGTkSdOxA/400r400/d/izobrazhenie_whatsapp_2024-08-21_v_101621_a54e5e75.jpg'
            ],
            [
                'name' => 'Бак масляный КАМАЗ', 
                'description' => 'Бак масляный КАМАЗ (400х400х260) в сборе 5511860801002СБ', 
                'price' => 13490, 
                'img' => 'https://autopolus.pro/thumb/2/Xqi1MSMlD9ohuUb0XTqPSw/400r400/d/6329994126.jpg'
            ],
            [
                'name' => 'Барабан тормозной КАМАЗ-6520', 
                'description' => 'Барабан тормозной КАМАЗ-6520 6520-3501070', 
                'price' => 9990, 
                'img' => 'https://autopolus.pro/thumb/2/6E9PvTvcJWhTDdLHyTQKFA/400r400/d/izobrazhenie_whatsapp_2024-11-19_v_155018_4556bc18.jpg'
            ],
            [
                'name' => 'Барабан тормозной КАМАЗ-ЕВРО', 
                'description' => 'Барабан тормозной КАМАЗ-ЕВРО 53205-3501070', 
                'price' => 8990, 
                'img' => 'https://autopolus.pro/thumb/2/BORp9EJhvgQPHzK3TsZ9JQ/400r400/d/izobrazhenie_whatsapp_2024-12-04_v_080647_8353e8f6.jpg'
            ],
            [
                'name' => 'Бачок КАМАЗ топливный ПЖД (ОАО КАМАЗ)', 
                'description' => 'Бачок КАМАЗ топливный ПЖД (ОАО КАМАЗ) 651151015265', 
                'price' => 9490, 
                'img' => 'https://autopolus.pro/thumb/2/_URrq7jIB4GTo0hb9uSzAQ/400r400/d/2025-08-11_13-09-23.png'
            ],
            [
                'name' => 'Бачок расширительный КАМАЗ,УРАЛ пластик (усиленный)', 
                'description' => 'Бачок расширительный КАМАЗ,УРАЛ пластик (усиленный) 53201311010', 
                'price' => 550, 
                'img' => 'https://autopolus.pro/thumb/2/jCYPA0Jbak6ITH2BvzLRTA/400r400/d/medium.jpg'
            ],
        
            
        
        ];

        foreach ($spare_parts as $spare_part) {
            SpareParts::create($spare_part);
        }
    }
}
