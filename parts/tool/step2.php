<!--
<div class="btn-group btn-group-vertical w-100" role="group" aria-label="Persoonsgegevens">
	<input type="radio" class="btn-check" name="persoonsgegevens" id="persoonsgegevens1" autocomplete="off" checked>
	<label class="btn btn-outline-dark" for="persoonsgegevens1">Anoniem</label>
	
	<input type="radio" class="btn-check" name="persoonsgegevens" id="persoonsgegevens2" autocomplete="off">
	<label class="btn btn-outline-dark" for="persoonsgegevens2">Naam</label>
</div>
<div class="clearfix"></div>
<br>
<input type="radio" class="btn-check" name="persoonsgegevens" id="persoonsgegevens3" autocomplete="off">
<label class="btn btn-outline-dark w-100" for="persoonsgegevens3">Verified by IRMA</label>
-->

<div class="multi-input">
	<div class="form-check">
		<input class="form-check-input" type="radio" name="persoonsgegevens" id="persoonsgegevens1" value="anoniem">
		<label class="form-check-label" for="persoonsgegevens1">
			Anoniem
		</label>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="persoonsgegevens" id="persoonsgegevens2" value="mijn">
		<label class="form-check-label" for="persoonsgegevens2">
			Naam
		</label>
	</div>
	<br>
	<div class="form-check">
		<input class="form-check-input" type="radio" name="persoonsgegevens" id="persoonsgegevens3" value="door IRMA geverifieerde">
		<label class="form-check-label" for="persoonsgegevens3">
			Geverifieerd door IRMA
		</label>
	</div>
</div>

<div id="velden_anoniem" class="d-none">
	<div class="clearfix"></div>
	<br>
	<div class="mb-3">
		<label for="naam" class="form-label">Pseudoniem</label>
		<input type="text" class="form-control" id="pseudoniem" placeholder="Pseudoniem">
	</div>
</div>

<div id="velden_naam" class="d-none">
	<div class="clearfix"></div>
	<br>
	<div class="mb-3">
		<label for="naam" class="form-label">Naam</label>
		<input type="text" class="form-control is-invalid" id="naam" placeholder="Naam">
		<div id="validationServer03Feedback" class="invalid-feedback">
			Dit veld is verplicht
		</div>
	</div>
</div>
	
<div id="velden_algemeen" class="d-none">
	<div class="mb-3">
		<label for="contact" class="form-label">Je kunt me contacteren op (optioneel)</label>
		<input type="email" class="form-control" id="contact" placeholder="Email">

		<div class="form-text"> Let op deze gegevens zijn online zichtbaar </div>
	</div>
</div>

<div class="text-center">
	<br>
	<button id="step2_button_next" class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" disabled>
		Ga verder
	</button>
</div>