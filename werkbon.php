<html lang="en">
<?php
    $bonnummer = $_POST['bonnummer'];
    $omschrijving = $_POST['omschrijving'];
    $prioriteit = $_POST['prioriteit'];
    $werknemer = $_POST['werknemer'];
    $startdatum = $_POST['startdatum'];
    $huisbezoek = $_POST['huisbezoek'];
    $tijdstip = $_POST['tijdstip'];
    $geschatteUren = $_POST['uren'];
    $doorlooptijd = $_POST['doorlooptijd'];
    $naam = $_POST['naam_opdrachtgever'];
    $adres = $_POST['adres_opdrachtgever'];
    $afdeling = $_POST['afdeling_opdrachtgever'];
    $mobiel = $_POST['mobiel_opdrachtgever'];
    $probleemOmschrijving = $_POST['probleem'];
    $starttarief = "20";
    $tariefDag = "15";
    $tariefAvond = "22.75";
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>
    <title>CYOS Project <?php echo $bonnummer;?></title>
</head>
<body>
    <div id="werkbon">
        <header id="header">
            <h1>Werkbon</h1>
            <script src="javascript.js"></script>
            <button id="btn" onclick="countNmr()">AFDRUKKEN</button>
        </header>
        <div id="werkbonInfo">
            <table>
                <tr>
                    <td class="askedInfo">Project-/bonnummer:</td>
                    <td class="givenInfo"><?php echo $bonnummer?></td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td class="askedInfo">Omschrijving:</td>
                    <td class="givenInfo"><?php echo $omschrijving?></td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td class="askedInfo">Prioriteit:</td>
                    <td class="givenInfo"><?php echo $prioriteit?></td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td class="askedInfo">Werknemer:</td>
                    <td class="givenInfo"><?php echo $werknemer?></td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td class="askedInfo">Bezoek aan huis:</td>
                    <td class="givenInfo"><?php echo $huisbezoek?></td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td class="askedInfo">Tijdstip van bezoek:</td>
                    <td class="givenInfo">
                        <?php
                            if($tijdstip == "08:00-12:00"){
                                echo $tijdstip;
                            }else if($tijdstip == "12:00-18:00"){
                                echo $tijdstip;
                            }else if($tijdstip == "18:00-21:00"){
                                echo $tijdstip;
                            }else if($tijdstip == "Geen huisbezoek nodig"){
                                echo $tijdstip;
                            }
                        ?>
                    </td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td class="askedInfo">Geschatte uren:</td>
                    <td class="givenInfo"><?php echo $geschatteUren?></td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td class="askedInfo">Startdatum:</td>
                    <td class="givenInfo"><?php echo date ('D, d M Y'); ?></td>
                    <td class="askedInfo">Maximale doorlooptijd:</td>
                    <td class="givenInfo"> <?php echo $doorlooptijd?></td>
                </tr>
            </table>
            <h3>Opdrachtgever</h3>
            <table>
                <tr>
                    <td class="askedInfo1">Naam:</td>
                    <td class="givenInfo1"><?php echo $naam?></td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td class="askedInfo1">Adres:</td>
                    <td class="givenInfo1"><?php echo $adres?></td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td class="askedInfo1">Afdeling:</td>
                    <td class="givenInfo1"><?php echo $afdeling?></td>
                    <td></td><td></td>
                </tr>
                <tr>
                    <td class="askedInfo1">Mobiel:</td>
                    <td class="givenInfo1"><?php echo $mobiel?></td>
                    <td></td><td></td>
                </tr>
            </table>
            <h3>Omschrijving probleem/te verrichten werkzaamheden</h3>
            <p id="probleemOmschrijving"><?php 
                    echo $probleemOmschrijving;     
                ?>
            </p>
            <h3>Aantekeningen werknemer</h3>
            <table id="uren">
                <tr>
                    <td colspan="2" id="tijdRegistr">Gewerkte uren</td>
                </tr>
                <tr>
                    <td id="datum">Datum</td>
                    <td id="tdUren">Uren</td>
                </tr>
                <tr>
                    <td>
                    <?php
                        echo $huisbezoek;
                    ?>
                    </td>
                    <td>
                    <?php
                            if($tijdstip == "08:00-12:00"){
                                echo "4";
                            }else if($tijdstip == "12:00-18:00"){
                                echo "6";
                            }else if($tijdstip == "18:00-21:00"){
                                echo "3";
                            }else if($tijdstip == "Geen huisbezoek nodig"){
                                echo "---";
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td id="total">Totaal: <br>€ 
                        <?php
                            if($tijdstip == "08:00-12:00"){
                                echo $starttarief + $tariefDag;
                            }else if($tijdstip == "12:00-18:00"){
                                echo $starttarief + $tariefDag;
                            }else if($tijdstip == "18:00-21:00"){
                                echo $starttarief + $tariefAvond;
                            }else if($tijdstip == "Geen huisbezoek nodig"){
                                echo $starttarief;
                            }
                        ?>
                    </td>
                    <td id="totalEuro">€</td>
                </tr>
            <textarea id="aantekening" cols="100" rows="15"></textarea>
            </table>
            <h3>Accordering</h3>
            <p id="accordering">Wij bevestigen dat bovengenoemde werknemer de activiteiten voor ons heeft verricht</p>
            <textarea id="aantekeningWerkgever" cols="100" rows="8">Aantekeningen opdrachtgever:</textarea>
            <table id="tableParaaf">
                <tr>
                    <td>DATUM Definitief:</td>
                    <td></td>
                </tr>
                <tr id="paraaf">
                    <td id="paraafTD">Resultaat (G/V/M/O):</td>
                    <td id="paraafTD">Paraaf:</td>
                </tr>
            </table>
        </div>
        <footer id="footer">2019 - &copy; - Jeroen Faasse </footer>
    </div>
</body>
</html>

