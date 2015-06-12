function test(ele)
{
    idElementCourant = ele.id; // ça c'est bon
    concatenation = idElementCourant+"_1";
    elementRadio = document.getElementById(concatenation);
    spanAModifier = document.getElementById("span_"+idElementCourant);
    

    spanAModifier.setAttribute('hidden', 'true'); // Pour faire réapparaître
    
    if(elementRadio.checked == true)
    {
        spanAModifier.removeAttribute('hidden'); // Pour supprimer le hidden       
    }
    else
    {
        spanAModifier.setAttribute('hidden', 'true'); // Pour faire réapparaître
    }
}
    
function cacher(ele)
{
    var caseACocher=document.getElementById(ele.id);
    var titreColonne = document.getElementById("titreColonnePoste");

    
    if (caseACocher.checked)
    {
        titreColonne.setAttribute('hidden','true');
        document.getElementById("tailleColonneTableau1").setAttribute('width','50%');
        document.getElementById("tailleColonneTableau2").setAttribute('width','50%');
        var i=0;
        while(document.getElementById("coupleDeBoutons"+i) != null)
        {
           document.getElementById("coupleDeBoutons"+i).setAttribute('hidden','true');
         document.getElementById("coupleDeBoutons"+i).children[0].children[0].setAttribute('checked','true');
        i++;
        }
        
    }
    else
    {
        titreColonne.removeAttribute('hidden');
        document.getElementById("tailleColonneTableau1").setAttribute('width','30%');
        document.getElementById("tailleColonneTableau2").setAttribute('width','40%');
        document.getElementById("tailleColonneTableau3").setAttribute('width','30%');
        var i=0;
        while(document.getElementById("coupleDeBoutons"+i) != null)
        {
           document.getElementById("coupleDeBoutons"+i).removeAttribute('hidden');
            document.getElementById("coupleDeBoutons"+i).children[0].children[0].setAttribute('checked','true');
        i++
        }
    }
}