let slideIndex = 0;
        showSlides();



function showSlides() {
    let i;
    let slideElement = document.getElementById('slide');
    let items = slideElement.getElementsByClassName('item');
    for (i = 0; i < items.length; i++) {
        items[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > items.length) {
        slideIndex = 1
    }    
 
    items[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 1000); // Change image every 2 seconds
}


