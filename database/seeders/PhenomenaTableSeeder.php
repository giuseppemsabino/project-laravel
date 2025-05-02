<?php

namespace Database\Seeders;

use App\Models\Phenomenon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhenomenaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $phenomena = [
            [
                'name' => 'Supermassive Black Holes',
                'description' => 'Massive black holes located at the centers of galaxies, influencing their dynamics and evolution.'
            ],
            [
                'name' => 'Spiral Arms',
                'description' => 'Curved structures made of stars, gas, and dust that extend from the central nucleus of spiral galaxies.'
            ],
            [
                'name' => 'Central Bars',
                'description' => 'Linear structures of stars crossing the nucleus, common in barred spiral galaxies.'
            ],
            [
                'name' => 'Galactic Rings',
                'description' => 'Ring-shaped formations of stars and gas, often formed by gravitational interactions or resonances.'
            ],
            [
                'name' => 'Starburst Activities',
                'description' => 'Periods of intense star formation occurring over a short span of time within a galaxy.'
            ],
            [
                'name' => 'Galactic Mergers',
                'description' => 'Events where two or more galaxies combine due to gravitational attraction, forming a single larger galaxy.'
            ],
            [
                'name' => 'Tidal Tails',
                'description' => 'Extended streams of stars and gas pulled out from galaxies due to gravitational interactions.'
            ],
            [
                'name' => 'Gravitational Lenses',
                'description' => 'Galaxies whose mass bends light from background objects, magnifying and distorting them.'
            ],
            [
                'name' => 'Dark Matter Presences',
                'description' => 'Evidence of unseen mass affecting galaxy rotation and gravitational behavior, attributed to dark matter.'
            ],
            [
                'name' => 'X-ray Emissions',
                'description' => 'High-energy radiation emitted by hot gas, black holes, and energetic events in galaxies.'
            ]
        ];
        

        foreach($phenomena as $phenomenon){
            $newPhenomenon = new Phenomenon();

            $newPhenomenon->name = $phenomenon['name'];
            $newPhenomenon->description = $phenomenon['description'] ;

            $newPhenomenon->save();
        };

    }
}
