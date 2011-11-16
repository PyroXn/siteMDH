$(function() {
    var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    $('#typeContact').change(function() {
        var type = $(this).val();
        var html;
        switch(type) {
            case '1':
                html = '<label for="typeProduit">Type du produit</label>\n\
                        <select name="typeProduit">\n\
                            <option value="1">Progiciel</option>\n\
                            <option value="2">Site web</option>\n\
                        </select><br />\n\
                        <label for="objet">Objet</label>\n\
                        <input type="text" name="objet" id="objet"><br />\n\
                        <label for="message">Message</label>\n\
                        <textarea name="message" id="message" cols="80" rows="8"></textarea><br />\n\
                        <label for="cahierCharge">Cahier des charges</label>\n\
                        <textarea name="cahierCharge" id="cahierCharge" cols="80" rows="15"></textarea><br />\n\
                        <label for="budget">Budget</label>\n\
                        <input type="text" name="budget" id="budget"><br />\n\
                        <label for="mail">Adresse e-mail</label>\n\
                        <input type="text" name="mail" id="mail"><br />\n\
                        <input type="submit" id="submitDevis" value="Envoyer">';
                $('#suite').html(html);
                break;
            case '2':
                html = '<label for="objet">Objet</label>\n\
                        <input type="text" name="objet" id="objet"><br />\n\
                        <label for="message">Message</label>\n\
                        <textarea name="message" id="message" cols="80" rows="15"></textarea><br />\n\
                        <label for="mail">Adresse e-mail</label>\n\
                        <input type="text" name="mail" id="mail"><br />\n\
                        <input type="submit" id="submitContact" value="Envoyer">';
                $('#suite').html(html);
                break;
        }
    });
});