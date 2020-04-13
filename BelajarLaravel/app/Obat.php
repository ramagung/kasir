<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    protected $table='barang';
    protected $primaryKey='Id_barang';
    protected $fillable=['namabarang','jenisbarang','harga'];
}