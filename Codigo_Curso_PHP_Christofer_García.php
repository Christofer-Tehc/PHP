<!--Christofer García-->
<?php
    //  ¿El Código PHP va aquí
?>

<html>
    <head>
        <title> Mi primera página PHP </title>
    </head>
    <body>
    <?php
    echo "¡Hola mundo!";
    ?>
    </body>
<html>
    
<html>
  <head>
    <title> Mi primera página PHP </title>
  </head>
  <body> <script language = "php">     echo "¡Hola mundo!";</script>   
</body>
</html>

<? 
echo "¡Hola mundo!";
?> 

<? 
echo "<strong> Este es un texto en negrita.
</strong>";
?>

<?php 
echo "<p> ¡Hola mundo! </p>";// Este es un eco de comentario de una sola linea
"<p> ¡Estoy aprendiendo PHP! </p>"; echo "<p> ¡Este es mi primer programa!
</p>";?>

<?php 
echo "<p> ¡Hola mundo! </p>";/* Este es un bloque de comentarios de varias líneas */
echo "<p> ¡Estoy aprendiendo PHP! </p>"; echo "<p> ¡Este es mi primer programa! </p>";?>

<!-- Variables --> 

$variable_name=value;

<?php
    $nombre='Juan';
    $edad=25; 
    echo $nombre; //¿Muestra 'John'?>

<!-- Contantes -->
definir(nombre, valor, no distingue entre mayúsculas y minúsculas)

<!-- Distingue entre mayusculas y minusculas-->
<?php 
define("MSG", "¡Hola, SoloLearners!");
echo MSG;
// Muestra "¡Hola, SoloLearns!"
?>

<!-- No distingue en tre mayus y minus-->
<?php 
define("MSG", "¡Hola, SoloLearners!");
echo msg;
// Muestra "¡Hola, SoloLearns!"
?>

<!-- Tipos de Datos-->
<?php
$string1="¡Hola Mundo!"; //comillas dobles
$string2='¡Hola Mundo!'; //comillas simples
?>

<?php
$int1=42; // número positivo
$int2=-42; // número negativo
?>

<!-- Flotador-->
<? php
$x=42.168;
?>

<!-- PHP Booleano-->
<?php
$x=true; $y=false;
?>

<?php
$str="10";
$int="20";
$suma=$str+$int;
echo($suma);
// Salidas 30
?>

<?php
$name='David';
function getName(){
    echo $name;
}
getName();
// Error: Variable indefinida: name
?>

<?php
$name='David';
function getName(){
    global $name; 
    echo $name;
}
getName();
// Muestra 'David''
?>

<?php
$a='hello';
$hello="¡Hi!";
echo $$a;
// Outputs '¡Hi!'
?>

<!-- Operadores -->
<?php
$num1=8;
$num1=6;

//Addition
echo $num1+$num2; //14

//Subtraction
echo $num1-$num2; //2

//Multiplication
echo $num1*$num2; //48

//Division
echo $num1/$num2; //1.333333333
?>

<?php
$x=14;
$y=3;
echo $x%$y; //2
?>

$x++; // equivalent to $x = $x+1;
$x--; // equivalent to $x = $x-1; 

$x++; // post-increment 
$x--; // post-decrement 
++$x; // pre-increment 
--$x; // pre-decrement

$a  = 2; $b = $a++; // $a=3,  $b=2
$a  = 2; $b = ++$a; // $a=3,  $b=3

$num1 =5;
$num2 =$num1;

<?php
$x=50;
$x+=100;
echo $x;
// Salidas: 150
?>


$name1 = "David"; 
$name2 = "Amy"; 
$name3 = "John"; 

$names = array("David", "Amy", "John");

$names[0] = "David";
$names[1] = "Amy";
$names[2] = "John";

echo $names(1); //Outputs "Amy"

<!-- Dos formas de crear matriz asociativa-->
1)
$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
2)
$people['David'] = "27";
$people['Amy'] = "21";
$people['John'] = "42";

<!-- Matriz bidimensional con 3 matrices-->
$ personas=array (
 'online'=>array ('David', 'Amy'),
 'offline'=>array ('John', 'Rob', 'Jack'),
 'lejos'=>array ('Arthur ',' Daniel ')
);

echo $people['online'][0]; //Outputs "David"
echo $people['away'][1]; //Outputs "Daniel"

<?php	
if(condición){
    código a ejecutar si la condición es verdadera;
}else {
    código a ejecutar si la condición es falsa;
}
?>

<?php
if (condition) {
  code to be executed if condition is true;
} elseif (condition) {
  code to be executed if condition is true;
} else {
   code to be executed if condition is false;
}
?>


<!-- Bucle While -->
<?php
while (condition is true) {
    code to be executed;
 }
?>

<!-- Bucle do -->
<?php
do {
 código a ejecutar;
} while (la condición es verdadera );
?>

<!-- Funciones --> 
function functionName () {    
 // código a ejecutar
}

