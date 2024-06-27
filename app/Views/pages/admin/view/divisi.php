<?= $this->extend('layout/admin/admin'); ?>

<?= $this->section('content'); ?>
<section class="content-body">
    <div class="container py-3">
        <div class="admin-dashboard">
            <div class="divisi-title mb-3 text-white w-100 d-flex align-items-center gap-3 py-3">
                <i class="fas fa-sitemap"></i>
                <h1 class="h4 m-0">Daftar Divisi</h1>
            </div>
            <div class="container-body">
                <div class="tambah-btn tambah-divisi mb-3">
                    <a href="/tambah-divisi" class="btn btn-primary d-inline-block">Tambah Divisi</a>
                </div>
                <table class="table divisi-table table-bordered">
                    <thead class="table-primary table-bordered">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Divisi</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = ($currentPage - 1) * $itemPerPages + 1;
                        foreach ($divisi as $div) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= esc($div['nama_divisi']); ?></td>
                                <td>
                                    <a class="btn-edit text-primary" href="/divisi/edit/<?= $div['id']; ?>"><i class="fa fa-pencil"></i></a>
                                </td>
                                <td>
                                    <form id="form-delete-<?= $div['id'] ?>" action="/divisi/delete/<?= $div['id'] ?>" method="post" class="d-inline">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn-delete text-danger" type="button"><i class="fa fa-trash" onclick="confirmDelete('form-delete-<?= $div['id'] ?>')"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <?= $pager->links('tbl_divisi', 'daftar_pager') ?>

            </div>

        </div>
    </div>
</section>

<?= $this->endSection(); ?>