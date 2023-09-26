@extends('layouts.app')
@section('content')
@include('www._nav')
<div class="bg-dark">
  <div class="container col-xxl-10 px-4 py-5">
    <div class="row align-items-center g-2 py-2">
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3 text-color-1">
          VENTUCOIN
        </h1>
        <h2 class="fw-bold text-white">
          COMPRA > HAZ STAKING > GANA
        </h2>
        <div class="d-grid mb-3 d-flex justify-content-center">
          <img src="{{ asset('assets/img/ventucoin.png') }}" class="img img-responsive text-center" width="400px" alt="">
        </div>
      </div>
      <div class="col-10 col-sm-8 col-lg-6 justify-content-center">
        <div class="card text-start border border-warning border-4 rounded-2">
          <div class="card-body">
            <h4 class="card-title">COMPRAR BTCBSC EN PREVENTA</h4>
            <div class="progress" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
              <div class="progress-bar bg-warning text-black" style="width: 70%"></div>
            </div>
            <div class="text-center">
                <p>USDT recaudado: $4,745,381.85 / $6,063,750</p>
                <p><strong>Tu BTCBSC comprado = 0</strong></p>
                <p><strong>Tu BTCBSC apostable = 0</strong></p>
                <p>1 BTCBSC = $0.99</p>
            </div>
            <div class="d-flex justify-content-center gap-2">
              <button class="btn btn-light text-dark border-dark text-uppercase d-flex align-items-center justify-content-center selected mx-auto w-50">
                  BNB
              </button>
              <button class="btn btn-success text-white text-uppercase d-flex align-items-center justify-content-center mx-auto w-50">
                  USDT
              </button>
            </div>
          <div class="container mt-4 mb-4">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="bnbAmount">Introduce la cantidad de BNB Max</label>
                  <input type="number" class="form-control" id="bnbAmount" placeholder="0">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="btcbscAmount">Recibes BTCBSC</label>
                  <input type="number" class="form-control" id="btcbscAmount" placeholder="0">
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex flex-column justify-content-center align-items-center gap-2">
            <button class="btn btn-warning text-uppercase d-flex align-items-center justify-content-center mx-auto w-100">
            <strong>Conectar Wallet</strong>
            </button>
            <button class="btn btn-outline-warning text-uppercase d-flex align-items-center justify-content-center mx-auto w-100">
            <strong>Comprar con ETH</strong>
            </button>
          </div>
          <div class="d-flex flex-column justify-content-center align-items-center">
            <p class="text-center mt-3 mb-3">Impulsado por <span class="text-warning">Web3Payments</span></p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="px-2 pt-5 pb-2 mt-2 text-center">
  <h1 class="display-5 fw-bold text-body-emphasis">¿QUÉ ES BITCOIN BSC?</h1>
  <div class="col-lg-10 mx-auto">
    <p class="lead mb-4">
      <div class="card shadow">
        <div class="card-body">
          <span class="text-color-1"> BITCOIN BSC </span> es una versi&oacute;n verde BEP-20 de Bitcoin construida sobre la cadena inteligente BNB,
          simulada para comenzar en un punto temprano de la historia de Bitcoin en 2011. Al igual que Bitcoin
          libera nuevos BTC cada 10 minutos, nuestro contrato inteligente de staking paga tokens BTCBSC de acuerdo con
          este calendario de bloques. Haz staking en BTCBSC para ganar estas recompensas.
        </div>
      </div>
    </p>
  </div>
