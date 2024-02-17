<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'landingpagetest' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7HCJkhmjZNA=gy]M^of~I2+=j} xq_TcyY[1 mef7$K}xo7bh{Wds<Y#2|e`^1Ls' );
define( 'SECURE_AUTH_KEY',  'di$uRc}k%vy5}~<<ntfl~KGZrb)A<?DK9b^e2Pw;*Cp_}yCn:GQ@Ep;+@Md50sif' );
define( 'LOGGED_IN_KEY',    'o4M[woyG]23`thTE^hc8Ik)5lO(N1A6}$6-qEFZ8Ya&exSXRA;=5FjSj<SO<Qln6' );
define( 'NONCE_KEY',        'QZr>7Ab34|101@%4!Hk837k-u?l}}.>UheX?Iu?dRd(:ol^+Bp!Cp=)#i&}J^uJ~' );
define( 'AUTH_SALT',        'G^y1*~G,Pw4;lrQ&xW_D7@LWVgnpuS_}Q,7y/sN.:!2(#T`iNGtQ3%d -RAa~H7#' );
define( 'SECURE_AUTH_SALT', 'K})zx|eJ!Oa/)UCPyFSh>45^OBG;p=k7<g|y+C@NK~5W+k>)X#J(^$xXRTW+mZU2' );
define( 'LOGGED_IN_SALT',   'iX-VeOU)FP_G8UB7O%>=3{$Sc^{4=1Hkft?|u$Zj&|w)35m>1><7-l`Tt7LmG0Wp' );
define( 'NONCE_SALT',       'dbxA~TFfXJ588RA<:Q`:0G|rPUy%xfd8C9QC`!QaG5?T(mJOM{EsPR1iWA2LO=w{' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_lpt';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
