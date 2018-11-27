<?php

use Illuminate\Database\Seeder;
use App\Vehiculo;
class VehiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Vehiculo::class,100)->create();
    }
}
