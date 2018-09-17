<?php

// Include Categories Model
include_once '../models/AdminModel.php';
include_once '../models/Model.php';

//Index Action
function indexAction(){

    $PageName = isset($_GET['page']) ? $_GET['page'] : 'index';

if(isset($_POST['updateDB'])){
        $title = $_POST['titulli'];
       $emri = $_POST['emri'];
       $mbiemer = $_POST['mbiemer'];
       $email = $_POST['email'];
       $vendi = $_POST['vendi'];
       $cel = $_POST['cel'];
       $nr_dhomes = $_POST['nr_dhomes'];
       $shtreter = $_POST['shtreter'];
       $sasi_dhomash = $_POST['sasi_dhomash'];
       $hyrje = $_POST['hyrje'];
       $dalje = $_POST['dalje'];
       $id = $_POST['id'];
       $editoRezervimin = EditRezervation($id, $title, $emri, $mbiemer, $email, $vendi, $cel, $nr_dhomes, $shtreter, $sasi_dhomash, $hyrje, $dalje);
}

if(isset($_POST['delete'])){
    $delete = DeleteRezervation($_POST['id']);
}

if(isset($_GET['update'])){
    $getRevervationDetail = RezervationDetail($_GET['update']);
}
    


    //Page General Data
    $PageName = 'index';
    $PlatPageOptions = GetPageContent($PageName);
    $PageMetaD = $PlatPageOptions['page_meta_d'];
    $PageMetaK = $PlatPageOptions['page_meta_k'];
    $PageTitle = $PlatPageOptions['page_title'];
    $PageText = $PlatPageOptions['page_text'];

    //General Functions
//    $PlatLogo = GetLogo();
//    $LogoType = $PlatLogo['logo_type'];
//    $LogoLink = $PlatLogo['logo_link'];
//    $LogoImage = $PlatLogo['logo_img_path'];
//    $LogoText = $PlatLogo['logo_text'];
//    $LogoUrl = $PlatLogo['logo_url'];

    $PlatTopMenus = GettingParentsMenu();
//marrim te dhenat

    $PlatSelektoTabelens=SelektoDatabasen();




    //Load Template
    include_once TEMPLATEPREFIXADMIN . 'admin-header' . TEMPLATEPOSTFIXADMIN;
    include_once TEMPLATEPREFIXADMIN . 'admin-content' . TEMPLATEPOSTFIXADMIN;
    include_once TEMPLATEPREFIXADMIN . 'admin-footer' . TEMPLATEPOSTFIXADMIN;
}

?>