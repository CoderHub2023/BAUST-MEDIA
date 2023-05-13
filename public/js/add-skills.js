function addTextInput() {
    var x = document.createElement("INPUT");
    x.setAttribute("type", "text");
    x.setAttribute("name", "textInput");
    x.setAttribute("placeholder", "You Just added a text field");
    x.setAttribute("border", "cyan");
    x.setAttribute("margin", "8px");
    document.getElementById("myForm").appendChild(x)
}
