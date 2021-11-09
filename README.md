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

GitHub Actions handles the deployment to GitHub Pages automatically. See
[the `build.yml` workflow](https://github.com/phpcommunity/phplang.org/blob/main/.github/workflows/build.yml),
for more information.
