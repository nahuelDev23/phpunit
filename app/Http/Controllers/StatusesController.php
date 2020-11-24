<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatusesController extends Controller
{
    public function store(Request $request)
    {
        request()->validate([
            'body'=>'required | min:5'
        ]);

        $status = new Status();
        $status->body = $request->body;
        $status->user_id = Auth::id();
        $status->save();
        #return Inertia\Inertia::render('Dashboard');
        return response()->json(['body'=> $status->body]);
    }
}
