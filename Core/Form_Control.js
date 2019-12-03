function Promos_Checker()
{
    
    var verif=0;
     
    if (window.document.getElementById('Promos').value<=0 || window.document.getElementById('Promos').value >=100)
    {   alert("Veuillez saisir une valeur de promos valide") ;verif=1;}
    
    var list=window.document.getElementsByName('Check[]');
      
    for (var i=0 ;i<list.length; i++ )
    {   
        if (list[i].checked)
        {break;}
    
    }
     
    if(i==list.length)
    {verif=1; alert("veuillez cocher un produit ");}

   
    var dt_d =window.document.getElementById('Debut_Promos').value;
    var dt_f =window.document.getElementById('Fin_Promos').value;
    alert(dt_d);
    if (!dt_d)
    {
        alert("Veuillez Saisir date debut promos");
        verif=1;
    }
    if (!dt_f)
    {   alert("Veuillez saisir date de fin de promos  ");
        verif=1;
    }
    var d=new Date();
    d=d.getFullYear()+"-"+d.getMonth()+"-"+d.getDate()+"T"+d.getHours()+":"+d.getMinutes();
    alert(d);
    alert(dt_f);
    if (dt_f<d)
    {alert("Date de fin de promos doit etre superieure a la date actuelle");
verif=1;}
if (!verif)
 {return true;}
 else {return false;}
 



}



function Newsletter_Checker()
{   
   var  verif=0;
     if (!window.document.getElementById('Title').value || /^\s*$/.test(window.document.getElementById('Title').value))
            {alert("Veuillez saisir le titre");
            verif=1; }
          
        if (!window.document.getElementById('Body').value ||  /^\s*$/.test(window.document.getElementById('Body').value ))
            {alert("Veuillez saisir le corps du message");
          verif=1; }
   if (!verif) 
   {return true;}
   else {return false;}
       




}   
