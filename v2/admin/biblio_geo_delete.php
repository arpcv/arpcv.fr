<?

include("connexion.php");

$sql = "delete from biblio_geo where id_biblio_geo =".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:geologie.php");

?>