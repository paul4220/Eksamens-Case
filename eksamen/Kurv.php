<?php include 'functions.php'; ?>
<?php include 'controller.php'; ?>

<!DOCTYPE html>
<html lang="en">
<style>
<head>
<body>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksamens-Case</title>
</head>
</style>
<?php include 'navbar.php' ?>

<h2>Kurv</h2>

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #A9A9A9;
  color: white;
}
</style>

<table id ="customers">
  <tr>
    <th>Produkt Navn</th>
    <th>Farve</th>
    <th>Materiale</th>
    <th>Pris "kr"</th>
    <th>Slet</th>
</tr>
        <?php foreach(getFromFile() as $i => $fkstol) { ?>
          
          <tr>
            <td><?php echo $fkstol['Navn'] ?></td>
            <td><?php echo $fkstol['farve'] ?></td>
            <td><?php echo $fkstol['Materiale'] ?></td>
            <td>kr. <?php echo $fkstol['pris'] ?></td>
            <td>
                <li>
                    <a href="?i=<?php echo $i; ?>">Slet</a>
                </li> <?php  } ?>
            </td>
           </tr>
           
</body> 
</html>

<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: White;
  color: Black;
  text-align: center;
}
</style>

<div class="footer">
  <p>Betal Her
  <form action="Ordre Bekræftelse.php" method="post">
           <input type="submit" name="Betal" vlaue="Choose options">    
        </form> 
  </p>
</div>

        