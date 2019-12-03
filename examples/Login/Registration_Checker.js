
function Registration_Checker()
{   
        var verif=0;
   
    var Nom=window.document.getElementById('Nom').value; 
     var Prenom=window.document.getElementById('Prenom').value;
  var Email=window.document.getElementById('Email').value;
    var Cin=window.document.getElementById('Cin').value;
      
    var Phone=window.document.getElementById('Phone').value;  
    var Gender=window.document.getElementById('Gender');
    var g=Gender.options[Gender.selectedIndex].value;
    var Pwd =window.document.getElementById("Pwd").value;
    var Date_Naissance=window.document.getElementById('Date_Naissance').value  ;
    var dt=new Date();
    dt.getDate();
     
     if ( /^\s*$/.test(Date_Naissance) || /^\s*$/.test(Nom) || /^\s*$/.test(Prenom) || /^\s*$/.test(Email)|| /^\s*$/.test(Pwd) )
    {alert("Veuillez Remplir tous les champs");verif=1; } 
    if (g=="Gender")
    {alert("Veuillez specifier votre sexe"); verif=1;} 
    if (Cin.length!=8)
    {alert("Le Cin doit comprendre 8 chiffres");verif=1;}
    if (Phone.length!=8)
    {alert("le Num de telephone doit comprendre 8 chiffres");verif=1;}




      
if (verif)
{return false;}
else{return true;}




}