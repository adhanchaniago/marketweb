<style type="text/css">
  .device-mockup[data-device="ipad"][data-orientation="landscape"][data-color="white"] > .device {
  background-image: url("<?php echo base_url('assets/img/ipad_land_white.png');?>");
}
</style>
 <section class="padding-top-100 section-padding">
          <div class="container">

                <div class="text-center mb-50 wow fadeInUp" data-wow-delay=".2s">
                    <h2 class="section-title text-uppercase">Contoh Apps Compro</h2>
                    
                </div>
              <div class="col-md-10 col-md-offset-1 screenshot-carousel-wrapper">

                <div class="device-mockup wow fadeInUp" data-wow-delay=".2s" data-device="ipad" data-color="white" data-orientation="landscape">
                  <div class="device">
                    <div class="screen">

                      <!-- START BOOTSTRAP CAROUSEL -->
                      <div id="screenshot-carousel" class="carousel slide screenshot-carousel" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                          <?php foreach ($contoh as $row) {?>

                          <div class="item <?php echo $row->active;?>">
                            <img src="<?php echo base_url('assets/img/'.$row->gambar);?>" alt="" title="" />
                          </div>

                          <?php }?>

                         

                        </div>

                      </div>
                      <!-- END BOOTSTRAP CAROUSEL -->

                    </div><!-- /.screen -->
                  </div><!-- /.device -->
                </div><!-- /.device-mockup -->

                <!-- Controls -->
                <a class="left carousel-control z-depth-2 pink" href="#screenshot-carousel" role="button" data-slide="prev">
                  <span class="fa fa-angle-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control pink" href="#screenshot-carousel" role="button" data-slide="next">
                  <span class="fa fa-angle-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>

              </div>

          </div>
        </section>