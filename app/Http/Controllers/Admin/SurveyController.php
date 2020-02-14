<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Questionnare;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    //
    public function show(Questionnare $questionnare)
    {
        $questionnare->load('questions.answers');

        return view('admin.surveys.show',compact('questionnare'));
    }

    public function store(Questionnare $questionnare)
    {
        $data = request()->validate([
            'responses.*.answer_id' => 'required',
            'responses.*.question_id' => 'required',
            'survey.name' => 'required',
            'survey.email' => 'required|email'

        ]);
        //dd(request()->all());
        $survey = $questionnare->surveys()->create($data['survey']);
        $survey->surveyresponses()->createMany($data['responses']);
        return redirect()->route('questionnares.index');
    }

}
