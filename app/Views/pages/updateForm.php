<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/scss/index.css'); ?>">

</head>
<body>
<div class="container flex lists">
  <div class="one_list">
    <div class="header_title">
      <span class="input_title">Todo list</span>
    </div>

    <form action="/update/<?= $datas['id_todo']; ?>" method="post" id="add_task">
      <input type="text" id="input_task" name="input_task" placeholder="New task" value="<?= $datas['todo']; ?>">
      <button type="submit" id="add_button"><i class="fa fa-plus" aria-hidden="true"></i></button>
    </form>
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>