<?php
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//5f2eafec07f19SISTEMSKE RUTE | SYSTEM ROUTES
$route["default_controller"] = "Main";
$route["404_override"] = "Main/go404";
$route["translate_uri_dashes"] = false;
$route[":num"] = "Main";
$route["login"] = "Main/login";
$route["webservice/(:any)"] = "Main/webservice/$1";
$route["test"] = "Main/test";
//5f32e8deecf02disclaimer
$route["politika-privatnosti"] = "Main/page/sr/disclaimer";
$route["terms-of-use"] = "Main/page/en/disclaimer";
$route["%D0%BF%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D0%BA%D0%B0-%D0%BF%D1%80%D0%B8%D0%B2%D0%B0%D1%82%D0%BD%D0%BE%D1%81%D1%82%D0%B8"] = "Main/page/sr-Cyrl/disclaimer";
//5f32e918e5d44sitemap
$route["sitemap"] = "Main/page/en/sitemap";
$route["mapa-sajta"] = "Main/page/sr/sitemap";
$route["%D0%BC%D0%B0%D0%BF%D0%B0-%D1%81%D0%B0%D1%98%D1%82%D0%B0"] = "Main/page/sr-Cyrl/sitemap";
//5f32e918e5d12RADIONICA / EDITOR 
$route["editor"] = "Main/page/en/editor";
$route["radionica"] = "Main/page/sr/editor";
$route["%D1%80%D0%B0%D0%B4%D0%B8%D0%BE%D0%BD%D0%B8%D1%86%D0%B0"] = "Main/page/sr-Cyrl/editor";
//5f32e9620de5fJEZICI NA HOME PAGE
$route["en"] = "Main/lang/en";
$route["sr"] = "Main/lang/sr";
$route["%D1%81%D1%80"] = "Main/lang/sr-Cyrl";
//5f32e973ac60cBLOG
$route["blog"] = "Main/blog/en/pages|blog/blog";
$route["blog/(:any)"] = "Main/blog/en/pages|blog/blog/$1";
$route["novosti"] = "Main/blog/sr/pages|blog/novosti";
$route["novosti/(:any)"] = "Main/blog/sr/pages|blog/novosti/$1";
$route["%D1%82%D0%B5%D0%BA%D1%81%D1%82%D0%BE%D0%B2%D0%B8"] = "Main/blog/sr-Cyrl/pages|blog/текстови";
$route["%D1%82%D0%B5%D0%BA%D1%81%D1%82%D0%BE%D0%B2%D0%B8/(:any)"] = "Main/blog/sr-Cyrl/pages|blog/текстови/$1";
//5f32e983b2ba7STRANICE
$route["about-me"] = "Main/page/en/about-me";
$route["o-meni"] = "Main/page/sr/about-me";
$route["%D0%BE-%D0%BC%D0%B5%D0%BD%D0%B8"] = "Main/page/sr-Cyrl/about-me";
//5f36d398d60cdpricelist
$route["cenovnik"] = "Main/page/sr/price-list";
$route["pricing"] = "Main/page/en/price-list";
$route["%D1%86%D0%B5%D0%BD%D0%BE%D0%B2%D0%BD%D0%B8%D0%BA"] = "Main/page/sr-Cyrl/price-list";
//5f36d37870e04contact
$route["contact"] = "Main/page/en/contact";
$route["kontakt"] = "Main/page/sr/contact";
$route["%D0%BA%D0%BE%D0%BD%D1%82%D0%B0%D0%BA%D1%82"] = "Main/page/sr-Cyrl/contact";
//5f36d36a91ed7services
$route["izrade"] = "Main/page/sr/services";
$route["services"] = "Main/page/en/services";
$route["%D1%83%D1%81%D0%BB%D1%83%D0%B3%D0%B5"] = "Main/page/sr-Cyrl/services";
//5f36d3a27de2dservice1 - izrada-web-sajtova
$route["izrade/izrada-sajta"] = "Main/page/sr/service1";
$route["services/web-development"] = "Main/page/en/service1";
$route["%D1%83%D1%81%D0%BB%D1%83%D0%B3%D0%B5/%D0%BF%D1%80%D0%B0%D0%B2%D1%99%D0%B5%D1%9A%D0%B5-%D0%B2%D0%B5%D0%B1-%D1%81%D0%B0%D1%98%D1%82%D0%BE%D0%B2%D0%B0"] = "Main/page/sr-Cyrl/service1";
//5f36d3a86925aservice2 - izrada-racunarskih-programa
$route["izrade/izrada-programa"] = "Main/page/sr/service2";
$route["services/development-of-desktop-applications"] = "Main/page/en/service2";
$route["%D1%83%D1%81%D0%BB%D1%83%D0%B3%D0%B5/%D0%BF%D1%80%D0%B0%D0%B2%D1%99%D0%B5%D1%9A%D0%B5-%D1%80%D0%B0%D1%87%D1%83%D0%BD%D0%B0%D1%80%D1%81%D0%BA%D0%B8%D1%85-%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%B0"] = "Main/page/sr-Cyrl/service2";
//5f6b1dea6b6c2Baza podataka
$route["izrade/izrada-baze-podataka"] = "Main/page/sr/baze-podataka";
//5f36d3e8c4ea6portfolio
$route["portfelj"] = "Main/blog/sr/pages|portfolio/portfelj";
$route["portfelj/(:any)"] = "Main/blog/sr/pages|portfolio/portfelj/$1";
$route["portfolio"] = "Main/page/en/portfolio";
$route["%D0%BF%D0%BE%D1%80%D1%82%D1%84%D0%B5%D1%99"] = "Main/page/sr-Cyrl/portfolio";
//5f36d423f13efdownloads

