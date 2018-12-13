<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello</title>
</head>
<script language="javascript" type="text/javascript">
        function ajaxFunction(){
            var ajaxRequest;
            var i = 0;
            try {
                ajaxRequest = new XMLHttpRequest();
            } catch (error) {
                alert(error);
                return false;
            }

            ajaxRequest.onreadystatechange = function(){
                if(ajaxRequest.readyState == 4){
                    document.getElementById("time").innerHTML="hello" + i++;
                    
                }
            }
            window.setInterval(ajaxFunction(), 1000);
            ajaxRequest.open("GET", "timeServer.php", true);
            ajaxRequest.send(null);
            
        }
    </script>
<body>
    
    <form id="form"> 
        <div id="time" onload="ajaxFunction()"></div>
    </form>
</body>
</html>