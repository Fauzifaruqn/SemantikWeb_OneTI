<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Input 1-TI</title>
</head>
<body>

<?php
echo "<pre>";
echo var_dump($datas);
echo "<pre>";
?>

<div>
  <form method="POST" action="<?php echo base_url();?>index.php/Welcome/range">
    <h3>Budget</h3>
    <input type="number" name="angka" >
    <br>
    <button type="submit">Submit Budge</button>
  </form>
  <br>

  <button><a href="<?php echo base_url();?>index.php/Welcome/fetchData">NORMAL TABLE</a></button>

  <form method="POST" action="<?php echo base_url();?>index.php/Welcome/filterBrand">
    <h3>Brand</h3>
    <input type="text" name="brand" >
    <br>
    <button type="submit">Submit Brand</button>
  </form>
  
</div>

</body>
</html>