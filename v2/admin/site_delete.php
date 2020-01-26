<?

include("connexion.php");

$sql = "delete from monument where id_monument=".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:site.php");

?>