<?

include("connexion.php");

$sql = "delete from geo  where id_geo =".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:geologie.php");

?>