<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\UpdateFormRequest;
use App\Models\FormOption;
use App\Models\FormQuestion;
use Symfony\Component\HttpFoundation\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function store(Request $request){

        
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar')->store('post-images');
            $imagePath = $image;
        } else {
            $imagePath = 'post-images/default.png';
        }

        $judul = $request->judul;
        $deskripsi = $request->deskripsi;
        $pertanyaan = $request->pertanyaan;
        $rujukan = $request->rujukan;
        $tipe = $request->tipe;
        $tanda = $request->input("tanda-opsi");
        $opsi = $request->opsi;

        Form::create([
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'gambar' => $imagePath
        ]);

        $formID = Form::latest()->first()->id;
        for ($i = 0; $i < count($pertanyaan);$i++){
            FormQuestion::create([
                'formID' => $formID,
                'question' => $pertanyaan[$i],
                'type' => $tipe[$i]
            ]);

            $mark = $rujukan[$i];
            if ($tipe[$i] == 'choice'){
                for ($j = 0; $j < count($opsi); $j++ ){
                    if($tanda[$j] == $mark){
                        $questionID = FormQuestion::where('question', $pertanyaan[$i])->latest()->first()->id;
                        FormOption::create([
                            'questionID' => $questionID,
                            'option' => $opsi[$j]
                        ]);
                    }
                }
            }
        }

        return redirect('/')->with('status', 'Data berhasil disimpan.');


     }
    
    public function index()
    {
        //
        $forms = Form::latest()->get();

        return(view('Homepage',['forms' => $forms]));
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

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFormRequest $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $form = Form::find($id);

        // Jika form tidak ditemukan, mungkin Anda ingin menangani kasus ini sesuai kebutuhan Anda
        if (!$form) {
            return abort(404, 'Form not found');
        }

        // Hapus semua pertanyaan (Questions) yang terkait dengan form
        $questions = $form->Questions;

        foreach ($questions as $question) {
            // Hapus semua Options jika Options tidak null
            if ($question->Options) {
                $question->Options()->delete();
            }
        }


        $form->Questions()->delete();

        // Hapus semua jawaban (Answers) yang terkait dengan form
        $form->Answers()->delete();

        // Hapus semua pengiriman (Submissions) yang terkait dengan form
        $form->Submissions()->delete();

        // Akhirnya, hapus form itu sendiri
        $form->delete();

        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect()->route('home');
    }
}
