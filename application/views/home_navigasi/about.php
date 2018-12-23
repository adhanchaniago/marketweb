<!-- SECTION1 -->
<section id="about" class="section-padding wow fadeInLeft" data-wow-delay=".2s">
    <div class="container">

      <div class="row">
        <div class="col-md-6 mb-sm-50">
          
          <img src="<?php echo base_url('assets/img/web/'.$des1->gambar)?>" alt="" class="img-responsive">
        </div><!-- /.col-md-6 -->

        <div class="col-md-6">
          <h2 class="font-40 mb-30"><?php echo $des1->title;?></h2>
          <?php echo $des1->deskripsi;?>
        </div><!-- /.col-md-6 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
</section>



<section class="section-padding">
    <div class="container">

      <div class="text-center mb-80">
          <h2 class="section-title text-uppercase"><?php echo $work_h->title?></h2>
          <p class="section-sub"><?php echo $work_h->deskripsi?>.</p>
      </div>

      <div class="seo-featured-carousel brand-dot">
        <?php foreach ($work as $row ) {?>
          <div class="featured-item seo-service">
              <div class="icon">
                  <img class="img-responsive" src="<?php echo base_url('assets/img/web/'.$row->gambar)?>" alt="">
              </div>
              <div class="desc">
                  <h2><?php echo $row->title;?></h2>
                  <p><?php echo $row->deskripsi;?></p>
                  <div class="bg-overlay"></div>
                  <p><a class="learn-more" href="#contact">contact <i class="fa fa-long-arrow-right"></i></a></p>
              </div>
          </div><!-- /.featured-item -->
          <?php } ?>

      </div><!-- /.seo-featured -->

    </div><!-- /.container -->
</section>
