<html>
    <head>
        <title>Freemedia-player</title>
        <!--link rel="icon" type="image/png" sizes="16x16" href="img/ico/icon_x16.png"-->
		<meta charset="unicode">
        <meta http-equiv="Cache-control" content="no-cache">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> 
        <!--script src = "script/fct.js" type = "text/javascript"></script-->
        <link rel="stylesheet" type = "text/css" href = "styles.css">
    </head>
    <body>
        <?php
            $welcome="<p class='user'>Welcome ";
            $name="Pierre";
            echo $welcome.$name."!</p>";
        ?>
        <p class="titre">Freemedia-Player</p>
        <p class="newhr"#>________________________________________________________</p>

        <!--Proceed by boxes-->
        <table class="main">
            <tr>
                <td> <!--Template-->          
                    <!--div class="box"-->
                    <img src="https://image.tmdb.org/t/p/original/29vpkpY52u8gHAtDK68wv91YgRK.jpg" alt="Titre du Film" class="Preview">
                <td class="td-box">
                    <p class="film-titre">Astérix et le coup du menhir</p>
                    <br><br>
                    <p>Les garnisons romaines cherchent à tirer profit de l’amnésie soudaine du druide Panoramix, mésestimant la vigilance du vaillant guerrier Astérix.</p>
                    <br>
                    <p class="align">Evaluation global:</p>
                    <p class="align">★★★</p>
                    <br>
                    <p class="align">Chaine:</p>
                    <p class="align">W9</p>
                </td>
                    <!--/div-->
                </td>           
                <td> <!--Séparation-->
                    <img src="assets/UP.png" alt="UP arrow">
                    <br><img src="assets/RED.png" style="height:96px" alt="central point">
                    <br><img src="assets/DOWN.png" alt="DOWN arrow">
                </td>
            </tr>
        </table>
    </body>
</html>