<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $user = new User;
        $user->name = 'admin';
        $user->level = 'admin';
        $user->status = 'aktif';
        $user->password = Hash::make(123);
        $user->save();
    }
}
