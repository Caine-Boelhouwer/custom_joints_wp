<?php
// Google API Key
function my_acf_init() {
	acf_update_setting( 'google_api_key', 'AIzaSyBheVmrWzerXZwuSzUjxZ26gFTIosGUpeE' );
}
add_action( 'acf/init', 'my_acf_init' );
