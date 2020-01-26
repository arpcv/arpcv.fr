<?

	include("connexion.php");
	$sql = "select * from faune";
	$qry = mysql_query($sql);
	$rec = mysql_fetch_array($qry);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Faune - Sainte Victoire</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="decoup/titre_faune.jpg" width="207" height="26" /></td>
        <td align="right"><a href="javascript:window.close();" class="text"><strong>Fermer</strong></a></td>
      </tr>
    </table>
    </td>
  </tr>
  <tr>
    <td class="text"><? echo $rec['definition']; ?></td>
  </tr>
</table>
</body>
</html>
