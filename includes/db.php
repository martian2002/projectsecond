<?

function db(){
    return new PDO('mysql:host=localhost;dbname=last108', 'root', '');
}



function userReg($login,$name,$pass, $dirNamePhoto){
    $login = strip_tags($login) ;
    $name  = strip_tags($name) ;
    $pass  =  password_hash($pass, CRYPT_BLOWFISH) ;
    
    $db     = db();
    $query  = "INSERT INTO users (name, login, password) VALUES (?,?,?)";
    $create = $db->prepare($query);
    $result = $create->execute([$name,$login,$pass]);
    
    if($result):
        
        $userId = $db->lastInsertId();
        $imgA   = "INSERT INTO images (user_id, img_path, img_select) VALUES (?,?,?)";
        $imgB   = $db->prepare($imgA);
        $imgS   = $imgB->execute([$userId, $dirNamePhoto, 1]);
        
      return $result;  
    endif;
    
}

function userAuth($login,$pass){
    $db = db();
    $query = "SELECT * FROM users INNER JOIN images using(user_id) WHERE login=?";
    $select = $db->prepare($query);
    $select->execute([$login]);
    $user = $select->fetch(PDO::FETCH_ASSOC);
    
    if($user):
        
        if(password_verify($pass, $user['password'])):
        
        session_start();
        $_SESSION['id'] = $user['user_id'];
        
        return true;
        endif;
    endif;
}

function userInfo(){
    session_start();
    $db = db();
    $query = "SELECT login, name, img_path FROM users INNER JOIN images using(user_id) WHERE user_id=? and img_select=?";
    $select = $db->prepare($query);
    $select->execute([$_SESSION['id'], 1]);
    $result = $select->fetch(PDO::FETCH_ASSOC);
    
    return $result;
}

function editName($name){
    session_start();
    $db = db();
    $query = "UPDATE users SET name = ? WHERE user_id = ?";
    $update = $db->prepare($query);
    $result = $update->execute([$name, $_SESSION['id']]);
    return $result;
}

function editlogin($login){
    session_start();
    $db = db();
    $query = "UPDATE users SET login = ? WHERE user_id = ?";
    $update = $db->prepare($query);
    $result = $update->execute([$login, $_SESSION['id']]);
    return $result;
}

function editpass($pass){
    session_start();
    $pass  =  password_hash($pass, CRYPT_BLOWFISH);
    $db = db();
    $query = "UPDATE users SET password = ? WHERE user_id = ?";
    $update = $db->prepare($query);
    $result = $update->execute([$pass, $_SESSION['id']]);
    return $result;
}

?>