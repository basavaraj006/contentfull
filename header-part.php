<?php
$data = get_post_header();
$header_title = $data['name'];
$header_text = $data['bodytext'];
$link_text = 'Find Out More';
?>
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading"><?php print $header_title; ?></h1>
                <hr>
                <p><?php print $header_text; ?></p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll"><?php print $link_text; ?></a>
            </div>
        </div>
    </header>