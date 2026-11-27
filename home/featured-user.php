<?php
// $bestSeller is set by the loop in index.php
$image          = htmlspecialchars($featured_user['image']);
$rating         = number_format($featured_user['rating'], 1);
$notes_category = htmlspecialchars($featured_user['category']);
$username       = htmlspecialchars($featured_user['username']);
?>



<div class="user-wrapper">
    <div class="featured-user">
        <div class="UserPFP">
            <img src=<?= $image ?> alt=<?= $alt ?>>
        </div>
        <div class="user-stats">
            <p><b>Username:</b> <?= $username   ?></p>
            <p><b>Rating:</b> <?= $rating ?></p>
            <p><b>Notes Category:</b> <?= $notes_category ?></p>
            <button type="button" class="follow-button" aria-label="follow">
                Follow
            </button>
        </div>
    </div>
</div>