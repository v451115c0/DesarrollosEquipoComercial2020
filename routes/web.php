<?php

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
    return view('welcome');
});

/*=============== Retos especiales================================*/
Route::get('/kiai/{associateid}', "Retos\kaizenController@kiaiIndex");

Route::get('/serpro/{associateid}/{staff?}', 'puntos_connection\puntos_connectionController@mantenimiento');
Route::get('/loadupline', "Retos\kaizenController@loadUpline");
Route::post('/registeclubv', 'Retos\kaizenController@registeClubV');
Route::get('/kaizen/{associateid}', 'puntos_connection\puntos_connectionController@mantenimiento');
Route::get('/kaizen/{associateid}/updatekaizen', 'Retos\kaizenController@updateTotalKaizen');
Route::get('/taishi/{associateid}', 'puntos_connection\puntos_connectionController@mantenimiento');
Route::get('/taishi/{associateid}/updatetaishi', 'Retos\kaizenController@updateTotalTaishi');
Route::get('/no/{associateid}', 'Retos\kaizenController@no');
Route::get('/retmant/{associateid}', 'Retos\kaizenController@mantenimiento');
Route::get('getGenealogy', 'Retos\kaizenController@getGenViajeros');
Route::get('getGenealgi', 'Retos\kaizenController@getGenealgi');

/*================= RMA =====================================*/
Route::post('rma/save-rma','Rma\RmaController@saveRma');
Route::get('rma/request_defect','Rma\RmaController@requestDefect');
Route::get('rma/request_products','Rma\RmaController@requestProduct');
Route::get('rma/validate_bill','Rma\RmaController@validateBill');
Route::get('rma/request-ram','Rma\RmaController@requestRma');
Route::get('rma/request-files','Rma\RmaController@requestFiles');
Route::resource('rma','Rma\RmaController');

/* rutas nikkenchallenge */
Route::get('nikkenChallenge/{abi}','NikkenChallenge\nikkenController@nikkenChallenge'); 
Route::get('pdf/{abi}', 'NikkenChallenge\nikkenController@printPDF');
Route::post('excel/{abi}', 'NikkenChallenge\nikkenController@ExcelKinya');
Route::post('excelKinyaPlus/{abi}', 'NikkenChallenge\nikkenController@ExcelKinyaPlus');
Route::post('excelKintai/{abi}', 'NikkenChallenge\nikkenController@ExcelKintai');
Route::post('exceljugadores/{abi}', 'NikkenChallenge\nikkenController@ExcelJugadores');

/*Generador URL´S NikkenChallenge */
Route::get('nikkenChallengeUrl','NikkenChallenge\nikkenController@nikkenChallengeUrl'); 

/* rutas DemoGenealogy */
Route::get('consulta',"DemoGenealogy\PageController@consulta");
Route::get('consultaItem',"DemoGenealogy\PageController@consultaItem");
Route::get('consultaItemPoints',"DemoGenealogy\PageController@consultaItemPoints");
Route::get('consultaTotalPoints',"DemoGenealogy\PageController@consultaTotalPoints");
Route::get('signup',"DemoGenealogy\PageController@signup");
Route::get('order',"DemoGenealogy\PageController@order");
Route::get('genealogyreport',"DemoGenealogy\PageController@genealogyreport");
Route::get('upline',"DemoGenealogy\PageController@upline");
Route::get('save-signup',"DemoGenealogy\PageController@saveAssociateGenTest");
Route::get('save-order',"DemoGenealogy\PageController@saveOrderheader1_Demo");
Route::get('genealogy',"DemoGenealogy\PageController@genealogy"); 


//=================== Routs Disabled/Enabled Producst TV   =======================//

Route::resource('products-tv','ProducstTV\ProducstTVController');
Route::get('update-items','ProducstTV\ProducstTVController@updateItems');


//=================== Routs loading Videos Webex in OV   =======================//
Route::resource('loading-video','s3\S3Controller');
Route::get('upload-file','s3\S3Controller@create');
Route::get('edit-file/{id}','s3\S3Controller@edit');
Route::get('update-file/{id}','s3\S3Controller@updatefile');

