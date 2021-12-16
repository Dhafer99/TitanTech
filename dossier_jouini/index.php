<?php 
    session_start();
    require('showAllQuestionsAction.php');

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />

</head>
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
                    <button class="btn btn-success" type="submit">Rechercher</button>  <a class="btn btn-success" name="asc"href="ascc.php">asc</a>         <a class="btn btn-success" name="DESC" href="DESCC.php">DESC</a>  <a class="btn btn-success" name="tr" href="index.php">FR</a> <a class="btn btn-success"name="tr" href="anglais.php">EN</a> 
                </div>

            </div>
        </form>

        <br>

        <?php 
            while($question = $getAllQuestions->fetch()){
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