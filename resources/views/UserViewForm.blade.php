<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Maker</title>
    <link rel="stylesheet" href="/UserViewForm.css" />
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  </head>
  <body>
    <header>
      <h1>Form Maker</h1>
    </header>
    <main>
        <div class="container">
            <form id="formCreator" action="storeForm" method="post">
            @csrf
                <div class="form-container">
                        <img src="/image/Humic-Logi.png" alt="Banner" >
                        <div class="main">
                        <h1>The Question</h1>
                        <hr />
                        <p>
                            The deskribsi
                        </p>
                        <h4 style="color: red;">* Required</h4>
                        </div>
                </div>

                <div class="form-container">
                    <label class="label">Email address</label>
                    <h4 style="color: red;">*</h4>
                    <div class="radio">
                        <input id="radio-1" name="radio" type="radio" checked>
                        <label for="radio-1" class="radio-label">ch1</label>
                      </div>
                    
                      <div class="radio">
                        <input id="radio-2" name="radio" type="radio">
                        <label  for="radio-2" class="radio-label">ch2</label>
                    </div>
                </div>

                <div class="form-container">
                    <div class="-mx-4 flex flex-wrap">
                        <div class="w-full">
                           <div class="mb-12">
                              <label class="mb-3 block text-base font-medium text-black">
                              Name
                              </label>
                              <h4 style="color: red;">*</h4>
                              <div class="relative">
                                 <input type="text" placeholder="Devid Jhon" class="w-full rounded-md border border-form-stroke p-3 pl-12 text-black placeholder-[#929DA7] outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                                 <span class="absolute top-1/2 left-4 -translate-y-1/2">
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                </div>

                <div class="form-container">
                    {{-- ttd --}}
                </div>

                {{-- file upload --}}
                <div class="form-container">
                    <label class="mb-3 block text-base font-medium text-black">
                        Name
                    </label>
                    <h4 style="color: red;">*</h4>
                    <div class="upload-container">
                        <div class="upload-icon">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </div>
                        <div class="upload-text">
                            <p>Drag and drop your files here or</p>
                            <label for="file-input" class="custom-btn">Browse</label>
                            {{-- accep tipe file nya --}}
                            <input type="file" id="file-input" class="file-input" accept=".png,.jpg,.jpeg">
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </main>
    <script src="/script.js"></script>
    <script src="UserViewForm.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
