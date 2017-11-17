<?php 
    get_header();
?>
    <div id="cover" class="cover row">
        <a href="#suite" aria-hidden="true">
        </a>
    </div>
    <article data-spy="scroll" data-target="#myNavbar" id="suite" class="presentation row">
        <h1>Développeur Web sur Toulouse et sa région</h1>
        <p>Bienvenue, vous retrouverez ici la liste des projets que j'ai effectué lors de mes diverses missions et formations personnels.</p>
        <?php 
            get_template_part( 'Index/index_tripoint' );
            get_template_part( 'Index/index_project' );
            get_template_part( 'Index/index_social_network' );
            get_template_part( 'Index/index_contact' ); 
        ?>
    </article>
<?php 
    get_footer();
