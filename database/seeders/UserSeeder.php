<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'id' => '9afdd8c8-4d03-473d-a17f-5b16f653de5f',
                    'username' => 'itboy.web',
                    'email' => 'arif13.aw@gmail.com',
                    'password' => '$2y$10$.i20u9QKj6C0qK7hz.XH8efQIM6t6N77sraoajaFUf/fEfv9Pf7Ce',
                    'phone' => '081805404140',
                    'dob' =>'2024-01-03',
                    'gender' =>  'laki-laki',
                    'image' =>'uploads/6594236ccfa65.png',
                    'google_id' =>  NULL,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'id' => '9aff2ad4-6b8f-41e1-b58d-37a3d19121c1',
                    'usename' => 'bowo',
                    'email' => 'bowo@gmail.com',
                    'password' => '$2y$10$Nve6KC2gmBwq.jPAS1O1C.xRYYZf48oShtBmT3k57zbI2LLNSnE4K',
                    'phone' => '08127732832',
                    'dob' =>'2024-01-03',
                    'gender' =>  'laki-laki',
                    'image' => 'uploads/659423d02fce7.jfif',
                    'google_id' =>  NULL,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]
        );
    }
}
