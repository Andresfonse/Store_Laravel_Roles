<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Todosseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$useradmin=User::create([
'name'=> 'admininstrador Andres',
'email'=> 'admin@gmail.com',
'password'=>Hash::make('admin'),
'fullacces'=>'yes',
'codigo'=>'adm1',
        ]);
$user1=User::create([
    'name'=> 'Usuario 1',
    'email'=> 'marcos@gmail.com',
    'password'=>Hash::make('marcos'),
    'fullacces'=>'no',
    'codigo'=>'casa1',
]);




    }
}
