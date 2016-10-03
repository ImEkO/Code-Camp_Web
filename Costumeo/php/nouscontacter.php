
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="mode.css" />
	<form id="myform" class="cssform" action="">

	<p><label for="user"></label>
	<input type="text" id="user" value="" placeholder="NOM" /></p>

	<p><label for="emailaddress"></label>
	<input type="text" id="emailaddress" value="" placeholder="MAIL" /></p>

	<p><label for="comments"></label>
	<textarea id="comments" rows="5" cols="25" placeholder="MESSAGE"></textarea></p>

	<p><label for="comments">Êtes-vous :</label>
	<input type="checkbox" name="Êtes-vous" /> Particulier
	<input type="checkbox" name="Êtes-vous" class="threepxfix" /> Professionnel


	<p><label for="terms">Conditions generales acceptees</label>
	<input type="checkbox" id="terms" class="boxes" /></p>

	<p><div style="margin-left: 150px;">
		<input type="submit" value="Envoyer" />
		<input type="reset" value="Reset" />
	</div></p>
</form>
</head>