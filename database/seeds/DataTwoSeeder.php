<?php

use Illuminate\Database\Seeder;
use App\DataTwo;

class DataTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_twos')->delete();
        $json = File::get("database/data/opr.json");
        $data = json_decode($json, true);
        foreach ($data as $d) {
        	DataTwo::create(array(
        		'year'=> $d ->year,
				'date'=> $d ->date,
				'change_in_opr'=> $d ->change_in_opr,
				'new_opr_level'=> $d ->new_opr_level
        	));
        	
        }
    }
}
