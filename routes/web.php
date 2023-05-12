<?php
use App\Http\Controllers\connexion_controller;
use App\Http\Controllers\accordion_controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\add_new_admin_controller;
use App\Http\Controllers\add_new_user_controller;
use App\Http\Controllers\admin_list_controller;
use App\Http\Controllers\alerts_controller;
use App\Http\Controllers\am_chart_controller;
use App\Http\Controllers\apex_chart_controller;
use App\Http\Controllers\badges_controller;
use App\Http\Controllers\basic_card_controller;
use App\Http\Controllers\basic_Elements_controller;
use App\Http\Controllers\board_controller;
use App\Http\Controllers\bootstrap_table_controller;
use App\Http\Controllers\builder_controller;
use App\Http\Controllers\buttons_controller;
use App\Http\Controllers\calender_controller;
use App\Http\Controllers\carousel_controller;
use App\Http\Controllers\Cart_controller;
use App\Http\Controllers\chart_box_1_controller;
use App\Http\Controllers\chart_sparkline_controller;
use App\Http\Controllers\chartjs_controller;
use App\Http\Controllers\chat_controller;
use App\Http\Controllers\Checkout_controller;
use App\Http\Controllers\color_plate_controller;
use App\Http\Controllers\colors_controller;
use App\Http\Controllers\dargable_card_controller;
use App\Http\Controllers\dark_sidebar_controller;
use App\Http\Controllers\table_client_controller;
use App\Http\Controllers\datepicker_controller;
use App\Http\Controllers\dropdown_controller;
use App\Http\Controllers\editor_controller;
use App\Http\Controllers\empty_page_controller;
use App\Http\Controllers\error_400_controller;
use App\Http\Controllers\error_500_controller;
use App\Http\Controllers\faq_controller;
use App\Http\Controllers\fixed_footer_controller;
use App\Http\Controllers\Fontawesome_Icon_controller;
use App\Http\Controllers\forgot_controller;
use App\Http\Controllers\gallery_controller;
use App\Http\Controllers\Groups_controller;
use App\Http\Controllers\index_2_controller;
use App\Http\Controllers\index_3_controller;
use App\Http\Controllers\ndex_2_controller;
use App\Http\Controllers\index_controller;
use App\Http\Controllers\invoice_controller;
use App\Http\Controllers\Layouts_controller;
use App\Http\Controllers\light_sidebar_controller;
use App\Http\Controllers\login_controller;
use App\Http\Controllers\Loading_Indicators_controller;
use App\Http\Controllers\mail_box_controller;
use App\Http\Controllers\mapjs_controller;
use App\Http\Controllers\Max_Length_controller;
use App\Http\Controllers\Minimized_Aside_controller;
use App\Http\Controllers\module_setting_controller;
use App\Http\Controllers\navs_controller;
use App\Http\Controllers\Pagination_controller;
use App\Http\Controllers\Product_Details_controller;
use App\Http\Controllers\Products_controller;
use App\Http\Controllers\profilebox_controller;
use App\Http\Controllers\resister_controller;
use App\Http\Controllers\role_permissions_controller;
use App\Http\Controllers\Scroll_Reveal_controller;
use App\Http\Controllers\Scrollable_controller;
use App\Http\Controllers\theme_card_controller;
use App\Http\Controllers\themefy_icon_controller;
use App\Http\Controllers\tilt_controller;
use App\Http\Controllers\typography_controller;
use App\Http\Controllers\user_list_controller;
use App\Http\Controllers\vector_map_controller;
use App\Http\Controllers\wow_animation_controller;
use App\Http\Controllers\modal_controller;
use App\Http\Controllers\notification_controller;
use App\Http\Controllers\table_proprio_controller;
use App\Http\Controllers\table_conducteur_controller;
use App\Http\Controllers\table_demande_controller;
use App\Http\Controllers\table_camion_controller;
use App\Http\Controllers\ajouter_conducteur_controller;
use App\Http\Controllers\admin_auth_controller;
use App\Http\Controllers\ajouter_client_controller;
use App\Http\Controllers\modifier_client_controller;









