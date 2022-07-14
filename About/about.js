// =========navbar=========
const toggleButton=document.getElementsByClassName('toggle_button')[0]
const navbarLinks=document.getElementsByClassName('about_navbar_links')[0]

toggleButton.addEventListener('click',()=>{
     navbarLinks.classList.toggle('active')
     console.log("clicked")

})

// navbar scroll effect
const navbar=document.querySelector('.about_navbar')
console.log(navbar)
window.onscroll = () => {
    console.log(window.scrollY)
     if(window.scrollY>50){
        console.log('robin')
          navbar.classList.add('navbarscroll')
     }else{
          navbar.classList.remove('navbarscroll')

     }
    
     
}