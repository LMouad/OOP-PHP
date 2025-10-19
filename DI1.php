<?php
interface Intelligence {
    public function Think();
}
class Ai implements Intelligence{
    public function Think(){
        echo "Ai is Thinking ";
    }
}
class HumanAi implements Intelligence {
    public function Think() {
        echo "Human is Thinking deeply ";
    }
}


class Robot{
    private $ai;
    public function __construct(Intelligence $ai)
    {
        $this->ai = $ai;
    }
    public function Ask(){
        $this->ai->Think();
        echo " give question now!";
    }
}


$ai = new Ai();
$robot = new Robot($ai);
$robot->Ask();

$ai1 = new HumanAi();
$robot1 = new Robot($ai1);
$robot1->Ask();