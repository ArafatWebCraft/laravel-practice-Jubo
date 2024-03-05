<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $primaryKey = 'members_id';
    public function group()
    {
        return $this->belongsTo(Group::class, 'groups_id');
    }
}
