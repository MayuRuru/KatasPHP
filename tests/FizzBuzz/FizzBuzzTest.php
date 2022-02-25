<?php

namespace Tests;

use App\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;


class FizzBuzzTest extends TestCase {

	public function test_example(
		) {
	
			$this->assertEquals(4, 4);
		}
	
		public function test_Fizz_if_divisible_by_3(){
			//given: crear una clase e instanciarla (atribuirla a una variable)
			$fizzbuzz = new FizzBuzz();
			
			//when: queremos que nos retorne algo cuando hacemos algo
			//una funcion que haga algo en el objeto creado a partir de parametros:
			$return = $fizzbuzz->execute(3);	//decidimos esta funcion y hay que escribirla
			
			//then:
			$this->assertEquals('Fizz',$return);
			//esta linea verifica que la variable return contiene 'Fizz'
		}

		public function test_Buzz_if_divisible_by_5() {
			$fizzbuzz = new FizzBuzz();
			$return = $fizzbuzz->execute(5);
			$this->assertEquals('Buzz',$return);
		}

		public function test_FizzBuzz_if_divisible_by_3_and_5() {
			$fizzbuzz = new FizzBuzz();
			$return = $fizzbuzz->execute(15);
			$this->assertEquals('FizzBuzz',$return);
		}


		public function test_number_if_not_divisible_by_3_or_5() {
			$fizzbuzz = new FizzBuzz();
			$return = $fizzbuzz->execute(2);
			$this->assertEquals(2, $return);
		}

		

}
