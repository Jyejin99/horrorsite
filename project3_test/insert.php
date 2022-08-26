<?php
    $id = $_POST["id"];
    $pass = $_POST["pw"];
    $name = $_POST["name"];
    $email = $_POST["email"].'@'.$_POST['emailaddress'];
    $nickname = $_POST["nickname"];

    $registday = date("Y-m-d(H:i)");
    
    $con = mysqli_connect("localhost","yjin","1234","osorosiki");

    $sql = "insert into osorosiki_members(id, pass, name, email, nickname, registday)";
    $sql .= "values('$id', '$pass', '$name','$email','$nickname','$registday')";

    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "<script>
            location.href='/project3_test/login_form.php';
        </script>";
?>