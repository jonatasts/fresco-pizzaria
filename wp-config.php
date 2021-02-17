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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'fresco-pizzaria' );

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
define( 'AUTH_KEY',         'TQ+zec1;1yVY[Xl8<}-gCls9MXz5XWukCAemCn:7(?Xl5{#Q[vJQPt63oZ|a}5e*' );
define( 'SECURE_AUTH_KEY',  'NcIkN(L#ta&[2i6YyLrpH<l39I[N4{G~lCToj[`<q=`)h_Zm7y oLJC50P [9OVz' );
define( 'LOGGED_IN_KEY',    'F}aNTl4LDWRGaX`FZr:1/[5JFInx<$wNi1g*[?dv!fT~V[Ys@,!OW;xmHl@gpz{y' );
define( 'NONCE_KEY',        '`8hDZ4Uj9JEZO)amGRf}~RJoN=fa}W^Ym!w;5NwA62nt)g2;Izo^@M+Ub!|f{|/V' );
define( 'AUTH_SALT',        '5XZ$KJ204:FgCj;~a4R5m)RdTdGY~NIZLS!Al4$EdXS5J}0XZn-j2F=Km$V91(Wi' );
define( 'SECURE_AUTH_SALT', 't#va{[$3+8wgaVE |tgOlnv28m>ys>nosgO#~7/ usV^W1v6$>t%NtAgaM:Y2_rv' );
define( 'LOGGED_IN_SALT',   'R}P.$a r9iQ,B3+AR$E=TI}M<Tr[1@jQ8p!c>U-TA[Y2o,~_%JC3>l?DV,7~]qW}' );
define( 'NONCE_SALT',       'JD3}i(Avv=FJNTEp}T=r43T?4#0~FLSI.^?F G5gLY:[TSC,Ho)20?fQCMm2l;:m' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'frc_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
