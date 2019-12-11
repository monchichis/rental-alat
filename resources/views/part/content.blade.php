@extends('layouts.app')

@section('content')
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
@endsection