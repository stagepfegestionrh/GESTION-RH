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
        User::create([
            'email' => 'walid@gmail.com',
            'name' => 'walid ar',
            'role' => 'admin',
            'password' => bcrypt('okokokok')
        ]);

        User::create([
            'email' => 'araissi@gmail.com',
            'name' => 'wa araissi',
            'role' => 'user',
            'password' => bcrypt('okokokok')
        ]);

        User::create([
            'email' => 'obm@gmail.com',
            'name' => 'obm obm',
            'role' => 'user',
            'password' => bcrypt('okokokok')
        ]);
    }
}
