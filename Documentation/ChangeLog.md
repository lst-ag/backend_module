# Change log

## v2.2.1
- Add extension key to composer configuration

## v2.2.0
- Use `declare(strict_types = 1)` everywhere
- Explicitly cast Uri objects to string
- Replace missing labels

## v2.1.0
- Add configuration for Symfony dependency injection
- Bring back `$_EXTKEY` in `ext_emconf.php` due to TER limitations

## v2.0.0
- [!!!] Change vendor prefix from `CHF` to `LST`
- Support TYPO3 CMS 10 LTS
- Drop support for TYPO3 CMS 7 & 8
- Remove deprecated traits `HiddenTrait`, `PidTrait`, `TimestampableTrait` and `UidTrait`
- Remove obsolete traits `UidAware` and `PidAware` because these methods are implemented on the `AbstractDomainObject`

## v1.0.0
- Support for TYPO3 7 LTS, TYPO3 8 LTS and TYPO3 9 LTS
- Don't show configuration button in TYPO3 9
- Adjust php-cs-fixer configuration

## v0.9.1
- Register missing argument in IconForRecordViewHelper

## v0.9.0
- Register arguments of view helpers
- Add traits UidAware, PidAware, Hideable, Deletable and Timestampable to easyly add TYPO3 specific properties to domain models. Deprecate old traits.

## v0.8.0
- Add UidTrait, PidTrait, HiddenTrait and TimestampableTrait to easily add TYPO3 specific properties to models

## v0.7.6
- Use old language service in TYPO3 7.6

## v0.7.5
- Bugfix in viewhelper "disableRecord"

## v0.7.3
- Add viewhelper for generating hide/unhide button

## v0.7.2
- Add viewhelpers for generating links to edit/remove records which are not objects

## v0.7.1
- Set storage pid from settings only if it is defined

## v0.7.0
- Show flash message if no storage pid is defined

        You don't have to create this flash message manually anymore

- Add german translation for common labels

## v0.6.1
- Use ContextMenu instead of removed ClickMenu in TYPO3 8

## v0.6.0
- Add new button type _JS button_
- Add data attributes to link buttons

## v0.5.2
- Don't escape output of viewhelpers

## v0.5.1
- Compatibility for TYPO3 8 & TYPO3 7 (loading different js files with requireJS)

## v0.5.0
- Compatibility for TYPO3 8

## v0.4.0
- Add button type clipboard for pasting records from the clipboard
- Change icon of extension

## v0.3.0
- Add BackendSession object to store user settings
- Add controller context to return url for better usability

## v0.2.1
- Access BackendTemplateView properties only if view is instance of BackendTemplateView

## v0.2.0
- Provide PageRenderer as a property of BackendModuleActionController
- Bugfix for IconForRecord view helper

## v0.1.0
- Improve usability by adding tooltips to buttons and links
