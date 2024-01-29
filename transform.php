<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $inputString = $_POST['inputString'];
  $hasilTransformasi = ubahString($inputString);
  echo $hasilTransformasi;
}

function ubahString($str) {
  $hurufVokal = array("a", "i", "u", "e", "o");

  $hurufArray = str_split($str);
  $hasil = "";

  for ($i = 0; $i < count($hurufArray); $i++) {
    $huruf = $hurufArray[$i];

    if (in_array($huruf, $hurufVokal)) {
        $hasil .= $huruf . "g" . $huruf;
    } else {
        if ($i < count($hurufArray) - 1) {
            $hurufVokalBerikutnya = $hurufArray[$i + 1];

            if (in_array($hurufVokalBerikutnya, $hurufVokal)) {
                $hasil .= $huruf . $hurufVokalBerikutnya . "g" . $hurufVokalBerikutnya;
                $i++;
            } else {
                $hasil .= $huruf;
            }
        } else {
            $hasil .= $huruf;
        }
    }
}

  return $hasil;
}