/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('user.welcome');
});
Route::get('/a', function () {
    return 'manger';
});

Route::get('/test', function () {
    return view('user.test');
});

route::get('/connexion',[connexion_controller::class,'connexion'])->name('connexion');


route::get('/modal',[modal_controller::class,'modal'])->name('modal');


route::get('/accordion',[accordion_controller::class,'accordion'])->name('accordion');

route::get('/add_new_admin',[add_new_admin_controller::class,'add_new_admin'])->name('add_new_admin');

route::get('/add_new_user',[add_new_user_controller::class,'add_new_user'])->name('add_new_user');

route::get('/admin_list',[admin_list_controller::class,'admin_list'])->name('admin_list');

route::get('/alerts',[alerts_controller::class,'Alerts'])->name('Alerts');

route::get('/am_chart',[am_chart_controller::class,'am_chart'])->name('am_chart');

route::get('/apex_chart',[apex_chart_controller::class,'apex_chart'])->name('apex_chart');

route::get('/badges',[badges_controller::class,'adges'])->name('Badges');

route::get('/basic_card',[basic_card_controller::class,'basic_card'])->name('basic_card');

route::get('/basic_Elements',[basic_Elements_controller::class,'Basic_Elements'])->name('Basic_Elements');

route::get('/board',[board_controller::class,'Board'])->name('Board');

route::get('/bootstrap_table',[bootstrap_table_controller::class,'bootstrap_table'])->name('bootstrap_table');

route::get('/builder',[builder_controller::class,'Builder'])->name('Builder');

route::get('/buttons',[buttons_controller::class,'buttons'])->name('buttons');

route::get('/calender',[calender_controller::class,'calender'])->name('calender');

route::get('/carousel',[carousel_controller::class,'carousel'])->name('carousel');

route::get('/Cart',[Cart_controller::class,'Cart'])->name('Cart');

route::get('/chart_box_1',[chart_box_1_controller::class,'chart_box_1'])->name('chart_box_1');

route::get('/chart_sparkline',[chart_sparkline_controller::class,'chart_sparkline'])->name('chart_sparkline');

route::get('/chartjs',[chartjs_controller::class,'chartjs'])->name('chartjs');

route::get('/chat',[chat_controller::class,'chat'])->name('chat');

route::get('/Checkout',[Checkout_controller::class,'Checkout'])->name('Checkout');

route::get('/color_plate',[color_plate_controller::class,'color_plate'])->name('color_plate');


route::get('/colors',[colors_controller::class,'colors'])->name('colors');

route::get('/dargable_card',[dargable_card_controller::class,'dargable_card'])->name('dargable_card');

route::get('/dark_sidebar',[dark_sidebar_controller::class,'dark_sidebar'])->name('dark_sidebar');

route::get('/detail_proprio/{id}',[table_proprio_controller::class,'detail_proprio'])->name('detail_proprios');
route::get('/table_proprio2',[table_proprio_controller::class,'modification_annuler'])->name('modification_annuler_proprio');
route::get('/table_proprio',[table_proprio_controller::class,'table_proprio'])->name('table_proprios');
route::post('/recherche_proprio',[table_proprio_controller::class,'recherche_proprio'])->name('recherche_proprios');
route::get('/supprimer_proprio/{id}',[table_proprio_controller::class,'delete'])->name('supprimer_proprios');
route::get('/modifier_proprio/{id}', [table_proprio_controller::class, 'modifier_proprio'])->name('modifier_proprios');
route::post('/modification_proprio/{id}', [table_proprio_controller::class, 'modification_proprio'])->name('modification_proprios');
route::post('/ajouter_proprio',[table_proprio_controller::class,'ajouter_proprio'])->name('ajouter_proprios');


