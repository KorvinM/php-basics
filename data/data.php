<?php

//set up all the variables we need for the Datatypes article
//

$eol = PHP_EOL;
//html tags
$hP = '<p>';
$hBR = '<br />';
//strings
$name = 'Korvin';
//integers and floats
$bankAcc = 71722091;
$bankBal = 1.2e4;
//bools
$sectionBool = true;
$numBool = 0;
//arrays
$names = ['David','Mary'];
//simple associative array

$people = [
  'Korvin' => 47,
  'Angela' => 51
];
//more complex associative array
$users = [
  [
    'username' => 'Korv',
    'email' => 'km@korvin.org',
    'likes' => ['history', 'food']
  ],
  
  [
    'username' => 'Mary',
    'email' => 'mary@hotmail.com',
    'likes' => ['books', 'cats']
  ]
];
//NULL
//
$noName = NULL;
//concatenation
$weather = 'rainy';
$temperature = 30.6;

//
//day data
//

$today = getdate();
$dayOfWeek = $today['wday']; //get the number of the day

//complex array used in the for..each section
//
$topics = [
  [
    'id' => 1,		
    'title' =>'PHP Basics',		
    'posts' => [
      ['body' => 'Practice the language'], 
      ['body' => 'Use PHP on a practical project'], 
      ['body' => 'Practice the language'], 
    ]		
  ],
  [
    'id' => 2,		
    'title' =>'How to use a foreach loop',		
    'posts' => [
      ['body' => 'Just do it'] 
    ],		
  ],
];

?>
