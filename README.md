## Description

A small SilverStripe module that provides logged in users with a front-end `Edit` link. This helps in quickly editing a pages and finding it on the SiteTree instead of hunting for it.

This is SilverStripe 4 supported release


## Setup

Then from where you have the `composer.json` file run `composer require evanshunt/frontendeditlink:^2`

Add the extension to your site's yml configuration

```yaml

Page:
  extensions:
    - evanshunt\FrontEndEditLink\FrontEndEditLink

```

On `Page.php` controller add `use evanshunt\FrontEndEditLink;`

Then on your `Page.ss` or if you only want to enabel it on specific pages; then only add it to those pages' templates, add `$EditLink`. This will render a small link on the page. Right now it's positioned fixed at the bottom left corner of the page.

Changelog:

- 2020-06-25: renamed module
- 2020-06-22: initial commit
