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
      <form id="add_task" action="<?= base_url('createtodo') ?>" method="POST">
        <input type="text" id="input_task" name="nama" placeholder="New task">
        <button type="button" action id="add_button"><i class="fa fa-plus" aria-hidden="true"></i></button>
      </form>
      <div>
        <ul id="task_list">
          <?php foreach ($todo as $key => $todomodel) : ?>
            <li>
              <input type="checkbox">
              <span class="input"> <?= $todomodel['nama'] ?></span>
              <a href="<?= base_url('todoapp/update/' . $todomodel['id']) ?>"> <button type="submit" class="edit_task_button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
              <a href="<?= base_url('todoapp/delete/' . $todomodel['id']) ?>"> <button type="submit" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>

    <script src="app.js"></script>
</body>

</html>