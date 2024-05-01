<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logo_torselis.png" type="image/gif">
    <!-- <link rel="icon" href="<--?= base_url() ?>/img/logo_torselis.png" type="image/gif"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="/css/styles.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?= $title; ?></title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script>
        function previewImage() {
            // call input & image-holder
            const imgInput = document.querySelector('#gambarProduk');
            const imgPreview = document.querySelector('.img-preview');
            // get the uploaded file
            const imgFile = new FileReader();
            imgFile.readAsDataURL(imgInput.files[0]);
            // change source file
            imgFile.onload = function(event) {
                imgPreview.src = event.target.result;
            }
        }
    </script>
</head>

<body>
    <!-- navbar here -->
    <?= $this->include('layout/admin_navbar'); ?>

    <!-- content here -->
    <?= $this->renderSection('content'); ?>
</body>

</html>