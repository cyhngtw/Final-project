<?php
$addCSS = "../CSS/log_in.css";
$title = "Login";
include_once "../Components/head.php";
    ob_start();
    session_start();
    require_once '../Dao.php';
    $error = false;

    if (isset($_SESSION['user']) || isset($_SESSION['admin'])) {
        header("Location: index.php");
        exit;
    }
    if (isset($_POST['btn-login'])) {
        $email = trim($_POST['email']);
        $email = strip_tags($email);
        $email = htmlspecialchars($email);
        $password = trim($_POST['password']);
        $password = strip_tags($password);
        $password = htmlspecialchars($password);
        if(empty($email)) {
            $error = true;
            $emailError = "Please enter your email address.";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = true;
            $emailError = "Please enter valid email address.";
        }
        if (empty($password)) {
            $error = true;
            $passError = "Please enter your password.";
        } elseif (strlen($password) < 5) {
            $error = true;
            $passError = "Must be more than 5 char";
        }
        if (!$error) {
            $passHash = hash('sha256', $password);
            $dao = new Dao();
            $conn = $dao->openConnection();
            $sql = "SELECT `user_id`, `user_email`, `user_password`, `user_role` FROM `users` WHERE user_email='$email'";
            $resource = $conn->prepare($sql); 
            $resource->execute();
            // $resource = $conn->query($sql);
            $count = $resource->rowCount();
            // $count = $resource->fetchColumn();
            $result = $resource->fetchAll();
            $conn = $dao->closeConnection();
            echo $result[0]['user_password'];
            echo "<br>";
            echo $passHash;
            if ($count == 1 && $result[0]['user_password'] == $passHash) {
                if($result[0]['user_role'] == 'admin') {
                    $_SESSION['admin'] = $result[0]['user_id'];
                    header("Location: index.php");
                    exit;
                } else {
                    $_SESSION['user'] = $result[0]['user_id'];
                    header("Location: index.php");
                }
            } else {
            $errMSG = "Incorrect Credentials, Try again...";
            }
        }
    }
?>



<div class="wrapper fadeInDown">
	<div id="formContent">
    <!-- Tabs Titles -->

    	<!-- Icon -->
    	<div class="fadeIn first">
      		<img src="https://secure.meetupstatic.com/photos/event/c/2/7/b/600_481729787.jpeg" id="icon" alt="Please Log In" />
    	</div>        
    	<!-- Login Form -->
    	<form method="post">

          <?php if (isset($errMSG)) echo $errMSG."<br>"; ?>

      		<input  type="text" id="login" name="email"  class="fadeIn second" placeholder= "Your Email" value=""  maxlength="40">
      		<br>
      		<span class="text-danger"><?php if (isset($emailError)) echo $emailError; ?></span>
     		<input type="password" id="password" name="password" class="fadeIn third" placeholder ="Your Password" maxlength="15">
      		<br>
      		<span  class="text-danger"><?php if (isset($passError)) echo $passError; ?></span>
      		<input type="submit" class="fadeIn fourth" name="btn-login" value="Sign In">
    	</form>

		<!-- Create User -->
<!-- 		<div id="formFooter">
  			<a  href="register.php" class="underlineHover">Sign Up Here...</a>
		</div> -->
	</div>
</div>

</body>
</html>