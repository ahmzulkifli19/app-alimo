<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $table = 'assignment';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'initiatives_id',
        'assignment',
    ];

    public function initiatives()
    {
        return $this->belongsTo(Initiatives::class);
    }

    public function assignment()
    {
        return $this->hasMany(Planning::class);
    }
}
