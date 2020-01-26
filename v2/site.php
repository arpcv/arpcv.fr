<?
	include("connexion.php");

	$sql = "select * from entete where chapitre_entete = 'site'";
	$qry = mysql_query($sql);
	$entete = mysql_fetch_array($qry);

	$sql = "SELECT * FROM monument order by nom_monument ASC";
	$qry = mysql_query($sql);

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
            <td align="left"><img src="decoup/titre_site.jpg" width="207" height="26" /></td>
          </tr>
          <tr>
            <td><p><strong><? echo $entete['texte_entete']; ?></strong></p>
              <p>&nbsp;</p></td>
          </tr>
          <tr>
            <td>
			  
			  <table width="100%" border="0" cellspacing="0" cellpadding="1" class="text">
                <tr>
                  <td height="20" align="left" background="decoup/header_vert.jpg"><strong>Site</strong></td>
                  <td align="center" background="decoup/header_vert.jpg"><strong>Photo</strong></td>
                  <td height="20" background="decoup/header_vert.jpg">&nbsp;</td>
                  </tr>
                <?
				$i = 0;
				while ($rec = mysql_fetch_array($qry)) {
				?>
                <tr <? if ($i%2 == 1) echo "bgcolor=#ebfae1"?>>
                  <td align="left"><? echo $rec['nom_monument']; ?></td>
                  <td align="center"><? if ($rec['photo1_monument'] <> '') {?>
                      <img src="decoup/photo.jpg" width="20" height="25" />
                      <? } ?></td>
                  <td align="center"><a href="site_detail.php?id=<? echo $rec['id_monument']; ?>" class="text">En savoir plus ...</a></td>
                  </tr>
                <? $i++; } ?>
              </table>
			  <table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
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

<map name="Map" id="Map"><area shape="rect" coords="74,34,131,98" href="http://arpcv.free.fr" target="_blank" />
</map></body>
</html>
<? 	mysql_close(); ?>