<?php
require_once "DBConnection.php";
class ProfileController
{
    private $user_id;
    private $fullname;
    private $userData;


    public function __construct()
    {
        $this->user_id = $_COOKIE['user_id'];
        $db = new DBConnection();
        $conn = $db->getConnection();


        $stmt = $conn->query("SELECT * FROM `users` INNER JOIN `person` ON(users.ID=person.Person_ID) WHERE person.Person_ID=$this->user_id");

        $this->userData = $stmt->fetch_assoc();

        $this->fullname = $this->userData['Fname'] . " " . $this->userData['Lname'];
    }

    public function getUserData()
    {
        return $this->userData;
    }

    public function getUserFullName()
    {
        return $this->fullname;
    }
}
