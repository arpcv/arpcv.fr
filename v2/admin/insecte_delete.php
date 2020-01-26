<?

include("connexion.php");

$sql = "delete from insecte where id_insecte =".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:faune.php");

?>