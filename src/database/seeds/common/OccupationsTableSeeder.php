<?php

declare(strict_types=1);

namespace Database\Seeds\Common;

use App\Models\Occupation;
use Illuminate\Database\Seeder;

class OccupationsTableSeeder extends Seeder
{
    private const DATA = [
        [
            'name' => 'パーソナル',
        ],
        [
            'name' => 'ボクシング',
        ],
        [
            'name' => 'フィットネス',
        ],
    ];

    public function run(): void
    {
        $datas = self::DATA;

        foreach ($datas as $data) {
            Occupation::firstOrCreate($data);
        }
    }
}
