<?
/* TODO

faire sport

*/

// --------------------------------------------------------REDIRECTION DES FONCTIONS D'AFFICHAGE
function execTable($sql, $table, $texte) {
	if ($table == 'arbre') {
		triArbre($sql, $texte);
	} else if ($table == 'flore') {
		triFlore($sql, $texte);
	} else if ($table == 'faune') {
		triFaune($sql, $texte);
	} else if ($table == 'geo') {
		triGeo($sql, $texte);
	} else if ($table == 'barrage') {
		triBarrage($sql, $texte);
	} else if ($table == 'monument') {
		triMonument($sql, $texte);
	} else if ($table == 'village') {
		triVillage($sql, $texte);
	} else if ($table == 'sport') {
		triSport($sql, $texte);
	}
}
// --------------------------------------------------------AFFICHAGE DU TABLEAU ARBRE
function showArbre($rec, $i, $score) {
	echo "<tr";
	if ($i%2 == 1) { echo " bgcolor=#ebfae1>"; }
	else  echo ">";
    echo "<td align=left>".$rec['nom_arbre']."</td>";
	echo "<td align=left>".$rec['nomsc_arbre']."</td>";
	echo "<td align=center>".$score." % </td>";
	echo "<td align=center>";
	if ($rec['photo1_arbre'] <> '') {
        echo "<img src='decoup/photo.jpg' width=20 height=25 />";
	} else echo "&nbsp";
    echo "</td>";
	echo "<td align=center><a href='arbre_detail.php?id=".$rec['id_arbre']."&rubrique=search' class=text>En savoir plus ...</a></td>";
	echo "</tr>";
}
// --------------------------------------------------------AFFICHAGE DU TABLEAU FLORE
function showFlore($rec, $i, $score) {
	echo "<tr";
	if ($i%2 == 1) { echo " bgcolor=#ebfae1>"; }
	else  echo ">";
    echo "<td align=left>".$rec['nom_flore']."</td>";
	echo "<td align=left>".$rec['nomsc_flore']."</td>";
	echo "<td align=center>".$score." % </td>";
	echo "<td align=center>";
	if ($rec['photo1_flore'] <> '') {
        echo "<img src='decoup/photo.jpg' width=20 height=25 />";
	} else echo "&nbsp";
    echo "</td>";
	echo "<td align=center><a href='flore_detail.php?id=".$rec['id_flore']."&rubrique=search' class=text>En savoir plus ...</a></td>";
	echo "</tr>";
}
// --------------------------------------------------------AFFICHAGE DU TABLEAU FAUNE
function showFaune($rec, $i, $score) {
	echo "<tr";
	if ($i%2 == 1) { echo " bgcolor=#ebfae1>"; }
	else  echo ">";
    echo "<td align=left>".$rec['nom_faune']."</td>";
	echo "<td align=center>".$score." % </td>";
	echo "<td align=center>";
	if ($rec['photo_faune'] <> '') {
        echo "<img src='decoup/photo.jpg' width=20 height=25 />";
	} else echo "&nbsp";
    echo "</td>";
	echo "<td align=center><a href='".$rec['tbl']."_detail.php?id=".$rec['id_faune']."&rubrique=search' class=text>En savoir plus ...</a></td>";
	echo "</tr>";
}
// --------------------------------------------------------AFFICHAGE DU TABLEAU GEO
function showGeo($rec, $i, $score) {
	echo "<tr";
	if ($i%2 == 1) { echo " bgcolor=#ebfae1>"; }
	else  echo ">";
    echo "<td align=left>".$rec['nom_geo']."</td>";
	echo "<td align=center>".$score." % </td>";
	echo "<td align=center>";
	if ($rec['photo1_geo'] <> '') {
        echo "<img src='decoup/photo.jpg' width=20 height=25 />";
	} else echo "&nbsp";
    echo "</td>";
	echo "<td align=center><a href='geologie_detail.php?id=".$rec['id_geo']."&rubrique=search' class=text>En savoir plus ...</a></td>";
	echo "</tr>";
}
// --------------------------------------------------------AFFICHAGE DU TABLEAU BARRAGE
function showBarrage($rec, $i, $score) {
	echo "<tr";
	if ($i%2 == 1) { echo " bgcolor=#ebfae1>"; }
	else  echo ">";
    echo "<td align=left>".$rec['nom_barrage']."</td>";
	echo "<td align=center>".$score." % </td>";
	echo "<td align=center>";
	if ($rec['photo1_barrage'] <> '') {
        echo "<img src='decoup/photo.jpg' width=20 height=25 />";
	} else echo "&nbsp";
    echo "</td>";
	echo "<td align=center><a href='eau_detail.php?id=".$rec['id_barrage']."&rubrique=search' class=text>En savoir plus ...</a></td>";
	echo "</tr>";
}
// --------------------------------------------------------AFFICHAGE DU TABLEAU MONUMENT
function showMonument($rec, $i, $score) {
	echo "<tr";
	if ($i%2 == 1) { echo " bgcolor=#ebfae1>"; }
	else  echo ">";
    echo "<td align=left>".$rec['nom_monument']."</td>";
	echo "<td align=center>".$score." % </td>";
	echo "<td align=center>";
	if ($rec['photo1_monument'] <> '') {
        echo "<img src='decoup/photo.jpg' width=20 height=25 />";
	} else echo "&nbsp";
    echo "</td>";
	echo "<td align=center><a href='site_detail.php?id=".$rec['id_monument']."&rubrique=search' class=text>En savoir plus ...</a></td>";
	echo "</tr>";
}
// --------------------------------------------------------AFFICHAGE DU TABLEAU VILLAGE
function showVillage($rec, $i, $score) {
	echo "<tr";
	if ($i%2 == 1) { echo " bgcolor=#ebfae1>"; }
	else  echo ">";
    echo "<td align=left>".$rec['nom_village']."</td>";
	echo "<td align=center>".$score." % </td>";
	echo "<td align=center><a href='village.php?&rubrique=search' class=text>En savoir plus ...</a></td>";
	echo "</tr>";
}
// --------------------------------------------------------AFFICHAGE DU TABLEAU SPORT
function showSport($rec, $i, $score) {
	echo "<tr";
	if ($i%2 == 1) { echo " bgcolor=#ebfae1>"; }
	else  echo ">";
    echo "<td align=left>".$rec['nom_sports']."</td>";
	echo "<td align=center>".$score." % </td>";
	echo "<td align=center><a href='".$rec['lien_sports']."' target=_blank class=text>En savoir plus ...</a></td>";
	echo "</tr>";
}
// --------------------------------------------------------TRI DU TABLEAU ARBRE
function triArbre($sql, $texte) {

	$champs['nom_arbre']   = 100;
	$champs['nomsc_arbre'] = 100;
	$champs['intro_arbre'] = 25;
	$champs['desc_arbre']  = 25;
	$champs['eco_arbre']   = 25;
	$champs['util_arbre']  = 25;
	
	$i      = 0;
	$const = 4;	
	
	$qry = mysql_query($sql);
	$nbrec = mysql_num_rows($qry);	
	echo "<strong>".$nbrec." résultat(s)"."</strong><br><br>";
	if ($nbrec > 0) {
		echo "<table width='100%' align=center border=0 cellspacing=0 cellpadding=1 class=text>";
		echo "<tr>";
		echo "<td height=20 align=left background='decoup/header_vert.jpg'><strong>Nom de l'arbre</strong></td>";
		echo "<td align=left background='decoup/header_vert.jpg'><strong>Nom scientifique</strong></td>";
		echo "<td height=20 align=center background='decoup/header_vert.jpg'><strong>Pertinence</strong></td>";
		echo "<td align=center background='decoup/header_vert.jpg'><strong>Photo</strong></td>";
		echo "<td height=20 background='decoup/header_vert.jpg'>&nbsp;</td>";
		echo "</tr>";

		while ($rec = mysql_fetch_array($qry)) {
			$score  = 0;
			$inChps = 0;
			$done = false;
			if (stristr($rec['nom_arbre'], $texte)!=false){
				$done = true;
				$inChps++;
			}
			if (stristr($rec['nomsc_arbre'], $texte)!=false){
				$done = true;
				$inChps++;
			}
			if (stristr($rec['intro_arbre'], $texte)!=false){
				$score = $champs['intro_arbre'];
				$inChps++;
			}
			if (stristr($rec['desc_arbre'], $texte)!=false){
				$score = $champs['desc_arbre'];
				$inChps++;
			}
			if (stristr($rec['eco_arbre'], $texte)!=false){
				$score = $champs['eco_arbre'];
				$inChps++;
			}
			if (stristr($rec['util_arbre'], $texte)!=false){
				$score = $champs['util_arbre'];
				$inChps++;
			}

			if ($done == true) {
				$score = 100;
			} else {
				$score = round((($score * $inChps) * $inChps) / $const);
			}

			showArbre($rec, $i, $score);
			$i++;
		}
		echo "</table>";
	}
}
// --------------------------------------------------------TRI DU TABLEAU FLORE

