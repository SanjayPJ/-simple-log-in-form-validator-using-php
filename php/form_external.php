<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>processing...</title>
</head>

<body>
    <div class="container py-3">
        <?php 

            function checkUser(){
                $maxUser = 10;
                $minUser = 4;
                $username = $_POST['user'];
                if(!empty($username)){
                    if(strlen($username) < $minUser || strlen($username) > $maxUser){
                        echo '<div class="alert alert-danger" role="alert">
                                Username between the 4-10 characters.
                            </div>';
                        return false;
                    }else{
//                        check database
                        $usernames = array('sanjay','samsan','cpking');
                        if(in_array($username, $usernames)){
                            return true;  
                        }else{
                            echo '<div class="alert alert-danger" role="alert">
                                Invaild username.
                            </div>';
                            return false;
                        }
                    }
                }else{
                    echo '<div class="alert alert-danger" role="alert">
                                Enter a valid username.
                            </div>';
                    return false;
                }
            }
        function checkPass(){
            $password = $_POST['password'];
            $maxPass = 10;
            $minPass = 4;
            if(!empty($password)){
                    if(strlen($password) < $minPass || strlen($password) > $maxPass){
                        echo '<div class="alert alert-danger" role="alert">
                                password between the 4-10 characters.
                            </div>';
                        return false;
                    }else{
                        if($password == '123456'){
                            return true;
                        }else{
                            echo '<div class="alert alert-danger" role="alert">
                                Invaild Password.
                            </div>';
                            return false;                            
                        }               
                    }
            }else{
                echo '<div class="alert alert-danger" role="alert">
                                Enter a valid password.
                            </div>';
                    return false;
            }

        }
        $user = checkUser();
        $pass = checkPass();
        
        
        if($pass && $user){
           echo  '<div class="alert alert-success" role="alert">
                                You got access.
                            </div>';
        }



        ?>
    </div>

</body>

</html>
