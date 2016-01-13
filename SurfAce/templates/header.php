<!DOCTYPE html>

<html>

    <head>

        <link href="public/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="public/css/bootstrap-theme.min.css" rel="stylesheet"/>
        
        <link href="public/css/styles.css" rel="stylesheet"/>
        <link href='http://fonts.googleapis.com/css?family=Lily+Script+One' rel='stylesheet' type='text/css'>
        <?php if (isset($title)): ?>
            <title>Surf-ace: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Surf-ace</title>
        <?php endif ?>

        <script src="public/js/jquery-1.10.2.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
        <script src="public/js/scripts.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>
            function addnavname(str) {
     if (str.length == 0) { 
         document.getElementById("name").innerHTML = "";
         return;
     } else {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  
                 $("#nav").text(xmlhttp.responseText);
                 
             }
         }
         xmlhttp.open("GET", "navbar_update.php?q="+str, true);
         xmlhttp.send();
         $("#title").click();
     }
}

        function addpillname(str) {
        
     if (str.length == 0) { 
         document.getElementById("pill").innerHTML = "";
         return;
     } else {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                  
                 $("#pill").text(xmlhttp.responseText);
             }
         }
         xmlhttp.open("GET", "navpill_update.php?q="+str, true);
         xmlhttp.send();
         $("#title").click();
     }
 }
 
        
        </script>
        
    </head>

    
