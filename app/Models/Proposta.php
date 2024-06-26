<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'proposta_id';
    public $timestamps = false;

    public function ideia()
    {
        return $this->belongsTo(Ideia::class, 'proposta_ideiaID');
    }
}
