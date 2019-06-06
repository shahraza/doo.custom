<?php if( !defined('ABSPATH') ) { die; }
/**
 * @package DooPlay
 * @author Doothemes (Erick Meza & Brendha Mayuri)
 * @since 2.1.8
 */


// All Settings
$settings = array(
  'menu_title'      => sprintf( __d('%s options'), DOO_THEME),
  'menu_type'       => 'theme',
  'menu_slug'       => 'dooplay',
  'ajax_save'       => true,
  'show_reset_all'  => false,
  'max_width'       => '1200',
  'framework_title' => 'Dooplay <small>by DooThemes</small>',
);

// Define defaults colors
switch(cs_get_option('style','default')) {

    case 'dark':
        $mcolor = '#408BEA';
        $bcolor = '#464e5a';
        break;

    case 'fusion':
        $mcolor = '#408BEA';
        $bcolor = '#9facc1';
        break;

    case 'default':
        $mcolor = '#408BEA';
        $bcolor = '#F5F7FA';
        break;
}

// Framework Options
$options = array();


/**
 ************************
 * SETTINGS
 ************************
 */
$options[] = array(
    'title'  => __d('Settings'),
    'name'   => 'settings',
    'icon'   => 'fa fa-cog',
    'sections' => array(



        /**
         * Main Settings
         * @since 2.1.8
         * @version 1.0
         */
        array(
            'title'  => __d('Main settings'),
            'name'   => 'settings-main',
            'icon'   => 'fa fa-minus',
            'fields' => array(

                array(
                    'id'      => 'online',
                    'type'    => 'switcher',
                    'title'   => __d('Site Online'),
                    'label'   => __d('Keep this field activated'),
                    'default' => true
                ),

                array(
                    'type'       => 'notice',
                    'class'      => 'danger',
                    'content'    => __d('Currently your website is in <strong>offline mode</strong>'),
                    'dependency' => array('online', '!=', true)
                ),

                array(
                    'id'      => 'offlinemessage',
                    'type'    => 'textarea',
                    'title'   => __d('Offline Message'),
                    'default' => __d('We are in maintenance, please try it later'),
                    'attributes' => array(
                        'placeholder' => __d('Offline mode message here'),
                        'rows'        => 3,
                    ),
                    'dependency' => array('online', '!=', true)
                ),

                array(
                    'id'    => 'ganalytics',
                    'type'  => 'text',
                    'title' => __d('Google Analytics'),
                    'desc'  => __d('Insert tracking code to use this function'),
                    'attributes' => array(
                        'placeholder' => 'UA-45182606-12',
                        'style' => 'width:200px'
                    )
                ),

                array(
                    'id'      => 'iperpage',
                    'type'    => 'number',
                    'title'   => __d('Items per page'),
                    'desc'    => __d('Archive pages show at most'),
                    'default' => '30',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                ),

                array(
                    'id'      => 'bperpage',
                    'type'    => 'number',
                    'title'   => __d('Post per page in blog'),
                    'desc'    => __d('Archive pages show at most'),
                    'default' => '10',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                ),

                array(
                    'id'      => 'itopimdb',
                    'type'    => 'number',
                    'title'   => __d('TOP IMDb items'),
                    'desc'    => __d('Select the number of items to the page TOP IMDb'),
                    'default' => '50',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                ),

                array(
                    'id'    => 'pagrange',
                    'type'  => 'number',
                    'title' => __d('Pagination Range'),
                    'desc'  => __d('Set a range of items to display in the paginator'),
                    'default' => '2',
                    'attributes' => array(
                        'style' => 'width:100px',
                        'max' => 4,
                        'min' => 1
                    )
                ),

                array(
                    'id'    => 'permits',
                    'type'  => 'checkbox',
                    'title' => __d('General'),
                    'desc'  => __d('Check whether to activate or deactivate'),
                    'options' => array(
                        'enls' => __d('Live search enable'),
                        'esst' => __d('Show similar titles enable'),
                        'eusr' => __d('User register enable'),
                        'demj' => __d('Emoji disable'),
                        'rvrp' => __d('Remove <code>?ver=</code> parameters'),
                        'mhtm' => __d('Minify HTML'),
                        'rhjp' => __d('Remove HTML, Java Script and CSS Commnets')
                    ),
                    'default' => array('enls','esst','demj','rvrp','mhtm','rhjp')
                ),

                array(
                    'type' => 'heading',
                    'content' => __d('Google reCAPTCHA v2')
                ),

                array(
                    'id'      => 'gcaptchasitekey',
                    'type'    => 'text',
                    'title'   => __d('Site key')
                ),

                array(
                    'id'      => 'gcaptchasecret',
                    'type'    => 'text',
                    'title'   => __d('Secret key')
                ),

                array(
                    'type' => 'content',
                    'content' => '<a href="https://www.google.com/recaptcha/admin" target="_blank">'.__d('Get Google reCAPTCHA').'</a>'
                ),

                array(
                    'type' => 'heading',
                    'content' => __d('Pages for DooPlay')
                ),

                array(
                    'id'      => 'pageaccount',
                    'type'    => 'select',
                    'title'   => __d('Account'),
                    'desc'    => __d('Set User Account page'),
                    'options' => 'pages'
                ),

                array(
                    'id'      => 'pagetrending',
                    'type'    => 'select',
                    'title'   => __d('Trending'),
                    'desc'    => __d('Set page to show trend content'),
                    'options' => 'pages'
                ),

                array(
                    'id'      => 'pageratings',
                    'type'    => 'select',
                    'title'   => __d('Ratings'),
                    'desc'    => __d('Set page to show content rated by users'),
                    'options' => 'pages'
                ),

                array(
                    'id'      => 'pagecontact',
                    'type'    => 'select',
                    'title'   => __d('Contact'),
                    'desc'    => __d('Set page to display the contact form'),
                    'options' => 'pages'
                ),

                array(
                    'id'      => 'pagetopimdb',
                    'type'    => 'select',
                    'title'   => __d('Top IMDb'),
                    'desc'    => __d('Set page to show the best qualified content in IMDb'),
                    'options' => 'pages'
                ),

                array(
                    'id'      => 'pageblog',
                    'type'    => 'select',
                    'title'   => __d('Blog entries'),
                    'desc'    => __d('Set page to show the entries in blog'),
                    'options' => 'pages'
                ),

                array(
                    'type' => 'heading',
                    'content' => __d('Database cache')
                ),

                array(
                    'id'      => 'cachescheduler',
                    'type'    => 'select',
                    'title'   => __d('Scheduler'),
                    'desc'    => __d('Cache cleaning'),
                    'after'   => '<p>'.__d('It is important to clean expired cache at least once a day').'</p>',
                    'attributes' => array(
                        'style' => 'width:200px'
                    ),
                    'options' => array(
                        'daily'      => __d('Daily'),
                        'twicedaily' => __d('Twice daily'),
                        'hourly'     => __d('Hourly')
                    ),
                ),

                array(
                    'type'    => 'notice',
                    'class'   => 'info',
                    'content' => __d('Storing cache as long as possible can be a very good idea'),
                    'dependency' => array('cachetime', '<=', 43200)
                ),

                array(
                    'id'      => 'cachetime',
                    'type'    => 'number',
                    'title'   => __d('Cache Timeout'),
                    'desc'    => __d('Set the time in seconds'),
                    'default' => '86400',
                    'after'   => '<p>'.__d('We recommend storing this cache for at least 86400 seconds').'</p>',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                )
            )
        ),


        /**
         * Customize
         * @since 2.1.8
         * @version 1.0
         */
        array(
            'title'  => __d('Customize'),
            'name'   => 'layout-custom',
            'icon'   => 'fa fa-minus',
            'fields' => array(

                array(
                    'id'      => 'dynamicbg',
                    'type'    => 'switcher',
                    'title'   => __d('Single background'),
                    'desc'    => __d('Check whether to activate or deactivate'),
                    'label'   => __d('Enable dynamic background'),
                    'default' => false
                ),


                array(
                    'id'    => 'style',
                    'type'  => 'select',
                    'title' => __d('Color Scheme'),
                    'desc'  => __d('Select the default color scheme'),
                    'attributes' => array(
                        'style' => 'max-width:250px'
                    ),
                    'options'  => array(
                        'default' => __d('Default style'),
            			'fusion'  => __d('Fusion stye'),
            			'dark'    => __d('Dark stye')
                    ),
                    'default'  => 'default',
                ),

                array(
                    'id'    => 'font',
                    'type'  => 'select',
                    'title' => __d('Font family'),
                    'desc'  => __d('Select font-family by Google Fonts'),
                    'attributes' => array(
                        'style' => 'max-width:250px'
                    ),
                    'options'  => array(
                        'Roboto'          => 'Roboto',
            			'Open+Sans'       => 'Open Sans',
            			'Raleway'         => 'Raleway',
            			'Source+Sans+Pro' => 'Source Sans Pro',
            			'Noto+Sans'       => 'Noto Sans',
            			'Quicksand'       => 'Quicksand',
            			'Questrial'       => 'Questrial',
            			'Rubik'           => 'Rubik',
            			'Archivo+Narrow'  => 'Archivo Narrow',
            			'Work+Sans'       => 'Work Sans',
            			'Signika'         => 'Signika',
            			'Nunito+Sans'     => 'Nunito Sans',
            			'Alegreya+Sans'   => 'Alegreya Sans',
            			'BenchNine'       => 'BenchNine',
            			'Yantramanav'     => 'Yantramanav',
            			'Pontano Sans'    => 'Pontano Sans',
            			'Gudea'           => 'Gudea',
            			'Cabin+Condensed' => 'Cabin Condensed',
            			'Khand'           => 'Khand',
            			'Ruda'            => 'Ruda'
                    ),
                    'default'  => 'Roboto',
                ),

                array(
                    'id'      => 'maincolor',
                    'type'    => 'color_picker',
                    'title'   => __d('Primary color'),
                    'desc'    => __d('Choose a color'),
                    'default' => $mcolor
                ),

                array(
                    'id'      => 'bgcolor',
                    'type'    => 'color_picker',
                    'title'   => __d('Background container'),
                    'desc'    => __d('Choose a color'),
                    'default' => $bcolor
                ),

                array(
                    'id'      => 'featucolor',
                    'type'    => 'color_picker',
                    'title'   => __d('Featured marker'),
                    'desc'    => __d('Choose a color'),
                    'default' => '#00be08'
                ),


                array(
                    'type'    => 'heading',
                    'content' => __d('Fusion alternative colors'),
                    'dependency' => array('style', '==', 'fusion')
                ),


                array(
                    'id'      => 'fbgcolor',
                    'type'    => 'color_picker',
                    'title'   => __d('Background header bar'),
                    'desc'    => __d('Choose a color'),
                    'default' => '#000000',
                    'dependency' => array('style', '==', 'fusion')
                ),


                array(
                    'id'      => 'facolor',
                    'type'    => 'color_picker',
                    'title'   => __d('Header link color'),
                    'desc'    => __d('Choose a color'),
                    'default' => '#ffffff',
                    'dependency' => array('style', '==', 'fusion')
                ),

                array(
                    'id'      => 'fhcolor',
                    'type'    => 'color_picker',
                    'title'   => __d('Header link hover color'),
                    'desc'    => __d('Choose a color'),
                    'default' => '#408bea',
                    'dependency' => array('style', '==', 'fusion')
                ),


                array(
                    'type'    => 'heading',
                    'content' => __d('Custom CSS')
                ),

                array(
                    'id'   => 'css',
                    'type' => 'textarea',
                    'attributes' => array(
                        'placeholder' => '.YourClas{}',
                        'rows'        => 7,
                    ),
                    'after' => '<p>'.__d('Add only CSS code').'</p>'
                ),

                array(
                    'type'    => 'heading',
                    'content' => __d('Customize logos')
                ),

                array(
                    'id'    => 'headlogo',
                    'type'  => 'image',
                    'title' => __d('Logo header'),
                    'desc'  => __d('Upload your logo using the Upload Button')
                ),

                array(
                    'id'    => 'favicon',
                    'type'  => 'image',
                    'title' => __d('Favicon'),
                    'desc'  => __d('Upload a 16 x 16 px image that will represent your website\'s favicon')
                ),

                array(
                    'id'    => 'touchlogo',
                    'type'  => 'image',
                    'title' => __d('Touch icon APP'),
                    'desc'  => __d('Upload a 152 x 152 px image that will represent your Web APP')
                ),

                array(
                    'id'    => 'adminloginlogo',
                    'type'  => 'image',
                    'title' => __d('Login / Register / WP-Admin'),
                    'desc'  => __d('Upload your logo using the Upload Button')
                ),

                array(
                    'type'    => 'heading',
                    'content' => __d('Footer settings')
                ),

                array(
                    'id'      => 'footer',
                    'type'    => 'radio',
                    'title'   => __d('Footer'),
                    'default' => 'simple',
                    'options' => array(
                        'simple'   => __d('Simple'),
                        'complete' => __d('Complete')
                    )
                ),

                array(
                    'id'    => 'footercopyright',
                    'type'  => 'text',
                    'title' => __d('Footer copyright'),
                    'desc'  => __d('Modify or remove copyright text')
                ),

                array(
                    'id'    => 'logofooter',
                    'type'  => 'image',
                    'title' => __d('Logo footer'),
                    'dependency' => array('footer_complete', '==', true)
                ),

                array(
                    'id'    => 'footertext',
                    'type'  => 'textarea',
                    'title' => __d('Footer text'),
                    'desc'  => __d('Text under footer logo'),
                    'dependency' => array('footer_complete', '==', true)
                ),

                array(
                    'id'    => 'footerc1',
                    'type'  => 'text',
                    'title' => __d('Title column 1'),
                    'desc'  => __d('Footer menu'),
                    'dependency' => array('footer_complete', '==', true)
                ),

                array(
                    'id'    => 'footerc2',
                    'type'  => 'text',
                    'title' => __d('Title column 2'),
                    'desc'  => __d('Footer menu'),
                    'dependency' => array('footer_complete', '==', true)
                ),

                array(
                    'id'    => 'footerc3',
                    'type'  => 'text',
                    'title' => __d('Title column 3'),
                    'desc'  => __d('Footer menu'),
                    'dependency' => array('footer_complete', '==', true)
                )

            )
        ),




        /**
         * Comments
         * @since 2.1.8
         * @version 1.0
         */
        array(
            'title'  => __d('Comments'),
            'name'   => 'settings-comments',
            'icon'   => 'fa fa-minus',
            'fields' => array(

                array(
                    'id'      => 'comments',
                    'type'    => 'radio',
                    'title'   => __d('Comments system'),
                    'default' => 'wp',
                    'options' => array(
                        'wp' => __d('WordPress'),
                        'fb' => __d('Facebook'),
                        'dq' => __d('Disqus'),
                        'nn' => __d('None')
                    )
                ),

                array(
                    'id'    => 'commentspage',
                    'type'  => 'switcher',
                    'title' => __d('Comments on pages'),
                    'label' => __d('Allow comments on all pages?'),
                    'dependency' => array('comments_nn', '!=', true)
                ),

                array(
                    'type'    => 'heading',
                    'content' => __d('Facebook comments'),
                    'dependency' => array('comments_fb', '==', true)
                ),

                array(
                    'id'    => 'fbappid',
                    'type'  => 'text',
                    'title' => __d('App ID'),
                    'desc'  => __d('Insert you Facebook app ID'),
                    'after' => '<p><a href="https://developers.facebook.com/apps/" target="_blank">'.__d('Facebook developers').'</a></p>',
                    'dependency' => array('comments_fb', '==', true)
                ),

                array(
                    'id'    => 'fblang',
                    'type'  => 'select',
                    'title' => __d('APP language'),
                    'desc'  => __d('Select language for the app of facebook'),
                    'options' => array(
                        'af_ZA' => __d('Afrikaans'),
                        'ak_GH' => __d('Akan'),
                        'am_ET' => __d('Amharic'),
                        'ar_AR' => __d('Arabic'),
                        'as_IN' => __d('Assamese'),
                        'ay_BO' => __d('Aymara'),
                        'az_AZ' => __d('Azerbaijani'),
                        'be_BY' => __d('Belarusian'),
                        'bg_BG' => __d('Bulgarian'),
                        'bn_IN' => __d('Bengali'),
                        'br_FR' => __d('Breton'),
                        'bs_BA' => __d('Bosnian'),
                        'ca_ES' => __d('Catalan'),
                        'cb_IQ' => __d('Sorani Kurdish'),
                        'ck_US' => __d('Cherokee'),
                        'co_FR' => __d('Corsican'),
                        'cs_CZ' => __d('Czech'),
                        'cx_PH' => __d('Cebuano'),
                        'cy_GB' => __d('Welsh'),
                        'da_DK' => __d('Danish'),
                        'de_DE' => __d('German'),
                        'el_GR' => __d('Greek'),
                        'en_GB' => __d('English (UK)'),
                        'en_IN' => __d('English (India)'),
                        'en_PI' => __d('English (Pirate)'),
                        'en_UD' => __d('English (Upside Down)'),
                        'en_US' => __d('English (US)'),
                        'eo_EO' => __d('Esperanto'),
                        'es_CL' => __d('Spanish (Chile)'),
                        'es_CO' => __d('Spanish (Colombia)'),
                        'es_ES' => __d('Spanish (Spain)'),
                        'es_LA' => __d('Spanish (Latin America)'),
                        'es_MX' => __d('Spanish (Mexico)'),
                        'es_VE' => __d('Spanish (Venezuela)'),
                        'et_EE' => __d('Estonian'),
                        'eu_ES' => __d('Basque'),
                        'fa_IR' => __d('Persian'),
                        'fb_LT' => __d('Leet Speak'),
                        'ff_NG' => __d('Fulah'),
                        'fi_FI' => __d('Finnish'),
                        'fo_FO' => __d('Faroese'),
                        'fr_CA' => __d('French (Canada)'),
                        'fr_FR' => __d('French (France)'),
                        'fy_NL' => __d('Frisian'),
                        'ga_IE' => __d('Irish'),
                        'gl_ES' => __d('Galician'),
                        'gn_PY' => __d('Guarani'),
                        'gu_IN' => __d('Gujarati'),
                        'gx_GR' => __d('Classical Greek'),
                        'ha_NG' => __d('Hausa'),
                        'he_IL' => __d('Hebrew'),
                        'hi_IN' => __d('Hindi'),
                        'hr_HR' => __d('Croatian'),
                        'hu_HU' => __d('Hungarian'),
                        'hy_AM' => __d('Armenian'),
                        'id_ID' => __d('Indonesian'),
                        'ig_NG' => __d('Igbo'),
                        'is_IS' => __d('Icelandic'),
                        'it_IT' => __d('Italian'),
                        'ja_JP' => __d('Japanese'),
                        'ja_KS' => __d('Japanese (Kansai)'),
                        'jv_ID' => __d('Javanese'),
                        'ka_GE' => __d('Georgian'),
                        'kk_KZ' => __d('Kazakh'),
                        'km_KH' => __d('Khmer'),
                        'kn_IN' => __d('Kannada'),
                        'ko_KR' => __d('Korean'),
                        'ku_TR' => __d('Kurdish (Kurmanji)'),
                        'ky_KG' => __d('Kyrgyz'),
                        'la_VA' => __d('Latin'),
                        'lg_UG' => __d('Ganda'),
                        'li_NL' => __d('Limburgish'),
                        'ln_CD' => __d('Lingala'),
                        'lo_LA' => __d('Lao'),
                        'lt_LT' => __d('Lithuanian'),
                        'lv_LV' => __d('Latvian'),
                        'mg_MG' => __d('Malagasy'),
                        'mi_NZ' => __d('Maori'),
                        'mk_MK' => __d('Macedonian'),
                        'ml_IN' => __d('Malayalam'),
                        'mn_MN' => __d('Mongolian'),
                        'mr_IN' => __d('Marathi'),
                        'ms_MY' => __d('Malay'),
                        'mt_MT' => __d('Maltese'),
                        'my_MM' => __d('Burmese'),
                        'nb_NO' => __d('Norwegian (bokmal)'),
                        'nd_ZW' => __d('Ndebele'),
                        'ne_NP' => __d('Nepali'),
                        'nl_BE' => __d('Dutch (Belgie)'),
                        'nl_NL' => __d('Dutch'),
                        'nn_NO' => __d('Norwegian (nynorsk)'),
                        'ny_MW' => __d('Chewa'),
                        'or_IN' => __d('Oriya'),
                        'pa_IN' => __d('Punjabi'),
                        'pl_PL' => __d('Polish'),
                        'ps_AF' => __d('Pashto'),
                        'pt_BR' => __d('Portuguese (Brazil)'),
                        'pt_PT' => __d('Portuguese (Portugal)'),
                        'qu_PE' => __d('Quechua'),
                        'rm_CH' => __d('Romansh'),
                        'ro_RO' => __d('Romanian'),
                        'ru_RU' => __d('Russian'),
                        'rw_RW' => __d('Kinyarwanda'),
                        'sa_IN' => __d('Sanskrit'),
                        'sc_IT' => __d('Sardinian'),
                        'se_NO' => __d('Northern Sami'),
                        'si_LK' => __d('Sinhala'),
                        'sk_SK' => __d('Slovak'),
                        'sl_SI' => __d('Slovenian'),
                        'sn_ZW' => __d('Shona'),
                        'so_SO' => __d('Somali'),
                        'sq_AL' => __d('Albanian'),
                        'sr_RS' => __d('Serbian'),
                        'sv_SE' => __d('Swedish'),
                        'sw_KE' => __d('Swahili'),
                        'sy_SY' => __d('Syriac'),
                        'sz_PL' => __d('Silesian'),
                        'ta_IN' => __d('Tamil'),
                        'te_IN' => __d('Telugu'),
                        'tg_TJ' => __d('Tajik'),
                        'th_TH' => __d('Thai'),
                        'tk_TM' => __d('Turkmen'),
                        'tl_PH' => __d('Filipino'),
                        'tl_ST' => __d('Klingon'),
                        'tr_TR' => __d('Turkish'),
                        'tt_RU' => __d('Tatar'),
                        'tz_MA' => __d('Tamazight'),
                        'uk_UA' => __d('Ukrainian'),
                        'ur_PK' => __d('Urdu'),
                        'uz_UZ' => __d('Uzbek'),
                        'vi_VN' => __d('Vietnamese'),
                        'wo_SN' => __d('Wolof'),
                        'xh_ZA' => __d('Xhosa'),
                        'yi_DE' => __d('Yiddish'),
                        'yo_NG' => __d('Yoruba'),
                        'zh_CN' => __d('Simplified Chinese (China)'),
                        'zh_HK' => __d('Traditional Chinese (Hong Kong)'),
                        'zh_TW' => __d('Traditional Chinese (Taiwan)'),
                        'zu_ZA' => __d('Zulu'),
                        'zz_TR' => __d('Zazaki')
                    ),
                    'default' => 'en_US',
                    'dependency' => array('comments_fb', '==', true)
                ),

                array(
                    'id'    => 'fbadmin',
                    'type'  => 'text',
                    'title' => __d('Admin user'),
                    'desc'  => __d('Add user or user ID to manage comment'),
                    'dependency' => array('comments_fb', '==', true)
                ),

                array(
                    'id'      => 'fbscheme',
                    'type'    => 'radio',
                    'title'   => __d('Color Scheme'),
                    'default' => 'light',
                    'options' => array(
                        'light' => __d('Light color'),
                        'dark' => __d('Dark color')
                    ),
                    'dependency' => array('comments_fb', '==', true)
                ),

                array(
                    'id' => 'fbnumber',
                    'type' => 'number',
                    'title' => __d('Number of Posts'),
                    'default' => '10',
                    'dependency' => array('comments_fb', '==', true)
                ),

                array(
                    'type'    => 'heading',
                    'content' => __d('Disqus comments'),
                    'dependency' => array('comments_dq', '==', true)
                ),

                array(
                    'id'    => 'dqshortname',
                    'type'  => 'text',
                    'title' => __d('Shortname'),
                    'desc'  => __d('This is used to uniquely identify your website on Disqus. It cannot be changed'),
                    'after' => '<p><a href="https://help.disqus.com/installation/whats-a-shortname" target="_blank">'.__d('more info').'</p>',
                    'dependency' => array('comments_dq', '==', true)
                ),

                array(
                    'type'    => 'content',
                    'content' => '<a href="'.admin_url('options-discussion.php').'"><strong>'.__d('Discussion Settings').'</strong></a>',
                    'dependency' => array('comments_wp', '==', true)
                )
            )
        ),


        /**
         * Main Settings
         * @since 2.1.8
         * @version 1.0
         */
        array(
            'title'  => __d('Links Module'),
            'name'   => 'settings-links',
            'icon'   => 'fa fa-minus',
            'fields' => array(

                array(
                    'id'    => 'linkslanguages',
                    'type'  => 'text',
                    'title' => __d('Set languages'),
                    'desc'  => __d('Add comma separated values'),
                    'attributes' => array(
                        'placeholder' => 'English, Spanish, Russian, Italian, Portuguese, Turkish, Bulgarian, Chinese'
                    )
                ),

                array(
                    'id'    => 'linksquality',
                    'type'  => 'text',
                    'title' => __d('Set resolutions quality'),
                    'desc'  => __d('Add comma separated values'),
                    'attributes' => array(
                        'placeholder' => '4k 2160p, HD 1440p, HD 1080p, HD 720p, SD 480p, SD 360p, SD 240p'
                    )
                ),

                array(
                    'id'    => 'linksfrontpublishers',
                    'type'  => 'checkbox',
                    'title' => __d('Front-End Links publishers'),
                    'desc'  => __d('Check the user roles that can be published from Front-end'),
                    'options' => array(
                        'adm' => __d('Administrator'),
                        'edt' => __d('Editor'),
                        'atr' => __d('Author'),
                        'ctr' => __d('Contributor'),
                        'sbr' => __d('Subscriber')
                    ),
                    'default' => array('adm','edt','atr','ctr','sbr')
                ),

                array(
                    'id'    => 'linkspublishers',
                    'type'  => 'checkbox',
                    'title' => __d('Auto Publish'),
                    'desc'  => __d('Mark the roles of users who can post links without being moderated'),
                    'options' => array(
                        'adm' => __d('Administrator'),
                        'edt' => __d('Editor'),
                        'atr' => __d('Author'),
                        'ctr' => __d('Contributor'),
                        'sbr' => __d('Subscriber')
                    ),
                    'default' => array('adm','edt','atr','ctr')
                ),

                array(
                    'id'    => 'linksrowshow',
                    'type'  => 'checkbox',
                    'title' => __d('Show in list'),
                    'desc'  => __d('Select the items that you want to show in the links table'),
                    'options' => array(
                        'qua' => __d('Quality'),
                        'lan' => __d('Language'),
                        'siz' => __d('Size'),
                        'cli' => __d('Clicks'),
                        'add' => __d('Added'),
                        'use' => __d('User')
                    ),
                    'default' => array('qua','lan','siz','cli','add','use')
                ),

                array(
                    'id'    => 'linkshoweditor',
                    'type'  => 'checkbox',
                    'title' => __d('Links Editor'),
                    'label' => __d('Show link editor, if the main entry has not yet been published')
                ),

                array(
                    'type'    => 'notice',
                    'class'   => 'info',
                    'content' => __d('This is not a secure method of adding links, there is a very high probability of data loss.'),
                    'dependency' => array('linkshoweditor', '==', true)
                ),

                array(
                    'type'    => 'heading',
                    'content' => __d('Redirection page')
                ),

                array(
                    'id'    => 'linktimewait',
                    'type'  => 'number',
                    'title' => __d('Timeout'),
                    'desc'  => __d('Timeout in seconds before redirecting the page automatically'),
                    'default' => '30',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                ),

                array(
                    'id'    => 'linkoutputtype',
                    'type'  => 'radio',
                    'title' => __d('Type Output'),
                    'desc'  => __d('Select an output type upon completion of the wait time'),
                    'options' => array(
                        'btn' => __d('Clicking on a button'),
                        'clo' => __d('Redirecting the page automatically')
                    ),
                    'default' => 'btn',
                    'dependency' => array('linktimewait', '>', '0')
                ),

                array(
                    'id'    => 'linkbtntext',
                    'type'  => 'text',
                    'title' => __d('Button text'),
                    'desc'  => __d('Customize the button'),
                    'default' => __d('Continue'),
                    'dependency' => array('linkoutputtype_btn|linktimewait', '==|>', true.'|0')
                ),

                array(
                    'id'    => 'linkbtntextunder',
                    'type'  => 'text',
                    'title' => __d('Text under button'),
                    'default' => __d('Click on the button to continue'),
                    'dependency' => array('linkoutputtype_btn|linktimewait', '==|>', true.'|0')
                ),

                array(
                    'id' => 'linkbtncolor',
                    'type' => 'color_picker',
                    'title' => __d('Main color'),
                    'desc' => __d('Select a color for customize redirection page'),
                    'default' => '#1e73be',
                    'dependency' => array('linkoutputtype_btn|linktimewait', '==|>', true.'|0')
                ),

                array(
                    'type'    => 'heading',
                    'content' => __d('Automation link')
                ),

                array(
                    'id'    => 'linksearchtype',
                    'type'  => 'radio',
                    'title' => __d('Type Search'),
                    'desc'  => __d('Select search type for subtitle'),
                    'options' => array(
                        'sbt' => __d('Search by title'),
                        'sbo' => __d('Search by original title')
                    ),
                    'default' => 'tlr',
                ),

                array(
                    'type'    => 'heading',
                    'content' => __d('Shorteners')
                ),

                array(
                    'type' => 'content',
                    'content' => '
                        <h3>'.__d('To obtain the link, use the <code>{{url}}</code> tag').'</h3>
                        <p>'.__d('To invalidate this function do not add any shortener').'</p>
                    '
                ),

                array(
                    'id'   => 'shorteners',
                    'type' => 'group',
                    'button_title'    => __d('Add new shortener'),
                    'accordion_title' => __d('Add new shortener'),
                    'fields' => array(
                        array(
                            'id'    => 'short',
                            'type'  => 'text',
                            'attributes' => array(
                                'placeholder' => 'http://short.link/any_parameter/{url}'
                            )
                        )
                    )
                )
            )
        ),



        /**
         * Video Player Options
         * @since 2.1.8
         * @version 1.0
         */
        array(
            'title'  => __d('Video Player'),
            'name'   => 'layout-player',
            'icon'   => 'fa fa-minus',
            'fields' => array(

                array(
                    'id'    => 'playautoload',
                    'type'  => 'switcher',
                    'title' => __d('Auto Load'),
                    'label' => __d('Load the first element of video player with the page')
                ),

                array(
                    'type'    => 'notice',
                    'class'   => 'info',
                    'content' => __d('The first element of the player will be loaded between 0 and 4 seconds after completing the total load of the page'),
                    'dependency' => array('playautoload', '==', true)
                ),

                array(
                    'id'    => 'playauto',
                    'type'  => 'checkbox',
                    'title' => __d('Auto Play'),
                    'desc'  => __d('Check if you want the videos to play automatically'),
                    'options' => array(
                        'ytb' => __d('Auto-play YouTube videos'),
                        'jwp' => __d('Auto-play JWPlayer videos')
                    )
                ),

                array(
                    'id'    => 'playsize',
                    'type'  => 'radio',
                    'title' => __d('Player size'),
                    'desc'  => __d('Select a specific size for video player'),
                    'options' => array(
                        'regular' => __d('Regular size'),
                        'bigger'  => __d('Bigger size'),
                    ),
                    'default' => 'regular',
                ),

                array(
                    'id'    => 'playwait',
                    'type'  => 'number',
                    'title' => __d('Timeout'),
                    'desc'  => __d('Time to wait in seconds before displaying Video Player'),
                    'default' => '10',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                ),

                array(
                    'type'       => 'heading',
                    'content'    => __d('Video Player')
                ),

                array(
                    'id'      => 'jwpage',
                    'type'    => 'select',
                    'title'   => __d('Page jwplayer'),
                    'desc'    => __d('Select page to display player'),
                    'options' => 'pages',
                ),

                array(
                    'id'    => 'player',
                    'type'  => 'radio',
                    'title' => __d('Player'),
                    'options' => array(
                        'jwp8' => __d('JW Player 8'),
                        'jwp7' => __d('JW Player 7'),
                        'plyr' => __d('Plyr.io')
                    ),
                    'default' => 'plyr',
                ),

                array(
                    'id'      => 'playercolor',
                    'type'    => 'color_picker',
                    'title'   => __d('Main color'),
                    'desc'    => __d('Choose a color'),
                    'default' => '#0b7ef4'
                ),

                array(
                    'id'      => 'jwkey',
                    'type'    => 'text',
                    'title'   => __d('License Key'),
                    'desc'    => __d('JW Player 7 (Self-Hosted)'),
                    'default' => 'IMtAJf5X9E17C1gol8B45QJL5vWOCxYUDyznpA==',
                    'dependency' => array('player_jwp7', '==', true)
                ),

                array(
                    'id'      => 'jw8key',
                    'type'    => 'text',
                    'title'   => __d('License Key'),
                    'desc'    => __d('JW Player 8 (Self-Hosted)'),
                    'default' => '64HPbvSQorQcd52B8XFuhMtEoitbvY/EXJmMBfKcXZQU2Rnn',
                    'dependency' => array('player_jwp8', '==', true)
                ),

                array(
                    'id'      => 'jwabout',
                    'type'    => 'text',
                    'title'   => __d('About text'),
                    'desc'    => __d('JW Player About text in right click'),
                    'default' => 'Powered by JW Player',
                    'dependency' => array('player_plyr', '!=', true)
                ),

                array(
                    'id'    => 'jwlogo',
                    'type'  => 'image',
                    'title' => __d('Logo player'),
                    'desc'  => __d('Upload your logo using the Upload Button or insert image URL'),
                    'dependency' => array('player_plyr', '!=', true)
                ),

                array(
                    'id'    => 'jwposition',
                    'type'  => 'select',
                    'title' => __d('Logo position'),
                    'desc'  => __d('Select a postion for logo player'),
                    'options' => array(
                        'top-left'     => __d('Top left'),
                        'top-right'    => __d('Top right'),
                        'bottom-left'  => __d('Bottom left'),
                        'bottom-right' => __d('Bottom right')
                    ),
                    'dependency' => array('player_plyr', '!=', true)
                ),


                array(
                    'type'       => 'heading',
                    'content'    => __d('Fake Player')
                ),

                array(
                    'type'    => 'notice',
                    'class'   => 'warning',
                    'content' => __d('This module does not work if Auto-Load is activated'),
                    'dependency' => array('playautoload|fakeplayer', '==|==', true.'|'.true)
                ),

                array(
                    'id'         => 'fakeplayer',
                    'type'       => 'switcher',
                    'title'      => __d('Enable'),
                    'label'      => __d('Enable Fake Player')
                ),

                array(
                    'id'         => 'fakebackdrop',
                    'type'       => 'text',
                    'title'      => __d('Backdrop URL'),
                    'desc'      => __d('Show background image by default if the system did not find an image in the content'),
                    'dependency' => array('fakeplayer', '==', true),
                    'attributes' => array(
                        'placeholder' => 'https://'
                    )
                ),

                array(
                    'id'       => 'fakeoptions',
                    'type'     => 'checkbox',
                    'title'    => __d('Show in Fake Player'),
                    'options'  => array(
                        'pla' => __d('Play button'),
                        'ads' => __d('Notify what is an ad'),
                        'qua' => __d('HD Quality')
                    ),
                    'default'  => array('pla','ads','qua'),
                    'dependency' => array('fakeplayer', '==', true),
                ),

                array(
                    'type'       => 'content',
                    'content'    => '<h2>'.__d('Advertising links for fake player').'</h2>',
                    'dependency' => array('fakeplayer', '==', true),
                ),

                array(
                    'type'       => 'content',
                    'content'    => '<p>'.__d('Add as many ad links as you wish, these are displayed randomly in the Fake Player').'</p>',
                    'dependency' => array('fakeplayer', '==', true),
                ),

                array(
                    'id'              => 'fakeplayerlinks',
                    'type'            => 'group',
                    'button_title'    => __d('Add link'),
                    'accordion_title' => __d('Add new link'),
                    'dependency' => array('fakeplayer', '==', true),
                    'fields' => array(
                        array(
                            'id'   => 'link',
                            'type' => 'text',
                            'attributes' => array(
                                'placeholder' => 'http://'
                            )
                        )
                    )
                )

            )
        ),


        /**
         * WP Mail SMTP Settings
         * @since 2.1.8
         * @version 1.0
         */
        array(
            'title'  => __d('WP Mail'),
            'name'   => 'layout-wpmail',
            'icon'   => 'fa fa-minus',
            'fields' => array(

                array(
                    'type'    => 'heading',
                    'content' => __d('Welcome message')
                ),

                array(
                    'id'      => 'welcomesjt',
                    'type'    => 'text',
                    'title'   => __d('Subject'),
                    'default' => __d('Welcome to {sitename}'),
                ),

                array(
                    'id'      => 'welcomemsg',
                    'type'    => 'textarea',
                    'title'   => __d('Message'),
                    'default' => __d('Hello {username}, Thank you for registering at {sitename}'),
                    'after'   => '<p><strong>Tags:</strong> {sitename} {siteurl} {username} {password} {email} {first_name} {last_name}</p>',
                ),

                array(
                    'type'    => 'heading',
                    'content' => __d('SMTP Settings')
                ),

                array(
                    'id'      => 'smtp',
                    'type'    => 'switcher',
                    'title'   => __d('Enable SMTP'),
                    'label'   => __d('Configure an SMTP server for WordPress to send verified emails'),
                    'default' => false
                ),

                array(
                    'id'      => 'smtpserver',
                    'type'    => 'text',
                    'title'   => __d('SMTP Server'),
                    'default' => 'smtp.gmail.com',
                    'dependency' => array(
                        'smtp', '==', true
                    )
                ),

                array(
                    'id'      => 'smtpport',
                    'type'    => 'number',
                    'title'   => __d('SMTP Port'),
                    'default' => '587',
                    'attributes' => array(
                        'style' => 'width:100px'
                    ),
                    'dependency' => array(
                        'smtp', '==', true
                    )
                ),

                array(
                    'id'    => 'smtpencryp',
                    'type'  => 'radio',
                    'title' => __d('Type of Encryption'),
                    'options' => array(
                        'plain' => __d('Plain text'),
                        'ssl'   => __d('SSL'),
                        'tsl'   => __d('TSL')
                    ),
                    'default'    => 'tsl',
                    'dependency' => array(
                        'smtp', '==', true
                    )
                ),

                array(
                    'id'      => 'smtpfromname',
                    'type'    => 'text',
                    'title'   => __d('From Name'),
                    'dependency' => array(
                        'smtp', '==', true
                    )
                ),

                array(
                    'id'      => 'smtpfromemail',
                    'type'    => 'text',
                    'title'   => __d('From Email Address'),
                    'dependency' => array(
                        'smtp', '==', true
                    )
                ),

                array(
                    'type'    => 'heading',
                    'content' => __d('SMTP Authentication'),
                    'dependency' => array(
                        'smtp', '==', true
                    )
                ),

                array(
                    'id'    => 'smtpusername',
                    'type'  => 'text',
                    'title' => __d('Username'),
                    'dependency' => array(
                        'smtp', '==', true
                    )
                ),

                array(
                    'id'    => 'smtppassword',
                    'type'  => 'password',
                    'title' => __d('Password'),
                    'dependency' => array(
                        'smtp', '==', true
                    )
                )
            )
        )
    )
);




