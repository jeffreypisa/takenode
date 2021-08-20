
<section class="mod-tool min-vh-100 vw-100">
	<div class="row g-0">
		<div class="col-auto">
			<div class="tool min-vh-100 bg-white">
				<a class="closetool js-closetool"><i class="fal fa-times"></i></a>
				<div class="accordion" id="accordionTool">
					<div class="accordion-item">
						<div class="accordion-header" id="headingOne">
							<button class="accordion-button disabled" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<h5 class="mb-0"> 1. Je bestandtype is herkend, klopt dit? </h5>
							</button>
							<button type="button" class="btn-information" data-bs-toggle="modal" data-bs-target="#modal_bestandstype">
								<i class="fal fa-info-circle"></i>
							</button>
						</div>
						<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionTool">
							<div class="accordion-body">
								<?php include 'parts/tool/step1.php' ?>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<div class="accordion-header" id="headingTwo">
						  <button class="accordion-button collapsed disabled" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							<h5 class="mb-0"> 2. Stuur je persoonsgegevens mee? </h5>
						  </button>
						  <button type="button" class="btn-information" data-bs-toggle="modal" data-bs-target="#modal_persoonsgegevens">
							  <i class="fal fa-info-circle"></i>
						  </button>
						</div>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionTool">
							<div class="accordion-body">
								<?php include 'parts/tool/step2.php' ?>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<div class="accordion-header" id="headingThree">
						  <button class="accordion-button collapsed disabled" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							<h5 class="mb-0"> 3. Wat mag iemand met jouw werk? </h5>
						  </button>
						  <button type="button" class="btn-information" data-bs-toggle="modal" data-bs-target="#modal_toestemming">
								<i class="fal fa-info-circle"></i>
							</button>
						</div>
						<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionTool">
							<div class="accordion-body">
								<?php include 'parts/tool/step3.php' ?>
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<div class="accordion-header" id="headingThree">
						  <button class="accordion-button collapsed disabled" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							<h5 class="mb-0"> 4. Mijn #TakeNode </h5>
						  </button>
						 	 <button type="button" class="btn-information" data-bs-toggle="modal" data-bs-target="#modal_mijntakenode">
							  <i class="fal fa-info-circle"></i>
							</button>
						</div>
						<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionTool">
							<div class="accordion-body">
								<?php include 'parts/tool/step4.php' ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col">
			<?php include 'parts/draganddrop.php' ?>
		</div>
	</div>
</section>