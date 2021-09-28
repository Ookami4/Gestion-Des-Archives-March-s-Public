<?php 
/**
 * 
 */
class UsersController
{
	
	static function auth(){
		if (isset($_POST['submit'])) {
			$data['username'] = $_POST['username'];
			$result = User::login($data);
			if ($result->username === $_POST['username'] && password_verify($_POST['password'], $result->password)) {
				$_SESSION['logged'] = true;
				$_SESSION['username'] = $result->username;
				Redirect::to('home');
			} else {
				Session::set('error','Nom d\'utilisateur ou mot de passe est incorrect');
				Redirect::to('login');
			}
		}
	}
	static public function logout(){
		session_destroy();
	}
}

