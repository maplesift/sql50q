<?php
/**
 * 1:建立資料庫的連線變數
 * 
 * @param string $db 資料庫名稱
 * @return object
 */
function pdo($db){
    $dsn="mysql:host=localhost;charset=utf8;dbname=$db";
    $pdo=new PDO($dsn,'root','');
    return $pdo;
}

/** 
 *  2:回傳指定資料表的所有資料
 *  @param string $table 資料表名稱
 *  @return array
 * 
*/
function all($table){
    $pdo=pdo('sql50q');
    $sql= "select * from $table";
    $rows=$pdo->query($sql)->fetchALL(PDO::FETCH_ASSOC);
    return $rows;
}

/**
 *  3:回傳指定資料表的特定id的單筆資料
 *  @param string $table 資料表名稱
 *  @param integer $id || array $id 資料表id
 *  @return array
 * 
*/
function find($table,$id){
    $sql="select * from $table where ";
    $pdo=pdo('crud');

    if(is_array($id)){
        $tmp=[];
        foreach($id as $key => $value){
            //sprintf("`%s`='%s'",$key,$value);
            $tmp[]="`$key`='$value'";
        }
        $sql=$sql.join(" && ",$tmp);
        
    }else{
        $sql=$sql . " `id`='$id'";
    }
    $row=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    
    return $row;
}


/**
 * 列出陣列內容
 */
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}



?>