<?php

class crud {
	public $mysqli;
	public $data;

	public function __construct($hostname, $user, $password, $dbname) {
		$this->mysqli = new mysqli($hostname, $user, $password, $dbname);

		if (mysqli_connect_errno()) {
			echo ("Could not Connect to the Database.");
		}
	}

	public function __destruct() {
		$this->mysqli->close();
	}

	public function read() {
		$query = "SELECT * FROM users";
		$result = $this->mysqli->query($query);
		$num_result = $result->num_rows;

		if ($num_result > 0) {
			while($rows = $result->fetch_assoc()) {
				$this->data[] = $rows;
			}
			return $this->data;
		}
	} 

	public function login() {
		session_start();
		$query =  "Select * from users WHERE email='$email' AND password='$password'";
		$result = $this->mysqli->query($query);
		$num_result = $result->num_rows;
		
		if($num_result > 0){
			//echo "SUCCESS";  <!-- Testing the data if it's successfully logged in  -->
			//exit();
			$_SESSION['login'] = 1;
			$_SESSION['email'] = $email;
			header("Location: views/dashboard.php");
		}//end if
		else{
			header("Location: ./index.php");
		}
	}

	public function insert($name, $lname, $email, $password, $gender, $education) {
		$query = "INSERT INTO users SET fname='$name', lname='$lname', email='$email', password='$password', gender='$gender', education='$education'";
		$result = $this->mysqli->query($query);

		if ($result) {
			header("Location: index.php");
		}
	}

	public function delete() {

	}

	public function update() {

	}
}

?>