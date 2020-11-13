function displayDate()
{
    document.getElementById("demo").innerHTML=Date();
}

window.onload = function() {
    var btn = document.getElementById("myButton");
    btn.onclick = displayDate;
}
