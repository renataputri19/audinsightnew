<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Explanation extends Model
{
    use HasFactory;

    protected $fillable = ['sub_sub_clause_id', 'explanation'];

    public function subSubClause()
    {
        return $this->belongsTo(SubSubClause::class);
    }
}
