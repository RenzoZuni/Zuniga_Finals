<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    public function index()
    {
        $users = User::all();
        return view('admin', ['users' => $users]);
    }
}
