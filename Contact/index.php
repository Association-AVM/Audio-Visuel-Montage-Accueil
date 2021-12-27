<?php

<html lang="fr">

head
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="icon" href="/Assets/design_logo-png.png" />
    <title>Contacter |->AVM</title>
</head>

<body>
    


    <!-- /!\ Test un aperçu de formulaire (temporairrement histoire de ce donner une première idée)/!\ -->
    <div class="page">
        <h2>Contacter l'Association
            <a href="https://AudioVisuel-montage.fr">AudioVisuel Montage</a>
        </h2>
        <div class="row">

            <div class="col-xl-8 offset-xl-2 py-5">
                <p class="lead">Ceci est notre formulaire de contact Bootstrap fonctionnel avec un arrière-plan PHP
                    etAJAX.</p>
                <form id="contact-form" method="post" action="contact.php" role="form">
                    <div class="messages"></div>
                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_name">Nom*</label>
                                    <input id="form_name" type="text" name="name" class="form-control"
                                        placeholder="Veuillez entrer votre nom *" required="required"
                                        data-error="Nom est obligatoire.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_lastname">Prénom*</label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control"
                                        placeholder="Veuillez entre votre prénom *" required="required"
                                        data-error="Prénom est obligatoire.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_email">Email*</label>
                                    <input id="form_email" type="email" name="email" class="form-control"
                                        placeholder="Veuillez entrer votre email *" required="required"
                                        data-error="Un email valid est obligatoire.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="form_need">Veuillez préciser votre besoin*</label>
                                    <select id="form_need" name="need" class="form-control" required="required"
                                        data-error="Veuillez préciser votre besoin.">
                                        <option value=""></option>
                                        <option value="Demande de devis">Demande de devis</option>
                                        <option value="Demande générale">Demande générale</option>
                                        <option value="Demander une facture">Demander une facture</option>
                                        <option value="Autre">Autre</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="form_message">Message *</label>
                                    <textarea id="form_message" name="message" class="form-control"
                                        placeholder="Votre Message *" rows="4" required="required"
                                        data-error="Veuillez remplir le champ Message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-success btn-send" value="Envoyer">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-muted">
                                    <strong>*</strong> Ces champs sont obligatoires.
                                </p>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            <!-- /.8 -->

        </div>
        <!-- /.row-->

    </div>
    <!-- /.container-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"
        crossorigin="anonymous"></script>
    <script src="contact.js"></script>

    <!-- /!\ Fin du TEST de FORMULAIRE /!\  -->


    <header>
        <nav>
            <a class="boutons" href="../Projets/">Projets</a>
            <div><h1><a href="../">AudioVisuel Montage</a></h1></div>
            <a href="../Connexion/">Connexion</a>
        </nav>
    </header>
    </div>

</body>
</html>

?>