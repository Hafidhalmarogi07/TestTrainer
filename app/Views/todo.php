<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App - Eka Prasetyo Ariefin</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('scss/index.css') ?>" media="all" />


</head>

<body>

    <div class="container flex lists">
        <div class="one_list">
            <div class="header_title">
                <span class="input_title">Todo list</span>
                <button type="button" class="edit_title_button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
            </div>
            <form id="add_task" method="post" action="<?= base_url('todo/process_add') ?>">
                <input type="text" id="input_task" name="nama" placeholder="New task">
                <button type="submit" id="add_button"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </form>
            <div>
                <ul id="task_list">
                    <?php foreach ($getActivity as $x) { ?>
                        <li>
                            <input type="checkbox">
                            <span class="input"><?= $x['nama']; ?></span>
                            <button type="button" class="edit_task_button" onclick="location.href='<?= base_url('todo/edit/' . $x['id']) ?>'"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                            <button type="button" class="delete" onclick="location.href='<?= base_url('todo/process_delete/' . $x['id']) ?>'"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <script src="app.js"></script>
</body>

</html>