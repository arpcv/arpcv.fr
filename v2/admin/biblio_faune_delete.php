<?

include("connexion.php");

$sql = "delete from biblio_faune where id_biblio_faune =".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:faune.php");

?>