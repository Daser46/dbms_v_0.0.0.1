<?php
require "../include.php";
$title = "Details Of Fuel Data";
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
echo '<h1>'.$title.'</h1>

<table class="view-data">
    <tr>
        <th>Fuel ID</th>
        <th>Fuel Type</th>
        <th>Stock In</th>
        <th>Stock Out</th>
        <th>Stock Available</th>
    </tr>'.$var.'</table>';
?>
