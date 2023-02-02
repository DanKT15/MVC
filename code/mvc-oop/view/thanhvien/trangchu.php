<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/6820/6820958.png">
    <title>Trang chu</title>
    <style>
        /* Center the loader */
        #loader {
            width: 200px;
            height: 200px;
            position: fixed;
            left: 50%;
            z-index: 100;
            top: 50%;
            background-image: url(https://1.bp.blogspot.com/-7nwWui2gkWU/XvIXnxIvexI/AAAAAAAANUQ/9ktSSsCMAzweuSICVFJZc7VT4SXN55e2ACLcBGAsYHQ/s1600/Preloader_1.gif);
            background-repeat: no-repeat;
            background-position: center;
            background-size: 30px 30px;
            margin: -100px 0 0 -100px;
        }
        
        /* Add animation to "page content" */
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s;
            margin-top: 100px;
        }
        
        @-webkit-keyframes animatebottom {
            from { bottom:-100px; opacity:0 } 
            to { bottom:0px; opacity:1 }
        }
        
        @keyframes animatebottom { 
            from{ bottom:-100px; opacity:0 } 
            to{ bottom:0; opacity:1 }
        }
        
        #myDiv {
            display: none;
            text-align: center;
        }

        </style>
</head>
<body onload="myFunction()" style="margin:0;">


        <div id="loader"></div>
        
        <div style="display:none;" id="myDiv" class="animate-bottom">


            <h1>Trang Chủ</h1>

            <a href="index.php?controller=thanh-vien&action=list">Xem thanh vien</a><br>
            <a href="index.php?controller=thanh-vien&action=add">Them thanh vien</a><br>
            <a href="index.php?controller=thanh-vien&action=edit">Sua thanh vien</a><br>
            <a href="index.php?controller=thanh-vien&action=delete">Xoa thanh vien</a><br>


        </div>

        
        <script>
        var myVar;
        
        function myFunction() {
          myVar = setTimeout(showPage, 1500);
        }
        
        function showPage() {
          document.getElementById("loader").style.display = "none";
          document.getElementById("myDiv").style.display = "block";
        }
        </script>
</body>
</html>