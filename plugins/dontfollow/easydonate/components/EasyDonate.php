<?php namespace DontFollow\EasyDonate\Components;

use Cms\Classes\ComponentBase;
use System\Classes\PluginManager;

class EasyDonate extends ComponentBase
{
    public $components;

    public function componentDetails()
    {
        return [
            'name'        => 'EasyDonate',
            'description' => 'Кломпонент EasyDonate'
        ];
    }

    public function init()
    {
        $pluginManager = PluginManager::instance();
        $this->components = $pluginManager->getRegistrationMethodValues('registerComponents');
        foreach ($this->components as $plugin => $component) {
            if (in_array($plugin, config('dontfollow.easydonate::blacklist'))) {
                unset($this->components[$plugin]);
            }
        }

        foreach ($this->components as $plugin => $components) {
            foreach ($components as $namespace => $component) {
                $this->addComponent($namespace, $component, []);
            }
        }
    }

    public function onRun()
    {
        $this->addJs('/plugins/dontfollow/easydonate/assets/js/easydonate.js');
    }

    public function onGetComponents()
    {
        $listComponents = [];
        foreach ($this->components as $plugin => $components) {
            foreach ($components as $namespace => $component) {
                if (class_exists($namespace) && method_exists($namespace, 'onRender')) {
                    $listComponents[$component] = $namespace;
                }
            }
        }

        return $listComponents;
    }
}
