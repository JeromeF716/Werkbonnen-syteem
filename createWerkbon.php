<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <title>CYOS Werkbonnen</title>
</head>
<body>
    <div id="werkbon">
        <header id="header">
            <h1>CYOS Werkbonnen</h1>
        </header>

        <?php
            $file = fopen("number.txt", "r");
            $WBnumber = fgets($file);
            fclose($file);
            $file = fopen("number.txt", "w");
            fputs($file, $WBnumber + 1);
            fclose($file);
        ?>

        <form method="POST" action="werkbon.php" autocomplete="off" id="form">
                <p><label>Project-/bonnummer:</label><input type="text" size="5" name="bonnummer" required="required" value="<?php echo $WBnumber;?>"><b>*Automatische aanvulling*</b></p><!-- Automatisch aanlaten vullen uit database--> 
                <p><label>Omschrijving:</label><input type="select" size="25" name="omschrijving" required="required" value=""></p>
                <p><label>Prioriteit:</label>
                    <select name="prioriteit" value="" id="select" required="required">
                    <option value=""></option>
                        <option id="select" value="Hoog (kan niet werken)" required="required">Hoog (kan niet werken)</option>
                        <option id="select" value="Middel (Kan beperkt werken)" required="required">Middel (Kan beperkt werken)</option>
                        <option id="select" value="Laag (kan wel verder werken)" required="required">Laag (kan wel verder werken)</option>
                    </select>
                </p>
                <p><label>Werknemer:</label>
                    <select name="werknemer" value="" id="select" required="required">
                        <option value=""></option>
                        <option id="select" value="Jeroen">Jeroen</option>
                        <option id="select" value="Therza">Therza</option>
                    </select>
                </p>
                <p><label>Startdatum:</label><input type="text" name="startdatum" required="required" value="<?php echo date ('D, d M Y');?>"><b>*Automatische aanvulling*</b></p>
                <p><label>Bezoek aan huis:</label><input type="date" name="huisbezoek" value="" required="required"></p>
                <p><label>Tijdstip van bezoek:</label>
                <input type="radio" name="tijdstip" value="08:00-12:00" id="radio" required="required">08:00-12:00
                <input type="radio" name="tijdstip" value="12:00-18:00" id="radio" required="required">12:00-18:00
                <input type="radio" name="tijdstip" value="18:00-21:00" id="radio" required="required">18:00-21:00
                <input type="radio" name="tijdstip" value="Geen huisbezoek nodig" id="radio" required="required">Geen huisbezoek benodigd
                </p>
                <p><label>Geschatte uren:</label><input type="text"size="25" name="uren" value="" required="required"></p>
                <p><label>Maximale doorlooptijd:</label><input type="text" size="25" name="doorlooptijd" value="" required="required"></p><!--Automatische datum invullen van zelfde dag-->
                <h3>Opdrachtgever</h3>
                <p><label>Naam:</label><input type="text" size="25" name="naam_opdrachtgever" value="" required="required"></p>
                <p><label>Adres:</label><input type="text" size="25" name="adres_opdrachtgever" value="" required="required"></p>
                <p><label>Afdeling:</label><input type="text" size="25" name="afdeling_opdrachtgever" value=""></p>
                <p><label>Mobiel:</label><input type="tel" pattern="[0-9]{2}-[0-9]{6}" name="mobiel_opdrachtgever" value=""></p>
                <h3>Omschrijving probleem/te verrichten werkzaamheden</h3>
                <textarea name="probleem" cols="100" rows="5"></textarea>
                <input type="submit" value="Opslaan" id="submit">                
        </form>
        <footer id="footer">2019 - &copy; - Jeroen Faasse </footer>
    </div>
</body>
</html>