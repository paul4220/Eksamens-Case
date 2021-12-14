<?php include 'functions.php'; ?>
<?php include 'controller.php'; ?>
<!DOCTYPE html>
<html lang="en">
<style>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksamens-Case</title>

    <link rel="stylesheet" href="style.css">
</head>
</style>


<?php include 'navbar.php' ?>

<h2>Ordre Nummer: 150_4104aa</h2>
<h3>Ordre bekræftet. Du har bestilt:</h3>

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
</tr>
        <?php foreach(getFromFile() as $i => $fkstol) { ?>
          
          <tr>
            <td><?php echo $fkstol['Navn'] ?></td>
            <td><?php echo $fkstol['farve'] ?></td>
            <td><?php echo $fkstol['Materiale'] ?></td>
            <td>kr. <?php echo $fkstol['pris'] ?></td>
            
                
                    
                <?php  } ?>
            
           </tr>

        </table>

        <h4>Tak for at handle med Fartrup Furniture</h4>       