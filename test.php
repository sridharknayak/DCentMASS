<?php
//include_once("checkLoginStatus.php");
include_once("php_includes/db_connect.php");
// if($user_ok == true){
// 	header("location: ".$site_address);
//     exit();
// }
?><?php
// Ajax calls this EMAIL CHECK code to execute
if(isset($_POST["emailcheck"])){
	$email = $_POST['emailcheck'];
	$sql = "SELECT id FROM users WHERE email='$email' LIMIT 1";
    $query = mysqli_query($connect_db, $sql);
    $email_check = mysqli_num_rows($query);
    
    if ($email_check < 1) {
	    exit();
    } else {
	    echo '<strong style="color:#F00;">' . $email . ' is taken</strong>';
	    exit();
    }
}
?><?php
// Ajax calls this REGISTRATION code to execute
if(isset($_POST["u"])){
	// CONNECT TO THE DATABASE
	
	// GATHER THE POSTED DATA INTO LOCAL VARIABLES
	$u = preg_replace('#[^a-z0-9]#i', '', $_POST['u']);
	$e = mysqli_real_escape_string($connect_db, $_POST['e']);
	$p = $_POST['p'];
	// GET USER IP ADDRESS
    $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));

	// -------------------------------------------
	$sql = "SELECT id FROM users WHERE email='$e' LIMIT 1";
    $query = mysqli_query($connect_db, $sql);
	$e_check = mysqli_num_rows($query);
	// FORM DATA ERROR HANDLING
	if($u == "" || $e == "" || $p == ""){
		echo "The form submission is missing values.";
        exit();
	} else if ($e_check > 0){
        echo "That email address is already in use.";
        exit();
	} else if (strlen($u) < 3 || strlen($u) > 16) {
        echo "Username must be between 3 and 16 characters";
        exit();
    } else if (is_numeric($u[0])) {
        echo 'Username cannot begin with a number';
        exit();
    } else {
	// END FORM DATA ERROR HANDLING
	    // Begin Insertion of data into the database
		// Hash the password and apply your own mysterious unique salt
		$mmd5 = md5(md5($p));
        // include_once("php_includes/randomStringGen.php");

        function randStrGen($len){
            $result = "";
            $chars = "abcdefghijklmnopqrstuvwxyz0123456789";
            $charArray = str_split($chars);
            for($i = 0; $i < $len; $i++){
                $randItem = array_rand($charArray);
                $result .= "".$charArray[$randItem];
            }
            return $result;
        }
       
		$p_hash = randStrGen(20)."$mmd5".randStrGen(20);
		// Add user info into the database table for the main site table
		$sql = "INSERT INTO users (username, email, pw, ip, signup, lastlogin)
		        VALUES('$u','$e','$p_hash','$ip',now(),now())";
		$query = mysqli_query($connect_db, $sql);
		$uid = mysqli_insert_id($connect_db);




		// Email the user their activation link
		// $to = "$e";
		// $from = "auto_responder@yoursitename.com";
		// $subject = 'yoursitename Account Activation';
		// $message = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>yoursitename Message</title></head><body style="margin:0px; font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px; background:#333; font-size:24px; color:#CCC;"><a href="http://www.yoursitename.com"><img src="http://www.yoursitename.com/images/logo.png" width="36" height="30" alt="yoursitename" style="border:none; float:left;"></a>yoursitename Account Activation</div><div style="padding:24px; font-size:17px;">Hello '.$u.',<br><br>Click the link below to activate your account when ready:<br><br><a href="http://www.yoursitename.com/activation.php?id='.$uid.'&u='.$u.'&e='.$e.'&key='.$p_hash.'">Click here to activate your account now</a><br><br>Login after successful activation using your:<br>* E-mail Address: <b>'.$e.'</b></div></body></html>';
		// $headers = "From: $from\n";
        // $headers .= "MIME-Version: 1.0\n";
        // $headers .= "Content-type: text/html; charset=iso-8859-1\n";
		// //mail($to, $subject, $message, $headers);
		echo "signup_success";
		echo trim(ob_get_clean());
		exit();
	}
	exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>

    
</head>
<body>
<form name="signupform" id="signupform" onSubmit="return false;" style="padding:20px;">
  <h2 style="margin-left:5px;">Sign Up</h2><i>All the fields are required.</i>
  <br>
  
  <div class="input-group input-group-lg">
    <input id="username" type="text" onFocus="emptyElement('status')" onKeyUp="restrict('username')" maxlength="16" class="form-control" placeholder="Username" style="border-radius: 0px; margin:5px;">
   </div>

   <div class="input-group input-group-lg">
    <input class="form-control" placeholder="E-mail address" onBlur="checkemail()" id="email" type="text" onFocus="emptyElement('status')" onKeyUp="restrict('email')" maxlength="88" style="border-radius: 0px; margin:5px;">
   </div><span id="emailstatus" ></span>

    <div class="input-group input-group-lg">
    <input class="form-control" placeholder="Create password" id="pass1" type="password" onFocus="emptyElement('status')" maxlength="100" style="border-radius: 0px; margin:5px;">
    </div>
    <button class="btn btn-success btn-lg" id="signupbtn" onClick="signup()" style="border-radius: 0px; margin-left:5px;">Create Account
    </button>
  </form>


  <div class="alert alert-danger" role="alert" id="status" style="display:none; width:300px;"></div>




<!-- scripts -->
<?php include_once("script.php"); ?>

  <script>
    function restrict(elem){
	var tf = _(elem);
	var rx = new RegExp;
	if(elem == "email"){
		rx = /[' "]/gi;
	} else if(elem == "username"){
		rx = /[^a-z0-9]/gi;
	}
	tf.value = tf.value.replace(rx, "");
}


    function emptyElement(x){
	_(x).innerHTML = "";
	var status = _("status");
	status.style.display = "none";
}


function checkemail(){
	var u = _("email").value;
	if(u != ""){
		_("emailstatus").innerHTML = 'checking ...';
		var ajax = ajaxObj("POST", "test.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            _("emailstatus").innerHTML = ajax.responseText;
	        }
        }
        ajax.send("emailcheck="+u);
	}
}

function signup(){
	var u = _("username").value;
	var e = _("email").value;
    var p1 = _("pass1").value;
    var status = _("status");
	
	_("username").style.border = "1px solid #ccc";
	_("email").style.border = "1px solid #ccc";
	_("pass1").style.border = "1px solid #ccc";

	if (u == "") {
		_("username").style.border = "2px solid #f60";
	}
	if (e == "") {
		_("email").style.border = "2px solid #f60";
	}
	if (p1 == "") {
		_("pass1").style.border = "2px solid #f60";
	}


	if(u == "" || e == "" || p1 == ""){
		status.innerHTML = "Fill out all of the form data";
		status.style.display = "block";
	} else {
		_("signupbtn").style.display = "none";
		status.innerHTML = 'please wait ...';
		var ajax = ajaxObj("POST", "test.php");
        ajax.onreadystatechange = function() {
	        if(ajaxReturn(ajax) == true) {
	            if(ajax.responseText != "signup_success"){
					status.innerHTML = ajax.responseText;
					status.style.display = "block";
					_("signupbtn").style.display = "block";
				} else {
					alert("Sign Up successful! You may Login now.");
					window.location = "login.php";
					//_("signupform").innerHTML = "OK "+u+", check your email inbox and junk mail box at <u>"+e+"</u> in a moment to complete the sign up process by activating your account. You will not be able to do anything on the site until you successfully activate your account.";
				}
	        }
        }
        ajax.send("u="+u+"&e="+e+"&p="+p1);
	}
}
    </script>
</body>
</html>
