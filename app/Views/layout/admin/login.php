<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>">
    <link rel="shortcut icon" href="<?= base_url('/assets/img/3d.svg') ?>" type="image/x-icon">
    <title><?= $title; ?></title>
</head>

<body>

    <?= $this->renderSection('content'); ?>


    <script src="<?= base_url('/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('/vendor/sweetalert/sweetalert2.all.min.js') ?>"></script>
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
