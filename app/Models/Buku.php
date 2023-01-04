<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku'; // deklarasi untuk memberi tahu bahwa nama tabelnya buku
    protected $guarded = []; // mengambil semua field kecuali yang ditulis didalam list
    protected $primaryKey = 'id_buku'; // deklarasi primary key
    // public $timestamps = false;
}
