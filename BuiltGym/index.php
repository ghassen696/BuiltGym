<?php

session_start();
if(isset($_SESSION["user_data"]))
{
	header("location:./dashboard/admin/");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Built Gym | Login</title>
    <link rel="stylesheet" href="stylelogin.css" />

</head>
<body>
    <!-- partial:index.partial.html -->
    <div id="bg"></div>

    <form action="secure_login.php" method='post'>
        <div class="form-field">
            <input type="text" placeholder="User ID" name="user_id_auth" required />
        </div>
		

        <div class="form-field">
            <input type="password" placeholder="Password"  name="pass_key" required />
        </div>

        <div class="form-field">
            <button class="btn" name="btnLogin" type="submit">Log in</button>
        </div>
    </form>
    <!-- partial -->

</body>
</html>
