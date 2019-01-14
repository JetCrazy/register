<?php

class User extends mysqli {
    
    function __contruct() {
        Parent::__contruct("localhost", "root", "", "user");

        if ($this->connect_error) {
            $_SESSION['error'] = "DB Connection error: " . $this->connect_error;
            return;
        }
    }

    public function register() {
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT); // Hashing password
        $token = bin2hex(random_bytes(4)); // Creates Token
        $query = "SELECT * FROM users WHERE email='$_POST[email]'";
        $run = $this->query($query);
        if ($run->num_rows > 0) {
            $_SESSION['error'] = "Email Already Exists";
            return;
        } else {
            $query = "INSERT INTO users(name,email,password,token,active) VALUES('$_POST[name]', '$_POST[email]', '$pass', '$token', 0,";
            $run = $this->query($query);
            if ($run) {
                $user = $this->getuser($_POST[email]);
                $_SESSION['id'] = $user->id;
                $this->send_mail($user->email, $user->id, $token);
                headers("Location: https://localhost/user/activate.php");
            } else {
                $_SESSION['error'] = "Something Went Wrong";
            }
        }
    }

    public function getuser($email) {
        $query = "SELECT * FROM users WHERE email='$email'";
        $run = $this->query($query);
        $row = $run->fetch_object();
        return $row;
    }

    public function send_mail($email, $id, $token) {
        $subject = "Account Activation Code";

        $headers = "From: test app \r\n";
        $headers .= "Reply-to: abc@abc.com \r\n";
        $headers .= "CC: abc@abc.com \r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1 \r\n";
        $message = '<html><body>';
        $message .= '<h3>' . $token . '</h3>';
        $message .= '<h1>OR</h1>';
        $message .= '<h3>' . $_SERVER['SERVER_NAME'] . '/user/activation.php?active=' . $token . '&id=' . $id . '</h3>';
        $message .= '</body></html>';
        
        mail($email, $subject, $message, $headers);
    }
}

?>