<?php if($this->session->flashdata('info')): ?>        
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Info!</h4>
    <?php echo $this->session->flashdata('info'); ?>
  </div>
<?php endif; ?>
<section class="content">
  <div class="row">

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-commenting-o"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Komentar</span>
          <span class="info-box-number"><?php echo $jumlah_koment;?></span>
        </div>
      </div>
    </div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-clone"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Event</span>
          <span class="info-box-number"><?php echo $jumlah_article;?></span>
        </div>
      </div>
    </div>

      <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-blue"><i class="fa fa-envelope"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Orderan</span>
          <span class="info-box-number"><?php echo $jumlah_pesan;?></span>
        </div>
      </div>
    </div>

     <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fa fa-area-chart"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Pengunjung</span>
          <span class="info-box-number"><?php $count_my_page = ("hitcounter.txt"); $hits = file($count_my_page); $hits[0] ++; $fp = fopen($count_my_page , "w"); fputs($fp , "$hits[0]"); fclose($fp); echo $hits[0]; ?></span>
        </div>
      </div>
    </div>

     <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="fa fa-user"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Member</span>
          <span class="info-box-number"><?php echo $jumlah_member;?></span>
        </div>
      </div>
    </div>

    


  </div>

   <div class="row">
        <div class="col-md-12">
          <!-- AREA CHART -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Area Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="areaChart" style="height:250px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>




</section>






