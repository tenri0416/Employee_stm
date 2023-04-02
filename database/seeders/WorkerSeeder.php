<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('workers')->insert([
            [
                'name' => '辻健二',
                'email' => 'test@test.com',
                'affiliation' => '生産管理',
                'phone_num' => '08011225454',
                'situation' => '1',
                'created_at' => '2021/01/01 11:11:11',
                'updated_at' => '2021/01/01 11:11:11'
            ],
            [
                'name' => '松岡修造',
                'email' => 'test1@test.com',
                'affiliation' => '材料管理',
                'phone_num' => '08011225454',
                'situation' => '1',
                'created_at' => '2021/01/01 11:11:11',
                'updated_at' => '2021/01/01 11:11:11'
            ],
            [
                'name' => '松山修造',
                'email' => 'test2@test.com',
                'affiliation' => '材料管理',
                'phone_num' => '08014125454',
                'situation' => '1',
                'created_at' => '2021/01/01 11:11:11',
                'updated_at' => '2021/01/01 11:11:11'
            ],
            [
                'name' => '高井直樹',
                'email' => 'test3@test.com',
                'affiliation' => '経理',
                'phone_num' => '08011995454',
                'situation' => '1',
                'created_at' => '2021/01/01 11:11:11',
                'updated_at' => '2021/01/01 11:11:11'
            ],
            [
                'name' => '高井智樹',
                'email' => 'test4@test.com',
                'affiliation' => 'システム',
                'phone_num' => '09011995454',
                'situation' => '3',
                'created_at' => '2021/01/01 11:11:11',
                'updated_at' => '2021/01/01 11:11:11'
            ],
            [
                'name' => '山下臨',
                'email' => 'test5@test.com',
                'affiliation' => '総務',
                'phone_num' => '07011995454',
                'situation' => '2',
                'created_at' => '2021/01/01 11:11:11',
                'updated_at' => '2021/01/01 11:11:11'
            ],
            [
                'name' => '山健',
                'email' => 'test6@test.com',
                'affiliation' => '総務',
                'phone_num' => '0701115454',
                'situation' => '1',
                'created_at' => '2021/01/01 11:11:11',
                'updated_at' => '2021/01/01 11:11:11'
            ],
            [
                'name' => '岡陸',
                'email' => 'test8@test.com',
                'affiliation' => '経理',
                'phone_num' => '0701215454',
                'situation' => '1',
                'created_at' => '2021/01/01 11:11:11',
                'updated_at' => '2021/01/01 11:11:11'
            ],

        ]);
    }
}
