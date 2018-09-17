<?php

// Include Categories Model
include_once '../../models/AdminModel.php';
include_once '../../models/Model.php';


function indexAction(){

    $PageName = isset($_GET['page']) ? $_GET['page'] : 'index';

    if($PageName === 'udateRow') {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $Reserid = $_POST['id'];
        }
        if (isset($_POST['title']) && !empty($_POST['title'])) {
            $ReserTitle = $_POST['title'];
        }
        if (isset($_POST['fname']) && !empty($_POST['fname'])) {
            $Emri = $_POST['fname'];
        }
        if (isset($_POST['lname']) && !empty($_POST['lname'])) {
            $Reserlname = $_POST['lname'];
        }
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            $Reseremail = $_POST['email'];
        }
        if (isset($_POST['country']) && !empty($_POST['country'])) {
            $ReserCountry = $_POST['country'];
        }
        if (isset($_POST['phone']) && !empty($_POST['phone'])) {
            $Reserphone = $_POST['phone'];
        }
        if (isset($_POST['troom']) && !empty($_POST['troom'])) {
            $Resertroom = $_POST['troom'];
        }
        if (isset($_POST['bed']) && !empty($_POST['bed'])) {
            $Reserbed = $_POST['bed'];
        }
        if (isset($_POST['nroom']) && !empty($_POST['nroom'])) {
            $Resernroom = $_POST['nroom'];
        }
        if (isset($_POST['cin']) && !empty($_POST['cin'])) {
            $Resercin = $_POST['cin'];
        }
        if (isset($_POST['cout']) && !empty($_POST['cout'])) {
            $Resercout = $_POST['cout'];
        }
        $PlatBookingData= EditRezervation($Reserid,$ReserTitle, $Emri, $Reserlname, $Reseremail, $ReserCountry, $Reserphone, $Resertroom, $Reserbed, $Resernroom, $Resercin, $Resercout);

    }
    else{

    $PlatPageOptions = GetPageContent($PageName);

    $PageMetaD = $PlatPageOptions['page_meta_d'];
    $PageMetaK = $PlatPageOptions['page_meta_k'];
    $PageTitle = $PlatPageOptions['page_title'];
    $PageText = $PlatPageOptions['page_text'];



    //General Functions
    $PlatLogo = GetLogo();
    $LogoType = $PlatLogo['logo_type'];
    $LogoLink = $PlatLogo['logo_link'];
    $LogoImage = $PlatLogo['logo_img_path'];
    $LogoText = $PlatLogo['logo_text'];
    $LogoUrl = $PlatLogo['logo_url'];

    $PlatTopMenus = GettingParentsMenu();
}



            //Load Template
            include_once TEMPLATEPREFIX . 'header' . TEMPLATEPOSTFIX;
            include_once TEMPLATEPREFIX . 'content-for-pages' . TEMPLATEPOSTFIX;
            include_once TEMPLATEPREFIX . 'footer' . TEMPLATEPOSTFIX;


    }
?>