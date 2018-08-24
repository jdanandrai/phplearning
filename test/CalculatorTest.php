<?php




use app\libraries\calculator;
use sample\calculator as cal;
require'../vendor/autoload.php';
class CalculatorTest{

function sample(){

$obj1= new calculator;
$obj1->calculate(4,5);
$obj2= new cal;
$obj2->calculate(5,5);

}


}


$obj=new CalculatorTest;
$obj->sample();

?>
