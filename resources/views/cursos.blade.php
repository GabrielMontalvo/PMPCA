@extends('base')

@section('maincontent')
    <div id="p-container" class="container px-lg-8.5 px-md-5">
        <div class="col-12 col-sm-12">
            <img src="{{ asset('storage/images/10.png') }}" alt="">
            <div class="barraAzulFuerte"></div>
        </div>
        <div id="professor-description" class="row mb-4 p-5">
            <div class="col-12 col-sm-12 mb-4">
                <h1><strong>CURSOS</strong></h1>
            </div>
            <div class="row col-12 col-sm-12 mb-4 ">
                <div class="col-12 col-sm-1 ">
                </div>
                <div class="col-12 col-sm-1 ">
                </div>
                <div class="col-12 col-sm-3 ">
                    <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="#headingThree"
                        role="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspBásicos&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                </div>
                <div class="col-12 col-sm-3 ml-5">
                    <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="#headingTwo"
                        role="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOptativos&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                </div>
                <div class="col-12 col-sm-3">
                    <a class="btn btn-primary rounded-pill" id="botonesGeneral" href="#headingFour"
                        role="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTópicos
                        selectos&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                </div>
                <div class="col-12 col-sm-1">
                </div>
            </div>

            <div class="col-12 col-sm-12">
                <div>
                    <p>Los Planes de Estudio del Programa Multidisciplinario de Posgrado en Ciencias Ambientales de la
                        UASLP, se elaboran considerando siete líneas curriculares:
                    <ol>
                        <li>Cursos básico</li>
                        <li>Cursos optativos</li>
                        <li>Cursos tópicos selectos en Ciencias Ambientales</li>
                        <li>Proyecto de investigación (trabajo y seminario de tesis)</li>
                        <li>Seminarios Multidisciplinarios</li>
                        <li>Examen predoctoral (grado de Doctor)</li>
                        <li>Tesis y examen de grado</li>
                    </ol><br>
                    El Plan de Estudios está constituido por las siete líneas curriculares enumeradas anteriormente y por
                    las cinco áreas de especialización:<br><br>
                    <ol>
                        <li>Evaluación Ambiental (EA)</li>
                        <li>Gestión Ambiental (GA)</li>
                        <li>Prevención y Control (PyC)</li>
                        <li>Recursos Naturales Renovables (RNR)</li>
                        <li>Salud Ambiental Integrada (SAI)</li>
                    </ol>
                    </p>
                </div>
            </div>
        </div>

        <div class="accordion p-2" id="accordionExample">
            <div class="accordion-item">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <strong>Cursos básicos &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            76900001 Desarrollo sustentable<br>
                            76900053 Ecología<br>
                            76900057 Introducción a la estadística<br>
                            76900058 Problemática y gestión ambiental<br>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <strong>Cursos optativos &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Evaluación ambiental</strong><br><br>
                            769006 Gestión ambiental de operaciones minerometalúrgicas<br>
                            769012 Evaluación de impacto y riesgo ambiental<br><br><br>
                            <strong>Gestión ambiental</strong><br><br>
                            769031 Naturaleza y sociedad una introducción a las posiciones teóricas recientes<br>
                            76900022 Participación social<br><br><br>
                            <strong>Prevención y control</strong><br><br>
                            769033 Fisicoquímica de las aguas naturales<br>
                            769059 Remediación de sitios contaminados<br><br><br>
                            <strong>Recursos naturales renovables</strong><br><br>
                            769014 Ecología de la producción de cosechas<br>
                            769019 Evaluación y manejo de los recursos naturales renovables<br>
                            769017 Fisiología animal ambiental<br>
                            76900016 Manejo de recursos renovables en zonas secas<br>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <strong>Cursos tópicos selectos &nbsp</strong> <i class="fa-solid fa-arrow-down-long"></i>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Evaluación ambiental</strong><br><br>
                            769046 Hidrogeología ambiental<br>
                            769046 Hidrogeoquímica<br>
                            769046 Ingeniería ambiental<br>
                            7690046 Gestión de residuos y economía circular<br><br><br>
                            <strong>Gestión ambiental</strong><br><br>
                            769045 Diseño y evaluación de proyectos de investigación<br>
                            76900045 Climatología aplicada<br>
                            76900045 ECO-DRR: reducción del riesgo de desastres y ecosistemas<br>
                            76900045 Evaluación ambiental y análisis espacial apoyados en PR y SIG<br><br><br>
                            <strong>Prevención y Control</strong><br><br>
                            769045 Biología molecular aplicada a las ciencias ambientales<br>
                            769046 Sistemas de adsorción: equilibrio y cinética<br>
                            769046 Sistemas de tratamiento de aguas residuales<br>
                            769046 Microbiología ambiental aplicada<br>
                            769045 Electroquímica ambiental<br><br><br>
                            <strong>Recursos naturales renovables</strong><br><br>
                            769045 Anatomía vegetal ambiental<br>
                            769046 Ecofisiología vegetal<br>
                            769045 Ecología cuantitativa<br>
                            769046 Ecología y manejo de cuencas hidrográficas<br>
                            769046 Métodos estadísticos para investigadores<br>
                            769045 Modelos animales para la investigación de compuestos naturales<br>
                            769045 Tipos de energía<br>
                            76900046 Farmacognosia, química y farmacología de plantas medicinales<br><br><br>
                            <strong>Salud ambiental integrada</strong><br><br>
                            769046 Ecotoxicología<br>
                            769046 Biodiversidad, nutrición y seguridad alimentaria<br>
                            769046 Fundamentos teórico-metodológicos para evaluar la salud de los ecosistemas<br>
                            769046 Evaluación de riesgos en salud humana<br>
                            76900045 Evaluación de los efectos de la variabilidad y el cambio climático sobre los sistemas de producción de alimentos<br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
@endsection