/**
 ************************
 * HOMEPAGE
 ************************
 */
$options[] = array(
    'title'    => __d('Homepage'),
    'name'     => 'homepage',
    'icon'     => 'fa fa-th-large',
    'sections' => array(


        /**
         * Homepage Settings
         * @since 2.1.8
         * @version 1.0
         */
        array(
            'title'  => __d('Settings'),
            'name'   => 'home-settings',
            'icon'   => 'fa fa-minus',
            'fields' => array(

                array(
                    'id'    => 'homefullwidth',
                    'type'  => 'switcher',
                    'title' => __d('Full width'),
                    'label' => __d('Enable full width only in homepage')
                ),

                array(
                    'type'    => 'notice',
                    'class'   => 'info',
                    'content' => __d('<strong>NOTE:</strong> Drag and drop the modules in the order you want them'),
                ),

                array(
                    'id'    => 'homepage',
                    'type'  => 'sorter',
                    'default' => array(
                        'enabled' => array(
                            'slider'        => __d('Slider'),
                            'featured-post' => __d('Featured titles'),
                            'movies'        => __d('Movies'),
                            'ads'           => __d('Advertising'),
                            'tvshows'       => __d('TV Shows'),
                            'seasons'       => __d('TV Show > Season'),
                            'episodes'      => __d('TV Show > Episode'),
                            'top-imdb'      => __d('TOP IMDb'),
                            'blog'          => __d('Blog entries')
                        ),
                        'disabled' => array(
                            'widgethome'     => __d('Genres Widget'),
                            'slider-movies'  => __d('Slider Movies'),
                            'slider-tvshows' => __d('Slider TV Shows')
                        ),
                    ),
                    'enabled_title'  => __d('Modules enabled'),
                    'disabled_title' => __d('Modules disabled'),
                )
            )
        ),



        /**
         * Featured Titles
         * @since 2.1.8
         * @version 1.0
         */
        array(
            'title'  => __d('Featured titles'),
            'name'   => 'home-featured',
            'icon'   => 'fa fa-minus',
            'fields' => array(

                array(
                    'id'      => 'featuredtitle',
                    'type'    => 'text',
                    'title'   => __d('Module Title'),
                    'default' => __d('Featured titles'),
                    'desc'    => __d('Add title to show')
                ),

                array(
                    'id'      => 'featureditems',
                    'type'    => 'number',
                    'title'   => __d('Items number'),
                    'desc'    => __d('Number of items to show'),
                    'default' => '8',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                ),

                array(
                    'id'    => 'featuredcontrol',
                    'type'  => 'checkbox',
                    'title' => __d('Module control'),
                    'desc'  => __d('Check to enable option.'),
                    'options' => array(
                        'slider' => __d('Activate Slider'),
                        'autopl' => __d('Auto play Slider')
                    ),
                    'default'=> array('slider')
                ),

                array(
                    'id'      => 'featuredmodorderby',
                    'type'    => 'select',
                    'title'   => __d('Order by'),
                    'desc'    => __d('Order items for this module'),
                    'default' => 'modified',
                    'options' => array(
                        'date'     => __d('Post date'),
                        'title'    => __d('Post title'),
                        'modified' => __d('Last modified'),
                        'rand'     => __d('Random entry'),
                    ),
                    'attributes' => array(
                        'style' => 'max-width:250px'
                    )
                ),

                array(
                    'id'    => 'featuredmodorder',
                    'type'  => 'radio',
                    'title' => __d('Order'),
                    'options' => array(
                        'DESC' => __d('Descending'),
                        'ASC'  => __d('Ascending')
                    ),
                    'dependency' => array('featuredmodorderby','!=','rand'),
                    'default' => 'DESC'
                )
            )
        ),




        /**
         * Blog entries
         * @since 2.1.8
         * @version 1.0
         */
        array(
            'title'  => __d('Blog entries'),
            'name'   => 'home-blog',
            'icon'   => 'fa fa-minus',
            'fields' => array(

                array(
                    'id'      => 'blogtitle',
                    'type'    => 'text',
                    'title'   => __d('Module Title'),
                    'default' => __d('Last entries'),
                    'desc'    => __d('Add title to show')
                ),

                array(
                    'id'      => 'blogitems',
                    'type'    => 'number',
                    'title'   => __d('Items number'),
                    'desc'    => __d('Number of items to show'),
                    'default' => '5',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                ),

                array(
                    'id'      => 'blogwords',
                    'type'    => 'number',
                    'title'   => __d('Number of words'),
                    'desc'    => __d('Number of words for describing the entry'),
                    'default' => '180',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                )
            )
        ),



        /**
         * Main Slider / Slider Movies / Slider TV Show
         * @since 2.1.8
         * @version 1.0
         */
        array(
            'title'  => __d('Main Slider'),
            'name'   => 'home-slider',
            'icon'   => 'fa fa-minus',
            'fields' => array(

                array(
                    'id'      => 'slideritems',
                    'type'    => 'number',
                    'title'   => __d('Items number'),
                    'desc'    => __d('Number of items to show'),
                    'default' => '10',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                ),

                array(
                    'id'    => 'sliderautoplaycontrol',
                    'type'  => 'checkbox',
                    'title' => __d('Autoplay slider control'),
                    'desc'  => __d('Check to enable auto-play slider.'),
                    'options' => array(
                        'autopms' => __d('Autoplay Slider'),
                        'autopsm' => __d('Autoplay Slider Movies'),
                        'autopst' => __d('Autoplay Slider TV Shows')
                    )
                ),

                array(
                    'id'    => 'sliderspeed',
                    'type'  => 'select',
                    'title' => __d('Speed Slider'),
                    'desc'  => __d('Select speed slider in secons'),
                    'options' => array(
                        '4000' => __d('4 seconds'),
                        '3500' => __d('3.5 seconds'),
                        '3000' => __d('3 seconds'),
                        '2500' => __d('2.5 seconds'),
                        '2000' => __d('2 seconds'),
                        '1500' => __d('1.5 seconds'),
                        '1000' => __d('1 second'),
                        '500'  => __d('0.5 seconds')
                    ),
                    'attributes' => array(
                        'style' => 'max-width:250px'
                    )
                ),

                array(
                    'id'      => 'slidermodorderby',
                    'type'    => 'select',
                    'title'   => __d('Order by'),
                    'desc'    => __d('Order items for this module'),
                    'default' => 'date',
                    'options' => array(
                        'date'     => __d('Post date'),
                        'title'    => __d('Post title'),
                        'modified' => __d('Last modified'),
                        'rand'     => __d('Random entry'),
                    ),
                    'attributes' => array(
                        'style' => 'max-width:250px'
                    )
                ),

                array(
                    'id'    => 'slidermodorder',
                    'type'  => 'radio',
                    'title' => __d('Order'),
                    'options' => array(
                        'DESC' => __d('Descending'),
                        'ASC'  => __d('Ascending')
                    ),
                    'dependency' => array('slidermodorderby','!=','rand'),
                    'default' => 'DESC'
                )
            )
        ),



        /**
         * TOP IMDb
         * @since 2.1.8
         * @version 1.0
         */
        array(
            'title'  => __d('TOP IMDb'),
            'name'   => 'home-imdb',
            'icon'   => 'fa fa-minus',
            'fields' => array(

                array(
                    'id'      => 'topimdbtitle',
                    'type'    => 'text',
                    'title'   => __d('Module Title'),
                    'default' => __d('TOP IMDb'),
                    'desc'    => __d('Add title to show')
                ),

                array(
                    'id'    => 'topimdblayout',
                    'type'  => 'radio',
                    'title' => __d('Select Layout'),
                    'desc'  => __d('Select the type of module to display'),
                    'options' => array(
                        'movtv' => __d('Movies and TV Shows'),
                        'movie' => __d('Only Movies'),
                        'tvsho' => __d('Only TV Shows')
                    ),
                    'default' => 'movtv',
                ),

                array(
                    'id'      => 'topimdbrangt',
                    'type'    => 'number',
                    'title'   => __d('Last months'),
                    'desc'    => __d('Verify content in the following time range in months'),
                    'default' => '12',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                ),

                array(
                    'id'      => 'topimdbminvt',
                    'type'    => 'number',
                    'title'   => __d('Minimum votes'),
                    'desc'    => __d('Set the minimum number of votes so that the content appears in the list'),
                    'default' => '100',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                ),

                array(
                    'id'      => 'topimdbitems',
                    'type'    => 'number',
                    'title'   => __d('Items number'),
                    'desc'    => __d('Number of items to show'),
                    'default' => '10',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                )
            )
        ),



        /**
         * Movies
         * @since 2.1.8
         * @version 1.0
         */
        array(
            'title'  => __d('Movies'),
            'name'   => 'home-movies',
            'icon'   => 'fa fa-minus',
            'fields' => array(

                array(
                    'id'      => 'movietitle',
                    'type'    => 'text',
                    'title'   => __d('Module Title'),
                    'default' => __d('Movies'),
                    'desc'    => __d('Add title to show')
                ),

                array(
                    'id'      => 'movieitems',
                    'type'    => 'number',
                    'title'   => __d('Items number'),
                    'desc'    => __d('Number of items to show'),
                    'default' => '10',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                ),

                array(
                    'id'    => 'moviemodcontrol',
                    'type'  => 'checkbox',
                    'title' => __d('Slider control'),
                    'desc'  => __d('Check to enable option.'),
                    'options' => array(
                        'slider' => __d('Activate Slider'),
                        'autopl' => __d('Auto play Slider'),
                    ),
                    'default'=> array('slider')
                ),

                array(
                    'id'      => 'moviemodorderby',
                    'type'    => 'select',
                    'title'   => __d('Order by'),
                    'desc'    => __d('Order items for this module'),
                    'default' => 'date',
                    'options' => array(
                        'date'     => __d('Post date'),
                        'title'    => __d('Post title'),
                        'modified' => __d('Last modified'),
                        'rand'     => __d('Random entry'),
                    ),
                    'attributes' => array(
                        'style' => 'max-width:250px'
                    )
                ),

                array(
                    'id'    => 'moviemodorder',
                    'type'  => 'radio',
                    'title' => __d('Order'),
                    'options' => array(
                        'DESC' => __d('Descending'),
                        'ASC'  => __d('Ascending')
                    ),
                    'dependency' => array('moviemodorderby','!=','rand'),
                    'default' => 'DESC'
                )
            )
        ),



        /**
         * TV Shows
         * @since 2.1.8
         * @version 1.0
         */
        array(
            'title'  => __d('TV Shows'),
            'name'   => 'home-tvshows',
            'icon'   => 'fa fa-minus',
            'fields' => array(

                array(
                    'id'      => 'tvtitle',
                    'type'    => 'text',
                    'title'   => __d('Module Title'),
                    'default' => __d('TV Shows'),
                    'desc'    => __d('Add title to show')
                ),

                array(
                    'id'      => 'tvitems',
                    'type'    => 'number',
                    'title'   => __d('Items number'),
                    'desc'    => __d('Number of items to show'),
                    'default' => '10',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                ),

                array(
                    'id'    => 'tvmodcontrol',
                    'type'  => 'checkbox',
                    'title' => __d('Slider control'),
                    'desc'  => __d('Check to enable option.'),
                    'options' => array(
                        'slider' => __d('Activate Slider'),
                        'autopl' => __d('Auto play Slider')
                    ),
                    'default'=> array('slider')
                ),

                array(
                    'id'      => 'tvmodorderby',
                    'type'    => 'select',
                    'title'   => __d('Order by'),
                    'desc'    => __d('Order items for this module'),
                    'default' => 'date',
                    'options' => array(
                        'date'     => __d('Post date'),
                        'title'    => __d('Post title'),
                        'modified' => __d('Last modified'),
                        'rand'     => __d('Random entry'),
                    ),
                    'attributes' => array(
                        'style' => 'max-width:250px'
                    )
                ),

                array(
                    'id'    => 'tvmodorder',
                    'type'  => 'radio',
                    'title' => __d('Order'),
                    'options' => array(
                        'DESC' => __d('Descending'),
                        'ASC'  => __d('Ascending')
                    ),
                    'dependency' => array('tvmodorderby','!=','rand'),
                    'default' => 'DESC'
                )
            )
        ),



        /**
         * TV Shows > Seasons
         * @since 2.1.8
         * @version 1.0
         */
        array(
            'title'  => __d('TV Shows > Seasons'),
            'name'   => 'home-seasons',
            'icon'   => 'fa fa-minus',
            'fields' => array(

                array(
                    'id'      => 'seasonstitle',
                    'type'    => 'text',
                    'title'   => __d('Module Title'),
                    'default' => __d('Seasons'),
                    'desc'    => __d('Add title to show')
                ),

                array(
                    'id'      => 'seasonsitems',
                    'type'    => 'number',
                    'title'   => __d('Items number'),
                    'desc'    => __d('Number of items to show'),
                    'default' => '10',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                ),

                array(
                    'id'    => 'seasonsmodcontrol',
                    'type'  => 'checkbox',
                    'title' => __d('Slider control'),
                    'desc'  => __d('Check to enable option.'),
                    'options' => array(
                        'slider' => __d('Activate Slider'),
                        'autopl' => __d('Auto play Slider')
                    ),
                    'default'=> array('slider')
                ),

                array(
                    'id'      => 'seasonsmodorderby',
                    'type'    => 'select',
                    'title'   => __d('Order by'),
                    'desc'    => __d('Order items for this module'),
                    'default' => 'date',
                    'options' => array(
                        'date'     => __d('Post date'),
                        'title'    => __d('Post title'),
                        'modified' => __d('Last modified'),
                        'rand'     => __d('Random entry'),
                    ),
                    'attributes' => array(
                        'style' => 'max-width:250px'
                    )
                ),

                array(
                    'id'    => 'seasonsmodorder',
                    'type'  => 'radio',
                    'title' => __d('Order'),
                    'options' => array(
                        'DESC' => __d('Descending'),
                        'ASC'  => __d('Ascending')
                    ),
                    'dependency' => array('seasonsmodorderby','!=','rand'),
                    'default' => 'DESC'
                )
            )
        ),



        /**
         * TV Shows > Episodes
         * @since 2.1.8
         * @version 1.0
         */
        array(
            'title'  => __d('TV Shows > Episodes'),
            'name'   => 'home-episodes',
            'icon'   => 'fa fa-minus',
            'fields' => array(

                array(
                    'id'      => 'episodestitle',
                    'type'    => 'text',
                    'title'   => __d('Module Title'),
                    'default' => __d('Episodes'),
                    'desc'    => __d('Add title to show')
                ),

                array(
                    'id'      => 'episodesitems',
                    'type'    => 'number',
                    'title'   => __d('Items number'),
                    'desc'    => __d('Number of items to show'),
                    'default' => '10',
                    'attributes' => array(
                        'style' => 'width:100px'
                    )
                ),

                array(
                    'id'    => 'episodesmodcontrol',
                    'type'  => 'checkbox',
                    'title' => __d('Slider control'),
                    'desc'  => __d('Check to enable option.'),
                    'options' => array(
                        'slider' => __d('Activate Slider'),
                        'autopl' => __d('Auto play Slider')
                    ),
                    'default'=> array('slider')
                ),

                array(
                    'id'      => 'episodesmodorderby',
                    'type'    => 'select',
                    'title'   => __d('Order by'),
                    'desc'    => __d('Order items for this module'),
                    'default' => 'date',
                    'options' => array(
                        'date'     => __d('Post date'),
                        'title'    => __d('Post title'),
                        'modified' => __d('Last modified'),
                        'rand'     => __d('Random entry'),
                    ),
                    'attributes' => array(
                        'style' => 'max-width:250px'
                    )
                ),

                array(
                    'id'    => 'episodesmodorder',
                    'type'  => 'radio',
                    'title' => __d('Order'),
                    'options' => array(
                        'DESC' => __d('Descending'),
                        'ASC'  => __d('Ascending')
                    ),
                    'dependency' => array('seasonsmodorderby','!=','rand'),
                    'default' => 'DESC'
                )
            )
        )
    )
);




