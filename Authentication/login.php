

<?php


    session_start();
    if(isset($_POST['save'])){
   
     
        $name = $email = $address = $password = "";

        
        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }

       

        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);   
        $address = test_input($_POST["address"]);   
        $password = test_input($_POST["password"]);   

     
        $img = $_FILES['img']['name'];
        $path = 'upload/'.$img;
        move_uploaded_file($_FILES['img']['tmp_name'], $path);




        $_SESSION['userDetail']= array(
            "name" => $name, 
            "email" => $email, 
            "address" => $address, 
            "password" => $password,
            "image" => $img
        );
      
    
        $_SESSION['message'] = "Registration Successful!";
        $_SESSION['msg_type'] = "success";
        header(
            'location: index.php?data'
        );
    }
  

?>