# phplang.org

This repository includes [php/php-langspec](https://github.com/php/php-langspec)
as a submodule.

## Cloning and Getting the Submodule

```
git clone https://github.com/phpcommunity/phplang.org.git
cd phplang.org/
git submodule update --init --recursive
```

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

## Update the Submodule

```
git submodule update --recursive --remote
```

## Deploying to GitHub Pages

TravisCI handles the deployment to GitHub Pages automatically:

https://github.com/phpcommunity/phplang.org/blob/20448b598f0f0c391fc4a86619f32a53350f9cdc/.travis.yml#L27-L41