/**
 ************************
 * SEO
 ************************
 */
$options[] = array(
    'title' => __d('SEO'),
    'name' => 'seo',
    'icon' => 'fa fa-line-chart',
    'fields' => array(
        array(
            'id'    => 'seo',
            'type'  => 'switcher',
            'title' => __d('SEO Features'),
            'label' => __d('Basic SEO'),
        ),

        array(
            'type'       => 'notice',
            'class'      => 'info',
            'content'    => __d('Uncheck this to disable SEO features in the theme, highly recommended if you use any other SEO plugin, that way the themes SEO features won\'t conflict with the plugin'),
            'dependency' => array('seo','==', true)
        ),

        array(
            'id'         => 'seoname',
            'type'       => 'text',
            'title'      => __d('Alternative name'),
            'dependency' => array('seo','==', true)
        ),

        array(
            'id'         => 'seokeywords',
            'type'       => 'text',
            'title'      => __d('Main keywords'),
            'desc'       => __d('add main keywords for site info'),
            'dependency' => array('seo','==', true)
        ),

        array(
            'id'         => 'seodescription',
            'type'       => 'textarea',
            'title'      => __d('Meta description'),
            'dependency' => array('seo','==', true)
        ),

        array(
            'type'    => 'heading',
            'content' => __d('Site verification'),
            'dependency' => array('seo','==', true)
        ),

        array(
            'id'         => 'seogooglev',
            'type'       => 'text',
            'title'      => __d('Google Search Console'),
            'after'       => '<p><a href="https://www.google.com/webmasters/verification/" target="_blank">'.__d('Settings here').'</a></p>',
            'dependency' => array('seo','==', true)
        ),

        array(
            'id'         => 'seobingv',
            'type'       => 'text',
            'title'      => __d('Bing Webmaster Tools'),
            'after'       => '<p><a href="https://www.bing.com/toolbox/webmaster/" target="_blank">'.__d('Settings here').'</a></p>',
            'dependency' => array('seo','==', true)
        ),

        array(
            'id'         => 'seoyandexv',
            'type'       => 'text',
            'title'      => __d('Yandex Webmaster Tools'),
            'after'       => '<p><a href="https://yandex.com/support/webmaster/service/rights.xml#how-to" target="_blank">'.__d('Settings here').'</a></p>',
            'dependency' => array('seo','==', true)
        )
    )
);



/**
 ************************
 * ADS
 ************************
 */
$options[] = array(
    'title' => __d('Advertising'),
    'name' => 'ads',
    'icon' => 'fa fa-usd',
    'fields' => array(

        array(
          'type'    => 'content',
          'content' => '<p><a href="'.admin_url('themes.php?page=dooplay-ad').'"><strong>'.__d('Manage integration codes and ads').'</strong></a></p>',
        ),
    )
);




/**
 ************************
 * BACKUP
 ************************
 */
$options[] = array(
    'title' => __d('Backup'),
    'name' => 'backup',
    'icon' => 'fa fa-database',
    'fields' => array(
        array(
          'type' => 'backup'
        )
    )
);


// Class Codestar Framework
CSFramework::instance($settings, $options);
