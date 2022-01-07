<?php
include 'functions.php';
$msg = '';
// Your PHP code here.

// Home Page template below.
?>

<?=template_header('Home')?>

<div class="content update">
	<h2>Create Data</h2>
    <form action="create.php" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" value="auto" id="id">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <input type="submit" value="Create">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>