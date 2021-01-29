<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(PostalTableSeeder::class); //1
        //$this->call(UserTableSeeder::class); //2
        //$this->call(AdministratorTableSeeder::class); //2
        //$this->call(CompanyTableSeeder::class); //2
        //$this->call(CommunityTableSeeder::class); //3
        //$this->call(ChatTableSeeder::class); //4
        //$this->call(ContactTableSeeder::class); //5
        //$this->call(InfomationTableSeeder::class); //6
        //$this->call(EventTableSeeder::class); //6
        //$this->call(TrophyTableSeeder::class); //7
        //$this->call(TrophyacTableSeeder::class); //7
        //$this->call(SiteTableSeeder::class); //8
        //$this->call(ContactcoTableSeeder::class); //9
        //$this->call(GradesTableSeeder::class); //10
        //$this->call(GoodsTableSeeder::class); //11
        $this->call(OrderTableSeeder::class); //11
        $this->call(HelpTableSeeder::class); //12
    }
}
