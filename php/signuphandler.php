    <?php



    require './dbhandler.php';



    $email = $_POST['email'];

    $password = $_POST['password'];

    $pwdrepeat = $_POST['pwdrepeat'];



    $split = explode('@', $email);

    $username = $split[0];



    $ok = true;

    $serverResponse = array();



    //check to see if any field has been left blank

    if (empty($email) || empty($password) || empty($pwdrepeat)) {

        $ok = false;

        $serverResponse[] = 'Fields cannot be empty';

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $password)) {

        $ok = false;

        $serverResponse[] = 'Invalid Email/Password combination!';

    }

    // check to see if the email is valid.

    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $ok = false;

        $serverResponse[] = 'invalid Email';

    }

    //validate password

    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $password)) {

        $ok = false;

        $serverResponse[] = 'Password is not acceptable! Try Again';

    } else if ($password !== $pwdrepeat) {

        $ok = false;

        $serverResponse[] = 'Passwords dont match!';

        exit();

    } else {

        $sql  = "SELECT email FROM clients WHERE email=?";

        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {

            $ok = false;

            $serverResponse[] = 'Internal Error Contact Admin';

        } else {

            mysqli_stmt_bind_param($stmt, "s", $email);

            mysqli_stmt_execute($stmt);

            mysqli_stmt_store_result($stmt);

            $resultCheck = mysqli_stmt_num_rows($stmt);



            if ($resultCheck > 0) {

                $ok = false;

                $serverResponse[] = 'That Email already exists ';

            } else {

                $sql  = "INSERT INTO clients (username, email, password) VALUES (?,?,?)";

                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {

                    $ok = false;

                    $serverResponse[] = 'Could not register! Internal Error';

                } else {



                    $hashedpwd = password_hash($password, PASSWORD_BCRYPT);

                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedpwd);

                    mysqli_stmt_execute($stmt);

                    session_start();

                    $_SESSION['username'] =  $username;

                    $ok = false;
                    $serverResponse[] = 'Signup Successful, Welcome!';
                    header('Refresh: 5; URL=http://localhost/ezone/index.php');
                  

                }

            }

        }

        echo json_encode(

            array(

                'ok' => $ok,

                'messages' => $serverResponse

            )



        );

    }



    

