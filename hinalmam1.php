 <?php
        $con = mysqli_connect("localhost", "root", "root", "mgdigital");
        
        
            if (isset($_POST['btn_upload'])) 
            {
                    ECHO "HEK=LLLO";
                    ECHO $name=$_POST['txtname'];
                    ECHO $desc=$_POST['txtdesc'];
                    ECHO $price=$_POST['txtprice'];
             }
                   /*
                    
                    $filetmp = $_FILES["file_img"]["tmp_name"];
                    $filename = $_FILES["file_img"]["name"];
                    $filetype = $_FILES["file_img"]["type"];
                    $filepath = "pics/" . $filename;

                   $query = "insert into tbl_add_product (P_id,P_name,P_desc,Price) values ('led1','$name','$desc','$price')";
                    if (mysqli_query($con, $query)) {
                        echo "<h3>Successfully added.....</h3>";
                    } else {
                        echo "error..";
                    }
            }    
            
        }*/
        
        $con->close();
?>