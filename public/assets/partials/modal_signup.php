<?php

$new_username = $_POST['username'] ?? null;
$new_password = $_POST['password'] ?? null;
$new_confirm_password = $_POST['confirm-password'] ?? null;

if ($username && $new_password == $new_confirm_password) {
    $signupData = [
        'username' => $new_username,
        'password' => $new_password
    ];

    $ref_table = "users";
    $getRef = $database->getReference($ref_table)->push($getData);
}

?>

<div class="modal-alt modal-signup">
    <div class="labels-container">
        <div class="label-container label-container-title">
            <div class="icon" style="background-image: url(/assets/img/account.svg);"></div>
            <p class="label-higher">Compte</p>
        </div>
        <div class="icon-container buttons-clickable" onclick="closeOverlay()">
            <div class="icon" style="background-image: url(/assets/img/close.svg);"></div>
        </div>
    </div>
    <form action="/?page=signup" method="post" style="width: 100%; display: flex; flex-direction: column; gap: 8px;">
        <input type="text" placeholder="Username" name="username" class="label-container body-text placeholder" required>
        <input type="new-password" placeholder="Password" name="password" class="label-container body-text placeholder" required>
        <input type="new-password" placeholder="Confirm Password" name="confirm-password" class="label-container body-text placeholder" required>
        <button type="submit" class="label-container buttons-clickable buttons-clickable-w-border">
            <div class="icon" style="background-image: url(/assets/img/account.svg);"></div>
            <p class="label">S'inscrire</p>
        </button>
        <div class="labels-container" style="justify-content: flex-end;">
            <div class="label-container label-container-title light-buttons buttons-clickable buttons-clickable-w-border" onclick="modal('login')">
                <p class="body-text">Vous avez déjà un compte ?</p>
            </div>
        </div>
    </form>
</div>