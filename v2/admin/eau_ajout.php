<?
	include("connexion.php");

	if (isset($_POST['post'])) {
		
		$photo1 = "";
		if (isset($_FILES['fto1'])) {
			if ($_FILES['fto1']['size'] > 0) {
				$savefile = "../images/eau/".$_FILES['fto1']['name'];
				$temp = $_FILES['fto1']['tmp_name'];
				if (move_uploaded_file($temp, $savefile)) {
					$photo1 = $_FILES['fto1']['name'];
				}
			}
		} 
		
		$photo2 = "";
		if (isset($_FILES['fto2'])) {
			if ($_FILES['fto2']['size'] > 0) {
				$savefile = "../images/eau/".$_FILES['fto2']['name'];
				$temp = $_FILES['fto2']['tmp_name'];
				if (move_uploaded_file($temp, $savefile)) {
					$photo2 = $_FILES['fto2']['name'];
				}
			}
		} 
		
		$photo3 = "";
		if (isset($_FILES['fto3'])) {
			if ($_FILES['fto3']['size'] > 0) {
				$savefile = "../images/eau/".$_FILES['fto3']['name'];
				$temp = $_FILES['fto3']['tmp_name'];
				if (move_uploaded_file($temp, $savefile)) {
					$photo3 = $_FILES['fto3']['name'];
				}
			}
		}
				
		$sql = "insert into barrage values('', '".$_POST['nom']."', '".$_POST['intro']."', '".$photo1."', '".$photo2."', '".$photo3."')";
		$qry = mysql_query($sql);
		header("location:eau.php");
	}

	mysql_close();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ARPCV - Site internet du massif de la Sainte Victoire</title>
<link href="../style.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function verif(e) { 
	alert(form.e.value);
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' doit être une adresse e-mail.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' doit être un nombre.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' doit être un nombre entre  '+min+' et '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' manquant.\n'; }
  } if (errors) alert('Les champs suivant sont manquants :\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
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
            <td align="left"><img src="../decoup/titre_eau.jpg" width="207" height="26" /></td>
          </tr>
          <tr>
            <td>
			<p align="right"><a href="eau.php" class="text">Retour</a></p>
			<form action="eau_ajout.php" method="post" onsubmit="MM_validateForm('nom','','R','intro','','R');return document.MM_returnValue" enctype="multipart/form-data">
			<table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="150" align="left"><strong>Nom : </strong></td>
                    <td align="left">
                      <input name="nom" type="text" class="text" id="nom"/>                    </td>
                    </tr>
                </table>                  </td>
              </tr>

              <tr>
                <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="text">
                    <tr>
                      <td width="50%" align="left"><strong>Texte : </strong></td>
                      </tr>
                  </table></td>
              </tr>
              <tr>
                <td><table width="100%" border="0" cellpadding="0" cellspacing="0" class="text">
                  <tr>
                    <td width="50%"><textarea name="intro" cols="100" rows="10" class="text" id="intro"></textarea></td>
                    </tr>
                </table></td>
              </tr>

              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="150" align="left"><strong>Photo 1 : </strong></td>
                    <td align="left">
                      <input name="fto1" type="file" class="text" id="fto1" size="20" />                    </td>
                  </tr>
                  <tr>
                    <td align="left"><strong>Photo 2 : </strong></td>
                    <td align="left"><input name="fto2" type="file" class="text" id="fto2" size="20" /></td>
                  </tr>
                  <tr>
                    <td align="left"><strong>Photo 3 : </strong></td>
                    <td align="left"><input name="fto3" type="file" class="text" id="fto3" size="20" /></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td align="center"><br /><p>
                  <input name="post" type="hidden" id="post" value="true" />
                  <input name="Submit" type="submit" class="text" value="Enregistrer" />
                <p></td>
              </tr>
            </table>
			</form></td>
          </tr>
        </table>
		
		</td>
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