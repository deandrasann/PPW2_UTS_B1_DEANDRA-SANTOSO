<?php

namespace Database\Seeders;
use App\Models\PemainMU;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MUSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * $table->id();

     */
       // $table->string('nama');
            // $table->string('no_punggung');
            // $table->string('posisi');
    public function run(): void
    {
        for ($i=0; $i<10;$i++){
            PemainMU::create([
                'nama'=> fake() ->sentence(2),
                'no_punggung'=> fake() -> numberBetween(1,13),
                'posisi'=> fake()-> sentence(1),
            ]);
        }
    }
}
