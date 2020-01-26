<?

include("connexion.php");

$sql = "delete from faune_categorie where id_faune_categorie =".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:faune.php");

?>