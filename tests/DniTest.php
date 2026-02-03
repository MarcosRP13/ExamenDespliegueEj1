<?php

use PHPUnit\Framework\TestCase;
use App\DNI;

class DniTest extends TestCase
{
    public function testDNIconLetra(){
    $dni = new DNI(12345678);

    $resultado = $dni->getDNIConLetra();
    $this->assertEquals("12345678Z", $resultado);
}
}
