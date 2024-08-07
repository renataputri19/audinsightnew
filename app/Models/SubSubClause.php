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

    public function requirements()
    {
        return $this->hasMany(Requirement::class);
    }

    public function gapAnalyses()
    {
        return $this->hasMany(GapAnalysis::class);
    }

    public function explanations()
    {
        return $this->hasMany(Explanation::class);
    }
}
