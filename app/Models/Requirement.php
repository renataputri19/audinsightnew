<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;

    protected $fillable = ['sub_sub_clause_id', 'document', 'policy', 'rule', 'process', 'implementation', 'procedure'];

    protected $casts = [
        'document' => 'array',
        'policy' => 'array',
        'rule' => 'array',
        'process' => 'array',
        'implementation' => 'array',
        'procedure' => 'array',
    ];

    public function subSubClause()
    {
        return $this->belongsTo(SubSubClause::class);
    }
}
