<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clause extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'title'];

    public function subClauses()
    {
        return $this->hasMany(SubClause::class);
    }
}
