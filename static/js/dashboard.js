


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



var logOut = document.getElementById('logOutForm')

logOut.addEventListener('submit',(e)=>{
    alert('logging out');
    // logOut.setAttribute('method', )
})

let usernames = []
let emails = []
let emailsAndPass = []

// Ajax function that uses defined php file to fetch data from sql database
export async function aj() {
    //  Get all the existing usernames
$.ajax({  
    type: "GET",
    url: "./static/php/unamesfetch.php",
    dataType: "json",                  
    success: function(data){  
        usernames = data
    },
    error:function(e){
        console.log(e)
    }
});
// Emails that exist in the database
$.ajax({  
    type: "GET",
    url: "./static/php/emailsfetch.php",
    dataType: "json",                  
    success: function(data){  
        emails = data
       
    },
    error:function(e){
        console.log(e)
    }
});
// Password fetch
$.ajax({  
    type: "GET",
    url: "./static/php/passwordfetch.php",
    dataType: "json",                  
    success: function(data){  
        emailsAndPass = data
       
    },
    error:function(){
        console.log(1327)
    }

});
}


var updateButton = document.getElementById('updateForm')
var updateUserNTextField = document.getElementById('update_username')
var updateUserETextField = document.getElementById('update_email')

var unChange = false
var ueChange = false
    updateUserNTextField.addEventListener('input', (e)=>{
        unChange =  true
    })
updateUserETextField.addEventListener('input', (e)=>{
    ueChange =  true
})
updateButton.addEventListener('submit', (e)=>{   
    if (unChange == true && ueChange == true) {
       alert("User Details Updated")
    }
    else if(ueChange == true){
        alert("User Email Updated")
    }
    else if(unChange == true){
        alert("Users Username Updated")
    }
    else {
         e.preventDefault()
    }

})