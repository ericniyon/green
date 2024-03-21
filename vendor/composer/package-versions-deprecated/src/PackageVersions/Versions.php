<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'asm89/stack-cors' => 'v2.1.1@73e5b88775c64ccc0b84fb60836b30dc9d92ac4a',
  'aws/aws-crt-php' => 'v1.0.2@3942776a8c99209908ee0b287746263725685732',
  'aws/aws-sdk-php' => '3.253.4@da3b60b090b2070bd452d8b87737ea1e00d8002f',
  'barryvdh/laravel-dompdf' => 'v2.0.0@1d47648c6cef37f715ecb8bcc5f5a656ad372e27',
  'box/spout' => 'v3.3.0@9bdb027d312b732515b884a341c0ad70372c6295',
  'brian2694/laravel-toastr' => '5.57@1274f58564b9d845dfe82d5aca60b99b6fbb5a71',
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'ckeditor/ckeditor' => '4.20.1@d519387a9448cbb66a5091361ddf665fd8728743',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'defuse/php-encryption' => 'v2.3.1@77880488b9954b7884c25555c2a0ea9e7053f9d2',
  'dflydev/dot-access-data' => 'v3.0.2@f41715465d65213d644d3141a6a93081be5d3549',
  'doctrine/annotations' => '1.14.1@9e034d7a70032d422169f27d8759e8d84abb4f51',
  'doctrine/cache' => '2.2.0@1ca8f21980e770095a31456042471a57bc4c68fb',
  'doctrine/common' => '3.4.3@8b5e5650391f851ed58910b3e3d48a71062eeced',
  'doctrine/dbal' => '3.5.1@f38ee8aaca2d58ee88653cb34a6a3880c23f38a5',
  'doctrine/deprecations' => 'v1.0.0@0e2a4f1f8cdfc7a92ec3b01c9334898c806b30de',
  'doctrine/event-manager' => '1.2.0@95aa4cb529f1e96576f3fda9f5705ada4056a520',
  'doctrine/inflector' => '2.0.6@d9d313a36c872fd6ee06d9a6cbcf713eaa40f024',
  'doctrine/lexer' => '1.2.3@c268e882d4dbdd85e36e4ad69e02dc284f89d229',
  'doctrine/persistence' => '3.1.1@d87426f07dd66f97cfdcf5210925e483b6c993b5',
  'dompdf/dompdf' => 'v2.0.1@c5310df0e22c758c85ea5288175fc6cd777bc085',
  'dragonmantank/cron-expression' => 'v3.3.2@782ca5968ab8b954773518e9e49a6f892a34b2a8',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'fideloper/proxy' => '4.4.2@a751f2bc86dd8e6cfef12dc0cbdada82f5a18750',
  'firebase/php-jwt' => 'v6.3.1@ddfaddcb520488b42bca3a75e17e9dd53c3667da',
  'fruitcake/laravel-cors' => 'v2.2.0@783a74f5e3431d7b9805be8afb60fd0a8f743534',
  'graham-campbell/result-type' => 'v1.1.0@a878d45c1914464426dc94da61c9e1d36ae262a8',
  'gregwar/captcha' => 'v1.1.9@4bb668e6b40e3205a020ca5ee4ca8cff8b8780c5',
  'guzzlehttp/guzzle' => '7.5.0@b50a2a1251152e43f6a37f0fa053e730a67d25ba',
  'guzzlehttp/promises' => '1.5.2@b94b2807d85443f9719887892882d0329d1e2598',
  'guzzlehttp/psr7' => '1.9.0@e98e3e6d4f86621a9b75f623996e6bbdeb4b9318',
  'intervention/image' => '2.7.2@04be355f8d6734c826045d02a1079ad658322dad',
  'kingflamez/laravelrave' => 'v4.2.0@02ccc18e5f03fb25a12f898ddd180d88d0ed13d9',
  'laminas/laminas-diactoros' => '2.17.0@5b32597aa46b83c8b85bb1cf9a6ed4fe7dd980c5',
  'laravel/framework' => 'v8.83.27@e1afe088b4ca613fb96dc57e6d8dbcb8cc2c6b49',
  'laravel/passport' => 'v10.4.1@b62b418a6d9e9aca231a587be0fc14dc55cd8d77',
  'laravel/sanctum' => 'v2.15.1@31fbe6f85aee080c4dc2f9b03dc6dd5d0ee72473',
  'laravel/serializable-closure' => 'v1.2.2@47afb7fae28ed29057fdca37e16a84f90cc62fae',
  'laravel/socialite' => 'v5.5.6@1cd1682b709b8808a5b5dbb68179a58d1342aa7b',
  'laravel/tinker' => 'v2.7.3@5062061b4924af3392225dd482ca7b4d85d8b8ef',
  'laravelpkg/laravelchk' => 'dev-master@4d88f6e0c5b4b5c6c3cfb305b1320288efb84708',
  'lcobucci/clock' => '2.0.0@353d83fe2e6ae95745b16b3d911813df6a05bfb3',
  'lcobucci/jwt' => '4.2.1@72ac6d807ee51a70ad376ee03a2387e8646e10f3',
  'league/commonmark' => '2.3.8@c493585c130544c4e91d2e0e131e6d35cb0cbc47',
  'league/config' => 'v1.2.0@754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
  'league/event' => '2.2.0@d2cc124cf9a3fab2bb4ff963307f60361ce4d119',
  'league/flysystem' => '1.1.10@3239285c825c152bcc315fe0e87d6b55f5972ed1',
  'league/flysystem-aws-s3-v3' => '1.0.30@af286f291ebab6877bac0c359c6c2cb017eb061d',
  'league/glide' => '2.0.x-dev@e84ef237030817ab6034b2c17173dd3352a971e1',
  'league/mime-type-detection' => '1.11.0@ff6248ea87a9f116e78edd6002e39e5128a0d4dd',
  'league/oauth1-client' => 'v1.10.1@d6365b901b5c287dd41f143033315e2f777e1167',
  'league/oauth2-server' => '8.3.6@28c5441716c10d0c936bd731860dc385d0f6d1a8',
  'league/uri' => '6.7.2@d3b50812dd51f3fbf176344cc2981db03d10fe06',
  'league/uri-interfaces' => '2.3.0@00e7e2943f76d8cb50c7dfdc2f6dee356e15e383',
  'madnest/madzipper' => 'v1.2.1@40d42f13ecbcb3a9bd8847864cdd2ad3afa4bb5e',
  'masterminds/html5' => '2.7.6@897eb517a343a2281f11bc5556d6548db7d93947',
  'mercadopago/dx-php' => '2.5.3@c41853bde4a85742fd3b6741effde34c6919da2d',
  'milon/barcode' => '8.0.1@a1b1ee1a743c1368597f1742e6ee4765333a15a1',
  'monolog/monolog' => '2.8.0@720488632c590286b88b80e62aa3d3d551ad4a50',
  'mpdf/mpdf' => 'v8.1.4@add590e93b7502efafd9839a68cff99f3497b318',
  'mtdowling/jmespath.php' => '2.6.1@9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
  'myclabs/deep-copy' => '1.11.0@14daed4296fae74d9e3201d2c4925d1acb7aa614',
  'nesbot/carbon' => '2.64.0@889546413c97de2d05063b8cb7b193c2531ea211',
  'nette/schema' => 'v1.2.3@abbdbb70e0245d5f3bf77874cea1dfb0c930d06f',
  'nette/utils' => 'v3.2.8@02a54c4c872b99e4ec05c4aec54b5a06eb0f6368',
  'nexmo/laravel' => '2.4.1@029bdc19fc58cd6ef0aa75c7041d82b9d9dc61bd',
  'nicmart/tree' => '0.3.1@c55ba47c64a3cb7454c22e6d630729fc2aab23ff',
  'nikic/php-parser' => 'v4.15.2@f59bbe44bf7d96f24f3e2b4ddc21cd52c1d2adbc',
  'nyholm/psr7' => '1.5.1@f734364e38a876a23be4d906a2a089e1315be18a',
  'opis/closure' => '3.6.3@3d81e4309d2a927abbe66df935f4bb60082805ad',
  'paragonie/constant_time_encoding' => 'v2.6.3@58c3f47f650c94ec05a151692652a868995d2938',
  'paragonie/random_compat' => 'v9.99.100@996434e5492cb4c3edcb9168db6fbb1359ef965a',
  'paypal/rest-api-sdk-php' => '1.14.0@72e2f2466975bf128a31e02b15110180f059fc04',
  'phenx/php-font-lib' => '0.5.4@dd448ad1ce34c63d09baccd05415e361300c35b4',
  'phenx/php-svg-lib' => '0.5.0@76876c6cf3080bcb6f249d7d59705108166a6685',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'phpoption/phpoption' => '1.9.0@dc5ff11e274a90cc1c743f66c9ad700ce50db9ab',
  'phpseclib/phpseclib' => '3.0.18@f28693d38ba21bb0d9f0c411ee5dae2b178201da',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.11.9@1acec99d6684a54ff92f8b548a4e41b566963778',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.2@cccc74ee5e328031b15640b51056ee8d3bb66c0a',
  'ramsey/uuid' => '4.2.3@fc9bb7fb5388691fd7373cd44dcb4d63bbcf24df',
  'rap2hpoutre/fast-excel' => 'v3.2.0@28183f3a90179386bfadcd0083129c247ce49fbe',
  'razorpay/razorpay' => '2.8.5@31027cfb689b9480d67419dbec7c203097e9d9ac',
  'rmccue/requests' => 'v2.0.5@b717f1d2f4ef7992ec0c127747ed8b7e170c2f49',
  'sabberworm/php-css-parser' => '8.4.0@e41d2140031d533348b2192a83f02d8dd8a71d30',
  'seshac/laravel-shiprocket-api' => '2.0.0@db0317479dae00d6561143cb4184832e8bc1ce5e',
  'setasign/fpdi' => 'v2.3.6@6231e315f73e4f62d72b73f3d6d78ff0eed93c31',
  'spatie/browsershot' => '3.57.5@a4ae0f3a289cfb9384f2ee01b7f37c271f6a4159',
  'spatie/crawler' => '6.0.2@276ecb429a770474695a1278a9ad3e719fbef259',
  'spatie/image' => '2.0.0@1ffb276dd6528c6b308d5feb1573299c24fd9613',
  'spatie/image-optimizer' => '1.6.2@6db75529cbf8fa84117046a9d513f277aead90a0',
  'spatie/laravel-sitemap' => '5.9.2@df5c3db511e08a8e64a3d7e28613ab018a99e95d',
  'spatie/robots-txt' => '1.0.10@8802a2bee670b3c13cfd21ede0322f72b3efb711',
  'spatie/temporary-directory' => '1.3.0@f517729b3793bca58f847c5fd383ec16f03ffec6',
  'stripe/stripe-php' => 'v7.128.0@c704949c49b72985c76cc61063aa26fefbd2724e',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/console' => 'v5.4.16@8e9b9c8dfb33af6057c94e1b44846bee700dc5ef',
  'symfony/css-selector' => 'v5.4.11@c1681789f059ab756001052164726ae88512ae3d',
  'symfony/deprecation-contracts' => 'v2.5.2@e8b495ea28c1d97b5e0c121748d6f9b53d075c66',
  'symfony/dom-crawler' => 'v5.4.15@b8fd0ff9a0f00d944f1534f6d21e84f92eda7258',
  'symfony/error-handler' => 'v5.4.15@539cf1428b8442303c6e876ad7bf5a7babd91091',
  'symfony/event-dispatcher' => 'v5.4.9@8e6ce1cc0279e3ff3c8ff0f43813bc88d21ca1bc',
  'symfony/event-dispatcher-contracts' => 'v2.5.2@f98b54df6ad059855739db6fcbc2d36995283fe1',
  'symfony/finder' => 'v5.4.11@7872a66f57caffa2916a584db1aa7f12adc76f8c',
  'symfony/http-foundation' => 'v5.4.16@5032c5849aef24741e1970cb03511b0dd131d838',
  'symfony/http-kernel' => 'v5.4.16@b432c57c5de73634b1859093c1f58e3cd84455a1',
  'symfony/mime' => 'v5.4.16@46eeedb08f0832b1b61a84c612d945fc85ee4734',
  'symfony/polyfill-ctype' => 'v1.27.0@5bbc823adecdae860bb64756d639ecfec17b050a',
  'symfony/polyfill-iconv' => 'v1.27.0@927013f3aac555983a5059aada98e1907d842695',
  'symfony/polyfill-intl-grapheme' => 'v1.27.0@511a08c03c1960e08a883f4cffcacd219b758354',
  'symfony/polyfill-intl-idn' => 'v1.27.0@639084e360537a19f9ee352433b84ce831f3d2da',
  'symfony/polyfill-intl-normalizer' => 'v1.27.0@19bd1e4fcd5b91116f14d8533c57831ed00571b6',
  'symfony/polyfill-mbstring' => 'v1.27.0@8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
  'symfony/polyfill-php72' => 'v1.27.0@869329b1e9894268a8a61dabb69153029b7a8c97',
  'symfony/polyfill-php73' => 'v1.27.0@9e8ecb5f92152187c4799efd3c96b78ccab18ff9',
  'symfony/polyfill-php80' => 'v1.27.0@7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
  'symfony/polyfill-php81' => 'v1.27.0@707403074c8ea6e2edaf8794b0157a0bfa52157a',
  'symfony/process' => 'v5.4.11@6e75fe6874cbc7e4773d049616ab450eff537bf1',
  'symfony/psr-http-message-bridge' => 'v2.1.4@a125b93ef378c492e274f217874906fb9babdebb',
  'symfony/routing' => 'v5.4.15@5c9b129efe9abce9470e384bf65d8a7e262eee69',
  'symfony/service-contracts' => 'v2.5.2@4b426aac47d6427cc1a1d0f7e2ac724627f5966c',
  'symfony/string' => 'v5.4.15@571334ce9f687e3e6af72db4d3b2a9431e4fd9ed',
  'symfony/translation' => 'v5.4.14@f0ed07675863aa6e3939df8b1bc879450b585cab',
  'symfony/translation-contracts' => 'v2.5.2@136b19dd05cdf0709db6537d058bcab6dd6e2dbe',
  'symfony/var-dumper' => 'v5.4.14@6894d06145fefebd9a4c7272baa026a1c394a430',
  'tijsverkoyen/css-to-inline-styles' => '2.2.5@4348a3a06651827a27d989ad1d13efec6bb49b19',
  'twilio/sdk' => '6.44.0@d0f8b4c642209a08066990eaea55ee6f292e4f8d',
  'unicodeveloper/laravel-paystack' => '1.0.9@785aa1c5a1b07e06e2cc5c63f11e9dcf6c29a648',
  'vlucas/phpdotenv' => 'v5.5.0@1a7ea2afc49c3ee6d87061f5a233e3a035d0eae7',
  'voku/portable-ascii' => '1.6.1@87337c91b9dfacee02452244ee14ab3c43bc485a',
  'vonage/client' => '2.4.0@29f23e317d658ec1c3e55cf778992353492741d7',
  'vonage/client-core' => '2.10.1@0e5c6bf4af22cae60a3f1098b75c25d70bac242f',
  'vonage/nexmo-bridge' => '0.1.1@36490dcc5915f12abeaa233c6098e0dce14bbb0a',
  'webmozart/assert' => '1.11.0@11cb2199493b2f8a3b53e7f19068fc6aac760991',
  'amirami/localizator' => 'v0.7.1-alpha@f61264953cb59fbec4a9d8fb3feaec27ce9c47aa',
  'barryvdh/laravel-debugbar' => 'v3.7.0@3372ed65e6d2039d663ed19aa699956f9d346271',
  'doctrine/instantiator' => '1.4.1@10dcfce151b967d20fde1b34ae6640712c3891bc',
  'facade/flare-client-php' => '1.10.0@213fa2c69e120bca4c51ba3e82ed1834ef3f41b8',
  'facade/ignition' => '2.17.6@6acd82e986a2ecee89e2e68adfc30a1936d1ab7c',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'fakerphp/faker' => 'v1.21.0@92efad6a967f0b79c499705c69b662f738cc9e4d',
  'filp/whoops' => '2.14.6@f7948baaa0330277c729714910336383286305da',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'laravel/sail' => 'v1.16.5@9ec5338d13bdc941a23347cb36385988c525fe02',
  'maximebf/debugbar' => 'v1.18.1@ba0af68dd4316834701ecb30a00ce9604ced3ee9',
  'mockery/mockery' => '1.5.1@e92dcc83d5a51851baf5f5591d32cb2b16e3684e',
  'nunomaduro/collision' => 'v5.11.0@8b610eef8582ccdc05d8f2ab23305e2d37049461',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.2.1@4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
  'phpunit/php-code-coverage' => '9.2.22@e4bf60d2220b4baaa0572986b5d69870226b06df',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.27@a2bc7ffdca99f92d959b3f2270529334030bba38',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.8@fa0f136dd2334583309d32b62544682ee972b51a',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.4@1b5dff7bb151a4db11d49d90e5408e4e938270f7',
  'sebastian/exporter' => '4.0.5@ac230ed27f0f98f597c8a2b6eb7ac563af5e5b9d',
  'sebastian/global-state' => '5.0.5@0ca8db5a5fc9c8646244e629625ac486fa286bf2',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '3.2.0@fb3fe09c5f0bae6bc27ef3ce933a1e0ed9464b6e',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'laravel/laravel' => 'dev-develop@841914abe975241f833d6b6d24b00e461f0e392a',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
