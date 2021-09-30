<?php
include 'classes/Functions.php';
$functionObj = new Functions;

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $functionObj->login($email,$password);
    // echo "directory working";
    
}elseif(isset($_POST['register'])){
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $functionObj->add_user($lname,$fname,$email,$password);

}elseif(isset($_POST['update'])){
    $iname = $_POST['iname'];
    $idate = $_POST['idate'];
    $itarget = $_POST['itarget'];
    $idesc = $_POST['idesc'];
    $capacity = $_POST['capacity'];
    $id = $_GET['id'];
    
    echo "Name: ".$iname." "."Date: ".$idate." "."Target: ".$itarget." "."Description: ".$idesc." ".$capacity;

    $functionObj->update_item($iname,$idate,$itarget,$idesc,$capacity,$id);

}elseif(isset($_POST['iimgUpdate'])){
    $picture = $_FILES['picture']['name'];
    $id = $_POST['id'];

    $target_dir = 'uploads/';
    $target_file = $target_dir.basename($picture);

    $validate = $functionObj->upload_itemImg($id,$picture);

    if($validate == 1){
        move_uploaded_file($_FILES['picture']['tmp_name'],$target_file);
        header('location:admin.php');
    }else{
        echo "error!";
    }
}elseif(isset($_POST['register_user'])){
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $functionObj->add_user($lname,$fname,$email,$password);

}elseif(isset($_POST['updateAct'])){
    $aname = $_POST['aname'];
    $adesc = $_POST['adesc'];
    $capacity = $_POST['capacity'];
    $id = $_GET['id'];
    
    echo "Name: ".$aname." "."Description: ".$adesc." "."Capacity: ".$capacity;

    $functionObj->update_act($aname,$adesc,$capacity,$id);
    

}elseif(isset($_POST['aimgUpdate'])){
    $picture = $_FILES['picture']['name'];
    $id = $_POST['id'];

    $target_dir = 'uploads/';
    $target_file = $target_dir.basename($picture);

    $validate = $functionObj->upload_actImg($id,$picture);

    if($validate == 1){
        move_uploaded_file($_FILES['picture']['tmp_name'],$target_file);
        header('location:admin.php');
    }else{
        echo "error!";
    }
}elseif(isset($_POST['reserve'])){
    $user_id = $_POST['user_id'];
    $item_id = $_POST['item_id'];
    $act1 = $_POST['act1'];
    $act2 = $_POST['act2'];

    $cnt1 = $functionObj->count_act1($item_id,$act1);
    $cnt2 = $functionObj->count_act2($item_id,$act2);
    $data1 = $functionObj->get_one_act($act1);
    $data2 = $functionObj->get_one_act($act2);

    if($data1['capacity'] - $cnt1 == 0){
        echo "Activity1 ".$data1['aname']." is already full." ;

    }elseif($data2['capacity'] - $cnt2 == 0 AND $data2['event_id'] == 2){
        echo "Activity2 ".$data2['aname']." is already full." ;

    }else{
    $functionObj->add_to_cart($user_id,$item_id,$act1,$act2);

    }

}elseif(isset($_POST['updateEventUI'])){
    $cart_id = $_POST['cart_id'];
    $act1 = $_POST['act1'];
    $act2 = $_POST['act2'];

    $functionObj->update_cart_item($cart_id,$act1,$act2);

}elseif(isset($_POST['updateUser'])){
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    $functionObj->update_user($lname,$fname,$email,$id);

}elseif(isset($_POST['updateArticle'])){
    $art_desc = $_POST['art_desc'];
    $id = $_POST['id'];
 
    $functionObj->update_article($art_desc,$id);
}




?>