<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Question;
use App\Questionnare;
use Illuminate\Http\Request;


class QuestionController extends Controller
{
  
    public function create($questionnare)
    {
       // dd($questionnare);
        return view('admin.questions.create',[
            'questionnare' => $questionnare
        ]);
    }

 
    public function store($questionnare)
    {
        //
        $questionnare = Questionnare::find($questionnare);
        //dd($questionnare);
        $data= request()->validate([
           'question.question' => 'required',
            'answers.*.answer' => 'required'
        ]);

        $question = $questionnare->questions()->create($data['question']);

        $question->answers()->createMany($data['answers']);

        return  redirect()->route('questionnares.show',[$questionnare]);
    }

   
   
    public function destroy(Questionnare $questionnare, Question $question)
    {
        //
        //dd( $questionnare);
        $question->answers()->delete();
        $question->delete();
        return redirect()->route('questionnares.show',[$questionnare]);
    }
}
