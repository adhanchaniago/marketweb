<!-- sample modal content -->

<div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="custom-width-modalLabel">Pesan Sekarang</h4>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('home/order');?>" method="post" enctype="multipart/form-data" onSubmit="validasi()">

                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-field">
                        <input type="text" name="nama" class="validate" id="nama" required>
                        <label for="nama">Nama Lengkap</label>
                      </div>

                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                      <div class="input-field">
                        <input id="hp" type="tel" name="hp" class="validate" required>
                        <label for="hp">Nomor HP</label>
                      </div>
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->

                <div class="input-field">
                  <label class="sr-only" for="no_ktp">Email</label>
                  <input id="email" type="email" name="email" class="validate" required>
                  <label for="ktp" data-error="wrong" data-success="right">Email</label>
                </div>

                 <div class="input-field">
                  <label class="sr-only" for="paket">Paket Yang Dipesan</label>
                  <label for="paket" data-error="wrong" data-success="right">Pilih Paket</label>
                </div>
               

                <div class="row">

                    <div class="col-md-4">
                      <div class="input-field">
                        <input id="compro1" type="checkbox" name="compro1" value="Basic" >
                        <label for="compro1">Basic</label>
                      </div>
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-4">
                      <div class="input-field">
                        <input id="compro2" type="checkbox" name="compro2" value="Advance" >
                        <label for="compro2">Advance</label>
                      </div>
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-4">
                      <div class="input-field">
                        <input id="compro3" type="checkbox" name="compro3" value="Proffesional" >
                        <label for="compro3">Proffesional</label>
                      </div>
                    </div><!-- /.col-md-6 -->

                     <!-- <div class="col-md-4">
                      <div class="input-field">
                        <input id="website" type="checkbox" name="website" value="website" >
                        <label for="website">Website</label>
                      </div>
                    </div> -->

                    <!-- <div class="col-md-4">
                      <div class="input-field">
                        <input id="logo" type="checkbox" name="logo" value="Design Logo" >
                        <label for="logo">Design Logo</label>
                      </div>
                    </div> -->

                </div><!-- /.row -->

                <div class="input-field">
                  <label class="sr-only" for="detail">Detail Spesifikasi</label>
                  <input id="detail" type="text" name="detail" class="validate" required>
                  <label for="detail" data-error="wrong" data-success="right">Detail Spesifikasi</label>
                </div>




                <input type="submit" name="submit" class="btn btn-primary" value="Pesan">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
               
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<section class="section-padding wow fadeInUp" data-wow-delay=".2s">
    <div class="container" id="product">

      <div class="text-center mb-80">
          <h2 class="section-title text-uppercase"><?php echo $product_h->title;?></h2>
          <p class="section-sub"><?php echo $product_h->deskripsi;?></p>
      </div>

      <div class="row">
      <?php foreach ($table as $row) {?>
          
        <div class="col-md-4 wow fadeInRight" data-wow-delay=".2s">
            <div class="pricing-table">
                <div class="table-contents text-center">
                    <div class="table-header" style="background-color: #333;">
                        <div class="package-name">
                            <span><?php echo $row->title;?></span>
                        </div>
                        
                    </div> <!-- /.table-header -->

                    <div class="table-info">
                        <?php echo $row->deskripsi;?>                             
                    </div><!-- /.table-info -->

                    <div class="table-footer">
                        <div class="purchase-button">
                           <a href="#contact" class="btn btn-primary waves-effect waves-light">Pesan Sekarang</a>
                            
                        </div>   
                    </div> <!-- /.table-footer -->
                </div> <!-- /.table-contents -->
            </div><!-- /.pricing-table -->
        </div><!-- /.col-md-4 -->
    <?php }?>

      </div><!-- /.row -->
    </div><!-- /.container -->

</section>