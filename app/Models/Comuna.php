<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comuna extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nome_comuna', 'municipio_id',
    ];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
    }

}
