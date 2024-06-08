<?php

$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

if ($username && $password == "") {
//     $reference = $database->getReference('path/to/child/location');

//     $snapshot = $reference->getSnapshot();

//     $value = $snapshot->getValue();
}

?>

<div class="modal-alt modal-login">
    <div class="labels-container">
        <div class="label-container label-container-title">
            <div class="icon" style="background-image: url(/assets/img/account.svg);"></div>
            <p class="label-higher">Compte</p>
        </div>
        <div class="icon-container buttons-clickable" onclick="closeOverlay()">
            <div class="icon" style="background-image: url(/assets/img/close.svg);"></div>
        </div>
    </div>
    <form method="post" style="width: 100%; display: flex; flex-direction: column; gap: 8px;">
        <input type="text" placeholder="Username" name="username" class="label-container body-text placeholder" required>
        <input type="current-password" placeholder="Password" name="password" class="label-container body-text placeholder" required>
        <button type="submit" class="label-container buttons-clickable buttons-clickable-w-border">
            <div class="icon" style="background-image: url(/assets/img/account.svg);"></div>
            <p class="label">Se connecter</p>
        </button>
        <div class="labels-container" style="justify-content: flex-end;">
            <div class="label-container label-container-title light-buttons buttons-clickable buttons-clickable-w-border"  onclick="modal('signup')">
                <p class="body-text">Créer un compte</p>
            </div>
        </div>
    </form>
</div>