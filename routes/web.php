<?php

use Illuminate\Support\Facades\Route;

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

Route::post('/loginValidation', 'AuthController@login');

Route::get('/logout', 'AuthController@logout');

Route::get('/indexAdministrator', 'PagesController@indexAdmin');

//Route::get('/personaliaTornagodang', 'PagesController@personaliaTornagodang');
//Route::get('/personaliaPardomuan', 'PagesController@personaliaPardomuan');
//Route::get('/personaliaSibosur', 'PagesController@personaliaSibosur');
//Route::get('/personaliaMatio', 'PagesController@personaliaMatio');

Route::get('/indexPendeta', 'PagesController@indexPendeta');

// Route::get('/dataGereja', function () {
//     return view('dataGereja');
// });

Route::get('/detailGereja', function () {
    return view('detailGereja');
});

Route::get('/kasMain', 'KasAdminController@index');
Route::get('/detailKasGereja/{id}', 'KasAdminController@show');

Route::get('/kolekteMain', 'KolekteAdminController@index');
Route::get('/detailKolekteGereja/{id}', 'KolekteAdminController@show');

Route::get('/editPengumuman', function () {
    return view('editPengumuman');
});

Route::get('/editPendetaPensiun', function () {
    return view('editPendetaPensiun');
});

Route::get('/detailPendetaPensiun', function () {
    return view('detailPendetaPensiun');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/editDataGereja', function () {
    return view('editDataGereja');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/editProfile', function () {
    return view('editProfile');
});

Route::get('/pengumumanJemaat', function() {
    return view('pengumumanJemaat');
});

//DATA GEREJA JEMAAT

Route::get('/gerejaPage', 'PengumumanController@indexGereja');

//DATA GEREJA
    //Personalia
Route::get('/dataPersonalia', 'DataGerejaPersonaliaController@index');
Route::get('/addDataGerejaPersonalia', 'DataGerejaPersonaliaController@create');
Route::post('dataGerejaPersonalia', 'DataGerejaPersonaliaController@store');
Route::get('/detailDataPersonalia/{dataGereja}', 'DataGerejaPersonaliaController@show');
Route::delete('/detailDataPersonalia/{dataGereja}', 'DataGerejaPersonaliaController@destroy');
Route::get('/editDataGerejaPersonalia/{dataGereja}', 'DataGerejaPersonaliaController@edit');
Route::patch('/updateDataGerejaPersonalia/{dataGereja}', 'DataGerejaPersonaliaController@update');

    //Pendeta
Route::get('/dataGerejaPendeta', 'DataGerejaPendetaController@show');
Route::get('/addDataGerejaPendeta', 'DataGerejaPendetaController@create');
Route::post('dtGerejaPendeta', 'DataGerejaPendetaController@store');
Route::get('/detailDataGerejaPendeta/{dataGereja}', 'DataGerejaPendetaController@show');
Route::delete('/detailDataGerejaPendeta/{dataGereja}', 'DataGerejaPendetaController@destroy');
Route::get('/editDataGerejaPendeta/{dataGereja}', 'DataGerejaPendetaController@edit');
Route::patch('/updateDataGerejaPendeta/{dataGereja}', 'DataGerejaPendetaController@update');


//KAS GEREJA
    //Personalia
Route::get('/kasPersonalia', 'KasGerejaPersonaliaController@index');
Route::get('/addKasGerejaPersonalia', 'KasGerejaPersonaliaController@create');
Route::post('kasGereja', 'KasGerejaPersonaliaController@store');
Route::get('/detailKasPersonalia/{kasGereja}', 'KasGerejaPersonaliaController@show');
Route::delete('/detailKasPersonalia/{kasGereja}', 'KasGerejaPersonaliaController@destroy');
Route::get('/editKasGerejaPersonalia/{kasGereja}', 'KasGerejaPersonaliaController@edit');
Route::patch('/updateKasGerejaPersonalia/{kasGereja}', 'KasGerejaPersonaliaController@update');

    //Pendeta
