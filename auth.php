<?php      
    include('skeleton/head.php');  

    session_start();
    ob_start();

    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($conn, $username);  
    $password = mysqli_real_escape_string($conn, $password);  
    
    $sql = "SELECT * FROM Author WHERE username = '$username' and password = '$password'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
          
    if($count == 1){  
        $_SESSION["login"] = "true";
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        
        header("location: admin.php");

    }  
    else{  
        echo "<center> <br> <br> <br> <br>
        <h2> Kullanıcı adın veya şifren yanlış! </h2>
        </center>";
        header("Refresh: 2; url=index.php");
    }     

    ob_end_flush();
    $conn->close();

?>  
