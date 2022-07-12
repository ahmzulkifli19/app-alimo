<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Initiatives extends Model
{
    use HasFactory;

    protected $table = 'initiatives';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'project_code',
        'name_project',
        'project_category',
        'year',
        'priority',
        'client',
        'email',
        'description',
    ];

    public function assignment()
    {
        return $this->hasMany(Assignment::class);
    }

    public function planning()
    {
        return $this->hasMany(Planning::class);
    }

    public function initiatives()
    {
        return $this->hasMany(Planning::class);
    }

    public function execution()
    {
        return $this->hasMany(Execution::class);
    }
}
