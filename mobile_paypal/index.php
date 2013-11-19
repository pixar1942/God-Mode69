<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/js-1.10.2.js"></script>
</head>

<body style="background:#cccccc;">

		<a onClick="document.getElementById('home-10000-followers').style.display='block';document.getElementById('fade').style.display='block';">
            	<img src="images/Koala.jpg"/>Click me 10k-flowers
            </a>
			
			<br />
			
		<a onClick="document.getElementById('home-700-comments').style.display='block';document.getElementById('fade').style.display='block'">
				<img src="images/Koala.jpg"/>Click me 700cmnts-fb
			</a>
<img src="images/Koala.jpg"/><br />
<img src="images/Koala.jpg"/><br />
<img src="images/Koala.jpg"/><br />

<div id="home-700-comments" class="white_content_main_content">
        <div class="white_content_in">
            <div class="close_button"><a href = "javascript:void(0)" onclick = "document.getElementById('home-700-comments').style.display='none';document.getElementById('fade').style.display='none'"><img src="images/close_button.png" border="0" /></a></div>
            <h2 style="margin-top: -49px;">Checkout</h2>
                <form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr" id="form1" target="_blank"><!-- Remove sandbox if not in testing -->
                    <input type="hidden" name="business" value="jumbojett@hotmail.com">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="lc" value="US">
                    <input type="hidden" name="upload" value="1">
                    <input type="hidden" name="email" value="">
                    <input type="hidden" name="notify_url" value="http://socialformula.com/api/mobgramination.php"><!-- API Notification -->
					<input type="hidden" name="return" value="http://m.gramination.com/success.php"><!-- for thank you page -->
					<input type="hidden" name="cancel_return" value="http://m.gramination.com/"><!-- Redirect if cancel-->
                    <input type="hidden" name="quantity_1" value="1">
                    <input type="hidden" name="item_name_1" value="Facebook comments (700 comments for $22.99)"><!-- Paypal Order summary -->
                    <input type="hidden" name="item_number_1" value="IGMOB-8c55b2b5">
                    <input type="hidden" name="amount_1" value="22.99">
                    <input type="hidden" name="weight_1" value="0.01">
                    <input type="hidden" name="on0_1" value="Facebook URL">
                    <label>Facebook URL:</label><input type="text" name="os0_1" value="" placeholder="URL">
                    <input type="hidden" name="on1_1" value="Email"><br />
                    <label>Email:</label><input type="text" name="os1_1" value="" placeholder="email@email.com">
                    <br><small>for better support, please inpput your email</small>
                    <input id="paypal-submit" type="image" src="images/paypal-checkout.png" border="0" name="submit" align="right">
                </form>
                <br />
        </div>
	</div>
	
<div id="home-10000-followers" class="white_content_main_content">
        <div class="white_content_in">
            <div class="close_button"><a href = "javascript:void(0)" onclick = "document.getElementById('home-10000-followers').style.display='none';document.getElementById('fade').style.display='none'"><img src="images/close_button.png" border="0" /></a></div>
            <h2 style="margin-top: -49px;">Checkout</h2>
                <form method="post" action="https://www.sandbox.paypal.com/cgi-bin/webscr" id="form1" target="_blank">
                    <input type="hidden" name="business" value="jumbojett@hotmail.com">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="lc" value="US">
                    <input type="hidden" name="upload" value="1">
                    <input type="hidden" name="email" value="">
                    <input type="hidden" name="notify_url" value="http://socialformula.com/api/mobgramination.php">
					<input type="hidden" name="return" value="http://m.gramination.com/success.php">
					<input type="hidden" name="cancel_return" value="http://m.gramination.com/">
                    <input type="hidden" name="quantity_1" value="1">
                    <input type="hidden" name="item_name_1" value="Instagram followers (10,000 followers for $49.99)">
                    <input type="hidden" name="item_number_1" value="IGMOB-8c55b2b5">
                    <input type="hidden" name="amount_1" value="49.99">
                    <input type="hidden" name="weight_1" value="0.01">
                    <input type="hidden" name="on0_1" value="Instagram URL">
                    <label>Instagram URL:</label><input type="text" name="os0_1" value="" placeholder="URL">
                    <input type="hidden" name="on1_1" value="Email">
                    <label>Your Email:</label><input type="text" name="os1_1" value="" placeholder="email@email.com">
                    <br><small>for better support, please inpput your email</small>
                    <input type="image" src="images/paypal-checkout.png" border="0" name="submit" align="right">
                </form>
                <br />
        </div>
	</div>	

	
	
	<script type="text/javascript">

	
	</script>
</body>	
</html>	