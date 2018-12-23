<?php 
  $active = "class='active'";
  $class = 'active'; 
?>
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active">
      <a href="">
        <i class="fa fa-home"></i> <span>Dashboard</span>
      </a>
      <ul class="treeview-menu <?php echo ($nav_top == 'dashboard')? $class :""; ?>">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'home')? $active :""; ?>>
          <a href="<?php echo base_url('admin/home/'.$admin->level);?>">
        <i class="fa fa-home"></i> home</a></li>
      </ul>
    </li>
    <li class="treeview <?php echo ($nav_top == 'front')? $class :""; ?>">
      <a href="#">
        <i class="fa fa-desktop"></i>
        <span>Front Design</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" >

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'heading')? $active :""; ?>>
          <a href="<?php echo base_url('admin/heading');?>"><i class="fa fa-ellipsis-v"></i> slideshow</a>
        </li>

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'mockup')? $active :""; ?>>
          <a href="<?php echo base_url('admin/mockup');?>"><i class="fa fa-ellipsis-v"></i> Mockup</a>
        </li>

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'deskripsi1')? $active :""; ?>>
          <a href="<?php echo base_url('admin/deskripsi1');?>"><i class="fa fa-ellipsis-v"></i> Deskripsi Section 1</a>
        </li>

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'about')? $active :""; ?>>
          <a href="<?php echo base_url('admin/about');?>"><i class="fa fa-ellipsis-v"></i> Why Us</a>
        </li>

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'deskripsi2')? $active :""; ?>>
          <a href="<?php echo base_url('admin/deskripsi2');?>"><i class="fa fa-ellipsis-v"></i> Deskripsi section 2</a>
        </li>

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'mockup2')? $active :""; ?>>
          <a href="<?php echo base_url('admin/mockup2');?>"><i class="fa fa-ellipsis-v"></i> Example Mockup</a>
        </li>

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'product')? $active :""; ?>>
          <a href="<?php echo base_url('admin/product');?>"><i class="fa fa-ellipsis-v"></i> Produk</a>
        </li>

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'faq')? $active :""; ?>>
          <a href="<?php echo base_url('admin/faq');?>"><i class="fa fa-ellipsis-v"></i> Faq</a>
        </li>

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'partners')? $active :""; ?>>
          <a href="<?php echo base_url('admin/partners');?>"><i class="fa fa-ellipsis-v"></i> Partners</a>
        </li>

      <!--   <li <?php //echo (basename($_SERVER['PHP_SELF']) == 'download')? $active :""; ?>>
          <a href="<?php// echo base_url('admin/download');?>"><i class="fa fa-ellipsis-v"></i> Apps Link Donwload</a>
        </li> -->


      </ul>
    </li>

    <!-- ARTICLE SIDE -->
    <li class="treeview <?php echo ($nav_top == 'article')? $class :""; ?> ">
      <a href="#">
        <i class="fa fa-book"></i>
        <span>Artikel</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'admin_article')? $active :""; ?>>
          <a href="<?php echo base_url('admin_article');?>"><i class="fa fa-copy"></i> Event </a>
        </li>

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'katagori')? $active :""; ?>>
          <a href="<?php echo base_url('admin_article/katagori');?>"><i class="fa fa-bars"></i> Katagori</a>
        </li>

        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'komentar')? $active :""; ?>>
          <a href="<?php echo base_url('admin_article/komentar');?>"><i class="fa fa-commenting"></i> Komentar</a>
        </li>
      </ul>
    </li>

    <!-- member -->
   <!--  <li class="treeview <?php// echo ($nav_top == 'member')? $class :""; ?> ">
      <a href="#">
        <i class="fa fa-user"></i>
        <span>Member</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php //echo (basename($_SERVER['PHP_SELF']) == 'tb_member')? $active :""; ?>>
          <a href="<?php //echo base_url('admin/tb_member');?>"><i class="fa fa-ellipsis-v"></i> Table Member </a>
        </li>
      </ul>
    </li> -->

    <!-- iklan -->
    <!-- pesan -->
     <li class="treeview <?php echo ($nav_top == 'pesan')? $class :""; ?>">
      <a href="#">
        <i class="fa fa-envelope-o"></i>
        <span>Orderan</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'pesan')? $active :""; ?>>
          <a href="<?php echo base_url('admin/pesan');?>"><i class="fa fa-copy"></i> Table </a>
        </li>
      </ul>
    </li>

    <!-- setting & Contact -->
    <li class="treeview <?php echo ($nav_top == 'setting')? $class :""; ?>">
      <a href="#">
        <i class="fa fa-gears"></i>
        <span>Setting & contact</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'setting')? $active :""; ?>>
          <a href="<?php echo base_url('admin/setting');?>"><i class="fa fa-copy"></i> Table </a>
        </li>
      </ul>
    </li>

</ul>