<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="<?= base_url('/assets/css/style.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('/assets/img/3d.svg') ?>" type="image/x-icon">
    <title><?= $title; ?></title>
</head>

<body>

    <?= $this->renderSection('content'); ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.0/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('/assets/js/script.js') ?>"></script>
    <?php if (session()->has('loggedin')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Selamat!',
                text: '<?= session('loggedin') ?>',
                showConfirmButton: false,
                timer: 3500
            }).then(function() {
                window.location = '/dashboard';
            });
        </script>
    <?php elseif (session()->has('gagal')) : ?>
        <script>
            Swal.fire({
                icon: 'warning',
                title: '<?= session('gagal') ?>',
                text: 'Silahkan Coba Kembali !',
                confirmButtonText: 'OK'
            });
        </script>
    <?php endif; ?>
</body>

</html>