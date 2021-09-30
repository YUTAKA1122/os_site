<?php
include 'Database.php';



class Functions extends Database{

    function login($email,$password){
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $this->conn->query($sql);

        if($result->num_rows ==1){
            $row = $result -> fetch_assoc();
            if($row['role']=='u'){
                $_SESSION['id'] = $row['user_id'];
                $_SESSION['lname'] = $row['lname'];
                $_SESSION['fname'] = $row['fname'];

                header('location:index.php');
                
            }else{
                    header('location:admin.php');
                }

    }else{
        echo "You have a wrong adress or password.";
    }
}

    // User CRUD
    function add_user($lname,$fname,$email,$password){
        $sql = "INSERT INTO users(lname,fname,email,password)VALUES('$lname','$fname','$email','$password') ";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            echo "User added successfully!<br>";
            echo "Please go back to <a href='login.php'>login page</a>";
        }else{
            die("ERROR: ".$this->conn->error);
        }

    }

    function read_users(){
        $sql = "SELECT * FROM users";
        $result = $this->conn->query($sql);

        if($result->num_rows>0){
            $row = array();
            while($rows = $result->fetch_assoc()){
                $row[] = $rows;
            }
            return $row;
        }else{
            return FALSE;
        }
    }


    function update_user($lname,$fname,$email,$id){
        $sql = "UPDATE users SET lname = '$lname', fname = '$fname', email = '$email' WHERE user_id = '$id' ";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            header('location:userlist.php');
        }else{
            die('ERROR: '.$this->conn->error);
        }

    }

    function update_password($password,$id){
        $sql = "UPDATE users SET password = '$password' WHERE user_id = '$id' ";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            echo "Your password updated successfully.";
        }else{
            die('ERROR: '.$this->conn->error);
        }

    }


    function delete_user($id){
        $sql = "DELETE FROM users WHERE user_id = '$id'";
        $result = $this->conn->query($sql);
        if($result == TRUE){
            echo"Your account was deleted successfully.";
        }else{
            die("ERROR: ".$this->conn->error);
        }
    }

    function delete_self($id){
        $sql = "DELETE FROM users WHERE user_id = '$id'";
        $result = $this->conn->query($sql);
        if($result == TRUE){
            header('location:index.php');
        }else{
            die("ERROR: ".$this->conn->error);
        }
    }


    function upload_userImg(){
    }

    function get_one_user($id){
        $sql = "SELECT * FROM users WHERE user_id = '$id'";
        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            return $result->fetch_assoc();
        }else{
        }

    }


    // Item CRUD
    function add_item($iname,$event_id,$idate,$itarget,$idesc,$capacity){
        $sql = "INSERT INTO items(iname,event_id,idate,itarget,idesc,capacity)VALUES('$iname','$event_id','$idate','$itarget','$idesc','$capacity')";
        $result = $this->conn->query($sql);
        if($result == TRUE){
            echo "<div class = 'alert alert-success mx-3'>";
            echo "Your item added successfully.";
            echo "</div>";
            }else{
            die("ERROR: ".$this->conn->error);
        }

    }

    function read_items(){
        $sql = "SELECT * FROM items ORDER BY event_id";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            $array = array();
            while($row = $result->fetch_assoc()){
                $array[] = $row;
            }
            return $array;
        }else{
            return FALSE;
        }

    }

    function count_items($item_id){
        $sql = "SELECT * FROM cart WHERE item_id = '$item_id'";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            return $result->num_rows;
        }else{
            die("ERROR: ".$this->conn->error);
        }

    }


    function read_specific_items($event_id){
        $sql = "SELECT * FROM items WHERE event_id = '$event_id' ORDER BY idate";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            $array = array();
            while($row = $result->fetch_assoc()){
                $array[] = $row;
            }
            return $array;
        }else{
            return FALSE;
        }

    }


    function update_item($iname,$idate,$itarget,$idesc,$capacity,$id){
        $sql = "UPDATE items SET iname = '$iname',idate = '$idate',itarget = '$itarget',idesc = '$idesc',capacity = '$capacity' WHERE item_id = '$id'";
        $result = $this->conn->query($sql);
        if($result == TRUE){
            header('location:admin.php');
        }else{
            die("ERROR: ".$this->conn->error);            
        }

    }

    function update_item_img($id,$img){
        $sql = "UPDATE items SET iimg = '$img' WHERE item_id = '$id'";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            return 1;
        }else{
            return 0;
        }

    }

    function delete_item($id){
        $sql = "DELETE FROM items WHERE item_id = '$id'";
        $result = $this->conn->query($sql);
        if($result == TRUE){
            header('location:admin.php');
        }else{
            die("ERROR: ".$this->conn->error);
        }

    }

    function upload_itemImg($id,$img){
        $sql = "UPDATE items SET iimg = '$img' WHERE item_id = '$id'";
        $result = $this->conn->query($sql);
        if($result ==TRUE){
            return 1;
        }else{
            return 0;
        }

    }

    function get_one_item($id){
        $sql = "SELECT * FROM items WHERE item_id = '$id'";
        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            return $result->fetch_assoc();
        }else{
            echo " detected";
        }

    }


    // Cart-related

    function add_to_cart($user_id,$item_id,$act1,$act2){
        $sql = "INSERT INTO cart(user_id,item_id,act_id1,act_id2) VALUES('$user_id','$item_id','$act1','$act2') ";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            header('location:eventlistUI.php');
        }else{
            die("ERROR: ".$this->conn->error);
        }

    }

    function get_user_cart_items($id){
        $sql = "SELECT * FROM cart INNER JOIN items ON cart.item_id = items.item_id WHERE cart.user_id = '$id'";
        $result = $this->conn->query($sql);

        if($result->num_rows>0){
            $array = array();
            while($row = $result->fetch_assoc()){
                $array[] = $row;
            }
            return $array;
        }else{
            return FALSE;
        }

    }

    function get_event_cart_items($item_id){
        $sql = "SELECT * FROM cart INNER JOIN items ON cart.item_id = items.item_id INNER JOIN users ON cart.user_id = users.user_id  WHERE cart.item_id = '$item_id'";
        $result = $this->conn->query($sql);

        if($result->num_rows>0){
            $array = array();
            while($row = $result->fetch_assoc()){
                $array[] = $row;
            }
            return $array;
        }else{
            return FALSE;
        }

    }


    function remove_item($cart_id){
        $sql = "DELETE FROM cart WHERE cart_id = '$cart_id'";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            header('location:eventlistUI.php');
        }else{
            die("ERROR: ".$this->conn->error);
        }

    }

    function get_user_purchased_items($id){
        $sql = "SELECT * FROM cart INNER JOIN items ON cart.item_id = items.item_id WHERE cart.user_id = '$id' AND cart.payment = 'PAID'";
        $result = $this->conn->query($sql);

        if($result->num_rows>0){
            $array = array();
            while($row = $result->fetch_assoc()){
                $array[] = $row;
            }
            return $array;
        }else{
            return FALSE;
        }

    }

    function read_user_cart_items($id){
        $sql = "SELECT * FROM cart INNER JOIN items ON cart.item_id = items.item_id WHERE cart.user_id = '$id' ORDER BY idate";
        $result = $this->conn->query($sql);

        if($result->num_rows>0){
            $array = array();
            while($row = $result->fetch_assoc()){
                $array[] = $row;
            }
            return $array;
        }else{
            return FALSE;
        }

    }

    function get_all_cart_items(){
        $sql = "SELECT * FROM cart INNER JOIN items ON cart.item_id = items.item_id INNER JOIN users ON cart.user_id = users.user_id ORDER BY idate";
        $result = $this->conn->query($sql);

        if($result ->num_rows>0){
            $array = array();
            while($row = $result->fetch_assoc()){
                $array[] = $row;
            }
            return $array;
        }else{
            return FALSE;
        }

    }


    function read_user_item_condition($id,$item_id){
        $sql = "SELECT * FROM cart INNER JOIN items ON cart.item_id = items.item_id WHERE user_id = '$id' AND event_id ='$item_id'";
        $result = $this->conn->query($sql);

        if($result->num_rows>0){

         $row = $result->fetch_assoc();
         return $row['reservation'];
                
       
        }else{
            return FALSE;
        }

    }

    function read_user_item($id,$item_id){
        $sql = "SELECT * FROM cart INNER JOIN items ON cart.item_id = items.item_id WHERE user_id = '$id' AND event_id ='$item_id'";
        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            return $result->fetch_assoc();
        }else{
        }

    }



    function get_one_cart_item($cart_id){
        $sql = "SELECT * FROM cart INNER JOIN items ON cart.item_id = items.item_id INNER JOIN users ON cart.user_id = users.user_id WHERE cart_id = '$cart_id'";
        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            return $result->fetch_assoc();
        }else{
            echo "no data detected";
        }

    }


    function finalize($id){
        $sql = "UPDATE cart SET payment = 'PAID' WHERE user_id = '$id'";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            echo "payment done";
        }else{
            die("ERROR: ".$this->conn->error);
        }
    }

    function update_cart_item($cart_id,$act_id1,$act_id2){
        $sql = "UPDATE cart SET act_id1 = '$act_id1', act_id2 = '$act_id2' WHERE cart_id = '$cart_id'";
        $result = $this->conn->query($sql);

        if($result == TRUE){
            header('location:eventlistUI.php');
        }else{
            die("ERROR: ".$this->conn->error);
        }
        

    }

        // activities CRUD
        function add_event($event_id,$aname,$adesc,$capacity){
            $sql = "INSERT INTO activities(event_id,aname,adesc,capacity)VALUES('$event_id','$aname','$adesc','$capacity')";
            $result = $this->conn->query($sql);
            if($result == TRUE){
                echo "<div class = 'alert alert-success mx-3'>";
                echo "Your activities added successfully.";
                echo "</div>";
                }else{
                die("ERROR: ".$this->conn->error);
            }
    
        }
    
        function read_activities($event_id){
            $sql = "SELECT * FROM activities WHERE event_id='$event_id'";
            $result = $this->conn->query($sql);
            if($result->num_rows>0){
                $array = array();
                while($row = $result->fetch_assoc()){
                    $array[] = $row;
                }
                return $array;
            }else{
                return FALSE;
            }
        
        }
    
    
        function update_act($aname,$adesc,$capacity, $id){
            $sql = "UPDATE activities SET aname = '$aname',adesc = '$adesc',capacity = '$capacity' WHERE act_id = '$id'";
            $result = $this->conn->query($sql);
            if($result == TRUE){
                header('location:admin.php');
            }else{
                die("ERROR: ".$this->conn->error);            
            }
    
        }
    
        function delete_act($id){
            $sql = "DELETE FROM activities WHERE act_id = '$id'";
            $result = $this->conn->query($sql);
            if($result == TRUE){
                header('location:admin.php');
            }else{
                die("ERROR: ".$this->conn->error);
            }
    
        }
    
        function upload_actImg($id,$img){
            $sql = "UPDATE activities SET img = '$img' WHERE act_id = '$id'";
            $result = $this->conn->query($sql);
            if($result ==TRUE){
                return 1;
            }else{
                return 0;
            }
    
        }
    
        function get_one_act($id){
            $sql = "SELECT * FROM activities WHERE act_id = '$id'";
            $result = $this->conn->query($sql);
    
            if($result->num_rows == 1){
                return $result->fetch_assoc();
            }else{
                
            }
    
        }

        function count_act1($item_id,$act_id){
            $sql = "SELECT * FROM cart WHERE item_id = '$item_id' AND act_id1 = '$act_id'";
            $result = $this->conn->query($sql);

            if($result == TRUE){
                return $result->num_rows;
            }else{
                die("ERROR: ".$this->conn->error);
            }

        }

        function count_act2($item_id,$act_id){
            $sql = "SELECT * FROM cart WHERE item_id = '$item_id' AND act_id2 = '$act_id'";
            $result = $this->conn->query($sql);

            if($result == TRUE){
                return $result->num_rows;
            }else{
                die("ERROR: ".$this->conn->error);
            }

        }


        // articles

        function read_articles(){
            $sql = "SELECT * FROM articles ORDER BY art_id DESC";
            $result = $this->conn->query($sql);
    
            if($result->num_rows>0){
                $row = array();
                while($rows = $result->fetch_assoc()){
                    $row[] = $rows;
                }
                return $row;
            }else{
                return FALSE;
            }
        }
    
        function add_article($art_date,$art_desc){
            $sql = "INSERT INTO articles(art_date,art_desc)VALUES('$art_date','$art_desc')";
            $result = $this->conn->query($sql);
            if($result == TRUE){
                echo "<div class = 'alert alert-success mx-3'>";
                echo "Your article posted successfully.";
                echo "</div>";
                }else{
                die("ERROR: ".$this->conn->error);
            }
    
        }

        function get_one_article($id){
            $sql = "SELECT * FROM articles WHERE art_id = '$id'";
            $result = $this->conn->query($sql);
    
            if($result->num_rows == 1){
                return $result->fetch_assoc();
            }else{
                header('location:admin.php');
            }
    
        }
    

        function delete_article($id){
            $sql = "DELETE FROM articles WHERE art_id = '$id'";
            $result = $this->conn->query($sql);
            if($result == TRUE){
                header('location:admin.php');
            }else{
                die("ERROR: ".$this->conn->error);
            }
    
        }

        function update_article($art_desc, $id){
            $sql = "UPDATE articles SET art_desc = '$art_desc' WHERE art_id = $id";
            $result = $this->conn->query($sql);
            if($result == TRUE){
                header('location:admin.php');
            }else{
                die("ERROR: ".$this->conn->error);            
            }
    
        }


    
    

}





?>