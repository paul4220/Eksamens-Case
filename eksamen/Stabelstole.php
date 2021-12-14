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

<h2>Scala 2410</h2>

<?php
$image_url='https://farstrup.dk/wp-content/uploads/Scala_2410_compressed-e1612191173583.jpg';
?>


<img src="<?php echo $image_url;?>">



<form action="" method="post">

Navn:
    <select name="Navn" >  
      <option value="Scala 2410">Scala 2410</option>}  
</select>


    Pris:
    <select name="pris" >  
      <option value="5000">5000</option>}  
</select> 

Materiale:
<select name="Materiale" >  
<option value="Vælg Materiale">Vælg</option>}  
<option value="Egetræ">Egetræ</option>  
<option value="Jern">Jern</option>  
<option value="Aluminium">Aluminium</option>  
<option value="Valnødstræ">Valnødstræ</option>   
</select> 

Farve :
<select name="farve">  
<option value="Vælg ">Vælg</option>}  
<option value="Læder">Læder</option>  
<option value="Carbon-fiber">Carbon-fiber</option>  
<option value="Silke">Silke</option>   
</select> 
<input type="submit" name="submit" vlaue="Choose options">

<?php 
  $fkstol = array('Navn'=> null, 'farve' => null, 'Materiale' => null, 'pris' => null)
  ?>

<?php 
    if(isset($_POST['submit'])){
      if(!empty($_POST['Materiale'])){
        $fkstol['Materiale'] = $_POST['Materiale'];
        $fkstol['pris'] = $_POST['pris'];
        $fkstol['Navn'] = $_POST['Navn'];
        $fkstol['farve'] = $_POST['farve'];
        saveToFile($fkstol);
        echo 'Navn: ' . $fkstol['Navn'];
        echo '  Pris: ' . $fkstol['pris'];
        echo '  Materiale: ' . $fkstol['Materiale'];
        echo '  Farve: ' . $fkstol['farve'];
      } else {
        echo 'Vælg farve og Materiale.';
      }
    }
  ?>

<?php 
if(isset($_POST['submit'])){
$fkstol['farve'] = $_POST['farve'];
} 

?>

<?php
function onSave() {
//print_r($_POST["note"]);
saveToFile($_POST[$fkstol]);
}

function saveToFile($fkstol) {
$notesArray = getFromFile();
$notesArray[] = $fkstol;
$jsonNotes = json_encode($notesArray);

file_put_contents("notes.json", $jsonNotes);
}

function getFromFile() {
$jsonNotes = file_get_contents("notes.json");
$notesArray = json_decode($jsonNotes, true);
return $notesArray;
}

function deleteItem($Kurv) {
$notesArray = getFromFile();
unset($notesArray[$Kurv]);

$jsonNotes = json_encode($notesArray);

file_put_contents("notes.json", $jsonNotes);
header("Location: Kurv.php");
}
?> 


</form>
</body> 
</html>

