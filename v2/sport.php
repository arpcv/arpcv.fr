<?
	include("connexion.php");

	$sql = "select * from entete where chapitre_entete = 'sport'";
	$qry = mysql_query($sql);
	$entete = mysql_fetch_array($qry);

	$sql_sport = "select * from sport order by nom_sport";
	$qry_sport = mysql_query($sql_sport);
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
            <td align="left"><img src="decoup/titre_sport.jpg" width="207" height="26" /></td>
          </tr>
          <tr>
            <td><p><strong><? echo $entete['texte_entete']; ?></strong></p>
              <p>&nbsp;</p></td>
          </tr>
          <tr>
            <td>
			<?
			while($rec_sport = mysql_fetch_array($qry_sport)) {
				$sql = "select * from sports where idsport_sports = ".$rec_sport['id_sport'];
				$qry = mysql_query($sql);
			?>
			<table width="100%" border="0" cellpadding="1" cellspacing="1" class="texttitre">

              <tr>
                <td><strong><? echo $rec_sport['nom_sport']; ?></strong></td>
              </tr>
              <tr>
                <td>
				<table width="100%" border="0" cellspacing="0" cellpadding="5">
				  <tr>
				    <td width="125" valign="top"><img src="<? echo $rec_sport['photo_sport']; ?>" width="125"/></td>
				    <td valign="top">
					<?
					while($rec = mysql_fetch_array($qry)) {
					?>
					<a href="<? echo $rec['lien_sports']; ?>" target="_blank" class="texttitre"><? echo $rec['description_sports']; ?></a>.<br />
					<? } ?>					</td>
				  </tr>
				</table>				</td>
              </tr>
			</table>
			<? } ?></td>
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

<map name="Map" id="Map"><area shape="rect" coords="79,32,127,96" href="http://arpcv.free.fr" target="_blank" />
</map></body>
</html>
<?
	mysql_close();
?>