<!DOCTYPE html>
<html>
<heade>
    <title>Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>

        function ajax() {
            $('#information').text('Hello World');
        }

       $(document).ready(function () {
           $("#load").bind("click",function () {
               $.ajax ({
                   url: "content.php",
                   type: "GET",
                   beforeSend: ajax

               });
           });
       })
    </script>
</heade>
<body>
<p id="load" style="cursor: pointer;">ok</p>
<div id="information"></div>
</body>
</html>