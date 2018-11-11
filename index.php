<?php
/*
Plugin Name: RuiJi Scraper
Plugin URI: http://www.scraper.top
Description: RuiJi Scraper
Author: ruijiscraper
Version: 1.0
 */

add_action('admin_menu', 'add_settings_menu');

function add_settings_menu() {
    add_menu_page(__('RuiJi Scraper Setting'), __('RuiJi Scraper'), 'administrator',  __FILE__,'add_settings_page');
}

//function ruiji_scraper_nonce_callback() {
//    return wp_create_nonce('wp_rest');
//}

//function ruiji_scraper_register_route() {
//    register_rest_route( 'ruiji/scraper', 'nonce', [
//      'methods'   => 'GET',
//      'callback'  => 'ruiji_scraper_nonce_callback'
//    ] );
//}

//add_action( 'rest_api_init', 'ruiji_scraper_register_route');

function nonce_extender_nonce_filter( $lifetime ) {
	$nonce = get_option( 'ruiji-scraper-nonce' );
	if ( false !== $nonce && ! ( defined( 'DISABLE_NONCE_EXTENDER' ) && DISABLE_NONCE_EXTENDER ) ) {
		$lifetime = absint( $nonce );
	}

	return $lifetime;
}

add_filter( 'nonce_life', 'nonce_extender_nonce_filter' );

function add_settings_page(){
	if($_POST['nonce'] != '') {
		update_option('ruiji-scraper-nonce',$_POST['nonce']);
	}

?>
<div>
	<?php screen_icon(); //显示图标  ?>
	<div id="ruiji-div">
		<h2>RuiJi Scraper(Demo) Setting</h2>
		<div>
			Endpoint
			<h2 style="display:inline-block">
				<?php echo esc_url_raw( rest_url() ) ?>
			</h2>
		</div>
		<div>
			Cookie Nonce
			<h2 style="display:inline-block">
				<?php echo wp_create_nonce('wp_rest') ?>
			</h2>
		</div>
		<div>
			<form action="" method="post">
				Nonce life
				<input type="number" name="nonce" value="<?php echo get_option( 'ruiji-scraper-nonce', DAY_IN_SECONDS ) ?>" min="0" />
				<input type="submit" name="submit" value="Save" class="button button-primary" />
				<p class="description"
					id="nonce-description">
					<?php echo sprintf( __( 'Set the nonce security code expire time in seconds. <b>Tip: Use %d for 1 hour, %d for 1 day, %d for 1 week, %d for 1 month, and %d for 1 year.</b>', 'nonce-extender' ), HOUR_IN_SECONDS, DAY_IN_SECONDS, WEEK_IN_SECONDS, MONTH_IN_SECONDS, YEAR_IN_SECONDS ); ?>
				</p>
			</form>
		</div>
	</div>
	<div>
		<table>
			<tr>
				<td>
					<h3>1. Install RuiJi Scraper from store</h3>
					<a href="https://chrome.google.com/webstore/detail/ruiji-scraper/klhahkhllngppofpkjdlbmnglnmnbbol" target="_blank">google</a> <br />
					<a href="https://addons.mozilla.org/zh-CN/firefox/addon/ruiji-scraper/" target="_blank">firefox</a>
				</td>
			</tr>
			<tr>
				<td>
					<h3>2. Learn our course</h3>
					<a href="https://www.youtube.com/channel/UCxAnwL_OhmUZMIR17TqUv-Q?view_as=subscriber" target="_blank">youtube</a> <br />
					<a href="https://space.bilibili.com/17698817/#/video" target="_blank">bilibili</a> <br />
				</td>
			</tr>
			<tr>
				<td>
					<h3>3. Exract some article to worksheet...</h3>
				</td>
			</tr>
			<tr>
				<td>
					<h3>4. Follow these steps </h3>
					<img src="../wp-content/plugins/ruiji-scraper/1.png" />
				</td>
			</tr>
			<tr>
				<td>
					<img src="../wp-content/plugins/ruiji-scraper/2.png" />
				</td>
			</tr>
			<tr>
				<td>
					<img src="../wp-content/plugins/ruiji-scraper/3.png" />
				</td>
			</tr>
			<tr>
				<td>
					<img src="../wp-content/plugins/ruiji-scraper/4.png" />
				</td>
			</tr>
			<tr>
				<td>
					<img src="../wp-content/plugins/ruiji-scraper/5.png" />
				</td>
			</tr>
		</table>
	</div>
	<style>
        #ruiji-div {
            background-color: bisque;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            margin-right: 10px;
        }

            #ruiji-div label {
                vertical-align: top;
                width: 70px;
                display: inline-block;
            }

        #ruiji-export-wordpress {
            max-width: 800px !important;
            table-layout: fixed;
        }

            #ruiji-export-wordpress td {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                max-width: 200px;
                width: 10px;
            }

        .description {
            margin-top: 10px;
        }
	</style>
</div>

<?php }
function getRandomString($len, $chars=null){
    if (is_null($chars)){
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    }

    mt_srand(10000000*(double)microtime());

    for ($i = 0, $str = '', $lc = strlen($chars)-1; $i < $len; $i++){
        $str .= $chars[mt_rand(0, $lc)];
    }

    return $str;
}
?>