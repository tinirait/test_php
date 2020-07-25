<?php

echo "<br>";
echo "N1";

//N1
class First
{
    function  getClassname (){
        echo "Сообщение:"," ","First","<br>" ;
    }
    function  getLetter(){
        echo "Сообщение:"," ", "A","<br>" ;
    }
}

class Second extends First{
  function  getLetter(){
      echo "Сообщение:"," ", "B","<br>" ;
  }
}

//First
$objectFirst = new First(); //First
$objectFirst->getClassname();
$objectFirst->getLetter();

//Second
$objectSecond = new Second(); //First
$objectSecond->getClassname(); //extend First
$objectSecond->getLetter();





echo "<br>";
echo "N2";

$color = ['red', 'blue', 'green', 'yellow', 'lime', 'magenta', 'black', 'gold', 'grey', 'tomato'];

for ($i = 0; $i < 25; $i++) {
    if ($i % 5 == 0) {
        print("<br/>");
    }
    do {
        $random1 = rand(0,9);
        $random2 = rand(0,9);
    }while( $random1 == $random2);

    print ("<span style='color:$color[$random1]'>$color[$random2] </span>");
}


