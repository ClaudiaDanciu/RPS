
<!DOCTYPE html>
<html>
<head>     
   <link href="rsp.css" rel="stylesheet" type="text/css"/>
   
   <meta charset="UTF-8">
   <title>RSP</title>
   <link href="https://fonts.googleapis.com/css?family=Caveat|Open+Sans:400,700" rel="stylesheet">
    
</head>
        <h1>Welcome! Let's play Rock, Paper, Scissors!</h1>
        <br> 
        
          <span class="warning" style="align-content: center">Please chose one</span>
        <h4>Are you ready to play?</h4>      
        <div id="game">
 
            <fieldset action="">
            <img src='Rock.png' alt="Rock" id='rock' class="choice" onclick="game('rock');" />
            <img src='Paper.png' alt="Paper" id='paper' class="choice" onclick="game('paper');" /> 
            <img src='Scissors.png' alt="Scissors" id='scissors' class="choice" onclick="game('scissors');" />
            
            <p id="results"></p>
            <p id="txtHint"></p>
            <h1 id="score">wins: 0</h1>
            <br>
            </fieldset>
            
        </div>
    
   
  <br>
  
  <br>
 <script>
                function game(str) {
                    
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function()   {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("txtHint").innerHTML = "You chose " + this.responseText;
                           keepScore(this.responseText);
                       }
                    }

                    xhttp.open("GET", "io.php?q=" +str, true);
                    xhttp.send();
                }

                var score = 0;
                
                function keepScore(responseText) {
                    console.log (score);
 
                    var result = responseText.split ("<br />");
                    if (result[2] == "You Win!") { 
                      document.getElementById("score").innerHTML = 'Wins: '+(++score);
                    
                  }
              }
                  
</script>

   

</html>