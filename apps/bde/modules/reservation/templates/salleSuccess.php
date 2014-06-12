<?php include_partial("insideMenu",array("param" => $param)) ?>

<h4><?php echo link_to ('Nouvelle salle', 'reservation_salle_new') ?></h4>

<h3>Liste des salles</h3>

<?php foreach ($salles as $salle): ?>

	<p>
		<span style="margin-right:3em;"><?php echo ucfirst ($salle->getName()) ?></span>
		<span style="margin-right:3em;"><?php echo link_to ('Edit', 'reservation_salle_update', array ('id' => $salle->getId())) ?></span>
		<span style="margin-right:3em;"><?php echo link_to ('Delete', 'reservation_salle_delete', array ('id' => $salle->getId())) ?></span>
	</p>

<?php endforeach; ?>

