    <div class="panel panel-container">
      <div class="row">
        <div class=" col-md-3  ">
          <div class="panel panel-blue panel-widget border-right">
            <div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
              <div class="large">
                
                    <?php
                      $con=mysqli_connect("localhost","root","","evm") or die("couldn't to the  server");
                      $q1 = "Select * from registeredevent";
                      $res = mysqli_query($con,$q1);
                      $no = mysqli_num_rows($res);  
                      echo $no;
                  ?>

              </div>
              <div class="large"><a href="registered_events.php">Registered Events</a></div>
            </div>
          </div>
        </div>
        <div class=" col-md-3 ">
          <div class="panel panel-orange panel-widget border-right">
            <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
              <div class="large">4</div>
              <div class="large"><a href="upcoming_events.php">Upcoming Events</div>
            </div>
          </div>
        </div>
        <div class=" col-md-3 ">
          <div class="panel panel-red panel-widget ">
            <div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
              <div class="large">
                
                  <?php
                      
                      $q1 = "Select * from pastevent";
                      $res = mysqli_query($con,$q1);
                      $no = mysqli_num_rows($res);  
                      echo $no;
                  ?>

              </div>
              <div class="large"><a href="past_events.php">Past Events</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>