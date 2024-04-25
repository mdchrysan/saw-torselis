<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo_torselis.png" type="image/gif">
    <!-- <link rel="icon" href="<--?= base_url() ?>/img/logo_torselis.png" type="image/gif"> -->
    <link rel="stylesheet" href="/css/styles.css">
    <title><?= $title; ?></title>
</head>

<body>
    <!-- navbar here -->
    <?= $this->include('layout/main_navbar'); ?>

    <!-- content here -->
    <?= $this->renderSection('content'); ?>

    <!-- footer here -->
    <?= $this->include('layout/main_footer'); ?>
</body>

</html>