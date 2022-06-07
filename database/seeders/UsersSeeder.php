<?php

namespace Database\Seeders;

use App\Models\Cita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Rol;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create(
            [
                'email' =>'cruzjean52@gmail.com',
                'password' => bcrypt('12345678'),
                'roles_id'=> '1',
    
            ]
           
            
            );
        User::create(
            [
                'email' =>'oevr1997@gmail.com',
                'password' => bcrypt('12345678'),
                'roles_id'=> '2',
    
            ]
           
            
            );


    }
}
