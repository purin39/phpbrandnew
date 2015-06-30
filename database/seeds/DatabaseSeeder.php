<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        $range = range(1,100);
        array_walk($range,function($index){
            \App\Eloquent\ProductEloquent::create([
                "name" => "サンプル商品$index",
                "price" => mt_rand(12,98)*100,
                "amount" => mt_rand(1,100)
            ]);
        });
		// $this->call('UserTableSeeder');
	}

}
