<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    protected $signature = 'make:admin';
    protected $description = 'Create an admin user';

    public function handle()
    {
        $name = $this->ask('Nama admin');
        $email = $this->ask('Email admin');
        $password = $this->secret('Password admin');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'role' => 'admin',
        ]);

        $this->info('Admin berhasil dibuat: ' . $user->email);
    }
}
