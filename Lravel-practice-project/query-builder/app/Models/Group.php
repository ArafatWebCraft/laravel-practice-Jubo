<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $primaryKey = 'groups_id';
    public function members()
    {
        return $this->hasMany(Member::class, 'groups_id');
    }
}
