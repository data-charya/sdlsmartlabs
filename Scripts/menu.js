let menu = document.querySelector(".menu");
let nav = document.querySelector("nav");
menu.addEventListener("click", show_menu);

function toggle_class(element, class_name){
    element.classList.toggle(class_name)
}

function show_menu(){
    let [rect1,rect2,rect3] = menu.children;
    toggle_class(rect1,"flip1");
    toggle_class(rect2,"hide");
    toggle_class(rect3,"flip2");
    toggle_class(nav,"slide");
}