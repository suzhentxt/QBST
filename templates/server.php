<table cellpadding="7px", style="width:80%" >
            <thead>
            <th>Id</th>
            <th>pH </th>
            <th>WQI </th>
            <th>Streamflow </th>
            <th>TDS </th>
            <th>Time and Date </th>
            </thead>
            <?php
            include 'config.php';
            $sql = "SELECT * FROM `mywater` ORDER BY id DESC LIMIT 5";
            $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
            while($row = mysqli_fetch_assoc($result)){
              $id   = $row['id'];
              $ph = $row['ph'];
              $wqi = $row['wqi'];
              $streamflow = $row['streamflow'];
              $tds = $row['tds'];
              $time = $row['time'];
              ?>
              <tbody>
                <tr>
                  <td align="center"><?php echo $id;  ?></td>
                  <td align="center"><?php echo $ph; ?></td>
                  <td align="center"><?php echo $wqi; ?></td>
                  <td align="center"><?php echo $streamflow; ?></td>
                  <td align="center"><?php echo $tds; ?></td>
                  <td align="center"><?php echo $time; ?></td>
                </tr>
              </tbody>
              <?php } 
              mysqli_close($conn);
              ?>
           </table>