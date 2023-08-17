

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <script defer src="app.js"></script>    
    <title>Home</title>

    <style>
        body{
            background-color: #f8f8f8;
        }
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

        .font-qs {
            font-family: 'Quicksand', sans-serif;
        }

        .pp {
            font-family: 'Poppins', sans-serif;
        }

        .pf-font {
            font-family: 'Playfair Display', serif;
        }

        .mst-font {
            font-family: 'Montserrat', sans-serif;
        }

        a {
            color: rgb(255, 255, 255);
        }

        .hidden {
            opacity: 0;
            transition: all 1s;
            filter: blur(5px);
            transform: translateY(-100%);
        }

        .show {
            opacity: 1;
            filter: blur(0);
            transform: translateY(0);
        }


        .bg-gradient-purple {
            background: rgb(88, 27, 187);
            background: linear-gradient(125deg, rgba(88, 27, 187, 1) 0%, rgba(252, 70, 129, 1) 100%);
        }

        .bulatan-nomor{
            
            width: fit-content;
            border-radius: 10rem;
            height: 100px;
            width: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .zoom{
            /* transform: scaleY(1); */
            color: black;
            
           
            
        }
        .zoom:hover{
            /* transform: scaleY(1.1); */
            color: white;
            /* transition: 1s;
             animation: ease; */
             background: rgb(88, 27, 187);
            background: linear-gradient(125deg, rgba(88, 27, 187, 1) 0%, rgba(252, 70, 129, 1) 100%);
            
            
        }

        .putar{
            transform: rotate(0deg);
        }
        .putar:hover{
            transform: rotate(90deg);
            transition: 1s;
             animation: ease;
        }
        .putar-balik{
            transform: rotate(0deg);
        }
        .putar-balik:hover{
            transform: rotate(-180deg);
            transition: 1s;
             animation: ease;
        }
        
    </style>
</head>

<body>
    <section class="atas bg-gradient-purple">
    <nav class="navbar font-qs navbar-expand-lg">
    <div class="container">

        <div class="nav blur text-white mt-3">
            <div class="kiri d-flex gap-5">
                <a href="index.php" class="">Home</a>
                <a href="#about" class="">About</a>
                <a href="#help" class="">Help</a>
            </div>

        </div>

    </div>
</nav>

        <section class="atas container text-white pb-5" style="margin-top: 7rem;">
            <div class="row d-flex align-items-center justify-content-between ">
                <div class="col text-left fs-4 gap-2">
                    <h1 class="pf-font mb-4">Apa itu <br> Website Psikotest?</h1>
                    <p class="font-qs fs-5 mb-4">Tes psikologi online memudahkan kandidat dalam mengerjakan tes psikologi
                        dimanapun dan kapanpun sesuai jadwal dalam melaksanakan psikotest masal
                    </p>
                    <div class="btn-group">
                        <a href="login.php" class="btn btn-info px-5 btn-lg">Daftar</a>
                        <a href="login.php" class="btn btn-outline-info px-5 btn-lg">Login</a>

                    </div>
                    <a href="login.php" class="btn btn-primary px-5 btn-lg">Mulai Test</a>
                    
                    <!-- <h2 class="bg-white text-dark p-3 rounded-3" style="width: fit-content;">Fitur Utama Kami</h2> -->
                </div>
                <div class="col"><img src="gambar/mental.png" class="putar-balik" alt=""></div>
            </div><br><br><br>
        </section>
    </section>
    <section class="container mt-n5  ">
        
        <div class="row gap-5 text-center  d-flex justify-content-center">
            <div class="col bg-white rounded-3 shadow-lg pt-5 pb-2"><h3>Test psikologi online</h3>
        <p></p></div>
            <div class="col bg-white rounded-3 shadow-lg pt-5 pb-2"><h3>
                Realtime psikogram</h3>
            <p>coming soon</p></div>
            <div class="col bg-white rounded-3 shadow-lg pt-5 pb-2"><h3>Realtime rekomendasi</h3>
            <p>coming soon</p></div>
        </div>
    </section>
    <section class="konten container" style="margin-top: 10rem;">
        <div class="row ">
            <div class="col  d-flex  justify-content-center">
                <div class="shadow-lg rounded-3 card zoom border-0">
                    <img src="1.png" width="170" class="pl-5" alt="" style="margin-top: -5rem;">
                    <p class="p-5 font-qs text-justify">Platform tes psikologi berbasis internet yang dapat
                        memudahkan para pelaku industri untuk menjaring kandidat sumber daya manusia secara cepat
                        dan efisien, dapat diselesaikan beberapa hari saja bahkan realtime.</p>

                       
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="shadow-lg rounded-3 card zoom border-0">
                    <img src="3.png" width="170" class="pl-5" alt="" style="margin-top: -5rem;">
                    <p class="p-5 font-qs text-justify">Tes psikologi online memudahkan kandidat dalam mengerjakan
                        tes psikologi dimanapun dan kapanpun sesuai jadwal dalam melaksanakan psikotest masal. Alat
                        test yang digunakan yakni tes intelegensi, kepribadian untuk mengungkap kemampuan kognitif
                        dan kepribadian kandidat.</p>
                </div>
            </div>
            <div class="col d-flex  justify-content-center">
                <div class="shadow-lg rounded-3 card zoom border-0">
                    <img src="2.png" width="170" class="pl-5" alt="" style="margin-top: -5rem;">
                    <p class="p-5 font-qs text-justify">Tes psikologi secara online dapat menghemat waktu, biaya dan
                        tenaga yang efisien karena kandidat dapat menjalani tes psikologi dimana saja dan kapan saja
                        yang memudahkan penyelenggara dalam mengelola jumlah kandidat yang banyak</p>
                </div>
            </div>

        </div>

    </section>
    <div id="about"></div>
    <section class="atas container" style="margin-top: 7rem;">
            <div class="row d-flex align-items-center justify-content-between ">
                <div class="col"><img src="gambar/philosophy.png" class="putar" alt=""></div>
                <div class="col text-left fs-4 gap-2">
                    <h1 class="pf-font mb-4">Psikotes dimana <br> saja kapan saja</h1>
                    <p class="font-qs fs-5 mb-4 ">mengedepankan fleksibilitas dan kecepatan dalam hal pengerjaan dan pembuatan laporan hasil psikologi. Dengan para psikolog kami yang profesional dan handal, maka hasil tes psikologi yang didapatkan pun akan valid dan reliabel
                    </p>

                    <p class="font-qs fs-5 mb-4 ">-</p>
                    
                    <a href="login.php" class="btn bg-gradient-purple text-white px-5 btn-lg">Mulai Test</a>
                    
                    <!-- <h2 class="bg-white text-dark p-3 rounded-3" style="width: fit-content;">Fitur Utama Kami</h2> -->
                </div>
            </div><br><br><br>
        </section>
    
    <section class="atas container bg-gradient-purple text-white rounded-3 shadow-lg p-5" style="margin-top: 7rem;">
            <div class="row p-5 d-flex  align-items-center justify-content-between ">
                <div class="col text-left fs-4 gap-2">
                    <div class="d-flex gap-3">
                        <div class="nomor p-5 bulatan-nomor ">1</div>
                        <div class="tulisan">
                        <h1 class="pp fw-bold">Daftar</h1>
                        <p class="pp fs-6">Registrasi akun</p>
                        </div>
                       
                    </div>
                    <div class="d-flex gap-3">
                        <div class="nomor p-5 bulatan-nomor ">2</div>
                        <div class="tulisan">
                        <h1 class="pp fw-bold">Login</h1>
                        <p class="pp fs-6">Masuk menggunakan akun yang telah dibuat sebelumnya</p>
                        </div>
                       
                    </div>
                    
                    <div class="d-flex gap-3">
                        <div class="nomor p-5 bulatan-nomor ">3</div>
                        <div class="tulisan">
                        <h1 class="pp fw-bold">Mulai Test</h1>
                        <p class="pp fs-6">Jalani rangkaian tes yang telah disediakan</p>
                        </div>
                       
                    </div>
                    <!-- <div class="d-flex gap-3">
                        <div class="nomor p-5 bulatan-nomor ">5</div>
                        <div class="tulisan">
                        <h1 class="pp fw-bold">Dapatkan Hasil</h1>
                        <p class="pp fs-6">Cek hasil tes dari halaman hasil</p>
                        </div>
                       
                    </div> -->
                </div>
                <div class="col "><img src="gambar/test.png" alt=""></div>
            </div>
        </section>
    <div id="help"></div>


    <footer class="mt-5 bg-gradient-purple text-white ">
        <div class="container text-center ">
            <p>Putri Wahyuni 2023</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>