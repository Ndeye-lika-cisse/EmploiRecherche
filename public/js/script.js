function recherEmp(numero){
    $.ajax({
        url : 'http://localhost/bank_giage/models/getEmp.php',

        type : 'GET',
        dataType : 'json',
        success : function(employes){
            //console.log(employes);
            employes.forEach(emp => {
               if(emp.numeroEmp==numero.value){
                   document.getElementById('nom').value=emp.nomEmp;
                   document.getElementById('prenom').value=emp.prenomEmp;
                   document.getElementById('adresse').value=emp.adresseEmp;
                   document.getElementById('login').value=emp.login;
                   document.getElementById('tel').value=emp.telEmp;
                   document.getElementById('profil').value=emp.nomProfil;
               }
            });

        },
        error : function(){
            console.log("erreur de recuperation des domaines");
        }
    })
}



function recherClient(numeroClient){
    console.log(numeroClient.value);
    $.ajax({
        url : 'http://localhost/bank_giage/models/getClient.php',

        type : 'GET',
        dataType : 'json',
        success : function(clients){
            //console.log(employes);
            console.log("coucou");
            clients.forEach(cli => {
               
               if(cli.numeroClient==numeroClient.value){
                   
                   document.getElementById('nomClient').value=cli.nomClient;
                   //document.getElementById('prenomClient').value=cli.prenomClient;
                   //document.getElementById('adresse').value=cli.adresseClient;
                   
                   document.getElementById('telClient').value=cli.telClient;
                   document.getElementById('adresseClient').value=cli.adresseClient;
               }
            });

        },
        error : function(){
            console.log("erreur de recuperation des domaines");
        }
    })
}




// function recherCompte(numeroCompte){
   
//     $.ajax({
//         url : 'http://localhost/bank_giage/models/getCompte.php',

//         type : 'GET',
//         dataType : 'json',
//         success : function(comptes){
            
//             comptes.forEach(cli => {
//                if(cli.numeroCompte==numeroCompte.value){
//                    document.getElementById('solde').value=com.solde;
//                    //document.getElementById('prenomClient').value=cli.prenomClient;
//                    //document.getElementById('adresse').value=cli.adresseClient;
                   
//                   // document.getElementById('telClient').value=cli.telClient;
//                    //document.getElementById('adresseClient').value=cli.adresseClient;
//                }
//             });

//         },
//         error : function(){
//             console.log("erreur de recuperation des domaines");
//         }
//     })
// } 

function verifierAddEmp() {
    vNom = document.getElementById('nom');
    vPrenom = document.getElementById('prenom');
    vTel = document.getElementById('tel');
    vAdresse = document.getElementById('adresse');
    if(vNom.value=="" || vPrenom.value=="" || vTel.value=="" || vAdresse.value=="" ){
        alert("Veuiller remplir tous les champs svp!!!");
    }
    
}