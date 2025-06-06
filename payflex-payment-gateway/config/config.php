<?php
$environments = array();
$environments["develop"] 	=	array(
	"name"		=>	"Sandbox",
	"api_url"	=>	"https://api.uat.payflex.co.za",
	"auth_url"  =>  "https://auth-uat.payflex.co.za/auth/merchant",
	"web_url"	=>	"https://api.uat.payflex.co.za",
	"auth_audience" => "https://auth-dev.payflex.co.za",
);

$environments["production"] =	array(
	"name"		=>	"Production",
	"api_url"	=>	"https://api.payflex.co.za",
	"auth_url"  =>  "https://auth.payflex.co.za/auth/merchant",
	"web_url"	=>	"https://api.payflex.co.za",
	"auth_audience" => "https://auth-production.payflex.co.za",
);
