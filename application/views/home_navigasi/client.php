 <section class="section-padding">
          <div class="container-fluid">
            <div class="text-center mb-50">
                <h2 class="section-title">Portofolio</h2>
              
            </div>


            <div class="portfolio-container text-center">
                <ul class="portfolio-filter brand-filter">
                    <li class="active waves-effect waves-light" data-group="all">Website</li>
                   
                </ul>
                <div class="portfolio col-3 mtb-50 gutter">
                  <?php foreach ($table3 as $row) {?>
                    <div class="portfolio-item" data-groups='["all"]'>
                        <div class="portfolio-wrapper">
                          <div class="thumb">
                              <div class="bg-overlay"></div>
                              <img src="<?php echo base_url('assets/img/web/'.$row->gambar);?>" alt="">
                              <div class="portfolio-intro">
                                <div class="action-btn">
                                  <a href="<?php echo base_url('assets/img/web/'.$row->gambar);?>" class="tt-lightbox" title=""><i class="fa fa-eye"></i></a>
                                </div>
                                <h2><a href="<?php echo $row->link;?>" target="_blank"><?php echo $row->deskripsi;?></a></h2>
                               
                              </div>
                          </div>
                        </div>
                    </div>
                    <?php }?>

                </div><!-- /.portfolio -->

                <div class="load-more-button text-center">
                  <a class="waves-effect waves-light btn btn-large pink"> <i class="fa fa-spinner left"></i> Load More</a>
                </div>

            </div><!-- portfolio-container -->
          </div>
        </section>
