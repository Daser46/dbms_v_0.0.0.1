<?php
require "../include.php";
$var = '';
$sql = 'SELECT * FROM `fuel`';
$result = mysqli_query($db_conn,$sql);
while($row = mysqli_fetch_assoc($result)){
    $var .= '<tr>
    <td>'.$row['fuel_Id'].'</td>
    <td>'.$row['fuel_type'].'</td>
    <td>'.$row['stock_in'].'</td>
    <td>'.$row['stock_out'].'</td>
    <td>'.$row['available_stock'].'</td></tr>';

}
echo '<h1>Add Fuel Data To Fuel Table </h1>
<form id="addFuel">
    <input type="text" placeholder = "Fuel Type" name="fuelType" class="inputfield" id="fuelType">
    <input type="text" placeholder = "Stock in" name="stockIn" class="inputfield" id="stockIn">
    <input type="text" placeholder = "Stock out" name="stockOut" class="inputfield" id="stockOut">
    <input type="text" placeholder = "Available Stock" name="available" class="inputfield" id="available">
    <button type="submit" class="regular-btn" id="addFuelbtn"> ADD </button>
</form>
<table class="view-data">
    <tr>
        <th>Fuel ID</th>
        <th>Fuel Type</th>
        <th>Stock In</th>
        <th>Stock Out</th>
        <th>Stock Available</th>
    </tr>'.$var.'</table>';
?>