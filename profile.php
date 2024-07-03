<?php
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['numEtudiant'])) {
    // Rediriger vers la page de connexion si non connecté
    header("Location: index.php");
    exit();
}
$isAlreadyLogged = $_SESSION['isAlreadyLogged'];
$datePaiement = "notFound"; // Date actuelle par défaut
$paiementDejaEffectue = false;
?>

<?php
/*if($_SERVER["HTTP_REFERER"]==""){echo '<meta http-equiv="refresh" content="0;URL=../">'; exit();}  */
include('head.php');
?>

<div class="col-nine contact__form1" style="font-size:18px;color:black;font-family:'Times New Roman';">

    <form class="row" action="traitement.php" method="POST" style="font-size:20px;color:black;font-family:'Times New Roman';">
        <input type="hidden" id="idAffectation" name="idAffectation"
            value="<?php echo htmlspecialchars($_SESSION['idAffectation']); ?>">

        <div class="col-six">
            <div class="form-field">
                <label class="form-label">Prenom</label>
                <input name="etudiant" style="text-align:center;" type="text" placeholder="" readonly
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
            <?php if ($isAlreadyLogged): ?>
                <input style="text-align:center;color: green; font-weight: bold;" type="text" placeholder="" readonly
                value="Déjà logé!" class="full-width">
            <?php else: ?>
                <button type="submit" class="full-width btn--primary">VALIDER CODIFICATION !</button>
            <?php endif; ?>
        </div>
    </form>
    <br>
    <!-- Bouton de retour à la page d'accueil -->
    <div class="form-field">
            <button onclick="window.location.href='index.php'" class=" btn--primary">Retour à l'accueil</button>
        </div>
</div>
<?php
    include('footer.php');
    ?>