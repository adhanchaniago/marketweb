

<section class="section-padding list-news">
            <div class="container">

              <div class="text-center mb-80 wow fadeInUp" data-wow-delay=".2s">
                  <h2 class="section-title text-uppercase">Artikel</h2>
                  <hr>
              </div>


              <div class="row">
              <?php foreach ($event_tb as $row) {?>
                <div class="col-md-4 wow fadeInUp" data-wow-delay=".2s">
                
                    <article class="post-wrapper list-article">

                      <div class="hover-overlay brand-bg"></div>

                      <div class="thumb-wrapper waves-effect waves-block waves-light">
                        <a href="<?php echo base_url('article/single_art/'.$row->id.'/'.$row->judul);?>" target="_blank"><img src="<?php echo base_url('assets/img/article/'.$row->foto);?>" width="300" height="200" alt="" ></a>
                      </div><!-- .post-thumb -->

                      <div class="blog-content">
                        <header class="entry-header-wrapper">
                          <div class="entry-header">
                            <h2 class="entry-title"><a href="<?php echo base_url('article/single_art/'.$row->id.'/'.$row->judul);?>"><?php echo $row->judul; ?></a></h2>

                            <div class="entry-meta">
                                <ul class="list-inline">
                                    
                                    <li>
                                        <i class="fa fa-clock-o"></i> <a href="#"><?php echo $row->tanggal; ?></a>
                                    </li>
                                </ul>
                            </div><!-- .entry-meta -->
                          </div><!-- /.entry-header -->
                        </header><!-- /.entry-header-wrapper -->

                        <div class="entry-content">
                            <?php echo strip_tags(word_limiter(strip_tags($row->isi),40))?>
                        </div><!-- .entry-content -->
                      </div>
                      <a href="<?php echo base_url('article/single_art/'.$row->id.'/'.$row->judul);?>" class="waves-effect waves-light btn purple"><i class="material-icons left">&#xE037;</i> Baca Selanjutnya</a>

                    </article><!-- /.post-wrapper -->
                  
                </div><!-- /.col-md-6 -->
                <?php }?>

              </div><!-- /.row -->

            </div><!-- /.container -->
        </section>
        <!-- List News End -->