</div>
<div class="container pb-2">
  <div class="px-2 py-5 text-start row justify-content-center align-items-center">
    <div class="col-lg-5 mb-3">
      <div class="card shadow">
        <div class="card-body">
          <div class="mb-3">
            <strong>UNA OPORTUNIDAD DE COMPRAR BITCOIN A 0,99$.</strong>
          </div>
          <p>
            �Te perdiste la bomba de Bitcoin? No eres el �nico. La mayor�a de nosotros desconoc�amos la existencia temprana
            de BTC y s�lo o�mos hablar de ella cuando los precios recientes aparecieron en los titulares de las noticias.
            Estamos convirtiendo esa decepci�n en una oportunidad.
          </p>
        </div>
      </div>
    </div>
    <div class="col-lg-2 mb-3">
      <img src="{{ asset('assets/img/ventucoin.png') }}" class="img img-responsive mx-auto d-block" width="200px" alt="">
    </div>
    <div class="col-lg-5">
      <div class="card shadow">
        <div class="card-body">
          <div class="mb-3">
            <strong>GANA RECOMPENSAS PASIVAS HACIENDO STAKING</strong>
          </div>
          <p>
            Bitcoin BSC no es una bifurcaci�n de Bitcoin, ni un esquema de pump-and-dump. El token BTCBSC est� dise�ado para
            proporcionar recompensas diarias a los apostadores durante muchos a�os.
        </div>
      </div>
    </div>
  </div>
  <div class="px-2 text-start row my-4  border-1 items-aling-center">
    <div class="col-lg-6 mb-3">
      <div class="card shadow h-100">
        <div class="card-body">
          <div class="mb-3">
            <strong>BUY BTCBSC IN PREVENTA A PRECIOS DE 2011</strong>
          </div>
          <ul>
            <li>El precio de preventa de una?? <span class="text-color-1">BTCBSC</span> es s�lo <span class="text-color-1">$0.99</span> por token, un precio al que s�lo se pod�a comprar BTC en 2011</li>
            <li><span class="text-color-1">29%</span> ?del suministro total de tokens se vender� en preventa o <span class="text-color-1">6,125,000</span> tokens, con lo que la capitalizaci�n de mercado inicial <span class="text-color-1">$6,063,750</span></li>
            <li>Con un suministro m�ximo de <span class="text-color-1">21,000,000</span> tokens, los restantes <span class="text-color-1">14,455,000</span> BTCBSC est� reservado para <span class="text-color-1">recompensas de staking</span></li>
          </ul>
          <div class="d-grid gap-3">
            <a href="" class="btn btn-lg btn-warning bg-color-1 g-col-3">
              HAZ STAKING AHORA
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 text-center">
      <img src="{{ asset('assets/img/pexels-alesia-kozik-6771178.jpg') }}" class="img img-responsive" width="100%" alt="">
    </div>
  </div>
  <div class="px-2 text-start row my-4 items-aling-center">
    <div class="col-lg-6 text-center">
      <img src="{{ asset('assets/img/pexels-alesia-kozik-6771178.jpg') }}" class="img img-responsive" width="100%" alt="">
    </div>
    <div class="col-lg-6 mb-3">
      <div class="card shadow h-100">
        <div class="card-body">
          <div class="mb-3">
            <strong>VENTAJA DE LA CADENA BNB SMART</strong>
          </div>
          <ul>
            <li>Bitcoin BSC proporcionar� <span class="text-color-1">recompensas pasivas</span> para todos los titulares que hagan staking de sus tokens BTCBSC en nuestro <span class="text-color-1">contrato inteligente</span></li>
            <li><span class="text-color-1">69%</span> del suministro de tokens o 14.455.000 tokens se pagar�n a los participantes en el pool de apuestas como recompensa. <span class="text-color-1">cada 10 minutos</span></li>
            <li>Compra y haz staking de tokens en cualquier momento con un <span class="text-color-1">Bloqueo de 7 d�as</span> en las retiradas: las recompensas se basan en tu porcentaje del <span class="text-color-1">fondo total de staking</span></li>
          </ul>
          <div class="d-grid gap-3">
            <a href="" class="btn btn-lg btn-warning bg-color-1 g-col-3">
              HAZ STAKING AHORA
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="px-2 text-start row my-4 items-aling-center">
    <div class="col-lg-6 mb-3">
      <div class="card shadow h-100">
        <div class="card-body">
          <div class="mb-3">
            <strong>VENTAJA DE LA CADENA BNB SMART</strong>
          </div>
          <ul>
            <li>La Cadena Inteligente BNB se basa en el c�digo de <span class="text-color-1">Ethereum</span> proporcionando seguridad probada y <span class="text-color-1">contrato inteligente</span> capacidades</li>
            <li>Ahorra dinero en <span class="text-color-1">tasas de gas</span> con las transacciones de la Cadena Inteligente de BNB <span class="text-color-1">m�s r�pido</span> y <span class="text-color-1">m�s barato</span> que Ethereum</li>
            <li>Accede f�cilmente <span class="text-color-1">BTCBSC</span> a trav�s de tu <span class="text-color-1">Trust Wallet</span> o <span class="text-color-1">Metamask</span> dapps, facilitando el almacenamiento y trading de BTCBSC</li>
          </ul>
          <div class="d-grid gap-3">
            <a href="" class="btn btn-lg btn-warning bg-color-1 g-col-3">
              HAZ STAKING AHORA
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 text-center">
      <img src="{{ asset('assets/img/pexels-alesia-kozik-6771178.jpg') }}" class="img img-responsive" width="100%" alt="">
    </div>
  </div>
