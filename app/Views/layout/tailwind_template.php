<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title; ?> | E-Commerce</title>
</head>

<body class="overflow-x-hidden">
    <?= $this->include("layout/navbar"); ?>
    <?= $this->renderSection("content"); ?>
    <div class="">
        <?= $this->include("layout/footer"); ?>
    </div>
</body>

</html>