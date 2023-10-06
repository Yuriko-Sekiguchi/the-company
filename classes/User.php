<?php

require "Database.php";
class User extends Database {

    public function addUser($first_name, $last_name, $username, $password){
        $sql = "INSERT INTO users(first_name, last_name, username, password)values('$first_name', '$last_name', '$username', '$password')";

        if($this->conn->query($sql)){
            //go to log in page
            header("location:../views");
            exit;
        }else{
            die("Error adding users:".$this->conn->error);
        }
    }

    public function login($username, $password){
        $sql = "SELECT * FROM users WHERE username = '$username'";

        $result = $this->conn->query($sql);

        if($result->num_rows == 1){//if the user is found
            $user_data = $result->fetch_assoc(); //get the 1 row

            if(password_verify($password, $user_data["password"])){//if password from form vs. database is correct

                //login
                //create session
                session_start();
                $_SESSION["user_id"] = $user_data["id"];
                $_SESSION["username"] = $user_data["username"];

                //go to dashboard page
                header("location: ../views/dashboard.php");
                exit;

            }else{
                die("Password incorrect");
            }
        }else{
            die("Cannot find user");
        }
    }

    //get all users
    public function getAllUsers(){
        $sql = "SELECT * FROM users";

        if($result = $this->conn->query($sql)){
            return $result; //return the array of users
        }else{
            die("Cannot retrieve users: ".$this->conn->error);
        }
    }

    //get data of one user
    public function getUser($user_id){
        $sql = "SELECT * FROM users WHERE id = $user_id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();//return 1 row
        }else{
            die("Cannot retrieve user: ".$this->conn->error);
        }
    }

    //edit user
    public function editUser($first_name, $last_name, $username, $user_id){
        $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', username = '$username' WHERE id = $user_id";

        if($this->conn->query($sql)){
            //go to dashboard
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Cannot update user: ".$this->conn->error);
        }
    }

    public function deleteUser($id){
        $sql = "DELETE FROM users WHERE id = $id";

        if($this->conn->query($sql)){
            //go back to dashboard
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Cannot delete user: ".$this->conn->error);
        }
    }

    public function updatePhoto($user_id, $file_name, $tmp_name){

        $sql = "UPDATE users SET photo = '$file_name'  WHERE id = $user_id";

        if($this->conn->query($sql)){
            $destination = "../images/$file_name";

            if(move_uploaded_file($tmp_name, $destination)){
                //go back to profile page
                header("location: ../views/profile.php");
                exit;
            }else{
                die("Cannot save photo file");
            }
        }else{
            die("Cannot update photo: ".$this->conn->error);
        }
        
    }
}
?>