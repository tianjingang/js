<meta charset="utf-8">
边长:<input type="text" name="bian"/>
高:<input type="text" name="height"/>
<div id="div1"></div>
<button onclick="san()">计算</button>
<script>
    function san(){
        var bian=document.getElementsByName('bian')[0].value;
        var height=document.getElementsByName('height')[0].value;
        var ajax=new XMLHttpRequest();
        ajax.open('get','san.php?bian='+bian+'&height='+height);
        ajax.send();
        ajax.onreadystatechange=function(){
            if(ajax.readyState==4&ajax.status==200){
                document.getElementById('div1').innerHTML=ajax.responseText;
            }
        }
    }
</script>