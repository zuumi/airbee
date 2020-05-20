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
            'family_name'=>'リナックス',
            'first_name'=>'太郎',
            'postal'=>'123-4567',
            'address'=>'東京都新宿区4丁目３４５',
            'tel'=>'090-1234-5678',
            'email'=>'linux@linux.com',
            'email_verified_at'=>'',
            'birthday'=>'2020/05/14',
            'password'=>'himitu',
        ];
        DB::table('users')->insert($param);
    }
}
