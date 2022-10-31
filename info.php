<?php
$update = array(
	"name" => "Misha Update Checker",
	"slug" => "misha-update-checker",
	"author" => "<a href='https://rudrastyh.com'>Misha Rudrastyh</a>",
	"author_profile" => "http://profiles.wordpress.org/rudrastyh",
	"version" => "2.0",
	"download_url" => "https://github.com/bilalmalik001/License-extension-updates/blob/main/woocommerce-license-extension-v2.zip",
	"requires" => "3.0",
	"tested" => "5.8",
	"requires_php" => "5.3",
	"last_updated" => "2021-01-30 02:10:00",
	"sections" => [
		"description" => "This simple plugin does nothing, only gets updates from a custom server",
		"installation" => "Click the activate button and that's it.",
		"changelog" => "<h4>1.0 –  1 august 2021</h4><ul><li>Bug fixes.</li><li>Initital release.</li></ul>"
	],
	"banners" => [
		"low" => "https://rudrastyh.com/wp-content/uploads/updater/banner-772x250.jpg",
		"high" => "https://rudrastyh.com/wp-content/uploads/updater/banner-1544x500.jpg"
	]
);

header( 'Content-Type: application/json' );
echo json_encode( $update );