<!-- Main bar -->
    <div class="mainbar">

      <!-- Page heading -->
      <div class="page-head">
        <h2 class="pull-left"><i class="fa fa-home"></i> Videos</h2>

        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
          <a href="index.html"><i class="fa fa-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="#" class="bread-current">Dashboard</a>
        </div>

        <div class="clearfix"></div>

      </div>
      <!-- Page heading ends -->


      <!-- Matter -->

      <div class="matter">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
              <!-- Youtube -->
              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Import Youtube Videos</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <!--<a href="#" class="wclose"><i class="fa fa-times"></i></a>-->
                  </div>  
                  <div class="clearfix"></div>
                </div>

                <div class="widget-content">
                  <div class="padd">
                    
                    <form class="admin-ajaxv" enctype="multipart/form-data" action="<?php echo $site_url; ?>/submit/import_yt_videos" method ="post">

                        <div class="form-group">
                          <label>csv file</label>
                          <input type="file" name ="file">
                        </div>


                         <div class="form-group">
                              <input type="hidden" name="token" value="<?php echo $token; ?>">
                               <input type="submit" value ="Import" name ="import_videos_submit" class="btn btn-primary">
                         </div>
                           <div class="col-lg-6">
                              <div id="response"></div>
                           </div><!-- /.col-lg-6 --> 
                      
                     </form>

                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>  
              <!-- End Youtube -->

              <!-- Vimeo -->
              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Import Vimeo Videos</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <!--<a href="#" class="wclose"><i class="fa fa-times"></i></a>-->
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">
                    
                    <form class="admin-ajaxv" enctype="multipart/form-data" action="<?php echo $site_url; ?>/submit/import_vm_videos" method ="post">

                        <div class="form-group">
                          <label>csv file</label>
                          <input type="file" name ="file">
                        </div>


                         <div class="form-group">
                              <input type="hidden" name="token" value="<?php echo $token; ?>">
                               <input type="submit" value ="Import" name ="import_vm_videos_submit" class="btn btn-primary">
                         </div>
                           <div class="col-lg-6">
                              <div id="response"></div>
                           </div><!-- /.col-lg-6 --> 
                      
                     </form>

                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>  
              <!-- End Vimeo -->


              
            </div>
          </div>
        </div>
      </div>

    <!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->        
   <div class="clearfix"></div>

</div>
<!-- Content ends -->
