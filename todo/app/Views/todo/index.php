<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('\assets\scss/index.css'); ?>">

</head>

<body>

    <div class="container flex lists">
        <div class="one_list">
            <div class="header_title">
                <span class="input_title">Todo list</span>
                <button type="button" class="edit_title_button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
            </div>
            <form action="<?= base_url('/home/save'); ?>" method="POST">
                <input type="text" id="input_task" name="input" placeholder="New task">
                <button type="submit" id="add_button"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </form>
            <div>
                <ul id="task_list">

                    <?php foreach ($todo as $t) : ?>
                        <li>
                            <input type="checkbox">
                            <span class="input"><?= $t['task']; ?></span>

                            <a class="edit_task_button" href="<?= base_url('/home/edit/'); ?>/<?= $t['id']; ?>">
                                <button type="button" class="edit_task_button">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </a>

                            <a class="button" href="<?= base_url('/home/delete/'); ?>/<?= $t['id']; ?>">
                                <button type="button" class="delete">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>
                            </a>
                        </li>

                    <?php endforeach; ?>

                    <!-- <li>
                        <input type="checkbox">
                        <span class="input">BCA Syariah</span>
                        <button type="button" class="edit_task_button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                        <button type="button" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </li> -->
                </ul>
            </div>
        </div>

        <script src="app.js"></script>
</body>

</html>