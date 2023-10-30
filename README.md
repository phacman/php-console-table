# Console Table

Rendering a table in the console. 

The package is based on the `symphony/console` classes and does not depend on this component.

## Getting Started

```php
use PhacMan\ConsoleTable\Table;

$table = new Table();

$table
    ->setHeaderTitle('Header Title')
    ->setFooterTitle('Footer Title')
    ->setHeaders(['ISBN', 'Title', 'Author'])
    ->setRows([
        ['99921-58-10-7', 'Divine Comedy', 'Dante Alighieri'],
        ['9971-5-0210-0', 'A Tale of Two Cities', 'Charles Dickens'],
        ['960-425-059-0', 'The Lord of the Rings', 'J. R. R. Tolkien'],
        ['80-902734-1-6', 'And Then There Were None', 'Agatha Christie'],
    ])
;

$table->render();
```

Original usage details: [page](https://symfony.com/doc/current/components/console/helpers/table.html)

Local examples: [docs/qa.php](docs/qa.php)
