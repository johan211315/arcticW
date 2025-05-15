    <?php include_once("../php/config.php");
    include_once("../php/carrito.php");
    ?>
    <!-- FOOTER -->
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
    </body>

    </html>