<?php
include 'connection.php';

$errors = array(); // Initialize an array to store errors

if(isset($_POST['Register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $phone = $_POST['phone'];
    $password = password_hash($pass, PASSWORD_BCRYPT);
 
    $address = $_POST["address"];
    $agreeonterms = $_POST["agreeonterms"];
  

    function validatePassword($pass) {
        
        $hasAlphabet = preg_match('/[a-zA-Z]/', $pass);
        $hasNumber = preg_match('/\d/', $pass);
        $hasSpecialChar = preg_match('/[^a-zA-Z\d]/', $pass); 
    
        
        if ($hasAlphabet && $hasNumber && $hasSpecialChar) {
            return true; 
        } else {
            return false; 
        }
    }
    function startsWithAdmin($input) {
        if (substr($input, 0, 5) == "admin") {
            return true; 
        } else {
            return false; 
        }
    }
    
    function startsWithTS($input) {
        if (substr($input, 0, 2) == "TS") {
            return true; 
        } else {
            return false; 
        }
    }
    function startsWithFM($input) {
        if (substr($input, 0, 2) == "FM") {
            return true; 
        } else {
            return false; 
        }
    }
    function startsWithEM($input) {
        if (substr($input, 0, 2) == "EM") {
            return true; 
        } else {
            return false; 
        }
    }
    $checkemail = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkemail);
    if($result->num_rows > 0){
        $errors[] = "Email Address Already Exists !";
    }
    
    
    if (empty($username) || empty($email) || empty($pass) || empty($agreeonterms)){
        $errors[] = "All fields are required!";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Email is not valid!";
    }
    if (strlen($pass) < 8){
        $errors[] = "Password must be at least 7 characters long!";
    }
    if(!validatePassword($pass)){
        $errors[] = "Password should contain alphabets, special characters, and numbers";
    }
   
    if (empty($errors)) {
        if(startsWithAdmin($username)){
            $insertQuery = "INSERT INTO users (username, password, email,role,phone_number, address) VALUES ('$username','$password','$email',  'CEO', '$phone','$address')";
            if($conn->query($insertQuery) === TRUE){
                header("location:login.html");
                exit();
            } else {
                $errors[] = "Error: ".$conn->error;
            }

        }
        if(startsWithTS($username)){
       
            $insertQuery = "INSERT INTO users (username, password, email,role,phone_number, address) VALUES ('$username','$password','$email',  'Ticket staff', '$phone','$address')";

                if($conn->query($insertQuery) === TRUE){
                    header("location:login.html");
                    exit();
                } else {
                    $errors[] = "Error: ".$conn->error;
                }

        }
    }
        if(startsWithFM($username)){
            
            $insertQuery = "INSERT INTO users (username, password, email,role,phone_number, address) VALUES ('$username','$password','$email',  'Financial Manager', '$phone','$address')";

                if($conn->query($insertQuery) === TRUE){
                    header("location: login.html");
                    exit();
                } else {
                    $errors[] = "Error: ".$conn->error;
                }

        }
        if(startsWithEM($username)){
            $insertQuery = "INSERT INTO users (username, password, email,role,phone_number, address) VALUES ('$username','$password','$email',  'Employer', '$phone','$address')";

            
            if($conn->query($insertQuery) == TRUE){
                header("location: login.html");
                exit();
            } else {
                $errors[] = "Error: ".$conn->error;
            }
        

        }
        else{

            $insertQuery = "INSERT INTO users (username, password, email,role,phone_number, address) VALUES ('$username','$password','$email',  'Customer', '$phone','$address')";

            
            if($conn->query($insertQuery) == TRUE){
                header("location: login.html");
                exit();
            } else {
                $errors[] = "Error: ".$conn->error;
            }
        }

    
        
        
        
     

foreach ($errors as $error){
    echo "<div class='alert alert-danger'>$error</div>";
}
}




?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#register').click(function(e) {
            e.preventDefault(); 
            alert('Register button clicked!');
        });
    });
</script> 