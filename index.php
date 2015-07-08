<?php
	$awards_doc = "AwardsPackUpdated.pdf";	
	
?><!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Student Radio Association</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700,800,600' rel='stylesheet' type='text/css'>
<style>
	body {
		margin: 0;
		padding: 0;
		font-family: 'Open Sans', sans-serif;
		background: #333333;
		color: white;
	}
	img {
		width: 100%;
	}
	a {
		color: #0084b4;
		text-decoration: none;
	}
	a:hover {
		text-decoration: underline;
		color: #333333;
	}
	#container {
		width: 100%;
		max-width: 1000px;
		background: white;
		margin: 0 auto;
		padding: 10px;
		color: #333333;
	}
	.half_container{
		clear: both;
		overflow: auto;
  		zoom: 1;
	}
	.half_left {
		width: 49%;
		margin: 0 2% 0 0;
		float: left;
	}
	.half_right {
		width: 49%;
		margin: 0;
		float: left;
	}
	/* Portrait */
	@media only screen 
	  and (max-device-width: 736px) { 
		.half_left {
			width: 98%;
			float: none;
		}
		.half_right {
			width: 98%;
			float: none;
		}
	}
</style>
</head>

<body>
	<div id="container">
    	<h1><img src="headerLogo.png" alt="Student Radio Association"/></h1>
        
        <div class="half_container">
        	<div class="half_left">
        		<p>Our website is a bit ill at the moment. But fear not, we are still here!</p>
                <p>We're still updating our Facebook and Twitter accounts, along with sending out our weekly newsletter (which you can sign up to over there).</p>
                <p>If you're looking for information on the Student Radio Awards, you can <a href="<?php echo $awards_doc; ?>" target="_blank">find the categories list and criteria in this handy PDF</a>.</p>
                <p>Any further questions? Feel free to <a href="https://twitter.com/intent/tweet?screen_name=SRA" data-related="SRA">tweet us @SRA</a>, or pop an email:</p>
                <ul>
                	<li>For Awards related enquiries, <a href="mailto:awards@studentradio.org.uk">awards@studentradio.org.uk</a></li>
                	<li>For Everything else, <a href="mailto:info@studentradio.org.uk">info@studentradio.org.uk</a></li>
                </ul>
            </div>
            <div class="half_right">
            	<!-- Begin MailChimp Signup Form -->
                <link href="https://cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div id="mc_embed_signup">
                <form action="//studentradio.us3.list-manage.com/subscribe/post?u=a16dccc207ae079564e01a9b1&amp;id=287395c00d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                    <h2>Subscribe to our newsletter</h2>
                <div class="mc-field-group">
                    <label for="mce-EMAIL">Email Address </label>
                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                </div>
                <div class="mc-field-group">
                    <label for="mce-FNAME">First Name </label>
                    <input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
                </div>
                <div class="mc-field-group">
                    <label for="mce-LNAME">Last Name </label>
                    <input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
                </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_a16dccc207ae079564e01a9b1_287395c00d" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                <!--End mc_embed_signup-->
            </div>
        </div>
        
        <hr>
        
        <div class="half_container">
        	<div class="half_left">
            	<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/SRA" data-widget-id="603984958777090048">Tweets by @SRA</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
            <div class="half_right">
            	<div id="fb-root"></div>
				<script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=522541191154637";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
            	<div class="fb-page" data-href="https://www.facebook.com/studentradio" data-width="490" data-height="400" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/studentradio"><a href="https://www.facebook.com/studentradio">UK Student Radio Association</a></blockquote></div></div>
            </div>
        </div>
        	
    </div>
</body>
</html>
