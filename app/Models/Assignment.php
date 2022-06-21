<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $table = 'initiatives';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'assignment',
    ];

    public function initiatives()
    {
        return $this->belongsTo(Initiatives::class);
    }
}
