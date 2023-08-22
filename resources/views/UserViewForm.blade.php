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
                    <form action="">
                        <img src="/image/Humic-Logi.png" alt="Banner" >
                        <div class="main">
                        <h1>The Question</h1>
                        <hr />
                        <p>
                            The deskribsi
                        </p>
                        <h4 style="color: red;">* Required</h4>
                        </div>
                    </form>
                </div>

                <div class="form-container">
                    <label class="label">Email address</label>
                    <h4 style="color: red;">*</h4>
                    <div class="radio-wrap">
                        <form class="form">
                            <label for="01">One</label>
                            <input id="01" type="radio" name="r" value="1" checked="">
                            <label for="02">Two</label>
                            <input id="02" type="radio" name="r" value="2">
                            <label for="03">Three</label>
                            <input id="03" type="radio" name="r" value="3">
                        </form>
                    </div>
                </div>

                <div class="form-container">
                    <div class="-mx-4 flex flex-wrap">
                        <div class="w-full px-4 md:w-1/2 lg:w-1/3">
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
            </form>
        </div>
    </main>
    <script src="/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
