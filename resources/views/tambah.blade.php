<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">UTS Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/produk">Produk</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container">
    <h1>Halaman Tambah Produk</h1>
  
    <hr>
    <div class="col-sm-12">
        <h4>Tambah Produk</h4>
        <form action="" method="GET">
          <div class="row">
            <div class="col-sm-6">
              <label for="">Kode</label>
              <input type="text" name="kode_barang" class="form-control" placeholder="Input Kode Barang">
            </div>
          <div class="col-sm-6">
            <label for="">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" placeholder="Input Nama Barang">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <label for="">Jenis Produk</label>
            <select name="jenis_produk" class="form-control">
              <option value="1">Makanan Kering</option>
              <option value="2">Makanan Beku</option>
              <option value="3">Minuman</option>
              <option value="4">Alat Tulis</option>
              <option value="5">Elektronik</option>
              <option value="6">Kebutuhan Sehari - hari</option>
              <option value="7">Pakaian</option>
              <option value="8">Peralatan</option>
            </select>
          </div>
          <div class="col-sm-6">
            <label for="">Harga</label>
            <input type="number" name="harga" class="form-control" placeholder="Input Harga">
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-sm-12">
            <a class="btn btn-primary col-sm-3" href="/produk" role="button">Simpan</a>
          </div>
        </div>
        </form>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>