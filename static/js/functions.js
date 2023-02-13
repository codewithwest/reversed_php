
    
export function userNameValidation(UserNameTextArea, usernameList) {
        if (UserNameTextArea.value.length > 3) {
            if(usernameList.includes(UserNameTextArea.value)){
                UserNameTextArea.style.borderColor="red"
                document.getElementById('s-uname-alert').innerHTML ="";
                document.getElementById('s-uname-alert').appendChild(document.createTextNode('Username Taken'))
            
            }else{
                UserNameTextArea.style.borderColor="green"
            document.getElementById('s-uname-alert').innerHTML ="";
            return true
        }
            }
        else{
            UserNameTextArea.style.borderColor="red"
            document.getElementById('s-uname-alert').innerHTML ="";
            document.getElementById('s-uname-alert').appendChild(document.createTextNode('Username Too Short'))
 
        }
        }


     

function validateEmail(emailId)
{
var mailformat = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
if(emailId.value.match(mailformat))
{

return true;
}
else
{
// console.log("Invalid email address.");
return false;
}
}

export function emailValidation(emailTextArea, emailList) {
    if (validateEmail(emailTextArea) == true) {
        if(emailList.includes(emailTextArea.value)){
            emailTextArea.style.borderColor="red"
            document.getElementById('s-email-alert').innerHTML ="";
            document.getElementById('s-email-alert').appendChild(document.createTextNode('Email Already Exist Sign I Instead'))
            
        }else{
            // emailTextArea.focus()
            emailTextArea.style.borderColor="green"
            document.getElementById('s-email-alert').innerHTML ="";
            return true
        }
    }
        else{
            // emailTextArea.focus()
            emailTextArea.style.borderColor="red"
            document.getElementById('s-email-alert').innerHTML ="";
            document.getElementById('s-email-alert').appendChild(document.createTextNode('Invalid email'))
        }
}


 export  function passwordValidation(passwordTextArea) {
    if (passwordTextArea.value.length > 6 ) {
        if(passwordTextArea.value.match(/[A-Z]/,/[1-9]/,/[a-z]/) != null){
            passwordTextArea.style.borderColor="green"
            document.getElementById('s-pass-alert').innerHTML ="";
            return true
        }else{
            passwordTextArea.style.borderColor="red"
        document.getElementById('s-pass-alert').innerHTML ="";
        document.getElementById('s-pass-alert').appendChild(document.createTextNode('Password should contain Special characters,Upper,lowercase and numbers '))
   

        }
        // passwordTextArea.style.borderColor="green"
        // document.getElementById('s-pass-alert').innerHTML ="";
        // document.getElementById('s-email-alert').appendChild(document.createTextNode('Email Already Exist Sign I Instead'))
    }  
    else{
        passwordTextArea.style.borderColor="red"
        document.getElementById('s-pass-alert').innerHTML ="";
        document.getElementById('s-pass-alert').appendChild(document.createTextNode('Password Too Short'))
    }
}

 
export function passwordConfirmValidation(confirmPasswordTextArea, passwordTextArea) {  
    
    if (passwordTextArea.value === confirmPasswordTextArea.value) {
        confirmPasswordTextArea.style.borderColor="green"
        document.getElementById('s-password-alert').innerHTML ="";
        return true

    }
    else{
        confirmPasswordTextArea.focus()
        confirmPasswordTextArea.style.borderColor="red"
        document.getElementById('s-password-alert').innerHTML ="";
        document.getElementById('s-password-alert').appendChild(document.createTextNode('Passwords do not match'))
}}

