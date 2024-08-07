<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubClause extends Model
{
    use HasFactory;

    protected $fillable = ['sub_clause_id', 'number', 'title'];

    public function subClause()
    {
        return $this->belongsTo(SubClause::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }
}

