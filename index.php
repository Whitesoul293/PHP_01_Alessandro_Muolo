<?php

/*
TRACCIA 1
Installare PHP
Definisci 4 variabili:
Integer
Float
String
Boolean
A schermo, fai comparire il tipo di dato delle varie variabili.
Trasforma quelle variabili in costanti, utilizzando le best practice viste a lezione.
Pusha il codice su GitHub con il nome php_01_nome_cognome. Integra anche le altre tracce e poi pusha tutto.
*/

// $instalPHP = notChecked; //fatta per memare

// String
$name = 'Alessandro';
const NAME = 'Alessandro';

// Integer
$age = 25;
const AGE = 25;

// Booleano
$isStudent = true;
const ISSTUDENT = true;

// Float
$heigth = 1.80;
const HEIGHT = 1.80;

// var_dump($name);
// var_dump($age);
// var_dump($isStudent);
// var_dump($heigth);

// var_dump(NAME);
// var_dump(AGE);
// var_dump(ISSTUDENT);
// var_dump(HEIGHT);

/*
TRACCIA 2
Date le seguenti variabili:
$1text = "Marco";
$text2 = "hai";
$text.3 = "sete";
$text4 = "?";
@text5 = "Perchè";
$te-xt6 = '$text2';
$text 7 = 'bevuto';
$text8 = "tutto"
correggi eventuali errori e stampa correttamente a terminale la stringa: “Marco hai sete? Perche' hai bevuto tutto.“
*/

$text1 = "Marco";
$text2 = " hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = $text2;
$text7 = "bevuto";
$text8 = "tutto";

//? echo $text1 . " " . $text2 . " " . $text3 . " " . $text4 . " " . $text5 . " " . $text6 . " " . $text7 . " " . $text8 . ".";

/*
TRACCIA 3

Dati i seguenti array:

$words1 = [
  'una',
  67,
  'vita',
  'colle',
  'mi',
  'rosso',
[
  'oscura',
  'era',
  89,
  [
  'mezzo',
  [
    'cammin',
    'Nel',
    [
      'selva',
      'la',
      [
        'via',
        'una',
        true,
      ]
    ],
  ]
],
    'ritrovai',
    'per'
  ],
'diritta'
];
$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'nostra',
  'elemento3' => [
    'Virgilio',
    'smarrita',
    'ché'
  ]
];
Crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo, attraverso l’accesso agli array sopra: “Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“.
HINT:

Non tutti gli elementi all’interno dell’array sono utili, e alcuni elementi mancano proprio. Scegli come risolvere il problema nel modo piu' opportuno: nuove variabili, concatenamenti, ecc ecc. */

$words1 = [
  'una',
  67,
  'vita',
  'colle',
  'mi',
  'rosso',
  'di',
[
  'oscura',
  'era',
  89,
  [
  'mezzo',
  [
    'cammin',
    'Nel',
    [
      'selva',
      'la',
      [
        'via',
        'una',
        true,
      ]
    ],
  ]
],
    'ritrovai',
    'per'
  ],
'diritta'
];
$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'nostra',
  'elemento3' => [
    'Virgilio',
    'smarrita',
    'ché'
  ]
];

var_dump($words1);
var_dump($words2);

echo $words1[7][3][1][1] . " " . $words1[7][3][0] . " " . $words1[6] . " " . $words1[7][3][1][0] . " " . $words1[6] . " " . $words2['elemento2'] . " " . $words1[2] . " " . $words1[4] . " " . $words1[7][4] . " " . $words1[7][5] . " " . $words1[0] . " " . $words1[7][3][1][2][0] . " " . $words1[7][0] . "," .  " " . $words2['elemento3'][2] . " " . $words1[7][3][1][2][1] . " " . $words1[8] . " " . $words1[7][3][1][2][2][0] . " " . $words1[7][1] . " " . $words2['elemento3'][1];