<?php
function sayHello () {
    echo "¡Hola!";
} sayHello ();//Llamar a la función 
//Salida "¡Hola!"
?>


<?php
function multiplyByTwo($number) {
    $answer = $number * 2;
    echo $answer;
}
multiplyByTwo(3);
// Salidas 6
?>

<?php
function multiply($num1, $num2) {
    $answer = $num1 * $num2;
}
multiply(3, 6);
// Salidas 18
?>

<?php
function mult($num1, $num2) {
    $res=$num1 * $num2;
    return $res;
}

echo mult(8, 3);
// Salidas 24
?>


<!-- Variable Predefinidas-->
<?php
echo $_SERVER['SCRIPT_NAME'];
// Muestra "/somefile.php"
?>


<?php
echo $_SERVER['HTTP_HOST'];
//Outputs "localhost"
?>

<?php
$host = $_SERVER['HTTP_HOST'];
$image_path = $host.'/images/';
?>

<?php
require 'config.php';
echo '<img src="'.$image_path.'header.png" />';
?>

<form action=" first.php " method = " post ">
<p> Nombre: <input type = "text" name = "name" /> 
</p>
<p> Edad: <input type = "text" name = "age" /> 
</p>
<p> <input type = "submit" name = "submit" value = "Submit" /> 
</p>
</form>

<html>
<body>
Bienvenido <?php echo $_POST["name"]; ?><br />
Tu edad: <?php echo $_POST["age"]; ?>
</body>
</html>

<form action = "actionGet.php" method = " get ">
 
  Nombre: <input type = "text" name = "name" /> <br /> <br />
 
  Edad: <input type = "text" name = "edad" /> <br /> <br />
 
  <input type = "submit" name = "submit" value = "Submit" />
 
</form>

<? php
 
echo "Hola". $ _GET ['nombre'] . ".";
echo "Tú eres". $ _GET ['edad'] . "Años.";
?>

<?php
// Start the session
session_start();

$_SESSION['color'] = "red";
$_SESSION['name'] = "John";
?>


<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<?php
echo "Your name is " . $_SESSION['name'];
// Outputs "Your name is John"
?>
</body>
</html>

<!-- setcookie(name, value, expire, path, domain, secure, httponly);
-->

<?php
$value = "John";
setcookie("user", $value, time() + (86400 * 30), '/'); 

if(isset($_COOKIE['user'])) {
  echo "Value is: ". $_COOKIE['user'];
}
//Outputs "Value is: John"
?>

$myfile = fopen("file.txt", "w");


<?php
$myfile = fopen("names.txt", "w");

$txt = "John\n";
fwrite($myfile, $txt);
$txt = "David\n";
fwrite($myfile, $txt);

fclose($myfile);

/* Contiene archivos:
John
David
*/
?>

<!-- Agregar un archivo -->
$myFile = "test.txt";
$fh = fopen($myFile, 'a');
fwrite($fh, "Some text");
fclose($fh);

<? php
if (isset ($ _ POST ['texto'])) {
  $ nombre = $ _POST ['texto'];
  $ mango = fopen ('nombres.txt', 'a');
  fwrite ($ identificador, $ nombre. "\ n");
  fclose ($ identificador); 
}
?>
<form method = "post">
  Nombre: <input type = "text" name = "text" /> 
  <input type = "submit" name = "submit" />
</form>

<!-- Classes y Objectos-->
class Person {
  public $age; //property
  public function speak() { //method
    echo "Hi!"
  }
}

$bob = new Person();
echo $bob->age;

<?php
class Dog{
    public $legs=4;
    public function display() {
        echo $this->legs;
    }
}
$d1 = new Dog();
$d1->display(); //4

$d1=new Dog();
$d1->legs =2;
$d1->display(); //2
?>

<?php
class Person {
    public function __construct() {
        echo "Objeto creado";
    } 
}
$p = new Person ();
?>

<?php
class Person {
    public $name;
    public $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    } 
}
$p = new Person ("David",42);
?>

<?php
class Animal {
    public $name;
    public function hi() {
        echo "Hi from Animal";
    } 
}
class Dog extends Animal {}
$d=new Dog();
$d->hi();
?>

class Demo implements AInterface, BInterface, CInterface {
  // Functions declared in interfaces must be defined here
}

<?php
abstract class Calc { 
  abstract public function calculate($param); 
  protected function getConst() { return 4; }
} 
class FixedCalc extends Calc {
  public function calculate($param) {
    return $this->getConst() + $param;
  }
}
$obj = new FixedCalc();
echo $obj->calculate(38);
?>

<?php
class myClass {
    final function myFunction() {
        echo "Parent";
    }
}
// ERROR because a final method cannot be overridden in child classes.
class myClass2 extends myClass {
    function myFunction() {
        echo "Child";
    }
}
?>

<?php
interface
 MusicianInterface {
  public function play();
}
class Guitarist 
implements
 MusicianInterface {
  public function play() {
    echo "La La La";
  }
}
$obj = new Guitarist();
$obj->
play()
;
?>