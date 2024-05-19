<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    
    public function store(Request $request)
    {
        $note = Note::create($request->all());

        return response()->json($note, 201);
    }
    
}
