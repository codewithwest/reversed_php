var profilePop = document.getElementById('nav-icon')

profilePop.addEventListener('click',()=>{
    if (document.getElementById('profile').style.display == "flex") {
        document.getElementById('profile').style.display="none"
    } else {
        document.getElementById('profile').style.display="flex"
    }
    
})

var collapseProfileBtn = document.getElementById('profileCollapseButton')
collapseProfileBtn.addEventListener('click',()=>{
    document.getElementById('profile').style.display="none"
})

var updateButton = document.getElementById('updateForm')
updateButton.addEventListener('submit', (e)=>{
    
    e.preventDefault()
    e.target.submit()
})

var logOut = document.getElementById('logOutBtn')

logOut.addEventListener('click',()=>{
    alert(" are ou sure")
})