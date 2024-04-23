let boxes = document.querySelectorAll('.box');
boxes.forEach(box => {
    box.onmousemove = function(e){
        let boxX = e.pageX - box.offsetLeft;
        let boxY = e.pageY - box.offsetTop;

        box.style.setProperty("--x",boxX+'px');
        box.style.setProperty("--y",boxY+'px');
    }
})


