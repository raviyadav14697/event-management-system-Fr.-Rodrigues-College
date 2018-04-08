
    <div class="row container">
      <div class="col-lg-12">
        <h1 class="page-header">Past Events</h1>
      </div>
    </div><!--/.row-->

          <?php
                $con=mysqli_connect("localhost","root","","evm") or die("couldn't to the  server");
                $q1 = "Select * from pastevent";
                $res = mysqli_query($con,$q1);
                $no = mysqli_num_rows($res);  
                $out = '<div class="row ravi">';
                              
                                    
                while($row = $res->fetch_array())
                {
                    $out .= '<div class="card col-md-4" >';
                    $out .= '<img class="card-img-top img-responsive" style="width: 300px; height: 300px;" src="'.$row['path'].'" alt="Card image cap"><div class="card-body"><h1 class="card-title">'.$row['name'].'</h1>
                    <p class="card-text">'.$row['date'].'</p></div></div>';
                }
                //echo print_r($a);
                $out .= '</div';


           ?>
    
<div class="row ravi" id="add_here">

    <?php echo $out; ?>

</div>