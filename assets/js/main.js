$(document).ready(function(){
    $('.carousel-area').owlCarousel({
        items:1,
        loop:true,
        autoplay:true,
        nav:false,
        dots:true,
    })
    $('.left--area').owlCarousel({
        items:1,
        loop:true,
        autoplay:true,
        nav:false,
        dots:true,
    })   
    $('.product-carousel-area').owlCarousel({
        items:4,
        loop:true,
        margin:10,
        autoplay:true,
        nav:false,
        dots:true,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                dots:false,
            },
            600:{
                items:3,
                dots:false,
            },
            1000:{
                items:4,
                loop:false
            }
        }
    })
})
/* End of Owl Carousel JS Code */
/* Toggle Menu JS Code */
const menuArea = document.querySelector('.menu-area');
const closeBtn = document.querySelector('.close-btn');
const bars     = document.querySelector('.bars');
const overlay  = document.querySelector('.overlay');
bars.onclick = function(){
    menuArea.classList.toggle('active');
    overlay.classList.toggle('active');
}
closeBtn.onclick = function(){
    menuArea.classList.remove('active');
    bars.style.color = "#333";
    overlay.classList.remove('active');
}
overlay.onclick = function(){
    this.classList.remove('active');
    menuArea.classList.remove('active');
}
/* Toggle Menu JS Code End */

/* toggle search JS Code start */
const openSearch = document.querySelector('#search-shop');
const searchArea = document.querySelector('.search-area');
const closeSearch = document.querySelector('.close-search');
openSearch.onclick = function(){
    searchArea.classList.toggle('active');
    closeSearch.classList.toggle('active');
    overlay.classList.toggle('active');
}
closeSearch.onclick = function(){
    searchArea.classList.remove('active');
    overlay.classList.remove('active');
}
// End of toggle search js code

// Start of fixed navbar js code
const headerBottom = document.querySelector('.header-bottom');
window.addEventListener('scroll', function(){
    const customOffset = window.pageYOffset;
    if (customOffset > 200) {
    	document.body.style.paddingTop = headerBottom.offsetHeight + 'px';
        headerBottom.classList.add('fixed-nav');
    }else{
        headerBottom.classList.remove('fixed-nav');
        document.body.style.paddingTop = 0;
    }
})
// End of fixed navbar code
// Toplink js code start
const  topLink = document.querySelector('.top-link-container > a');
window.addEventListener('scroll', function(){
    const pageYOffset = window.pageYOffset;
    if (pageYOffset > 500) {
        topLink.classList.add('active');
    }else{
        topLink.classList.remove('active');
    }
})
// End of toplink js code
/*Start of tab js code*/
var tabs = document.querySelectorAll('[data-tab-target]');
var tabContents = document.querySelectorAll('[data-tab-content]');
tabs.forEach(tab =>{
    tab.addEventListener('click', () => {
        const target = document.querySelector(tab.dataset.tabTarget);
        tabContents.forEach(tabcontent =>{
            tabcontent.classList.remove('active');
        });
        tabs.forEach(tab =>{
            tab.classList.remove('active');
        })
        tab.classList.add('active');
        target.classList.add('active');

    })
})
/*End of tab js code*/
// Increase and Descrease Code here
const plusBtn = document.querySelectorAll('.increase');
plusBtn.forEach(function(plus){
     plus.addEventListener('click', function(e){
        console.log(e.currentTarget.parentElement.Children[1]);
     })
})

// Using the selector inside the element
const questions = document.querySelectorAll('.question');
questions.forEach(function(question){
    const btn = question.querySelector('.question-btn');
    btn.addEventListener('click', function(e){
        questions.forEach(function(item){
            if (item !== question) {
                item.classList.remove('show-text');
            }
        });
        question.classList.toggle('show-text');
    });
});
//success message hide content js code
const success = document.querySelector('.success-insert');
window.addEventListener('DOMContentLoaded',function(){
    function messageHide(){
        success.style.opacity = '0';
        success.style.zIndex = '0';
        success.style.display = 'none';
    }
    setTimeout(messageHide, 2000);
})

// Favourite product js and ajax code 

