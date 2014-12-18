<!-- Main bar -->
    <div class="mainbar">

      <!-- Page heading -->
      <div class="page-head">
        <h2 class="pull-left"><i class="fa fa-home"></i> General Settings</h2>

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

              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Title</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <!--<a href="#" class="wclose"><i class="fa fa-times"></i></a>-->
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="widget-content">
                  <div class="padd">

                  <form id="add-item" class="admin-ajax" action="<?php echo $site_url; ?>/admin/post_upcoming_movies" method ="post">

                    <div class="row">
                      
                            <div class="col-lg-9">
                                  <input type="hidden" name="token" value="<?php echo $token; ?>">
                              <input type="submit" value ="Import Upcoming Movies" name ="add_upcoming_submit" class="btn btn-primary">
                                <div id="response"></div>
                          </div>
                          <div class="large-3 columns">
                          </div>
                    </div>

                  </form>



                    


                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>  
              
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