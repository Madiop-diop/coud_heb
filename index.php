<?php
/*if($_SERVER["HTTP_REFERER"]==""){echo '<meta http-equiv="refresh" content="0;URL=../">'; exit();}  */
include('head.php');
?>
<div class="col-eight tab-full contact__form1">
    <form name="contactForm" id="contactForm" method="POST" action="profile.php">

        <tr>
            <td colspan="4">
                <center>
                    <strong>VEUILLEZ RENSEIGNER LES CHAMPS</strong>
                </center>
            </td>
        </tr>

        <fieldset>
            <div class="form-field">
                <input name="code" required type="text" placeholder="Numero de carte (ou du certificat d'inscription)"
                    value="" class="full-width">
            </div>

            <!--  <div class="form-field">
                        <input name="mdp" type="password" required id="mdp" placeholder="Mot de passe" value=""
                            class="full-width">
                    </div> -->

            <div class="form-field">
                <button type="submit" class="full-width btn--primary">Confirm identity</button>
                <br><br>

                <center> <a href="./">Retour</a> </center>
            </div>

        </fieldset>
    </form>


    <?php
include('footer.php');
?>