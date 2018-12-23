
  

<article class="post-wrapper">

<header class="entry-header-wrapper clearfix">

 
  
  <div class="entry-header">
    <h2 class="entry-title"><?php echo $full->judul;?> </h2>

    <div class="entry-meta">
        <ul class="list-inline">
            <li>
                <i class="fa fa-user"></i><a href="#">Admin</a>
            </li>

            <li>
                <i class="fa fa-clock-o"></i><a href="#"><?php echo $full->tanggal;?></a>
            </li>
        </ul>
    </div><!-- .entry-meta -->
  </div>

</header><!-- /.entry-header-wrapper -->


  <img src="<?php echo base_url('assets/img/article/'.$full->foto);?>" class="img-responsive" alt="" >

<?php echo $full->isi;?>

<div class="entry-content">
 
</div><!-- .entry-content -->


<footer class="entry-footer">
  <div class="post-tags">
    <span class="tags-links">
      <i class="fa fa-tags"></i><a href="#"><?php echo $full->catagori;?></a>
    </span>
  </div>
</footer>

</article>
<div class="comments-wrapper">
<div class="comments-tab">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-justified" role="tablist">
    <li role="presentation" class="active"><a href="#default-comment" class="waves-effect waves-light"  role="tab" data-toggle="tab">Leave a comment now</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="panel-body">
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active" id="default-comment">
        <div class="comment-respond">

          <?php echo form_open('article/komentar'); ?>
            <div class="form-group">
              <div class="row">

                <div class="col-sm-4 comment-form-author">
                  <input class="form-control" id="author" placeholder="Your Name" name="nama" type="text" value="" aria-required="true" required>
                </div>

                <div class="col-sm-4 comment-form-email">
                  <input id="email" class="form-control" name="email" placeholder="Email Address" type="email" value="" aria-required="true" required>
                </div>

              </div>

            </div>

            <div class="form-group comment-form-comment">
              <textarea class="form-control" id="comment" name="isi" placeholder="Comment" rows="8" aria-required="true" required></textarea>
            </div>
            <input type="hidden" name="id_forum" value="<?php echo $full->id;?>">
            <input type="hidden" name="judul" value="<?php echo $full->judul;?>">

            <div class="form-submit">
                <button class="btn btn-lg pink waves-effect waves-light" name="submit" type="submit" id="submit" value="" >Submit</button>
            </div>
          <?php echo form_close(); ?>

        </div>

      </div>
    </div>
  </div>
</div>
<ul class="media-list comment-list mt-30">

    <!-- Comment Item start-->
    <?php foreach ($komentar as $row) { ?>
    <li class="media">
        <div class="media-left">
            <a href="#">
                <img class="avatar" src="<?php echo base_url('assets/img/user/'.$row->foto_user.'.png');?>" alt="user komentar">
            </a>
        </div>

        <div class="media-body">
            <div class="comment-info">
                <h4 class="author-name"><?php echo $row->nama;?></h4>

                <div class="comment-meta">
                  <a class="comment-report-link" href="#"><?php echo $row->waktu;?></a>
                </div>
            </div>
            <p><?php echo $row->isi;?></p> 
        </div>
    </li>
    <?php }?>
</ul>
</div>
