# Repository

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Repository Is A very simple implementation for Active Repository 
## Install

Via Composer

``` bash
$ composer require GuardiansLabs/Repository
```

## Usage
create your own repsitory that extend the our Base Repository and inject your model

``` php
use App\User;
use GuardiansLabs\Repository\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    public function __construct()
    {
        $this->model =  new User();
    }
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing
Any Pull Requests are Welcome

## Credits

- [mustafah15][link-author]
- [contributers]
## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/GuardiansLabs/Repository.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/GuardiansLabs/Repository.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/GuardiansLabs/Repository.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/GuardiansLabs/Repository.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/GuardiansLabs/Repository
[link-scrutinizer]: https://scrutinizer-ci.com/g/GuardiansLabs/Repository/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/GuardiansLabs/Repository
[link-downloads]: https://packagist.org/packages/GuardiansLabs/Repository
[link-author]: https://github.com/mustafah15
[link-contributors]: ../../contributors
