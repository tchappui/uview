<?php $extends('base'); ?>

<?php $block('content'); ?>
<h1><?php echo $title ?></h1>

<form method="post" action="#">
	<p>
		<label for="email">Adresse e-mail</label>
		<input id="email" type="email" name="email">
	</p>
	<p>
		<label for="password">Mot de passe</label>
		<input id="password" type="password" name="password">
	</p>
	<p>
		<input type="submit" value="Envoyer">
	</p>
</form>
<?php $endblock(); ?>




