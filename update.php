<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the data id exists, for example update.php?id=1 will get the data with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE data SET id = ?, nama = ?, email = ? WHERE id = ?');
        $stmt->execute([$id, $nama, $email, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the data from the data table
    $stmt = $pdo->prepare('SELECT * FROM data WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$data) {
        exit('Data doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>



<?=template_header('Read')?>

<div class="content update">
	<h2>Update Data #<?=$data['id']?></h2>
    <form action="update.php?id=<?=$data['id']?>" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" value="<?=$data['id']?>" id="id">
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?=$data['nama']?>" id="nama">
        <label for="email">Email</label>
        <input type="text" name="email" value="<?=$data['email']?>" id="email">
        <input type="submit" value="Update">
    </form>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>