</div>
<div class="bg-dark px-2 pt-5 pb-3 mt-2 text-center">
  <div class="container">
    <h1 class="display-5 fw-bold text-white mb-5">C�MO COMPRAR <span class="text-color-1">BTCBSC</span></h1>
    <div class="row my-5">
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <img src="{{ asset('assets/img/ventucoin.png') }}" width="50" alt="">
            <h4 class="card-title my-2">COMPRAR BTCBSC CON BNB</h4>
            <ul>
              <li>Pagar con <span class="text-color-1">BNB</span> es la forma m�s r�pida de comprar tokens BTCBSC</li>
              <li>Utilizar el BNB en tu <span class="text-color-1">Metamask</span> o <span class="text-color-1">Trust Wallet</span>, es un intercambio f�cil de tokens</li>
              <li>Guarda una peque�a cantidad de BNB en tu wallet para cubrir el <span class="text-color-1">tasa m�nima de gas</span></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <img src="{{ asset('assets/img/ventucoin.png') }}" width="50" alt="">
            <h4 class="card-title my-2">COMPRAR BTCBSC CON ETH</h4>
            <ul>
              <li>Tambi�n puedes comprar tokens BTCBSC utilizando <span class="text-color-1">USDT</span> en la cadena Ethereum</li>
              <li>Conecta tu wallet a la base de datos <span class="text-color-1">Ethereum</span> red para pagar con ETH</li>
              <li>Tener suficiente ETH sobrante para pagar el <span class="text-color-1">tasa de gas</span>. Reclamar es en BNB Smart Chain</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <img src="{{ asset('assets/img/ventucoin.png') }}" width="50" alt="">
            <h4 class="card-title my-2">COMPRAR BTCBSC CON USDT</h4>
            <ul>
              <li>Tambi�n puedes comprar tokens BTCBSC utilizando <span class="text-color-1">USDT</span> en las cadenas Ethereum o BSC</li>
              <li>Conecta tu wallet a cualquiera de las cadenas y selecciona <span class="text-color-1">USDT</span> como opci�n de pago</li>
              <li>Aseg�rate de que tienes ETH o BNB para pagar la tasa de gas. Reclama en BNB Smart Chain.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <a href="" class="btn btn-lg btn-warning bg-color-1 g-col-3">
      <strong>COMPRA AHORA</strong>
    </a>
  </div>
</div>

<div class="px-2 pt-5 pb-3 mt-2 text-center">
  <div class="container">
    <h1 class="display-5 fw-bold mb-5">HOJA DE RUTA</h1>
    <p class="fs-5">
      Bitcoin BSC... tiene una clara hoja de ruta por delante con el objetivo de crear nuevo valor en el ecosistema de
      la Cadena Inteligente del BNB.
    </p>
    <div class="row my-5">

      <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="card shadow custom-card">
          <span class="position-absolute top-0 start-0 translate-middle align-items-center text-center btn btn-sm btn-warning bg-color-1 rounded-pill">
            1
          </span>
          <div class="card-body text-start">
            <h4 class="card-title my-2"><span class="text-color-1">Q3</span> <span class="text-color-2">2023</span> </h4>
            <strong class="fs-6">Fase 1: Comienza la preventa</strong>
            <p class="card-text fs-7">
              Para dar a todo el mundo la oportunidad de comprar BTCBSC al precio m�s bajo,
              el 29% del suministro total de tokens se vender� en una preventa justa a 0,99 $. Los fondos recaudados se utilizar�n para cubrir los costes de desarrollo y marketing.
            </p>
          </div>
        </div>
      </div>


      <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="card shadow custom-card">
          <span class="position-absolute top-0 start-0 translate-middle align-items-center text-center btn btn-sm btn-warning bg-color-1 rounded-pill">
            2
          </span>
          <div class="card-body text-start">
            <h4 class="card-title my-2"><span class="text-color-1">Q3</span> <span class="text-color-2">2023</span> </h4>
            <strong>Etapa 2: Apertura del Staking</strong>
            <p class="card-text">
              El staking es la piedra angular del proyecto Bitcoin BSC. Se desplegar� y activar� un contrato
              inteligente auditado y verificado durante la fase de preventa, para fomentar la participaci�n
              temprana en el staking.
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="card shadow custom-card">
          <span class="position-absolute top-0 start-0 translate-middle align-items-center text-center btn btn-sm btn-warning bg-color-1 rounded-pill">
            3
          </span>
          <div class="card-body text-start">
            <h4 class="card-title my-2"><span class="text-color-1">Q3</span> <span class="text-color-2">2023</span> </h4>
            <strong>Fase 3: Lanzamiento de tokens</strong>
            <p class="card-text">
              BTCBSC se lanzar� en una DEX de cadena inteligente de BNB. Con el 2% de la oferta asignada a la liquidez DEX
              bloqueada, tambi�n se requiere LP para garantizar un proyecto totalmente descentralizado y de propiedad comunitaria.
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="card shadow custom-card">
          <span class="position-absolute top-0 start-0 translate-middle align-items-center text-center btn btn-sm btn-warning bg-color-1 rounded-pill">
            4
          </span>
          <div class="card-body text-start">
            <h4 class="card-title my-2"><span class="text-color-1">Q3</span> <span class="text-color-2">2023</span> </h4>
            <strong>Fase 4: Recompensas pasivas</strong>
            <p class="card-text">
              Los titulares de BTCBSC pueden hacer staking con sus tokens y cobrar diariamente. Las recompensas se acumulan
              cada 10 minutos, simulando el calendario de bloques de Bitcoin. La oferta m�xima se alcanzar� en unos 120 a�os.
            </p>
          </div>
        </div>
      </div>

    </div>

    <a href="" class="btn btn-lg btn-warning bg-color-1 g-col-3">
      <strong>COMPRA AHORA</strong>
    </a>
  </div>
