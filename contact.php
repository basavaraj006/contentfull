<?php
$contact = get_contact_details();
$contactus_title = $contact['title'];
$contactus_body = $contact['description'];
$contact_no = $contact['phone'];
$email = $contact['email'];

$footer_menus = array('Projects List', 'Project Details', 'Locations', 'Upcoming');




?>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?php print $contactus_title; ?></h2>
                    <hr class="primary">
                    <p><?php print $contactus_body; ?></p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p><?php print $contact_no; ?></p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com"><?php print $email; ?></a></p>
                </div>
            </div>
        </div>
    </section>
		
<aside class="bg-dark">

			<ul class="list-groups">
			  <?php foreach($footer_menus as $item) { ?>
					  <li class="list-group-item"><a href="list.php"><?php print $item;?></a></li>
				<?php }?>	
			</ul>

</aside>		