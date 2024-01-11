<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provincia extends Model
{
    use HasFactory, SoftDeletes, UuidTrait;

    public $incrementing = false;

    protected $keyType = 'uuid';
    
    protected $fillable = ['nome_provincia'];

    public function municipios()
    {
        return $this->hasMany(Municipio::class);
    }

}
