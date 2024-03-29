<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB as DB;

class DataBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i < 20; $i++) {
            DB::table('tbl_barang')->insert([
                'nama_barang' => $faker
            ]);
        }
    }
}
