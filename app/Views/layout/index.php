<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ujian B-E</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/index.css">

</head>
<body>

<div class="container flex lists">
  <div class="one_list">
    <div class="header_title">
      <span class="input_title">Todo list</span>
      <button type="button" class="edit_title_button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
    </div>
    
    <form id="add_task" action="<?= base_url('/create') ?>" method="post">
    <?= csrf_field(); ?>
      <input type="text" id="input_task" name="description" placeholder="New task">
      <button type="submit" id="add_button"><i class="fa fa-plus" aria-hidden="true"></i></button>
    </form>
    <div>
      <ul id="task_list">
          <?php
          foreach ($todo as $row) {
              ?>
        <li>
          <input type="checkbox">
          <span class="input"><?= $row['description']; ?></span>
          <a href="<?= base_url('edit/'.$row['id']) ?>" class="edit_task_button"><i class="fa fa-pencil" aria-hidden="true"></i></a>
          <a href="<?= base_url('delete/'.$row['id']) ?>" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
        </li>

        <?php
        }
        ?>
      </ul>	
    </div>
  </div>
  
</body>
</html>