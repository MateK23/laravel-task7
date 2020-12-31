<?php

use Illuminate\Database\Seeder;

class PhonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Request $request)
    {
        $phoneNumbers = [[577564563], [574563453]];

        foreach ($phoneNumbers as $number) {
            Phone::create(['phoneNumber' => $number]);
        }
    }
}
