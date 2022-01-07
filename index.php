<?php
include 'functions.php';
// Your PHP code here.

// Home Page template below.
?>

<?=template_header('Home')?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="scss/index.css">

</head>
<body>

<div class="container flex lists">
  <div class="one_list">
    <div class="header_title">
      <span class="input_title">Todo list</span>
      <button type="button" class="edit_title_button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
    </div>
    <form id="add_task">
      <input type="text" id="input_task" name="input" placeholder="New task">
      <button type="button" id="add_button"><i class="fa fa-plus" aria-hidden="true"></i></button>
    </form>
    <div>
      <ul id="task_list">
        <li>
          <input type="checkbox">
          <span class="input">Monster Group</span>
          <button type="button" class="edit_task_button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
          <button type="button" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
        </li>
        <li>
          <input type="checkbox">
          <span class="input">BCA Syariah</span>
          <button type="button" class="edit_task_button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
          <button type="button" class="delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
        </li>
      </ul>	
    </div>
  </div>
  
  <script src="app.js"></script>
</body>

<?=template_footer()?>