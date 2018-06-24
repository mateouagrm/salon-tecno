@extends ('layouts.admin')
@section ('contenido')

<div class="row ">
    <div class="col-md-8 col-md-offset-2">
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5" style="background-color: black ;margin-left: 0px;margin-top: 20px;text-align: center;line-height: 160px">
                            <a href="{{url('listado_graficas')}}" ><h2>Registro de Usuario </h2> </a>
                        </div>

                        <div class="col-lg-5" style="background-color: black ;margin-left: 10px;margin-top: 20px;text-align: center;line-height: 160px">
                            <a href="{{url('listado_graficas_citas')}}" ><h2>Registro de Citas</h2> </a>
                        </div>
                        <div class="col-lg-5" style="background-color: black ;margin-left: 10px;margin-top: 20px;text-align: center;line-height: 160px">
                            <a href="{{url('listado_graficas_ventas')}}" ><h2>Registro de Ventas</h2> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
