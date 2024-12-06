<?php include "inc/head.inc.php"; ?>
<title>Portfolio</title>
</head>
<body>
    <div class="container">
        <div class="rond"></div>
     <div class="rectangle"></div>
     
       <?php require "inc/nav.inc.php"; ?>
       
        <div class="main">
        <div class="trait-horizontal1"></div>
            <div class="titre">
                <h1>Gaël Pembele<span class="copyright">&copy;</span></h1>
           </div>
           <div class="para">
              <h2><span class="haut">Hello,</span>
              <span class="grey">I'm a developer web,</span> passionate about tech and design<span class="grey"> that's why i choose</span> to mix this two world together.</h2>
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
        </div>
        
        <?php require_once "inc/footer.inc.php"; ?>