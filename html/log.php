<?php
      mysql_connect("localhost","root","");
      mysql_select_db("login" );
      
      if(isset($_POST['submit'])){
        session_start();
        $user=$_POST['Username'];
        $pass1=$_POST['Password1'];
        if($user=="admin" && $pass1=="admin"){
          header("location:admin.html");
        }
        else{
        $result=mysql_query("select * from log where login='".$user."' && password='".$pass1."'") or die("Failed select".mysql_error());
        if(mysql_num_rows($result)==1){
          $_SESSION['Username']=$user;
          header("location:index.html");
          
        }
        else{
          echo '<div class="kate">password kate</div>';
          $_SESSION['message']= "Username or Password is not correct";}
      }
    }
  ?>

