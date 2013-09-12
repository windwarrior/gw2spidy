<?php

namespace GW2Spidy\GW2API;

class CraftingMaterial extends API_Item {    
    public function __construct($API_item) {
        parent::__construct($API_item);
    }
    
    public function getSubType() {
        return null;
    }
    
    public function getTooltipDescription() {
        $tooltip = <<<HTML
        <div class="p-tooltip-description db-description">
            <dl class="db-summary">
                <dt class="db-title gwitem-{$this->getRarityLower()}">{$this->getHTMLName()}</dt>
                <dd class="db-itemDescription">{$this->getHTMLDescription()}</dd>
                <dd class="db-ingredient-info">TODO</dd>
            </dl>
        </div>
HTML;
        return $tooltip;
    }
}