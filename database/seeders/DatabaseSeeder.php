<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Demo Admin",
            'email' => "admin@demo.com",
            'password' => Hash::make('password'),
            'created_at' => Carbon::now()
        ]);
        $case_types = [
            "ল্যান্ডমার্ক ট্রাইবুনাল মামলা",
            "ডিগ্রি মামলা",
            "১৫০ ধারা মামলা",
            "অন্যান্য"

        ];
        $case_statuses =[
            "ULAO/ULSAO এর নিকট রিপোর্ট এর জন্য প্রেরণ করা হয়েছে",
            "Survery এর নিকট রিপোর্ট এর জন্য প্রেরণ করা হয়েছে",
            "শুনানীর জন্যে দিন ধার্য হয়েছে",
            "মামলার চূড়ান্ত আদেশ হয়েছে এবং নিস্পত্তি হয়েছে"
        ];

        //insert the types
        foreach ($case_types as $type) {
            DB::table('case_types')->insert([
                'name' => $type,
                'created_at' => Carbon::now()
            ]);
        }

        //insert the statuses
        foreach ($case_statuses as $status) {
            DB::table('case_statuses')->insert([
                'title' => $status,
                'created_at' => Carbon::now()
            ]);
        }



    }
}
