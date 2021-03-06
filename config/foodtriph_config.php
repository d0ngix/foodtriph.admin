<?php
return [
	//Food Establishment Type:
    'FoodType' => [
    	1 => 'Restaurant',
    	2 => 'Street Food',
    	3 => 'Carenderia',
    	4 => 'Home Base Chef',
    	5 => 'Fast Food',
    ],
    
    //Environtment
	'env' => 'http://localhost:9090/',
	'env' => 'https://foodtriph-api.herokuapp.com/',
    
	//default image
	'default_img' => "https://placeholdit.imgix.net/~text?txtsize=75&txt={{img}}&w=600&h=450",//"img/logo_foodtriph.png",
	
	//curreny symbol
	'defaultCurrencySymbol' => 'PHP',
	
	//Transaction status
	'TransacStatus' => [
		0 => 'Cancelled',
		1 => 'Pending - Awaiting Acknowledgement',
		2 => 'Accepted - Awaiting Payment',
		3 => 'Paid',
		4 => 'Preparing',
		5 => 'Delivered - Order Completed',
	],	
];