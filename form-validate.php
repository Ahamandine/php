<?php

echo '<pre>';
var_dump($_POST);
echo '</pre>';

echo $_POST['field1'];
echo '<br>';
echo gettype($_POST['field1']);
echo '<br>';

echo $_POST['field2'];
echo '<br>';
echo gettype($_POST['field2']);
echo '<br>';

//code indenté mais pas obligatoire en php. Préférable par convention.
foreach ($_POST as $key => $value) {
    echo "{$key}: {$value}";
    echo '<br>';

}

// code python en dessous, pour comparaison, contrairement à PHP la variable est nommé après ce qu'on recherche
// for key, value in post.items():
//     print(f"{key}: {value}")
//     print('<br>')