window.onload=function(){
    setTimeout(rld, 1000);
    changewidth();
}
function parabola(x){//viewport x;
    return  - 0.012 * Math.pow(x, 2) + 1.2*x;
}
function changewidth(){
    Array.prototype.forEach.call(document.getElementsByClassName("oh"), function(elm){
        var x = elm.getBoundingClientRect().top;
        x = x*100/window.innerHeight;
        var wid = parabola(x + 3.5);
        elm.style.width = Math.max(0, wid - 1)+"vh";
    });
}
function rld(){
    Array.prototype.forEach.call(document.getElementsByClassName("loader"), function(elm){
        elm.style.opacity=0;
        setTimeout(function(){
            elm.parentElement.removeChild(elm)
        }, 500);
    });
}
//85, 622