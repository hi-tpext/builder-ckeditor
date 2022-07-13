<?php

namespace tpext\builder\ckeditor\common;

use tpext\common\Resource as baseResource;

class Resource extends baseResource
{
    protected $version = '1.0.2';

    protected $name = 'builder.ckeditor';

    protected $title = 'ckeditor资源包';

    protected $description = '提供[ckeditor]相关样式资源';

    protected $root = __DIR__ . '/../';

    protected $assets = 'assets';
}
