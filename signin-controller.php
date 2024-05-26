<?php 
require_once "config.php"; // Include the database configuration file

    $page = $_POST["page"];  // Getting current page action hich include registration or login
    if($page == "reg"){ // Registration process
        // $name =  filter_var($_POST["name"], FILTER_SANITIZE_STRING);  
        $name =  $_POST["name"];  
        $username = $_POST["username"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $confirm = $_POST["confirm"];
        $position = "User";
        
        $date = date("d/m/Y");

        // Check if the confirmation password matches the original password
        if($confirm == $password){
                    // Function to generate a random string for unique ID
            function generateRandomString($length) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $randomString = '';
            
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, strlen($characters) - 1)];
                }
            
                return $randomString;
            }
            
            $length = 10; // Desired length of the random string
            $unique_id = generateRandomString($length);
            
             // Check if the password contains at least one letter            
            if(! preg_match("/[a-z]/i",$_POST["password"])){
                echo '<script> alert("Password must contain at least one letter")</script>';
              }
              // Check if the password contains at least one number
              elseif(! preg_match("/[0-9]/i",$_POST["password"])){
                  echo '<script> alert("Password must contain at least one number")</script>';
                }
                else{
                        // echo $name."<br>";
                        // echo $email."<br>";
                        // echo $phone."<br>";
                        // echo $password."<br>";
                        // echo $unique_id."<br>";
                                         // Check for duplicate username or email in the database
                                        $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE name = '$name' OR email = '$email'");
                                        
                        if(mysqli_num_rows($duplicate) > 0){
                            echo
                            "<script> alert('Username or Email Has Already Taken'); </script>";
                        }
                        else{
    
                              
                                // Insert new user data into the database
                        $sql = "INSERT INTO users (name,username,email,phone,unique_id,password,position,date) VALUES ('$name','$username','$email','$phone','$unique_id','$password','$position','$date')";
                        

                       
                        // Redirect to sign-in page
                        $result = mysqli_query($conn,$sql);
                        echo '<script> alert("Registration Successful")</script>'; 
                        header("Location:sign-in.php");
                    
                        
                        }
                    }
    
        }
        else{
            echo '<script> alert("Passwords Are Not The Same")</script>';
        }
}
    elseif($page == "log"){
        // Login process
        $emailphone = $_POST["emailphone"];
        $password = $_POST["password"];

        // Query to fetch all users
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $id = $row["id"];
            $email = $row["email"];
            $phone = $row["phone"];
            $pass = $row["password"];
            $position = $row["position"];
            $username = $row["username"];

            // Check if the entered email/phone/username matches any user record
            if($email == $emailphone || $phone == $emailphone || $username == $emailphone ){
                // Check if the entered password matches the user password
                if($pass == $password){

                    $_SESSION["login"] = true;
                    $_SESSION["id"] = $id;
                    // header("Location:index.php");
                    
                    // if($position == "admin"){
                    //  header("admin.php");
                    // }
                    // elseif($position == "sub-admin"){
                    //   header("sub-admin.php");
                    //  }
                    // else{
                             // Successful login
                        echo '<script> alert("LOGIN SUCCESSFUL")</script>';
                        header("Location:Entrance/index.html");// Redirect to entrance page
                    // }
                }

            }
            else{
                echo "<script> alert('ACCOUNT NOT FOUND, WRONG EMAIL/PASSWORD')</script>";
            }
        }


    }

?>