Route::get('edit-file-status/{id}/{status}','s3\S3Controller@editStatus');
Route::post('aws-file','s3\S3Controller@store');


/*Routs Cuponmania*/

Route::get('cuponmania/{country}','CuponMania\CuponManiaController@getwinners');
Route::get('cuponmania/{country}/xls','CuponMania\CuponManiaController@getwinnersExport');


/* puntos NY */
Route::get('points-ny/{abi}','PointsNY\PointstNyController@point');

/* Plan De Influencia */
Route::get('/regactivinf/{associateid}', 'regactivinf\regActivInfController@index');
Route::get('/regactivinf_/{associateid}', 'regactivinf\regActivInfController@index_');

/*=== Convocatoria Mayo Reporte MKT ===*/
Route::get('/convMayoRepo', 'convMayo\convMayoController@reporteInterno');

/*==== My Nikken Latam Centro de Inormación ====*/
Route::get('/myNikLatInfoCenterLogin', 'myNikLatInfoCenter\myNikLatInfoCenterController@myNikLatInfoCenterLogin')->name('loginC');
Route::post('/myNikLatInfoCenter', 'myNikLatInfoCenter\myNikLatInfoCenterController@myNikLatInfoCenter');
Route::post('/cenInfMyNkSavePost', 'myNikLatInfoCenter\myNikLatInfoCenterController@cenInfMyNkSavePost');
Route::get('/myNikLatViewPost', 'myNikLatInfoCenter\myNikLatInfoCenterController@myNikLatViewPost');
Route::get('/getLastPost', 'myNikLatInfoCenter\myNikLatInfoCenterController@getLastPost');

/*=== Simulador Plan de Influencia 3.0 ===*/
Route::get('/influencia30/{associateid?}', 'influencia30\influencia30Controller@menul');
Route::get('/influencia30M/{associateid?}', 'influencia30\influencia30Controller@influencia30');
Route::get('/influencia30H/{lang?}/{associateid?}', 'influencia30\influencia30Controller@influencia30');
Route::get('/simInfGetIntervals', 'influencia30\influencia30Controller@simInfGetIntervals');
Route::get('/simInfGmetBonos', 'influencia30\influencia30Controller@simInfGmetBonos');
Route::get('/simInfPdfView', 'influencia30\influencia30Controller@simInfPdfView');
Route::get('/influencia30Test/{associateid?}', 'influencia30\influencia30ControllerTest@influencia30');
Route::get('/simInfGmetBonosTest', 'influencia30\influencia30ControllerTest@simInfGmetBonos');
Route::get('/simInfPdfViewTest', 'influencia30\influencia30ControllerTest@simInfPdfView');

//====== Routs disabled / enabled code     ====//
Route::post('update_data/{id}/{code}','Transaction\TransactionvitieController@update');
Route::get('transactions/{user}','Transaction\TransactionvitieController@index');
Route::get('general_data','Transaction\TransactionvitieController@generalData');

/*=== Controlador Plan de Influencia ===*/
Route::get('/PlanInfluencia/{associateid}','PlanInfluencia\nikkenController@nikkenChallenge');
Route::get('/getInfoInfluencia', 'PlanInfluencia\nikkenController@getInfoInfluencia');
Route::get('InfContGetPDF', 'PlanInfluencia\nikkenController@printPDF');
Route::get('ctrinfGetGen', 'PlanInfluencia\nikkenController@ctrinfGetGen');
Route::get('ctrinfGetLeaders', 'PlanInfluencia\nikkenController@ctrinfGetLeaders');

/*=== Club Viajeros Premium ===*/
Route::get('viajeros_premium_/{associateid}', 'ViajerosPro\ViajerosProController@index');
Route::get('viajeros_premium/{associateid}', 'puntos_connection\puntos_connectionController@mantenimiento');
Route::get('vpGetMonts', 'ViajerosPro\ViajerosProController@vpGetMonts');
Route::get('vpGetRank', 'ViajerosPro\ViajerosProController@vpGetRank');
Route::get('reporteMKTViajerosPro', 'ViajerosPro\ViajerosProController@reporteMKTViajerosPro');

