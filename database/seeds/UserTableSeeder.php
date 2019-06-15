<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $created_at = \Carbon\Carbon::now();
        $updated_at = \Carbon\Carbon::now();
        $users = [
            [
                'uuid' => '1f2aec5d-8018-4683-b254-4bc80c8e4aab',
                'first_name' => 'อภิเดช',
                'last_name' =>'ชารีงาม',
                'nickname' => 'ท๊อป',
                'created_at' => $created_at,
                'updated_at' => $updated_at
            ],
            [
                'uuid' => '4caa6293-4330-4a42-9c5c-ce6f387edce3',
                'first_name' => 'สิทธิศักดิ์',
                'last_name' =>'พิมพ์ทองภูมิ',
                'nickname' => 'บิ๊ก',
                'created_at' => $created_at,
                'updated_at' => $updated_at
            ],
            [
                'uuid' => '470b9227-04da-4b3c-a7f5-fd9d271e45e7',
                'first_name' => 'สุกัญญา',
                'last_name' =>'ชาวสวน',
                'nickname' => 'หวาน',
                'created_at' => $created_at,
                'updated_at' => $updated_at
            ],
            [
                'uuid' => 'c1da586d-3da9-443b-92fd-93e531587bf6',
                'first_name' => 'รวีโรจน์',
                'last_name' =>'แสงศรีจันทร์',
                'nickname' => 'บ๊วย',
                'created_at' => $created_at,
                'updated_at' => $updated_at
            ],
            [
                'uuid' => '39cd2167-a255-4119-9f7a-5d0490d2861c',
                'first_name' => 'อนุชา',
                'last_name' =>'บัวตุม',
                'nickname' => 'คิว',
                'created_at' => $created_at,
                'updated_at' => $updated_at
            ],
            [
                'uuid' => '68db997b-91dd-4a35-9383-eb15f23f8220',
                'first_name' => 'หนึ่งฤทัย',
                'last_name' =>'เอ้งฉ้วน',
                'nickname' => 'อ้อย',
                'created_at' => $created_at,
                'updated_at' => $updated_at
            ],
            [
                'uuid' => 'eda54993-fe52-4c7e-a429-62bc026d4076',
                'first_name' => 'ประสิทธิ์',
                'last_name' =>'หีมปอง',
                'nickname' => 'ฟัต',
                'created_at' => $created_at,
                'updated_at' => $updated_at
            ],
        ];

        \DB::table('users')->insert($users);
    }
}
