<?php
$user = $_GET['user'];
$conn = mysqli_connect('localhost', 'Zordon', 'Zordon123!', 'steam-fake');
$sql = "SELECT username FROM users WHERE username = $user";
$result = $conn->query($sql);
if($result->num_rows > 0) {
$sql = 'SELECT joindate,level, bannedstatus, bannedtime, Test01PlayTime, Test01LastPlay FROM users';
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 


$level = $row['level'];
$isbanned = $row['bannedstatus'];
$time = $row['bannedtime'];
$Test01time = $row['Test01PlayTime'];
$lastplayedTest01 = $row['Test01LastPlay'];
echo ";
<!DOCTYPE html>
<html class=' responsive' lang='en'><head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
			<meta name='viewport' content='width=device-width,initial-scale=1'>
		<meta name='theme-color' content='#171a21'>
		<title>Steam Community</title>
	<link rel='shortcut icon' href='https://steamcommunity.com/favicon.ico' type='image/x-icon'>

	
	
	<link href='profile_files/motiva_sans.css' rel='stylesheet' type='text/css'>
<link href='profile_files/buttons.css' rel='stylesheet' type='text/css'>
<link href='profile_files/shared_global.css' rel='stylesheet' type='text/css'>
<link href='profile_files/globalv2.css' rel='stylesheet' type='text/css'>
<link href='profile_files/modalContent.css' rel='stylesheet' type='text/css'>
<link href='profile_files/profilev2.css' rel='stylesheet' type='text/css'>
<link href='profile_files/motiva_sans.css' rel='stylesheet' type='text/css'>
<link href='profile_files/stickers.css' rel='stylesheet' type='text/css'>
<link href='profile_files/shared_responsive.css' rel='stylesheet' type='text/css'>
<link href='profile_files/header.css' rel='stylesheet' type='text/css'>
			<script async='' src='profile_files/analytics.js'></script><script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

				ga('create', 'UA-33779068-1', 'auto', {
					'sampleRate': 0.4				});
				ga('set', 'dimension1', false );
				ga('set', 'dimension2', 'External' );
				ga('set', 'dimension3', 'profiles' );
				ga('set', 'dimension4', 'profiles\/DefaultAction' );
				ga('send', 'pageview' );

			</script>
			<script type='text/javascript'>
	var __PrototypePreserve=[];
	__PrototypePreserve[0] = Array.from;
	__PrototypePreserve[1] = Function.prototype.bind;
	__PrototypePreserve[2] = HTMLElement.prototype.scrollTo;
</script>
<script type='text/javascript' src='profile_files/prototype-1.7.js'></script>
<script type='text/javascript'>
	Array.from = __PrototypePreserve[0] || Array.from;
	Function.prototype.bind = __PrototypePreserve[1] || Function.prototype.bind;
	HTMLElement.prototype.scrollTo = __PrototypePreserve[2] || HTMLElement.prototype.scrollTo;
</script>
<script type='text/javascript'>VALVE_PUBLIC_PATH = 'https:\/\/community.akamai.steamstatic.com\/public\/';</script><script type='text/javascript' src='profile_files/_combined.js'></script>
<script type='text/javascript' src='profile_files/global.js'></script>
<script type='text/javascript' src='profile_files/jquery-1.11.1.min.js'></script>
<script type='text/javascript' src='profile_files/tooltip.js'></script>
<script type='text/javascript' src='profile_files/shared_global.js'></script>
<script type='text/javascript'>Object.seal && [ Object, Array, String, Number ].map( function( builtin ) { Object.seal( builtin.prototype ); } );</script><script type='text/javascript'> = jQuery.noConflict();
if ( typeof JSON != 'object' || !JSON.stringify || !JSON.parse ) { document.write( '<scr' + 'ipt type=\'text\/javascript\' src=\'https:\/\/community.akamai.steamstatic.com\/public\/javascript\/json2.js?v=pmScf4470EZP&amp;l=english\' ><\/script>\n' ); };
</script>
		<script type='text/javascript'>
			document.addEventListener('DOMContentLoaded', function(event) {
				SetupTooltips( { tooltipCSSClass: 'community_tooltip'} );
		});
		</script><script type='text/javascript' src='profile_files/modalContent.js'></script>
<script type='text/javascript' src='profile_files/modalv2.js'></script>
<script type='text/javascript' src='profile_files/profile.js'></script>
<script type='text/javascript' src='profile_files/stickers.js'></script>
<script type='text/javascript' src='profile_files/reportedcontent.js'></script>
<script type='text/javascript' src='profile_files/clientcom.js'></script>
<script type='text/javascript' src='profile_files/shared_responsive_adapter.js'></script>

						<meta name='twitter:card' content='summary'>
			
	<meta name='twitter:site' content='@steam'>

						<meta property='og:title' content='Steam Community :: Rusek772'>
					<meta property='twitter:title' content='Steam Community :: Rusek772'>
					<meta property='og:type' content='website'>
					<meta property='fb:app_id' content='105386699540688'>
			
	
			<link rel='image_src' href='profile_files/21055d0e6e6021ace8a8de8a9d6fe14a97866d62_full.jpg'>
		<meta property='og:image' content='https://avatars.akamai.steamstatic.com/21055d0e6e6021ace8a8de8a9d6fe14a97866d62_full.jpg'>
		<meta name='twitter:image' content='https://avatars.akamai.steamstatic.com/21055d0e6e6021ace8a8de8a9d6fe14a97866d62_full.jpg'>
		
	
	
	
	
	<link id='chromealerabat-link' rel='stylesheet' type='text/css' href='profile_files/content.css'><link rel='stylesheet' type='text/css' href='profile_files/chunk~7bb437d7f.css'><link rel='stylesheet' type='text/css' href='profile_files/chunk~642602239.css'><link rel='stylesheet' type='text/css' href='profile_files/profile.css'></head>
<body class='flat_page profile_page  CosmicTheme responsive_page'>


<div class='responsive_page_frame with_header'>
						<div class='responsive_page_menu_ctn mainmenu'>
				<div class='responsive_page_menu' id='responsive_page_menu'>
										<div class='mainmenu_contents'>
						<div class='mainmenu_contents_items'>
															<a class='menuitem' href='https://steamcommunity.com/login/home/?goto=profiles%2F76561199192239533%2F'>
									Login								</a>
								<a class='menuitem supernav' href='https://store.steampowered.com/' data-tooltip-type='selector' data-tooltip-content='.submenu_store'>
		Store	</a>
	<div class='submenu_store' style='display: none;' data-submenuid='store'>
		<a class='submenuitem' href='https://store.steampowered.com/'>Home</a>
					<a class='submenuitem' href='https://store.steampowered.com/explore/'>Discovery Queue</a>
				<a class='submenuitem' href='https://steamcommunity.com/my/wishlist/'>Wishlist</a>
		<a class='submenuitem' href='https://store.steampowered.com/points/shop/'>Points Shop</a>	
       	<a class='submenuitem' href='https://store.steampowered.com/news/'>News</a>
					<a class='submenuitem' href='https://store.steampowered.com/stats/'>Stats</a>
					</div>


			<a class='menuitem supernav' style='display: block' href='https://steamcommunity.com/' data-tooltip-type='selector' data-tooltip-content='.submenu_community'>
			Community		</a>
		<div class='submenu_community' style='display: none;' data-submenuid='community'>
			<a class='submenuitem' href='https://steamcommunity.com/'>Home</a>
			<a class='submenuitem' href='https://steamcommunity.com/discussions/'>Discussions</a>
			<a class='submenuitem' href='https://steamcommunity.com/workshop/'>Workshop</a>
			<a class='submenuitem' href='https://steamcommunity.com/market/'>Market</a>
			<a class='submenuitem' href='https://steamcommunity.com/?subsection=broadcasts'>Broadcasts</a>
											</div>
		

	
	
	<a class='menuitem' href='https://help.steampowered.com/en/'>
		Support	</a>

							<div class='minor_menu_items'>
																								<div class='menuitem change_language_action'>
									Change language								</div>
																																	<div class='menuitem' onclick='Responsive_RequestDesktopView();'>
										View desktop website									</div>
															</div>
						</div>
						<div class='mainmenu_footer_spacer  '></div>
						<div class='mainmenu_footer'>
															<div class='mainmenu_footer_logo'><img src='profile_files/logo_valve_footer.png'></div>
								© Valve Corporation. All rights reserved. All trademarks are 
property of their respective owners in the US and other countries.						
		<span class='mainmenu_valve_links'>
									<a href='https://store.steampowered.com/privacy_agreement/' target='_blank'>#footer_privacy_policy</a>
									&nbsp;| &nbsp;<a href='http://www.valvesoftware.com/legal.htm' target='_blank'>#footer_legal</a>
									&nbsp;| &nbsp;<a href='https://store.steampowered.com/subscriber_agreement/' target='_blank'>#footer_ssa</a>
									&nbsp;| &nbsp;<a href='https://store.steampowered.com/steam_refunds/' target='_blank'>#footer_refunds</a>
								</span>
													</div>
					</div>
									</div>
			</div>
		
		<div class='responsive_local_menu_tab'></div>

		<div class='responsive_page_menu_ctn localmenu'>
			<div class='responsive_page_menu' id='responsive_page_local_menu' data-panel='{&quot;onOptionsActionDescription&quot;:&quot;#filter_toggle&quot;,&quot;onOptionsButton&quot;:&quot;Responsive_ToggleLocalMenu()&quot;,&quot;onCancelButton&quot;:&quot;Responsive_ToggleLocalMenu()&quot;}'>
				<div class='localmenu_content' data-panel='{&quot;maintainY&quot;:true,&quot;bFocusRingRoot&quot;:true,&quot;flow-children&quot;:&quot;column&quot;}'>
				</div>
			</div>
		</div>



					<div class='responsive_header'>
				<div class='responsive_header_content'>
					<div id='responsive_menu_logo'>
						<img src='profile_files/header_menu_hamburger.png' height='100%'>
											</div>
					<div class='responsive_header_logo'>
						<a href='https://store.steampowered.com/'>
															<img src='profile_files/header_logo.png' alt='STEAM' height='36' border='0'>
													</a>
					</div>
				</div>
			</div>
		
		<div class='responsive_page_content_overlay'>

		</div>

		<div class='responsive_fixonscroll_ctn nonresponsive_hidden '>
		</div>
	
	<div class='responsive_page_content'>

		<div id='global_header' data-panel='{&quot;flow-children&quot;:&quot;row&quot;}'>
	<div class='content'>
		<div class='logo'

			<span id='logo_holder'>
									<a href='store.php?user=$user'>
						<img src='profile_files/logo_steam.svg' width='176' height='44'>
					</a>
							</span>
		</div>

			<div class='supernav_container'>
	<a class='menuitem supernav' data-tooltip-type='selector' data-tooltip-content='.submenu_store' href='store.php?user=$user'>
		STORE	</a>
	


			
		
		

	
						
			
	
	<div style='position: absolute; z-index: 1500; opacity: 0; left: 59px; top: 64px; pointer-events: none;' class='supernav_content'><div class='submenu_community' style='' data-submenuid='community'>
			<a class='submenuitem' href='https://steamcommunity.com/'>Home</a>
			<a class='submenuitem' href='https://steamcommunity.com/discussions/'>Discussions</a>
			<a class='submenuitem' href='https://steamcommunity.com/workshop/'>Workshop</a>
			<a class='submenuitem' href='https://steamcommunity.com/market/'>Market</a>
			<a class='submenuitem' href='https://steamcommunity.com/?subsection=broadcasts'>Broadcasts</a>
											</div></div><div style='position: absolute; z-index: 1500; opacity: 0; left: 1px; top: 64px; pointer-events: none;' class='supernav_content'><div class='submenu_store' style='' data-submenuid='store'>
		
					
				
			
       	
					
					</div></div></div>
	<script type='text/javascript'>
		jQuery(function($) {
			$('#global_header .supernav').v_tooltip({'location':'bottom', 'destroyWhenDone': false, 'tooltipClass': 'supernav_content', 'offsetY':-4, 'offsetX': 1, 'horizontalSnap': 4, 'tooltipParent': '#global_header .supernav_container', 'correctForScreenSize': false});
		});
	</script>

		<div id='global_actions'>
			<div id='global_action_menu'>
									<div class='header_installsteam_btn header_installsteam_btn_green'>

						<a class='header_installsteam_btn_content' href='getsteam.php'>
							Install Steam						</a>
					</div>
				
				
														<a class='global_action_link' href='profile.php?user=$user'>$user</a>
											&nbsp;|&nbsp;
						<span class='pulldown global_action_link' id='language_pulldown' onclick='ShowMenu( this, 'language_dropdown', 'right' );'>Not Working :(</span>
						<div class='popup_block_new' id='language_dropdown' style='display: none;'>
							<div class='popup_body popup_menu'>
																																					<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=schinese' onclick='ChangeLanguage( 'schinese' ); return false;'>简体中文 (Simplified Chinese)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=tchinese' onclick='ChangeLanguage( 'tchinese' ); return false;'>繁體中文 (Traditional Chinese)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=japanese' onclick='ChangeLanguage( 'japanese' ); return false;'>日本語 (Japanese)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=koreana' onclick='ChangeLanguage( 'koreana' ); return false;'>한국어 (Korean)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=thai' onclick='ChangeLanguage( 'thai' ); return false;'>ไทย (Thai)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=bulgarian' onclick='ChangeLanguage( 'bulgarian' ); return false;'>Български (Bulgarian)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=czech' onclick='ChangeLanguage( 'czech' ); return false;'>Čeština (Czech)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=danish' onclick='ChangeLanguage( 'danish' ); return false;'>Dansk (Danish)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=german' onclick='ChangeLanguage( 'german' ); return false;'>Deutsch (German)</a>
																																							<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=spanish' onclick='ChangeLanguage( 'spanish' ); return false;'>Español - España (Spanish - Spain)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=latam' onclick='ChangeLanguage( 'latam' ); return false;'>Español - Latinoamérica (Spanish - Latin America)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=greek' onclick='ChangeLanguage( 'greek' ); return false;'>Ελληνικά (Greek)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=french' onclick='ChangeLanguage( 'french' ); return false;'>Français (French)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=italian' onclick='ChangeLanguage( 'italian' ); return false;'>Italiano (Italian)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=hungarian' onclick='ChangeLanguage( 'hungarian' ); return false;'>Magyar (Hungarian)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=dutch' onclick='ChangeLanguage( 'dutch' ); return false;'>Nederlands (Dutch)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=norwegian' onclick='ChangeLanguage( 'norwegian' ); return false;'>Norsk (Norwegian)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=polish' onclick='ChangeLanguage( 'polish' ); return false;'>Polski (Polish)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=portuguese' onclick='ChangeLanguage( 'portuguese' ); return false;'>Português (Portuguese)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=brazilian' onclick='ChangeLanguage( 'brazilian' ); return false;'>Português - Brasil (Portuguese - Brazil)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=romanian' onclick='ChangeLanguage( 'romanian' ); return false;'>Română (Romanian)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=russian' onclick='ChangeLanguage( 'russian' ); return false;'>Русский (Russian)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=finnish' onclick='ChangeLanguage( 'finnish' ); return false;'>Suomi (Finnish)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=swedish' onclick='ChangeLanguage( 'swedish' ); return false;'>Svenska (Swedish)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=turkish' onclick='ChangeLanguage( 'turkish' ); return false;'>Türkçe (Turkish)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=vietnamese' onclick='ChangeLanguage( 'vietnamese' ); return false;'>Tiếng Việt (Vietnamese)</a>
																													<a class='popup_menu_item tight' href='https://steamcommunity.com/profiles/76561199192239533/?l=ukrainian' onclick='ChangeLanguage( 'ukrainian' ); return false;'>Українська (Ukrainian)</a>
																									<a class='popup_menu_item tight' href='https://www.valvesoftware.com/en/contact?contact-person=Translation%20Team%20Feedback' target='_blank'>Report a translation problem</a>
							</div>
						</div>
												</div>
					</div>
			</div>
</div>
<script type='text/javascript'>
	g_sessionID = '96dff0be595b77041d909ea0';
	g_steamID = false;
	g_strLanguage = 'english';
	g_SNR = '2_100300_DefaultAction_';
	g_bAllowAppImpressions = true
	
	

	// We always want to have the timezone cookie set for PHP to use
	setTimezoneCookies();

	( function() {

		InitMiniprofileHovers();
		InitEmoticonHovers();
		ApplyAdultContentPreferences();
	});

	( function() { InitEconomyHovers( 'https:\/\/community.akamai.steamstatic.com\/public\/css\/skin_1\/economy.css?v=09AGT_Kww_HY&l=english', 'https:\/\/community.akamai.steamstatic.com\/public\/javascript\/economy_common.js?v=tsXdRVB0yEaR&l=english', 'https:\/\/community.akamai.steamstatic.com\/public\/javascript\/economy.js?v=uSWx170LyQQO&l=english' );});</script>
	<div id='webui_config' style='display: none;' data-config='{&quot;EUNIVERSE&quot;:1,&quot;WEB_UNIVERSE&quot;:&quot;public&quot;,&quot;LANGUAGE&quot;:&quot;english&quot;,&quot;COUNTRY&quot;:&quot;PL&quot;,&quot;MEDIA_CDN_COMMUNITY_URL&quot;:&quot;https:\/\/cdn.akamai.steamstatic.com\/steamcommunity\/public\/&quot;,&quot;MEDIA_CDN_URL&quot;:&quot;https:\/\/cdn.akamai.steamstatic.com\/&quot;,&quot;COMMUNITY_CDN_URL&quot;:&quot;https:\/\/community.akamai.steamstatic.com\/&quot;,&quot;COMMUNITY_CDN_ASSET_URL&quot;:&quot;https:\/\/cdn.akamai.steamstatic.com\/steamcommunity\/public\/assets\/&quot;,&quot;STORE_CDN_URL&quot;:&quot;https:\/\/store.akamai.steamstatic.com\/&quot;,&quot;PUBLIC_SHARED_URL&quot;:&quot;https:\/\/community.akamai.steamstatic.com\/public\/shared\/&quot;,&quot;COMMUNITY_BASE_URL&quot;:&quot;https:\/\/steamcommunity.com\/&quot;,&quot;CHAT_BASE_URL&quot;:&quot;https:\/\/steamcommunity.com\/&quot;,&quot;STORE_BASE_URL&quot;:&quot;https:\/\/store.steampowered.com\/&quot;,&quot;IMG_URL&quot;:&quot;https:\/\/community.akamai.steamstatic.com\/public\/images\/&quot;,&quot;STEAMTV_BASE_URL&quot;:&quot;https:\/\/steam.tv\/&quot;,&quot;HELP_BASE_URL&quot;:&quot;https:\/\/help.steampowered.com\/&quot;,&quot;PARTNER_BASE_URL&quot;:&quot;https:\/\/partner.steamgames.com\/&quot;,&quot;STATS_BASE_URL&quot;:&quot;https:\/\/partner.steampowered.com\/&quot;,&quot;INTERNAL_STATS_BASE_URL&quot;:&quot;https:\/\/steamstats.valve.org\/&quot;,&quot;IN_CLIENT&quot;:false,&quot;USE_POPUPS&quot;:false,&quot;STORE_ICON_BASE_URL&quot;:&quot;https:\/\/cdn.akamai.steamstatic.com\/steam\/apps\/&quot;,&quot;WEBAPI_BASE_URL&quot;:&quot;https:\/\/api.steampowered.com\/&quot;,&quot;TOKEN_URL&quot;:&quot;https:\/\/steamcommunity.com\/chat\/clientjstoken&quot;,&quot;BUILD_TIMESTAMP&quot;:1659559179,&quot;PAGE_TIMESTAMP&quot;:1659560034,&quot;IN_TENFOOT&quot;:false,&quot;IN_GAMEPADUI&quot;:false,&quot;IN_CHROMEOS&quot;:false,&quot;IN_MOBILE_WEBVIEW&quot;:false,&quot;PLATFORM&quot;:&quot;windows&quot;,&quot;BASE_URL_STORE_CDN_ASSETS&quot;:&quot;https:\/\/cdn.akamai.steamstatic.com\/store\/&quot;,&quot;EREALM&quot;:1,&quot;LOGIN_BASE_URL&quot;:&quot;https:\/\/login.steampowered.com\/&quot;,&quot;AVATAR_BASE_URL&quot;:&quot;https:\/\/avatars.akamai.steamstatic.com\/&quot;,&quot;FROM_WEB&quot;:true,&quot;SNR&quot;:&quot;2_100300_DefaultAction_&quot;}' data-userinfo='[]'>
	</div>
<div id='application_config' style='display: none;' data-config='{&quot;EUNIVERSE&quot;:1,&quot;WEB_UNIVERSE&quot;:&quot;public&quot;,&quot;LANGUAGE&quot;:&quot;english&quot;,&quot;COUNTRY&quot;:&quot;PL&quot;,&quot;MEDIA_CDN_COMMUNITY_URL&quot;:&quot;https:\/\/cdn.akamai.steamstatic.com\/steamcommunity\/public\/&quot;,&quot;MEDIA_CDN_URL&quot;:&quot;https:\/\/cdn.akamai.steamstatic.com\/&quot;,&quot;COMMUNITY_CDN_URL&quot;:&quot;https:\/\/community.akamai.steamstatic.com\/&quot;,&quot;COMMUNITY_CDN_ASSET_URL&quot;:&quot;https:\/\/cdn.akamai.steamstatic.com\/steamcommunity\/public\/assets\/&quot;,&quot;STORE_CDN_URL&quot;:&quot;https:\/\/store.akamai.steamstatic.com\/&quot;,&quot;PUBLIC_SHARED_URL&quot;:&quot;https:\/\/community.akamai.steamstatic.com\/public\/shared\/&quot;,&quot;COMMUNITY_BASE_URL&quot;:&quot;https:\/\/steamcommunity.com\/&quot;,&quot;CHAT_BASE_URL&quot;:&quot;https:\/\/steamcommunity.com\/&quot;,&quot;STORE_BASE_URL&quot;:&quot;https:\/\/store.steampowered.com\/&quot;,&quot;IMG_URL&quot;:&quot;https:\/\/community.akamai.steamstatic.com\/public\/images\/&quot;,&quot;STEAMTV_BASE_URL&quot;:&quot;https:\/\/steam.tv\/&quot;,&quot;HELP_BASE_URL&quot;:&quot;https:\/\/help.steampowered.com\/&quot;,&quot;PARTNER_BASE_URL&quot;:&quot;https:\/\/partner.steamgames.com\/&quot;,&quot;STATS_BASE_URL&quot;:&quot;https:\/\/partner.steampowered.com\/&quot;,&quot;INTERNAL_STATS_BASE_URL&quot;:&quot;https:\/\/steamstats.valve.org\/&quot;,&quot;IN_CLIENT&quot;:false,&quot;USE_POPUPS&quot;:false,&quot;STORE_ICON_BASE_URL&quot;:&quot;https:\/\/cdn.akamai.steamstatic.com\/steam\/apps\/&quot;,&quot;WEBAPI_BASE_URL&quot;:&quot;https:\/\/api.steampowered.com\/&quot;,&quot;TOKEN_URL&quot;:&quot;https:\/\/steamcommunity.com\/chat\/clientjstoken&quot;,&quot;BUILD_TIMESTAMP&quot;:1659559179,&quot;PAGE_TIMESTAMP&quot;:1659560034,&quot;IN_TENFOOT&quot;:false,&quot;IN_GAMEPADUI&quot;:false,&quot;IN_CHROMEOS&quot;:false,&quot;IN_MOBILE_WEBVIEW&quot;:false,&quot;PLATFORM&quot;:&quot;windows&quot;,&quot;BASE_URL_STORE_CDN_ASSETS&quot;:&quot;https:\/\/cdn.akamai.steamstatic.com\/store\/&quot;,&quot;EREALM&quot;:1,&quot;LOGIN_BASE_URL&quot;:&quot;https:\/\/login.steampowered.com\/&quot;,&quot;AVATAR_BASE_URL&quot;:&quot;https:\/\/avatars.akamai.steamstatic.com\/&quot;,&quot;FROM_WEB&quot;:true,&quot;SNR&quot;:&quot;2_100300_DefaultAction_&quot;}' data-userinfo='[]' data-community='[]' data-loyaltystore='{&quot;webapi_token&quot;:&quot;&quot;}'></div><link href='profile_files/main.css' rel='stylesheet' type='text/css'>
<script type='text/javascript' src='profile_files/manifest.js'></script>
<script type='text/javascript' src='profile_files/libraries~b28b7af69.js'></script>
<script type='text/javascript' src='profile_files/main.js'></script>
<div data-featuretarget='profile-rewards'><div></div></div>	<div id='application_root'></div>

		<div class='responsive_page_template_content' id='responsive_page_template_content' data-panel='{&quot;autoFocus&quot;:true}'>

				<script type='text/javascript'>
		g_rgProfileData = {'url':'https:\/\/steamcommunity.com\/profiles\/76561199192239533\/','steamid':'76561199192239533','personaname':'Rusek772','summary':'No information given.'};
		( function() {
			window.Responsive_ReparentItemsInResponsiveMode && Responsive_ReparentItemsInResponsiveMode( '.responsive_groupfriends_element', ('#responsive_groupfriends_element_ctn') );
			
			SetupAnimateOnHoverImages();
		});
	</script>


<div class='no_header profile_page   ' style=''>

	
	

<div class='profile_header_bg'>

	<div class='profile_header_bg_texture'>
		
		<div class='profile_header'>

			
			<div class='profile_header_content'>

								<div class='profile_header_centered_persona'>
					<div class='persona_name' style='font-size: 24px;'>
						<span class='actual_persona_name'>$user</span>
																			
												<div id='NamePopup' class='popup_block_new' style='display: none;'>
							<div class='popup_body popup_menu'>
								<div>This user has also played as:</div>
								<div id='NamePopupAliases'>

								</div>
								<div style='display:none' id='NamePopupClearAliases'>
																	</div>
								<div style='clear:both'></div>
							</div>
						</div>
					</div>

										<div class='header_real_name ellipsis'>
						<bdi></bdi>
																							</div>
									</div>

				<div class='playerAvatar profile_header_size offline' data-miniprofile='1231973805'>
										<div class='playerAvatarAutoSizeInner'>
												<img src='profile_files/b64078e7f43aa9e49d018622653147bdb0b9c9d8_full.jpg'>
					</div>
				</div>

				<div class='profile_header_badgeinfo'>
					<div class='profile_header_badgeinfo_badge_area'>
																					<a data-panel='{&quot;focusable&quot;:true,&quot;clickOnActivate&quot;:true}' class='persona_level_btn' href=''>
																<div class='persona_name persona_level'>Level <div class='friendPlayerLevel lvl_0'><span class='friendPlayerLevelNum'>$level</span></div></div>
															</a>
																		</div>
					<div class='profile_header_actions'>
											</div>
				</div>

				<div class='profile_header_summary'>
					<div class='persona_name persona_name_spacer' style='font-size: 24px;'>
						<span class='actual_persona_name'>&nbsp;</span>
					</div>
											<div class='header_real_name_spacer'>&nbsp;</div>
													<div class='profile_summary noexpand'>
															</div>
													<div class='profile_summary_footer' style='display: none;'>
							<span data-panel='{&quot;focusable&quot;:true,&quot;clickOnActivate&quot;:true}' class='whiteLink'>View more info</span>
						</div>
						<script type='text/javascript'> ( function() { InitProfileSummary( g_rgProfileData['summary'] ); } ); </script>
									</div>

			</div>
		</div>
	</div>
</div>
	<div class='profile_content '>
		<div class='profile_content_inner'>
			
			
			

			
			


			<div class='profile_rightcol'>
				<div class='responsive_status_info'>
						<div class='profile_in_game persona offline'>
					<div class='profile_in_game_header'>Currently Offline</div>
					</div>
									</div>

				<div class='responsive_count_link_area'>
					
					
					<div data-panel='{&quot;maintainX&quot;:true,&quot;bFocusRingRoot&quot;:true,&quot;flow-children&quot;:&quot;row&quot;}' class='profile_badges'>
						<div class='profile_count_link_preview_ctn' data-panel='{&quot;focusable&quot;:true,&quot;clickOnActivate&quot;:true}'>
																					<div class='profile_count_link_preview'>
																								<div style='clear: left;'></div>
							</div>
						</div>
					</div>
					
					<div data-panel='{&quot;maintainX&quot;:true,&quot;bFocusRingRoot&quot;:true,&quot;flow-children&quot;:&quot;row&quot;}' id='responsive_groupfriends_element_ctn'>
					</div>

					<div data-panel='{&quot;maintainX&quot;:true,&quot;bFocusRingRoot&quot;:true,&quot;flow-children&quot;:&quot;row&quot;}' class='profile_item_links'>
																												<div data-panel='{&quot;focusable&quot;:true,&quot;clickOnActivate&quot;:true}' class='profile_count_link ellipsis'>
					    ";
						if($row['banstatus'] = "1")
						{
							echo "<p style='color:red;'>Banned since: $time";
						} else {

						}
						
						echo "
							
						<div></div></p>
					</div>
																																																																																																	<div style='clear: left;'></div>
					</div>
				</div>

				
				
			</div>


			<div class='profile_leftcol'>

				
									<div class='profile_recentgame_header profile_leftcol_header'>
						<h2>Recent Activity</h2>
												<div style='clear: both;'></div>
					</div>

					<div class='recent_games'>
													
													
													
											<div class='recent_game'>
								<div data-panel='{&quot;type&quot;:&quot;PanelGroup&quot;}' class='recent_game_content'>
									<div class='game_info'>
										<div class='game_info_cap '><a href='https://steamcommunity.com/app/363970'></a></div>
										<div class='game_info_details'>
											$Test01time hrs on record<br>
																																				last played on $lastplayedTest01																															</div>
										<div class='game_name'><a class='whiteLink' href='https://steamcommunity.com/app/363970'>Test01</a></div>
									</div>

										<div class='game_info_stats'>
					<div class='game_info_achievements_only_ctn'>
													<div class='game_info_achievements'>
						
						
					</div>
								<div style='clear: both;'></div>
			</div>
					</div>
								</div>
							</div></div>
					<div>
						<div class='recentgame_quicklinks'>
																				</div>
						<div style='clear: right;'></div>
					</div>
				
							</div>

			<div style='clear: both;'></div>
		</div>
	</div>

</div>

		</div>	<!-- responsive_page_legacy_content -->

			<div id='footer_spacer' class=''></div>
	<div id='footer_responsive_optin_spacer'></div>
	<div id='footer'>
					<div class='footer_content'>
				<span id='footerLogo'><img src='profile_files/footerLogo_valve.png' alt='Valve Logo' width='96' height='26' border='0'></span>
				<span id='footerText'>
					© Valve Corporation. All rights reserved. All trademarks are 
property of their respective owners in the US and other countries.<br>Some geospatial data on this website is provided by <a href='https://steamcommunity.com/linkfilter/?url=http://www.geonames.org' target='_blank' rel='noreferrer'>geonames.org</a>.					<br>
											<span class='valve_links'>
							<a href='http://store.steampowered.com/privacy_agreement/' target='_blank'>Privacy Policy</a>
							&nbsp; | &nbsp;<a href='https://store.steampowered.com/legal/' target='_blank'>Legal</a>
							&nbsp;| &nbsp;<a href='http://store.steampowered.com/subscriber_agreement/' target='_blank'>Steam Subscriber Agreement</a>
                            &nbsp;| &nbsp;<a href='http://store.steampowered.com/account/cookiepreferences/' target='_blank'>Cookies</a>
						</span>
									</span>
			</div>
							<div class='responsive_optin_link'>
				<div class='btn_medium btnv6_grey_black' onclick='Responsive_RequestMobileView()'>
					<span>View mobile website</span>
				</div>
			</div>
			</div>
	
	</div>	<!-- responsive_page_content -->

</div>	<!-- responsive_page_frame -->

<div class='miniprofile_hover' style='left: 418.783px; top: 121px; display: none; opacity: 1;'><div class='shadow_ul'></div><div class='shadow_top'></div><div class='shadow_ur'></div><div class='shadow_left'></div><div class='shadow_right'></div><div class='shadow_bl'></div><div class='shadow_bottom'></div><div class='shadow_br'></div><div class='miniprofile_hover_inner shadow_content'><div class='miniprofile_container'>
	<!-- Background -->
			<div class='miniprofile_background'>
			<img class='miniprofile_backgroundblur' src='profile_files/21055d0e6e6021ace8a8de8a9d6fe14a97866d62.jpg'>
		</div>
		<div class='miniprofile_playersection '>
		<!-- Player avatar/name stuff -->
				<div class='playersection_avatar border_color_offline'>
							<img src='profile_files/21055d0e6e6021ace8a8de8a9d6fe14a97866d62_medium.jpg' srcset='profile_files/21055d0e6e6021ace8a8de8a9d6fe14a97866d62_medium.jpg 1x, profile_files/21055d0e6e6021ace8a8de8a9d6fe14a97866d62_full.jpg 2x'>					</div>
		<div class='player_content'>
			<span class='persona offline'>Rusek772</span>
										<span class='friend_status_offline'>Offline</span>
					</div>
	</div>
		<div class='miniprofile_detailssection  not_in_game miniprofile_backdrop'>
				<div class='miniprofile_featuredcontainer'>
			<div class='friendPlayerLevel lvl_0'><span class='friendPlayerLevelNum'>0</span></div>			<div class='description'>
				<div class='name'>Steam Level</div>
			</div>
		</div>
	</div>
</div></div></div></body></html>
';
} else {

echo ';
<?php
?>
<!DOCTYPE html>
<html class=' responsive' lang='en'><head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
			<meta name='viewport' content='width=device-width,initial-scale=1'>
		<meta name='theme-color' content='#171a21'>
		<title>Welcome to Steam</title>
	<link rel='shortcut icon' href='https://store.steampowered.com/favicon.ico' type='image/x-icon'>

	
	
	<link href='store_files/motiva_sans.css' rel='stylesheet' type='text/css'>
<link href='store_files/shared_global.css' rel='stylesheet' type='text/css'>
<link href='store_files/buttons.css' rel='stylesheet' type='text/css'>
<link href='store_files/store.css' rel='stylesheet' type='text/css'>
<link href='store_files/home.css' rel='stylesheet' type='text/css'>
<link href='store_files/creator_hub.css' rel='stylesheet' type='text/css'>
<link href='store_files/shared_responsive.css' rel='stylesheet' type='text/css'>
<script type='text/javascript' src='store_files/jquery-1.8.3.min'></script>
<script type='text/javascript'>$J = jQuery.noConflict();</script><script type='text/javascript'>VALVE_PUBLIC_PATH = 'https:\/\/store.cloudflare.steamstatic.com\/public\/';</script><script type='text/javascript' src='store_files/tooltip'></script>

<script type='text/javascript' src='store_files/shared_global'></script>

<script type='text/javascript' src='store_files/main'></script>

<script type='text/javascript' src='store_files/dynamicstore'></script>

<script type='text/javascript'>Object.seal && [ Object, Array, String, Number ].map( function( builtin ) { Object.seal( builtin.prototype ); } );</script>
		<script type='text/javascript'>
			document.addEventListener('DOMContentLoaded', function(event) {
				$J.data( document, 'x_readytime', new Date().getTime() );
				$J.data( document, 'x_oldref', GetNavCookie() );
				SetupTooltips( { tooltipCSSClass: 'store_tooltip'} );
		});
		</script><script type='text/javascript' src='store_files/broadcast_carousel'></script>
<script type='text/javascript' src='store_files/home'></script>
<script type='text/javascript' src='store_files/cluster'></script>
<script type='text/javascript' src='store_files/shared_responsive_adapter'></script>

						<meta name='twitter:card' content='summary_large_image'>
					<meta name='Description' content='Steam is the ultimate destination for playing, discussing, and creating games.'>
			
	<meta name='twitter:site' content='@steam'>

						<meta property='og:title' content='Steam Store'>
					<meta property='twitter:title' content='Welcome to Steam'>
					<meta property='og:type' content='website'>
					<meta property='fb:app_id' content='105386699540688'>
					<meta property='og:site' content='Steam'>
					<meta property='og:url' content='https://store.steampowered.com/'>
					<meta property='og:description' content='Steam is the ultimate destination for playing, discussing, and creating games.'>
					<meta property='twitter:description' content='Steam is the ultimate destination for playing, discussing, and creating games.'>
			
			<link rel='canonical' href='https://store.steampowered.com/'>
	
			<link rel='image_src' href='https://cdn.cloudflare.steamstatic.com/store/home/store_home_share.jpg'>
		<meta property='og:image' content='https://cdn.cloudflare.steamstatic.com/store/home/store_home_share.jpg'>
		<meta name='twitter:image' content='https://cdn.cloudflare.steamstatic.com/store/home/store_home_share.jpg'>
		
	
	
	
	
	<link id='chromealerabat-link' rel='stylesheet' type='text/css' href='store_files/content.css'></head>
<body class='v6 infinite_scrolling responsive_page'>


<div class='responsive_page_frame with_header'>
						<div class='responsive_page_menu_ctn mainmenu'>
				<div class='responsive_page_menu' id='responsive_page_menu'>
										<div class='mainmenu_contents'>

						<div class='mainmenu_contents_items'>
						<a class='menuitem' href='profile.php'>$user
						</a>
								<a class='menuitem supernav' href='#' data-tooltip-type='selector' data-tooltip-content='.submenu_store'>
		Store	</a>
	<div class='submenu_store' style='display: none;' data-submenuid='store'>
		<a class='submenuitem' href='#'>Home</a>
				<a class='submenuitem' href='wishlist.php'>Wishlist</a>
		<a class='submenuitem' href='points.php'>Points Shop</a>	
       	<a class='submenuitem' href='news.php'>News</a>
					<a class='submenuitem' href='stats.php'>Stats</a>
					</div>


			<a class='menuitem supernav' style='display: block' href='community.php data-tooltip-type='selector' data-tooltip-content='.submenu_community'>
			Community		</a>
		<div class='submenu_community' style='display: none;' data-submenuid='community'>
			<a class='submenuitem' href='community.php'>Home</a>
			<a class='submenuitem' href='discussions.php'>Discussions</a>
			<a class='submenuitem' href='workshop.php'>Workshop</a>
			<a class='submenuitem' href='market.php'>Market</a>
											</div>
		

	
	
	<a class='menuitem' href='https://help.steampowered.com/en/'>
		Support	</a>

							<div class='minor_menu_items'>
																								<div class='menuitem change_language_action'>
									Change language								</div>
																																	<div class='menuitem' onclick='Responsive_RequestDesktopView();'>
										View desktop website									</div>
															</div>
						</div>
						<div class='mainmenu_footer_spacer  '></div>
						<div class='mainmenu_footer'>
															<div class='mainmenu_footer_logo'><img src='store_files/logo_valve_footer.png'></div>
								© Valve Corporation. All rights reserved. All trademarks are 
property of their respective owners in the US and other countries.						
		<span class='mainmenu_valve_links'>
									<a href='https://store.steampowered.com/privacy_agreement/?snr=1_4_4__global-responsive-menu' target='_blank'>Privacy Policy</a>
									&nbsp;| &nbsp;<a href='http://www.valvesoftware.com/legal.htm' target='_blank'>Legal</a>
									&nbsp;| &nbsp;<a href='https://store.steampowered.com/subscriber_agreement/?snr=1_4_4__global-responsive-menu' target='_blank'>Steam Subscriber Agreement</a>
									&nbsp;| &nbsp;<a href='https://store.steampowered.com/steam_refunds/?snr=1_4_4__global-responsive-menu' target='_blank'>Refunds</a>
								</span>
													</div>
					</div>
									</div>
			</div>
		
		<div class='responsive_local_menu_tab'></div>

		<div class='responsive_page_menu_ctn localmenu'>
			<div class='responsive_page_menu' id='responsive_page_local_menu' data-panel='{&quot;onOptionsActionDescription&quot;:&quot;Filter&quot;,&quot;onOptionsButton&quot;:&quot;Responsive_ToggleLocalMenu()&quot;,&quot;onCancelButton&quot;:&quot;Responsive_ToggleLocalMenu()&quot;}'>
				<div class='localmenu_content' data-panel='{&quot;maintainY&quot;:true,&quot;bFocusRingRoot&quot;:true,&quot;flow-children&quot;:&quot;column&quot;}'>
				</div>
			</div>
		</div>



					<div class='responsive_header'>
				<div class='responsive_header_content'>
					<div id='responsive_menu_logo'>
						<img src='store_files/header_menu_hamburger.png' height='100%'>
											</div>
					<div class='responsive_header_logo'>
						<a href='https://store.steampowered.com/?snr=1_4_4__global-responsive-menu'>
															<img src='store_files/header_logo.png' alt='STEAM' height='36' border='0'>
													</a>
					</div>
				</div>
			</div>
		
		<div class='responsive_page_content_overlay'>

		</div>

		<div class='responsive_fixonscroll_ctn nonresponsive_hidden '>
		</div>
	
	<div class='responsive_page_content'>

		<div id='global_header' data-panel='{&quot;flow-children&quot;:&quot;row&quot;}'>
	<div class='content'>
		<div class='logo'>
			<span id='logo_holder'>
									<a href='#'>
						<img src='store_files/logo_steam.svg' width='176' height='44'>
					</a>
							</span>
		</div>

			<div class='supernav_container'>
	<a class='menuitem supernav' href='#' data-tooltip-type='selector' data-tooltip-content='.submenu_store'>
		STORE	</a>
	


			<a class='menuitem supernav' style='display: block' href='community.php' data-tooltip-type='selector' data-tooltip-content='.submenu_community'>
			COMMUNITY		</a>
		
		

	
						<a class='menuitem' href='https://store.steampowered.com/about/?snr=1_4_4__global-header'>
				ABOUT			</a>
			
	<a class='menuitem' href='https://help.steampowered.com/en/'>
		SUPPORT	</a>
	<div style='position: absolute; z-index: 1500; opacity: 0; left: 1px; top: 64px; pointer-events: none;' class='supernav_content'><div class='submenu_store' style='' data-submenuid='store'>
		<a class='submenuitem' href='#'>Home</a>
				<a class='submenuitem' href='Wishlist.php'>Wishlist</a>
		<a class='submenuitem' href='points.php'>Points Shop</a>	
       	<a class='submenuitem' href='stats.php'>News</a>
					<a class='submenuitem' href='stats.php'>Stats</a>
					</div></div><div style='position: absolute; z-index: 1500; opacity: 0; left: 59px; top: 64px; pointer-events: none;' class='supernav_content'><div class='submenu_community' style='' data-submenuid='community'>
			<a class='submenuitem' href='community.php'>Home</a>
			<a class='submenuitem' href='discussions.php'>Discussions</a>
			<a class='submenuitem' href='workshop.php'>Workshop</a>
			<a class='submenuitem' href='market.php'>Market</a>

											</div></div></div>
	<script type='text/javascript'>
		jQuery(function($) {
			$('#global_header .supernav').v_tooltip({'location':'bottom', 'destroyWhenDone': false, 'tooltipClass': 'supernav_content', 'offsetY':-4, 'offsetX': 1, 'horizontalSnap': 4, 'tooltipParent': '#global_header .supernav_container', 'correctForScreenSize': false});
		});
	</script>

		<div id='global_actions'>
			<div id='global_action_menu'>
									<div class='header_installsteam_btn header_installsteam_btn_green'>

						<a class='header_installsteam_btn_content' href='https://store.steampowered.com/getsteam.php'>
							Install Steam						</a>
					</div>
				

<a class='global_action_link' href='profile.php?user=$user'>$user</a>';
											&nbsp;|&nbsp;
						<span class='pulldown global_action_link' id='language_pulldown' onclick='ShowMenu( this, 'language_dropdown', 'right' );'>also not working</span>
						<div class='popup_block_new' id='language_dropdown' style='visibility: visible; top: 25px; left: -34.3333px; display: none; opacity: 1;'>
							<div class='popup_body popup_menu'>
																																					<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=schinese' onclick='ChangeLanguage( 'schinese' ); return false;'>简体中文 (Simplified Chinese)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=tchinese' onclick='ChangeLanguage( 'tchinese' ); return false;'>繁體中文 (Traditional Chinese)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=japanese' onclick='ChangeLanguage( 'japanese' ); return false;'>日本語 (Japanese)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=koreana' onclick='ChangeLanguage( 'koreana' ); return false;'>한국어 (Korean)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=thai' onclick='ChangeLanguage( 'thai' ); return false;'>ไทย (Thai)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=bulgarian' onclick='ChangeLanguage( 'bulgarian' ); return false;'>Български (Bulgarian)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=czech' onclick='ChangeLanguage( 'czech' ); return false;'>Čeština (Czech)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=danish' onclick='ChangeLanguage( 'danish' ); return false;'>Dansk (Danish)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=german' onclick='ChangeLanguage( 'german' ); return false;'>Deutsch (German)</a>
																																							<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=spanish' onclick='ChangeLanguage( 'spanish' ); return false;'>Español - España (Spanish - Spain)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=latam' onclick='ChangeLanguage( 'latam' ); return false;'>Español - Latinoamérica (Spanish - Latin America)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=greek' onclick='ChangeLanguage( 'greek' ); return false;'>Ελληνικά (Greek)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=french' onclick='ChangeLanguage( 'french' ); return false;'>Français (French)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=italian' onclick='ChangeLanguage( 'italian' ); return false;'>Italiano (Italian)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=hungarian' onclick='ChangeLanguage( 'hungarian' ); return false;'>Magyar (Hungarian)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=dutch' onclick='ChangeLanguage( 'dutch' ); return false;'>Nederlands (Dutch)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=norwegian' onclick='ChangeLanguage( 'norwegian' ); return false;'>Norsk (Norwegian)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=polish' onclick='ChangeLanguage( 'polish' ); return false;'>Polski (Polish)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=portuguese' onclick='ChangeLanguage( 'portuguese' ); return false;'>Português (Portuguese)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=brazilian' onclick='ChangeLanguage( 'brazilian' ); return false;'>Português - Brasil (Portuguese - Brazil)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=romanian' onclick='ChangeLanguage( 'romanian' ); return false;'>Română (Romanian)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=russian' onclick='ChangeLanguage( 'russian' ); return false;'>Русский (Russian)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=finnish' onclick='ChangeLanguage( 'finnish' ); return false;'>Suomi (Finnish)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=swedish' onclick='ChangeLanguage( 'swedish' ); return false;'>Svenska (Swedish)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=turkish' onclick='ChangeLanguage( 'turkish' ); return false;'>Türkçe (Turkish)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=vietnamese' onclick='ChangeLanguage( 'vietnamese' ); return false;'>Tiếng Việt (Vietnamese)</a>
																													<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=ukrainian' onclick='ChangeLanguage( 'ukrainian' ); return false;'>Українська (Ukrainian)</a>
																									<a class='popup_menu_item tight' href='https://www.valvesoftware.com/en/contact?contact-person=Translation%20Team%20Feedback' target='_blank'>Report a translation problem</a>
							</div>
						</div>
												</div>
					</div>
			</div>
</div>
<div id='responsive_store_nav_ctn'></div><div id='responsive_store_nav_overlay' style='display:none;'><div id='responsive_store_nav_overlay_ctn'></div><div id='responsive_store_nav_overlay_bottom'></div></div><div data-cart-banner-spot='1'></div>
		<div class='responsive_page_template_content' id='responsive_page_template_content' data-panel='{&quot;autoFocus&quot;:true}'>

			
<script type='text/javascript'>
	$J( function() {

		GStoreItemData.AddStoreItemDataSet(
			{'rgApps':[],'rgPackages':[],'rgBundles':[]}		);
		GStoreItemData.AddStoreAccountData( [] );

		GHomepage.InitUserData( {
			rgRecommendedGames: [],
			bMergeRecommendationsToHighlights: 0,
			bNewRecommendations: 0,
			bUseNewMainCapZip: 1,
			bIsLimitedUser: 0,
			rgCuratedAppsData: [],
			rgCreatorFollowedAppData: [],
			oSettings: {'main_cluster':{'top_sellers':1,'early_access':1,'games_already_in_library':null,'recommended_for_you':1,'prepurchase':1,'games':null,'software':1,'dlc_for_you':1,'dlc':null,'recently_viewed':1,'new_on_steam':null,'popular_new_releases':null,'games_not_in_library':null,'only_current_platform':1,'video':1,'localized':1,'virtual_reality':1,'recommended_by_curators':null,'hidden':null},'new_on_steam':{'top_sellers':null,'early_access':null,'games_already_in_library':null,'recommended_for_you':null,'prepurchase':null,'games':null,'software':1,'dlc_for_you':null,'dlc':null,'recently_viewed':null,'new_on_steam':null,'popular_new_releases':null,'games_not_in_library':null,'only_current_platform':1,'video':1,'localized':1,'virtual_reality':1,'recommended_by_curators':null,'hidden':null},'recently_updated':{'top_sellers':null,'early_access':1,'games_already_in_library':null,'recommended_for_you':null,'prepurchase':null,'games':null,'software':1,'dlc_for_you':null,'dlc':null,'recently_viewed':null,'new_on_steam':null,'popular_new_releases':null,'games_not_in_library':1,'only_current_platform':1,'video':1,'localized':1,'virtual_reality':1,'recommended_by_curators':null,'hidden':null},'tabs':{'top_sellers':null,'early_access':1,'games_already_in_library':1,'recommended_for_you':null,'prepurchase':null,'games':null,'software':null,'dlc_for_you':null,'dlc':null,'recently_viewed':null,'new_on_steam':null,'popular_new_releases':null,'games_not_in_library':null,'only_current_platform':null,'video':null,'localized':1,'virtual_reality':null,'recommended_by_curators':null,'hidden':null},'specials':{'top_sellers':1,'early_access':1,'games_already_in_library':1,'recommended_for_you':1,'prepurchase':null,'games':null,'software':null,'dlc_for_you':null,'dlc':null,'recently_viewed':null,'new_on_steam':null,'popular_new_releases':1,'games_not_in_library':null,'only_current_platform':null,'video':null,'localized':1,'virtual_reality':null,'recommended_by_curators':null,'hidden':null},'more_recommendations':{'top_sellers':1,'early_access':1,'games_already_in_library':null,'recommended_for_you':1,'prepurchase':null,'games':null,'software':null,'dlc_for_you':null,'dlc':null,'recently_viewed':null,'new_on_steam':null,'popular_new_releases':1,'games_not_in_library':null,'only_current_platform':1,'video':null,'localized':1,'virtual_reality':null,'recommended_by_curators':null,'hidden':null},'friend_recommendations':{'top_sellers':1,'early_access':1,'games_already_in_library':null,'recommended_for_you':null,'prepurchase':null,'games':null,'software':null,'dlc_for_you':null,'dlc':null,'recently_viewed':null,'new_on_steam':null,'popular_new_releases':null,'games_not_in_library':null,'only_current_platform':null,'video':null,'localized':1,'virtual_reality':null,'recommended_by_curators':null,'hidden':null},'curators':{'top_sellers':null,'early_access':1,'games_already_in_library':null,'recommended_for_you':null,'prepurchase':null,'games':null,'software':1,'dlc_for_you':null,'dlc':null,'recently_viewed':null,'new_on_steam':null,'popular_new_releases':null,'games_not_in_library':null,'only_current_platform':1,'video':1,'localized':1,'virtual_reality':1,'recommended_by_curators':null,'hidden':null},'home':{'top_sellers':null,'early_access':1,'games_already_in_library':null,'recommended_for_you':null,'prepurchase':1,'games':null,'software':1,'dlc_for_you':null,'dlc':null,'recently_viewed':null,'new_on_steam':null,'popular_new_releases':null,'games_not_in_library':null,'only_current_platform':null,'video':1,'localized':null,'virtual_reality':1,'recommended_by_curators':null,'hidden':null},'success':1,'rwgrsn':-2},
			rgFriendRecommendations: [],
			rgRecommendedAppsByCreators: [],
			rgRecommendedBySteamLabsApps: [],
			rgCommunityRecommendations: [],
			strCommunityRecommendationsPrefLastSaved: false,
			rgRecommendedByDeepDiveApps: [],
			rgRecommendedByDeepDiveKeyTags: [],
			rgRecommendedByDeepDiveAppTags: [],
			recommendedByDeepDiveMethod: '',
			recommendedByDeepDiveFocusedApp: -1,
            nLastIRSettingsUpdate: 0,
            rgIRIncludedTags: [],
            rgIRExcludedTags: [],
			bShowTakeunder: 0,
            rgShuffleModules: [],
            nModuleShuffleCohort: 0,
            bDisplayShuffleCohort: false		} );

		InitAppPriorityLists( {} );

		if ( GHomepage.recommendedByDeepDiveFocusedApp > 0 )
		    $J('.deep_dive_omni_ctn').show();

		
					$J('#discovery_queue_static').hide();
						} );

	function injectSearch (name, resultsContainerName, resultsContentName)
	{
		var g_rgUserPreferences = {
			excluded_tags : [],
			excluded_content_descriptors : [3,4]		};
		var thing = $J('#'+name);
		var elemSuggestionsCtn = $J('#deep_dive_searchterm_options');
		var elemSuggestions = $J('#deep_dive_search_suggestion_contents');
		EnableSearchSuggestions( thing, '1_4_4_', 'PL', 1, 'english', g_rgUserPreferences, '15604948', elemSuggestionsCtn, elemSuggestions);
	}
</script>
<h1 align='center'>That account doesn't exist</h1>
</html>
	";
}

?>