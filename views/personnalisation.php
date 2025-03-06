<?php include '../back/personnalisation.php'; ?>

<link rel="icon" type="image/x-icon" href="/assets/petitlogo.png">
<link rel="shortcut icon" href="../assets/petitlogo.png" type="image/x-icon">
<link rel="icon" href="../assets/petitlogo.png">
<link rel="stylesheet" href="../styles/header.css">
<link rel="stylesheet" href="./styles/main.css">
<link rel="stylesheet" href="../styles/personnalisation.css">
<header style="position: fixed; top: 0; left: 0; right: 0; z-index: 999;">
    <?php include './navbar.php' ?>
</header><br><br><br><br><br><br>
<!-- Méthode POST d'ajout -->
<form action="../back/personnalisation.php" method="post">
    <label>Ajouter</label><br>

    <select name="Categorie">

    <?php foreach ($cat as $categorie): ?>
        <option value="<?php echo $categorie["idCat"] ?>"><?php echo ($categorie["nom"])?></option>
    <?php endforeach ?>
    </select>
    <input type="text" id="nom" name="nom" placeholder="nom">
    <input type="text" id="ingredients" name="ingredients" placeholder="ingredient">
    <input type="text" id="prix" name="prix" placeholder="prix">
    

    <input name="ajouter" type="submit">
</form>
<?php foreach ($cat as $categorie): ?>
<br>
<br>
<br>
<table>

    <caption><?php echo ($categorie["nom"])?></caption>

    <colgroup>

        <col style="width:200px">

        <col>

        <col>

    </colgroup>

    <tr>
        <th>Nom</th>
        <th>Ingrédient</th>
        <th>Prix</th>
    </tr>
    <?php foreach ($row as $platsss): 
        if ($platsss["idCat"] == $categorie["idCat"]) :?>
    <tr>
        <td><?php echo ($platsss["nom"])?></td>
        <td><?php echo ($platsss["ingredients"])?></td>
        <td><?php echo ($platsss["prix"])?> €</td>
        <td>
            <form action="../back/personnalisation.php" method="post">
            <label>Modifier</label><br>
            <input type="hidden" name="idPlat" value="<?php echo $platsss['idPlat']; ?>">
            <input type="text" id="nom" name="nom" placeholder="<?php echo ($platsss['nom']); ?>" value="<?php echo ($platsss['nom']); ?>">
            <input type="text" id="ingredients" name="ingredients" placeholder="<?php echo ($platsss['ingredients']); ?>" value="<?php echo ($platsss['ingredients']); ?>">
            <input type="text" id="prix" name="prix" placeholder="<?php echo $platsss['prix']; ?>" value="<?php echo $platsss['prix']; ?>">

            <input name="modifier" type="submit">
            </form>
        </td>

        <td>
            <form action="../back/personnalisation.php" method="post" name="supprimer">
                <input type="hidden" name="idplats" value="<?php echo $platsss['idPlat']; ?>">
                <button type="submit" name="supprimer">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endif ?>
    <?php endforeach ?>



    <?php endforeach ?>

</table>