<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="surf.css" />
    <title> Surf by GA </title>

</head>

<div id="conteneur">


    <nav>
        <ul id="menu">
            <li><a href="#"> spots</a></li>
            <li><a href="#">cours et tuttos</a></li>
            <li><a href="#">risque</a></li>
            <li><a href="#"> contacts</a></li>

        </ul>
    </nav>
</div>
<?php
setcookie('user_id', '1234');
setcookie('user_pref', 'dark_theme', time()+3600*24, '/', '', true, true);
?>
<img class='ville' src='france.png' alt='spots'>
<area shape='circle' coords='10,10,100'/>
</html>