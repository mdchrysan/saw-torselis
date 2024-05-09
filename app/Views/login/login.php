<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo_torselis.png" type="image/gif">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/style.css">
    <title><?= $title; ?></title>
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
                </form>
                <form action="/auth" method="POST" class="signup">
                    <?= csrf_field(); ?>
                    <div class="field">
                        <input type="text" placeholder="Identitas" name="username" autofocus required>
                    </div>
                    <div class="field">
                        <input type="password" placeholder="Kata Sandi" name="password" required>
                    </div>
                    <div class="field btn">
                        <div class="btn-layer"></div>
                        <input type="submit" value="Masuk">
                    </div>
                    <a class="link-back mt-3" href="<?= base_url('/'); ?>" role="button">
                        < Kembali ke Beranda</a>
                </form>
            </div>
        </div>
    </div>

    <!-- JS Area -->
    <script type="text/javascript" src="js/login.js"></script>
</body>

</html>