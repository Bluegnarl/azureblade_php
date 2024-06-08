<div class="modal-alt modal-newgame">
    <div class="labels-container">
        <div class="label-container label-container-title">
            <p class="label-higher">Nouvelle partie</p>
        </div>
        <div class="icon-container buttons-clickable" onclick="closeOverlay()">
            <div class="icon" style="background-image: url(/assets/img/close.svg);"></div>
        </div>
    </div>
    <div class="text-container">
        <p class="body-text">
            Utiliser un compte pour enregistrer votre progression.
        </p>
    </div>
    <div class="labels-container">
        <div class="label-container buttons-clickable buttons-clickable-w-border" onclick="modal('login')">
            <div class="icon" style="background-image: url(/assets/img/account.svg);"></div>
            <p class="label">Se connecter</p>
        </div>
        <a href="/?page=guest&guest=new" class="label-container label-container-title buttons-clickable buttons-clickable-w-border">
            <div class="icon" style="background-image: url(/assets/img/account-crossed.svg);"></div>
            <p class="label">Invité</p>
        </a>
    </div>
</div>