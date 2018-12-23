<?php 
  $active = "class='active'";
  $class = 'active'; 
?>
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="active">
      <a href="<?php echo base_url('member/home/'.$admin->username.'/'.$admin->uniq);?>">
        <i class="fa fa-home"></i> <span>Dashboard</span>
      </a>
      <ul class="treeview-menu <?php echo ($nav_top == 'dashboard')? $class :""; ?>">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'home')? $active :""; ?>>
          <a href="<?php echo base_url('member/home/'.$admin->username.'/'.$admin->uniq);?>">
        <i class="fa fa-home"></i> home</a></li>
      </ul>
    </li>
   

   

    <!-- member -->
    <li class="treeview <?php echo ($nav_top == 'member')? $class :""; ?> ">
      <a href="#">
        <i class="fa fa-user"></i>
        <span>Member</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li <?php echo (basename($_SERVER['PHP_SELF']) == 'tb_member')? $active :""; ?>>
          <a href="<?php echo base_url('member/tb_member/'.$admin->username.'/'.$admin->uniq);?>"><i class="fa fa-ellipsis-v"></i> Sub Member </a>
        </li>
      </ul>
    </li>

   

    

</ul>