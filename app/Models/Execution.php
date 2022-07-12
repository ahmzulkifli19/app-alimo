<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Execution extends Model
{
    use HasFactory;

    protected $table = 'execution';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'initiatives_id',
        'planning_id',
        'status',
        'progress',
    ];

    public function initiatives()
    {
        return $this->belongsTo(Initiatives::class);
    }

    public function planning()
    {
        return $this->belongsTo(Planning::class);
    }
}
