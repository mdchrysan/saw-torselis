<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <title><?= $title; ?></title>
</head>

<body>
    <!-- navbar here -->
    <?= $this->include('layout/navbar'); ?>

    <!-- content here -->
    <?= $this->renderSection('content'); ?>

    <!-- footer here -->
    <?= $this->include('layout/footer'); ?>
</body>

</html>