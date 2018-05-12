<?php

namespace App;

use App\Http\Controllers\UsersController;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    public function writer(){
        return $this->belongsTo(User::class);

    }
}

