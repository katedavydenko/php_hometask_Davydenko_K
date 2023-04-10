<?php

use Latte\Runtime as LR;

/** source: C:\Users\User22\PhpstormProjects\php_hometask_Davydenko_K\Home\public\templates\default\index.tpl */
final class Templatea778376f68 extends Latte\Runtime\Template
{

	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<p>';
		echo LR\Filters::escapeHtmlText($hello) /* line 1 */;
		echo '</p>';
	}
}
