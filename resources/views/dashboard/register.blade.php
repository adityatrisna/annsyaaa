<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adit Web</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" sizes="16x16" href="favicon.ico">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600&family=Raleway:wght@200;300;400;500;600&family=Roboto+Mono:wght@100;200;300;400;500;600;700&family=Roboto+Slab:wght@500;600;700&family=Roboto:wght@500;700;900&family=Secular+One&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body class="body-daftar">
    <section class="header">
        <nav>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="">Beranda</a></li>
                    <li><a href="#jurusan">Jurusan</a></li>
                    <li><a href="#tentang-kami">Tentang Kami</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    <section>

        <div class="text-box mb-5">
            <div class="container daftar">
            <div class="row d-flex justify-content-center">
                <div class="col-8">
                   <div class="card bg-dark">
                       <div class="card-body">
                           <form action="#" method="POST" class="mt-3 form-group">
                               <!-- @csrf -->
                               <div class="row">
                                   <div class="mt-3 col-6">
                                       <label for="nisn" class="form-label">NISN</label>
                                       <input type="number" name="nisn" id="nisn" class="form-control"
                                           placeholder="12108568">
                                   </div>
                                   <div class="mt-3 col-6">
                                       <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                       <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                           <option value="">Jenis Kelamin</option>
                                           <option value="laki-laki">Laki-laki</option>
                                           <option value="perempuan">Perempuan</option>
                                       </select>
                                   </div>
                                   <div class="mt-3 col-12">
                                       <label for="nama" class="form-label">Nama Lengkap</label>
                                       <input type="text" name="nama_lengkap" id="nama" class="form-control"
                                           placeholder="aditya trisna sukmawan">
                                   </div>
                                   <div class="mt-3 col-12">
                                       <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                                       <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" placeholder="smpn 2 ciawi">
                                   </div>
                                   <div class="mt-3 col-12 nama_sekolah d-none">
                                       <label for="nama_sekolah_input" class="form-label">Nama Sekolah</label>
                                       <input type="text" name="asal_sekolah" id="nama_sekolah_input" class="form-control"
                                           value="">
                                   </div>
                                   <div class="mt-3 col-12">
                                       <label for="email" class="form-label">Email</label>
                                       <input type="email" name="email" id="email" class="form-control"
                                           placeholder="adityatrisna.0105@gmail.com">
                                   </div>
                                   <div class="mt-3 col-12">
                                       <label for="no_hp" class="form-label">Nomor Handphone</label>
                                       <input type="text" name="no_hp" id="no_hp" class="form-control"
                                           placeholder="089668394323">
                                   </div>
                                   <div class="mt-3 col-6">
                                       <label for="no_hp_ayah" class="form-label">Nomor Handphone Ayah</label>
                                       <input type="text" name="no_hp_ayah" id="no_hp_ayah" class="form-control"
                                           placeholder="0896683938292">
                                   </div>
                                   <div class="mt-3 col-6">
                                       <label for="no_hp_ibu" class="form-label">Nomor Handphone Ibu</label>
                                       <input type="text" name="no_hp_ibu" id="no_hp_ibu" class="form-control"
                                           placeholder="0896683938292">
                                   </div>
                                   <div class="mt-3 col-12">
                                       <label>Pilih Referensi</label>
                                       <select name="referensi" class="form-control" id="pilih_referensi" required>
                                           <option value="pegawai">Guru/Staf/Laboran/Pegawai Wikrama</option>
                                           <option value="siswa">Siswa SMK Wikrama</option>
                                           <option value="alumni">Alumni SMK Wikrama</option>
                                           <option value="guru_smp">Guru SMP</option>
                                           <option value="calon_siswa">Calon Siswa SMK Wikrama</option>
                                           <option value="sosial_media">Sosial Media</option>
                                           <option value="referensi_langsung">Referensi Langsung</option>
                                       </select>
                                   </div>
                                   <div class="mt-3 col-12 d-flex justify-content-end">
                                       <input type="submit" value="REGISTRASI" class="btn btn-warning">
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
                </div>
           </div>
        </div>

</body>
</html>    