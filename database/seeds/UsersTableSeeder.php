<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'familyname'=>'リクス',
            'firstname'=>'たろう',
            'postal'=>'123-5467',
            'address'=>'東京都新宿区5丁目５',
            'tel'=>'090-1235-5478',
            'email'=>'linu@linx.com',
            'email_verified_at'=>'',
            'birthday'=>'2020/05/04',
            'password'=>'himitr',
        ];
        DB::table('users')->insert($param);
    }
}
