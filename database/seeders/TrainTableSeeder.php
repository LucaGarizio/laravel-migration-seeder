<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use PhpParser\Node\Expr\New_;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


     
    public function run()
    {   

        $train = new Train();
        $train -> nome ='trenitalia';
        $train -> luogo ='Torino Porta Nuova';
        $train -> orario_di_partenza ='2024/02/13 19:31:47';
        $train -> orario_di_arrivo ='2024/02/14 01:31:47';
        $train -> codice_treno ='7862518';
        $train -> numero_carrozze ='2';
        $train -> disponibile ='1';
        $train -> cancellato ='0';
       
        $train -> save();

        Train :: factory() -> count(20) -> create();
    }
}

