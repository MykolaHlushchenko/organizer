<?php
    require_once 'Task.php';
    require_once 'Connection.php';
    
    echo 'Organizer<br>';
   
        
    
        class OrganizerClass
            {
                //public $mytask;
                                
                function _costruct()
                {
                    echo 'constructor work!';
                }
                
                public function addNewTask($task)
                {
                    $mytask = new TaskClass();
                    $myconnection = new ConnectionClass();
                    
                    $mytask = $task;
                    $myconnection->InsertSql("INSERT INTO task(canseled, completed, priority, userid, organizerid)
                                              VALUES($mytask->canseled, $mytask->completed, $mytask->priority, $mytask->userid, $mytask->organizerid);");
                }
                
                public function showTask()
                {
                                    
                }
                
                public function canselTask()
                {
                    echo 'canselTask';
                }
                
                public function addNewUser($newuser)
                {
                    $myconnection = new ConnectionClass();
                    $myuser = new UserClass();
                    $myuser = $newuser;
                    echo $newuser->name;
                    //$myconnection->InsertSql("INSERT INTO user(name, lastname, login, password) VALUES($newuser->name, $newuser->lastname, $newuser->login, $newuser->password);");
                    $myconnection->InsertSql("INSERT INTO user(name, lastname, login, password) VALUES('w', '$newuser->lastname', 'k', 'q');");
                    echo 'addNewUser';
                }
                
               
            }
