<?php
// Paramètres de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coud_hebergement";

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['code'])) {
    // Récupérer les données du formulaire
    $code = $_POST['code'];
    // $mdp = $_POST['mdp']; // Si vous avez un mot de passe

     // Requête SQL pour récupérer les informations de l'étudiant et de son logement
     $sql = "SELECT e.nom, e.prenom, a.id AS idAffectation, e.numEtudiant, e.niveau, e.datenaissance, e.lieu_naissance, l.pavillon, l.chambre, l.lit, lg.id AS idLogement
     FROM etudiant e
     JOIN affectation a ON e.id = a.idEtudiant
     JOIN lit l ON a.idLit = l.id
     LEFT JOIN logement lg ON a.id = lg.idAffectation
     WHERE e.numEtudiant = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $code);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Récupération des données de l'étudiant
        $row = $result->fetch_assoc();
        $_SESSION['idAffectation'] = $row["idAffectation"];
        $_SESSION['isAlreadyLogged'] = !is_null($row["idLogement"]);
        $_SESSION['nom'] = $row["nom"];
        $_SESSION['prenom'] = $row["prenom"];
        $_SESSION['numEtudiant'] = $row["numEtudiant"];
        $_SESSION['niveau'] = $row["niveau"];
        $_SESSION['datenaissance'] = $row["datenaissance"];
        $_SESSION['lieu_naissance'] = $row["lieu_naissance"];
        $_SESSION['pavillon'] = $row["pavillon"];
        $_SESSION['chambre'] = $row["chambre"];
        $_SESSION['lit'] = $row["lit"];

        // Connexion réussie
        header("Location: profile.php"); // Rediriger vers une autre page
        exit();
    } else {
       // Étudiant non trouvé, redirection avec message d'erreur
       header("Location: ./?error=notfound");
       exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['etudiant'])) {

        // Récupération des données de session
        $idAffectation = $_POST['idAffectation'];
    // Requête SQL pour insérer dans la table `logement`
    $sql_insert = "INSERT INTO logement(idAffectation) VALUES (?)";
    $stmt_insert = $conn->prepare($sql_insert);
    $stmt_insert->bind_param("s", $idAffectation);
    $stmt_insert->execute();

    // Vérification de l'insertion
    if ($stmt_insert->affected_rows > 0) {
        // Insertion réussie, redirection vers une page de confirmation ou autre
        header("Location: index.php");
        exit();
    } else {
        // Erreur lors de l'insertion, redirection avec message d'erreur
        header("Location: profile.php?error=insert");
        exit();
    }
    $stmt->close();
    $conn->close();
    }

    // Fermer la connexion
    //$stmt->close();
    //$conn->close();
?>