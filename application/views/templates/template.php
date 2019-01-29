<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <title><?= !empty($title) ? $title : 'Titre indéfini' ?></title>
    </head>
    <body id="background_first">

        <div class="container mb-4">
            <header class="row">
                <div class="col-3" >
                    <img src="<?= base_url('assets/images/header/logo village green_1.png') ?>" class="img-fluid" alt="Image village green" id="logo">
                </div>
                <div id="bande_1">
                    <div class="link">
                        <a class="col-3 bold" href="">Infos</a>
                        <a class="col-3 bold" href="">Espace client</a>
                        <a class="col-3" href=""><img src="<?= base_url('assets/images/header/picto panier.png') ?>" class="img-fluid" alt="Image village green"></a>
                        <a class="col-3 test" href=""><img src="<?= base_url('assets/images/header/picto pays.png') ?>" class="img-fluid" alt="Image village green"></a>
                    </div>


                </div>
                <div id="bande_2">
                    <div class="link_2">
                        <a class="col-3 bold" href="">Produits</a>
                        <a class="col-3 bold a_s" href="">Service</a>
                        <a class="col-3 bold a_s" href="">Aide</a>
                        <a class="col-3 bold a_s" href="">A propos</a>
                    </div>

                </div>
                <div id="bande_3">
                    <div class="link_3">
                        <a class="col " href="">Guit/Bass</a>
                        <a class="col  " href="">Batteries</a>
                        <a class="col  " href="">Clavier</a>
                        <a class="col  " href="">Studio</a>
                        <a class="col  " href="">Sono</a>
                        <a class="col  " href="">Eclairage</a>
                        <a class="col  " href="">DJ</a>
                        <a class="col  " href="">Cases</a>
                        <a class="col  " href="">Accessoires</a>
                    </div>

                </div>
            </header>


            <section class="row pt-4 mb-4 pb-4">
                <div class="col-9">
                    <img src="<?= base_url('assets/images/body/pub guitare.png') ?>" alt="" class="img-fluid img_second">
                </div>
                <aside class="col-3">
                    <img src="<?= base_url('assets/images/body/banniere droite prix.png') ?>" alt="" class="img-fluid img_second">
                </aside>
            </section>
            <section class="row">
                <div class="col-12">
                    <img src="<?= base_url('assets/images/body/banniere centre 4 pictos.png') ?>" alt="" class="img-fluid img_banner_4_pictos">
                </div>
            </section>

            <section class="row  ">
                <div class="background_title p-2">
                    <h2 class="bold col-12">Nos catégories</h2>
                </div>

                <img src="<?= base_url('assets/images/body/CATEGORIES guitare.png') ?>" alt="" class="img-fluid col-3 img_cat">

                <img src="<?= base_url('assets/images/body/CATEGORIES batterie.png') ?>" alt="" class="img-fluid col-3 img_cat">


                <img src="<?= base_url('assets/images/body/CATEGORIES piano.png') ?>" alt="" class="img-fluid col-3 img_cat">

                <img src="<?= base_url('assets/images/body/CATEGORIES micro.png') ?>" alt="" class="img-fluid col-3 img_cat">

                <img src="<?= base_url('assets/images/body/CATEGORIES sono.png') ?>" alt="" class="img-fluid col-3 img_cat">

                <img src="<?= base_url('assets/images/body/CATEGORIES cases.png') ?>" alt="" class="img-fluid col-3 img_cat">


                <img src="<?= base_url('assets/images/body/CATEGORIES cable.png') ?>" alt="" class="img-fluid col-3 img_cat">

                <img src="<?= base_url('assets/images/body/CATEGORIES saxo.png') ?>" alt="" class="img-fluid col-3 img_cat">


            </section>
            <section class="row pt-2 pl-4 pr-4 background_section" id="section_last">
                <div class=" p-2 col-6">
                    <h2 class="bold pb-2">Nos meilleures ventes</h2>
                    <div class="row">
                        <div class="col-4 pl-1 pr-1 pb-1">
                            <img src="<?= base_url('assets/images/body/TOP VENTES guitare.png') ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-4 pl-1 pr-1 pb-1">
                            <img src="<?= base_url('assets/images/body/TOP VENTES saxo.png') ?>" alt="" class="img-fluid">
                        </div>
                        <div class="col-4 pl-1 pr-1 pb-1">
                            <img src="<?= base_url('assets/images/body/TOP VENTES piano.png') ?>" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>
                <div class=" p-2 pl-4 col-6">
                    <h2 class="bold pb-2">Nos partenaires</h2>
                    <div class="row col-12">
                        <img src="<?= base_url('assets/images/body/partenaires 4 logos.png') ?>" alt="" class="img-fluid">
                    </div>
                </div>

            </section>
            <footer class="white">
                <div class="row pb-4">
                    <div class="col-4">
                        <h4 class="col-12">Recevez <span class="color_red ">nos offres exclusives</span></h4>
                        <div class="row">
                            <div class="col-8">
                                <input type="email" class="form-control" placeholder="Votre adresse e-mail">
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn background_red white">Valider</button>
                            </div>

                        </div>
                    </div>
                    <div class="col-4 icon_f_t">
                        <h4><span class="color_red ">Suivez-nous</span> par ici !</h4><br>
                        <a href=""><img src="<?= base_url('assets/images/footer/picto facebook.png') ?>" alt="" class="img-fluid pr-4 "></a>
                        <a href=""><img src="<?= base_url('assets/images/footer/picto twitter.png') ?>" alt="" class="img-fluid"></a>
                    </div>
                    <div class="col-4">
                        <img src="<?= base_url('assets/images/footer/icon_footer.png') ?>" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="row pb-4">
                    <div class="col-3 pl-4">
                        <h4>Contactez-nous !</h4> 
                        <h5>Conseil / Commande téléphone</h5>
                        <small>du lundi au vendredi de 8h à 19h,<br>
                            le samedi de 10h à 18h.</small>

                        <small>Depuis la France : </small>
                        <p>02 40 38 50 50</p>

                        <small>Belgique, Suisse, International : </small>
                        <p>0033 2 40 38 50 50</p>

                        <h5>Service après vente : </h5>
                        <p>02 51 80 68 76</p> 
                        <mall>Contactez-nous par téléphone<br/> du lundi au samedi de 9h à 18h<br/> ou depuis votre compte client.</small>

                            <h5>Conseils pour choisir un instrument : </h5>
                            <small>infovg@villagegreen.com</small>

                            <h5>Service Presse : </h5>
                            <small>contact@villagegreen.com</small>

                            <h5>Village Green Recrute !</h5>
                            <small>recrute@villagegreen.com</small>
                    </div>
                    <div class="col-3">
                        Village Green Stores
                        Ouvert de 10h à 19h30 non-stop.

                        Guitares-Amplificateurs-Effets : 
                        182 avenue Jean Jaurès
                        75019 Paris

                        Clavier-Home Studio-Sonorisation
                        Equipement DJ-Eclairage : 
                        184 avenue Jean Jaurès
                        75019 Paris
                        Librairie Musicale :
                        7 av. du Nouveau Conservatoire
                        75019 Paris
                        Instruments à vent :
                        9/11 av. du Nouveau Conservatoire
                        75019 Paris
                        Percussions :
                        13/15 av. du Nouveau Conservatoire
                        75019 Paris
                        Métro Ligne 5, station Porte de Pantin.
                        Plan d'accès / Visite virtuelle
                    </div>
                    <div class="col-3">
                        Utiles !
                        Qui sommes nous ?
                        F.A.Q.
                        Le blog Village Green
                        Vous avez un site Internet ?
                        Devenez partenaire Village Green
                        Conditions générales de vente
                        Mentions légales
                        Plan du site
                        Parrainage
                        Nouveautés
                        Assurance Woodbrass.com
                        Location d'instruments de musique
                    </div>
                    <div class="col-3">
                        Village Green
                        Preservation Society
                        Toute l'actualité musicale
                        Voir l'avis des musiciens
                        Concours : inscription et résultat... à vous de
                        jouer !
                    </div>
                </div>

                <div class="text-center pb-2">
                    <small>Village Green est une entreprise 100% Made in France !<br/>
                        Magasin de musique - Achat / Vente instruments de musique - Location instruments de musique - Atelier de réparation - Vente accessoires de musique.
                        <br/>1989-2016 - RCS Paris B 222 333 444 Déclaration CNIL : 12345678.</small>
                </div>
                <div class=" pt-2 pb-2 background_black">
                    <div class="text-center">
                        <small class="">
                            <a href="" class="white">Guitares</a> - 
                            <a href="" class="white">Amplis / Effets</a> - 
                            <a href="" class="white">Claviers / Pianos</a> - 
                            <a href="" class="white">Synthés</a> - 
                            <a href="" class="white">Batteries / Percussions</a> - 
                            <a href="" class="white">Vents</a> - 
                            <a href="" class="white">Violons</a> - 
                            <a href="" class="white">Home Studio</a> - 
                            <a href="" class="white">Sonorisation</a> - 
                            <a href="" class="white">Deejay</a> - 
                            <a href="" class="white">Éclairage</a> - 
                            <a href="" class="white">Micros</a> - 
                            <a href="" class="white">Casques</a> - 
                            <a href="" class="white">Enregistreurs</a>
                            <a href="" class="white">Lifestyle</a> - 
                            <a href="" class="white">Déstockage</a> - 
                            <a href="" class="white">Ecoles & Pros</a>
                            <br/>

                            <a href="" class="color_grey_small">Behringer</a> - 
                            <a href="" class="color_grey_small">Bose</a> - 
                            <a href="" class="color_grey_small">Conservatoire de musique de Paris</a> - 
                            <a href="" class="color_grey_small">Fender</a> - 
                            <a href="" class="color_grey_small">Focusrite Scarlett</a> - 
                            <a href="" class="color_grey_small">Focusrite</a> - 
                            <a href="" class="color_grey_small">Gibson 2016</a> - 
                            <a href="" class="color_grey_small">Gibson</a> - 
                            <a href="" class="color_grey_small">Guitar Shop</a> - 
                            <a href="" class="color_grey_small">Guitare Martin</a> - 
                            <a href="" class="color_grey_small">Guitare Taylor</a> - 
                            <a href="" class="color_grey_small">Guitare classique</a> - 
                            <a href="" class="color_grey_small">Guitare folk</a> - 

                            <a href="" class="color_grey_small">Guitare électrique IK Multimedia</a> - 
                            <a href="" class="color_grey_small">Luthier Paris</a> - 
                            <a href="" class="color_grey_small">Magasin DJ Paris</a> - 
                            <a href="" class="color_grey_small">Magasin instruments de musique Paris</a> - 
                            <a href="" class="color_grey_small">Magasin sonorisation Paris</a> - 
                            <a href="" class="color_grey_small">Microphone USB</a> - 
                            <a href="" class="color_grey_small">Musique</a> - 
                            <a href="" class="color_grey_small">Namm</a> - 
                            <a href="" class="color_grey_small">Partition alto</a>
                            <a href="" class="color_grey_small">Partition clarinette</a> - 
                            <a href="" class="color_grey_small">Partition flute</a> - 
                            <a href="" class="color_grey_small">Partition guitare</a>
                            <a href="" class="color_grey_small">Partition harmonica</a> - 
                            <a href="" class="color_grey_small">Partition musique</a> - 
                            <a href="" class="color_grey_small">Partition piano</a> - 
                            <a href="" class="color_grey_small">Partition saxophone</a> - 
                            <a href="" class="color_grey_small">Partition trombone</a> - 
                            <a href="" class="color_grey_small">Partition trompette</a> - 
                            <a href="" class="color_grey_small">Partition vibraphone</a> - 
                            <a href="" class="color_grey_small">Partition violon</a> - 
                            <a href="" class="color_grey_small">Partition xylophone</a> 

                            <a href="" class="color_grey_small">Piano pas cher</a>  - 
                            <a href="" class="color_grey_small">Pioneer DJ</a>  - 
                            <a href="" class="color_grey_small">Platine vinyle</a> - 
                            <a href="" class="color_grey_small">Site internet DJ</a>  - 
                            <a href="" class="color_grey_small">Site internet Deejay</a>  - 
                            <a href="" class="color_grey_small">Site internet Violon</a>  -  
                            <a href="" class="color_grey_small">Sono Behringer</a>  - 
                            <a href="" class="color_grey_small">Tablature guitare</a>  - 
                            <a href="" class="color_grey_small">Tablatures</a>  - 
                            <a href="" class="color_grey_small">Ukulele</a>  - 
                            <a href="" class="color_grey_small">Vente sono</a>  - 
                            <a href="" class="color_grey_small">Yamaha RS</a>  - 
                            <a href="" class="color_grey_small">batterie débutant</a> 
                        </small>
                    </div>
                </div>

            </footer>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>
    <style>
        .color_grey_small{
            color: #686868;
        }
        .text-center{
            text-align: center;
        }
        .icon_f_t{
            text-align: center;
        }
        footer{

            margin-left: -15px;
            margin-right: -15px;
            background: repeating-linear-gradient(
                120deg,
                #323232,
                #414141 10px,
                #414141 10px,
                #323232 20px
                );
        }
        .white{
            color: white;
        }
        .background_red{
            background-color: #7B3B1F;
        }
        .background_black{
            background-color: black;
        }
        .color_red{
            color: #7B3B1F;
        }
        .background_section{
            background-color: #E6E6E6;
            margin-left: -15px;
            margin-right: -15px;
        }
        #section_last{
            margin-top:0px;
            padding-top:0px;
        }
        .img_cat{
            margin-right: 0px;
            padding-right: 0px;
            margin-left: 0px;
            padding-left: 0px;
            width: 100%;
        }
        .background_title{
            background-color: #E6E6E6;
            width: 1141px;
        }
        .img_banner_4_pictos{
            margin-left: -15px;
            max-width: 1141px;
        }
        .img_second{
            height: 502px;
            margin-left: 20px;
        }
        .container{
            background-color: white;
        }
        header{
            margin-bottom: 1%;
        }
        #background_first{
            background-color: grey;
            background-image: url('assets/images/background/background village.png');
            background-position-x: center;
            background-repeat: repeat;
        }
        .a_s{
            margin-left: 10%;

        }
        .bold{
            font-weight: bold;
        }
        #logo{
            left:0%;
            position: absolute;
            z-index: 100;
        }
        .test{
            margin-left: 10%;
        }
        #bande_1{
            background: repeating-linear-gradient(
                120deg,
                #E4E4E4,
                #E4E4E4 10px,
                #FFFFFF 10px,
                #FFFFFF 20px
                );
            min-height: 45px;
            width: 100%;

        }
        .link{
            margin-left: 60%;
            color: black;

        }
        .link_2{
            margin-left: 30%;
            font-size: 20px;

        }
        .link_3{
            margin-left: 25%;
            font-size: 17px;

        }
        .link_3 a {
            color: white;
            vertical-align:middle;
        }
        .link_2 a {
            color: white;
            vertical-align:middle;

        }
        .link a{
            color: black;
            vertical-align:middle;
        }
        #bande_2{
            background-color: #5D5D5D;
            height: 50px;
            width: 100%;
            color: white;
        }
        #bande_3{
            background-color: #26211E;
            height: 50px;
            width: 100%;
            color: white;
        }
        #section_2{
            background-color: #E4E4E4;
        }
        #section_1{
            background-color: #FFFFFF;
        }
    </style>
</html>