route::get('/detail_client/{id}',[table_client_controller::class,'detail_client'])->name('detail_clients');
route::get('/table_client2',[table_client_controller::class,'modification_annuler'])->name('modification_annuler_client');
route::get('/table_client',[table_client_controller::class,'table_client'])->name('table_client');
route::post('/recherche_client',[table_client_controller::class,'recherche_client'])->name('recherche_clients');
route::get('/modifier_client/{id}', [table_client_controller::class, 'modifier_client'])->name('modifier_clients');
route::post('/modification_client/{id}', [table_client_controller::class, 'modification_client'])->name('modification_clients');
route::get('/supprimer_client/{id}',[table_client_controller::class,'delete'])->name('supprimer_clients');


route::get('/table_proprio',[table_proprio_controller::class,'table_proprio'])->name('table_proprio');
route::get('/recherche_proprio',[table_proprio_controller::class,'recherche_proprio'])->name('recherche_proprio');
route::get('/ajouter_proprio',[table_proprio_controller::class,'ajouter_proprio'])->name('ajouter_proprios');

route::get('/detail_conducteur/{id}',[table_conducteur_controller::class,'detail_conducteur'])->name('detail_conducteurs');
route::get('/table_conducteur2',[table_conducteur_controller::class,'modification_annuler'])->name('modification_annuler_conducteur');
route::get('/table_conducteur',[table_conducteur_controller::class,'table_conducteur'])->name('table_conducteur');
route::get('/modifier_conducteur/{id}', [table_conducteur_controller::class, 'modifier_conducteur'])->name('modifier_conducteurs');
route::post('/modification_conducteur/{id}', [table_conducteur_controller::class, 'modification_conducteur'])->name('modification_conducteurs');
route::get('/supprimer_conducteur/{id}',[table_conducteur_controller::class,'delete'])->name('supprimer_conducteurs');
route::post('/recherche_conducteur',[table_conducteur_controller::class,'recherche_conducteur'])->name('recherche_conducteurs');
route::post('/ajouter_conducteur',[table_conducteur_controller::class,'ajouter_conducteur'])->name('ajouter_conducteurs');


route::get('/table_camion2',[table_camion_controller::class,'modification_annuler'])->name('modification_annuler_camion');
route::get('/table_camion',[table_camion_controller::class,'table_camion'])->name('table_camion');
route::get('/modifier_camion/{id}', [table_camion_controller::class, 'modifier_camion'])->name('modifier_camions');
route::post('/modification_camion/{id}', [table_camion_controller::class, 'modification_camion'])->name('modification_camions');
route::get('/supprimer_camion/{id}',[table_camion_controller::class,'delete'])->name('supprimer_camions');
route::post('/recherche_camion',[table_camion_controller::class,'recherche_camion'])->name('recherche_camions');
route::get('/ajouter_camion',[table_camion_controller::class,'ajouter_camion'])->name('ajouter_camions');


route::get('/modifier_demande/{id}',[table_demande_controller::class,'modifier_demande'])->name('modifier_demandes');
route::get('/table_demande',[table_demande_controller::class,'table_demande'])->name('table_demande');
route::get('/supprimer_demande/{id}',[table_demande_controller::class,'delete'])->name('supprimer_demandes');
route::post('/recherche_demande',[table_demande_controller::class,'recherche_demande'])->name('recherche_demande');
route::get('/ajouter_demande',[table_demande_controller::class,'ajouter_demande'])->name('ajouter_demandes');


Route::get('/admin/form', [admin_auth_controller::class, 'showLoginForm'])->name('admin.form');
Route::get('/admin/login', [admin_auth_controller::class, 'login'])->name('admin.login');
Route::get('/admin/logout', [admin_auth_controller::class, 'logout'])->name('admin.logout');




route::get('/datepicker',[datepicker_controller::class,'datepicker'])->name('datepicker');

route::get('/dropdown',[dropdown_controller::class,'dropdown'])->name('dropdown');

route::get('/editor',[editor_controller::class,'editor'])->name('editor');


route::get('/empty_page',[empty_page_controller::class,'empty_page'])->name('empty_page');


