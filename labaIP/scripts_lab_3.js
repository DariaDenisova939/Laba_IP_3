let numberImage=1;
const countImage=3;
const pathImages = "labaIP/images/gallery/";
const countDiv = 50;
const speed = 100;
function generateImg(){
    let widthDiv = 700/countDiv;
    let image = pathImages+"1"+numberImage+".jpg";
    for(let i=0; i<countDiv; i++){
        let item = $("<div></div>");
        item.addClass("elementImg");
        item.css("width", widthDiv+"px");
        item.css("background-image", 'url('+image+')');
        item.css("background-position-x", - i * widthDiv+"px");
        $("#mainImage").append(item);
    }
}
function changeImage()
{
    let image = pathImages+"1"+numberImage+".jpg";
    let i = 1;
    $( "#mainImage div").each(function () {
        $(this).fadeOut(speed*i, function () {
            $(this).css("background-image", 'url('+image+')');
            $(this).fadeIn(speed*i);
        });
        i++;
    });
}
function leftChangeImg()
{
    if(numberImage > 1)
        numberImage--;
    else
        numberImage = countImage;

    changeImage()
}
function rightChangeImg()
{
    if(numberImage < countImage)
        numberImage++;

    else
        numberImage = 1;
    changeImage()

}
$(document).ready(function (){
    generateImg();
});