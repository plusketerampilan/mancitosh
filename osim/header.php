<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= isset($title) ? $title . ' - ' : '' ?>Mancitosh</title>
	<meta name="description" content="<?= $description ?? 'Laman resmi Mancitosh MAN 1 Ponorogo' ?>">

	<!-- assets -->
	<link rel="stylesheet" href="<?= $url ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $url ?>/fonts/bootstrap-icons/bootstrap-icons.min.css">
	<link rel="stylesheet" href="<?= $url ?>/css/style.css">
</head>
<body>
	<div class="container">
		<div class="row align-items-center py-3">
			<div class="col-6 col-md-3 col-lg-2 order-1">
				<a href="<?= $url ?>" class="fs-5 link-underline link-underline-opacity-0 link-body-emphasis">MANCITOSH</a>
			</div>
			<div class="col-12 col-md-6 col-lg-8 order-3 order-md-2">
				<ul class="nav justify-content-center">
					<li class="nav-item">
						<a href="<?= $url ?>/vlog.php" class="nav-link link-body-emphasis border-dark">VLOG</a>
					</li>
					<li class="nav-item">
						<a href="<?= $url ?>/poster.php" class="nav-link link-body-emphasis border-dark">DESAIN POSTER</a>
					</li>
					<li class="nav-item">
						<a href="<?= $url ?>/mtq.php" class="nav-link link-body-emphasis border-dark">MTQ</a>
					</li>
					<li class="nav-item">
						<a href="<?= $url ?>/puisi-kandungan-alquran.php" class="nav-link link-body-emphasis border-dark">PUISI KANDUNGAN AL-QUR'AN</a>
					</li>
				</ul>
			</div>
			<div class="col-6 col-md-3 col-lg-2 order-2 order-md-3 text-end">
				<a href="#" class="btn btn-success">FORM</a>
			</div>
		</div>
	</div>