const menu = document.querySelector('.hamburger');
const navheight = document.querySelector('nav');
const navbar = document.querySelector('ul');

menu.addEventListener('click',()=>{
    menu.classList.toggle("change");
    navheight.classList.toggle("navbar");
    navbar.classList.toggle("listItem");

});






var html = document.getElementById('html');
var css = document.getElementById('css');
var javascript = document.getElementById('javascript');
var php = document.getElementById('php');
var htmlwidth = 0;
var csswidth = 0;
var javascriptwidth = 0;
var phpwidth = 0;


function gohtml () {
    if (htmlwidth >= 90) {
        clearInterval(htmlset);

    }

    html.style.width = htmlwidth+'%';
    htmlwidth = htmlwidth + 1;
    html.innerHTML = htmlwidth - 1+" %";
}
var htmlset = setInterval(gohtml , 10);



function gocss () {
    if (csswidth >= 90) {
        clearInterval(cssset);

    }

    css.style.width = csswidth+'%';
    csswidth = csswidth + 1;
    css.innerHTML = csswidth - 1+" %";
}



var cssset = setInterval(gocss , 10);




function gojavascript () {
    if (javascriptwidth >= 85) {
        clearInterval(javascriptset);

    }

    javascript.style.width = javascriptwidth+'%';
    javascriptwidth = javascriptwidth + 1;
    javascript.innerHTML = javascriptwidth - 1+" %";
}

var javascriptset = setInterval(gojavascript , 10);


function gophp () {
    if (phpwidth >= 50) {
        clearInterval(phpset);

    }

    php.style.width = phpwidth+'%';
    phpwidth = phpwidth + 1;
    php.innerHTML = phpwidth - 1+" %";
}

var phpset = setInterval(gophp , 10);
