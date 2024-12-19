<?php include "inc/head.inc.php"; ?>
<title>Portfolio</title>
</head>
<body>
    <div class="container">
     <div class="rectangle"></div>
     
       <?php require "inc/nav.inc.php"; ?>
     
         <div class="trait-horizontal1"></div>
        <main>
          <div class="logo">
            <img src="asset/image/logo.png" alt="">
          </div>
           <div class="para">
              <h2><span class="salut">Salut!</span>
              <span class="para_mini">Je m'appelle Gaël Pembele, je suis un apprenti développeur, passioné par la technologie et le design, c'est pourquoi j'ai choisi de combiner ces deux univers ensemble.</span></h2>
          </div>  
          <div id="projet-menu">
               <h2 class="titre-projet">[Pro-jects]<span class="petit-numero">(001)<span></h2>
           
          </div>
          <hr/>
          <div id="about-menu">
               <h2 class="titre-about">[Ab-out]<span class="petit-numero">(002)<span></h2>
               

               <p class="mini_para1">
               1/ Tant qu’étudiant en première année de développement web àDigital Campus Paris. Passionné par lefront-end et le design, j’apprécie l’aspect créatif du développement web. Souhaitant devenir un développeur complet, j’explore également le back-end.
               </p>
               <p class="mini_para2">
               2/ En dehors du code, je m’intéresse à la photographie, notamment la mode et la street photography. Ce portfolio met en avant mes réalisations.

               </p>
          </div>
          <hr/>
          <?php require "contact.php"; ?>
     </main >
        
        <?php require_once "inc/footer.inc.php"; ?>