function triFlore($sql, $texte) {

	$champs['nom_flore']   = 100;
	$champs['nomsc_flore'] = 100;
	$champs['intro_flore'] = 25;
	$champs['desc_flore']  = 25;
	$champs['eco_flore']   = 25;
	$champs['util_flore']  = 25;
	
	$i      = 0;
	$const = 4;
	
	$qry = mysql_query($sql);
	$nbrec = mysql_num_rows($qry);	
	echo "<strong>".$nbrec." résultat(s)"."</strong><br><br>";
	if ($nbrec > 0) {
		echo "<table width='100%' align=center border=0 cellspacing=0 cellpadding=1 class=text>";
		echo "<tr>";
		echo "<td height=20 align=left background='decoup/header_vert.jpg'><strong>Nom</strong></td>";
		echo "<td align=left background='decoup/header_vert.jpg'><strong>Nom scientifique</strong></td>";
		echo "<td height=20 align=center background='decoup/header_vert.jpg'><strong>Pertinence</strong></td>";
		echo "<td align=center background='decoup/header_vert.jpg'><strong>Photo</strong></td>";
		echo "<td height=20 background='decoup/header_vert.jpg'>&nbsp;</td>";
		echo "</tr>";

		while ($rec = mysql_fetch_array($qry)) {
			$score  = 0;
			$inChps = 0;
			$done = false;
			if (stristr($rec['nom_flore'], $texte)!=false){
				$done = true;
				$inChps++;
			}
			if (stristr($rec['nomsc_flore'], $texte)!=false){
				$done = true;
				$inChps++;
			}
			if (stristr($rec['intro_flore'], $texte)!=false){
				$score = $champs['intro_flore'];
				$inChps++;
			}
			if (stristr($rec['desc_flore'], $texte)!=false){
				$score = $champs['desc_flore'];
				$inChps++;
			}
			if (stristr($rec['eco_flore'], $texte)!=false){
				$score = $champs['eco_flore'];
				$inChps++;
			}
			if (stristr($rec['util_flore'], $texte)!=false){
				$score = $champs['util_flore'];
				$inChps++;
			}

			if ($done == true) {
				$score = 100;
			} else {
				$score = round((($score * $inChps) * $inChps) / $const);
			}

			showFlore($rec, $i, $score);
			$i++;
		}
		echo "</table>";
	}
}
// --------------------------------------------------------TRI DU TABLEAU FAUNE
function triFaune($sql, $texte) {
	$champs['nom_faune']   = 100;
	$champs['texte_faune'] = 25;
	
	$i     = 0;
	$const = 2;
	
	$qry = mysql_query($sql);
	$nbrec = @mysql_num_rows($qry);	
	echo "<strong>".$nbrec." résultat(s)"."</strong><br><br>";
	if ($nbrec > 0) {
		echo "<table width='100%' align=center border=0 cellspacing=0 cellpadding=1 class=text>";
		echo "<tr>";
		echo "<td height=20 align=left background='decoup/header_vert.jpg'><strong>Nom</strong></td>";
		echo "<td height=20 align=center background='decoup/header_vert.jpg'><strong>Pertinence</strong></td>";
		echo "<td align=center background='decoup/header_vert.jpg'><strong>Photo</strong></td>";
		echo "<td height=20 background='decoup/header_vert.jpg'>&nbsp;</td>";
		echo "</tr>";

		while ($rec = mysql_fetch_array($qry)) {
			$score  = 0;
			$inChps = 0;
			$done = false;
			if (stristr($rec['nom_faune'], $texte)!=false){
				$done = true;
				$inChps++;
			}
			if (stristr($rec['texte_faune'], $texte)!=false){
				$score = $champs['texte_faune'];
				$inChps++;
			}

			if ($done == true) {
				$score = 100;
			} else {
				$score = round((($score * $inChps) * $inChps) / $const);
			}

			showFaune($rec, $i, $score);
			$i++;
		}
		echo "</table>";
	}
}
// --------------------------------------------------------TRI DU TABLEAU GEO
function triGeo($sql, $texte) {
	$champs['nom_geo']   = 100;
	$champs['texte_geo'] = 25;
	
	$i     = 0;
	$const = 2;
	
	$qry = mysql_query($sql);
	$nbrec = @mysql_num_rows($qry);	
	echo "<strong>".$nbrec." résultat(s)"."</strong><br><br>";
	if ($nbrec > 0) {
		echo "<table width='100%' align=center border=0 cellspacing=0 cellpadding=1 class=text>";
		echo "<tr>";
		echo "<td height=20 align=left background='decoup/header_vert.jpg'><strong>Nom</strong></td>";
		echo "<td height=20 align=center background='decoup/header_vert.jpg'><strong>Pertinence</strong></td>";
		echo "<td align=center background='decoup/header_vert.jpg'><strong>Photo</strong></td>";
		echo "<td height=20 background='decoup/header_vert.jpg'>&nbsp;</td>";
		echo "</tr>";

		while ($rec = mysql_fetch_array($qry)) {
			$score  = 0;
			$inChps = 0;
			$done = false;
			if (stristr($rec['nom_geo'], $texte)!=false){
				$done = true;
				$inChps++;
			}
			if (stristr($rec['texte_geo'], $texte)!=false){
				$score = $champs['texte_geo'];
				$inChps++;
			}

			if ($done == true) {
				$score = 100;
			} else {
				$score = round((($score * $inChps) * $inChps) / $const);
			}

			showGeo($rec, $i, $score);
			$i++;
		}
		echo "</table>";
	}
}
// --------------------------------------------------------TRI DU TABLEAU BARRAGE
function triBarrage($sql, $texte) {
	$champs['nom_barrage']   = 100;
	$champs['texte_barrage'] = 25;
	
	$i     = 0;
	$const = 2;
	
	$qry = mysql_query($sql);
	$nbrec = @mysql_num_rows($qry);	
	echo "<strong>".$nbrec." résultat(s)"."</strong><br><br>";
	if ($nbrec > 0) {
		echo "<table width='100%' align=center border=0 cellspacing=0 cellpadding=1 class=text>";
		echo "<tr>";
		echo "<td height=20 align=left background='decoup/header_vert.jpg'><strong>Nom</strong></td>";
		echo "<td height=20 align=center background='decoup/header_vert.jpg'><strong>Pertinence</strong></td>";
		echo "<td align=center background='decoup/header_vert.jpg'><strong>Photo</strong></td>";
		echo "<td height=20 background='decoup/header_vert.jpg'>&nbsp;</td>";
		echo "</tr>";

		while ($rec = mysql_fetch_array($qry)) {
			$score  = 0;
			$inChps = 0;
			$done = false;
			if (stristr($rec['nom_barrage'], $texte)!=false){
				$done = true;
				$inChps++;
			}
			if (stristr($rec['texte_barrage'], $texte)!=false){
				$score = $champs['texte_barrage'];
				$inChps++;
			}

			if ($done == true) {
				$score = 100;
			} else {
				$score = round((($score * $inChps) * $inChps) / $const);
			}

			showBarrage($rec, $i, $score);
			$i++;
		}
		echo "</table>";
	}
}
// --------------------------------------------------------TRI DU TABLEAU MONUMENT
function triMonument($sql, $texte) {
	$champs['nom_monument']   = 100;
	$champs['texte_monument'] = 25;
	
	$i     = 0;
	$const = 2;
	
	$qry = mysql_query($sql);
	$nbrec = @mysql_num_rows($qry);	
	echo "<strong>".$nbrec." résultat(s)"."</strong><br><br>";
	if ($nbrec > 0) {
		echo "<table width='100%' align=center border=0 cellspacing=0 cellpadding=1 class=text>";
		echo "<tr>";
		echo "<td height=20 align=left background='decoup/header_vert.jpg'><strong>Nom</strong></td>";
		echo "<td height=20 align=center background='decoup/header_vert.jpg'><strong>Pertinence</strong></td>";
		echo "<td align=center background='decoup/header_vert.jpg'><strong>Photo</strong></td>";
		echo "<td height=20 background='decoup/header_vert.jpg'>&nbsp;</td>";
		echo "</tr>";

		while ($rec = mysql_fetch_array($qry)) {
			$score  = 0;
			$inChps = 0;
			$done = false;
			if (stristr($rec['nom_monument'], $texte)!=false){
				$done = true;
				$inChps++;
			}
			if (stristr($rec['texte_monument'], $texte)!=false){
				$score = $champs['texte_monument'];
				$inChps++;
			}

			if ($done == true) {
				$score = 100;
			} else {
				$score = round((($score * $inChps) * $inChps) / $const);
			}

			showMonument($rec, $i, $score);
			$i++;
		}
		echo "</table>";
	}
}
// --------------------------------------------------------TRI DU TABLEAU VILLAGE
function triVillage($sql, $texte) {
	$champs['nom_village'] = 25;
	
	$i     = 0;
	$const = 2;
	
	$qry = mysql_query($sql);
	$nbrec = mysql_num_rows($qry);	
	echo "<strong>".$nbrec." résultat(s)"."</strong><br><br>";
	if ($nbrec > 0) {
		echo "<table width='100%' align=center border=0 cellspacing=0 cellpadding=1 class=text>";
		echo "<tr>";
		echo "<td height=20 align=left background='decoup/header_vert.jpg'><strong>Nom</strong></td>";
		echo "<td height=20 align=center background='decoup/header_vert.jpg'><strong>Pertinence</strong></td>";
		echo "<td height=20 background='decoup/header_vert.jpg'>&nbsp;</td>";
		echo "</tr>";

		while ($rec = mysql_fetch_array($qry)) {
			$score  = 0;
			$inChps = 0;
			$done = false;
			if (stristr($rec['nom_village'], $texte)!=false){
				$done = true;
				$inChps++;
			}
			if (stristr($rec['nom_village'], $texte)!=false){
				$score = $champs['nom_village'];
				$inChps++;
			}

			if ($done == true) {
				$score = 100;
			} else {
				$score = round((($score * $inChps) * $inChps) / $const);
			}

			showVillage($rec, $i, $score);
			$i++;
		}
		echo "</table>";
	}
}
// --------------------------------------------------------TRI DU TABLEAU SPORT
function triSport($sql, $texte) {
	$champs['nom_sports'] = 100;
	$champs['description_sports'] = 25;
	
	$i     = 0;
	$const = 2;
	
	$qry = mysql_query($sql);
//	echo $sql;
	$nbrec = mysql_num_rows($qry);	
	echo "<strong>".$nbrec." résultat(s)"."</strong><br><br>";
	if ($nbrec > 0) {
		echo "<table width='100%' align=center border=0 cellspacing=0 cellpadding=1 class=text>";
		echo "<tr>";
		echo "<td height=20 align=left background='decoup/header_vert.jpg'><strong>Nom</strong></td>";
		echo "<td height=20 align=center background='decoup/header_vert.jpg'><strong>Pertinence</strong></td>";
		echo "<td height=20 background='decoup/header_vert.jpg'>&nbsp;</td>";
		echo "</tr>";

		while ($rec = mysql_fetch_array($qry)) {
			$score  = 0;
			$inChps = 0;
			$done = false;
			if (stristr($rec['nom_sports'], $texte)!=false){
				$done = true;
				$inChps++;
			}
			if (stristr($rec['description_sports'], $texte)!=false){
				$score = $champs['description_sports'];
				$inChps++;
			}

			if ($done == true) {
				$score = 100;
			} else {
				$score = round((($score * $inChps) * $inChps) / $const);
			}

			showSport($rec, $i, $score);
			$i++;
		}
		echo "</table>";
	}
}

?>