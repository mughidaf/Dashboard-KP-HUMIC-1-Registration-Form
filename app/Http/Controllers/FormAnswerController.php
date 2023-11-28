<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormAnswer;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateFormAnswerRequest;
use App\Models\FormQuestion;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
    public function show($id)
    {
        $form = Form::find($id);
        return view('ResponsePage',['form' => $form]);
    }
    public function detail($id)
    {
        $tanya = FormQuestion::find($id);
        $form = Form::find($tanya->formID);
        $cek= $form->Questions()
        ->whereRaw("LOWER(question) REGEXP '[[:<:]](nama|name)[[:>:]]'")->first();

        if ($cek) {
            $questionId = $cek->id;
        } else {
            $questionId = null;
        }
        
        $identitas = FormQuestion::find($questionId);

        return view('/MoreOption',['identitas' => $identitas,'question' => $tanya]);
    }

    public function openFile($filename){
        $filePath = 'Storage/' . $filename;

    // Periksa apakah file ada di penyimpanan
    if (Storage::exists($filePath)) {
        // Mengembalikan file ke browser untuk dibuka di tab baru
        return response()->file(storage_path('app/' . $filePath));
    } else {
        // Handle jika file tidak ditemukan
        return abort(404, 'File not found');
    }
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

    public function allData($id){
        $form = Form::find($id);
        return view('AllOption',['form' => $form]);
    }
}
