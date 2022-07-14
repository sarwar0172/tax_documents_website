

// ========navbar=============
const toggleButton=document.getElementsByClassName('toggle_button')[0]
const navbarLinks=document.getElementsByClassName('services_navbar_links')[0]

toggleButton.addEventListener('click',()=>{
     navbarLinks.classList.toggle('active')
     console.log("clicked")

})

// navbar scroll effect
const navbar=document.querySelector('.services_navbar')
window.onscroll = () => {
     if(window.scrollY>50){
          navbar.classList.add('navbarscroll')
     }else{
          navbar.classList.remove('navbarscroll')

     }
    
     
}