<?
include("connexion.php");
$sql = "select * from liens order by idliensrubrique_liens ASC";
$qry = mysql_query($sql);
?>
<link href="style.css" rel="stylesheet" type="text/css" />
<?
$i = 0;
while ($rec = mysql_fetch_array($qry)) {
$sqlr = "select * from liens_rubrique where id_liens_rubrique = ".$rec['idliensrubrique_liens'];
$qryr = mysql_query($sqlr);
$recr = mysql_fetch_array($qryr);
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0" <? if ($i%2 == 1) echo "bgcolor=#ebfae1"?>>
  <tr>
    <td height="20"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="50%" class="text"><a href="<? echo $rec['url_liens']; ?>" target="_blank" class="text"><strong><? echo $rec['nom_liens']; ?></strong></a></td>
        <td align="right" class="text"><? echo $recr['nom_liens_rubrique']; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td class="text"><? echo $rec['description_liens']; ?></td>
  </tr>
</table><br />
<? $i++; } ?>