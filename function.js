var xmlhttp = false;
try{
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    alert("microsoft internet exploler");
}catch(e){
    try{
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        alert("Microsoft internet exploler");
    }catch (E){
        xmlhttp = false;
    }
}
if (!xmlhttp && typeof XMLHttpRequest != 'undefined'){
    xmlhttp = new XMLHttpRequest();
    alert("microsoft internet exploler");
}
var showCalendar = true;
function showHideCalendar(){
    var objID = "calendar";
    if(showCalendar == true){
        document.getElementById("opencloseimg").src = "mins.gif";
        var serverPage = "calendar.php";
        showCalendar = false;
        var obj = document.getElementById(objID);
        xmlhttp.open("GET",serverPage);
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                obj.innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.send(null);
    }
    else{
        document.getElementById("opencloseimg").src = "plug.gif";
        showCalendar = true;
        document.getElementById(objID).innerHTML = "";
    }
}
