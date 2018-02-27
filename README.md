# Version 1
[Relevant Trello Card](https://trello.com/c/BqVfCRVD)

## Debugging IE Cross-Browser Compatibility
[caniuse Source](https://caniuse.com/#feat=flexbox)
[Flexbugs Source](https://github.com/philipwalton/flexbugs)

### All Applicable
* Column flex items set to `align-items: center` overflow their container
* Column flex items ignore margin: auto on the cross axis

### Probably Uninvolved
* flex-basis doesn't account for box-sizing: border-box
  * `flex-basis` is not explicitly defined, and is as such `auto`

### 100% Not Involved
* Flex items are not correctly justified when `max-width` is used
  * `max-width` is not used
* `flex-basis` cannot be animated
  * `flex-basis` is not used
* `flex-basis` doesn't support `calc()`
  * `calc()` is not used
* Containers with `display: flex` and `flex-direction: column` will not properly calculate their flexed childrens' sizes if the container has `min-height` but no explicit `height` property.
  * `min-height` is not used
* IE11 does not vertically align items correctly when `min-height` is used.
  * `min-height` is not used
* `min-height` on a flex container won't apply to its flex items
  * `min-height` is not used
* flex shorthand declarations with unitless flex-basis values are ignored
  * `flex` shorthand declaration is not used
* Column flex items don't always preserve intrinsic aspect ratios
  * No images are inside flex containers
* Inline elements are not treated as flex-items
  * No `:before` or `:after` pseudo-elements are used.
