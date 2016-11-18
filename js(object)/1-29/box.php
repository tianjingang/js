<meta charset="utf-8">
长:<input type="text" name="length" />
宽:<input type="text" name="width" />
<div id="div1"></div>
<button onclick="fang()">计算</button>
<script>
    function fang(){
    var length=document.getElementsByName('length')[0].value;
    var width=document.getElementsByName('width')[0].value;
    var ajax=new XMLHttpRequest();
        ajax.open('get','form.php?length='+length+'&width='+width);
        ajax.send();
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4&ajax.status==200){
                document.getElementById('div1').innerHTML=ajax.responseText;
            }
        }
    }
</script>

