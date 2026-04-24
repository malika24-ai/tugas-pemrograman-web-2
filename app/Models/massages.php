<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['name', 'pengirim', 'penerima', 'judul_pesan', 'isi_pesan'])]
class massages extends Model
{
    /** @use HasFactory<\Database\Factories\MassagesFactory> */
    use HasFactory;
}
