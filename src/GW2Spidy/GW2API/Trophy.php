<?php

namespace GW2Spidy\GW2API;

class Trophy extends API_Item {
    
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
            </dl>
        </div>
HTML;
        return $tooltip;
    }
}