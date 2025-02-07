<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class ProjectServiceContainer extends Container
{
    private $parameters = [];
    private $targetDirs = [];

    public function __construct()
    {
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->normalizedIds = [
            'doctrine\\dbal\\connection' => 'Doctrine\\DBAL\\Connection',
            'oxidesales\\developertools\\framework\\module\\resetconfiguration\\configurationresettingserviceinterface' => 'OxidEsales\\DeveloperTools\\Framework\\Module\\ResetConfiguration\\ConfigurationResettingServiceInterface',
            'oxidesales\\eshop\\core\\config' => 'OxidEsales\\Eshop\\Core\\Config',
            'oxidesales\\eshopcommunity\\internal\\container\\event\\configurationchangedeventsubscriber' => 'OxidEsales\\EshopCommunity\\Internal\\Container\\Event\\ConfigurationChangedEventSubscriber',
            'oxidesales\\eshopcommunity\\internal\\domain\\authentication\\bridge\\passwordservicebridgeinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Domain\\Authentication\\Bridge\\PasswordServiceBridgeInterface',
            'oxidesales\\eshopcommunity\\internal\\domain\\contact\\form\\contactformbridgeinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Domain\\Contact\\Form\\ContactFormBridgeInterface',
            'oxidesales\\eshopcommunity\\internal\\domain\\email\\emailvalidatorservicebridgeinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Domain\\Email\\EmailValidatorServiceBridgeInterface',
            'oxidesales\\eshopcommunity\\internal\\domain\\review\\bridge\\productratingbridgeinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Bridge\\ProductRatingBridgeInterface',
            'oxidesales\\eshopcommunity\\internal\\domain\\review\\bridge\\userratingbridgeinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Bridge\\UserRatingBridgeInterface',
            'oxidesales\\eshopcommunity\\internal\\domain\\review\\bridge\\userreviewandratingbridgeinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Bridge\\UserReviewAndRatingBridgeInterface',
            'oxidesales\\eshopcommunity\\internal\\domain\\review\\bridge\\userreviewbridgeinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Bridge\\UserReviewBridgeInterface',
            'oxidesales\\eshopcommunity\\internal\\domain\\review\\dao\\ratingdaointerface' => 'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Dao\\RatingDaoInterface',
            'oxidesales\\eshopcommunity\\internal\\domain\\review\\service\\userratingserviceinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserRatingServiceInterface',
            'oxidesales\\eshopcommunity\\internal\\domain\\review\\service\\userreviewserviceinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserReviewServiceInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\config\\dao\\shopconfigurationsettingdaointerface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Dao\\ShopConfigurationSettingDaoInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\config\\utility\\shopsettingencoderinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\console\\executorinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Console\\ExecutorInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\database\\compatibilitychecker\\databasecheckerbridgeinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\CompatibilityChecker\\DatabaseCheckerBridgeInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\database\\logger\\databaseloggerfactoryinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\Logger\\DatabaseLoggerFactoryInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\database\\querybuilderfactoryinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\dicontainer\\dao\\projectyamldaointerface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Dao\\ProjectYamlDaoInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\dicontainer\\service\\projectyamlimportserviceinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Service\\ProjectYamlImportServiceInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\dicontainer\\service\\shopstateserviceinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Service\\ShopStateServiceInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\logger\\validator\\loggerconfigurationvalidatorinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Logger\\Validator\\LoggerConfigurationValidatorInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\command\\installmoduleconfigurationcommand' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\InstallModuleConfigurationCommand',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\command\\uninstallmoduleconfigurationcommand' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\UninstallModuleConfigurationCommand',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\configuration\\bridge\\moduleconfigurationdaobridgeinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Bridge\\ModuleConfigurationDaoBridgeInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\configuration\\bridge\\modulesettingbridgeinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Bridge\\ModuleSettingBridgeInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\configuration\\bridge\\shopconfigurationdaobridgeinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Bridge\\ShopConfigurationDaoBridgeInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\configuration\\dao\\moduleconfigurationdaointerface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ModuleConfigurationDaoInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\configuration\\dao\\projectconfigurationdaointerface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ProjectConfigurationDaoInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\configuration\\dao\\shopconfigurationdaointerface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\configuration\\dao\\shopenvironmentconfigurationdaointerface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentConfigurationDaoInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\configuration\\dao\\shopenvironmentmisconfigurationeventsubscriber' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentMisconfigurationEventSubscriber',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\install\\service\\moduleconfigurationinstallerinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleConfigurationInstallerInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\install\\service\\modulefilesinstallerinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleFilesInstallerInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\install\\service\\moduleinstallerinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleInstallerInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\metadata\\dao\\moduleconfigurationdaointerface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Dao\\ModuleConfigurationDaoInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\path\\modulepathresolverinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Path\\ModulePathResolverInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\setting\\settingdaointerface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setting\\SettingDaoInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\setup\\bridge\\classextensionchainbridgeinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Bridge\\ClassExtensionChainBridgeInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\setup\\bridge\\moduleactivationbridgeinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Bridge\\ModuleActivationBridgeInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\setup\\bridge\\templateblockmodulesettinghandlerbridgeinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Bridge\\TemplateBlockModuleSettingHandlerBridgeInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\setup\\service\\moduleactivationserviceinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\module\\state\\modulestateserviceinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\storage\\filestoragefactoryinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Storage\\FileStorageFactoryInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\templating\\cache\\templatecacheserviceinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Cache\\TemplateCacheServiceInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\templating\\locator\\editionmenufilelocator' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Locator\\EditionMenuFileLocator',
            'oxidesales\\eshopcommunity\\internal\\framework\\templating\\locator\\editionuserfilelocator' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Locator\\EditionUserFileLocator',
            'oxidesales\\eshopcommunity\\internal\\framework\\templating\\resolver\\templatenameresolverinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Resolver\\TemplateNameResolverInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\templating\\templateengineinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateEngineInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\templating\\templaterendererbridgeinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateRendererBridgeInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\templating\\templaterendererinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateRendererInterface',
            'oxidesales\\eshopcommunity\\internal\\framework\\theme\\bridge\\adminthemebridgeinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Theme\\Bridge\\AdminThemeBridgeInterface',
            'oxidesales\\eshopcommunity\\internal\\transition\\adapter\\shopadapterinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface',
            'oxidesales\\eshopcommunity\\internal\\transition\\utility\\basiccontextinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface',
            'oxidesales\\eshopcommunity\\internal\\transition\\utility\\contextinterface' => 'OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface',
            'oxrun\\command\\cache\\clearcommand' => 'Oxrun\\Command\\Cache\\ClearCommand',
            'oxrun\\command\\config\\getcommand' => 'Oxrun\\Command\\Config\\GetCommand',
            'oxrun\\command\\config\\setcommand' => 'Oxrun\\Command\\Config\\SetCommand',
            'oxrun\\command\\config\\shopgetcommand' => 'Oxrun\\Command\\Config\\ShopGetCommand',
            'oxrun\\command\\config\\shopsetcommand' => 'Oxrun\\Command\\Config\\ShopSetCommand',
            'oxrun\\command\\database\\anonymizecommand' => 'Oxrun\\Command\\Database\\AnonymizeCommand',
            'oxrun\\command\\database\\dumpcommand' => 'Oxrun\\Command\\Database\\DumpCommand',
            'oxrun\\command\\database\\importcommand' => 'Oxrun\\Command\\Database\\ImportCommand',
            'oxrun\\command\\database\\info' => 'Oxrun\\Command\\Database\\Info',
            'oxrun\\command\\database\\listcommand' => 'Oxrun\\Command\\Database\\ListCommand',
            'oxrun\\command\\database\\querycommand' => 'Oxrun\\Command\\Database\\QueryCommand',
            'oxrun\\command\\deploy\\configcommand' => 'Oxrun\\Command\\Deploy\\ConfigCommand',
            'oxrun\\command\\deploy\\generateconfigurationcommand' => 'Oxrun\\Command\\Deploy\\GenerateConfigurationCommand',
            'oxrun\\command\\deploy\\generatemoduleactivatorcommand' => 'Oxrun\\Command\\Deploy\\GenerateModuleActivatorCommand',
            'oxrun\\command\\deploy\\linkenvironmentcommand' => 'Oxrun\\Command\\Deploy\\LinkEnvironmentCommand',
            'oxrun\\command\\deploy\\moduleactivatorcommand' => 'Oxrun\\Command\\Deploy\\ModuleActivatorCommand',
            'oxrun\\command\\deploy\\moduleapplyconfigurationlightcommand' => 'Oxrun\\Command\\Deploy\\ModuleApplyConfigurationLightCommand',
            'oxrun\\command\\deploy\\updatemoduleconfigcommand' => 'Oxrun\\Command\\Deploy\\UpdateModuleConfigCommand',
            'oxrun\\command\\misc\\phpstormmetadatacommand' => 'Oxrun\\Command\\Misc\\PhpstormMetadataCommand',
            'oxrun\\command\\misc\\registercommand' => 'Oxrun\\Command\\Misc\\RegisterCommand',
            'oxrun\\command\\module\\generatecommand' => 'Oxrun\\Command\\Module\\GenerateCommand',
            'oxrun\\command\\module\\listcommand' => 'Oxrun\\Command\\Module\\ListCommand',
            'oxrun\\command\\module\\reloadcommand' => 'Oxrun\\Command\\Module\\ReloadCommand',
            'oxrun\\command\\oxid\\shoplistcommand' => 'Oxrun\\Command\\Oxid\\ShopListCommand',
            'oxrun\\command\\route\\debugcommand' => 'Oxrun\\Command\\Route\\DebugCommand',
            'oxrun\\command\\user\\createusercommand' => 'Oxrun\\Command\\User\\CreateUserCommand',
            'oxrun\\command\\user\\passwordcommand' => 'Oxrun\\Command\\User\\PasswordCommand',
            'oxrun\\command\\views\\updatecommand' => 'Oxrun\\Command\\Views\\UpdateCommand',
            'oxrun\\core\\environmentmanager' => 'Oxrun\\Core\\EnvironmentManager',
            'oxrun\\core\\oxruncontext' => 'Oxrun\\Core\\OxrunContext',
            'oxrun\\helper\\filestorage' => 'Oxrun\\Helper\\FileStorage',
            'oxrun\\helper\\mulitsetconfigconverter' => 'Oxrun\\Helper\\MulitSetConfigConverter',
            'psr\\log\\loggerinterface' => 'Psr\\Log\\LoggerInterface',
            'symfony\\component\\eventdispatcher\\eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ];
        $this->methodMap = [
            'Doctrine\\DBAL\\Connection' => 'getConnectionService',
            'OxidEsales\\DeveloperTools\\Framework\\Module\\ResetConfiguration\\ConfigurationResettingServiceInterface' => 'getConfigurationResettingServiceInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Container\\Event\\ConfigurationChangedEventSubscriber' => 'getConfigurationChangedEventSubscriberService',
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Authentication\\Bridge\\PasswordServiceBridgeInterface' => 'getPasswordServiceBridgeInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Contact\\Form\\ContactFormBridgeInterface' => 'getContactFormBridgeInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Email\\EmailValidatorServiceBridgeInterface' => 'getEmailValidatorServiceBridgeInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Bridge\\ProductRatingBridgeInterface' => 'getProductRatingBridgeInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Bridge\\UserRatingBridgeInterface' => 'getUserRatingBridgeInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Bridge\\UserReviewAndRatingBridgeInterface' => 'getUserReviewAndRatingBridgeInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Bridge\\UserReviewBridgeInterface' => 'getUserReviewBridgeInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Dao\\RatingDaoInterface' => 'getRatingDaoInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserRatingServiceInterface' => 'getUserRatingServiceInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserReviewServiceInterface' => 'getUserReviewServiceInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Dao\\ShopConfigurationSettingDaoInterface' => 'getShopConfigurationSettingDaoInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface' => 'getShopSettingEncoderInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Console\\ExecutorInterface' => 'getExecutorInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Dao\\ProjectYamlDaoInterface' => 'getProjectYamlDaoInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Service\\ProjectYamlImportServiceInterface' => 'getProjectYamlImportServiceInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Service\\ShopStateServiceInterface' => 'getShopStateServiceInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\CompatibilityChecker\\DatabaseCheckerBridgeInterface' => 'getDatabaseCheckerBridgeInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\Logger\\DatabaseLoggerFactoryInterface' => 'getDatabaseLoggerFactoryInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface' => 'getQueryBuilderFactoryInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Logger\\Validator\\LoggerConfigurationValidatorInterface' => 'getLoggerConfigurationValidatorInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\InstallModuleConfigurationCommand' => 'getInstallModuleConfigurationCommandService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\UninstallModuleConfigurationCommand' => 'getUninstallModuleConfigurationCommandService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Bridge\\ModuleConfigurationDaoBridgeInterface' => 'getModuleConfigurationDaoBridgeInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Bridge\\ModuleSettingBridgeInterface' => 'getModuleSettingBridgeInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Bridge\\ShopConfigurationDaoBridgeInterface' => 'getShopConfigurationDaoBridgeInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ModuleConfigurationDaoInterface' => 'getModuleConfigurationDaoInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ProjectConfigurationDaoInterface' => 'getProjectConfigurationDaoInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface' => 'getShopConfigurationDaoInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentConfigurationDaoInterface' => 'getShopEnvironmentConfigurationDaoInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentMisconfigurationEventSubscriber' => 'getShopEnvironmentMisconfigurationEventSubscriberService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleConfigurationInstallerInterface' => 'getModuleConfigurationInstallerInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleFilesInstallerInterface' => 'getModuleFilesInstallerInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleInstallerInterface' => 'getModuleInstallerInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Dao\\ModuleConfigurationDaoInterface' => 'getModuleConfigurationDaoInterface2Service',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Path\\ModulePathResolverInterface' => 'getModulePathResolverInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setting\\SettingDaoInterface' => 'getSettingDaoInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Bridge\\ClassExtensionChainBridgeInterface' => 'getClassExtensionChainBridgeInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Bridge\\ModuleActivationBridgeInterface' => 'getModuleActivationBridgeInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Bridge\\TemplateBlockModuleSettingHandlerBridgeInterface' => 'getTemplateBlockModuleSettingHandlerBridgeInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface' => 'getModuleActivationServiceInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface' => 'getModuleStateServiceInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Storage\\FileStorageFactoryInterface' => 'getFileStorageFactoryInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Cache\\TemplateCacheServiceInterface' => 'getTemplateCacheServiceInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Locator\\EditionMenuFileLocator' => 'getEditionMenuFileLocatorService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Locator\\EditionUserFileLocator' => 'getEditionUserFileLocatorService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Resolver\\TemplateNameResolverInterface' => 'getTemplateNameResolverInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateEngineInterface' => 'getTemplateEngineInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateRendererBridgeInterface' => 'getTemplateRendererBridgeInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateRendererInterface' => 'getTemplateRendererInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Theme\\Bridge\\AdminThemeBridgeInterface' => 'getAdminThemeBridgeInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface' => 'getShopAdapterInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface' => 'getBasicContextInterfaceService',
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface' => 'getContextInterfaceService',
            'OxidEsales\\Eshop\\Core\\Config' => 'getConfigService',
            'Oxrun\\Command\\Cache\\ClearCommand' => 'getClearCommandService',
            'Oxrun\\Command\\Config\\GetCommand' => 'getGetCommandService',
            'Oxrun\\Command\\Config\\SetCommand' => 'getSetCommandService',
            'Oxrun\\Command\\Config\\ShopGetCommand' => 'getShopGetCommandService',
            'Oxrun\\Command\\Config\\ShopSetCommand' => 'getShopSetCommandService',
            'Oxrun\\Command\\Database\\AnonymizeCommand' => 'getAnonymizeCommandService',
            'Oxrun\\Command\\Database\\DumpCommand' => 'getDumpCommandService',
            'Oxrun\\Command\\Database\\ImportCommand' => 'getImportCommandService',
            'Oxrun\\Command\\Database\\Info' => 'getInfoService',
            'Oxrun\\Command\\Database\\ListCommand' => 'getListCommandService',
            'Oxrun\\Command\\Database\\QueryCommand' => 'getQueryCommandService',
            'Oxrun\\Command\\Deploy\\ConfigCommand' => 'getConfigCommandService',
            'Oxrun\\Command\\Deploy\\GenerateConfigurationCommand' => 'getGenerateConfigurationCommandService',
            'Oxrun\\Command\\Deploy\\GenerateModuleActivatorCommand' => 'getGenerateModuleActivatorCommandService',
            'Oxrun\\Command\\Deploy\\LinkEnvironmentCommand' => 'getLinkEnvironmentCommandService',
            'Oxrun\\Command\\Deploy\\ModuleActivatorCommand' => 'getModuleActivatorCommandService',
            'Oxrun\\Command\\Deploy\\ModuleApplyConfigurationLightCommand' => 'getModuleApplyConfigurationLightCommandService',
            'Oxrun\\Command\\Deploy\\UpdateModuleConfigCommand' => 'getUpdateModuleConfigCommandService',
            'Oxrun\\Command\\Misc\\PhpstormMetadataCommand' => 'getPhpstormMetadataCommandService',
            'Oxrun\\Command\\Misc\\RegisterCommand' => 'getRegisterCommandService',
            'Oxrun\\Command\\Module\\GenerateCommand' => 'getGenerateCommandService',
            'Oxrun\\Command\\Module\\ListCommand' => 'getListCommand2Service',
            'Oxrun\\Command\\Module\\ReloadCommand' => 'getReloadCommandService',
            'Oxrun\\Command\\Oxid\\ShopListCommand' => 'getShopListCommandService',
            'Oxrun\\Command\\Route\\DebugCommand' => 'getDebugCommandService',
            'Oxrun\\Command\\User\\CreateUserCommand' => 'getCreateUserCommandService',
            'Oxrun\\Command\\User\\PasswordCommand' => 'getPasswordCommandService',
            'Oxrun\\Command\\Views\\UpdateCommand' => 'getUpdateCommandService',
            'Oxrun\\Core\\EnvironmentManager' => 'getEnvironmentManagerService',
            'Oxrun\\Core\\OxrunContext' => 'getOxrunContextService',
            'Oxrun\\Helper\\FileStorage' => 'getFileStorageService',
            'Oxrun\\Helper\\MulitSetConfigConverter' => 'getMulitSetConfigConverterService',
            'Psr\\Log\\LoggerInterface' => 'getLoggerInterfaceService',
            'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface' => 'getEventDispatcherInterfaceService',
            'console.command_loader' => 'getConsole_CommandLoaderService',
            'form.contact_form.contact_form_configuration' => 'getForm_ContactForm_ContactFormConfigurationService',
            'oxid_esales.command.apply_modules_configuration_command' => 'getOxidEsales_Command_ApplyModulesConfigurationCommandService',
            'oxid_esales.command.module_activate_command' => 'getOxidEsales_Command_ModuleActivateCommandService',
            'oxid_esales.command.module_configuration_restore_command' => 'getOxidEsales_Command_ModuleConfigurationRestoreCommandService',
            'oxid_esales.command.module_deactivate_command' => 'getOxidEsales_Command_ModuleDeactivateCommandService',
            'oxid_esales.console.symfony.component.console.application' => 'getOxidEsales_Console_Symfony_Component_Console_ApplicationService',
            'oxid_esales.module.cache.invalidate_module_cache_event_subscriber' => 'getOxidEsales_Module_Cache_InvalidateModuleCacheEventSubscriberService',
            'oxid_esales.module.configuration.node' => 'getOxidEsales_Module_Configuration_NodeService',
            'oxid_esales.module.install.service.bootstrap_module_installer' => 'getOxidEsales_Module_Install_Service_BootstrapModuleInstallerService',
            'oxid_esales.module.install.service.installed_shop_project_configuration_generator' => 'getOxidEsales_Module_Install_Service_InstalledShopProjectConfigurationGeneratorService',
            'oxid_esales.module.install.service.launched_shop_project_configuration_generator' => 'getOxidEsales_Module_Install_Service_LaunchedShopProjectConfigurationGeneratorService',
            'oxid_esales.module.setup.class_extension_chain_service' => 'getOxidEsales_Module_Setup_ClassExtensionChainServiceService',
            'oxid_esales.module.setup.service.eventsubscriber.dispatch_legacy_events_subscriber' => 'getOxidEsales_Module_Setup_Service_Eventsubscriber_DispatchLegacyEventsSubscriberService',
            'oxid_esales.module.setup.service.eventsubscriber.event_logging_subscriber' => 'getOxidEsales_Module_Setup_Service_Eventsubscriber_EventLoggingSubscriberService',
            'oxid_esales.module.setup.template_blocks_module_setting_handler' => 'getOxidEsales_Module_Setup_TemplateBlocksModuleSettingHandlerService',
            'oxid_esales.symfony.file_system' => 'getOxidEsales_Symfony_FileSystemService',
            'oxid_esales.templating.admin.navigation.file.locator' => 'getOxidEsales_Templating_Admin_Navigation_File_LocatorService',
            'oxid_esales.templating.admin.template.loader' => 'getOxidEsales_Templating_Admin_Template_LoaderService',
            'oxid_esales.templating.template.loader' => 'getOxidEsales_Templating_Template_LoaderService',
        ];
        $this->privates = [
            'Doctrine\\DBAL\\Connection' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Container\\Event\\ConfigurationChangedEventSubscriber' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Dao\\RatingDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserRatingServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserReviewServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Dao\\ShopConfigurationSettingDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Dao\\ProjectYamlDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\InstallModuleConfigurationCommand' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\UninstallModuleConfigurationCommand' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ModuleConfigurationDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentConfigurationDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentMisconfigurationEventSubscriber' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleConfigurationInstallerInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Dao\\ModuleConfigurationDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Path\\ModulePathResolverInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setting\\SettingDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Storage\\FileStorageFactoryInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Locator\\EditionMenuFileLocator' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Locator\\EditionUserFileLocator' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Resolver\\TemplateNameResolverInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateEngineInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface' => true,
            'OxidEsales\\Eshop\\Core\\Config' => true,
            'Oxrun\\Command\\Cache\\ClearCommand' => true,
            'Oxrun\\Command\\Config\\GetCommand' => true,
            'Oxrun\\Command\\Config\\SetCommand' => true,
            'Oxrun\\Command\\Config\\ShopGetCommand' => true,
            'Oxrun\\Command\\Config\\ShopSetCommand' => true,
            'Oxrun\\Command\\Database\\AnonymizeCommand' => true,
            'Oxrun\\Command\\Database\\DumpCommand' => true,
            'Oxrun\\Command\\Database\\ImportCommand' => true,
            'Oxrun\\Command\\Database\\Info' => true,
            'Oxrun\\Command\\Database\\ListCommand' => true,
            'Oxrun\\Command\\Database\\QueryCommand' => true,
            'Oxrun\\Command\\Deploy\\ConfigCommand' => true,
            'Oxrun\\Command\\Deploy\\GenerateConfigurationCommand' => true,
            'Oxrun\\Command\\Deploy\\GenerateModuleActivatorCommand' => true,
            'Oxrun\\Command\\Deploy\\LinkEnvironmentCommand' => true,
            'Oxrun\\Command\\Deploy\\ModuleActivatorCommand' => true,
            'Oxrun\\Command\\Deploy\\ModuleApplyConfigurationLightCommand' => true,
            'Oxrun\\Command\\Deploy\\UpdateModuleConfigCommand' => true,
            'Oxrun\\Command\\Misc\\PhpstormMetadataCommand' => true,
            'Oxrun\\Command\\Misc\\RegisterCommand' => true,
            'Oxrun\\Command\\Module\\GenerateCommand' => true,
            'Oxrun\\Command\\Module\\ListCommand' => true,
            'Oxrun\\Command\\Module\\ReloadCommand' => true,
            'Oxrun\\Command\\Oxid\\ShopListCommand' => true,
            'Oxrun\\Command\\Route\\DebugCommand' => true,
            'Oxrun\\Command\\User\\CreateUserCommand' => true,
            'Oxrun\\Command\\User\\PasswordCommand' => true,
            'Oxrun\\Command\\Views\\UpdateCommand' => true,
            'Oxrun\\Core\\EnvironmentManager' => true,
            'Oxrun\\Core\\OxrunContext' => true,
            'Oxrun\\Helper\\FileStorage' => true,
            'Oxrun\\Helper\\MulitSetConfigConverter' => true,
            'form.contact_form.contact_form_configuration' => true,
            'oxid_esales.command.apply_modules_configuration_command' => true,
            'oxid_esales.command.module_activate_command' => true,
            'oxid_esales.command.module_deactivate_command' => true,
            'oxid_esales.module.cache.invalidate_module_cache_event_subscriber' => true,
            'oxid_esales.module.configuration.node' => true,
            'oxid_esales.module.setup.class_extension_chain_service' => true,
            'oxid_esales.module.setup.service.eventsubscriber.dispatch_legacy_events_subscriber' => true,
            'oxid_esales.module.setup.service.eventsubscriber.event_logging_subscriber' => true,
            'oxid_esales.module.setup.template_blocks_module_setting_handler' => true,
            'oxid_esales.symfony.file_system' => true,
        ];

        $this->aliases = [];
    }

    public function getRemovedIds()
    {
        return [
            'Doctrine\\DBAL\\Connection' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Container\\Event\\ConfigurationChangedEventSubscriber' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Authentication\\Policy\\PasswordPolicyInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Authentication\\Service\\PasswordHashServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Authentication\\Service\\PasswordVerificationServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Contact\\Form\\ContactFormMessageBuilderInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Email\\EmailValidatorServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Dao\\ProductRatingDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Dao\\RatingDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Dao\\ReviewDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\DataMapper\\ProductRatingDataMapperInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\DataMapper\\RatingDataMapperInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\DataMapper\\ReviewDataMapperInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\ProductRatingServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\RatingCalculatorServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\ReviewAndRatingMergingServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserRatingServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserReviewAndRatingServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserReviewServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Dao\\ShopConfigurationSettingDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Dao\\ProjectYamlDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Service\\ContainerCacheInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\CompatibilityChecker\\DatabaseCheckerFactoryInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\CompatibilityChecker\\MariaDbCheckerInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\CompatibilityChecker\\MysqlCheckerInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\Logger\\NullLogger' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\Logger\\QueryFilterInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\Logger\\QueryLogger' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\TransactionServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\FileSystem\\FinderFactoryInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Logger\\Configuration\\MonologConfigurationInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Logger\\Factory\\LoggerFactoryInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Cache\\ModuleCacheServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\InstallModuleConfigurationCommand' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\UninstallModuleConfigurationCommand' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Cache\\ShopConfigurationCacheInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ModuleConfigurationDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationExtenderInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentConfigurationDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentMisconfigurationEventSubscriber' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\DataMapper\\ModuleConfigurationDataMapperInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\DataMapper\\ProjectConfigurationDataMapperInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\DataMapper\\ShopConfigurationDataMapperInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Definition\\TreeBuilderFactoryInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Service\\ModuleClassExtensionsMergingServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Service\\ModuleConfigurationMergingServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Service\\SettingsMergingServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleConfigurationInstallerInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Converter\\MetaDataConverterInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Dao\\MetaDataNormalizerInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Dao\\MetaDataProviderInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Dao\\MetaDataSchemataProviderInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Dao\\ModuleConfigurationDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\DataMapper\\MetaDataToModuleConfigurationDataMapperInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Validator\\MetaDataSchemaValidatorInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Validator\\MetaDataValidatorInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Path\\ModulePathResolverInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setting\\SettingDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ActiveClassExtensionChainResolverInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleConfigurationHandlingServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleServicesActivationServiceInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\TemplateExtension\\TemplateBlockExtensionDaoInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Smarty\\Bridge\\SmartyEngineBridgeInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Smarty\\Configuration\\SmartyConfigurationFactoryInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Smarty\\Configuration\\SmartyConfigurationInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Smarty\\Configuration\\SmartyPluginsDataProviderInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Smarty\\Configuration\\SmartyPrefiltersDataProviderInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Smarty\\Configuration\\SmartyResourcesDataProviderInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Smarty\\Configuration\\SmartySecuritySettingsDataProviderInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Smarty\\Configuration\\SmartySettingsDataProviderInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Smarty\\SmartyContextInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Storage\\FileStorageFactoryInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Locator\\AdminTemplateFileLocator' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Locator\\EditionMenuFileLocator' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Locator\\EditionUserFileLocator' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Locator\\TemplateFileLocator' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Resolver\\TemplateNameResolver' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Resolver\\TemplateNameResolverInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateEngineInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\AddUrlParametersLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\AssignAdvancedLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\ContentFactory' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\DateFormatHelper' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\FileSizeLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\FormatCurrencyLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\FormatDateLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\FormatPriceLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\FormatTimeLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\IfContentLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\IncludeDynamicLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\IncludeWidgetLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\InputHelpLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\InsertNewBasketItemLogicSmarty' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\InsertNewBasketItemLogicTwig' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\ScriptLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\SeoUrlLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\SmartWordwrapLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\StyleLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\TranslateFilterLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\TranslateFunctionLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\TranslateSalutationLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\TruncateLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\TemplateLogic\\WordwrapLogic' => true,
            'OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface' => true,
            'OxidEsales\\Eshop\\Core\\Config' => true,
            'OxidEsales\\Eshop\\Core\\UtilsView' => true,
            'Oxrun\\Command\\Cache\\ClearCommand' => true,
            'Oxrun\\Command\\Config\\GetCommand' => true,
            'Oxrun\\Command\\Config\\SetCommand' => true,
            'Oxrun\\Command\\Config\\ShopGetCommand' => true,
            'Oxrun\\Command\\Config\\ShopSetCommand' => true,
            'Oxrun\\Command\\Database\\AnonymizeCommand' => true,
            'Oxrun\\Command\\Database\\DumpCommand' => true,
            'Oxrun\\Command\\Database\\ImportCommand' => true,
            'Oxrun\\Command\\Database\\Info' => true,
            'Oxrun\\Command\\Database\\ListCommand' => true,
            'Oxrun\\Command\\Database\\QueryCommand' => true,
            'Oxrun\\Command\\Deploy\\ConfigCommand' => true,
            'Oxrun\\Command\\Deploy\\GenerateConfigurationCommand' => true,
            'Oxrun\\Command\\Deploy\\GenerateModuleActivatorCommand' => true,
            'Oxrun\\Command\\Deploy\\LinkEnvironmentCommand' => true,
            'Oxrun\\Command\\Deploy\\ModuleActivatorCommand' => true,
            'Oxrun\\Command\\Deploy\\ModuleApplyConfigurationLightCommand' => true,
            'Oxrun\\Command\\Deploy\\UpdateModuleConfigCommand' => true,
            'Oxrun\\Command\\Misc\\PhpstormMetadataCommand' => true,
            'Oxrun\\Command\\Misc\\RegisterCommand' => true,
            'Oxrun\\Command\\Module\\GenerateCommand' => true,
            'Oxrun\\Command\\Module\\ListCommand' => true,
            'Oxrun\\Command\\Module\\ReloadCommand' => true,
            'Oxrun\\Command\\Oxid\\ShopListCommand' => true,
            'Oxrun\\Command\\Route\\DebugCommand' => true,
            'Oxrun\\Command\\User\\CreateUserCommand' => true,
            'Oxrun\\Command\\User\\PasswordCommand' => true,
            'Oxrun\\Command\\Views\\UpdateCommand' => true,
            'Oxrun\\Core\\EnvironmentManager' => true,
            'Oxrun\\Core\\OxrunContext' => true,
            'Oxrun\\Helper\\FileStorage' => true,
            'Oxrun\\Helper\\MulitSetConfigConverter' => true,
            'Psr\\Container\\ContainerInterface' => true,
            'Symfony\\Component\\DependencyInjection\\ContainerInterface' => true,
            'common.form.required_fields_validator' => true,
            'database.logger.admin_monolog_configuration' => true,
            'database.monolog_logger_factory' => true,
            'database.psr_logger' => true,
            'form.contact_form.contact_form_configuration' => true,
            'form.contact_form.contact_form_configuration_factory' => true,
            'form.contact_form.contact_form_email_validator' => true,
            'form.contact_form.contact_form_factory' => true,
            'form.contact_form.contact_form_fields_configuration_data_provider' => true,
            'oxid_esales.command.apply_modules_configuration_command' => true,
            'oxid_esales.command.module_activate_command' => true,
            'oxid_esales.command.module_deactivate_command' => true,
            'oxid_esales.common.file_locator' => true,
            'oxid_esales.common.storage.flock_store' => true,
            'oxid_esales.common.storage.flock_store_lock_factory' => true,
            'oxid_esales.console.commands_provider.services_commands_provider' => true,
            'oxid_esales.module.cache.invalidate_module_cache_event_subscriber' => true,
            'oxid_esales.module.configuration.class_extensions_data_mapper' => true,
            'oxid_esales.module.configuration.classses_without_namespace_data_mapper' => true,
            'oxid_esales.module.configuration.controllers_data_mapper' => true,
            'oxid_esales.module.configuration.events_data_mapper' => true,
            'oxid_esales.module.configuration.module_settings_data_mapper' => true,
            'oxid_esales.module.configuration.node' => true,
            'oxid_esales.module.configuration.smarty_plugin_directories_data_mapper' => true,
            'oxid_esales.module.configuration.template_blocks_data_mapper' => true,
            'oxid_esales.module.configuration.templates_data_mapper' => true,
            'oxid_esales.module.meta_data.converter.shop_module_settings_boolean_converter' => true,
            'oxid_esales.module.meta_data.validator.module_id_validator' => true,
            'oxid_esales.module.meta_data.validator.shop_module_setting_boolean_validator' => true,
            'oxid_esales.module.metadata.datamapper.metadatamapper' => true,
            'oxid_esales.module.setup.class_extension_chain_service' => true,
            'oxid_esales.module.setup.controllers_module_setting_handler' => true,
            'oxid_esales.module.setup.events_module_setting_handler' => true,
            'oxid_esales.module.setup.files_without_namespace_module_setting_handler' => true,
            'oxid_esales.module.setup.path_module_setting_handler' => true,
            'oxid_esales.module.setup.service.eventsubscriber.dispatch_legacy_events_subscriber' => true,
            'oxid_esales.module.setup.service.eventsubscriber.event_logging_subscriber' => true,
            'oxid_esales.module.setup.shop_configuration_class_extension_handler' => true,
            'oxid_esales.module.setup.shop_module_setting_module_setting_handler' => true,
            'oxid_esales.module.setup.smarty_plugin_directories_module_setting_handler' => true,
            'oxid_esales.module.setup.template_blocks_module_setting_handler' => true,
            'oxid_esales.module.setup.templates_module_setting_handler' => true,
            'oxid_esales.module.setup.validator.class_extensions_module_setting_validator' => true,
            'oxid_esales.module.setup.validator.controllers_module_setting_validator' => true,
            'oxid_esales.module.setup.validator.events_module_setting_validator' => true,
            'oxid_esales.module.setup.validator.services_yaml_validator' => true,
            'oxid_esales.module.setup.validator.smarty_plugin_directories_module_setting_validator' => true,
            'oxid_esales.module.setup.version_module_setting_handler' => true,
            'oxid_esales.monolog.logger' => true,
            'oxid_esales.symfony.file_system' => true,
            'service_locator.wkayohq' => true,
            'smarty.smarty_engine_factory' => true,
            'utility.context.admin_log_file_path' => true,
            'utility.context.log_file_path' => true,
            'utility.context.log_level' => true,
        ];
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    /**
     * Gets the public 'OxidEsales\DeveloperTools\Framework\Module\ResetConfiguration\ConfigurationResettingServiceInterface' shared autowired service.
     *
     * @return \OxidEsales\DeveloperTools\Framework\Module\ResetConfiguration\ConfigurationResettingService
     */
    protected function getConfigurationResettingServiceInterfaceService()
    {
        return $this->services['OxidEsales\\DeveloperTools\\Framework\\Module\\ResetConfiguration\\ConfigurationResettingServiceInterface'] = new \OxidEsales\DeveloperTools\Framework\Module\ResetConfiguration\ConfigurationResettingService(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleConfigurationInstallerInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleConfigurationInstallerInterface'] : $this->getModuleConfigurationInstallerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Path\\ModulePathResolverInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Path\\ModulePathResolverInterface'] : $this->getModulePathResolverInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface'] : $this->getShopConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['oxid_esales.module.install.service.launched_shop_project_configuration_generator']) ? $this->services['oxid_esales.module.install.service.launched_shop_project_configuration_generator'] : $this->getOxidEsales_Module_Install_Service_LaunchedShopProjectConfigurationGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context())) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Domain\Authentication\Bridge\PasswordServiceBridgeInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Domain\Authentication\Bridge\PasswordServiceBridge
     */
    protected function getPasswordServiceBridgeInterfaceService()
    {
        $a = new \OxidEsales\EshopCommunity\Internal\Domain\Authentication\Policy\PasswordPolicy();

        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Authentication\\Bridge\\PasswordServiceBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Domain\Authentication\Bridge\PasswordServiceBridge(new \OxidEsales\EshopCommunity\Internal\Domain\Authentication\Service\BcryptPasswordHashService($a, 10), new \OxidEsales\EshopCommunity\Internal\Domain\Authentication\Service\PasswordVerificationService($a));
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Domain\Contact\Form\ContactFormBridgeInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Domain\Contact\Form\ContactFormBridge
     */
    protected function getContactFormBridgeInterfaceService()
    {
        $a = ${($_ = isset($this->services['form.contact_form.contact_form_configuration']) ? $this->services['form.contact_form.contact_form_configuration'] : $this->getForm_ContactForm_ContactFormConfigurationService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Adapter\ShopAdapter())) && false ?: '_'};

        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Contact\\Form\\ContactFormBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Domain\Contact\Form\ContactFormBridge(new \OxidEsales\EshopCommunity\Internal\Domain\Contact\Form\ContactFormFactory($a, new \OxidEsales\EshopCommunity\Internal\Domain\Contact\Form\ContactFormEmailValidator($b), new \OxidEsales\EshopCommunity\Internal\Framework\Form\RequiredFieldsValidator()), new \OxidEsales\EshopCommunity\Internal\Domain\Contact\Form\ContactFormMessageBuilder($b), $a);
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Domain\Email\EmailValidatorServiceBridgeInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Domain\Email\EmailValidatorServiceBridge
     */
    protected function getEmailValidatorServiceBridgeInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Email\\EmailValidatorServiceBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Domain\Email\EmailValidatorServiceBridge(new \OxidEsales\EshopCommunity\Internal\Domain\Email\EmailValidatorService());
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Domain\Review\Bridge\ProductRatingBridgeInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Domain\Review\Bridge\ProductRatingBridge
     */
    protected function getProductRatingBridgeInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Bridge\\ProductRatingBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Domain\Review\Bridge\ProductRatingBridge(new \OxidEsales\EshopCommunity\Internal\Domain\Review\Service\ProductRatingService(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Dao\\RatingDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Dao\\RatingDaoInterface'] : $this->getRatingDaoInterfaceService()) && false ?: '_'}, new \OxidEsales\EshopCommunity\Internal\Domain\Review\Dao\ProductRatingDao(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface'] : $this->getQueryBuilderFactoryInterfaceService()) && false ?: '_'}, new \OxidEsales\EshopCommunity\Internal\Domain\Review\DataMapper\ProductRatingDataMapper()), new \OxidEsales\EshopCommunity\Internal\Domain\Review\Service\RatingCalculatorService()));
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Domain\Review\Bridge\UserRatingBridgeInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Domain\Review\Bridge\UserRatingBridge
     */
    protected function getUserRatingBridgeInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Bridge\\UserRatingBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Domain\Review\Bridge\UserRatingBridge(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserRatingServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserRatingServiceInterface'] : $this->getUserRatingServiceInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Domain\Review\Bridge\UserReviewAndRatingBridgeInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Domain\Review\Bridge\UserReviewAndRatingBridge
     */
    protected function getUserReviewAndRatingBridgeInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Bridge\\UserReviewAndRatingBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Domain\Review\Bridge\UserReviewAndRatingBridge(new \OxidEsales\EshopCommunity\Internal\Domain\Review\Service\UserReviewAndRatingService(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserReviewServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserReviewServiceInterface'] : $this->getUserReviewServiceInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserRatingServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserRatingServiceInterface'] : $this->getUserRatingServiceInterfaceService()) && false ?: '_'}, new \OxidEsales\EshopCommunity\Internal\Domain\Review\Service\ReviewAndRatingMergingService()));
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Domain\Review\Bridge\UserReviewBridgeInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Domain\Review\Bridge\UserReviewBridge
     */
    protected function getUserReviewBridgeInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Bridge\\UserReviewBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Domain\Review\Bridge\UserReviewBridge(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserReviewServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserReviewServiceInterface'] : $this->getUserReviewServiceInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Console\ExecutorInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Console\Executor
     */
    protected function getExecutorInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Console\\ExecutorInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Console\Executor(${($_ = isset($this->services['oxid_esales.console.symfony.component.console.application']) ? $this->services['oxid_esales.console.symfony.component.console.application'] : ($this->services['oxid_esales.console.symfony.component.console.application'] = new \Symfony\Component\Console\Application())) && false ?: '_'}, new \OxidEsales\EshopCommunity\Internal\Framework\Console\CommandsProvider\ServicesCommandsProvider($this));
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\DIContainer\Service\ProjectYamlImportServiceInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\DIContainer\Service\ProjectYamlImportService
     */
    protected function getProjectYamlImportServiceInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Service\\ProjectYamlImportServiceInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\DIContainer\Service\ProjectYamlImportService(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Dao\\ProjectYamlDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Dao\\ProjectYamlDaoInterface'] : $this->getProjectYamlDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\DIContainer\Service\ShopStateServiceInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\DIContainer\Service\ShopStateService
     */
    protected function getShopStateServiceInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Service\\ShopStateServiceInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\DIContainer\Service\ShopStateService(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'}, '\\OxidEsales\\Eshop\\Core\\Registry');
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Database\CompatibilityChecker\DatabaseCheckerBridgeInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Database\CompatibilityChecker\DatabaseCheckerBridge
     */
    protected function getDatabaseCheckerBridgeInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\CompatibilityChecker\\DatabaseCheckerBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Database\CompatibilityChecker\DatabaseCheckerBridge(new \OxidEsales\EshopCommunity\Internal\Framework\Database\CompatibilityChecker\DatabaseCheckerFactory(new \OxidEsales\EshopCommunity\Internal\Framework\Database\CompatibilityChecker\MysqlChecker(), new \OxidEsales\EshopCommunity\Internal\Framework\Database\CompatibilityChecker\MariaDbChecker()));
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Database\Logger\DatabaseLoggerFactoryInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Database\Logger\DatabaseLoggerFactory
     */
    protected function getDatabaseLoggerFactoryInterfaceService()
    {
        $a = ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context())) && false ?: '_'};

        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\Logger\\DatabaseLoggerFactoryInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Database\Logger\DatabaseLoggerFactory($a, new \OxidEsales\EshopCommunity\Internal\Framework\Database\Logger\QueryLogger(new \OxidEsales\EshopCommunity\Internal\Framework\Database\Logger\QueryFilter(), $a, (new \OxidEsales\EshopCommunity\Internal\Framework\Logger\Factory\MonologLoggerFactory(new \OxidEsales\EshopCommunity\Internal\Framework\Logger\Configuration\MonologConfiguration('OXID Admin Logger', $a->getAdminLogFilePath(), 'debug'), ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Logger\\Validator\\LoggerConfigurationValidatorInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Logger\\Validator\\LoggerConfigurationValidatorInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Logger\\Validator\\LoggerConfigurationValidatorInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Logger\Validator\PsrLoggerConfigurationValidator())) && false ?: '_'}))->create()), new \OxidEsales\EshopCommunity\Internal\Framework\Database\Logger\NullLogger());
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Database\QueryBuilderFactoryInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Database\QueryBuilderFactory
     */
    protected function getQueryBuilderFactoryInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Database\QueryBuilderFactory(${($_ = isset($this->services['Doctrine\\DBAL\\Connection']) ? $this->services['Doctrine\\DBAL\\Connection'] : $this->getConnectionService()) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Logger\Validator\LoggerConfigurationValidatorInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Logger\Validator\PsrLoggerConfigurationValidator
     */
    protected function getLoggerConfigurationValidatorInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Logger\\Validator\\LoggerConfigurationValidatorInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Logger\Validator\PsrLoggerConfigurationValidator();
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Bridge\ModuleConfigurationDaoBridgeInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Bridge\ModuleConfigurationDaoBridge
     */
    protected function getModuleConfigurationDaoBridgeInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Bridge\\ModuleConfigurationDaoBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Bridge\ModuleConfigurationDaoBridge(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context())) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ModuleConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ModuleConfigurationDaoInterface'] : $this->getModuleConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentConfigurationDaoInterface'] : $this->getShopEnvironmentConfigurationDaoInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Bridge\ModuleSettingBridgeInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Bridge\ModuleSettingBridge
     */
    protected function getModuleSettingBridgeInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Bridge\\ModuleSettingBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Bridge\ModuleSettingBridge(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context())) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ModuleConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ModuleConfigurationDaoInterface'] : $this->getModuleConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setting\\SettingDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setting\\SettingDaoInterface'] : $this->getSettingDaoInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Bridge\ShopConfigurationDaoBridgeInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Bridge\ShopConfigurationDaoBridge
     */
    protected function getShopConfigurationDaoBridgeInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Bridge\\ShopConfigurationDaoBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Bridge\ShopConfigurationDaoBridge(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context())) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface'] : $this->getShopConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentConfigurationDaoInterface'] : $this->getShopEnvironmentConfigurationDaoInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Dao\ProjectConfigurationDaoInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Dao\ProjectConfigurationDao
     */
    protected function getProjectConfigurationDaoInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ProjectConfigurationDaoInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Dao\ProjectConfigurationDao(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface'] : $this->getShopConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'}, ${($_ = isset($this->services['oxid_esales.symfony.file_system']) ? $this->services['oxid_esales.symfony.file_system'] : ($this->services['oxid_esales.symfony.file_system'] = new \Symfony\Component\Filesystem\Filesystem())) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Module\Install\Service\ModuleFilesInstallerInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Install\Service\ModuleFilesInstaller
     */
    protected function getModuleFilesInstallerInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleFilesInstallerInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Install\Service\ModuleFilesInstaller(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'}, ${($_ = isset($this->services['oxid_esales.symfony.file_system']) ? $this->services['oxid_esales.symfony.file_system'] : ($this->services['oxid_esales.symfony.file_system'] = new \Symfony\Component\Filesystem\Filesystem())) && false ?: '_'}, new \OxidEsales\EshopCommunity\Internal\Framework\FileSystem\FinderFactory());
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Module\Install\Service\ModuleInstallerInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Install\Service\ModuleInstaller
     */
    protected function getModuleInstallerInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleInstallerInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Install\Service\ModuleInstaller(${($_ = isset($this->services['oxid_esales.module.install.service.bootstrap_module_installer']) ? $this->services['oxid_esales.module.install.service.bootstrap_module_installer'] : $this->getOxidEsales_Module_Install_Service_BootstrapModuleInstallerService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface'] : $this->getModuleActivationServiceInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Dao\\ModuleConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Dao\\ModuleConfigurationDaoInterface'] : $this->getModuleConfigurationDaoInterface2Service()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface'] : $this->getShopConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface'] : $this->getModuleStateServiceInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Bridge\ClassExtensionChainBridgeInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Bridge\ClassExtensionChainBridge
     */
    protected function getClassExtensionChainBridgeInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Bridge\\ClassExtensionChainBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Bridge\ClassExtensionChainBridge(${($_ = isset($this->services['oxid_esales.module.setup.class_extension_chain_service']) ? $this->services['oxid_esales.module.setup.class_extension_chain_service'] : $this->getOxidEsales_Module_Setup_ClassExtensionChainServiceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Bridge\ModuleActivationBridgeInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Bridge\ModuleActivationBridge
     */
    protected function getModuleActivationBridgeInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Bridge\\ModuleActivationBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Bridge\ModuleActivationBridge(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface'] : $this->getModuleActivationServiceInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface'] : $this->getModuleStateServiceInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Bridge\TemplateBlockModuleSettingHandlerBridgeInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Bridge\TemplateBlockModuleSettingHandlerBridge
     */
    protected function getTemplateBlockModuleSettingHandlerBridgeInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Bridge\\TemplateBlockModuleSettingHandlerBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Bridge\TemplateBlockModuleSettingHandlerBridge(${($_ = isset($this->services['oxid_esales.module.setup.template_blocks_module_setting_handler']) ? $this->services['oxid_esales.module.setup.template_blocks_module_setting_handler'] : $this->getOxidEsales_Module_Setup_TemplateBlocksModuleSettingHandlerService()) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Module\State\ModuleStateServiceInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\State\ModuleStateService
     */
    protected function getModuleStateServiceInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\State\ModuleStateService(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Dao\\ShopConfigurationSettingDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Dao\\ShopConfigurationSettingDaoInterface'] : $this->getShopConfigurationSettingDaoInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Templating\Cache\TemplateCacheServiceInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Templating\Cache\TemplateCacheService
     */
    protected function getTemplateCacheServiceInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Cache\\TemplateCacheServiceInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Templating\Cache\TemplateCacheService(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'}, ${($_ = isset($this->services['oxid_esales.symfony.file_system']) ? $this->services['oxid_esales.symfony.file_system'] : ($this->services['oxid_esales.symfony.file_system'] = new \Symfony\Component\Filesystem\Filesystem())) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Templating\TemplateRendererBridgeInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Smarty\Bridge\SmartyTemplateRendererBridge
     */
    protected function getTemplateRendererBridgeInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateRendererBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Smarty\Bridge\SmartyTemplateRendererBridge(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateRendererInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateRendererInterface'] : $this->getTemplateRendererInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Templating\TemplateRendererInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Templating\TemplateRenderer
     */
    protected function getTemplateRendererInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateRendererInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Templating\TemplateRenderer(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateEngineInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateEngineInterface'] : $this->getTemplateEngineInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Framework\Theme\Bridge\AdminThemeBridgeInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Theme\Bridge\AdminThemeBridge
     */
    protected function getAdminThemeBridgeInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Theme\\Bridge\\AdminThemeBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Theme\Bridge\AdminThemeBridge('admin');
    }

    /**
     * Gets the public 'OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContextInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext
     */
    protected function getBasicContextInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext();
    }

    /**
     * Gets the public 'Psr\Log\LoggerInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Logger\Wrapper\LoggerWrapper
     */
    protected function getLoggerInterfaceService()
    {
        $a = ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context())) && false ?: '_'};

        return $this->services['Psr\\Log\\LoggerInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Logger\Wrapper\LoggerWrapper((new \OxidEsales\EshopCommunity\Internal\Framework\Logger\Factory\MonologLoggerFactory(new \OxidEsales\EshopCommunity\Internal\Framework\Logger\Configuration\MonologConfiguration('OXID Logger', $a->getLogFilePath(), $a->getLogLevel()), ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Logger\\Validator\\LoggerConfigurationValidatorInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Logger\\Validator\\LoggerConfigurationValidatorInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Logger\\Validator\\LoggerConfigurationValidatorInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Logger\Validator\PsrLoggerConfigurationValidator())) && false ?: '_'}))->create());
    }

    /**
     * Gets the public 'Symfony\Component\EventDispatcher\EventDispatcherInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Event\ShopAwareEventDispatcher
     */
    protected function getEventDispatcherInterfaceService()
    {
        $this->services['Symfony\\Component\\EventDispatcher\\EventDispatcherInterface'] = $instance = new \OxidEsales\EshopCommunity\Internal\Framework\Event\ShopAwareEventDispatcher();

        $instance->addListener('OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Event\\ProjectYamlChangedEvent', [0 => function () {
            return ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Container\\Event\\ConfigurationChangedEventSubscriber']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Container\\Event\\ConfigurationChangedEventSubscriber'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Container\\Event\\ConfigurationChangedEventSubscriber'] = new \OxidEsales\EshopCommunity\Internal\Container\Event\ConfigurationChangedEventSubscriber())) && false ?: '_'};
        }, 1 => 'resetContainer']);
        $instance->addListener('OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentWithOrphanSettingEvent', [0 => function () {
            return ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentMisconfigurationEventSubscriber']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentMisconfigurationEventSubscriber'] : $this->getShopEnvironmentMisconfigurationEventSubscriberService()) && false ?: '_'};
        }, 1 => 'logOrphanSetting']);
        $instance->addListener('OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Event\\FinalizingModuleActivationEvent', [0 => function () {
            return ${($_ = isset($this->services['oxid_esales.module.setup.service.eventsubscriber.dispatch_legacy_events_subscriber']) ? $this->services['oxid_esales.module.setup.service.eventsubscriber.dispatch_legacy_events_subscriber'] : $this->getOxidEsales_Module_Setup_Service_Eventsubscriber_DispatchLegacyEventsSubscriberService()) && false ?: '_'};
        }, 1 => 'executeMetadataOnActivationEvent']);
        $instance->addListener('OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Event\\BeforeModuleDeactivationEvent', [0 => function () {
            return ${($_ = isset($this->services['oxid_esales.module.setup.service.eventsubscriber.dispatch_legacy_events_subscriber']) ? $this->services['oxid_esales.module.setup.service.eventsubscriber.dispatch_legacy_events_subscriber'] : $this->getOxidEsales_Module_Setup_Service_Eventsubscriber_DispatchLegacyEventsSubscriberService()) && false ?: '_'};
        }, 1 => 'executeMetadataOnDeactivationEvent']);
        $instance->addListener('OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Event\\ServicesYamlConfigurationErrorEvent', [0 => function () {
            return ${($_ = isset($this->services['oxid_esales.module.setup.service.eventsubscriber.event_logging_subscriber']) ? $this->services['oxid_esales.module.setup.service.eventsubscriber.event_logging_subscriber'] : $this->getOxidEsales_Module_Setup_Service_Eventsubscriber_EventLoggingSubscriberService()) && false ?: '_'};
        }, 1 => 'logConfigurationError']);
        $instance->addListener('OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Event\\FinalizingModuleActivationEvent', [0 => function () {
            return ${($_ = isset($this->services['oxid_esales.module.cache.invalidate_module_cache_event_subscriber']) ? $this->services['oxid_esales.module.cache.invalidate_module_cache_event_subscriber'] : $this->getOxidEsales_Module_Cache_InvalidateModuleCacheEventSubscriberService()) && false ?: '_'};
        }, 1 => 'invalidateModuleCache']);
        $instance->addListener('OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Event\\FinalizingModuleDeactivationEvent', [0 => function () {
            return ${($_ = isset($this->services['oxid_esales.module.cache.invalidate_module_cache_event_subscriber']) ? $this->services['oxid_esales.module.cache.invalidate_module_cache_event_subscriber'] : $this->getOxidEsales_Module_Cache_InvalidateModuleCacheEventSubscriberService()) && false ?: '_'};
        }, 1 => 'invalidateModuleCache']);

        return $instance;
    }

    /**
     * Gets the public 'console.command_loader' shared service.
     *
     * @return \Symfony\Component\Console\CommandLoader\ContainerCommandLoader
     */
    protected function getConsole_CommandLoaderService()
    {
        return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\InstallModuleConfigurationCommand' => function () {
            $f = function (\OxidEsales\EshopCommunity\Internal\Framework\Module\Command\InstallModuleConfigurationCommand $v) { return $v; }; return $f(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\InstallModuleConfigurationCommand']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\InstallModuleConfigurationCommand'] : $this->getInstallModuleConfigurationCommandService()) && false ?: '_'});
        }, 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\UninstallModuleConfigurationCommand' => function () {
            $f = function (\OxidEsales\EshopCommunity\Internal\Framework\Module\Command\UninstallModuleConfigurationCommand $v) { return $v; }; return $f(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\UninstallModuleConfigurationCommand']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\UninstallModuleConfigurationCommand'] : $this->getUninstallModuleConfigurationCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Cache\\ClearCommand' => function () {
            $f = function (\Oxrun\Command\Cache\ClearCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Cache\\ClearCommand']) ? $this->services['Oxrun\\Command\\Cache\\ClearCommand'] : $this->getClearCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Config\\GetCommand' => function () {
            $f = function (\Oxrun\Command\Config\GetCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Config\\GetCommand']) ? $this->services['Oxrun\\Command\\Config\\GetCommand'] : $this->getGetCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Config\\SetCommand' => function () {
            $f = function (\Oxrun\Command\Config\SetCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Config\\SetCommand']) ? $this->services['Oxrun\\Command\\Config\\SetCommand'] : $this->getSetCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Config\\ShopGetCommand' => function () {
            $f = function (\Oxrun\Command\Config\ShopGetCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Config\\ShopGetCommand']) ? $this->services['Oxrun\\Command\\Config\\ShopGetCommand'] : $this->getShopGetCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Config\\ShopSetCommand' => function () {
            $f = function (\Oxrun\Command\Config\ShopSetCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Config\\ShopSetCommand']) ? $this->services['Oxrun\\Command\\Config\\ShopSetCommand'] : $this->getShopSetCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Database\\AnonymizeCommand' => function () {
            $f = function (\Oxrun\Command\Database\AnonymizeCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Database\\AnonymizeCommand']) ? $this->services['Oxrun\\Command\\Database\\AnonymizeCommand'] : $this->getAnonymizeCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Database\\DumpCommand' => function () {
            $f = function (\Oxrun\Command\Database\DumpCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Database\\DumpCommand']) ? $this->services['Oxrun\\Command\\Database\\DumpCommand'] : $this->getDumpCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Database\\ImportCommand' => function () {
            $f = function (\Oxrun\Command\Database\ImportCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Database\\ImportCommand']) ? $this->services['Oxrun\\Command\\Database\\ImportCommand'] : $this->getImportCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Database\\Info' => function () {
            $f = function (\Oxrun\Command\Database\Info $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Database\\Info']) ? $this->services['Oxrun\\Command\\Database\\Info'] : $this->getInfoService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Database\\ListCommand' => function () {
            $f = function (\Oxrun\Command\Database\ListCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Database\\ListCommand']) ? $this->services['Oxrun\\Command\\Database\\ListCommand'] : $this->getListCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Database\\QueryCommand' => function () {
            $f = function (\Oxrun\Command\Database\QueryCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Database\\QueryCommand']) ? $this->services['Oxrun\\Command\\Database\\QueryCommand'] : $this->getQueryCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Deploy\\ConfigCommand' => function () {
            $f = function (\Oxrun\Command\Deploy\ConfigCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Deploy\\ConfigCommand']) ? $this->services['Oxrun\\Command\\Deploy\\ConfigCommand'] : $this->getConfigCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Deploy\\GenerateConfigurationCommand' => function () {
            $f = function (\Oxrun\Command\Deploy\GenerateConfigurationCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Deploy\\GenerateConfigurationCommand']) ? $this->services['Oxrun\\Command\\Deploy\\GenerateConfigurationCommand'] : $this->getGenerateConfigurationCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Deploy\\GenerateModuleActivatorCommand' => function () {
            $f = function (\Oxrun\Command\Deploy\GenerateModuleActivatorCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Deploy\\GenerateModuleActivatorCommand']) ? $this->services['Oxrun\\Command\\Deploy\\GenerateModuleActivatorCommand'] : $this->getGenerateModuleActivatorCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Deploy\\LinkEnvironmentCommand' => function () {
            $f = function (\Oxrun\Command\Deploy\LinkEnvironmentCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Deploy\\LinkEnvironmentCommand']) ? $this->services['Oxrun\\Command\\Deploy\\LinkEnvironmentCommand'] : $this->getLinkEnvironmentCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Deploy\\ModuleActivatorCommand' => function () {
            $f = function (\Oxrun\Command\Deploy\ModuleActivatorCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Deploy\\ModuleActivatorCommand']) ? $this->services['Oxrun\\Command\\Deploy\\ModuleActivatorCommand'] : $this->getModuleActivatorCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Deploy\\ModuleApplyConfigurationLightCommand' => function () {
            $f = function (\Oxrun\Command\Deploy\ModuleApplyConfigurationLightCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Deploy\\ModuleApplyConfigurationLightCommand']) ? $this->services['Oxrun\\Command\\Deploy\\ModuleApplyConfigurationLightCommand'] : $this->getModuleApplyConfigurationLightCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Deploy\\UpdateModuleConfigCommand' => function () {
            $f = function (\Oxrun\Command\Deploy\UpdateModuleConfigCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Deploy\\UpdateModuleConfigCommand']) ? $this->services['Oxrun\\Command\\Deploy\\UpdateModuleConfigCommand'] : $this->getUpdateModuleConfigCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Misc\\PhpstormMetadataCommand' => function () {
            $f = function (\Oxrun\Command\Misc\PhpstormMetadataCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Misc\\PhpstormMetadataCommand']) ? $this->services['Oxrun\\Command\\Misc\\PhpstormMetadataCommand'] : $this->getPhpstormMetadataCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Misc\\RegisterCommand' => function () {
            $f = function (\Oxrun\Command\Misc\RegisterCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Misc\\RegisterCommand']) ? $this->services['Oxrun\\Command\\Misc\\RegisterCommand'] : $this->getRegisterCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Module\\GenerateCommand' => function () {
            $f = function (\Oxrun\Command\Module\GenerateCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Module\\GenerateCommand']) ? $this->services['Oxrun\\Command\\Module\\GenerateCommand'] : $this->getGenerateCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Module\\ListCommand' => function () {
            $f = function (\Oxrun\Command\Module\ListCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Module\\ListCommand']) ? $this->services['Oxrun\\Command\\Module\\ListCommand'] : $this->getListCommand2Service()) && false ?: '_'});
        }, 'Oxrun\\Command\\Module\\ReloadCommand' => function () {
            $f = function (\Oxrun\Command\Module\ReloadCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Module\\ReloadCommand']) ? $this->services['Oxrun\\Command\\Module\\ReloadCommand'] : $this->getReloadCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Oxid\\ShopListCommand' => function () {
            $f = function (\Oxrun\Command\Oxid\ShopListCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Oxid\\ShopListCommand']) ? $this->services['Oxrun\\Command\\Oxid\\ShopListCommand'] : $this->getShopListCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Route\\DebugCommand' => function () {
            $f = function (\Oxrun\Command\Route\DebugCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Route\\DebugCommand']) ? $this->services['Oxrun\\Command\\Route\\DebugCommand'] : $this->getDebugCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\User\\CreateUserCommand' => function () {
            $f = function (\Oxrun\Command\User\CreateUserCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\User\\CreateUserCommand']) ? $this->services['Oxrun\\Command\\User\\CreateUserCommand'] : $this->getCreateUserCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\User\\PasswordCommand' => function () {
            $f = function (\Oxrun\Command\User\PasswordCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\User\\PasswordCommand']) ? $this->services['Oxrun\\Command\\User\\PasswordCommand'] : $this->getPasswordCommandService()) && false ?: '_'});
        }, 'Oxrun\\Command\\Views\\UpdateCommand' => function () {
            $f = function (\Oxrun\Command\Views\UpdateCommand $v) { return $v; }; return $f(${($_ = isset($this->services['Oxrun\\Command\\Views\\UpdateCommand']) ? $this->services['Oxrun\\Command\\Views\\UpdateCommand'] : $this->getUpdateCommandService()) && false ?: '_'});
        }, 'oxid_esales.command.apply_modules_configuration_command' => function () {
            $f = function (\OxidEsales\EshopCommunity\Internal\Framework\Module\Command\ApplyModulesConfigurationCommand $v) { return $v; }; return $f(${($_ = isset($this->services['oxid_esales.command.apply_modules_configuration_command']) ? $this->services['oxid_esales.command.apply_modules_configuration_command'] : $this->getOxidEsales_Command_ApplyModulesConfigurationCommandService()) && false ?: '_'});
        }, 'oxid_esales.command.module_activate_command' => function () {
            $f = function (\OxidEsales\EshopCommunity\Internal\Framework\Module\Command\ModuleActivateCommand $v) { return $v; }; return $f(${($_ = isset($this->services['oxid_esales.command.module_activate_command']) ? $this->services['oxid_esales.command.module_activate_command'] : $this->getOxidEsales_Command_ModuleActivateCommandService()) && false ?: '_'});
        }, 'oxid_esales.command.module_configuration_restore_command' => function () {
            $f = function (\OxidEsales\DeveloperTools\Framework\Module\ResetConfiguration\ResetConfigurationCommand $v) { return $v; }; return $f(${($_ = isset($this->services['oxid_esales.command.module_configuration_restore_command']) ? $this->services['oxid_esales.command.module_configuration_restore_command'] : $this->getOxidEsales_Command_ModuleConfigurationRestoreCommandService()) && false ?: '_'});
        }, 'oxid_esales.command.module_deactivate_command' => function () {
            $f = function (\OxidEsales\EshopCommunity\Internal\Framework\Module\Command\ModuleDeactivateCommand $v) { return $v; }; return $f(${($_ = isset($this->services['oxid_esales.command.module_deactivate_command']) ? $this->services['oxid_esales.command.module_deactivate_command'] : $this->getOxidEsales_Command_ModuleDeactivateCommandService()) && false ?: '_'});
        }]), ['oe:module:activate' => 'oxid_esales.command.module_activate_command', 'oe:module:deactivate' => 'oxid_esales.command.module_deactivate_command', 'oe:module:install-configuration' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\InstallModuleConfigurationCommand', 'oe:module:uninstall-configuration' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\UninstallModuleConfigurationCommand', 'oe:module:apply-configuration' => 'oxid_esales.command.apply_modules_configuration_command', 'oe:module:reset-configurations' => 'oxid_esales.command.module_configuration_restore_command', 'cache:clear' => 'Oxrun\\Command\\Cache\\ClearCommand', 'config:shop:get' => 'Oxrun\\Command\\Config\\ShopGetCommand', 'config:shop:set' => 'Oxrun\\Command\\Config\\ShopSetCommand', 'db:anonymize' => 'Oxrun\\Command\\Database\\AnonymizeCommand', 'db:dump' => 'Oxrun\\Command\\Database\\DumpCommand', 'db:import' => 'Oxrun\\Command\\Database\\ImportCommand', 'db:info' => 'Oxrun\\Command\\Database\\Info', 'db:list' => 'Oxrun\\Command\\Database\\ListCommand', 'db:query' => 'Oxrun\\Command\\Database\\QueryCommand', 'misc:phpstorm:metadata' => 'Oxrun\\Command\\Misc\\PhpstormMetadataCommand', 'misc:register:command' => 'Oxrun\\Command\\Misc\\RegisterCommand', 'module:generate' => 'Oxrun\\Command\\Module\\GenerateCommand', 'module:list' => 'Oxrun\\Command\\Module\\ListCommand', 'module:reload' => 'Oxrun\\Command\\Module\\ReloadCommand', 'oxid:shops' => 'Oxrun\\Command\\Oxid\\ShopListCommand', 'route:debug' => 'Oxrun\\Command\\Route\\DebugCommand', 'user:create' => 'Oxrun\\Command\\User\\CreateUserCommand', 'user:password' => 'Oxrun\\Command\\User\\PasswordCommand', 'views:update' => 'Oxrun\\Command\\Views\\UpdateCommand', 'deploy:update-module-config' => 'Oxrun\\Command\\Deploy\\UpdateModuleConfigCommand', 'deploy:module-apply-configuration-light' => 'Oxrun\\Command\\Deploy\\ModuleApplyConfigurationLightCommand', 'deploy:module-activator' => 'Oxrun\\Command\\Deploy\\ModuleActivatorCommand', 'config:get' => 'Oxrun\\Command\\Config\\GetCommand', 'deploy:generate:module-activator' => 'Oxrun\\Command\\Deploy\\GenerateModuleActivatorCommand', 'deploy:generate:configuration' => 'Oxrun\\Command\\Deploy\\GenerateConfigurationCommand', 'deploy:config' => 'Oxrun\\Command\\Deploy\\ConfigCommand', 'config:set' => 'Oxrun\\Command\\Config\\SetCommand', 'deploy:link:environment' => 'Oxrun\\Command\\Deploy\\LinkEnvironmentCommand']);
    }

    /**
     * Gets the public 'oxid_esales.command.module_configuration_restore_command' shared autowired service.
     *
     * @return \OxidEsales\DeveloperTools\Framework\Module\ResetConfiguration\ResetConfigurationCommand
     */
    protected function getOxidEsales_Command_ModuleConfigurationRestoreCommandService()
    {
        $this->services['oxid_esales.command.module_configuration_restore_command'] = $instance = new \OxidEsales\DeveloperTools\Framework\Module\ResetConfiguration\ResetConfigurationCommand(${($_ = isset($this->services['OxidEsales\\DeveloperTools\\Framework\\Module\\ResetConfiguration\\ConfigurationResettingServiceInterface']) ? $this->services['OxidEsales\\DeveloperTools\\Framework\\Module\\ResetConfiguration\\ConfigurationResettingServiceInterface'] : $this->getConfigurationResettingServiceInterfaceService()) && false ?: '_'});

        $instance->setName('oe:module:reset-configurations');

        return $instance;
    }

    /**
     * Gets the public 'oxid_esales.console.symfony.component.console.application' shared autowired service.
     *
     * @return \Symfony\Component\Console\Application
     */
    protected function getOxidEsales_Console_Symfony_Component_Console_ApplicationService()
    {
        return $this->services['oxid_esales.console.symfony.component.console.application'] = new \Symfony\Component\Console\Application();
    }

    /**
     * Gets the public 'oxid_esales.module.install.service.bootstrap_module_installer' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Install\Service\BootstrapModuleInstaller
     */
    protected function getOxidEsales_Module_Install_Service_BootstrapModuleInstallerService()
    {
        return $this->services['oxid_esales.module.install.service.bootstrap_module_installer'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Install\Service\BootstrapModuleInstaller(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleFilesInstallerInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleFilesInstallerInterface'] : $this->getModuleFilesInstallerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleConfigurationInstallerInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleConfigurationInstallerInterface'] : $this->getModuleConfigurationInstallerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'oxid_esales.module.install.service.installed_shop_project_configuration_generator' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Install\Service\ProjectConfigurationGenerator
     */
    protected function getOxidEsales_Module_Install_Service_InstalledShopProjectConfigurationGeneratorService()
    {
        return $this->services['oxid_esales.module.install.service.installed_shop_project_configuration_generator'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Install\Service\ProjectConfigurationGenerator(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ProjectConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ProjectConfigurationDaoInterface'] : $this->getProjectConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'});
    }

    /**
     * Gets the public 'oxid_esales.module.install.service.launched_shop_project_configuration_generator' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Install\Service\ProjectConfigurationGenerator
     */
    protected function getOxidEsales_Module_Install_Service_LaunchedShopProjectConfigurationGeneratorService()
    {
        return $this->services['oxid_esales.module.install.service.launched_shop_project_configuration_generator'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Install\Service\ProjectConfigurationGenerator(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ProjectConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ProjectConfigurationDaoInterface'] : $this->getProjectConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context())) && false ?: '_'});
    }

    /**
     * Gets the public 'oxid_esales.templating.admin.navigation.file.locator' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Templating\Locator\AdminNavigationFileLocator
     */
    protected function getOxidEsales_Templating_Admin_Navigation_File_LocatorService()
    {
        return $this->services['oxid_esales.templating.admin.navigation.file.locator'] = new \OxidEsales\EshopCommunity\Internal\Framework\Templating\Locator\AdminNavigationFileLocator(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Locator\\EditionUserFileLocator']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Locator\\EditionUserFileLocator'] : $this->getEditionUserFileLocatorService()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Locator\\EditionMenuFileLocator']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Locator\\EditionMenuFileLocator'] : $this->getEditionMenuFileLocatorService()) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the public 'oxid_esales.templating.admin.template.loader' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Templating\Loader\TemplateLoader
     */
    protected function getOxidEsales_Templating_Admin_Template_LoaderService()
    {
        return $this->services['oxid_esales.templating.admin.template.loader'] = new \OxidEsales\EshopCommunity\Internal\Framework\Templating\Loader\TemplateLoader(new \OxidEsales\EshopCommunity\Internal\Framework\Templating\Locator\AdminTemplateFileLocator(${($_ = isset($this->services['OxidEsales\\Eshop\\Core\\Config']) ? $this->services['OxidEsales\\Eshop\\Core\\Config'] : $this->getConfigService()) && false ?: '_'}), ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Resolver\\TemplateNameResolverInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Resolver\\TemplateNameResolverInterface'] : $this->getTemplateNameResolverInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the public 'oxid_esales.templating.template.loader' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Templating\Loader\TemplateLoader
     */
    protected function getOxidEsales_Templating_Template_LoaderService()
    {
        return $this->services['oxid_esales.templating.template.loader'] = new \OxidEsales\EshopCommunity\Internal\Framework\Templating\Loader\TemplateLoader(new \OxidEsales\EshopCommunity\Internal\Framework\Templating\Locator\TemplateFileLocator(${($_ = isset($this->services['OxidEsales\\Eshop\\Core\\Config']) ? $this->services['OxidEsales\\Eshop\\Core\\Config'] : $this->getConfigService()) && false ?: '_'}), ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Resolver\\TemplateNameResolverInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Resolver\\TemplateNameResolverInterface'] : $this->getTemplateNameResolverInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the private 'Doctrine\DBAL\Connection' shared autowired service.
     *
     * @return \Doctrine\DBAL\Connection
     */
    protected function getConnectionService()
    {
        return $this->services['Doctrine\\DBAL\\Connection'] = \OxidEsales\EshopCommunity\Internal\Framework\Database\ConnectionFactory::get();
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Container\Event\ConfigurationChangedEventSubscriber' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Container\Event\ConfigurationChangedEventSubscriber
     */
    protected function getConfigurationChangedEventSubscriberService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Container\\Event\\ConfigurationChangedEventSubscriber'] = new \OxidEsales\EshopCommunity\Internal\Container\Event\ConfigurationChangedEventSubscriber();
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Domain\Review\Dao\RatingDaoInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Domain\Review\Dao\RatingDao
     */
    protected function getRatingDaoInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Dao\\RatingDaoInterface'] = new \OxidEsales\EshopCommunity\Internal\Domain\Review\Dao\RatingDao(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface'] : $this->getQueryBuilderFactoryInterfaceService()) && false ?: '_'}, new \OxidEsales\EshopCommunity\Internal\Domain\Review\DataMapper\RatingDataMapper());
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Domain\Review\Service\UserRatingServiceInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Domain\Review\Service\UserRatingService
     */
    protected function getUserRatingServiceInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserRatingServiceInterface'] = new \OxidEsales\EshopCommunity\Internal\Domain\Review\Service\UserRatingService(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Dao\\RatingDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Dao\\RatingDaoInterface'] : $this->getRatingDaoInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Domain\Review\Service\UserReviewServiceInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Domain\Review\Service\UserReviewService
     */
    protected function getUserReviewServiceInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Domain\\Review\\Service\\UserReviewServiceInterface'] = new \OxidEsales\EshopCommunity\Internal\Domain\Review\Service\UserReviewService(new \OxidEsales\EshopCommunity\Internal\Domain\Review\Dao\ReviewDao(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface'] : $this->getQueryBuilderFactoryInterfaceService()) && false ?: '_'}, new \OxidEsales\EshopCommunity\Internal\Domain\Review\DataMapper\ReviewDataMapper()));
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Config\Dao\ShopConfigurationSettingDaoInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Config\Dao\ShopConfigurationSettingDao
     */
    protected function getShopConfigurationSettingDaoInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Dao\\ShopConfigurationSettingDaoInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Config\Dao\ShopConfigurationSettingDao(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface'] : $this->getQueryBuilderFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context())) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Config\Utility\ShopSettingEncoder())) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Adapter\ShopAdapter())) && false ?: '_'}, ${($_ = isset($this->services['Symfony\\Component\\EventDispatcher\\EventDispatcherInterface']) ? $this->services['Symfony\\Component\\EventDispatcher\\EventDispatcherInterface'] : $this->getEventDispatcherInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Config\Utility\ShopSettingEncoderInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Config\Utility\ShopSettingEncoder
     */
    protected function getShopSettingEncoderInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Config\Utility\ShopSettingEncoder();
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\DIContainer\Dao\ProjectYamlDaoInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\DIContainer\Dao\ContainerAwareProjectYamlDao
     */
    protected function getProjectYamlDaoInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Dao\\ProjectYamlDaoInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\DIContainer\Dao\ContainerAwareProjectYamlDao(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'}, ${($_ = isset($this->services['Symfony\\Component\\EventDispatcher\\EventDispatcherInterface']) ? $this->services['Symfony\\Component\\EventDispatcher\\EventDispatcherInterface'] : $this->getEventDispatcherInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['oxid_esales.symfony.file_system']) ? $this->services['oxid_esales.symfony.file_system'] : ($this->services['oxid_esales.symfony.file_system'] = new \Symfony\Component\Filesystem\Filesystem())) && false ?: '_'});
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Module\Command\InstallModuleConfigurationCommand' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Command\InstallModuleConfigurationCommand
     */
    protected function getInstallModuleConfigurationCommandService()
    {
        $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\InstallModuleConfigurationCommand'] = $instance = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Command\InstallModuleConfigurationCommand(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleConfigurationInstallerInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleConfigurationInstallerInterface'] : $this->getModuleConfigurationInstallerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'});

        $instance->setName('oe:module:install-configuration');

        return $instance;
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Module\Command\UninstallModuleConfigurationCommand' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Command\UninstallModuleConfigurationCommand
     */
    protected function getUninstallModuleConfigurationCommandService()
    {
        $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\UninstallModuleConfigurationCommand'] = $instance = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Command\UninstallModuleConfigurationCommand(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleConfigurationInstallerInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleConfigurationInstallerInterface'] : $this->getModuleConfigurationInstallerInterfaceService()) && false ?: '_'});

        $instance->setName('oe:module:uninstall-configuration');

        return $instance;
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Dao\ModuleConfigurationDaoInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Dao\ModuleConfigurationDao
     */
    protected function getModuleConfigurationDaoInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ModuleConfigurationDaoInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Dao\ModuleConfigurationDao(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface'] : $this->getShopConfigurationDaoInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Dao\ShopConfigurationDaoInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Dao\ShopConfigurationDao
     */
    protected function getShopConfigurationDaoInterfaceService()
    {
        $a = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\DataMapper\ModuleConfiguration\ClassesWithoutNamespaceDataMapper();

        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Dao\ShopConfigurationDao(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\DataMapper\ShopConfigurationDataMapper(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\DataMapper\ModuleConfigurationDataMapper($a, $a, new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\DataMapper\ModuleConfiguration\ClassExtensionsDataMapper(), new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\DataMapper\ModuleConfiguration\ControllersDataMapper(), new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\DataMapper\ModuleConfiguration\EventsDataMapper(), new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\DataMapper\ModuleConfiguration\ModuleSettingsDataMapper(), new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\DataMapper\ModuleConfiguration\SmartyPluginDirectoriesDataMapper(), new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\DataMapper\ModuleConfiguration\TemplateBlocksDataMapper(), new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\DataMapper\ModuleConfiguration\TemplatesDataMapper())), ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Storage\\FileStorageFactoryInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Storage\\FileStorageFactoryInterface'] : $this->getFileStorageFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'}, new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Cache\ClassPropertyShopConfigurationCache(), ${($_ = isset($this->services['oxid_esales.symfony.file_system']) ? $this->services['oxid_esales.symfony.file_system'] : ($this->services['oxid_esales.symfony.file_system'] = new \Symfony\Component\Filesystem\Filesystem())) && false ?: '_'}, ${($_ = isset($this->services['oxid_esales.module.configuration.node']) ? $this->services['oxid_esales.module.configuration.node'] : $this->getOxidEsales_Module_Configuration_NodeService()) && false ?: '_'}, new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Dao\ShopEnvironmentConfigurationExtender(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentConfigurationDaoInterface'] : $this->getShopEnvironmentConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['Symfony\\Component\\EventDispatcher\\EventDispatcherInterface']) ? $this->services['Symfony\\Component\\EventDispatcher\\EventDispatcherInterface'] : $this->getEventDispatcherInterfaceService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Dao\ShopEnvironmentConfigurationDaoInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Dao\ShopEnvironmentConfigurationDao
     */
    protected function getShopEnvironmentConfigurationDaoInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentConfigurationDaoInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Dao\ShopEnvironmentConfigurationDao(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Storage\\FileStorageFactoryInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Storage\\FileStorageFactoryInterface'] : $this->getFileStorageFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['oxid_esales.symfony.file_system']) ? $this->services['oxid_esales.symfony.file_system'] : ($this->services['oxid_esales.symfony.file_system'] = new \Symfony\Component\Filesystem\Filesystem())) && false ?: '_'}, ${($_ = isset($this->services['oxid_esales.module.configuration.node']) ? $this->services['oxid_esales.module.configuration.node'] : $this->getOxidEsales_Module_Configuration_NodeService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'});
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Dao\ShopEnvironmentMisconfigurationEventSubscriber' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Dao\ShopEnvironmentMisconfigurationEventSubscriber
     */
    protected function getShopEnvironmentMisconfigurationEventSubscriberService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopEnvironmentMisconfigurationEventSubscriber'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Dao\ShopEnvironmentMisconfigurationEventSubscriber(${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Module\Install\Service\ModuleConfigurationInstallerInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Install\Service\ModuleConfigurationInstaller
     */
    protected function getModuleConfigurationInstallerInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleConfigurationInstallerInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Install\Service\ModuleConfigurationInstaller(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ProjectConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ProjectConfigurationDaoInterface'] : $this->getProjectConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'}, new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Service\ModuleConfigurationMergingService(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Service\SettingsMergingService(), new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Service\ModuleClassExtensionsMergingService()), ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Dao\\ModuleConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Dao\\ModuleConfigurationDaoInterface'] : $this->getModuleConfigurationDaoInterface2Service()) && false ?: '_'});
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Module\MetaData\Dao\ModuleConfigurationDaoInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\MetaData\Dao\ModuleConfigurationDao
     */
    protected function getModuleConfigurationDaoInterface2Service()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Dao\\ModuleConfigurationDaoInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\MetaData\Dao\ModuleConfigurationDao(new \OxidEsales\EshopCommunity\Internal\Framework\Module\MetaData\Dao\MetaDataProvider(new \OxidEsales\EshopCommunity\Internal\Framework\Module\MetaData\Dao\MetaDataNormalizer(), ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'}, new \OxidEsales\EshopCommunity\Internal\Framework\Module\MetaData\Validator\MetaDataValidatorAggregate(new \OxidEsales\EshopCommunity\Internal\Framework\Module\MetaData\Validator\ModuleIdValidator(), new \OxidEsales\EshopCommunity\Internal\Framework\Module\MetaData\Validator\ModuleSettingBooleanValidator()), new \OxidEsales\EshopCommunity\Internal\Framework\Module\MetaData\Converter\MetaDataConverterAggregate(new \OxidEsales\EshopCommunity\Internal\Framework\Module\MetaData\Converter\ModuleSettingsBooleanConverter())), new \OxidEsales\EshopCommunity\Internal\Framework\Module\MetaData\DataMapper\MetaDataMapper(new \OxidEsales\EshopCommunity\Internal\Framework\Module\MetaData\Validator\MetaDataSchemaValidator(new \OxidEsales\EshopCommunity\Internal\Framework\Module\MetaData\Dao\MetaDataSchemataProvider($this->parameters['oxid_esales.module.metadata.service.metadata_schemata']))));
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Module\Path\ModulePathResolverInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Path\ModulePathResolver
     */
    protected function getModulePathResolverInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Path\\ModulePathResolverInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Path\ModulePathResolver(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ModuleConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ModuleConfigurationDaoInterface'] : $this->getModuleConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'});
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Module\Setting\SettingDaoInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Setting\SettingDao
     */
    protected function getSettingDaoInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setting\\SettingDaoInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setting\SettingDao(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface'] : $this->getQueryBuilderFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context())) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Config\Utility\ShopSettingEncoder())) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Adapter\ShopAdapter())) && false ?: '_'}, new \OxidEsales\EshopCommunity\Internal\Framework\Database\TransactionService(${($_ = isset($this->services['Doctrine\\DBAL\\Connection']) ? $this->services['Doctrine\\DBAL\\Connection'] : $this->getConnectionService()) && false ?: '_'}), ${($_ = isset($this->services['Symfony\\Component\\EventDispatcher\\EventDispatcherInterface']) ? $this->services['Symfony\\Component\\EventDispatcher\\EventDispatcherInterface'] : $this->getEventDispatcherInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Service\ModuleActivationServiceInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Service\ModuleActivationService
     */
    protected function getModuleActivationServiceInterfaceService()
    {
        $a = ${($_ = isset($this->services['Symfony\\Component\\EventDispatcher\\EventDispatcherInterface']) ? $this->services['Symfony\\Component\\EventDispatcher\\EventDispatcherInterface'] : $this->getEventDispatcherInterfaceService()) && false ?: '_'};
        $b = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Service\ModuleConfigurationHandlingService();

        $c = ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Dao\\ShopConfigurationSettingDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Dao\\ShopConfigurationSettingDaoInterface'] : $this->getShopConfigurationSettingDaoInterfaceService()) && false ?: '_'};
        $d = ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Adapter\ShopAdapter())) && false ?: '_'};
        $e = ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Path\\ModulePathResolverInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Path\\ModulePathResolverInterface'] : $this->getModulePathResolverInterfaceService()) && false ?: '_'};
        $f = ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Dao\\ProjectYamlDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\DIContainer\\Dao\\ProjectYamlDaoInterface'] : $this->getProjectYamlDaoInterfaceService()) && false ?: '_'};

        $b->addHandler(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Handler\ModulePathHandler($c));
        $b->addHandler(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Handler\ModuleVersionHandler($c));
        $b->addHandler(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Handler\TemplatesModuleSettingHandler($c));
        $b->addHandler(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Handler\ControllersModuleSettingHandler($c));
        $b->addHandler(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Handler\ShopConfigurationSmartyPluginDirectoryHandler($c));
        $b->addHandler(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Handler\ShopConfigurationClassExtensionsHandler($c));
        $b->addHandler(${($_ = isset($this->services['oxid_esales.module.setup.template_blocks_module_setting_handler']) ? $this->services['oxid_esales.module.setup.template_blocks_module_setting_handler'] : $this->getOxidEsales_Module_Setup_TemplateBlocksModuleSettingHandlerService()) && false ?: '_'});
        $b->addHandler(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Handler\SettingModuleSettingHandler(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setting\\SettingDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setting\\SettingDaoInterface'] : $this->getSettingDaoInterfaceService()) && false ?: '_'}));
        $b->addHandler(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Handler\ShopConfigurationEventsHandler($c));
        $b->addHandler(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Handler\ShopConfigurationClassesWithoutNamespaceHandler($c));
        $b->addValidator(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Validator\ControllersValidator($d, $c, ${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'}));
        $b->addValidator(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Validator\SmartyPluginDirectoriesValidator($e));
        $b->addValidator(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Validator\ClassExtensionsValidator($d));
        $b->addValidator(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Validator\EventsValidator($d));
        $b->addValidator(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Validator\ServicesYamlValidator(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'}, $f));
        $g = ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface'] : $this->getModuleStateServiceInterfaceService()) && false ?: '_'};

        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Service\ModuleActivationService(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ModuleConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ModuleConfigurationDaoInterface'] : $this->getModuleConfigurationDaoInterfaceService()) && false ?: '_'}, $a, $b, $g, ${($_ = isset($this->services['oxid_esales.module.setup.class_extension_chain_service']) ? $this->services['oxid_esales.module.setup.class_extension_chain_service'] : $this->getOxidEsales_Module_Setup_ClassExtensionChainServiceService()) && false ?: '_'}, new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Service\ModuleServicesActivationService($f, $a, $e, $g, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context())) && false ?: '_'}));
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Storage\FileStorageFactoryInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Storage\YamlFileStorageFactory
     */
    protected function getFileStorageFactoryInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Storage\\FileStorageFactoryInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Storage\YamlFileStorageFactory(new \Symfony\Component\Config\FileLocator(), new \Symfony\Component\Lock\Factory(new \Symfony\Component\Lock\Store\FlockStore()), ${($_ = isset($this->services['oxid_esales.symfony.file_system']) ? $this->services['oxid_esales.symfony.file_system'] : ($this->services['oxid_esales.symfony.file_system'] = new \Symfony\Component\Filesystem\Filesystem())) && false ?: '_'});
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Templating\Locator\EditionMenuFileLocator' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Templating\Locator\EditionMenuFileLocator
     */
    protected function getEditionMenuFileLocatorService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Locator\\EditionMenuFileLocator'] = new \OxidEsales\EshopCommunity\Internal\Framework\Templating\Locator\EditionMenuFileLocator(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Theme\\Bridge\\AdminThemeBridgeInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Theme\\Bridge\\AdminThemeBridgeInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Theme\\Bridge\\AdminThemeBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Theme\Bridge\AdminThemeBridge('admin'))) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'}, ${($_ = isset($this->services['oxid_esales.symfony.file_system']) ? $this->services['oxid_esales.symfony.file_system'] : ($this->services['oxid_esales.symfony.file_system'] = new \Symfony\Component\Filesystem\Filesystem())) && false ?: '_'});
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Templating\Locator\EditionUserFileLocator' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Templating\Locator\EditionUserFileLocator
     */
    protected function getEditionUserFileLocatorService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Locator\\EditionUserFileLocator'] = new \OxidEsales\EshopCommunity\Internal\Framework\Templating\Locator\EditionUserFileLocator(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Theme\\Bridge\\AdminThemeBridgeInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Theme\\Bridge\\AdminThemeBridgeInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Theme\\Bridge\\AdminThemeBridgeInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Theme\Bridge\AdminThemeBridge('admin'))) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'}, ${($_ = isset($this->services['oxid_esales.symfony.file_system']) ? $this->services['oxid_esales.symfony.file_system'] : ($this->services['oxid_esales.symfony.file_system'] = new \Symfony\Component\Filesystem\Filesystem())) && false ?: '_'});
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Templating\Resolver\TemplateNameResolverInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Templating\Resolver\LegacyTemplateNameResolver
     */
    protected function getTemplateNameResolverInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Resolver\\TemplateNameResolverInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Templating\Resolver\LegacyTemplateNameResolver(new \OxidEsales\EshopCommunity\Internal\Framework\Templating\Resolver\TemplateNameResolver(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateEngineInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateEngineInterface'] : $this->getTemplateEngineInterfaceService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Framework\Templating\TemplateEngineInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Smarty\Legacy\LegacySmartyEngine
     */
    protected function getTemplateEngineInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\TemplateEngineInterface'] = (new \OxidEsales\EshopCommunity\Internal\Framework\Smarty\Legacy\LegacySmartyEngineFactory(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Adapter\ShopAdapter())) && false ?: '_'}, new \OxidEsales\EshopCommunity\Internal\Framework\Smarty\Bridge\SmartyEngineBridge()))->getTemplateEngine();
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Transition\Adapter\ShopAdapterInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Transition\Adapter\ShopAdapter
     */
    protected function getShopAdapterInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Adapter\ShopAdapter();
    }

    /**
     * Gets the private 'OxidEsales\EshopCommunity\Internal\Transition\Utility\ContextInterface' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context
     */
    protected function getContextInterfaceService()
    {
        return $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context();
    }

    /**
     * Gets the private 'OxidEsales\Eshop\Core\Config' shared autowired service.
     *
     * @return \OxidEsales\Eshop\Core\Config
     */
    protected function getConfigService()
    {
        return $this->services['OxidEsales\\Eshop\\Core\\Config'] = \OxidEsales\Eshop\Core\Registry::getConfig();
    }

    /**
     * Gets the private 'Oxrun\Command\Cache\ClearCommand' shared service.
     *
     * @return \Oxrun\Command\Cache\ClearCommand
     */
    protected function getClearCommandService()
    {
        $this->services['Oxrun\\Command\\Cache\\ClearCommand'] = $instance = new \Oxrun\Command\Cache\ClearCommand();

        $instance->setName('cache:clear');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Config\GetCommand' shared autowired service.
     *
     * @return \Oxrun\Command\Config\GetCommand
     */
    protected function getGetCommandService()
    {
        $this->services['Oxrun\\Command\\Config\\GetCommand'] = $instance = new \Oxrun\Command\Config\GetCommand(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface'] : $this->getQueryBuilderFactoryInterfaceService()) && false ?: '_'});

        $instance->setName('config:get');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Config\SetCommand' shared autowired service.
     *
     * @return \Oxrun\Command\Config\SetCommand
     */
    protected function getSetCommandService()
    {
        $this->services['Oxrun\\Command\\Config\\SetCommand'] = $instance = new \Oxrun\Command\Config\SetCommand(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface'] : $this->getQueryBuilderFactoryInterfaceService()) && false ?: '_'});

        $instance->setName('config:set');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Config\ShopGetCommand' shared service.
     *
     * @return \Oxrun\Command\Config\ShopGetCommand
     */
    protected function getShopGetCommandService()
    {
        $this->services['Oxrun\\Command\\Config\\ShopGetCommand'] = $instance = new \Oxrun\Command\Config\ShopGetCommand();

        $instance->setName('config:shop:get');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Config\ShopSetCommand' shared service.
     *
     * @return \Oxrun\Command\Config\ShopSetCommand
     */
    protected function getShopSetCommandService()
    {
        $this->services['Oxrun\\Command\\Config\\ShopSetCommand'] = $instance = new \Oxrun\Command\Config\ShopSetCommand();

        $instance->setName('config:shop:set');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Database\AnonymizeCommand' shared service.
     *
     * @return \Oxrun\Command\Database\AnonymizeCommand
     */
    protected function getAnonymizeCommandService()
    {
        $this->services['Oxrun\\Command\\Database\\AnonymizeCommand'] = $instance = new \Oxrun\Command\Database\AnonymizeCommand();

        $instance->setName('db:anonymize');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Database\DumpCommand' shared service.
     *
     * @return \Oxrun\Command\Database\DumpCommand
     */
    protected function getDumpCommandService()
    {
        $this->services['Oxrun\\Command\\Database\\DumpCommand'] = $instance = new \Oxrun\Command\Database\DumpCommand();

        $instance->setName('db:dump');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Database\ImportCommand' shared service.
     *
     * @return \Oxrun\Command\Database\ImportCommand
     */
    protected function getImportCommandService()
    {
        $this->services['Oxrun\\Command\\Database\\ImportCommand'] = $instance = new \Oxrun\Command\Database\ImportCommand();

        $instance->setName('db:import');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Database\Info' shared service.
     *
     * @return \Oxrun\Command\Database\Info
     */
    protected function getInfoService()
    {
        $this->services['Oxrun\\Command\\Database\\Info'] = $instance = new \Oxrun\Command\Database\Info();

        $instance->setName('db:info');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Database\ListCommand' shared service.
     *
     * @return \Oxrun\Command\Database\ListCommand
     */
    protected function getListCommandService()
    {
        $this->services['Oxrun\\Command\\Database\\ListCommand'] = $instance = new \Oxrun\Command\Database\ListCommand();

        $instance->setName('db:list');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Database\QueryCommand' shared service.
     *
     * @return \Oxrun\Command\Database\QueryCommand
     */
    protected function getQueryCommandService()
    {
        $this->services['Oxrun\\Command\\Database\\QueryCommand'] = $instance = new \Oxrun\Command\Database\QueryCommand();

        $instance->setName('db:query');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Deploy\ConfigCommand' shared autowired service.
     *
     * @return \Oxrun\Command\Deploy\ConfigCommand
     */
    protected function getConfigCommandService()
    {
        $this->services['Oxrun\\Command\\Deploy\\ConfigCommand'] = $instance = new \Oxrun\Command\Deploy\ConfigCommand(${($_ = isset($this->services['Oxrun\\Core\\OxrunContext']) ? $this->services['Oxrun\\Core\\OxrunContext'] : $this->getOxrunContextService()) && false ?: '_'}, ${($_ = isset($this->services['Oxrun\\Core\\EnvironmentManager']) ? $this->services['Oxrun\\Core\\EnvironmentManager'] : $this->getEnvironmentManagerService()) && false ?: '_'});

        $instance->setName('deploy:config');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Deploy\GenerateConfigurationCommand' shared autowired service.
     *
     * @return \Oxrun\Command\Deploy\GenerateConfigurationCommand
     */
    protected function getGenerateConfigurationCommandService()
    {
        $this->services['Oxrun\\Command\\Deploy\\GenerateConfigurationCommand'] = $instance = new \Oxrun\Command\Deploy\GenerateConfigurationCommand(${($_ = isset($this->services['Oxrun\\Core\\OxrunContext']) ? $this->services['Oxrun\\Core\\OxrunContext'] : $this->getOxrunContextService()) && false ?: '_'}, ${($_ = isset($this->services['Oxrun\\Core\\EnvironmentManager']) ? $this->services['Oxrun\\Core\\EnvironmentManager'] : $this->getEnvironmentManagerService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface'] : $this->getQueryBuilderFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['Oxrun\\Helper\\MulitSetConfigConverter']) ? $this->services['Oxrun\\Helper\\MulitSetConfigConverter'] : $this->getMulitSetConfigConverterService()) && false ?: '_'}, ${($_ = isset($this->services['Oxrun\\Helper\\FileStorage']) ? $this->services['Oxrun\\Helper\\FileStorage'] : ($this->services['Oxrun\\Helper\\FileStorage'] = new \Oxrun\Helper\FileStorage())) && false ?: '_'});

        $instance->setName('deploy:generate:configuration');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Deploy\GenerateModuleActivatorCommand' shared autowired service.
     *
     * @return \Oxrun\Command\Deploy\GenerateModuleActivatorCommand
     */
    protected function getGenerateModuleActivatorCommandService()
    {
        $this->services['Oxrun\\Command\\Deploy\\GenerateModuleActivatorCommand'] = $instance = new \Oxrun\Command\Deploy\GenerateModuleActivatorCommand(${($_ = isset($this->services['Oxrun\\Core\\OxrunContext']) ? $this->services['Oxrun\\Core\\OxrunContext'] : $this->getOxrunContextService()) && false ?: '_'});

        $instance->setName('deploy:generate:module-activator');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Deploy\LinkEnvironmentCommand' shared autowired service.
     *
     * @return \Oxrun\Command\Deploy\LinkEnvironmentCommand
     */
    protected function getLinkEnvironmentCommandService()
    {
        $this->services['Oxrun\\Command\\Deploy\\LinkEnvironmentCommand'] = $instance = new \Oxrun\Command\Deploy\LinkEnvironmentCommand(${($_ = isset($this->services['Oxrun\\Core\\OxrunContext']) ? $this->services['Oxrun\\Core\\OxrunContext'] : $this->getOxrunContextService()) && false ?: '_'}, ${($_ = isset($this->services['Oxrun\\Core\\EnvironmentManager']) ? $this->services['Oxrun\\Core\\EnvironmentManager'] : $this->getEnvironmentManagerService()) && false ?: '_'});

        $instance->setName('deploy:link:environment');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Deploy\ModuleActivatorCommand' shared autowired service.
     *
     * @return \Oxrun\Command\Deploy\ModuleActivatorCommand
     */
    protected function getModuleActivatorCommandService()
    {
        $this->services['Oxrun\\Command\\Deploy\\ModuleActivatorCommand'] = $instance = new \Oxrun\Command\Deploy\ModuleActivatorCommand(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface'] : $this->getShopConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context())) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface'] : $this->getModuleActivationServiceInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface'] : $this->getModuleStateServiceInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface'] : $this->getQueryBuilderFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleConfigurationInstallerInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Install\\Service\\ModuleConfigurationInstallerInterface'] : $this->getModuleConfigurationInstallerInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['Oxrun\\Core\\OxrunContext']) ? $this->services['Oxrun\\Core\\OxrunContext'] : $this->getOxrunContextService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Dao\\ModuleConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\MetaData\\Dao\\ModuleConfigurationDaoInterface'] : $this->getModuleConfigurationDaoInterface2Service()) && false ?: '_'});

        $instance->setName('deploy:module-activator');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Deploy\ModuleApplyConfigurationLightCommand' shared autowired service.
     *
     * @return \Oxrun\Command\Deploy\ModuleApplyConfigurationLightCommand
     */
    protected function getModuleApplyConfigurationLightCommandService()
    {
        $this->services['Oxrun\\Command\\Deploy\\ModuleApplyConfigurationLightCommand'] = $instance = new \Oxrun\Command\Deploy\ModuleApplyConfigurationLightCommand(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface'] : $this->getShopConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface'] : $this->getModuleStateServiceInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setting\\SettingDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setting\\SettingDaoInterface'] : $this->getSettingDaoInterfaceService()) && false ?: '_'});

        $instance->setName('deploy:module-apply-configuration-light');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Deploy\UpdateModuleConfigCommand' shared autowired service.
     *
     * @return \Oxrun\Command\Deploy\UpdateModuleConfigCommand
     */
    protected function getUpdateModuleConfigCommandService()
    {
        $this->services['Oxrun\\Command\\Deploy\\UpdateModuleConfigCommand'] = $instance = new \Oxrun\Command\Deploy\UpdateModuleConfigCommand(${($_ = isset($this->services['Oxrun\\Core\\OxrunContext']) ? $this->services['Oxrun\\Core\\OxrunContext'] : $this->getOxrunContextService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface'] : $this->getShopConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Config\Utility\ShopSettingEncoder())) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface'] : $this->getQueryBuilderFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['Oxrun\\Core\\EnvironmentManager']) ? $this->services['Oxrun\\Core\\EnvironmentManager'] : $this->getEnvironmentManagerService()) && false ?: '_'});

        $instance->setName('deploy:update-module-config');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Misc\PhpstormMetadataCommand' shared service.
     *
     * @return \Oxrun\Command\Misc\PhpstormMetadataCommand
     */
    protected function getPhpstormMetadataCommandService()
    {
        $this->services['Oxrun\\Command\\Misc\\PhpstormMetadataCommand'] = $instance = new \Oxrun\Command\Misc\PhpstormMetadataCommand();

        $instance->setName('misc:phpstorm:metadata');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Misc\RegisterCommand' shared service.
     *
     * @return \Oxrun\Command\Misc\RegisterCommand
     */
    protected function getRegisterCommandService()
    {
        $this->services['Oxrun\\Command\\Misc\\RegisterCommand'] = $instance = new \Oxrun\Command\Misc\RegisterCommand();

        $instance->setName('misc:register:command');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Module\GenerateCommand' shared service.
     *
     * @return \Oxrun\Command\Module\GenerateCommand
     */
    protected function getGenerateCommandService()
    {
        $this->services['Oxrun\\Command\\Module\\GenerateCommand'] = $instance = new \Oxrun\Command\Module\GenerateCommand();

        $instance->setName('module:generate');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Module\ListCommand' shared service.
     *
     * @return \Oxrun\Command\Module\ListCommand
     */
    protected function getListCommand2Service()
    {
        $this->services['Oxrun\\Command\\Module\\ListCommand'] = $instance = new \Oxrun\Command\Module\ListCommand();

        $instance->setName('module:list');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Module\ReloadCommand' shared autowired service.
     *
     * @return \Oxrun\Command\Module\ReloadCommand
     */
    protected function getReloadCommandService()
    {
        $this->services['Oxrun\\Command\\Module\\ReloadCommand'] = $instance = new \Oxrun\Command\Module\ReloadCommand(${($_ = isset($this->services['Oxrun\\Core\\OxrunContext']) ? $this->services['Oxrun\\Core\\OxrunContext'] : $this->getOxrunContextService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context())) && false ?: '_'});

        $instance->setName('module:reload');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Oxid\ShopListCommand' shared service.
     *
     * @return \Oxrun\Command\Oxid\ShopListCommand
     */
    protected function getShopListCommandService()
    {
        $this->services['Oxrun\\Command\\Oxid\\ShopListCommand'] = $instance = new \Oxrun\Command\Oxid\ShopListCommand();

        $instance->setName('oxid:shops');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Route\DebugCommand' shared service.
     *
     * @return \Oxrun\Command\Route\DebugCommand
     */
    protected function getDebugCommandService()
    {
        $this->services['Oxrun\\Command\\Route\\DebugCommand'] = $instance = new \Oxrun\Command\Route\DebugCommand();

        $instance->setName('route:debug');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\User\CreateUserCommand' shared service.
     *
     * @return \Oxrun\Command\User\CreateUserCommand
     */
    protected function getCreateUserCommandService()
    {
        $this->services['Oxrun\\Command\\User\\CreateUserCommand'] = $instance = new \Oxrun\Command\User\CreateUserCommand();

        $instance->setName('user:create');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\User\PasswordCommand' shared service.
     *
     * @return \Oxrun\Command\User\PasswordCommand
     */
    protected function getPasswordCommandService()
    {
        $this->services['Oxrun\\Command\\User\\PasswordCommand'] = $instance = new \Oxrun\Command\User\PasswordCommand();

        $instance->setName('user:password');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Command\Views\UpdateCommand' shared service.
     *
     * @return \Oxrun\Command\Views\UpdateCommand
     */
    protected function getUpdateCommandService()
    {
        $this->services['Oxrun\\Command\\Views\\UpdateCommand'] = $instance = new \Oxrun\Command\Views\UpdateCommand();

        $instance->setName('views:update');

        return $instance;
    }

    /**
     * Gets the private 'Oxrun\Core\EnvironmentManager' shared autowired service.
     *
     * @return \Oxrun\Core\EnvironmentManager
     */
    protected function getEnvironmentManagerService()
    {
        return $this->services['Oxrun\\Core\\EnvironmentManager'] = new \Oxrun\Core\EnvironmentManager(${($_ = isset($this->services['Oxrun\\Core\\OxrunContext']) ? $this->services['Oxrun\\Core\\OxrunContext'] : $this->getOxrunContextService()) && false ?: '_'});
    }

    /**
     * Gets the private 'Oxrun\Core\OxrunContext' shared autowired service.
     *
     * @return \Oxrun\Core\OxrunContext
     */
    protected function getOxrunContextService()
    {
        return $this->services['Oxrun\\Core\\OxrunContext'] = new \Oxrun\Core\OxrunContext(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\BasicContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\BasicContext())) && false ?: '_'});
    }

    /**
     * Gets the private 'Oxrun\Helper\FileStorage' shared service.
     *
     * @return \Oxrun\Helper\FileStorage
     */
    protected function getFileStorageService()
    {
        return $this->services['Oxrun\\Helper\\FileStorage'] = new \Oxrun\Helper\FileStorage();
    }

    /**
     * Gets the private 'Oxrun\Helper\MulitSetConfigConverter' shared autowired service.
     *
     * @return \Oxrun\Helper\MulitSetConfigConverter
     */
    protected function getMulitSetConfigConverterService()
    {
        return $this->services['Oxrun\\Helper\\MulitSetConfigConverter'] = new \Oxrun\Helper\MulitSetConfigConverter(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Utility\\ShopSettingEncoderInterface'] = new \OxidEsales\EshopCommunity\Internal\Framework\Config\Utility\ShopSettingEncoder())) && false ?: '_'});
    }

    /**
     * Gets the private 'form.contact_form.contact_form_configuration' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\FormConfiguration\FormConfiguration
     */
    protected function getForm_ContactForm_ContactFormConfigurationService()
    {
        return $this->services['form.contact_form.contact_form_configuration'] = (new \OxidEsales\EshopCommunity\Internal\Domain\Contact\Form\ContactFormConfigurationFactory(new \OxidEsales\EshopCommunity\Internal\Domain\Contact\Form\ContactFormFieldsConfigurationDataProvider(), ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context())) && false ?: '_'}))->getFormConfiguration();
    }

    /**
     * Gets the private 'oxid_esales.command.apply_modules_configuration_command' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Command\ApplyModulesConfigurationCommand
     */
    protected function getOxidEsales_Command_ApplyModulesConfigurationCommandService()
    {
        $this->services['oxid_esales.command.apply_modules_configuration_command'] = $instance = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Command\ApplyModulesConfigurationCommand(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface'] : $this->getShopConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface'] : $this->getModuleActivationServiceInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface'] : $this->getModuleStateServiceInterfaceService()) && false ?: '_'});

        $instance->setName('oe:module:apply-configuration');

        return $instance;
    }

    /**
     * Gets the private 'oxid_esales.command.module_activate_command' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Command\ModuleActivateCommand
     */
    protected function getOxidEsales_Command_ModuleActivateCommandService()
    {
        $this->services['oxid_esales.command.module_activate_command'] = $instance = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Command\ModuleActivateCommand(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface'] : $this->getShopConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context())) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface'] : $this->getModuleActivationServiceInterfaceService()) && false ?: '_'});

        $instance->setName('oe:module:activate');

        return $instance;
    }

    /**
     * Gets the private 'oxid_esales.command.module_deactivate_command' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Command\ModuleDeactivateCommand
     */
    protected function getOxidEsales_Command_ModuleDeactivateCommandService()
    {
        $this->services['oxid_esales.command.module_deactivate_command'] = $instance = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Command\ModuleDeactivateCommand(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface'] : $this->getShopConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context())) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Setup\\Service\\ModuleActivationServiceInterface'] : $this->getModuleActivationServiceInterfaceService()) && false ?: '_'});

        $instance->setName('oe:module:deactivate');

        return $instance;
    }

    /**
     * Gets the private 'oxid_esales.module.cache.invalidate_module_cache_event_subscriber' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Cache\InvalidateModuleCacheEventSubscriber
     */
    protected function getOxidEsales_Module_Cache_InvalidateModuleCacheEventSubscriberService()
    {
        return $this->services['oxid_esales.module.cache.invalidate_module_cache_event_subscriber'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Cache\InvalidateModuleCacheEventSubscriber(new \OxidEsales\EshopCommunity\Internal\Framework\Module\Cache\ShopModuleCacheService(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Adapter\ShopAdapter())) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Cache\\TemplateCacheServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Templating\\Cache\\TemplateCacheServiceInterface'] : $this->getTemplateCacheServiceInterfaceService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'oxid_esales.module.configuration.node' shared autowired service.
     *
     * @return \Symfony\Component\Config\Definition\NodeInterface
     */
    protected function getOxidEsales_Module_Configuration_NodeService()
    {
        return $this->services['oxid_esales.module.configuration.node'] = (new \OxidEsales\EshopCommunity\Internal\Framework\Module\Configuration\Definition\TreeBuilderFactory())->create();
    }

    /**
     * Gets the private 'oxid_esales.module.setup.class_extension_chain_service' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Service\ClassExtensionChainService
     */
    protected function getOxidEsales_Module_Setup_ClassExtensionChainServiceService()
    {
        return $this->services['oxid_esales.module.setup.class_extension_chain_service'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Service\ClassExtensionChainService(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Dao\\ShopConfigurationSettingDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Config\\Dao\\ShopConfigurationSettingDaoInterface'] : $this->getShopConfigurationSettingDaoInterfaceService()) && false ?: '_'}, new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Service\ActiveClassExtensionChainResolver(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ShopConfigurationDaoInterface'] : $this->getShopConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\State\\ModuleStateServiceInterface'] : $this->getModuleStateServiceInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Utility\\ContextInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Utility\Context())) && false ?: '_'}));
    }

    /**
     * Gets the private 'oxid_esales.module.setup.service.eventsubscriber.dispatch_legacy_events_subscriber' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\EventSubscriber\DispatchLegacyEventsSubscriber
     */
    protected function getOxidEsales_Module_Setup_Service_Eventsubscriber_DispatchLegacyEventsSubscriberService()
    {
        return $this->services['oxid_esales.module.setup.service.eventsubscriber.dispatch_legacy_events_subscriber'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\EventSubscriber\DispatchLegacyEventsSubscriber(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ModuleConfigurationDaoInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Configuration\\Dao\\ModuleConfigurationDaoInterface'] : $this->getModuleConfigurationDaoInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Adapter\ShopAdapter())) && false ?: '_'});
    }

    /**
     * Gets the private 'oxid_esales.module.setup.service.eventsubscriber.event_logging_subscriber' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\EventSubscriber\EventLoggingSubscriber
     */
    protected function getOxidEsales_Module_Setup_Service_Eventsubscriber_EventLoggingSubscriberService()
    {
        return $this->services['oxid_esales.module.setup.service.eventsubscriber.event_logging_subscriber'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\EventSubscriber\EventLoggingSubscriber(${($_ = isset($this->services['Psr\\Log\\LoggerInterface']) ? $this->services['Psr\\Log\\LoggerInterface'] : $this->getLoggerInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the private 'oxid_esales.module.setup.template_blocks_module_setting_handler' shared autowired service.
     *
     * @return \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Handler\TemplateBlockModuleSettingHandler
     */
    protected function getOxidEsales_Module_Setup_TemplateBlocksModuleSettingHandlerService()
    {
        return $this->services['oxid_esales.module.setup.template_blocks_module_setting_handler'] = new \OxidEsales\EshopCommunity\Internal\Framework\Module\Setup\Handler\TemplateBlockModuleSettingHandler(new \OxidEsales\EshopCommunity\Internal\Framework\Module\TemplateExtension\TemplateBlockExtensionDao(${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Framework\\Database\\QueryBuilderFactoryInterface'] : $this->getQueryBuilderFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface']) ? $this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] : ($this->services['OxidEsales\\EshopCommunity\\Internal\\Transition\\Adapter\\ShopAdapterInterface'] = new \OxidEsales\EshopCommunity\Internal\Transition\Adapter\ShopAdapter())) && false ?: '_'}));
    }

    /**
     * Gets the private 'oxid_esales.symfony.file_system' shared autowired service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    protected function getOxidEsales_Symfony_FileSystemService()
    {
        return $this->services['oxid_esales.symfony.file_system'] = new \Symfony\Component\Filesystem\Filesystem();
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
    }

    private $normalizedParameterNames = [];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'oxid_esales.module.metadata.service.metadata_schemata' => [
                '1.0' => [
                    0 => 'id',
                    1 => 'version',
                    2 => 'title',
                    3 => 'description',
                    4 => 'lang',
                    5 => 'thumbnail',
                    6 => 'author',
                    7 => 'url',
                    8 => 'email',
                    9 => 'extend',
                    11 => 'templates',
                    'blocks' => [
                        0 => 'theme',
                        1 => 'template',
                        2 => 'block',
                        3 => 'file',
                        4 => 'position',
                    ],
                    'settings' => [
                        0 => 'group',
                        1 => 'name',
                        2 => 'type',
                        3 => 'value',
                        4 => 'constraints',
                        5 => 'position',
                    ],
                    13 => 'files',
                ],
                '1.1' => [
                    0 => 'id',
                    1 => 'version',
                    2 => 'title',
                    3 => 'description',
                    4 => 'lang',
                    5 => 'thumbnail',
                    6 => 'author',
                    7 => 'url',
                    8 => 'email',
                    9 => 'extend',
                    11 => 'templates',
                    'blocks' => [
                        0 => 'theme',
                        1 => 'template',
                        2 => 'block',
                        3 => 'file',
                        4 => 'position',
                    ],
                    'settings' => [
                        0 => 'group',
                        1 => 'name',
                        2 => 'type',
                        3 => 'value',
                        4 => 'constraints',
                        5 => 'position',
                    ],
                    12 => 'events',
                    13 => 'files',
                ],
                '1.2' => [
                    0 => 'id',
                    1 => 'version',
                    2 => 'title',
                    3 => 'description',
                    4 => 'lang',
                    5 => 'thumbnail',
                    6 => 'author',
                    7 => 'url',
                    8 => 'email',
                    9 => 'extend',
                    11 => 'templates',
                    'blocks' => [
                        0 => 'theme',
                        1 => 'template',
                        2 => 'block',
                        3 => 'file',
                        4 => 'position',
                    ],
                    'settings' => [
                        0 => 'group',
                        1 => 'name',
                        2 => 'type',
                        3 => 'value',
                        4 => 'constraints',
                        5 => 'position',
                    ],
                    12 => 'events',
                    13 => 'files',
                ],
                '2.0' => [
                    0 => 'id',
                    1 => 'version',
                    2 => 'title',
                    3 => 'description',
                    4 => 'lang',
                    5 => 'thumbnail',
                    6 => 'author',
                    7 => 'url',
                    8 => 'email',
                    9 => 'extend',
                    10 => 'controllers',
                    11 => 'templates',
                    'blocks' => [
                        0 => 'theme',
                        1 => 'template',
                        2 => 'block',
                        3 => 'file',
                        4 => 'position',
                    ],
                    'settings' => [
                        0 => 'group',
                        1 => 'name',
                        2 => 'type',
                        3 => 'value',
                        4 => 'constraints',
                        5 => 'position',
                    ],
                    12 => 'events',
                ],
                '2.1' => [
                    0 => 'id',
                    1 => 'version',
                    2 => 'title',
                    3 => 'description',
                    4 => 'lang',
                    5 => 'thumbnail',
                    6 => 'author',
                    7 => 'url',
                    8 => 'email',
                    9 => 'extend',
                    10 => 'controllers',
                    11 => 'templates',
                    'blocks' => [
                        0 => 'theme',
                        1 => 'template',
                        2 => 'block',
                        3 => 'file',
                        4 => 'position',
                    ],
                    'settings' => [
                        0 => 'group',
                        1 => 'name',
                        2 => 'type',
                        3 => 'value',
                        4 => 'constraints',
                        5 => 'position',
                    ],
                    12 => 'events',
                    13 => 'smartyPluginDirectories',
                ],
            ],
            'oxid_esales.authentication.service.password_hash.bcrypt.cost' => 10,
            'oxid_esales.authentication.service.password_hash.argon2.memory_cost' => 1024,
            'oxid_esales.authentication.service.password_hash.argon2.time_cost' => 2,
            'oxid_esales.authentication.service.password_hash.argon2.threads' => 2,
            'oxid_esales.theme.admin.name' => 'admin',
            'console.command.ids' => [
                'console.command.oxidesales_eshopcommunity_internal_framework_module_command_moduleactivatecommand' => 'oxid_esales.command.module_activate_command',
                'console.command.oxidesales_eshopcommunity_internal_framework_module_command_moduledeactivatecommand' => 'oxid_esales.command.module_deactivate_command',
                'console.command.oxidesales_eshopcommunity_internal_framework_module_command_installmoduleconfigurationcommand' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\InstallModuleConfigurationCommand',
                'console.command.oxidesales_eshopcommunity_internal_framework_module_command_uninstallmoduleconfigurationcommand' => 'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\UninstallModuleConfigurationCommand',
                'console.command.oxidesales_eshopcommunity_internal_framework_module_command_applymodulesconfigurationcommand' => 'oxid_esales.command.apply_modules_configuration_command',
                'console.command.oxidesales_developertools_framework_module_resetconfiguration_resetconfigurationcommand' => 'oxid_esales.command.module_configuration_restore_command',
                'console.command.oxrun_command_cache_clearcommand' => 'Oxrun\\Command\\Cache\\ClearCommand',
                'console.command.oxrun_command_config_shopgetcommand' => 'Oxrun\\Command\\Config\\ShopGetCommand',
                'console.command.oxrun_command_config_shopsetcommand' => 'Oxrun\\Command\\Config\\ShopSetCommand',
                'console.command.oxrun_command_database_anonymizecommand' => 'Oxrun\\Command\\Database\\AnonymizeCommand',
                'console.command.oxrun_command_database_dumpcommand' => 'Oxrun\\Command\\Database\\DumpCommand',
                'console.command.oxrun_command_database_importcommand' => 'Oxrun\\Command\\Database\\ImportCommand',
                'console.command.oxrun_command_database_info' => 'Oxrun\\Command\\Database\\Info',
                'console.command.oxrun_command_database_listcommand' => 'Oxrun\\Command\\Database\\ListCommand',
                'console.command.oxrun_command_database_querycommand' => 'Oxrun\\Command\\Database\\QueryCommand',
                'console.command.oxrun_command_misc_phpstormmetadatacommand' => 'Oxrun\\Command\\Misc\\PhpstormMetadataCommand',
                'console.command.oxrun_command_misc_registercommand' => 'Oxrun\\Command\\Misc\\RegisterCommand',
                'console.command.oxrun_command_module_generatecommand' => 'Oxrun\\Command\\Module\\GenerateCommand',
                'console.command.oxrun_command_module_listcommand' => 'Oxrun\\Command\\Module\\ListCommand',
                'console.command.oxrun_command_module_reloadcommand' => 'Oxrun\\Command\\Module\\ReloadCommand',
                'console.command.oxrun_command_oxid_shoplistcommand' => 'Oxrun\\Command\\Oxid\\ShopListCommand',
                'console.command.oxrun_command_route_debugcommand' => 'Oxrun\\Command\\Route\\DebugCommand',
                'console.command.oxrun_command_user_createusercommand' => 'Oxrun\\Command\\User\\CreateUserCommand',
                'console.command.oxrun_command_user_passwordcommand' => 'Oxrun\\Command\\User\\PasswordCommand',
                'console.command.oxrun_command_views_updatecommand' => 'Oxrun\\Command\\Views\\UpdateCommand',
                'console.command.oxrun_command_deploy_updatemoduleconfigcommand' => 'Oxrun\\Command\\Deploy\\UpdateModuleConfigCommand',
                'console.command.oxrun_command_deploy_moduleapplyconfigurationlightcommand' => 'Oxrun\\Command\\Deploy\\ModuleApplyConfigurationLightCommand',
                'console.command.oxrun_command_deploy_moduleactivatorcommand' => 'Oxrun\\Command\\Deploy\\ModuleActivatorCommand',
                'console.command.oxrun_command_config_getcommand' => 'Oxrun\\Command\\Config\\GetCommand',
                'console.command.oxrun_command_deploy_generatemoduleactivatorcommand' => 'Oxrun\\Command\\Deploy\\GenerateModuleActivatorCommand',
                'console.command.oxrun_command_deploy_generateconfigurationcommand' => 'Oxrun\\Command\\Deploy\\GenerateConfigurationCommand',
                'console.command.oxrun_command_deploy_configcommand' => 'Oxrun\\Command\\Deploy\\ConfigCommand',
                'console.command.oxrun_command_config_setcommand' => 'Oxrun\\Command\\Config\\SetCommand',
                'console.command.oxrun_command_deploy_linkenvironmentcommand' => 'Oxrun\\Command\\Deploy\\LinkEnvironmentCommand',
            ],
            'console.lazy_command.ids' => [
                'oxid_esales.command.module_activate_command' => true,
                'oxid_esales.command.module_deactivate_command' => true,
                'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\InstallModuleConfigurationCommand' => true,
                'OxidEsales\\EshopCommunity\\Internal\\Framework\\Module\\Command\\UninstallModuleConfigurationCommand' => true,
                'oxid_esales.command.apply_modules_configuration_command' => true,
                'oxid_esales.command.module_configuration_restore_command' => true,
                'Oxrun\\Command\\Cache\\ClearCommand' => true,
                'Oxrun\\Command\\Config\\ShopGetCommand' => true,
                'Oxrun\\Command\\Config\\ShopSetCommand' => true,
                'Oxrun\\Command\\Database\\AnonymizeCommand' => true,
                'Oxrun\\Command\\Database\\DumpCommand' => true,
                'Oxrun\\Command\\Database\\ImportCommand' => true,
                'Oxrun\\Command\\Database\\Info' => true,
                'Oxrun\\Command\\Database\\ListCommand' => true,
                'Oxrun\\Command\\Database\\QueryCommand' => true,
                'Oxrun\\Command\\Misc\\PhpstormMetadataCommand' => true,
                'Oxrun\\Command\\Misc\\RegisterCommand' => true,
                'Oxrun\\Command\\Module\\GenerateCommand' => true,
                'Oxrun\\Command\\Module\\ListCommand' => true,
                'Oxrun\\Command\\Module\\ReloadCommand' => true,
                'Oxrun\\Command\\Oxid\\ShopListCommand' => true,
                'Oxrun\\Command\\Route\\DebugCommand' => true,
                'Oxrun\\Command\\User\\CreateUserCommand' => true,
                'Oxrun\\Command\\User\\PasswordCommand' => true,
                'Oxrun\\Command\\Views\\UpdateCommand' => true,
                'Oxrun\\Command\\Deploy\\UpdateModuleConfigCommand' => true,
                'Oxrun\\Command\\Deploy\\ModuleApplyConfigurationLightCommand' => true,
                'Oxrun\\Command\\Deploy\\ModuleActivatorCommand' => true,
                'Oxrun\\Command\\Config\\GetCommand' => true,
                'Oxrun\\Command\\Deploy\\GenerateModuleActivatorCommand' => true,
                'Oxrun\\Command\\Deploy\\GenerateConfigurationCommand' => true,
                'Oxrun\\Command\\Deploy\\ConfigCommand' => true,
                'Oxrun\\Command\\Config\\SetCommand' => true,
                'Oxrun\\Command\\Deploy\\LinkEnvironmentCommand' => true,
            ],
        ];
    }
}
