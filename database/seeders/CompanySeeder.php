<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $companies = [];

        foreach (range(1, 10) as $index){
            $company = [
                'name' => $name = "Company $index",
                'address' => "Address $name",
                'website' => "Website $name",
                'email' => "Email $name",
                'create_at' => now(),
                'update_at' => now(),
            ];
            $companies[] = $company;
        }

        DB::table('companies')->delete();
        DB::table('companies')->insert($companies);
    }
}
