<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = ['sub_sub_clause_id', 'attachments'];

    protected $casts = [
        'attachments' => 'array',
    ];

    public function subSubClause()
    {
        return $this->belongsTo(SubSubClause::class);
    }
}

