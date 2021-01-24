<?php
class VueMessagerie{

	public function __construct () {

	}


    function afficherPageMessagerie($messages){
        //echo json_encode($messages);
?>
<!-- Paage de messagerie    -->
<div class="container">
    <div class="titreMessagerie">
        <h1>MESSAGES</h1>
    </div>
    <div class="containerMessages">
        <div class="pseudoContact">
            <div class="disponibiliteContact">
                <div class="disponible"></div>
                <!--
                <div class="indisponible"></div>
                -->
            </div>
            <h2>Nom du contact</h2>
        </div>
        <div class="petitContainerMsgs">
            <div class="dateMsg">
                <p>Samedi 23 Janvier 2021</p>
            </div>
            <div class="chat-message messageRecu">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>
            <div class="chat-message messageEnvoye">
                <p>It is a long established fact that a reader will be distracted</p>
            </div>
        </div>
        <div class="formulaireEnvoiMessage">
            <form action="index.php?module=messagerie&action=posterMessage" method="post">
                <div class="ecritureMessage">
                    <textarea name="message" id="" cols="200" rows="9"></textarea>
                    <button type="submit" name="formMessagerie" class="btn-message">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>
        
<?php
    }


}
?>