<?php 
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body>
    <?php include 'navbar.php'; ?>
    <br><br>

    <div class="container">
    
        <form method="GET">

            <div class="form-group row">

                <div class="col-8">
                    <input type="search" name="search" class="form-control">
                </div>
                <div class="col-4">
                    <button class="btn btn-success" type="submit">Rechercher</button>  <a name="asc"href="asc.php">asc</a>         <a name="DESC" href="DESC.php">DESC</a>  
                </div>

            </div>
        </form>

        <br>

        <?php 
        $getAllQuestions = $bdd->query('SELECT id, id_auteur, titre, description, pseudo_auteur, date_publication FROM questions ORDER BY id ASC LIMIT 0,20');
        while($question=mysqli_fetch_assoc($getAllQuestions))
        {
                ?>
                <div class="card">
                    <div class="card-header">
                        <a href="article.php?id=<?= $question['id']; ?>">
                            <?= $question['titre']; ?>
                        </a>
                    </div>
                    <div class="card-body">
                        <?= $question['description']; ?>
                    </div>
                    <div class="card-footer">
                        Publié par <a href="profile.php?id=<?= $question['id_auteur']; ?>"><?= $question['pseudo_auteur']; ?></a> le <?= $question['date_publication']; ?>
                    </div>
                </div>
                <br>
                <?php
            }
        ?>

    </div>

</body>
</html>