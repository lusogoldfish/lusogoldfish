<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Verificar se o usuário admin já existe
        $adminUser = User::where('email', 'lusogoldfish@gmail.com')->first();

        if (! $adminUser) {
            // Criar o usuário admin se não existir
            User::create([
                'name' => 'LusoGoldFish Admin',
                'email' => 'lusogoldfish@gmail.com',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]);
        }
    }
}
