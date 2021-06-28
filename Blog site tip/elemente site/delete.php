<?php
include_once 'dbh.php';
$sql = "SELECT * FROM login1 ";
$stmt=mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL statamen fail!";
} else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    while ($row = mysqli_fetch_assoc($result)) {



        if (isset($_POST["$row[nameUsser]"])) {

           $x=$row["nrUsser"];
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "DELETE FROM login1 WHERE nameUsser='$row[nameUsser]'";

            if ($conn->query($sql) === TRUE) {
                header('Location:../paginisite/adminon.php?Record deleted successfully');

            } else {
                echo "Error deleting record: " . $conn->error;
            };
            $sql = "SELECT * FROM login1 ";
            $stmt=mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                echo "SQL statamen fail!";
            } else {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while ($row = mysqli_fetch_assoc($result)) {


                if($row["nrUsser"]>$x){

                   $y=$row["nrUsser"]-1;
                    $sql = "UPDATE login1 SET nrUsser='$y' WHERE nrUsser='$row[nrUsser]'";

                    if ($conn->query($sql) === TRUE) {
                        echo "Record updated successfully";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }



                }







                }
            }







                };
    }
}




        ?>