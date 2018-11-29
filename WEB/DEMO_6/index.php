<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AJaX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="https://bootswatch.com/4/lux/bootstrap.min.css" />
    <script>
    function showSuggestion(str){
        if(str.length==0){
            document.getElementById('output').innerHTML='';
        }
        else{
            //AJAX REQ
            var xhttp=new XMLHttpRequest();
            xhttp.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200){
                    document.getElementById('output').innerHTML=this.responseText;
                }
            }
            xhttp.open("GET", "suggest.php?q="+str,true);
            xhttp.send();
        }
    }
    </script>
</head>
<body>
    <div class="container">
    <h1>Search User</h1>
    <form>
    Search User : <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
    </form>
    <p>Suggestion: <span id="output" style="font-weight:bold"></span></p>
    </div>
</body>
</html>