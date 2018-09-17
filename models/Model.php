<?php

// Get Pages Content
function FrontGetPageContent($PageName) {
    global $db;
	$SqlStmt = $db->prepare("SELECT * FROM p149pm_page_options WHERE page_name=:PageName");
	$SqlStmt->bindValue(':PageName',$PageName, PDO::PARAM_STR);
    try{ $SqlStmt->execute(); } catch (PDOException $e) { die(); }
	$row = $SqlStmt->fetch(PDO::FETCH_ASSOC);
	if ($SqlStmt->rowCount() > 0) { return $row; }
}

// Get Logo
function FrontGetLogo() {
    global $db;
	$SqlStmt = $db->prepare("SELECT * FROM p149pm_logo_options");
    try{ $SqlStmt->execute(); } catch (PDOException $e) { die(); }
	$row = $SqlStmt->fetch(PDO::FETCH_ASSOC);
	if ($SqlStmt->rowCount() > 0) { return $row;}
}

// Get Parents Menu
function FrontGetParentsMenu() {
    global $db;
	$SqlStmt = $db->prepare("SELECT * FROM p149pm_menu_options WHERE menu_parent_id=:MPId ORDER BY menu_order");
    $SqlStmt->bindValue(':MPId',0, PDO::PARAM_INT);
	try{ $SqlStmt->execute(); } catch (PDOException $e) { die(); }
	while($row = $SqlStmt->fetch(PDO::FETCH_ASSOC)) { $row['children'] = FrontGetParentsSubMenu($row['menu_id']); $smartRs[] = $row; }
	if ($SqlStmt->rowCount() > 0) {return $smartRs; }
}

 //Get Parents Sub Menu
function FrontGetParentsSubMenu($MenuId) {
    global $db;
	$SqlStmt = $db->prepare("SELECT * FROM p149pm_menu_options WHERE menu_parent_id=:MenuId ORDER BY menu_order");
    $SqlStmt->bindValue(':MenuId',$MenuId, PDO::PARAM_INT);
	try{ $SqlStmt->execute(); } catch (PDOException $e) { die(); }
	while($row = $SqlStmt->fetch(PDO::FETCH_ASSOC)) { $smartRs[] = $row; }
	if ($SqlStmt->rowCount() > 0) {return $smartRs; }
}

    function  Frontaddbookingdata($ReserTitle, $emri, $Reserlname, $Reseremail, $ReserCountry, $Reserphone, $Resertroom, $Reserbed, $Resernroom, $Resercin, $Resercout)

{
    global $db;
    $SqlStmt = $db->prepare("INSERT INTO p149pm_roombook(Title, FName, LName, Email, Country, Phone, TRoom, Bed, NRoom, cin, cout)
VALUES (?,?,?,?,?,?,?,?,?,?,?)");

    $SqlStmt->bindParam(1, $ReserTitle, PDO::PARAM_STR);
    $SqlStmt->bindParam(2, $emri, PDO::PARAM_STR);
    $SqlStmt->bindParam(3, $Reserlname, PDO::PARAM_STR);
    $SqlStmt->bindParam(4, $Reseremail, PDO::PARAM_STR);
    $SqlStmt->bindParam(5, $ReserCountry, PDO::PARAM_STR);
    $SqlStmt->bindParam(6, $Reserphone, PDO::PARAM_INT);
    $SqlStmt->bindParam(7, $Resertroom, PDO::PARAM_STR);
    $SqlStmt->bindParam(8, $Reserbed, PDO::PARAM_STR);
    $SqlStmt->bindParam(9, $Resernroom, PDO::PARAM_STR);
    $SqlStmt->bindParam(10, $Resercin, PDO::PARAM_STR);
    $SqlStmt->bindParam(11, $Resercout, PDO::PARAM_STR);
    if ($SqlStmt->execute()) {
        $result = 'success';
    } else {
        $result = 'failure';
        die();
    }
    return $result;
}

//function Frontaddcontact($Emri, $Reserlname, $Reseremail, $ReserSubject, $Contacmessage) {
//
//    global $db;
//
//    $SqlStmt = $db->prepare("INSERT INTO p149pm_contact_form(fname, lname, email, subject, message) VALUES (?,?,?,?,?)");
//    $SqlStmt->bindParam(1, $Emri, PDO::PARAM_STR);
//    $SqlStmt->bindParam(2, $Reserlname, PDO::PARAM_STR);
//    $SqlStmt->bindParam(3, $Reseremail, PDO::PARAM_STR);
//    $SqlStmt->bindParam(4, $ReserSubject, PDO::PARAM_STR);
//    $SqlStmt->bindParam(5, $Contacmessage, PDO::PARAM_STR);
//    try{ $SqlStmt->execute(); } catch (PDOException $e) { die(); }
//    $row = $SqlStmt->fetch(PDO::FETCH_ASSOC);
//    return $row;
//
//
//
//
//}

?>