<?php

// Include Categories Model
include_once '../models/Model.php';

// Index Action
function indexAction(){

    //Page General Data
    $PageName = 'index';
    $PlatPageOptions = FrontGetPageContent($PageName);
    $PageMetaD = $PlatPageOptions['page_meta_d'];
    $PageMetaK = $PlatPageOptions['page_meta_k'];
    $PageTitle = $PlatPageOptions['page_title'];
    $PageText = $PlatPageOptions['page_text'];

    //General Functions
    $PlatLogo = FrontGetLogo();
    $LogoType = $PlatLogo['logo_type'];
    $LogoLink = $PlatLogo['logo_link'];
    $LogoImage = $PlatLogo['logo_img_path'];
    $LogoText = $PlatLogo['logo_text'];
    $LogoUrl = $PlatLogo['logo_url'];

    $PlatTopMenus = FrontGetParentsMenu();

    //Load Template
    include_once TEMPLATEPREFIX . 'header' . TEMPLATEPOSTFIX;
    include_once TEMPLATEPREFIX . 'content' . TEMPLATEPOSTFIX;
    include_once TEMPLATEPREFIX . 'footer' . TEMPLATEPOSTFIX;
}

?>