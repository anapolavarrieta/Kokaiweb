@extends('_master')
 @section ('content')

 <div id="section2">
    <div class="container center">
        <div>
            <div>
               <div>
                    <div class="white">
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div>
                    <div class="grisO">
                        Páginas Web
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="col-xs-6 col-md-3 divLogoC vertical-center">
                            <a href="https://www.landproyectos.com.mx/" target="_blank">
                                <img class="imgLogo" src= "{{URL::asset('/images/logo_land.jpg')}}"/>
                            </a>
                        </div>

                        <div class="col-xs-6 col-md-3 divLogoC vertical-center">
                            <a href="https://www.mipar.mx/" target="_blank">
                                <img class="imgLogo" src= "{{URL::asset('/images/logo_gonpard.png')}}"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="col-xs-6 col-md-3 divLogoC vertical-center">
                            <a href="http://www.coordinadoradeeventos.com/" target="_blank">
                                <img class="imgLogo" src= "{{URL::asset('/images/logo_coordinadora.png')}}"/>
                            </a>
                        </div>
                        <div class="col-xs-4 col-md-2 divLogoC vertical-center">
                            <a href="http://www.paketealivianes.org/" target="_blank">
                                <img class="imgLogo" src= "{{URL::asset('/images/logo_pakete.png')}}"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div>
               <div>
                    <div class="white">
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div>
                <div>
                    <div class="grisO">
                        Sistemas Automatizados
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-3">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="col-xs-3 col-md-3 divLogoC vertical-center">
                                <img class="imgLogo" src= "{{URL::asset('/images/logo_contravel.png')}}"/>
                            </div>
                            <div class="col-xs-3 col-md-3 divLogoC vertical-center">
                                <img class="imgLogo" src= "{{URL::asset('/images/logo_mmdi.png')}}"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

 @stop