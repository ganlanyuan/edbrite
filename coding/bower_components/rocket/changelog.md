# Changelog

### v2.5.3
+ Fixed: some syntax issue of `autoplay` and `autoheight` for sliders.
+ Add: `ie-placeholder` for IE8, 9 to support `placeholder`.
+ Add: helper function `checkKeyDown`.

### v2.5.2
+ Improved: now `switch` button has a box-shadow, and also has a flexible border and border-radius.
+ Improved: controls, dots, autoplay are easier to customize in `slider-gallery` and `slider-carousel`.
+ Improved: now `left, right, top, bottom` are all available for all `mobile-nav` styles except `drawer`.
+ Fixed: an unit error in `gallery`.

### v2.5.1
+ Fixed: *Error: Invalid US-ASCII character "\xE2"* when compile with [Koala](http://koala-app.com/).
+ Fixed: `two-columns` parameter issue when there is not `gutter` value passed in.
+ Fixed: `play/pause` button don't switch when clicked in `slider-gallery`.

### v2.5.0
+ Added: responsive font-size `font-size`
+ Added: pure css `accordion`
+ Added: pure css `mobile-nav`
+ Added: `progress-bar` to css sliders
+ Added: `autoplay` js for sliders

### v2.4.0
+ Added: mixin `slider-carousel`, `slider-gallery`.
+ Added: js function `equalizer`, `sticky`.

### v2.3.0
+ Added: mixin `tabs`, `tabs-active`, `tabs-panel-active`.
+ Added: mixin `checkbox`, `checkbox-active`.
+ Added: mixin `switch`.
+ Added: mixin `push-toggle`.
+ Added: `$direction` to mixin `dropdown`.
+ Added: `text-align` to mixin `type`.
+ Added: mixin `bp` which is the same with mixin `breakpoint`.
+ Fixed: Fix some issues in `button`, `span`, `span-calc`.

### v2.2.1
+ Improved: Update `two-columns`, now flexible gutter (e.g. 2%) is acceptable.
+ Fixed: Fix an issue in `span` and `span-calc` when `gutter: 0`.
+ Removed: Remove `keep` argument from `span-calc`.

### v2.2.0
+ Improved: Simplify all mixins.
+ Fixed: Fix a width issue in `tooltip`.
+ Fixed: Fix a string issue in `span-calc`.

### v2.1.2
+ Fixed: Fix an image issue (which cause the images '0px-width' in webkit browsers) in `media` by setting `max-width: none;`.

### v2.1.1
+ Fixed: Fix an issue in `media`.
+ Added: '!important' to `visible` and `hidden`.
+ Improved: Modify `offcanvas` hover-background.

### v2.1.0
+ Add [sassdoc](http://creatiointl.org/gallery/william/sassdoc/).   
+ Rocket now works correctly on LibSass 3.2.0.
+ Now you can pass a nested list to `span`.
```` scss
$base-layout: (8 of 12);
.example { @include span($base-layout 2% last); }
````
+ Simplify `media`.
+ Fix a 1px issue in `visible`.
+ Remove `slider` mixins.

### v2.0.1
+ Add prefix 'ro-' to all variables and placeholder selectors to prevent attach with other frameworks.
+ Change layout `gallery` from `inline-block` to `float`.
+ Fix `font-family` string issue in `type'.

### v2.0.0
+ All mixins now require only one parameter(list). The advantage is that you don't need to remeber the order of parameters any more, you just need to remember which element you want to use. For example, `button(16px '.5em 1em' radius)` and ` button(radius '.5em 1em' 16px)` are the same.
+ Add `keep` to `span`, `span-calc` and `gallery`.
+ Add 'isolate mode' to `span`.
+ Combine `breakpoint-mi`, `breakpoint-ma` and `breakpoint-mm` to one mixin `breakpoint`. Now `breakpoint` accept a maximun 6 numbers' list.
+ Simplify `visible` and `hidden` mixins by including `breakpoint` mixin.
+ Add more features to `type`. Now it's very helpful that you can see most of the type properties at one place.
+ Remove javascript dependence from `dropdown`.
+ Remove `debug`.
+ Simplify other functions and mixins.

Things we are working on:
+ Support libsass
+ Update css slider
+ Add more mixins and functions
+ Rocket document

### v1.2.0
+ Add `keep` argument to `span`, `span-calc`, `gallery`. Now you can reduce your code by using `$keep:true` if your want keep some setting(float, margin) when you do media query.
+ Add `span` function to get column width(percentage). Now you can easily set up same `gutter` between nested grid by using `$gutter: $container-gutter / span($container-column, $container-columns, $container-gutter)`.
+ Simplify `span`, `span-calc`, `gallery` and `container`.

### v1.1.11
+ Modify `span`, `wrap`, `gallery`. 

### v1.1.10
+ update `span`, `gallery`.

### v1.1.9
+ `type`, `button`: add "px" value to "rem-non-support" browser.
+ Simplify `wrap`. now argument `$columns` is not required.
+ Fix an issue in `span` and `span-clac`.
+ Update demos.

### v1.1.8
+ Update `offcanvas`. Now you can use `offcanvas` in @mediaquery.

### v1.1.7
+ Simplify layout functions: `span`, `span-calc`, `gallery`, `two-columns` and `debug`.

### v1.1.6
+ Fix an issue on `slider-carousel: center`.
+ Hide `autoplay` on non-supported browsers.

### v1.1.5
+ Add animations to `offcanvas`.
+ Enhance `carousel` slideshow: hide extra dots when per-page items are more than one.
+ Add `autoheight` to `slider-carousel` and `slider-gallery`. `slider-gallery: autoheight` on IE8 are not supported for now.
+ Update `selectivizr`. CSS3 selectors inside `@mediaquery` works well on IE7+ now.
+ Hide *controls* when sliders are set to autoplay.

### v1.1.4
+ Fix an issue in `color` mixin.
+ Fix an `page cover stopped` issue in `offcanvas` mixin.
+ Update Readme.

### v1.1.3
+ Fix an arg issue in `gallery`.
+ Simplify `type` and `button` mixins.

### v1.1.2
+ Fix an issue in `contianer`.
+ Simplify `slider-gallery`, `container`, `wrap` and `breakpoint`.

### v1.1.1
+ Fix `offcanvas` cover height issue when the content is not enough to fill the window.
+ Fix `css-slider` controls shade the content.
+ Update `flex-video`.
+ Rename functions `toem`, `torem` to `em`,`rem`. 

### v1.1.0
+ Add `Pure CSS sliders`: [slider-gallery](designdev.christianpost.com/develop/rocket/docs/#slider-gallery-topic) and [slider-carousel](designdev.christianpost.com/develop/rocket/docs/#slider-carousel-topic).

### v1.0.0
+ Rename `mobile-nav` to `offcanvas`.
+ Update `em`, `toem` and `torem`.

### v0.1.4
+ Add more data to color model based on [http://paletton.com/](http://paletton.com/).
+ Fix an issue: when $hue == 0, color function can not compile.

### v0.1.3
+ Rewrite color core function, and fix everything.
+ Update [demo page](http://designdev.christianpost.com/develop/docs/).

### v0.1.2
+ Upgrade color functions. `square` still need to be fixed.

### v0.1.1
+ Add color mixin. Ready to update color functions.

### v0.1.0
+ Add @mixin two-columns.
+ Add color functions: contrast, complementary, adjacent, triad and tetrad.

### v0.0.3
+ Add 'default' and 'null' options to span and span-calc, change $float to optional.
