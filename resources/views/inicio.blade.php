
@extends('template')

@section('contenido')

    <main>
      <!-- Sección de inicio -->
      <section id="inicio" class="section">
        <div class="container">
          <h2 class="section-title">Inicio</h2>
          <p class="section-description">Bienvenido al sitio web de Safe Planet, 
            una empresa comprometida con el cuidado del planeta y la promoción del ahorro de energía en los hogares. 
            En esta página encontrarás información sobre nuestros productos y servicios, así como artículos de 
            interés sobre el cuidado del medio ambiente. ¡Te invitamos a que nos conozcas!
             ¡Bienvenido a Safe Planet!  
            ¡Bienvenido a nuestro sitio web!</p>
          </div>
        </div>        
      </section>
                  <section id="nosotros" class="section">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          <h2 class="section-title">Nosotros</h2>
                          <p class="section-description">Somos una empresa comprometida con el cuidado del planeta y la promoción del ahorro de energía en los hogares. Desde nuestros inicios, hemos trabajado para ofrecer soluciones sostenibles y accesibles para nuestros clientes.</p>
                          <h2 class="section-title">Misión</h2>
                          <p class="section-description">Nuestra misión es ofrecer soluciones innovadoras y eficientes para el ahorro de energía en los hogares, a través de productos de alta calidad y un servicio personalizado que garantice la satisfacción de nuestros clientes.</p>
                          <h2 class="section-title">Visión</h2>
                          <p class="section-description">Nuestra visión es ser líderes en el mercado de soluciones de ahorro de energía para el hogar, y contribuir a la construcción de un mundo más sostenible y responsable con el medio ambiente.</p>
                          <h2 class="section-title">Valores</h2>
                          <ul class="section-list">
                            <li>Compromiso con la sostenibilidad y el cuidado del medio ambiente.</li>
                            <li>Innovación y mejora continua en nuestros productos y servicios.</li>
                            <li>Responsabilidad social y ética en nuestras acciones.</li>
                            <li>Servicio al cliente personalizado.</li>
                          </ul>
                        </div>
                        <div class="col-md-6">
                          <div class="header-overlay"></div>
                          <div class="header-video">
                            <iframe width="450" height="300" src="https://www.youtube.com/embed/8aGYzXi0YrU" title="5 TRUCOS para AHORRAR ENERGÍA ELÉCTRICA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                           </div>
                        </div>
                      </div>  
                    </div>    
                  </section>
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <h2 class="section-title">
                          Nuestro código de Ética
                        </h2>
                          <h3 class="section-list">
                            <a href="https://safeplanet.up.railway.app/assets/docs/codigo.pdf">Descargue o vea nuestro código de ética</a>
                          </h3>
                      </div>
                    </div>
                  </div>
          <section id="productos" class="section">
            <section id="productos" class="section">
    <div class="container">
      <h2 class="section-title">Productos Destacados</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/images/producto1.jpg')}}" alt="Imagen del Producto 1">
            <div class="card-body">
              <h3 class="card-title">Panel Solar</h3>
              <p class="card-text">El panel solar es un dispositivo que convierte la energía de la radiación solar en energía eléctrica. Es una excelente opción para ahorrar energía y dinero a largo plazo.</p>
              <a href="#" class="btn btn-primary">Comprar ahora</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="{{asset('assets/images/producto2.jpg')}}" alt="Imagen del Producto 2">
            <div class="card-body">
              <h3 class="card-title">Bombilla LED</h3>
              <p class="card-text">Las bombillas LED son mucho más eficientes que las bombillas tradicionales, lo que permite ahorrar energía y reducir la factura de la luz. Además, tienen una mayor duración y no contienen materiales tóxicos.</p>
              <a href="#" class="btn btn-primary">Comprar ahora</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
                <div class="card">
                  <img class="card-img-top" src="{{asset('assets/images/termostato.webp')}}" alt="Imagen del Producto 3">
                  <div class="card-body">
                    <h3 class="card-title">Termostato inteligente</h3>
                    <p class="card-text">El termostato inteligente permite controlar la temperatura del hogar de forma eficiente, lo que permite ahorrar energía y dinero en la factura de la luz y gas.</p>
                    <a href="#" class="btn btn-primary">Comprar ahora</a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
          <section id="articulos" class="section">
            <div class="container">
              <h2 class="section-title">Artículos</h2>
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <img class="card-img-top" src="{{asset('assets/images/ahorrarenergia.webp')}}" alt="Imagen del Artículo 1">
                    <div class="card-body">
                      <h3 class="card-title">Cómo ahorrar energía en el hogar</h3>
                      <p class="card-text">Si quieres reducir tu factura de la luz, este artículo te brinda consejos y recomendaciones para ahorrar energía en el hogar de manera eficiente.</p>
                      <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card">
                    <img class="card-img-top" src="{{asset('assets/images/energiasreno.png')}}" alt="Imagen del Artículo 2">
                    <div class="card-body">
                      <h3 class="card-title">Beneficios de la energía renovable</h3>
                      <p class="card-text">Conoce los principales beneficios de la energía renovable y cómo esta opción es una excelente manera de cuidar del planeta y ahorrar energía.</p>
                      <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          
          <section id="articulos-recientes" class="section">
            <div class="container">
              <h2 class="section-title">Artículos Recientes</h2>
              <div class="row">

                <div class="col-md-6">
                    <div class="card">
                      <img class="card-img-top" src="{{asset('assets/images/huella.jpg')}}" alt="Imagen del Artículo 2">
                      <div class="card-body">
                        <h3 class="card-title">Cómo ahorrar energía en casa y reducir tu huella de carbono</h3>
                        <p class="card-text">El cambio climático es una de las mayores amenazas a las que se enfrenta nuestro planeta. Uno de los principales culpables del cambio climático es la emisión de gases de efecto invernadero, como el dióxido de carbono (CO2), que se producen cuando utilizamos energía. Por esta razón, reducir nuestro consumo de energía es una de las mejores formas de contribuir a la lucha contra el cambio climático. En este artículo te ofrecemos algunos consejos para ahorrar energía en casa y reducir tu huella de carbono.</p>
                        <a href="https://www.iberdrola.com/sostenibilidad/huella-de-carbono" class="btn btn-primary">Leer más</a>
                      </div>
                    </div>
                  </div>
                
                <div class="col-md-6">
                  <div class="card">
                    <img class="card-img-top" src="{{asset('assets/images/imagen2.jpg')}}" alt="Imagen del Artículo 2">
                    <div class="card-body">
                      <h3 class="card-title">Lo que invierten Musk, Bezos,y otros multimillonarios para revertir el cambio climático</h3>
                      <p class="card-text">Capturar el CO2 del aire no es tarea sencilla, y hay quien cree que en lograrlo está el futuro de nuestro planeta. 
                        Elon Musk es una de esas personas, y quiso apoyar sus palabras con hechos:ofrecerá 100 millones de dólares en premios a quienes logren idear sistemas para conseguir capturar CO2 del aire.</p>
                      <a href="https://www.xataka.com/investigacion/elon-musk-da-detalles-100-millones-dolares-premio-al-sistema-que-elimine-co2-aire-no-sera-nada-facil" class="btn btn-primary">Leer más</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="productos" class="section">
            <div class="container">
              <h2 class="section-title">Nuestros Productos</h2>
              <div class="row">
                <div class="col-md-4">
                  <div class="card">
                    <img src="{{asset('assets/images/medidor.jpg')}}" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                      <h5 class="card-title">Medidor de energía</h5>
                      <p class="card-text">Este pequeño medidor de energía es ideal para detectar fugas en los conectores de tu hogar. Con él podrás identificar y solucionar rápidamente los problemas de consumo de energía.</p>
                      <a href="#" class="btn btn-primary">Comprar</a>
                    </div>
                  </div>
                </div>
                      <div class="col-md-4">
                        <div class="card">
                          <img src="{{asset('assets/images/prodahorro.webp')}}" class="card-img-top" alt="Producto 2">
                          <div class="card-body">
                            <h5 class="card-title">Productos ahorradores</h5>
                            <p class="card-text">Productos ahorradores los cuales podemos adquirir en cualquir lugar</p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card">
                          <img src="{{asset('assets/images/smarthome.jpg')}}" class="card-img-top" alt="Producto 3">
                          <div class="card-body">
                            <h5 class="card-title">Smart Home</h5>
                            <p class="card-text"> Una smarthome o casa inteligente es una vivienda que cuenta con sistemas y dispositivos electrónicos que permiten automatizar y controlar de forma remota distintos aspectos del hogar, tales como la iluminación, el sistema de climatización, los electrodomésticos, la seguridad, entre otros. Estos dispositivos se pueden controlar mediante aplicaciones móviles, asistentes virtuales, dispositivos de voz o a través de la web. </p>
                            <a href="#" class="btn btn-primary">Comprar</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section id="contacto" class="section">
                  <div class="container">
                    <h2 class="section-title">Contacto</h2>
                    <div class="row">
                      <div class="col-md-6">
                        <p>si quieres proporcionar mejoras alguna idea o quieres dar mas informacio contactanos</p>
                        <ul>
                          <li>Teléfono: 4423908383</li>
                          <li>Correo electrónico: info@safeplanet.com</li>
                          <li>Dirección: en tu corazon: Universidad Politecnica de Qro</li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <form>
                          <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Introduzca su nombre">
                          </div>
                          <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="Introduzca su Correo">
                            <center>
                             <img src="{{asset('assets/images/huella.jpg')}}" alt="Imagen del Artículo 2" height="200px" width="300px">
                            </center>
           <p>"Cada vez que apagamos un aparato eléctrico que no estamos usando, estamos contribuyendo a la conservación de nuestro planeta" se te acaba el tiempo recapacita ignorante.</p>
          <a href="#">Leer más</a>
        </article>
      </div>
    </main>

 @endsection