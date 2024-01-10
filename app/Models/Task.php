<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'is_done'
    ];

    protected $casts = [
      'is_done' => 'boolean'
    ];

//    protected $hidden = [
//        'updated_at',
//    ];

    public function creator():BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }
}
