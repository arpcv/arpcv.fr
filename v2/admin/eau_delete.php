<?

include("connexion.php");

$sql = "delete from barrage where id_barrage =".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:eau.php");

?>