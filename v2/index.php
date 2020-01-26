<?
  include("connexion.php");
  
  $sql = "select * from accueil";
  $qry = mysql_query($sql);
  $rec = mysql_fetch_array($qry);
  
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
    <td nowrap="nowrap" background="decoup/bande.jpg">&nbsp;</td>
    <td width="780"><table width="780" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="780" align="center"><img src="decoup/haut.jpg" width="780" height="150" /></td>
      </tr>
      <tr>
        <td align="center"><img src="decoup/milieu.jpg" width="780" height="220" border="0" usemap="#Map" /></td>
      </tr>
      <tr>
        <td width="780" height="180" align="center" valign="bottom" background="decoup/bas.jpg"><table width="90%" height="140" border="0" cellpadding="0" cellspacing="0">
          <tr>
        <td height="10" align="center" valign="bottom" class="text"> Avec le soutien de </a> </td>
          </tr>
          <tr>
        <td width="140" height="70" align="center" valign="bottom"> <img src="decoup/logoPACA.jpg" width="140" height="70" align="center" border="0" /></td>
          </tr>
          <tr>
            <td height="20" align="right" valign="top" class="text">[ <a href="accueil.php" class="text">Entrer</a> ]</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="center"><img src="decoup/pied.jpg" alt="" width="780" height="50" border="0" usemap="#Map2" />
          <map name="Map2" id="Map2">
            <area shape="rect" coords="217,9,563,43" href="mailto:sitesaintevictoire@free.fr" target="_blank" />
          </map>
          </td>
      </tr>
    </table></td>
    <td background="decoup/bande.jpg">&nbsp;</td>
  </tr>
</table>


<map name="Map" id="Map"><area shape="rect" coords="363,128,418,188" href="http://arpcv.free.fr" target="_blank" />
</map></body>
</html>
