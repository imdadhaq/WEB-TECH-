<?php


?>
<html>
    <head>
        <title>Ajax Calculator</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <style>
            body{
                background-size:100% 100%;
            }
            .but{
                
                font-weight: bold;
                justify-content:center;
                align-items:center;
                display:flex;
        
            }
          
            
            .table{
                width:400px;height:520px;
                box-shadow:0 0 10px 1px grey;

            }
            #display{
                width:inherit;
                font-size: 0.8rem;
                background-color:#303030;
                outline:none;
                border:none;
                padding:2px 0;
                color:white;
            }
            .layer1{
                width:inherit;
                height: 90px;
                display:flex;
                justify-content:center;

            }

            }
        </style>
        <script>
            $(document).ready(function(){
                //general
                $('input[type=button]').click(function(){
                    var num = $(this).val();
                    var old = $('#display').html();
                    //this will clear the screen
                    if( num === 'C' ){
                        $('#display').html('');
                        return;
                    }
                    if( num === '=' ){
                        $('#display').html(old);
                        return;
                    }
                    //var str = $('#display').val()+num;
                    $.ajax({
                            url:'ajax.php',
                            type: "POST",
                            data:{'action':'operation','num':num,'old':old},
                            success: function(msg){
                                $('#display').html(msg);
                            }
                        }).error(function(){
                            $('#display').html('Oops! An error occured');}
                           );
                });
                //equal button click
                $('#eql').click(function(){
                    var num = $('#display').html();
                    var old = $('#display').html();
                    $.ajax({
                            url:'ajax.php',
                            type: "POST",
                            data:{'action':'equal', 'num':num, 'old':old},
                            success: function(msg){
                                $('#display').html(msg);
                            }
                        }).error(function(){
                            $('#display').html('Oops! An error occured');}
                           );
                });
            });
        </script>
    </head>
    <body>
<div class="calcy">
<table id="table" align="center">
    <tr>
        <td colspan="5"><textarea id="display" class="display"></textarea></td>
    </tr>
    <div class="layer1">
    <tr>
        <td><input value="7" type="button" class="but"></td>
        <td><input value="8" type="button" class="but"></td>
        <td><input value="9" type="button" class="but"></td>
        <td><input id="plus" value="+" type="button" class="but"></td>
        <td><input id="cls" value="C" type="button" class="cls"></td>
    </tr>
        </div>
    <tr>
        <td><input value="4" type="button" class="but"></td>
        <td><input value="5" type="button" class="but"></td>
        <td><input value="6" type="button" class="but"></td>
        <td><input id="sub" value="-" type="button" class="but"></td>
        <td><input id="sqr" value="x2" type="button" class="but"></td>
    </tr>
    <tr>
        <td><input value="1" type="button" class="but"></td>
        <td><input value="2" type="button" class="but"></td>
        <td><input value="3" type="button" class="but"></td>
        <td><input id="mul" value="*" type="button" class="but"></td>
        <td><input id="per" value="%" type="button" class="but"></td>
    </tr>
    <tr>
        <td><input value="0" type="button" class="but"></td>
        <td><input id="dot" value="." type="button" class="but"></td>
        <td><input id="neg" value="+/-" type="button" class="but"></td>
        <td><input id="div" value="/" type="button" class="but"></td>
        <td><input id="div" value="=" type="button" class="but"></td>
    </tr>
    
</table>
        </div>

    </body>
</html>

