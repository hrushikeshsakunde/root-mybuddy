<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$pbkdf2-sha256$25000$Pten3Yuzq.Vh142wVas.PA$Nr7xCiHNH8pk4iudfC1qw9I2dPDEzgflzqibvIvsqkE',
        'loginSecurityLevel' => 'rsa',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'dbname' => 'buddy_system',
                'driver' => 'mysqli',
                'host' => '127.0.0.1',
                'password' => 'password',
                'user' => 'root',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'bootstrap_package' => 'a:7:{s:16:"disablePageTsRTE";s:1:"0";s:27:"disablePageTsBackendLayouts";s:1:"0";s:20:"disablePageTsTCEMAIN";s:1:"0";s:20:"disablePageTsTCEFORM";s:1:"0";s:30:"disablePageTsTtContentPreviews";s:1:"0";s:36:"disablePageTsNewContentElementWizard";s:1:"0";s:21:"disableLessProcessing";s:1:"0";}',
            'buddy_sys' => 'a:0:{}',
            'buddysystem' => 'a:0:{}',
            'car-rental-master' => 'a:0:{}',
            'car_rental' => 'a:0:{}',
            'easy_googlemap' => 'a:0:{}',
            'extension_builder' => 'a:3:{s:15:"enableRoundtrip";s:1:"1";s:15:"backupExtension";s:1:"1";s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";}',
            'felogin' => 'a:0:{}',
            'femanager' => 'a:4:{s:13:"disableModule";s:1:"0";s:24:"enableConfirmationModule";s:1:"1";s:10:"disableLog";s:1:"0";s:16:"setCookieOnLogin";s:1:"0";}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\Pbkdf2Salt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'toctoc_comments' => 'a:20:{s:14:"donationSecret";s:0:"";s:14:"donationServer";s:13:"www.toctoc.ch";s:20:"use_OldBackendModule";s:1:"0";s:11:"max_records";s:2:"10";s:9:"new_Hours";s:2:"24";s:9:"text_crop";s:2:"55";s:8:"show_sub";s:1:"1";s:10:"select_val";s:17:"5,10,20,30,50,100";s:10:"dnsbl_list";s:0:"";s:33:"useSpamhausBlocklistForWebsiteBan";s:1:"0";s:30:"enableRealURLAutoConfiguration";s:1:"1";s:23:"importDataprefixtotable";s:1:"0";s:29:"updatefromRoottoCommentFolder";s:0:"";s:10:"updateMode";s:1:"0";s:9:"debugMode";s:1:"0";s:18:"delusers_firstname";s:7:"deleted";s:17:"delusers_lastname";s:4:"user";s:14:"delusers_email";s:20:"deleteduser@site.tld";s:11:"urlWhoisIP4";s:27:"http://www.whois.com/whois/";s:11:"urlWhoisIP6";s:39:"http://www.tcpiputils.com/whois-lookup/";}',
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [],
        ],
    ],
    'FE' => [
        'debug' => false,
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'jpg_quality' => '80',
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => ' -t -i ',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => 1,
        'enableDeprecationLog' => false,
        'encryptionKey' => 'f3ee212c4074fd551b1c23ee7def55b1cd31f5852de4b38ee3b620d41e7772faea3494a9fcf8bdb37be373d3c059068f',
        'exceptionalErrors' => 28674,
        'isInitialDatabaseImportDone' => true,
        'isInitialInstallationInProgress' => false,
        'sitename' => 'BuddySystem',
        'sqlDebug' => 0,
        'systemLogLevel' => 2,
    ],
];
