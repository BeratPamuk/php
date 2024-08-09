<?php
    $ad = "berat";
    $soyad = "pamuk";
    $yas = "14";

    $mesaj = "Benim adım $ad $soyad ve ben $yas yaşınadyım";

    echo $mesaj."<br>";

    echo "Harf Sayısı : ".strlen($mesaj)."<br>";
    echo "Cümle sayısı : ".str_word_count($mesaj)."<br>";

    echo str_replace(berat,"zeynel",$mesaj);
?>