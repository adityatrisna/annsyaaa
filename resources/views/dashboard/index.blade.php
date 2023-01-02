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

</head>

<body>
    <section class="header index">
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
        <div class="text-box">
            <h1>PPDB SMK WIKRAMA Bogor</h1>
            <p>Ayo! segera daftarkan dirimu ke SMK Wikrama dengan cara klik PENDAFTARAN PPDB dibawah ini!
                Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.
                
                
            </p>
            <a href="/daftar" class="hero-btn">Pendaftaran PPDB</a>
        </div>
    </section>

<!------Hobby------->
<section class="course">
    

    <div class="row">
        <div class="course-col">
            <h3>motto</h3>
            <p>Ilmu yang Amaliah, Amal yang Ilmiah, Akhlaqul Karimah</p>
        </div>
        <div class="course-col">
            <h3>afirmasi</h3>
            <p>Padamu negeri - kami berjanji - lulus Wikrama siap membangun negeri</p>
        </div>
        <div class="course-col">
            <h3>attitude</h3>
            <p>Aku ada lingkunganku
                bahagia</p>
        </div>
    </div>

</section>    

<!-----hobby----->
<section class="hobby" id="jurusan">
    <h1>Jurusan</h1>
    <p>Jurusan yang ada di SMK WIKRAMA Bogor</p>
    <div class="row">
        <div class="hobby-col">
            <img src="pplg.jpg">       
            <div class="layer">
            <h3>PPLG</h3>
            </div>
        </div>
        <div class="hobby-col">
            <img src="hotel.jpg">       
            <div class="layer">
            <h3>HOTEL</h3>
            </div>
        </div>
        <div class="hobby-col">
            <img src="mplb.jpg">       
            <div class="layer">
            <h3>MPLB</h3>
            </div>
        </div>
        <div class="hobby-col col">
            <img src="dkv.jpg">       
            <div class="layer">
            <h3>DKV</h3>
            </div>
        </div>
        <div class="hobby-col col">
            <img src="kuliner.jpg">       
            <div class="layer">
            <h3>KLN</h3>
            </div>
        </div>
        <div class="hobby-col col">
            <img src="tjkt.jpg">       
            <div class="layer">
            <h3>TJKT</h3>
            </div>
        </div>
    </div>

</section>

<section class="bg-5 py-3" id="tentang-kami">
    <div class="container my-3 py-5">
        <h1 class="text-center">Tentang Wikrama</h1>
        <h5 class="text-dark my-3">
            SMK Wikrama Bogor didirikan oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah naungan
            Yayasan
            Prawitama pada tahun 1996 di bekas gudang KUD. Kompetensi keahlian yang pertama dibuka pada saat itu
            adalah
            sekretaris dengan jumlah hanya 34 siswa.
        </h5>

        <h5 class="text-dark my-3">
            Seiring berjalannya waktu, jumlah siswa SMK Wikrama Bogor setiap tahunnya terus bertambah. Sehingga pada
            tahun 2001, secara bertahap SMK Wikrama Bogor menempati gedung yang lebih luas diatas tanah ± 5000m2,
            berlokasi di Jalan Raya Wangun Kelurahan Sindangsari Kota Bogor. Hingga saat ini, SMK Wikrama Bogor
            memiliki
            1596 siswa dengan 51 guru pendidik.
        </h5>

        <h5 class="text-dark my-3">
            Kesuksesan SMK Wikrama Bogor saat ini tentunya tidak lepas dari sejarah SMK Wikrama Bogor mulai dari
            membentuk visi dan misi, kerja keras hingga diakui dunia internasional hingga prestasi dan pengharagaan
            yang
            didapatkan SMK Wikrama Bogor sejak awal didirikan. Berikut sejarah yang dilalui SMK Wikrama Bogor
            berdasarkan urutan tahun.
        </h5>
    </div>
</section>



    
<!----JavaScript for Toggle Menu-->
    <script>
           
        var navLinks = document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }

    </script>

</body>
</html>    