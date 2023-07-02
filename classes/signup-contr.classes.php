<?php

class SignupContr extends Signup {
    private $uid;
    private $email;
    private $pwd;

    public function __construct($uid, $email, $pwd) {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->email = $email;
    }

    public function signupUser() {
        if ($this->emptyInput() == false) {
            echo "Empty Input!";
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if ($this->invalidUid() == false) {
            echo "Invalid username!";
            header("location: ../index.php?error=username");
            exit();
        }

        if ($this->invalidEmail() == false) {
            echo "Invalid email!";
            header("location: ../index.php?error=email");
            exit();
        }

        if ($this->uidTakenCheck() == false) {
            echo "Username or email taken";
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

    private function emptyInput() {
        $result = true;
        if (empty($this->uid) || empty($this->pwd) || empty($this->email)) {
            $result = false;
        }
        return $result;
    }

    private function invalidUid() {
        $result = true;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)) {
            $result = false;
        }
        return $result;
    }

    private function invalidEmail() {
        $result = true;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }
        return $result;
    }

    private function uidTakenCheck() {
        $result = true;
        if ($this->checkUser($this->uid, $this->email)) {
            $result = false;
        }
        return $result;
    }
}