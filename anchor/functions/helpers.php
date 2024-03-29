<?php

/**
	Theme helpers functions
*/


// Url helpers
function full_url($url = '') {
	return Uri::build(array('path' => Uri::make($url)));
}

function base_url($url = '') {
    return Uri::make($url);
}

function theme_url($file = '') {
	return asset('themes/' . Config::get('meta.theme') . '/' . ltrim($file, '/'));
}

function theme_include($file) {
	if(is_readable($path = PATH . 'themes' . DS . Config::get('meta.theme') . DS . ltrim($file, '/') . '.php')) {
		return require $path;
	}
}

function current_url() {
	return Uri::current();
}

function admin_url($url = '') {
    return base_url('admin/' . ltrim($url, '/'));
}

function search_url() {
	return base_url('search');
}

function rss_url() {
    return base_url('feeds/rss');
}

//  Custom function helpers
function bind($page, $fn) {
	Events::bind($page, $fn);
}

function receive($name = '') {
	return Events::call($name);
}

// page type helpers
function is_homepage() {
	if($itm = Registry::get('page')) {
		return $itm->id == Config::get('meta.home_page');
	}

	return false;
}

function is_postspage() {
	if($itm = Registry::get('page')) {
		return $itm->id == Config::get('meta.posts_page');
	}

	return false;
}