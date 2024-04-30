<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="/img/logo_torselis.png" type="image/gif">
    <!-- <link rel="icon" href="<--?= base_url() ?>/img/logo_torselis.png" type="image/gif"> -->

    <!-- Karma CSS -->
    <link rel="stylesheet" href="css/karma_temp/linearicons.css">
    <link rel="stylesheet" href="css/karma_temp/font-awesome.min.css">
    <link rel="stylesheet" href="css/karma_temp/themify-icons.css">
    <link rel="stylesheet" href="css/karma_temp/bootstrap.css">
    <link rel="stylesheet" href="css/karma_temp/owl.carousel.css">
    <link rel="stylesheet" href="css/karma_temp/nice-select.css">
    <link rel="stylesheet" href="css/karma_temp/nouislider.min.css">
    <link rel="stylesheet" href="css/karma_temp/ion.rangeSlider.css" />
    <link rel="stylesheet" href="css/karma_temp/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="css/karma_temp/magnific-popup.css">
    <link rel="stylesheet" href="css/karma_temp/main.css">
    <title><?= $title; ?></title>
</head>

<body>
    <!-- navbar here -->
    <?= $this->include('layout/main_navbar'); ?>

    <!-- content here -->
    <?= $this->renderSection('content'); ?>

    <!-- footer here -->
    <?= $this->include('layout/main_footer'); ?>

    <!-- Karma JS Area -->
    <script src="js/karma_temp/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="js/karma_temp/vendor/bootstrap.min.js"></script>
    <script src="js/karma_temp/jquery.ajaxchimp.min.js"></script>
    <script src="js/karma_temp/jquery.nice-select.min.js"></script>
    <script src="js/karma_temp/jquery.sticky.js"></script>
    <script src="js/karma_temp/nouislider.min.js"></script>
    <script src="js/karma_temp/countdown.js"></script>
    <script src="js/karma_temp/jquery.magnific-popup.min.js"></script>
    <script src="js/karma_temp/owl.carousel.min.js"></script>
</body>

</html>