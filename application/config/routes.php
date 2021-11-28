<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['default_controller'] = 'homepage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['admin/dashboard']='admin/homepage';


$route['admin/login']='admin/auth/doLogin';

$route['admin/tambah_pelanggan']='admin/pelanggan/tambah_pelanggan';
$route['admin/data_pelanggan']='admin/pelanggan/data_pelanggan';
$route['admin/edit_pelanggan']='admin/pelanggan/edit_pelanggan';

$route['admin/tambah_pegawai']='admin/pegawai/tambah_pegawai';
$route['admin/data_pegawai']='admin/pegawai/data_pegawai';
$route['admin/edit_pegawai']='admin/pegawai/edit_pegawai';

// $route['akun/akun']='admin/akun/akun_home/$1';

$route['admin/tambah_akun']='akunapp/tambah_akun';
$route['admin/data_akun']='admin/akunapp/data_akun';
$route['admin/edit_akun']='akunapp/edit_akun';

$route['admin/tambah_pengumuman']='admin/pengumuman/tambah_pengumuman';
$route['admin/data_pengumuman']='admin/pengumuman/data_pengumuman';
$route['admin/edit_pengumuman']='admin/pengumuman/edit_pengumuman';

$route['admin/setting_tagihan']='admin/settagihan/index';
$route['admin/pengajuan_rekening']='admin/pengajuanrek/index';