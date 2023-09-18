<?php

namespace App\Http\Controllers;

use App\Models\FormAnswer;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateFormAnswerRequest;
use App\Models\Submission;
use Illuminate\Http\Request;

class FormAnswerController extends Controller
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
    public function store(Request $request)
    {
        $postData = $request->all();
        
        foreach ($postData as $key => $value){
            if ($key === '_token') {
                continue;
            }

            if ($key === 'sub') {
                Submission::create([
                    'formID' => $value
                ]);
            }
        }

        $subID = Submission::latest()->first()->id;
        $formID = Submission::latest()->first()->formID;

        foreach ($postData as $key => $value){
            if ($key === '_token' or $key === 'sub')  {
                continue;
            } else{
                if (is_a($value, 'Illuminate\Http\UploadedFile')) {
                    // Jika nilai adalah file, upload dan simpan ke direktori "uploaded_answer"
                    $path = $value->store('answers-files');
                    FormAnswer::create([
                        'formID' => $formID,
                        'subID' => $subID,
                        'questionID' => $key,
                        'answer' => $path
                    ]);
                } else {
                    FormAnswer::create([
                        'formID' => $formID,    
                        'subID' => $subID,
                        'questionID' => $key,
                        'answer' => $value
                    ]);
                }
            }
        }

        return redirect('/')->with('status', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(FormAnswer $formAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FormAnswer $formAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormAnswerRequest $request, FormAnswer $formAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormAnswer $formAnswer)
    {
        //
    }
}
