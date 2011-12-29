$(function() {
    var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
   var objet = true;
    var budget = true;
    var mail = true;
    var messageContact = true;
    var cahierCharge = true;
    $("input[name=typeContact]:radio").click(function() {
        if($(this).val() == 'Devis') {
            html = '<legend>Type du produit</legend>\n\
                         <input type="radio" name="typeProduit" value="Progiciel" checked="checked">Progiciel</input>\n\
                        <input type="radio" name="typeProduit" value="SiteWeb">Site web</input>\n\
                        <div><input type="text" name="objet" id="objet" placeholder="objet"><span class="error"></span></div>\n\
                        <textarea name="message" id="messageContact" placeholder="Message"></textarea><span class="error"></span>\n\
                        <textarea name="cahierCharge" id="cahierCharge" placeholder="Cahier des Charges"></textarea><span class="error"></span>\n\
                        <div><input type="text" name="budget" id="budget" placeholder="Budget"><span class="error"></span></div>\n\
                        <div><input type="text" name="mail" id="mail" placeholder="Adresse e-mail"><span class="error"></span></div>\n\
                        <input type="submit" id="submitDevis" value="Envoyer">';
            $('#suite').html(html);
        } else if($(this).val() == 'Contact') {
            html = '<div><input type="text" name="objet" id="objet" placeholder="Objet"><span class="error"></span></div>\n\
            <textarea name="message" id="messageContact" placeholder="Message"></textarea><span class="error"></span>\n\
           <div><input type="text" name="mail" id="mail" placeholder="Adresse e-mail"><span class="error"></span></div>\n\
            <input type="submit" id="submitDevis" value="Envoyer">';
            $('#suite').html(html);
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
            if(objet == true && budget == true && mail == true && messageContact == true && cahierCharge == true) {
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
    
});