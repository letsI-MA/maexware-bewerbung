[{oxscript include="js/widgets/oxArticle.js"}]

[{block name="oxcontent"}]
[{parent}] <!-- Hier wird der Inhalt der Artikeldetailseite geladen -->

<!-- Benutzerdefiniertes Feld anzeigen -->
[{if $myCustomField}]
    <div class="custom-field">
        <strong>Custom Field:</strong> {$myCustomField}
    </div>
    [{/if}]
[/block]