Route::get('/kasPendeta', 'KasGerejaPendetaController@index');
Route::get('/addKasGerejaPendeta', 'KasGerejaPendetaController@create');
Route::post('kasGerejaPendeta', 'KasGerejaPendetaController@store');
Route::get('/detailKasPendeta/{kasGereja}', 'KasGerejaPendetaController@show');
Route::delete('/detailKasPendeta/{kasGereja}', 'KasGerejaPendetaController@destroy');
Route::get('/editKasGerejaPendeta/{kasGereja}', 'KasGerejaPendetaController@edit');
Route::patch('/updateKasGerejaPendeta/{kasGereja}', 'KasGerejaPendetaController@update');

//PENGUMUMAN GEREJA
    //Personalia
Route::get('/personaliaTornagodang', 'PengumumanPersonaliaController@personaliaTornagodang');
Route::get('/personaliaPardomuan', 'PengumumanPersonaliaController@personaliaPardomuan');
Route::get('/personaliaSibosur', 'PengumumanPersonaliaController@personaliaSibosur');
Route::get('/personaliaMatio', 'PengumumanPersonaliaController@personaliaMatio');
Route::get('/pengumumanPersonalia', 'PengumumanPersonaliaController@index');
Route::get('/addPengumumanPersonalia', 'PengumumanPersonaliaController@create');
Route::post('pengumumanGereja', 'PengumumanPersonaliaController@store');
Route::get('/detailPengumumanPersonalia/{pengumumanGereja}', 'PengumumanPersonaliaController@show');
Route::delete('/detailPengumumanPersonalia/{pengumumanGereja}', 'PengumumanPersonaliaController@destroy');
Route::get('/editPengumumanGerejaPersonalia/{pengumumanGereja}', 'PengumumanPersonaliaController@edit');
Route::patch('/updatePengumumanGerejaPersonalia/{pengumumanGereja}', 'PengumumanPersonaliaController@update');
Route::get('/detailPengumumanPersonaliaIndex/{pengumumanGereja}', 'PengumumanPersonaliaController@showIndex');

    //Pendeta
Route::get('/indexPendeta', 'PengumumanPendetaController@dashboard');
Route::get('/pengumumanPendeta', 'PengumumanPendetaController@index');
Route::get('/addPengumumanPendeta', 'PengumumanPendetaController@create');
Route::post('pengumumanPendeta', 'PengumumanPendetaController@store');
Route::get('/detailPengumumanPendeta/{pengumumanGereja}', 'PengumumanPendetaController@show');
Route::delete('/detailPengumumanPendeta/{pengumumanGereja}', 'PengumumanPendetaController@destroy');
Route::get('/editPengumumanGerejaPendeta/{pengumumanGereja}', 'PengumumanPendetaController@edit');
Route::patch('/updatePengumumanGerejaPendeta/{pengumumanGereja}', 'PengumumanPendetaController@update');
Route::get('/detailPengumumanPendetaIndex/{pengumumanGereja}', 'PengumumanPendetaController@showIndex');

    //Jemaat
Route::get('/pengumumanJemaat', 'PengumumanController@indexJemaat');
Route::get('/detailPengumumanJemaat/{pengumuman}', 'PengumumanController@showJemaat');


//KOLEKTE GEREJA
    //Personalia
Route::get('/kolektePersonalia', 'KolekteGerejaPersonaliaController@index');
Route::get('/addKolekteGerejaPersonalia', 'KolekteGerejaPersonaliaController@create');
Route::post('kolekteGereja', 'KolekteGerejaPersonaliaController@store');
Route::get('/detailKolektePersonalia/{kolekteGereja}', 'KolekteGerejaPersonaliaController@show');
Route::delete('/detailKolektePersonalia/{kolekteGereja}', 'KolekteGerejaPersonaliaController@destroy');
Route::get('/editKolekteGerejaPersonalia/{kolekteGereja}', 'KolekteGerejaPersonaliaController@edit');
Route::patch('/updateKolekteGerejaPersonalia/{kolekteGereja}', 'KolekteGerejaPersonaliaController@update');

    //Pendeta
