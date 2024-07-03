<?php
/*if($_SERVER["HTTP_REFERER"]==""){echo '<meta http-equiv="refresh" content="0;URL=../">'; exit();}  */
include('head.php');
?>

<div class="col-eight tab-full contact__form1">
    <form name="contactForm" id="contactForm" method="POST" action="profile.php">
        <tr>
            <td colspan="4">
                <center>
                    <strong>VEUILLEZ BIEN VERIFIER LES INFORMATIONS ETUDIANTS</strong>
                </center>
            </td>
        </tr>
        <div class="form-field">
            <input type="text" placeholder="" readonly value="Numero de Carte :  1405409/BN" class="full-width">
        </div>
        <!--  <div class="form-field">
            <input type="text" placeholder="Prenom & Nom" readonly
                style="border:none;background: transparent;padding:0;font-size: 16px;" class="full-width">
        </div> -->
        <div class="form-field">
            <input type="text" placeholder="" readonly value="Prenom Et Nom : El Hadji Madiop DIOP" class="full-width">
        </div>
        <div class="form-field">
            <input type="text" placeholder="" readonly value="Niveau et Classe : Master 1, Developpement D'Application"
                class="full-width">
        </div>
        <div class="form-field">
            <input type="text" placeholder="" readonly value="Codification : 1B20" class="full-width">
        </div>
        <div class="form-field">
            <button type="submit" class="full-width btn--primary">CODIFIÈ(E) !</button>
            <br><br>
            <center> <a href="./">Retour</a> </center>
        </div>
    </form>

    <?php
    include('footer.php');
    ?>