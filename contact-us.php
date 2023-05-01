<?php
$GLOBALS['title'] = "NewHydrogen | Contact Us";
$GLOBALS['desc'] = "";
$GLOBALS['keywords'] = "";
include('header.php'); ?>


<div class="subpages_frame text-center">
	<div class="container">
		<h1>Contact Us</h1>
	</div>
</div>
<div class="inner_page contactpages">
	<div class="container">
		<div class="row ">
			<div class="col-lg-8">
				<div class="contact_forms">
					<div role="form" class="wpcf7" id="wpcf7-f87-p14-o1" lang="en-US" dir="ltr">
						<form action="./php/smartprocess.php" method="post" class="wpcf7-form init" novalidate="novalidate">
							<div class="row">
								<div class="col-lg-6">
									<span class="wpcf7-form-control-wrap">
										<input type="text" name="fname" placeholder="First Name*" />
									</span>
								</div>
								<div class="col-lg-6">
									<span class="wpcf7-form-control-wrap">
										<input type="text" name="lname" placeholder="Last Name" />
									</span>
								</div>
								<div class="col-lg-6">
									<span class="wpcf7-form-control-wrap">
										<input type="email" name="email" placeholder="Email*" />
									</span>
								</div>
								<div class="col-lg-6">
									<span class="wpcf7-form-control-wrap">
										<input type="text" name="subject" placeholder="Subject" />
									</span>
								</div>
								<div class="col-lg-12">
									<span class="wpcf7-form-control-wrap">
										<textarea name="message" cols="40" rows="10" placeholder="Comment or Message *"></textarea>
									</span>
									<input type="submit" value="Send Message" class="wpcf7-form-control has-spinner wpcf7-submit" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<p></p>
				<p>
				<p><b>NewHydrogen, Inc.</b><br /> 27936 Lost Canyon Road, Suite 202<br /> Santa Clarita, CA 91387<br /> T: <a href="https://web.archive.org/web/20230226233150/tel:(661) 251-0001">(661) 251-0001</a><br /> E: <a href="https://web.archive.org/web/20230226233150/mailto:info@newhydrogen.com<">info@newhydrogen.com</a></p>
				</p>
			</div>
		</div>
	</div>
</div>


<?php
include('footer.php'); ?>