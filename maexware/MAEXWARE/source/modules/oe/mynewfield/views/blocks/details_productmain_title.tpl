[{* source/modules/oe/mynewfield/views/blocks/details_productmain_title.tpl *}]
[{if $oDetailsProduct->getMyNewField()}]
    <div class="my-new-field">
        <strong>My New Field:</strong> [{$oDetailsProduct->getMyNewField()}]
    </div>
[{/if}]