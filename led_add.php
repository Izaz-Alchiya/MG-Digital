 <?php
$con = mysqli_connect("localhost", "root", "root", "mgdigital");
        if ($con->connect_error) {
            die("not connected");
        } else {
            if (isset($_POST['btn_upload'])) {
                    echo $name=$_POST['txtname'];
                    echo $desc=$_POST['txtdesc'];
                    echo $price=$_POST['txtprice'];
                    
                    

                   /* $query = "insert into tbl_add_product (P_id,P_name,P_desc,Price) values ('led1','$name','$desc',$price)";
                    if (mysqli_query($con, $query)) {
                        echo "<h3>Successfully added.....</h3>";
                    } else {
                        echo "error..". mysqli_error($con);
                    }*/
                
            }
        }
        
        $con->close();
?>