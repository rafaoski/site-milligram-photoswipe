<?php namespace ProcessWire;

/**
 * ProcessWire Bootstrap API Ready 
 * ===============================
 * This ready.php file is called during ProcessWire bootstrap initialization process.
 * This occurs after the current page has been determined and the API is fully ready 
 * to use, but before the current page has started rendering. This file receives a 
 * copy of all ProcessWire API variables. This file is an idea place for adding your
 * own hook methods. 
 *
 */

/** @var ProcessWire $wire */

/**
 * Example of a custom hook method
 * 
 * This hook adds a “numPosts” method to pages using template “category”.
 * The return value is the quantity of posts in category.
 *
 * Usage:
 * ~~~~~
 * $numPosts = $page->numPosts(); // returns integer
 * numPosts = $page->numPosts(true); // returns string like "5 posts"
 * ~~~~~
 *
 */
// $wire->addHook('Page(template=category)::numPosts', function($event) {
// 	/** @var Page $page */
// 	$page = $event->object;

// 	// only category pages have numPosts
// 	if($page->template != 'category') return;

// 	// find number of posts
// 	$numPosts = $event->pages->count("template=blog-post, categories=$page");

// 	if($event->arguments(0) === true) {
// 		// if true argument was specified, format it as a "5 posts" type string
// 		$numPosts = sprintf(_n('%d post', '%d posts', $numPosts), $numPosts);
// 	}

// 	$event->return = $numPosts;
// }); 

// http://processwire.com/api/hooks/
// $wire->addHookAfter('Pages::saveReady', function($event) { 
// // retrieve first argument by index (0 based)
// $page = $event->arguments(0);
// // OR: retrieve argument by name 'page'
// // $page = $event->arguments('page');
// $event->return = $this->message("You saved page: $page->path ... This is your first HOOK :)");
// });
