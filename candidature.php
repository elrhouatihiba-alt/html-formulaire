<?php
$prenom    = '';
$nom       = '';
$email     = '';
$age       = '';
$filiere   = '';
$motivation = '';
$erreurs   = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $prenom     = $_POST['prenom']     ?? '';
    $nom        = $_POST['nom']        ?? '';
    $email      = $_POST['email']      ?? '';
    $age        = $_POST['age']        ?? '';
    $filiere    = $_POST['filiere']    ?? '';
    $motivation = $_POST['motivation'] ?? '';

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && empty($erreurs)):
    // confirmation
    <div class="container">
            <form action="condidature.php" method="POST">
            <label for="">nom</label>
            <input type="text" name="nom" placeholder="Votre nom" value=<?php echo $nom;?>>
            <label for="">prenom</label>
            <input type="text" name="prenom" placeholder="Votre prenom" value=<?php echo $prenom;?>>
            <label for="">adresse email</label>
            <input type="email" name="email" placeholder="exemple@mail.com" value=<?php echo $email;?>>
            <label for="">age</label>
            <input type="number" name="age" value=<?php echo $age;?> >
            <label for="">filière:</label>
            <select name="filiere" id="">
                <option value="">--Choisir--</option>
                <option value="Informatique"  >Informatique</option>
                <option value="Electronique" >Electronique</option>
                <option value="Mecanique" >Mecanique</option>
                <option value="Mathematiques" >Mathematiques</option>
            </select>
            <label for="" >motivation</label>
            <textarea name="motivation" rows="6" value=<?php echo $motivation;?>></textarea>
            <label for="">J'ai  lu et accepté le réglement</label>
            <input type="checkbox">
        </form>

    </div>
    
</body>
</html>