route::get('/error_400',[error_400_controller::class,'error_400'])->name('error_400');


route::get('/error_500',[error_500_controller::class,'error_500'])->name('error_500');

route::get('/faq',[faq_controller::class,'faq'])->name('faq');

route::get('/fixed_footer',[fixed_footer_controller::class,'fixed_footer'])->name('fixed_footer');

route::get('/Fontawesome_Icon',[Fontawesome_Icon_controller::class,'Fontawesome_Icon'])->name('Fontawesome_Icon');

route::get('/forgot_pass',[forgot_controller::class,'forgot_pass'])->name('forgot_pass');

route::get('/gallery',[gallery_controller::class,'gallery'])->name('gallery');

route::get('/Groups',[Groups_controller::class,'Groups'])->name('Groups');

route::get('/index_2',[index_2_controller::class,'index_2'])->name('index_2');

route::get('/index_3',[index_3_controller::class,'index_3'])->name('index_3');

route::get('/ndex_2',[ndex_2_controller::class,'ndex_2'])->name('ndex_2');

route::get('/index',[index_controller::class,'index'])->name('index');

route::get('/invoice',[invoice_controller::class,'invoice'])->name('invoice');

route::get('/Layouts',[Layouts_controller::class,'Layouts'])->name('Layouts');

route::get('/light_sidebar',[light_sidebar_controller::class,'light_sidebar'])->name('light_sidebar');

route::get('/Loading_Indicators',[Loading_Indicators_controller::class,'Loading_Indicators'])->name('Loading_Indicators');

route::get('/login',[login_controller::class,'login'])->name('login');

route::get('/mail_box',[mail_box_controller::class,'mail_box'])->name('mail_box');

route::get('/mapjs',[mapjs_controller::class,'mapjs'])->name('mapjs');

route::get('/Max_Length',[Max_Length_controller::class,'Max_Length'])->name('Max_Length');

route::get('/Minimized_Aside',[Minimized_Aside_controller::class,'Minimized_Aside'])->name('Minimized_Aside');

route::get('/module_setting',[module_setting_controller::class,'module_setting'])->name('module_setting');

route::get('/navs',[navs_controller::class,'navs'])->name('navs');

route::get('/notification',[notification_controller::class,'notification'])->name('notification');

route::get('/nvd3_charts',[nvd3_charts_controller::class,'nvd3_charts'])->name('nvd3_charts');

route::get('/Pagination',[Pagination_controller::class,'Pagination'])->name('Pagination');

route::get('/Product_Details',[Product_Details_controller::class,'Product_Details'])->name('Product_Details');

route::get('/Products',[Products_controller::class,'Products'])->name('Products');

route::get('/profilebox',[profilebox_controller::class,'profilebox'])->name('profilebox');

route::get('/resister',[resister_controller::class,'resister'])->name('resister');

Route::get('/role_permissions',[role_permissions_controller::class,'role_permissions'])->name('role_permissions');

route::get('/Scroll_Reveal',[Scroll_Reveal_controller::class,'Scroll_Reveal'])->name('Scroll_Reveal');

route::get('/Scrollable',[Scrollable_controller::class,'Scrollable'])->name('Scrollable');

route::get('/theme_card',[theme_card_controller::class,'theme_card'])->name('theme_card');

route::get('/themefy_icon',[themefy_icon_controller::class,'themefy_icon'])->name('themefy_icon');

route::get('/tilt',[tilt_controller::class,'tilt'])->name('tilt');

route::get('/typography',[typography_controller::class,'typography'])->name('typography');

route::get('/user_list',[user_list_controller::class,'user_list'])->name('user_list');

route::get('/vector_map',[vector_map_controller::class,'vector_map'])->name('vector_map');

route::get('/wow_animation',[wow_animation_controller::class,'wow_animation'])->name('wow_animation');

route::post('/modifier_client',[modifier_client_controller::class,'modifier_client'])->name('modifier_client');

route::get('/ajouter_client',[table_client_controller::class,'ajouter_client'])->name('ajouter_client');
