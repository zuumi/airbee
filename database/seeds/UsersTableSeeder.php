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
            'familyname'=>'リスク',
            'firstname'=>'とりまじ',
            'postal'=>'123-5467',
            'address'=>'東京都新宿区5丁目５',
            'tel'=>'090-1235-5478',
            'email'=>'la@gmail.com',
            'email_verified_at'=>'',
            'birthday'=>'2020-05-04',
            'password'=>'naisho',
        ];
        DB::table('users')->insert($param);
    }
}
