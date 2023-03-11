<?php
/**
*
* application [English]
*
* @package language
* @copyright (c) 2016 Rich McGirr (RMcGirr83)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
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

$lang = array_merge($lang, [
	'APPLICATION_SUBJECT'			=> 'Boletim de ocorrência de %s',
	'APPLICATION_MESSAGE'			=> 'O usuário, [b]%1$s[/b], enviou o boletim de ocorrência online.' . "\n" . '[b]Usuário[/b]: %2$s' . "\n" . '[b]IP:[/b] %3$s'. "\n" . '[b]Email:[/b] %4$s'. "\n" . '[b]Tipo de crime[/b]: %5$s' . "\n" . '[b]Endereço:[/b] %6$s',
	'APPLICATION_SEND'				=> 'Seu boletim foi enviado com sucesso!',
	'APPLICATION_PAGETITLE'			=> 'Boletim de Ocorrência online',
	'APPLICATION_WELCOME_MESSAGE'	=> 'Bem vindo ao Boletim de ocorrência online! <br> <br> <strong> <em> Os itens marcados com um asterisco devem ser preenchidos!</em></strong>',
	'APPLICATION_REALNAME'			=> 'Usuário',
	'APPLICATION_EMAIL'				=> 'E-mail',
	'APPLICATION_POSITION'			=> 'Tipo de crime',
	'APPLICATION_WHY'				=> 'Endereço?',
	'APP_NOT_COMPLETELY_FILLED'		=> 'Você precisa preencher todos os campos do boletim.',
	'APP_COMPLETE_NAME_WHY'		    => 'Você deve fornecer um nome e endereço.',
	'ADD_ATTACHMENT_EXPLAIN'		=> 'Anexe um arquivo para nos ajudar a tomar decisões sobre sua denúncia.',
	'ADD_ATTACHMENT_REQ'		    => '<strong> Você deve anexar um arquivo para ser considerado para o boletim.</strong>.',
	'APPLICATION_REQUIRES_ATTACHMENT' => 'Anexe um arquivo.',
	'APPLICATION_QUESTIONS'		     => 'Responda às seguintes questões',
	'APPLICATION_QUESTIONS_REQUIRED' => 'Todas as questões devem ser respondidas',
	'APPLICATION QUESTION_ERROR'	 => 'Você não respondeu a todas as perguntas',
	'APPLICATION_REQUIRES_WHY'		 => 'Você precisa responder porque devemos escolher você',
	'APPLICATION_ANSWER_TOO_SHORT'	 => 'A questão <em>% 1s </em> contém poucos caracteres',
]);