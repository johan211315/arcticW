    <?php include_once("../php/config.php");
    include_once("../php/carrito.php");
    ?>
    <!-- FOOTER -->
    <!-- Product tab -->
    <div class="col-md-12">
        <div id="product-tab">
            <!-- product tab nav -->
            <ul class="tab-nav">
                <li class="active">
                    <a data-toggle="tab" href="#tab1">Descripció</a>
                </li>
                <li><a data-toggle="tab" href="#tab2">Detalls</a></li>
                <li><a data-toggle="tab" href="#tab3">Opinions</a></li>
            </ul>
            <!-- /product tab nav -->

            <!-- product tab content -->
            <div class="tab-content">
                <!-- tab1  -->
                <div id="tab1" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-md-12">
                            <p><?php echo nl2br(htmlspecialchars($libro['descripcion'])); ?></p>
                        </div>
                    </div>
                </div>
                <!-- /tab1  -->

                <!-- tab2  -->
                <div id="tab2" class="tab-pane fade in">
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                Idioma: Español <br />
                                496 páginas <br />
                                ISBN-10: 8497592204 <br />
                                ISBN-13: 978-8497592208 <br />
                                Classificació als més venuts d'arctic wolves: nº4 a
                                Llibres
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /tab2  -->

                <!-- tab3  -->
                <div id="tab3" class="tab-pane fade in">
                    <div class="row">
                        <!-- Rating -->
                        <div class="col-md-3">
                            <div id="rating">
                                <div class="rating-avg">
                                    <span>4.5</span>
                                    <div class="rating-stars">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <ul class="rating">
                                    <li>
                                        <div class="rating-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="rating-progress">
                                            <div style="width: 80%"></div>
                                        </div>
                                        <span class="sum">3</span>
                                    </li>
                                    <li>
                                        <div class="rating-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="rating-progress">
                                            <div style="width: 60%"></div>
                                        </div>
                                        <span class="sum">2</span>
                                    </li>
                                    <li>
                                        <div class="rating-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="rating-progress">
                                            <div></div>
                                        </div>
                                        <span class="sum">0</span>
                                    </li>
                                    <li>
                                        <div class="rating-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="rating-progress">
                                            <div></div>
                                        </div>
                                        <span class="sum">0</span>
                                    </li>
                                    <li>
                                        <div class="rating-stars">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="rating-progress">
                                            <div></div>
                                        </div>
                                        <span class="sum">0</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Rating -->

                        <!-- Reviews -->
                        <div class="col-md-6">
                            <div id="reviews">
                                <ul class="reviews">
                                    <li>
                                        <div class="review-heading">
                                            <h5 class="name">Sonia</h5>
                                            <p class="date">05/02/2025, 18:00pm</p>
                                            <div class="review-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o empty"></i>
                                            </div>
                                        </div>
                                        <div class="review-body">
                                            <p>
                                                Excelente obra, llena no solo de cotidianidad
                                                colombiana, sino también de realidades de toda
                                                Latinoamérica. Lo leí por primera vez con 19
                                                años, en esta segunda oportunidad 15 años más
                                                tarde, es impresionante el impacto del
                                                entendimiento.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="review-heading">
                                            <h5 class="name">Carlos</h5>
                                            <p class="date">04/02/2025, 14:00pm</p>
                                            <div class="review-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o empty"></i>
                                            </div>
                                        </div>
                                        <div class="review-body">
                                            <p>
                                                Fue muy grato recordar la gran experiencia al
                                                retomar el libro y volver a encontrar la esencia
                                                del Realismo Mágico
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="review-heading">
                                            <h5 class="name">Antony</h5>
                                            <p class="date">02/02/2025 20:00pm</p>
                                            <div class="review-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o empty"></i>
                                            </div>
                                        </div>
                                        <div class="review-body">
                                            <p>
                                                Encontrarme de nuevo con Cien Años de Soledad,
                                                después de 3 lecturas previas, ha permitido
                                                despertar en mi ser la alegría del amor y la
                                                tristeza de la soledad. Difícil expresar con
                                                palabras la sensación que tengo, pero fue como
                                                si leyera por primera vez tan magistral obra y
                                                al mismo tiempo rescatar del recuerdo imágenes
                                                ya almacenadas. Inolvidable Gabriel García
                                                Márquez
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="reviews-pagination">
                                    <li class="active">1</li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li>
                                        <a href="#"><i class="fa fa-angle-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /Reviews -->

                        <!-- Review Form -->
                        <div class="col-md-3">
                            <div id="review-form">
                                <form class="review-form">
                                    <input
                                        class="input"
                                        type="text"
                                        placeholder="Your Name" />
                                    <input
                                        class="input"
                                        type="email"
                                        placeholder="Your Email" />
                                    <textarea
                                        class="input"
                                        placeholder="Your Review"></textarea>
                                    <div class="input-rating">
                                        <span>Your Rating: </span>
                                        <div class="stars">
                                            <input
                                                id="star5"
                                                name="rating"
                                                value="5"
                                                type="radio" /><label for="star5"></label>
                                            <input
                                                id="star4"
                                                name="rating"
                                                value="4"
                                                type="radio" /><label for="star4"></label>
                                            <input
                                                id="star3"
                                                name="rating"
                                                value="3"
                                                type="radio" /><label for="star3"></label>
                                            <input
                                                id="star2"
                                                name="rating"
                                                value="2"
                                                type="radio" /><label for="star2"></label>
                                            <input
                                                id="star1"
                                                name="rating"
                                                value="1"
                                                type="radio" /><label for="star1"></label>
                                        </div>
                                    </div>
                                    <button class="primary-btn">Submit</button>
                                </form>
                            </div>
                        </div>
                        <!-- /Review Form -->
                    </div>
                </div>
                <!-- /tab3  -->
            </div>
            <!-- /product tab content  -->
        </div>
    </div>
    <!-- /product tab -->
    </div>
    <!-- /row -->
    </div>
    <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- Section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="title">Productes relacionats</h3>
                    </div>
                </div>

                <!-- /product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="container2">
                            <div class="box-out">
                                <div class="book books-1"></div>
                            </div>
                        </div>
                        <div class="product-body">
                            <p class="product-category">Romanç</p>
                            <h3 class="product-name">
                                <a href="#">lo que el viento se llevo</a>
                            </h3>
                            <h4 class="product-price">
                                Є7.00 <del class="product-old-price">Є10.00</del>
                            </h4>
                            <div class="product-rating"></div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn">
                                <i class="fa fa-shopping-cart"></i> Afegeix a la cistella
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /product -->
                <!-- /product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="container2">
                            <div class="box-out">
                                <div class="book books-2"></div>
                            </div>
                        </div>
                        <div class="product-body">
                            <p class="product-category">Estrategia</p>
                            <h3 class="product-name">
                                <a href="#">El libro de los 5 anillos</a>
                            </h3>
                            <h4 class="product-price">
                                Є7.00 <del class="product-old-price">Є10.00</del>
                            </h4>
                            <div class="product-rating"></div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn">
                                <i class="fa fa-shopping-cart"></i> Afegeix a la cistella
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /product -->
                <!-- /product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="container2">
                            <div class="box-out">
                                <div class="book books-3"></div>
                            </div>
                        </div>
                        <div class="product-body">
                            <p class="product-category">Filosofia</p>
                            <h3 class="product-name">
                                <a href="#">Platon La republica</a>
                            </h3>
                            <h4 class="product-price">
                                Є7.00 <del class="product-old-price">Є10.00</del>
                            </h4>
                            <div class="product-rating"></div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn">
                                <i class="fa fa-shopping-cart"></i> Afegeix a la cistella
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /product -->
                <!-- /product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="container2">
                            <div class="box-out">
                                <div class="book books-4"></div>
                            </div>
                        </div>
                        <div class="product-body">
                            <p class="product-category">Militar</p>
                            <h3 class="product-name">
                                <a href="#">El arte de la guerra</a>
                            </h3>
                            <h4 class="product-price">
                                Є8.00 <del class="product-old-price">Є10.00</del>
                            </h4>
                            <div class="product-rating"></div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn">
                                <i class="fa fa-shopping-cart"></i> Afegeix a la cistella
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /product -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /Section -->

    <!-- NEWSLETTER -->
    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Uneix-te al nostre canal de <strong>DISCORD</strong></p>
                        <div class="discord">
                            <a href="https://discord.gg/ydbRaVq5"><img
                                    src="../img/discord.png"
                                    alt="Discord"
                                    width="750px"
                                    class="discord_img" /></a>
                        </div>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ri-twitter-line"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ri-tiktok-line"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->
    <footer id="footer">
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Contacte</h3>
                            <p></p>
                            <ul class="footer-links">
                                <li>
                                    <a href="#"><i class="fa fa-map-marker"></i>Carrer del Pallars, 4,
                                        Can Bassa, Granollers</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-phone"></i>+34-610-6987-88</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope-o"></i>arcticwolves@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Apartats</h3>
                            <ul class="footer-links">
                                <li><a href="#">Botiga</a></li>
                                <li><a href="#">Llibres</a></li>
                                <li><a href="#">Merch</a></li>
                                <li><a href="#">Premium</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Informació</h3>
                            <ul class="footer-links">
                                <li><a href="../html/nosotros.html">Sobre Nosaltres</a></li>
                                <li><a href="../html/client.html">Atenció al client</a></li>
                                <li>
                                    <a href="../html/privacidad.html">Polítiques de Privacitat (cookies)</a>
                                </li>
                                <li>
                                    <a href="../html/devoluciones.html">Polítiques de Canvis o devolucions</a>
                                </li>
                                <li>
                                    <a href="../html/terminos.html">Termes i Condicions</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Servei</h3>
                            <ul class="footer-links">
                                <li><a href="#">Compte</a></li>
                                <li><a href="#">Cistella</a></li>
                                <li><a href="#">Ajuda</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->

        <button class="assistant-btn" onclick="toggleAssistant()">🐺</button>

        <div class="assistant-container" id="assistant">
            <div class="tope">
                <span>🐺 Tic the Arctic</span>
                <button class="close-btn" onclick="toggleAssistant()">✖</button>
            </div>
            <div class="chat-box" id="chatBox">
                <div class="message bot">
                    Hola! Sóc l'assistent de Arctic, pregunta'm el que necessitis, estic
                    per servir-te!.
                </div>
            </div>
            <div class="faq-buttons">
                <button onclick="sendFAQ('Com et dius?')">Com et dius?</button>
                <button onclick="sendFAQ('Què pots fer?')">Què pots fer?</button>
                <button onclick="sendFAQ('Quina hora és?')">Quina hora és?</button>
                <button onclick="sendFAQ('Com funciona el procés de devolucions?')">
                    Com funciona el procés de devolucions?
                </button>
                <button onclick="sendFAQ('Quins son els mètodes de pagament?')">
                    Quins son els mètodes de pagament?
                </button>
                <button
                    onclick="sendFAQ('En quin idioma están disponibles els llibres?')">
                    En quin idioma están disponibles els llibres?
                </button>
                <button onclick="sendFAQ('Digues els best-sellers del mes')">
                    Digues els best-sellers del mes
                </button>
            </div>
        </div>

        <!-- bottom footer -->
        <div id="bottom-footer" class="section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="footer-payments">
                            <li>
                                <a href="#"><i class="fa fa-cc-visa"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-credit-card"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cc-paypal"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cc-mastercard"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cc-discover"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-cc-amex"></i></a>
                            </li>
                        </ul>
                        <span class="copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved | This template is made with
                            <i class="fa fa-heart-o" aria-hidden="true"></i> by
                            <a href="https://colorlib.com" target="_blank">GRUP 1- JOSEP,JOHAN,MARCEL,IZAN</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </span>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>
    <!-- /FOOTER -->
    <!-- jQuery Plugins -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/nouislider.min.js"></script>
    <script src="../js/jquery.zoom.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/navbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/button.js"></script>
    <script src="../js/asistente.js"></script>
    </body>

    </html>