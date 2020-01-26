<?

include("connexion.php");

$sql = "delete from flore where id_flore =".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:flore.php");

?>