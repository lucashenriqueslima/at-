<?php 

    namespace Source\Models;

    use Source\OracleBD;
    use PDO;


    class User
    {   
        public static function login($login, $passwd)
        {  
            $sql_pdo = new PDO('oci:dbname=DADOUNDG', 'unisys', 'unisys');  
            $sql_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $stmt = $sql_pdo->prepare("SELECT * FROM tcadusr0001 WHERE US_USUARIO = ? AND US_SENHA = ? OR US_CPF = ? AND US_SENHA = ?");  
            $stmt->execute(array($login, $passwd, $login, $passwd));  
            $arr = array();  
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
            {  
                $arr[] = $row;  
            }  

            return $arr;
        }

        public static function usersTable()
        {  

            $sql_pdo = new PDO('oci:dbname=DADOUNDG', 'unisys', 'unisys');  
            $sql_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $stmt = $sql_pdo->prepare("SELECT * FROM tcadusr0001");  
            $stmt->execute();  
            $arr = array();  
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
            {  
                $arr[] = $row;  
            }  
        
            return $arr;
        }

        public static function usersEdit($id)
        {  

            $sql_pdo = new PDO('oci:dbname=DADOUNDG', 'unisys', 'unisys');  
            $sql_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $stmt = $sql_pdo->prepare("SELECT * FROM tcadusr0001 WHERE US_CODIGO = ?");  
            $stmt->execute(array($id));  
            $arr = array();  
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
            {  
                $arr[] = $row;  
            }  
        
            return $arr;
        }
    }