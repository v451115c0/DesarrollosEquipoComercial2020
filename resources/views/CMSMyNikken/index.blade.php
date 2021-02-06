@extends('CMSMyNikken.layout')

@section('container')
    <div class="page-header">
        <div class="page-title">
            <h3>Nueva notificación</h3>
            <div class="crumbs">
                <ul id="breadcrumbs" class="breadcrumb">
                    <li><a href="javascript:void(0)"><i class="flaticon-home-fill"></i></a></li>
                    <li class="active"><a href="javascript:void(0)">Notificaciones MyNikken</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row layout-spacing">
        <form id="saveAlertForm" method="POST" enctype="multipart/form-data">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing">
                {{ csrf_field() }}
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Crear nueva notificación</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="form-group mb-4">
                            <label for="alertTittle">Titulo:</label>
                            <input type="text" class="form-control-rounded form-control" id="alertTittle" name="alertTittle">
                        </div>
                        <div class="form-group mb-4">
                            <label for="alertDate">Fecha:</label>
                            <input type="text" class="form-control-rounded form-control" id="alertDate" readonly name="alertDate">
                        </div>
                        <div class="form-group mb-4">
                            <label for="alertImgFondo">Imagen de fondo (opcional)</label>
                            <input type="file" class="form-control-file form-control-file-rounded dropify" id="alertImgFondo" name="alertImgFondo" data-allowed-file-extensions="png gif jpeg jpg">
                        </div>
                        <label>Agregar link (Opcional)</label>
                        <div class="row" style="border-radius: 15px; border: solid 1px #fff;">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group">
                                    <label for="micrositioslct">Example select</label>
                                    <select class="form-control-rounded form-control" name="micrositioslct" id="micrositioslct" onchange="setlinkval(this.value)">
                                        <option value="0" selected>Selecciona el micro-sitio</option>
                                        <option value="https://services.nikken.com.mx/viajeros/">Club Viajeros</option>
                                        <option value="https://services.nikken.com.mx/regactivinf/">Actividad de Influencer</option>
                                        <option value="https://services.nikken.com.mx/influencia30/">Simulador 2.0</option>
                                        <option value="https://services.nikken.com.mx/PlanInfluencia/">Controlador Nikken Challenge</option>
                                        <option value="https://services.nikken.com.mx/viajeros_premium/">Viajeros Premium</option>
                                        <option value="https://services.nikken.com.mx/puntos_connection/">Puntos Conection</option>
                                        <option value="https://services.nikken.com.mx/calculadoraNikken/">Calculadora NIKKEN</option>
                                        <option value="https://services.nikken.com.mx/inc1USD/">Incorporación a 1 Dolar (mokuteki)</option>
                                        <option value="https://services.nikken.com.mx/depuracion/">Renovados 2021</option>
                                        <option value="https://services.nikken.com.mx/retosEspeciales2021/">Retos especiales 2021</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="form-group mb-4">
                                    <label for="linkFinal">Liga:</label>
                                    <input type="text" name="linkFinal" id="linkFinal" class="form-control-rounded form-control">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="form-group mb-4">
                                    <label for="linkname">Texto a mostrar:</label>
                                    <input type="text" name="linkname" id="linkname" class="form-control-rounded form-control">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="form-group mt-5">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-line-through checkbox-success">
                                            <input type="checkbox" class="new-control-input" name="abicode">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">Concatenar Código ABI</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="alertMsg">Mensaje</label>
                            <textarea class="form-control-rounded form-control" id="alertMsg" name="alertMsg" rows="6" lang="es"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 layout-spacing">
                {{ csrf_field() }}
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Crear nueva notificación</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="form-group mb-4">
                                    <label for="alertFile1">Archivo 1 (opcional)</label>
                                    <input type="file" class="dropify" data-max-file-size="3M" name="alertFile1"/>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="form-group mb-4">
                                    <label for="alertFile2">Archivo 2 (opcional)</label>
                                    <input type="file" class="dropify" data-max-file-size="3M" name="alertFile2"/>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="form-group mb-4">
                                    <label for="alertFile1">Archivo 3 (opcional)</label>
                                    <input type="file" class="dropify" data-max-file-size="3M" name="alertFile3"/>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="form-group mb-4">
                                    <label for="alertFile2">Archivo 4 (opcional)</label>
                                    <input type="file" class="dropify" data-max-file-size="3M" name="alertFile4"/>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="form-group mb-4">
                                    <label for="alertFile1">Archivo 5 (opcional)</label>
                                    <input type="file" class="dropify" data-max-file-size="3M" name="alertFile5"/>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="form-group mb-4">
                                    <label for="alertFile2">Archivo 6 (opcional)</label>
                                    <input type="file" class="dropify" data-max-file-size="3M" name="alertFile6"/>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="form-group mb-4">
                                    <label for="alertFile1">Archivo 7 (opcional)</label>
                                    <input type="file" class="dropify" data-max-file-size="3M" name="alertFile7"/>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                <div class="form-group mb-4">
                                    <label for="alertFile2">Archivo 8 (opcional)</label>
                                    <input type="file" class="dropify" data-max-file-size="3M" name="alertFile8"/>
                                </div>
                            </div>
                        </div>
                        <label>Países</label>
                        <div class="row" style="border-radius: 15px; border: solid 1px #fff;">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="form-group mt-2">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-line-through checkbox-success">
                                            <input type="checkbox" class="new-control-input" name="allCountries" id="allCountries">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">Todos los países</span>
                                        </label>
                                        <br>
                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-line-through checkbox-success">
                                            <input type="checkbox" class="new-control-input" name="chckCol" id="chckCol">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">Colombia</span>
                                        </label>
                                        <br>
                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-line-through checkbox-success">
                                            <input type="checkbox" class="new-control-input" name="chckMex" id="chckMex">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">México</span>
                                        </label>
                                        <br>
                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-line-through checkbox-success">
                                            <input type="checkbox" class="new-control-input" name="chckPer" id="chckPer">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">Perú</span>
                                        </label>
                                        <br>
                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-line-through checkbox-success">
                                            <input type="checkbox" class="new-control-input" name="chckCri" id="chckCri">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">Costa Rica</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="form-group mt-2">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-line-through checkbox-success">
                                            <input type="checkbox" class="new-control-input" name="chckEcu" id="chckEcu">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">Ecuador</span>
                                        </label>
                                        <br>
                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-line-through checkbox-success">
                                            <input type="checkbox" class="new-control-input" name="chckSlv" id="chckSlv">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">El Salvador</span>
                                        </label>
                                        <br>
                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-line-through checkbox-success">
                                            <input type="checkbox" class="new-control-input" name="chckGtm" id="chckGtm">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">Guatemala</span>
                                        </label>
                                        <br>
                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-line-through checkbox-success">
                                            <input type="checkbox" class="new-control-input" name="chckPan" id="chckPan">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">Panamá</span>
                                        </label>
                                        <br>
                                        <label class="new-control new-checkbox new-checkbox-rounded new-checkbox-line-through checkbox-success">
                                            <input type="checkbox" class="new-control-input" name="chckChl" id="chckChl">
                                            <span class="new-control-indicator"></span><span class="new-chk-content">Chile</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-gradient-warning btn-rounded mb-4 mr-2 mt-3" id="btnsave" value="Guardar alerta"></input>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection