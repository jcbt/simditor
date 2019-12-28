<?php

namespace Jcbt\Simditor\Src;

use Encore\Admin\Form\Field;

class EditorField extends Field
{
    protected $view = 'simditor::field';

    protected static $css = [
        '/vendor/jcbt/simditor/simditor.css',
        '/vendor/jcbt/simditor/simditor-html.css',
        '/vendor/jcbt/simditor/simditor-fullscreen.css',
        '/vendor/jcbt/simditor/simditor-markdown.css',
    ];

    protected static $js = [
        '/vendor/jcbt/simditor/module.js',
        '/vendor/jcbt/simditor/hotkeys.js',
        '/vendor/jcbt/simditor/uploader.js',
        '/vendor/jcbt/simditor/simditor.js',
        '/vendor/jcbt/simditor/beautify-html.js',
        '/vendor/jcbt/simditor/simditor-html.js',
        '/vendor/jcbt/simditor/simditor-dropzone.js',
        '/vendor/jcbt/simditor/simditor-fullscreen.js',
        '/vendor/jcbt/simditor/marked.js',
        '/vendor/jcbt/simditor/simditor-marked.js',
        '/vendor/jcbt/simditor/marked.js',
        '/vendor/jcbt/simditor/to-markdown.js',
        '/vendor/jcbt/simditor/simditor-markdown.js'

    ];

    public function render()
    {
        $config = json_encode((array)config('admin.extensions.simditor.config'));
        $this->script = <<<SCRIPT
$(document).ready(function(){
    var config = {$config}
    config['textarea'] = $('#{$this->id}')
    var editor_{$this->id} = new Simditor(config);
});
SCRIPT;
        return parent::render();
    }
}
