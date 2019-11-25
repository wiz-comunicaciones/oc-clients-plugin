<?php
Route::get('/paginas/licencia.html', function(){ return redirect('/convenio-marco'); });
Route::get('/paginas/bpo.html', function(){ return redirect('/servicios/outsourcing'); });
Route::get('/paginas/custodia.html', function(){ return redirect('/servicios/almacenamiento-documentos-fisicos'); });
Route::get('/paginas/storage.html', function(){ return redirect('/servicios/almacenamiento-documentos-fisicos'); });
Route::get('/index.html', function(){ return redirect('/'); });
Route::get('/paginas/contacto.html', function(){ return redirect('/contacto'); });
Route::get('/paginas/reportaje.html', function(){ return redirect('/'); });
Route::get('/paginas/captura.html', function(){ return redirect('/servicios/digitalizacion'); });
Route::get('/paginas/documanager.html', function(){ return redirect('/servicios/gestion-documental'); });
