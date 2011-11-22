$(function() {
    var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    $("input[name=typeContact]:radio").click(function() {
        if($(this).val() == 'Devis') {
            html = '<legend>Type du produit</legend>\n\
            <input type="radio" name="typeProduit" value="Progiciel">Progiciel</input>\n\
            <input type="radio" name="typeProduit" value="SiteWeb">Site web</input>\n\
            <input type="text" name="objet" id="objet" placeholder="Objet">\n\
            <textarea name="message" id="message" placeholder="Message"></textarea>\n\
            <textarea name="cahierCharge" id="cahierCharge" placeholder="Cahier des Charge"></textarea>\n\
            <input type="text" name="budget" id="budget" placeholder="Budget">\n\
            <input type="text" name="mail" id="mail" placeholder="Adresse e-mail">\n\
            <input type="submit" id="submitDevis" value="Envoyer">';
            $('#suite').html(html);
        } else if($(this).val() == 'Contact') {
            html = '<input type="text" name="objet" id="objet" placeholder="Objet">\n\
            <textarea name="message" id="message" placeholder="Message"></textarea>\n\
            <input type="text" name="mail" id="mail" placeholder="Adresse e-mail">\n\
            <input type="submit" id="submitDevis" value="Envoyer">';
            $('#suite').html(html);
        }
    });
});