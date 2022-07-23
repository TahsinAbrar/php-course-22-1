<?php

// object -- instance of class
// class User {
//     private $name = 'John Doe';

//     public function getName()
//     {
//         return $this->name;
//     }
// }

// $userObj = new User(); // userObj is an instance of User class

// $obj = new stdClass();
// $obj->name = 'John Doe';
// $obj->age = 24;
// $obj->first_name = 'John Doe';

// var_dump($obj);
// exit();

// $user = [
//     'name' => 'John Doe',
//     'age' => 24
// ];
// var_dump((object) $user); // obj
// var_dump($user); // array
// exit();

// cURL

// echo "<pre>";
// var_dump($user); // display
// customMethod($user); // display
// echo "</pre>";
// exit();
// var_dump($obj);

// $user['name'];
// $user->name;


// API : Application Programming Interface

// // array of object
$userList = file_get_contents('https://jsonplaceholder.typicode.com/users'); // json encoded

// $userList = json_decode($userList);
$userList = json_decode($userList, true);

echo "<pre>";
var_dump($userList); // json encoded
// var_dump(json_decode($userList));
// var_dump(json_decode($userList, true));
// var_dump($userList[0]['name']);
// var_dump($userList[0]->name);
echo "</pre>";
exit();

function customMethod($user)
{
    echo 'Our first user name is: ' . $user['name'];
    // echo 'Our first user name is: ' . $user->name;
}




