<?

include("connexion.php");

$sql = "delete from biblio_arbre where id_biblio_arbre =".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:arbre.php");

?>