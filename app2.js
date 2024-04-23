let scrollContainer = document.querySelector(".et2");

scrollContainer.addEventListener("wheel",(evt) => {
    evt.preventDefault();
    scrollContainer.scrollLeft += evt.deltaY;
});


let del = document.getElementById("del");
let del1 = document.getElementById("del1");
del1.classList.add("hide");

del.addEventListener("click", ()=>{
    del1.classList.toggle("hide");
})