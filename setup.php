<?php
function plugin_init_glpi_correios() {
    global $PLUGIN_HOOKS;

    $PLUGIN_HOOKS['csrf_compliant']['glpi-correios'] = true;
    $PLUGIN_HOOKS['item_add']['glpi-correios'] = ['Location' => 'correios_hook_function'];
}

function plugin_version_glpi_correios() {
    return [
        'name'           => 'Consulta Correios',
        'version'        => '1.0.0',
        'author'         => 'Seu Nome',
        'license'        => 'GPLv3+',
        'homepage'       => 'https://github.com/seu-repositorio',
        'minGlpiVersion' => '9.5'
    ];
}

function plugin_glpi_correios_install() {
    return true;
}

function plugin_glpi_correios_uninstall() {
    return true;
}
