<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Users;

class testcontroller extends Controller
{
    public function test() {
        return Users::all();
    }
}
