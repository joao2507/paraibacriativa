<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'paraibacriativa');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '1234');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rgKB`KJ1bU|_6n-7w(5C)wTEv$>dcC7V4-D6!_uMD#e>gSQ-et<uzS8 rUy`PPUh');
define('SECURE_AUTH_KEY',  'HU^HH5sP2{KKa@83.iiCVQed`PURX]&f5Hu-Snw?4H7lTU&3Xex ev`a+$)mSm6-');
define('LOGGED_IN_KEY',    'u4kF+3+=bt-x=VyoO)-a5UKyKAJACvF&ZfynlTt)W0rC3II7n(IuP6+IFKoLe70-');
define('NONCE_KEY',        '-_>u--(u%o]Mkf:D_L-m?FM${@600T1.&!wOk=Vm6GsOx8D+_d*5[E&],L-IMw^3');
define('AUTH_SALT',        '--H+N%.16V4[-(qb5ijo-Ys=|L~9*{NY2Uam%u-{o:x)YG,.i[TvbHu3)R.iH.dD');
define('SECURE_AUTH_SALT', ';+&~yjlP*O9/[w;w+Vs!4=#!c}[s &,F)VLhSF@|>!bO8?Hf*`zw#c?8G&Jvc3Q7');
define('LOGGED_IN_SALT',   'krZp=<tfkM@v.kdK9M/nuMCA%jzgg!{4=<|6A]+cNm2J&nn!0?8 nOj2v[c #xfd');
define('NONCE_SALT',       'g`zE$`0?!^u4It8={O46Gqc8_{ M-nB7Db(eUX)d^Yv4I;|cqV@GiL5ZinJ|Kjr ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'pb_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

define('WP_MEMORY_LIMIT','512M');

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
