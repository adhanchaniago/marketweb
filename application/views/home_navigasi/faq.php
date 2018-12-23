
 <section class="section-padding" id="faq">
            <div class="container">
              <div class="text-center mb-80 wow fadeInUp" data-wow-delay=".2s">
                  <h2 class="section-title text-capitalize">Frequently asked questions</h2>
              </div>


              <div class="row">
                <div class="col-md-14 mb-sm-50">
                  <div class="panel-group flat-accordion brand-accordion z-depth-1" id="flat-one">
                  <?php $no=1; foreach ($table2 as $row) {?>
                    <div class="panel panel-default wow fadeInUp" data-wow-delay=".2s">
                      <div class="panel-heading">
                        <h3 class="panel-title">
                          <a data-toggle="collapse" data-parent="#flat-one" href="#collapse-flat-<?php echo $row->id;?>">
                            <?php echo $no++.'&nbsp '.$row->question ;?>
                          </a>
                        </h3>
                      </div>
                      <div id="collapse-flat-<?php echo $row->id;?>" class="panel-collapse collapse in">
                        <div class="panel-body">
                         <?php echo $row->answer;?>
                        </div>
                      </div>
                    </div>
                  <?php }?>
                    
                  </div>



                </div><!-- /.col-md-6 -->


            


              <div class="text-center mt-80 wow fadeInUp" data-wow-delay=".2s">
                  <h2 class="mb-30 text-uppercase">untuk pertanyaan lainya silahkan hubungi kami.</h2>
                  <a href="#contact" class="btn btn-lg waves-effect waves-light">Contact Support</a>
              </div>
            </div><!-- /.container -->
        </section>
