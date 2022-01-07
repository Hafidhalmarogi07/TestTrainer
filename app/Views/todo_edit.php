<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('scss/index.css') ?>" media="all" />

</head>

<body>
    <div class="container flex lists">
        <div class="one_list">
            <div class="header_title">
                <span class="input_title">Edit Activity</span>
                <button type="button" class="edit_title_button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
            </div>
            <form id="add_task" method="post" action="<?= base_url('todo/process_edit') ?>">
                <input type="text" id="input_task" name="nama" value="<?= $info->nama ?>">
                <input type="hidden" id="input_task" name="id" value="<?= $info->id ?>">
                <button type="submit" id="add_button"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </form>
            <p style="color:white">
                after edit, press Enter or click add button
                <br><br>
                <a href="<?= base_url('todo/'); ?>">Click here to cancel</a>
            </p>
        </div>
    </div>

    <!-- <script src="app.js"></script> -->
</body>

</html>