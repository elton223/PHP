<?php

// Get Pages Content
function GetPageContent($PageName) {
    global $db;
	$SqlStmt = $db->prepare("SELECT * FROM p149pm_page_options WHERE page_name=:PageName");
	$SqlStmt->bindValue(':PageName',$PageName, PDO::PARAM_STR);
    try{ $SqlStmt->execute(); } catch (PDOException $e) { die(); }
	$row = $SqlStmt->fetch(PDO::FETCH_ASSOC);
	if ($SqlStmt->rowCount() > 0) { return $row; }
}



// Get Parents Menu
function GettingParentsMenu() {
    global $db;
	$SqlStmt = $db->prepare("SELECT * FROM p149pm_admin_menu WHERE menu_parent_id=:MPId ORDER BY menu_order");
    $SqlStmt->bindValue(':MPId',0, PDO::PARAM_INT);
	try{ $SqlStmt->execute(); } catch (PDOException $e) { die(); }
	while($row = $SqlStmt->fetch(PDO::FETCH_ASSOC)) { $row['children'] = GetParentsSubMenu($row['menu_id']); $smartRs[] = $row; }
	if ($SqlStmt->rowCount() > 0) {return $smartRs; }
}

// Get Parents Sub Menu
function GetParentsSubMenu($MenuId) {
    global $db;
	$SqlStmt = $db->prepare("SELECT * FROM p149pm_menu_options WHERE menu_parent_id=:MenuId ORDER BY menu_order");
    $SqlStmt->bindValue(':MenuId',$MenuId, PDO::PARAM_INT);
	try{ $SqlStmt->execute(); } catch (PDOException $e) { die(); }
	while($row = $SqlStmt->fetch(PDO::FETCH_ASSOC)) { $smartRs[] = $row; }
	if ($SqlStmt->rowCount() > 0) {return $smartRs; }
}


//selektojte te gjith tabelen per te shfaq te dhenat ne tabele
function SelektoDatabasen(){
    global $db;
    $SqlStmt=$db->prepare("select * from p149pm_roombook");
    try{ $SqlStmt->execute(); } catch (PDOException $e) { die(); }
    while($row = $SqlStmt->fetch(PDO::FETCH_ASSOC)) { $smartRs[] = $row; }
    if ($SqlStmt->rowCount() > 0) {return $smartRs; }

}




//kjo eshte per ti shfaq ne modal
function RezervationDetail($id){
    global $db;
    $sql=("SELECT * FROM `p149pm_roombook` where id=:rezID");
    $SqlStmt = $db->prepare($sql);
    $SqlStmt->bindParam(':rezID', $id, PDO::PARAM_INT);
    try
    { 
        $SqlStmt->execute(); 
    } 
    catch (PDOException $e) 
    { 
        die(); 
    }
    $row = $SqlStmt->fetch(PDO::FETCH_ASSOC);
    if ($SqlStmt->rowCount() > 0) 
    { 
        return $row; 
    }
}
//ktu bejme update
function EditRezervation($Reserid,$ReserTitle, $Emri, $Reserlname, $Reseremail, $ReserCountry, $Reserphone, $Resertroom, $Reserbed, $Resernroom, $Resercin, $Resercout){
    
    global $db;
    $SqlStmt = $db->prepare(
        "update `p149pm_roombook` set 
        `Title`=:titulli,
        `FName`=:emri, 
        `LName`=:mbiemer, 
        `Email`=:email, 
        `Country`=:vendi, 
        `Phone`=:cel,
        `TRoom`=:nr_dhomes, 
        `Bed`=:shtreter, 
        `NRoom`=:sasi_dhomash, 
        `cin`=:hyrje, 
        `cout`=:dalje 
        where `id`=:id");
    
    $SqlStmt->bindParam(':id', $Reserid, PDO::PARAM_INT);
    $SqlStmt->bindParam(':titulli', $ReserTitle, PDO::PARAM_STR);
    $SqlStmt->bindParam(':emri', $Emri, PDO::PARAM_STR);
    $SqlStmt->bindParam(':mbiemer', $Reserlname, PDO::PARAM_STR);
    $SqlStmt->bindParam(':email', $Reseremail, PDO::PARAM_STR);
    $SqlStmt->bindParam(':vendi', $ReserCountry, PDO::PARAM_STR);
    $SqlStmt->bindParam(':cel', $Reserphone, PDO::PARAM_INT);
    $SqlStmt->bindParam(':nr_dhomes', $Resertroom, PDO::PARAM_STR);
    $SqlStmt->bindParam(':shtreter', $Reserbed, PDO::PARAM_STR);
    $SqlStmt->bindParam(':sasi_dhomash', $Resernroom, PDO::PARAM_STR);
    $SqlStmt->bindParam(':hyrje', $Resercin, PDO::PARAM_STR);
    $SqlStmt->bindParam(':dalje', $Resercout, PDO::PARAM_STR);
    
	if ($SqlStmt->execute()) {
		$result = 'success';
	} else {
		$result = 'failure';
		die();
	}
	return $result;
}

function DeleteRezervation($id){
    global $db;
    $SqlStmt = $db->prepare("DELETE FROM `p149pm_roombook` WHERE `id` = :rezId");
    $SqlStmt->bindParam(':rezId', $id, PDO::PARAM_INT);
    if ($SqlStmt->execute()) {
		$result = 'success';
	} else {
		$result = 'failure';
		die();
	}
	return $result;
}


?>