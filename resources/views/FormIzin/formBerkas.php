<?php
/**
 * Created by PhpStorm.
 * User: Yanfa
 * Date: 06/04/2015
 * Time: 12:57
 */

$coba = Request::all();
$namafile = 'buktitanah';
$input = Input::file($namafile);

$input->move(substr(__DIR__,0,strlen(__DIR__) - 25).'\berkasIzin\\'.$coba['Username'].'\\'.$namafile.'\\',$input->getClientOriginalName());

$namafile = 'aktapendirian';
$input = Input::file($namafile);

$input->move(substr(__DIR__,0,strlen(__DIR__) - 25).'\berkasIzin\\'.$coba['Username'].'\\'.$namafile.'\\',$input->getClientOriginalName());
// echo substr(__DIR__,0,strlen(__DIR__) - 25).'\berkasIzin\\'.$coba['Username'].'\\'.$input->getClientOriginalName();

$namafile = 'penggunaantanah';
$input = Input::file($namafile);

$input->move(substr(__DIR__,0,strlen(__DIR__) - 25).'\berkasIzin\\'.$coba['Username'].'\\'.$namafile.'\\',$input->getClientOriginalName());

$namafile = 'kuasapengurusan';
$input = Input::file($namafile);

$input->move(substr(__DIR__,0,strlen(__DIR__) - 25).'\berkasIzin\\'.$coba['Username'].'\\'.$namafile.'\\',$input->getClientOriginalName());

$namafile = 'rencanapenggunaan';
$input = Input::file($namafile);

$input->move(substr(__DIR__,0,strlen(__DIR__) - 25).'\berkasIzin\\'.$coba['Username'].'\\'.$namafile.'\\',$input->getClientOriginalName());

$namafile = 'gambarrencana';
$input = Input::file($namafile);

$input->move(substr(__DIR__,0,strlen(__DIR__) - 25).'\berkasIzin\\'.$coba['Username'].'\\'.$namafile.'\\',$input->getClientOriginalName());

$namafile = 'gambarkonstruksi';
$input = Input::file($namafile);

$input->move(substr(__DIR__,0,strlen(__DIR__) - 25).'\berkasIzin\\'.$coba['Username'].'\\'.$namafile.'\\',$input->getClientOriginalName());

$namafile = 'instalasilistrik';
$input = Input::file($namafile);

$input->move(substr(__DIR__,0,strlen(__DIR__) - 25).'\berkasIzin\\'.$coba['Username'].'\\'.$namafile.'\\',$input->getClientOriginalName());

$namafile = 'fotocopyktp';
$input = Input::file($namafile);

$input->move(substr(__DIR__,0,strlen(__DIR__) - 25).'\berkasIzin\\'.$coba['Username'].'\\'.$namafile.'\\',$input->getClientOriginalName());

$namafile = 'pbb';
$input = Input::file($namafile);

$input->move(substr(__DIR__,0,strlen(__DIR__) - 25).'\berkasIzin\\'.$coba['Username'].'\\'.$namafile.'\\',$input->getClientOriginalName());

header('Location: retribusi');
die();
?>

