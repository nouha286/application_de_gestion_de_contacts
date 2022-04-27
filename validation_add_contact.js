let nom=document.getElementById('name');
let phone=document.getElementById('phone');
let email=document.getElementById('email');
let address=document.getElementById('address');
let button=document.getElementById('button');
let formulaire=document.getElementById('form');
let msg_nom=document.getElementById('msg_nom');
let msg_email=document.getElementById('msg_email');
let msg_phone=document.getElementById('msg_phone');

let expNom=/^[a-zA-Z0-9 ]{2,20}$/;
let expEmail=/^[a-zA-Z0-9]+[@][a-z]+[.][a-z]{2,3}$/;
let expPhone=/^[+]?[(]?[0-9]{3}[)]?[-\s.]?[0-9]{3}[-\s.]?[0-9]{4,6}$/;;
//--------------------------------------function-----------------------//
button.disabled=true;
valid_contact();
function valid_contact() 
{
    formulaire.addEventListener('mousemove',()=>{
        if(nom.value=="" || email.value=="")
        {
            button.disabled=true;
        }
        else
        {  button.disabled=false;
            if(!expNom.test(nom.value))
            {
                button.disabled=true;
                nom.style.border="2px solid red";
                msg_nom.innerHTML=`<div class="alert alert-danger" role="alert">
                il faut entrez un nom de deux caractéres aux minimum, sans des caractéres spéciaux [-,.!?@] !
              </div>`

            }
            else
            {
                button.disabled=false;
                msg_nom.innerHTML=``;
                nom.style.border="2px solid #61de61";
                
            }

            if(!expEmail.test(email.value))
            {
                button.disabled=true;
                email.style.border="2px solid red";
                msg_email.innerHTML=`<div class="alert alert-danger" role="alert">
                il faut entrez un nom email valid!
              </div>`

            }
            else
            {
                button.disabled=false;
                msg_email.innerHTML=``;
                email.style.border="2px solid #61de61";
                
            }
            if(!expPhone.test(phone.value) && phone.value!="")
            {
                button.disabled=true;
                phone.style.border="2px solid red";
                msg_phone.innerHTML=`<div class="alert alert-danger" role="alert">
                il faut entrez un numéro de téléphone valid! 
              </div>`

            }
            else
            {
                button.disabled=false;
                msg_phone.innerHTML=``;
                phone.style.border="2px solid #61de61";
                if(phone.value=="")
                {
                    msg_phone.innerHTML=``;
                phone.style.border="";
                }
                
            }

            if (!expNom.test(nom.value)  || !expEmail.test(email.value))
             {
                button.disabled=true;
            }


        }
    })
}

function logout() 
{
   let confirmation= confirm ("vous voulez se déconnecter?");
   if( confirmation == true )
    {
    return true;
    } 
    else {
        return false;
        }
}