<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<?php wp_head(); ?>  
		<meta content="<?php echo get_bloginfo( 'name' );?>" name="title">  
		<meta content="<?php echo get_bloginfo( 'description' );?>" name="description">  
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
		<link rel="preconnect" href="https://fonts.googleapis.com">  
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>  
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />  
<title><?php echo get_bloginfo( 'name' );?></title>
	</head>
	<body>
        <header>
            <nav>
                <ol>
                    <!--A mettre en Uppercase css-->
                    <li>accueil</li>
                    <li>à propos</li>
                    <li>mes projets</li>
                    <li>me contacter</li>
                </ol>
            </nav>
        </header>
        
        <main>
            <section class="title">
                <h1>YEPFOLIO</h1>
                <h2>développement web & mobile</h2><!--A mettre en Uppercase css-->
                <!--img en back-ground--css>-->
            </section>
            
            <section class="tintro">
                <h2>YEPFOLIO EN QUELQUES MOTS</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, aliquid, officia porro excepturi nostrum voluptatum similique placeat quo ab quos.
                        Perferendis, amet, impedit adipisci hic molestiae nostrum sed incidunt dolorum.Consectetur ducimus consequuntur aspernatur! Accusamus, illo, porro molestias 
                        enim animi eos aliquam magni expedita adipisci explicabo. Totam, incidunt, obcaecati quo blanditiis iste tempora ipsum inventore iure illo minima? Consectetur,
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, facere, quasi iusto ex rerum vel at consectetur doloribus commodi nesciunt adipisci vitae veniam 
                    </p>
            </section>
            <section class="article">
                <h2>MES DERNIERS PROJETS</h2>
                <article>
                    <p>APPLICATION SANTE</p>
                    <h3>Pharmacie de Maurepas</h3>
                    <!--img en back-ground--css>-->
                </article>
                   
                <article>
                    <p>SITE E-COMMERCE</p>
                    <h3>Librairie l'écume des jours</h3>
                    <!--img en back-ground--css>-->
                </article>
                   
                <article>
                    <p>SITE VITRINE</p>
                    <h3>Boulangerie Galtier</h3>
                    <!--img en back-ground--css>-->
                </article>
                   
                <article>
                    <p>SITE INISTITUTIONNEL</p>
                    <h3>Mairie de Ploutruc</h3>
                    <!--img en back-ground--css>-->
                </article>
                   
                <article>
                    <p>SITE PROMOTIONNEL</p>
                    <h3>Festival des choses</h3>
                    <!--img en back-ground--css>-->
                </article>
            </section>
            
            <section>
                <h2>ME CONTACTER</h2>
                <form>
                    <label for="name">Prénom + Nom*</label>
                    <input type="text" name="name"/>
                    
                    <label for="email">Email*</label>
                    <input type="email" name="email"/>
                    
                    <label for="textArea">Message</label>
                    <input type="text" name="textArea"/>
                    
                    <input class="submit" type="submit" method="get" action="" value="ENVOYER" />  
                    <!--Mettre L'URL qui traite l'envoi du formulairedans action-->
                </form>
            </section>
        </main>
        
        <footer></footer>
		<?php wp_footer(); ?>
	</body>
</html>