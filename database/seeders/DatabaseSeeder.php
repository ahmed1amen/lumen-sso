<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        User::create([
'uuid'=>Str::uuid()->toString(),
'name'=>'Ahmed Amen',
'family_name'=>'Amen',
'middle_name'=>'Ahmed',
'nickname'=>'Amen',
'preferred_username'=>'ahmed1amen',
'picture'=>'https://i.picsum.photos/id/113/200/300.jpg?hmac=DvsBBpPushDywwuMaEX4gQacembMMccz2r-xKWuO82k',
'email'=>'ahmed1amen.g@Gmail.com',
'gender'=>'male',
        ]);



    }
}
