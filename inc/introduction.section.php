<section class="background-section ss-style-doublediagonal">
	<div class="container">
		<a href=""><h1>Thomas Huang<br><span>Web Developer</span></h1></a>
		<ul class="nav nav-pills navbar-right">
			<li><a href="#timeline"><?php echo tr("timeline"); ?></a></li>
			<li><a href="#projects"><?php echo tr("projects"); ?></a></li>
			<li><a href="#contact"><?php echo tr("contact"); ?></a></li>
			<?php if ($_SESSION["locale"] == "en"): ?>
				<li><a href="?locale=fr" class="flag"><img src="img/France.png" alt="France flag"></a></li>
			<?php else: ?>
				<li><a href="?locale=en" class="flag"><img src="img/USA.png" alt="USA flag"></a></li>
			<?php endif ?>
			
		</ul>
		<p>
			<?php echo tr("description"); ?>
		</p>
		<a href="#hire" class="hire text-uppercase"><?php echo tr("available"); ?></a>
	</div>
</section>