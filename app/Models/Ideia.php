<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ideia extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'ideia_id';
    public $timestamps = false;
}