

// ========navbar=============
const toggleButton=document.getElementsByClassName('toggle_button')[0]
const navbarLinks=document.getElementsByClassName('home_navbar_links')[0]

toggleButton.addEventListener('click',()=>{
     navbarLinks.classList.toggle('active')
     console.log("clicked")

})

// navbar scroll effect
const navbar=document.querySelector('.home_navbar')
window.onscroll = () => {
     if(window.scrollY>80){
          navbar.classList.add('navbarscroll')
     }else{
          navbar.classList.remove('navbarscroll')

     }
    
     
}

//============ section 3=============
const section3=document.querySelector('.home_section3')
const number1 = document.querySelector('.s3_n1');
const number2 = document.querySelector('.s3_n2')
const number3 = document.querySelector('.s3_n3')
const number4 = document.querySelector('.s3_n4')

var s3_n01 = 0;
var s3_n02 = 0;
var s3_n03 = 0;
var s3_n04 = 0;

// section3 increasing number effect
const observer = new IntersectionObserver(function(entries ,observer) {
  entries.forEach((event)=>{
     setInterval(()=>{
         if(s3_n01==95) {
           clearInterval()
         }else{
          s3_n01++
         number1.textContent=s3_n01
         }
          if(s3_n02==97) {
           clearInterval()
         }else{
          s3_n02++
         number2.textContent=s3_n02
         }
          if(s3_n03==89) {
           clearInterval()
         }else{
          s3_n03++
         number3.textContent=s3_n03
         }
          if(s3_n04==90) {
           clearInterval()
         }else{
          s3_n04++
         number4.textContent=s3_n04
         }
     },70)
  })
})
observer.observe(section3)

var display = window.getComputedStyle(
	document.querySelector('.home_section2'), ':before'
).getPropertyValue('display')


// =============section5=============

const s5_coursol_button=document.querySelector('.home_section5 .carousel-control-prev');




