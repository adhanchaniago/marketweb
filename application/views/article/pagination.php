
 <ul class="pagination post-pagination text-center mt-50">
                <li><a href="?halaman=<?php echo $sebelum ?>" class="waves-effect waves-light"><i class="fa fa-angle-left"></i></a></li>
                  
                  <?php for($i=1; $i<=$halaman; $i++)
                          {   $next = "";
                              $before = ""; 
                      ?>
                  
                  <li class=""><a href="?halaman=<?php echo $i ?>" class="waves-effect waves-light"><?php echo $next.$i ?></a></li>          
                  <?php }?>
                  <li><a href="?halaman=<?php echo $next ?>" class="waves-effect waves-light"><i class="fa fa-angle-right"></i></a></li>
                </ul>