<?php
	/* Novidades PHP 7*/


	/*
	Aula 1 Introdução

	declare(strict_types=1);

	$php7 = function(String $title):array{
		return[
			$title."\n",
			"Php on another level",
			"more performace",
			"2x faster"
		];
	};

	foreach ($php7("news in php7") as $p) {
		echo $p."\n";
	}*/

	/******************************************************************************************/

	/*
	Aula 2 Declaração de Tipos

	class ClassE{
		public function get(float $a){
			return $a;
		}
	}


	$e = new ClassE;
	echo $e->get(5.8);
	*/


	/******************************************************************************************/


	/* 	Aula 3	Modo Strict Types

	declare(strict_types=1);

	function func3(int $x){
		return $x;
	}

	echo func3(4);

	*/

	/******************************************************************************************/	

	/* 	Aula 4	Declaração de tipos de retorno 

	declare(strict_types=1);

	function func4(int $x):float{
		return $x/2;
	}

	class class4{
		public function getInt(int $x):float{
			return $x / 2 ;
		}

	}	
	$a =  new class4;
	echo $a->getInt(4);
	*/


	/******************************************************************************************/	


	/* 	Aula 5	Operador Null Coalescing 

	// Se estivar vazio, declara vazio

	$a = $_GET['a'] ?? Null;
	echo $a;
	*/

	/******************************************************************************************/	


	/* 	Aula 6 Operador Spaceship 

	// Se for igual "0" - esquerda maior "1" - direita maior "-1"

	echo 3<=>3;  echo "<br />";
	echo 2<=>3;	 echo "<br />";
	echo 3<=>2;	 echo "<br />";

	echo "<br /><br /><br /><br />";

	echo 'a'<=>'a1';  echo "<br />";
	echo [1,2,3]<=>[1,1,4];	 echo "<br />";
	
	echo "<br /><br /><br /><br />";
	
	function int6(int $a, int $b):int{
		return $a<=>$b;
	}
	
	echo int6(2,2);
	*/


	/******************************************************************************************/	


	/* Aula 6 Definição de constante com Arrays 

	define('ANIMALS', ['dog','cat','bird']);

	echo ANIMALS[2];
	*/


	/******************************************************************************************/	


	/* Aula 7 Classes anônimas

	interface Logger{
		public function log(string $msg);

	}

	class App{
		private $logger;

		public function  getLogger():Logger{
			return $this->logger;
		}
	
		public function setLogger(Logger $logger){
			$this->logger = $logger;
		}

	}

	class Logg implements Logger{
		public function log(string $msg){
			echo $msg;
		}
	}

	/*
	$app = new App;
	$app->setLogger(new Logg);
	var_dump($app->getLogger());
	*/
	/*
	$app = new App;
	$app->setLogger(new class implements Logger{
		public function log(string $msg){
			//classe anonima
			echo $msg;
		}
	});
	var_dump($app->getLogger());
	*/

	/******************************************************************************************/	


	/* Aula 8 Closure Call*/
	/*
	class ClassA{
		private $x = 1;
	}

	$getABC = function(){
		return $this->x;
	};

	$getX = $getABC->bindTo(new ClassA, "ClassA");
	echo $getX();

	//php7
	$getX2 = function(){ return $this->x;};
	echo $getX2->call(new ClassA);
	*/

	/******************************************************************************************/	


	/* Aula 8 Unserialize filtrada

	class User{
		public $name;
		public $email;

		public function __toString(){
			return "Usr: {$this->name}, Email: {$this->email}";
		}
	}


	class Blog{
		public $title;
		public $description;

		public function __toString(){
			return "Blog: {$this->title}, Description: {$this->description}";
		}
	}
	/*
	$user = new User;
	$user->name = "eduardo";
	$user->email = "eduardo@email.com";
	echo $user."<br />";


	$blog = new Blog;
	$blog->title = "eduardo";
	$blog->description = "texto.....";
	echo $blog;
	file_put_contents("data.save", serialize([$user,$blog]));
	*/
	/*
	$data = file_get_contents("data.save");
	$data = unserialize($data,["allowed"=>["User"]]);
	foreach ($data as $obj) {
		if(is_object($obj)){
			echo $obj;
		}
	}*/

	/******************************************************************************************/	

	/* Aula 9 Declaração de namespaces*/

	/*require_once __DIR__."/vendor/autoload.php";
	
	//use App\ClassA;
	//use App\ClassB;
	//use App\ClassC as C;

	use App\{classA, classB, classC as C};

	$a = new ClassA;	
	echo $a;

	$b = new ClassB;	
	echo $b;

	$c = new C;
	echo $c;*/

	/******************************************************************************************/	

	/* Aula 9 Função intdiv*/

	//print_r(intdiv(43.5,2));

	/******************************************************************************************/	

	/* Aula 10 Nova arquitetura para Exception e Error*/

	/*
	interface MyPackageThrowable extends Throwable {}

	class MyPackageException extends Error implements MyPackageThrowable{}
	//	class MyPackageException extends Exception implements MyPackageThrowable{}


	function add(int $left, int $right){
		if($left < 0){
			throw new MyPackageException("Left menor que 0");
		}
		return $left + $right;
	}

	try{
		echo add(-1,5);
	}catch(Exception $e){
		echo "Exception: ".$e->getMessage();
	}catch(Error $e){
		echo "Erro: ".$e->getMessage();
	}*/
