<?
	include("session.php");
	checkSession();
	include("connexion.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ARPCV - Site internet du massif de la Sainte Victoire</title>
<link href="../style.css" rel="stylesheet" type="text/css" /></head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><img src="../decoup/model_bande.jpg" width="100%" height="600" /></td>
    <td width="780" align="center" valign="top"><table width="780" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="780" height="38">
          <param name="movie" value="../flash/barre.swf" />
          <param name="quality" value="high" />
          <embed src="../flash/barre.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="780" height="38"></embed>
        </object></td>
      </tr>
      <tr>
        <td align="center"><img src="../decoup/model_visu.jpg" width="780" height="126" /></td>
      </tr>
      <tr>
        <td width="780" height="36" align="center" class="text"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="780" height="36">
          <param name="movie" value="../flash/menu.swf" />
          <param name="quality" value="high" />
          <embed src="../flash/menu.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="780" height="36"></embed>
        </object></td>
      </tr>
      <tr>
        <td background="../decoup/model_fond.jpg"><table width="95%" border="0" align="center" cellpadding="1" cellspacing="1" class="text">
          <tr>
            <td align="left"><img src="../decoup/titre_collabo.jpg" width="207" height="26" /></td>
          </tr>
          <tr>
            <td>
			<p align="right"><a href="accueil.php" class="text">Retour</a></p>
			<p align="right"><a href="collabos_ajout.php" class="text">Ajouter un collaborateur </a></p>
			  <table width="100%" border="0" cellspacing="0" cellpadding="1" class="text">
			  <tr>
			    <td height="20" align="left" background="../decoup/header_vert.jpg"><strong>Nom</strong></td>
			    <td align="center" background="../decoup/header_vert.jpg"><strong>EMail</strong></td>
			    <td background="../decoup/header_vert.jpg">&nbsp;</td>
			    <td background="../decoup/header_vert.jpg">&nbsp;</td>
			  </tr>
<?

$sql = "select * from collabos";
$qry = mysql_query($sql);
$i = 0;
while ($rec = mysql_fetch_array($qry)) {
?>
  <tr <? if ($i%2 == 1) echo "bgcolor=#ebfae1"?>>
    <td align="left"><? echo $rec['nom_collabos']; ?></td>
    <td align="center"><a href="mailto:<? echo $rec['email_collabos']; ?>" class="text"><img src="../images/email.gif" width="20" height="20" border="0"></a></td>
    <td align="center"><a href="collabos_modif.php?id=<? echo $rec['id_collabos']; ?>" class="text">Modifier</a></td>
    <td align="center"><a href="collabos_delete.php?id=<? echo $rec['id_collabos']; ?>" class="text">Supprimer</a></td>
  </tr>
<? $i++; } ?>
			</table>
			  <p>&nbsp;</p></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><img src="../decoup/model_pied.jpg" width="780" height="53" /></td>
      </tr>
    </table></td>
    <td valign="top"><img src="../decoup/model_bande.jpg" width="100%" height="600" /></td>
  </tr>
</table>
</body>
</html>
<?
	mysql_close();
?>