/*=== Campaña de repuestos ===*/
Route::get('puntos_connection/{associateid}', 'puntos_connection\puntos_connectionController@index');
Route::get('pmkReportPuntos_connection', 'puntos_connection\puntos_connectionController@pmkReport');
Route::get('ptsConnectGenealogy', 'puntos_connection\puntos_connectionController@ptsConnectGenealogy');	

/*=== Calculadora ===*/
Route::get('calculadoraNikken/{associateid}', 'CalculadoraNK\CalculadoraNkController@calculadoraNikken');
Route::get('calcGetProducts', 'CalculadoraNK\CalculadoraNkController@calcGetProducts');
Route::get('calcGetBonos', 'CalculadoraNK\CalculadoraNkController@calcGetBonos');
Route::get('calcGetPDF', 'CalculadoraNK\CalculadoraNkController@calcGetPDF');
Route::get('calcGetProductsInfluencia', 'CalculadoraNK\CalculadoraNkController@calcGetProductsInfluencia');

Route::post('/services_iw','services_iw\S3Controller@store');

/*=== kits a 1USD ===*/
Route::get('inc1USD/{associateid}', 'inc1USD\inc1USDController@inc1USD');
Route::get('inc1USDGetDetails', 'inc1USD\inc1USDController@inc1USDGetDetails');
Route::get('inc1USDGettickets', 'inc1USD\inc1USDController@inc1USDGettickets');
Route::get('inc1USDGetGenealogy', 'inc1USD\inc1USDController@inc1USDGetGenealogy');
Route::get('inc1USDsegPerfectoPers', 'inc1USD\inc1USDController@inc1USDsegPerfectoPers');
Route::get('inc1USDsegPerfectoGen', 'inc1USD\inc1USDController@inc1USDsegPerfectoGen');
Route::get('inc1USDdetallesMiInicio', 'inc1USD\inc1USDController@inc1USDdetallesMiInicio');
Route::get('fidelizacion_kinya', 'inc1USD\inc1USDController@fidelizacion_kinya'); // reporte para fidelizar informacion kinya
Route::get('getCountKits', 'inc1USD\inc1USDController@getCountKits');
Route::get('getuser_promotion_kit', 'inc1USD\inc1USDController@getuser_promotion_kit');
Route::get('reporteMKTInc1USDInicioPerf', 'inc1USD\inc1USDController@reporteMKTInc1USDInicioPerf');
Route::post('inc1USDValidaTicket', 'inc1USD\inc1USDController@inc1USDValidaTicket');
Route::get('cronOVAutologin', 'Retos\kaizenController@cronOVAutologin');

/*=== NA MyNikkne Convention ===*/
Route::get('getTicketsNAConvention', 'ViajerosPro\ViajerosProController@getTicketsNAConvention');

/*== Depuración 2020 ===*/
Route::get('/depuracion/{associateid}', 'Depuracion\Depuracion@index');
Route::get('/sendemail', 'Depuracion\Depuracion@sendMail');
Route::get('/email', 'Depuracion\Depuracion@email');
Route::get('/getgenealogy', 'Depuracion\Depuracion@getgenealogy');


//=============== Rouats change email  =======================//
Route::get('update_email/{user}','ChangeEmail\ChangeEmailController@index');
Route::get('search_data','ChangeEmail\ChangeEmailController@generalData');
Route::get('validate_email','ChangeEmail\ChangeEmailController@validateEmail');
Route::post('update_data_email','ChangeEmail\ChangeEmailController@update');


