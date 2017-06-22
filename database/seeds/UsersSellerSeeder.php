<?php

use Illuminate\Database\Seeder;

class UsersSellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('seller');

        $this->command->info('User table seeded!');
    }

}

class seller extends Seeder {

    public function run()
    {
        DB::table('token')->delete();

        User::create(['email' => 'foo@bar.com']);
    }
}
