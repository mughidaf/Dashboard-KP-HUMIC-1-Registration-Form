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
      <h1>Registration Form</h1>
    </header>
    <main>
        <div class="container">
            <div class="form-container">
                    <img src="/image/Humic-Logi.png" alt="Banner" >
                    <div class="main">
                    <h1>bvcb</h1>
                    <hr />
                    <p>
                        cvbcvb
                    </p>
                    </div>
            </div>
            <form action="" method="post"></form>

                    <div class="form-container">
                        <div class="-mx-4 flex flex-wrap">
                            <div class="w-full">
                               <div class="mb-12">
                                  <label class="mb-3 block text-base font-medium text-black">
                                  dsadsa
                                  </label>
                                  <h4 style="color: red;">*</h4>
                                  <div class="relative">
                                     <input type="text" placeholder=dasdasd class="w-full rounded-md border border-form-stroke p-3 pl-12 text-black placeholder-[#929DA7] outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]">
                                     <span class="absolute top-1/2 left-4 -translate-y-1/2">
                                     </span>
                                  </div>
                               </div>
                            </div>
                         </div>
                    </div>
                  

                   
                        {{-- file upload --}}
                    <div class="form-container">
                        <label class="mb-3 block text-base font-medium text-black">
                            ghfghfg
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
        

   
                    <div class="form-container">
                        <label class="label">ghfghf</label>
                        <h4 style="color: red;">*</h4>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Default radio
                            </label>
                          </div>

                    </div>

                
                    <div class="form-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1>E-Signature</h1>
                                    <p>Sign in the canvas below and save your signature as an image!</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <canvas id="sig-canvas" width="620" height="160">
                                        Get a better browser, bro.
                                    </canvas>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" id="signatureDataUrl" name="signatureDataUrl">
                                    <button class="btn btn-primary" id="sig-submitBtn"">Submit Signature</button>
                                    <button class="btn btn-default" id="sig-clearBtn">Clear Signature</button>
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea id="sig-dataUrl" class="form-control" rows="5">Data URL</textarea>
                                </div>
                            </div>
                            <br/>
                        </div>
                    </div>
            </form>
        </div>

    </main>
    <script src="/script.js"></script>
    <script src="/test.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
