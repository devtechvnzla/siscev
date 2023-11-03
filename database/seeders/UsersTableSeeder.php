<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $user = new User;
        $user->name     = 'Administrador';
        $user->username = 'laradmin';
        $user->genero   = 'M';
        $user->lastname = 'Bandes';
        $user->email    = 'admin@mail.com';
        $user->password = \Hash::make('admin');
        $user->status   = 1; // (1) active (0)disabled
        $user->save();

        $user->assignRole('Tecnologia');


        $user = new User;
        $user->name     = 'Usuario';
        $user->username = 'gerente';
        $user->genero   = 'F';
        $user->lastname = 'Gerente';
        $user->email    = 'usuario@mail.com';
        $user->password = \Hash::make('admin');
        $user->status   = 1; // (1) active (0)disabled
        $user->save();

        $user->assignRole('Gerente');
    }
}
