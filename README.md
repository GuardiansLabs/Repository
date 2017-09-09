# Repository




Repository Is A very simple implementation for Active Repository 
## Install

Via Composer

``` bash
$ composer require guardiansLabs/repository
```

## Usage
create your own repository that extend the our ActiveRepository and inject your model

``` php
use App\User;
use GuardiansLabs\Repository\Repositories\ActiveRepository;

class UserRepository extends ActiveRepository
{
    public function __construct()
    {
        $this->model =  new User();
    }
}
```
## Avilavle methods

``` php
    
    public function setModel(Model $model);

    public function getModel();

    /**
     * @return Collection
     */
    public function findAll();
    
    /**
     * @param $itemId
     * @return Collection
     */
    public function findItemById($itemId);
    
    /**
     * @param array $data
     * @return Collection
     */
    public function createNew(array $data);
    
    /**
     * @param $itemId
     * @param array $data
     * @return mixed
     */
    public function update($itemId, array $data);
    
    /**
     * @param $itemId
     * @return mixed
     */
    public function delete($itemId);
    
    /**
     * @param array $where
     * @param array $columns
     * @internal param array $attributes
     * @return Collection
     */
    public function findWhere(array $where, $columns = ['*']);
    
    /**
     * @param $column
     * @param $values
     * @throws RepositoryException
     * @return Collection
     */
    public function findWhereIn($column, $values);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing
Any Pull Requests are Welcome

## Credits

- [mustafah15][link-author]
- contributors
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
