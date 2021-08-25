<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $faker =Faker::create();
        foreach(range(1,1000000) as $index){

        DB::table("users")->insert([
            "name" => $faker->name(),
            "email" => $faker->unique()->email,
            "age" => $faker->numberBetween(20, 80),
            "gender" => $faker->randomElement(["male", "female"]),
            'password'=>$faker->password(),
            'created_at'=>$faker->dateTimeBetween('-20 days', now())
        ]);
    }



}

}

