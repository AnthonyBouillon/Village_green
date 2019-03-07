<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.13.5/dist/bootstrap-table.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.css') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
        <title><?= !empty($title) ? $title : 'Titre indéfini' ?></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="<?= base_url('assets/image/logo.png') ?>" class="img-fluid" width="200" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?= site_url('products/home') ?>">
                            Accueil
                        </a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?= site_url('products/product') ?>">
                            Nos produits
                        </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('carts/cart') ?>">Panier</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto">
                        <?php if (!empty($this->session->username) && $this->session->admin == 1) { ?>
                            <li class="nav-item dropdown pr-5">

                                <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" id="navbarDropdown"><b>Espace Administrateur</b></a>


                                <div class="dropdown-menu ">
                                    <a class="dropdown-item" href="#">Produit</a>
                                    <a class="dropdown-item" href="#">Utilisateur</a>
                                    <a class="dropdown-item" href="<?= site_url('users/logout') ?>">Déconnexion</a>
                                </div>
                            </li>


                        <?php } else if (!empty($this->session->username)) { ?>
                            <li class="nav-item dropdown pr-5">

                                <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" id="navbarDropdown"><b>Espace Client</b></a>


                                <div class="dropdown-menu ">
                                    <a class="dropdown-item" href="#">Mon compte</a>
                                    <a class="dropdown-item" href="#">Mes commandes</a>
                                    <a class="dropdown-item" href="<?= site_url('users/logout') ?>">Déconnexion</a>
                                </div>
                            </li>

                        <?php } else { ?>
                            <li class="nav-item">

                                <a class="nav-link" href="#register"  data-toggle="modal" data-target="#exampleModalCenter">Inscription</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModalCenter2">Connexion</a>
                            </li>
                        <?php } ?>

                    </ul>
                </form>
            </div>
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Inscription</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form method="POST" action="<?= site_url('users/create') ?>" id="form_register">

                        <div class="modal-body">
                            <div style="color:red">
                                <?php echo validation_errors(); ?>

                                <small id="error_name"></small>

                                <small id="error_firstname"></small>

                                <small id="error_phone"></small>
                                <small id="format_phone"></small>

                                <small id="error_email"></small>
                                <small id="format_email"></small>

                                <small id="error_address"></small>

                                <small id="similar_password"></small>
                            </div>
                            <hr/>
                            <h6>Vous êtes un professionnel ? <a href="">Contactez-nous !</a></h6>
                            <hr/>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Nom</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Entrer votre nom" required value="<?php echo set_value('name'); ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="firstname">Prénom</label>
                                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Entrer votre prénom" required value="<?php echo set_value('firstname'); ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="phone">Téléphone</label>
                                    <input type="tel" name="phone" class="form-control" id="phone" placeholder="Entrer votre numéro de téléphone" required value="<?php echo set_value('phone'); ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Entrer votre e-mail" required value="<?php echo set_value('email'); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address">Adresse (Numéro, rue, ville, code postal)</label>
                                <input type="text" name="address" class="form-control" id="address" placeholder="Entrer votre adresse complète" required value="<?php echo set_value('name'); ?>">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Entrer votre mot de passe" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="confirm_password">Confirmation du mot de pase</label>
                                    <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Retaper votre mot de passe" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">M'enregistrer</button>    
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Connexion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="<?= site_url('users/login') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="text" name="email2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mot de passe</label>
                                <input type="text" name="password2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi ?</label>
                            </div><hr/>
                            <a href="">Compte perdu ? Clique ici !</a>            
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Me connecter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php $this->load->view($page); ?>
        <footer class="jumbotron mt-5 mb-0 p-2 text-center">
            <small class="">© 2019 - Anthony Bouillon</small>
        </footer>
        <script src="<?= base_url('assets/bootstrap/jquery.min.js') ?>"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="<?= base_url('assets/bootstrap/bootstrap.min.js') ?>"></script>
        <script src="https://unpkg.com/bootstrap-table@1.13.5/dist/bootstrap-table.min.js"></script>
        <script src="https://use.fontawesome.com/c560c025cf.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="<?= base_url('assets/js/form.js') ?>"></script>

    </body>
</html>
