    <div class="panel panel-container">
      <div class="row">
        <div class=" col-md-3 col-md-offset-1 ">
          <div class="panel panel-blue panel-widget border-right">
            <div class="row no-padding"><i class="glyphicon glyphicon-star-empty glys blue"></i>
              <div class="large">
                
                    <?php
                      $con=mysqli_connect("localhost","root","","evm") or die("couldn't to the  server");
                      $q1 = "Select * from registeredevent";
                      $res = mysqli_query($con,$q1);
                      $no = mysqli_num_rows($res);  
                      echo $no;
                  ?>

              </div>
              <div class="large"><a href="registered_events.php"><span class="text">Registered Events</span></a></div>
            </div>
          </div>
        </div>
        <div class=" col-md-3 ">
          <div class="panel panel-orange panel-widget border-right">
            <div class="row no-padding"><i class="glyphicon glyphicon-arrow-up glys blue"></i>
              <div class="large">4</div>
              <div class="large"><a href="upcoming_events.php"><span class="text text1">Upcoming Events</span></div>
            </div>
          </div>
        </div>
        <div class=" col-md-3 ">
          <div class="panel panel-red panel-widget ">
            <div class="row no-padding"><i class="glyphicon glyphicon-arrow-down glys red"></i>
              <div class="large">
                
                  <?php
                      
                      $q1 = "Select * from pastevent";
                      $res = mysqli_query($con,$q1);
                      $no = mysqli_num_rows($res);  
                      echo $no;
                  ?>

              </div>
              <div class="large"><a href="past_events.php"><span class="text text2">Past <br/>Events</span></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>


      <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">Events Calendar</h1>
          </div>
        </div><!--/.row-->

        
        <iframe id="hide_it" src="https://calendar.google.com/calendar/embed?src=rahul.shetty%40ves.ac.in&ctz=Asia%2FCalcutta" style="border: 0" frameborder="0" scrolling="no"></iframe>

          <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;height=500&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=rahul.shetty%40ves.ac.in&amp;color=%232952A3&amp;ctz=Asia%2FCalcutta" style="border:solid 1px #777" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
    </div>