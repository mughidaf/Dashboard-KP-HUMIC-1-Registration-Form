<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Maker</title>
    <link rel="stylesheet" href="styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  </head>
  <body>
    <header>
      <h1>Form Maker</h1>
    </header>
    <main>
      <div class="container">
        <form id="formCreator" action="test" method="post">
          @csrf
          <div class="form-container">
            <label for="judul">Judul Form:</label>
            <input type="text" id="judul" name="judul" />

            <label for="deskripsi">Deskripsi:</label>
            <textarea class="deskripsi" id="deskripsi" name="deskripsi" rows="3" required></textarea>

            <div class="dropdown">
              <button class="dropdown-toggle" type="button" id="tambah-pertanyaan" data-bs-toggle="dropdown" aria-expanded="false">Tambah pertanyaan</button>
              <ul class="dropdown-menu" aria-labelledby="tambah-pertanyaan">
                <li><button type="button" class="d-block w-100 mb-1" id="tambah-teks">Teks</button></li>
                <li><button type="button" class="d-block w-100 mb-1" id="tambah-pilihan">Choice</button></li>
                <li><button type="button" class="d-block w-100 mb-1" id="tambah-file">File</button></li>
                <li><button type="button" class="d-block w-100" id="tambah-ttd">Sign</button></li>
              </ul>
            </div>

            <div class="button-container">
              <button type="button" id="cancelForm">Cancel</button>
              <button type="submit" id="submitForm">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
