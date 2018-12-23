   <section class="feature-presentation padding-top-100 section-padding " id="services">
          <div class="container">
            
              <div class="text-center mb-80 wow fadeInUp">
                  <h2 class="section-title text-uppercase"><?php echo $mockup->judul;?></h2>
                  <p class="section-sub"><?php echo $mockup->deskripsi;?></p>
              </div>


            <div class="row">
                <div class="col-md-4 col-sm-6">

                  <div class="featured-item feature-icon icon-hover icon-hover-blue right-icon mb-80 wow fadeInLeft" data-wow-delay=".2s">
                      <div class="icon radius-4">
                          <i class="material-icons colored blue-icon"><?php echo $mockup_des1->icon;?></i>
                      </div>
                      <div class="desc">
                          <h2><?php echo $mockup_des1->judul;?></h2>
                          <p><?php echo $mockup_des1->deskripsi;?></p>
                      </div>
                  </div>

                  <div class="featured-item feature-icon icon-hover icon-hover-blue right-icon mb-80 wow fadeInLeft" data-wow-delay=".4s">
                     <div class="icon radius-4">
                          <i class="material-icons colored blue-icon"><?php echo $mockup_des2->icon;?></i>
                      </div>
                      <div class="desc">
                          <h2><?php echo $mockup_des2->judul;?></h2>
                          <p><?php echo $mockup_des2->deskripsi;?></p>
                      </div>
                  </div>

                  <div class="featured-item feature-icon icon-hover icon-hover-blue right-icon wow fadeInLeft" data-wow-delay=".6s">
                      <div class="icon radius-4">
                          <i class="material-icons colored blue-icon"><?php echo $mockup_des3->icon;?></i>
                      </div>
                      <div class="desc">
                          <h2><?php echo $mockup_des3->judul;?></h2>
                          <p><?php echo $mockup_des3->deskripsi;?></p>
                      </div>
                  </div>

                </div><!-- /.col-md-4 -->

                <div class="col-md-4 hidden-sm hidden-xs wow fadeInUp">
                    <img class="img-responsive" src="<?php echo base_url('assets/img/'.$mockup->gambar);?>" alt="">
                </div><!-- /.col-md-4 -->

                <div class="col-md-4 col-sm-6">

                  <div class="featured-item feature-icon icon-hover icon-hover-blue mb-80 wow fadeInRight" data-wow-delay=".2s">
                     <div class="icon radius-4">
                          <i class="material-icons colored blue-icon"><?php echo $mockup_des4->icon;?></i>
                      </div>
                      <div class="desc">
                          <h2><?php echo $mockup_des4->judul;?></h2>
                          <p><?php echo $mockup_des4->deskripsi;?></p>
                      </div>
                  </div>

                  <div class="featured-item feature-icon icon-hover icon-hover-blue mb-80 wow fadeInRight" data-wow-delay=".4s">
                      <div class="icon radius-4">
                          <i class="material-icons colored blue-icon"><?php echo $mockup_des5->icon;?></i>
                      </div>
                      <div class="desc">
                          <h2><?php echo $mockup_des5->judul;?></h2>
                          <p><?php echo $mockup_des5->deskripsi;?></p>
                      </div>
                  </div>

                  <div class="featured-item feature-icon icon-hover icon-hover-blue wow fadeInRight" data-wow-delay=".6s">
                      <div class="icon radius-4">
                          <i class="material-icons colored blue-icon"><?php echo $mockup_des6->icon;?></i>
                      </div>
                      <div class="desc">
                          <h2><?php echo $mockup_des6->judul;?></h2>
                          <p><?php echo $mockup_des6->deskripsi;?></p>
                      </div>
                  </div>

                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->

          </div><!-- /.container -->
        </section>