</div>


<div class="bg-dark">
  <div class="container col-xxl-10 px-4 py-5">
    <div class="row align-items-center g-2 py-2">
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3 text-color-1">
          BITCOIN BSC
        </h1>
        <h2 class="fw-bold text-white">
          WHITEPAPER
        </h2>
        <p class="text-white">
          La misi�n de Bitcoin BSC es dar a los entusiastas de las criptomonedas la oportunidad de comprar una nueva versi�n
          de Bitcoin a un precio que s�lo estaba disponible para los frikis de la tecnolog�a y los iniciados.
          Aprovechando la funcionalidad de contratos inteligentes de la Cadena Inteligente BNB, BTCBSC promete ofrecer velocidad,
          seguridad y eficiencia. Lee nuestro libro blanco para obtener m�s informaci�n.
        </p>
        <div class="d-grid gap-3">
            <a href="" class="btn btn-lg btn-warning bg-color-1 g-col-3">
              HAZ STAKING AHORA
            </a>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <img src="{{ asset('assets/img/pexels-alesia-kozik-6771178.jpg') }}" class="img img-responsive" width="100%" alt="">
        </div>
      </div>
  </div>
</div>

<div class="px-2 pt-5 pb-3 mt-2 text-center">
  <div class="container">
    <h1 class="display-5 fw-bold mb-5">COMPARACIONES DE CLONES DE BITCOIN</h1>
    <p>
      Tras el �xito y la adopci�n de Bitcoin (BTC), existen varias bifurcaciones y clones de la criptomoneda original,
      por diversas razones. Algunos hacen las transacciones m�s r�pidas y baratas, otros existen por razones filos�ficas.
      Bitcoin BSC simplemente pretende fusionar la velocidad, el bajo coste y la fiabilidad de la cadena inteligente BNB
      con recompensas pasivas para los usuarios.
    </p>
    <div class="row my-5">
      <div class="table-responsive">
          <table class="table table-sm table-bordered">
            <thead>
              <tr class="table-warning">
                <th scope="col"> </th>
                <th scope="col">BITCOIN BSC</th>
                <th scope="col">BITCOIN</th>
                <th scope="col">BITCOIN CASH</th>
                <th scope="col">BITCOIN SV</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="table-warning">TIPO DE PRUEBA</td>
                <td>POS<br>POS</td>
                <td>POW<br>POW</td>
                <td>POW<br>POW</td>
                <td>POW<br>POW</td>
              </tr>
              <tr>
                <td class="table-warning">RECOMPENSAS PASIVAS</td>
                <td>S�<br>Staking</td>
                <td>No<br>Dep�sito de valor</td>
                <td>No<br>Dep�sito de valor</td>
                <td>No<br>Dep�sito de valor</td>
              </tr>
              <tr>
                <td class="table-warning">VELOCIDAD</td>
                <td> < 5s<br>Cadena inteligente BNB </td>
                <td>10m<br>BITCOIN</td>
                <td>10m<br>BITCOIN CASH</td>
                <td>10m<br>BITCOIN SV</td>
              </tr>
              <tr>
                <td class="table-warning">ESCALABILIDAD</td>
                <td>No<br>Depende de la red</td>
                <td>No<br>1MB Bloques</td>
                <td>No<br>4MB Bloques</td>
                <td>No<br>8MB Bloques</td>
              </tr>
              <tr>
                <td class="table-warning">GASTOS DE TRANSACCI�N</td>
                <td>< $0.10<br>BNB</td>
                <td>$5-10<br>BTC</td>
                <td><$0.10<br>BCH</td>
                <td><$0.10<br>BSV</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  </div>
