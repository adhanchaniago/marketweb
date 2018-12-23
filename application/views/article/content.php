<?php foreach ($list as $row) {?>
<article class="post-wrapper">

  <div class="thumb-wrapper">
  <a href="<?php echo base_url('article/single_art/'.$row->id.'/'.$row->judul) ?>">
    <img src="<?php echo base_url('assets/img/article/'.$row->foto) ?>" class="img-responsive" alt="" >
  </a>
    

    <div class="entry-header">
      <span class="posted-in">
        <a href="#"><?php echo $row->catagori;?></a>
      </span>

      <h2 class="entry-title"><a href="<?php echo base_url('article/single_art/'.$row->id.'/'.$row->judul) ?>"><?php echo $row->judul;?></a></h2>

    </div><!-- .entry-header -->

    

    <span class="post-comments-number">
      <i class="fa fa-comments"></i><a href="#"><?php echo $row->jumlah_komentar;?></a>
    </span>

  </div><!-- .post-thumb -->


  <div class="entry-content">
    <p><?php echo strip_tags(word_limiter($row->isi,50))?></p>
  </div><!-- .entry-content -->

</article><!-- /.post-wrapper -->
<?php }?>