<?php

// $someInt = 123; // int
// $someFloat = 3.14; // float
// $someText = 'Foo'; // string
// $someText2 = "bar
// in
// multiple 
// lines";
// $someTrue = false; // bool
// $someNothing = null; // null

// $cars = ['gaz', 'zaz', 'uaz', 'maz', 'vaz', 'bmw'];

// $person = [
//     'firstName' => 'John',
//     'lastName' => 'Doe',
//     'age' => '54',
// ];

// $people = [
//     [
//         'firstName' => 'John',
//         'lastName' => 'Doe',
//         'age' => '54',
//     ],
//     [
//         'firstName' => 'Jane',
//         'lastName' => 'Doe',
//         'age' => '23',
//     ],
// ];

// // +
// // -
// // /
// // *
// // %
// // . - concatination

// // <
// // >
// // <=
// // >=
// // ==
// // !=

// // ===
// // !==

// // && - and
// // || - or

// if (null) {
//     // 1
// } elseif (false) {
//     // 2
// } else {
//     // 3
// }
// $foo = 'bar';
// switch ($foo) {
//     case 'foo':
//         # code...
//         break;
//     case 'bar':
//         # code...
//         break;
//     case 'baz':
//         # code...
//         break;
    
//     default:
//         # code...
//         break;
// }

// while(false) {

// }

// do {

// } while(false);

// for ($i = 0; $i < 10; $i++) { 
//     echo $i . '<br>';
// }


// $cars = ['a' => 'gaz', 'b' => 'zaz', 'uaz', 'maz', 'vaz', 'bmw'];

// foreach ($cars as $lalala => $car) {
//     echo $lalala . ' => ' . $car . '<br>';
// }


// function addTwoNumbers(int $num1, int $num2 = 10)
// {
//     return $num1 + $num2;
// }

// echo addTwoNumbers(1, 2) . '<br>';
// echo addTwoNumbers(1) . '<br>';
// echo addTwoNumbers(1.1, 2.2) . '<br>';

// function checkPalindrome(string $word): bool
// {
//     $wordWithoutSpaces = str_replace(' ', '', $word);
//     $wordInLowercase = strtolower($wordWithoutSpaces);

//     return $wordInLowercase == strrev($wordInLowercase);
// }

// var_dump(checkPalindrome('Anna'));
// var_dump(checkPalindrome('A nna'));
// var_dump(checkPalindrome('asd'));

abstract class Animal
{
    private $name;
    protected $energy = 10;
    public static $animalCount = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
        self::$animalCount++;
    }

    public function run()
    {
        $this->energy--;
    }

    public function sleep()
    {
        $this->energy++;
    }
}

class Cat extends Animal implements Purrable
{
    protected $energy = 20;
    public function run()
    {
        $this->energy -= 2;
    }
    public function purr()
    {
        echo 'iz purring!';
    }
}

class Lion implements Purrable
{
    public function purr()
    {
        echo 'Lion iz purring!';
    }
}

class Dog
{

}

interface Purrable
{
    public function purr();
}

echo '<pre>';
$muris = new Cat('Muris');
$muris->run();
$muris->run();
$muris->run();
$muris->run();
$muris->purr();
var_dump($muris);

$puka = new Cat('Pūka');
$puka->sleep();
$puka->sleep();
$puka->sleep();
$puka->sleep();
var_dump($puka);

$lion = new Lion;
$dog = new Dog;


function makeSound(Purrable $animal) {
    $animal->purr();
}

makeSound($muris);
makeSound($lion);
makeSound($dog);



class User
{
    public $id;
    public $firstNmae;
    public $lastName;
    public $email;
}

class UserRepository implements Savable
{
    public static function save(User $user)
    {
        // DB::query("INSERT INTO users SET id = ?, first....");
    }
}

interface Savable
{
    public static function save();
}

$user = new User;
$user->id = 10;
$user->firstNmae = 'John';
$user->lastName = 'Doe';
$user->email = 'jahn@doe.com';
Userrepository::save($user);