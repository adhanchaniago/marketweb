<div  class="widget widget_tt_popular_post">
  <div class="tt-popular-post border-bottom-tab">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs">
          <li class="active">
              <a href="#tt-popular-post-tab1" data-toggle="tab" aria-expanded="true">Article Populer</a>
          </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
          <!-- latest post tab -->
          <div id="tt-popular-post-tab1" class="tab-pane fade active in">
          <?php foreach ($article_populer as $row) {?>

            <div class="media">
              <div class="media-body">
                <h4><a href="<?php echo base_url('article/single_art/'.$row->id.'/'.$row->judul);?>"><?php echo $row->judul;?></a></h4>
              </div> <!-- /.media-body -->
            </div> <!-- /.media -->
          <?php }?>
          
          </div>
      </div><!-- /.tab-content -->
  </div><!-- /.tt-popular-post -->
</div><!-- /.widget_tt_popular_post -->