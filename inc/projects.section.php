<?php 
	require_once 'models/project.class.php';

	$projects[] = new Project("Lucky Bag", "img/LuckyBag Logo.png", "http://www.luckybag.fr"); 
	$projects[] = new Project("Superland Template", "img/SuperLand Logo Bg.png", "superland/"); 
	$projects[] = new Project("Mensquare Videos Hub", "img/Mensquare.png", "http://www.mensquare.com/videos/"); 
	$projects[] = new Project("Love Food Love Design", "img/logo-lovefood-lovedesign.png", "http://www.lovefood-lovedesign.com/"); 
	$projects[] = new Project("Lightsearch", "img/Lightsearch logo.png", "", true); 
	$projects[] = new Project("Filecoder", "img/Filecoder Logo.png", "", true);
?>

<section class="ss-style-doublediagonal-2" id="projects">
	<div class="container">
		<h2 class="text-center"><?php echo tr("projects"); ?></h2>
		<div class="row">
		<?php foreach ($projects as $key => $project) {
			?>
				<a <?php if ($project->link): ?> href="<?php echo $project->link; ?>"<?php endif ?> class="col-sm-6 col-md-3 project <?php if ($project->private): ?>project-disabled<?php endif ?> text-center">
					<div class="logo">
						<?php if ($project->private): ?>
							<div class="private"><?php echo tr("privateProject"); ?></div>
						<?php endif ?>
						<img src="<?php echo $project->img; ?>" alt="<?php echo $project->title; ?> Logo">
					</div>
					<h3><?php echo $project->title; ?></h3>
				</a>
			<?php
		} ?>
			<a class="col-sm-3 project project-disabled empty-project text-center">
				<div class="logo">
					<div class="school-project"><?php echo tr("yourCompanyHere"); ?></div>
				</div>
				<h3><?php echo tr("workInProgress"); ?></h3>
			</a>
		</div>
	</div>
</section>