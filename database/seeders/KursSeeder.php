<?php

namespace Database\Seeders;

use App\Models\Kurs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $k1= new Kurs();
        $k1->jezik="Engleski";
        $k1->nivo="A1";
        $k1->cena=15000;
        $k1->save();

        $k1= new Kurs();
        $k1->jezik="Engleski";
        $k1->nivo="A2";
        $k1->cena=15000;
        $k1->save();

        $k1= new Kurs();
        $k1->jezik="Engleski";
        $k1->nivo="B1";
        $k1->cena=16000;
        $k1->save();

        $k1= new Kurs();
        $k1->jezik="Engleski";
        $k1->nivo="B2";
        $k1->cena=17000;
        $k1->save();


        $k1= new Kurs();
        $k1->jezik="Nemacki";
        $k1->nivo="A1";
        $k1->cena=15000;
        $k1->save();

        $k1= new Kurs();
        $k1->jezik="Nemacki";
        $k1->nivo="A2";
        $k1->cena=15000;
        $k1->save();

        $k1= new Kurs();
        $k1->jezik="Nemacki";
        $k1->nivo="B1";
        $k1->cena=16000;
        $k1->save();

        $k1= new Kurs();
        $k1->jezik="Nemacki";
        $k1->nivo="B2";
        $k1->cena=17000;
        $k1->save();

    }
}
