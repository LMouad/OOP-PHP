<?php
interface Engine{
    public function engineState ();
}
class Start implements Engine{
    private $brand;
    public function __construct($brand){
        $this->brand=$brand;
    }
    public function engineState(){
        echo $this->brand." engine start";
    }
}
class Stop implements Engine{
    private $brand;
    public function __construct($brand){
        $this->brand=$brand;
    }
    public function engineState(){
        echo $this->brand." engine stop";
    }
}
class Car{
    private $eng;
    public function __construct(Engine $eng){
        $this->eng = $eng;
    }
    public function drive(){
        $this->eng->engineState();
    }
}
$eng = new Start('toyota');
$car = new Car($eng);
$car->drive();
$eng1 = new Stop('toyota');
$car1 = new Car($eng1);
$car1->drive();

?>