$route["preuzimanja"] = "Main/page/sr/downloads";
$route["downloads"] = "Main/page/en/downloads";
$route["%D0%BF%D1%80%D0%B5%D1%83%D0%B7%D0%B8%D0%BC%D0%B0%D1%9A%D0%B0"] = "Main/page/sr-Cyrl/downloads";
$route["preuzimanja/(:any)"] = "Main/page/sr/downloads/$1";
$route["downloads/(:any)"] = "Main/page/en/downloads/$1";
$route["%D0%BF%D1%80%D0%B5%D1%83%D0%B7%D0%B8%D0%BC%D0%B0%D1%9A%D0%B0/(:any)"] = "Main/page/sr-Cyrl/downloads/$1";
//5f36d48d5836cproducts

$route["proizvodi"] = "Main/blog/sr/pages|products/proizvodi";
$route["proizvodi/(:any)"] = "Main/blog/sr/pages|products/proizvodi/$1";
$route["products"] = "Main/blog/en/pages|products/products";
$route["products/(:any)"] = "Main/blog/en/pages|products/products/$1";
$route["%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D0%B8"] = "Main/blog/sr-Cyrl/pages|products/производи";
$route["%D0%BF%D1%80%D0%BE%D0%B8%D0%B7%D0%B2%D0%BE%D0%B4%D0%B8/(:any)"] = "Main/blog/sr-Cyrl/pages|products/производи/$1";
//5f36d56ce1feftools - optimization

$route["optimization-website"] = "Main/page/en/tools";
$route["optimizacija-sajta"] = "Main/page/sr/tools";
$route["%D0%BE%D0%BF%D1%82%D0%B8%D0%BC%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%98%D0%B0-%D1%81%D0%B0%D1%98%D1%82%D0%B0"] = "Main/page/sr-Cyrl/tools";
//5f36d586f3480cookie-management

$route["cookie-management"] = "Main/page/en/cookie";
$route["upravljanje-kolacicima"] = "Main/page/sr/cookie";
$route["%D1%83%D0%BF%D1%80%D0%B0%D0%B2%D1%99%D0%B0%D1%9A%D0%B5-%D0%BA%D0%BE%D0%BB%D0%B0%D1%87%D0%B8%D1%9B%D0%B8%D0%BC%D0%B0"] = "Main/page/sr-Cyrl/cookie";
//5f36d5ebb7f9esearch

$route["search"] = "Main/page/en/search";
$route["search/(:any)"] = "Main/page/en/search/$1";
$route["pretraga"] = "Main/page/sr/search";
$route["pretraga/(:any)"] = "Main/page/sr/search/$1";
$route["%D0%BF%D1%80%D0%B5%D1%82%D1%80%D0%B0%D0%B3%D0%B0"] = "Main/page/sr-Cyrl/search";
$route["%D0%BF%D1%80%D0%B5%D1%82%D1%80%D0%B0%D0%B3%D0%B0/(:any)"] = "Main/page/sr-Cyrl/search/$1";
//5f36d6466f956shared

$route["shared"] = "Main/shared/en";
$route["shared/(:any)"] = "Main/shared/en/$1";
$route["deljeno"] = "Main/shared/sr";
$route["deljeno/(:any)"] = "Main/shared/sr/$1";
$route["%D0%B4%D0%B5%D1%99%D0%B5%D0%BD%D0%BE"] = "Main/shared/sr-Cyrl";
$route["%D0%B4%D0%B5%D1%99%D0%B5%D0%BD%D0%BE/(:any)"] = "Main/shared/sr-Cyrl/$1";
//5f36d638463e2analysis

$route["analiza"] = "Main/page/sr/analysis";
$route["analiza/(:any)"] = "Main/page/sr/analysis/$1";
$route["analiza/(:any)/(:any)"] = "Main/page/sr/analysis/$1/$2";
$route["teest"] = "Main/page/sr/teest";