/*=== Reportes ===*/
Route::get('reporteMKTInc1USDKits', 'Reportes\ReportesController@viewReportes'); // Fidelizacion Volumenes
Route::get('fidelizacionVolumen', 'ViajerosPro\ViajerosProController@fidelizacionVolumen'); // Fidelizacion Volumenes
Route::get('transformPlInf', 'ViajerosPro\ViajerosProController@transformPlInf'); // Transformación Plan de Influencia
Route::get('winViajeros', 'Reportes\ReportesController@winViajeros'); // ganadores Club Viajeros Premium
Route::get('consViajerosPro', 'Reportes\ReportesController@consViajerosPro'); // Viajeros Premium Consolidado
Route::get('reporteMKTInc1USDKitsPeriodo', 'Reportes\ReportesController@reportemokutekiPeriodo'); // Fidelización Mokuteki
Route::get('reportemokutekiResumen', 'Reportes\ReportesController@reportemokutekiResumen'); // Resumen kit Mokuteki
Route::get('Incorporacion_Frontal', 'Reportes\ReportesController@Incorporacion_Frontal'); // Incorporacion_Frontal MyNIKKEN
Route::get('Grupo_Frontalidad', 'Reportes\ReportesController@Grupo_Frontalidad'); // Grupo_Frontalidad MyNIKKEN
Route::get('avancesSerPro', 'Reportes\ReportesController@avancesSerPro'); // reporte de avances SER PRO

/*=== CMS Nikkenlatam ===*/
Route::get('cmsmynikken/addNotify', 'CMSMyNikken\CMSMyNikkenController@index');
Route::post('addNotifyMyNikken', 'CMSMyNikken\CMSMyNikkenController@addNotifyMyNikken');
Route::get('cmsmynikken/depuraciones', 'CMSMyNikken\CMSMyNikkenController@depuraciones');
Route::get('validaClienteAntes', 'CMSMyNikken\CMSMyNikkenController@validaClienteAntes');
Route::get('cmsdepuracliente', 'CMSMyNikken\CMSMyNikkenController@cmsdepuracliente');
Route::get('validaCICBUsers', 'CMSMyNikken\CMSMyNikkenController@validaCICBUsers');
Route::get('validaCICBContracts', 'CMSMyNikken\CMSMyNikkenController@validaCICBContracts');
Route::get('validaCICBControl_ci', 'CMSMyNikken\CMSMyNikkenController@validaCICBControl_ci');
Route::get('cmsCambiarMailCICLUB', 'CMSMyNikken\CMSMyNikkenController@cmsCambiarMailCICLUB');
Route::get('cmsManejoTickets', 'CMSMyNikken\CMSMyNikkenController@cmsManejoTickets');
Route::get('cmsActivaCICB', 'CMSMyNikken\CMSMyNikkenController@cmsActivaCICB');
Route::get('cmsInactivaCICB', 'CMSMyNikken\CMSMyNikkenController@cmsInactivaCICB');
Route::get('cmsCambiaNombreCICB', 'CMSMyNikken\CMSMyNikkenController@cmsCambiaNombreCICB');
Route::get('cmsCambiasponsorCICB', 'CMSMyNikken\CMSMyNikkenController@cmsCambiasponsorCICB');
Route::get('cmsDepurarCICB', 'CMSMyNikken\CMSMyNikkenController@cmsDepurarCICB');
Route::get('cmsRestPasswordCliente', 'CMSMyNikken\CMSMyNikkenController@cmsRestPasswordCliente');
Route::get('cmsresetPassCICB', 'CMSMyNikken\CMSMyNikkenController@cmsresetPassCICB');
Route::get('cmsChangeRango', 'CMSMyNikken\CMSMyNikkenController@cmsChangeRango');
Route::get('cmsChangeTel', 'CMSMyNikken\CMSMyNikkenController@cmsChangeTel');
Route::get('cmschangeMailCliente', 'CMSMyNikken\CMSMyNikkenController@cmschangeMailCliente');
Route::get('cmsObtenerCodesSerPro', 'CMSMyNikken\CMSMyNikkenController@cmsObtenerCodesSerPro');
Route::get('cmsSendMailsSerPro', 'CMSMyNikken\CMSMyNikkenController@cmsSendMailsSerPro');
Route::get('serProAvanceMailView', 'CMSMyNikken\CMSMyNikkenController@serProAvanceMailView');
Route::get('cmschangeCountryCICB', 'CMSMyNikken\CMSMyNikkenController@cmschangeCountryCICB');
Route::get('cmsGetVentasClientes', 'CMSMyNikken\CMSMyNikkenController@cmsGetVentasClientes');

