<?php

namespace Tests;
use PHPUnit\Framework\TestCase;
use App\BdayKata\BdayKata;

/* un test double en outside in 
lo usamos para no probar lo que esta fuera del foco 
de lo que estamos probando????

- stub/mock? > objeto double test 
que devuelve un valor al llamar una funcion
sirve para probar diferentes escenarios
controlando ese valor

- spy > nos indica si una funcion ha sido llamada
permite controlar comportamientos internos

*/



class BdayKataTest extends TestCase {
//test Double Stub > what day is today
//test Doube Spy of Bday Mail service > send email on bday date

	public function test_example(
		) {
	
			$this->assertEquals(4, 4);
		}

    public function test_send_mail()
    {
    //given: crear clases e instanciarlas (atribuirla a una variable)
        $spyMailService = new spyMailService();
        $employeeRepository = [];


        $bdayService = new BdayService(
            $employeeRepository,
            $spyMailService);

        //when: queremos que nos retorne algo cuando hacemos algo
		//una funcion que haga algo en el objeto creado a partir de parametros:
    
        $bdayService->sendGreetings(['day'=>13, 'month'=>8]);

        //then:
        $this->assertTrue($spyMailService->send());
    }

}