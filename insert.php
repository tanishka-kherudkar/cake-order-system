

<?php
//$servername="localhost";
//$username="root";
//$password=123;
//$dbname="demo";

$conn = mysqli_connect("localhost:3308",'root',"",'demo');
if($conn == false)
{
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

         $email =  $_REQUEST['email'];
        $name = $_REQUEST['name'];
        $flavour =  $_REQUEST['flavour'];
        $size = $_REQUEST['size'];
        

        $sql = "INSERT INTO demo VALUES ('$email',
            '$name','$flavour','$size')";
        if(mysqli_query($conn, $sql)){
            echo "<h3>have successfully placed the order.";
   
 echo nl2br("<table border=1><tr><th>email</th><th>name</th><th>flavour</th><th>size</th></tr><tr><td>$email</td><td>$name</td><td>$flavour</td><td>$size</td></tr></table>");
        } else{
            echo "ERROR: Hush! Sorry $sql."
                . mysqli_error($conn);

        }
 
           
         
        // Close connection
        mysqli_close($conn);
        ?>
    </body>
    </html>