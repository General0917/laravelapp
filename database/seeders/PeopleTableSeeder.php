<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     //
    // }

    public function run(): void {
        $param = [
            'name' => 'taro',
            'mail' => 'taro@yamada.jp',
            'age' => 12,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'hanako',
            'mail' => 'hanako@flower.jp',
            'age' => 34,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'sachiko',
            'mail' => 'sachiko@happy.jp',
            'age' => 56,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ];
        DB::table('people')->insert($param);
    }
}