/*=== retos especiales 2021 ===*/
Route::get('retosEspeciales2021/{associateid}', 'ViajerosPro\ViajerosProController@menuRetos');
Route::get('clubViajeros_/{associateid}', 'ViajerosPro\ViajerosProController@clubViajeros_');
Route::get('getGenViajeros', 'ViajerosPro\ViajerosProController@getGenViajeros');
Route::get('equipoTaishi/{associateid}', 'ViajerosPro\ViajerosProController@equipoTaishi');
Route::get('getGenealgiTaishi', 'ViajerosPro\ViajerosProController@getGenealgiTaishi');
Route::get('getDetails', 'ViajerosPro\ViajerosProController@getDetails');
Route::get('equipoKaizen/{associateid}', 'ViajerosPro\ViajerosProController@equipoKaizen');
Route::get('getGenealgiKaizen', 'ViajerosPro\ViajerosProController@getGenealgiKaizen');
Route::get('restoSerPro/{associateid}', 'ViajerosPro\ViajerosProController@restoSerPro');
Route::get('cuestionarioSerProPLA/{associateid}', 'ViajerosPro\ViajerosProController@cuestionarioSerProPLA');
Route::get('loaduplineSerPro', 'ViajerosPro\ViajerosProController@loaduplineSerPro');
Route::get('saveQuestionnaireSerPro', 'ViajerosPro\ViajerosProController@saveQuestionnaireSerPro');
Route::get('getMainPts', 'ViajerosPro\ViajerosProController@getMainPts');
Route::get('incorporacionesPlata', 'ViajerosPro\ViajerosProController@incorporacionesPlata');
Route::get('incorporacionesOro', 'ViajerosPro\ViajerosProController@incorporacionesOro');
Route::get('cuestionarioSerProORO/{associateid}', 'ViajerosPro\ViajerosProController@cuestionarioSerProORO');
Route::get('saveQuestionnaireSerProOro', 'ViajerosPro\ViajerosProController@saveQuestionnaireSerProOro');
Route::get('detailsAbiSerpro', 'ViajerosPro\ViajerosProController@detailsAbiSerpro');
Route::get('valWinSerPro', 'ViajerosPro\ViajerosProController@valWinSerPro');
//Route::get('/viajeros/{associateid}', 'puntos_connection\puntos_connectionController@mantenimiento');
Route::get('/viajeros/{associateid}', 'ViajerosPro\ViajerosProController@redirect');

Route::get('mantenimiento', 'puntos_connection\puntos_connectionController@mantenimiento');

/*=== Reconocimientos ===*/
route::get('reconocimientos', 'Reconocimientos\ReconocimientosController@reconocimientos');
route::get('getReportReconocimientos', 'Reconocimientos\ReconocimientosController@getReportReconocimientos');
route::get('recAvances', 'Reconocimientos\ReconocimientosController@recAvances');

/*=== Alcacnía nikken ===*/
route::get('MyAlcacnia/{associateid}', 'Reconocimientos\ReconocimientosController@MyAlcacnia');
route::get('MyAlcacniaData', 'Reconocimientos\ReconocimientosController@MyAlcacniaData');
route::get('MyAlcacniaDataDetail', 'Reconocimientos\ReconocimientosController@MyAlcacniaDataDetail');
route::get('MyAlcacniaDataRed', 'Reconocimientos\ReconocimientosController@MyAlcacniaDataRed');

/************* 	RUTAS REPORTES VENTAS EDDIE SOTO *****************/
Route::get('reports', 'Reports\ReportsController@reports');
Route::get('login', 'Reports\ReportsController@login');
Route::get('ventas', 'Reports\ReportsController@Ventas');
