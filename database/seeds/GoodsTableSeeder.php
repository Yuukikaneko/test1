<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Goods;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*        $param = [
            'pronum' => 1,
            'product' => 'シャツ',
            'category' => 'トップス',
            'size' => 'M',
            'color' => 'white',
            'sex' => 'man',
            'company_id' => 11,
        ];
        DB::table('goods')->insert($param);

        $param = [
            'pronum' => 2,
            'product' => 'パンツ',
            'category' => 'ボトムス',
            'size' => 'L',
            'color' => 'red',
            'sex' => 'man',
            'company_id' => 12,
        ];
        DB::table('goods')->insert($param);

        $param = [
            'pronum' => 3,
            'product' => 'シューズ',
            'category' => 'アクセサリー',
            'size' => '24cm',
            'color' => 'white',
            'sex' => 'woman',
            'company_id' => 13,
        ];
        DB::table('goods')->insert($param);
*/
        factory(Goods::class, 150)->create();
    }
}
