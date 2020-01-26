<?

include("connexion.php");

$sql = "delete from village where id_village=".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:village.php");

?>