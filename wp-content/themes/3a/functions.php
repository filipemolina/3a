<?php

//Registrar o Menu do site no Wordpress

if(function_exists('register_nav_menus'))
	register_nav_menus(['primary' => 'Menu Principal Superior']);