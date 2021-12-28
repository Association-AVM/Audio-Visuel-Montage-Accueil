
    <?php
    //Envoie à la base de donnée
    if (!empty($_POST["send"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
                                    //Il faut modifier l'adresse de connexion, le compte utilisateur et le mot de passe.
        $connexion = mysqli_connect("localhost", "root", "", "contact_form") or die("Erreur de connexion: " . mysqli_error($connexion));
        $result = mysqli_query($connexion, "INSERT INTO contact (name, email, subject, message) VALUES ('" . $name . "', '" . $email . "','" . $subject . "','" . $message . "')");
        if ($result) {
            $db_msg = "Vos informations de contact sont enregistrées avec succés.";
            $type_db_msg = "success";
        } else {
            $db_msg = "Erreur lors de la tentative d'enregistrement de contact.";
            $type_db_msg = "error";
        }
    }



    //Envoiyer le  mail
    if (!empty($_POST["send"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        $toEmail = "audiovisuel.montage@gmail.com";
        $mailHeaders = "From: " . $name . "<" . $email . ">\r\n";
        if (mail($toEmail, $subject, $message, $mailHeaders)) {
            $mail_msg = "Vos informations de contact ont été reçues avec succés.";
            $type_mail_msg = "success";
        } else {
            $mail_msg = "Erreur lors de l'envoi de l'e-mail.";
            $type_mail_msg = "error";
        }
    }
    ?>

<!-- /////////////////////////////////////////////Affichage page web//////////////////////////////////////////////////////////////////////-->
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="icon" href="/Assets/design_logo-png.png" />
    <title>AVM - Contact</title>
</head>

<body>
    <!-- /!\ Formulaire de contact  /!\ -->
    <div id="boite">
        <form id="form" enctype="multipart/form-data" onsubmit="return validate()" method="post">
            <h2>Formulaire de contact</h2>
            <label>Nom: <span>*</span></label>
            <input type="text" id="name" name="name" placeholder="Nom" />
            <label>Email: <span>*</span></label><span id="info" class="info"></span>
            <input type="text" id="email" name="email" placeholder="Email" />
            <label>Sujet: <span>*</span></label>
            <input type="text" id="subject" name="subject" placeholder="Quel est votre demande ?" />
            <label>Message:</label>
            <textarea id="message" name="message" placeholder="Message..."></textarea>
            <input type="submit" name="send" value="Envoyer le message" />
            <div id="statusMessage">
                <?php if (!empty($db_msg)) { ?>
                    <p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
                <?php } ?>
                <?php if (!empty($mail_msg)) { ?>
                    <p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
                <?php } ?>
            </div>
        </form>
    </div>







    <!-- /!\ Test un aperçu de formulaire (temporairrement histoire de ce donner une première idée)/!\ ->
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
            <!-- /.8 ->

        </div>
        <!-- /.row->

    </div>
    <!-- /.container->

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
            <div>
                <h1><a href="../">AudioVisuel Montage</a></h1>
            </div>
            <a href="../Connexion/">Connexion</a>
        </nav>
    </header>
    </div>
</body>

</html>