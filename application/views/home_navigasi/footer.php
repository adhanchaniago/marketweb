 <!-- contact-form-section -->
        <section id="contact" class="section-padding">
          
          <div class="container">

              <div class="text-center mb-80 wow fadeInUp" data-wow-delay=".2s">
                  <h2 class="section-title text-uppercase">Dapatkan Proposal Kami</h2>
              </div>

            <div class="row">
                <div class="col-md-8 wow fadeInUp" data-wow-delay=".2s">
                <?php if($this->session->flashdata('info')): ?>
                  <div class="alert success-border" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <i class="fa fa-thumbs-o-up"></i> <?php echo $this->session->flashdata('info'); ?>
                  </div>
                <?php endif; ?>
                    <?php echo form_open('home/kirim_pesan'); ?>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-field">
                            <input type="text" name="nama" class="validate" id="nama">
                            <label for="nama">Name</label>
                          </div>

                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <div class="input-field">
                            <label class="sr-only" for="email">Email</label>
                            <input id="email" type="email" name="email" class="validate" >
                            <label for="email" data-error="wrong" data-success="right">Email</label>
                          </div>
                        </div><!-- /.col-md-6 -->
                      </div><!-- /.row -->

                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-field">
                            <input id="hp" type="tel" name="hp" class="validate" >
                            <label for="hp">Phone Number</label>
                          </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <div class="input-field">
                            <input id="company" type="text" name="company" class="validate" >
                            <label for="company">Your company</label>
                          </div>
                        </div><!-- /.col-md-6 -->
                      </div><!-- /.row -->

                      <div class="input-field">
                        <textarea name="pesan" id="pesan" class="materialize-textarea" ></textarea>
                        <label for="pesan">Message</label>
                      </div>

                      <button type="submit" name="submit" class="waves-effect waves-light btn submit-button blue mt-30">Send Message</button>
                    <?php echo form_close(); ?>
                </div><!-- /.col-md-8 -->

                <div class="col-md-4 contact-info wow fadeInUp" data-wow-delay=".2s">

                    <address>
                      <i class="material-icons brand-color">&#xE55F;</i>
                      <div class="address">
                       <?php echo $info->alamat;?>
                      </div>
                      <br>

                      <i class="material-icons brand-color">&#xE61C;</i>
                      <div class="phone">
                       <?php echo $info->hp;?>
                      </div>
                      <br>

                      <i class="material-icons brand-color">&#xE0E1;</i>
                      <div class="mail">
                        <p><a href="mailto:#"><?php echo $info->email?></a><br>
                      </div>
                    </address>

                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
          </div>
        </section>
        <footer class="footer footer-four">
            <div class="primary-footer dark-bg lighten-1 text-center">
                <div class="container">

                  <a href="#top" class="page-scroll btn-floating btn-large back-top waves-effect waves-light" data-section="#top">
                    <i class="material-icons">&#xE316;</i>
                  </a>

                  <ul class="social-link tt-animate ltr mt-20">
                    <li><a href="<?php echo $info->facebook?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo $info->twitter?>" target="_blank""><i class="fa fa-twitter"></i></a></li>
                    <li><a href="<?php echo $info->instagram?>" target="_blank""><i class="fa fa-instagram"></i></a></li>
                  </ul>

                  <hr class="mt-10">

                  <div class="row">
                    <div class="col-md-12">
                          <div class="footer-logo">
                            <img src="" alt="">
                          </div>

                          <div class="footer-intro">
                            <p><?php echo $info->copy_right;?></p>
                          </div>
                    </div><!-- /.col-md-12 -->
                  </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.primary-footer -->
        </footer>
        <!--footer 4 end-->


        <!-- Preloader -->
        <div id="preloader">
          <div class="preloader-position"> 
            <img src="<?php echo base_url('assets/img/Loading_icon.gif');?>" alt="logo" >
            <div class="progress">
              <div class="indeterminate"></div>
            </div>
          </div>
        </div>
        <!-- End Preloader -->

       <?php $this->load->view($script_bottom); ?>

<!--End of Tawk.to Script-->

    </body>

  
</html>