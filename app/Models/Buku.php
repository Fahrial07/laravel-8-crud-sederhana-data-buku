<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $fillable = array(
        'judul_buku',
        'pengarang',
        'jml_halaman',
        'tahun_terbit',
        'penerbit'
    );
    // protected $guarded = array(
    //     'id_buku'
    // );

    public function getBuku()
    {
        $buku = Buku::all();
        return $buku;
    }
}
