<?php
// $img is the current item from the foreach in home.php, $i is its index
$src = htmlspecialchars($img['src']);
$alt = htmlspecialchars($img['alt']);
?>
<div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
    <img class="d-block w-100" src="<?= $src ?>" alt="<?= $alt ?>">
</div>