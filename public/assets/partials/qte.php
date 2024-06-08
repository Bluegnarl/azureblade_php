<div class="qte-container">
    <div class="qte-content">
        <div class="character-text body-text" style="width: 100%;   background: var(--primary-transparent);padding: 8px 20px;border-radius: 8px; max-width: 475px;">
            <div class="icon" style="background-image: url(/assets/img/fight.svg);"></div>
            <?= $story[$w][$i]['text'] ?>
        </div>
        <div onclick="qte('ready')" class="buttons-clickable buttons-clickable-w-border" style="background: var(--primary); border-radius: 28px; transition: opacity .2s ease">
            <p class="label" onclick="hoverAudioFunction()">Prêt</p>
        </div>
    </div>
    <div class="qte-content win-qte" style="display: none; opacity: 0; transform: translateY(50%)">
        <div class="character-text body-text" style="width: 100%;  background: var(--primary-transparent);padding: 8px 20px;border-radius: 8px; max-width: 475px;">
            <div class="icon" style="background-image: url(/assets/img/fight.svg);"></div>
            <?= $story[$w][$i]['win']['text'] ?>
        </div>
        <a href="/?page=game&destination=<?= $story[$w][$i]['win']['destination'] ?>" class="primary-control buttons-clickable buttons-clickable-w-border next" style="width: fit-content !important; scale: 0; opacity: 0; transition: opacity .2s ease, scale .2s ease, filter .2s ease;">
            <div class="icon" style="background-image: url(/assets/img/next.svg);"></div>
            <p class="label" onclick="removeHref, hoverAudioFunction()">Suivant</p>
        </a>
    </div>
    <div class="qte-content loose-qte" style="display: none; opacity: 0; transform: translateY(50%)">
        <div class="character-text body-text" style="width: 100%;   background: var(--primary-transparent);padding: 8px 20px;border-radius: 8px; max-width: 475px;">
            <div class="icon" style="background-image: url(/assets/img/fight.svg);"></div>
            <?= $story[$w][$i]['loose']['text'] ?>
        </div>
        <a href="/?page=game&destination=<?= $story[$w][$i]['loose']['destination'] ?>" class="primary-control buttons-clickable buttons-clickable-w-border next" style="width: fit-content !important; scale: 0; opacity: 0; transition: opacity .2s ease, scale .2s ease, filter .2s ease;">
            <div class="icon" style="background-image: url(/assets/img/next.svg);"></div>
            <p class="label" onclick="removeHref, hoverAudioFunction()">Suivant</p>
        </a>
    </div>
</div>