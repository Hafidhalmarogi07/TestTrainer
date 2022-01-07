<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/scss/index.css">

</head>

<body>

    <div class="container flex lists">
        <div class="one_list">
            <div class="header_title">
                <span class="input_title">Todo list</span>
                <button type="button" class="edit_title_button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
            </div>
            <form action="save/<?= $note['id'] ?>" id="add_task" name="add_task" method="post">
                <input type="text" id="input_task" name="input" placeholder="New task" value="<?= $note['isi'] ?>">
            </form>
        </div>
</body>

</html>