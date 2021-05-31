<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Manga2 extends Model
{
    use HasFactory;

    public function getAll()
    {
        $mangas = DB::table('manga')->select('id_manga','titre','prix','couverture','nom_dessinateur','prenom_dessinateur','lib_genre')
        ->join('dessinateur','dessinateur.id_dessinateur', '=','manga.id_dessinateur')
        ->join('genre','genre.id_genre', '=','manga.id_genre')
        ->get();
        return $mangas;
    }
}
