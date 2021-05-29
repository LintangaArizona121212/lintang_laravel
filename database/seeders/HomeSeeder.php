<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Home();
        $mhs1->nbi = "1461900219";
        $mhs1->nama_mhs = "lintang Ragadanu A";
        $mhs1->save();

        $mhs2 = new Home();
        $mhs2->nbi = "1461900222";
        $mhs2->nama_mhs = "Arizona";
        $mhs2->save();

    }
}
