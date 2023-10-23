<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ödev 2</title>
</head>
<body>
<?php
function rastgeleDiziOlustur($dizi, $adet) {
    // Boş elemanları temizle
    $temizlenmisDizi = array_filter($dizi, function($eleman) {
        return $eleman !== null && $eleman !== '';
    });

    // Diziden rastgele öğeleri seç
    $rastgeleDizi = array_map(function($key) use ($temizlenmisDizi) {
        return $temizlenmisDizi[$key];
    }, array_rand($temizlenmisDizi, $adet));

    return $rastgeleDizi;
}

$veriDizisi = array("elma", null, "armut", "", "karpuz", "çilek", null, "kiraz", "muz");

// Belirtilen adette rastgele değer içeren dizi oluştur
$rastgeleDizi = rastgeleDiziOlustur($veriDizisi, 3);

print_r($rastgeleDizi);


?>

   
</body>
</html>