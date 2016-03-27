
function loadPageAssets() {

}

function imageHover(img) {
    var path = img;
    path = path + "_Hover.png";
    path = "http://46.101.18.121/SVRPGOrder/img/" + path;
    document.getElementById(img).src = path;
}

function imageUnHover(img) {
    document.getElementById(img).src = "http://46.101.18.121/SVRPGOrder/img/" + img + ".png";
}
