<?php

if (isset($_GET['act']) && $_GET['act'] == 'logout') {

	session_destroy();

	header('location: ?');

	die();

}

if (isset($_POST['submit']) && $_POST['submit'] == 'enter') {

	$email = trim($_POST['email']);
	$password = trim($_POST['password']);

	$database_link = DBM::open($config['database']);

	$get_admin_query = "SELECT `id`, `name`, `email`, `group_id` FROM `bc_administrators` WHERE `email` = '" . DBM::escape($email) . "' AND `password` = SHA1('" . DBM::escape($password) . "') AND `active` = 'Y'";

	if ($get_admin_result = DBM::queryData($get_admin_query, $database_link)) {

		$get_admin_data = DBM::fetchObject($get_admin_result);

		$_SESSION['admin_id'] = $get_admin_data->id;
		$_SESSION['admin_email'] = $get_admin_data->email;
		$_SESSION['admin_name'] = $get_admin_data->name;

		header('location: ?');

		DBM::close($database_link);

		die();

	}

	DBM::close($database_link);

}

?>
    <div class="container">

      <form method="post" action="" name="login-form" class="form-signin">
        <h2 class="form-signin-heading"></h2>
        <h4>Login</h4>
        <input type="text" name="email" class="input-block-level" placeholder="Username">
        <input type="password" name="password" class="input-block-level" placeholder="Password">
        <input type="submit" name="submit" value="enter" class="btn btn-large btn-primary" />
      </form>

    </div> <!-- /container -->
