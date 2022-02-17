<!DOCTYPE html>
<html>
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {

        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        display: flex;
        align-items: center;
        flex-direction: column;

    }
</style>

<body>

    <h3>Inscription </h3>

    <div>
        <form action="" method="POST">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="">

            <label for="prenom">Prenom</label>
            <input type="text" id="prenom" name="prenom" placeholder="">

            <label for="login">Login</label>
            <input type="text" id="login" name="login" placeholder="">
            <label for="role">Role</label>
            <select id="role" name="role">
                <option value=""></option>
                <option value="admin">Admin</option>
                <option value="visiteur">Visiteur</option>
            </select>
            <label for="pwd">Password</label>
            <input type="text" id="pwd" name="pwd" placeholder="">
            <label for="cpwd">Confirmez Password</label>
            <input type="text" id="cpwd" name="cpwd" placeholder="">
            <input type="submit" value="Inscrire" name="ok">
        </form>
    </div>

</body>

</html>



<?php

if (isset($_POST['ok'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];
    $role = $_POST['role'];

    $fichier = "infos.json";
    $donnes = file_get_contents($fichier);
    $objet = json_decode($donnes);
    $tab = [];
    $tab['nom'] = $nom;
    $tab['prenom'] = $prenom;
    $tab['login'] = $login;
    $tab['pwd'] = $pwd;
    $tab['role'] = $role;
    $objet[] = $tab;
    $objet = json_encode($objet, JSON_PRETTY_PRINT);
    file_put_contents($fichier, $objet);
}

?>