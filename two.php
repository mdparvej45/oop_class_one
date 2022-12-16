<?php
class Hotel{
    public $room1 = 'This is room one';
    public function room3(){
        echo "Room 3 and {$this->room1} is same room";
    }
}

$GestHouse = new Hotel();
$GestHouse-> room3();
$GestHouse-> room1 = 'Room 5';
echo $GestHouse-> room1;
$GestHouse-> room3();


class Classroom{
    function __construct($classlink)
    {
       echo $this-> Link = $classlink;
    }
    private $Link = 'meet';
}
$Classroom = new Classroom('zoom');



?>