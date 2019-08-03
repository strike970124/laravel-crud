<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::Class,50)->create(); 
       
        User::create([
            'name'      =>  'admin1',
            'email'     =>  'admin1@admin.com',
            'password'  =>  bcrypt('admin123'),                       
        ]);     
    }
}
