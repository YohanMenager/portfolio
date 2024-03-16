<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Portfolio</title>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

</head>
<body>
	<script src="script.js"></script>

	

	<div class="header">
		<h1 class="logo"><a href="index.html">Yohan Ménager</a></h1>
      <ul class="main-nav">
          <li><a href="index.html">Accueil</a></li>
          <li><a href="#">À propos</a></li>
          <li><a href="veille.html">Veille technologique</a></li>
          <li><a href="index.html#cv">CV</a></li>
          <li><a href="index.html#formulaire">Contact</a></li>
      </ul>
	</div> 

	 



	<div id="corps">
	
		<header class="full-width">
			<h1 class="white-text center"><span class="title">M</span><span class="title">o</span><span class="title">n</span> <span class="title">P</span><span class="title">o</span><span class="title">r</span><span class="title">t</span><span class="title">f</span><span class="title">o</span><span class="title">l</span><span class="title">i</span><span class="title">o</span></h1>
		</header>


		<div class="flex section pad-sides full-width pad-up-down" id="moi">
			<div>
				<h2>Yohan Ménager</h2>
				<p>20 ans</p>
				<p>étudiant en <a href="https://www.lyc-honore-d-estienne-d-orves.ac-nice.fr/bts-service-informatique-aux-organisations-sio/">BTS SIO</a></p>
				<p><a href="https://www.lyc-honore-d-estienne-d-orves.ac-nice.fr/">au lycée Honoré d'Estiennes d'Orves</a></p>
			</div>
			<div class="pad-sides">
				<img src="images/Photo.jpg" alt="photo">
			</div>
			
		</div>

		<div class="flex section big-pad-sides full-width pad-up-down" id="veille">
			<div>
				<img src="images/exosquelette.jpg" alt="exosquelette">
			</div>
			<div class="big-pad-sides">
				<h2>Veille technologique sur les exosquelettes</h2>
				<p>J'ai réalisé une veille technologique sur l'utilisation  des exosquelettes, que ce soit dans un but médical, militaire ou industriel.</p>
				<a href="veille.html">en voir plus →</a>
			</div>
		</div>
		
		
		<div class="pad-up-down">
			<embed id="cv" src="documents/CV.pdf" width=100% height=1000px type='application/pdf'/>
		</div>
		
		
		
		<div class="container">
			<div class="text">
			   Me contacter
			</div>
			<form action="#" id="formulaire">
			   <div class="form-row">
				  <div class="input-data">
					 <input type="text" required>
					 <div class="underline"></div>
					 <label for="">Prénom</label>
				  </div>
				  <div class="input-data">
					 <input type="text" required>
					 <div class="underline"></div>
					 <label for="">Nom</label>
				  </div>
			   </div>
			   <div class="form-row">
				  <div class="input-data">
					 <input type="text" required>
					 <div class="underline"></div>
					 <label for="">Adresse mail</label>
				  </div>
			   </div>
			   <div class="form-row">
				<div class="input-data textarea">
					<textarea rows="8" cols="80" required></textarea>
					<br />
					<div class="underline"></div>
					<label for="">Votre message</label>
					<br />
					</div>
				</div>
				<div class="form-row submit-btn">
					<div class="input-data">
					<div class="inner"></div>
					<input type="submit" value="Valider">
					</div>
				</div>
			</form>
			</div>

	</div>
</body>
</html>