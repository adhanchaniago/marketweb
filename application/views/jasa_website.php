<?php $this->load->view($header); ?>
 <section class="blog-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="posts-content single-post">

                <article class="post-wrapper">
                	<div class="entry-content">
                    <p><?php echo $seo->isi;?></p>
                  	</div>
                </article>              
              </div>
            </div>

          </div>
    </div>
</section>
<?php $this->load->view($product); ?>
<?php $this->load->view($footer); ?>