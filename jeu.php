<?php
$parfums = [
    'fraise' => 4,
    'chocolat' => 5,
    'vanille' => 3
];

$cornets = [
    'pot' => 2,
    'cornet' => 3
];

$supplements = [
    'pepite de chocolat' => 1,
    'chantille' => 0.5
];


$total = 0;

if (isset($_GET['parfum'])) {
    $a = $_GET['parfum'];
    foreach ($a as $val) {
        $total += (float)$val;
    }
}
if (isset($_GET['cornet'])) {
    $b = $_GET['cornet'];

    foreach ($b as $val) {
        $total += (float)$val;
    }
}
if (isset($_GET['supplement'])) {
    $c = $_GET['supplement'];
    foreach ($c as $val) {
        $total += (float)$val;
    }
}

?>

<pre><?php var_dump($_GET) ?></pre>

<?php require './header.php' ?>

<div class="container">
    <p>
        le total fait <?= $total ?>
    </p>
    <form action="jeu.php" method="GET">

        <div class=" form-control">
            <p>Parfum</p>
            <?php foreach ($parfums as $key => $val) : ?>
                <label >
                    <input type="checkbox" name="parfum[]" value="<?= $val ?>"> <?= $key ?>
                </label>
                <br>
            <?php endforeach ?>
        </div>
        <div class=" form-control">
            <p>Cornet</p>
            <?php foreach ($cornets as $key => $val) : ?>
                <input type="checkbox" name="cornet[]" value="<?= $val ?>"> <?= $key ?><br>
            <?php endforeach ?>
        </div>
        <div class=" form-control">
            <p>supplements</p>
            <?php foreach ($supplements as $key => $val) : ?>
                <input type="checkbox" name="supplement[]" value="<?= $val ?>"> <?= $key ?><br>
            <?php endforeach ?>
        </div>

        <button type="submit" class=" btn btn-primary">Envoyer</button>
    </form>
</div>

<?php require './footer.php' ?>