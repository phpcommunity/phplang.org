# phplang.org

## Generating Locally

This project uses [mdBook](https://github.com/rust-lang-nursery/mdBook) to
generate documentation from Markdown files. To generate the documentation
locally, [install mdBook](https://github.com/rust-lang-nursery/mdBook#installation).
Then, run the following from the project root:

``` bash
php tools/toc.php
php tools/colophon.php
mdbook build --open
```

This will open the files in your default web browser.
