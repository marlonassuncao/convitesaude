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
define('DB_NAME', 'convite');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'marlonassuncao');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Hiexoez41994_@');

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
define('AUTH_KEY',         'EygzQTv9Z(APbdb!x{|TDd3<E+74U+7`v(dNQP_Od3zu$}+nl_vT%0F!z-|E^qZn');
define('SECURE_AUTH_KEY',  'ku?nR,|g{<%}=)F:XmLJ_Wo<v,(p N#0rZ{p[+G+{f^J$v|E-`YS5&jF$ydVrY*L');
define('LOGGED_IN_KEY',    '&W`|2}EcS-kW9sx%(W}+skM1.Z#]UB-Y|5(N[z-K+w/j+8yYEhR5AJjc/ygh-+JN');
define('NONCE_KEY',        '<E4G+y/4IMGcJNMl.j*/mZ.~6|SHmcv@I-2[tw-cVO~7W<I[w=sNE57+,X+@ZOo{');
define('AUTH_SALT',        'V2}w2}k3_| RO1 9a)uvAD <,}ai-?X[aI+dU=-*}[joO=fNz8tr]av_||,*a%8=');
define('SECURE_AUTH_SALT', 'brZJ|&],_0R5u:bA%+-nE7&z]+xuA$Z@4f42-EJ^t>~[)c[/<@N-EjiH5C[8=nZP');
define('LOGGED_IN_SALT',   '@Z;dqD!R6r#e-ptD.2<,:atqVZjdS<{{F|rsx[O*cNsb-~R4=/O>ggX~jz.M8<}B');
define('NONCE_SALT',       'P1$6ar)=$ 2&huz~goIJa$<KL@XxA^JS%69F:.05Be;4ajg:5P{xg]C^FqS!f==C');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD','direct');
