<?php include_once 'includes/templates/header.php'; ?>

        <section class="seccion contenedor">
            <h2>La mejor conferencia  de diseño web en español</h2>
            <p>
              Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et. Ut bibendum finibus massa non molestie. Curabitur urna metus, placerat gravida lacus ut, lacinia congue orci. Maecenas luctus mi at ex blandit vehicula. Morbi porttitor tempus euismod.
            </p>
        </section> <!--seccion-->

        <section class="programa">
            <div class="contenedor-video">
                <video autoplay loop poster="bg-talleres.jpg">
                    <source src="video/video.mp4" type="video/mp4">
                    <source src="video/video.webm" type="video/webm">
                    <source src="video/video.ogv" type="video/ogg">
                </video>
            </div> <!--.contenedor-video-->
            <div class="contenido-programa">
                <div class="contenedor">
                    <div class="programa-evento">
                        <h2>Programa del Evento</h2>

                        <?php
                            try {
                              require_once('includes/funciones/bd_conexion.php');
                              $sql = "SELECT * FROM `categoria_evento` ";
                              $resultado = $conn->query($sql);
                            } catch (Exception $e) {
                              $error = $e->getMessage();
                            }
                         ?>
                        <nav class="menu-programa">
                          <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                            <?php $categoria = $cat['cat_evento']; ?>
                                <a href="#<?php echo strtolower($categoria) ?>">
                                      <i class="fa <?php echo $cat['icono'] ?>" aria-hidden="true"></i> <?php echo $categoria ?>
                                </a>
                          <?php } ?>
                        </nav>



                    </div> <!--.programa-evento-->
                </div> <!--.contenedor-->
            </div><!--.contenido-programa-->
        </section> <!--.programa-->




        <div class="contador parallax">
            <div class="contenedor">
                <ul class="resumen-evento clearfix">
                    <li><p class="numero">0</p> Invitados</li>
                    <li><p class="numero">0</p> Talleres</li>
                    <li><p class="numero">0</p> Días</li>
                    <li><p class="numero">0</p> Conferencias</li>

                </ul>
            </div>
        </div>

        <section class="precios seccion">
            <h2>Precios</h2>
            <div class="contenedor">
                  <ul class="lista-precios clearfix">
                      <li>
                            <div class="tabla-precio">
                                <h3>Pase por día</h3>
                                <p class="numero">$30</p>
                                <ul>
                                  <li>Bocadillos Gratis</li>
                                  <li>Todas las conferencias</li>
                                  <li>Todos los talleres</li>
                                </ul>
                                <a href="#" class="button hollow">Comprar</a>
                            </div>
                      </li>
                      <li>
                            <div class="tabla-precio">
                                <h3>Todos los días</h3>
                                <p class="numero">$50</p>
                                <ul>
                                  <li>Bocadillos Gratis</li>
                                  <li>Todas las conferencias</li>
                                  <li>Todos los talleres</li>
                                </ul>
                                <a href="#" class="button">Comprar</a>
                            </div>
                      </li>

                      <li>
                            <div class="tabla-precio">
                                <h3>Pase por 2 días</h3>
                                <p class="numero">$45</p>
                                <ul>
                                  <li>Bocadillos Gratis</li>
                                  <li>Todas las conferencias</li>
                                  <li>Todos los talleres</li>
                                </ul>
                                <a href="#" class="button hollow">Comprar</a>
                            </div>
                      </li>
                  </ul>
            </div>
        </section>

        <div id="mapa" class="mapa"></div>

        <section class="seccion">
            <h2>Testimoniales</h2>
            <div class="testimoniales contenedor clearfix">
                <div class="testimonial">
                    <blockquote>
                      <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.<p>
                      <footer class="info-testimonial clearfix">
                          <img src="img/testimonial.jpg" alt="imagen testimonial">
                          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                      </footer>
                    </blockquote>
                </div><!--.testimonial-->
                <div class="testimonial">
                    <blockquote>
                      <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.<p>
                      <footer class="info-testimonial clearfix">
                          <img src="img/testimonial.jpg" alt="imagen testimonial">
                          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                      </footer>
                    </blockquote>
                </div><!--.testimonial-->
                <div class="testimonial">
                    <blockquote>
                      <p>Sed mollis velit sit amet felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.<p>
                      <footer class="info-testimonial clearfix">
                          <img src="img/testimonial.jpg" alt="imagen testimonial">
                          <cite>Oswaldo Aponte Escobedo <span>Diseñador en @prisma</span></cite>
                      </footer>
                    </blockquote>
                </div><!--.testimonial-->
            </div>
        </section>

        <div class="newsletter parallax">
            <div class="contenido contenedor">
                <p> regístrate al newsletter:</p>
                <h3>gdlwebcamp</h3>
                <a href="#mc_embed_signup" class="boton_newsletter button transparente">Registro</a>
            </div> <!--.contenido-->
        </div><!--.newsletter-->

        <section class="seccion">
            <h2>Faltan</h2>
            <div class="cuenta-regresiva contenedor">
                <ul class="clearfix">
                    <li><p id="dias" class="numero"></p> días</li>
                    <li><p id="horas" class="numero"></p> horas</li>
                    <li><p id="minutos" class="numero"></p> minutos</li>
                    <li><p id="segundos" class="numero"></p> segundos</li>
                </ul>
            </div>
        </section>
  <?php include_once 'includes/templates/footer.php'; ?>
