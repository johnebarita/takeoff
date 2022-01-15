<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'John Doe','username'=>'john','email'=>'john@gmail.com','password'=>'$2y$10$rUd1ospcwd6c9tUzonWZi.oGwbHgMiIf0nSzjjmvCvU2x.D2wUDny']);
    }
}
