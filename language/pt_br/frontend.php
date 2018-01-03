<?php
/**
 * @package   	OneAll Social Login
 * @copyright 	Copyright 2011-2017 http://www.oneall.com
 * @license   	GPL-2.0
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307,USA.
 *
 * The "GNU General Public License" (GPL) is available at
 * http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 3.4.0] (https://github.com/phpBBTraducoes)
 */
if (!defined ('IN_PHPBB'))
{
	exit ();
}

if (empty ($lang) || !is_array ($lang))
{
	$lang = array();
}

// Social Login Frontend.
$lang = array_merge ($lang, array(
	'OA_SOCIAL_LOGIN_LINK_UCP' => 'Vincular contas de redes sociais',
	'OA_SOCIAL_LOGIN_LINK' => 'Vincular contas de redes sociais',
	'OA_SOCIAL_LOGIN_LINK_NETWORKS' => 'Redes sociais',
	'OA_SOCIAL_LOGIN_LINK_DESC1' => 'Nesta página, você pode conectar suas contas de rede social à sua conta do fórum.',
	'OA_SOCIAL_LOGIN_LINK_DESC2' => 'Depois de ter conectado uma conta de rede social, você também pode usá-lo para entrar no fórum.',
	'OA_SOCIAL_LOGIN_LINK_ACTION' => 'Clique no ícone da rede social para vincular/desvincular.',
	'OA_SOCIAL_LOGIN_ENABLE_SOCIAL_NETWORK' => 'Você deve habilitar pelo menos uma rede social',
	'OA_SOCIAL_LOGIN_ENTER_CREDENTIALS' => 'Você precisa configurar suas credenciais da API',
	'OA_SOCIAL_LOGIN_SOCIAL_LINK' => 'Link do Serviço social',
	'OA_SOCIAL_LOGIN_ACCOUNT_ALREADY_LINKED' => 'Esta conta de rede social já está vinculada a outro usuário do fórum.',
	'OA_SOCIAL_LOGIN_ACCOUNT_LINKED' => 'Esta conta de rede social foi vinculada à sua conta.',
	'OA_SOCIAL_LOGIN_ACCOUNT_UNLINKED' => 'Esta conta de rede social foi desvinculada da sua conta.',
	'OA_SOCIAL_LOGIN_ACCOUNT_INACTIVE_OTHER' => 'A conta foi criada. No entanto, as configurações do fórum exigem a ativação da conta.<br /> Uma chave de ativação foi enviada para o seu endereço de e-mail.',
	'OA_SOCIAL_LOGIN_ACCOUNT_INACTIVE_ADMIN' => 'A conta foi criada. No entanto, as configurações do fórum exigem a ativação da conta por um administrador. <br /> Um e-mail foi enviado aos administradores e você será informado por email uma vez que sua conta tenha sido ativada.'
));
