<?

include("connexion.php");

$sql = "delete from photo where id_photo =".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:phototheque.php");

?>