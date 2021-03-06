<header>
	<div class="mod-logo">
		<a href="/"> <img src="assets/img/takenode_logo_color.svg" alt="TakeNode Logo" height="23"></a>
	</div>
	<nav class="mod-nav">
		<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
			<a href="info.php" class="btn btn-light <?php if ($activepage === 'info') { ?>active<?php } ?>">
				<i class="fal fa-search d-md-none"></i>
				<span class="d-none d-md-block">Search</span>
			</a>
			<a href="info.php" class="btn btn-light <?php if ($activepage === 'info') { ?>active<?php } ?>">
				<i class="fal fa-info-circle d-md-none"></i>
				<span class="d-none d-md-block">Info</span>
			</a>
			<a href="spreadtheword.php" class="btn btn-light <?php if ($activepage === 'spreadtheword') { ?>active<?php } ?>">
				<i class="fal fa-share d-md-none"></i>
				<span class="d-none d-md-block">Spread the Word</span>
			</a>
			
			<div class="btn-group" role="group">
				<button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
				NL
				</button>
				<ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
					<li><a class="dropdown-item" href="#">NL</a></li>
					<li><a class="dropdown-item" href="#">EN</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>