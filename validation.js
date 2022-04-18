//--------------------------------------variables----------------------------------//
let username=document.getElementById('username');
let password=document.getElementById('password');
let v_pass=document.getElementById('v_pass');
let user=document.getElementById('user');
let pass=document.getElementById('pass');
let verify=document.getElementById('verify');
let button=document.getElementById('boutton');

let formulaire=document.getElementById('form');
let expNom=/^[a-zA-Z0-9]{2,20}$/;
//--------------------------------------functions----------------------------------//
valid();

button.disabled=true;
//-----------------------------------------validation_page_d'inscription-------------------------------------//
function valid()
{ 
    formulaire.addEventListener('click',()=>{
       
        if(username.value=="" || password.value=="" || v_pass.value=="")
        { 
            button.disabled=true;
        }
        else
        {
            //----------------------------------------------------validation_username
            if(!expNom.test(username.value))
            {
                button.disabled=true;
                username.style.border="2px solid red";
                user.innerHTML=`<div class="alert alert-danger" role="alert">
                il faut entrez un nom de deux caractéres aux minimum, sans des caractéres spéciaux [-,.!?@] !
              </div>`

            }
            else
            {
                button.disabled=false;
                user.innerHTML=``;
                username.style.border="2px solid #61de61";
                
            }
            //-----------------------------validation_password
            if(password.value.toString().length<6)
            {
                button.disabled=true;
                password.style.border="2px solid red";
                pass.innerHTML=`<div class="alert alert-danger" role="alert">
                il faut entrez un mot de passe de 6 caractéres ou plus!
              </div>`
             
            }
            else
            {
                button.disabled=false;
                pass.innerHTML=``;
                password.style.border="2px solid #61de61";
                
            }
            //-----------------------------validation_compatibilité----------------------------------------------------------

            if(v_pass.value!=password.value && password.value!="" && v_pass.value!="" || password.value.toString().length<6 )
            {
                if(password.value!="" && v_pass.value!="" || password.value.toString().length<6)
                {
                    button.disabled=true;
                    verify.innerHTML=``
                }
              if (v_pass.value!=password.value)
              {
                button.disabled=true;
                v_pass.style.border="2px solid red";
                verify.innerHTML=`<div class="alert alert-danger" role="alert">
                il faut que les mots de passe doit étre compatibles!
              </div>`
              }
             
            }
            else
            {
                
                verify.innerHTML=``;
                v_pass.style.border="2px solid #61de61";
                
            }
          
            if (!expNom.test(username.value) || password.value.toString().length<6 || v_pass.value!=password.value)
             {
                button.disabled=true;
            }
            

        }
        
      })
   
        
    
}

