<!-- <style type="text/css">
    .creative-banner-1 {
    background-image: url("<?php //echo base_url('assets/img/web/'.$heading->background)?>")  
}
</style>
<section class="creative-banner-1 bg-fixed parallax-bg overlay purple-4 fullscreen-banner valign-wrapper" data-stellar-background-ratio="0.5">
    <div class="valign-cell">
      <div class="container padding-top-160">
        <div class="text-center">
            <h1 class="intro-title text-capitalize white-text"><?php //echo $heading->title ?></h1>
            <span class="sub-intro lead white-text"><?php// echo $heading->deskripsi?></span>
            <a href="#contact" class="btn btn-lg waves-effect waves-light mt-30">Contact Us</a>
        </div>
      </div>
    </div>
</section> -->

<!-- start revolution slider 5.0 -->
<section class="rev_slider_wrapper">
 <div class="rev_slider materialize-slider">
  <ul>
    <?php foreach ($gambar as $row ) {?>
       
    

    <!-- slide 1 start --> 
    <li data-transition="fade" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="<?php echo base_url('assets/img/web/'.$row->background);?>"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="materialize Material" data-description="">
        <!-- MAIN IMAGE -->
        <img src="<?php echo base_url('assets/img/web/'.$row->background);?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-no-retina>

        <!-- LAYER NR. 1 -->
        <div class="tp-caption NotGeneric-Title tp-resizeme"
            data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
            data-y="['middle','middle','middle','middle']" data-voffset="['-100','-100','-50','-50']" 
            data-fontsize="['60','60','50','55']"
            data-lineheight="['70','70','60','60']"
            data-width="none"
            data-height="none"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power4.easeInOut;" 
            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
            data-start="1000" 
            data-splitin="none" 
            data-splitout="none" 
            data-responsive_offset="on"
            style="z-index: 5; color: #373a3d; white-space: nowrap;"><?php echo $row->title;?>
        </div>

        <!-- LAYER NR. 2 -->
        <div class="tp-caption tp-resizeme rev-subheading blue-text"
            data-x="['left','left','left','left']" data-hoffset="['30','30','30','30']"
            data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','10','10']" 
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
 
            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:900;e:Power4.easeInOut;" 
            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
            data-start="1200" 
            data-splitin="none" 
            data-splitout="none" 
            data-responsive_offset="on"
            style="z-index: 6; color: #666; white-space: nowrap;"><?php echo $row->deskripsi;?>
        </div>

        <!-- LAYER NR. 3 -->
        <div class="tp-caption tp-resizeme rev-btn  rs-parallaxlevel-0"
            data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']" 
            data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','100']" 
            data-width="none"
            data-height="none"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-style_hover="cursor:default;"

            data-transform_in="y:50px;opacity:0;s:900;e:Power4.easeInOut;" 
            data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
            data-mask_out="x:inherit;y:inherit;" 
            data-start="1400" 
            data-splitin="none" 
            data-splitout="none"
            data-responsive_offset="on"
            style="z-index: 8; white-space: nowrap;">
            <a href="#" class="btn btn-lg  waves-effect waves-light">Contact</a>
        </div>

    </li>
    <!-- slide 1 end -->
    <?php } ?>


  
  </ul>             
 </div><!-- end revolution slider -->
</section><!-- end of slider wrapper -->