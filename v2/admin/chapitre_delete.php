<?

include("connexion.php");

$sql = "delete from chapitre where id_chapitre=".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:chapitre.php?village=$_REQUEST[village]");

?>