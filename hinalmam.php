<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="../demo/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../demo/js/bootstrap.js" type="text/javascript"></script>
        <script src="../demo/js/jquery-2.2.3.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="file_img[]" multiple>
            <input type="submit" name="btn_upload" value="upload">

        </form>
        <?php
        $con = mysqli_connect("localhost", "root", "root", "temp");
        if ($con->connect_error) {
            die("not connected");
        } else {
            if (isset($_POST['btn_upload'])) {
                for ($i = 0; $i < count($_FILES["file_img"]["name"]); $i++) {
                    $filetmp = $_FILES["file_img"]["tmp_name"][$i];
                    $filename = $_FILES["file_img"]["name"][$i];
                    $filetype = $_FILES["file_img"]["type"][$i];
                    $filepath = "pics/" . $filename;

                    move_uploaded_file($filetmp, $filepath);
                    $query = "insert into upload_img (img_name,img_path,img_type) values ('$filename','$filepath','$filetype')";
                    if (mysqli_query($con, $query)) {
                        echo "<h3>Successfully added.....</h3>";
                    } else {
                        echo "error..";
                    }
                }
            }
        }
        $dis= mysqli_query($con,"select img_path from upload_img");
        
        
        while($row= $dis->fetch_assoc()){
            $path=$row['img_path'];
            echo "<img src='$path' height='100' width='100'> <br>";

        }
        $con->close();
        ?>
             <div class="modal fade" role="dialog" id="izaz-images">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src='' id='model-img'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="../demo/js/jquery.min.js" type="text/javascript"></script>
        <script>
            $(window).load(function () {
                alert("okok");
                $('img').on('click', function () {
                    var src1 = $(this).attr('src');
                    $("#model-img").attr('src', src1);
                    alert(src);
                    $("#izaz-images").modal('show'); 
                });
            });
        </script>
    </body>
</html>
