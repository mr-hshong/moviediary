<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{

    public function run()
    {

        //Movie::truncate();
        $json = File::get("database/data/movie.json");
        $data = json_decode($json);
        foreach ($data as $obj_1){
            if(isset($obj_1->movieList)){
                foreach($obj_1->movieList as $obj)
                {

                    Movie::create([
                        'code' => (string)$obj->movieCd,
                        'title' => (string)$obj->movieNm,
                        'title_en' => (string)$obj->movieNmEn,
                        'release_date' => (string)$obj->openDt
                    ]);
                }
            }
        }


    }
}
