<?php
/**
 * ownCloud - galleryplus
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Olivier Paroz <owncloud@interfasys.ch>
 *
 * @copyright Olivier Paroz 2014-2015
 */

namespace OCA\GalleryPlus\AppInfo;

/**
 * Application routes
 *
 * The name is the lowercase name of the controller without the controller
 * part, the stuff after the hash is the method.
 *
 * e.g. page#index -> PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */
$application = new Application();

$application->registerRoutes(
	$this, array(
			 'routes' => array(
				 /**
				  * Main routes
				  */
				 array(
					 'name' => 'page#index',
					 'url'  => '/',
					 'verb' => 'GET'
				 ),
				 // Landing page for public galleries
				 array(
					 'name' => 'page#public_index',
					 'url'  => '/public',
					 'verb' => 'GET'
				 ),
				 // Landing page after password entry, for public galleries
				 array(
					 'name' => 'page#public_index_post',
					 'url'  => '/public',
					 'verb' => 'POST'
				 ),
				 // An error page which can handle different error codes
				 array(
					 'name' => 'page#error_page',
					 'url'  => '/error',
					 'verb' => 'GET'
				 ),
				 // The same page, but for POST
				 array(
					 'name' => 'page#error_page_post',
					 'url'  => '/error',
					 'verb' => 'POST'
				 ),
				 /**
				  * Services
				  */
				 // Album creation. Only called once logged in
				 array(
					 'name' => 'service#get_album_info',
					 'url'  => '/albums',
					 'verb' => 'GET'
				 ),
				 // Supported media types. Only called by the slideshow
				 array(
					 'name' => 'service#get_types',
					 'url'  => '/mimetypes',
					 'verb' => 'GET'
				 ),
				 // All the images of which a preview can be generated
				 array(
					 'name' => 'service#get_images',
					 'url'  => '/images',
					 'verb' => 'GET'
				 ),
				 // Batch creation of thumbnails
				 array(
					 'name' => 'service#get_thumbnails',
					 'url'  => '/thumbnails',
					 'verb' => 'GET'
				 ),
				 // Large preview of a file
				 array(
					 'name' => 'service#show_preview',
					 'url'  => '/preview',
					 'verb' => 'GET'
				 ),
				 // Download the file
				 array(
					 'name' => 'service#download_preview',
					 'url'  => '/download',
					 'verb' => 'GET'
				 ),
				 /**
				  * Public services
				  */
				 array(
					 'name' => 'public_service#get_types',
					 'url'  => '/mimetypes.public',
					 'verb' => 'GET'
				 ),
				 array(
					 'name' => 'public_service#get_images',
					 'url'  => '/images.public',
					 'verb' => 'GET'
				 ),
				 array(
					 'name' => 'public_service#get_thumbnails',
					 'url'  => '/thumbnails.public',
					 'verb' => 'GET'
				 ),
				 array(
					 'name' => 'public_service#show_preview',
					 'url'  => '/preview.public',
					 'verb' => 'GET'
				 ),
				 array(
					 'name' => 'public_service#download_preview',
					 'url'  => '/download.public',
					 'verb' => 'GET'
				 ),
				 // API, for later
				 /*array(
					 'name' => 'api#get_types',
					 'url'  => '/api/1.0/types',
					 'verb' => 'GET'
				 ),*/
			 )
		 )
);