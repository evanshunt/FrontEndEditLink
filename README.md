## Description

A small SilverStripe module that provides logged in users with a front-end `Edit` link. This helps in quickly editing a pages and finding it on the SiteTree instead of hunting for it.

This is SilverStripe 3 supported release

## Setup

Add this part to your project's `composer.json` file


Then from where you have the `composer.json` file run `composer require evanshunt/FrontEndEditLink:^1`

Add the extension to your site's yml configuration

```yaml

Page:
  extensions:
    - FrontEndEditLink

```

Then on your `Page.ss` or if you only want to enabel it on specific pages; then only add it to those pages' templates, add `$EditLink`. This will render a small link on the page. Right now it's positioned fixed at the bottom left corner of the page.

Changelog:
- 2021-07-22: uses link method rather than manually building link
- 2020-06-25: renamed module
- 2020-06-22: initial commit
