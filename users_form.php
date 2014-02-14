<!DOCTYPE html>
<html>
<head>
<title>users</title>
<style type="text/css">
body {
	background-color: #BCBCBC;
	position: absolute;
}
#wrap{
	margin:auto;
	width:150px;
	
}

</style>
</head>
<body>
<form action="users_sql.php" method="post">
    
     <div id="wrap">
        <ol>
          <li>UserID:
            <input name="UserID" type="text" >
          </li>
          <br>
          <li>   Username:
            <input name="Username" type="text" > 
          </li>  
          <br>
          <li>   Password:
            <input name="Password" type="pwd" > 
          </li>   
          <br>
          <li>Name:    
            <input name="Name" type="text" >
          </li>   
          <br>
          <li>Address1:  
            <textarea name="Address1" cols="" rows=""></textarea>
          </li>
          <br>
          <li> Address2:      
            <textarea name="Address2" cols="" rows=""></textarea></li>
         
            <br>
          <li>City:          
            <input name="City" type="text" >
          </li>  
          <br>
          <li>State:         
            <input name="State" type="text" >
          </li>  
          <br>
          <li>Pincode:   	 
            <input name="Pincode" type="text" >
          </li>  
          <br>
          <li>Datecreated:	 
            <input name="Datecreated" type="text" >
          </li>  
          <br>
          <li>Datemodified:  
            <input name="Datemodified" type="text" >
          </li>  
          <br>
          <li>  Status:        
            <input name="Status" type="text" >
          </li>
          
        </ol>
        <input type="submit">
      </div>
      
</form>
</body>
</html>