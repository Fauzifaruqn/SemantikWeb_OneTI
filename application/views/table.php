<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Table result</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<?php 
echo "<pre>";
//echo var_dump($datas);
echo "<pre>";
?>

<h1>HTML Table</h1>

<table>
  <tr>
    <th>Android Name</th>
    <th>Price</th>
    <th>Announced</th>
  </tr>
  
  <?php 
  foreach($datas as $element):
    // foreach($datas as $key=>$value): ?>
      <tr>
          <td><?php echo $element['namahp']; ?></td>
          <td><?php echo $element['price']; ?></td>
          <td><?php echo $element['announce']; ?></td>
      </tr>
  <?php 
    // endforeach;
  endforeach; ?>
</table>

</body>
</html>
