
<?php
      // Database Connection
      session_start();
      require '../include/config.php';

      // if(isset($_POST['sizeval']))
      if(isset($_POST['isFood']))
      {

        $isFood =mysqli_real_escape_string($conn ,$_POST['isFood']);

        $querysr = "SELECT A.item_id , B.name AS cname , A.name AS iname , A.quantity , A.measurement ,A.description ,assign FROM Inventory A  INNER JOIN category B ON A.cat_id = B.id WHERE A.isFood='$isFood'";
        $resultsr =mysqli_query($conn,$querysr);
        $count =mysqli_num_rows($resultsr);

        if($count>0){

     ?>

     <div class="table-responsive" id="room_table">
         <div id="printablediv">
            <center><h4><b>Stock Report - Calypso Sunset</b> </h4></center>
            <table class="table table-bordered">
                <thead class=" text-primary" >
                    <th>
                        <span style="color: black;"><b>Inventory No</b>  </span>
                    </th>
                    <th>
                        <span style="color: black;"><b>Category name</b>  </span>
                    </th>
                    <th>
                       <span style="color: black;"><b>Item name</b>  </span>
                    </th>
                    <th>
                       <span style="color: black;"><b> Measurement</b>  </span>
                    </th>
                    <th>
                        <span style="color: black;"><b>Quantity</b>  </span>
                    </th>
                    <th>
                    <span style="color: black;"><b>Total Assigned</b>  </span>
                    </th>
                    <th>
                     <span style="color: black;"><b>Description</b>  </span>
                    </th>
                </thead>
                <tbody>
                    <?php

                

                    while($row = mysqli_fetch_array($resultsr))
                    {
                        $description = str_replace('\r\n',"</br>",$row["description"]);
                        echo '
                        <tr>
                            <td>'.$row["item_id"].'</td>';
                            echo '
                            <td>'.$row["cname"].'</td>
                            <td>'.$row["iname"].'</td>
                            <td>'.$row["measurement"].'</td>
                            <td>'.$row["quantity"].'</td>
                            <td>'.$row["assign"].'</td>
                            <td>'.$description.'</td>  ';
                        echo '</tr>
                            '  ;
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <input type="button" value="Print" onclick="javascript:printDiv('printablediv'); bookingclose();" class="btn btn-primary btn-sm" style="background: #56b8fb; color: white; border-color: #56b8fb;"/>
     </div>

  <?php

  }else{
      echo "Data Not Found";
  }

}


      