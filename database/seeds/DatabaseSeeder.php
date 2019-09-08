<?php
// database/seeds/DatabaseSeeder.php 
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,  // 追加
            ArticlesTableSeeder::class,
        ]);
    }
}
