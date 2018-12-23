<section class="content">
  <div class="box box-default">
    <div class="box-body">
      <!--form-->
      <?php echo form_open('admin/edit_product_p'); ?>
         <?php if($this->session->flashdata('info')): ?>
          <div id="error"><?php echo $this->session->flashdata('info'); ?></div>
        <?php endif; ?>

        <div class="form-group">
          <label for="judul" class="col-form-label">Judul heading</label>
          <input type="text" class="form-control"  name="title" value="<?php echo $product->title; ?>" required>
        </div>

         <div class="form-group">
          <label for="price" class="col-form-label">Price</label>
          <input type="text" class="form-control"  name="price" required value=" <?php echo $product->price; ?>">
        </div>

        <div class="form-group">
          <label for="isi" class="col-form-label">Isi heading</label><br>
          <textarea id="editor1" name="deskripsi" rows="10" cols="80" >
            <?php echo $product->deskripsi ?>
          </textarea>
        </div>

        <input type="hidden" name="id" value="<?php echo $product->id;?>">

              
        <!--form-->
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn btn-primary" value="Update">
        </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</section>