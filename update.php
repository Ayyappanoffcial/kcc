<html>
    <head>
        <style>
            body { 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    font-family: sans-serif; 
    line-height: 1; 
    min-height: 100vh; 
    background: #f3f3f3; 
    flex-direction: rows; 
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
    width: 180px;
    height: 30px; 
    font-size: 16px; 
    padding: 15px; 
    border-radius: 10px; 
    float: right;
  
 }
 h1{
    position: absolute;
    top: 1%;
    border: 2px solid white;
    
 }
        </style>
        <h1>UPDATE RECORDS</h1>
    </head>
    <body bgcolor="white"text="white">
        <font size="6">
            <form action="newupdate.php" method="post">
			    No:<input type="text"name="no"/></br>
               <!-- <br/> Name:<input type="text"name="name"/></br> -->
               
               <br/>Game:<input type="text"name="game"/></br>
               <br/> Runs:<input type="text"name="runs"/></br>
               <br/> Balls:<input type="text"name="balls"/></br>
               <br/> wickets:<input type="text"name="wickets"/></br>
                <br/>Overs:<input type="text"name="overs"/></br>
               <br> <br/><input type="submit"value="UPDATE"/>
            </form>
        
        </font>

        
    </body>
</html>