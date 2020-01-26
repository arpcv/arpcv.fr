<?
	include('session.php');	
	include('connexion.php');
	
	if ((isset($_POST['admin_name'])) && (isset($_POST['admin_mdp']))) {
		$sql = "SELECT * FROM admin WHERE admin_name = '$_POST[admin_name]' AND admin_mdp = '$_POST[admin_mdp]'";
		$qry = mysql_query($sql) or die(mysql_error());
		$rec = mysql_fetch_assoc($qry);
		$nbrec = mysql_num_rows($qry);
		if ($nbrec > 0) {
			startSession();
			header("location:accueil.php");
		}
		mysql_close();
	}
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
        <td width="780" align="center"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="780" height="38">
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
        <td background="../decoup/model_fond.jpg"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center"><p>&nbsp;</p>
              <table width="300" border="0" cellpadding="1" cellspacing="1" bgcolor="#42766A">
			  <form action="index.php" method="post">
              <tr>
                <td bgcolor="#FFFFFF" class="text"><p align="left"><img src="../decoup/titre_administration.jpg" width="207" height="26" /></p>
                  <table width="100%" border="0" cellspacing="1" cellpadding="1">
                    <tr>
                      <td width="150" class="text">Nom d'utilisateur : </td>
                      <td class="text"><input name="admin_name" type="text" class="text" id="admin_name" /></td>
                    </tr>
                    <tr>
                      <td class="text">Mot de passe : </td>
                      <td class="text"><input name="admin_mdp" type="password" class="text" id="admin_mdp" /></td>
                    </tr>
                  </table>                  
                  <p align="right">
                    <input name="Submit" type="submit" class="text" value="Envoyer" />
                    </p>
                  </td>
              </tr>
			</form>
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