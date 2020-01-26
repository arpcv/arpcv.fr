<?

include("connexion.php");

$sql = "delete from photo_rubrique where id_photo_rubrique=".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:phototheque.php");

?>