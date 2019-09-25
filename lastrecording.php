<html>
<body style="font-family: arial; font-size: 14px; width: 325px; text-align: center;">
<h2 style="width: 325px; font-family: arial; color: #791213;">Latest %s Commentary</h2>
<h3 style="width: 325px; font-family: arial; color: #791213;">For %s</h3>
<div id="txtHint"></div>
<div align="center">
    <audio controls><source src="%s.mp3"></audio>
</div>
</body>
<script>
        document.getElementById("txtHint").innerHTML = "";
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
          }
        };
        xmlhttp.open("GET", "http://gbacct.hfpintranet.appspot.com/lastjson", true);
        xmlhttp.send();
</script>
</html>
