function verifindex()
{
 var email= document.getElementById("email").value;
 var mdp= document.getElementById("mdp").value;

   if ((email=="")||(mdp==""))
   {
    alert("Saisir votre email et votre mot de passe svp");
    return false ;
   }



    if(email.indexOf('@')<0)
    {
        alert("Votre email doit contenir @");
        return false ;
    }

    if (mdp.length<10)
    {
        alert("Votre mot de passe doit contenir au moins 10 caractères ");
        return false ;  
    }
    



    







}