Route::get('/kolektePendeta', 'KolekteGerejaPendetaController@index');
Route::get('/addKolekteGerejaPendeta', 'KolekteGerejaPendetaController@create');
Route::post('kolekteGerejaPendeta', 'KolekteGerejaPendetaController@store');
Route::get('/detailKolektePendeta/{kolekteGereja}', 'KolekteGerejaPendetaController@show');
Route::delete('/detailKolektePendeta/{kolekteGereja}', 'KolekteGerejaPendetaController@destroy');
Route::get('/editKolekteGerejaPendeta/{kolekteGereja}', 'KolekteGerejaPendetaController@edit');
Route::patch('/updateKolekteGerejaPendeta/{kolekteGereja}', 'KolekteGerejaPendetaController@update');


//PENDETA AKTIF
    //Admin
Route::get('/pendetaAktif', 'PendetaAktifController@index');
Route::get('/addPendetaAktif', 'PendetaAktifController@create');
Route::post('penAktif', 'PendetaAktifController@store');
Route::get('/detailPendetaAktif/{pendetaAktif}', 'PendetaAktifController@show');
Route::delete('/detailPendetaAktif/{pendetaAktif}', 'PendetaAktifController@destroy');
Route::get('/editAktif/{pendetaAktif}', 'PendetaAktifController@edit');
Route::patch('/updateAktif/{pendetaAktif}', 'PendetaAktifController@update');

    //Personalia
Route::get('/pendetaAktifPersonalia', 'PendetaAktifPersonaliaController@index');
Route::get('/addPendetaAktifPersonalia', 'PendetaAktifPersonaliaController@create');
Route::post('penAktifPersonalia', 'PendetaAktifPersonaliaController@store');
Route::get('/detailPendetaAktifPersonalia/{pendetaAktif}', 'PendetaAktifPersonaliaController@show');
Route::delete('/detailPendetaAktifPersonalia/{pendetaAktif}', 'PendetaAktifPersonaliaController@destroy');
Route::get('/editAktifPersonalia/{pendetaAktif}', 'PendetaAktifPersonaliaController@edit');
Route::patch('/updateAktifPersonalia/{pendetaAktif}', 'PendetaAktifPersonaliaController@update');

    //Pendeta
// Route::get('/pendetaAktifPendeta', 'PendetaAktifPendetaController@index');
// Route::get('/addPendetaAktifPendeta', 'PendetaAktifPendetaController@create');
// Route::post('penAktifPendeta', 'PendetaAktifPendetaController@store');
// Route::get('/detailPendetaAktifPendeta/{pendetaAktif}', 'PendetaAktifPendetaController@show');
// Route::delete('/detailPendetaAktifPendeta/{pendetaAktif}', 'PendetaAktifPendetaController@destroy');
// Route::get('/editAktifPendeta/{pendetaAktif}', 'PendetaAktifPendetaController@edit');
// Route::patch('/updateAktifPendeta/{pendetaAktif}', 'PendetaAktifPendetaController@update');


// DATA PENDETA
Route::get('/dataPendeta', 'DataPendetaController@show');
Route::get('/addDataPendeta', 'DataPendetaController@create');
Route::post('dtPendeta', 'DataPendetaController@store');
Route::get('/dataPendeta/{dataPendeta}', 'DataPendetaController@show');
Route::delete('/dataPendeta/{dataPendeta}', 'DataPendetaController@destroy');
Route::get('/editDataPendeta/{dataPendeta}', 'DataPendetaController@edit');
Route::patch('/updateDataPendeta/{dataPendeta}', 'DataPendetaController@update');


//PENDETA PENSIUN
    //Admin
Route::get('/pendetaPensiun', 'PendetaPensiunController@index');
Route::get('/addPendetaPensiun', 'PendetaPensiunController@create');
Route::post('addPenPensiun', 'PendetaPensiunController@store');
Route::get('/detailPendetaPensiun/{pendetaPensiun}', 'PendetaPensiunController@show');
Route::delete('/detailPendetaPensiun/{pendetaPensiun}', 'PendetaPensiunController@destroy');
Route::get('/editPensiun/{pendetaPensiun}', 'PendetaPensiunController@edit');
Route::patch('/updatePensiun/{pendetaPensiun}', 'PendetaPensiunController@update');

