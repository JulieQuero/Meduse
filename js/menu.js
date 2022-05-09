function showMenu() {
  var menu = document.getElementById("topnav_menu");
  var icon = document.getElementById("menu");
  var root = document.getElementById("root");
  if (menu.className === "") {
    menu.className = "open";
    icon.className = "open";
    menu.style.display = "none";
  } else {
    menu.className = "";                    
    icon.className = "";
    menu.style.display = "flex";
  }
}