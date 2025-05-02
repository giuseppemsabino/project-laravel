<?php

namespace Database\Seeders;

use App\Models\Galaxy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalaxiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galaxies =  [
            [
                'name' => 'Via Lattea',
                'diameter' => 105700,
                'mass' => 1.5e12,
                'age' => 13
            ],
            [
                'name' => 'Andromeda (M31)',
                'diameter' => 220000,
                'mass' => 1.2e12,
                'age' => 10
            ],
            [
                'name' => 'Galassia Sombrero (M104)',
                'diameter' => 50000,
                'mass' => 8e11,
                'age' => 10
            ],
            [
                'name' => 'Messier 87 (M87)',
                'diameter' => 240000,
                'mass' => 2.7e12,
                'age' => 13
            ],
            [
                'name' => 'NGC 1300',
                'diameter' => 110000,
                'mass' => 1e11,
                'age' => 12
            ],
            [
                'name' => 'NGC 4038/4039 (Antennae)',
                'diameter' => 65000,
                'mass' => 4e11,
                'age' => 6
            ],
            [
                'name' => 'M82 (Galassia Sigaro)',
                'diameter' => 37000,
                'mass' => 1e10,
                'age' => 12
            ],
            [
                'name' => 'NGC 4622',
                'diameter' => 100000,
                'mass' => 1e11,
                'age' => 11
            ],
            [
                'name' => 'Galassia Triangolo (M33)',
                'diameter' => 60000,
                'mass' => 5e10,
                'age' => 12
            ],
            [
                'name' => 'NGC 6744',
                'diameter' => 175000,
                'mass' => 2e11,
                'age' => 10
            ]
        ];
        foreach($galaxies as $galaxy){

            $newGalaxy = new Galaxy();
            
            $newGalaxy->name = $galaxy['name'];
            $newGalaxy->diameter = $galaxy['diameter'];
            $newGalaxy->mass = $galaxy['mass'];
            $newGalaxy->age = $galaxy['age'];
            
            $newGalaxy->save();
        }
    }
}
