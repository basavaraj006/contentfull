<?php
$portpolioss = get_assets_list();
$portpolios = array();
foreach($portpolioss as $item) {
	$portpolio = array();
	$portpolio['image'] = $item;
	$portpolio['thumb'] = $item;
	$portpolios[] = $portpolio;
}
$portpolios[] = $portpolio;
//echo count($portpolios);

?>
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
						<?php foreach($portpolios as $item) {?>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php print $item['image']; ?>" class="portfolio-box">
                        <img src="<?php print $item['thumb']; ?>" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    <?php //print $item['title']; ?>
                                </div>
                                <div class="project-name">
                                    <?php //print $item['pname']; ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
						<?php } ?>
            </div>
        </div>
    </section>