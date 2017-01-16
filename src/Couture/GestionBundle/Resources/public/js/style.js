
function mycaret(value)
{
    var all = document.getElementsByClassName("changeIconeDropdownPosition");
    var cl = value.children[1];
    var etat = cl.className;
    for(var i=0, len=all.length; i < len; i++){
        if(all[i].className.match(/(?:^|\s)glyphicon glyphicon-hand-up navbar-right changeIconeDropdownPosition(?!\S)/))
        {
            all[i].className = "glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition";
        }
    }

    if(etat == "glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition")
    {
        cl.className='glyphicon glyphicon-hand-up navbar-right changeIconeDropdownPosition';

    }
    else
    {
        cl.className='glyphicon glyphicon-hand-down navbar-right changeIconeDropdownPosition';  
    }

}

/********************************************************/
/*  Fonction permettant de faire flotter le menu        */
/*                                                      */
/********************************************************/

function menuflottant()
{
    var all = document.getElementById("flotMenu");
    var tableau = document.getElementById("contenuflot");
    var menucourt = document.getElementById("menuCourt");
    var buttonflot = document.getElementById("buttonflot");
    if(all.className.match(/(?:^|\s)fixe(?!\S)/))
    {
        all.className = "flot";
        tableau.style.width="96%";
        menucourt.style.display="block";
        buttonflot.style.width = "3%";
        buttonflot.innerHTML='<span class="glyphicon glyphicon-chevron-right"></span>';
    }
    else
    {
        all.className = "fixe";
        tableau.style.width="79%";
        menucourt.style.display="none";
        buttonflot.style.width = "18.5%";
        buttonflot.innerHTML='<span class="glyphicon glyphicon-chevron-left"></span>Glisser menu';
    }
    
}

function date_heure(heure)
{
    date = new Date;
    annee = date.getFullYear();
    moi = date.getMonth();
    mois = new Array('Janvier', 'F&eacute;vrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Ao&ucirc;t', 'Septembre', 'Octobre', 'Novembre', 'D&eacute;cembre');
    j = date.getDate();
    jour = date.getDay();
    jours = new Array('Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam');
    h = date.getHours();
    if(h<10)
    {
            h = "0"+h;
    }
    m = date.getMinutes();
    if(m<10)
    {
            m = "0"+m;
    }
    s = date.getSeconds();
    if(s<10)
    {
            s = "0"+s;
    }
    resultat = ''+jours[jour]+' '+j+' '+mois[moi]+' '+annee+' | '+h+':'+m+':'+s;
    if(document.getElementById(heure))
    {
        document.getElementById(heure).innerHTML = resultat;
        setTimeout('date_heure("'+heure+'");','1000');
        return true;
    }
}