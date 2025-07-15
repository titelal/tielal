<?php
include ("config.php");
 
$sql = "SELECT * FROM inventory ";
$result = mysqli_query($conn,$sql);
echo "<a href = 'inventory_form.php'> New inventory </a>";
echo "<table border = '1'>";
echo "<th>Item_no</th>";
echo "<th>Item_name</th>";
echo "<th>price</th>";
echo "<th>location</th>";
echo "<th>qty_on_hand</th>";
echo "<th>reorder_pt</th>";
echo "<th>EDIT</th>";
echo "<th>DELETE</th>";
while($row = mysqli_fetch_assoc($result))
{
    echo "<tr>";
    echo "<td>"; echo $row['Item_no'];
    echo "<td>"; echo $row['Item_name'];
    echo "<td>"; echo $row['price'];
    echo "<td>"; echo $row['location'];
    echo "<td>"; echo $row['qty_on_hand'];
    echo "<td>"; echo $row['reorder_pt'];
    echo "<td>"; echo "EDIT";
    echo "<td>"; echo "<a href = 'inventory_delete.php?old_item_no=".$row['Item_no']."'>DELETE</a>";
 
}