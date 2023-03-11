<?php

/**
*
*
* @package - Application Form language
* @copyright 2016 Rich McGirr (RMcGirr83)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, [
	'ACP_APPLICATIONFORM_SETTINGS' => 'Opções do formulário de inscrição',
	'APPLICATIONFORM_SETTINGS' => 'Configurações',
	'APPLICATIONFORM_FORUM' => 'Fórum',
	'APPLICATIONFORM_FORUM_EXPLAIN' => 'Selecione o fórum onde o aplicativo deve postar.',
	'APPFORM_FORUM_NO_ATTACH' => 'O fórum selecionado não permite anexos.',
	'APPLICATIONFORM_POSITIONS' => 'Posições do aplicativo',
	'APPLICATIONFORM_POSITIONS_EXPLAIN' => 'Cada posição segue uma nova linha.',
	'APPFORM_SETTINGS_SUCCESS' => 'As configurações do formulário de inscrição foram salvas.',
	'APPFORM_MUST_HAVE_POSITIONS' => 'Você deve ter pelo menos uma posição.',
	'APPFORM_GUEST' => 'Permitir convidados',
	'APPFORM_GUEST_EXPLAIN' => 'Se sim, os visitantes do fórum terão acesso ao formulário de inscrição.',
	'APPLICATIONFORM_NRU' => 'Permitir grupo recém-registrado',
	'APPLICATIONFORM_NRU_EXPLAIN' => 'Se sim, aqueles no grupo recém-registrado terão acesso ao formulário de inscrição.',
	'APPLICATIONFORM_ALLOW_ATTACHMENT' => 'Permitir anexos',
	'APPLICATIONFORM_ALLOW_ATTACHMENT_EXPLAIN' => 'Se definido como sim, os arquivos do tipo doc, pdf e texto poderão ser enviados.',
	'APPLICATIONFORM_ATTACHMENT_REQ' => 'O anexo é necessário',
	'APPLICATIONFORM_ATTACHMENT_REQ_EXPLAIN' => 'Se definido como sim, o formulário exigirá um anexo para a posição que está sendo solicitada.',
	'APPLICATIONFORM_QUESTIONS' => 'Perguntas',
	'APPLICATIONFORM_QUESTIONS_EXPLAIN' => 'Quaisquer perguntas adicionais que você deseja fazer no formulário podem ser colocadas aqui. Cada pergunta segue uma nova linha. ',
	'APPFORM_INFO_PREVIEW' => 'Pré-visualizar',
	'APPFORM_INFO' => 'Informações do formulário de inscrição',
	'APPFORM_INFO_EXPLAIN' => 'Esta mensagem é exibida na página do formulário de inscrição',
	//Doação
	'PAYPAL_IMAGE_URL' => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT' => 'Doe usando o PayPal',
	'BUY_ME_A_BEER_URL' => 'https://paypal.me/RMcGirr83',
	'BUY_ME_A_BEER' => 'Compre-me uma cerveja por criar esta extensão',
	'BUY_ME_A_BEER_SHORT' => 'Faça uma doação para esta extensão',
	'BUY_ME_A_BEER_EXPLAIN' => 'Esta extensão é totalmente gratuita. É um projeto no qual dedico meu tempo para a diversão e uso da comunidade phpBB. Se você gosta de usar esta extensão, ou se ela beneficiou seu fórum, considere <a href="https://paypal.me/RMcGirr83" target="_blank" rel="noreferrer noopener"> me comprar uma cerveja </ a>. Seria muito apreciado. <i class = "fa fa-smile-o" style = "color: green; font-size: 1.5em;" aria-hidden = "true"> </i> ',
]);
