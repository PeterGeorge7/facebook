<?php
require_once "DBConnection.php";
class FriendsController
{
    private $user_id;
    private $friendsData;
    private $friendsCount;
    public function __construct()
    {
        $this->user_id = $_COOKIE['user_id'];
        $db = new DBConnection();
        $conn = $db->getConnection();


        $countStmt = $conn->query("SELECT COUNT(*) AS numberOfFriends FROM `friend` WHERE Person_ID=$this->user_id OR Friend_ID=$this->user_id");

        $this->friendsCount = $countStmt->fetch_assoc()['numberOfFriends'];

        $friendStmt = $conn->query("SELECT person.Person_ID AS id,users.About, person.Fname,person.Lname FROM `users` INNER JOIN `person` ON(users.ID=person.Person_ID) WHERE person.Person_ID IN (SELECT Person_ID FROM friend WHERE Friend_ID=$this->user_id UNION SELECT Friend_ID FROM friend WHERE Person_ID=$this->user_id )");

        $this->friendsData = $friendStmt;
    }


    public function getfriendsCount()
    {
        return $this->friendsCount;
    }
    public function getFriendsData()
    {
        return $this->friendsData;
    }
}
