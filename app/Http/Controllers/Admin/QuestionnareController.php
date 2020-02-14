<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Questionnare;
use Illuminate\Http\Request;

class QuestionnareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $questionnares = Questionnare::all();
        return  view('admin.questionnares.index',[
            'questionnares' => $questionnares
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questionnares.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'required',
            'purpose' => 'required'
        ]);

        auth()->user()->questionnares()->create($data);

        return redirect()->route('questionnares.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Questionnare  $questionnare
     * @return \Illuminate\Http\Response
     */
    public function show(Questionnare $questionnare)
    {
        $questionnare->load('questions.answers');
        return view('admin.questionnares.show', compact('questionnare'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Questionnare  $questionnare
     * @return \Illuminate\Http\Response
     */
    public function edit(Questionnare $questionnare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Questionnare  $questionnare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Questionnare $questionnare)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Questionnare  $questionnare
     * @return \Illuminate\Http\Response
     */
    public function destroy(Questionnare $questionnare)
    {
        //
    }
}
