const lightTheme = "styles/light.css";
const darkTheme = "styles/dark.css";

const link = document.getElementById("theme-link");
const btn = document.getElementById("theme-button");
var currTheme = link.getAttribute("href");


function Save(theme) {
    const Request = new XMLHttpRequest();
    Request.open("GET", "./themes.php?theme=" + theme, true); //У вас путь может отличаться
    Request.send();
}

btn.checked = currTheme === lightTheme;

btn.onclick = () => {
    currTheme = currTheme === lightTheme ? darkTheme : lightTheme;
    link.setAttribute("href", currTheme);
    Save(currTheme === lightTheme ? "light" : "dark");
    window.location.reload();
}