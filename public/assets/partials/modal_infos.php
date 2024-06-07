<div class="modal modal-infos">
    <div class="modal-header">
        <p class="label">History</p>
        <div class="cursor-pointer" onclick="closeOverlay()"></div>
    </div>
    <div class="divider"></div>
    <div style="display: flex; width: 100%; overflow: auto;flex-direction: column; padding: 12px 0; gap: 20px; max-height: 100%; ">
        <div class="modal-img">
            <img src="/assets/img/card-image.png" alt="">
        </div>
        <p class="lighter">
            <?= $story[$w][$i]['infos'] ?>
        </p>
    </div>
</div>