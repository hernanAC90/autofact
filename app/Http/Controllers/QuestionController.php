<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index()
    {
        return Question::all();
    }


    public function store(Request $request)
    {
        $question = new Question();
        $question->answers = serialize($request->all());
        $question->user_id = Auth::user()->id;
        $question->save();
        return response()->json([
            'message' => 'Se han guardado correctamente sus respuestas',
        ]);
    }


}
