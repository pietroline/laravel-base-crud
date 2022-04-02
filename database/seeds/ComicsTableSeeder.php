<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // importo i dati da inserire con un ciclo in un db
        $comics = config("comics");

        foreach($comics as $comic){
            $paper = new Comic();

            $paper->thumb = $comic["thumb"];
            $paper->title = $comic["title"];
            $paper->price = $comic["price"];
            $paper->series = $comic["series"];

            $date = strtotime($comic["sale_date"]);
            $newFormat = date("Y-m-d", $date);
            $paper->sale_date = $newFormat;

            $paper->type = $comic["type"];
            $paper->description = $comic["description"];

            $paper->save();
        }
    }
}
