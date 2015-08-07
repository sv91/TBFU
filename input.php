<h3>Ajouter un nouveau voyage:</h3>
<div style="padding: 20px 0px;">
	<div style="padding: 0px 30px; float:left;">Nom: <input type="text" name="name" /></div>
	<!-- TODO depending of the name show the associated section or a field to fill -->
	<div style="padding: 0px 30px; float:left;">Section: <input type="text" name="section" /></div>
	<div style="padding: 0px 30px; float:left;">Fond: <input type="text" name="fund" /></div>
</div>
<div style="padding: 20px 0px">
	<div style="padding: 0px 30px; float:left;">Destination <input type="text" name="destination" /></div>
	<div style="padding: 0px 30px; float:left;">Numero de DV: <input type="number" min="100000" max="999999" name="dv" /></div>
</div>
<div style="padding: 20px 0px">
	<div style="padding: 0px 30px; float:left;">Date de début: <input type="date" name="debut" /></div>
	<div style="padding: 0px 30px; float:left;">Date de fin: <input type="date" name="fin" /></div>
</div>
<div style="padding: 20px 0px">
	<div style="padding: 0px 15px 0px 30px; float:left;">Transport: <input type="text" name="transport" size="10"/></div>
	<div style="padding: 0px 15px; float:left;">Inscription: <input type="text" name="inscription" size="10" /></div>
	<div style="padding: 0px 15px; float:left;">Logement: <input type="text" name="logement" size="10" /></div>
	<div style="padding: 0px 15px; float:left;">Autre: <input type="text" name="autre" size="10" /></div>
</div>
<div style="padding: 20px 0px">
	<div style="padding: 0px 30px; float:left;">Description: <br /><textarea name="description" form="formu" rows="5" cols="100"></textarea></div>
</div>

<div style="padding: 20px 0px" align="right">
	<div style="padding: 0px 30px;"><input type="submit" value="Valider" align="right"></div>
</div>