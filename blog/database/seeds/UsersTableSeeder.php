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
        $user = new User;
        $user->name = 'Remus Lupin';
        $user->email = 'wolf@wolf.com';
        $user->password = bcrypt('moon1234');
        $user->save();
        
        $admin = new User;
        $admin->name = 'Harry Potter';
        $admin->email = 'harry@potter.com';
        $admin->password = bcrypt('harry1234');
        $admin->save();
        
    }
}
