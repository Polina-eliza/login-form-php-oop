<?php

class Signup extends Dbh {
    protected function setUser($uid, $email, $pwd) {
        $stmt = $this->connect()->prepare('INSERT INTO users (users_uid, users_pwd, users_email) VALUES (?, ?, ?);');

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

        if (!$stmt->execute(array($uid, $hashedPwd, $email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

    protected function checkUser($uid, $email) {
        $stmt = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_email = ?;');

        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck = false;
        if ($stmt->rowCount() === 0) {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}
