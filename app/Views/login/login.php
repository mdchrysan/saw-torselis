<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo_torselis.png" type="image/gif">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <!-- <link rel="stylesheet" href="/css/style.css"> -->
    <title><?= $title; ?></title>
</head>

<body>
    <!-- <div class="login-wrapper"> -->
    <div class="login-container">
        <div class="mb-4">
            <h1 class="text-center login-title"><i>TORSELIS</i></h1>
            <h4 class="text-center">Masuk sebagai Admin</h2>
        </div>

        <form action="/auth" method="POST">
            <?= csrf_field(); ?>
            <div class="form-group mb-3">
                <label for="username">Identitas</label>
                <input type="text" name="username" id="username" class="form-control" autofocus required>
            </div>
            <div class="form-group mb-3">
                <label for="password">Kata Sandi</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-warning btn-block mt-4 mb-3">Masuk</button>
        </form>

        <a class="text-center link-back" href="<?= base_url('/'); ?>">
            < Kembali ke Beranda</a>
    </div>
    <!-- </div> -->
</body>
<!-- <div class="wrapper">
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
                            <a class="link-back mt-3" href="<--?= base_url('/'); ?>" role="button">
                                < Kembali ke Beranda</a>
                        </form>
                    </div>
                </div>
            </div>
             -->


</html>