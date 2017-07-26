  function verifEmail()
{

  adresse = document.formulaire.email.value;
  taille = document.formulaire.email.value.length;


  validelog = false;
  validedom = false;
  valideext = false;


  arob = adresse.lastIndexOf("@");
  login = adresse.substring(0,arob);

  pointfinal = adresse.lastIndexOf(".");
  extension = adresse.substring(pointfinal,taille);

  domaine = adresse.substring(arob+1,pointfinal);

  /* un login doit avoir toujours plus de 2 caract�res, on fait le test */
  if ( login.length > 2 )
  {
    validelog = true;
  }
  else
  {
    validelog = false;
  }
  /* un domaine a toujours plus de 1 caract�re, on fait le test */
  if ( domaine.length > 1 )
  {
    validedom = true;
  }
  else
  {

    validelog = false;
  }

    /* une extension a toujours 2 ou 3 caract�res, on fait le test */
  if ( pointfinal > -1 && (extension.length == 3 || extension.length == 4) )
  {
    valideext = true;
  }
  else
  {
    valideext = false;
  }

  /* les trois variables doivent etre vraies pour valider l'adresse mail saisie*/
  if ( validelog == true && validedom == true && valideext == true )
  {
    alert('OK, l\'adresse e-mail saisie est valide.');
    return true;
  }
  else
  {
    alert('Ceci n\'est pas une adresse e-mail valide.');
    return false;
  }
}
