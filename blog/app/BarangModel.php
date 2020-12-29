<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    protected $table = 'stuff';
    //Disini kita memberitahu kalau tabel yang kita gunakan adalah tabel bernama stuff
    protected $primaryKey = 'kode_barang';
    //Disini kita akan memberitahu kalau pc kita adalah kode_barang bukan id
}
