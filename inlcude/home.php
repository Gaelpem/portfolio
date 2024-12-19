<?php include "inc/head.inc.php"; ?>
<title>Portfolio</title>
</head>
<body>
    <div class="container">
        <div class="rond"></div>
     <div class="rectangle"></div>
     
       <?php require "inc/nav.inc.php"; ?>
       
        <main>
        <div class="trait-horizontal1"></div>
          
           <div class="para">
              <h2><span class="salut">Salut,</span>
              Je m'appelle Gaël Pembele, je suis un apprenti développeur, passioné par la technologie et le design, c'est pourquoi j'ai choisi de combiner ces due univers ensemble.</h2>
          </div>  
          <div id="projet-menu">
               <h2 class="titre-projet">[Pro-jects]<span class="petit-numero">(001)<span></h2>
               <div class="carre"></div>
          </div>
          <hr/>
          <div id="about-menu">
               <h2 class="titre-about">[Ab-out]<span class="petit-numero">(002)<span></h2>
               <div class="carre"></div>
          </div>
          <hr/>
          <?php require "contact.php"; ?>
     </main >
        
        <?php require_once "inc/footer.inc.php"; ?>