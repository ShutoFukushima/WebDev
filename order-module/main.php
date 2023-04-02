<div id="subcontent">
    <table id="data-list">
      <tr>
        <th>#</th>
        <th>Order Date / ID</th>
        <th>Customer Name</th>
        <th>Address</th>
        <th>Contact Number</th>
        <th>Status</th>
      </tr>
<?php
$count = 1;
$count = 1;
if($receive->list_receive() != false){
foreach($receive->list_receive() as $value){
   extract($value);
  
?>
      <tr>
        <td><?php echo $count;?></td>
        <td><a href="index.php?page=orders&action=order&id=<?php echo $rec_id;?>"><?php echo $rec_date_added.' - '.$rec_id;?></a></td>
        <td><?php echo $rec_supplier;?></td>
          <td><?php echo $rec_description;?></td>
          <td><?php echo $rec_amount;?></td>
      <td>
    <?php 
    if($rec_saved == 0){
        echo '<span style="color:red;">Order Processing</span>';
    } else {
        echo '<span style="color:green;">Order Done</span>';
    }
    ?>
</td>

      </tr>
      <tr>
<?php
 $count++;
}
}else{
  echo "No Record Found.";
}
?>
    </table>
</div>