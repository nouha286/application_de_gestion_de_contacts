
//-----------------------------------------validation_page_de_connexion-------------------------------------//
 //---------------------varibles------------------//
 let user_conn=document.getElementById('exampleInputEmail1');
 let password_conn=document.getElementById('exampleInputPassword1');
 let button_conn=document.getElementById('button_conn');
 let formulaire_conn=document.getElementById('formulaire_conn');
 //---------------------varibles------------------//

valid_connexion();
button_conn.disabled=true;
function valid_connexion()
{
    formulaire_conn.addEventListener('mousemove',()=>{
        if (user_conn.value=="" || password_conn.value=="") 
        {
            button_conn.disabled=true;
        }
        else
        {
            button_conn.disabled=false;
        }
        
        
      })
}
