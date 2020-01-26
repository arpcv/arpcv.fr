<?
include("connexion.php");
$sql = "select * from collabos order by nom_collabos";
$qry = mysql_query($sql);
?>
<link href="style.css" rel="stylesheet" type="text/css" />
<?
$i = 0;
while ($rec = mysql_fetch_array($qry)) {
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" <? if ($i%2 == 1) echo "bgcolor=#ebfae1"?>>
  <tr>
    <td height="20"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="50%" class="text"><strong><? echo $rec['nom_collabos']; ?></strong></td>
        <td align="center" class="text"><a href="mailto:<? echo $rec['email_collabos']; ?>" class="text"><img src="images/email.gif" width="20" height="20" border="0" /> Envoyer un email</a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td class="text"><? echo $rec['description_collabos']; ?></td>
  </tr>
</table><br />
<? $i++; } ?>