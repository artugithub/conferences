<?php

namespace App\Http\Controllers;

use App\Models\conference;
use Illuminate\Http\Request;

class GuestListController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();

        return view('guest_list', compact('conferences'));
    }
}
