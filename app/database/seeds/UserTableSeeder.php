// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'John Test',
            'username' => 'johntest',
            'email'    => 'john@test.com',
            'password' => Hash::make('password'),
        ));
    }
}