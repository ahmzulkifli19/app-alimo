<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    use HasFactory;

    protected $table = 'planning';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'initiatives_id',
        'division',
        'pic',
        'start_date',
        'due_date',
        'progress',
    ];

    public function initiatives()
    {
        return $this->belongsTo(Initiatives::class);
    }
}
