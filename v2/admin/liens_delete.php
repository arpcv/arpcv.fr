<?

include("connexion.php");

$sql = "delete from liens where id_liens =".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:liens.php");

?>