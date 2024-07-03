<?php
/*if($_SERVER["HTTP_REFERER"]==""){echo '<meta http-equiv="refresh" content="0;URL=../">'; exit();}  */
include('head.php');
// Initialisation des variables
$nom = $prenom = $numEtudiant = $niveau = $pavillon = $chambre = $lit = $datenaissance= $lieu_naissance = $idAffectation = "";
$datePaiement = "notFound"; // Date actuelle par défaut
$paiementDejaEffectue = false;
?>

<div class="col-nine contact__form1">

    <form class="row" action="index.php" method="POST">
        <input type="hidden" id="idAffectation" name="idAffectation"
            value="<?php echo htmlspecialchars($idAffectation); ?>">

        <div class="col-six">
            <div class="form-field">
                <label class="form-label">Prenom</label>
                <input style="text-align:center;" type="text" placeholder="" readonly
                    value="<?php echo htmlspecialchars($_SESSION['prenom']); ?>" class="full-width">
            </div>
        </div>
        <div class="col-six">
            <div class="form-field">
                <label class="form-label">Nom</label>
                <input style="text-align:center;" type="text" placeholder="" readonly
                    value="<?php echo htmlspecialchars($_SESSION['nom']); ?>" class="full-width">
            </div>
        </div>
        <div class="col-six">
            <div class="form-field">
                <label class="form-label">Date De Naissance</label>
                <input style="text-align:center;" type="text" placeholder="" readonly
                    value="<?php echo htmlspecialchars($_SESSION['datenaissance']); ?>" class="full-width">
            </div>
        </div>
        <div class="col-six form-field">
            <label class="form-label">Lieu De Naissance</label>
            <input style="text-align:center;" type="text" placeholder="" readonly
                value="<?php echo htmlspecialchars($_SESSION['lieu_naissance']); ?>" class="full-width">
        </div>
        <div class="col-six form-field">
            <label class="form-label">Numero de Carte</label>
            <input style="text-align:center;" type="text" placeholder="" readonly
                value="<?php echo htmlspecialchars($_SESSION['numEtudiant']); ?>" class="full-width">
        </div>
        <div class="col-six form-field">
            <label class="form-label">Niveau</label>
            <input style="text-align:center;" type="text" placeholder="" readonly
                value="<?php echo htmlspecialchars($_SESSION['niveau']); ?>" class="full-width">
        </div>
        <div class="col-six form-field">
            <label class="form-label">Pavillon</label>
            <input style="text-align:center;" type="text" placeholder="" readonly
                value="<?php echo htmlspecialchars($_SESSION['pavillon']); ?>" class="full-width">
        </div>
        <div class="col-six form-field">
            <label class="form-label">Chambre</label>
            <input style="text-align:center;" type="text" placeholder="" readonly
                value="<?php echo htmlspecialchars($_SESSION['chambre']); ?>" class="full-width">
        </div>
        <div class="col-six form-field">
            <label class="form-label">Lit</label>
            <input style="text-align:center;" type="text" placeholder="" readonly
                value="<?php echo htmlspecialchars($_SESSION['lit']); ?>" class="full-width">
        </div>
        <br>

        <div class="form-field">
            <button type="submit" class="full-width btn--primary">LOGER !</button>
        </div>
    </form>

    <br>
    <div class="d-flex row container justify-content-center center-div2"
        style="font-size:20px;color:black;font-family:'Times New Roman';">
        <h4>Informations Paiement</h4>
        <div class="col-md-4">
            <strong>Montant de la Caution: </strong>10 000FCFA
        </div>
        <div class="col-md-4">
            <strong>Date de Paiement :</strong> <?php echo $datePaiement; ?>
        </div>
        <div class="col-md-4">
            <p><strong>Statut :</strong> <span
                    style="color: <?php echo $paiementDejaEffectue ? 'green' : 'red'; ?>"><?php echo $paiementDejaEffectue ? 'Payé' : 'Non payé'; ?></span>
            </p>
        </div>
        <br>
        <!-- Bouton de retour à la page d'accueil -->
        <div class="d-flex container col-md-8 justify-content-center mt-3">
            <button class="btn btn-secondary" onclick="window.location.href='index.php'">Retour à l'accueil</button>
        </div>


    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
</script>