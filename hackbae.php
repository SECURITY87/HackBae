<?php
function cari($nama){
echo "\n\n\n\n\n\"";
echo "MASUKAN NAMA PENCURI : ";
$target = trim(fgets(STDIN));
echo "\nLoading ";
for ($i=0; $i <10 ; $i++) {
echo ". ";
sleep(1);
}
echo "\n\n\nNama\t\t\tAlamat\t\t\t\t\tNIK";
echo "\n$target\t\tJl.Sudirman No 10,Surabaya, JaTim\t\t3321062001150015\n\n\n";
}
cari("COK");
?>

