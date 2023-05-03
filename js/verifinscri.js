function alphab(ch)
{
    for (var i=0;i<ch.length;i++) 
    {
        var c=ch.charAt(i).toUpperCase();
        if ( (c<'A') || (c>'Z') )
        return false ;
    }
}




function verifinscri()
{
 var nom= document.getElementById("nom").value;
 var prenom= document.getElementById("prenom").value;
 var email= document.getElementById("email").value;
 var email2= document.getElementById("email2").value;
 var mdp= document.getElementById("mdp").value;
 var mdp2= document.getElementById("mdp2").value;

   if ((nom=="")||(prenom=="")||(email=="")||(email2=="")||(mdp=="")||(mdp2==""))
   {
    alert("Tous les champs doivent être non vide");
    return false ;
   }



    if((alphab(nom)==false)||(nom.length<2))
    {
        alert("Votre nom doit être alphabetique d'au moins 2 caractéres ");
        return false ;
    }

    if((alphab(prenom)==false)||(prenom.length<2))
    {
        alert("Votre prénom doit être alphabetique d'au moins 2 caractéres ");
        return false ;
    }

    if(email.indexOf('@')<0)
    {
        alert("Votre email doit contenir @");
        return false ;
    }
    
    if(email2!=email)
    {
        alert("Vérifiez votre email");
        return false ;
    }
    
    if (mdp.length<10)
    {
        alert("Votre mot de passe doit contenir au moins 10 caractères ");
        return false ;  
    }

    if (mdp2!=mdp)
    {
        alert("Vérifiez votre mot de passe ");
        return false ;  
    }



    







}