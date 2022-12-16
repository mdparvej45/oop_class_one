<?php
class Human{
    public function Emotion(int $name)
    {
        echo "{$name} is a Being Human </br>";
    }
}
$parvej = new Human();
$parvej-> Emotion(2);

class Robot{
    public function __construct()
    {
        echo "Assalamolikum!";
    }
    public function Hello(){
        echo "Hello friend how are you";
    }
    public $fine = "Iam fine and you?";
    public function __destruct()
    {
        echo "Allah hafaz";
    }
}
$sofia = new Robot();
echo $sofia-> fine;
$sofia-> Hello();


?>