 
import { emailValidation, userNameValidation ,passwordValidation, passwordConfirmValidation} from './functions.js';
var signupButton = document.getElementById('signup-form-b')
signupButton.addEventListener('click', () => {
    if (document.getElementById('signup-form').style.display == "flex") {
        document.getElementById('signup-form').style.display = "none"
    } else {
        document.getElementById('signup-form').style.display = "flex"
        document.getElementById('login-form').style.display = "none"
    }
})

var loginButton = document.getElementById('login-form-b')
loginButton.addEventListener('click', () => {

    if (document.getElementById('login-form').style.display == "flex") {
        document.getElementById('login-form').style.display = "none"
    } else {
        document.getElementById('login-form').style.display = "flex"
        document.getElementById('signup-form').style.display = "none"
    }
})
let usernames = []
let emails = []
let emailsAndPass = []
function aj() {
    //  Get all the existing usernames
$.ajax({  
    type: "GET",
    url: "./static/php/unamesfetch.php",
    dataType: "json",                  
    success: function(data){  
        usernames = data
        // console.log(data)
    },
    error:function(){
        // console.log(1327)
    }
});
// Emails that exist in the database
$.ajax({  
    type: "GET",
    url: "./static/php/emailsfetch.php",
    dataType: "json",                  
    success: function(data){  
        emails = data
        // console.log(data)
    },
    error:function(){
        console.log(1327)
    }

});
// Password fetch
$.ajax({  
    type: "GET",
    url: "./static/php/passwordfetch.php",
    dataType: "json",                  
    success: function(data){  
        emailsAndPass = data
        console.log(emailsAndPass)
    },
    error:function(){
        console.log(1327)
    }

});
}
aj();

var rUserName = false
var rEmail = false
var rPassword = false
var rCPassword = false

// Sign Up
// Check if username in database 
var registrationUserName = document.getElementById('s-username');
 
registrationUserName.addEventListener('change', (e)=>{
    if(userNameValidation(registrationUserName, usernames) == true){
        rUserName = true
    }else{
        rUserName = false
    }
})

var registrationEmail = document.getElementById('email')
registrationEmail.addEventListener('change', ()=>{
   if(emailValidation(registrationEmail, emails) == true){
        rEmail = true
   }
   else{
    rEmail = false
   }
})

var registrationPassword = document.getElementById('s-password')
 
registrationPassword.addEventListener('change', ()=>{
     if(passwordValidation(registrationPassword)==true){
        rPassword = true
     }else{
        rPassword = false
     }
});



var registrationConfirmPassword = document.getElementById('sc-password')
 
registrationConfirmPassword.addEventListener('change', ()=>{
     if(passwordConfirmValidation(registrationConfirmPassword,registrationPassword)==true){
        rCPassword = true
     }else{
        rCPassword = false 
     }
});
var registerButton = document.getElementById('registerForm')
registerButton.addEventListener('submit',(e)=>{
    e.preventDefault()
    if ((rUserName && rEmail && rPassword && rCPassword ) == true) {
        e.currentTarget.submit()
    } else {
        e.preventDefault()
    }
})

var loginForm = document.getElementById('loginForm')
var loginTextArea = document.getElementById('username')
var passTextArea = document.getElementById('password')


loginForm.addEventListener('submit',(e)=>{
    
 e.preventDefault()  
    for (const pair in emailsAndPass) {
      
            if (emailsAndPass[pair][0] == loginTextArea.value && emailsAndPass[pair][1] == passTextArea.value) {
                
                e.currentTarget.submit()
                return
            }
            else{
                if (emailsAndPass[pair][0] != loginTextArea.value && emailsAndPass[pair][1] == passTextArea.value) {
                    loginTextArea.style.borderColor="red"
                    document.getElementById('username-alert').innerHTML ="";
                    document.getElementById('username-alert').appendChild(document.createTextNode('Incorrect Username or Password'))
                
                }
                if(emailsAndPass[pair][1] != passTextArea.value && emailsAndPass[pair][0] == loginTextArea.value){
                    passTextArea.style.borderColor="red"
                    loginTextArea.style.borderColor="green"
                    document.getElementById('password-alert').innerHTML ="";
                    document.getElementById('password-alert').appendChild(document.createTextNode('Incorrect Username or Password'))
                
            }
            else{
                passTextArea.style.borderColor="red"
                loginTextArea.style.borderColor="red"
                document.getElementById('password-alert').innerHTML ="";
                document.getElementById('password-alert').appendChild(document.createTextNode("UserName and Password Do not Exist"))
            }
        }
        
        }
    }
)





