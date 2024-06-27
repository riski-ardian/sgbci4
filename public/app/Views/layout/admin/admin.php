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
    <div class="canvas w-100 h-100 bg-body-secondary">
        <div class="main-canvas">
            <header class="content-header bg-success d-flex align-items-center">
                <div class="header-logo ms-3 d-flex align-items-center gap-2">
                    <img src="<?= base_url('assets/img/logo.png') ?>">
                    <span>SAKTI<br>GUESTBOOK</span>
                </div>
                <div class="vr mx-5"></div>
                <div class="header-menu admin-menu d-flex">
                    <ul>
                        <li class="list-menu">
                            <a href="/dashboard">Dashboard</a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">Master Data</button>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/divisi">Daftar Divisi</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/instansi">Daftar Instansi</a>
                            </li>
                        </ul>
                    </div>
                    <ul>
                        <li class="list-menu">
                            <a href="/daftar-tamu">Daftar Tamu</a>
                        </li>
                    </ul>
                </div>
                <div class="admin-user d-flex align-items-center gap-2 text-white">
                    <span><?= strtoupper($userLogin); ?></span>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user-circle"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </header>

            <?= $this->renderSection('content'); ?>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.0/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url('/assets/js/script.js') ?>"></script>
    <script>
        function confirmDelete(formId) {
            Swal.fire({
                title: "Apakah Kamu Yakin?",
                text: "Data Akan Terhapus Secara Permanen.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Ya, Hapus Data Ini",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(formId).submit();
                }
            });
        }
    </script>

    <!-- Flash data untuk notifikasi sukses -->
    <?php if (session()->getFlashdata('deleted')) : ?>
        <script>
            Swal.fire({
                title: "Deleted!",
                text: "<?= session()->getFlashdata('deleted') ?>",
                icon: "success"
            });
        </script>
    <?php endif; ?>

    <!-- Flash data untuk notifikasi update -->
    <?php if (session()->getFlashdata('updated')) : ?>
        <script>
            Swal.fire({
                title: "Berhasil!",
                text: "<?= session()->getFlashdata('updated') ?>",
                icon: "success"
            });
        </script>
    <?php endif; ?>

    <?php if (session()->has('added')) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "<?= session()->getFlashdata('added') ?>",
                showConfirmButton: false,
                timer: 3500
            });
        </script>
    <?php endif; ?>

</body>

</html>