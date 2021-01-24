/*function getMessages(){
    const requeteAjax = new XMLHttpRequest();
    requeteAjax.open("GET", "index.php?module=messagerie&action=lesMessages");

    requeteAjax.onload = function(){
        const resultat = JSON.parse(requeteAjax.responseText);
        console.log(resultat);
    }

    requeteAjax.send();
}*/
function loadMessages(){
    var idcorrespondant = $('.active').attr('value');
    $('#messages').html('');
    if(idcorrespondant){
        console.log(idcorrespondant);
        $.ajax({
            url: 'js/messages.php',
            type: 'POST',
            data: {idcorrespondant: idcorrespondant},
            success: function(data){
                var len = data.length;
                for(var i=0; i<len; i++){
                    const pseudoClient = data[i]['PseudoClient'];
                    const pseudoAdmin = data[i]['PseudoAdmin'];
                    const retour = data[i]['Retour'];
                    const message = data[i]['Message'];
                    const date = data[i]['Date'];

                    if(retour == 0){
                        $('#messages').append(
                            '<div class="chat-message messageEnvoye">'
                                '<p>'message'</p>'
                            '</div>'
                        );
                    }
                    else{
                        $('#messages').append(
                            '<div class="chat-message messageRecu">'
                                '<p>'message'</p>'
                            '</div>'
                        );
                    }
                }
            }

        });
    }
}