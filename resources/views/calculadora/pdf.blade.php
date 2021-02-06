<html>
    <head>
        <style>
            @page {
                margin: 0cm 0cm;
            }

            @font-face {
                font-family: "Comfortaa";
                src: url("../fpro/fonts/comfortaa/Comfortaa-Regular.ttf");
            }

            body {
                margin-top: 2cm;
                margin-left: 2cm;
                margin-right: 2cm;
                margin-bottom: 2cm;
                font-family: 'Comfortaa', Arial, sans-serif !important;
            }

            header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 2cm;
                color: white;
                text-align: left;
                line-height: 1.5cm;
                background: linear-gradient(90deg, #020024 0%, #5d85be 0%, #5fa38c 100%);
                background-color: rgba(0, 0, 0, 0);
            }

            footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 3.15cm;
                color: white;
                text-align: center;
                line-height: 1.5cm;
            }
            
            main{
                width: 100%;
                font-family: 'Comfortaa', Arial, sans-serif !important;
            }

            .parrafo1{
                padding: 0 10% 0 10%;
                font-size: 10px;
                text-align: justify;
                font-family: 'Comfortaa', Arial, sans-serif !important;
            }

            .row {
                padding-left: 15%;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                margin-right: -15px;
                margin-left: -15px;
                width: 80% !important;
                max-width: 80% !important;
            }


            .ml-4{
                margin-left: 14px;
            }

            .br-4 {
                border-radius: 4px !important;
            }
            .widget-content-area {
                position: relative;
                background-color: #fff;
                border-bottom-left-radius: 6px;
                border-bottom-right-radius: 6px;
            }
            .text-center {
                text-align: center !important;
            }

            .btn-rounded {
                -webkit-border-radius: 1.875rem !important;
                -moz-border-radius: 1.875rem !important;
                -ms-border-radius: 1.875rem !important;
                -o-border-radius: 1.875rem !important;
                border-radius: 1.875rem !important;
            }
            .btn-outline-primary {
                border: 1px solid #1a73e9 !important;
                color: #1a73e9 !important;
                background-color: transparent;
                box-shadow: none;
            }
            .btn, .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ColVis_MasterButton, .fc-state-default {
                padding: 0.4375rem 1.25rem;
                text-shadow: none;
                font-size: 14px;
                color: #3b3f5c;
                font-weight: normal;
                white-space: normal;
                word-wrap: break-word;
                transition: .2s ease-out;
                touch-action: manipulation;
                cursor: pointer;
                background-color: #e9ecef;
                box-shadow: 0px 5px 20px 0 rgba(0, 0, 0, 0.1);
                will-change: opacity, transform;
                transition: all 0.3s ease-out;
                -webkit-transition: all 0.3s ease-out;
            }

            .tabBonos tbody tr:nth-of-type(2n+1) {
                background-color: #e2e2e2 !important;
            }

            .tabBonos tbody tr:nth-of-type(1n+1) {
                background-color: #ffffff;
            }

            .btn-outline-primary {
                border: 1px solid #1a73e9 !important;
                color: #1a73e9 !important;
                background-color: transparent;
                box-shadow: none;
            }

            .isoMoney{
                font-family: DejaVu Sans;
            }
        </style>
    </head>
    <body>
        @php
            $rangosLetra = ['Cliente' => 'CLIENTE', 'Influencer' => 'INFLUENCER', 'DIR' => 'DIRECTO', 'EXE' => 'EJECUTIVO', 'PLA' => 'PLATA', 'ORO' => 'ORO', 'PLO' => 'PLATINO', 'DIA' => 'DIAMANTE', 'DRL' => 'DIAMANTE REAL'];
        @endphp

        <header>
            <img src="{{ asset('fpro/img/logo-black.png') }}" width="30%" style="margin-left: 5px; margin-top: 3px">
            <img src="{{ asset('fproh/img/calculadora/' . $nodo0[1] . '.png') }}" width="5%" style="margin-right: 10px; margin-top: 3px; float: right">
        </header>

        <footer>
            <img src="{{ asset('fproh/img/influencia30/pie-DocRecurso 3.png') }}" width="100%">
        </footer>

        <main style="text-align: center">
            <h1>{{ trim($nodo0[2], ' ') }}</h1>
            <h4 style="margin-top: 0 !important">
                <img src="{{ asset('fproh/img/calculadora/' . $nodo0[0] . '.png') }}" width="3%">
                {{ $rangosLetra[$nodo0[0]] }}
            </h4>
            <table border="0" style="width: 100%">
                <thead style="text-align: center; font-size: 10px">
                    <tr>
                        <th>Linea 1</th>
                        <th>Linea 2</th>
                        <th>Linea 3</th>
                    </tr>
                </thead>
                <tbody style="text-align: center">
                    <tr>
                        <td>
                            @if ($nodo1[0] != 'NO')
                                <button style="border-radius: 50%; width: 100%; background-color: transparent; border: 1px solid #00aa97 !important; margin-bottom: 5px; font-size: 13px">{{ $nodo1[0] }}</button><br>
                                <button style="border-radius: 50%; width: 100%; background-color: transparent; border: 1px solid #bb9150 !important; margin-bottom: 5px; font-size: 13px">
                                    <img src="{{ asset('fproh/img/calculadora/' . $nodo1[1] . '.png') }}" width="100%" style="margin-top: px">
                                    {{ $rangosLetra[$nodo1[1]] }}
                                </button><br>
                                <hr style="border: 1px solid #00aa97; margin-bottom: 0"><br>
                                @if ($nodo1[5] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo1[5] }} - {{ $nodo1[10] }} pz</button><br>
                                @endif
                                @if($nodo1[7] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo1[7] }} - {{ $nodo1[11] }} pz</button><br>
                                @endif
                                @if($nodo1[9] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo1[9] }} - {{ $nodo1[12] }} pz</button><br>
                                @endif
                                <table border="0" style="width: 100%; font-size: 11px" class="tabBonos">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Plan de Influencia 3.0:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo1[13] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Retail:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo1[14] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Reembolso:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo1[15] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Bonificación por grupo 15%:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo1[16] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Liderazgo 6%:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo1[17] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">
                                                Total de bonificaciones:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td class="text-left">
                                                {{ $nodo1[18] }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        </td>
                        <td>
                            @if ($nodo3[0] != 'NO')
                                <button style="border-radius: 50%; width: 100%; background-color: transparent; border: 1px solid #00aa97 !important; margin-bottom: 5px; font-size: 13px">{{ $nodo3[0] }}</button><br>
                                <button style="border-radius: 50%; width: 100%; background-color: transparent; border: 1px solid #bb9150 !important; margin-bottom: 5px; font-size: 13px">
                                    <img src="{{ asset('fproh/img/calculadora/' . $nodo3[1] . '.png') }}" width="100%" style="margin-top: px">
                                    {{ $rangosLetra[$nodo3[1]] }}
                                </button><br>
                                <hr style="border: 1px solid #00aa97; margin-bottom: 0"><br>
                                @if ($nodo3[5] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo3[5] }} - {{ $nodo3[10] }} pz</button><br>
                                @endif
                                @if ($nodo3[7] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo3[7] }} - {{ $nodo3[11] }} pz</button><br>
                                @endif
                                @if ($nodo3[9] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo3[9] }} - {{ $nodo3[12] }} pz</button><br>
                                @endif
                                <table border="0" style="width: 100%; font-size: 11px" class="tabBonos">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Plan de Influencia 3.0:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo3[13] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Retail:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo3[14] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Reembolso:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo3[15] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Bonificación por grupo 15%:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo3[16] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Liderazgo 6%:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo3[17] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">
                                                Total de bonificaciones:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td class="text-left">
                                                {{ $nodo3[18] }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        </td>
                        <td>
                            @if ($nodo5[0] != 'NO')
                                <button style="border-radius: 50%; width: 100%; background-color: transparent; border: 1px solid #00aa97 !important; margin-bottom: 5px; font-size: 13px">{{ $nodo5[0] }}</button><br>
                                <button style="border-radius: 50%; width: 100%; background-color: transparent; border: 1px solid #bb9150 !important; margin-bottom: 5px; font-size: 13px">
                                    <img src="{{ asset('fproh/img/calculadora/' . $nodo5[1] . '.png') }}" width="100%" style="margin-top: px">
                                    {{ $rangosLetra[$nodo5[1]] }}
                                </button><br>
                                <hr style="border: 1px solid #00aa97; margin-bottom: 0"><br>
                                @if ($nodo5[5] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo5[5] }} - {{ $nodo5[10] }} pz</button><br>
                                @endif
                                @if ($nodo5[7] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo5[7] }} - {{ $nodo5[11] }} pz</button><br>
                                @endif
                                @if ($nodo5[9] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo5[9] }} - {{ $nodo5[12] }} pz</button><br>
                                @endif
                                <table border="0" style="width: 100%; font-size: 11px" class="tabBonos">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Plan de Influencia 3.0:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo5[13] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Retail:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo5[14] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Reembolso:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo5[15] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Bonificación por grupo 15%:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo5[16] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Liderazgo 6%:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo5[17] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">
                                                Total de bonificaciones:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td class="text-left">
                                                {{ $nodo5[18] }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if ($nodo2[0] != 'NO')
                                <hr style="transform: rotate(90deg);width: 8.5%;border: 2px solid #00aa97;">
                                <button style="border-radius: 50%; width: 100%; background-color: transparent; border: 1px solid #00aa97 !important; margin-bottom: 5px; font-size: 13px">{{ $nodo2[0] }}</button><br>
                                <button style="border-radius: 50%; width: 100%; background-color: transparent; border: 1px solid #bb9150 !important; margin-bottom: 5px; font-size: 13px">
                                    <img src="{{ asset('fproh/img/calculadora/' . $nodo2[1] . '.png') }}" width="100%" style="margin-top: px">
                                    {{ $rangosLetra[$nodo2[1]] }}
                                </button><br>
                                <hr style="border: 1px solid #00aa97; margin-bottom: 0"><br>
                                @if ($nodo2[5] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo2[5] }} - {{ $nodo2[10] }} pz</button><br>
                                @endif
                                @if ($nodo2[7] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo2[7] }} - {{ $nodo2[11] }} pz</button><br>
                                @endif
                                @if ($nodo2[9] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo2[9] }} - {{ $nodo2[12] }} pz</button><br>
                                @endif
                                <table border="0" style="width: 100%; font-size: 11px" class="tabBonos">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Plan de Influencia 3.0:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo2[13] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Retail:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo2[14] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Reembolso:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo2[15] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Bonificación por grupo 15%:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo2[16] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Liderazgo 6%:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo2[17] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">
                                                Total de bonificaciones:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td class="text-left">
                                                {{ $nodo2[18] }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        </td>
                        <td>
                            @if ($nodo4[0] != 'NO')
                                <hr style="transform: rotate(90deg);width: 8.5%;border: 2px solid #00aa97;">
                                <button style="border-radius: 50%; width: 100%; background-color: transparent; border: 1px solid #00aa97 !important; margin-bottom: 5px; font-size: 13px">{{ $nodo4[0] }}</button><br>
                                <button style="border-radius: 50%; width: 100%; background-color: transparent; border: 1px solid #bb9150 !important; margin-bottom: 5px; font-size: 13px">
                                    <img src="{{ asset('fproh/img/calculadora/' . $nodo4[1] . '.png') }}" width="100%" style="margin-top: px">
                                    {{ $rangosLetra[$nodo4[1]] }}
                                </button><br>
                                <hr style="border: 1px solid #00aa97; margin-bottom: 0"><br>
                                @if ($nodo4[5] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo4[5] }} - {{ $nodo4[10] }} pz</button><br>
                                @endif
                                @if ($nodo4[7] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo4[7] }} - {{ $nodo4[11] }} pz</button><br>
                                @endif
                                @if ($nodo4[9] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo4[9] }} - {{ $nodo4[12] }} pz</button><br>
                                @endif
                                <table border="0" style="width: 100%; font-size: 11px" class="tabBonos">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Plan de Influencia 3.0:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo4[13] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Retail:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo4[14] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Reembolso:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo4[15] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Bonificación por grupo 15%:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo4[16] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Liderazgo 6%:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo4[17] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">
                                                Total de bonificaciones:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td class="text-left">
                                                {{ $nodo4[18] }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        </td>
                        <td>
                            @if ($nodo6[0] != 'NO')
                                <hr style="transform: rotate(90deg);width: 8.5%;border: 2px solid #00aa97;">
                                <button style="border-radius: 50%; width: 100%; background-color: transparent; border: 1px solid #00aa97 !important; margin-bottom: 5px; font-size: 13px">{{ $nodo6[0] }}</button><br>
                                <button style="border-radius: 50%; width: 100%; background-color: transparent; border: 1px solid #bb9150 !important; margin-bottom: 5px; font-size: 13px">
                                    <img src="{{ asset('fproh/img/calculadora/' . $nodo6[1] . '.png') }}" width="100%" style="margin-top: px">
                                    {{ $rangosLetra[$nodo6[1]] }}
                                </button><br>
                                <hr style="border: 1px solid #00aa97; margin-bottom: 0"><br>
                                @if ($nodo6[5] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo6[5] }} - {{ $nodo6[10] }} pz</button><br>
                                @endif
                                @if ($nodo6[7] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo6[7] }} - {{ $nodo6[11] }} pz</button><br>
                                @endif
                                @if ($nodo6[9] != '-')
                                    <button style="border-radius: 50%; width: 100%; background-color: transparent; margin-bottom: 5px; font-size: 10px">{{ $nodo6[9] }} - {{ $nodo6[12] }} pz</button><br>
                                @endif
                                <table border="0" style="width: 100%; font-size: 11px" class="tabBonos">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Plan de Influencia 3.0:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo6[13] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Retail:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo6[14] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Reembolso:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo6[15] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Bonificación por grupo 15%:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo6[16] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Liderazgo 6%:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td>
                                                {{ $nodo6[17] }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">
                                                Total de bonificaciones:
                                            </td>
                                            <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                                {{ $moneda }}
                                            </td>
                                            <td class="text-left">
                                                {{ $nodo6[18] }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr style="border: 1px solid #00aa97; margin-bottom: 15px">
            <table style="width: 100%" border="0px">
                <tbody>
                    <tr>
                        <td>
                            <table border="0" style="width: 100%; font-size: 11px" class="tabBonos">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th colspan="2" style="text-align: center">MI BONIFICACIÓN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Plan de Influencia 3.0:
                                        </td>
                                        <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                            {{ $moneda }}
                                        </td>
                                        <td>
                                            {{ $nodo0[3] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Retail:
                                        </td>
                                        <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                            {{ $moneda }}
                                        </td>
                                        <td>
                                            {{ $nodo0[4] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Reembolso personal sobre VC:
                                        </td>
                                        <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                            {{ $moneda }}
                                        </td>
                                        <td>
                                            {{ $nodo0[5] }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <table border="0" style="width: 100%; font-size: 11px" class="tabBonos">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th colspan="2" style="text-align: center">MI BONIFICACIÓN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Bonificación adicional sobre VC:
                                        </td>
                                        <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                            {{ $moneda }}
                                        </td>
                                        <td>
                                            {{ $nodo0[6] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Bonificación de Liderazgo sibre VC 6%:
                                        </td>
                                        <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                            {{ $moneda }}
                                        </td>
                                        <td>
                                            {{ $nodo0[7] }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">
                                            Total de bonificaciones:
                                        </td>
                                        <td class="isoMoney" style="font-family: DejaVu Sans !important;">
                                            {{ $moneda }}
                                        </td>
                                        <td class="text-left">
                                            {{ $nodo0[8] }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </main>
    </body>
</html>