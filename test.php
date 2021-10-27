<!DOCTYPE html>
<html>
<head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap');
    h1 {
        font-family: 'Zen Kurenaido', sans-serif;
        text-align: center;
        color: #2F4F4F;
        background-color: #90EE90;
    }

    @import url('https://fonts.googleapis.com/css2?family=Questrial&display=swap');
    table {
    font-family: 'Questrial', sans-serif;
    width: 750px;
    border-collapse: collapse;
    margin: 50px auto;
    background-color: #F8F8FF;
    }

    th {
        background: #6495ED;
        color: #FFFFFF;
        font-weight: bold;
    }

    td, th {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: center;
        font-size: 16px;
    }
 
</style>
</head>  

<body style ="background-color:#E6E6FA;">
<h1>Warung Sayurnya Pak Joy</h1>

<?php
$kg = array(0.5, 2, 1, 3, 1);
$gr = array();
$mg = array();
for($x = 0; $x <= 4; $x++) {
    $gr[$x] = $kg[$x]*1000;
    $mg[$x] = $kg[$x]*10000;
}

$array = [
array("1","Bayam","$kg[0]", "$gr[0]", "$mg[0]"),
array("2","Jagung", "$kg[1]", "$gr[1]", "$mg[1]"),
array("3","Labu", "$kg[2]", "$gr[2]", "$mg[2]"),
array("4","Bawang", "$kg[3]", "$gr[3]", "$mg[3]"),
array("5","Cabai", "$kg[4]", "$gr[4]", "$mg[4]")
];
 
echo "<table border='1'";
echo "<tr><th>No</th><th>Nama Sayur</th><th>Berat(kg)</th><th>Berat(gr)</th><th>Berat(mg)</th></tr>";
foreach ($array as $rows => $row)
{
	echo "<tr>";
	foreach ($row as $col => $cell)
	{
		echo "<td>" . $cell . "</td>";
	}	
 
}	
  echo "</tr></table>";
?>

<!-- <table>
    <thead>
        <tr>
            <th> No </th>
            <th> Nama Barang </th>
            <th> Berat (kg) </th>
            <th> Berat (g) </th>
            <th> Berat (mg) </th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td data-column="No">1</td>
            <td data-column="Nama Barang">Bayam</td>
            <td data-column="Berat (kg)">0.5 kg</td>
            <td data-column="Berat (g)"> 
                <?php 
                $bayam = 0.5;
                $bayam *= 1000;
                echo $bayam;
                ?> </td>
            <td data-column="Berat (mg)"> 
                <?php 
                $bayam = 0.5;
                $bayam *= 1000000;
                echo $bayam;
                ?> </td>
        </tr>

        <tr>
            <td data-column="No">2</td>
            <td data-column="Nama Barang">Jagung</td>
            <td data-column="Berat (kg)">2 kg</td>
            <td data-column="Berat (gr)"> 
                <?php 
                $jagung = 2;
                $jagung *= 1000;
                echo $jagung;
                ?> </td>
            <td data-column="Berat (mg)"> 
                <?php 
                $jagung = 2;
                $jagung *= 1000000;
                echo $jagung;
                ?> </td>
        </tr>

        <tr>
            <td data-column="No">3</td>
            <td data-column="Nama Barang">Labu</td>
            <td data-column="Berat (kg)">1 kg</td>
            <td data-column="Berat (gr)"> 
                <?php 
                $labu = 1;
                $labu *= 1000;
                echo $labu;
                ?> </td>
            <td data-column="Berat (mg)"> 
                <?php 
                $labu = 1;
                $labu *= 1000000;
                echo $labu; 
                ?> </td>
        </tr>

        <tr>
            <td data-column="No">4</td>
            <td data-column="Nama Barang">Bawang</td>
            <td data-column="Berat (kg)">3 kg</td>
            <td data-column="Berat (gr)"> 
                <?php 
                $bawang = 0.5;
                $bawang *= 1000;
                echo $bawang;
                ?> </td>
            <td data-column="Berat (mg)"> 
                <?php 
                $bawang = 0.5;
                $bawang *= 1000000;
                echo $bawang;
                ?> </td>
        </tr>

        <tr>
            <td data-column="No">5</td>
            <td data-column="Nama Barang">Cabai</td>
            <td data-column="Berat (kg)">1 kg</td>
            <td data-column="Berat (gram)"> 
                <?php 
                $cabai = 1;
                $cabai *= 1000;
                echo $cabai;
                ?> </td>
            <td data-column="Berat (mg)"> 
                <?php 
                $cabai = 1;
                $cabai *= 1000000;
                echo $cabai;
                ?> </td>
        </tr>
    </tbody> -->

</body>
</html>