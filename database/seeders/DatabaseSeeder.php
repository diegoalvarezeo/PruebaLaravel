<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use App\Models\Pais;
use App\Models\Region;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(Roleseeder::class);
        $this->call(UserSeeder::class);
        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@test.cl',
            'password' => Hash::make(12345678),
        ])->assignRole('admin');

        User::factory(10)->create()->each(function ($user) {
            $user->assignRole("developer");
        });
















         /* seeder paises */
        Pais::create([
            'name' => 'Chile',

        ]);

        Pais::create([
            'name' => 'Colombia',
        ]);

        $pais = Pais::where('name', 'Chile')->first();
        /* Seeder regiones ------------------------------------------*/
        Region::create([
            'name' => 'Chile 1 region 1',
            'pais_id' => $pais->id,

        ]);
        Region::create([
            'name' => 'Chile 2 region 2',
            'pais_id' => $pais->id,
        ]);
        $pais2 = Pais::where('name', 'Colombia')->first();

        Region::create([
            'name' => 'Colombia 1 region 1',
            'pais_id' =>$pais2->id,
        ]);

        Region::create([
            'name' => 'Colombia 2 region 2',
            'pais_id' => $pais2->id,
        ]);


        /* seeder ciudades */
        $region1 = Region::where('name','Chile 1 region 1')->first();

        Ciudad::create([
            'name' => 'Ciudad1 chile 1 region 1',
            'region_id' => $region1->id,
        ]);

        Ciudad::create([
            'name' => 'Ciudad2 chile 1 region 1',
            'region_id' => $region1->id,
        ]);
        $region2 = Region::where('name', 'Chile 2 region 2')->first();
        Ciudad::create([
            'name' => 'Ciudad chile2 region 2',
            'region_id' => $region2->id,

        ]);

        Ciudad::create([
            'name' => 'Ciudad chile2  region 2',
            'region_id' => $region2->id,
        ]);
        $region3 = Region::where('name', 'Colombia 1 region 1')->first();


        Ciudad::create([
            'name' => 'Ciudad Colombia1 region 1',
            'region_id' => $region3->id,
        ]);

        Ciudad::create([
            'name' => 'Ciudad Colombia1  region 2',
            'region_id' => $region3->id,
        ]);
        $region4 = Region::where('name', 'Colombia 2 region 2')->first();

        Ciudad::create([
            'name' => 'Ciudad Colombia2 region 1',
            'region_id' => $region4->id,
        ]);

        Ciudad::create([
            'name' => 'Ciudad Colombia2  region 2',
            'region_id' => $region4->id,
        ]);

    }
}
