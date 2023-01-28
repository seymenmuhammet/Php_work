<?php
/*Parametre olarak aldığı değer kadar satırı olan bir üçgen çizen bir fonksiyon yazın.
  Fonksiyon içerisinde while ve for döngülerinin her ikisini de kullanın. *
 */
function ucgen($sayi){
    for ($i=1;$i<=$sayi;$i++){
        $j=0;
        while ($j<=$i){
            $j++;
            echo '0';
        }
        echo '<br/>';
    }
}
ucgen(5);
