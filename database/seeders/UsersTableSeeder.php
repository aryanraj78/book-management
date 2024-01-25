<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => NULL,
                'name' => 'Aryan Raj',
                'email' => 'tapeshvatsa@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IjpewztINULmw2xdvDS0feWBeOxwhyPxMNAXURi41owum3Xb3Et1C',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2024-01-24 08:49:17',
                'updated_at' => '2024-01-24 08:49:17',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => NULL,
                'name' => 'Aryan Raj',
                'email' => 'tapeshvatsa1@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IjpewztINULmw2xdvDS0feWBeOxwhyPxMNAXURi41owum3Xb3Et1C',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2024-01-24 13:01:55',
                'updated_at' => '2024-01-24 13:01:55',
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 1,
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uQ0OXkpzfLjFwfsms/NvNusRJ4VW6Ktbzii1ROtqHgciT7s45iB96',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2024-01-25 08:14:58',
                'updated_at' => '2024-01-25 08:14:58',
            ),
        ));
        
        
    }
}