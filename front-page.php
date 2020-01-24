<?php get_header(); ?>
<?php the_post(); ?>
<main class="container-fluid p-0" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row no-gutters">
        <section class="the-hero col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row row-hero align-items-center">
                    <div class="hero-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="hero-info col-6">
                                <h1>Robert Ochoa</h1>
                                <h2><strong>Desarrollador Web</strong><br />Experto en <strong>WordPress / Woocommerce</strong></h2>
                                <div class="hero-info-content">
                                    <p>Productos Digitales de alta calidad desarrollados con un enfoque de ganancia orgánica.<br />Construyamos juntos tu propio <a href="" class="typewrite" data-period="2000" data-type='[ "Website", "e-Commerce", "Plugin", "Sistema" ]'><span class="wrap"></span></a><span class="blinking-cursor "></span></p>
                                </div>
                                <button class="btn btn-md btn-danger">¡Trabajemos juntos!</button>
                            </div>
                            <div class="hero-logo col-6">

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>




        <section id="post-<?php the_ID(); ?>" class="page-container col-12" role="article" itemscope itemtype="http://schema.org/BlogPosting">
            <div class="container">
                <div class="row">

                    <div class="section-container col-12">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>
