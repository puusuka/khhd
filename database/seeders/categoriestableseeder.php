<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\category;

class categoriestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
      'name' => 'イタリアン',
    ];
    Category::create($param);
    $param = [
      'name' => '中華',
    ];
    Category::create($param);
    $param = [
      'name' => '和食',
    ];
    Category::create($param);
  }
    
}
