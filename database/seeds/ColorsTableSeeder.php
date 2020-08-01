<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            [
                'name' => 'Đen'
            ],
            [
                'name' => 'Trắng'
            ],
            [
                'name' => 'Nâu'
            ],
            [
                'name' => 'Đỏ'
            ],
            [
                'name' => 'Vàng'
            ],
            [
                'name' => 'Xanh'
            ],
            [
                'name' => 'Xám'
            ]
        ]);
    }
}
