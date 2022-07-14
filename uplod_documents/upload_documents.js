// ========navbar=============
const toggleButton=document.getElementsByClassName('toggle_button')[0]
const navbarLinks=document.getElementsByClassName('up_doc_navbar_links')[0]

toggleButton.addEventListener('click',()=>{
     navbarLinks.classList.toggle('active')
     console.log("clicked")

})

// navbar scroll effect
const navbar=document.querySelector('.up_doc_navbar')
window.onscroll = () => {
    console.log(window.screenY)
     if(window.scrollY>1){
          navbar.classList.add('navbarscroll')
     }else{
          navbar.classList.remove('navbarscroll')

     }
       
}