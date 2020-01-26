<?
	include("session.php");
	checkSession();
	include("connexion.php");

	$sql = "select * from faune";
	$qry = mysql_query($sql);
	$rec = mysql_fetch_array($qry);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ARPCV - Site internet du massif de la Sainte Victoire</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
</head>

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
            <td align="left"><img src="../decoup/titre_faune.jpg" width="207" height="26" /></td>
          </tr>
          <tr>
            <td>
			<table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tr>
                <td align="left"><strong>Qu'est ce que la faune ? </strong></td>
              </tr>
              <tr>
                <td align="left"><? echo substr($rec['definition'], 0, 500).' ...'; ?></td>
              </tr>
              <tr>
                <td align="left"><strong>Afficher la bibliographie ? </strong></td>
              </tr>
              <tr>
                <td align="left">				
				<? if ($rec['biblio'] == 'O') echo "Oui" ?>
				<? if ($rec['biblio'] == 'N') echo "Non" ?>    			</td>
              </tr>
              <tr>
                <td align="right"><a href="faune_def_modif.php" class="text">Modifier ces informations</a> </td>
              </tr>
            </table>
			<p align="right">&nbsp;</p>
			<p align="right"><a href="insecte_ajout.php" class="text">Ajouter dans insecte</a></p>
			<table width="100%" border="0" cellspacing="0" cellpadding="1" class="text">
              <tr>
                <td height="20" align="left" background="../decoup/header_vert.jpg"><strong>Les insectes </strong></td>
                <td height="20" align="center" background="../decoup/header_vert.jpg"><strong>Photo</strong></td>
                <td height="20" background="../decoup/header_vert.jpg">&nbsp;</td>
                <td height="20" background="../decoup/header_vert.jpg">&nbsp;</td>
                <td height="20" background="../decoup/header_vert.jpg">&nbsp;</td>
              </tr>
              <?

$sql = "select * from insecte";
$qry = mysql_query($sql);
$i = 0;
while ($rec = mysql_fetch_array($qry)) {

?>
              <tr <? if ($i%2 == 1) echo "bgcolor=#ebfae1"?>>
                <td align="left"><? echo $rec['nom_insecte']; ?></td>
                <td align="center"><? if ($rec['photo_insecte'] <> '') {?>
                    <img src="../decoup/photo.jpg" width="20" height="25" />
                    <? } ?></td>
                <td align="center"><a href="insecte_detail.php?id=<? echo $rec['id_insecte']; ?>" class="text">En savoir plus ...</a></td>
                <td align="center"><a href="insecte_modif.php?id=<? echo $rec['id_insecte']; ?>" class="text">Modifier</a></td>
                <td align="center"><a href="insecte_delete.php?id=<? echo $rec['id_insecte']; ?>" class="text">Supprimer</a></td>
              </tr>
              <? $i++; } ?>
            </table>
			
			<p align="right"><a href="faune_ajout.php" class="text">Ajouter dans faune</a></p>
			<table width="100%" border="0" cellspacing="0" cellpadding="1" class="text">
              <tr>
                <td height="20" align="left" background="../decoup/header_vert.jpg"><strong>Cat&eacute;gorie</strong></td>
                <td height="20" align="center" background="../decoup/header_vert.jpg"><strong>Photo</strong></td>
                <td height="20" background="../decoup/header_vert.jpg">&nbsp;</td>
                <td height="20" background="../decoup/header_vert.jpg">&nbsp;</td>
                <td height="20" background="../decoup/header_vert.jpg">&nbsp;</td>
              </tr>
              <?

$sql = "select * from faune_categorie order by nom_faune_categorie ASC";
$qry = mysql_query($sql);
$i = 0;
while ($rec = mysql_fetch_array($qry)) {

?>
              <tr <? if ($i%2 == 1) echo "bgcolor=#ebfae1"?>>
                <td align="left"><? echo $rec['nom_faune_categorie']; ?></td>
                <td align="center"><? if ($rec['photo_faune_categorie'] <> '') {?>
                    <img src="../decoup/photo.jpg" width="20" height="25" />
                    <? } ?></td>
                <td align="center"><a href="faune_detail.php?id=<? echo $rec['id_faune_categorie']; ?>" class="text">En savoir plus ...</a></td>
                <td align="center"><a href="faune_modif.php?id=<? echo $rec['id_faune_categorie']; ?>" class="text">Modifier</a></td>
                <td align="center"><a href="faune_delete.php?id=<? echo $rec['id_faune_categorie']; ?>" class="text">Supprimer</a></td>
              </tr>
              <? $i++; } ?>
            </table>
			<p align="right">&nbsp;</p>
			<p align="right"><a href="biblio_faune_ajout.php" class="text">Ajouter d'une référence bibliographique</a></p>
			<table width="100%" border="0" cellspacing="0" cellpadding="1" class="text">
              <tr>
                <td height="20" align="left" background="../decoup/header_vert.jpg"><strong>Titre</strong></td>
                <td height="20" align="left" background="../decoup/header_vert.jpg"><strong>Auteur</strong></td>
                <td height="20" align="left" background="../decoup/header_vert.jpg"><strong>Edition - Ann&eacute;e </strong></td>
                <td height="20" background="../decoup/header_vert.jpg">&nbsp;</td>
                <td height="20" background="../decoup/header_vert.jpg">&nbsp;</td>
              </tr>
              <?

$sql = "select * from biblio_faune order by titre_biblio_faune ASC";
$qry = mysql_query($sql);
$i = 0;
while ($rec = mysql_fetch_array($qry)) {

?>
              <tr <? if ($i%2 == 1) echo "bgcolor=#ebfae1"?>>
                <td height="25" align="left"><? echo $rec['titre_biblio_faune']; ?></td>
                <td align="left"><? echo $rec['auteur_biblio_faune']; ?></td>
                <td align="left"><? echo $rec['editeur_biblio_faune'].' - '.$rec['annee_biblio_faune']; ?></td>
                <td align="center"><a href="biblio_faune_modif.php?id=<? echo $rec['id_biblio_faune']; ?>" class="text">Modifier</a></td>
                <td align="center"><a href="biblio_faune_delete.php?id=<? echo $rec['id_biblio_faune']; ?>" class="text">Supprimer</a></td>
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
    <td valign="top" nowrap="nowrap"><img src="../decoup/model_bande.jpg" width="100%" height="600" /></td>
  </tr>
</table>
</body>
</html>
<?
	mysql_close();
?>