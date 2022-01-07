<?php
include 'functions.php';
// Connect to MySQL database
$pdo = pdo_connect_mysql();
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page
$records_per_page = 10;


// Prepare the SQL statement and get records from our datas table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM data ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$datas = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Get the total number of datas, this is so we can determine whether there should be a next and previous button
$num_datas = $pdo->query('SELECT COUNT(*) FROM data')->fetchColumn();
?>


<?=template_header('Read')?>

<div class="content read">
	<h2>Read Data</h2>
	<a href="create.php" class="create-contact">Create Data</a>
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Nama</td>
                <td>Email</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datas as $data): ?>
            <tr>
                <td><?=$data['id']?></td>
                <td><?=$data['nama']?></td>
                <td><?=$data['email']?></td>
                <td class="actions">
                    <a href="update.php?id=<?=$data['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?id=<?=$data['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="read.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_datas): ?>
		<a href="read.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>

<?=template_footer()?>