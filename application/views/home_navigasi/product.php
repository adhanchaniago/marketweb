<!-- sample modal content -->



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
                           <a href="" class="btn btn-primary waves-effect waves-light">Pesan Sekarang</a>
                            
                        </div>   
                    </div> <!-- /.table-footer -->
                </div> <!-- /.table-contents -->
            </div><!-- /.pricing-table -->
        </div><!-- /.col-md-4 -->
    <?php }?>

      </div><!-- /.row -->
    </div><!-- /.container -->

</section>