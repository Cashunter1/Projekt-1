<HEAD>
	<TITLE>Turistički vodič - rezervacije</TITLE>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
</HEAD>
<form action="rezervacije.php" method="post" name="rezervacije"><center><?php
$ime="";
$prezime="";
$posta="";
$mjesto="";
$ulica="";
$broj="";
$izbor="";
$poruka="";
$danas=date("Y-m-d");
if (isset($_POST['submit'])) {
	if (isset($_POST["ime"])){
		$ime = $_POST["ime"];
	} else {
		$ime = "";
	}
	if (isset($_POST["prezime"])){
		$prezime = $_POST["prezime"];
	} else {
		$prezime = "";
	}
	if (isset($_POST["posta"])){
		$posta = $_POST["posta"];
	} else {
		$posta = "";
	}
	if (isset($_POST["mjesto"])){
		$mjesto = $_POST["mjesto"];
	} else {
		$mjesto = "";
	}
	if (isset($_POST["ulica"])){
		$ulica = $_POST["ulica"];
	} else {
		$ulica = "";
	}
	if (isset($_POST["broj"])){
		$broj = $_POST["broj"];
	} else {
		$broj = "";
	}
	if (isset($_POST["izbor"])){
		$izbor = $_POST["izbor"];
	} else {
		$izbor = "";
	}
	if ($ime and $prezime and $posta and $mjesto and $ulica and $broj and $izbor){
		$upis="INSERT INTO rezervacije VALUES ( '$ime', '$prezime', '$posta', '$mjesto', '$ulica', '$broj', '$izbor', '$danas')";
		$zapisi=konekcija($upis); ?>
		<BODY BGCOLOR='#dfdfdf' LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0>
		<TABLE WIDTH='775' height='200' BORDER='0' CELLPADDING='0' CELLSPACING='0' background="slike/glava.jpg">
			<TR>
				<TD width='10%'>
				</TD>
				<TD width='100%' align='left' valign='middle'>
					<font name="Verdana" color="#ffffb0" size="4"><i>Turistički vodič</i><br>
					<font name="Verdana" color="#ffffb0" size="6">HVIDRA<br>
				</TD>
				<TD width='10%'>
				</TD>
			</TR>
		</table>
		<TABLE WIDTH='775' height='20' BORDER='0' CELLPADDING='0' CELLSPACING='20' bgcolor='#ffffff'>
			<tr>
				<td width='775' align='center' bgcolor='#ffffff'>
					<br><center><font face="Calibri" size="2" color="#330099"><b>Potvrda rezervacije</b></center>
					Potvrđujemo primitak rezervacije za:<br><hr></hr>
					<A HREF="javascript:window.print()">Ispiši rezervaciju</A> 
				</td>
			</tr>
		</table>
		<TABLE WIDTH='775' height='220' BORDER='0' CELLPADDING='0' CELLSPACING='20' bgcolor='#ffffff'>
			<TR>
				<td width="300" height="166" valign="top" align="right">
					<br><font face="Calibri" size="2" color="#330099"></b>
					Ime 		<br>
					Prezime 	<br>
					Pošt. broj	<br>
					Mjesto		<br>
					Ulica i kbr	<br>
					Broj rezervacija	<br>
					Destinacija	<br>
				</td>
				<td width="475" height="166" valign='top' align="left">
					<br><font face="Calibri" size="2" color="#330099"></b><?php
					echo $ime."<br>".$prezime."<br>".$posta."<br>".$mjesto."<br>".$ulica."<br>".$broj."<br>";
					if ($izbor=="1"){
						echo "Disneyland Paris";
					} elseif ($izbor=="2"){
						echo "Mirabilandia Ravenna";
					} elseif ($izbor=="3"){
						echo "Gardaland Italia";
					} elseif ($izbor=="4"){
						echo "Crna Gora";
					} elseif ($izbor=="5"){
						echo "Austrijska jezera";
					} else {
						echo "Roma Italia ";
					}				
					echo "<br>"; ?>					
				</td>
			</TR>
			<TR>
				<td width="100%" height="25" valign='middle' align="center" colspan='4' bgcolor='#6699cc'>
					<a href="http://tena.efos.hr/~tim04"><font face="Calibri" size="1" color="#ffffff"><b>Povratak na polaznu stranicu</b></font></a>
				</td>
			</TR>
		</table>
		</body><?php
	} else {
		echo("<SCRIPT TYPE=\"text/javascript\">window.location.replace('rezervacije.php');</SCRIPT>");
	}
} else { ?>	
	<BODY BGCOLOR='#dfdfdf' LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 onLoad='document.rezervacije.ime.focus();'>
	<center>
	<TABLE WIDTH='775' height='200' BORDER='0' CELLPADDING='0' CELLSPACING='0' background="slike/glava.jpg" align="center">
		<TR>
			<TD width='10%'>
			</TD>
			<TD width='100%' align='left' valign='middle'>
				<font name="Verdana" color="#ffffb0" size="4"><i>Turistički vodič</i><br>
				<font name="Verdana" color="#ffffb0" size="6">HVIDRA<br>
			</TD>
			<TD width='10%'>
			</TD>
		</TR>
	</table>
	<TABLE WIDTH='775' height='30' BORDER='0' CELLPADDING='0' CELLSPACING='0' background="slike/glava.jpg">
		<TR>
			<td WIDTH='193' height="30" valign="middle" align="center" bgcolor="#6699cc" ONMOUSEOVER="this.bgColor = '#0073e6';" ONMOUSEOUT="this.bgColor = '#6699cc';">
				<a href="index.php"><font face="Arial" size="2" color="#FFFFFF"><b>Polazna</b></font></a>
			</td>
			<td WIDTH='193' height="30" valign="middle" align="center" bgcolor="#0073e6" ONMOUSEOVER="this.bgColor = '#0073e6';" ONMOUSEOUT="this.bgColor = '#0073e6';">
				<font face="Arial" size="2" color="#33ff00"><b>Rezervacije</b></font>
			</td>
			<td WIDTH='193' height="30" valign="middle" align="center" bgcolor="#6699cc" ONMOUSEOVER="this.bgColor = '#0073e6';" ONMOUSEOUT="this.bgColor = '#6699cc';">
				<a href="onama.php"><font face="Arial" size="2" color="#FFFFFF"><b>O nama</b></font></a>
			</td>
			<td WIDTH='193' height="30" valign="middle" align="center" bgcolor="#6699cc" ONMOUSEOVER="this.bgColor = '#0073e6';" ONMOUSEOUT="this.bgColor = '#6699cc';">
				<a href="kontakt.php"><font face="Arial" size="2" color="#FFFFFF"><b>Kontakti</b></font></a>
			</td>
		</TR>
	</table>
	<TABLE WIDTH='775' height='220' BORDER='0' CELLPADDING='0' CELLSPACING='0' bgcolor='#ffffff'>
		<TR>
			<td width="375" height="166" valign="top" align="right">
				<br><center><font face="Calibri" size="2" color="#330099"><b>Nositelj rezervacije</b></center>
				<br><font face="Calibri" size="2" color="#330099"></b>
				Ime 				<input type="text" name="ime"		size='30'><br>
				Prezime 			<input type="text" name="prezime"	size='30'><br>
				Pošt. broj			<input type="text" name="posta"		size='30'><br>
				Mjesto				<input type="text" name="mjesto"	size='30'><br>
				Ulica i kbr			<input type="text" name="ulica"		size='30'><br>
				Broj rezervacija	<input type="text" name="broj"		size='30' value="1"><br>
			</td>
			<td width="20" height="166" valign='top' align="left">
			</td>
			<td width="180" height="166" valign='top' align="left">
				<br><center><font face="Calibri" size="2" color="#330099"><b>Odaberite putovanje</b></center>
				<br><font face="Calibri" size="2" color="#330099"></b>
				<input type="radio" name="izbor" value="1"> Disneyland Paris<br>
				<input type="radio" name="izbor" value="2"> Mirabilandia Ravenna<br> 
				<input type="radio" name="izbor" value="3"> Gardaland Italia <br>
				<input type="radio" name="izbor" value="4" disabled> Crna Gora - <font color="red">rasprodano<font color="#330099"><br>
				<input type="radio" name="izbor" value="5"> Austrijska jezera<br> 
				<input type="radio" name="izbor" value="6"> Roma Italia <br>
			</td>
			<td width="200" height="166" valign='middle' align="center">
				<img src="slike/rezervacije.jpg" border="0" alt="">
			</td>
		</TR>
		<TR>
			<td width="100%" height="30" valign="top" align="center" colspan='4'>
				<font face="Calibri" size="1" color="#ff0000"></b>Za prihvat rezervacije potrebno je popuniti sva polja i odabrati putovanje<br><br>
				<input type='submit' value='Potvrđujem rezervaciju putovanja' name='submit' style='width: 320px;'><br><br>
			</td>
		</TR>
		<TR>
			<td width="100%" height="25" valign='middle' align="center" colspan='4' bgcolor='#6699cc'>
			<a href="http://tena.efos.hr/~tim04/"><font face="Calibri" size="1" color="#ffffff"><b>Projektni zadatak - turistički vodič</b></font></a>
			</td>
		</TR>
	</table>
	</BODY><?php
} ?></center></HTML>


<?php
function konekcija($query){
	$host="localhost";
	$user="tim04";
	$password="maknuta";
	$database="tim04";
	mysql_connect($host,$user,$password);
	mysql_select_db($database);
    mysql_query("SET NAMES utf8");
    mysql_query("SET CHARACTER SET utf8");
    mysql_query("SET COLLATION_CONNECTION='utf8_general_ci'");
	$result=mysql_query($query);
	return $result;
}	?>