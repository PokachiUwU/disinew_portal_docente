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
Route::redirect('/','login');
Route::view('/login','layouts.login')->name('login');
Route::view('/inicio','inicio')->name('inicio');
Route::view('/acesorias','acesorias')->name('acesorias');
Route::view('/virtual','virtual')->name('virtual');
Route::view('/grupos','grupos')->name('grupos');
Route::view('/plan-de-estudios', 'plan')->name('plan');
Route::view('/presentacion','presentacion')->name('presentacion');
Route::view('/tareas','tareas')->name('tareas');
Route::view('asistencia/registro','asistencia.registro')->name('asis_regis');
Route::view('asistencia/consulta', 'asistencia.consulta')->name('asis_cons');
Route::view('calificacion/registro','calificaciones.registro')->name('calif_regis');
Route::view('calificacion/actas','calificaciones.actas')->name('calif_actas');
Route::view('calificacion/list_asist','calificaciones.asistencia')->name('calif_asis');
Route::view('/calendario','calendario')->name('calendario');
Route::view('asistencia/registrar','asistencia.registrar')->name('a_registrar');
Route::view('asistencia/consultar','asistencia.consultar')->name('a_consultar');
Route::view('aula_virtual','virtual_a')->name('a_virtual');
Route::view('avisos/enviados','enviados')->name('enviados');
Route::view('avisos/grupal','a_grupo')->name('grupal');
Route::view('avisos/estudiante', 'a_estudiante')->name('estudiante');
route::view('grupos/lista','g_lista')->name('g_lista');
