<div class="modal modal-login">
    <div class="labels-container">
        <div class="label-container label-container-title">
            <div class="icon" style="background-image: url(/assets/img/account.svg);"></div>
            <p class="label-higher">Account</p>
        </div>
        <div class="icon-container buttons-clickable" onclick="closeOverlay()">
            <div class="icon" style="background-image: url(/assets/img/close.svg);"></div>
        </div>
    </div>
    <form method="get" style="width: 100%; display: flex; flex-direction: column; gap: 8px;">
        <input type="text" placeholder="Username" name="username" class="label-container placeholder" required>
        <input type="current-password" placeholder="Password" name="password" class="label-container placeholder" required>
        <button type="submit" class="label-container buttons-clickable buttons-clickable-w-border">
            <div class="icon" style="background-image: url(/assets/img/account.svg);"></div>
            <p class="label">Log in</p>
        </button>
        <div class="labels-container" style="justify-content: flex-end;">
            <div class="label-container label-container-title light-buttons buttons-clickable buttons-clickable-w-border"  onclick="modal('signup')">
                <p class="body-text">Create an account</p>
            </div>
        </div>
    </form>
</div>