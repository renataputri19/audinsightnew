<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GapAnalysis extends Model
{
    use HasFactory;

    protected $fillable = ['sub_sub_clause_id', 'doc_exist_done', 'doc_exist_not_done', 'doc_not_exist_done', 'doc_not_exist_not_done', 'action_plan'];

    public function subSubClause()
    {
        return $this->belongsTo(SubSubClause::class);
    }
}
