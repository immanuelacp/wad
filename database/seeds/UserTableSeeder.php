<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Admin', 
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin123'),
            'address'=>'Bandung',
            'phone'=>'082216650769',
            'level'=>'Admin'
        ]);
    }
}