//GEREJA
Route::get('/dataGereja', 'GerejaController@index');
Route::get('/addGereja', 'GerejaController@create');
Route::post('/addGerejaBaru', 'GerejaController@store');
Route::get('/detailGereja/{gereja}', 'GerejaController@show');
Route::delete('/detailGereja/{gereja}', 'GerejaController@destroy');
Route::get('/editDataGereja/{gereja}', 'GerejaController@edit');
Route::patch('/updateDataGereja/{gereja}', 'GerejaController@update');


//PENGUMUMAN
Route::get('/pengumuman', 'PengumumanController@index');
Route::get('/addPengumuman', 'PengumumanController@create');
Route::post('/addPengumumanBaru', 'PengumumanController@store');
Route::get('/detailPengumuman/{pengumuman}', 'PengumumanController@show');
Route::delete('/pengumuman/{pengumuman}', 'PengumumanController@destroy');

//TATAIBADAH
Route::get('/tataIbadahList', 'TataIbadahController@indexList');
Route::get('/tataIbadahPersonalia', 'TataIbadahController@indexListPersonalia');
Route::get('/tataIbadah', 'TataIbadahController@index');
Route::get('/addTataIbadah', 'TataIbadahController@create');
Route::post('/addNewTataIbadah', 'TataIbadahController@store');
Route::get('/addTataIbadahPersonalia', 'TataIbadahController@createPersonalia');
Route::post('/addNewTataIbadahPersonalia', 'TataIbadahController@storePersonalia');
Route::get('/detailTataIbadah/{tataIbadah}', 'TataIbadahController@show');
Route::get('/detailTataIbadahPersonalia/{tataIbadah}', 'TataIbadahController@showPersonalia');
Route::get('/detailTataIbadahJemaat/{tataIbadah}', 'TataIbadahController@showJemaat');
Route::delete('/tataIbadah/{tataIbadah}', 'TataIbadahController@destroy');
Route::delete('/tataIbadahPersonalia/{tataIbadah}', 'TataIbadahController@destroyPersonalia');

//ARTIKEL
Route::get('/artikel', 'ArtikelController@indexJemaat');
Route::get('/', 'ArtikelController@indexJemaatHome');
Route::get('/artikelList', 'ArtikelController@index');
Route::get('/artikelListPersonalia', 'ArtikelController@indexPersonalia');
Route::get('/addArtikel', 'ArtikelController@create');
Route::post('/addNewArtikel', 'ArtikelController@store');
Route::get('/addArtikelPersonalia', 'ArtikelController@createPersonalia');
Route::post('/addNewArtikelPersonalia', 'ArtikelController@storePersonalia');
//Route::get('/detailTataIbadah/{tataIbadah}', 'TataIbadahController@show');
//Route::delete('/tataIbadah/{tataIbadah}', 'TataIbadahController@destroy');

    //Personalia
Route::get('/pendetaPensiunPersonalia', 'PendetaPensiunPersonaliaController@index');
Route::get('/addPendetaPensiunPersonalia', 'PendetaPensiunPersonaliaController@create');
Route::post('addPenPensiunPersonalia', 'PendetaPensiunPersonaliaController@store');
Route::get('/detailPendetaPensiunPersonalia/{pendetaPensiun}', 'PendetaPensiunPersonaliaController@show');
Route::delete('/detailPendetaPensiunPersonalia/{pendetaPensiun}', 'PendetaPensiunPersonaliaController@destroy');
Route::get('/editPensiunPersonalia/{pendetaPensiun}', 'PendetaPensiunPersonaliaController@edit');
Route::patch('/updatePensiunPersonalia/{pendetaPensiun}', 'PendetaPensiunPersonaliaController@update');

//JEMAAT
Route::get('/jemaatTornagodang', 'JemaatTornagodangController@index');
Route::get('/addJemaatTornagodang', 'JemaatTornagodangController@create');
Route::post('/storeJemaatTornagodang', 'JemaatTornagodangController@store');
Route::delete('/deleteJemaatTornagodang/{jemaatTornagodang}', 'JemaatTornagodangController@destroy');
Route::get('/editJemaatTornagodang/{jemaatTornagodang}', 'JemaatTornagodangController@edit');
Route::patch('/updateJemaatTornagodang/{jemaatTornagodang}', 'JemaatTornagodangController@update');

