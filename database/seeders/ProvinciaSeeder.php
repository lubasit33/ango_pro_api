<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Database\Seeder;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::create(['nome_provincia' => 'Bengo']);
        Provincia::create(['nome_provincia' => 'Benguela']);
        Provincia::create(['nome_provincia' => 'Bié']);
        Provincia::create(['nome_provincia' => 'Cabinda']);
        Provincia::create(['nome_provincia' => 'Cuando Cubango']);
        Provincia::create(['nome_provincia' => 'Cuanza Norte']);
        Provincia::create(['nome_provincia' => 'Cuanza Sul']);
        Provincia::create(['nome_provincia' => 'Cunene']);
        Provincia::create(['nome_provincia' => 'Huambo']);
        Provincia::create(['nome_provincia' => 'Huíla']);
        Provincia::create(['nome_provincia' => 'Luanda']);
        Provincia::create(['nome_provincia' => 'Lunda Norte']);
        Provincia::create(['nome_provincia' => 'Lunda Sul']);
        Provincia::create(['nome_provincia' => 'Malanje']);
        Provincia::create(['nome_provincia' => 'Moxico']);
        Provincia::create(['nome_provincia' => 'Namibe']);
        Provincia::create(['nome_provincia' => 'Uíge']);
        Provincia::create(['nome_provincia' => 'Zaire']);
    }

}
