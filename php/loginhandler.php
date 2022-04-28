<?php





if (isset($_POST['logclosebtn'])) {

    header("location: ../index.php");

    exit();

  }else{



    $email =$_POST['email'];

    $password = $_POST['password'];

    $ok = true;

    $serverResponse = array();

      require './dbhandler.php';

    

    if (empty($email)  || empty($password)) {

         $ok = false;

        $serverResponse[] = 'Fields cannot be empty';

    

    } else {

        $sql  = "SELECT * FROM clients WHERE email=?";

        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {

       $ok = false;

     $serverResponse[] = 'Cannot connect! Try Again.';



        } else {

            mysqli_stmt_bind_param($stmt, "s", $email);

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);



            if ($row = mysqli_fetch_assoc($result)) {

                $pwdCheck = password_verify($password, $row['password']);

                if($pwdCheck === false ){

                 $ok = false;

                  $serverResponse[] = 'Wrong Password';

                  

                }

                else if($pwdCheck === true){

                    $ok = true;

                    $serverResponse[] = 'Login Successful!';

                    session_start();

                    $_SESSION['username'] = $row["username"];

                   

                    if(isset($_POST['remember'])){

                    setcookie('email', $email, time() + 1000);       

                    }

                    else{

                    }

                  

                    }

             else {

               $ok = false;

                $serverResponse[] = 'Unknown Error Occured!';

            }

        } else{

       $ok = false;

        $serverResponse[] = 'No such email found in our records!';

        

        }

    }

    echo json_encode(

     array(   'ok' => $ok,

     'messages' => $serverResponse)



    );

}

  }







//Contact form





