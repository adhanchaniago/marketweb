<?php $class      ="class='active'";
$username         = 'hhandri26'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php echo $seo->description ?>">
        <meta name="keywords" content="<?php echo $seo->keywords ?>">
        <meta name="author" content="<?php echo $seo->author ?>">
        <title><?php echo $info->title;?></title>
        <!--  icon -->
        <?php $this->load->view($script_top); ?>
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/logo/'.$info->logo_browser);?>">
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5c1ef6b67a79fc1bddf1fbf7/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
<!--End of Tawk.to Script-->
    </head>
    <body id="top" class="has-header-search" data-spy="scroll" data-target="#materialize-menu" data-offset="100" >
         <!-- Top bar -->
        <div class="top-bar dark-bg lighten-2 visible-md visible-lg">
          <div class="container">
            <div class="row">
              <!-- Social Icon -->
              <div class="col-md-6">
                <!-- Social Icon -->
                <ul class="list-inline social-top tt-animate btt">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  
                  
                  
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                  
                </ul>
              </div>

              <div class="col-md-6 text-right">
                <ul class="topbar-cta no-margin">
                  <li class="mr-20">
                    <a><i class="material-icons mr-10">&#xE0B9;</i><?php echo $info->email?></a>
                  </li>
                  <li>
                    <a><i class="material-icons mr-10">&#xE0CD;</i><?php echo $info->hp?></a>
                  </li>
                </ul>
              </div>
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.top-bar -->

        <header id="header" class="tt-nav">
            <div class="header-sticky light-header">
                <div class="container">
                    <!-- /.search-wrapper -->
                    <div id="materialize-menu" class="menuzord">
                        <!--logo start-->
                       
                            <a href="<?php echo base_url('home');?>" class="logo-brand">
                                
                               <img src="<?php echo base_url('assets/img/logo/'.$info->logo);?>">
                               
                            </a>
                       
                        <!--logo end-->
                        <!-- onepage menu start-->
                        <ul class="menuzord-menu pull-right">
                            <li <?php echo ($nav == 'home')? $class :""; ?>>
                                <a href="<?php echo base_url('home');?>">Beranda</a>
                            </li>
                           
                            <li <?php echo ($nav == 'artikel')? $class :""; ?>>
                                <a href="<?php echo base_url('article');?>" data-scroll>Artikel</a>
                            </li>

                            <li <?php echo ($nav == 'jasa-website')? $class :""; ?>>
                                <a href="<?php echo base_url('jasa-website');?>">Jasa Website</a>
                            </li>
                               
                            <li <?php echo ($nav == 'jasa-google-ads')? $class :""; ?>>
                                <a href="<?php echo base_url('jasa-google-ads');?>" data-scroll>Google Ads</a>
                            </li>

                            <li <?php echo ($nav == 'jasa-sosial-media-ads')? $class :""; ?>>
                                <a href="<?php echo base_url('jasa-sosial-media-ads');?>" data-scroll>Sosial Media Ads</a>
                            </li>

                            <li>
                                <a href="#faq" data-scroll >Faq</a>
                            </li>

                            <li>
                                <a href="#contact" data-scroll>Contact</a>
                            </li>

                            

                           
        
                        </ul>
                        <!-- onepage menu end-->
                    </div>
                </div>
            </div>
        </header>

