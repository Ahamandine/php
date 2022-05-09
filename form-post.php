<!-- <?php

//aucune donnée envoyée
//$post = false;

// données envoyées
// $post = true;

// //aucune erreur
// $errors = [];

// // une erreur dans le champ test
// $errors = [
//     'test' => "Le champ n'est pas correctement rempli.",
// ];
// echo $errors ['test']; //accès en lecture
// $errors['test'] = "foo"; //accès en écriture

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href= "style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Form-post</h1>
                <form action="form-validate.php" method="post">
                <!-- <form action="/form-validate.php" method="post">
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control 
                        <?php if ($post && empty($errors['test'])): ?>
                            is-valid
                        <?php endif ?>
                        <?php if ($post && !empty($errors['test'])): ?>
                            is-invalid
                        <?php endif ?>
                        " type="text" name="test" value=""
                        placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champ</div>
                        <?php if ($post && empty($errors['test'])): ?>
                            <div class= "valid-feedback">
                                Le champ est valide
                            </div>
                            <?php endif ?>
                        <?php if ($post && !empty($errors['test'])): ?>
                            <div class="invalid-feedback">
                                <? $errors['test'] ?>
                            </div>
                            <?php endif ?>
                        </div> -->

                        <!-- version formulaire vierge -->
                        <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control" type="text" name="test" value=""
                        placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champ</div>
                        
                        </div>

                        <!-- version formulaire correct -->
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control is-valid" type="text" name="test" value=""
                        placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champ</div>
                        <div class= "valid-feedback">
                            Le champ est valide
                        </div>
                    </div>

                        <!-- version formulaire invalide -->

                        <div class="mb-3">
                            <label for="test" class="form-label">Test</label>
                            <input id="test" class="form-control is-invalid" type="text" name="test" value=""
                            placeholder="foo bar baz">
                            <div class="form-text">Texte d'aide pour remplir le champ</div>
                            <div class= "valid-feedback">
                                Le champ est valide
                            </div>
                            <div class="invalid-feedback">
                                Le champ n'est pas correctement rempli
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <input class="form-control" type="text" name="login" id="login" placeholder="votre login" required>
                        </div>

                        <div class="mb-3">
                            <input class="form-control" type="password" name="password" id="password" placeholder="votre mot de passe" required>
                        </div>

                        <div class="mb-3">
                            <p>Votre fruit préféré<p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="fruit" id="fruit_1" value="ananas">
                                <label  class="form-check-label" for="fruit_1">Ananas</label>
                        </div>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="fruit" id="fruit_2" value="banane">
                                <label  class="form-check-label" for="fruit_2">Banane</label>
                        </div>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="fruit" id="fruit_3" value="cerise">
                                <label  class="form-check-label" for="fruit_3">Cerise</label>
                        </div>
                        </div>

                        <div class="mb-3">
                            <p>Vos plats préférés<p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="plat[]" id="plat_1" value="ramen">
                                    <label class="form-check-label" for="plat_1">Ramen</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="plat[]" id="plat_2" value="moules frites">
                                    <label class="form-check-label" for="plat_2">Moules frites</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="plat[]" id="plat_3" value="burger">
                                    <label class="form-check-label" for="plat_3">Burger</label>
                                </div>
                        </div>

                        <div class="mb-3">
                            <p>Votre film préféré</p>
                            <!-- l'attribut size permet de définir combien d'élément doivent être affiché en même temps
                            <select name="film" id="film"> -->
                            <select name="film" id="film">
                                <option value="Les Temps Modernes">Les Temps Modernes</option>
                                <option value="Le roi et l'oiseau">Le roi et l'oiseau</option>
                                <option value="Le miraculé">Le Miraculé</option>
                            </select>
                            <!-- l'attribut "selected" montre l'élément sélectionnée en premier -->
                            <!-- <option value="" selected>...</option> -->
                        </div>

                        <div class="mb-3">
                            <p>Vos chanteurs préférés<p>
                            <select name="singers/musician[]" id="singers" multiple>
                                <option id="singers_1" value="dalida">Dalida</option>
                                <option id="singers_2" value="grover washington">Grover Washington</option>
                                <option id="singers_3" value="paul simon">Paul Simon</option>
                            </select>
                        </div>

                        <div class="custom-checkbox mb-3">
                            <p>Vos plats préférés<p>
                                <div class="custom-checkbox">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="plat_alt[]" id="plat_alt_1" value="ramen">
                                        <label class="form-check-label" for="plat_1">Ramen</label>
                                    </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="plat_alt[]" id="plat_alt_2" value="moules frites">
                                        <label class="form-check-label" for="plat_2">Moules frites</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="plat_alt[]" id="plat_alt_3" value="burger">
                                        <label class="form-check-label" for="plat_3">Burger</label>
                                    </div>
                                </div>
                        </div>
                    
                    <div class="mb-3">
                        <button class="btn btn-primary"  type="submit">valider</button>
                    </div>
                <!--mettre le même mot pour id dans input et for dans label permet de relier des fonctions
                    ex quand on clique sur le mot test à coté du formulaire une barre apparait dans le champ d'écriture pour 
                    pouvoir écrire-->
                        </form>
        </div>
    </div>
    </div>
</body>
</html>