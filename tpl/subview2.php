<select id="cifre">
	<?php foreach($cifre as $cifra_val => $cifra_text): ?>
		<option value="<?= e::str($cifra_val) ?>"><?= e::str($cifra_text) ?></option>
	<?php endforeach ?>
</select>
