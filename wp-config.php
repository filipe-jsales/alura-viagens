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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'alura' );

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
define( 'AUTH_KEY',         'v5pzDM/nwiF<v.$I|tr~wNjX{.tg);$&%)O_|@>ZrKaB+t7Mi)M{TRO8d_rLDGN7' );
define( 'SECURE_AUTH_KEY',  '~)%s0GsX_;Sj(hlglN[Fn>AOX6 f1?H</41DM=t1een2Y!1P^+Sq&Klu6K0||s@^' );
define( 'LOGGED_IN_KEY',    'r#3Gm8eX>;!_%WAmSpX9$Eh73]aC<QtKoea1 @$$eCld,?Np+[BHY0YcR4o@Nco8' );
define( 'NONCE_KEY',        '/4CPe/oeo1|(MQ(c7P#!EK#1$f,|v ;yLM!;Kz7f]qI8~Tr5gQ^F1TY3ggxmXTo<' );
define( 'AUTH_SALT',        'd:@<3TjMow_sM_RIMPd5@H`mq=I-KFcN0/e)bVdmg o@Co|Qc,etj|MXL MVxt4y' );
define( 'SECURE_AUTH_SALT', 'yb;sP~($COj{.r?Kw`v^kr4{l.;RFFa=0h+-|X1{Oe#]R5MO!ZXHeL<}sx3R][wz' );
define( 'LOGGED_IN_SALT',   '/qE4y;10/Lo_ Y1`qa!Z7888X*Jd)^!+Zr[r9mtrtXf8L}pf?j8k<Rc(IQm;e+dz' );
define( 'NONCE_SALT',       'j&&>l3%b%o#clbo]JYz(o7N P4wsHks(7SXY.lJ)5Ld*oW?5gcwWi7JVJlzX$pFb' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
