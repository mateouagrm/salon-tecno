<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use App\Cita;
use App\Venta;

class EstadisticaController extends Controller
{
    public function lista(){
        return view('reporte.estadistica.lista');
    }

    public function index()
    {
        $anio=date("Y");
        $mes=date("m");
        return view("reporte.estadistica.grafica")
            ->with("anio",$anio)
            ->with("mes",$mes);
    }

    public function getUltimoDiaMes($elAnio,$elMes) {
        return date("d",(mktime(0,0,0,$elMes+1,1,$elAnio)-1));
    }

    public function registros_mes($anio,$mes)
    {

        $primer_dia=1;
        $ultimo_dia=$this->getUltimoDiaMes($anio,$mes);
        $fecha_inicial=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$primer_dia) );
        $fecha_final=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$ultimo_dia) );
        $usuarios=Usuario::whereBetween('created_at', [$fecha_inicial,  $fecha_final])->get();
        $ct=count($usuarios);

        for($d=1;$d<=$ultimo_dia;$d++){
            $registros[$d]=0;
        }

        foreach($usuarios as $usuario){
            $diasel=intval(date("d",strtotime($usuario->created_at) ) );
            $registros[$diasel]++;
        }

        $data=array("totaldias"=>$ultimo_dia, "registrosdia" =>$registros);
        return json_encode($data);
    }

    public function citas(){
        $anio=date("Y");
        $mes=date("m");
        return view("reporte.estadistica.citas")
            ->with("anio",$anio)
            ->with("mes",$mes);
    }

    public function citas_graficos($anio,$mes)
    {

        $primer_dia=1;
        $ultimo_dia=$this->getUltimoDiaMes($anio,$mes);
        $fecha_inicial=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$primer_dia) );
        $fecha_final=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$ultimo_dia) );
        $cita=Cita::whereBetween('fechahora', [$fecha_inicial,  $fecha_final])->get();
        $ct=count($cita);

        for($d=1;$d<=$ultimo_dia;$d++){
            $registros[$d]=0;
        }

        foreach($cita as $citas){
            $diasel=intval(date("d",strtotime($citas->fechahora) ));
            $registros[$diasel]++;
        }

        $data=array("totaldias"=>$ultimo_dia, "registrosdia" =>$registros);
        return json_encode($data);
    }


    public function ventas(){
        $anio=date("Y");
        $mes=date("m");
        return view("reporte.estadistica.ventas")
            ->with("anio",$anio)
            ->with("mes",$mes);
    }

    public function ventas_graficos($anio,$mes)
    {

        $primer_dia=1;
        $ultimo_dia=$this->getUltimoDiaMes($anio,$mes);
        $fecha_inicial=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$primer_dia) );
        $fecha_final=date("Y-m-d H:i:s", strtotime($anio."-".$mes."-".$ultimo_dia) );
        $venta=Venta::whereBetween('fecha', [$fecha_inicial,  $fecha_final])->get();
        $ct=count($venta);

        for($d=1;$d<=$ultimo_dia;$d++){
            $registros[$d]=0;
        }

        foreach($venta as $ventas){
            $diasel=intval(date("d",strtotime($ventas->fecha) ));
            $registros[$diasel]++;
        }

        $data=array("totaldias"=>$ultimo_dia, "registrosdia" =>$registros);
        return json_encode($data);
    }




}
