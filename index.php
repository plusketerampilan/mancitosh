<?php
/**
 * Data halaman
 */
$title = 'Beranda';

/**
 * Layout
 */
require_once './views/header.php';
require_once './views/navbar.php';
require_once './views/home-hero.php';
require_once './views/home-lomba.php';

$sections = [
    'Hero section: about, CTA',
    'Main events',
    'Reward',
    'Timeline: registration, TM, main event',
    'Q&A',
    'Contact Person: Social media link',
    'Footer: credits, copyrights'
];

?>

<div class="container d-flex flex-column gap-5 my-5">
    <?php foreach ($sections as $section) : ?>
        <div class="card text-bg-light">
            <div class="card-body">
                <p class="card-text text-center"><?= $section ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php
require_once './views/footer.php';