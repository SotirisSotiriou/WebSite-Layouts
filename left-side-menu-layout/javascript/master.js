// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
        
function scrollFunction() {
    //Get the scroll button
    var scrollToTop = document.getElementById("scroll-to-top");

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTop.style.display = "block";
    } else {
        scrollToTop.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; //For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function setActive(selected){
    var menu = document.getElementById("menu");
    var menuItems = menu.getElementsByTagName("a");
    for(var i=0; i<menuItems.length; i++){
        menuItems[i].classList.remove('selected-menu-item');
        menuItems[i].classList.add('not-selected-menu-item');
    }

    selected.classList.remove('not-selected-menu-item');
    selected.classList.add('selected-menu-item');
}
