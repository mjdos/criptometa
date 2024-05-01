@include('site.layouts.header')
        <!-- main content area -->
        <div class="primary-content-area container content-padding">
            <div class="page-title">
                <h2><span class="gradient-text">Recompensas</span> </h2>
            </div>
            <div class="grid-right-sidebar">
                <div class="main-content-area">
                <!-- contact form -->
                    <form class="cryptoki-form validation" id="contact-form" method="POST" action="forms/submit-mail.php" novalidate>
                        <input type="hidden" name="recaptcha_site_key" value="" />
                        <input type="hidden" name="recaptcha_token" value="" />
                        <div class="form-group">
                            <div class="form-field">
                                <label for="name">Nome</label>
                                <input type="text" name="projeto_meta" id="projeto_recommpensa" data-val="\S" data-val-msg="* This is a required field." data-val-msg-id="textMessage" required>
                                <span class="input_error-message" id="textMessage"></span>
                            </div>
                            <div class="form-field">
                                <label for="email">Custo</label>
                                <input type="email" name="projeto_custo" id="projeto_custo" data-val="\b[a-z0-9._]+@[a-z0-9.-]+\.[a-z]{2,4}\b" data-val-msg="* Please enter a valid email address." data-val-msg-id="emailMessage" required>
                                <span class="input_error-message" id="emailMessage"></span>
                            </div>
                        </div>
                        
                        <div class="form-field comment-area">
                            <label for="message">Descreva a recompensa</label>
                            <textarea id="message" name="message" class="comment-form message" cols="30" rows="10" data-val="\S" data-val-msg="* Please, type a message." data-val-msg-id="textareaMessage" required></textarea>
                            <span class="input_error-message" id="textareaMessage"></span>
                        </div>

                        <button type="submit" class="btn btn-normal btn-dark" data-badge="inline">Adicionar</button>
                    </form>
                <!-- contact form -->
                </div>
                <aside>
                    <div class="widgets-list">
                        <div class="widget widget-contact">
                            <div class="widget-title h5">Recompensas</div>
                            <div class="widget-body">
                                </div>
                                <div class="email-owner">
                                    Recompensas incentivam doadores com benefícios exclusivos, como produtos ou experiências especiais
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="widget widget-contact">
                            <div class="widget-title h5">Intruções</div>
          
                        </div>
                        <div class="widget widget-social">
                            <div class="email-owner">
                                <p>Recompensas são adicionadas ao projeto para que insentive as pessoas a apoiar o projeto. </p>
                                <p>Nessa tela voce poderá adicinar tais recompensas</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
        <!-- main content area -->
@include('site.layouts.footer')