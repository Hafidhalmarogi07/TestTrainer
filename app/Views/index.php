<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>

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
      <form action="create-note" id="add_task" name="add_task" method="get">
        <input type="text" id="input_task" name="input" placeholder="New task">
        <button type="submit" id="add_button"><i class="fa fa-plus" aria-hidden="true"></i></button>
      </form>
      <div>
        <ul id="task_list">
          <?php foreach ($note as $n) : ?>
            <li>
              <span class="input"><?= $n['isi'] ?></span>
              <a href="edit-note/<?= $n['id'] ?>" class="edit_task_button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
              <a href="delete-note/<?= $n['id'] ?>" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
</body>

</html>