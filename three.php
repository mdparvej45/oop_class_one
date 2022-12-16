<?php
class Human{
    public $talk = "I can talk";
    public function Emontion(){
        echo "I have lot of emotions";
    }
    public function Cycling(){
        echo "I can cycling";
    }
}

class Robot extends Human{
    public function i_can_do(){
        return $this-> Emontion() . $this-> Cycling();
    }

}
$Soifa = new Robot();
$Soifa-> i_can_do();
echo $Soifa-> talk;
class Human{
    private $talk = "I can talk";
    protected function Emontion(){
        echo "I have lot of emotions";
    }
    public function Cycling(){
        echo "I can cycling";
    }
    public function Talking(){
        echo $this-> talk;
    }
}

class Robot extends Human{
    public function i_can_do(){
        return $this-> Talking();
    }

}
$Soifa = new Robot();
$Soifa-> i_can_do();
// echo $Soifa-> talk;

?>