<?php
// $bestSeller is set by the loop in index.php
$title    = htmlspecialchars($book['title']);
$author   = htmlspecialchars($book['author']);
$image    = htmlspecialchars($book['image']);
$rating   = number_format($book['rating'], 1);
$price    = '$' . number_format($book['price'], 2);
$oldPrice = isset($book['old_price']) ? '$' . number_format($book['old_price'], 2) : null;
?>
<div class="card-wrapper" data-book-id="<?= (int)$book['id'] ?>">
    <div class="card-cover">
        <button class="wish btn-primary" type="button" aria-label="Add to wishlist">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="14" width="14" version="1.1" id="Capa_1" viewBox="0 0 471.701 471.701" xml:space="preserve">
                <?php include 'heart.php' ?>
            </svg>
            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16" fill="none">
                <path d="M1.24264 8.24264L8 15L14.7574 8.24264C15.553 7.44699 16 6.36786 16 5.24264V5.05234C16 2.8143 14.1857 1 11.9477 1C10.7166 1 9.55233 1.55959 8.78331 2.52086L8 3.5L7.21669 2.52086C6.44767 1.55959 5.28338 1 4.05234 1C1.8143 1 0 2.8143 0 5.05234V5.24264C0 6.36786 0.44699 7.44699 1.24264 8.24264Z" fill="#000000"/>
            </svg> -->
        </button>
        <img src="<?= $image ?>" alt="<?= $title ?>">
    </div>
    <div class="card-body">
        <div class="row">
            <h3 class="title"><?= $title ?></h3>
            <p class="rating">
                <?= $rating ?>
                <svg xmlns="http://www.w3.org/2000/svg" height="14" width="14"
                     viewBox="0 0 508.068 508.068" style="margin-bottom: 3px;">
                    <path style="fill:#FFC52F;" 
                                    d=" M111.713,322.434c0.4,0.4,0.8,1.2,0.4,1.6l-20.4,120.8c-2.8,16.4-0.4,30,6.4,38.4  
                                        c4.8,5.6,11.6,8.4,20,8.4c8,0,17.6-2.8,27.6-8l108.4-57.2c0.4-0.4,1.2-0.4,2,0l108.4,56.8c10,5.2,19.2,8,27.2,8l0,0  
                                        c8.4,0,15.2-2.8,20-8.4c6.8-8,9.2-21.6,6-38.4l-21.2-120.8c0-0.8,0-1.2,0.4-1.6l87.6-85.6c14.4-14,20.4-28.4,16.4-40  
                                        c-4-12-17.2-20-36.8-22.8l-121.2-17.2c-0.8,0-1.2-0.4-1.6-1.2l-54.4-109.6c-8.8-18-20.8-28-33.2-28s-24,10-33.2,28l-54,110  
                                        c-0.4,0.4-0.8,0.8-1.6,1.2l-121.2,18c-20,2.8-32.8,11.2-36.8,22.8c-4,11.6,2,25.6,16,39.6h0.4c0.4,0,0.4,0.4,0.8,0.8  
                                        L111.713,322.434z"/>
                </svg>
            </p>
            <p class="author"><?= $author ?></p>
            <div class="row-bottom">
                <p class="new-price"><b><?= $price ?></b></p>
                <?php if ($oldPrice): ?>
                    <p class="old-price"><?= $oldPrice ?></p>
                <?php endif; ?>
                <div>
                    <button class="cart" type="button" aria-label="Add to cart">
                        <svg xmlns="http://www.w3.org/2000/svg" id="cart-button-empty"
                                                viewBox="10 10 20 20" width="23" height="23" fill="none">
                                            <path d="M17.0833 21.875C17.0833 23.475 18.3999 24.7917 19.9999 24.7917C21.5999 24.7917 22.9166 23.475 22.9166 21.875" stroke="var(--icon-1, #3B61EB)" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" fill="none"/><path d="M17.3416 11.6665L14.325 14.6915" stroke="var(--icon-2, #3B61EB)" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                            <path d="M22.6582 11.6665L25.6749 14.6915" stroke="var(--icon-3, #3B61EB)" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                                            <path d="M11.6665 16.5417C11.6665 15 12.4915 14.875 13.5165 14.875H26.4832C27.5082 14.875 28.3332 15 28.3332 16.5417C28.3332 18.3333 27.5082 18.2083 26.4832 18.2083H13.5165C12.4915 18.2083 11.6665 18.3333 11.6665 16.5417Z" stroke="var(--icon-4, #3B61EB)" stroke-width="1.5" fill="none"/><path d="M12.9167 18.3335L14.0917 25.5335C14.3584 27.1502 15.0001 28.3335 17.3834 28.3335H22.4084C25.0001 28.3335 25.3834 27.2002 25.6834 25.6335L27.0834 18.3335" stroke="var(--icon-5, #3B61EB)" stroke-width="1.5" stroke-linecap="round" fill="none"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>