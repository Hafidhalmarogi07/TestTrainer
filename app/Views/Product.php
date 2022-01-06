<?= $this->extend('layout/navbar') ?>
<?= $this->section('styles') ?>
<link href="<?= base_url('./assets/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?php
if (session()->getFlashData('success')) {
?>
    <?= session()->getFlashData('success') ?>
<?php
}
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($product as $key => $products) : ?>
            <tr>
                <th scope="row"><?= ++$key ?></th>
                <td><?= $products['nama_produk'] ?></td>
                <td><?= $products['kategori'] ?></td>
                <td><?= $products['deskripsi'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>