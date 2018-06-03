<?php
require 'connect.php';
?>
<html>
    <head>
        <title>Ptyxiakh18</title>
    </head>
    <body>
        <div align="center">
            <?php
                $query_run = mysqli_query($db,"SELECT * FROM vessel WHERE id='1';");
                if ($query_run) {

                    while($row = mysqli_fetch_array($query_run)) {
                        $rows[] = $row;
                    }

                    foreach($rows as $row){ 
                        $VesselName = $row['VesselName'];
                        $VesselGRT = $row['VesselGRT'];
                    }

                    $query_run2 = mysqli_query($db,"SELECT * FROM port WHERE PortName='Fangcheng'");

                    if ($query_run2) {
                        while($row_port = mysqli_fetch_array($query_run2)) {
                            $rows_port[] = $row_port;
                        }
    
                        foreach($rows_port as $row_port){ 
                            $PortName = $row_port['PortName'];
                        }

                        echo "The expenses of ".$VesselName." For it to go to ".$PortName." are: ".$VesselGRT*2;
                    }
                }
                ?>
        </div>
    </body>
</html>