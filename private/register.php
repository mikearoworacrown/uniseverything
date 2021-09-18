<?php require_once('initialize.php'); ?>
<?php
    /******************Register Users************************/
    registerMember();
    //Check if email exists
    function isEmailExists($email){
        global $pdo;

        $conn = $pdo->open();
        try{
            $stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $row = $stmt->fetch();

            if($row['numrows'] > 0){
                $result = true;
            }
            else{
                $result = false;
            }

            return $result;
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }

        $pdo->close();
    }

    //Register users
    function registerMember(){
        global $pdo;

        if(isset($_POST["signup-btn"])){
            $conn = $pdo->open();

            $isEmailExists = isEmailExists($_POST["email"]);
            if ($isEmailExists) {
                $_SESSION['error'] = "Email address already exists.";
                header('location: ../public/signup.php');
            }else{
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $password = $_POST['password'];
                $repassword = $_POST['repassword'];

                if($password != $repassword){
                    $_SESSION['error'] = 'Passwords did not match';
                    header('location: ../public/signup.php');
                }else{
                    //hash password
                    $password = password_hash($password, PASSWORD_DEFAULT);

                    //generate code
                    $set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                    $activate_code=substr(str_shuffle($set), 0, 12);

                    try{
                        $stmt = $conn->prepare("INSERT INTO users (fullname, email, phone, password, activate_code) VALUES (:fullname, :email, :phone, :password, :activate_code)");
                        $stmt->bindParam(':fullname', $fullname);
                        $stmt->bindParam(':email', $email);
                        $stmt->bindParam(':phone', $phone); 
                        $stmt->bindParam(':password', $password);
                        $stmt->bindParam(':activate_code', $activate_code);
                        $stmt->execute();
    
                        
                        $userid = $conn->lastInsertId();

                        $_SESSION['fullname'] = $_POST['fullname'];
                        $_SESSION['email'] = $_POST['email'];

                        $_SESSION['message'] = "
                            <h2>Thank you for Registering.</h2>
                            <p>Your Account:</p>
                            <p>Email: ". $email . "</p>
                            <p>Please click the link below to activate your account.</p>
                            <a href='http://localhost/uniseverything/public/activate.php?code=".$activate_code."&user=".$userid."'>Activate Account</a>
                        ";

                        mail_send();

                    }				
                    catch(PDOException $e){
                        $_SESSION['error'] = $e->getMessage();
                        header('location: ../public/signup.php');
                    }
                }
    
            }
        }

        $pdo->close();
    }

?>