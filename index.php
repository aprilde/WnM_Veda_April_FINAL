<!doctype html>
<html lang="en">
  <head>
          <? include 'head.php' ?>
    <style>
      body{
background-color: #ee4540;
      }

      text{
        font-family: sans-serif;
        font-size: 8;
        color: whitel 

      }

      div.tooltip {	
    position: absolute;			
    text-align: center;			
    width: 60px;					
    height: 28px;					
    padding: 2px;				
    font: 12px sans-serif;		
    background: lightsteelblue;	
    border: 0px;		
    border-radius: 8px;			
    pointer-events: none;			
}

    </style>
  
  </head>

  <body>
      <button id="Combined">Combined spending</button>
    <button id="Volume">Volume of spending</button>
    <button id="Kind">Kind of spending</button>

    <div id="chart"></div>

    <script src="bubble.js"></script>
  </body>

  </html>