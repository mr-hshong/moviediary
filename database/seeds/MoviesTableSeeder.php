<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{

    public function run()
    {

        Movie::truncate();
        $json = File::get("database/data/movie.json");
        $data = json_decode($json);
        foreach ($data as $obj_1){
            if(isset($obj_1->movieList)){
                foreach($obj_1->movieList as $obj)
                {
                    print_r($obj->movieCd);

                    Movie::create([
                        'movieCd' => (string)$obj->movieCd,
                        'movieNm' => (string)$obj->movieNm,
                        'movieNmEn' => (string)$obj->movieNmEn,
                        'prdtYear' => (string)$obj->prdtYear,
                        'openDt' => (string)$obj->openDt,
                        'typeNm' => (string)$obj->typeNm,
                        'prdtStatNm' => (string)$obj->prdtStatNm,
                        'nationAlt' => (string)$obj->nationAlt,
                        'genreAlt' => (string)$obj->genreAlt,
                        'repNationNm' => (string)$obj->repNationNm,
                        'repGenreNm' => (string)$obj->repGenreNm,
                        'directors' => (string)json_encode($obj->directors),
                        'companys' => (string)json_encode($obj->companys)
                    ]);
                }
            }
        }


    }
}
