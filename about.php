<?php
$datas = get_post_about();
$about_title = $datas['name'];
$about_text = $datas['bodytext'];
$link_text = 'Get Started!!';

?>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?php print $about_title; ?></h2>
                    <hr class="light">
                    <p class="text-faded"><?php print $about_text; ?></p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button"><?php print $link_text; ?></a>
                </div>
            </div>
        </div>
    </section>