# TYPO3 Extension ``backend_module``

This TYPO3 extension provides view helpers and traits as a foundation to quickly build TYPO3 backend modules compatible 
with TYPO3 9 LTS and TYPO3 10.3.

## Installation

Install this extension using composer: `composer require chf/backend-module`.

## Usage

Let your backend controller extend the `BackendModuleActionController` class and use the provided methods and 
viewhelpers to create your custom backend module.

Check out the TYPO3 extension [EXT:teaser_manager](https://github.com/christian-fries/teaser_manager) as an example.

## Supported versions

This extension supports TYPO3 9 LTS and TYPO3 10 LTS.

## Change log

You can find the change log [here](changelog.md).