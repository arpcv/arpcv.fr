<?
	include("admin/connexion.php");
	$sql = "select * from arbre where id_arbre = ".$_REQUEST['id'];
	$qry = mysql_query($sql) or die(mysql_error());
	$rec = mysql_fetch_assoc($qry);
	$nbrec = mysql_num_rows($qry);
	if ($nbrec == 0) header("location:arbre.php");
	mysql_close();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ARPCV - Site internet du massif de la Sainte Victoire</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
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
            <td align="left"><img src="decoup/titre_arbre.jpg" width="207" height="26" /></td>
          </tr>
          <tr>
            <td><p align="right">
			<? if (@$_REQUEST['rubrique']=="search") { ?>
			<a href="javascript:history.back();" class="text">Retour</a>
			<? } else { ?>
			<a href="arbre.php" class="text">Retour</a>
			<? } ?>
			</p>
			<table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tr>
                <td><table width="100%" border="0" cellspacing="1" cellpadding="1">
                  <tr>
					<? if((strlen($rec['photo1_arbre'])>0) || (strlen($rec['photo2_arbre'])>0) || (strlen($rec['photo3_arbre'])>0) || (strlen($rec['photo4_arbre'])>0) || (strlen($rec['photo5_arbre'])>0)) { ?>				
                    <td width="240" align="center" valign="top">
					<?
					if (strlen($rec['photo1_arbre'])>0) {					
					$t1 = getimagesize("images/arbre/".$rec['photo1_arbre']);
					?>
					<img src="images/arbre/<? echo $rec['photo1_arbre']?>" width="200" onclick="MM_openBrWindow('photozoom.php?fn=<? echo "images/arbre/".$rec['photo1_arbre']?>','','width=<? echo $t1[0]; ?>,height=<? echo $t1[1]; ?>')">
					<? }?>
					 <br /><br /> 
					<?
					if (strlen($rec['photo2_arbre'])>0) {
					$t2 = getimagesize("images/arbre/".$rec['photo2_arbre']);
					?>
					<img src="images/arbre/<? echo $rec['photo2_arbre']?>" width="200" onclick="MM_openBrWindow('photozoom.php?fn=<? echo "images/arbre/".$rec['photo2_arbre']?>','','width=<? echo $t2[0]; ?>,height=<? echo $t2[1]; ?>')">
					<? }?>
					<br /><br />
					<?
					if (strlen($rec['photo3_arbre'])>0) {					
					$t3 = getimagesize("images/arbre/".$rec['photo3_arbre']);
					?>
					<img src="images/arbre/<? echo $rec['photo3_arbre']?>" width="200" onclick="MM_openBrWindow('photozoom.php?fn=<? echo "images/arbre/".$rec['photo3_arbre']?>','','width=<? echo $t3[0]; ?>,height=<? echo $t3[1]; ?>')">
					<? }?>
					<br /><br />
					<?
					if (strlen($rec['photo4_arbre'])>0) {					
					$t4 = getimagesize("images/arbre/".$rec['photo4_arbre']);
					?>
					<img src="images/arbre/<? echo $rec['photo4_arbre']?>" width="200" onclick="MM_openBrWindow('photozoom.php?fn=<? echo "images/arbre/".$rec['photo4_arbre']?>','','width=<? echo $t4[0]; ?>,height=<? echo $t4[1]; ?>')">
					<? }?>
					<br /><br />
					<?
					if (strlen($rec['photo5_arbre'])>0) {					
					$t5 = getimagesize("images/arbre/".$rec['photo5_arbre']);
					?>
					<img src="images/arbre/<? echo $rec['photo5_arbre']?>" width="200" onclick="MM_openBrWindow('photozoom.php?fn=<? echo "images/arbre/".$rec['photo5_arbre']?>','','width=<? echo $t5[0]; ?>,height=<? echo $t5[1]; ?>')">
					<? }?>
					</td>
					<? }?>
                    <td valign="top">
					<table width="100%" border="0" cellpadding="1" cellspacing="1" class="texttitre">
					<? if (strlen($rec['nom_arbre']) > 0) { ?>
                      <tr>
                        <td align="center"><b><? echo ucwords($rec['nom_arbre']); ?></b></td>
                      </tr>
					<? } ?>
					<? if (strlen($rec['nomsc_arbre']) > 0) { ?>
                      <tr>
                        <td align="center"><i><? echo ucwords($rec['nomsc_arbre']); ?></i></td>
                      </tr>
					<? } ?>
                    </table>
					<table width="100%" border="0" cellspacing="1" cellpadding="1">
                      <? if (strlen($rec['intro_arbre']) > 0) { ?>
                      <tr>
                        <td align="left"><br />
                            <b>Introduction :</b><br />
                          <? echo $rec['intro_arbre']; ?></td>
                      </tr>
                      <? } ?>
                      <? if (strlen($rec['desc_arbre']) > 0) { ?>
                      <tr>
                        <td align="left"><br />
                            <b>Description :</b><br />
                          <? echo $rec['desc_arbre']; ?></td>
                      </tr>
                      <? } ?>
                      <? if (strlen($rec['eco_arbre']) > 0) { ?>
                      <tr>
                        <td align="left"><br />
                            <b>Ecologie - R&eacute;partition :</b><br />
                          <? echo $rec['eco_arbre']; ?></td>
                      </tr>
                      <? } ?>
                      <? if (strlen($rec['util_arbre']) > 0) { ?>
                      <tr>
                        <td align="left"><br />
                            <b>Utilisation :</b><br />
                          <? echo $rec['util_arbre']; ?></td>
                      </tr>
                      <? } ?>
                    </table></td>
                  </tr>
                </table></td>
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

<map name="Map" id="Map"><area shape="rect" coords="78,35,130,97" href="http://arpcv.free.fr" target="_blank" />
</map></body>
</html>