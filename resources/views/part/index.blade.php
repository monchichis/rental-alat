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
                <form class="ui form" id="tn-login-form" action="{{ url('native/login') }}" method="post">
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