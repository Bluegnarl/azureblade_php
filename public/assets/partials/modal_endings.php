<?php

$endings = json_decode(file_get_contents(__DIR__ . '/../../assets/datas/endings.json'), true);

?>

<div class="modal-left modal-endings">
            <div class="labels-container" style="justify-content: space-between; width: 100%;">
                <div class="labels-container" style="justify-content: normal;">
                    <div class="label-container label-container-title">
                            <div class="icon" style="background-image: url(/assets/img/endings.svg);"></div>
                            <p class="label-higher" style="color: var(--on-surface-1);">Épilogues</p>
                    </div>
                    <div class="label-container label-container-title endings-counter">
                        <p class="label-higher" style="color: var(--on-surface-1);"><?= count(json_decode($_COOKIE['endings']), true) ?>/10</p>
                    </div>
                </div>
                <div class="icon-container buttons-clickable" onclick="closeOverlay()">
                    <div class="icon" style="background-image: url(/assets/img/close.svg);"></div>
                </div>
            </div>

            <div class="endings scrollbar-width-none">
                <?php foreach (json_decode($_COOKIE['endings'], true) as $ending_id) {
                    if (isset($endings[$ending_id])) {
                        $ending = $endings[$ending_id - 1];
                    }
                    ?>
                <div class="ending">
                    <div class="ending-title">
                        <p class="label" style="color: var(--on-surface-1)"><?= $ending['title'] ?></p>
                    </div>
                    <div class="ending-text">
                        <p class="body-text"><?= $ending['text'] ?></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>