Route::get('/jemaatMatio', 'JemaatMatioController@index');
Route::get('/addJemaatMatio', 'JemaatMatioController@create');
Route::post('/storeJemaatMatio', 'JemaatMatioController@store');
Route::delete('/deleteJemaatMatio/{jemaatMatio}', 'JemaatMatioController@destroy');
Route::get('/editJemaatMatio/{jemaatMatio}', 'JemaatMatioController@edit');
Route::patch('/updateJemaatMatio/{jemaatMatio}', 'JemaatMatioController@update');

Route::get('/jemaatPardomuan', 'JemaatPardomuanController@index');
Route::get('/addJemaatPardomuan', 'JemaatPardomuanController@create');
Route::post('/storeJemaatPardomuan', 'JemaatPardomuanController@store');
Route::delete('/deleteJemaatPardomuan/{jemaatPardomuan}', 'JemaatPardomuanController@destroy');
Route::get('/editJemaatPardomuan/{jemaatPardomuan}', 'JemaatPardomuanController@edit');
Route::patch('/updateJemaatPardomuan/{jemaatPardomuan}', 'JemaatPardomuanController@update');

Route::get('/jemaatSibosur', 'JemaatSibosurController@index');
Route::get('/addJemaatSibosur', 'JemaatSibosurController@create');
Route::post('/storeJemaatSibosur', 'JemaatSibosurController@store');
Route::delete('/deleteJemaatSibosur/{jemaatSibosur}', 'JemaatSibosurController@destroy');
Route::get('/editJemaatSibosur/{jemaatSibosur}', 'JemaatSibosurController@edit');
Route::patch('/updateJemaatSibosur/{jemaatSibosur}', 'JemaatSibosurController@update');

//KEUANGAN
Route::get('/keuanganTornagodang', 'KeuanganTornagodangController@index');
Route::get('/addKeuanganTornagodang', 'KeuanganTornagodangController@create');
Route::post('/storeKeuanganTornagodang', 'KeuanganTornagodangController@store');
Route::delete('/deleteKeuanganTornagodang/{keuanganTornagodang}', 'KeuanganTornagodangController@destroy');

Route::get('/keuanganPardomuan', 'KeuanganPardomuanController@index');
Route::get('/addKeuanganPardomuan', 'KeuanganPardomuanController@create');
Route::post('/storeKeuanganPardomuan', 'KeuanganPardomuanController@store');
Route::delete('/deleteKeuanganPardomuan/{keuanganPardomuan}', 'KeuanganPardomuanControllers@destroy');

Route::get('/keuanganMatio', 'KeuanganMatioController@index');
Route::get('/addKeuanganMatio', 'KeuanganMatioController@create');
Route::post('/storeKeuanganMatio', 'KeuanganMatioController@store');
Route::delete('/deleteKeuanganMatio/{keuanganMatio}', 'KeuanganMatioController@destroy');

Route::get('/keuanganSibosur', 'KeuanganSibosurController@index');
Route::get('/addKeuanganSibosur', 'KeuanganSibosurController@create');
Route::post('/storeKeuanganSibosur', 'KeuanganSibosurController@store');
Route::delete('/deleteKeuanganSibosur/{keuanganSibosur}', 'KeuanganSibosurController@destroy');

//Personali v2
Route::get('/jemaatTornagodangPersonalia', 'JemaatTornagodangController@indexPersonalia');
Route::get('/addJemaatTornagodangPersonalia', 'JemaatTornagodangController@createPersonalia');
Route::post('/storeJemaatTornagodangPersonalia', 'JemaatTornagodangController@storePersonalia');
Route::delete('/deleteJemaatTornagodangPersonalia/{jemaatTornagodangPersonalia}', 'JemaatTornagodangController@destroyPersonalia');
Route::get('/editJemaatTornagodangPersonalia/{jemaatTornagodangPersonalia}', 'JemaatTornagodangController@editPersonalia');
Route::patch('/updateJemaatTornagodangPersonalia/{jemaatTornagodangPersonalia}', 'JemaatTornagodangController@updatePersonalia');

Route::get('/keuanganTornagodangPersonalia', 'KeuanganTornagodangController@indexPersonalia');
