<?php

function ucgen($say){   //sayıyı aşağıda vereceğimiz için buraya değişken tanımladık.
    for($i=0;$i<=$say;$i++){   //$say değişkeni içine yazılan sayıya kadar tekrar etmesi için bir döngü tanımladık.

        $j=0;
        while($j<=$i){  //döngüdeki sayıya ulaşana kadar aşağıdaki işlemi tekrarlaması için while açtık.
            $j++;   //döngünün sonlanabilmesi için değişkeni 1 arttır dedik.
            echo 0 ; // sıfır sayısına ulaşmak i.in sıfırla çarptık.

        }
        echo   "<br>"; // her while döngüsü bittiğinde çalışması için br tagini buraya ekledik.
    }

}
ucgen(15);

?>