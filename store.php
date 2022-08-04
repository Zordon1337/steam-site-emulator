<?php
$user = $_GET['user'];
echo "
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

<script type='text/javascript' src='store_files/shared_global'></script>

<script type='text/javascript' src='store_files/main'></script>

<script type='text/javascript' src='store_files/dynamicstore'></script>


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

						echo'<div class='mainmenu_contents_items'>';
						echo'<a class='menuitem' href='profile.php?user=$user'>$user';
						echo'</a>';

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
	<div class='submenu_store' style='display: none;' data-submenuid='store'>
		<a class='submenuitem' href='#'>Home</a>
			</div>


			<a class='menuitem supernav' style='display: block' href='community.php' data-tooltip-type='selector' data-tooltip-content='.submenu_community'>
			COMMUNITY		</a>
		<div class='submenu_community' style='display: none;' data-submenuid='community'>
			<a class='submenuitem' href='community.php'>Home</a>
											</div>
		

			<a class='menuitem supernav username persona_name_text_content' href='profile.php?user=$user' data-tooltip-type='selector' data-tooltip-content='.submenu_username'>
			$user		</a>
		<div class='submenu_username' style='display: none;' data-submenuid='username'>
			<a class='submenuitem' href='profile.php?user=$user'>Profile</a>
			<a class='submenuitem' href='profile.php?page=Friends'>Friends</a>
    		</div>
	
						<a class='menuitem' href='chat.php'>
				Chat			</a>
			
	<a class='menuitem' href='https://help.steampowered.com/en/'>
		SUPPORT	</a>
	</div>
	<script type='text/javascript'>
		jQuery(function($) {
			$('#global_header .supernav').v_tooltip({'location':'bottom', 'destroyWhenDone': false, 'tooltipClass': 'supernav_content', 'offsetY':-4, 'offsetX': 1, 'horizontalSnap': 4, 'tooltipParent': '#global_header .supernav_container', 'correctForScreenSize': false});
		});
	</script>

		<div id='global_actions'>
			<div id='global_action_menu'>
									<div class='header_installsteam_btn header_installsteam_btn_gray'>

						<a class='header_installsteam_btn_content' href='https://store.steampowered.com/about/?snr=1_4_4__global-header'>
							Install Steam						</a>
					</div>
				
				
										<!-- notification inbox area -->
																								<div id='header_notification_area'>
									<script type='text/javascript'>(EnableNotificationCountPolling);</script>
		<div id='header_notification_link' class='header_notification_btn global_header_toggle_button notification_count_total_ctn no_notifications' onclick='ShowMenu( this, 'header_notification_dropdown', 'right' );'>
			<span class='notification_count'>0</span>
			<span class='header_notification_envelope'>
				<img src='store_files/header_menu_notifications.png' width='11' height='8'>
			</span>
		</div>
	
			<div class='popup_block_new' id='header_notification_dropdown' style='display: none;'>
			<div class='popup_body popup_menu'>
									<a data-notification-type='4' class='popup_menu_item notification_ctn header_notification_comments' href='https://steamcommunity.com/profiles/76561199192239533/commentnotifications/'>
				<span class='notification_icon'></span><span class='notification_count_string singular' style='display: none;'>1 new comment</span><span class='notification_count_string plural' style=''><span class='notification_count'>0</span> new comments</span>			</a>
			<div class='header_notification_dropdown_seperator'></div>
						<a data-notification-type='5' class='popup_menu_item notification_ctn header_notification_items' href='https://steamcommunity.com/profiles/76561199192239533/inventory/'>
				<span class='notification_icon'></span><span class='notification_count_string singular' style='display: none;'>1 new item in your inventory</span><span class='notification_count_string plural' style=''><span class='notification_count'>0</span> new items in your inventory</span>			</a>
			<div class='header_notification_dropdown_seperator'></div>
								<a data-notification-type='6' class='popup_menu_item notification_ctn header_notification_invites' href='https://steamcommunity.com/profiles/76561199192239533/home/invites/'>
				<span class='notification_icon'></span><span class='notification_count_string singular' style='display: none;'>1 new invite</span><span class='notification_count_string plural' style=''><span class='notification_count'>0</span> new invites</span>			</a>

					<div class='header_notification_dropdown_seperator'></div>
						<a data-notification-type='8' class='popup_menu_item notification_ctn header_notification_gifts' href='https://steamcommunity.com/profiles/76561199192239533/inventory/#pending_gifts'>
				<span class='notification_icon'></span><span class='notification_count_string singular' style='display: none;'>1 new gift</span><span class='notification_count_string plural' style=''><span class='notification_count'>0</span> new gifts</span>			</a>
			<div class='header_notification_dropdown_seperator'></div>
						<a data-notification-type='9' class='popup_menu_item notification_ctn header_notification_offlinemessages' href='javascript:void(0)' onclick='LaunchWebChat(); HideMenu( 'header_notification_link', 'header_notification_dropdown' ); return false;'>
				<span class='notification_icon'></span><span class='notification_count_string singular' style='display: none;'>1 unread chat message</span><span class='notification_count_string plural' style=''><span class='notification_count'>0</span> unread chat messages</span>			</a>
								<a data-notification-type='1' class='popup_menu_item notification_ctn hide_when_empty header_notification_tradeoffers' href='https://steamcommunity.com/profiles/76561199192239533/tradeoffers/'>
						<div class='header_notification_dropdown_seperator'></div>
						<span class='notification_icon'></span><span class='notification_count_string singular' style='display: none;'>1 new trade notification</span><span class='notification_count_string plural' style=''><span class='notification_count'>0</span> new trade notifications</span>					</a>
								<a data-notification-type='2' class='popup_menu_item notification_ctn hide_when_empty header_notification_asyncgame' href='https://steamcommunity.com/profiles/76561199192239533/gamenotifications'>
						<div class='header_notification_dropdown_seperator'></div>
						<span class='notification_icon'></span><span class='notification_count_string singular' style='display: none;'>1 turn waiting</span><span class='notification_count_string plural' style=''><span class='notification_count'>0</span> new turns waiting</span>					</a>
								<a data-notification-type='3' class='popup_menu_item notification_ctn hide_when_empty header_notification_moderatormessage' href='https://steamcommunity.com/profiles/76561199192239533/moderatormessages'>
						<div class='header_notification_dropdown_seperator'></div>
						<span class='notification_icon'></span><span class='notification_count_string singular' style='display: none;'>1 community message</span><span class='notification_count_string plural' style=''><span class='notification_count'>0</span> community messages</span>					</a>
								<a data-notification-type='10' class='popup_menu_item notification_ctn hide_when_empty header_notification_helprequestreply' href='https://help.steampowered.com/en/wizard/HelpRequests'>
						<div class='header_notification_dropdown_seperator'></div>
						<span class='notification_icon'></span><span class='notification_count_string singular' style='display: none;'>1 reply from Steam Support</span><span class='notification_count_string plural' style=''><span class='notification_count'>0</span> replies from Steam Support</span>					</a>
									</div>
		</div>
							</div>
					<span class='pulldown global_action_link persona_name_text_content' href='profile.php?user=$user' id='account_pulldown' onclick='ShowMenu( this, 'account_dropdown', 'right', 'bottom', true );'>
						$user					</span>
					<div class='popup_block_new' id='account_dropdown' style='display: none;'>
						<div class='popup_body popup_menu'>
															<a class='popup_menu_item' href='https://steamcommunity.com/profiles/76561199192239533/'>View profile</a>
								<a class='popup_menu_item' href='https://store.steampowered.com/account/?snr=1_4_4__global-header'>Account details</a>
																						<a class='popup_menu_item' href='index.php'>Logout: <span class='persona online'>$user</span></a>
																						<a class='popup_menu_item' href='settings.php?set=Preferences'>Preferences</a>
							
															<span class='popup_menu_item' id='account_language_pulldown'>Change language(don't use plz)</span>
								<div class='popup_block_new' id='language_dropdown' style='display: none;'>
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
																																			<a class='popup_menu_item tight' href='https://store.steampowered.com/?l=english' onclick='ChangeLanguage( 'english' ); return false;'>English</a>
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
																															<a class='popup_menu_item tight' href='https://www.valvesoftware.com/en/contact?contact-person=Translation%20Team%20Feedback' target='_blank'>
											Report a translation problem										</a>
									</div>
								</div>
													</div>
					</div>
					<script type='text/javascript'>
						RegisterFlyout( 'account_language_pulldown', 'language_dropdown', 'leftsubmenu', 'bottomsubmenu', true );
					</script>
												</div>
							<a href='profile.php?user=$user' class='user_avatar playerAvatar offline'>
				</a>
					</div>
			</div>
</div>
<div id='responsive_store_nav_ctn'></div><div id='responsive_store_nav_overlay' style='display:none;'><div id='responsive_store_nav_overlay_ctn'></div><div id='responsive_store_nav_overlay_bottom'></div></div><div data-cart-banner-spot='1'></div>
		<div class='responsive_page_template_content' id='responsive_page_template_content' data-panel='{&quot;autoFocus&quot;:true}'>

			
<script type='text/javascript'>
	( function() {

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
		    ('.deep_dive_omni_ctn').show();

		
					('#discovery_queue_static').hide();
						} );

	function injectSearch (name, resultsContainerName, resultsContentName)
	{
		var g_rgUserPreferences = {
			excluded_tags : [],
			excluded_content_descriptors : [3,4]		};
		var thing = ('#'+name);
		var elemSuggestionsCtn = ('#deep_dive_searchterm_options');
		var elemSuggestions = ('#deep_dive_search_suggestion_contents');
		EnableSearchSuggestions( thing, '1_4_4_', 'PL', 1, 'english', g_rgUserPreferences, '15604948', elemSuggestionsCtn, elemSuggestions);
	}
</script>
<h1 align='center'>shop will be never implemented (or maybe? i'm not 100% sure)</h1>
</html>
";
?>