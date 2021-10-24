<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ActivityFactory extends Factory
{
    protected $model = Activity::class;

    public function definition()
    {
        $images = [
            'https://i1.wp.com/twgofun.com.tw/wp-content/uploads/2021/02/khc_tr_001-1.png?w=1080&ssl=1',
            'https://i0.wp.com/twgofun.com.tw/wp-content/uploads/2021/02/khc_tr_009-2.png?w=1081&ssl=1',
            'https://i2.wp.com/twgofun.com.tw/wp-content/uploads/2021/02/khc_tr_011-2.png?w=1081&ssl=1',
            'https://i0.wp.com/twgofun.com.tw/wp-content/uploads/2021/02/khc_tr_014-1.png?w=1080&ssl=1',
            'https://i1.wp.com/twgofun.com.tw/wp-content/uploads/2021/02/khc_tr_002-1.png?w=1080&ssl=1',
            'https://i1.wp.com/twgofun.com.tw/wp-content/uploads/2021/02/khc_tr_005-1.png?w=1080&ssl=1',
        ];
        
        $title = [
            '夏季時刻，就來一刻',
            '現在下訂，立馬優惠大方送',
            '好運道～好運來',
            '到店九折，打卡送禮',
            '服務至上，歡迎光臨',
        ];

        return [
            'title' => $this->faker->randomElement($title),
            'body' => $this->faker->realText(200),
            'on_sale' => $this->faker->boolean(true),
            'order' => $this->faker->unique()->numberBetween(1, 20),
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'status' => $this->faker->boolean(true),
            'image' => $this->faker->randomElement($images),
        ];
    }
}