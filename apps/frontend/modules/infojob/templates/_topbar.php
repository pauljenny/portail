<!-- Menu du haut commun au service infojob TODO, voir exemple dans apps/frontend/modules/assos/templates/_topbar.php -->
<div class="well">
<div class="row-fluid">
  <div class="span4" style="height:150px;">
  	<h1><center>Etudiants</center>
  	</h1>
  	<center><span>
  	<img src="/images/icones/job.jpg" style="witdh:90px; height:70px">
  	</span>
  	</center>
  	
  	 <br/>
  	<center><a href="<?php echo url_for('infojob/offres') ?>" class="btn-vert">Voir les offres</a>
  	</center>
  </div>
  
  <div class="span4" style="height:100px">
  <h1><center>Entreprise et particuliers</center></h1>
 	<center><span>
 
 	 <img src="/images/icones/entreprise.jpg" style="line-height:normal;witdh:90px; height:70px">
  	</span>
  	</center>
  	  <br/>
  	
  	 	<center><a href="#" class="btn-rouge">Déposer une offre</a></center>
  </div>
  
  <div class="span4" style="height:100px">
  	<h1><center>Etudiants</center></h1>
	 <center><span><img src="/images/icones/etudiant.jpg" style="witdh:90px; height:70px">
  	 </span>
  	 </center>
  	 <br/>
  	 <center><a href="<?php echo url_for('infojob/monprofil') ?>" class="btn-bleue">Gérer mon compte</a>
  	</center>
  </div>
</div>
</div>