<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Modelo Form</title>
 <link rel="stylesheet" href="css/css.css">
</head>

<body>
<div id="principal">

<form class="contato" id="form" name="email" action="ema.php" method="post" >
<fieldset class="fieldset">
<legend class="legend">Dadaos do Aluno</legend>

<div style="float:left; width: 280px; margin-right:30px;">
<label for="nome">XXXX:</label>
<input type="text" id="nome" name="nome" required/>
</div>

<div style="float:left; width:280px;">
<label for="email">XXXXX:</label>
<input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
</div>

<div style="clear:both">
<label for="mens">XXXXX:</label>
<textarea id="mens" name="mens" riquered/></textarea>
</div>

<select name="setor" required>
<option value="">Opção</option>
<option value="">Opção</option>
</select>

<fieldset class="fieldset">
<legend class="legend">Check</legend>
<input type="checkbox" id="check" name="check" class="checkbox" required/>
<input type="checkbox" id="check" name="check" class="checkbox" required/>
<input type="checkbox" id="check" name="check" class="checkbox" required/>
</fieldset>

</fieldset>
<div>
<input type="submit" name="submit" value="Enviar" id="enviar"/>
</div>
</form>

</div>

</html>