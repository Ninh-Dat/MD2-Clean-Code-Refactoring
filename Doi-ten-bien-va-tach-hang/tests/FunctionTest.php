<?php

 use PHPUnit\Framework\TestCase;
 include_once "../app/Calculator.php";
 class FunctionTest extends TestCase
{
    public function addtionTest(){
        $a= new Calculator();
        $firstOperand=1;
        $secondOperand=2;
        $operand="+";
        $result=$a->calculate($firstOperand, $secondOperand,$operand);
        $expect=3;

        $this->assertEquals($result,$expect);
    }
}