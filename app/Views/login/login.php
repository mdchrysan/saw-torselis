<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url() ?>/img/logo_torselis.png" type="image/gif">
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

</html>