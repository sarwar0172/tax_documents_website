// ========navbar=============
const toggleButton=document.getElementsByClassName('toggle_button')[0]
const navbarLinks=document.getElementsByClassName('contact_navbar_links')[0]

toggleButton.addEventListener('click',()=>{
     navbarLinks.classList.toggle('active')
     console.log("clicked")

})

// navbar scroll effect
const navbar=document.querySelector('.contact_navbar')
window.onscroll = () => {
    console.log(window.scrollY)
     if(window.scrollY>55){
          navbar.classList.add('navbarscroll')
          
     }else{

          navbar.classList.remove('navbarscroll')

     }
    
     
}