<div class="modal modal-signup">
    <div class="labels-container">
        <div class="label-container label-container-title">
            <div class="icon" style="background-image: url(/assets/img/account.svg);"></div>
            <p class="label-higher">Account</p>
        </div>
        <div class="icon-container buttons-clickable" onclick="closeOverlay()">
            <div class="icon" style="background-image: url(/assets/img/close.svg);"></div>
        </div>
    </div>
    <form style="width: 100%; display: flex; flex-direction: column; gap: 8px;">
        <input type="text" placeholder="Username" class="label-container placeholder" required>
        <input type="email" placeholder="Email" class="label-container body-text placeholder" required>
        <input type="password" placeholder="Password" class="label-container body-text placeholder" required>
        <input type="password" placeholder="Confirm Password" class="label-container body-text placeholder" required>
        <div class="label-container buttons-clickable buttons-clickable-w-border">
            <div class="icon" style="background-image: url(/assets/img/account.svg);"></div>
            <p class="label">Sign up</p>
        </div>
        <div class="labels-container" style="justify-content: flex-end;">
            <div class="label-container label-container-title light-buttons buttons-clickable buttons-clickable-w-border">
                <p class="body-text">Already have an account ?</p>
            </div>
        </div>
    </form>
</div>