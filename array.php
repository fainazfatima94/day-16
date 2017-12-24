<?php
//  $data = [];
//  $data[0] = 10;
//  $data[1] = 20;
//  $data[2] = 30;
//
//  $data['name'] = 'Moshiur';
//  $data['city'] = 'Mirpur-10';
//  $data['country'] = 'Bangladesh';
//
//  echo $data = 'Moshiur';


//$data = [10, 20, 30, 'Moshiur', 'Mirpur-10', 'Bangkadesh'];
//echo $data[4];

//$data = [
//    'name' => 'Maisha',
//    'city' => 'Mirpur-10',
//    'country' => 'Bangladesh',
//    'phone' => '017554488',
//    'gender' => 'Male'
//];

//echo $data['name'];
//
//foreach ($data as $value){
//    echo $value.'<br/>';
//}


//echo '<pre>';
//print_r($data);
//echo '</pre>';

//echo '<pre>';
//var_dump($data);
//echo '</pre>';

//$data[0][0] = 10;
//$data[0][1] = 20;
//$data[0][2] = 30;
//
//$data[1][0] = 40;
//$data[1][1] = 50;
//$data[1][2] = 60;
//
//$data[2][0] = 70;
//$data[2][1] = 80;
//$data[2][2] = 90;
//
//$data[3][0] = 100;
//$data[3][1] = 110;
//$data[3][2] = 120;
//
//foreach ($data as $value){
////    echo $value[0].' '.$value[1].' '.$value[2].'</br>';
//    foreach ($value as $v_value){
//        echo $v_value.' ';
//    }
//    echo '</br>';
//}
//$_ super global array



//function demo($firstName, $lastName=null){
////    $firstName = 'Mehedi';
////    $lastName = 'Hasan';
//    $fullName = $firstName.' '.$lastName;
////    echo $fullName;
//    return $fullName;
//}
//
//echo demo('Mehedi');
//echo '<br/>';
//demo('Shakib', 'Khan');
//
//$res = demo('Shojib', 'Khan');
//echo 'Full name is : '.$res;
//echo '<br/>';
//echo 'Full name is : '.demo('Ananto', 'Jalil');
//echo '<h1>'.$res.'</h1>';


/*--------OOP---------
 * class
 * subject
 * property
 * method
 * encapsulation
 * inheritance
 * abstract
 * namespace
 * polymorphism
 */


class Demo{
    public $name='Kamal Azad';
    public $city='Sonir Akhra';

    function add(){
        echo 'In Add';
    }

    function hello(){
        echo 'In hello';
    }
}


$demo = new Demo;

$demo->hello();
$demo->add();

echo $demo->name;
























