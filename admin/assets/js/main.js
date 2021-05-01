const bars = document.querySelector('.toggle-icon');
const hideSidebar = document.querySelector('.sidebar');
const overlay = document.querySelector('.overlay');
window.addEventListener('DOMContentLoaded', function(){
	bars.onclick = function(){
	hideSidebar.classList.toggle('active');
	overlay.classList.add('overlay-active');
	}
	overlay.onclick = function(){
	hideSidebar.classList.remove('active');
	this.classList.remove('overlay-active');
	}
});
// Fixed Nav js code
const nav = document.querySelector('.header-area');
window.addEventListener('DOMContentLoaded', function(){
	window.addEventListener('scroll', function(){
		const navHeight = nav.offsetHeight;
			pageYoffset = window.pageYOffset;
		if (pageYoffset > 100) {
			nav.classList.add('fixed-nav');
			document.body.style.paddingTop = navHeight+'px';
		}else{
			nav.classList.remove('fixed-nav');
			document.body.style.paddingTop = 0;
			
		}
	})
});
// Dropdown Menu javascript code
const li = document.querySelectorAll('.side-menu-inner > li');
const link = document.querySelectorAll('.side-menu-inner > a');
window.addEventListener('DOMContentLoaded',function(){
	li.forEach(function(item){
			item.addEventListener('click',function(e){
			 const innerUL = e.currentTarget.children[1];
			 const link = e.currentTarget.children[0];
			 innerUL.classList.toggle('show-menu');
			 link.classList.toggle('active');
		});
	});
});

$(document).ready(function(){
	$('#data').dataTable();
})