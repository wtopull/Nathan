/**
 * Created by Administrator on 2017/6/14.
 */
function move(obj,step,stopValue,attr,fn){
    var dir = stopValue > parseInt(getStyle(obj,attr)) ? step : -step;
    clearInterval(obj.timer);
    obj.timer = setInterval(function () {
        var speed = parseInt( getStyle(obj,attr)) + dir;
        if(speed >= stopValue && dir > 0  || speed <= stopValue && dir < 0){
            speed = stopValue;   //500
        }
        obj.style[attr] = speed + "px";
        if(speed == stopValue){
            clearInterval(obj.timer);
            //有回调函数就执行，没有函数就不执行       undefined  为假
			 if(fn){fn();}
            //fn && fn();  && 如果发现一个为假，就不会再判断后面的内容
        }
    },30);

}
//定以一个函数，返回元素的样式
function getStyle(obj,attr) {
    return  obj.currentStyle ? obj.currentStyle[attr] : getComputedStyle(obj)[attr];
}