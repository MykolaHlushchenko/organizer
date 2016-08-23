<?php

    class ConnectionClass
    {
        public $servername = 'localhost';
        public $username = 'root';
        public $password = '';
        public $dbname = 'dborganizer'; 
        
        
        public function InsertSql($sql)
        {
            $connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            
            if($connection->connect_error){
                die ("Connection failed: " .$connection->connect_error);
            }
            
            if($connection->multi_query($sql) == TRUE){
                echo 'Database crated succsefully';
            }
            else{
                echo 'Database is not created' .$connection->error;
            }
            $connection->close();
        }
    }
//                $sql = "DROP TABLE task";
//                $sql = "CREATE TABLE task (task_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//                canseled BIT , 
//                completed BIT, 
//                priority INT,
//                userid INT(10) UNSIGNED NOT NULL, 
//                FOREIGN KEY (userid) REFERENCES user (user_id)
//                ON UPDATE CASCADE
//                ON DELETE RESTRICT,
//                organizerid INT(10) UNSIGNED NOT NULL,
//                FOREIGN KEY (organizerid) REFERENCES organizer (organizer_id)
//                ON UPDATE CASCADE
//                ON DELETE RESTRICT);";
                
                
                 //$sql = "INSERT INTO task(canseled, completed, priority, userid, organizerid)
                   //         VALUES(true, 'true', 2, 2, 2)";
                    
                    
                    //echo $task->userid;
                    //echo $mytask->userid;
                    //echo $mytask->priority;
            
       
//       $sql = "CREATE DATABASE dborganizer";
//      
//       
//       $sql = "CREATE TABLE user(user_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//               name VARCHAR(255) NOT NULL, 
//               lastname VARCHAR(255) NOT NULL, 
//               login VARCHAR(20) NOT NULL, 
//               password VARCHAR(20) NOT NULL);";
       
//       $sql = "CREATE TABLE organizer (organizer_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//                title VARCHAR(255) NOT NULL,
//                text VARCHAR(255) NOT NULL,
//                datecreate DATE);";
       
       
       
//        $sql = 'SELECT * FROM task';
      
//        if($connection->multi_query($sql) == TRUE){
//            echo 'Database crated succsefully';
//        }
//        else{
//            echo 'Database is not created' .$connection->error;
//        }
        
            
        
        
        
