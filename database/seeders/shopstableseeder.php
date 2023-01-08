<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\shop;

class shopstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    $param = [
      'name' => 'パイザ亭',
      'address' => '東京都港区南青山3丁目',
      'category_id' => 1,
    ];
    Shop::create($param);
    $param = [
      'name' => 'ラーメンLaravel',
      'address' => '東京都港区東青山',
      'category_id' => 2,
    ];
    shop::create($param);
    $param = [
      'name' => 'そばの霧島',
      'address' => '東京都港区西青山',
      'category_id' => 3,
    ];
    shop::create($param);
    
  }
    
}
