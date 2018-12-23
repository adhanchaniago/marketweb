 <div class="widget widget_categories">
  <h3 class="widget-title">Categories</h3>   
  <ul>
  <?php foreach ($catagori_db as $row) {?>
    <li><a href="<?php echo base_url('article/cari_catagori/'.$row->catagori);?>"><?php echo $row->catagori;?></a></li>
   <?php }?>
  </ul>
</div><!-- /.widget_categories -->