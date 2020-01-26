<?

include("connexion.php");

$sql = "delete from biblio_barrage where id_biblio_barrage =".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:eau.php");

?>