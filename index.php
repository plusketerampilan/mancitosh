<?php
/**
 * Data halaman
 */
$title = 'Beranda';

$lomba_lomba = [
    'VLOG',
    'POSTER',
    'MTQ',
    'PUISI KANDUNGAN ALQURAN',
];

/**
 * Layout
 */
require_once './osim/header.php';
require_once './osim/hero.php';
require_once './osim/lomba.php';
?>

<div class="container my-5">
    <img src="holder.js/1116x628?text=POSTER MANCITOSH" class="img-fluid">
</div>

<?php
require_once './osim/lomba-cards.php';
require_once './osim/timeline.php';
require_once './osim/cp.php';
require_once './osim/footer.php';