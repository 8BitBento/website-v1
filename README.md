# 8BitBento V1 Static HTML

The first version of our website in static HTML.  Branches for various implementations.

# Running commands

See the `package.json` `scripts` block for commands you can run, such as:

```bash
yarn run serve
yarn run css
yarn run sass:watch
```

Serve uses [http-server](https://github.com/indexzero/http-server) package, which has a bunch of
handy options, such as SSL support if https is desired.  


# Logo

The logo files are in:

```bash
/assets/images/*
```

# Typography

Current typography consists of `Comfortaa` and `Lora`, `Comfortaa` is the typeface of the `8bitbento` logo.
`Lora` is a serif font that pairs well with rounded sans-serif typefaces like `Comfortaa`.  Both are hosted
via `fonts.googleapis.com` / [Google Fonts](https://fonts.google.com/)


```html
<!-- Comfortaa only, with Regular & Light -->
<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400" rel="stylesheet">
<!-- Comfortaa Regular & Light with Lora Regular & Bold -->
<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400|Lora:400,700" rel="stylesheet">
```

# Colors

Our color palette is [8bitbento theme on color.adobe.com](https://color.adobe.com/cloud/aHR0cHM6Ly9jYy1hcGktYXNzZXRzLmFkb2JlLmlv/library/ef4c40c0-c8f1-4d58-8017-b8dc3b2842af/theme/6f47a2ad-6267-417d-b55d-4ccbd3d8a46f/).  It consists of the following:

```bash
colors:
   '#D54159', # pink first
   '#021828', # dark blue
   '#66B959', # greenye
   '#2AA9B2', # light blue
   '#F1F3F4'  # gray/white
```

As SASS/SCSS variables:

```css
/* Branded variable names
 ---------------------------------------- */
$bento-pink:      #D54159;  /* #D54159 a vibrant pink attention getter */
$bento-dark:      #021828;  /* #021828 a dark blue/black */
$bento-green:     #66B959;  /* #66B959 a green accent */
$bento-blue:      #2AA9B2;  /* #2AA9B2 a blue accent */
$bento-gray:      #F1F3F4;  /* #F1F3F4 near white */
$bento-charcoal:  #333;     /* #333 charcoal for text */

$bento-sans-serif:  'Comfortaa', cursive;  /* a rounded sans-serif, we may want specific fallbacks */
$bento-serif:       'Lora', serif;         /* a serif that complements rounded sans-serifs well */


/* Assigned to context
 ---------------------------------------- */
$font-headings: $bento-sans-serif;
$font-content: $bento-serif;

$font-color: $bento-charcoal;

body {
  font-family: $bento-serif;
}

h1,h2,h3,h4,h5,h6 {
  font-family: $bento-sans-serif;  /* TODO: decide which color(s) */
}
```
