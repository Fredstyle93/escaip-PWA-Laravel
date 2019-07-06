<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creation de 5 utilisateurs
        factory(User::class, 5)->create();

        $userFred = new User();
        $userFred->name = "Frédéric";
        $userFred->username = "Fredstyle";
        $userFred->email = "fred.beaulieu123@gmail.com";
        $userFred->password = bcrypt("0000");
        $userFred->save();
    }
}
