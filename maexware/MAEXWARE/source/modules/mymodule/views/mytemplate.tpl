[{assign var="oArticle" value=$oxcmp_user->getArticle() }]
<div class="myCustomField">
    <strong>Benutzerdefiniertes Feld:</strong> [{ $oArticle->getMyCustomField() }]
</div>