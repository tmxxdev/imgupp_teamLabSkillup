<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = ['github_id', 'avaterfile'];
}