laravel-admin extension
======

## 包含官方扩展

- simditor-html


## 包含第三方扩展

- simditor-marked

- simditor-dropzone

- simditor-fullscreen

## 安装

```
$ composer require jcbt/simditor
$ php artisan vendor:publish --provider="Jcbt\Simditor\SimditorServiceProvider"
```

## 配置

在 `config/admin.php` 的 `extensions` 中加入以下配置
```
'simditor' => [
    // Set to false if you want to disable this extension
    'enable' => true,
    // Editor configuration
    'config' => [
        'upload' => [
            'url' => '/admin/api/upload', # example api route: admin/api/upload
            'fileKey' => 'upload_file',
            'connectionCount' => 3,
            'leaveConfirm' => 'Uploading is in progress, are you sure to leave this page?'
        ],
        'tabIndent' => true,
        'toolbar' => ['title', 'bold', 'italic', 'underline', 'strikethrough', 'fontScale', 'color', '|', 'ol',
            'ul', 'blockquote', 'code', 'table', '|', 'link', 'image', 'hr', '|', 'indent', 'outdent',
            'alignment', '|', 'html', 'fullscreen', 'marked'],
        'toolbarFloat' => true,
        'toolbarFloatOffset' => 0,
        'toolbarHidden' => false,
        'pasteImage' => true,
        'cleanPaste' => false,
    ]
]
```

## 使用

```
$form->simditor('content', __('Content'));
```
