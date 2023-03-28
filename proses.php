<?php
<?php
// ambil data dari form
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator'];

// hitung hasil sesuai operator
switch ($operator) {
    case '+':
        $hasil = $angka1 + $angka2;
        break;
    case '-':
        $hasil = $angka1 - $angka2;
        break;
    case '*':
        $hasil = $angka1 * $angka2;
        break;
    case '/':
        $hasil = $angka1 / $angka2;
        break;
    default:
        $hasil = "Operator tidak dikenal";
}

// tampilkan hasil
echo "Hasil dari ".$angka1." ".$operator." ".$angka2." = ".$hasil;
?>


 


?>
