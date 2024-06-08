<div class="dialogue-container">
    <div class="dialogue-content">
        <div class="dialogue">
            <?php foreach ($story[$w][$i]['content'] as $message) : ?>
                <div class="message <?php if ($message['side'] == "right") {
                                        echo "message-right";
                                    } elseif ($message['side'] == "left") {
                                        echo "message-left";
                                    } elseif ($message['side'] == "dilemmas") {
                                        echo "message-left message-dilemmas";
                                    } elseif ($message['side'] == "center" || $message['side'] == "instruction") {
                                        echo "message-center";
                                    } elseif ($message['side'] == "next") {
                                        echo "message-center next-message";
                                    } else {
                                        echo "message-choice";
                                    }
                                    ?>" style="display: none; opacity: 0; <?= ($message['side'] == "choice") ? "gap: 1.5rem" : "" ?>">
                    <?php if ($message['side'] == "left" || $message['side'] == "right" || $message['side'] == "dilemmas") : ?>
                        <div class="character-name">
                            <p class="label" style="color: var(--on-surface-1);"><?= $message['character'] ?></p>
                        </div>
                        <div class="character-text body-text">
                            <?= $message['text'] ?>
                        </div>
                    <?php endif ?>
                    <?php if ($message['side'] == "center") : ?>
                        <div class="character-text body-text">
                            <div class="icon" style="background-image: url(/assets/img/story.svg);"></div>
                            <?= $message['text'] ?>
                        </div>
                    <?php endif ?>
                    <?php if ($message['side'] == "instruction") : ?>
                        <div style="display: flex; flex-direction: column; align-items: center; gap: 8px">
                            <div class="character-text body-text" style="width: 100%;">
                                <div class="icon" style="background-image: url(/assets/img/story.svg);"></div>
                                <?= $message['text'] ?>
                            </div>
                            <div class="validate secondary-controls buttons-clickable buttons-clickable-w-border" style="background: var(--primary);padding: 4px 16px;border-radius: 28px;" onclick="next('dilemmas')">
                                <p class="label">Prêt</p>
                            </div>
                        </div>
                    <?php endif ?>
                    <?php if ($message['side'] == "choice") : ?>
                        <div class="dilemmas-choice">
                            <div onclick="dilemmasChoiceAction(1)<?= ($message['choice'][0]['response'] == 'incorrect') ? ',angerMeter()' : '' ?>" class="buttons-clickable buttons-clickable-w-border">
                                <p class="label"><?= $message['choice'][0]['text'] ?></p>
                            </div>
                            <div onclick="dilemmasChoiceAction(2)<?= ($message['choice'][1]['response'] == 'incorrect') ? ',angerMeter()' : '' ?>" class="buttons-clickable buttons-clickable-w-border">
                                <p class="label"><?= $message['choice'][1]['text'] ?></p>
                            </div>
                        </div>
                        <div class="message message-right dilemmas-choice-1">
                            <div class="character-name">
                                <p class="label" style="color: var(--on-surface-1);"><?= $message['choice'][0]['character'] ?></p>
                            </div>
                            <div class="character-text body-text">
                                <?= $message['choice'][0]['longer-text'] ?>
                            </div>
                        </div>
                        <div class="message message-right dilemmas-choice-2">
                            <div class="character-name">
                                <p class="label" style="color: var(--on-surface-1);"><?= $message['choice'][1]['character'] ?></p>
                            </div>
                            <div class="character-text body-text">
                                <?= $message['choice'][1]['longer-text'] ?>
                            </div>
                        </div>
                    <?php endif ?>
                    <?php if ($message['side'] == "next") : ?>
                        <a href="/?page=game&destination=<?= $story[$w][$i]['high-anger']['destination'] ?>" class="primary-control buttons-clickable buttons-clickable-w-border anger-next" style="display: none;width: fit-content;">
                            <div class="icon" style="background-image: url(/assets/img/next.svg);"></div>
                            <p class="label" onclick="removeHref">Suivant</p>
                        </a>
                        <a href="/?page=game&destination=<?= $story[$w][$i]['low-anger']['destination'] ?>" class="primary-control buttons-clickable buttons-clickable-w-border anger-next" style="display: none;width: fit-content;">
                            <div class="icon" style="background-image: url(/assets/img/next.svg);"></div>
                            <p class="label" onclick="removeHref">Suivant</p>
                        </a>
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <div class="controls" style="<?= ($story[$w][$i]['type'] == "dilemmas") ? "justify-content: center !important;" : "" ?>">
        <div class="secondary-controls">
            <div onclick="modal('infos')" class="secondary-control buttons-clickable buttons-clickable-w-border">
                <div class="icon" style="background: url(/assets/img/infos.svg) no-repeat center/cover;"></div>
            </div>
            <div onclick="modal('endings')" class="secondary-control buttons-clickable buttons-clickable-w-border">
                <div class="icon" style="background: url(/assets/img/endings.svg) no-repeat center/cover;"></div>
            </div>
            <div onclick="modal('help')" class="secondary-control buttons-clickable buttons-clickable-w-border">
                <div class="icon" style="background: url(/assets/img/help.svg) no-repeat center/cover;"></div>
            </div>
        </div>
        <?php if ($story[$w][$i]['type'] != "dilemmas") : ?>
            <div class="primary-control buttons-clickable buttons-clickable-w-border" onclick="next()">
                <div class="icon" style="background-image: url(/assets/img/next.svg);"></div>
                <p class="label">Suivant</p>
            </div>
        <?php endif ?>
    </div>
</div>