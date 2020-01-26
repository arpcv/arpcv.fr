<?
	include("connexion.php");
	include("functions.php");
	
	if ($_POST) {
		switch ($_POST['table']) {
		case "arbre" :
			$sql = "SELECT * FROM arbre WHERE nom_arbre LIKE '%$_POST[texte]%' OR nomsc_arbre LIKE '%$_POST[texte]%' OR intro_arbre LIKE '%$_POST[texte]%' OR desc_arbre LIKE '%$_POST[texte]%' OR eco_arbre LIKE '%$_POST[texte]%' OR util_arbre LIKE '%$_POST[texte]%'";
			$table = "arbre";
			$txt = $_POST['texte'];
			break;
		case "flore" :
			$sql = "SELECT * FROM flore WHERE nom_flore LIKE '%$_POST[texte]%' OR nomsc_flore LIKE '%$_POST[texte]%' OR intro_flore LIKE '%$_POST[texte]%' OR desc_flore LIKE '%$_POST[texte]%' OR eco_flore LIKE '%$_POST[texte]%' OR util_flore LIKE '%$_POST[texte]%'";
			$table = "flore";
			$txt = $_POST['texte'];
			break;
		case "faune" :
			$sql = "(SELECT id_faune_categorie as id_faune, nom_faune_categorie as nom_faune, texte_faune_categorie as texte_faune, photo_faune_categorie as photo_faune, CASE WHEN nom_faune_categorie <> '' THEN 'faune' END as tbl FROM faune_categorie WHERE nom_faune_categorie LIKE '%$_POST[texte]%' OR texte_faune_categorie LIKE '%$_POST[texte]%') UNION (SELECT id_insecte as id_faune, nom_insecte as nom_faune, texte_insecte as texte_faune, photo_insecte as photo_faune, CASE WHEN nom_insecte <> '' THEN 'insecte' END as tbl FROM insecte WHERE nom_insecte LIKE '%$_POST[texte]%' OR texte_insecte LIKE '%$_POST[texte]%')";
			$table = "faune";
			$txt = $_POST['texte'];
			break;
		case "geo" :
			$sql = "SELECT * FROM geo WHERE nom_geo LIKE '%$_POST[texte]%' OR texte_geo LIKE '%$_POST[texte]%'";
			$table = "geo";
			$txt = $_POST['texte'];
			break;
		case "barrage" :
			$sql = "SELECT * FROM barrage WHERE nom_barrage LIKE '%$_POST[texte]%' OR texte_barrage LIKE '%$_POST[texte]%'";
			$table = "barrage";
			$txt = $_POST['texte'];
			break;
		case "monument" :
			$sql = "SELECT * FROM monument WHERE nom_monument LIKE '%$_POST[texte]%' OR texte_monument LIKE '%$_POST[texte]%'";
			$table = "monument";
			$txt = $_POST['texte'];
			break;
		case "sport" :
			$sql = "SELECT CASE WHEN idsport_sports = 1 THEN 'VTT' WHEN idsport_sports = 2 THEN 'Vol libre' WHEN idsport_sports = 3 THEN 'Randonnée' WHEN idsport_sports = 4 THEN 'Escalade' END as nom_sports, lien_sports, description_sports FROM sports WHERE description_sports LIKE '%$_POST[texte]%'";
			$table = "sport";
			$txt = $_POST['texte'];
			break;
		case "village" :
			$sql = "SELECT * FROM village WHERE nom_village LIKE '%$_POST[texte]%'";
			$table = "village";
			$txt = $_POST['texte'];
			break;
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ARPCV - Site internet du massif de la Sainte Victoire</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><img src="decoup/model_bande.jpg" width="100%" height="600" /></td>
    <td width="780" align="center" valign="top"><table width="780" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="780" height="38">
          <param name="movie" value="flash/barre.swf" />
          <param name="quality" value="high" />
          <embed src="flash/barre.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="780" height="38"></embed>
        </object></td>
      </tr>
      <tr>
        <td align="center"><img src="decoup/model_visu.jpg" width="780" height="126" border="0" usemap="#Map" /></td>
      </tr>
      <tr>
        <td width="780" height="36" align="center" class="text"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="780" height="36">
          <param name="movie" value="flash/menu.swf" />
          <param name="quality" value="high" />
          <embed src="flash/menu.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="780" height="36"></embed>
        </object></td>
      </tr>
      <tr>
        <td background="decoup/model_fond.jpg"><table width="95%" border="0" align="center" cellpadding="1" cellspacing="1" class="text">
          <tr>
            <td align="left"><img src="decoup/titre_recherche.jpg" width="207" height="26" /></td>
          </tr>
          <tr>
            <td><p align="right"><a href="javascript:history.back();" class="text">Retour</a></p>
			<? execTable($sql, $table, $txt); ?>
              <p align="right">&nbsp;</p>
              <p>&nbsp;</p></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><img src="decoup/model_pied.jpg" width="780" height="53" border="0" usemap="#Map2" />
          <map name="Map2" id="Map2">
            <area shape="rect" coords="217,9,563,43" href="mailto:sitesaintevictoire@free.fr" target="_blank" />
          </map>
          </td>
      </tr>
    </table></td>
    <td valign="top"><img src="decoup/model_bande.jpg" width="100%" height="600" /></td>
  </tr>
</table>

<map name="Map" id="Map"><area shape="rect" coords="77,37,129,95" href="http://arpcv.free.fr" target="_blank" />
</map></body>
</html>