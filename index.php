<html>
<head>
<title>Sensors</title>
</head>
<body>
<h1> Weather station </h1>
<div id="ok_david">
<p> The main goal of this project was to built a weather station. With an access point to reach it with youer phonhe on the web page</p>

</div>
<div id="sponso">
<p> This project is sponsored by ok david <br/>
The most important website to share your "ok david" with your friends <br/>
Check out their store here <a href="david.joly.link/">The ok david store </a><br/>
-0% on the store with the code : CHEH 
</p>

</div>
<div id="php">
<?php
$db = new SQLite3('sensors.db');
$res = $db->query("SELECT * FROM sensors_values WHERE id = (SELECT id FROM stm_records ORDER BY id DESC LIMIT 1);");
while ($row = $res->fetchArray()){
    echo "Humidity : ".$row['humidity']."%<br/>";
    echo "Temp : ".$row['temperature']."°C <br/>";
    echo "Pressure : ".$row['presure']."hPa<br/>";
    echo "Moment : ";
    if ($row['light'] > 450){
        echo "Jour ! ";
    }else{
        echo "Nuit ! :(";
    }


}

?>
</div>
</body>
</html>