</div>
<div class="bg-dark">
  <div class="container py-5">
    <div class="row align-items-center g-2 py-2">
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3 text-color-1">
          Preguntas Frecuentes
        </h1>
        <h2 class="fw-bold text-white">
          Preguntas...
        </h2>
        <img src="{{ asset('assets/img/ventucoin.png') }}" class="img img-fluid" width="500px" alt="">
      </div>
      <div class="col-lg-6">
        <div class="bd-example">
          <div class="accordion" id="accordionExample">
            <div class="bd-example">
              <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed bg-dark text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        �Que es Bitcoin BSC?
                      </button>
                    </h4>
                    <div id="collapseOne" class="accordion-collapse collapse bg-dark text-warning" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                      <div class="accordion-body">
                        Bitcoin BSC es un nuevo token BEP-20 construido sobre la cadena inteligente BNB que simula las recompensas
                        en bloque de Bitcoin. Utilizando la tecnolog�a de contratos inteligentes, Bitcoin BSC emite diariamente tokens
                        de recompensa a los participantes de BTCBSC staking.
                    </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed bg-dark text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        �C�al es el objetivo de Bitcoin BSC?
                      </button>
                    </h4>
                    <div id="collapseTwo" class="accordion-collapse collapse bg-dark text-warning" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                      <div class="accordion-body">
                        Hay mucha gente en cripto que se perdi� la oportunidad de comprar Bitcoin antes de tiempo o no tiene
                        los recursos y los conocimientos para minarlo. Bitcoin BSC es un intento de igualar las condiciones y ofrecer
                        tanto la posibilidad de comprar BTCBSC en preventa como una especie de miner�a en forma de staking.
                    </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed bg-dark text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        �Por qu� lanzar en la Cadena Intelignete BNB?
                      </button>
                    </h4>
                    <div id="collapseThree" class="accordion-collapse collapse bg-dark text-warning" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                      <div class="accordion-body">
                        BNB Smart Chain, respaldada por el mayor exchange del mundo, Binance, cuenta con una enorme red y un apasionado
                        apoyo comunitario. Pretendemos servir a esta comunidad con un nuevo token que aporte valor a su vida cotidiana.
                    </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed bg-dark text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                        �C�ando se lanzar� en la Cadena Inteligente BNB?
                      </button>
                    </h4>
                    <div id="collapseFour" class="accordion-collapse collapse bg-dark text-warning" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                      <div class="accordion-body">
                        Nuestro objetivo es lanzar Bitcoin BSC en un exchange descentralizado en BSC en el plazo de varias semanas desde el
                        inicio de la preventa, dependiendo de la rapidez con que pueda concluirse.
                    </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h4 class="accordion-header" id="headingFive">
                      <button class="accordion-button collapsed bg-dark text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                        �Donde puedo reclamar mis tokens de preventa?
                      </button>
                    </h4>
                    <div id="collapseFive" class="accordion-collapse collapse bg-dark text-warning" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                      <div class="accordion-body">
                        Podr�s reclamar tus tokens lo antes posible una vez finalizada la preventa, desde el sitio web de Bitcoin BSC.
                        Es probable que la solicitud de tokens y la cotizaci�n tengan lugar el mismo d�a y a la misma hora.
                        Tambi�n podr�s Hacer staking de tus tokens antes de la fecha de cotizaci�n, para asegurarte una posici�n de
                        staking temprana.
                    </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bg-warning">
  <div class="container col-xxl-10 px-4 py-5">
    <div class="row align-items-center g-2 py-2">
      <div class="col-lg-4">
        <p>�Que es BTCBSC?</p>
        <p>�C�mo Comprar?</p>
        <p>Hoja de Ruta</p>
        <p>Comparaciones</p>
        <p>Preguntas Frecuentes</p>
      </div>
      <div class="col-lg-4">
        <p>Condiciones del Servicio</p>
        <p>Pol�tica de Privacidad</p>
        <p>Cookies</p>
      </div>
      <div class="col-lg-4">
        <p>Negocios Internacionales</p>
        <p>Centre, Rue du Gabian</p>
        <p>98000 Monaco</p>
        <p>contact@bitcoinbsc.io</p>
      </div>
    </div>
  </div>
</div>
@endsection
