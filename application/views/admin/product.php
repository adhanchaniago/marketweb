 <!-- modal tambah product -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!--form-->
      <?php echo form_open('admin/add_product/'); ?>
        <div class="form-group">
          <label for="judul" class="col-form-label">Judul Product</label>
          <input type="text" class="form-control"  name="title" required>
        </div>

         <div class="form-group">
          <label for="price" class="col-form-label">Price</label>
          <input type="number" class="form-control"  name="price" required>
        </div>

        <div class="form-group">
          <label for="price" class="col-form-label">katagori</label>
          <select value="" name="katagori" class="form-control" required>
            <option value="website">Website</option>
            <option value="google seo">google seo</option>
            <option value="sosial ads">sosial ads</option>
          </select>
        </div>

        <div class="form-group">
          <label for="isi" class="col-form-label">Deskripsi Product</label><br>
          <textarea id="editor1" name="deskripsi" rows="10" cols="80" required>
            
          </textarea>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="submit" class="btn btn-primary" value="Tambah Product">
      </div>
    <?php echo form_close(); ?>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var recipient = button.data('whatever')
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>



 <?php if($this->session->flashdata('info')): ?>        
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-check"></i> Info!</h4>
        <?php echo $this->session->flashdata('info'); ?>
      </div>
    <?php endif; ?>

<h3>heading deskripsi Product</h3>
<table id="example1" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>judul</th>
      <th>deskripsi</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
      <td><?php echo $product_h->title ;?></td>
      <td><?php echo $product_h->deskripsi ;?></td>
      <td>
        <a href="<?php echo base_url('admin/edit_product_h/'); ?>" >
           <button type="button" class="btn btn-outline-primary btn-sm">
              <i class="fa fa-edit ">Edit</i>
            </button>
        </a>
         <a href="<?php echo base_url('home');?>" target="_blank" >
           <button type="button" class="btn btn-outline-primary btn-sm">
              <i class="fa fa-tripadvisor ">Lihat</i>
            </button>
        </a>
      </td>
    </tr>
  </tbody>
</table>


   
    <!-- table work -->

<div class="">
      <div class="box">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Tambah Product</button>
            <div class="box-header">
              <h3 class="box-title">table product</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>judul</th>
                    <th>deskripsi</th>
                    <th>price</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $no=1; foreach ($table as $row ) {?>
                  <tr>
                    <td><?php echo $no++ ;?></td>
                    <td><?php echo $row->title ;?></td>
                    <td><?php echo $row->deskripsi ;?></td>
                     <td><?php echo $row->price ;?></td>
                    <td>
                      <a href="<?php echo base_url('admin/edit_product/'.$row->id); ?>" >
                         <button type="button" class="btn btn-outline-primary btn-sm">
                            <i class="fa fa-edit ">Edit</i>
                          </button>
                      </a>
                       <a href="<?php echo base_url('admin/del_product/'.$row->id);?>" onclick="javascript: return confirm('Anda yakin hapus ?')"  >
                         <button type="button" class="btn btn-outline-primary btn-sm">
                            <i class="fa fa-trash">Hapus</i>
                          </button>
                      </a>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>

</div>

