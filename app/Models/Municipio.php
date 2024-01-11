<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Municipio extends Model
{
    use HasFactory, SoftDeletes, UuidTrait;

    public $incrementing = false;

    protected $keyType = 'uuid';
    
    protected $fillable = ['nome_municipio', 'provincia_id'];

    public function provincia()
    {
        return $this->belongsTo(Provincia::class);
    }

    public function comunas()
    {
        return $this->hasMany(Comuna::class);
    }

    public function distritos()
    {
        return $this->hasMany(Distrito::class);
    }

}
