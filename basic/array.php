<?php

// jacob of all trade, master of none. // for experienced dev

// fresher --- concentrate to only one specific skill


// indexed array
// associative array
// multi-dimentional array


$fruit_1 = "banana";
$fruit_2 = "apple";
$fruit_3 = "orange";

// $fruits = array("banana", "apple", "orange");

$fruits = [
    "banana", // 0
    "apple", // 1
    "orange" // 2
];


echo "<pre>";
var_dump($fruits);
// echo $fruits[1];
array_unshift($fruits, 'mango');
var_dump($fruits);
echo "</pre>";


$person = [
    'name' => 'John Doe',
    'age' => 20,
    'email' => 'john.doe@email.com'
];



echo "<pre>";
// var_dump($person);

// echo "Person's name: " . $person['name'];
echo 'Person\'s name: ' . $person['name'];

echo "<br/>";
// if (isset($person['address'])) {
//     $person['address'] = $person['address'];
// } else {
//     // $person['address'] = 'not defined';
//     // $person['address'] = '';
//     $person['address'] = null;
// }

// if (!isset($person['address'])) {
//     // $person['address'] = 'not defined';
//     $person['address'] = '';
//     // $person['address'] = null;
// }

// $person['address'] = condition == true ? $person['address'] : 'not defined'; // string
// $person['address'] = isset($person['address']) ? $person['address'] : ''; // string

$person['address'] = isset($person['address']) ? $person['address'] : null; // null data type 
// $person['address'] = $person['address'] ?? null;
$person['address'] ??= null; // null coalescing assignment operator

// $person['address'] = isset($person['address']) ? $person['address'] : 'not defined';


// $person['address'] ?? null; // null coalescing operator
$person['address'] ??= null; // null coalescing assignment operator

// $address = $person['address'] ?? null;
echo "Person's address: " . $person['address'];
echo "<br/>";
// echo "Person's address: " . $person[1];
var_dump($person);
echo "</pre>";







$persons = [
    [
        'name' => 'John Doe',
        'age' => 20,
        'email' => 'john.doe@email.com'
    ],
    [
        'name' => 'Lilly',
        'age' => 19,
        'email' => 'lilly@email.com'
    ]
];



echo "==== Initiate MoM Doctor Strange === <br/>";
echo "<pre>";
var_dump($persons);
echo "</pre>";


$persons[] = [
        'name' => 'Michael',
        'age' => 17,
        'email' => 'michael@email.com'
    ];
echo "<pre>";
var_dump($persons);
echo "</pre>";

echo "==== Initiate MoM Doctor Strange (v2) === <br/>";

$persons[][] = [
    'name' => 'Rakib',
    'age' => 14,
    'email' => 'rakib@email.com'
];

$persons[2]['age'] = 22;

$persons[3][0]['age'] = 28;

echo "<pre>";
var_dump($persons);
echo "</pre>";

$sajjad = [
    'name' => 'Md. Sayem'
];

$sajjad['academic']['education'] = [
    // 'education' => [
        [
            'name' => 'JSC',
            'board' => 'cumilla',
            'year' => '2014',
            'institute' => 'chphs',
            'marks' => ''
        ],
        // [
        //     'name' => 'SSC',
        //     'board' => 'cumilla',
        //     'year' => '2016',
        //     'institute' => 'chphs',
        //     'marks' => ''
        // ],
        [
            'name' => 'HSC',
            'board' => 'cumilla',
            'year' => '2018',
            'institute' => 'chphs',
            'marks' => ''
        ],
    // ]
    ];

    $sajjad['academic']['education'][] = [
            'name' => 'SSC',
            'board' => 'cumilla',
            'year' => '2016',
            'institute' => 'chphs',
            'marks' => ''
    ];

    echo "Sajjad's info ==== <br/>";
echo "<pre>";
var_dump($sajjad);
echo "</pre>";


// $human = [
//     'personal_info' => [
//         'father_name' => '',
//         'mother_name' => '',
//         'dob' => '',
//         'nationality' => '',
//         'religion' => ''
//     ],
//     'academic_info' => [
//         'ssc' => [
//             'year' => '',
//             'gpa' => ''
//         ],
//         'hsc' => [
//             'year' => '',
//             'gpa' => ''
//         ],
//         'graduation' => [
//             'bsc' => [
//                 //
//             ],
//             'msc' => [
//                 //
//             ]
//         ]
//     ],
//     'professional_course' => [
//         //
//     ]
// ];


// $human['bank_info']['mfs']['bkash'] = [
//     'account_no' => '',
//     'account_name' => ''
// ];

// $human['bank_info']['mfs']['nagad'] = [
//     'account_no' => '',
//     'account_name' => ''
// ];

// $human['bank_info']['ba']['citybank'] = [
//     'account_no' => '',
//     'account_name' => '',
//     'branch' => ''
// ];

// $human['bank_info']['ba']['scb'] = [
//     'account_no' => '',
//     'account_name' => '',
//     'branch' => ''
// ];

// echo "==== Complete info of human === <br/>";
// echo "<pre>";
// var_dump($human);
// echo "</pre>";