<!DOCTYPE html>
<!--<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">-->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" type="text/css"/>
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>

        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/myjs.js"></script>
        
        <title>TheNguseup's</title>
        <link rel="icon" type="image/gif/png" href="assets/fishing-rod.png">
        
    </head>
    <body>
        <div class="ui inverted vertical masthead segment" id="first-segment">
            <div class="ui mediums borderless menu" id="tn-navbar">
                <a class="item"><i class="home icon"></i> Home</a>
                <a class="item" href="#katalog"><i class="list ul icon"></i> Katalog</a>
                <a class="item" href="#aboutus">About Us</a>
                <div class="right menu">
                    <div class="item">
                        <div class="ui icon input">
                            <input type="text" placeholder="Pencarian...">
                            <i class="search link icon"></i>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ui inverted primary test button">
                            <i class="large sign-in icon" style="line-height: .9"></i> Login
                        </div>
                    </div>
                </div>
            </div>
            <div id="tn-sbar">
                <div class="ui open button" id="tn-hamb"><i class="large bars icon"></i></div>
                    <div class="ui left vertical sidebar menu">
                        <div class="ui icon input">
                            <input type="text" placeholder="Pencarian...">
                            <i class="search link icon"></i>
                        </div>
                    <div class="item">
                        <i class="home icon"></i> Home
                    </div>
                    <a class="item" href="#katalog"><i class="list ul icon"></i> Katalog</a>
                    <a href="" class="item" href="aboutus">About Us</a>
                </div>
                <div class="ui primary test button" id="tn-button">
                    <i class="large sign-in icon" style="line-height: .9"></i> Login
                </div>
            </div>

            <!--Login Modal-->
            <div class="ui first coupled small modal">
                <i class="close icon"></i>
                <div class="header">
                    <h2 class="ui center aligned icon header">
                        Sign In
                    </h2>
                </div>
                <div class="content">
                    <form class="ui form" id="tn-login-form">
                        <div class="required field">
                            <label>Username</label>
                            <input type="text" placeholder="Username / Email" required>
                        </div>
                        <div class="required field">
                            <label>Password</label>
                            <input type="password" placeholder="Password" required>
                        </div>
                        <div class="field signup link">
                            Belum memiliki akun ? <a href="#">Sign Up</a>
                        </div>
                    </form>
                </div>
                <div class="actions">
                    <h2 class="ui center aligned header">
                        <button class="ui primary button" type="submit" form="tn-login-form">Login</button>
                    </h2>
                </div>
            </div>
            <!--Signup Modal-->
            <div class="ui second coupled small modal">
                <i class="close icon"></i>
                <div class="header">
                    <h2 class="ui center aligned icon header">
                        Sign Up
                    </h2>
                </div>
                <div class="content">
                    <form class="ui form" id="tn-register-form">
                        <div class="required field">
                            <label>Name</label>
                            <div class="two fields">
                                <div class="field">
                                    <input type="text" placeholder="Nama Depan" required>
                                </div>
                                <div class="field">
                                    <input type="text" placeholder="Nama Belakang">
                                </div>
                            </div>
                        </div>
                        <div class="required field">
                            <label>Email</label>
                            <input type="email" placeholder="Email" required>
                        </div>
                        <div class="required field">
                            <label>Phone Number</label>
                            <input type="text" placeholder="Nomor Ponsel" required>
                        </div>
                        <div class="required field">
                            <label>Password</label>
                            <input type="password" placeholder="Password" required>
                        </div>
                        <div class="field">
                            <div class="ui checkbox">
                                <input type="checkbox" tabindex="0" class="hidden" required>
                                <label>Saya setuju dengan Syarat & Ketentuan</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="actions">
                    <h2 class="ui center aligned header">
                        <button class="ui primary button" type="submit" form="tn-register-form">Register</button>
                    </h2>
                </div>
            </div>
            <div class="greetings">
                <h1 class="ui inverted header">Hello Fishermans!</h1>
                <h2 class="ui inverted header">Sedang mencari tempat perlengkapan mancing ?</h2>
                <p>
                    <span class="brands">TheNguseup's</span> tempatnya! <br>
                    Kami meyediakan barang dengan kualitas terbaik untuk anda. <br>
                    Daftarkan dirimu menjadi member kami, dan dapatkan penawaran spesial.
                </p>
            </div>
        </div>
        <!--Content-->
        <main>
            <h1 class="ui center aligned header" id="katalog">
                Katalog Barang
            </h1>
            <h4 class="ui left floated header">
                Filter Kategori :
            </h4><br><br>
            <div>
                <div class="ui primary floating labeled icon dropdown button">
                    <i class="filter icon"></i>
                    <span class="text">Filter</span>
                    <div class="menu">
                        <div class="item header" onclick="filterSelection('all')">
                            Semua
                        </div>
                        <div class="divider"></div>
                        <div class="item" onclick="filterSelection('joran')">
                            Joran
                        </div>
                        <div class="item" onclick="filterSelection('reel')">
                            Reel
                        </div>
                        <div class="item" onclick="filterSelection('senar')">
                            Senar
                        </div>
                        <div class="item" onclick="filterSelection('umpan')">
                            Umpan
                        </div>
                        <div class="item" onclick="filterSelection('aksesoris')">
                            Aksesoris
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="filterDiv joran">
                    <h4 class="ui horizontal divider header">
                        <i class="tags icon"></i> Joran
                    </h4>
                    <div class="owl-carousel">
                        <div>
                            <div class="ui link cards">
                                <div class="card">
                                    <div class="image">
                                        <img src="assets/Joran/joran-maguro.jpg">
                                    </div>
                                    <div class="content">
                                    <div class="header">Maguro</div>
                                            <div class="meta">
                                                <a>10 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 3.500.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Joran/joran-kenzi.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Kenzi</div>
                                            <div class="meta">
                                                <a>20 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tags icon"></i>
                                            Rp. 250.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Joran/joran-shimano.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Shimano</div>
                                            <div class="meta">
                                                <a>2 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 500.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Joran/joran-pioneer.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Pioneer</div>
                                            <div class="meta">
                                                <a>18 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 730.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Joran/joran-tornado.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Tornado</div>
                                            <div class="meta">
                                                <a>1 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span class="right floated">
                                            <div class="ui red horizontal label">Hot</div>
                                        </span>
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 435.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filterDiv reel">
                    <h4 class="ui horizontal divider header">
                        <i class="tags icon"></i> Reel
                    </h4>
                    <div class="owl-carousel">
                        <div>
                            <div class="ui link cards">
                                <div class="card">
                                    <div class="image">
                                        <img src="assets/Reel/Reel-Daiwa-RX-4000-BI.jpg">
                                    </div>
                                    <div class="content">
                                    <div class="header">Daiwa RX-4000-BI</div>
                                            <div class="meta">
                                                <a>1 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 830.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Reel/Reel-Debao-DB3000A.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Debao-DB3000A</div>
                                            <div class="meta">
                                                <a>5 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span class="right floated">
                                            <div class="ui red horizontal label">Hot</div>
                                        </span>
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 500.000,-
                                        </span>
                                        </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Reel/Reel-Maguro-Avengers-6000.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Maguro-A-6000</div>
                                            <div class="meta">
                                                <a>10 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 675.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Reel/Reel-XT3000-Blood-Magno.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">XT3000-B-Magno</div>
                                            <div class="meta">
                                                <a>0 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span class="right floated">
                                            <div class="ui red horizontal label">Hot</div>
                                        </span>
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 343.500,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Reel/Reel-Yumoshi-EF5000.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Yumoshi-EF5000</div>
                                            <div class="meta">
                                                <a>8 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 332.500,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filterDiv senar">
                    <h4 class="ui horizontal divider header">
                        <i class="tags icon"></i> Senar
                    </h4>
                    <div class="owl-carousel">
                        <div>
                            <div class="ui link cards">
                                <div class="card">
                                    <div class="image">
                                        <img src="assets/Senar/Senar-Premiere.jpg">
                                    </div>
                                    <div class="content">
                                    <div class="header">Premiere</div>
                                            <div class="meta">
                                                <a>3 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 89.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Senar/Senar-Ogawa-Qianliu.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Ogawa Qianliu</div>
                                            <div class="meta">
                                                <a>0 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 23.500,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Senar/Senar-Proberos.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Proberos</div>
                                            <div class="meta">
                                                <a>0 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 67.300,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Senar/Senar-Seaknight.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">SeaKnight</div>
                                            <div class="meta">
                                                <a>0 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span class="right floated">
                                            <div class="ui red horizontal label">Hot</div>
                                        </span>
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 46.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Senar/Senar-Waterpool.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Waterking</div>
                                            <div class="meta">
                                                <a>10 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 70.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filterDiv umpan">
                    <h4 class="ui horizontal divider header">
                        <i class="tags icon"></i> Umpan
                    </h4>
                    <div class="owl-carousel">
                        <div>
                            <div class="ui link cards">
                                <div class="card">
                                    <div class="image">
                                        <img src="assets/Umpan/Umpan-Floating-Plug.jpg">
                                    </div>
                                    <div class="content">
                                    <div class="header">Floating Plug</div>
                                            <div class="meta">
                                                <a>32 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 20.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Umpan/Umpan-Konahead.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Konahead</div>
                                            <div class="meta">
                                                <a>20 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 14.200,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Umpan/Umpan-Popper-Lure.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Popper Lure</div>
                                            <div class="meta">
                                                <a>43 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 43.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Umpan/Umpan-Ramping-Lure.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Ramping Lure</div>
                                            <div class="meta">
                                                <a>3 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 52.400,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Umpan/Umpan-Squid-Lure.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Squid Lure</div>
                                            <div class="meta">
                                                <a>50 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 40.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filterDiv aksesoris">
                    <h4 class="ui horizontal divider header">
                        <i class="tags icon"></i> Aksesoris
                    </h4>
                    <div class="owl-carousel">
                        <div>
                            <div class="ui link cards">
                                <div class="card">
                                    <div class="image">
                                        <img src="assets/Aksesoris/Backpack.jpg">
                                    </div>
                                    <div class="content">
                                    <div class="header">Fishing Backpack</div>
                                            <div class="meta">
                                                <a>1 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 432.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Aksesoris/Equipment-Box.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Box Mancing</div>
                                            <div class="meta">
                                                <a class="ui mini teal tag label">Coming Soon</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 120.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Aksesoris/Jaket-Mancing.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Jaket Mancing</div>
                                            <div class="meta">
                                                <a>4 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 150.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Aksesoris/LED-Lamp.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Head LED</div>
                                            <div class="meta">
                                                <a>2 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span>
                                            <i class="tag icon"></i>
                                            Rp. 50.000,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="ui link cards">
                                    <div class="card">
                                        <div class="image">
                                            <img src="assets/Aksesoris/Line-Winder.jpg">
                                        </div>
                                        <div class="content">
                                        <div class="header">Line Winder</div>
                                            <div class="meta">
                                                <a>0 Tersedia</a>
                                            </div>
                                        <div class="description">
                                            Saya bingung bikin deskripsi, da tara nguseup, beli aja we. Sorry :(
                                        </div>
                                    </div>
                                    <div class="extra content">
                                        <span class="right floated">
                                            <div class="ui red horizontal label">Hot</div>
                                        </span>
                                            <span>
                                            <i class="tag icon"></i>
                                            Rp. 175.500,-
                                        </span>
                                    </div>
                                    <div class="ui bottom attached button">
                                        <i class="add icon"></i>
                                        Tambah ke keranjang
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <div class="ui inverted vertical footer segment" id="aboutus">
            <div class="penutup">
                <span>&#169; PPAW G-2019</span><br>
                <span>All rights belong to their respective owner</span> <br> <br>
                <span>
                    <p>
                        This Website just still P R O T O T Y P E. Any data shown just Gimmick. <br>
                        Will improved later. Be patient. Thanks.
                    </p>
                </span>
            </div>
        </div>

        <script>
            filterSelection("all")
            function filterSelection(c) {
                var x, i;
                x = document.getElementsByClassName("filterDiv");
                if (c == "all") c = "";
                for (i = 0; i < x.length; i++) {
                    w3RemoveClass(x[i], "show");
                    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
                }
            }

            function w3AddClass(element, name) {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) {
                    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
                }
            }

            function w3RemoveClass(element, name) {
                var i, arr1, arr2;
                arr1 = element.className.split(" ");
                arr2 = name.split(" ");
                for (i = 0; i < arr2.length; i++) {
                    while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);     
                    }
                }
                element.className = arr1.join(" ");
            }
        </script>
    </body>
</html>
<?php /**PATH /home/kwrnya/new/resources/views/welcome.blade.php ENDPATH**/ ?>