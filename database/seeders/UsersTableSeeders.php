<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            // [
            //     'nama' => 'Rizki',
            //     'email' => 'rizki@gmail.com',
            //     'password' => Hash::make('12345'),
            //     'jenis_kelamin' => 'laki-laki',
            //     'tgl_lahir' => '2022-02-22',
            //     'level' => 'user'
            // ],
            [
                'nama' => 'Ardian',
                'email' => 'ardian@gmail.com',
                'password' => Hash::make('123456'),
                'jenis_kelamin' => 'laki-laki',
                'tgl_lahir' => '2022-02-22',
                'level' => 'admin'
            ]
        );
    }
}
