<?php include "includes/header.php"?>

<!--  START LEFT COL -->
<section>
 <h2 class="pageID">Client Inquiry Form</h2>
 

    <!--  START HTML FORM  -->
    

    <form action="index.php" method="post">
	<div>
		<label>
			Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
		</label>
	</div>
	<div>	
		<label>
			Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
		<label>
			How Did You Hear About Us?:<br />
			<select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
				<option value="">Choose How You Heard</option>
				<option value="Phone">Phone</option>
				<option value="Web">Web</option>
				<option value="Magazine">Magazine</option>
				<option value="A Friend">A Friend</option>
				<option value="Other">Other</option>
			</select>
		</label>
	</div>
	
	<div>	
		<fieldset>
			<legend>What Web Services Are You Interested In?</legend>
			<input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
			<input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
			<input type="checkbox" name="Interested_In[]" value="Special Application" /> Special Application <br />
			<input type="checkbox" name="Interested_In[]" value="SEO" /> Search Engine Optimization <br />
			<input type="checkbox" name="Interested_In[]" value="Shopping Cart" /> Shopping Cart <br />
            <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
		</fieldset>
	</div>
	
		<div>	
		<fieldset>
			<legend>Would you like to join our mailing list?</legend>
			<input type="radio" name="Join_Mailing_List?" value="Yes" 
			required="required" title="Mailing list is required" tabindex="50" checked="checked"/> Yes <br />
			<input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
		</fieldset>
	</div>
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="8" placeholder="Your comments are important to us!" tabindex="60"></textarea>
		</label>
	</div>	
	<div></div>
    <div class="g-recaptcha" data-sitekey="6LcdRjUUAAAAAPji9dxfmZKHlubSNOh1Zw0KbkzE"></div>
	<div>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script type="text/javascript"
        src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>
            <p class="clear-recaptcha"></p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Instructions to myself</h3>
 
 <p>Provide at least 3 links resources that help you and your web tesm with steps found in very basic website design</p>
 <p>Lorem Ipsum place holder text goes here for now</p>
</aside>
<!-- END RIGHT COL -->
<?php include 'includes/bottom.php'; ?>
    

    
    
    
    
    
    
    
    
    
    
    
    
    

 
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Basic Website Design Cycle</h3>
 
 <p>Provide at least 3 (linked) resources that help you and/or your web team with steps found in very basic website design and development cycle.  For example, client surveys, wireframing tools, etc.</p>
 <p>Here's a website to help get you started, https://business.tutsplus.com/articles/...</p>
 
</aside>
<!-- END RIGHT COL -->
 
<!-- everything below this comment is from the footer include file -->
<?php include "includes/footer.php"?>
