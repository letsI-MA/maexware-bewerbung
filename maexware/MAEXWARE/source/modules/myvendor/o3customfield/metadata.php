$sMetadataVersion = '2.1'; // Modul-Metadataversion
$aModule = [
'id'          => 'o3customfield',
'title'       => 'O3 Custom Field',
'description' => 'Fügt ein neues Feld in der Artikeldetailseite hinzu',
'version'     => '1.0.0',
'author'      => 'Dein Name',
'extend'      => [
\OxidEsales\Eshop\Application\Model\Article::class => \MyVendor\O3CustomField\Application\Model\O3Article::class,
],
'templates' => [
'o3customfield.tpl' => 'myvendor/o3customfield/Application/views/tpl/o3customfield.tpl',
],
'blocks' => [
[
'template' => 'page/details/inc/productmain.tpl',
'block'    => 'details_productmain_morepics',
'file'     => 'o3customfield.tpl'
],
],
];
