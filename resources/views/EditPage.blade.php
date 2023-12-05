<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Maker</title>
    <link rel="stylesheet" href="/editpage.css" />
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body>
    <header>
        <h1>Form Editor</h1>
    </header>
    <section class="layout">
        <div class="Split1">
            <div class="container">
                <form id="formCreator" action="/editForm/{{$form->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-containerr">
                        <img src="/image/Humic-Logi.png" alt="Banner">
                            <div class="input-judul">
                                <input type="file" id="fileInput" name="gambar" accept=".png,.jpg,.jpeg"
                                style="display: none;">
                            <label for="fileInput" class="upload-icon"><i class="fa-solid fa-image"></i></label>
                            <label for="judul">Judul Form:</label>
                            <input type="text" id="judul" name="judul" placeholder="{{$form->judul}}" value="{{old('judul',$form->judul)}}">
                            <img id="imagePreview" src="/storage/{{$form->gambar}}" style="max-width: 300x; max-height: 300px;">
                        </div>
                        
                        <label for="deskripsi">Deskripsi:</label>
                        <textarea class="deskripsi" id="deskripsi" name="deskripsi" rows="3" required>{{$form->deskripsi}}</textarea>
                    </div>
                    
                    {{-- asdahsdasjkd --}}
                    
                    @foreach ($form->questions as $item)
                    @if ($item->type == 'teks')
                        <div class="form-container">
                            <input class="text_question" placeholder="{{$item->question}}" type="text" name="pertanyaan[]" value="{{old('pertanyaan', $item->question)}}" >
                            <input type="hidden" name="rujukan[]" value="{{$item->id}}">
                            <input type="hidden" name="tipe[]" value="teks">
                            <input class="jawaban" placeholder="Jawaban" type="text" name="jawaban" disabled>
                        </div>
                        @endif

                        @if ($item->type=='file')
                            <div class="form-container">
                                <input class="text_question" placeholder="{{$item->question}}" type="text" name="pertanyaan[]" value="{{old('pertanyaan', $item->question)}}" >
                                <input type="hidden" name="rujukan[]" value="{{$item->id}}">
                                <input type="hidden" name="tipe[]" value="file">
                                <div>
                                    <input class="jawaban" placeholder="Upload File" type="text" name="jawaban" disabled>
                                </div>
                            </div>
                        @endif

                        @if ($item->type=='ttd')
                            <div class="form-container">
                                <p>{{$item->question}}</p>
                                <input class="text_question" placeholder="{{$item->question}}" type="text" name="pertanyaan[]" value="{{old('pertanyaan', $item->question)}}" >
                                <input type="hidden" name="rujukan[]" value="{{$item->id}}">
                                <input type="hidden" name="tipe[]" value="ttd">
                                <div>
                                    <textarea rows="1" cols="30" disabled></textarea>
                                </div>
                            </div>
                        @endif

                        @if ($item->type=='choice')
                            <div class="form-container">
                                <p>{{$item->question}}</p>
                                <input class="text_question" placeholder="{{$item->question}}" type="text" name="pertanyaan[]" value="{{old('pertanyaan', $item->question)}}" >
                                <input type="hidden" name="rujukan[]" value="{{$item->id}}">
                                <input type="hidden" name="tipe[]" value="choice">
                                @foreach ($item->options as $opsi)
                                    
                                <div class="opsi-jawaban">
                                    <span class="custom-checkbox"></span>
                                    <input type="hidden" name="tanda-opsi[]" value="{{$opsi->id}}">
                                    <input class="jawaban" placeholder="{{$opsi->option}}" type="text" name="opsi[]" value="{{old('opsi',$opsi->option)}}">
                                    
                                </div>
                                @endforeach
                            </div>
                        @endif

                    @endforeach
                    <div class="form-container">
                        <div class="button-container">
                            <a href="/"><button type="button" id="cancelForm">Cancel</button></a>
                            <button type="submit" id="btn-txt">Simpan</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>




        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
            integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
        </script>

        <script src="/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>
</body>

</html>
