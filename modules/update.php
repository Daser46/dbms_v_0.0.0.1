<?php
require "../include.php";
$title = "Update Fuel Data";
$var = '';
$sql = 'SELECT * FROM `fuel`';
$result = mysqli_query($db_conn,$sql);
while($row = mysqli_fetch_assoc($result)){
    $var .= '<tr><form id="form'.$row['fuel_Id'].'">
    <td>'.$row['fuel_Id'].'</td>
    <td><input type="text" class="field'.$row['fuel_Id'].'" value="'.$row['fuel_type'].'" id="fuelId'.$row['fuel_Id'].'" name="fuelId"></td>
    <td><input type="text" class="field'.$row['fuel_Id'].'" value="'.$row['stock_in'].'" id="stockIn'.$row['fuel_Id'].'" name="stockIn"></td>
    <td><input type="text" class="field'.$row['fuel_Id'].'" value="'.$row['stock_out'].'" id="stockOut'.$row['fuel_Id'].'" name="stockOut"></td>
    <td><input type="text" class="field'.$row['fuel_Id'].'" value="'.$row['available_stock'].'" id="available'.$row['fuel_Id'].'" name="avialable"></td>
    <td>
    <button type="submit" class="regular-btn update-btn" id="updatebtn'.$row['fuel_Id'].'">update</button>
    </form>
    <button class="regular-btn edit-btn" id="'.$row['fuel_Id'].'" onclick=enableEdit(\'field'.$row['fuel_Id'].'\');>edit</button>
    </td>
    </tr>';
}
echo '<h1>'.$title.'</h1>
    <table class="view-data">
    <tr>
        <th>Fuel ID</th>
        <th>Fuel Type</th>
        <th>Stock In</th>
        <th>Stock Out</th>
        <th>Stock Available</th>
    </tr>
    '.$var.' 
    </table>';
?>
<script>
    //scripting goes here
</script>