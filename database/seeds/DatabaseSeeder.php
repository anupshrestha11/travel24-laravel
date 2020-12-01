<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Contact;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [       
                'username'=>'traveladmin',
                'password'=>Hash::make('travel123'),
            ]);

            Contact::create(

[
    'email'=>'youremail@email.com',
    'phone'=>'9811111111,980111111',
    'address'=>'myaddress,city,whatever',
]
            );
    }
}
