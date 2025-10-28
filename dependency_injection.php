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

?>
