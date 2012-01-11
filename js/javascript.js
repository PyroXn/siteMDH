$(function() {
    var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
   var objet = false;
    var budget = true;
    var mail = true;
    var messageContact = true;
    var cahierCharge = true;
    $("input[name=typeContact]:radio").click(function() {
        if($(this).val() == 'Devis') {
            $('#contact').css("display","none");
            $('#devis').css("display","block");
        } else if($(this).val() == 'Contact') {
            $('#devis').css("display","none");
            $('#contact').css("display","block");
        }
    });
    
    $("#objet").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir l\'objet");
             
             $('#submitDevis').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             objet = false;
        } else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            objet = true;
            if(objet == true && budget == true && mail == true && messageContact == true && cahierCharge == true) {
                $('#noSubmit').attr("id", "submitDevis");
                $('#submitDevis').removeAttr("disabled");         
            }
            
        }
    });
    
     $("#objetContact").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir l\'objet");
             
             $('#submitDevis').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             objet = false;
        } else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            objet = true;
            if(objet == true && mail == true && messageContact == true) {
                $('#noSubmit').attr("id", "submitDevis");
                $('#submitDevis').removeAttr("disabled");         
            }
            
        }
    });
    
    $("#budget").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre budget.");
             
             $('#submitDevis').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             budget = false;
        } else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            budget = true;
            if(objet == true && budget == true && mail == true && messageContact == true && cahierCharge == true) {
                $('#noSubmit').attr("id", "submitDevis");
                $('#submitDevis').removeAttr("disabled");         
            }
            
        }
    });
    
    $("#mail").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre adresse e-mail.");
             
             $('#submitDevis').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             mail = false;
        } else if (!ck_email.test($(this).val())) {
            $(this).next().show().html("<img src='templates/images/check-rouge.png''>L\'adresse e-mail n'est pas valide.");
            $('#submitDevis').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             mail = false;
        }
        else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            mail = true;
            if(objet == true && budget == true && mail == true && messageContact == true && cahierCharge == true) {
                $('#noSubmit').attr("id", "submitDevis");
                $('#submitDevis').removeAttr("disabled");         
            }
            
        }
    });
    
    $("#mailContact").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre adresse e-mail.");
             
             $('#submitDevis').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             mail = false;
        } else if (!ck_email.test($(this).val())) {
            $(this).next().show().html("<img src='templates/images/check-rouge.png''>L\'adresse e-mail n'est pas valide.");
            $('#submitDevis').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             mail = false;
        }
        else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            mail = true;
            if(objet == true && mail == true && messageContact == true) {
                $('#noSubmit').attr("id", "submitDevis");
                $('#submitDevis').removeAttr("disabled");         
            }
            
        }
    });
    
     $("#message").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir donner quelques précisions.");
             
             $('#submitDevis').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             messageContact = false;
        } 
        else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            messageContact = true;
            if(objet == true && budget == true && mail == true && messageContact == true && cahierCharge == true) {
                $('#noSubmit').attr("id", "submitDevis");
                $('#submitDevis').removeAttr("disabled");         
            }
            
        }
    });
    
    $("#messageContact").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir donner quelques précisions.");
             
             $('#submitDevis').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             messageContact = false;
        } 
        else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            messageContact = true;
            if(objet == true && mail == true && messageContact == true) {
                $('#noSubmit').attr("id", "submitDevis");
                $('#submitDevis').removeAttr("disabled");         
            }
            
        }
    });
    
     $("#cahierCharge").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir donner quelques précisions sur le cahier des charges.");
             
             $('#submitDevis').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             cahierCharge = false;
        } 
        else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            cahierCharge = true;
            if(objet == true && budget == true && mail == true && messageContact == true && cahierCharge == true) {
                $('#noSubmit').attr("id", "submitDevis");
                $('#submitDevis').removeAttr("disabled");         
            }
            
        }
    });
    
    $("#submitDevis").click(function() {
        if($("input[name=typeContact]:radio").val() == 'Devis') {
            if(!objet || !budget || !mail || !messageContact || !cahierCharge) {
                alert("Merci de bien vouloir saisir tous les champs")
                return false;
            }
        } else {
            if(!objet || !mail || !messageContact) {
                return false;
            }
        }
        return true;
    })
    
});