<?

include("connexion.php");

$sql = "delete from biblio_flore where id_biblio_flore =".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:flore.php");

?>