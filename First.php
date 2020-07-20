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

$colorArr = ['#FF0000', '#1E90FF', '#228B22', '#FFFF00', '#00FF00', '#FF00FF', '#000000', '#FFD700', '#808080', '#DC143C'];
$color = ['red', 'blue', 'green', 'yellow', 'lime', 'magenta', 'black', 'gold', 'grey', 'tomato'];


$randomNumber = rand(0, 9);
$randomColor = rand(0, 9);

for ($i = 0; $i < 25; $i++) {
    if ($i % 5 == 0) {
        print("<br/>");
    }
    echo "<span style='color:$colorArr[$randomColor]'>$color[$randomNumber] </span>";
    //Переопределение счетчиков
    $randomColor = rand(0, 9);
    $randomNumber = rand(0, 9);
}



//let str = '1 -2 -3 4 5 -6f ss3 0 0 0 -0 0.0 0.05';
//
//    function strNatural(str) {
//        let newStr = str.replace(/\D/g, "").split(/\s*/).sort().join("");
//
//        console.log(newStr);
//
//    };
//
//    strNatural(str);
