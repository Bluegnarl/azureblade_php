<div class="modal-alt modal-newgame">
    <div class="labels-container">
        <div class="label-container label-container-title">
            <p class="label-higher">New Game</p>
        </div>
        <div class="icon-container buttons-clickable" onclick="closeOverlay()">
            <div class="icon" style="background-image: url(/assets/img/close.svg);"></div>
        </div>
    </div>
    <div class="text-container">
        <p class="body-text">
            Use an account to save your progression.
        </p>
    </div>
    <div class="labels-container">
        <div class="label-container buttons-clickable buttons-clickable-w-border" onclick="modal('login')">
            <div class="icon" style="background-image: url(/assets/img/account.svg);"></div>
            <p class="label">Log in</p>
        </div>
        <div class="label-container label-container-title buttons-clickable buttons-clickable-w-border">
            <div class="icon" style="background-image: url(/assets/img/account-crossed.svg);"></div>
            <?php if (!$cookies_save) { ?>
                <a class="label" href="/?page=guest&guest=new">Guest</a>
            <?php } else { ?>
                <a class="label" href="/?page=guest&guest=delete">Guest</a>
            <?php } ?>
        </div>
    </div>
</div>