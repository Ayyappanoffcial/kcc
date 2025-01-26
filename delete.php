<html>
    <head>
        <style>
            body { 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    font-family: sans-serif; 
    line-height: 1.5; 
    min-height: 100vh; 
    background: #f3f3f3; 
    flex-direction: column; 
    margin: 0; 
    background-image: url(leaf.jpg);
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
 /*argin-top: 15px; 
    margin-bottom: 15px; 
    border: none; 
    color: white; 
    cursor: pointer; 
    background-color: #4CAF50; 
    width: 100%; 
    font-size: 16px; *button { 
    padding: 15px; 
    border-radius: 10px; 
    m
} */
 input{
    margin-bottom: 15px; 
    border: none; 
    color: black; 
    cursor: pointer; 
    width: 100%; 
    font-size: 16px; 
    padding: 15px; 
    border-radius: 10px; 

 }
        </style>
    </head>
    <body bgcolor="white"text="white">
        <font size="6">
            <form action="Pdelete.php" method="post">
			    No:<input type="text"name="no"/></br>
               <br/> Game:<input type="text"name="game"/></br>
               
               <br> <br/><input type="submit"value="DELETE"/>
            </form>
        
        </font>

        
    </body>
</html>