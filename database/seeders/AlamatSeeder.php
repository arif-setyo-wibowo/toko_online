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
        DB::table('alamat')->insert(
            [
                [
                    'id' => '9aff2012-0497-4e70-b45c-278de94ee958',
                    'user_id' => '9afdd8c8-4d03-473d-a17f-5b16f653de5f',
                    'nama_alamat' => 'Rumah',
                    'pemilik_alamat' => 'itboy',
                    'alamat' => 'Surabya',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],[
                    'id' => '9aff2b4e-3e66-41d3-a1a4-6e75394b9efe',
                    'user_id' => '9aff2ad4-6b8f-41e1-b58d-37a3d19121c1',
                    'nama_alamat' => 'rumah',
                    'pemilik_alamat' => 'bowo',
                    'alamat' => 'Semarang',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]
        );
    }
}
