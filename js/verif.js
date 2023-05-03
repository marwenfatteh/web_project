function alphab(ch)
{
    for (var i=0;i<ch.length;i++) 
    {
        var c=ch.charAt(i).toUpperCase();
        if ( (c<'A') || (c>'Z') )
        return false ;
    }
}




function verif()
{
 var np= document.getElementById("np").value;
 var email= document.getElementById("email").value;
 var mdp= document.getElementById("mdp").value;
 var numtel= document.getElementById("numtel").value;
 if ((np=="")||(email=="")||(mdp==""))
 {
 alert("Les champs Nom Complet, E-mail et Mot de passe doivent être non vide");
 return false ;}


 if ((isNaN(numtel))||(numtel.length!=8))
 {
    alert("Votre numéro de téléphone doit être un numéro de 8 chiffres");
    return false ;}

    if ((np==""))
    {
    alert("Saisir votre nom Complet");
    return false ;}

    if ((email==""))
    {
    alert("Saisir votre email");
    return false ;}

    if ((mdp==""))
    {
    alert("Saisir votre mot de passe");
    return false ;}

    if((alphab(np)==false)||(np.length<2))
    {
        alert("Votre nom doit être alphabetique d'au moins 2 caractéres ")
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

function verifa()
{

 var email= document.getElementById("email").value;
 var mdp= document.getElementById("mdp").value;
 if ((email=="")||(mdp==""))
 {
 alert("Les champs E-mail et Mot de passe doivent être non vide");
 return false ;}


    if ((email==""))
    {
    alert("Saisir votre email");
    return false ;}

    if ((mdp==""))
    {
    alert("Saisir votre mot de passe");
    return false ;}


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