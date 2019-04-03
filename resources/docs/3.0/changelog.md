# Changelog

All notable changes to this project will be documented here.

---

- [3.4.0](#3.4.0)
- [3.3.1](#3.3.1)
- [3.3.0](#3.3.0)
- [3.2.0](#3.2.0)
- [3.1.1](#3.1.1)
- [3.1.0](#3.1.0)
- [3.0.2](#3.0.2)
- [3.0.0](#3.0.0)
- [2.0.1](#2.0.1)
- [2.0.0](#2.0.0)

<a name="3.4.0"></a>
## [3.4.0](https://github.com/rawilk/vue-context/releases/tag/3.4.0)

Released 2018-11-19

### Bug fixes 3.4.0
- **Close event:** only emit the event if menu is actually open (fixes [#13](https://github.com/rawilk/vue-context/issues/13))

<a name="3.3.1"></a>
## [3.3.1](https://github.com/rawilk/vue-context/releases/tag/3.3.1)

Released 2018-10-23

### Changes 3.3.1
- Context menu now closes via [clickaway](https://github.com/simplesmiler/vue-clickaway) instead of a blur event. Credit: [robjbrain](https://github.com/robjbrain)

### Updates 3.3.1
- Updated vue and other dev dependencies.

<a name="3.3.0"></a>
## [3.3.0](https://github.com/rawilk/vue-context/releases/tag/3.3.0)

Released 2018-10-15

### Features 3.3.0
- **Events:** both open and close events are now emitted by the component. ([#10](https://github.com/rawilk/vue-context/issues/10))

<a name="3.2.0"></a>
## [3.2.0](https://github.com/rawilk/vue-context/releases/tag/3.2.0)

Released 2018-09-12

### Features 3.2.0
- **Close on click prop:** added a prop to prevent closing the context menu on click. ([#8](https://github.com/rawilk/vue-context/issues/8))

<a name="3.1.1"></a>
## [3.1.1](https://github.com/rawilk/vue-context/releases/tag/3.1.1)

Released 2018-06-23

### Updates 3.1.1
- Updated README.md
- Added code comments

<a name="3.1.0"></a>
## [3.1.0](https://github.com/rawilk/vue-context/releases/tag/3.1.0)

Released 2018-05-29

### Features 3.1.0
- **Scroll prop:** added a prop to close the context menu automatically on window scroll. ([#2](https://github.com/rawilk/vue-context/issues/2))

<a name="3.0.2"></a>
## [3.0.2](https://github.com/rawilk/vue-context/releases/tag/3.0.2)

Released 2018-05-29

### Updates 3.0.2
- Updated documentation

### Added 3.0.2
- Added [demos](https://rawilk.github.io/vue-context) for the component.

<a name="3.0.0"></a>
## [3.0.0](https://github.com/rawilk/vue-context/releases/tag/3.0.0)

Released 2018-05-26

### Breaking changes 3.0.0
- Changed slot scope definition from `userData` to just `data`.
- Component gets imported as `{ VueContext }` instead of `VContext` now.

### Updates 3.0.0
- Updated dependencies
- Updated documentation

### Changes 3.0.0
- Changed code structure and build process.

<a name="2.0.1"></a>
## [2.0.1](https://github.com/rawilk/vue-context/releases/tag/2.0.1)

Released 2017-08-18

### Added 2.0.1
- License file
- Changelog file

### Removed 2.0.1
- Removed bottom border from context menu line items.

<a name="2.0.0"></a>
## [2.0.0](https://github.com/rawilk/vue-context/releases/tag/2.0.0)

Released 2017-08-17

- Initial release