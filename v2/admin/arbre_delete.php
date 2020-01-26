<?

include("connexion.php");

$sql = "delete from arbre where id_arbre =".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:arbre.php");

?>