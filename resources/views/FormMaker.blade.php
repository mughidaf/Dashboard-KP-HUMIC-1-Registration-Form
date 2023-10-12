<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Maker</title>
    <link rel="stylesheet" href="/styles.css" />
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  </head>
  <body>
    <header>
      <h1>Form Maker</h1>
    </header>
      <section class="layout">
        <div class="Split1">
          <div class="container">
            <form id="formCreator" action="storeForm" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-container">
                <div class="input-judul">
                  <input type="file" id="fileInput" name="gambar" accept=".png,.jpg,.jpeg" style="display: none;">
                    <label for="fileInput" class="upload-icon"><i class="fa-solid fa-image"></i></label>
                    <label for="judul">Judul Form:</label>
                    <input type="text" id="judul" name="judul" required>
                    <img id="imagePreview" src="#" style="max-width: 300x; max-height: 300px;">
                </div>
              
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="deskripsi" id="deskripsi" name="deskripsi" rows="3" required></textarea>
    
                <div class="dropdown">
                  <button class="dropdown-toggle" type="button" id="tambah-pertanyaan" data-bs-toggle="dropdown" aria-expanded="false">Tambah pertanyaan</button>
                  <ul class="dropdown-menu" aria-labelledby="tambah-pertanyaan">
                    <li><button type="button" class="d-block w-100 mb-1" id="tambah-teks" onclick="addText()">Teks</button></li>
                    <li><button type="button" class="d-block w-100 mb-1" id="tambah-pilihan" onclick="addChoice()">Choice</button></li>
                    <li><button type="button" class="d-block w-100 mb-1" id="tambah-file" onclick="addFile()">File</button></li>
                    <li><button type="button" class="d-block w-100" id="tambah-ttd" onclick="addTtd()">Sign</button></li>
                  </ul>
                  {{-- <button class="remove" type="button">Remove</button> --}}
                </div>
    
                <div class="button-container">
                  <button type="button" id="cancelForm">Cancel</button>
                  <button type="submit" id="submitForm">Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        {{-- Pemisah split scxreen --}}
        <div class="divider">
          <div class="half" id="teks-content">
            <div class="form-container">
              <img src="/image/Humic-Logi.png" alt="Banner">
              <div class="main">
                <h1>sadasdasd</h1>
                <hr>
                <p>asdasdasd</p>
              </div>
            </div>

            {{-- text --}}

            <div class="form-container" id="add-text" style="display: none">
              <div class="-mx-4 flex flex-wrap">
                  <div class="w-full">
                      <div class="mb-12">
                          <label class="mb-3 block text-base font-medium text-black">
                              question
                          </label>
                          <h4 style="color: red;">*</h4>
                          <div class="relative">
                              <input name={{--{{$tanya->id}}--}}  type="text" {{-- placeholder="{{$tanya->question}}" --}} class="input-text w-full rounded-md border border-form-stroke p-3 pl-12 text-black placeholder-[#929DA7] outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                              <span class="absolute top-1/2 left-4 -translate-y-1/2"></span>
                          </div>
                      </div>
                  </div>
              </div>
            </div>

            {{-- File --}}

            <div class="form-container" id="add-file" style="display: none">
                <div class="image-upload">
                    {{-- <input type="file" name="{{$tanya->id}}" id="{{$tanya->id}}" onchange="fileValue(this)" > --}}
                    <input type="file" name="" id="" onchange="fileValue(this)" >
                    <label for="" class="upload-field" id="file-label">
                        <div class="file-thumbnail">
                            <div id="icon-show" class="upload-icon2">
                                <i class="fas fa-cloud-upload-alt"></i>
                            </div>
                            <h3 id="filename">
                                Drag and Drop or Click to upload
                            </h3>
                            <p class="filename-display"></p> 
                        </div>
                    </label>
                </div>
            </div>

            {{-- Choice --}}

            <div class="form-container" id="add-choice" style="display: none">
              {{-- <label class="label">{{$tanya->question}}</label> --}}
              <label class="label">question</label>
              <h4 style="color: red;">*</h4>
              <div class="form-check">
                  {{-- <input value="{{$opsi->option}}" class="form-check-input" type="radio" name="{{$tanya->id}}" id="flexRadioDefault1"> --}}
                  <input value="" class="form-check-input" type="radio" name="" id="flexRadioDefault1">
                  {{-- <label class="form-check-label" for="{{$tanya->id}}"> --}}
                  <label class="form-check-label" for="">
                      {{-- {{$opsi->option}} --}}
                      adasdasd
                  </label>  
              </div>
            </div>

            {{-- TTD--}}

            <div class="form-container" id="add-ttd" style="display: none">
              <div class="container">
                  {{-- <label class="label">{{$tanya->question}}</label> --}}
                  <label class="label">question</label>
              <h4 style="color: red;">*</h4>
              {{-- <button class="edit-button">Edit</button>
              <button class="delete-button">Delete</button> --}}
                  <div class="row">
                      <div class="col-md-12">
                          <canvas id="sig-canvas" width="620" height="160">
                              Get a better browser, bro.
                          </canvas>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <button type="button" class="btn btn-primary" id="sig-submitBtn">Submit Signature</button>
                          <button type="button" class="btn btn-default" id="sig-clearBtn">Clear Signature</button>
                      </div>
                  </div>
                  <br/>
                  <div class="row">
                      <div class="col-md-12">
                          {{-- <textarea id="sig-dataUrl" class="form-control" rows="5" name="{{$tanya->id}}" style="display: none" name="file-input"></textarea> --}}
                          <textarea id="sig-dataUrl" class="form-control" rows="5" name="" style="display: none" name="file-input"></textarea>
                          <img id="sig-image" src="" {{--style="visibility: hidden" --}} />
                      </div>
                  </div>
                  <br/>
              </div>
          </div> 
        </div>

        <div class="Split2"></div>
      </section>



    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

    <script src="/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>