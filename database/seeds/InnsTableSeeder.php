<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InnsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name'=>'熱海',
            'postal'=>'323-4567',
            'address'=>'静岡県熱海市３丁目',
            'checkintime'=>'15:00',
            'checkouttime'=>'10:00',
            'code'=>102,
            'mail'=>'atami@gmail.com'
        ];
        DB::table('inns')->insert($param);
    }
}
