<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //change commission
       Package::create([
        'id'=>1,
        'name' =>'free',
        'type' =>'free',
        'commission' =>2.5,
        'price'=>0,
       ]);
       Package::create([
        'id'=>2,
        'name' =>'paid',
        'type' =>'small',
        'commission' =>0,
        'price'=>111,
       ]);
       Package::create([
        'id'=>3,
        'name' =>'pid',
        'type' =>'middle',
        'commission' =>0,
        'price'=>222,
       ]);
       Package::create([
        'id'=>4,
        'name' =>'pid',
        'type' =>'big',
        'commission' =>0,
        'price'=>333,
       ]);
    }
}
