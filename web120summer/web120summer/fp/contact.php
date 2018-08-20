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
			How Did You Hear About Us?<br />
			<select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
				<option value="">Choose How You Heard</option>
                <option value="Search Engine">Internet Search</option>
				<option value="Phone Call">Phone Call</option>
				<option value="Email">Email</option>
				<option value="Social Media ">Social Media Post</option>
				<option value="Friend or Family">Friend or Family</option>
				<option value="Other">Other</option>
			</select>
		</label>
	</div>
	
	<div>	
		<fieldset>
			<legend>How Can We Be of Service To You?</legend>
			<input type="checkbox" name="Interested_In[]" value="Home Buying Info" tabindex="40" /> Home Buyers Course <br />
			<input type="checkbox" name="Interested_In[]" value="Home Selling Info" /> Home Sellers Course <br />
			<input type="checkbox" name="Interested_In[]" value="Buyer Representation" /> Buyer Representation <br />
			<input type="checkbox" name="Interested_In[]" value="Seller Representation" /> Seller Representation <br />
			<input type="checkbox" name="Interested_In[]" value="Home Valuation" /> Home Valuation <br />
            <input type="checkbox" name="Interested_In[]" value="Other" /> Other - Please describe in Comments below. <br />
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

<!-- END RIGHT COL -->
<?php include 'includes/bottom.php'; ?>
    

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->

<!-- END RIGHT COL -->
 
<!-- everything below this comment is from the footer include file -->
<?php include "includes/footer.php"?>
