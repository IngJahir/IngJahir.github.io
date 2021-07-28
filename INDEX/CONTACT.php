<!------------->
<!-- CONTACT -->
<!------------->
<section id="contact" class="wrapper style1 fade-up">
    <div class="inner">
        <h2> CONTACTS </h2>
        <br>

        <div class="split style1">

            <!---------------------------->
            <!-- Formulario de mensajes -->
            <!---------------------------->
            <section>
                <form method="post" action="SEND_EMAIL.php">

                    <div class="fields">

                        <!-- Nombre -->
                        <div class="field half">
                            <label for="name"> Name </label>
                            <input type="text" name="name" id="name" placeholder="Your name" required="required" />
                        </div>

                        <!-- Email -->
                        <div class="field half">
                            <label for="email"> Email </label>
                            <input type="text" name="email" id="email" placeholder="Your email" required="required" />
                        </div>

                        <!-- Mensaje -->
                        <div class="field">
                            <label for="message"> Message </label>
                            <textarea name="message" id="message" rows="8" placeholder="Message" required="required">
                            </textarea>
                        </div>

                    </div>

                    <!-- Boton enviar mensaje -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Send Message </button>
                    </div>

                </form>
            </section>

            <!--------------->
            <!-- Contactos -->
            <!--------------->
            <section>
                <ul class="contact">

                    <!-- Direccion -->
                    <li>
                        <h3>Address</h3>
                        <span>
                            Carrera 85B # 24F - 13 <br />
                            Bogotá - Colombia
                        </span>
                    </li>

                    <!-- Email -->
                    <li>
                        <h3>Email</h3>
                        <a href="#">jahirtautiva@gmail.com</a>
                    </li>

                    <!-- Redes sociales -->
                    <li>
                        <h3>Social</h3>
                        <ul class="icons">

                            <!-- Github -->
                            <li>
                                <a href="https://github.com/IngJahir" class="icon brands fa-github">
                                    <span class="label">GitHub</span>
                                </a>
                            </li>

                            <!-- Linkedin -->
                            <li>
                                <a href="https://www.linkedin.com/in/jahir-tautiva-medina-20011499/" class="icon brands fa-linkedin-in">
                                    <span class="label">LinkedIn</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </section>
        </div>
    </div>
</section>