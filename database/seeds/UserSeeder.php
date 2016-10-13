<?php

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
        $new = new App\User;
        $new->name = "CyberClick";
        $new->email = "lembagax@gmail.com";
        $new->password = bcrypt("secret");
        $new->key = bcrypt("lembagax@gmail.com");
        $new->save();
    }
}
