<?php

use Illuminate\Database\Seeder;
use App\User;
use App\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function (User $user) {
            $user->news()->saveMany(factory(News::class, 10)->make());
        });
    }
}
