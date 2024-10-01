<?php

session_start();

if (empty($_SESSION["correo"])) {
   
    header("Location: index.html");
    
    exit();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principios de Mateo | Juan Cloud</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" type="image/x-icon" href="book.png">
    <style>

	/* Style the video element */
video {
  max-width: 100%;
  height: auto;
  margin: 20px auto;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

/* Style the checklist */
ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

li {
  margin-bottom: 10px;
}

input[type="checkbox"] {
  margin-right: 10px;
}

label {
  font-weight: bold;
}

/* Add some hover effects */
li:hover {
  background-color: #f0f0f0;
}

input[type="checkbox"]:hover {
  cursor: pointer;
}

	/* Estilos generales */
	header {
  background-color: #f0f0f0;
  padding: 20px;
  text-align: center;
  border-bottom: 1px solid #ccc;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h1 {
  font-size: 24px;
  font-weight: 600;
  color: #333;
  margin: 0;
}

h1::before {
  content: "";
  display: block;
  width: 40px;
  height: 4px;
  background-color: #337ab7;
  margin: 10px auto;
  border-radius: 2px;
}

body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  color: #333;
  background-color: #f9f9f9;
  padding: 20px;
}

hr {
  border: none;
  border-top: 1px solid #ccc;
  margin: 20px 0;
}

p {
  margin-bottom: 20px;
}

/* Estilos para los versículos */

[v] {
  font-weight: bold;
  color: #337ab7;
  margin-bottom: 10px;
}

[v]:before {
  content: "[v] ";
  font-weight: normal;
  color: #666;
}

/* Estilos para los enlaces */

a {
  text-decoration: none;
  color: #337ab7;
}

a:hover {
  text-decoration: underline;
}

/* Estilos para los videos */

.video {
  background-color: #337ab7;
  color: #fff;
  padding: 10px;
  border-radius: 5px;
  display: inline-block;
  margin-bottom: 10px;
}

.video:hover {
  background-color: #23527c;
}

/* Estilos para los títulos */

h1, h2, h3, h4, h5, h6 {
  font-weight: bold;
  color: #337ab7;
  margin-bottom: 10px;
}

h1 {
  font-size: 24px;
}

h2 {
  font-size: 20px;
}

h3 {
  font-size: 18px;
}

h4 {
  font-size: 16px;
}

h5 {
  font-size: 14px;
}

h6 {
  font-size: 12px;
}
</style>

</head>
<body>
<header>
  <h1>Principios de Mateo</h1>
</header>
<hr>

<p>Ense&ntilde;anzas para su provecho</p>
<hr>

<p>&iquest;Qu&eacute; puntos provechosos puede hallar en los cap&iacute;tulos 5 a 7 de Mateo?</p>
<hr>

<p>
	<br>
</p>

<p>Este pasaje contiene las ense&ntilde;anzas que Jes&uacute;s, el Gran Maestro, expuso en la ladera de una colina de Galilea. Tenga la bondad de leer en su Biblia los vers&iacute;culos citados a continuaci&oacute;n, y h&aacute;gase las preguntas relacionadas.</p>

<p>
	<br>
</p>

<p>[v] 1. 5:3-9 &iquest;Qu&eacute; me revelan estas palabras en cuanto a mi actitud en general? &iquest;Qu&eacute; puedo hacer para ser m&aacute;s feliz? &iquest;C&oacute;mo podr&iacute;a prestar m&aacute;s atenci&oacute;n a mis necesidades espirituales?</p>

<p>
	<br>
</p>

<p>[v] 2. 5:25, 26 &iquest;Qu&eacute; da mejores resultados que imitar el esp&iacute;ritu de disputa que tanta gente manifiesta? (Lucas 12:58, 59.)</p>

<p>
	<br>
</p>

<p>[v] 3. 5:27-30 &iquest;Qu&eacute; subrayan respecto a las fantas&iacute;as rom&aacute;nticas las palabras de Jes&uacute;s?</p>

<p>[v] &nbsp;&iquest;Por qu&eacute; tendr&eacute; m&aacute;s felicidad y paz mental si las evito?</p>

<p>
	<br>
</p>

<p>[v] 4. 5:38-42 &iquest;Por qu&eacute; debo esforzarme por no adoptar la extremada agresividad que caracteriza a la sociedad moderna?</p>

<p>
	<br>
</p>

<p>[v] 5. 5:43-48 &iquest;C&oacute;mo me beneficiar&aacute; conocer mejor a quienes podr&iacute;a haber considerado enemigos? &iquest;Por qu&eacute; es probable que ello contribuya a reducir o eliminar la tensi&oacute;n?</p>

<p>
	<br>
</p>

<p>[v] 6. 6:14, 15 Si en ocasiones me cuesta perdonar, &iquest;se deber&aacute; principalmente a la envidia o el resentimiento? &iquest;C&oacute;mo podr&iacute;a cambiar?</p>

<p>
	<br>
</p>

<p>[v] 7. 6:16-18 &iquest;Me preocupo m&aacute;s por las apariencias que por la persona que soy en mi interior? &iquest;Qu&eacute; deber&iacute;a interesarme m&aacute;s?</p>

<p>
	<br>
</p>

<p>[v] 8. 6:19-32 &iquest;C&oacute;mo me afectar&iacute;a el inter&eacute;s excesivo en el dinero y las posesiones? &iquest;En qu&eacute; podr&iacute;a pensar para mantener el equilibrio en este aspecto?</p>

<p>
	<br>
</p>

<p>[v] 9. 7:1-5 &iquest;C&oacute;mo me siento cuando estoy entre personas severas y criticonas, que siempre buscan faltas? &iquest;Por qu&eacute; es importante que evite ser as&iacute;?</p>

<p>
	<br>
</p>

<p>[v] 10. 7:7-11 Si la persistencia es recomendable al dirigir mis peticiones a Dios, &iquest;qu&eacute; puede decirse de su conveniencia en otras facetas de la vida? (Lucas 11:5-13.)</p>

<p>
	<br>
</p>

<p>[v] 11. 7:12 Aunque conozco la Regla de Oro, &iquest;con cu&aacute;nta frecuencia pongo en pr&aacute;ctica este consejo en mis relaciones con los dem&aacute;s?</p>

<p>
	<br>
</p>

<p>[v] 12. 7:24-27 En vista de que soy responsable de dirigir mi vida, &iquest;c&oacute;mo puedo estar mejor preparado para enfrentar tormentas de adversidad y torrentes de dificultades? &iquest;Por qu&eacute; debo pensar en ello ahora? (Lucas 6:46-49.)</p>

<p>
	<br>
</p>

<p>Otras ense&ntilde;anzas sobre las cuales meditar:</p>
<hr>

<p>
	<br>
</p>

<p>[v] 13. 8:2, 3 &iquest;C&oacute;mo puedo tratar con compasi&oacute;n a los m&aacute;s desfavorecidos, como tan a menudo hizo Jes&uacute;s?</p>

<p>
	<br>
</p>

<p>[v] 14. 9:9-38 &iquest;Cu&aacute;nta importancia doy a ser misericordioso, y c&oacute;mo puedo serlo en mayor</p>

<p>medida?</p>

<p>
	<br>
</p>

<p>[v] 15. 12:19 &iquest;Aprendo de la profec&iacute;a sobre Jes&uacute;s y procuro no discutir?</p>

<p>
	<br>
</p>

<p>https://www.jw.org/es/biblioteca/videos/#es/mediaitems/pub-co-r22_132_VIDEO</p>

<p>
	<br>
</p>

<p>
	<br>
</p>

<p>
	<br>
</p>

<p>[v] 16. 12:20, 21 &iquest;Qu&eacute; bien lograr&eacute; al no aplastar a los dem&aacute;s ni con mis palabras</p>

<p>ni con mis actos?</p>

<p>
	<br>
</p>

<p>https://www.jw.org/open?docid=1011214&amp;item=pub-co-r22_135_VIDEO&amp;wtlocale=S&amp;appLanguage=S&amp;prefer=content</p>

<p>[v] 17. 12:34-37 &iquest;Sobre qu&eacute; temas hablo la mayor parte del tiempo? Si es obvio que al exprimir una naranja sale jugo de naranja, &iquest;por qu&eacute; debo pensar en lo que hay en mi interior, en mi coraz&oacute;n? (Marcos 7:20-23.)</p>

<p>
	<br>
</p>

<p>[v] 18. 15:4-6 &iquest;Qu&eacute; me ense&ntilde;an estas palabras de Jes&uacute;s en cuanto al cuidado amoroso de las personas de edad avanzada?</p>

<p>
	<br>
</p>

<p>jw.org/es/biblioteca/videos/#es/mediaitems/pub-jwb_202002_3_VIDEO</p>

<p>
	<br>
</p>

<p>
	<br>
</p>

<p>
	<br>
</p>

<p>
	<br>
</p>

<p>
	<br>
</p>

<p>
	<br>
</p>

<p>[v] 19. 19:13-15 &iquest;A qu&eacute; debo dedicar tiempo?</p>

<p>&bull;Versi&oacute;n 4.19 - Versi&oacute;n antigua</p>

<p>[v] 20. &nbsp;20:25-28 https://www.jw.org/finder?srcid=jwlshare&amp;wtlocale=S&amp;prefer=lang&amp;bible=40020025&amp;pub=nwtsty&iquest;Por qu&eacute; es infructuoso ejercer la autoridad por el simple placer de ejercerla? &iquest;C&oacute;mo puedo imitar a Jes&uacute;s a este respecto?</p>

<p>
	<br>
</p>

<p>&bull;Versi&oacute;n 5.0- &Uacute;ltima versi&oacute;n</p>

<p>Otros pensamientos que Marcos puso por escrito:</p>
<hr>

<p>[v] 21. 4:24, 25 &iquest;Qu&eacute; importancia tiene mi forma de tratar a los dem&aacute;s?</p>

<p>
	<br>
</p>

<p>
	<br>
</p>

<p>[v] 22. 9:50 &nbsp;&iquest;Qu&eacute; buenos resultados probablemente obtenga si mis palabras y acciones son de buen gusto?</p>

<p>
	<br>
</p>

<p>Por &uacute;ltimo, algunas ense&ntilde;anzas que Lucas transcribi&oacute;:</p>

<p>
	<br>
</p>

<p>[v] 23. 8:11, 14 Si permitiera que las inquietudes, las riquezas o los placeres dominen mi vida, &iquest;qu&eacute; podr&iacute;a suceder</p>

<p>https://www.jw.org/open?docid=1011214&amp;item=pub-co-r20_145_VIDEO&amp;wtlocale=S&amp;appLanguage=S&amp;prefer=content</p>

<p>Video: &ldquo;Geoffrey Jackson: Discurso P&uacute;blico: &iquest;C&oacute;mo conseguir riquezas que no nos causen sufrimiento?&rdquo;</p>

<p>
	<br>
</p>

<p>[ &nbsp;] 24. 9:1-6 Aunque Jes&uacute;s ten&iacute;a la facultad de curar a los enfermos, &iquest;a qu&eacute; dio prioridad?</p>

<p>https://www.jw.org/finder?srcid=jwlshare&amp;wtlocale=S&amp;lank=pub-jwb-104_12_VIDEO</p>

<p>
	<br>
</p>

<p>Video: &ldquo;Imiten al gran Maestro&rdquo;</p>

<p>
	<br>
</p>

<p>
	<br>
</p>

<p><input type="checkbox" id="item1" name="item1">25. 9:52-56 &iquest;Me ofendo con rapidez? &iquest;Rechazo la tendencia a tomar represalias?</p>

<video width="100%" controls>
  <source src="https://download-a.akamaihd.net/files/media_periodical/52/jwb_S_202101_13_r720P.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

<p>Video: &ldquo;No te enojes f&aacute;cilmente&rdquo;</p>

<p>
	<br>
</p>

<p><input type="checkbox" id="item1" name="item1"> 26. 9:62 &iquest;C&oacute;mo debo considerar mi responsabilidad de hablar del Reino de Dios?</p>

<video width="100%" controls>
  <source src="https://download-a.akamaihd.net/files/media_periodical/1b/jwb_S_202009_08_r720P.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>


<p>
	<br>
</p>

<p><input type="checkbox" id="item1" name="item1"> 27. 10:29-37 &iquest;C&oacute;mo puedo demostrar que soy un verdadero pr&oacute;jimo, y no alguien insensible?</p>

<video width="100%" controls>
  <source src="https://download-a.akamaihd.net/files/media_periodical/ee/jwban_S_201607_01_r720P.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>


<p>
	<br>
</p>

<p><input type="checkbox" id="item1" name="item1">28. 11:33-36 &iquest;Qu&eacute; cambios podr&iacute;a efectuar para simplificar mi vida?</p>

<p>
	<br>
</p>

<p><input type="checkbox" id="item1" name="item1"> 29. 12:15 &iquest;Qu&eacute; relaci&oacute;n existe entre la vida y las posesiones?</p>

<p>
	<br>
</p>

<p><input type="checkbox" id="item1" name="item1"> 30. 14:28-30 Si me tomara el tiempo necesario para meditar bien mis decisiones, &iquest;qu&eacute; podr&iacute;a evitar, y c&oacute;mo me beneficiar&iacute;a de ello?</p>

<p>
	<br>
</p>

<p>
	<br>
</p>

<p><input type="checkbox" id="item1" name="item1">31. 16:10-12 &iquest;Qu&eacute; beneficios me producir&aacute; ser una persona &iacute;ntegra?</p>
</body>
</html>