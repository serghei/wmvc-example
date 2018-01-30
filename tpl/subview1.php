<select id="culori">
	<?php foreach($culori as $culoare_val => $culoare_text): ?>
		<option value="<?= e::str($culoare_val) ?>"><?= e::str($culoare_text) ?></option>
	<?php endforeach ?>
</select>
