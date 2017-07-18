<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">
    <title> calculator </title>
    <link rel="stylesheet" href="style3.css">
    <script type="text/javascript" src="jquery.js"></script>
</head>

<body>
    <em><h1>Калькулятор на PHP + JS</h1></em>
    <div id="calculator">
        <form method="post">
            <input type="text" id="result" value="" placeholder="Введите выражение" disabled/>
            <br>
            <input class="but" type="button" value="7" onclick="addtoscreen('7')" />
            <input class="but" type="button" value="8" onclick="addtoscreen('8')" />
            <input class="but" type="button" value="9" onclick="addtoscreen('9')" />
            <input class="but" type="button" value="+" onclick="addtoscreen('+')" />
            <br>
            <input class="but" type="button" value="4" onclick="addtoscreen('4')" />
            <input class="but" type="button" value="5" onclick="addtoscreen('5')" />
            <input class="but" type="button" value="6" onclick="addtoscreen('6')" />
            <input class="but" type="button" value="-" onclick="addtoscreen('-')" />
            <br>
            <input class="but" type="button" value="1" onclick="addtoscreen('1')" />
            <input class="but" type="button" value="2" onclick="addtoscreen('2')" />
            <input class="but" type="button" value="3" onclick="addtoscreen('3')" />
            <input class="but" type="button" value="*" onclick="addtoscreen('*')" />
            <br>
            <input class="but" type="button" value="C" onclick="addtoscreen('C')" />
            <input class="but" type="button" value="0" onclick="addtoscreen('0')" />
            <input id="eq" type="button" value="=" name="equal" />
            <input class="but" type="button" value="/" onclick="addtoscreen('/')" />
        </form>
    </div>

    <script type="text/javascript">
        var box = document.getElementById('result');

        function addtoscreen(x) {
            box.value += x;
            if (x === 'C') {
                box.value = '';
            }
        }



        $(document).ready(function() {
            $('#eq').bind("click", function() {
                var b = $('#result');
                $.get("http://localhost/calc.php?equal=" + encodeURIComponent(b.val()), function(data) {
                    $('#result').val(data);
                });


            });


        })
    </script>

</body>

</html>
