<?php

use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use App\Company;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*        $param = [
            "company_id" => "1",
            "password" => "A000",
            "company" => "クエスト",
        ];
        DB::table("company")->insert($param);
*/
        factory(Company::class, 20)->create();
    }
}
