<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert UserRole
        $roleId = (string) Str::uuid();
        DB::table('UserRole')->insert([
            'userRoleId' => $roleId,
            'namaRole' => 'superadmin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert UserCredentials
        $credentialsId = (string) Str::uuid();
        DB::table('UserCredentials')->insert([
            'credentialsId' => $credentialsId,
            'username' => 'farizan',
            'email' => 'farizan@gmail.com',
            'password' => Hash::make('123abc'),
            'isActive' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert UserProfile
        $userProfileId = (string) Str::uuid();
        DB::table('UserProfile')->insert([
            'userProfileId' => $userProfileId,
            'nama' => 'Farizan',
            'nomerHp' => '081234567890',
            'idPengguna' => '1234567890123456',
            'provinsi' => 'DKI Jakarta',
            'kota' => 'Jakarta Selatan',
            'jenisKelamin' => 'pria',
            'tanggLahir' => '1990-01-01',
            'user_credentials_id' => $credentialsId,
            'user_role_id' => $roleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
