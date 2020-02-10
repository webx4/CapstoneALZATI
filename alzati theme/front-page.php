<?php 
 get_header();
 get_template_part('template-parts/headers/front-page', 'header');

?>
<main>
<header class="main-page-header container">
   <div>
   <h1 class="title"><?php echo get_bloginfo('name'); ?></h1>
         <p class="tagline">English Second Language Articles for all reading levels</p>
         <div>
         <a  class="header-button" href="#">Read Articles</a>
   </div>

</div>

<div>
         <img class="head-img" src="<?php echo get_template_directory_uri()."/assets/images/header-img.svg"  ?>" alt="Alzati World">
</div>
        
</header>
 <aside>
    <h2>Front Page Template Content</h2>
 </aside>
 
</main>
<?php get_footer(); ?>