// ========navbar=============
const toggleButton=document.getElementsByClassName('toggle_button')[0]
const navbarLinks=document.getElementsByClassName('documentation_navbar_links')[0]

toggleButton.addEventListener('click',()=>{
     navbarLinks.classList.toggle('active')
     console.log("clicked")

})

// navbar scroll effect
const navbar=document.querySelector('.documentation_navbar')
window.onscroll = () => {
     if(window.scrollY>80){
          navbar.classList.add('navbarscroll')
     }else{
          navbar.classList.remove('navbarscroll')

     }
    
     
}