
<div class="container flex lists">
  <div class="one_list">
    <div class="header_title">
      <span class="input_title">Todo list</span>
      
      <button type="button" class="edit_title_button"><i class="fa fa-pencil" aria-hidden="true"></i></button>
    </div>
    
      <form method="post" action="<?= base_url('barang/add');?>">
                <div class="form-group">
                    <input type="text" id="input_task"name="nama" class="form-control" placeholder="New task" required>
                    <button type="submit" id="add_button" type="submit"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    
                  </div>
        </form>
    <div>
      <ul id="task_list">
      <?php $no=1; 
      foreach($getBarang as $isi){?>
        <li>
          <input type="checkbox">
          <span class="input"><?= $isi['nama_barang'];?></span>
          <button type="button" class="edit_task_button"><a href="<?= base_url('barang/edit/'.$isi['id_barang']);?>" </a><i class="fa fa-pencil" aria-hidden="true"> </i></button>
          <button type="button" class="delete"><a href="<?= base_url('barang/hapus/'.$isi['id_barang']);?>" </a><i class="fa fa-trash-o" aria-hidden="true"></i></button>
        </li>
    <?php $no++;}?>
        <!-- <li>
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
        </li> -->
      </ul>	
     

     


    </div>
  </div>