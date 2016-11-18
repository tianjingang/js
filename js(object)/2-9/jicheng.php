<?php
header('content-type:text/html;charset=utf8');
class Rich{
    public $name='比尔盖茨';
    protected $car='京N8X506';
    private $money='111111111111';
    public function __construct(){
        echo '世界';
        //parent::__construct();
    }
    public function showCar(){
        echo $this->car;
    }
    public function showMoney(){
        echo $this->money;
    }
}
$r1=new Rich();
echo $r1->name;
echo $r1->showCar();
echo $r1->showMoney();
class ChinaRich extends Rich{
    public function __construct(){
        echo '中国';
        parent::__construct();
    }
      public function show(){
          echo $this->name;
      }
}
$r2=new ChinaRich();
//echo $r2->name;
$r2->show();
$r2->showCar();
$r2->showMoney();



?>