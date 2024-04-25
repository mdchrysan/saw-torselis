<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo_torselis.png" type="image/gif">
    <link rel="stylesheet" href="/css/login.css">
    <title><?= $title; ?></title>
    <script type="text/javascript" src="/js/login.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="title-text">
            <div class="title login"><i>TORSELIS</i></div>
            <div class="title signup">Masuk sebagai Admin</div>
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slide" id="login" checked>
                <input type="radio" name="slide" id="signup">
                <label for="login" class="slide login">Halo!</label>
                <label for="signup" class="slide signup">Admin</label>
                <div class="slider-tab"></div>
            </div>
            <div class="form-inner">
                <form action="#" class="login">
                    <div class="field">
                        <div class="signup-link">Masuk sebagai Admin untuk melakukan pengaturan terhadap data pada <i>website</i></div>
                    </div>
                    <!--             <div class="field">
              <div class="title"> </div>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
            <div class="signup-link">Kembali ke <a href="">Beranda</a></div> -->
                </form>
                <form action="#" class="signup">
                    <div class="field">
                        <input type="text" placeholder="Identitas" required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Kata Sandi" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Masuk">
                    </div>
                    <div class="signup-link">Kembali ke <a href="">Beranda</a></div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>