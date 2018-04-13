<!doctype html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body style="background: white; color: black; margin:30px;">
<table>
    <tr>
        <td align="center">
            <table style="width:100%;">
                <tr >
                    <td style="background:black;color:white;vertical-align: middle;text-align:center; margin:30px;">
                        <a href="www.kokaiweb.com">
                            <img class="logo" src="{{URL::asset('/images/kokaiweb_logoChico.png')}}" style="height:100px;margin-left:20px" alt="Visitenos" >
                        </a>
                        <h1>Contacto con Kokai Web</h1>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <hr>
            <p>Estimad@ {{$nombre}};</p>
            <b>¡Gracias por contactarnos, nos pondremos en contacto con usted tan pronto leamos su mensaje!</b>
            <p>La información solicitada es la siguiente:</p>
            <table>
                <tr>
                    <td>
                         &ensp;&ensp;&ensp; &ensp;&ensp;&ensp;
                         &ensp;&ensp;&ensp; &ensp;&ensp;&ensp;
                    </td>
                    <td style="text-align: right;">
                        <b>Fecha:</b>
                    </td>
                    <td>
                        <?php
                        date_default_timezone_set('America/Cancun');
                        $fecha=date("d-m-y  h:i A");
                        ?>
                        {{$fecha}}
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td style="text-align: right;">
                        <b>Nombre:</b>
                    </td>
                    <td>
                        {{$nombre}}
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td style="text-align: right;">
                        <b>Correo:</b>
                    </td>
                    <td>
                        {{$correo}}
                    </td>
                </tr>
                <!--tr>
                    <td>
                    </td>
                    <td style="text-align: right;">
                        <b>Celular:</b>
                    </td>
                    <td>
                        { {$celular} }
                    </td>
                </tr>
                <tr>
                    <td>
                    </td>
                    <td style="text-align: right;">
                        <b>Teléfono:</b>
                    </td>
                    <td>
                        { {$telefono}}
                    </td>
                </tr-->
                <tr>
                    <td>
                    </td>
                    <td style="text-align: right;">
                        <b>Mensaje:</b>
                    </td>
                    <td>
                        {{$mensaje}}
                    </td>
                </tr>
            </table>
            <hr>
        </td>
    </tr>
    <tr>
        <td align="center">
            <table style="width:100%">
                <tr >
                    <td style="background:black;color:white;text-align:center; margin:30px;">
                        <p>
                            <b>
                            <br>
                            Atte.
                            <br>
                            <i>El equipo de Kokai Web</i>
                            <br>
                            <a style="color:lightblue;" href="mailto:contactoKW@kokai.com.mx?Subject=[Contacto Reserva] Correo Página">contactoKW   @kokai.com.mx</a>
                            <br>
                            <br>
                            CONECTANDO TU NEGOICO A LA RED
                            <br>
                            <a style="color:lightblue;" href="www.kokaiweb.com">www.kokaiweb.com</a> | + 52 (55) 56 03 11 65
                            <br>
                            </b>
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>