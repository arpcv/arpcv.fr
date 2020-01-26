<?

include("connexion.php");

$sql = "delete from entete where id_entete=".$_REQUEST['id'];
$qry = mysql_query($sql);

header("location:entete.php");

?>