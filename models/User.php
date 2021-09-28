<?php 

/**
 * 
 */
class User
{
	
	static public function login($data){
		$username = $data['username'];
		try {
			$statment = DB::connect()->prepare('SELECT * FROM users WHERE username =:username');
			$statment->execute(array(":username" => $username));
			$user = $statment->fetch(PDO::FETCH_OBJ);
			return $user;
		} catch (PDOException $e) {
			echo 'erreur' . $e->getMessage();
		}
	}
}


?>