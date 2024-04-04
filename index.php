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

var_dump($name);
var_dump($age);
var_dump($isStudent);
var_dump($heigth);

var_dump(NAME);
var_dump(AGE);
var_dump(ISSTUDENT);
var_dump(HEIGHT);

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

echo $text1 . " " . $text2 . " " . $text3 . " " . $text4 . " " . $text5 . " " . $text6 . " " . $text7 . " " . $text8 . ".";

