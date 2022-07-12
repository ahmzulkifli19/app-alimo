<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'role';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'role_name',
    ];

    public function users()
    {
        return $this->hasMany(Users::class);
    }
}
