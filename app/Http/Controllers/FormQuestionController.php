<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormQuestion;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormQuestionRequest;
use App\Http\Requests\UpdateFormQuestionRequest;

class FormQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFormQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $form = Form::find($id);
        return(view('UserViewForm',['form' => $form]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormQuestion $formQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormQuestionRequest $request, FormQuestion $formQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormQuestion $formQuestion)
    {
        //
    }
}
