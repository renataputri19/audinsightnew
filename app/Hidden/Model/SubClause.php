<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubClause extends Model
{
    use HasFactory;

    protected $fillable = ['clause_id', 'number', 'title'];

    public function clause()
    {
        return $this->belongsTo(Clause::class);
    }

    public function subSubClauses()
    {
        return $this->hasMany(SubSubClause::class);
    }
}

