<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Organizer</title>
    </head>
    <body>
        <h2>Organizer</h2>
        
        <form method='post'>
            Login<input type='text' name='login' /><br>
            Password<input type='text' name='pass'/><br>
            <input type='submit' value='Login' name='Login'/>
        </form>
        
        <div>
            <nav>
                <a href="#">AddTask</a>
                <a href="AddUser.html">AddUser</a>
                <a href="#">ShowTask</a>
            </nav>
        </div>
        
        <?php
        require_once 'Connection.php';
        require_once 'Task.php';
        require_once 'User.php';
        require_once 'Organizer.php';
        
               
                   
            $obj = new OrganizerClass();
            $task = new TaskClass();
            $user = new UserClass();
            
            if(isset($_POST['Login'])){
                echo "login"; 
//            $task->canseled = true;
//            $task->completed = true;
//            $task->priority = 10;
//            $task->organizerid = $_POST['login'];
//            $task->userid = $_POST['pass'];
            
//            $obj->addNewTask($task);
            }
            if(isset($_POST['send']))
            {
                $organizer = new OrganizerClass();
                $newuser = new UserClass();
                
                $newuser->name = $_POST['username'];
                $newuser->lastname = $_POST['userlastname'];
                $newuser->login = $_POST['userlogin'];
                $newuser->password = $_POST['userpassword'];
                
                $organizer->addNewUser($newuser);
            }
            $obj->showTask();
        ?>
        
       
    </body>
</html>
