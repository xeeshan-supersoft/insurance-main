<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Accord 360</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <style>
        .select2-container--default .select2-selection--single {
            height: 50px;
        }
    </style>
    <!-- Core CSS -->
    <style>
      @charset "UTF-8";
/*!
 * Bootstrap  v5.3.2 (https://getbootstrap.com/)
 * Copyright 2011-2023 The Bootstrap Authors
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */
:root,
[data-bs-theme=light] {
  --bs-blue: #16b1ff;
  --bs-indigo: #666cff;
  --bs-purple: #9055fd;
  --bs-pink: #e83e8c;
  --bs-red: #ff4c51;
  --bs-orange: #ffb400;
  --bs-yellow: #ffd950;
  --bs-green: #56ca00;
  --bs-teal: #20c997;
  --bs-cyan: #28c3d7;
  --bs-black: #3a3541;
  --bs-white: #fff;
  --bs-gray: rgba(58, 53, 65, 0.6);
  --bs-gray-dark: rgba(58, 53, 65, 0.8);
  --bs-gray-25: rgba(58, 53, 65, 0.015);
  --bs-gray-50: rgba(58, 53, 65, 0.04);
  --bs-primary: #9055fd;
  --bs-secondary: #8a8d93;
  --bs-success: #56ca00;
  --bs-info: #16b1ff;
  --bs-warning: #ffb400;
  --bs-danger: #ff4c51;
  --bs-light: #dfdfe3;
  --bs-dark: #4b4b4b;
  --bs-gray: rgba(58, 53, 65, 0.06);
  --bs-primary-rgb: 144, 85, 253;
  --bs-secondary-rgb: 138, 141, 147;
  --bs-success-rgb: 86, 202, 0;
  --bs-info-rgb: 22, 177, 255;
  --bs-warning-rgb: 255, 180, 0;
  --bs-danger-rgb: 255, 76, 81;
  --bs-light-rgb: 223, 223, 227;
  --bs-dark-rgb: 75, 75, 75;
  --bs-gray-rgb: 58, 53, 65;
  --bs-primary-text-emphasis: #3a2265;
  --bs-secondary-text-emphasis: #37383b;
  --bs-success-text-emphasis: #225100;
  --bs-info-text-emphasis: #094766;
  --bs-warning-text-emphasis: #664800;
  --bs-danger-text-emphasis: #661e20;
  --bs-light-text-emphasis: rgba(58, 53, 65, 0.7);
  --bs-dark-text-emphasis: rgba(58, 53, 65, 0.7);
  --bs-primary-bg-subtle: #e9ddff;
  --bs-secondary-bg-subtle: #e8e8e9;
  --bs-success-bg-subtle: #ddf4cc;
  --bs-info-bg-subtle: #d0efff;
  --bs-warning-bg-subtle: #fff0cc;
  --bs-danger-bg-subtle: #ffdbdc;
  --bs-light-bg-subtle: rgba(249, 249, 249, 0.53);
  --bs-dark-bg-subtle: rgba(58, 53, 65, 0.38);
  --bs-primary-border-subtle: #d3bbfe;
  --bs-secondary-border-subtle: #d0d1d4;
  --bs-success-border-subtle: #bbea99;
  --bs-info-border-subtle: #a2e0ff;
  --bs-warning-border-subtle: #ffe199;
  --bs-danger-border-subtle: #ffb7b9;
  --bs-light-border-subtle: rgba(58, 53, 65, 0.12);
  --bs-dark-border-subtle: rgba(58, 53, 65, 0.5);
  --bs-white-rgb: 255, 255, 255;
  --bs-black-rgb: 58, 53, 65;
  --bs-font-sans-serif: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
  --bs-font-monospace: "SFMono-Regular", Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
  --bs-root-font-size: 16px;
  --bs-body-font-family: var(--bs-font-sans-serif);
  --bs-body-font-size: 0.9375rem;
  --bs-body-font-weight: 400;
  --bs-body-line-height: 1.47;
  --bs-body-color: #89868d;
  --bs-body-color-rgb: 137, 134, 141;
  --bs-body-bg: #f4f5fa;
  --bs-body-bg-rgb: 244, 245, 250;
  --bs-emphasis-color: #3a3541;
  --bs-emphasis-color-rgb: 58, 53, 65;
  --bs-secondary-color: rgba(137, 134, 141, 0.75);
  --bs-secondary-color-rgb: 137, 134, 141;
  --bs-secondary-bg: rgba(58, 53, 65, 0.12);
  --bs-secondary-bg-rgb: 58, 53, 65;
  --bs-tertiary-color: rgba(137, 134, 141, 0.5);
  --bs-tertiary-color-rgb: 137, 134, 141;
  --bs-tertiary-bg: rgba(58, 53, 65, 0.06);
  --bs-tertiary-bg-rgb: 58, 53, 65;
  --bs-heading-color: #544f5a;
  --bs-link-color: #9055fd;
  --bs-link-color-rgb: 144, 85, 253;
  --bs-link-decoration: none;
  --bs-link-hover-color: #824de4;
  --bs-link-hover-color-rgb: 130, 77, 228;
  --bs-code-color: #e83e8c;
  --bs-highlight-color: #89868d;
  --bs-highlight-bg: #fff7dc;
  --bs-border-width: 1px;
  --bs-border-style: solid;
  --bs-border-color: #e7e7e8;
  --bs-border-color-translucent: rgba(58, 53, 65, 0.175);
  --bs-border-radius: 0.3125rem;
  --bs-border-radius-sm: 0.25rem;
  --bs-border-radius-lg: 0.375rem;
  --bs-border-radius-xl: 0.5rem;
  --bs-border-radius-xxl: 2rem;
  --bs-border-radius-2xl: var(--bs-border-radius-xxl);
  --bs-border-radius-pill: 50rem;
  --bs-box-shadow: 0 0.25rem 0.5rem rgba(58, 53, 65, 0.1);
  --bs-box-shadow-sm: 0 0.125rem 0.25rem rgba(58, 53, 65, 0.08);
  --bs-box-shadow-lg: 0 0.625rem 0.875rem rgba(58, 53, 65, 0.12);
  --bs-box-shadow-inset: inset 0 1px 2px rgba(58, 53, 65, 0.075);
  --bs-focus-ring-width: 0.15rem;
  --bs-focus-ring-opacity: 0.75;
  --bs-focus-ring-color: rgba(58, 53, 65, 0.75);
  --bs-form-valid-color: #56ca00;
  --bs-form-valid-border-color: #56ca00;
  --bs-form-invalid-color: #ff4c51;
  --bs-form-invalid-border-color: #ff4c51;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

:root {
  font-size: var(--bs-root-font-size);
}
@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: smooth;
  }
}

body {
  margin: 0;
  font-family: var(--bs-body-font-family);
  font-size: var(--bs-body-font-size);
  font-weight: var(--bs-body-font-weight);
  line-height: var(--bs-body-line-height);
  color: var(--bs-body-color);
  text-align: var(--bs-body-text-align);
  background-color: var(--bs-body-bg);
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(58, 53, 65, 0);
}

hr {
  margin: 1rem 0;
  color: #e7e7e8;
  border: 0;
  border-top: var(--bs-border-width) solid;
  opacity: 1;
}

h6, .h6, h5, .h5, h4, .h4, h3, .h3, h2, .h2, h1, .h1 {
  margin-top: 0;
  margin-bottom: 1rem;
  font-weight: 500;
  line-height: 1.1;
  color: var(--bs-heading-color);
}

h1, .h1 {
  font-size: calc(1.3625rem + 1.35vw);
}
@media (min-width: 1200px) {
  h1, .h1 {
    font-size: 2.375rem;
  }
}

h2, .h2 {
  font-size: calc(1.325rem + 0.9vw);
}
@media (min-width: 1200px) {
  h2, .h2 {
    font-size: 2rem;
  }
}

h3, .h3 {
  font-size: calc(1.2875rem + 0.45vw);
}
@media (min-width: 1200px) {
  h3, .h3 {
    font-size: 1.625rem;
  }
}

h4, .h4 {
  font-size: calc(1.2625rem + 0.15vw);
}
@media (min-width: 1200px) {
  h4, .h4 {
    font-size: 1.375rem;
  }
}

h5, .h5 {
  font-size: 1.25rem;
}

h6, .h6 {
  font-size: 0.9375rem;
}

p {
  margin-top: 0;
  margin-bottom: 1rem;
}

abbr[title] {
  -webkit-text-decoration: underline dotted;
          text-decoration: underline dotted;
  cursor: help;
  -webkit-text-decoration-skip-ink: none;
          text-decoration-skip-ink: none;
}

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit;
}

ol,
ul {
  padding-left: 2rem;
}

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem;
}

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0;
}

dt {
  font-weight: 500;
}

dd {
  margin-bottom: 0.5rem;
  margin-left: 0;
}

blockquote {
  margin: 0 0 1rem;
}

b,
strong {
  font-weight: bolder;
}

small, .small {
  font-size: 85%;
}

mark, .mark {
  padding: 0.1875em;
  color: var(--bs-highlight-color);
  background-color: var(--bs-highlight-bg);
}

sub,
sup {
  position: relative;
  font-size: 0.75em;
  line-height: 0;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

a {
  color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
  text-decoration: none;
}
a:hover {
  --bs-link-color-rgb: var(--bs-link-hover-color-rgb);
}

a:not([href]):not([class]), a:not([href]):not([class]):hover {
  color: inherit;
  text-decoration: none;
}

pre,
code,
kbd,
samp {
  font-family: var(--bs-font-monospace);
  font-size: 1em;
}

pre {
  display: block;
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto;
  font-size: 85%;
}
pre code {
  font-size: inherit;
  color: inherit;
  word-break: normal;
}

code {
  font-size: 85%;
  color: var(--bs-code-color);
  word-wrap: break-word;
}
a > code {
  color: inherit;
}

kbd {
  padding: 0.1875rem 0.375rem;
  font-size: 85%;
  color: var(--bs-body-bg);
  background-color: var(--bs-body-color);
  border-radius: 0.25rem;
}
kbd kbd {
  padding: 0;
  font-size: 1em;
}

figure {
  margin: 0 0 1rem;
}

img,
svg {
  vertical-align: middle;
}

table {
  caption-side: bottom;
  border-collapse: collapse;
}

caption {
  padding-top: 0.6rem;
  padding-bottom: 0.6rem;
  color: #b4b2b7;
  text-align: left;
}

th {
  font-weight: 500;
  text-align: inherit;
  text-align: -webkit-match-parent;
}

thead,
tbody,
tfoot,
tr,
td,
th {
  border-color: inherit;
  border-style: solid;
  border-width: 0;
}

label {
  display: inline-block;
}

button {
  border-radius: 0;
}

button:focus:not(:focus-visible) {
  outline: 0;
}

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}

button,
select {
  text-transform: none;
}

[role=button] {
  cursor: pointer;
}

select {
  word-wrap: normal;
}
select:disabled {
  opacity: 1;
}

[list]:not([type=date]):not([type=datetime-local]):not([type=month]):not([type=week]):not([type=time])::-webkit-calendar-picker-indicator {
  display: none !important;
}

button,
[type=button],
[type=reset],
[type=submit] {
  -webkit-appearance: button;
}
button:not(:disabled),
[type=button]:not(:disabled),
[type=reset]:not(:disabled),
[type=submit]:not(:disabled) {
  cursor: pointer;
}

::-moz-focus-inner {
  padding: 0;
  border-style: none;
}

textarea {
  resize: vertical;
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}

legend {
  float: left;
  width: 100%;
  padding: 0;
  margin-bottom: 0.5rem;
  font-size: calc(1.275rem + 0.3vw);
  line-height: inherit;
}
@media (min-width: 1200px) {
  legend {
    font-size: 1.5rem;
  }
}
legend + * {
  clear: left;
}

::-webkit-datetime-edit-fields-wrapper,
::-webkit-datetime-edit-text,
::-webkit-datetime-edit-minute,
::-webkit-datetime-edit-hour-field,
::-webkit-datetime-edit-day-field,
::-webkit-datetime-edit-month-field,
::-webkit-datetime-edit-year-field {
  padding: 0;
}

::-webkit-inner-spin-button {
  height: auto;
}

[type=search] {
  -webkit-appearance: textfield;
  outline-offset: -2px;
}

/* rtl:raw:
[type="tel"],
[type="url"],
[type="email"],
[type="number"] {
  direction: ltr;
}
*/
::-webkit-search-decoration {
  -webkit-appearance: none;
}

::-webkit-color-swatch-wrapper {
  padding: 0;
}

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}

::file-selector-button {
  font: inherit;
  -webkit-appearance: button;
}

output {
  display: inline-block;
}

iframe {
  border: 0;
}

summary {
  display: list-item;
  cursor: pointer;
}

progress {
  vertical-align: baseline;
}

[hidden] {
  display: none !important;
}

.lead {
  font-size: 1.125rem;
  font-weight: 300;
}

.display-1 {
  font-size: calc(1.525rem + 3.3vw);
  font-weight: 500;
  line-height: 1.1;
}
@media (min-width: 1200px) {
  .display-1 {
    font-size: 4rem;
  }
}

.display-2 {
  font-size: calc(1.475rem + 2.7vw);
  font-weight: 500;
  line-height: 1.1;
}
@media (min-width: 1200px) {
  .display-2 {
    font-size: 3.5rem;
  }
}

.display-3 {
  font-size: calc(1.425rem + 2.1vw);
  font-weight: 500;
  line-height: 1.1;
}
@media (min-width: 1200px) {
  .display-3 {
    font-size: 3rem;
  }
}

.display-4 {
  font-size: calc(1.375rem + 1.5vw);
  font-weight: 500;
  line-height: 1.1;
}
@media (min-width: 1200px) {
  .display-4 {
    font-size: 2.5rem;
  }
}

.display-5 {
  font-size: calc(1.325rem + 0.9vw);
  font-weight: 500;
  line-height: 1.1;
}
@media (min-width: 1200px) {
  .display-5 {
    font-size: 2rem;
  }
}

.display-6 {
  font-size: calc(1.275rem + 0.3vw);
  font-weight: 500;
  line-height: 1.1;
}
@media (min-width: 1200px) {
  .display-6 {
    font-size: 1.5rem;
  }
}

.list-unstyled {
  padding-left: 0;
  list-style: none;
}

.list-inline {
  padding-left: 0;
  list-style: none;
}

.list-inline-item {
  display: inline-block;
}
.list-inline-item:not(:last-child) {
  margin-right: 0.5rem;
}

.initialism {
  font-size: 85%;
  text-transform: uppercase;
}

.blockquote {
  margin-bottom: 1rem;
  font-size: 0.9375rem;
}
.blockquote > :last-child {
  margin-bottom: 0;
}

.blockquote-footer {
  margin-top: -1rem;
  margin-bottom: 1rem;
  font-size: 85%;
  color: rgba(58, 53, 65, 0.6);
}
.blockquote-footer::before {
  content: "— ";
}

.img-fluid {
  max-width: 100%;
  height: auto;
}

.img-thumbnail {
  padding: 0;
  background-color: transparent;
  border: 0px solid var(--bs-border-color);
  border-radius: 0px;
  max-width: 100%;
  height: auto;
}

.figure {
  display: inline-block;
}

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1;
}

.figure-caption {
  font-size: 85%;
  color: #b4b2b7;
}

.container,
.container-fluid,
.container-xxl,
.container-xl,
.container-lg,
.container-md,
.container-sm {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-right: auto;
  margin-left: auto;
}

@media (min-width: 576px) {
  .container-sm, .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container-md, .container-sm, .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container-lg, .container-md, .container-sm, .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1140px;
  }
}
@media (min-width: 1400px) {
  .container-xxl, .container-xl, .container-lg, .container-md, .container-sm, .container {
    max-width: 1440px;
  }
}
:root {
  --bs-breakpoint-xs: 0;
  --bs-breakpoint-sm: 576px;
  --bs-breakpoint-md: 768px;
  --bs-breakpoint-lg: 992px;
  --bs-breakpoint-xl: 1200px;
  --bs-breakpoint-xxl: 1400px;
}

.row {
  --bs-gutter-x: 1.5rem;
  --bs-gutter-y: 0;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-top: calc(-1 * var(--bs-gutter-y));
  margin-right: calc(-0.5 * var(--bs-gutter-x));
  margin-left: calc(-0.5 * var(--bs-gutter-x));
}
.row > * {
  -ms-flex-negative: 0;
      flex-shrink: 0;
  width: 100%;
  max-width: 100%;
  padding-right: calc(var(--bs-gutter-x) * 0.5);
  padding-left: calc(var(--bs-gutter-x) * 0.5);
  margin-top: var(--bs-gutter-y);
}

.col {
  -ms-flex: 1 0 0%;
      flex: 1 0 0%;
}

.row-cols-auto > * {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: auto;
}

.row-cols-1 > * {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 100%;
}

.row-cols-2 > * {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 50%;
}

.row-cols-3 > * {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 33.33333333%;
}

.row-cols-4 > * {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 25%;
}

.row-cols-5 > * {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 20%;
}

.row-cols-6 > * {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 16.66666667%;
}

.col-auto {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: auto;
}

.col-1 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 8.33333333%;
}

.col-2 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 16.66666667%;
}

.col-3 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 25%;
}

.col-4 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 33.33333333%;
}

.col-5 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 41.66666667%;
}

.col-6 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 50%;
}

.col-7 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 58.33333333%;
}

.col-8 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 66.66666667%;
}

.col-9 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 75%;
}

.col-10 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 83.33333333%;
}

.col-11 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 91.66666667%;
}

.col-12 {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  width: 100%;
}

.offset-1 {
  margin-left: 8.33333333%;
}

.offset-2 {
  margin-left: 16.66666667%;
}

.offset-3 {
  margin-left: 25%;
}

.offset-4 {
  margin-left: 33.33333333%;
}

.offset-5 {
  margin-left: 41.66666667%;
}

.offset-6 {
  margin-left: 50%;
}

.offset-7 {
  margin-left: 58.33333333%;
}

.offset-8 {
  margin-left: 66.66666667%;
}

.offset-9 {
  margin-left: 75%;
}

.offset-10 {
  margin-left: 83.33333333%;
}

.offset-11 {
  margin-left: 91.66666667%;
}

.g-0,
.gx-0 {
  --bs-gutter-x: 0;
}

.g-0,
.gy-0 {
  --bs-gutter-y: 0;
}

.g-1,
.gx-1 {
  --bs-gutter-x: 0.25rem;
}

.g-1,
.gy-1 {
  --bs-gutter-y: 0.25rem;
}

.g-2,
.gx-2 {
  --bs-gutter-x: 0.5rem;
}

.g-2,
.gy-2 {
  --bs-gutter-y: 0.5rem;
}

.g-3,
.gx-3 {
  --bs-gutter-x: 1rem;
}

.g-3,
.gy-3 {
  --bs-gutter-y: 1rem;
}

.g-4,
.gx-4 {
  --bs-gutter-x: 1.5rem;
}

.g-4,
.gy-4 {
  --bs-gutter-y: 1.5rem;
}

.g-5,
.gx-5 {
  --bs-gutter-x: 3rem;
}

.g-5,
.gy-5 {
  --bs-gutter-y: 3rem;
}

@media (min-width: 576px) {
  .col-sm {
    -ms-flex: 1 0 0%;
        flex: 1 0 0%;
  }
  .row-cols-sm-auto > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: auto;
  }
  .row-cols-sm-1 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-sm-2 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-sm-3 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 33.33333333%;
  }
  .row-cols-sm-4 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-sm-5 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-sm-6 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-sm-auto {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: auto;
  }
  .col-sm-1 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-sm-2 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-sm-3 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 25%;
  }
  .col-sm-4 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-sm-5 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-sm-6 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 50%;
  }
  .col-sm-7 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-sm-8 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-sm-9 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 75%;
  }
  .col-sm-10 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-sm-11 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-sm-12 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 100%;
  }
  .offset-sm-0 {
    margin-left: 0;
  }
  .offset-sm-1 {
    margin-left: 8.33333333%;
  }
  .offset-sm-2 {
    margin-left: 16.66666667%;
  }
  .offset-sm-3 {
    margin-left: 25%;
  }
  .offset-sm-4 {
    margin-left: 33.33333333%;
  }
  .offset-sm-5 {
    margin-left: 41.66666667%;
  }
  .offset-sm-6 {
    margin-left: 50%;
  }
  .offset-sm-7 {
    margin-left: 58.33333333%;
  }
  .offset-sm-8 {
    margin-left: 66.66666667%;
  }
  .offset-sm-9 {
    margin-left: 75%;
  }
  .offset-sm-10 {
    margin-left: 83.33333333%;
  }
  .offset-sm-11 {
    margin-left: 91.66666667%;
  }
  .g-sm-0,
  .gx-sm-0 {
    --bs-gutter-x: 0;
  }
  .g-sm-0,
  .gy-sm-0 {
    --bs-gutter-y: 0;
  }
  .g-sm-1,
  .gx-sm-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-sm-1,
  .gy-sm-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-sm-2,
  .gx-sm-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-sm-2,
  .gy-sm-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-sm-3,
  .gx-sm-3 {
    --bs-gutter-x: 1rem;
  }
  .g-sm-3,
  .gy-sm-3 {
    --bs-gutter-y: 1rem;
  }
  .g-sm-4,
  .gx-sm-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-sm-4,
  .gy-sm-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-sm-5,
  .gx-sm-5 {
    --bs-gutter-x: 3rem;
  }
  .g-sm-5,
  .gy-sm-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 768px) {
  .col-md {
    -ms-flex: 1 0 0%;
        flex: 1 0 0%;
  }
  .row-cols-md-auto > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: auto;
  }
  .row-cols-md-1 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-md-2 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-md-3 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 33.33333333%;
  }
  .row-cols-md-4 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-md-5 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-md-6 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-md-auto {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: auto;
  }
  .col-md-1 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-md-2 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-md-3 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 25%;
  }
  .col-md-4 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-md-5 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-md-6 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 50%;
  }
  .col-md-7 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-md-8 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-md-9 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 75%;
  }
  .col-md-10 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-md-11 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-md-12 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 100%;
  }
  .offset-md-0 {
    margin-left: 0;
  }
  .offset-md-1 {
    margin-left: 8.33333333%;
  }
  .offset-md-2 {
    margin-left: 16.66666667%;
  }
  .offset-md-3 {
    margin-left: 25%;
  }
  .offset-md-4 {
    margin-left: 33.33333333%;
  }
  .offset-md-5 {
    margin-left: 41.66666667%;
  }
  .offset-md-6 {
    margin-left: 50%;
  }
  .offset-md-7 {
    margin-left: 58.33333333%;
  }
  .offset-md-8 {
    margin-left: 66.66666667%;
  }
  .offset-md-9 {
    margin-left: 75%;
  }
  .offset-md-10 {
    margin-left: 83.33333333%;
  }
  .offset-md-11 {
    margin-left: 91.66666667%;
  }
  .g-md-0,
  .gx-md-0 {
    --bs-gutter-x: 0;
  }
  .g-md-0,
  .gy-md-0 {
    --bs-gutter-y: 0;
  }
  .g-md-1,
  .gx-md-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-md-1,
  .gy-md-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-md-2,
  .gx-md-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-md-2,
  .gy-md-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-md-3,
  .gx-md-3 {
    --bs-gutter-x: 1rem;
  }
  .g-md-3,
  .gy-md-3 {
    --bs-gutter-y: 1rem;
  }
  .g-md-4,
  .gx-md-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-md-4,
  .gy-md-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-md-5,
  .gx-md-5 {
    --bs-gutter-x: 3rem;
  }
  .g-md-5,
  .gy-md-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 992px) {
  .col-lg {
    -ms-flex: 1 0 0%;
        flex: 1 0 0%;
  }
  .row-cols-lg-auto > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: auto;
  }
  .row-cols-lg-1 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-lg-2 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-lg-3 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 33.33333333%;
  }
  .row-cols-lg-4 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-lg-5 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-lg-6 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-lg-auto {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: auto;
  }
  .col-lg-1 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-lg-2 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-lg-3 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 25%;
  }
  .col-lg-4 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-lg-5 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-lg-6 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 50%;
  }
  .col-lg-7 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-lg-8 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-lg-9 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 75%;
  }
  .col-lg-10 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-lg-11 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-lg-12 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 100%;
  }
  .offset-lg-0 {
    margin-left: 0;
  }
  .offset-lg-1 {
    margin-left: 8.33333333%;
  }
  .offset-lg-2 {
    margin-left: 16.66666667%;
  }
  .offset-lg-3 {
    margin-left: 25%;
  }
  .offset-lg-4 {
    margin-left: 33.33333333%;
  }
  .offset-lg-5 {
    margin-left: 41.66666667%;
  }
  .offset-lg-6 {
    margin-left: 50%;
  }
  .offset-lg-7 {
    margin-left: 58.33333333%;
  }
  .offset-lg-8 {
    margin-left: 66.66666667%;
  }
  .offset-lg-9 {
    margin-left: 75%;
  }
  .offset-lg-10 {
    margin-left: 83.33333333%;
  }
  .offset-lg-11 {
    margin-left: 91.66666667%;
  }
  .g-lg-0,
  .gx-lg-0 {
    --bs-gutter-x: 0;
  }
  .g-lg-0,
  .gy-lg-0 {
    --bs-gutter-y: 0;
  }
  .g-lg-1,
  .gx-lg-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-lg-1,
  .gy-lg-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-lg-2,
  .gx-lg-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-lg-2,
  .gy-lg-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-lg-3,
  .gx-lg-3 {
    --bs-gutter-x: 1rem;
  }
  .g-lg-3,
  .gy-lg-3 {
    --bs-gutter-y: 1rem;
  }
  .g-lg-4,
  .gx-lg-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-lg-4,
  .gy-lg-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-lg-5,
  .gx-lg-5 {
    --bs-gutter-x: 3rem;
  }
  .g-lg-5,
  .gy-lg-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 1200px) {
  .col-xl {
    -ms-flex: 1 0 0%;
        flex: 1 0 0%;
  }
  .row-cols-xl-auto > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xl-1 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xl-2 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xl-3 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 33.33333333%;
  }
  .row-cols-xl-4 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xl-5 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xl-6 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xl-auto {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: auto;
  }
  .col-xl-1 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xl-2 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xl-3 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 25%;
  }
  .col-xl-4 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xl-5 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xl-6 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 50%;
  }
  .col-xl-7 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xl-8 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xl-9 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 75%;
  }
  .col-xl-10 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xl-11 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xl-12 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 100%;
  }
  .offset-xl-0 {
    margin-left: 0;
  }
  .offset-xl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xl-3 {
    margin-left: 25%;
  }
  .offset-xl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xl-6 {
    margin-left: 50%;
  }
  .offset-xl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xl-9 {
    margin-left: 75%;
  }
  .offset-xl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xl-11 {
    margin-left: 91.66666667%;
  }
  .g-xl-0,
  .gx-xl-0 {
    --bs-gutter-x: 0;
  }
  .g-xl-0,
  .gy-xl-0 {
    --bs-gutter-y: 0;
  }
  .g-xl-1,
  .gx-xl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xl-1,
  .gy-xl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xl-2,
  .gx-xl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xl-2,
  .gy-xl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xl-3,
  .gx-xl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xl-3,
  .gy-xl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xl-4,
  .gx-xl-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xl-4,
  .gy-xl-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xl-5,
  .gx-xl-5 {
    --bs-gutter-x: 3rem;
  }
  .g-xl-5,
  .gy-xl-5 {
    --bs-gutter-y: 3rem;
  }
}
@media (min-width: 1400px) {
  .col-xxl {
    -ms-flex: 1 0 0%;
        flex: 1 0 0%;
  }
  .row-cols-xxl-auto > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: auto;
  }
  .row-cols-xxl-1 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 100%;
  }
  .row-cols-xxl-2 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 50%;
  }
  .row-cols-xxl-3 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 33.33333333%;
  }
  .row-cols-xxl-4 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 25%;
  }
  .row-cols-xxl-5 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 20%;
  }
  .row-cols-xxl-6 > * {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xxl-auto {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: auto;
  }
  .col-xxl-1 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 8.33333333%;
  }
  .col-xxl-2 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 16.66666667%;
  }
  .col-xxl-3 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 25%;
  }
  .col-xxl-4 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 33.33333333%;
  }
  .col-xxl-5 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 41.66666667%;
  }
  .col-xxl-6 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 50%;
  }
  .col-xxl-7 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 58.33333333%;
  }
  .col-xxl-8 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 66.66666667%;
  }
  .col-xxl-9 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 75%;
  }
  .col-xxl-10 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 83.33333333%;
  }
  .col-xxl-11 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 91.66666667%;
  }
  .col-xxl-12 {
    -ms-flex: 0 0 auto;
        flex: 0 0 auto;
    width: 100%;
  }
  .offset-xxl-0 {
    margin-left: 0;
  }
  .offset-xxl-1 {
    margin-left: 8.33333333%;
  }
  .offset-xxl-2 {
    margin-left: 16.66666667%;
  }
  .offset-xxl-3 {
    margin-left: 25%;
  }
  .offset-xxl-4 {
    margin-left: 33.33333333%;
  }
  .offset-xxl-5 {
    margin-left: 41.66666667%;
  }
  .offset-xxl-6 {
    margin-left: 50%;
  }
  .offset-xxl-7 {
    margin-left: 58.33333333%;
  }
  .offset-xxl-8 {
    margin-left: 66.66666667%;
  }
  .offset-xxl-9 {
    margin-left: 75%;
  }
  .offset-xxl-10 {
    margin-left: 83.33333333%;
  }
  .offset-xxl-11 {
    margin-left: 91.66666667%;
  }
  .g-xxl-0,
  .gx-xxl-0 {
    --bs-gutter-x: 0;
  }
  .g-xxl-0,
  .gy-xxl-0 {
    --bs-gutter-y: 0;
  }
  .g-xxl-1,
  .gx-xxl-1 {
    --bs-gutter-x: 0.25rem;
  }
  .g-xxl-1,
  .gy-xxl-1 {
    --bs-gutter-y: 0.25rem;
  }
  .g-xxl-2,
  .gx-xxl-2 {
    --bs-gutter-x: 0.5rem;
  }
  .g-xxl-2,
  .gy-xxl-2 {
    --bs-gutter-y: 0.5rem;
  }
  .g-xxl-3,
  .gx-xxl-3 {
    --bs-gutter-x: 1rem;
  }
  .g-xxl-3,
  .gy-xxl-3 {
    --bs-gutter-y: 1rem;
  }
  .g-xxl-4,
  .gx-xxl-4 {
    --bs-gutter-x: 1.5rem;
  }
  .g-xxl-4,
  .gy-xxl-4 {
    --bs-gutter-y: 1.5rem;
  }
  .g-xxl-5,
  .gx-xxl-5 {
    --bs-gutter-x: 3rem;
  }
  .g-xxl-5,
  .gy-xxl-5 {
    --bs-gutter-y: 3rem;
  }
}
.table {
  --bs-table-color-type: initial;
  --bs-table-bg-type: initial;
  --bs-table-color-state: initial;
  --bs-table-bg-state: initial;
  --bs-table-color: var(--bs-body-color);
  --bs-table-bg: transparent;
  --bs-table-border-color: #e7e7e8;
  --bs-table-accent-bg: transparent;
  --bs-table-striped-color: var(--bs-body-color);
  --bs-table-striped-bg: rgba(var(--bs-emphasis-color-rgb), 0.05);
  --bs-table-active-color: #89868d;
  --bs-table-active-bg: rgba(144, 85, 253, 0.08);
  --bs-table-hover-color: var(--bs-body-color);
  --bs-table-hover-bg: rgba(58, 53, 65, 0.04);
  width: 100%;
  margin-bottom: 1rem;
  vertical-align: middle;
  border-color: var(--bs-table-border-color);
}
.table > :not(caption) > * > * {
  padding: 0.6rem 1.25rem;
  color: var(--bs-table-color-state, var(--bs-table-color-type, var(--bs-table-color)));
  background-color: var(--bs-table-bg);
  border-bottom-width: var(--bs-border-width);
  box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state, var(--bs-table-bg-type, var(--bs-table-accent-bg)));
}
.table > tbody {
  vertical-align: inherit;
}
.table > thead {
  vertical-align: bottom;
}

.table-group-divider {
  border-top: calc(var(--bs-border-width) * 2) solid #e7e7e8;
}

.caption-top {
  caption-side: top;
}

.table-sm > :not(caption) > * > * {
  padding: 0.2rem 0.625rem;
}

.table-bordered > :not(caption) > * {
  border-width: var(--bs-border-width) 0;
}
.table-bordered > :not(caption) > * > * {
  border-width: 0 var(--bs-border-width);
}

.table-borderless > :not(caption) > * > * {
  border-bottom-width: 0;
}
.table-borderless > :not(:first-child) {
  border-top-width: 0;
}

.table-striped > tbody > tr:nth-of-type(odd) > * {
  --bs-table-color-type: var(--bs-table-striped-color);
  --bs-table-bg-type: var(--bs-table-striped-bg);
}

.table-striped-columns > :not(caption) > tr > :nth-child(even) {
  --bs-table-color-type: var(--bs-table-striped-color);
  --bs-table-bg-type: var(--bs-table-striped-bg);
}

.table-active {
  --bs-table-color-state: var(--bs-table-active-color);
  --bs-table-bg-state: var(--bs-table-active-bg);
}

.table-hover > tbody > tr:hover > * {
  --bs-table-color-state: var(--bs-table-hover-color);
  --bs-table-bg-state: var(--bs-table-hover-bg);
}

.table-primary {
  --bs-table-color: #3a3541;
  --bs-table-bg: #e9ddff;
  --bs-table-border-color: #d4c9e8;
  --bs-table-striped-bg: #e0d5f6;
  --bs-table-striped-color: #3a3541;
  --bs-table-active-bg: #dbd0f0;
  --bs-table-active-color: #3a3541;
  --bs-table-hover-bg: #e2d6f7;
  --bs-table-hover-color: #3a3541;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-secondary {
  --bs-table-color: #3a3541;
  --bs-table-bg: #e8e8e9;
  --bs-table-border-color: #d3d3d5;
  --bs-table-striped-bg: #dfdfe1;
  --bs-table-striped-color: #3a3541;
  --bs-table-active-bg: #dadadc;
  --bs-table-active-color: #3a3541;
  --bs-table-hover-bg: #e1e1e2;
  --bs-table-hover-color: #3a3541;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-success {
  --bs-table-color: #3a3541;
  --bs-table-bg: #ddf4cc;
  --bs-table-border-color: #c9ddbb;
  --bs-table-striped-bg: #d5eac5;
  --bs-table-striped-color: #3a3541;
  --bs-table-active-bg: #d0e5c1;
  --bs-table-active-color: #3a3541;
  --bs-table-hover-bg: #d6ecc6;
  --bs-table-hover-color: #3a3541;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-info {
  --bs-table-color: #3a3541;
  --bs-table-bg: #d0efff;
  --bs-table-border-color: #bed9e8;
  --bs-table-striped-bg: #c9e6f6;
  --bs-table-striped-color: #3a3541;
  --bs-table-active-bg: #c4e0f0;
  --bs-table-active-color: #3a3541;
  --bs-table-hover-bg: #cae8f7;
  --bs-table-hover-color: #3a3541;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-warning {
  --bs-table-color: #3a3541;
  --bs-table-bg: #fff0cc;
  --bs-table-border-color: #e7dabb;
  --bs-table-striped-bg: #f5e7c5;
  --bs-table-striped-color: #3a3541;
  --bs-table-active-bg: #efe1c1;
  --bs-table-active-color: #3a3541;
  --bs-table-hover-bg: #f7e9c6;
  --bs-table-hover-color: #3a3541;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-danger {
  --bs-table-color: #3a3541;
  --bs-table-bg: #ffdbdc;
  --bs-table-border-color: #e7c7c9;
  --bs-table-striped-bg: #f5d3d4;
  --bs-table-striped-color: #3a3541;
  --bs-table-active-bg: #efced0;
  --bs-table-active-color: #3a3541;
  --bs-table-hover-bg: #f7d4d6;
  --bs-table-hover-color: #3a3541;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-light {
  --bs-table-color: #3a3541;
  --bs-table-bg: #f3f3f4;
  --bs-table-border-color: #dddcdf;
  --bs-table-striped-bg: #eaeaeb;
  --bs-table-striped-color: #3a3541;
  --bs-table-active-bg: #e4e4e6;
  --bs-table-active-color: #3a3541;
  --bs-table-hover-bg: #ecebed;
  --bs-table-hover-color: #3a3541;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-dark {
  --bs-table-color: #fff;
  --bs-table-bg: #4b4b4b;
  --bs-table-border-color: #616161;
  --bs-table-striped-bg: #545454;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: #595959;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #525252;
  --bs-table-hover-color: #fff;
  color: var(--bs-table-color);
  border-color: var(--bs-table-border-color);
}

.table-responsive {
  overflow-x: auto;
  -webkit-overflow-scrolling: touch;
}

@media (max-width: 575.98px) {
  .table-responsive-sm {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 767.98px) {
  .table-responsive-md {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 991.98px) {
  .table-responsive-lg {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1199.98px) {
  .table-responsive-xl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
@media (max-width: 1399.98px) {
  .table-responsive-xxl {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
}
.form-label {
  margin-bottom: 0.5rem;
  font-size: 0.83125rem;
  font-weight: 500;
}

.col-form-label {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  font-weight: 500;
  line-height: 1.47;
}

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.0625rem;
}

.col-form-label-sm {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  font-size: 0.8125rem;
}

.form-text {
  margin-top: 0.3rem;
  font-size: 85%;
  color: #b4b2b7;
}

.form-control {
  display: block;
  width: 100%;
  padding: 0.5rem 0.875rem;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.47;
  color: #544f5a;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #d4d3d5;
  border-radius: 0.375rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}
.form-control[type=file] {
  overflow: hidden;
}
.form-control[type=file]:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control:focus {
  color: #544f5a;
  background-color: #fff;
  border-color: #c8aafe;
  outline: 0;
  box-shadow: none;
}
.form-control::-webkit-date-and-time-value {
  min-width: 85px;
  height: 1.47em;
  margin: 0;
}
.form-control::-webkit-datetime-edit {
  display: block;
  padding: 0;
}
.form-control::-webkit-input-placeholder {
  color: #b4b2b7;
  opacity: 1;
}
.form-control::-moz-placeholder {
  color: #b4b2b7;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #b4b2b7;
  opacity: 1;
}
.form-control::-ms-input-placeholder {
  color: #b4b2b7;
  opacity: 1;
}
.form-control::placeholder {
  color: #b4b2b7;
  opacity: 1;
}
.form-control:disabled {
  background-color: #efeff0;
  opacity: 1;
}
.form-control::-webkit-file-upload-button {
  padding: 0.5rem 0.875rem;
  margin: -0.5rem -0.875rem;
  -webkit-margin-end: 0.875rem;
          margin-inline-end: 0.875rem;
  color: #544f5a;
  background-color: #fff;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.form-control::file-selector-button {
  padding: 0.5rem 0.875rem;
  margin: -0.5rem -0.875rem;
  -webkit-margin-end: 0.875rem;
     -moz-margin-end: 0.875rem;
          margin-inline-end: 0.875rem;
  color: #544f5a;
  background-color: #fff;
  pointer-events: none;
  border-color: inherit;
  border-style: solid;
  border-width: 0;
  border-inline-end-width: 1px;
  border-radius: 0;
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-control::-webkit-file-upload-button {
    -webkit-transition: none;
    transition: none;
  }
  .form-control::file-selector-button {
    transition: none;
  }
}
.form-control:hover:not(:disabled):not([readonly])::-webkit-file-upload-button {
  background-color: #f2f2f2;
}
.form-control:hover:not(:disabled):not([readonly])::file-selector-button {
  background-color: #f2f2f2;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.5rem 0;
  margin-bottom: 0;
  line-height: 1.47;
  color: var(--bs-body-color);
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}
.form-control-plaintext:focus {
  outline: 0;
}
.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  min-height: 2.22rem;
  padding: 0.375rem 0.625rem;
  font-size: 0.8125rem;
  border-radius: 0.3125rem;
}
.form-control-sm::-webkit-file-upload-button {
  padding: 0.375rem 0.625rem;
  margin: -0.375rem -0.625rem;
  -webkit-margin-end: 0.625rem;
          margin-inline-end: 0.625rem;
}
.form-control-sm::file-selector-button {
  padding: 0.375rem 0.625rem;
  margin: -0.375rem -0.625rem;
  -webkit-margin-end: 0.625rem;
     -moz-margin-end: 0.625rem;
          margin-inline-end: 0.625rem;
}

.form-control-lg {
  min-height: 2.47rem;
  padding: 0.5rem 1.25rem;
  font-size: 1.0625rem;
  border-radius: var(--bs-border-radius-lg);
}
.form-control-lg::-webkit-file-upload-button {
  padding: 0.5rem 1.25rem;
  margin: -0.5rem -1.25rem;
  -webkit-margin-end: 1.25rem;
          margin-inline-end: 1.25rem;
}
.form-control-lg::file-selector-button {
  padding: 0.5rem 1.25rem;
  margin: -0.5rem -1.25rem;
  -webkit-margin-end: 1.25rem;
     -moz-margin-end: 1.25rem;
          margin-inline-end: 1.25rem;
}

textarea.form-control {
  min-height: 2.47rem;
}
textarea.form-control-sm {
  min-height: 2.22rem;
}
textarea.form-control-lg {
  min-height: 2.47rem;
}

.form-control-color {
  width: 3rem;
  height: 2.47rem;
  padding: 0.5rem;
}
.form-control-color:not(:disabled):not([readonly]) {
  cursor: pointer;
}
.form-control-color::-moz-color-swatch {
  border: 0 !important;
  border-radius: 0.375rem;
}
.form-control-color::-webkit-color-swatch {
  border: 0 !important;
  border-radius: 0.375rem;
}
.form-control-color.form-control-sm {
  height: 2.22rem;
}
.form-control-color.form-control-lg {
  height: 2.47rem;
}

.form-select {
  --bs-form-select-bg-img: url("data:image/svg+xml,%3Csvg width='10' height='5' viewBox='0 0 10 5' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 0L5 5L10 0H0Z' fill='%233A3541' fill-opacity='0.54'/%3E%3C/svg%3E%0A");
  display: block;
  width: 100%;
  padding: 0.4375rem 1.875rem 0.4375rem 0.875rem;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.47;
  color: #544f5a;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: #fff;
  background-image: var(--bs-form-select-bg-img), var(--bs-form-select-bg-icon, none);
  background-repeat: no-repeat;
  background-position: right 0.875rem center;
  background-size: 9px 5px;
  border: 1px solid #d4d3d5;
  border-radius: 0.375rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-select {
    transition: none;
  }
}
.form-select:focus {
  border-color: #c8aafe;
  outline: 0;
  box-shadow: none;
}
.form-select[multiple], .form-select[size]:not([size="1"]) {
  padding-right: 0.875rem;
  background-image: none;
}
.form-select:disabled {
  color: #89868d;
  background-color: #efeff0;
}
.form-select:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #544f5a;
}

.form-select-sm {
  padding-top: 0.375rem;
  padding-bottom: 0.375rem;
  padding-left: 0.625rem;
  font-size: 0.8125rem;
  border-radius: 0.3125rem;
}

.form-select-lg {
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1.25rem;
  font-size: 1.0625rem;
  border-radius: var(--bs-border-radius-lg);
}

.form-check {
  display: block;
  min-height: 1.378125rem;
  padding-left: 1.95em;
  margin-bottom: 0.5rem;
}
.form-check .form-check-input {
  float: left;
  margin-left: -1.95em;
}

.form-check-reverse {
  padding-right: 1.95em;
  padding-left: 0;
  text-align: right;
}
.form-check-reverse .form-check-input {
  float: right;
  margin-right: -1.95em;
  margin-left: 0;
}

.form-check-input {
  --bs-form-check-bg: #fff;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  width: 1.2em;
  height: 1.2em;
  margin-top: 0.135em;
  vertical-align: top;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: var(--bs-form-check-bg);
  background-image: var(--bs-form-check-bg-image);
  background-repeat: no-repeat;
  background-position: center;
  background-size: contain;
  border: 2px solid #9d9aa0;
  -webkit-print-color-adjust: exact;
     color-adjust: exact;
          print-color-adjust: exact;
}
.form-check-input[type=checkbox] {
  border-radius: 0.125em;
}
.form-check-input[type=radio] {
  border-radius: 50%;
}
.form-check-input:active {
  -webkit-filter: brightness(90%);
          filter: brightness(90%);
}
.form-check-input:focus {
  border-color: #c8aafe;
  outline: 0;
  box-shadow: 0 0 0.25rem 0.05rem rgba(144, 85, 253, 0.1);
}
.form-check-input:checked {
  background-color: #9055fd;
  border-color: #9055fd;
}
.form-check-input:checked[type=checkbox] {
  --bs-form-check-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 19 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 10l3 3l6-6'/%3e%3c/svg%3e");
}
.form-check-input:checked[type=radio] {
  --bs-form-check-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='transparent' stroke='%23fff'/%3e%3c/svg%3e");
}
.form-check-input[type=checkbox]:indeterminate {
  background-color: #9055fd;
  border-color: #9055fd;
  --bs-form-check-bg-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M6 10h8'/%3e%3c/svg%3e");
}
.form-check-input:disabled {
  pointer-events: none;
  -webkit-filter: none;
          filter: none;
  opacity: 0.5;
}
.form-check-input[disabled] ~ .form-check-label, .form-check-input:disabled ~ .form-check-label {
  cursor: default;
  opacity: 0.5;
}

.form-check-label {
  color: #544f5a;
  cursor: pointer;
}

.form-switch {
  padding-left: 2.5em;
}
.form-switch .form-check-input {
  --bs-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%239d9aa0'/%3e%3c/svg%3e");
  width: 2em;
  margin-left: -2.5em;
  background-image: var(--bs-form-switch-bg);
  background-position: left center;
  border-radius: 2em;
  transition: background-position 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-switch .form-check-input {
    transition: none;
  }
}
.form-switch .form-check-input:focus {
  --bs-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23c8aafe'/%3e%3c/svg%3e");
}
.form-switch .form-check-input:checked {
  background-position: right center;
  --bs-form-switch-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}
.form-switch.form-check-reverse {
  padding-right: 2.5em;
  padding-left: 0;
}
.form-switch.form-check-reverse .form-check-input {
  margin-right: -2.5em;
  margin-left: 0;
}

.form-check-inline {
  display: inline-block;
  margin-right: 1rem;
}

.btn-check {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.btn-check[disabled] + .btn, .btn-check:disabled + .btn {
  pointer-events: none;
  -webkit-filter: none;
          filter: none;
  opacity: 0.65;
}

.form-range {
  width: 100%;
  height: 1.35rem;
  padding: 0;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: transparent;
}
.form-range:focus {
  outline: 0;
}
.form-range:focus::-webkit-slider-thumb {
  box-shadow: 0 0 0 1px #f4f5fa, none;
}
.form-range:focus::-moz-range-thumb {
  box-shadow: 0 0 0 1px #f4f5fa, none;
}
.form-range::-moz-focus-outer {
  border: 0;
}
.form-range::-webkit-slider-thumb {
  width: 1.25rem;
  height: 1.25rem;
  margin-top: -0.5rem;
  -webkit-appearance: none;
          appearance: none;
  background-color: #9055fd;
  border: 0;
  border-radius: 1rem;
  -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-webkit-slider-thumb {
    -webkit-transition: none;
    transition: none;
  }
}
.form-range::-webkit-slider-thumb:active {
  background-color: #deccfe;
}
.form-range::-webkit-slider-runnable-track {
  width: 100%;
  height: 0.25rem;
  color: transparent;
  cursor: pointer;
  background-color: var(--bs-secondary-bg);
  border-color: transparent;
  border-radius: 1rem;
}
.form-range::-moz-range-thumb {
  width: 1.25rem;
  height: 1.25rem;
  -moz-appearance: none;
       appearance: none;
  background-color: #9055fd;
  border: 0;
  border-radius: 1rem;
  -moz-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-range::-moz-range-thumb {
    -moz-transition: none;
    transition: none;
  }
}
.form-range::-moz-range-thumb:active {
  background-color: #deccfe;
}
.form-range::-moz-range-track {
  width: 100%;
  height: 0.25rem;
  color: transparent;
  cursor: pointer;
  background-color: var(--bs-secondary-bg);
  border-color: transparent;
  border-radius: 1rem;
}
.form-range:disabled {
  pointer-events: none;
}
.form-range:disabled::-webkit-slider-thumb {
  background-color: #b4b2b7;
}
.form-range:disabled::-moz-range-thumb {
  background-color: #b4b2b7;
}

.form-floating {
  position: relative;
}
.form-floating > .form-control,
.form-floating > .form-control-plaintext,
.form-floating > .form-select {
  height: calc(2.940725rem + 2px);
  min-height: calc(2.940725rem + 2px);
  line-height: 1.47;
}
.form-floating > label {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 2;
  height: 100%;
  padding: 0.7813rem 0.7813rem;
  overflow: hidden;
  text-align: start;
  text-overflow: ellipsis;
  white-space: nowrap;
  pointer-events: none;
  border: 1px solid transparent;
  -webkit-transform-origin: 0 0;
          transform-origin: 0 0;
  transition: opacity 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
  transition: opacity 0.2s ease-in-out, transform 0.2s ease-in-out;
  transition: opacity 0.2s ease-in-out, transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .form-floating > label {
    transition: none;
  }
}
.form-floating > .form-control,
.form-floating > .form-control-plaintext {
  padding: 0.7813rem 0.7813rem;
}
.form-floating > .form-control::-webkit-input-placeholder, .form-floating > .form-control-plaintext::-webkit-input-placeholder {
  color: transparent;
}
.form-floating > .form-control::-moz-placeholder, .form-floating > .form-control-plaintext::-moz-placeholder {
  color: transparent;
}
.form-floating > .form-control:-ms-input-placeholder, .form-floating > .form-control-plaintext:-ms-input-placeholder {
  color: transparent;
}
.form-floating > .form-control::-ms-input-placeholder, .form-floating > .form-control-plaintext::-ms-input-placeholder {
  color: transparent;
}
.form-floating > .form-control::placeholder,
.form-floating > .form-control-plaintext::placeholder {
  color: transparent;
}
.form-floating > .form-control:not(:-moz-placeholder-shown), .form-floating > .form-control-plaintext:not(:-moz-placeholder-shown) {
  padding-top: 1.17195rem;
  padding-bottom: calc(0.39065rem + 1px);
}
.form-floating > .form-control:not(:-ms-input-placeholder), .form-floating > .form-control-plaintext:not(:-ms-input-placeholder) {
  padding-top: 1.17195rem;
  padding-bottom: calc(0.39065rem + 1px);
}
.form-floating > .form-control:focus, .form-floating > .form-control:not(:placeholder-shown),
.form-floating > .form-control-plaintext:focus,
.form-floating > .form-control-plaintext:not(:placeholder-shown) {
  padding-top: 1.17195rem;
  padding-bottom: calc(0.39065rem + 1px);
}
.form-floating > .form-control:-webkit-autofill,
.form-floating > .form-control-plaintext:-webkit-autofill {
  padding-top: 1.17195rem;
  padding-bottom: calc(0.39065rem + 1px);
}
.form-floating > .form-select {
  padding-top: 1.17195rem;
  padding-bottom: calc(0.39065rem + 1px);
}
.form-floating > .form-control:not(:-moz-placeholder-shown) ~ label {
  color: rgba(var(--bs-body-color-rgb), 1);
  transform: scale(0.8) translateY(-0.6rem) translateX(0.15rem);
}
.form-floating > .form-control:not(:-ms-input-placeholder) ~ label {
  color: rgba(var(--bs-body-color-rgb), 1);
  transform: scale(0.8) translateY(-0.6rem) translateX(0.15rem);
}
.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:not(:placeholder-shown) ~ label,
.form-floating > .form-control-plaintext ~ label,
.form-floating > .form-select ~ label {
  color: rgba(var(--bs-body-color-rgb), 1);
  -webkit-transform: scale(0.8) translateY(-0.6rem) translateX(0.15rem);
          transform: scale(0.8) translateY(-0.6rem) translateX(0.15rem);
}
.form-floating > .form-control:not(:-moz-placeholder-shown) ~ label::after {
  position: absolute;
  inset: 0.7813rem 0.39065rem;
  z-index: -1;
  height: 1.75em;
  content: "";
  background-color: #fff;
  border-radius: 0.375rem;
}
.form-floating > .form-control:not(:-ms-input-placeholder) ~ label::after {
  position: absolute;
  inset: 0.7813rem 0.39065rem;
  z-index: -1;
  height: 1.75em;
  content: "";
  background-color: #fff;
  border-radius: 0.375rem;
}
.form-floating > .form-control:focus ~ label::after,
.form-floating > .form-control:not(:placeholder-shown) ~ label::after,
.form-floating > .form-control-plaintext ~ label::after,
.form-floating > .form-select ~ label::after {
  position: absolute;
  inset: 0.7813rem 0.39065rem;
  z-index: -1;
  height: 1.75em;
  content: "";
  background-color: #fff;
  border-radius: 0.375rem;
}
.form-floating > .form-control:-webkit-autofill ~ label {
  color: rgba(var(--bs-body-color-rgb), 1);
  -webkit-transform: scale(0.8) translateY(-0.6rem) translateX(0.15rem);
          transform: scale(0.8) translateY(-0.6rem) translateX(0.15rem);
}
.form-floating > .form-control-plaintext ~ label {
  border-width: 1px 0;
}
.form-floating > :disabled ~ label,
.form-floating > .form-control:disabled ~ label {
  color: rgba(58, 53, 65, 0.6);
}
.form-floating > :disabled ~ label::after,
.form-floating > .form-control:disabled ~ label::after {
  background-color: #efeff0;
}

.input-group {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -ms-flex-align: stretch;
      align-items: stretch;
  width: 100%;
}
.input-group > .form-control,
.input-group > .form-select,
.input-group > .form-floating {
  position: relative;
  -ms-flex: 1 1 auto;
      flex: 1 1 auto;
  width: 1%;
  min-width: 0;
}
.input-group > .form-control:focus,
.input-group > .form-select:focus,
.input-group > .form-floating:focus-within {
  z-index: 5;
}
.input-group .btn {
  position: relative;
  z-index: 2;
}
.input-group .btn:focus {
  z-index: 5;
}

.input-group-text {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
      align-items: center;
  padding: 0.5rem 0.875rem;
  font-size: 0.9375rem;
  font-weight: 400;
  line-height: 1.47;
  color: #89868d;
  text-align: center;
  white-space: nowrap;
  background-color: #fff;
  border: 1px solid #d4d3d5;
  border-radius: 0.375rem;
}

.input-group-lg > .form-control,
.input-group-lg > .form-select,
.input-group-lg > .input-group-text,
.input-group-lg > .btn {
  padding: 0.5rem 1.25rem;
  font-size: 1.0625rem;
  border-radius: var(--bs-border-radius-lg);
}

.input-group-sm > .form-control,
.input-group-sm > .form-select,
.input-group-sm > .input-group-text,
.input-group-sm > .btn {
  padding: 0.375rem 0.625rem;
  font-size: 0.8125rem;
  border-radius: 0.3125rem;
}

.input-group-lg > .form-select,
.input-group-sm > .form-select {
  padding-right: 2.75rem;
}

.input-group:not(.has-validation) > :not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
.input-group:not(.has-validation) > .dropdown-toggle:nth-last-child(n+3),
.input-group:not(.has-validation) > .form-floating:not(:last-child) > .form-control,
.input-group:not(.has-validation) > .form-floating:not(:last-child) > .form-select {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group.has-validation > :nth-last-child(n+3):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating),
.input-group.has-validation > .dropdown-toggle:nth-last-child(n+4),
.input-group.has-validation > .form-floating:nth-last-child(n+3) > .form-control,
.input-group.has-validation > .form-floating:nth-last-child(n+3) > .form-select {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: calc(1px * -1);
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group > .form-floating:not(:first-child) > .form-control,
.input-group > .form-floating:not(:first-child) > .form-select {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.3rem;
  font-size: 85%;
  color: var(--bs-form-valid-color);
}

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.75rem;
  color: #fff;
  background-color: var(--bs-success);
  border-radius: 0.25rem;
}

.was-validated :valid ~ .valid-feedback,
.was-validated :valid ~ .valid-tooltip,
.is-valid ~ .valid-feedback,
.is-valid ~ .valid-tooltip {
  display: block;
}

.was-validated .form-control:valid, .form-control.is-valid {
  border-color: var(--bs-form-valid-border-color);
}
.was-validated .form-control:valid:focus, .form-control.is-valid:focus {
  border-color: var(--bs-form-valid-border-color);
  box-shadow: 0 0 0.25rem 0.05rem rgba(var(--bs-success-rgb), 0.1);
}

.was-validated .form-select:valid, .form-select.is-valid {
  border-color: var(--bs-form-valid-border-color);
}
.was-validated .form-select:valid:focus, .form-select.is-valid:focus {
  border-color: var(--bs-form-valid-border-color);
  box-shadow: 0 0 0.25rem 0.05rem rgba(var(--bs-success-rgb), 0.1);
}

.was-validated .form-check-input:valid, .form-check-input.is-valid {
  border-color: var(--bs-form-valid-border-color);
}
.was-validated .form-check-input:valid:checked, .form-check-input.is-valid:checked {
  background-color: var(--bs-form-valid-color);
}
.was-validated .form-check-input:valid:focus, .form-check-input.is-valid:focus {
  box-shadow: 0 0 0.25rem 0.05rem rgba(var(--bs-success-rgb), 0.1);
}
.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: var(--bs-form-valid-color);
}

.form-check-inline .form-check-input ~ .valid-feedback {
  margin-left: 0.5em;
}

.was-validated .input-group > .form-control:not(:focus):valid, .input-group > .form-control:not(:focus).is-valid,
.was-validated .input-group > .form-select:not(:focus):valid,
.input-group > .form-select:not(:focus).is-valid,
.was-validated .input-group > .form-floating:not(:focus-within):valid,
.input-group > .form-floating:not(:focus-within).is-valid {
  z-index: 3;
}

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.3rem;
  font-size: 85%;
  color: var(--bs-form-invalid-color);
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: 0.1rem;
  font-size: 0.75rem;
  color: #fff;
  background-color: var(--bs-danger);
  border-radius: 0.25rem;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: var(--bs-form-invalid-border-color);
}
.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
  border-color: var(--bs-form-invalid-border-color);
  box-shadow: 0 0 0.25rem 0.05rem rgba(var(--bs-danger-rgb), 0.1);
}

.was-validated .form-select:invalid, .form-select.is-invalid {
  border-color: var(--bs-form-invalid-border-color);
}
.was-validated .form-select:invalid:focus, .form-select.is-invalid:focus {
  border-color: var(--bs-form-invalid-border-color);
  box-shadow: 0 0 0.25rem 0.05rem rgba(var(--bs-danger-rgb), 0.1);
}

.was-validated .form-check-input:invalid, .form-check-input.is-invalid {
  border-color: var(--bs-form-invalid-border-color);
}
.was-validated .form-check-input:invalid:checked, .form-check-input.is-invalid:checked {
  background-color: var(--bs-form-invalid-color);
}
.was-validated .form-check-input:invalid:focus, .form-check-input.is-invalid:focus {
  box-shadow: 0 0 0.25rem 0.05rem rgba(var(--bs-danger-rgb), 0.1);
}
.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: var(--bs-form-invalid-color);
}

.form-check-inline .form-check-input ~ .invalid-feedback {
  margin-left: 0.5em;
}

.was-validated .input-group > .form-control:not(:focus):invalid, .input-group > .form-control:not(:focus).is-invalid,
.was-validated .input-group > .form-select:not(:focus):invalid,
.input-group > .form-select:not(:focus).is-invalid,
.was-validated .input-group > .form-floating:not(:focus-within):invalid,
.input-group > .form-floating:not(:focus-within).is-invalid {
  z-index: 4;
}

.btn {
  --bs-btn-padding-x: 1.375rem;
  --bs-btn-padding-y: 0.4375rem;
  --bs-btn-font-family: ;
  --bs-btn-font-size: 0.9375rem;
  --bs-btn-font-weight: 500;
  --bs-btn-line-height: 1.47;
  --bs-btn-color: var(--bs-body-color);
  --bs-btn-bg: transparent;
  --bs-btn-border-width: 1px;
  --bs-btn-border-color: transparent;
  --bs-btn-border-radius: 0.3125rem;
  --bs-btn-hover-border-color: transparent;
  --bs-btn-box-shadow: 0px 1px 5px 0px rgba(58, 53, 65, 0.12);
  --bs-btn-disabled-opacity: 0.65;
  --bs-btn-focus-box-shadow: 0 0 0 0.05rem rgba(var(--bs-btn-focus-shadow-rgb), .5);
  display: inline-block;
  padding: var(--bs-btn-padding-y) var(--bs-btn-padding-x);
  font-family: var(--bs-btn-font-family);
  font-size: var(--bs-btn-font-size);
  font-weight: var(--bs-btn-font-weight);
  line-height: var(--bs-btn-line-height);
  color: var(--bs-btn-color);
  text-align: center;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  border: var(--bs-btn-border-width) solid var(--bs-btn-border-color);
  /* border-radius: var(--bs-btn-border-radius); */
  background-color: var(--bs-btn-bg);
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .btn {
    transition: none;
  }
}
.btn:hover {
  color: var(--bs-btn-hover-color);
  background-color: var(--bs-btn-hover-bg);
  border-color: var(--bs-btn-hover-border-color);
}
.btn-check + .btn:hover {
  color: var(--bs-btn-color);
  background-color: var(--bs-btn-bg);
  border-color: var(--bs-btn-border-color);
}
.btn:focus-visible {
  color: var(--bs-btn-hover-color);
  background-color: var(--bs-btn-hover-bg);
  border-color: var(--bs-btn-hover-border-color);
  outline: 0;
  box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn-check:focus-visible + .btn {
  border-color: var(--bs-btn-hover-border-color);
  outline: 0;
  box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn-check:checked + .btn, :not(.btn-check) + .btn:active, .btn:first-child:active, .btn.active, .btn.show {
  color: var(--bs-btn-active-color);
  background-color: var(--bs-btn-active-bg);
  border-color: var(--bs-btn-active-border-color);
}
.btn-check:checked + .btn:focus-visible, :not(.btn-check) + .btn:active:focus-visible, .btn:first-child:active:focus-visible, .btn.active:focus-visible, .btn.show:focus-visible {
  box-shadow: var(--bs-btn-focus-box-shadow);
}
.btn:disabled, .btn.disabled, fieldset:disabled .btn {
  color: var(--bs-btn-disabled-color);
  pointer-events: none;
  background-color: var(--bs-btn-disabled-bg);
  border-color: var(--bs-btn-disabled-border-color);
  opacity: var(--bs-btn-disabled-opacity);
}

.btn-link {
  --bs-btn-font-weight: 400;
  --bs-btn-color: var(--bs-link-color);
  --bs-btn-bg: transparent;
  --bs-btn-border-color: transparent;
  --bs-btn-hover-color: var(--bs-link-hover-color);
  --bs-btn-hover-border-color: transparent;
  --bs-btn-active-color: var(--bs-link-hover-color);
  --bs-btn-active-border-color: transparent;
  --bs-btn-disabled-color: rgba(58, 53, 65, 0.6);
  --bs-btn-disabled-border-color: transparent;
  --bs-btn-box-shadow: 0 0 0 #000;
  --bs-btn-focus-shadow-rgb: 161, 111, 253;
  text-decoration: none;
}
.btn-link:focus-visible {
  color: var(--bs-btn-color);
}
.btn-link:hover {
  color: var(--bs-btn-hover-color);
}

.btn-lg, .btn-group-lg > .btn {
  --bs-btn-padding-y: 0.5rem;
  --bs-btn-padding-x: 1.625rem;
  --bs-btn-font-size: 1.0625rem;
  --bs-btn-border-radius: var(--bs-border-radius-lg);
}

.btn-sm, .btn-group-sm > .btn {
  --bs-btn-padding-y: 0.375rem;
  --bs-btn-padding-x: 0.969rem;
  --bs-btn-font-size: 0.8125rem;
  --bs-btn-border-radius: var(--bs-border-radius-sm);
}

.fade {
  transition: opacity 0.15s linear;
}
@media (prefers-reduced-motion: reduce) {
  .fade {
    transition: none;
  }
}
.fade:not(.show) {
  opacity: 0;
}

.collapse:not(.show) {
  display: none;
}

.collapsing {
  height: 0;
  overflow: hidden;
  transition: height 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing {
    transition: none;
  }
}
.collapsing.collapse-horizontal {
  width: 0;
  height: auto;
  transition: width 0.35s ease;
}
@media (prefers-reduced-motion: reduce) {
  .collapsing.collapse-horizontal {
    transition: none;
  }
}

.dropup,
.dropend,
.dropdown,
.dropstart,
.dropup-center,
.dropdown-center {
  position: relative;
}

.dropdown-toggle {
  white-space: nowrap;
}
.dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.5em;
  vertical-align: middle;
  content: "";
  border-top: 0.35em solid;
  border-right: 0.35em solid transparent;
  border-bottom: 0;
  border-left: 0.35em solid transparent;
}
.dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropdown-menu {
  --bs-dropdown-zindex: 1000;
  --bs-dropdown-min-width: 10rem;
  --bs-dropdown-padding-x: 0;
  --bs-dropdown-padding-y: 0.3125rem;
  --bs-dropdown-spacer: 0.125rem;
  --bs-dropdown-font-size: 0.9375rem;
  --bs-dropdown-color: var(--bs-body-color);
  --bs-dropdown-bg: #fff;
  --bs-dropdown-border-color: rgba(58, 53, 65, 0.05);
  --bs-dropdown-border-radius: var(--bs-border-radius);
  --bs-dropdown-border-width: 0;
  --bs-dropdown-inner-border-radius: 0;
  --bs-dropdown-divider-bg: rgba(58, 53, 65, 0.05);
  --bs-dropdown-divider-margin-y: 0.5rem;
  --bs-dropdown-box-shadow: 0px 3px 14px 0px rgba(58, 53, 65, 0.14);
  --bs-dropdown-link-color: #544f5a;
  --bs-dropdown-link-hover-color: #544f5a;
  --bs-dropdown-link-hover-bg: rgba(58, 53, 65, 0.04);
  --bs-dropdown-link-active-color: #9055fd;
  --bs-dropdown-link-active-bg: rgba(144, 85, 253, 0.1);
  --bs-dropdown-link-disabled-color: #d4d3d5;
  --bs-dropdown-item-padding-x: 1rem;
  --bs-dropdown-item-padding-y: 0.4375rem;
  --bs-dropdown-header-color: #b4b2b7;
  --bs-dropdown-header-padding-x: 1rem;
  --bs-dropdown-header-padding-y: 0.3125rem;
  position: absolute;
  z-index: var(--bs-dropdown-zindex);
  display: none;
  min-width: var(--bs-dropdown-min-width);
  padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
  margin: 0;
  font-size: var(--bs-dropdown-font-size);
  color: var(--bs-dropdown-color);
  text-align: left;
  list-style: none;
  background-color: var(--bs-dropdown-bg);
  background-clip: padding-box;
  border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
  border-radius: var(--bs-dropdown-border-radius);
}
.dropdown-menu[data-bs-popper] {
  top: 100%;
  left: 0;
  margin-top: var(--bs-dropdown-spacer);
}

.dropdown-menu-start {
  --bs-position: start;
}
.dropdown-menu-start[data-bs-popper] {
  right: auto;
  left: 0;
}

.dropdown-menu-end {
  --bs-position: end;
}
.dropdown-menu-end[data-bs-popper] {
  right: 0;
  left: auto;
}

@media (min-width: 576px) {
  .dropdown-menu-sm-start {
    --bs-position: start;
  }
  .dropdown-menu-sm-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-sm-end {
    --bs-position: end;
  }
  .dropdown-menu-sm-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 768px) {
  .dropdown-menu-md-start {
    --bs-position: start;
  }
  .dropdown-menu-md-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-md-end {
    --bs-position: end;
  }
  .dropdown-menu-md-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 992px) {
  .dropdown-menu-lg-start {
    --bs-position: start;
  }
  .dropdown-menu-lg-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-lg-end {
    --bs-position: end;
  }
  .dropdown-menu-lg-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1200px) {
  .dropdown-menu-xl-start {
    --bs-position: start;
  }
  .dropdown-menu-xl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xl-end {
    --bs-position: end;
  }
  .dropdown-menu-xl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
@media (min-width: 1400px) {
  .dropdown-menu-xxl-start {
    --bs-position: start;
  }
  .dropdown-menu-xxl-start[data-bs-popper] {
    right: auto;
    left: 0;
  }
  .dropdown-menu-xxl-end {
    --bs-position: end;
  }
  .dropdown-menu-xxl-end[data-bs-popper] {
    right: 0;
    left: auto;
  }
}
.dropup .dropdown-menu[data-bs-popper] {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: var(--bs-dropdown-spacer);
}
.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.5em;
  vertical-align: middle;
  content: "";
  border-top: 0;
  border-right: 0.35em solid transparent;
  border-bottom: 0.35em solid;
  border-left: 0.35em solid transparent;
}
.dropup .dropdown-toggle:empty::after {
  margin-left: 0;
}

.dropend .dropdown-menu[data-bs-popper] {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: var(--bs-dropdown-spacer);
}
.dropend .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.5em;
  vertical-align: middle;
  content: "";
  border-top: 0.35em solid transparent;
  border-right: 0;
  border-bottom: 0.35em solid transparent;
  border-left: 0.35em solid;
}
.dropend .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropend .dropdown-toggle::after {
  vertical-align: 0;
}

.dropstart .dropdown-menu[data-bs-popper] {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: var(--bs-dropdown-spacer);
}
.dropstart .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.5em;
  vertical-align: middle;
  content: "";
}
.dropstart .dropdown-toggle::after {
  display: none;
}
.dropstart .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.5em;
  vertical-align: middle;
  content: "";
  border-top: 0.35em solid transparent;
  border-right: 0.35em solid;
  border-bottom: 0.35em solid transparent;
}
.dropstart .dropdown-toggle:empty::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle::before {
  vertical-align: 0;
}

.dropdown-divider {
  height: 0;
  margin: var(--bs-dropdown-divider-margin-y) 0;
  overflow: hidden;
  border-top: 1px solid var(--bs-dropdown-divider-bg);
  opacity: 1;
}

.dropdown-item {
  display: block;
  width: 100%;
  padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
  clear: both;
  font-weight: 400;
  color: var(--bs-dropdown-link-color);
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0;
  border-radius: var(--bs-dropdown-item-border-radius, 0);
}
.dropdown-item:hover, .dropdown-item:focus {
  color: var(--bs-dropdown-link-hover-color);
  background-color: var(--bs-dropdown-link-hover-bg);
}
.dropdown-item.active, .dropdown-item:active {
  color: var(--bs-dropdown-link-active-color);
  text-decoration: none;
  background-color: var(--bs-dropdown-link-active-bg);
}
.dropdown-item.disabled, .dropdown-item:disabled {
  color: var(--bs-dropdown-link-disabled-color);
  pointer-events: none;
  background-color: transparent;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-header {
  display: block;
  padding: var(--bs-dropdown-header-padding-y) var(--bs-dropdown-header-padding-x);
  margin-bottom: 0;
  font-size: 0.8125rem;
  color: var(--bs-dropdown-header-color);
  white-space: nowrap;
}

.dropdown-item-text {
  display: block;
  padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
  color: var(--bs-dropdown-link-color);
}

.dropdown-menu-dark {
  --bs-dropdown-color: rgba(58, 53, 65, 0.22);
  --bs-dropdown-bg: rgba(58, 53, 65, 0.8);
  --bs-dropdown-border-color: rgba(58, 53, 65, 0.05);
  --bs-dropdown-box-shadow: ;
  --bs-dropdown-link-color: rgba(58, 53, 65, 0.22);
  --bs-dropdown-link-hover-color: #fff;
  --bs-dropdown-divider-bg: rgba(58, 53, 65, 0.05);
  --bs-dropdown-link-hover-bg: rgba(255, 255, 255, 0.15);
  --bs-dropdown-link-active-color: #9055fd;
  --bs-dropdown-link-active-bg: rgba(144, 85, 253, 0.1);
  --bs-dropdown-link-disabled-color: rgba(58, 53, 65, 0.5);
  --bs-dropdown-header-color: rgba(58, 53, 65, 0.5);
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  -ms-flex: 1 1 auto;
      flex: 1 1 auto;
}
.btn-group > .btn-check:checked + .btn,
.btn-group > .btn-check:focus + .btn,
.btn-group > .btn:hover,
.btn-group > .btn:focus,
.btn-group > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn-check:checked + .btn,
.btn-group-vertical > .btn-check:focus + .btn,
.btn-group-vertical > .btn:hover,
.btn-group-vertical > .btn:focus,
.btn-group-vertical > .btn:active,
.btn-group-vertical > .btn.active {
  z-index: 1;
}

.btn-toolbar {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -ms-flex-pack: start;
      justify-content: flex-start;
}
.btn-toolbar .input-group {
  width: auto;
}

.btn-group {
  border-radius: 0.3125rem;
}
.btn-group > :not(.btn-check:first-child) + .btn,
.btn-group > .btn-group:not(:first-child) {
  margin-left: calc(1px * -1);
}
.btn-group > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn.dropdown-toggle-split:first-child,
.btn-group > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:nth-child(n+3),
.btn-group > :not(.btn-check) + .btn,
.btn-group > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

.dropdown-toggle-split {
  padding-right: 1.03125rem;
  padding-left: 1.03125rem;
}
.dropdown-toggle-split::after, .dropup .dropdown-toggle-split::after, .dropend .dropdown-toggle-split::after {
  margin-left: 0;
}
.dropstart .dropdown-toggle-split::before {
  margin-right: 0;
}

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
  padding-right: 0.72675rem;
  padding-left: 0.72675rem;
}

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
  padding-right: 1.21875rem;
  padding-left: 1.21875rem;
}

.btn-group-vertical {
  -ms-flex-direction: column;
      flex-direction: column;
  -ms-flex-align: start;
      align-items: flex-start;
  -ms-flex-pack: center;
      justify-content: center;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group {
  width: 100%;
}
.btn-group-vertical > .btn:not(:first-child),
.btn-group-vertical > .btn-group:not(:first-child) {
  margin-top: calc(1px * -1);
}
.btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
.btn-group-vertical > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn ~ .btn,
.btn-group-vertical > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav {
  --bs-nav-link-padding-x: 1.375rem;
  --bs-nav-link-padding-y: 0.811rem;
  --bs-nav-link-font-weight: 500;
  --bs-nav-link-color: #89868d;
  --bs-nav-link-hover-color: var(--bs-link-hover-color);
  --bs-nav-link-disabled-color: #d4d3d5;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}

.nav-link {
  display: block;
  padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
  font-size: var(--bs-nav-link-font-size);
  font-weight: var(--bs-nav-link-font-weight);
  color: var(--bs-nav-link-color);
  background: none;
  border: 0;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .nav-link {
    transition: none;
  }
}
.nav-link:hover, .nav-link:focus {
  color: var(--bs-nav-link-hover-color);
}
.nav-link:focus-visible {
  outline: 0;
  box-shadow: 0 0 0 0.15rem rgba(58, 53, 65, 0.75);
}
.nav-link.disabled, .nav-link:disabled {
  color: var(--bs-nav-link-disabled-color);
  pointer-events: none;
  cursor: default;
}

.nav-tabs {
  --bs-nav-tabs-border-width: var(--bs-border-width);
  --bs-nav-tabs-border-color: #e7e7e8;
  --bs-nav-tabs-border-radius: var(--bs-border-radius);
  --bs-nav-tabs-link-hover-border-color: var(--bs-secondary-bg) var(--bs-secondary-bg) #e7e7e8;
  --bs-nav-tabs-link-active-color: #9055fd;
  --bs-nav-tabs-link-active-bg: #fff;
  --bs-nav-tabs-link-active-border-color: #9055fd;
  border-bottom: var(--bs-nav-tabs-border-width) solid var(--bs-nav-tabs-border-color);
}
.nav-tabs .nav-link {
  margin-bottom: calc(-1 * var(--bs-nav-tabs-border-width));
  border: var(--bs-nav-tabs-border-width) solid transparent;
  border-top-left-radius: var(--bs-nav-tabs-border-radius);
  border-top-right-radius: var(--bs-nav-tabs-border-radius);
}
.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  isolation: isolate;
  border-color: var(--bs-nav-tabs-link-hover-border-color);
}
.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: var(--bs-nav-tabs-link-active-color);
  background-color: var(--bs-nav-tabs-link-active-bg);
  border-color: var(--bs-nav-tabs-link-active-border-color);
}
.nav-tabs .dropdown-menu {
  margin-top: calc(-1 * var(--bs-nav-tabs-border-width));
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-pills {
  --bs-nav-pills-border-radius: var(--bs-border-radius);
  --bs-nav-pills-link-active-color: #fff;
  --bs-nav-pills-link-active-bg: transparent;
}
.nav-pills .nav-link {
  border-radius: var(--bs-nav-pills-border-radius);
}
.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: var(--bs-nav-pills-link-active-color);
  background-color: var(--bs-nav-pills-link-active-bg);
}

.nav-underline {
  --bs-nav-underline-gap: 1rem;
  --bs-nav-underline-border-width: 0.125rem;
  --bs-nav-underline-link-active-color: var(--bs-emphasis-color);
  gap: var(--bs-nav-underline-gap);
}
.nav-underline .nav-link {
  padding-right: 0;
  padding-left: 0;
  border-bottom: var(--bs-nav-underline-border-width) solid transparent;
}
.nav-underline .nav-link:hover, .nav-underline .nav-link:focus {
  border-bottom-color: currentcolor;
}
.nav-underline .nav-link.active,
.nav-underline .show > .nav-link {
  font-weight: 700;
  color: var(--bs-nav-underline-link-active-color);
  border-bottom-color: currentcolor;
}

.nav-fill > .nav-link,
.nav-fill .nav-item {
  -ms-flex: 1 1 auto;
      flex: 1 1 auto;
  text-align: center;
}

.nav-justified > .nav-link,
.nav-justified .nav-item {
  -ms-flex-preferred-size: 0;
      flex-basis: 0;
  -ms-flex-positive: 1;
      flex-grow: 1;
  text-align: center;
}

.nav-fill .nav-item .nav-link,
.nav-justified .nav-item .nav-link {
  width: 100%;
}

.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}

.navbar {
  --bs-navbar-padding-x: 0;
  --bs-navbar-padding-y: 0.5rem;
  --bs-navbar-color: rgba(58, 53, 65, 0.5);
  --bs-navbar-hover-color: #89868d;
  --bs-navbar-disabled-color: rgba(58, 53, 65, 0.22);
  --bs-navbar-active-color: #89868d;
  --bs-navbar-brand-padding-y: 0.719125rem;
  --bs-navbar-brand-margin-end: 1rem;
  --bs-navbar-brand-font-size: 1.0625rem;
  --bs-navbar-brand-color: #89868d;
  --bs-navbar-brand-hover-color: #89868d;
  --bs-navbar-nav-link-padding-x: 0.3rem;
  --bs-navbar-toggler-padding-y: 0.5rem;
  --bs-navbar-toggler-padding-x: 0.7rem;
  --bs-navbar-toggler-font-size: 0.625rem;
  --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28137, 134, 141, 0.75%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
  --bs-navbar-toggler-border-color: rgba(58, 53, 65, 0.06);
  --bs-navbar-toggler-border-radius: 0.3125rem;
  --bs-navbar-toggler-focus-width: 0.05rem;
  --bs-navbar-toggler-transition: box-shadow 0.15s ease-in-out;
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -ms-flex-align: center;
      align-items: center;
  -ms-flex-pack: justify;
      justify-content: space-between;
  padding: var(--bs-navbar-padding-y) var(--bs-navbar-padding-x);
}
.navbar > .container,
.navbar > .container-fluid,
.navbar > .container-sm,
.navbar > .container-md,
.navbar > .container-lg,
.navbar > .container-xl,
.navbar > .container-xxl {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: inherit;
      flex-wrap: inherit;
  -ms-flex-align: center;
      align-items: center;
  -ms-flex-pack: justify;
      justify-content: space-between;
}
.navbar-brand {
  padding-top: var(--bs-navbar-brand-padding-y);
  padding-bottom: var(--bs-navbar-brand-padding-y);
  margin-right: var(--bs-navbar-brand-margin-end);
  font-size: var(--bs-navbar-brand-font-size);
  color: var(--bs-navbar-brand-color);
  white-space: nowrap;
}
.navbar-brand:hover, .navbar-brand:focus {
  color: var(--bs-navbar-brand-hover-color);
}

.navbar-nav {
  --bs-nav-link-padding-x: 0;
  --bs-nav-link-padding-y: 0.811rem;
  --bs-nav-link-font-weight: 500;
  --bs-nav-link-color: var(--bs-navbar-color);
  --bs-nav-link-hover-color: var(--bs-navbar-hover-color);
  --bs-nav-link-disabled-color: var(--bs-navbar-disabled-color);
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
      flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.navbar-nav .nav-link.active, .navbar-nav .nav-link.show {
  color: var(--bs-navbar-active-color);
}
.navbar-nav .dropdown-menu {
  position: static;
}

.navbar-text {
  padding-top: 0.811rem;
  padding-bottom: 0.811rem;
  color: var(--bs-navbar-color);
}
.navbar-text a,
.navbar-text a:hover,
.navbar-text a:focus {
  color: var(--bs-navbar-active-color);
}

.navbar-collapse {
  -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
  -ms-flex-positive: 1;
      flex-grow: 1;
  -ms-flex-align: center;
      align-items: center;
}

.navbar-toggler {
  padding: var(--bs-navbar-toggler-padding-y) var(--bs-navbar-toggler-padding-x);
  font-size: var(--bs-navbar-toggler-font-size);
  line-height: 1;
  color: var(--bs-navbar-color);
  background-color: transparent;
  border: var(--bs-border-width) solid var(--bs-navbar-toggler-border-color);
  border-radius: var(--bs-navbar-toggler-border-radius);
  transition: var(--bs-navbar-toggler-transition);
}
@media (prefers-reduced-motion: reduce) {
  .navbar-toggler {
    transition: none;
  }
}
.navbar-toggler:hover {
  text-decoration: none;
}
.navbar-toggler:focus {
  text-decoration: none;
  outline: 0;
  box-shadow: 0 0 0 var(--bs-navbar-toggler-focus-width);
}

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  background-image: var(--bs-navbar-toggler-icon-bg);
  background-repeat: no-repeat;
  background-position: center;
  background-size: 100%;
}

.navbar-nav-scroll {
  max-height: var(--bs-scroll-height, 75vh);
  overflow-y: auto;
}

@media (min-width: 576px) {
  .navbar-expand-sm {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    -ms-flex-pack: start;
        justify-content: flex-start;
  }
  .navbar-expand-sm .navbar-nav {
    -ms-flex-direction: row;
        flex-direction: row;
  }
  .navbar-expand-sm .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-sm .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-sm .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-sm .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
        flex-basis: auto;
  }
  .navbar-expand-sm .navbar-toggler {
    display: none;
  }
  .navbar-expand-sm .offcanvas {
    position: static;
    z-index: auto;
    -ms-flex-positive: 1;
        flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    -webkit-transform: none !important;
            transform: none !important;
    transition: none;
  }
  .navbar-expand-sm .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-sm .offcanvas .offcanvas-body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-positive: 0;
        flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 768px) {
  .navbar-expand-md {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    -ms-flex-pack: start;
        justify-content: flex-start;
  }
  .navbar-expand-md .navbar-nav {
    -ms-flex-direction: row;
        flex-direction: row;
  }
  .navbar-expand-md .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-md .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-md .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-md .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
        flex-basis: auto;
  }
  .navbar-expand-md .navbar-toggler {
    display: none;
  }
  .navbar-expand-md .offcanvas {
    position: static;
    z-index: auto;
    -ms-flex-positive: 1;
        flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    -webkit-transform: none !important;
            transform: none !important;
    transition: none;
  }
  .navbar-expand-md .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-md .offcanvas .offcanvas-body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-positive: 0;
        flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 992px) {
  .navbar-expand-lg {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    -ms-flex-pack: start;
        justify-content: flex-start;
  }
  .navbar-expand-lg .navbar-nav {
    -ms-flex-direction: row;
        flex-direction: row;
  }
  .navbar-expand-lg .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-lg .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-lg .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-lg .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
        flex-basis: auto;
  }
  .navbar-expand-lg .navbar-toggler {
    display: none;
  }
  .navbar-expand-lg .offcanvas {
    position: static;
    z-index: auto;
    -ms-flex-positive: 1;
        flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    -webkit-transform: none !important;
            transform: none !important;
    transition: none;
  }
  .navbar-expand-lg .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-lg .offcanvas .offcanvas-body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-positive: 0;
        flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1200px) {
  .navbar-expand-xl {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    -ms-flex-pack: start;
        justify-content: flex-start;
  }
  .navbar-expand-xl .navbar-nav {
    -ms-flex-direction: row;
        flex-direction: row;
  }
  .navbar-expand-xl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xl .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-xl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xl .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
        flex-basis: auto;
  }
  .navbar-expand-xl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xl .offcanvas {
    position: static;
    z-index: auto;
    -ms-flex-positive: 1;
        flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    -webkit-transform: none !important;
            transform: none !important;
    transition: none;
  }
  .navbar-expand-xl .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-xl .offcanvas .offcanvas-body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-positive: 0;
        flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
@media (min-width: 1400px) {
  .navbar-expand-xxl {
    -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
    -ms-flex-pack: start;
        justify-content: flex-start;
  }
  .navbar-expand-xxl .navbar-nav {
    -ms-flex-direction: row;
        flex-direction: row;
  }
  .navbar-expand-xxl .navbar-nav .dropdown-menu {
    position: absolute;
  }
  .navbar-expand-xxl .navbar-nav .nav-link {
    padding-right: var(--bs-navbar-nav-link-padding-x);
    padding-left: var(--bs-navbar-nav-link-padding-x);
  }
  .navbar-expand-xxl .navbar-nav-scroll {
    overflow: visible;
  }
  .navbar-expand-xxl .navbar-collapse {
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
        flex-basis: auto;
  }
  .navbar-expand-xxl .navbar-toggler {
    display: none;
  }
  .navbar-expand-xxl .offcanvas {
    position: static;
    z-index: auto;
    -ms-flex-positive: 1;
        flex-grow: 1;
    width: auto !important;
    height: auto !important;
    visibility: visible !important;
    background-color: transparent !important;
    border: 0 !important;
    -webkit-transform: none !important;
            transform: none !important;
    transition: none;
  }
  .navbar-expand-xxl .offcanvas .offcanvas-header {
    display: none;
  }
  .navbar-expand-xxl .offcanvas .offcanvas-body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-positive: 0;
        flex-grow: 0;
    padding: 0;
    overflow-y: visible;
  }
}
.navbar-expand {
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
  -ms-flex-pack: start;
      justify-content: flex-start;
}
.navbar-expand .navbar-nav {
  -ms-flex-direction: row;
      flex-direction: row;
}
.navbar-expand .navbar-nav .dropdown-menu {
  position: absolute;
}
.navbar-expand .navbar-nav .nav-link {
  padding-right: var(--bs-navbar-nav-link-padding-x);
  padding-left: var(--bs-navbar-nav-link-padding-x);
}
.navbar-expand .navbar-nav-scroll {
  overflow: visible;
}
.navbar-expand .navbar-collapse {
  display: -ms-flexbox !important;
  display: flex !important;
  -ms-flex-preferred-size: auto;
      flex-basis: auto;
}
.navbar-expand .navbar-toggler {
  display: none;
}
.navbar-expand .offcanvas {
  position: static;
  z-index: auto;
  -ms-flex-positive: 1;
      flex-grow: 1;
  width: auto !important;
  height: auto !important;
  visibility: visible !important;
  background-color: transparent !important;
  border: 0 !important;
  -webkit-transform: none !important;
          transform: none !important;
  transition: none;
}
.navbar-expand .offcanvas .offcanvas-header {
  display: none;
}
.navbar-expand .offcanvas .offcanvas-body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-positive: 0;
      flex-grow: 0;
  padding: 0;
  overflow-y: visible;
}

.navbar-dark,
.navbar[data-bs-theme=dark] {
  --bs-navbar-color: rgba(255, 255, 255, 0.8);
  --bs-navbar-hover-color: #fff;
  --bs-navbar-disabled-color: rgba(255, 255, 255, 0.4);
  --bs-navbar-active-color: #fff;
  --bs-navbar-brand-color: #fff;
  --bs-navbar-brand-hover-color: #fff;
  --bs-navbar-toggler-border-color: rgba(255, 255, 255, 0.1);
  --bs-navbar-toggler-icon-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.8%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}

.card {
  --bs-card-spacer-y: 1.25rem;
  --bs-card-spacer-x: 1.25rem;
  --bs-card-title-spacer-y: 0.5rem;
  --bs-card-title-color: #544f5a;
  --bs-card-subtitle-color: ;
  --bs-card-border-width: 0;
  --bs-card-border-color: #e7e7e8;
  --bs-card-border-radius: 0.375rem;
  --bs-card-box-shadow: 0 0.375rem 1rem 0 rgba(58, 53, 65, 0.12);
  --bs-card-inner-border-radius: 0.375rem;
  --bs-card-cap-padding-y: 1.25rem;
  --bs-card-cap-padding-x: 1.25rem;
  --bs-card-cap-bg: transparent;
  --bs-card-cap-color: #544f5a;
  --bs-card-height: ;
  --bs-card-color: ;
  --bs-card-bg: #fff;
  --bs-card-img-overlay-padding: 1.5rem;
  --bs-card-group-margin: 0.75rem;
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
      flex-direction: column;
  min-width: 0;
  height: var(--bs-card-height);
  color: var(--bs-body-color);
  word-wrap: break-word;
  background-color: var(--bs-card-bg);
  background-clip: border-box;
  border: var(--bs-card-border-width) solid var(--bs-card-border-color);
  border-radius: var(--bs-card-border-radius);
}
.card > hr {
  margin-right: 0;
  margin-left: 0;
}
.card > .list-group {
  border-top: inherit;
  border-bottom: inherit;
}
.card > .list-group:first-child {
  border-top-width: 0;
  border-top-left-radius: var(--bs-card-inner-border-radius);
  border-top-right-radius: var(--bs-card-inner-border-radius);
}
.card > .list-group:last-child {
  border-bottom-width: 0;
  border-bottom-right-radius: var(--bs-card-inner-border-radius);
  border-bottom-left-radius: var(--bs-card-inner-border-radius);
}
.card > .card-header + .list-group,
.card > .list-group + .card-footer {
  border-top: 0;
}

.card-body {
  -ms-flex: 1 1 auto;
      flex: 1 1 auto;
  padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
  color: var(--bs-card-color);
}

.card-title {
  margin-bottom: var(--bs-card-title-spacer-y);
  color: var(--bs-card-title-color);
}

.card-subtitle {
  margin-top: calc(-0.5 * var(--bs-card-title-spacer-y));
  margin-bottom: 0;
  color: var(--bs-card-subtitle-color);
}

.card-text:last-child {
  margin-bottom: 0;
}

.card-link + .card-link {
  margin-left: var(--bs-card-spacer-x);
}

.card-header {
  padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
  margin-bottom: 0;
  color: var(--bs-card-cap-color);
  background-color: var(--bs-card-cap-bg);
  border-bottom: var(--bs-card-border-width) solid var(--bs-card-border-color);
}
.card-header:first-child {
  border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0;
}

.card-footer {
  padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
  color: var(--bs-card-cap-color);
  background-color: var(--bs-card-cap-bg);
  border-top: var(--bs-card-border-width) solid var(--bs-card-border-color);
}
.card-footer:last-child {
  border-radius: 0 0 var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius);
}

.card-header-tabs {
  margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
  margin-bottom: calc(-1 * var(--bs-card-cap-padding-y));
  margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
  border-bottom: 0;
}
.card-header-tabs .nav-link.active {
  background-color: var(--bs-card-bg);
  border-bottom-color: var(--bs-card-bg);
}

.card-header-pills {
  margin-right: calc(-0.5 * var(--bs-card-cap-padding-x));
  margin-left: calc(-0.5 * var(--bs-card-cap-padding-x));
}

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: var(--bs-card-img-overlay-padding);
  border-radius: var(--bs-card-inner-border-radius);
}

.card-img,
.card-img-top,
.card-img-bottom {
  width: 100%;
}

.card-img,
.card-img-top {
  border-top-left-radius: var(--bs-card-inner-border-radius);
  border-top-right-radius: var(--bs-card-inner-border-radius);
}

.card-img,
.card-img-bottom {
  border-bottom-right-radius: var(--bs-card-inner-border-radius);
  border-bottom-left-radius: var(--bs-card-inner-border-radius);
}

.card-group > .card {
  margin-bottom: var(--bs-card-group-margin);
}
@media (min-width: 576px) {
  .card-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-flow: row wrap;
        flex-flow: row wrap;
  }
  .card-group > .card {
    -ms-flex: 1 0 0%;
        flex: 1 0 0%;
    margin-bottom: 0;
  }
  .card-group > .card + .card {
    margin-left: 0;
    border-left: 0;
  }
  .card-group > .card:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-top,
  .card-group > .card:not(:last-child) .card-header {
    border-top-right-radius: 0;
  }
  .card-group > .card:not(:last-child) .card-img-bottom,
  .card-group > .card:not(:last-child) .card-footer {
    border-bottom-right-radius: 0;
  }
  .card-group > .card:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-top,
  .card-group > .card:not(:first-child) .card-header {
    border-top-left-radius: 0;
  }
  .card-group > .card:not(:first-child) .card-img-bottom,
  .card-group > .card:not(:first-child) .card-footer {
    border-bottom-left-radius: 0;
  }
}

.accordion {
  --bs-accordion-color: #89868d;
  --bs-accordion-bg: #fff;
  --bs-accordion-transition: 0.3s all cubic-bezier(0.4, 0, 0.2, 1);
  --bs-accordion-border-color: #e7e7e8;
  --bs-accordion-border-width: 1px;
  --bs-accordion-border-radius: 0.375rem;
  --bs-accordion-inner-border-radius: calc(0.375rem - 1px);
  --bs-accordion-btn-padding-x: 1.25rem;
  --bs-accordion-btn-padding-y: 0.845rem;
  --bs-accordion-btn-color: #544f5a;
  --bs-accordion-btn-bg: var(--bs-accordion-bg);
  --bs-accordion-btn-icon: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'  fill='%23544f5a' viewBox='0 0 24 24'%3E%3Ctitle%3Echevron-down%3C/title%3E%3Cpath d='M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z' /%3E%3C/svg%3E");
  --bs-accordion-btn-icon-width: 1.4rem;
  --bs-accordion-btn-icon-transform: rotate(-180deg);
  --bs-accordion-btn-icon-transition: transform 0.2s ease-in-out;
  --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'  fill='%23544f5a' viewBox='0 0 24 24'%3E%3Ctitle%3Echevron-down%3C/title%3E%3Cpath d='M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z' /%3E%3C/svg%3E");
  --bs-accordion-btn-focus-border-color: #e7e7e8;
  --bs-accordion-btn-focus-box-shadow: none;
  --bs-accordion-body-padding-x: 1.25rem;
  --bs-accordion-body-padding-y: 0.845rem;
  --bs-accordion-active-color: #544f5a;
  --bs-accordion-active-bg: #fff;
}

.accordion-button {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
      align-items: center;
  width: 100%;
  padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
  font-size: 0.9375rem;
  color: var(--bs-accordion-btn-color);
  text-align: left;
  background-color: var(--bs-accordion-btn-bg);
  border: 0;
  border-radius: 0;
  overflow-anchor: none;
  transition: var(--bs-accordion-transition);
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button {
    transition: none;
  }
}
.accordion-button:not(.collapsed) {
  color: var(--bs-accordion-active-color);
  background-color: var(--bs-accordion-active-bg);
  box-shadow: inset 0 calc(-1 * var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
}
.accordion-button:not(.collapsed)::after {
  background-image: var(--bs-accordion-btn-active-icon);
  -webkit-transform: var(--bs-accordion-btn-icon-transform);
          transform: var(--bs-accordion-btn-icon-transform);
}
.accordion-button::after {
  -ms-flex-negative: 0;
      flex-shrink: 0;
  width: var(--bs-accordion-btn-icon-width);
  height: var(--bs-accordion-btn-icon-width);
  margin-left: auto;
  content: "";
  background-image: var(--bs-accordion-btn-icon);
  background-repeat: no-repeat;
  background-size: var(--bs-accordion-btn-icon-width);
  transition: var(--bs-accordion-btn-icon-transition);
}
@media (prefers-reduced-motion: reduce) {
  .accordion-button::after {
    transition: none;
  }
}
.accordion-button:hover {
  z-index: 2;
}
.accordion-button:focus {
  z-index: 3;
  border-color: var(--bs-accordion-btn-focus-border-color);
  outline: 0;
  box-shadow: var(--bs-accordion-btn-focus-box-shadow);
}

.accordion-header {
  margin-bottom: 0;
}

.accordion-item {
  color: var(--bs-accordion-color);
  background-color: var(--bs-accordion-bg);
  border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);
}
.accordion-item:first-of-type {
  border-top-left-radius: var(--bs-accordion-border-radius);
  border-top-right-radius: var(--bs-accordion-border-radius);
}
.accordion-item:first-of-type .accordion-button {
  border-top-left-radius: var(--bs-accordion-inner-border-radius);
  border-top-right-radius: var(--bs-accordion-inner-border-radius);
}
.accordion-item:not(:first-of-type) {
  border-top: 0;
}
.accordion-item:last-of-type {
  border-bottom-right-radius: var(--bs-accordion-border-radius);
  border-bottom-left-radius: var(--bs-accordion-border-radius);
}
.accordion-item:last-of-type .accordion-button.collapsed {
  border-bottom-right-radius: var(--bs-accordion-inner-border-radius);
  border-bottom-left-radius: var(--bs-accordion-inner-border-radius);
}
.accordion-item:last-of-type .accordion-collapse {
  border-bottom-right-radius: var(--bs-accordion-border-radius);
  border-bottom-left-radius: var(--bs-accordion-border-radius);
}

.accordion-body {
  padding: var(--bs-accordion-body-padding-y) var(--bs-accordion-body-padding-x);
}

.accordion-flush .accordion-collapse {
  border-width: 0;
}
.accordion-flush .accordion-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0;
}
.accordion-flush .accordion-item:first-child {
  border-top: 0;
}
.accordion-flush .accordion-item:last-child {
  border-bottom: 0;
}
.accordion-flush .accordion-item .accordion-button, .accordion-flush .accordion-item .accordion-button.collapsed {
  border-radius: 0;
}

.breadcrumb {
  --bs-breadcrumb-padding-x: 0;
  --bs-breadcrumb-padding-y: 0;
  --bs-breadcrumb-margin-bottom: 1rem;
  --bs-breadcrumb-font-size: 1rem;
  --bs-breadcrumb-bg: transparent;
  --bs-breadcrumb-border-radius: ;
  --bs-breadcrumb-divider-color: #89868d;
  --bs-breadcrumb-item-padding-x: 0.5rem;
  --bs-breadcrumb-item-active-color: #544f5a;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  padding: var(--bs-breadcrumb-padding-y) var(--bs-breadcrumb-padding-x);
  margin-bottom: var(--bs-breadcrumb-margin-bottom);
  font-size: var(--bs-breadcrumb-font-size);
  list-style: none;
  background-color: var(--bs-breadcrumb-bg);
  border-radius: var(--bs-breadcrumb-border-radius);
}

.breadcrumb-item + .breadcrumb-item {
  padding-left: var(--bs-breadcrumb-item-padding-x);
}
.breadcrumb-item + .breadcrumb-item::before {
  float: left;
  padding-right: var(--bs-breadcrumb-item-padding-x);
  color: var(--bs-breadcrumb-divider-color);
  content: var(--bs-breadcrumb-divider, "/") /* rtl: var(--bs-breadcrumb-divider, "\\") */;
}
.breadcrumb-item.active {
  color: var(--bs-breadcrumb-item-active-color);
}

.pagination {
  --bs-pagination-padding-x: 0.3125rem;
  --bs-pagination-padding-y: 0.469rem;
  --bs-pagination-font-size: 0.9375rem;
  --bs-pagination-color: #544f5a;
  --bs-pagination-bg: transparent;
  --bs-pagination-border-width: var(--bs-border-width);
  --bs-pagination-border-color: #d4d3d5;
  --bs-pagination-border-radius: 50%;
  --bs-pagination-hover-color: #544f5a;
  --bs-pagination-hover-bg: #f7f7f7;
  --bs-pagination-hover-border-color: #d4d3d5;
  --bs-pagination-focus-color: #544f5a;
  --bs-pagination-focus-bg: #f7f7f7;
  --bs-pagination-focus-box-shadow: none;
  --bs-pagination-active-color: #fff;
  --bs-pagination-active-bg: #9055fd;
  --bs-pagination-active-border-color: #9055fd;
  --bs-pagination-disabled-color: #b4b2b7;
  --bs-pagination-disabled-bg: #f7f7f7;
  --bs-pagination-disabled-border-color: #e7e7e8;
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
}

.page-link {
  position: relative;
  display: block;
  padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
  font-size: var(--bs-pagination-font-size);
  color: var(--bs-pagination-color);
  background-color: var(--bs-pagination-bg);
  border: var(--bs-pagination-border-width) solid var(--bs-pagination-border-color);
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .page-link {
    transition: none;
  }
}
.page-link:hover {
  z-index: 2;
  color: var(--bs-pagination-hover-color);
  background-color: var(--bs-pagination-hover-bg);
  border-color: var(--bs-pagination-hover-border-color);
}
.page-link:focus {
  z-index: 3;
  color: var(--bs-pagination-focus-color);
  background-color: var(--bs-pagination-focus-bg);
  outline: 0;
  box-shadow: var(--bs-pagination-focus-box-shadow);
}
.page-link.active, .active > .page-link {
  z-index: 3;
  color: var(--bs-pagination-active-color);
  background-color: var(--bs-pagination-active-bg);
  border-color: var(--bs-pagination-active-border-color);
}
.page-link.disabled, .disabled > .page-link {
  color: var(--bs-pagination-disabled-color);
  pointer-events: none;
  background-color: var(--bs-pagination-disabled-bg);
  border-color: var(--bs-pagination-disabled-border-color);
}

.page-item:not(:first-child) .page-link {
  margin-left: 0.344rem;
}
.page-item .page-link {
  border-radius: var(--bs-pagination-border-radius);
}

.pagination-lg {
  --bs-pagination-padding-x: 0.5rem;
  --bs-pagination-padding-y: 0.657rem;
  --bs-pagination-font-size: 1.0625rem;
  --bs-pagination-border-radius: 50%;
}

.pagination-sm {
  --bs-pagination-padding-x: 0.25rem;
  --bs-pagination-padding-y: 0.344rem;
  --bs-pagination-font-size: 0.8125rem;
  --bs-pagination-border-radius: 50%;
}

.badge {
  --bs-badge-padding-x: 0.583em;
  --bs-badge-padding-y: 0.35em;
  --bs-badge-font-size: 0.85em;
  --bs-badge-font-weight: 500;
  --bs-badge-color: #fff;
  --bs-badge-border-radius: 0.1875rem;
  display: inline-block;
  padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
  font-size: var(--bs-badge-font-size);
  font-weight: var(--bs-badge-font-weight);
  line-height: 1;
  color: var(--bs-badge-color);
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: var(--bs-badge-border-radius);
}
.badge:empty {
  display: none;
}

.btn .badge {
  position: relative;
  top: -1px;
}

.alert {
  --bs-alert-bg: transparent;
  --bs-alert-padding-x: 1.114rem;
  --bs-alert-padding-y: 0.781rem;
  --bs-alert-margin-bottom: 1rem;
  --bs-alert-color: inherit;
  --bs-alert-border-color: transparent;
  --bs-alert-border: var(--bs-border-width) solid var(--bs-alert-border-color);
  --bs-alert-border-radius: var(--bs-border-radius);
  --bs-alert-link-color: inherit;
  position: relative;
  padding: var(--bs-alert-padding-y) var(--bs-alert-padding-x);
  margin-bottom: var(--bs-alert-margin-bottom);
  color: var(--bs-alert-color);
  background-color: var(--bs-alert-bg);
  border: var(--bs-alert-border);
  border-radius: var(--bs-alert-border-radius);
}

.alert-heading {
  color: inherit;
}

.alert-link {
  font-weight: 700;
  color: var(--bs-alert-link-color);
}

.alert-dismissible {
  padding-right: 3.342rem;
}
.alert-dismissible .btn-close {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  padding: 0.97625rem 1.114rem;
}

.alert-primary {
  --bs-alert-color: var(--bs-primary-text-emphasis);
  --bs-alert-bg: var(--bs-primary-bg-subtle);
  --bs-alert-border-color: var(--bs-primary-border-subtle);
  --bs-alert-link-color: var(--bs-primary-text-emphasis);
}

.alert-secondary {
  --bs-alert-color: var(--bs-secondary-text-emphasis);
  --bs-alert-bg: var(--bs-secondary-bg-subtle);
  --bs-alert-border-color: var(--bs-secondary-border-subtle);
  --bs-alert-link-color: var(--bs-secondary-text-emphasis);
}

.alert-success {
  --bs-alert-color: var(--bs-success-text-emphasis);
  --bs-alert-bg: var(--bs-success-bg-subtle);
  --bs-alert-border-color: var(--bs-success-border-subtle);
  --bs-alert-link-color: var(--bs-success-text-emphasis);
}

.alert-info {
  --bs-alert-color: var(--bs-info-text-emphasis);
  --bs-alert-bg: var(--bs-info-bg-subtle);
  --bs-alert-border-color: var(--bs-info-border-subtle);
  --bs-alert-link-color: var(--bs-info-text-emphasis);
}

.alert-warning {
  --bs-alert-color: var(--bs-warning-text-emphasis);
  --bs-alert-bg: var(--bs-warning-bg-subtle);
  --bs-alert-border-color: var(--bs-warning-border-subtle);
  --bs-alert-link-color: var(--bs-warning-text-emphasis);
}

.alert-danger {
  --bs-alert-color: var(--bs-danger-text-emphasis);
  --bs-alert-bg: var(--bs-danger-bg-subtle);
  --bs-alert-border-color: var(--bs-danger-border-subtle);
  --bs-alert-link-color: var(--bs-danger-text-emphasis);
}

.alert-light {
  --bs-alert-color: var(--bs-light-text-emphasis);
  --bs-alert-bg: var(--bs-light-bg-subtle);
  --bs-alert-border-color: var(--bs-light-border-subtle);
  --bs-alert-link-color: var(--bs-light-text-emphasis);
}

.alert-dark {
  --bs-alert-color: var(--bs-dark-text-emphasis);
  --bs-alert-bg: var(--bs-dark-bg-subtle);
  --bs-alert-border-color: var(--bs-dark-border-subtle);
  --bs-alert-link-color: var(--bs-dark-text-emphasis);
}

.alert-gray {
  --bs-alert-color: var(--bs-gray-text-emphasis);
  --bs-alert-bg: var(--bs-gray-bg-subtle);
  --bs-alert-border-color: var(--bs-gray-border-subtle);
  --bs-alert-link-color: var(--bs-gray-text-emphasis);
}

@-webkit-keyframes progress-bar-stripes {
  0% {
    background-position-x: 0.75rem;
  }
}

@keyframes progress-bar-stripes {
  0% {
    background-position-x: 0.75rem;
  }
}
.progress,
.progress-stacked {
  --bs-progress-height: 0.75rem;
  --bs-progress-font-size: 0.625rem;
  --bs-progress-bg: #f2ebff;
  --bs-progress-border-radius: 0;
  --bs-progress-box-shadow: var(--bs-box-shadow-inset);
  --bs-progress-bar-color: #fff;
  --bs-progress-bar-bg: #9055fd;
  --bs-progress-bar-transition: width 0.6s ease;
  display: -ms-flexbox;
  display: flex;
  height: var(--bs-progress-height);
  overflow: hidden;
  font-size: var(--bs-progress-font-size);
  background-color: var(--bs-progress-bg);
  border-radius: var(--bs-progress-border-radius);
}

.progress-bar {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
      flex-direction: column;
  -ms-flex-pack: center;
      justify-content: center;
  overflow: hidden;
  color: var(--bs-progress-bar-color);
  text-align: center;
  white-space: nowrap;
  background-color: var(--bs-progress-bar-bg);
  transition: var(--bs-progress-bar-transition);
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar {
    transition: none;
  }
}

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: var(--bs-progress-height) var(--bs-progress-height);
}

.progress-stacked > .progress {
  overflow: visible;
}

.progress-stacked > .progress > .progress-bar {
  width: 100%;
}

.progress-bar-animated {
  -webkit-animation: 1s linear infinite progress-bar-stripes;
          animation: 1s linear infinite progress-bar-stripes;
}
@media (prefers-reduced-motion: reduce) {
  .progress-bar-animated {
    -webkit-animation: none;
            animation: none;
  }
}

.list-group {
  --bs-list-group-color: rgba(58, 53, 65, 0.87);
  --bs-list-group-bg: transparent;
  --bs-list-group-border-color: #d4d3d5;
  --bs-list-group-border-width: var(--bs-border-width);
  --bs-list-group-border-radius: var(--bs-border-radius);
  --bs-list-group-item-padding-x: 1rem;
  --bs-list-group-item-padding-y: 0.735rem;
  --bs-list-group-action-color: #544f5a;
  --bs-list-group-action-hover-color: #544f5a;
  --bs-list-group-action-hover-bg: #f7f7f7;
  --bs-list-group-action-active-color: #544f5a;
  --bs-list-group-action-active-bg: #f6f1ff;
  --bs-list-group-disabled-color: #b4b2b7;
  --bs-list-group-disabled-bg: transparent;
  --bs-list-group-active-color: #544f5a;
  --bs-list-group-active-bg: #f6f1ff;
  --bs-list-group-active-border-color: #d4d3d5;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
      flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  border-radius: var(--bs-list-group-border-radius);
}

.list-group-numbered {
  list-style-type: none;
  counter-reset: section;
}
.list-group-numbered > .list-group-item::before {
  content: counters(section, ".") ". ";
  counter-increment: section;
}

.list-group-item-action {
  width: 100%;
  color: var(--bs-list-group-action-color);
  text-align: inherit;
}
.list-group-item-action:hover, .list-group-item-action:focus {
  z-index: 1;
  color: var(--bs-list-group-action-hover-color);
  text-decoration: none;
  background-color: var(--bs-list-group-action-hover-bg);
}
.list-group-item-action:active {
  color: var(--bs-list-group-action-active-color);
  background-color: var(--bs-list-group-action-active-bg);
}

.list-group-item {
  position: relative;
  display: block;
  padding: var(--bs-list-group-item-padding-y) var(--bs-list-group-item-padding-x);
  color: var(--bs-list-group-color);
  background-color: var(--bs-list-group-bg);
  border: var(--bs-list-group-border-width) solid var(--bs-list-group-border-color);
}
.list-group-item:first-child {
  border-top-left-radius: inherit;
  border-top-right-radius: inherit;
}
.list-group-item:last-child {
  border-bottom-right-radius: inherit;
  border-bottom-left-radius: inherit;
}
.list-group-item.disabled, .list-group-item:disabled {
  color: var(--bs-list-group-disabled-color);
  pointer-events: none;
  background-color: var(--bs-list-group-disabled-bg);
}
.list-group-item.active {
  z-index: 2;
  color: var(--bs-list-group-active-color);
  background-color: var(--bs-list-group-active-bg);
  border-color: var(--bs-list-group-active-border-color);
}
.list-group-item + .list-group-item {
  border-top-width: 0;
}
.list-group-item + .list-group-item.active {
  margin-top: calc(-1 * var(--bs-list-group-border-width));
  border-top-width: var(--bs-list-group-border-width);
}

.list-group-horizontal {
  -ms-flex-direction: row;
      flex-direction: row;
}
.list-group-horizontal > .list-group-item:first-child:not(:last-child) {
  border-bottom-left-radius: var(--bs-list-group-border-radius);
  border-top-right-radius: 0;
}
.list-group-horizontal > .list-group-item:last-child:not(:first-child) {
  border-top-right-radius: var(--bs-list-group-border-radius);
  border-bottom-left-radius: 0;
}
.list-group-horizontal > .list-group-item.active {
  margin-top: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item {
  border-top-width: var(--bs-list-group-border-width);
  border-left-width: 0;
}
.list-group-horizontal > .list-group-item + .list-group-item.active {
  margin-left: calc(-1 * var(--bs-list-group-border-width));
  border-left-width: var(--bs-list-group-border-width);
}

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    -ms-flex-direction: row;
        flex-direction: row;
  }
  .list-group-horizontal-sm > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-sm > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-sm > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 768px) {
  .list-group-horizontal-md {
    -ms-flex-direction: row;
        flex-direction: row;
  }
  .list-group-horizontal-md > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-md > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-md > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 992px) {
  .list-group-horizontal-lg {
    -ms-flex-direction: row;
        flex-direction: row;
  }
  .list-group-horizontal-lg > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-lg > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-lg > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    -ms-flex-direction: row;
        flex-direction: row;
  }
  .list-group-horizontal-xl > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-xl > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
@media (min-width: 1400px) {
  .list-group-horizontal-xxl {
    -ms-flex-direction: row;
        flex-direction: row;
  }
  .list-group-horizontal-xxl > .list-group-item:first-child:not(:last-child) {
    border-bottom-left-radius: var(--bs-list-group-border-radius);
    border-top-right-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item:last-child:not(:first-child) {
    border-top-right-radius: var(--bs-list-group-border-radius);
    border-bottom-left-radius: 0;
  }
  .list-group-horizontal-xxl > .list-group-item.active {
    margin-top: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item {
    border-top-width: var(--bs-list-group-border-width);
    border-left-width: 0;
  }
  .list-group-horizontal-xxl > .list-group-item + .list-group-item.active {
    margin-left: calc(-1 * var(--bs-list-group-border-width));
    border-left-width: var(--bs-list-group-border-width);
  }
}
.list-group-flush {
  border-radius: 0;
}
.list-group-flush > .list-group-item {
  border-width: 0 0 var(--bs-list-group-border-width);
}
.list-group-flush > .list-group-item:last-child {
  border-bottom-width: 0;
}

.list-group-item-primary {
  --bs-list-group-color: var(--bs-primary-text-emphasis);
  --bs-list-group-bg: var(--bs-primary-bg-subtle);
  --bs-list-group-border-color: var(--bs-primary-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-primary-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-primary-border-subtle);
  --bs-list-group-active-color: var(--bs-primary-bg-subtle);
  --bs-list-group-active-bg: var(--bs-primary-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-primary-text-emphasis);
}

.list-group-item-secondary {
  --bs-list-group-color: var(--bs-secondary-text-emphasis);
  --bs-list-group-bg: var(--bs-secondary-bg-subtle);
  --bs-list-group-border-color: var(--bs-secondary-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-secondary-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-secondary-border-subtle);
  --bs-list-group-active-color: var(--bs-secondary-bg-subtle);
  --bs-list-group-active-bg: var(--bs-secondary-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-secondary-text-emphasis);
}

.list-group-item-success {
  --bs-list-group-color: var(--bs-success-text-emphasis);
  --bs-list-group-bg: var(--bs-success-bg-subtle);
  --bs-list-group-border-color: var(--bs-success-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-success-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-success-border-subtle);
  --bs-list-group-active-color: var(--bs-success-bg-subtle);
  --bs-list-group-active-bg: var(--bs-success-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-success-text-emphasis);
}

.list-group-item-info {
  --bs-list-group-color: var(--bs-info-text-emphasis);
  --bs-list-group-bg: var(--bs-info-bg-subtle);
  --bs-list-group-border-color: var(--bs-info-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-info-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-info-border-subtle);
  --bs-list-group-active-color: var(--bs-info-bg-subtle);
  --bs-list-group-active-bg: var(--bs-info-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-info-text-emphasis);
}

.list-group-item-warning {
  --bs-list-group-color: var(--bs-warning-text-emphasis);
  --bs-list-group-bg: var(--bs-warning-bg-subtle);
  --bs-list-group-border-color: var(--bs-warning-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-warning-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-warning-border-subtle);
  --bs-list-group-active-color: var(--bs-warning-bg-subtle);
  --bs-list-group-active-bg: var(--bs-warning-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-warning-text-emphasis);
}

.list-group-item-danger {
  --bs-list-group-color: var(--bs-danger-text-emphasis);
  --bs-list-group-bg: var(--bs-danger-bg-subtle);
  --bs-list-group-border-color: var(--bs-danger-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-danger-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-danger-border-subtle);
  --bs-list-group-active-color: var(--bs-danger-bg-subtle);
  --bs-list-group-active-bg: var(--bs-danger-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-danger-text-emphasis);
}

.list-group-item-light {
  --bs-list-group-color: var(--bs-light-text-emphasis);
  --bs-list-group-bg: var(--bs-light-bg-subtle);
  --bs-list-group-border-color: var(--bs-light-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-light-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-light-border-subtle);
  --bs-list-group-active-color: var(--bs-light-bg-subtle);
  --bs-list-group-active-bg: var(--bs-light-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-light-text-emphasis);
}

.list-group-item-dark {
  --bs-list-group-color: var(--bs-dark-text-emphasis);
  --bs-list-group-bg: var(--bs-dark-bg-subtle);
  --bs-list-group-border-color: var(--bs-dark-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-dark-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-dark-border-subtle);
  --bs-list-group-active-color: var(--bs-dark-bg-subtle);
  --bs-list-group-active-bg: var(--bs-dark-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-dark-text-emphasis);
}

.list-group-item-gray {
  --bs-list-group-color: var(--bs-gray-text-emphasis);
  --bs-list-group-bg: var(--bs-gray-bg-subtle);
  --bs-list-group-border-color: var(--bs-gray-border-subtle);
  --bs-list-group-action-hover-color: var(--bs-emphasis-color);
  --bs-list-group-action-hover-bg: var(--bs-gray-border-subtle);
  --bs-list-group-action-active-color: var(--bs-emphasis-color);
  --bs-list-group-action-active-bg: var(--bs-gray-border-subtle);
  --bs-list-group-active-color: var(--bs-gray-bg-subtle);
  --bs-list-group-active-bg: var(--bs-gray-text-emphasis);
  --bs-list-group-active-border-color: var(--bs-gray-text-emphasis);
}

.btn-close {
  --bs-btn-close-color: #3a3541;
  --bs-btn-close-bg: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%233a3541'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e");
  --bs-btn-close-opacity: 1;
  --bs-btn-close-hover-opacity: 0.75;
  --bs-btn-close-focus-shadow: none;
  --bs-btn-close-focus-opacity: 0.75;
  --bs-btn-close-disabled-opacity: 0.25;
  --bs-btn-close-white-filter: invert(1) grayscale(100%) brightness(200%);
  box-sizing: content-box;
  width: 0.65rem;
  height: 0.65rem;
  padding: 0.25em 0.25em;
  color: var(--bs-btn-close-color);
  background: transparent var(--bs-btn-close-bg) center/0.65rem auto no-repeat;
  border: 0;
  border-radius: 0.3125rem;
  opacity: var(--bs-btn-close-opacity);
}
.btn-close:hover {
  color: var(--bs-btn-close-color);
  text-decoration: none;
  opacity: var(--bs-btn-close-hover-opacity);
}
.btn-close:focus {
  outline: 0;
  box-shadow: var(--bs-btn-close-focus-shadow);
  opacity: var(--bs-btn-close-focus-opacity);
}
.btn-close:disabled, .btn-close.disabled {
  pointer-events: none;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  opacity: var(--bs-btn-close-disabled-opacity);
}

.btn-close-white {
  -webkit-filter: var(--bs-btn-close-white-filter);
          filter: var(--bs-btn-close-white-filter);
}

.toast {
  --bs-toast-zindex: 1095;
  --bs-toast-padding-x: 0.75rem;
  --bs-toast-padding-y: 0.406rem;
  --bs-toast-spacing: 1rem;
  --bs-toast-max-width: 350px;
  --bs-toast-font-size: 0.9375rem;
  --bs-toast-color: #89868d;
  --bs-toast-bg: rgba(255, 255, 255, 0.85);
  --bs-toast-border-width: 0rem;
  --bs-toast-border-color: rgba(58, 53, 65, 0.06);
  --bs-toast-border-radius: 0.3125rem;
  --bs-toast-box-shadow: 0px 4px 8px 0px rgba(58, 53, 65, 0.12);
  --bs-toast-header-color: rgba(58, 53, 65, 0.6);
  --bs-toast-header-bg: rgba(255, 255, 255, 0.85);
  --bs-toast-header-border-color: rgba(58, 53, 65, 0.075);
  width: var(--bs-toast-max-width);
  max-width: 100%;
  font-size: var(--bs-toast-font-size);
  color: var(--bs-toast-color);
  pointer-events: auto;
  background-color: var(--bs-toast-bg);
  background-clip: padding-box;
  border: var(--bs-toast-border-width) solid var(--bs-toast-border-color);
  box-shadow: var(--bs-toast-box-shadow);
  border-radius: var(--bs-toast-border-radius);
}
.toast.showing {
  opacity: 0;
}
.toast:not(.show) {
  display: none;
}

.toast-container {
  --bs-toast-zindex: 1095;
  position: absolute;
  z-index: var(--bs-toast-zindex);
  width: -webkit-max-content;
  width: -moz-max-content;
  width: max-content;
  max-width: 100%;
  pointer-events: none;
}
.toast-container > :not(:last-child) {
  margin-bottom: var(--bs-toast-spacing);
}

.toast-header {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
      align-items: center;
  padding: var(--bs-toast-padding-y) var(--bs-toast-padding-x);
  color: var(--bs-toast-header-color);
  background-color: var(--bs-toast-header-bg);
  background-clip: padding-box;
  border-bottom: var(--bs-toast-border-width) solid var(--bs-toast-header-border-color);
  border-top-left-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width));
  border-top-right-radius: calc(var(--bs-toast-border-radius) - var(--bs-toast-border-width));
}
.toast-header .btn-close {
  margin-right: calc(-0.5 * var(--bs-toast-padding-x));
  margin-left: var(--bs-toast-padding-x);
}

.toast-body {
  padding: var(--bs-toast-padding-x);
  word-wrap: break-word;
}

.modal {
  --bs-modal-zindex: 1090;
  --bs-modal-width: 35rem;
  --bs-modal-padding: 1.25rem;
  --bs-modal-margin: 0.5rem;
  --bs-modal-color: ;
  --bs-modal-bg: #fff;
  --bs-modal-border-color: var(--bs-border-color-translucent);
  --bs-modal-border-width: 0px;
  --bs-modal-border-radius: 0.375rem;
  --bs-modal-box-shadow: 0px 4px 18px 0px rgba(58, 53, 65, 0.14);
  --bs-modal-inner-border-radius: calc(0.375rem - 0px);
  --bs-modal-header-padding-x: 1.25rem;
  --bs-modal-header-padding-y: 1.25rem;
  --bs-modal-header-padding: 1.25rem 1.25rem;
  --bs-modal-header-border-color: var(--bs-border-color);
  --bs-modal-header-border-width: 0;
  --bs-modal-title-line-height: 1.47;
  --bs-modal-footer-gap: 0.5rem;
  --bs-modal-footer-bg: ;
  --bs-modal-footer-border-color: var(--bs-border-color);
  --bs-modal-footer-border-width: 0;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--bs-modal-zindex);
  display: none;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  overflow-y: auto;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: var(--bs-modal-margin);
  pointer-events: none;
}
.modal.fade .modal-dialog {
  transition: -webkit-transform 0.15s ease-out;
  transition: transform 0.15s ease-out;
  transition: transform 0.15s ease-out, -webkit-transform 0.15s ease-out;
  -webkit-transform: translateY(-100px) scale(0.8);
          transform: translateY(-100px) scale(0.8);
}
@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
    transition: none;
  }
}
.modal.show .modal-dialog {
  -webkit-transform: translateY(0) scale(1);
          transform: translateY(0) scale(1);
}
.modal.modal-static .modal-dialog {
  -webkit-transform: scale(1.02);
          transform: scale(1.02);
}

.modal-dialog-scrollable {
  height: calc(100% - var(--bs-modal-margin) * 2);
}
.modal-dialog-scrollable .modal-content {
  max-height: 100%;
  overflow: hidden;
}
.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
      align-items: center;
  min-height: calc(100% - var(--bs-modal-margin) * 2);
}

.modal-content {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
      flex-direction: column;
  width: 100%;
  color: var(--bs-modal-color);
  pointer-events: auto;
  background-color: var(--bs-modal-bg);
  background-clip: padding-box;
  border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
  border-radius: var(--bs-modal-border-radius);
  outline: 0;
}

.modal-backdrop {
  --bs-backdrop-zindex: 1089;
  --bs-backdrop-bg: #3a3541;
  --bs-backdrop-opacity: 0.5;
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--bs-backdrop-zindex);
  width: 100vw;
  height: 100vh;
  background-color: var(--bs-backdrop-bg);
}
.modal-backdrop.fade {
  opacity: 0;
}
.modal-backdrop.show {
  opacity: var(--bs-backdrop-opacity);
}

.modal-header {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  -ms-flex-align: center;
      align-items: center;
  -ms-flex-pack: justify;
      justify-content: space-between;
  padding: var(--bs-modal-header-padding);
  border-bottom: var(--bs-modal-header-border-width) solid var(--bs-modal-header-border-color);
  border-top-left-radius: var(--bs-modal-inner-border-radius);
  border-top-right-radius: var(--bs-modal-inner-border-radius);
}
.modal-header .btn-close {
  padding: calc(var(--bs-modal-header-padding-y) * 0.5) calc(var(--bs-modal-header-padding-x) * 0.5);
  margin: calc(-0.5 * var(--bs-modal-header-padding-y)) calc(-0.5 * var(--bs-modal-header-padding-x)) calc(-0.5 * var(--bs-modal-header-padding-y)) auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: var(--bs-modal-title-line-height);
}

.modal-body {
  position: relative;
  -ms-flex: 1 1 auto;
      flex: 1 1 auto;
  padding: var(--bs-modal-padding);
}

.modal-footer {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -ms-flex-align: center;
      align-items: center;
  -ms-flex-pack: end;
      justify-content: flex-end;
  padding: calc(var(--bs-modal-padding) - var(--bs-modal-footer-gap) * 0.5);
  background-color: var(--bs-modal-footer-bg);
  border-top: var(--bs-modal-footer-border-width) solid var(--bs-modal-footer-border-color);
  border-bottom-right-radius: var(--bs-modal-inner-border-radius);
  border-bottom-left-radius: var(--bs-modal-inner-border-radius);
}
.modal-footer > * {
  margin: calc(var(--bs-modal-footer-gap) * 0.5);
}

@media (min-width: 576px) {
  .modal {
    --bs-modal-margin: 1.75rem;
    --bs-modal-box-shadow: 0px 4px 18px 0px rgba(58, 53, 65, 0.14);
  }
  .modal-dialog {
    max-width: var(--bs-modal-width);
    margin-right: auto;
    margin-left: auto;
  }
  .modal-sm {
    --bs-modal-width: 22.5rem;
  }
}
@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    --bs-modal-width: 50rem;
  }
}
@media (min-width: 1200px) {
  .modal-xl {
    --bs-modal-width: 1140px;
  }
}
.modal-fullscreen {
  width: 100vw;
  max-width: none;
  height: 100%;
  margin: 0;
}
.modal-fullscreen .modal-content {
  height: 100%;
  border: 0;
  border-radius: 0;
}
.modal-fullscreen .modal-header,
.modal-fullscreen .modal-footer {
  border-radius: 0;
}
.modal-fullscreen .modal-body {
  overflow-y: auto;
}

@media (max-width: 575.98px) {
  .modal-fullscreen-sm-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-sm-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-header,
  .modal-fullscreen-sm-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-sm-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 767.98px) {
  .modal-fullscreen-md-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-md-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-header,
  .modal-fullscreen-md-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-md-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 991.98px) {
  .modal-fullscreen-lg-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-lg-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-header,
  .modal-fullscreen-lg-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-lg-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 1199.98px) {
  .modal-fullscreen-xl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-header,
  .modal-fullscreen-xl-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-xl-down .modal-body {
    overflow-y: auto;
  }
}
@media (max-width: 1399.98px) {
  .modal-fullscreen-xxl-down {
    width: 100vw;
    max-width: none;
    height: 100%;
    margin: 0;
  }
  .modal-fullscreen-xxl-down .modal-content {
    height: 100%;
    border: 0;
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-header,
  .modal-fullscreen-xxl-down .modal-footer {
    border-radius: 0;
  }
  .modal-fullscreen-xxl-down .modal-body {
    overflow-y: auto;
  }
}
.tooltip {
  --bs-tooltip-zindex: 1099;
  --bs-tooltip-max-width: 200px;
  --bs-tooltip-padding-x: 0.5rem;
  --bs-tooltip-padding-y: 0.25rem;
  --bs-tooltip-margin: ;
  --bs-tooltip-font-size: 0.75rem;
  --bs-tooltip-color: #fff;
  --bs-tooltip-bg: #212121;
  --bs-tooltip-border-radius: 0.25rem;
  --bs-tooltip-opacity: 1;
  --bs-tooltip-arrow-width: 0.75rem;
  --bs-tooltip-arrow-height: 0.375rem;
  z-index: var(--bs-tooltip-zindex);
  display: block;
  margin: var(--bs-tooltip-margin);
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.47;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: var(--bs-tooltip-font-size);
  word-wrap: break-word;
  opacity: 0;
}
.tooltip.show {
  opacity: var(--bs-tooltip-opacity);
}
.tooltip .tooltip-arrow {
  display: block;
  width: var(--bs-tooltip-arrow-width);
  height: var(--bs-tooltip-arrow-height);
}
.tooltip .tooltip-arrow::before {
  position: absolute;
  content: "";
  border-color: transparent;
  border-style: solid;
}

.bs-tooltip-top .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow {
  bottom: calc(-1 * var(--bs-tooltip-arrow-height));
}
.bs-tooltip-top .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=top] .tooltip-arrow::before {
  top: -1px;
  border-width: var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * 0.5) 0;
  border-top-color: var(--bs-tooltip-bg);
}

/* rtl:begin:ignore */
.bs-tooltip-end .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow {
  left: calc(-1 * var(--bs-tooltip-arrow-height));
  width: var(--bs-tooltip-arrow-height);
  height: var(--bs-tooltip-arrow-width);
}
.bs-tooltip-end .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=right] .tooltip-arrow::before {
  right: -1px;
  border-width: calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height) calc(var(--bs-tooltip-arrow-width) * 0.5) 0;
  border-right-color: var(--bs-tooltip-bg);
}

/* rtl:end:ignore */
.bs-tooltip-bottom .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow {
  top: calc(-1 * var(--bs-tooltip-arrow-height));
}
.bs-tooltip-bottom .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=bottom] .tooltip-arrow::before {
  bottom: -1px;
  border-width: 0 calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height);
  border-bottom-color: var(--bs-tooltip-bg);
}

/* rtl:begin:ignore */
.bs-tooltip-start .tooltip-arrow, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow {
  right: calc(-1 * var(--bs-tooltip-arrow-height));
  width: var(--bs-tooltip-arrow-height);
  height: var(--bs-tooltip-arrow-width);
}
.bs-tooltip-start .tooltip-arrow::before, .bs-tooltip-auto[data-popper-placement^=left] .tooltip-arrow::before {
  left: -1px;
  border-width: calc(var(--bs-tooltip-arrow-width) * 0.5) 0 calc(var(--bs-tooltip-arrow-width) * 0.5) var(--bs-tooltip-arrow-height);
  border-left-color: var(--bs-tooltip-bg);
}

/* rtl:end:ignore */
.tooltip-inner {
  max-width: var(--bs-tooltip-max-width);
  padding: var(--bs-tooltip-padding-y) var(--bs-tooltip-padding-x);
  color: var(--bs-tooltip-color);
  text-align: center;
  background-color: var(--bs-tooltip-bg);
  border-radius: var(--bs-tooltip-border-radius);
}

.popover {
  --bs-popover-zindex: 1091;
  --bs-popover-max-width: 276px;
  --bs-popover-font-size: 0.8125rem;
  --bs-popover-bg: #fff;
  --bs-popover-border-width: 0px;
  --bs-popover-border-color: rgba(58, 53, 65, 0.06);
  --bs-popover-border-radius: var(--bs-border-radius-lg);
  --bs-popover-inner-border-radius: calc(var(--bs-border-radius-lg) - 0px);
  --bs-popover-box-shadow: 0 0.25rem 0.5rem rgba(58, 53, 65, 0.1);
  --bs-popover-header-padding-x: 1.125rem;
  --bs-popover-header-padding-y: 1rem;
  --bs-popover-header-font-size: 0.9375rem;
  --bs-popover-header-color: #544f5a;
  --bs-popover-header-bg: #fff;
  --bs-popover-body-padding-x: 1.125rem;
  --bs-popover-body-padding-y: 1.125rem;
  --bs-popover-body-color: #89868d;
  --bs-popover-arrow-width: 1rem;
  --bs-popover-arrow-height: 0.5rem;
  --bs-popover-arrow-border: var(--bs-popover-border-color);
  z-index: var(--bs-popover-zindex);
  display: block;
  max-width: var(--bs-popover-max-width);
  font-family: var(--bs-font-sans-serif);
  font-style: normal;
  font-weight: 400;
  line-height: 1.47;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  white-space: normal;
  word-spacing: normal;
  line-break: auto;
  font-size: var(--bs-popover-font-size);
  word-wrap: break-word;
  background-color: var(--bs-popover-bg);
  background-clip: padding-box;
  border: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
  border-radius: var(--bs-popover-border-radius);
}
.popover .popover-arrow {
  display: block;
  width: var(--bs-popover-arrow-width);
  height: var(--bs-popover-arrow-height);
}
.popover .popover-arrow::before, .popover .popover-arrow::after {
  position: absolute;
  display: block;
  content: "";
  border-color: transparent;
  border-style: solid;
  border-width: 0;
}

.bs-popover-top > .popover-arrow, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow {
  bottom: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
}
.bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before, .bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
  border-width: var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * 0.5) 0;
}
.bs-popover-top > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::before {
  bottom: 0;
  border-top-color: var(--bs-popover-arrow-border);
}
.bs-popover-top > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=top] > .popover-arrow::after {
  bottom: var(--bs-popover-border-width);
  border-top-color: var(--bs-popover-bg);
}

/* rtl:begin:ignore */
.bs-popover-end > .popover-arrow, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow {
  left: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
  width: var(--bs-popover-arrow-height);
  height: var(--bs-popover-arrow-width);
}
.bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before, .bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
  border-width: calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height) calc(var(--bs-popover-arrow-width) * 0.5) 0;
}
.bs-popover-end > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::before {
  left: 0;
  border-right-color: var(--bs-popover-arrow-border);
}
.bs-popover-end > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=right] > .popover-arrow::after {
  left: var(--bs-popover-border-width);
  border-right-color: var(--bs-popover-bg);
}

/* rtl:end:ignore */
.bs-popover-bottom > .popover-arrow, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow {
  top: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
}
.bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before, .bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
  border-width: 0 calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height);
}
.bs-popover-bottom > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::before {
  top: 0;
  border-bottom-color: var(--bs-popover-arrow-border);
}
.bs-popover-bottom > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=bottom] > .popover-arrow::after {
  top: var(--bs-popover-border-width);
  border-bottom-color: var(--bs-popover-bg);
}
.bs-popover-bottom .popover-header::before, .bs-popover-auto[data-popper-placement^=bottom] .popover-header::before {
  position: absolute;
  top: 0;
  left: 50%;
  display: block;
  width: var(--bs-popover-arrow-width);
  margin-left: calc(-0.5 * var(--bs-popover-arrow-width));
  content: "";
  border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-header-bg);
}

/* rtl:begin:ignore */
.bs-popover-start > .popover-arrow, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow {
  right: calc(-1 * (var(--bs-popover-arrow-height)) - var(--bs-popover-border-width));
  width: var(--bs-popover-arrow-height);
  height: var(--bs-popover-arrow-width);
}
.bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before, .bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
  border-width: calc(var(--bs-popover-arrow-width) * 0.5) 0 calc(var(--bs-popover-arrow-width) * 0.5) var(--bs-popover-arrow-height);
}
.bs-popover-start > .popover-arrow::before, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::before {
  right: 0;
  border-left-color: var(--bs-popover-arrow-border);
}
.bs-popover-start > .popover-arrow::after, .bs-popover-auto[data-popper-placement^=left] > .popover-arrow::after {
  right: var(--bs-popover-border-width);
  border-left-color: var(--bs-popover-bg);
}

/* rtl:end:ignore */
.popover-header {
  padding: var(--bs-popover-header-padding-y) var(--bs-popover-header-padding-x);
  margin-bottom: 0;
  font-size: var(--bs-popover-header-font-size);
  color: var(--bs-popover-header-color);
  background-color: var(--bs-popover-header-bg);
  border-bottom: var(--bs-popover-border-width) solid var(--bs-popover-border-color);
  border-top-left-radius: var(--bs-popover-inner-border-radius);
  border-top-right-radius: var(--bs-popover-inner-border-radius);
}
.popover-header:empty {
  display: none;
}

.popover-body {
  padding: var(--bs-popover-body-padding-y) var(--bs-popover-body-padding-x);
  color: var(--bs-popover-body-color);
}

.carousel {
  position: relative;
}

.carousel.pointer-event {
  -ms-touch-action: pan-y;
      touch-action: pan-y;
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner::after {
  display: block;
  clear: both;
  content: "";
}

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  transition: -webkit-transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-item {
    transition: none;
  }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block;
}

.carousel-item-next:not(.carousel-item-start),
.active.carousel-item-end {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-end),
.active.carousel-item-start {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}

.carousel-fade .carousel-item {
  opacity: 0;
  transition-property: opacity;
  -webkit-transform: none;
          transform: none;
}
.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-start,
.carousel-fade .carousel-item-prev.carousel-item-end {
  z-index: 1;
  opacity: 1;
}
.carousel-fade .active.carousel-item-start,
.carousel-fade .active.carousel-item-end {
  z-index: 0;
  opacity: 0;
  transition: opacity 0s 0.6s;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-fade .active.carousel-item-start,
  .carousel-fade .active.carousel-item-end {
    transition: none;
  }
}

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
      align-items: center;
  -ms-flex-pack: center;
      justify-content: center;
  width: 15%;
  padding: 0;
  color: #fff;
  text-align: center;
  background: none;
  border: 0;
  opacity: 0.5;
  transition: opacity 0.15s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-control-prev,
  .carousel-control-next {
    transition: none;
  }
}
.carousel-control-prev:hover, .carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  opacity: 0.9;
}

.carousel-control-prev {
  left: 0;
}

.carousel-control-next {
  right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 100% 100%;
}

/* rtl:options: {
  "autoRename": true,
  "stringMap":[ {
    "name"    : "prev-next",
    "search"  : "prev",
    "replace" : "next"
  } ]
} */
.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/%3e%3c/svg%3e");
}

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath d='M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
}

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: center;
      justify-content: center;
  padding: 0;
  margin-right: 15%;
  margin-bottom: 1rem;
  margin-left: 15%;
}
.carousel-indicators [data-bs-target] {
  box-sizing: content-box;
  -ms-flex: 0 1 auto;
      flex: 0 1 auto;
  width: 30px;
  height: 3px;
  padding: 0;
  margin-right: 3px;
  margin-left: 3px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #fff;
  background-clip: padding-box;
  border: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  opacity: 0.5;
  transition: opacity 0.6s ease;
}
@media (prefers-reduced-motion: reduce) {
  .carousel-indicators [data-bs-target] {
    transition: none;
  }
}
.carousel-indicators .active {
  opacity: 1;
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 1.25rem;
  left: 15%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: center;
}

.carousel-dark .carousel-control-prev-icon,
.carousel-dark .carousel-control-next-icon {
  -webkit-filter: invert(1) grayscale(100);
          filter: invert(1) grayscale(100);
}
.carousel-dark .carousel-indicators [data-bs-target] {
  background-color: #3a3541;
}
.carousel-dark .carousel-caption {
  color: #3a3541;
}

.spinner-grow,
.spinner-border {
  display: inline-block;
  width: var(--bs-spinner-width);
  height: var(--bs-spinner-height);
  vertical-align: var(--bs-spinner-vertical-align);
  border-radius: 50%;
  -webkit-animation: var(--bs-spinner-animation-speed) linear infinite var(--bs-spinner-animation-name);
          animation: var(--bs-spinner-animation-speed) linear infinite var(--bs-spinner-animation-name);
}

@-webkit-keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg) /* rtl:ignore */;
            transform: rotate(360deg) /* rtl:ignore */;
  }
}

@keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg) /* rtl:ignore */;
            transform: rotate(360deg) /* rtl:ignore */;
  }
}
.spinner-border {
  --bs-spinner-width: 2rem;
  --bs-spinner-height: 2rem;
  --bs-spinner-vertical-align: -0.125em;
  --bs-spinner-border-width: 0.25em;
  --bs-spinner-animation-speed: 0.75s;
  --bs-spinner-animation-name: spinner-border;
  border: var(--bs-spinner-border-width) solid currentcolor;
  border-right-color: transparent;
}

.spinner-border-sm {
  --bs-spinner-width: 1rem;
  --bs-spinner-height: 1rem;
  --bs-spinner-border-width: 0.2em;
}

@-webkit-keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  50% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}

@keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
            transform: scale(0);
  }
  50% {
    opacity: 1;
    -webkit-transform: none;
            transform: none;
  }
}
.spinner-grow {
  --bs-spinner-width: 2rem;
  --bs-spinner-height: 2rem;
  --bs-spinner-vertical-align: -0.125em;
  --bs-spinner-animation-speed: 0.75s;
  --bs-spinner-animation-name: spinner-grow;
  background-color: currentcolor;
  opacity: 0;
}

.spinner-grow-sm {
  --bs-spinner-width: 1rem;
  --bs-spinner-height: 1rem;
}

@media (prefers-reduced-motion: reduce) {
  .spinner-border,
  .spinner-grow {
    --bs-spinner-animation-speed: 1.5s;
  }
}
.offcanvas, .offcanvas-xxl, .offcanvas-xl, .offcanvas-lg, .offcanvas-md, .offcanvas-sm {
  --bs-offcanvas-zindex: 1090;
  --bs-offcanvas-width: 400px;
  --bs-offcanvas-height: 30vh;
  --bs-offcanvas-padding-x: 1.25rem;
  --bs-offcanvas-padding-y: 1.25rem;
  --bs-offcanvas-color: var(--bs-body-color);
  --bs-offcanvas-bg: #fff;
  --bs-offcanvas-border-width: 0px;
  --bs-offcanvas-border-color: var(--bs-border-color-translucent);
  --bs-offcanvas-box-shadow: 0px 4px 18px 0px rgba(58, 53, 65, 0.14);
  --bs-offcanvas-transition: transform 0.25s ease-in-out;
  --bs-offcanvas-title-line-height: 1.47;
}

@media (max-width: 575.98px) {
  .offcanvas-sm {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
        flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: var(--bs-offcanvas-transition);
  }
}
@media (max-width: 575.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-sm {
    transition: none;
  }
}
@media (max-width: 575.98px) {
  .offcanvas-sm.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  .offcanvas-sm.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateX(100%);
            transform: translateX(100%);
  }
  .offcanvas-sm.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
  .offcanvas-sm.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateY(100%);
            transform: translateY(100%);
  }
  .offcanvas-sm.showing, .offcanvas-sm.show:not(.hiding) {
    -webkit-transform: none;
            transform: none;
  }
  .offcanvas-sm.showing, .offcanvas-sm.hiding, .offcanvas-sm.show {
    visibility: visible;
  }
}
@media (min-width: 576px) {
  .offcanvas-sm {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-sm .offcanvas-header {
    display: none;
  }
  .offcanvas-sm .offcanvas-body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-positive: 0;
        flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

@media (max-width: 767.98px) {
  .offcanvas-md {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
        flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: var(--bs-offcanvas-transition);
  }
}
@media (max-width: 767.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-md {
    transition: none;
  }
}
@media (max-width: 767.98px) {
  .offcanvas-md.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  .offcanvas-md.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateX(100%);
            transform: translateX(100%);
  }
  .offcanvas-md.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
  .offcanvas-md.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateY(100%);
            transform: translateY(100%);
  }
  .offcanvas-md.showing, .offcanvas-md.show:not(.hiding) {
    -webkit-transform: none;
            transform: none;
  }
  .offcanvas-md.showing, .offcanvas-md.hiding, .offcanvas-md.show {
    visibility: visible;
  }
}
@media (min-width: 768px) {
  .offcanvas-md {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-md .offcanvas-header {
    display: none;
  }
  .offcanvas-md .offcanvas-body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-positive: 0;
        flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

@media (max-width: 991.98px) {
  .offcanvas-lg {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
        flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: var(--bs-offcanvas-transition);
  }
}
@media (max-width: 991.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-lg {
    transition: none;
  }
}
@media (max-width: 991.98px) {
  .offcanvas-lg.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  .offcanvas-lg.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateX(100%);
            transform: translateX(100%);
  }
  .offcanvas-lg.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
  .offcanvas-lg.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateY(100%);
            transform: translateY(100%);
  }
  .offcanvas-lg.showing, .offcanvas-lg.show:not(.hiding) {
    -webkit-transform: none;
            transform: none;
  }
  .offcanvas-lg.showing, .offcanvas-lg.hiding, .offcanvas-lg.show {
    visibility: visible;
  }
}
@media (min-width: 992px) {
  .offcanvas-lg {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-lg .offcanvas-header {
    display: none;
  }
  .offcanvas-lg .offcanvas-body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-positive: 0;
        flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

@media (max-width: 1199.98px) {
  .offcanvas-xl {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
        flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: var(--bs-offcanvas-transition);
  }
}
@media (max-width: 1199.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-xl {
    transition: none;
  }
}
@media (max-width: 1199.98px) {
  .offcanvas-xl.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  .offcanvas-xl.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateX(100%);
            transform: translateX(100%);
  }
  .offcanvas-xl.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
  .offcanvas-xl.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateY(100%);
            transform: translateY(100%);
  }
  .offcanvas-xl.showing, .offcanvas-xl.show:not(.hiding) {
    -webkit-transform: none;
            transform: none;
  }
  .offcanvas-xl.showing, .offcanvas-xl.hiding, .offcanvas-xl.show {
    visibility: visible;
  }
}
@media (min-width: 1200px) {
  .offcanvas-xl {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-xl .offcanvas-header {
    display: none;
  }
  .offcanvas-xl .offcanvas-body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-positive: 0;
        flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

@media (max-width: 1399.98px) {
  .offcanvas-xxl {
    position: fixed;
    bottom: 0;
    z-index: var(--bs-offcanvas-zindex);
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
        flex-direction: column;
    max-width: 100%;
    color: var(--bs-offcanvas-color);
    visibility: hidden;
    background-color: var(--bs-offcanvas-bg);
    background-clip: padding-box;
    outline: 0;
    transition: var(--bs-offcanvas-transition);
  }
}
@media (max-width: 1399.98px) and (prefers-reduced-motion: reduce) {
  .offcanvas-xxl {
    transition: none;
  }
}
@media (max-width: 1399.98px) {
  .offcanvas-xxl.offcanvas-start {
    top: 0;
    left: 0;
    width: var(--bs-offcanvas-width);
    border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  .offcanvas-xxl.offcanvas-end {
    top: 0;
    right: 0;
    width: var(--bs-offcanvas-width);
    border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateX(100%);
            transform: translateX(100%);
  }
  .offcanvas-xxl.offcanvas-top {
    top: 0;
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
  .offcanvas-xxl.offcanvas-bottom {
    right: 0;
    left: 0;
    height: var(--bs-offcanvas-height);
    max-height: 100%;
    border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
    -webkit-transform: translateY(100%);
            transform: translateY(100%);
  }
  .offcanvas-xxl.showing, .offcanvas-xxl.show:not(.hiding) {
    -webkit-transform: none;
            transform: none;
  }
  .offcanvas-xxl.showing, .offcanvas-xxl.hiding, .offcanvas-xxl.show {
    visibility: visible;
  }
}
@media (min-width: 1400px) {
  .offcanvas-xxl {
    --bs-offcanvas-height: auto;
    --bs-offcanvas-border-width: 0;
    background-color: transparent !important;
  }
  .offcanvas-xxl .offcanvas-header {
    display: none;
  }
  .offcanvas-xxl .offcanvas-body {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-positive: 0;
        flex-grow: 0;
    padding: 0;
    overflow-y: visible;
    background-color: transparent !important;
  }
}

.offcanvas {
  position: fixed;
  bottom: 0;
  z-index: var(--bs-offcanvas-zindex);
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
      flex-direction: column;
  max-width: 100%;
  color: var(--bs-offcanvas-color);
  visibility: hidden;
  background-color: var(--bs-offcanvas-bg);
  background-clip: padding-box;
  outline: 0;
  transition: var(--bs-offcanvas-transition);
}
@media (prefers-reduced-motion: reduce) {
  .offcanvas {
    transition: none;
  }
}
.offcanvas.offcanvas-start {
  top: 0;
  left: 0;
  width: var(--bs-offcanvas-width);
  border-right: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}
.offcanvas.offcanvas-end {
  top: 0;
  right: 0;
  width: var(--bs-offcanvas-width);
  border-left: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}
.offcanvas.offcanvas-top {
  top: 0;
  right: 0;
  left: 0;
  height: var(--bs-offcanvas-height);
  max-height: 100%;
  border-bottom: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
}
.offcanvas.offcanvas-bottom {
  right: 0;
  left: 0;
  height: var(--bs-offcanvas-height);
  max-height: 100%;
  border-top: var(--bs-offcanvas-border-width) solid var(--bs-offcanvas-border-color);
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
}
.offcanvas.showing, .offcanvas.show:not(.hiding) {
  -webkit-transform: none;
          transform: none;
}
.offcanvas.showing, .offcanvas.hiding, .offcanvas.show {
  visibility: visible;
}

.offcanvas-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1089;
  width: 100vw;
  height: 100vh;
  background-color: #3a3541;
}
.offcanvas-backdrop.fade {
  opacity: 0;
}
.offcanvas-backdrop.show {
  opacity: 0.5;
}

.offcanvas-header {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
      align-items: center;
  -ms-flex-pack: justify;
      justify-content: space-between;
  padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
}
.offcanvas-header .btn-close {
  padding: calc(var(--bs-offcanvas-padding-y) * 0.5) calc(var(--bs-offcanvas-padding-x) * 0.5);
  margin-top: calc(-0.5 * var(--bs-offcanvas-padding-y));
  margin-right: calc(-0.5 * var(--bs-offcanvas-padding-x));
  margin-bottom: calc(-0.5 * var(--bs-offcanvas-padding-y));
}

.offcanvas-title {
  margin-bottom: 0;
  line-height: var(--bs-offcanvas-title-line-height);
}

.offcanvas-body {
  -ms-flex-positive: 1;
      flex-grow: 1;
  padding: var(--bs-offcanvas-padding-y) var(--bs-offcanvas-padding-x);
  overflow-y: auto;
}

.placeholder {
  display: inline-block;
  min-height: 1em;
  vertical-align: middle;
  cursor: wait;
  background-color: currentcolor;
  opacity: 0.5;
}
.placeholder.btn::before {
  display: inline-block;
  content: "";
}

.placeholder-xs {
  min-height: 0.6em;
}

.placeholder-sm {
  min-height: 0.8em;
}

.placeholder-lg {
  min-height: 1.2em;
}

.placeholder-glow .placeholder {
  -webkit-animation: placeholder-glow 2s ease-in-out infinite;
          animation: placeholder-glow 2s ease-in-out infinite;
}

@-webkit-keyframes placeholder-glow {
  50% {
    opacity: 0.2;
  }
}

@keyframes placeholder-glow {
  50% {
    opacity: 0.2;
  }
}
.placeholder-wave {
  -webkit-mask-image: linear-gradient(130deg, #3a3541 55%, rgba(0, 0, 0, 0.8) 75%, #3a3541 95%);
          mask-image: linear-gradient(130deg, #3a3541 55%, rgba(0, 0, 0, 0.8) 75%, #3a3541 95%);
  -webkit-mask-size: 200% 100%;
          mask-size: 200% 100%;
  -webkit-animation: placeholder-wave 2s linear infinite;
          animation: placeholder-wave 2s linear infinite;
}

@-webkit-keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0%;
            mask-position: -200% 0%;
  }
}

@keyframes placeholder-wave {
  100% {
    -webkit-mask-position: -200% 0%;
            mask-position: -200% 0%;
  }
}
.clearfix::after {
  display: block;
  clear: both;
  content: "";
}

.text-bg-primary {
  color: #fff !important;
  background-color: RGBA(var(--bs-primary-rgb), var(--bs-bg-opacity, 1)) !important;
}

.text-bg-secondary {
  color: #fff !important;
  background-color: RGBA(var(--bs-secondary-rgb), var(--bs-bg-opacity, 1)) !important;
}

.text-bg-success {
  color: #fff !important;
  background-color: RGBA(var(--bs-success-rgb), var(--bs-bg-opacity, 1)) !important;
}

.text-bg-info {
  color: #fff !important;
  background-color: RGBA(var(--bs-info-rgb), var(--bs-bg-opacity, 1)) !important;
}

.text-bg-warning {
  color: #fff !important;
  background-color: RGBA(var(--bs-warning-rgb), var(--bs-bg-opacity, 1)) !important;
}

.text-bg-danger {
  color: #fff !important;
  background-color: RGBA(var(--bs-danger-rgb), var(--bs-bg-opacity, 1)) !important;
}

.text-bg-light {
  color: #3a3541 !important;
  background-color: RGBA(var(--bs-light-rgb), var(--bs-bg-opacity, 1)) !important;
}

.text-bg-dark {
  color: #fff !important;
  background-color: RGBA(var(--bs-dark-rgb), var(--bs-bg-opacity, 1)) !important;
}

.text-bg-gray {
  color: #fff !important;
  background-color: RGBA(var(--bs-gray-rgb), var(--bs-bg-opacity, 1)) !important;
}

.link-primary {
  color: RGBA(var(--bs-primary-rgb), var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--bs-primary-rgb), var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(var(--bs-primary-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-primary:hover, .link-primary:focus {
  color: RGBA(130, 77, 228, var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(130, 77, 228, var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(130, 77, 228, var(--bs-link-underline-opacity, 1)) !important;
}

.link-secondary {
  color: RGBA(var(--bs-secondary-rgb), var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--bs-secondary-rgb), var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(var(--bs-secondary-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-secondary:hover, .link-secondary:focus {
  color: RGBA(124, 127, 132, var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(124, 127, 132, var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(124, 127, 132, var(--bs-link-underline-opacity, 1)) !important;
}

.link-success {
  color: RGBA(var(--bs-success-rgb), var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--bs-success-rgb), var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(var(--bs-success-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-success:hover, .link-success:focus {
  color: RGBA(77, 182, 0, var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(77, 182, 0, var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(77, 182, 0, var(--bs-link-underline-opacity, 1)) !important;
}

.link-info {
  color: RGBA(var(--bs-info-rgb), var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--bs-info-rgb), var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(var(--bs-info-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-info:hover, .link-info:focus {
  color: RGBA(20, 159, 230, var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(20, 159, 230, var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(20, 159, 230, var(--bs-link-underline-opacity, 1)) !important;
}

.link-warning {
  color: RGBA(var(--bs-warning-rgb), var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--bs-warning-rgb), var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(var(--bs-warning-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-warning:hover, .link-warning:focus {
  color: RGBA(230, 162, 0, var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(230, 162, 0, var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(230, 162, 0, var(--bs-link-underline-opacity, 1)) !important;
}

.link-danger {
  color: RGBA(var(--bs-danger-rgb), var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--bs-danger-rgb), var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(var(--bs-danger-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-danger:hover, .link-danger:focus {
  color: RGBA(230, 68, 73, var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(230, 68, 73, var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(230, 68, 73, var(--bs-link-underline-opacity, 1)) !important;
}

.link-light {
  color: RGBA(var(--bs-light-rgb), var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--bs-light-rgb), var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(var(--bs-light-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-light:hover, .link-light:focus {
  color: RGBA(226, 226, 230, var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(226, 226, 230, var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(226, 226, 230, var(--bs-link-underline-opacity, 1)) !important;
}

.link-dark {
  color: RGBA(var(--bs-dark-rgb), var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--bs-dark-rgb), var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(var(--bs-dark-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-dark:hover, .link-dark:focus {
  color: RGBA(68, 68, 68, var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(68, 68, 68, var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(68, 68, 68, var(--bs-link-underline-opacity, 1)) !important;
}

.link-gray {
  color: RGBA(var(--bs-gray-rgb), var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--bs-gray-rgb), var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(var(--bs-gray-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-gray:hover, .link-gray:focus {
  color: RGBA(13, 12, 14, var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(13, 12, 14, var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(13, 12, 14, var(--bs-link-underline-opacity, 1)) !important;
}

.link-body-emphasis {
  color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-opacity, 1)) !important;
  -webkit-text-decoration-color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-underline-opacity, 1)) !important;
}
.link-body-emphasis:hover, .link-body-emphasis:focus {
  color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-opacity, 0.75)) !important;
  -webkit-text-decoration-color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-underline-opacity, 0.75)) !important;
          text-decoration-color: RGBA(var(--bs-emphasis-color-rgb), var(--bs-link-underline-opacity, 0.75)) !important;
}

.focus-ring:focus {
  outline: 0;
  box-shadow: var(--bs-focus-ring-x, 0) var(--bs-focus-ring-y, 0) var(--bs-focus-ring-blur, 0) var(--bs-focus-ring-width) var(--bs-focus-ring-color);
}

.icon-link {
  display: -ms-inline-flexbox;
  display: inline-flex;
  gap: 0.375rem;
  -ms-flex-align: center;
      align-items: center;
  -webkit-text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 0.5));
          text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 0.5));
  text-underline-offset: 0.25em;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
}
.icon-link > .bi {
  -ms-flex-negative: 0;
      flex-shrink: 0;
  width: 1em;
  height: 1em;
  fill: currentcolor;
  transition: 0.2s ease-in-out transform;
}
@media (prefers-reduced-motion: reduce) {
  .icon-link > .bi {
    transition: none;
  }
}

.icon-link-hover:hover > .bi, .icon-link-hover:focus-visible > .bi {
  -webkit-transform: var(--bs-icon-link-transform, translate3d(0.25em, 0, 0));
          transform: var(--bs-icon-link-transform, translate3d(0.25em, 0, 0));
}

.ratio {
  position: relative;
  width: 100%;
}
.ratio::before {
  display: block;
  padding-top: var(--bs-aspect-ratio);
  content: "";
}
.ratio > * {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.ratio-1x1 {
  --bs-aspect-ratio: 100%;
}

.ratio-4x3 {
  --bs-aspect-ratio: 75%;
}

.ratio-16x9 {
  --bs-aspect-ratio: 56.25%;
}

.ratio-21x9 {
  --bs-aspect-ratio: 42.8571428571%;
}

.fixed-top {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030;
}

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030;
}

.sticky-top {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  z-index: 1020;
}

.sticky-bottom {
  position: -webkit-sticky;
  position: sticky;
  bottom: 0;
  z-index: 1020;
}

@media (min-width: 576px) {
  .sticky-sm-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-sm-bottom {
    position: -webkit-sticky;
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 768px) {
  .sticky-md-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-md-bottom {
    position: -webkit-sticky;
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 992px) {
  .sticky-lg-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-lg-bottom {
    position: -webkit-sticky;
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 1200px) {
  .sticky-xl-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-xl-bottom {
    position: -webkit-sticky;
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
@media (min-width: 1400px) {
  .sticky-xxl-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020;
  }
  .sticky-xxl-bottom {
    position: -webkit-sticky;
    position: sticky;
    bottom: 0;
    z-index: 1020;
  }
}
.hstack {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: row;
      flex-direction: row;
  -ms-flex-align: center;
      align-items: center;
  -ms-flex-item-align: stretch;
      align-self: stretch;
}

.vstack {
  display: -ms-flexbox;
  display: flex;
  -ms-flex: 1 1 auto;
      flex: 1 1 auto;
  -ms-flex-direction: column;
      flex-direction: column;
  -ms-flex-item-align: stretch;
      align-self: stretch;
}

.visually-hidden,
.visually-hidden-focusable:not(:focus):not(:focus-within) {
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}
.visually-hidden:not(caption),
.visually-hidden-focusable:not(:focus):not(:focus-within):not(caption) {
  position: absolute !important;
}

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: "";
}

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.vr {
  display: inline-block;
  -ms-flex-item-align: stretch;
      align-self: stretch;
  width: var(--bs-border-width);
  min-height: 1em;
  background-color: currentcolor;
  opacity: 1;
}

:root {
  color-scheme: light;
}

b,
strong {
  font-weight: 700;
}

a:not([href]) {
  color: inherit;
  text-decoration: none;
}
a:not([href]):hover {
  color: inherit;
  text-decoration: none;
}

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus,
select:-webkit-autofill,
select:-webkit-autofill:hover,
select:-webkit-autofill:focus,
input:-internal-autofill-selected {
  background-clip: text !important;
  -webkit-background-clip: text !important;
}

.row-bordered {
  overflow: hidden;
}
.row-bordered > .col,
.row-bordered > [class^=col-],
.row-bordered > [class*=" col-"],
.row-bordered > [class^="col "],
.row-bordered > [class*=" col "],
.row-bordered > [class$=" col"],
.row-bordered > [class=col] {
  position: relative;
  padding-top: 1px;
}
.row-bordered > .col::before,
.row-bordered > [class^=col-]::before,
.row-bordered > [class*=" col-"]::before,
.row-bordered > [class^="col "]::before,
.row-bordered > [class*=" col "]::before,
.row-bordered > [class$=" col"]::before,
.row-bordered > [class=col]::before {
  content: "";
  position: absolute;
  right: 0;
  bottom: -1px;
  left: 0;
  display: block;
  height: 0;
  border-top: 1px solid #e7e7e8;
}
.row-bordered > .col::after,
.row-bordered > [class^=col-]::after,
.row-bordered > [class*=" col-"]::after,
.row-bordered > [class^="col "]::after,
.row-bordered > [class*=" col "]::after,
.row-bordered > [class$=" col"]::after,
.row-bordered > [class=col]::after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  left: -1px;
  display: block;
  width: 0;
  border-left: 1px solid #e7e7e8;
}
.row-bordered.row-border-light > .col::before, .row-bordered.row-border-light > .col::after,
.row-bordered.row-border-light > [class^=col-]::before,
.row-bordered.row-border-light > [class^=col-]::after,
.row-bordered.row-border-light > [class*=" col-"]::before,
.row-bordered.row-border-light > [class*=" col-"]::after,
.row-bordered.row-border-light > [class^="col "]::before,
.row-bordered.row-border-light > [class^="col "]::after,
.row-bordered.row-border-light > [class*=" col "]::before,
.row-bordered.row-border-light > [class*=" col "]::after,
.row-bordered.row-border-light > [class$=" col"]::before,
.row-bordered.row-border-light > [class$=" col"]::after,
.row-bordered.row-border-light > [class=col]::before,
.row-bordered.row-border-light > [class=col]::after {
  border-color: rgba(58, 53, 65, 0.06);
}

.bg-label-secondary {
  background-color: #edeeef !important;
  color: #8a8d93 !important;
}

.bg-label-success {
  background-color: #e6f7d9 !important;
  color: #56ca00 !important;
}

.bg-label-info {
  background-color: #dcf3ff !important;
  color: #16b1ff !important;
}

.bg-label-warning {
  background-color: #fff4d9 !important;
  color: #ffb400 !important;
}

.bg-label-danger {
  background-color: #ffe4e5 !important;
  color: #ff4c51 !important;
}

.bg-label-light {
  background-color: #fafafb !important;
  color: #dfdfe3 !important;
}

.bg-label-dark {
  background-color: #e4e4e4 !important;
  color: #4b4b4b !important;
}

.bg-label-gray {
  background-color: rgba(254, 254, 254, 0.859) !important;
  color: rgba(58, 53, 65, 0.06) !important;
}

.fs-1:before {
  font-size: 2.375rem;
}

.fs-2:before {
  font-size: 2rem;
}

.fs-3:before {
  font-size: 1.625rem;
}

.fs-4:before {
  font-size: 1.375rem;
}

.fs-5:before {
  font-size: 1.25rem;
}

.fs-6:before {
  font-size: 0.9375rem;
}

.fs-tiny:before {
  font-size: 70%;
}

.fs-big:before {
  font-size: 112%;
}

.fs-large:before {
  font-size: 150%;
}

.fs-xlarge:before {
  font-size: 170%;
}

a.bg-dark:hover, a.bg-dark:focus {
  background-color: rgba(58, 53, 65, 0.87) !important;
}

a.bg-light:hover, a.bg-light:focus {
  background-color: rgba(58, 53, 65, 0.12) !important;
}

a.bg-lighter:hover, a.bg-lighter:focus {
  background-color: rgba(58, 53, 65, 0.06) !important;
}

a.bg-lightest:hover, a.bg-lightest:focus {
  background-color: rgba(58, 53, 65, 0.04) !important;
}

.text-muted[href]:hover, .text-muted[href]:focus {
  color: #89868d !important;
}

.text-light {
  color: #b4b2b7 !important;
}
.text-light[href]:hover, .text-light[href]:focus {
  color: #89868d !important;
}

.text-lighter {
  color: #d4d3d5 !important;
}
.text-lighter[href]:hover, .text-lighter[href]:focus {
  color: #89868d !important;
}

.text-lightest {
  color: #e7e7e8 !important;
}
.text-lightest[href]:hover, .text-lightest[href]:focus {
  color: #89868d !important;
}

.invert-text-white {
  color: #fff !important;
}

.invert-text-white[href]:hover:hover, .invert-text-white[href]:hover:focus {
  color: #fff !important;
}

.invert-text-dark {
  color: #3a3541 !important;
}

.invert-text-dark[href]:hover:hover, .invert-text-dark[href]:hover:focus {
  color: #3a3541 !important;
}

.invert-bg-white {
  background-color: #fff !important;
}

a.invert-bg-white:hover, a.invert-bg-white:focus {
  background-color: #fff !important;
}

.invert-bg-dark {
  background-color: rgba(58, 53, 65, 0.87) !important;
}

a.invert-bg-dark:hover, a.invert-bg-dark:focus {
  background-color: rgba(58, 53, 65, 0.87) !important;
}

.invert-border-dark {
  border-color: #4b4b4b !important;
}

.invert-border-white {
  border-color: #fff !important;
}

.container-p-x {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}
@media (min-width: 992px) {
  .container-p-x {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
}

.container-m-nx {
  margin-right: -1rem !important;
  margin-left: -1rem !important;
}
@media (min-width: 992px) {
  .container-m-nx {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
}

.container-p-y:not([class^=pt-]):not([class*=" pt-"]) {
  padding-top: 1.5rem !important;
}
.container-p-y:not([class^=pb-]):not([class*=" pb-"]) {
  padding-bottom: 1.5rem !important;
}

.container-m-ny:not([class^=mt-]):not([class*=" mt-"]) {
  margin-top: -1.5rem !important;
}
.container-m-ny:not([class^=mb-]):not([class*=" mb-"]) {
  margin-bottom: -1.5rem !important;
}

.cell-fit {
  width: 0.1%;
  white-space: nowrap;
}

.table-secondary {
  --bs-table-bg: #e8e8e9;
  --bs-table-striped-bg: #dfdfe1;
  --bs-table-striped-color: #3a3541;
  --bs-table-active-bg: #dadadc;
  --bs-table-active-color: #3a3541;
  --bs-table-hover-bg: #e1e1e2;
  --bs-table-hover-color: #3a3541;
  color: #3a3541;
  border-color: #d3d3d5;
}
.table-secondary .btn-icon {
  color: #3a3541;
}

.table-success {
  --bs-table-bg: #ddf4cc;
  --bs-table-striped-bg: #d5eac5;
  --bs-table-striped-color: #3a3541;
  --bs-table-active-bg: #d0e5c1;
  --bs-table-active-color: #3a3541;
  --bs-table-hover-bg: #d6ecc6;
  --bs-table-hover-color: #3a3541;
  color: #3a3541;
  border-color: #c9ddbb;
}
.table-success .btn-icon {
  color: #3a3541;
}

.table-info {
  --bs-table-bg: #d0efff;
  --bs-table-striped-bg: #c9e6f6;
  --bs-table-striped-color: #3a3541;
  --bs-table-active-bg: #c4e0f0;
  --bs-table-active-color: #3a3541;
  --bs-table-hover-bg: #cae8f7;
  --bs-table-hover-color: #3a3541;
  color: #3a3541;
  border-color: #bed9e8;
}
.table-info .btn-icon {
  color: #3a3541;
}

.table-warning {
  --bs-table-bg: #fff0cc;
  --bs-table-striped-bg: #f5e7c5;
  --bs-table-striped-color: #3a3541;
  --bs-table-active-bg: #efe1c1;
  --bs-table-active-color: #3a3541;
  --bs-table-hover-bg: #f7e9c6;
  --bs-table-hover-color: #3a3541;
  color: #3a3541;
  border-color: #e7dabb;
}
.table-warning .btn-icon {
  color: #3a3541;
}

.table-danger {
  --bs-table-bg: #ffdbdc;
  --bs-table-striped-bg: #f5d3d4;
  --bs-table-striped-color: #3a3541;
  --bs-table-active-bg: #efced0;
  --bs-table-active-color: #3a3541;
  --bs-table-hover-bg: #f7d4d6;
  --bs-table-hover-color: #3a3541;
  color: #3a3541;
  border-color: #e7c7c9;
}
.table-danger .btn-icon {
  color: #3a3541;
}

.table-light {
  --bs-table-bg: #f3f3f4;
  --bs-table-striped-bg: #eaeaeb;
  --bs-table-striped-color: #3a3541;
  --bs-table-active-bg: #e4e4e6;
  --bs-table-active-color: #3a3541;
  --bs-table-hover-bg: #ecebed;
  --bs-table-hover-color: #3a3541;
  color: #3a3541;
  border-color: #dddcdf;
}
.table-light .btn-icon {
  color: #3a3541;
}

.table-dark {
  --bs-table-bg: #4b4b4b;
  --bs-table-striped-bg: #545454;
  --bs-table-striped-color: #fff;
  --bs-table-active-bg: #595959;
  --bs-table-active-color: #fff;
  --bs-table-hover-bg: #525252;
  --bs-table-hover-color: #fff;
  color: #fff;
  border-color: #616161;
}
.table-dark .btn-icon {
  color: #fff;
}

.table > :not(caption) > * > * {
  background-clip: padding-box;
}
.table tr > td .dropdown {
  position: static;
}

.card .table {
  margin-bottom: 0;
}

@supports (-moz-appearance: none) {
  .table .dropdown-menu.show {
    display: inline-table;
  }
}
.table th {
  text-transform: uppercase;
  font-size: 0.75rem;
  letter-spacing: 1px;
  color: #544f5a;
}

.table-dark th {
  color: var(--bs-table-color);
}

.table-border-bottom-0 tr:last-child td,
.table-border-bottom-0 tr:last-child th {
  border-bottom-width: 0;
}

.table.table-dark .btn.btn-icon {
  color: #e7e7e8;
}

.table-border-bottom-0 tr:last-child td,
.table-border-bottom-0 tr:last-child th {
  border-bottom-width: 0;
}

.table.table-flush-spacing thead tr > td:first-child,
.table.table-flush-spacing tbody tr > td:first-child {
  padding-left: 0;
}
.table.table-flush-spacing thead tr > td:last-child,
.table.table-flush-spacing tbody tr > td:last-child {
  padding-right: 0;
}

.nav-align-top .table:not(.table-dark),
.nav-align-top .table:not(.table-dark) thead:not(.table-dark) th,
.nav-align-top .table:not(.table-dark) tfoot:not(.table-dark) th,
.nav-align-top .table:not(.table-dark) td,
.nav-align-right .table:not(.table-dark),
.nav-align-right .table:not(.table-dark) thead:not(.table-dark) th,
.nav-align-right .table:not(.table-dark) tfoot:not(.table-dark) th,
.nav-align-right .table:not(.table-dark) td,
.nav-align-bottom .table:not(.table-dark),
.nav-align-bottom .table:not(.table-dark) thead:not(.table-dark) th,
.nav-align-bottom .table:not(.table-dark) tfoot:not(.table-dark) th,
.nav-align-bottom .table:not(.table-dark) td,
.nav-align-left .table:not(.table-dark),
.nav-align-left .table:not(.table-dark) thead:not(.table-dark) th,
.nav-align-left .table:not(.table-dark) tfoot:not(.table-dark) th,
.nav-align-left .table:not(.table-dark) td {
  border-color: rgba(58, 53, 65, 0.075);
}

.btn {
  cursor: pointer;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important;
  -ms-flex-align: center;
      align-items: center;
  -ms-flex-pack: center;
      justify-content: center;
  text-transform: uppercase;
  letter-spacing: 0.4px;
}
.btn[class*=btn-]:not([class*=btn-label-]):not([class*=btn-outline-]):not([class*=btn-text-]):not(.btn-icon) {
  box-shadow: 0px 1px 5px 0px rgba(58, 53, 65, 0.12);
}
.btn[class*=btn-]:not([class*=btn-label-]):not([class*=btn-outline-]):not([class*=btn-text-]):not(.btn-icon):hover {
  box-shadow: 0px 4px 8px 0px rgba(58, 53, 65, 0.12);
}
.btn[class*=btn-]:not([class*=btn-label-]):not([class*=btn-outline-]):not([class*=btn-text-]):not(.btn-icon):focus, .btn[class*=btn-]:not([class*=btn-label-]):not([class*=btn-outline-]):not([class*=btn-text-]):not(.btn-icon):active {
  box-shadow: 0 6px 18px -8px rgba(58, 53, 65, 0.56);
}
.btn[class*=btn-]:not([class*=btn-label-]):not([class*=btn-outline-]):not([class*=btn-text-]):not(.btn-icon):disabled, .btn[class*=btn-]:not([class*=btn-label-]):not([class*=btn-outline-]):not([class*=btn-text-]):not(.btn-icon).disabled {
  background: #e7e7e8 !important;
  border-color: #e7e7e8 !important;
  color: #cccace;
  box-shadow: none !important;
}
.btn[class*=btn-outline-]:disabled, .btn[class*=btn-outline-].disabled {
  background: transparent !important;
  border-color: #e7e7e8;
  color: #cccace;
}
.btn .bx {
  line-height: 1.15;
}
.btn.btn-text {
  background: none;
  box-shadow: none;
  border: none;
}
.btn.disabled, .btn:disabled {
  cursor: default;
}

.btn .badge {
  transition: all 0.2s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .btn .badge {
    transition: none;
  }
}

label.btn {
  margin-bottom: 0;
}

.btn-xl, .btn-group-xl > .btn {
  --bs-btn-padding-y: 0.72rem;
  --bs-btn-padding-x: 1.875rem;
  --bs-btn-font-size: 1.25rem;
  --bs-btn-border-radius: 0.5rem;
}

.btn-sm, .btn-group-sm > .btn {
  line-height: 1.2;
}

.btn-xs, .btn-group-xs > .btn {
  --bs-btn-padding-y: 0.25rem;
  --bs-btn-padding-x: 0.59rem;
  --bs-btn-font-size: 0.75rem;
  --bs-btn-border-radius: 0.1875rem;
  line-height: 1.2;
}

.btn-secondary {
  color: #fff;
  background-color: #8a8d93;
  border-color: #8a8d93;
}
.btn-secondary:hover {
  color: #fff !important;
  background-color: #7a7d82 !important;
  border-color: #7a7d82 !important;
}
.btn-check:focus + .btn-secondary, .btn-secondary:focus, .btn-secondary.focus {
  color: #fff;
  background-color: #7a7d82;
  border-color: #7a7d82;
  box-shadow: none;
}
.btn-check:checked + .btn-secondary, .btn-check:active + .btn-secondary, .btn-secondary:active, .btn-secondary.active, .btn-secondary.show.dropdown-toggle, .show > .btn-secondary.dropdown-toggle {
  color: #fff !important;
  background-color: #6e7176 !important;
  border-color: #6e7176 !important;
}
.btn-check:checked + .btn-secondary:focus, .btn-check:active + .btn-secondary:focus, .btn-secondary:active:focus, .btn-secondary.active:focus, .btn-secondary.show.dropdown-toggle:focus, .show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-group .btn-secondary,
.input-group .btn-secondary {
  border-right: 1px solid #6e7176;
  border-left: 1px solid #6e7176;
}

.btn-group-vertical .btn-secondary {
  border-top: 1px solid #6e7176;
  border-bottom: 1px solid #6e7176;
}

.btn-outline-secondary {
  color: #8a8d93;
  border-color: #c5c6c9;
  background: transparent;
}
.btn-outline-secondary.waves-effect .waves-ripple {
  background: radial-gradient(rgba(138, 141, 147, 0.2) 0, rgba(138, 141, 147, 0.3) 40%, rgba(138, 141, 147, 0.4) 50%, rgba(138, 141, 147, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}
.btn-outline-secondary:hover {
  color: #8a8d93 !important;
  background-color: #f7f7f7 !important;
  border-color: #c5c6c9 !important;
}
.btn-check:focus + .btn-outline-secondary, .btn-outline-secondary:focus {
  color: #8a8d93;
  background-color: #e3e4e5;
  border-color: #c5c6c9;
}
.btn-check:checked + .btn-outline-secondary, .btn-check:active + .btn-outline-secondary, .btn-outline-secondary:active, .btn-outline-secondary.active, .btn-outline-secondary.dropdown-toggle.show {
  color: #8a8d93 !important;
  background-color: #dedfe1 !important;
  border-color: #c5c6c9 !important;
}

.btn-outline-secondary .badge {
  background: #8a8d93;
  border-color: #8a8d93;
  color: #fff;
}

.btn-outline-secondary:hover .badge,
.btn-outline-secondary:focus:hover .badge,
.btn-outline-secondary:active .badge,
.btn-outline-secondary.active .badge,
.show > .btn-outline-secondary.dropdown-toggle .badge {
  background: #8a8d93;
  border-color: #8a8d93;
  color: #fff;
}

.btn-success {
  color: #fff;
  background-color: #56ca00;
  border-color: #56ca00;
}
.btn-success:hover {
  color: #fff !important;
  background-color: #4cb300 !important;
  border-color: #4cb300 !important;
}
.btn-check:focus + .btn-success, .btn-success:focus, .btn-success.focus {
  color: #fff;
  background-color: #4cb300;
  border-color: #4cb300;
  box-shadow: none;
}
.btn-check:checked + .btn-success, .btn-check:active + .btn-success, .btn-success:active, .btn-success.active, .btn-success.show.dropdown-toggle, .show > .btn-success.dropdown-toggle {
  color: #fff !important;
  background-color: #45a200 !important;
  border-color: #45a200 !important;
}
.btn-check:checked + .btn-success:focus, .btn-check:active + .btn-success:focus, .btn-success:active:focus, .btn-success.active:focus, .btn-success.show.dropdown-toggle:focus, .show > .btn-success.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-group .btn-success,
.input-group .btn-success {
  border-right: 1px solid #45a200;
  border-left: 1px solid #45a200;
}

.btn-group-vertical .btn-success {
  border-top: 1px solid #45a200;
  border-bottom: 1px solid #45a200;
}

.btn-outline-success {
  color: #56ca00;
  border-color: #abe580;
  background: transparent;
}
.btn-outline-success.waves-effect .waves-ripple {
  background: radial-gradient(rgba(86, 202, 0, 0.2) 0, rgba(86, 202, 0, 0.3) 40%, rgba(86, 202, 0, 0.4) 50%, rgba(86, 202, 0, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}
.btn-outline-success:hover {
  color: #56ca00 !important;
  background-color: #f3fbed !important;
  border-color: #abe580 !important;
}
.btn-check:focus + .btn-outline-success, .btn-outline-success:focus {
  color: #56ca00;
  background-color: #d6f2c2;
  border-color: #abe580;
}
.btn-check:checked + .btn-outline-success, .btn-check:active + .btn-outline-success, .btn-outline-success:active, .btn-outline-success.active, .btn-outline-success.dropdown-toggle.show {
  color: #56ca00 !important;
  background-color: #d0f0b8 !important;
  border-color: #abe580 !important;
}

.btn-outline-success .badge {
  background: #56ca00;
  border-color: #56ca00;
  color: #fff;
}

.btn-outline-success:hover .badge,
.btn-outline-success:focus:hover .badge,
.btn-outline-success:active .badge,
.btn-outline-success.active .badge,
.show > .btn-outline-success.dropdown-toggle .badge {
  background: #56ca00;
  border-color: #56ca00;
  color: #fff;
}

.btn-info {
  color: #fff;
  background-color: #16b1ff;
  border-color: #16b1ff;
}
.btn-info:hover {
  color: #fff !important;
  background-color: #149de2 !important;
  border-color: #149de2 !important;
}
.btn-check:focus + .btn-info, .btn-info:focus, .btn-info.focus {
  color: #fff;
  background-color: #149de2;
  border-color: #149de2;
  box-shadow: none;
}
.btn-check:checked + .btn-info, .btn-check:active + .btn-info, .btn-info:active, .btn-info.active, .btn-info.show.dropdown-toggle, .show > .btn-info.dropdown-toggle {
  color: #fff !important;
  background-color: #128ecc !important;
  border-color: #128ecc !important;
}
.btn-check:checked + .btn-info:focus, .btn-check:active + .btn-info:focus, .btn-info:active:focus, .btn-info.active:focus, .btn-info.show.dropdown-toggle:focus, .show > .btn-info.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-group .btn-info,
.input-group .btn-info {
  border-right: 1px solid #128ecc;
  border-left: 1px solid #128ecc;
}

.btn-group-vertical .btn-info {
  border-top: 1px solid #128ecc;
  border-bottom: 1px solid #128ecc;
}

.btn-outline-info {
  color: #16b1ff;
  border-color: #8bd8ff;
  background: transparent;
}
.btn-outline-info.waves-effect .waves-ripple {
  background: radial-gradient(rgba(22, 177, 255, 0.2) 0, rgba(22, 177, 255, 0.3) 40%, rgba(22, 177, 255, 0.4) 50%, rgba(22, 177, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}
.btn-outline-info:hover {
  color: #16b1ff !important;
  background-color: #effaff !important;
  border-color: #8bd8ff !important;
}
.btn-check:focus + .btn-outline-info, .btn-outline-info:focus {
  color: #16b1ff;
  background-color: #c7ecff;
  border-color: #8bd8ff;
}
.btn-check:checked + .btn-outline-info, .btn-check:active + .btn-outline-info, .btn-outline-info:active, .btn-outline-info.active, .btn-outline-info.dropdown-toggle.show {
  color: #16b1ff !important;
  background-color: #bee9ff !important;
  border-color: #8bd8ff !important;
}

.btn-outline-info .badge {
  background: #16b1ff;
  border-color: #16b1ff;
  color: #fff;
}

.btn-outline-info:hover .badge,
.btn-outline-info:focus:hover .badge,
.btn-outline-info:active .badge,
.btn-outline-info.active .badge,
.show > .btn-outline-info.dropdown-toggle .badge {
  background: #16b1ff;
  border-color: #16b1ff;
  color: #fff;
}

.btn-warning {
  color: #fff;
  background-color: #ffb400;
  border-color: #ffb400;
}
.btn-warning:hover {
  color: #fff !important;
  background-color: #e2a000 !important;
  border-color: #e2a000 !important;
}
.btn-check:focus + .btn-warning, .btn-warning:focus, .btn-warning.focus {
  color: #fff;
  background-color: #e2a000;
  border-color: #e2a000;
  box-shadow: none;
}
.btn-check:checked + .btn-warning, .btn-check:active + .btn-warning, .btn-warning:active, .btn-warning.active, .btn-warning.show.dropdown-toggle, .show > .btn-warning.dropdown-toggle {
  color: #fff !important;
  background-color: #cc9000 !important;
  border-color: #cc9000 !important;
}
.btn-check:checked + .btn-warning:focus, .btn-check:active + .btn-warning:focus, .btn-warning:active:focus, .btn-warning.active:focus, .btn-warning.show.dropdown-toggle:focus, .show > .btn-warning.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-group .btn-warning,
.input-group .btn-warning {
  border-right: 1px solid #cc9000;
  border-left: 1px solid #cc9000;
}

.btn-group-vertical .btn-warning {
  border-top: 1px solid #cc9000;
  border-bottom: 1px solid #cc9000;
}

.btn-outline-warning {
  color: #ffb400;
  border-color: #ffda80;
  background: transparent;
}
.btn-outline-warning.waves-effect .waves-ripple {
  background: radial-gradient(rgba(255, 180, 0, 0.2) 0, rgba(255, 180, 0, 0.3) 40%, rgba(255, 180, 0, 0.4) 50%, rgba(255, 180, 0, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}
.btn-outline-warning:hover {
  color: #ffb400 !important;
  background-color: #fffaed !important;
  border-color: #ffda80 !important;
}
.btn-check:focus + .btn-outline-warning, .btn-outline-warning:focus {
  color: #ffb400;
  background-color: #ffedc2;
  border-color: #ffda80;
}
.btn-check:checked + .btn-outline-warning, .btn-check:active + .btn-outline-warning, .btn-outline-warning:active, .btn-outline-warning.active, .btn-outline-warning.dropdown-toggle.show {
  color: #ffb400 !important;
  background-color: #ffeab8 !important;
  border-color: #ffda80 !important;
}

.btn-outline-warning .badge {
  background: #ffb400;
  border-color: #ffb400;
  color: #fff;
}

.btn-outline-warning:hover .badge,
.btn-outline-warning:focus:hover .badge,
.btn-outline-warning:active .badge,
.btn-outline-warning.active .badge,
.show > .btn-outline-warning.dropdown-toggle .badge {
  background: #ffb400;
  border-color: #ffb400;
  color: #fff;
}

.btn-danger {
  color: #fff;
  background-color: #ff4c51;
  border-color: #ff4c51;
}
.btn-danger:hover {
  color: #fff !important;
  background-color: #e24348 !important;
  border-color: #e24348 !important;
}
.btn-check:focus + .btn-danger, .btn-danger:focus, .btn-danger.focus {
  color: #fff;
  background-color: #e24348;
  border-color: #e24348;
  box-shadow: none;
}
.btn-check:checked + .btn-danger, .btn-check:active + .btn-danger, .btn-danger:active, .btn-danger.active, .btn-danger.show.dropdown-toggle, .show > .btn-danger.dropdown-toggle {
  color: #fff !important;
  background-color: #cc3d41 !important;
  border-color: #cc3d41 !important;
}
.btn-check:checked + .btn-danger:focus, .btn-check:active + .btn-danger:focus, .btn-danger:active:focus, .btn-danger.active:focus, .btn-danger.show.dropdown-toggle:focus, .show > .btn-danger.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-group .btn-danger,
.input-group .btn-danger {
  border-right: 1px solid #cc3d41;
  border-left: 1px solid #cc3d41;
}

.btn-group-vertical .btn-danger {
  border-top: 1px solid #cc3d41;
  border-bottom: 1px solid #cc3d41;
}

.btn-outline-danger {
  color: #ff4c51;
  border-color: #ffa6a8;
  background: transparent;
}
.btn-outline-danger.waves-effect .waves-ripple {
  background: radial-gradient(rgba(255, 76, 81, 0.2) 0, rgba(255, 76, 81, 0.3) 40%, rgba(255, 76, 81, 0.4) 50%, rgba(255, 76, 81, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}
.btn-outline-danger:hover {
  color: #ff4c51 !important;
  background-color: #fff2f3 !important;
  border-color: #ffa6a8 !important;
}
.btn-check:focus + .btn-outline-danger, .btn-outline-danger:focus {
  color: #ff4c51;
  background-color: #ffd4d5;
  border-color: #ffa6a8;
}
.btn-check:checked + .btn-outline-danger, .btn-check:active + .btn-outline-danger, .btn-outline-danger:active, .btn-outline-danger.active, .btn-outline-danger.dropdown-toggle.show {
  color: #ff4c51 !important;
  background-color: #ffcdce !important;
  border-color: #ffa6a8 !important;
}

.btn-outline-danger .badge {
  background: #ff4c51;
  border-color: #ff4c51;
  color: #fff;
}

.btn-outline-danger:hover .badge,
.btn-outline-danger:focus:hover .badge,
.btn-outline-danger:active .badge,
.btn-outline-danger.active .badge,
.show > .btn-outline-danger.dropdown-toggle .badge {
  background: #ff4c51;
  border-color: #ff4c51;
  color: #fff;
}
/* ::placeholder {
  color: black !important;
} */

.btn-light {
  color: #fff !important;
  background-color: transparent;

}
.btn-light:hover {
  color: #3a3541 !important;
  background-color: #fdfdfd !important;

}
.btn-check:focus + .btn-light, .btn-light:focus, .btn-light.focus {
  color: #3a3541;


  box-shadow: none;
}
.btn-check:checked + .btn-light, .btn-check:active + .btn-light, .btn-light:active, .btn-light.active, .btn-light.show.dropdown-toggle, .show > .btn-light.dropdown-toggle {
  color: #3a3541 !important;
  background-color: #f9f9f9 !important;
  border-color: #f9f9f9 !important;
}
.btn-check:checked + .btn-light:focus, .btn-check:active + .btn-light:focus, .btn-light:active:focus, .btn-light.active:focus, .btn-light.show.dropdown-toggle:focus, .show > .btn-light.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-group .btn-light,
.input-group .btn-light {
  border-right: 1px solid #f9f9f9;
  border-left: 1px solid #f9f9f9;
}

.btn-group-vertical .btn-light {
  border-top: 1px solid #f9f9f9;
  border-bottom: 1px solid #f9f9f9;
}

.btn-outline-light {
  color: #dfdfe3;
  border-color: #efeff1;
  background: transparent;
}
.btn-outline-light.waves-effect .waves-ripple {
  background: radial-gradient(rgba(223, 223, 227, 0.2) 0, rgba(223, 223, 227, 0.3) 40%, rgba(223, 223, 227, 0.4) 50%, rgba(223, 223, 227, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}
.btn-outline-light:hover {
  color: #dfdfe3 !important;
  background-color: #fdfdfd !important;
  border-color: #efeff1 !important;
}
.btn-check:focus + .btn-outline-light, .btn-outline-light:focus {
  color: #dfdfe3;
  background-color: #f7f7f8;
  border-color: #efeff1;
}
.btn-check:checked + .btn-outline-light, .btn-check:active + .btn-outline-light, .btn-outline-light:active, .btn-outline-light.active, .btn-outline-light.dropdown-toggle.show {
  color: #dfdfe3 !important;
  background-color: #f6f6f7 !important;
  border-color: #efeff1 !important;
}

.btn-outline-light .badge {
  background: #dfdfe3;
  border-color: #dfdfe3;
  color: #3a3541;
}

.btn-outline-light:hover .badge,
.btn-outline-light:focus:hover .badge,
.btn-outline-light:active .badge,
.btn-outline-light.active .badge,
.show > .btn-outline-light.dropdown-toggle .badge {
  background: #dfdfe3;
  border-color: #dfdfe3;
  color: #3a3541;
}

.btn-dark {
  color: #fff;
  background-color: #4b4b4b;
  border-color: #4b4b4b;
}
.btn-dark:hover {
  color: #fff !important;
  background-color: #434343 !important;
  border-color: #434343 !important;
}
.btn-check:focus + .btn-dark, .btn-dark:focus, .btn-dark.focus {
  color: #fff;
  background-color: #434343;
  border-color: #434343;
  box-shadow: none;
}
.btn-check:checked + .btn-dark, .btn-check:active + .btn-dark, .btn-dark:active, .btn-dark.active, .btn-dark.show.dropdown-toggle, .show > .btn-dark.dropdown-toggle {
  color: #fff !important;
  background-color: #3c3c3c !important;
  border-color: #3c3c3c !important;
}
.btn-check:checked + .btn-dark:focus, .btn-check:active + .btn-dark:focus, .btn-dark:active:focus, .btn-dark.active:focus, .btn-dark.show.dropdown-toggle:focus, .show > .btn-dark.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-group .btn-dark,
.input-group .btn-dark {
  border-right: 1px solid #3c3c3c;
  border-left: 1px solid #3c3c3c;
}

.btn-group-vertical .btn-dark {
  border-top: 1px solid #3c3c3c;
  border-bottom: 1px solid #3c3c3c;
}

.btn-outline-dark {
  color: #4b4b4b;
  border-color: #a5a5a5;
  background: transparent;
}
.btn-outline-dark.waves-effect .waves-ripple {
  background: radial-gradient(rgba(75, 75, 75, 0.2) 0, rgba(75, 75, 75, 0.3) 40%, rgba(75, 75, 75, 0.4) 50%, rgba(75, 75, 75, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}
.btn-outline-dark:hover {
  color: #4b4b4b !important;
  background-color: #f2f2f2 !important;
  border-color: #a5a5a5 !important;
}
.btn-check:focus + .btn-outline-dark, .btn-outline-dark:focus {
  color: #4b4b4b;
  background-color: #d4d4d4;
  border-color: #a5a5a5;
}
.btn-check:checked + .btn-outline-dark, .btn-check:active + .btn-outline-dark, .btn-outline-dark:active, .btn-outline-dark.active, .btn-outline-dark.dropdown-toggle.show {
  color: #4b4b4b !important;
  background-color: #cdcdcd !important;
  border-color: #a5a5a5 !important;
}

.btn-outline-dark .badge {
  background: #4b4b4b;
  border-color: #4b4b4b;
  color: #fff;
}

.btn-outline-dark:hover .badge,
.btn-outline-dark:focus:hover .badge,
.btn-outline-dark:active .badge,
.btn-outline-dark.active .badge,
.show > .btn-outline-dark.dropdown-toggle .badge {
  background: #4b4b4b;
  border-color: #4b4b4b;
  color: #fff;
}

.btn-gray {
  color: #fff;
  background-color: rgba(58, 53, 65, 0.06);
  border-color: rgba(58, 53, 65, 0.06);
}
.btn-gray:hover {
  color: #fff !important;
  background-color: rgba(11, 10, 13, 0.16622) !important;
  border-color: rgba(11, 10, 13, 0.16622) !important;
}
.btn-check:focus + .btn-gray, .btn-gray:focus, .btn-gray.focus {
  color: #fff;
  background-color: rgba(11, 10, 13, 0.16622);
  border-color: rgba(11, 10, 13, 0.16622);
  box-shadow: none;
}
.btn-check:checked + .btn-gray, .btn-check:active + .btn-gray, .btn-gray:active, .btn-gray.active, .btn-gray.show.dropdown-toggle, .show > .btn-gray.dropdown-toggle {
  color: #fff !important;
  background-color: rgba(6, 6, 7, 0.248) !important;
  border-color: rgba(6, 6, 7, 0.248) !important;
}
.btn-check:checked + .btn-gray:focus, .btn-check:active + .btn-gray:focus, .btn-gray:active:focus, .btn-gray.active:focus, .btn-gray.show.dropdown-toggle:focus, .show > .btn-gray.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-group .btn-gray,
.input-group .btn-gray {
  border-right: 1px solid rgba(6, 6, 7, 0.248);
  border-left: 1px solid rgba(6, 6, 7, 0.248);
}

.btn-group-vertical .btn-gray {
  border-top: 1px solid rgba(6, 6, 7, 0.248);
  border-bottom: 1px solid rgba(6, 6, 7, 0.248);
}

.btn-outline-gray {
  color: rgba(58, 53, 65, 0.06);
  border-color: rgba(249, 249, 249, 0.53);
  background: transparent;
}
.btn-outline-gray.waves-effect .waves-ripple {
  background: radial-gradient(rgba(58, 53, 65, 0.2) 0, rgba(58, 53, 65, 0.3) 40%, rgba(58, 53, 65, 0.4) 50%, rgba(58, 53, 65, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}
.btn-outline-gray:hover {
  color: rgba(58, 53, 65, 0.06) !important;
  background-color: rgba(255, 255, 255, 0.9342) !important;
  border-color: rgba(249, 249, 249, 0.53) !important;
}
.btn-check:focus + .btn-outline-gray, .btn-outline-gray:focus {
  color: rgba(58, 53, 65, 0.06);
  background-color: rgba(253, 253, 253, 0.7744);
  border-color: rgba(249, 249, 249, 0.53);
}
.btn-check:checked + .btn-outline-gray, .btn-check:active + .btn-outline-gray, .btn-outline-gray:active, .btn-outline-gray.active, .btn-outline-gray.dropdown-toggle.show {
  color: rgba(58, 53, 65, 0.06) !important;
  background-color: rgba(253, 253, 253, 0.7368) !important;
  border-color: rgba(249, 249, 249, 0.53) !important;
}

.btn-outline-gray .badge {
  background: rgba(58, 53, 65, 0.06);
  border-color: rgba(58, 53, 65, 0.06);
  color: #fff;
}

.btn-outline-gray:hover .badge,
.btn-outline-gray:focus:hover .badge,
.btn-outline-gray:active .badge,
.btn-outline-gray.active .badge,
.show > .btn-outline-gray.dropdown-toggle .badge {
  background: rgba(58, 53, 65, 0.06);
  border-color: rgba(58, 53, 65, 0.06);
  color: #fff;
}

.btn-icon {
  --bs-btn-active-border-color: transparent;
  padding: 0;
  width: calc(2.253125rem + calc(1px * 2));
  height: calc(2.253125rem + calc(1px * 2));
  display: -ms-inline-flexbox;
  display: inline-flex;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  -ms-flex-pack: center;
      justify-content: center;
  -ms-flex-align: center;
      align-items: center;
}
.btn-icon.btn-xl, .btn-group-xl > .btn-icon.btn {
  width: calc(3.315rem + calc(1px * 2));
  height: calc(3.315rem + calc(1px * 2));
}
.btn-icon.btn-xl > span, .btn-group-xl > .btn-icon.btn > span {
  font-size: 1.25rem;
}
.btn-icon.btn-lg, .btn-group-lg > .btn-icon.btn {
  width: calc(2.59375rem + calc(1px * 2));
  height: calc(2.59375rem + calc(1px * 2));
  font-size: 1.0625rem;
}
.btn-icon.btn-sm, .btn-group-sm > .btn-icon.btn {
  width: calc(1.725rem + calc(1px * 2));
  height: calc(1.725rem + calc(1px * 2));
  font-size: 0.8125rem;
}
.btn-icon.btn-xs, .btn-group-xs > .btn-icon.btn {
  width: calc(1.4rem + calc(1px * 2));
  height: calc(1.4rem + calc(1px * 2));
  font-size: 0.75rem;
}

.btn.borderless:not(.active):not(:active):not(:hover):not(:focus), :not(.show) > .btn.borderless.dropdown-toggle:not(:hover):not(:focus) {
  border-color: transparent;
  box-shadow: none;
}

.btn.btn-link {
  font-size: inherit;
}

.btn-pinned {
  position: absolute;
  top: 0.75rem;
  right: 0.75rem;
}

button:focus,
button:focus-visible {
  outline: none;
}

.btn:not([class*=btn-]):active,
.btn:not([class*=btn-]).active,
.btn:not([class*=btn-]).show,
.btn:not([class*=btn-]) {
  border: none;
}

.btn-group .btn {
  box-shadow: none !important;
}

.dropdown-toggle-split,
.btn-lg + .dropdown-toggle-split,
.btn-group-lg > .btn + .dropdown-toggle-split,
.input-group-lg .btn + .dropdown-toggle-split,
.btn-xl + .dropdown-toggle-split,
.btn-group-xl > .btn + .dropdown-toggle-split {
  padding: 0.92em;
}

.btn-sm + .dropdown-toggle-split,
.btn-group-sm > .btn + .dropdown-toggle-split,
.input-group-sm .btn + .dropdown-toggle-split {
  padding: 0.8em;
}

.btn-xs + .dropdown-toggle-split,
.btn-group-xs > .btn + .dropdown-toggle-split {
  padding: 0.7em;
}

.btn-group > .btn-group:first-child > .btn:not([class*=btn-outline-]):first-child,
.input-group > .btn:not([class*=btn-outline-]):first-child,
:not(.btn-group):not(.input-group) > .btn-group > .btn:not([class*=btn-outline-]):first-child,
.input-group > .btn-group:first-child > .btn:not([class*=btn-outline-]):first-child {
  border-left-color: transparent;
}

.btn-group > .btn-group:last-child > .btn:not([class*=btn-outline-]):last-of-type,
.input-group > .btn:not([class*=btn-outline-]):last-of-type,
:not(.btn-group):not(.input-group) > .btn-group > .btn:not([class*=btn-outline-]):last-of-type,
.input-group > .btn-group:last-child > .btn:not([class*=btn-outline-]):last-of-type {
  border-right-color: transparent;
}

.badge {
  line-height: 1.05;
}

.badge-center {
  display: -ms-inline-flexbox;
  display: inline-flex;
  -ms-flex-pack: center;
      justify-content: center;
  -ms-flex-align: center;
      align-items: center;
  height: 1.5rem;
  width: 1.5rem;
  font-size: 0.8125rem;
}
.badge-center i {
  font-size: 0.8rem;
}
.badge-center i::before {
  font-size: 0.8rem;
}

[data-trigger=hover] {
  outline: 0;
}

.dropdown-menu {
  box-shadow: 0px 3px 14px 0px rgba(58, 53, 65, 0.14);
}
.mega-dropdown > .dropdown-menu {
  left: 0 !important;
  right: 0 !important;
}
.dropdown-menu .badge[class^=float-],
.dropdown-menu .badge[class*=" float-"] {
  position: relative;
  top: 0.071em;
}

.dropdown-item {
  line-height: 1.47;
}
.dropdown-item.active .waves-ripple, .dropdown-item.disabled .waves-ripple {
  display: none;
}

.dropdown-toggle.hide-arrow::before, .dropdown-toggle.hide-arrow::after,
.dropdown-toggle-hide-arrow > .dropdown-toggle::before,
.dropdown-toggle-hide-arrow > .dropdown-toggle::after {
  display: none;
}

.dropstart .dropdown-toggle::before,
.dropend .dropdown-toggle::after {
  vertical-align: middle;
}

.nav .nav-item,
.nav .nav-link,
.tab-pane,
.tab-pane .card-body {
  outline: none !important;
}

.nav {
  -ms-flex-wrap: inherit;
      flex-wrap: inherit;
}
.nav.nav-pills:not(.nav-align-right):not(.nav-align-left) {
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}
.nav .nav-item {
  white-space: nowrap;
}

.nav .nav-link:not(.active):hover {
  color: #89868d !important;
}

.nav-tabs .nav-link,
.nav-pills .nav-link {
  display: -ms-inline-flexbox;
  display: inline-flex;
  -ms-flex-align: center;
      align-items: center;
  -ms-flex-pack: center;
      justify-content: center;
  text-transform: uppercase;
}
.nav-tabs .nav-link:not(.disabled),
.nav-pills .nav-link:not(.disabled) {
  color: #544f5a;
}
.nav-tabs .nav-link, .nav-tabs .nav-link.active,
.nav-pills .nav-link,
.nav-pills .nav-link.active {
  background-color: transparent;
  border-width: 0;
}
.nav-tabs:not(.nav-fill):not(.nav-justified) .nav-link,
.nav-pills:not(.nav-fill):not(.nav-justified) .nav-link {
  margin-right: 0.125rem;
  width: 100%;
}

.tab-content:not(.doc-example-content) {
  padding: 1.25rem;
  border-radius: 0.3125rem;
}
.tab-content:not(.doc-example-content) .tab-pane {
  opacity: 0;
  transition: all linear 0.1s;
  -webkit-transform: translateX(-30px);
          transform: translateX(-30px);
}
.tab-content:not(.doc-example-content) .tab-pane.show {
  opacity: 1;
  -webkit-transform: unset !important;
          transform: unset !important;
  transition: all ease-out 0.2s 0.1s;
}

div:not(.nav-align-left):not(.nav-align-right) > .nav-tabs {
  display: -ms-inline-flexbox;
  display: inline-flex;
  width: 100%;
  overflow-x: auto !important;
  overflow-y: hidden;
}
.nav-tabs.nav-tabs-widget {
  border: 0 !important;
  overflow-x: auto;
}
.nav-tabs.nav-tabs-widget .nav-link {
  border: 2px dashed #e7e7e8;
}
@media (min-width: 768px) {
  .nav-tabs.nav-tabs-widget .nav-link {
    height: 92px !important;
    width: 110px !important;
    border-radius: 0.375rem;
  }
}
@media (max-width: 767.98px) {
  .nav-tabs.nav-tabs-widget .nav-link {
    border: 0 !important;
    padding: 0;
  }
}
.nav-tabs.nav-tabs-widget .nav-link.active {
  border-style: solid;
  border-color: #9055fd;
}
.nav-tabs.nav-tabs-widget .nav-link.active .avatar-initial {
  background-color: #e7daff !important;
  color: #9055fd !important;
}
.nav-tabs.nav-tabs-widget .tab-slider {
  display: none;
}
.nav-tabs.nav-tabs-widget + .tab-content .tab-pane {
  transition: unset;
  -webkit-transform: none !important;
          transform: none !important;
}

.nav-scrollable {
  display: -webkit-inline-box;
  display: -moz-inline-box;
  width: 100%;
  overflow-y: auto;
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
}

.nav-tabs {
  position: relative;
}
.nav-tabs .tab-slider {
  height: 2px;
  border-radius: 2px;
  position: absolute;
  transition: all 0.2s linear;
}
.nav-align-left .nav-tabs .tab-slider, .nav-align-right .nav-tabs .tab-slider {
  width: 2px !important;
}
.nav-tabs .nav-link {
  background-clip: padding-box;
  border-radius: 0;
}

.nav-pills .nav-link {
  padding: 0.5rem 1.375rem;
}

.nav-sm > .nav .nav-link, .nav-sm.nav .nav-link {
  padding: 0.3125rem 0.875rem;
  font-size: 0.8125rem;
  line-height: 1.2;
}

.nav-lg > .nav .nav-link, .nav-lg.nav .nav-link {
  padding: 0.875rem 1.3125rem;
  font-size: 1.0625rem;
  line-height: 1.5;
}

.nav-align-top,
.nav-align-right,
.nav-align-bottom,
.nav-align-left {
  display: -ms-flexbox;
  display: flex;
}
.nav-align-top > .nav,
.nav-align-top > div > .nav,
.nav-align-right > .nav,
.nav-align-right > div > .nav,
.nav-align-bottom > .nav,
.nav-align-bottom > div > .nav,
.nav-align-left > .nav,
.nav-align-left > div > .nav {
  z-index: 1;
}

.nav-align-right,
.nav-align-left {
  -ms-flex-align: stretch;
      align-items: stretch;
}
.nav-align-right > .nav,
.nav-align-right > div > .nav,
.nav-align-left > .nav,
.nav-align-left > div > .nav {
  -ms-flex-positive: 0;
      flex-grow: 0;
  -ms-flex-direction: column;
      flex-direction: column;
  border-bottom-width: 0;
}
.nav-align-right > .nav .nav-item,
.nav-align-right > div > .nav .nav-item,
.nav-align-left > .nav .nav-item,
.nav-align-left > div > .nav .nav-item {
  margin: 0 0 0.125rem 0 !important;
}
.nav-align-right > .tab-content,
.nav-align-left > .tab-content {
  -ms-flex-positive: 1;
      flex-grow: 1;
}
.nav-align-right > .tab-content .tab-pane,
.nav-align-left > .tab-content .tab-pane {
  -webkit-transform: translateY(-30px);
          transform: translateY(-30px);
}
.nav-align-right > .tab-content .tab-pane.show,
.nav-align-left > .tab-content .tab-pane.show {
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
}

.nav-align-top {
  -ms-flex-direction: column;
      flex-direction: column;
}
.nav-align-top .nav-tabs ~ .tab-content {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

.nav-align-top > .tab-content .tab-pane,
.nav-align-bottom > .tab-content .tab-pane {
  -webkit-transform: translateX(-30px);
          transform: translateX(-30px);
}
.nav-align-top > .tab-content .tab-pane.show,
.nav-align-bottom > .tab-content .tab-pane.show {
  -webkit-transform: translateX(0px) !important;
          transform: translateX(0px) !important;
}

.nav-align-right {
  -ms-flex-direction: row-reverse;
      flex-direction: row-reverse;
}
.nav-align-right .nav-tabs {
  position: relative;
}
.nav-align-right .nav-tabs .tab-slider {
  left: 0;
}
.nav-align-right .nav-tabs ~ .tab-content {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.card .nav-align-right .nav-tabs ~ .tab-content {
  border-right: var(--bs-border-width) solid #e7e7e8;
}
.nav-align-right > .nav .nav-item,
.nav-align-right > div > .nav .nav-item {
  margin-left: -1px;
  margin-bottom: 0;
}
.nav-align-right .nav-link {
  text-align: right;
  -ms-flex-pack: end;
      justify-content: end;
}

.nav-align-bottom {
  -ms-flex-direction: column-reverse;
      flex-direction: column-reverse;
}
.nav-align-bottom > .nav .nav-item,
.nav-align-bottom > div > .nav .nav-item {
  margin-bottom: 0;
  margin-top: -1px;
}
.nav-align-bottom .nav-tabs ~ .tab-content {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.nav-align-bottom .nav-tabs .tab-slider {
  bottom: inherit !important;
}

.nav-align-left .nav-tabs {
  position: relative;
}
.nav-align-left .nav-tabs ~ .tab-content {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.card .nav-align-left .nav-tabs ~ .tab-content {
  border-left: var(--bs-border-width) solid #e7e7e8;
}
.nav-align-left > .nav .nav-item,
.nav-align-left > div > .nav .nav-item {
  margin-right: -1px;
  margin-bottom: 0;
}
.nav-align-left .nav-link {
  text-align: left;
  -ms-flex-pack: start;
      justify-content: start;
}

.nav-align-top > .tab-content,
.nav-align-right > .tab-content,
.nav-align-bottom > .tab-content,
.nav-align-left > .tab-content {
  -ms-flex-negative: 1;
      flex-shrink: 1;
  box-shadow: 0 0.375rem 1rem 0 rgba(58, 53, 65, 0.12);
  background-clip: padding-box;
  background: #fff;
}
.card .nav-align-top > .tab-content,
.card .nav-align-right > .tab-content,
.card .nav-align-bottom > .tab-content,
.card .nav-align-left > .tab-content {
  background: transparent;
}

.card .tab-content {
  box-shadow: none !important;
}

.pagination-secondary .page-item.active .page-link, .pagination-secondary .page-item.active .page-link:hover, .pagination-secondary .page-item.active .page-link:focus,
.pagination-secondary.pagination li.active > a:not(.page-link),
.pagination-secondary.pagination li.active > a:not(.page-link):hover,
.pagination-secondary.pagination li.active > a:not(.page-link):focus {
  border-color: #8a8d93;
  background-color: #8a8d93;
  color: #fff;
}
.pagination-secondary .page-item.active .page-link.waves-effect .waves-ripple,
.pagination-secondary.pagination li.active > a:not(.page-link).waves-effect .waves-ripple {
  background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}

.pagination-outline-secondary .page-item.active .page-link, .pagination-outline-secondary .page-item.active .page-link:hover, .pagination-outline-secondary .page-item.active .page-link:focus,
.pagination-outline-secondary.pagination li.active > a:not(.page-link),
.pagination-outline-secondary.pagination li.active > a:not(.page-link):hover,
.pagination-outline-secondary.pagination li.active > a:not(.page-link):focus {
  border-color: #c5c6c9;
  color: #8a8d93;
  background-color: #f6f6f6;
}
.pagination-outline-secondary .page-item.active .page-link.waves-effect .waves-ripple,
.pagination-outline-secondary.pagination li.active > a:not(.page-link).waves-effect .waves-ripple {
  background: radial-gradient(rgba(138, 141, 147, 0.2) 0, rgba(138, 141, 147, 0.3) 40%, rgba(138, 141, 147, 0.4) 50%, rgba(138, 141, 147, 0.5) 60%, rgba(58, 53, 65, 0) 70%);
}

.pagination-success .page-item.active .page-link, .pagination-success .page-item.active .page-link:hover, .pagination-success .page-item.active .page-link:focus,
.pagination-success.pagination li.active > a:not(.page-link),
.pagination-success.pagination li.active > a:not(.page-link):hover,
.pagination-success.pagination li.active > a:not(.page-link):focus {
  border-color: #56ca00;
  background-color: #56ca00;
  color: #fff;
}
.pagination-success .page-item.active .page-link.waves-effect .waves-ripple,
.pagination-success.pagination li.active > a:not(.page-link).waves-effect .waves-ripple {
  background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}

.pagination-outline-success .page-item.active .page-link, .pagination-outline-success .page-item.active .page-link:hover, .pagination-outline-success .page-item.active .page-link:focus,
.pagination-outline-success.pagination li.active > a:not(.page-link),
.pagination-outline-success.pagination li.active > a:not(.page-link):hover,
.pagination-outline-success.pagination li.active > a:not(.page-link):focus {
  border-color: #abe580;
  color: #56ca00;
  background-color: #f1fbeb;
}
.pagination-outline-success .page-item.active .page-link.waves-effect .waves-ripple,
.pagination-outline-success.pagination li.active > a:not(.page-link).waves-effect .waves-ripple {
  background: radial-gradient(rgba(86, 202, 0, 0.2) 0, rgba(86, 202, 0, 0.3) 40%, rgba(86, 202, 0, 0.4) 50%, rgba(86, 202, 0, 0.5) 60%, rgba(58, 53, 65, 0) 70%);
}

.pagination-info .page-item.active .page-link, .pagination-info .page-item.active .page-link:hover, .pagination-info .page-item.active .page-link:focus,
.pagination-info.pagination li.active > a:not(.page-link),
.pagination-info.pagination li.active > a:not(.page-link):hover,
.pagination-info.pagination li.active > a:not(.page-link):focus {
  border-color: #16b1ff;
  background-color: #16b1ff;
  color: #fff;
}
.pagination-info .page-item.active .page-link.waves-effect .waves-ripple,
.pagination-info.pagination li.active > a:not(.page-link).waves-effect .waves-ripple {
  background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}

.pagination-outline-info .page-item.active .page-link, .pagination-outline-info .page-item.active .page-link:hover, .pagination-outline-info .page-item.active .page-link:focus,
.pagination-outline-info.pagination li.active > a:not(.page-link),
.pagination-outline-info.pagination li.active > a:not(.page-link):hover,
.pagination-outline-info.pagination li.active > a:not(.page-link):focus {
  border-color: #8bd8ff;
  color: #16b1ff;
  background-color: #ecf9ff;
}
.pagination-outline-info .page-item.active .page-link.waves-effect .waves-ripple,
.pagination-outline-info.pagination li.active > a:not(.page-link).waves-effect .waves-ripple {
  background: radial-gradient(rgba(22, 177, 255, 0.2) 0, rgba(22, 177, 255, 0.3) 40%, rgba(22, 177, 255, 0.4) 50%, rgba(22, 177, 255, 0.5) 60%, rgba(58, 53, 65, 0) 70%);
}

.pagination-warning .page-item.active .page-link, .pagination-warning .page-item.active .page-link:hover, .pagination-warning .page-item.active .page-link:focus,
.pagination-warning.pagination li.active > a:not(.page-link),
.pagination-warning.pagination li.active > a:not(.page-link):hover,
.pagination-warning.pagination li.active > a:not(.page-link):focus {
  border-color: #ffb400;
  background-color: #ffb400;
  color: #fff;
}
.pagination-warning .page-item.active .page-link.waves-effect .waves-ripple,
.pagination-warning.pagination li.active > a:not(.page-link).waves-effect .waves-ripple {
  background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}

.pagination-outline-warning .page-item.active .page-link, .pagination-outline-warning .page-item.active .page-link:hover, .pagination-outline-warning .page-item.active .page-link:focus,
.pagination-outline-warning.pagination li.active > a:not(.page-link),
.pagination-outline-warning.pagination li.active > a:not(.page-link):hover,
.pagination-outline-warning.pagination li.active > a:not(.page-link):focus {
  border-color: #ffda80;
  color: #ffb400;
  background-color: #fff9eb;
}
.pagination-outline-warning .page-item.active .page-link.waves-effect .waves-ripple,
.pagination-outline-warning.pagination li.active > a:not(.page-link).waves-effect .waves-ripple {
  background: radial-gradient(rgba(255, 180, 0, 0.2) 0, rgba(255, 180, 0, 0.3) 40%, rgba(255, 180, 0, 0.4) 50%, rgba(255, 180, 0, 0.5) 60%, rgba(58, 53, 65, 0) 70%);
}

.pagination-danger .page-item.active .page-link, .pagination-danger .page-item.active .page-link:hover, .pagination-danger .page-item.active .page-link:focus,
.pagination-danger.pagination li.active > a:not(.page-link),
.pagination-danger.pagination li.active > a:not(.page-link):hover,
.pagination-danger.pagination li.active > a:not(.page-link):focus {
  border-color: #ff4c51;
  background-color: #ff4c51;
  color: #fff;
}
.pagination-danger .page-item.active .page-link.waves-effect .waves-ripple,
.pagination-danger.pagination li.active > a:not(.page-link).waves-effect .waves-ripple {
  background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}

.pagination-outline-danger .page-item.active .page-link, .pagination-outline-danger .page-item.active .page-link:hover, .pagination-outline-danger .page-item.active .page-link:focus,
.pagination-outline-danger.pagination li.active > a:not(.page-link),
.pagination-outline-danger.pagination li.active > a:not(.page-link):hover,
.pagination-outline-danger.pagination li.active > a:not(.page-link):focus {
  border-color: #ffa6a8;
  color: #ff4c51;
  background-color: #fff1f1;
}
.pagination-outline-danger .page-item.active .page-link.waves-effect .waves-ripple,
.pagination-outline-danger.pagination li.active > a:not(.page-link).waves-effect .waves-ripple {
  background: radial-gradient(rgba(255, 76, 81, 0.2) 0, rgba(255, 76, 81, 0.3) 40%, rgba(255, 76, 81, 0.4) 50%, rgba(255, 76, 81, 0.5) 60%, rgba(58, 53, 65, 0) 70%);
}

.pagination-dark .page-item.active .page-link, .pagination-dark .page-item.active .page-link:hover, .pagination-dark .page-item.active .page-link:focus,
.pagination-dark.pagination li.active > a:not(.page-link),
.pagination-dark.pagination li.active > a:not(.page-link):hover,
.pagination-dark.pagination li.active > a:not(.page-link):focus {
  border-color: #4b4b4b;
  background-color: #4b4b4b;
  color: #fff;
}
.pagination-dark .page-item.active .page-link.waves-effect .waves-ripple,
.pagination-dark.pagination li.active > a:not(.page-link).waves-effect .waves-ripple {
  background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}

.pagination-outline-dark .page-item.active .page-link, .pagination-outline-dark .page-item.active .page-link:hover, .pagination-outline-dark .page-item.active .page-link:focus,
.pagination-outline-dark.pagination li.active > a:not(.page-link),
.pagination-outline-dark.pagination li.active > a:not(.page-link):hover,
.pagination-outline-dark.pagination li.active > a:not(.page-link):focus {
  border-color: #a5a5a5;
  color: #4b4b4b;
  background-color: #f1f1f1;
}
.pagination-outline-dark .page-item.active .page-link.waves-effect .waves-ripple,
.pagination-outline-dark.pagination li.active > a:not(.page-link).waves-effect .waves-ripple {
  background: radial-gradient(rgba(75, 75, 75, 0.2) 0, rgba(75, 75, 75, 0.3) 40%, rgba(75, 75, 75, 0.4) 50%, rgba(75, 75, 75, 0.5) 60%, rgba(58, 53, 65, 0) 70%);
}

.pagination-gray .page-item.active .page-link, .pagination-gray .page-item.active .page-link:hover, .pagination-gray .page-item.active .page-link:focus,
.pagination-gray.pagination li.active > a:not(.page-link),
.pagination-gray.pagination li.active > a:not(.page-link):hover,
.pagination-gray.pagination li.active > a:not(.page-link):focus {
  border-color: rgba(58, 53, 65, 0.06);
  background-color: rgba(58, 53, 65, 0.06);
  color: #fff;
}
.pagination-gray .page-item.active .page-link.waves-effect .waves-ripple,
.pagination-gray.pagination li.active > a:not(.page-link).waves-effect .waves-ripple {
  background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}

.pagination-outline-gray .page-item.active .page-link, .pagination-outline-gray .page-item.active .page-link:hover, .pagination-outline-gray .page-item.active .page-link:focus,
.pagination-outline-gray.pagination li.active > a:not(.page-link),
.pagination-outline-gray.pagination li.active > a:not(.page-link):hover,
.pagination-outline-gray.pagination li.active > a:not(.page-link):focus {
  border-color: #9d9aa0;
  color: rgba(58, 53, 65, 0.06);
  background-color: #efeff0;
}
.pagination-outline-gray .page-item.active .page-link.waves-effect .waves-ripple,
.pagination-outline-gray.pagination li.active > a:not(.page-link).waves-effect .waves-ripple {
  background: radial-gradient(rgba(58, 53, 65, 0.2) 0, rgba(58, 53, 65, 0.3) 40%, rgba(58, 53, 65, 0.4) 50%, rgba(58, 53, 65, 0.5) 60%, rgba(58, 53, 65, 0) 70%);
}

.page-item.first .page-link, .page-item.last .page-link, .page-item.next .page-link, .page-item.prev .page-link, .page-item.previous .page-link {
  padding-top: 0.321rem;
  padding-bottom: 0.321rem;
}
.page-item.disabled .page-link {
  border-color: #d4d3d5;
}

.page-link,
.page-link > a {
  border-radius: 0.3125rem;
  line-height: 1;
  text-align: center;
  min-width: calc(1.8755rem + calc(var(--bs-border-width) * 2));
}
.page-link:focus,
.page-link > a:focus {
  color: #544f5a;
}

.pagination:not([class*=pagination-outline-]) .page-link {
  border-color: transparent;
}
.pagination:not([class*=pagination-outline-]) .page-item.disabled .page-link {
  background-color: transparent;
}
.pagination:not([class*=pagination-outline-]) .page-item .page-link.disabled {
  background-color: transparent;
}

.page-link.btn-primary {
  box-shadow: none !important;
}

.pagination.pagination-rounded .page-item a {
  border-radius: 0.3125rem;
}

.pagination-lg .page-link,
.pagination-lg > li > a:not(.page-link) {
  min-width: calc(2.3765rem + calc(var(--bs-border-width) * 2));
}

.pagination-lg > .page-item.first .page-link, .pagination-lg > .page-item.last .page-link, .pagination-lg > .page-item.next .page-link, .pagination-lg > .page-item.prev .page-link, .pagination-lg > .page-item.previous .page-link {
  padding-top: 0.502rem;
  padding-bottom: 0.502rem;
}

.pagination-sm .page-link,
.pagination-sm > li > a:not(.page-link) {
  min-width: calc(1.5005rem + calc(var(--bs-border-width) * 2));
}

.pagination-sm > .page-item.first .page-link, .pagination-sm > .page-item.last .page-link, .pagination-sm > .page-item.next .page-link, .pagination-sm > .page-item.prev .page-link, .pagination-sm > .page-item.previous .page-link {
  padding-top: 0.27rem;
  padding-bottom: 0.27rem;
}

.alert-secondary {
  background-color: #f1f1f2;
  border-color: #f1f1f2;
  color: #7c7f84;
}
.alert-secondary .btn-close {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%237c7f84'><path d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/></svg>");
}
.alert-secondary .alert-link {
  color: #7c7f84;
}

.alert-secondary hr {
  background-color: #7c7f84 !important;
}

.alert-success {
  background-color: #ebf9e0;
  border-color: #ebf9e0;
  color: #4db600;
}
.alert-success .btn-close {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%234db600'><path d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/></svg>");
}
.alert-success .alert-link {
  color: #4db600;
}

.alert-success hr {
  background-color: #4db600 !important;
}

.alert-info {
  background-color: #e3f6ff;
  border-color: #e3f6ff;
  color: #149fe6;
}
.alert-info .btn-close {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23149fe6'><path d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/></svg>");
}
.alert-info .alert-link {
  color: #149fe6;
}

.alert-info hr {
  background-color: #149fe6 !important;
}

.alert-warning {
  background-color: #fff6e0;
  border-color: #fff6e0;
  color: #e6a200;
}
.alert-warning .btn-close {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23e6a200'><path d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/></svg>");
}
.alert-warning .alert-link {
  color: #e6a200;
}

.alert-warning hr {
  background-color: #e6a200 !important;
}

.alert-danger {
  background-color: #ffeaea;
  border-color: #ffeaea;
  color: #e64449;
}
.alert-danger .btn-close {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23e64449'><path d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/></svg>");
}
.alert-danger .alert-link {
  color: #e64449;
}

.alert-danger hr {
  background-color: #e64449 !important;
}

.alert-dark {
  background-color: #e9e9e9;
  border-color: #e9e9e9;
  color: #444444;
}
.alert-dark .btn-close {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23444444'><path d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/></svg>");
}
.alert-dark .alert-link {
  color: #444444;
}

.alert-dark hr {
  background-color: #444444 !important;
}

.alert-gray {
  background-color: rgba(254, 254, 254, 0.8872);
  border-color: rgba(254, 254, 254, 0.8872);
  color: rgba(13, 12, 14, 0.154);
}
.alert-gray .btn-close {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='rgba(13, 12, 14, 0.154)'><path d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/></svg>");
}
.alert-gray .alert-link {
  color: rgba(13, 12, 14, 0.154);
}

.alert-gray hr {
  background-color: rgba(13, 12, 14, 0.154) !important;
}

.alert-dismissible .btn-close {
  padding: 1.10902rem 1.114rem;
}

.modal-open .tooltip {
  z-index: 1092;
}

.modal-open .popover {
  z-index: 1091;
}

.popover {
  box-shadow: 0 0.25rem 0.5rem rgba(58, 53, 65, 0.1);
}
.popover .popover-header {
  padding-bottom: 0;
  font-size: 1.25rem;
}
.popover .popover-body {
  padding-top: 1rem;
}
.popover .popover-arrow {
  z-index: 1;
}
.popover.bs-popover-auto[data-popper-placement=bottom] > .popover-arrow::after {
  top: 2px;
}
.popover.bs-popover-auto[data-popper-placement=bottom] > .popover-arrow:before {
  top: 1px;
}

.form-label,
.col-form-label {
  text-transform: inherit;
  letter-spacing: inherit;
}

.form-label-lg {
  font-size: 1.0625rem;
}

.form-label-sm {
  font-size: 0.8125rem;
}

.form-control {
  padding: calc(0.5rem - 1px) calc(0.875rem - 1px);
}
.form-control:hover:not([disabled]):not([focus]) {
  border-color: #b4b2b7;
}
.form-control:focus {
  border-width: 2px;
  padding: calc(0.5rem - 2px) calc(0.875rem - 2px);
}
.form-control.form-control-lg {
  padding: calc(0.5rem - 1px) calc(1.25rem - 1px);
}
.form-control.form-control-lg:focus {
  padding: calc(0.5rem - 2px) calc(1.25rem - 2px);
}
.form-control.form-control-sm {
  padding: calc(0.375rem - 1px) calc(0.625rem - 1px);
}
.form-control.form-control-sm:focus {
  padding: calc(0.375rem - 2px) calc(0.625rem - 2px);
}

.input-group:has(button) .form-control {
  padding: 0.5rem 0.875rem !important;
  border-width: 1px !important;
}

.form-select {
  background-clip: padding-box;
  padding: calc(0.5rem - 1px) calc(1.96875rem - 1px) calc(0.5rem - 1px) calc(0.875rem - 1px);
}
.form-select:hover:not([disabled]):not([focus]) {
  border-color: #b4b2b7;
}
.form-select:focus {
  border-width: 2px;
  padding: calc(0.5rem - 2px) calc(1.96875rem - 2px) calc(0.5rem - 2px) calc(0.875rem - 2px);
  background-position: right calc(0.875rem - 1px) center;
}
.form-select.form-select-lg {
  padding: calc(0.5rem - 1px) calc(2.8125rem - 1px) calc(0.5rem - 1px) calc(1.25rem - 1px);
}
.form-select.form-select-lg:focus {
  padding: calc(0.5rem - 2px) calc(2.8125rem - 2px) calc(0.5rem - 2px) calc(1.25rem - 2px);
  background-position: right calc(0.875rem - 1px) center;
}
.form-select.form-select-sm {
  min-height: 2.22rem;
  padding: calc(0.375rem - 1px) calc(1.40625rem - 1px) calc(0.375rem - 1px) calc(0.625rem - 1px);
}
.form-select.form-select-sm:focus {
  padding: calc(0.375rem - 2px) calc(1.40625rem - 2px) calc(0.375rem - 2px) calc(0.625rem - 2px);
  background-position: right calc(0.875rem - 1px) center;
}

.form-check-input {
  cursor: pointer;
}

.form-check {
  position: relative;
}

.form-check:not(.form-switch) .form-check-input,
.dt-checkboxes-cell .form-check-input {
  position: relative;
  transition: all 0.2s;
}
.form-check:not(.form-switch) .form-check-input::after,
.dt-checkboxes-cell .form-check-input::after {
  content: "";
  position: absolute;
  top: -0.125rem;
  left: -2px;
  z-index: 1;
  display: block;
  width: 1.2em;
  height: 1.2em;
  border-radius: 50%;
  opacity: 0;
  transition: all 0.2s;
  -webkit-transform-origin: center;
          transform-origin: center;
  -webkit-transform: scale(0) translateZ(0);
          transform: scale(0) translateZ(0);
}
.form-check:not(.form-switch) .form-check-input[type=checkbox],
.dt-checkboxes-cell .form-check-input[type=checkbox] {
  background-size: 1.375rem;
}
.form-check:not(.form-switch) .form-check-input[type=checkbox]:not(:checked):not(:indeterminate),
.dt-checkboxes-cell .form-check-input[type=checkbox]:not(:checked):not(:indeterminate) {
  background-size: 0rem;
}
.form-check:not(.form-switch) .form-check-input[type=radio],
.dt-checkboxes-cell .form-check-input[type=radio] {
  background-size: 1rem;
}
.form-check:not(.form-switch) .form-check-input[type=radio]:not(:checked),
.dt-checkboxes-cell .form-check-input[type=radio]:not(:checked) {
  background-size: 0.75rem;
}
.form-check:not(.form-switch) .form-check-input:active::after, .form-check:not(.form-switch) .form-check-input:hover::after,
.dt-checkboxes-cell .form-check-input:active::after,
.dt-checkboxes-cell .form-check-input:hover::after {
  opacity: 1;
  -webkit-transform: scale(2) translateZ(0);
          transform: scale(2) translateZ(0);
}
.form-check:not(.form-switch) .form-check-input:disabled::after, .form-check:not(.form-switch) .form-check-input[disabled]::after,
.dt-checkboxes-cell .form-check-input:disabled::after,
.dt-checkboxes-cell .form-check-input[disabled]::after {
  display: none;
}

.form-range::-webkit-slider-thumb {
  box-shadow: 0 0.125rem 0.25rem rgba(58, 53, 65, 0.08);
}
.form-range::-moz-range-thumb {
  box-shadow: 0 0.125rem 0.25rem rgba(58, 53, 65, 0.08);
}
.form-range:disabled::-webkit-slider-runnable-track {
  background-color: #b4b2b7;
}
.form-range:disabled::-moz-range-track {
  background-color: #b4b2b7;
}

.input-group .input-group-text {
  padding: calc(0.5rem - 1px) calc(0.875rem - 1px);
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .input-group .input-group-text {
    transition: none;
  }
}
.input-group:focus-within .input-group-text {
  border-width: 2px;
  padding: calc(0.5rem - 2px) calc(0.875rem - 2px);
}
.input-group:focus-within .form-control,
.input-group:focus-within .form-select {
  border-width: 2px;
  padding: calc(0.5rem - 2px) calc(0.875rem - 1px);
}
.input-group.input-group-lg .input-group-text {
  padding: calc(0.5rem - 1px) calc(1.25rem - 1px);
}
.input-group.input-group-lg:focus-within .input-group-text {
  padding: calc(0.5rem - 1px) calc(1.25rem - 2px);
}
.input-group.input-group-lg:focus-within .form-control:not(:first-child),
.input-group.input-group-lg:focus-within .form-select:not(:first-child) {
  padding: calc(0.5rem - 1px) 1.25rem;
}
.input-group.input-group-sm .input-group-text {
  padding: calc(0.375rem - 1px) calc(0.625rem - 1px);
}
.input-group.input-group-sm:focus-within .input-group-text {
  padding: calc(0.375rem - 2px) calc(0.625rem - 2px);
}
.input-group.input-group-sm:focus-within .form-control:not(:first-child),
.input-group.input-group-sm:focus-within .form-select:not(:first-child) {
  padding: calc(0.375rem - 1px) 0.625rem;
}
.input-group.input-group-merge > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: -3px;
}
.input-group:not(.input-group-floating):focus-within > :not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
  margin-left: -2px;
}
.input-group:hover .input-group-text,
.input-group:hover .form-control {
  border-color: #b4b2b7;
}
.input-group:focus-within {
  box-shadow: none;
}
.input-group:focus-within .form-control,
.input-group:focus-within .input-group-text {
  box-shadow: none;
}
.input-group.disabled .input-group-text {
  background-color: #efeff0;
}

.input-group-text {
  background-clip: padding-box;
}
.input-group-text i {
  font-size: 0.9375rem;
}

.input-group-lg > .input-group-text i {
  font-size: 1.0625rem;
}

.input-group-sm > .input-group-text i {
  font-size: 0.8125rem;
}

.input-group-merge .input-group-text:first-child {
  border-right: 0;
}
.input-group-merge .input-group-text:last-child {
  border-left: 0;
}
.input-group-merge > .form-control:not(:first-child) {
  padding-left: 0 !important;
  border-left: 0;
}
.input-group-merge > .form-control:not(:last-child) {
  padding-right: 0 !important;
  border-right: 0;
}

.input-group-text {
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
@media (prefers-reduced-motion: reduce) {
  .input-group-text {
    transition: none;
  }
}

.form-floating.form-floating-outline > .form-control:focus,
.form-floating.form-floating-outline > .form-select:focus {
  border-width: 2px;
}
.form-floating.form-floating-outline > .form-control:not(:-moz-placeholder-shown), .form-floating.form-floating-outline > .form-select:not(:-moz-placeholder-shown) {
  padding-top: 0.7813rem;
  padding-bottom: 0.7813rem;
}
.form-floating.form-floating-outline > .form-control:not(:-ms-input-placeholder), .form-floating.form-floating-outline > .form-select:not(:-ms-input-placeholder) {
  padding-top: 0.7813rem;
  padding-bottom: 0.7813rem;
}
.form-floating.form-floating-outline > .form-control:focus, .form-floating.form-floating-outline > .form-control:not(:placeholder-shown),
.form-floating.form-floating-outline > .form-select:focus,
.form-floating.form-floating-outline > .form-select:not(:placeholder-shown) {
  padding-top: 0.7813rem;
  padding-bottom: 0.7813rem;
}
.form-floating.form-floating-outline > .form-control:focus::-webkit-input-placeholder, .form-floating.form-floating-outline > .form-control:not(:placeholder-shown)::-webkit-input-placeholder, .form-floating.form-floating-outline > .form-select:focus::-webkit-input-placeholder, .form-floating.form-floating-outline > .form-select:not(:placeholder-shown)::-webkit-input-placeholder {
  color: #b4b2b7;
}
.form-floating.form-floating-outline > .form-control:not(:-moz-placeholder-shown)::-moz-placeholder, .form-floating.form-floating-outline > .form-select:not(:-moz-placeholder-shown)::-moz-placeholder {
  color: #b4b2b7;
}
.form-floating.form-floating-outline > .form-control:focus::-moz-placeholder, .form-floating.form-floating-outline > .form-control:not(:placeholder-shown)::-moz-placeholder, .form-floating.form-floating-outline > .form-select:focus::-moz-placeholder, .form-floating.form-floating-outline > .form-select:not(:placeholder-shown)::-moz-placeholder {
  color: #b4b2b7;
}
.form-floating.form-floating-outline > .form-control:not(:-ms-input-placeholder):-ms-input-placeholder, .form-floating.form-floating-outline > .form-select:not(:-ms-input-placeholder):-ms-input-placeholder {
  color: #b4b2b7;
}
.form-floating.form-floating-outline > .form-control:focus:-ms-input-placeholder, .form-floating.form-floating-outline > .form-control:not(:placeholder-shown):-ms-input-placeholder, .form-floating.form-floating-outline > .form-select:focus:-ms-input-placeholder, .form-floating.form-floating-outline > .form-select:not(:placeholder-shown):-ms-input-placeholder {
  color: #b4b2b7;
}
.form-floating.form-floating-outline > .form-control:not(:-ms-input-placeholder)::-ms-input-placeholder, .form-floating.form-floating-outline > .form-select:not(:-ms-input-placeholder)::-ms-input-placeholder {
  color: #b4b2b7;
}
.form-floating.form-floating-outline > .form-control:focus::-ms-input-placeholder, .form-floating.form-floating-outline > .form-control:not(:placeholder-shown)::-ms-input-placeholder, .form-floating.form-floating-outline > .form-select:focus::-ms-input-placeholder, .form-floating.form-floating-outline > .form-select:not(:placeholder-shown)::-ms-input-placeholder {
  color: #b4b2b7;
}
.form-floating.form-floating-outline > .form-control:focus:-ms-input-placeholder, .form-floating.form-floating-outline > .form-control:not(:placeholder-shown):-ms-input-placeholder, .form-floating.form-floating-outline > .form-select:focus:-ms-input-placeholder, .form-floating.form-floating-outline > .form-select:not(:placeholder-shown):-ms-input-placeholder {
  color: #b4b2b7;
}
.form-floating.form-floating-outline > .form-control:not(:-ms-input-placeholder)::placeholder, .form-floating.form-floating-outline > .form-select:not(:-ms-input-placeholder)::placeholder {
  color: #b4b2b7;
}
.form-floating.form-floating-outline > .form-control:focus::-webkit-input-placeholder, .form-floating.form-floating-outline > .form-control:not(:placeholder-shown)::-webkit-input-placeholder, .form-floating.form-floating-outline > .form-select:focus::-webkit-input-placeholder, .form-floating.form-floating-outline > .form-select:not(:placeholder-shown)::-webkit-input-placeholder {
  color: #b4b2b7;
}
.form-floating.form-floating-outline > .form-control:focus::-moz-placeholder, .form-floating.form-floating-outline > .form-control:not(:placeholder-shown)::-moz-placeholder, .form-floating.form-floating-outline > .form-select:focus::-moz-placeholder, .form-floating.form-floating-outline > .form-select:not(:placeholder-shown)::-moz-placeholder {
  color: #b4b2b7;
}
.form-floating.form-floating-outline > .form-control:focus:-ms-input-placeholder, .form-floating.form-floating-outline > .form-control:not(:placeholder-shown):-ms-input-placeholder, .form-floating.form-floating-outline > .form-select:focus:-ms-input-placeholder, .form-floating.form-floating-outline > .form-select:not(:placeholder-shown):-ms-input-placeholder {
  color: #b4b2b7;
}
.form-floating.form-floating-outline > .form-control:focus::-ms-input-placeholder, .form-floating.form-floating-outline > .form-control:not(:placeholder-shown)::-ms-input-placeholder, .form-floating.form-floating-outline > .form-select:focus::-ms-input-placeholder, .form-floating.form-floating-outline > .form-select:not(:placeholder-shown)::-ms-input-placeholder {
  color: #b4b2b7;
}
.form-floating.form-floating-outline > .form-control:not(:-moz-placeholder-shown)::placeholder, .form-floating.form-floating-outline > .form-select:not(:-moz-placeholder-shown)::placeholder {
  color: #b4b2b7;
}
.form-floating.form-floating-outline > .form-control:not(:-ms-input-placeholder)::placeholder, .form-floating.form-floating-outline > .form-select:not(:-ms-input-placeholder)::placeholder {
  color: #b4b2b7;
}
.form-floating.form-floating-outline > .form-control:focus::placeholder, .form-floating.form-floating-outline > .form-control:not(:placeholder-shown)::placeholder,
.form-floating.form-floating-outline > .form-select:focus::placeholder,
.form-floating.form-floating-outline > .form-select:not(:placeholder-shown)::placeholder {
  color: #b4b2b7;
}
.form-floating.form-floating-outline > .form-control:not(:-moz-placeholder-shown) ~ label, .form-floating.form-floating-outline > .form-select:not(:-moz-placeholder-shown) ~ label {
  width: auto;
  height: auto;
  padding: 0 2px;
  margin-left: 0.7813rem;
  transform: scale(0.8) translateY(-0.7rem) translateX(-2px);
  opacity: 1;
}
.form-floating.form-floating-outline > .form-control:not(:-ms-input-placeholder) ~ label, .form-floating.form-floating-outline > .form-select:not(:-ms-input-placeholder) ~ label {
  width: auto;
  height: auto;
  padding: 0 2px;
  margin-left: 0.7813rem;
  transform: scale(0.8) translateY(-0.7rem) translateX(-2px);
  opacity: 1;
}
.form-floating.form-floating-outline > .form-control:focus ~ label, .form-floating.form-floating-outline > .form-control:not(:placeholder-shown) ~ label,
.form-floating.form-floating-outline > .form-select:focus ~ label,
.form-floating.form-floating-outline > .form-select:not(:placeholder-shown) ~ label {
  width: auto;
  height: auto;
  padding: 0 2px;
  margin-left: 0.7813rem;
  -webkit-transform: scale(0.8) translateY(-0.7rem) translateX(-2px);
          transform: scale(0.8) translateY(-0.7rem) translateX(-2px);
  opacity: 1;
}
.form-floating.form-floating-outline > .form-control:not(:-moz-placeholder-shown) ~ label:after, .form-floating.form-floating-outline > .form-select:not(:-moz-placeholder-shown) ~ label:after {
  content: "";
  position: absolute;
  height: 0.5rem;
  width: 100%;
  left: 0;
  top: 0.35rem;
  z-index: -1;
}
.form-floating.form-floating-outline > .form-control:not(:-ms-input-placeholder) ~ label:after, .form-floating.form-floating-outline > .form-select:not(:-ms-input-placeholder) ~ label:after {
  content: "";
  position: absolute;
  height: 0.5rem;
  width: 100%;
  left: 0;
  top: 0.35rem;
  z-index: -1;
}
.form-floating.form-floating-outline > .form-control:focus ~ label:after, .form-floating.form-floating-outline > .form-control:not(:placeholder-shown) ~ label:after,
.form-floating.form-floating-outline > .form-select:focus ~ label:after,
.form-floating.form-floating-outline > .form-select:not(:placeholder-shown) ~ label:after {
  content: "";
  position: absolute;
  height: 0.5rem;
  width: 100%;
  left: 0;
  top: 0.35rem;
  z-index: -1;
}
.form-floating.form-floating-outline > .form-control:-webkit-autofill,
.form-floating.form-floating-outline > .form-select:-webkit-autofill {
  padding-top: 0.7813rem;
  padding-bottom: 0.7813rem;
}
.form-floating.form-floating-outline > .form-control:-webkit-autofill ~ label,
.form-floating.form-floating-outline > .form-select:-webkit-autofill ~ label {
  -webkit-transform: scale(0.8) translateY(-0.7rem) translateX(-2px);
          transform: scale(0.8) translateY(-0.7rem) translateX(-2px);
  opacity: 1;
}
.form-floating.form-floating-outline:focus-within > .form-control:first-child,
.form-floating.form-floating-outline:focus-within > .form-select:first-child {
  padding: calc(0.7813rem - 1px) calc(0.7813rem - 1px);
}

.form-floating .form-control::-webkit-file-upload-button {
  padding: 0.7813rem 0.7813rem;
  margin: -0.7813rem -0.7813rem;
  -webkit-margin-end: 0.7813rem;
          margin-inline-end: 0.7813rem;
}

.form-floating .form-control::file-selector-button {
  padding: 0.7813rem 0.7813rem;
  margin: -0.7813rem -0.7813rem;
  -webkit-margin-end: 0.7813rem;
     -moz-margin-end: 0.7813rem;
          margin-inline-end: 0.7813rem;
}
.form-floating > label {
  width: 100%;
}

.modal-content {
  box-shadow: 0px 4px 18px 0px rgba(58, 53, 65, 0.14);
}
.modal-content .modal-header {
  padding-bottom: 0;
}
.modal-content .modal-header .modal-title {
  font-size: 1.25rem;
}
.modal-content .modal-footer {
  padding: 1.25rem 1.25rem;
  padding-top: 0;
}

.modal-onboarding .close-label {
  font-size: 0.8rem;
  position: absolute;
  top: 0.85rem;
  opacity: 1;
}
.modal-onboarding .close-label:hover {
  opacity: 0.75;
}
.modal-onboarding .onboarding-media {
  margin-bottom: 1rem;
}
.modal-onboarding .onboarding-media img {
  margin: 0 auto;
}
.modal-onboarding .onboarding-content {
  margin: 2rem;
}
.modal-onboarding form {
  margin-top: 2rem;
  text-align: left;
}
.modal-onboarding .carousel-indicators {
  bottom: -10px;
}
.modal-onboarding .carousel-control-prev,
.modal-onboarding .carousel-control-next {
  top: auto;
  bottom: 0.75rem;
  opacity: 1;
}
.modal-onboarding .carousel-control-prev {
  left: 1rem;
}
.modal-onboarding .onboarding-horizontal {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: justify;
      justify-content: space-between;
  -ms-flex-align: center;
      align-items: center;
}
.modal-onboarding .onboarding-horizontal .onboarding-media {
  margin: 2rem;
  margin-top: 0;
}
.modal-onboarding .onboarding-horizontal .carousel-control-prev {
  left: 0;
}
.modal-onboarding.animated .onboarding-media {
  -webkit-transform: translateY(10px) scale(0.8);
          transform: translateY(10px) scale(0.8);
  transition: all 0.5s cubic-bezier(0.25, 1.1, 0.5, 1.35);
  transition-delay: 0.3s;
  opacity: 0;
}
.modal-onboarding.animated .onboarding-content {
  -webkit-transform: translateY(40px);
          transform: translateY(40px);
  transition-delay: 0.1s;
  transition: all 0.4s ease;
  opacity: 0;
}
.modal-onboarding.animated .onboarding-title {
  opacity: 0;
  transition-delay: 0.5s;
  transition: all 0.5s cubic-bezier(0.25, 1.1, 0.5, 1.35);
  -webkit-transform: translateY(40px);
          transform: translateY(40px);
}
.modal-onboarding.animated .onboarding-info {
  opacity: 0;
  transition-delay: 0.6s;
  transition: all 0.5s cubic-bezier(0.25, 1.1, 0.5, 1.35);
  -webkit-transform: translateY(40px);
          transform: translateY(40px);
}
.modal-onboarding.animated form {
  opacity: 0;
  transition-delay: 0.7s;
  transition: all 0.5s ease;
  -webkit-transform: translateY(40px);
          transform: translateY(40px);
}
.modal-onboarding.animated.show .onboarding-media {
  -webkit-transform: translateY(0) scale(1);
          transform: translateY(0) scale(1);
  opacity: 1;
}
.modal-onboarding.animated.show .onboarding-content {
  -webkit-transform: translateY(0);
          transform: translateY(0);
  opacity: 1;
}
.modal-onboarding.animated.show .onboarding-title {
  -webkit-transform: translateY(0);
          transform: translateY(0);
  opacity: 1;
}
.modal-onboarding.animated.show .onboarding-info {
  opacity: 1;
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
}
.modal-onboarding.animated.show form {
  opacity: 1;
  -webkit-transform: translateY(0px);
          transform: translateY(0px);
}

.modal-top .modal-dialog {
  margin-top: 0;
}
.modal-top .modal-content {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

@media (max-width: 991.98px) {
  .modal-onboarding .onboarding-horizontal {
    -ms-flex-direction: column;
        flex-direction: column;
  }
}
@media (max-width: 767.98px) {
  .modal .modal-dialog:not(.modal-fullscreen) {
    padding: 0 0.75rem;
    padding-left: 0.75rem !important;
  }
  .modal .carousel-control-prev,
  .modal .carousel-control-next {
    display: none;
  }
}
@media (min-width: 576px) {
  .modal-content {
    box-shadow: 0px 4px 18px 0px rgba(58, 53, 65, 0.14);
  }
  .modal-sm .modal-dialog {
    max-width: 22.5rem;
  }
}
@media (min-width: 1200px) {
  .modal-xl .modal-dialog {
    max-width: 1140px;
  }
}
.breadcrumb-item,
.breadcrumb-item a {
  color: #89868d;
  line-height: 1.5;
}
.breadcrumb-item:hover, .breadcrumb-item:focus,
.breadcrumb-item a:hover,
.breadcrumb-item a:focus {
  color: #544f5a;
}

.breadcrumb-item.active a, .breadcrumb-item.active a:hover, .breadcrumb-item.active a:focus, .breadcrumb-item.active a:active {
  color: inherit;
}

.breadcrumb-style1 .breadcrumb-item + .breadcrumb-item::before,
.breadcrumb-style2 .breadcrumb-item + .breadcrumb-item::before {
  font-family: Material Design Icons;
}

.breadcrumb-style1 .breadcrumb-item + .breadcrumb-item::before {
  content: "\f0142";
  line-height: 1.5;
}

.breadcrumb-style2 .breadcrumb-item + .breadcrumb-item::before {
  content: "\f0ce0";
}

.list-group-item-secondary {
  border-color: #96989e;
  background-color: #f1f1f2;
  color: #7c7f84 !important;
}

a.list-group-item-secondary,
button.list-group-item-secondary {
  color: #7c7f84;
}
a.list-group-item-secondary:hover, a.list-group-item-secondary:focus,
button.list-group-item-secondary:hover,
button.list-group-item-secondary:focus {
  border-color: #96989e;
  background-color: #e5e5e6;
  color: #7c7f84;
}
a.list-group-item-secondary.active,
button.list-group-item-secondary.active {
  border-color: #8a8d93 !important;
  background-color: #8a8d93 !important;
  color: #fff !important;
}

.list-group-item-success {
  border-color: #67cf1a;
  background-color: #ebf9e0;
  color: #4db600 !important;
}

a.list-group-item-success,
button.list-group-item-success {
  color: #4db600;
}
a.list-group-item-success:hover, a.list-group-item-success:focus,
button.list-group-item-success:hover,
button.list-group-item-success:focus {
  border-color: #67cf1a;
  background-color: #dfedd5;
  color: #4db600;
}
a.list-group-item-success.active,
button.list-group-item-success.active {
  border-color: #56ca00 !important;
  background-color: #56ca00 !important;
  color: #fff !important;
}

.list-group-item-info {
  border-color: #2db9ff;
  background-color: #e3f6ff;
  color: #149fe6 !important;
}

a.list-group-item-info,
button.list-group-item-info {
  color: #149fe6;
}
a.list-group-item-info:hover, a.list-group-item-info:focus,
button.list-group-item-info:hover,
button.list-group-item-info:focus {
  border-color: #2db9ff;
  background-color: #d8eaf2;
  color: #149fe6;
}
a.list-group-item-info.active,
button.list-group-item-info.active {
  border-color: #16b1ff !important;
  background-color: #16b1ff !important;
  color: #fff !important;
}

.list-group-item-warning {
  border-color: #ffbc1a;
  background-color: #fff6e0;
  color: #e6a200 !important;
}

a.list-group-item-warning,
button.list-group-item-warning {
  color: #e6a200;
}
a.list-group-item-warning:hover, a.list-group-item-warning:focus,
button.list-group-item-warning:hover,
button.list-group-item-warning:focus {
  border-color: #ffbc1a;
  background-color: #f2ead5;
  color: #e6a200;
}
a.list-group-item-warning.active,
button.list-group-item-warning.active {
  border-color: #ffb400 !important;
  background-color: #ffb400 !important;
  color: #fff !important;
}

.list-group-item-danger {
  border-color: #ff5e62;
  background-color: #ffeaea;
  color: #e64449 !important;
}

a.list-group-item-danger,
button.list-group-item-danger {
  color: #e64449;
}
a.list-group-item-danger:hover, a.list-group-item-danger:focus,
button.list-group-item-danger:hover,
button.list-group-item-danger:focus {
  border-color: #ff5e62;
  background-color: #f2dede;
  color: #e64449;
}
a.list-group-item-danger.active,
button.list-group-item-danger.active {
  border-color: #ff4c51 !important;
  background-color: #ff4c51 !important;
  color: #fff !important;
}

.list-group-item-dark {
  border-color: #5d5d5d;
  background-color: #e9e9e9;
  color: #444444 !important;
}

a.list-group-item-dark,
button.list-group-item-dark {
  color: #444444;
}
a.list-group-item-dark:hover, a.list-group-item-dark:focus,
button.list-group-item-dark:hover,
button.list-group-item-dark:focus {
  border-color: #5d5d5d;
  background-color: #dddddd;
  color: #444444;
}
a.list-group-item-dark.active,
button.list-group-item-dark.active {
  border-color: #4b4b4b !important;
  background-color: #4b4b4b !important;
  color: #fff !important;
}

.list-group-item-gray {
  border-color: rgba(212, 211, 214, 0.154);
  background-color: rgba(254, 254, 254, 0.8872);
  color: rgba(13, 12, 14, 0.154) !important;
}

a.list-group-item-gray,
button.list-group-item-gray {
  color: rgba(13, 12, 14, 0.154);
}
a.list-group-item-gray:hover, a.list-group-item-gray:focus,
button.list-group-item-gray:hover,
button.list-group-item-gray:focus {
  border-color: rgba(212, 211, 214, 0.154);
  background-color: rgba(238, 238, 238, 0.89284);
  color: rgba(13, 12, 14, 0.154);
}
a.list-group-item-gray.active,
button.list-group-item-gray.active {
  border-color: rgba(58, 53, 65, 0.06) !important;
  background-color: rgba(58, 53, 65, 0.06) !important;
  color: #fff !important;
}

.list-group .list-group-item {
  font-size: 1rem;
}
.list-group .list-group-item-action:not(.active):active {
  background-color: #f7f7f7 !important;
}

.list-group.list-group-timeline {
  position: relative;
}
.list-group.list-group-timeline:before {
  background-color: #e7e7e8;
  position: absolute;
  content: "";
  width: 1px;
  height: 100%;
  top: 0;
  bottom: 0;
  left: 0.2rem;
}
.list-group.list-group-timeline .list-group-item {
  border: none;
  padding-left: 1.25rem;
}
.list-group.list-group-timeline .list-group-item:before {
  position: absolute;
  display: block;
  content: "";
  width: 7px;
  height: 7px;
  left: 0;
  top: 50%;
  margin-top: -3.5px;
  border-radius: 100%;
}
.list-group .list-group-item.active h1,
.list-group .list-group-item.active .h1,
.list-group .list-group-item.active h2,
.list-group .list-group-item.active .h2,
.list-group .list-group-item.active h3,
.list-group .list-group-item.active .h3,
.list-group .list-group-item.active h4,
.list-group .list-group-item.active .h4,
.list-group .list-group-item.active h5,
.list-group .list-group-item.active .h5,
.list-group .list-group-item.active h6,
.list-group .list-group-item.active .h6 {
  color: #544f5a;
}

.navbar {
  z-index: 2;
}
.navbar .dropdown:focus,
.navbar .dropdown-toggle:focus {
  outline: 0;
}
.navbar .navbar-toggler:focus {
  box-shadow: none;
}

.fixed-top {
  z-index: 1030;
}

.navbar.navbar-light {
  color: rgba(58, 53, 65, 0.5);
}

.navbar-light .navbar-nav .nav-link.disabled {
  color: rgba(58, 53, 65, 0.22) !important;
}

.navbar.navbar-dark {
  color: rgba(255, 255, 255, 0.8);
}

.navbar-dark .navbar-nav .nav-link.disabled {
  color: rgba(255, 255, 255, 0.4) !important;
}

.navbar-nav {
  --bs-nav-link-padding-y: calc(1rem / 2);
}

.navbar-collapse,
.navbar-brand,
.navbar-text {
  -ms-flex-negative: 1;
      flex-shrink: 1;
}

.navbar-dark hr {
  border-color: rgba(255, 255, 255, 0.1);
}

.navbar-light hr {
  border-color: rgba(58, 53, 65, 0.06);
}

.card {
  background-clip: padding-box;
  box-shadow: 0 0.375rem 1rem 0 rgba(58, 53, 65, 0.12);
}
.card .card-link {
  display: inline-block;
  text-transform: uppercase;
  font-weight: 500;
}
.card .card-header + .card-body,
.card .card-body + .card-footer {
  padding-top: 0.5rem;
}
.card[class*=card-border-shadow-] {
  position: relative;
  border-bottom: none;
  transition: all 0.2s ease-in-out;
  z-index: 1;
}
.card[class*=card-border-shadow-]::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-bottom-width: 2px;
  border-bottom-style: solid;
  border-radius: 0.375rem;
  transition: all 0.2s ease-in-out;
  z-index: -1;
}
.card[class*=card-border-shadow-]:hover {
  box-shadow: 0 0.25rem 0.5rem rgba(58, 53, 65, 0.1);
}
.card[class*=card-border-shadow-]:hover::after {
  border-bottom-width: 3px;
}
.card[class*=card-hover-border-] {
  border-width: 1px;
}
.card[class*=card-hover-border-] {
  border-width: 1px;
}

.card-action.card-fullscreen {
  display: block;
  z-index: 9999;
  position: fixed;
  width: 100% !important;
  height: 100% !important;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  overflow: auto;
  border: none;
  border-radius: 0;
}
.card-action .card-alert {
  position: absolute;
  width: 100%;
  z-index: 999;
}
.card-action .card-alert .alert {
  border-bottom-right-radius: 0px;
  border-bottom-left-radius: 0px;
}
.card-action .card-header.collapsed {
  border-bottom: 0;
}
.card-action .card-header {
  display: -ms-flexbox;
  display: flex;
  line-height: 1.47;
}
.card-action .card-header .card-action-title {
  -ms-flex-positive: 1;
      flex-grow: 1;
  margin-right: 0.5rem;
}
.card-action .card-header .card-action-element {
  -ms-flex-negative: 0;
      flex-shrink: 0;
  background-color: inherit;
  top: 1rem;
  right: 1.5rem;
  color: #89868d;
}
.card-action .card-header .card-action-element a {
  color: #544f5a;
}
.card-action .card-header .card-action-element a .collapse-icon::after {
  margin-top: -0.15rem;
}
.card-action .blockUI .sk-fold {
  margin: 0 auto;
}
.card-action .blockUI h5, .card-action .blockUI .h5 {
  color: #89868d;
  margin: 1rem 0 0 0;
}

.card-header,
.card-footer {
  border-color: rgba(58, 53, 65, 0.075);
}

.card hr {
  color: rgba(58, 53, 65, 0.075);
}

.card .row-bordered > [class*=" col "] .card .row-bordered > [class$=" col"], .card .row-bordered > [class*=" col "]::before, .card .row-bordered > [class*=" col "]::after,
.card .row-bordered > [class^="col "] .card .row-bordered > [class$=" col"],
.card .row-bordered > [class^="col "]::before,
.card .row-bordered > [class^="col "]::after,
.card .row-bordered > [class*=" col-"] .card .row-bordered > [class$=" col"],
.card .row-bordered > [class*=" col-"]::before,
.card .row-bordered > [class*=" col-"]::after,
.card .row-bordered > [class^=col-] .card .row-bordered > [class$=" col"],
.card .row-bordered > [class^=col-]::before,
.card .row-bordered > [class^=col-]::after,
.card .row-bordered > [class=col] .card .row-bordered > [class$=" col"],
.card .row-bordered > [class=col]::before,
.card .row-bordered > [class=col]::after {
  border-color: rgba(58, 53, 65, 0.075);
}

.card-header.header-elements,
.card-title.header-elements {
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  -ms-flex-align: center;
      align-items: center;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.card-header.card-header-elements {
  padding-top: 0.625rem;
  padding-bottom: 0.625rem;
}
.card-header .card-header-elements {
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
}

.card-header-elements,
.card-title-elements {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -ms-flex-align: center;
      align-items: center;
}
.card-header-elements + .card-header-elements,
.card-header-elements > * + *,
.card-header-elements + .card-title-elements,
.card-title-elements > * + *,
.card-title-elements + .card-header-elements,
.card-title-elements + .card-title-elements {
  margin-left: 0.25rem;
}

.card-title:not(h1):not(.h1):not(h2):not(.h2):not(h3):not(.h3):not(h4):not(.h4):not(h5):not(.h5):not(h6):not(.h6) {
  color: #89868d;
}

.card-img-left {
  border-top-left-radius: 0.375rem;
  border-bottom-left-radius: 0.375rem;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
@media (max-width: 767.98px) {
  .card-img-left {
    border-top-left-radius: 0.375rem;
    border-top-right-radius: 0.375rem;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
}

.card-img-right {
  border-top-right-radius: 0.375rem;
  border-bottom-right-radius: 0.375rem;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
@media (max-width: 767.98px) {
  .card-img-right {
    border-bottom-right-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
}

.card > .list-group .list-group-item {
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}

.card .card-separator {
  border-right: 1px solid #e7e7e8;
}

@media (max-width: 991.98px) {
  .card .card-widget-separator-wrapper .card-widget-separator .card-widget-2.border-end {
    border-right: none !important;
    border-left: none !important;
  }
}
@media (max-width: 575.98px) {
  .card .card-widget-separator-wrapper .card-widget-separator .card-widget-1.border-end,
  .card .card-widget-separator-wrapper .card-widget-separator .card-widget-2.border-end,
  .card .card-widget-separator-wrapper .card-widget-separator .card-widget-3.border-end {
    border-right: none !important;
    border-left: none !important;
    border-bottom: 1px solid #e7e7e8;
  }
}

@media (max-width: 767.98px) {
  .card .card-separator {
    border-bottom: 1px solid #e7e7e8;
    padding-bottom: 1.25rem;
    border-right-width: 0 !important;
  }
}
.accordion-arrow-left .accordion-button.collapsed:focus {
  box-shadow: none;
}
.accordion-arrow-left .accordion-item {
  border: 0;
  box-shadow: none;
}
.accordion-arrow-left .accordion-item:not(:first-child) .accordion-header {
  border-top: 1px solid #e7e7e8;
}
.accordion-arrow-left .accordion-item.active + .accordion-item .accordion-header {
  border-top: 1px solid #e7e7e8;
}
.accordion-arrow-left .accordion-item.active {
  box-shadow: none;
}
.accordion-arrow-left .accordion-item.active:not(:first-child) {
  margin-top: 0;
}
.accordion-arrow-left .accordion-item.active:not(:last-child) {
  margin-bottom: 0;
}
.accordion-arrow-left .accordion-button {
  padding: var(--bs-accordion-btn-padding-y) 0;
}
.accordion-arrow-left .accordion-button::after {
  content: "";
  display: none;
}
.accordion-arrow-left .accordion-button:not(.collapsed) {
  color: var(--bs-accordion-active-color);
  background-color: var(--bs-accordion-active-bg);
  box-shadow: none;
}
.accordion-arrow-left .accordion-button:not(.collapsed)::before {
  background-image: var(--bs-accordion-btn-active-icon);
  -webkit-transform: rotate(-180deg);
          transform: rotate(-180deg);
}
.accordion-arrow-left .accordion-button:not(.collapsed)::after {
  background-image: none;
  -webkit-transform: none;
          transform: none;
}
.accordion-arrow-left .accordion-button::before {
  -ms-flex-negative: 0;
      flex-shrink: 0;
  width: var(--bs-accordion-btn-icon-width);
  height: var(--bs-accordion-btn-icon-width);
  margin-left: 0;
  margin-right: 1.1rem;
  content: "";
  background-image: var(--bs-accordion-btn-icon);
  background-repeat: no-repeat;
  background-size: var(--bs-accordion-btn-icon-width);
  transition: var(--bs-accordion-btn-icon-transition);
}
@media (prefers-reduced-motion: reduce) {
  .accordion-arrow-left .accordion-button::before {
    transition: none;
  }
}

.accordion[class*=accordion-solid-] .accordion-button::after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'  fill='%23fff' viewBox='0 0 24 24'%3E%3Ctitle%3Echevron-down%3C/title%3E%3Cpath d='M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z' /%3E%3C/svg%3E");
}

.accordion[class*=accordion-border-solid-] .accordion-button.collapsed::after {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg'  fill='%23fff' viewBox='0 0 24 24'%3E%3Ctitle%3Echevron-down%3C/title%3E%3Cpath d='M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z' /%3E%3C/svg%3E");
}

.accordion.accordion-without-arrow .accordion-button::after {
  background-image: none !important;
}

.accordion .accordion-body {
  padding-top: 0.4225rem;
}

.accordion-button.collapsed:focus {
  box-shadow: none;
}

.accordion-header {
  font-weight: 400;
  line-height: 1.54;
}

.accordion-item {
  transition: 0.3s all cubic-bezier(0.4, 0, 0.2, 1);
  transition-property: margin-top, margin-bottom, border-radius, border;
  box-shadow: 0px 1px 3px 0px rgba(58, 53, 65, 0.12);
  border: 0;
}
.accordion-item:not(.active):not(:first-child) .accordion-header {
  border-top: 1px solid #e7e7e8;
}
.accordion-item.active {
  box-shadow: 0px 4px 8px 0px rgba(58, 53, 65, 0.12);
}
.accordion-item.active:not(:first-child) {
  margin-top: 1rem;
}
.accordion-item.active:not(:last-child) {
  margin-bottom: 1rem;
}

.accordion-item.active + .accordion-item .accordion-header {
  border-top: none;
}

.accordion-button {
  font-size: 1rem;
  border-top-left-radius: 0.375rem;
  border-top-right-radius: 0.375rem;
}
.accordion-button.collapsed {
  border-radius: 0.375rem;
}
.accordion-button:not(.collapsed) {
  box-shadow: none;
}

.accordion > .card:not(:last-of-type) {
  border-radius: 0.375rem !important;
  margin-bottom: 0.6875rem;
}

.close:focus {
  outline: 0;
}

.bs-toast[class^=bg-],
.bs-toast[class*=" bg-"] {
  border: none;
}

.toast.bs-toast {
  z-index: 1095;
}

.toast-header {
  border-bottom: 1px solid rgba(58, 53, 65, 0.075);
}
.toast-header .btn-close {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23b4b2b7'><path d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/></svg>");
  padding-top: 0;
  padding-bottom: 0;
  margin-left: 0.875rem;
  background-size: 0.75rem;
}

.toast-container {
  --bs-toast-zindex: 9;
}

.toast-ex {
  position: fixed;
  top: 4.1rem;
  right: 0.5rem;
}

.toast-placement-ex {
  position: fixed;
}

.carousel .carousel-item.active h1,
.carousel .carousel-item.active .h1,
.carousel .carousel-item.active h2,
.carousel .carousel-item.active .h2,
.carousel .carousel-item.active h3,
.carousel .carousel-item.active .h3,
.carousel .carousel-item.active h4,
.carousel .carousel-item.active .h4,
.carousel .carousel-item.active h5,
.carousel .carousel-item.active .h5,
.carousel .carousel-item.active h6,
.carousel .carousel-item.active .h6,
.carousel .carousel-item.carousel-item-start h1,
.carousel .carousel-item.carousel-item-start .h1,
.carousel .carousel-item.carousel-item-start h2,
.carousel .carousel-item.carousel-item-start .h2,
.carousel .carousel-item.carousel-item-start h3,
.carousel .carousel-item.carousel-item-start .h3,
.carousel .carousel-item.carousel-item-start h4,
.carousel .carousel-item.carousel-item-start .h4,
.carousel .carousel-item.carousel-item-start h5,
.carousel .carousel-item.carousel-item-start .h5,
.carousel .carousel-item.carousel-item-start h6,
.carousel .carousel-item.carousel-item-start .h6 {
  color: #fff;
}

.carousel.carousel-dark .carousel-item.active h1,
.carousel.carousel-dark .carousel-item.active .h1,
.carousel.carousel-dark .carousel-item.active h2,
.carousel.carousel-dark .carousel-item.active .h2,
.carousel.carousel-dark .carousel-item.active h3,
.carousel.carousel-dark .carousel-item.active .h3,
.carousel.carousel-dark .carousel-item.active h4,
.carousel.carousel-dark .carousel-item.active .h4,
.carousel.carousel-dark .carousel-item.active h5,
.carousel.carousel-dark .carousel-item.active .h5,
.carousel.carousel-dark .carousel-item.active h6,
.carousel.carousel-dark .carousel-item.active .h6,
.carousel.carousel-dark .carousel-item.carousel-item-start h1,
.carousel.carousel-dark .carousel-item.carousel-item-start .h1,
.carousel.carousel-dark .carousel-item.carousel-item-start h2,
.carousel.carousel-dark .carousel-item.carousel-item-start .h2,
.carousel.carousel-dark .carousel-item.carousel-item-start h3,
.carousel.carousel-dark .carousel-item.carousel-item-start .h3,
.carousel.carousel-dark .carousel-item.carousel-item-start h4,
.carousel.carousel-dark .carousel-item.carousel-item-start .h4,
.carousel.carousel-dark .carousel-item.carousel-item-start h5,
.carousel.carousel-dark .carousel-item.carousel-item-start .h5,
.carousel.carousel-dark .carousel-item.carousel-item-start h6,
.carousel.carousel-dark .carousel-item.carousel-item-start .h6 {
  color: #3a3541;
}

.spinner-border-lg {
  width: 3rem;
  height: 3rem;
  border-width: 0.3em;
}

.spinner-grow-lg {
  width: 3rem;
  height: 3rem;
  border-width: 0.3em;
}

.btn .spinner-border,
.btn .spinner-grow {
  position: relative;
  top: -0.0625rem;
  height: 1em;
  width: 1em;
}
.btn .spinner-border {
  border-width: 0.15em;
}

@-webkit-keyframes spinner-border-rtl {
  to {
    -webkit-transform: rotate(-360deg);
            transform: rotate(-360deg);
  }
}
@keyframes spinner-border-rtl {
  to {
    -webkit-transform: rotate(-360deg);
            transform: rotate(-360deg);
  }
}
.offcanvas {
  box-shadow: 0px 4px 18px 0px rgba(58, 53, 65, 0.14);
}

.align-baseline {
  vertical-align: baseline !important;
}

.align-top {
  vertical-align: top !important;
}

.align-middle {
  vertical-align: middle !important;
}

.align-bottom {
  vertical-align: bottom !important;
}

.align-text-bottom {
  vertical-align: text-bottom !important;
}

.align-text-top {
  vertical-align: text-top !important;
}

.object-fit-contain {
  -o-object-fit: contain !important;
     object-fit: contain !important;
}

.object-fit-cover {
  -o-object-fit: cover !important;
     object-fit: cover !important;
}

.object-fit-fill {
  -o-object-fit: fill !important;
     object-fit: fill !important;
}

.object-fit-scale {
  -o-object-fit: scale-down !important;
     object-fit: scale-down !important;
}

.object-fit-none {
  -o-object-fit: none !important;
     object-fit: none !important;
}

.opacity-0 {
  opacity: 0 !important;
}

.opacity-25 {
  opacity: 0.25 !important;
}

.opacity-50 {
  opacity: 0.5 !important;
}

.opacity-75 {
  opacity: 0.75 !important;
}

.opacity-100 {
  opacity: 1 !important;
}

.overflow-auto {
  overflow: auto !important;
}

.overflow-hidden {
  overflow: hidden !important;
}

.overflow-visible {
  overflow: visible !important;
}

.overflow-scroll {
  overflow: scroll !important;
}

.d-inline {
  display: inline !important;
}

.d-inline-block {
  display: inline-block !important;
}

.d-block {
  display: block !important;
}

.d-grid {
  display: grid !important;
}

.d-table {
  display: table !important;
}

.d-table-row {
  display: table-row !important;
}

.d-table-cell {
  display: table-cell !important;
}

.d-flex {
  display: -ms-flexbox !important;
  display: flex !important;
}

.d-inline-flex {
  display: -ms-inline-flexbox !important;
  display: inline-flex !important;
}

.d-none {
  display: none !important;
}

.shadow {
  box-shadow: 0 0.25rem 0.5rem rgba(58, 53, 65, 0.1) !important;
}

.shadow-sm {
  box-shadow: 0 0.125rem 0.25rem rgba(58, 53, 65, 0.08) !important;
}

.shadow-lg {
  box-shadow: 0 0.625rem 0.875rem rgba(58, 53, 65, 0.12) !important;
}

.shadow-none {
  box-shadow: none !important;
}

.position-static {
  position: static !important;
}

.position-relative {
  position: relative !important;
}

.position-absolute {
  position: absolute !important;
}

.position-fixed {
  position: fixed !important;
}

.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important;
}

.top-0 {
  top: 0 !important;
}

.top-50 {
  top: 50% !important;
}

.top-100 {
  top: 100% !important;
}

.bottom-0 {
  bottom: 0 !important;
}

.bottom-50 {
  bottom: 50% !important;
}

.bottom-100 {
  bottom: 100% !important;
}

.border {
  border: 1px solid #e7e7e8 !important;
}

.border-0 {
  border: 0 !important;
}

.border-solid {
  border-style: solid !important;
}

.border-dashed {
  border-style: dashed !important;
}

.border-none {
  border-style: none !important;
}

.border-top {
  border-top: 1px solid #e7e7e8 !important;
}

.border-top-0 {
  border-top: 0 !important;
}

.border-bottom {
  border-bottom: 1px solid #e7e7e8 !important;
}

.border-bottom-0 {
  border-bottom: 0 !important;
}

.border-primary {
  border-color: #9055fd !important;
}

.border-secondary {
  border-color: #8a8d93 !important;
}

.border-success {
  border-color: #56ca00 !important;
}

.border-info {
  border-color: #16b1ff !important;
}

.border-warning {
  border-color: #ffb400 !important;
}

.border-danger {
  border-color: #ff4c51 !important;
}

.border-light {
  border-color: rgba(58, 53, 65, 0.06) !important;
}

.border-dark {
  border-color: #4b4b4b !important;
}

.border-gray {
  border-color: rgba(58, 53, 65, 0.06) !important;
}

.border-white {
  border-color: #fff !important;
}

.border-transparent {
  border-color: transparent !important;
}

.border-1 {
  border-width: 1px !important;
}

.border-2 {
  border-width: 2px !important;
}

.border-3 {
  border-width: 3px !important;
}

.border-4 {
  border-width: 4px !important;
}

.border-5 {
  border-width: 5px !important;
}

.border-opacity-10 {
  --bs-border-opacity: 0.1;
}

.border-opacity-25 {
  --bs-border-opacity: 0.25;
}

.border-opacity-50 {
  --bs-border-opacity: 0.5;
}

.border-opacity-75 {
  --bs-border-opacity: 0.75;
}

.border-opacity-100 {
  --bs-border-opacity: 1;
}

.w-px-18 {
  width: 18px !important;
}

.w-px-20 {
  width: 20px !important;
}

.w-px-30 {
  width: 30px !important;
}

.w-px-40 {
  width: 40px !important;
}

.w-px-50 {
  width: 50px !important;
}

.w-px-75 {
  width: 75px !important;
}

.w-px-100 {
  width: 100px !important;
}

.w-px-120 {
  width: 120px !important;
}

.w-px-150 {
  width: 150px !important;
}

.w-px-200 {
  width: 200px !important;
}

.w-px-250 {
  width: 250px !important;
}

.w-px-300 {
  width: 300px !important;
}

.w-px-350 {
  width: 350px !important;
}

.w-px-400 {
  width: 400px !important;
}

.w-px-500 {
  width: 500px !important;
}

.w-px-600 {
  width: 600px !important;
}

.w-px-700 {
  width: 700px !important;
}

.w-px-800 {
  width: 800px !important;
}

.w-auto {
  width: auto !important;
}

.w-20 {
  width: 20% !important;
}

.w-25 {
  width: 25% !important;
}

.w-50 {
  width: 50% !important;
}

.w-60 {
  width: 60% !important;
}

.w-75 {
  width: 75% !important;
}

.w-100 {
  width: 100% !important;
}

.mw-100 {
  max-width: 100% !important;
}

.vw-100 {
  width: 100vw !important;
}

.min-vw-100 {
  min-width: 100vw !important;
}

.h-px-18 {
  height: 18px !important;
}

.h-px-20 {
  height: 20px !important;
}

.h-px-30 {
  height: 30px !important;
}

.h-px-40 {
  height: 40px !important;
}

.h-px-50 {
  height: 50px !important;
}

.h-px-75 {
  height: 75px !important;
}

.h-px-100 {
  height: 100px !important;
}

.h-px-120 {
  height: 120px !important;
}

.h-px-150 {
  height: 150px !important;
}

.h-px-200 {
  height: 200px !important;
}

.h-px-250 {
  height: 250px !important;
}

.h-px-300 {
  height: 300px !important;
}

.h-px-350 {
  height: 350px !important;
}

.h-px-400 {
  height: 400px !important;
}

.h-px-500 {
  height: 500px !important;
}

.h-px-600 {
  height: 600px !important;
}

.h-px-700 {
  height: 700px !important;
}

.h-px-800 {
  height: 800px !important;
}

.h-auto {
  height: auto !important;
}

.h-25 {
  height: 25% !important;
}

.h-50 {
  height: 50% !important;
}

.h-75 {
  height: 75% !important;
}

.h-100 {
  height: 100% !important;
}

.mh-100 {
  max-height: 100% !important;
}

.vh-100 {
  height: 100vh !important;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.flex-fill {
  -ms-flex: 1 1 auto !important;
      flex: 1 1 auto !important;
}

.flex-row {
  -ms-flex-direction: row !important;
      flex-direction: row !important;
}

.flex-column {
  -ms-flex-direction: column !important;
      flex-direction: column !important;
}

.flex-row-reverse {
  -ms-flex-direction: row-reverse !important;
      flex-direction: row-reverse !important;
}

.flex-column-reverse {
  -ms-flex-direction: column-reverse !important;
      flex-direction: column-reverse !important;
}

.flex-grow-0 {
  -ms-flex-positive: 0 !important;
      flex-grow: 0 !important;
}

.flex-grow-1 {
  -ms-flex-positive: 1 !important;
      flex-grow: 1 !important;
}

.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
      flex-shrink: 0 !important;
}

.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
      flex-shrink: 1 !important;
}

.flex-wrap {
  -ms-flex-wrap: wrap !important;
      flex-wrap: wrap !important;
}

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
      flex-wrap: nowrap !important;
}

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
      flex-wrap: wrap-reverse !important;
}

.justify-content-start {
  -ms-flex-pack: start !important;
      justify-content: flex-start !important;
}

.justify-content-end {
  -ms-flex-pack: end !important;
      justify-content: flex-end !important;
}

.justify-content-center {
  -ms-flex-pack: center !important;
      justify-content: center !important;
}

.justify-content-between {
  -ms-flex-pack: justify !important;
      justify-content: space-between !important;
}

.justify-content-around {
  -ms-flex-pack: distribute !important;
      justify-content: space-around !important;
}

.justify-content-evenly {
  -ms-flex-pack: space-evenly !important;
      justify-content: space-evenly !important;
}

.align-items-start {
  -ms-flex-align: start !important;
      align-items: flex-start !important;
}

.align-items-end {
  -ms-flex-align: end !important;
      align-items: flex-end !important;
}

.align-items-center {
  -ms-flex-align: center !important;
      align-items: center !important;
}

.align-items-baseline {
  -ms-flex-align: baseline !important;
      align-items: baseline !important;
}

.align-items-stretch {
  -ms-flex-align: stretch !important;
      align-items: stretch !important;
}

.align-content-start {
  -ms-flex-line-pack: start !important;
      align-content: flex-start !important;
}

.align-content-end {
  -ms-flex-line-pack: end !important;
      align-content: flex-end !important;
}

.align-content-center {
  -ms-flex-line-pack: center !important;
      align-content: center !important;
}

.align-content-between {
  -ms-flex-line-pack: justify !important;
      align-content: space-between !important;
}

.align-content-around {
  -ms-flex-line-pack: distribute !important;
      align-content: space-around !important;
}

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
      align-content: stretch !important;
}

.align-self-auto {
  -ms-flex-item-align: auto !important;
      align-self: auto !important;
}

.align-self-start {
  -ms-flex-item-align: start !important;
      align-self: flex-start !important;
}

.align-self-end {
  -ms-flex-item-align: end !important;
      align-self: flex-end !important;
}

.align-self-center {
  -ms-flex-item-align: center !important;
      align-self: center !important;
}

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
      align-self: baseline !important;
}

.align-self-stretch {
  -ms-flex-item-align: stretch !important;
      align-self: stretch !important;
}

.order-first {
  -ms-flex-order: -1 !important;
      order: -1 !important;
}

.order-0 {
  -ms-flex-order: 0 !important;
      order: 0 !important;
}

.order-1 {
  -ms-flex-order: 1 !important;
      order: 1 !important;
}

.order-2 {
  -ms-flex-order: 2 !important;
      order: 2 !important;
}

.order-3 {
  -ms-flex-order: 3 !important;
      order: 3 !important;
}

.order-4 {
  -ms-flex-order: 4 !important;
      order: 4 !important;
}

.order-5 {
  -ms-flex-order: 5 !important;
      order: 5 !important;
}

.order-last {
  -ms-flex-order: 6 !important;
      order: 6 !important;
}

.m-0 {
  margin: 0 !important;
}

.m-1 {
  margin: 0.25rem !important;
}

.m-2 {
  margin: 0.5rem !important;
}

.m-3 {
  margin: 1rem !important;
}

.m-4 {
  margin: 1.5rem !important;
}

.m-5 {
  margin: 3rem !important;
}

.m-auto {
  margin: auto !important;
}

.mx-0 {
  margin-right: 0 !important;
  margin-left: 0 !important;
}

.mx-1 {
  margin-right: 0.25rem !important;
  margin-left: 0.25rem !important;
}

.mx-2 {
  margin-right: 0.5rem !important;
  margin-left: 0.5rem !important;
}

.mx-3 {
  margin-right: 1rem !important;
  margin-left: 1rem !important;
}

.mx-4 {
  margin-right: 1.5rem !important;
  margin-left: 1.5rem !important;
}

.mx-5 {
  margin-right: 3rem !important;
  margin-left: 3rem !important;
}

.mx-auto {
  margin-right: auto !important;
  margin-left: auto !important;
}

.my-0 {
  margin-top: 0 !important;
  margin-bottom: 0 !important;
}

.my-1 {
  margin-top: 0.25rem !important;
  margin-bottom: 0.25rem !important;
}

.my-2 {
  margin-top: 0.5rem !important;
  margin-bottom: 0.5rem !important;
}

.my-3 {
  margin-top: 1rem !important;
  margin-bottom: 1rem !important;
}

.my-4 {
  margin-top: 1.5rem !important;
  margin-bottom: 1.5rem !important;
}

.my-5 {
  margin-top: 3rem !important;
  margin-bottom: 3rem !important;
}

.my-auto {
  margin-top: auto !important;
  margin-bottom: auto !important;
}

.mt-0 {
  margin-top: 0 !important;
}

.mt-1 {
  margin-top: 0.25rem !important;
}

.mt-2 {
  margin-top: 0.5rem !important;
}

.mt-3 {
  margin-top: 1rem !important;
}

.mt-4 {
  margin-top: 1.5rem !important;
}

.mt-5 {
  margin-top: 3rem !important;
}

.mt-auto {
  margin-top: auto !important;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.mb-1 {
  margin-bottom: 0.25rem !important;
}

.mb-2 {
  margin-bottom: 0.5rem !important;
}

.mb-3 {
  margin-bottom: 1rem !important;
}

.mb-4 {
  margin-bottom: 1.5rem !important;
}

.mb-5 {
  margin-bottom: 3rem !important;
}

.mb-auto {
  margin-bottom: auto !important;
}

.m-n1 {
  margin: -0.25rem !important;
}

.m-n2 {
  margin: -0.5rem !important;
}

.m-n3 {
  margin: -1rem !important;
}

.m-n4 {
  margin: -1.5rem !important;
}

.m-n5 {
  margin: -3rem !important;
}

.mx-n1 {
  margin-right: -0.25rem !important;
  margin-left: -0.25rem !important;
}

.mx-n2 {
  margin-right: -0.5rem !important;
  margin-left: -0.5rem !important;
}

.mx-n3 {
  margin-right: -1rem !important;
  margin-left: -1rem !important;
}

.mx-n4 {
  margin-right: -1.5rem !important;
  margin-left: -1.5rem !important;
}

.mx-n5 {
  margin-right: -3rem !important;
  margin-left: -3rem !important;
}

.my-n1 {
  margin-top: -0.25rem !important;
  margin-bottom: -0.25rem !important;
}

.my-n2 {
  margin-top: -0.5rem !important;
  margin-bottom: -0.5rem !important;
}

.my-n3 {
  margin-top: -1rem !important;
  margin-bottom: -1rem !important;
}

.my-n4 {
  margin-top: -1.5rem !important;
  margin-bottom: -1.5rem !important;
}

.my-n5 {
  margin-top: -3rem !important;
  margin-bottom: -3rem !important;
}

.mt-n1 {
  margin-top: -0.25rem !important;
}

.mt-n2 {
  margin-top: -0.5rem !important;
}

.mt-n3 {
  margin-top: -1rem !important;
}

.mt-n4 {
  margin-top: -1.5rem !important;
}

.mt-n5 {
  margin-top: -3rem !important;
}

.mb-n1 {
  margin-bottom: -0.25rem !important;
}

.mb-n2 {
  margin-bottom: -0.5rem !important;
}

.mb-n3 {
  margin-bottom: -1rem !important;
}

.mb-n4 {
  margin-bottom: -1.5rem !important;
}

.mb-n5 {
  margin-bottom: -3rem !important;
}

.p-0 {
  padding: 0 !important;
}

.p-1 {
  padding: 0.25rem !important;
}

.p-2 {
  padding: 0.5rem !important;
}

.p-3 {
  padding: 1rem !important;
}

.p-4 {
  padding: 1.5rem !important;
}

.p-5 {
  padding: 3rem !important;
}

.px-0 {
  padding-right: 0 !important;
  padding-left: 0 !important;
}

.px-1 {
  padding-right: 0.25rem !important;
  padding-left: 0.25rem !important;
}

.px-2 {
  padding-right: 0.5rem !important;
  padding-left: 0.5rem !important;
}

.px-3 {
  padding-right: 1rem !important;
  padding-left: 1rem !important;
}

.px-4 {
  padding-right: 1.5rem !important;
  padding-left: 1.5rem !important;
}

.px-5 {
  padding-right: 3rem !important;
  padding-left: 3rem !important;
}

.py-0 {
  padding-top: 0 !important;
  padding-bottom: 0 !important;
}

.py-1 {
  padding-top: 0.25rem !important;
  padding-bottom: 0.25rem !important;
}

.py-2 {
  padding-top: 0.5rem !important;
  padding-bottom: 0.5rem !important;
}

.py-3 {
  padding-top: 1rem !important;
  padding-bottom: 1rem !important;
}

.py-4 {
  padding-top: 1.5rem !important;
  padding-bottom: 1.5rem !important;
}

.py-5 {
  padding-top: 3rem !important;
  padding-bottom: 3rem !important;
}

.pt-0 {
  padding-top: 0 !important;
}

.pt-1 {
  padding-top: 0.25rem !important;
}

.pt-2 {
  padding-top: 0.5rem !important;
}

.pt-3 {
  padding-top: 1rem !important;
}

.pt-4 {
  padding-top: 1.5rem !important;
}

.pt-5 {
  padding-top: 3rem !important;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.pb-1 {
  padding-bottom: 0.25rem !important;
}

.pb-2 {
  padding-bottom: 0.5rem !important;
}

.pb-3 {
  padding-bottom: 1rem !important;
}

.pb-4 {
  padding-bottom: 1.5rem !important;
}

.pb-5 {
  padding-bottom: 3rem !important;
}

.gap-0 {
  gap: 0 !important;
}

.gap-1 {
  gap: 0.25rem !important;
}

.gap-2 {
  gap: 0.5rem !important;
}

.gap-3 {
  gap: 1rem !important;
}

.gap-4 {
  gap: 1.5rem !important;
}

.gap-5 {
  gap: 3rem !important;
}

.row-gap-0 {
  row-gap: 0 !important;
}

.row-gap-1 {
  row-gap: 0.25rem !important;
}

.row-gap-2 {
  row-gap: 0.5rem !important;
}

.row-gap-3 {
  row-gap: 1rem !important;
}

.row-gap-4 {
  row-gap: 1.5rem !important;
}

.row-gap-5 {
  row-gap: 3rem !important;
}

.column-gap-0 {
  -webkit-column-gap: 0 !important;
     -moz-column-gap: 0 !important;
          column-gap: 0 !important;
}

.column-gap-1 {
  -webkit-column-gap: 0.25rem !important;
     -moz-column-gap: 0.25rem !important;
          column-gap: 0.25rem !important;
}

.column-gap-2 {
  -webkit-column-gap: 0.5rem !important;
     -moz-column-gap: 0.5rem !important;
          column-gap: 0.5rem !important;
}

.column-gap-3 {
  -webkit-column-gap: 1rem !important;
     -moz-column-gap: 1rem !important;
          column-gap: 1rem !important;
}

.column-gap-4 {
  -webkit-column-gap: 1.5rem !important;
     -moz-column-gap: 1.5rem !important;
          column-gap: 1.5rem !important;
}

.column-gap-5 {
  -webkit-column-gap: 3rem !important;
     -moz-column-gap: 3rem !important;
          column-gap: 3rem !important;
}

.font-monospace {
  font-family: var(--bs-font-monospace) !important;
}

.fs-1 {
  font-size: calc(1.3625rem + 1.35vw) !important;
}

.fs-2 {
  font-size: calc(1.325rem + 0.9vw) !important;
}

.fs-3 {
  font-size: calc(1.2875rem + 0.45vw) !important;
}

.fs-4 {
  font-size: calc(1.2625rem + 0.15vw) !important;
}

.fs-5 {
  font-size: 1.25rem !important;
}

.fs-6 {
  font-size: 0.9375rem !important;
}

.fs-tiny {
  font-size: 70% !important;
}

.fs-big {
  font-size: 112% !important;
}

.fs-large {
  font-size: 150% !important;
}

.fs-xlarge {
  font-size: 170% !important;
}

.fst-italic {
  font-style: italic !important;
}

.fst-normal {
  font-style: normal !important;
}

.fw-lighter {
  font-weight: lighter !important;
}

.fw-light {
  font-weight: 300 !important;
}

.fw-normal {
  font-weight: 400 !important;
}

.fw-medium {
  font-weight: 500 !important;
}

.fw-semibold {
  font-weight: 600 !important;
}

.fw-bold {
  font-weight: 700 !important;
}

.fw-bolder {
  font-weight: bolder !important;
}

.lh-1 {
  line-height: 1 !important;
}

.lh-inherit {
  line-height: inherit !important;
}

.lh-xs {
  line-height: 1.2 !important;
}

.lh-sm {
  line-height: 1.2 !important;
}

.lh-base {
  line-height: 1.47 !important;
}

.lh-lg {
  line-height: 1.5 !important;
}

.lh-xl {
  line-height: 1.5 !important;
}

.text-decoration-none {
  text-decoration: none !important;
}

.text-decoration-underline {
  text-decoration: underline !important;
}

.text-decoration-line-through {
  text-decoration: line-through !important;
}

.text-none {
  text-transform: none !important;
}

.text-lowercase {
  text-transform: lowercase !important;
}

.text-uppercase {
  text-transform: uppercase !important;
}

.text-capitalize {
  text-transform: capitalize !important;
}

.text-wrap {
  white-space: normal !important;
}

.text-nowrap {
  white-space: nowrap !important;
}

/* rtl:begin:remove */
.text-break {
  word-wrap: break-word !important;
  word-break: break-word !important;
}

/* rtl:end:remove */
.text-primary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-primary-rgb), var(--bs-text-opacity)) !important;
}

.text-secondary {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-secondary-rgb), var(--bs-text-opacity)) !important;
}

.text-success {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-success-rgb), var(--bs-text-opacity)) !important;
}

.text-info {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-info-rgb), var(--bs-text-opacity)) !important;
}

.text-warning {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-warning-rgb), var(--bs-text-opacity)) !important;
}

.text-danger {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-danger-rgb), var(--bs-text-opacity)) !important;
}

.text-light {
  --bs-text-opacity: 1;
  color: #b4b2b7 !important;
}

.text-dark {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
}

.text-gray {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-gray-rgb), var(--bs-text-opacity)) !important;
}

.text-black {
  --bs-text-opacity: 1;
  color: rgba(var(--bs-black-rgb), var(--bs-text-opacity)) !important;
}

.text-white {
  --bs-text-opacity: 1;
  color: #fff !important;
}

.text-body {
  --bs-text-opacity: 1;
  color: #89868d !important;
}

.text-muted {
  --bs-text-opacity: 1;
  color: #b4b2b7 !important;
}

.text-black-50 {
  --bs-text-opacity: 1;
  color: rgba(58, 53, 65, 0.5) !important;
}

.text-white-50 {
  --bs-text-opacity: 1;
  color: rgba(255, 255, 255, 0.5) !important;
}

.text-heading {
  --bs-text-opacity: 1;
  color: #544f5a !important;
}

.text-reset {
  --bs-text-opacity: 1;
  color: inherit !important;
}

.text-opacity-25 {
  --bs-text-opacity: 0.25;
}

.text-opacity-50 {
  --bs-text-opacity: 0.5;
}

.text-opacity-75 {
  --bs-text-opacity: 0.75;
}

.text-opacity-100 {
  --bs-text-opacity: 1;
}

.link-opacity-10 {
  --bs-link-opacity: 0.1;
}

.link-opacity-10-hover:hover {
  --bs-link-opacity: 0.1;
}

.link-opacity-25 {
  --bs-link-opacity: 0.25;
}

.link-opacity-25-hover:hover {
  --bs-link-opacity: 0.25;
}

.link-opacity-50 {
  --bs-link-opacity: 0.5;
}

.link-opacity-50-hover:hover {
  --bs-link-opacity: 0.5;
}

.link-opacity-75 {
  --bs-link-opacity: 0.75;
}

.link-opacity-75-hover:hover {
  --bs-link-opacity: 0.75;
}

.link-opacity-100 {
  --bs-link-opacity: 1;
}

.link-opacity-100-hover:hover {
  --bs-link-opacity: 1;
}

.link-offset-1 {
  text-underline-offset: 0.125em !important;
}

.link-offset-1-hover:hover {
  text-underline-offset: 0.125em !important;
}

.link-offset-2 {
  text-underline-offset: 0.25em !important;
}

.link-offset-2-hover:hover {
  text-underline-offset: 0.25em !important;
}

.link-offset-3 {
  text-underline-offset: 0.375em !important;
}

.link-offset-3-hover:hover {
  text-underline-offset: 0.375em !important;
}

.link-underline-primary {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-primary-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-primary-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-secondary {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-secondary-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-secondary-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-success {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-success-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-success-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-info {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-info-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-info-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-warning {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-warning-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-warning-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-danger {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-danger-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-danger-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-light {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-light-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-light-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-dark {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-dark-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-dark-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-gray {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-gray-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-gray-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-underline-opacity, 1)) !important;
}

.link-underline-opacity-0 {
  --bs-link-underline-opacity: 0;
}

.link-underline-opacity-0-hover:hover {
  --bs-link-underline-opacity: 0;
}

.link-underline-opacity-10 {
  --bs-link-underline-opacity: 0.1;
}

.link-underline-opacity-10-hover:hover {
  --bs-link-underline-opacity: 0.1;
}

.link-underline-opacity-25 {
  --bs-link-underline-opacity: 0.25;
}

.link-underline-opacity-25-hover:hover {
  --bs-link-underline-opacity: 0.25;
}

.link-underline-opacity-50 {
  --bs-link-underline-opacity: 0.5;
}

.link-underline-opacity-50-hover:hover {
  --bs-link-underline-opacity: 0.5;
}

.link-underline-opacity-75 {
  --bs-link-underline-opacity: 0.75;
}

.link-underline-opacity-75-hover:hover {
  --bs-link-underline-opacity: 0.75;
}

.link-underline-opacity-100 {
  --bs-link-underline-opacity: 1;
}

.link-underline-opacity-100-hover:hover {
  --bs-link-underline-opacity: 1;
}

.bg-primary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-primary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-secondary {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-secondary-rgb), var(--bs-bg-opacity)) !important;
}

.bg-success {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
}

.bg-info {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important;
}

.bg-warning {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important;
}

.bg-danger {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important;
}

.bg-light {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-light-rgb), var(--bs-bg-opacity)) !important;
}

.bg-dark {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-dark-rgb), var(--bs-bg-opacity)) !important;
}

.bg-gray {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-gray-rgb), var(--bs-bg-opacity)) !important;
}

.bg-black {
  --bs-bg-opacity: 1;
  background-color: rgba(var(--bs-black-rgb), var(--bs-bg-opacity)) !important;
}

.bg-white {
  --bs-bg-opacity: 1;
  background-color: #fff !important;
}

.bg-body {
  --bs-bg-opacity: 1;
  background-color: #f4f5fa !important;
}

.bg-transparent {
  --bs-bg-opacity: 1;
  background-color: transparent !important;
}

.bg-lighter {
  --bs-bg-opacity: 1;
  background-color: #f3f3f4 !important;
}

.bg-lightest {
  --bs-bg-opacity: 1;
  background-color: #f7f7f7 !important;
}

.bg-opacity-10 {
  --bs-bg-opacity: 0.1;
}

.bg-opacity-25 {
  --bs-bg-opacity: 0.25;
}

.bg-opacity-50 {
  --bs-bg-opacity: 0.5;
}

.bg-opacity-75 {
  --bs-bg-opacity: 0.75;
}

.bg-opacity-100 {
  --bs-bg-opacity: 1;
}

.bg-primary-subtle {
  background-color: var(--bs-primary-bg-subtle) !important;
}

.bg-secondary-subtle {
  background-color: var(--bs-secondary-bg-subtle) !important;
}

.bg-success-subtle {
  background-color: var(--bs-success-bg-subtle) !important;
}

.bg-info-subtle {
  background-color: var(--bs-info-bg-subtle) !important;
}

.bg-warning-subtle {
  background-color: var(--bs-warning-bg-subtle) !important;
}

.bg-danger-subtle {
  background-color: var(--bs-danger-bg-subtle) !important;
}

.bg-light-subtle {
  background-color: var(--bs-light-bg-subtle) !important;
}

.bg-dark-subtle {
  background-color: var(--bs-dark-bg-subtle) !important;
}

.bg-gradient {
  background-image: var(--bs-gradient) !important;
}

.user-select-all {
  -webkit-user-select: all !important;
     -moz-user-select: all !important;
          user-select: all !important;
}

.user-select-auto {
  -webkit-user-select: auto !important;
     -moz-user-select: auto !important;
      -ms-user-select: auto !important;
          user-select: auto !important;
}

.user-select-none {
  -webkit-user-select: none !important;
     -moz-user-select: none !important;
      -ms-user-select: none !important;
          user-select: none !important;
}

.pe-none {
  pointer-events: none !important;
}

.pe-auto {
  pointer-events: auto !important;
}

.rounded {
  border-radius: 0.3125rem !important;
}

.rounded-0 {
  border-radius: 0 !important;
}

.rounded-1 {
  border-radius: 0.1875rem !important;
}

.rounded-2 {
  border-radius: 0.25rem !important;
}

.rounded-3 {
  border-radius: 0.375rem !important;
}

.rounded-circle {
  border-radius: 50% !important;
}

.rounded-pill {
  border-radius: 50rem !important;
}

.rounded-top {
  border-top-left-radius: 0.3125rem !important;
  border-top-right-radius: 0.3125rem !important;
}

.rounded-bottom {
  border-bottom-right-radius: 0.3125rem !important;
  border-bottom-left-radius: 0.3125rem !important;
}

.visible {
  visibility: visible !important;
}

.invisible {
  visibility: hidden !important;
}

.z-n1 {
  z-index: -1 !important;
}

.z-0 {
  z-index: 0 !important;
}

.z-1 {
  z-index: 1 !important;
}

.z-2 {
  z-index: 2 !important;
}

.z-3 {
  z-index: 3 !important;
}

.z-4 {
  z-index: 4 !important;
}

.z-5 {
  z-index: 5 !important;
}

.cursor-pointer {
  cursor: pointer !important;
}

.cursor-move {
  cursor: move !important;
}

.cursor-grab {
  cursor: -webkit-grab !important;
  cursor: grab !important;
}

@media (min-width: 576px) {
  .object-fit-sm-contain {
    -o-object-fit: contain !important;
       object-fit: contain !important;
  }
  .object-fit-sm-cover {
    -o-object-fit: cover !important;
       object-fit: cover !important;
  }
  .object-fit-sm-fill {
    -o-object-fit: fill !important;
       object-fit: fill !important;
  }
  .object-fit-sm-scale {
    -o-object-fit: scale-down !important;
       object-fit: scale-down !important;
  }
  .object-fit-sm-none {
    -o-object-fit: none !important;
       object-fit: none !important;
  }
  .d-sm-inline {
    display: inline !important;
  }
  .d-sm-inline-block {
    display: inline-block !important;
  }
  .d-sm-block {
    display: block !important;
  }
  .d-sm-grid {
    display: grid !important;
  }
  .d-sm-table {
    display: table !important;
  }
  .d-sm-table-row {
    display: table-row !important;
  }
  .d-sm-table-cell {
    display: table-cell !important;
  }
  .d-sm-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-sm-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
  .d-sm-none {
    display: none !important;
  }
  .border-sm-solid {
    border-style: solid !important;
  }
  .border-sm-dashed {
    border-style: dashed !important;
  }
  .border-sm-none {
    border-style: none !important;
  }
  .flex-sm-fill {
    -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important;
  }
  .flex-sm-row {
    -ms-flex-direction: row !important;
        flex-direction: row !important;
  }
  .flex-sm-column {
    -ms-flex-direction: column !important;
        flex-direction: column !important;
  }
  .flex-sm-row-reverse {
    -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
  }
  .flex-sm-column-reverse {
    -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important;
  }
  .flex-sm-grow-0 {
    -ms-flex-positive: 0 !important;
        flex-grow: 0 !important;
  }
  .flex-sm-grow-1 {
    -ms-flex-positive: 1 !important;
        flex-grow: 1 !important;
  }
  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
  }
  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
  }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
  }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
  }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
  }
  .justify-content-sm-start {
    -ms-flex-pack: start !important;
        justify-content: flex-start !important;
  }
  .justify-content-sm-end {
    -ms-flex-pack: end !important;
        justify-content: flex-end !important;
  }
  .justify-content-sm-center {
    -ms-flex-pack: center !important;
        justify-content: center !important;
  }
  .justify-content-sm-between {
    -ms-flex-pack: justify !important;
        justify-content: space-between !important;
  }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
  }
  .justify-content-sm-evenly {
    -ms-flex-pack: space-evenly !important;
        justify-content: space-evenly !important;
  }
  .align-items-sm-start {
    -ms-flex-align: start !important;
        align-items: flex-start !important;
  }
  .align-items-sm-end {
    -ms-flex-align: end !important;
        align-items: flex-end !important;
  }
  .align-items-sm-center {
    -ms-flex-align: center !important;
        align-items: center !important;
  }
  .align-items-sm-baseline {
    -ms-flex-align: baseline !important;
        align-items: baseline !important;
  }
  .align-items-sm-stretch {
    -ms-flex-align: stretch !important;
        align-items: stretch !important;
  }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
  }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
  }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important;
  }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
  }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
  }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
  }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important;
  }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important;
  }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important;
  }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
        align-self: center !important;
  }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
  }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
  }
  .order-sm-first {
    -ms-flex-order: -1 !important;
        order: -1 !important;
  }
  .order-sm-0 {
    -ms-flex-order: 0 !important;
        order: 0 !important;
  }
  .order-sm-1 {
    -ms-flex-order: 1 !important;
        order: 1 !important;
  }
  .order-sm-2 {
    -ms-flex-order: 2 !important;
        order: 2 !important;
  }
  .order-sm-3 {
    -ms-flex-order: 3 !important;
        order: 3 !important;
  }
  .order-sm-4 {
    -ms-flex-order: 4 !important;
        order: 4 !important;
  }
  .order-sm-5 {
    -ms-flex-order: 5 !important;
        order: 5 !important;
  }
  .order-sm-last {
    -ms-flex-order: 6 !important;
        order: 6 !important;
  }
  .m-sm-0 {
    margin: 0 !important;
  }
  .m-sm-1 {
    margin: 0.25rem !important;
  }
  .m-sm-2 {
    margin: 0.5rem !important;
  }
  .m-sm-3 {
    margin: 1rem !important;
  }
  .m-sm-4 {
    margin: 1.5rem !important;
  }
  .m-sm-5 {
    margin: 3rem !important;
  }
  .m-sm-auto {
    margin: auto !important;
  }
  .mx-sm-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-sm-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-sm-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-sm-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-sm-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-sm-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-sm-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-sm-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-sm-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-sm-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-sm-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-sm-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-sm-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-sm-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-sm-0 {
    margin-top: 0 !important;
  }
  .mt-sm-1 {
    margin-top: 0.25rem !important;
  }
  .mt-sm-2 {
    margin-top: 0.5rem !important;
  }
  .mt-sm-3 {
    margin-top: 1rem !important;
  }
  .mt-sm-4 {
    margin-top: 1.5rem !important;
  }
  .mt-sm-5 {
    margin-top: 3rem !important;
  }
  .mt-sm-auto {
    margin-top: auto !important;
  }
  .mb-sm-0 {
    margin-bottom: 0 !important;
  }
  .mb-sm-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-sm-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-sm-3 {
    margin-bottom: 1rem !important;
  }
  .mb-sm-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-sm-5 {
    margin-bottom: 3rem !important;
  }
  .mb-sm-auto {
    margin-bottom: auto !important;
  }
  .m-sm-n1 {
    margin: -0.25rem !important;
  }
  .m-sm-n2 {
    margin: -0.5rem !important;
  }
  .m-sm-n3 {
    margin: -1rem !important;
  }
  .m-sm-n4 {
    margin: -1.5rem !important;
  }
  .m-sm-n5 {
    margin: -3rem !important;
  }
  .mx-sm-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-sm-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-sm-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-sm-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-sm-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .my-sm-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-sm-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-sm-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-sm-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-sm-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .mt-sm-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-sm-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-sm-n3 {
    margin-top: -1rem !important;
  }
  .mt-sm-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-sm-n5 {
    margin-top: -3rem !important;
  }
  .mb-sm-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-sm-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-sm-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-sm-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-sm-n5 {
    margin-bottom: -3rem !important;
  }
  .p-sm-0 {
    padding: 0 !important;
  }
  .p-sm-1 {
    padding: 0.25rem !important;
  }
  .p-sm-2 {
    padding: 0.5rem !important;
  }
  .p-sm-3 {
    padding: 1rem !important;
  }
  .p-sm-4 {
    padding: 1.5rem !important;
  }
  .p-sm-5 {
    padding: 3rem !important;
  }
  .px-sm-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-sm-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-sm-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-sm-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-sm-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-sm-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-sm-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-sm-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-sm-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-sm-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-sm-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-sm-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-sm-0 {
    padding-top: 0 !important;
  }
  .pt-sm-1 {
    padding-top: 0.25rem !important;
  }
  .pt-sm-2 {
    padding-top: 0.5rem !important;
  }
  .pt-sm-3 {
    padding-top: 1rem !important;
  }
  .pt-sm-4 {
    padding-top: 1.5rem !important;
  }
  .pt-sm-5 {
    padding-top: 3rem !important;
  }
  .pb-sm-0 {
    padding-bottom: 0 !important;
  }
  .pb-sm-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-sm-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-sm-3 {
    padding-bottom: 1rem !important;
  }
  .pb-sm-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-sm-5 {
    padding-bottom: 3rem !important;
  }
  .gap-sm-0 {
    gap: 0 !important;
  }
  .gap-sm-1 {
    gap: 0.25rem !important;
  }
  .gap-sm-2 {
    gap: 0.5rem !important;
  }
  .gap-sm-3 {
    gap: 1rem !important;
  }
  .gap-sm-4 {
    gap: 1.5rem !important;
  }
  .gap-sm-5 {
    gap: 3rem !important;
  }
  .row-gap-sm-0 {
    row-gap: 0 !important;
  }
  .row-gap-sm-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-sm-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-sm-3 {
    row-gap: 1rem !important;
  }
  .row-gap-sm-4 {
    row-gap: 1.5rem !important;
  }
  .row-gap-sm-5 {
    row-gap: 3rem !important;
  }
  .column-gap-sm-0 {
    -webkit-column-gap: 0 !important;
       -moz-column-gap: 0 !important;
            column-gap: 0 !important;
  }
  .column-gap-sm-1 {
    -webkit-column-gap: 0.25rem !important;
       -moz-column-gap: 0.25rem !important;
            column-gap: 0.25rem !important;
  }
  .column-gap-sm-2 {
    -webkit-column-gap: 0.5rem !important;
       -moz-column-gap: 0.5rem !important;
            column-gap: 0.5rem !important;
  }
  .column-gap-sm-3 {
    -webkit-column-gap: 1rem !important;
       -moz-column-gap: 1rem !important;
            column-gap: 1rem !important;
  }
  .column-gap-sm-4 {
    -webkit-column-gap: 1.5rem !important;
       -moz-column-gap: 1.5rem !important;
            column-gap: 1.5rem !important;
  }
  .column-gap-sm-5 {
    -webkit-column-gap: 3rem !important;
       -moz-column-gap: 3rem !important;
            column-gap: 3rem !important;
  }
}
@media (min-width: 768px) {
  .object-fit-md-contain {
    -o-object-fit: contain !important;
       object-fit: contain !important;
  }
  .object-fit-md-cover {
    -o-object-fit: cover !important;
       object-fit: cover !important;
  }
  .object-fit-md-fill {
    -o-object-fit: fill !important;
       object-fit: fill !important;
  }
  .object-fit-md-scale {
    -o-object-fit: scale-down !important;
       object-fit: scale-down !important;
  }
  .object-fit-md-none {
    -o-object-fit: none !important;
       object-fit: none !important;
  }
  .d-md-inline {
    display: inline !important;
  }
  .d-md-inline-block {
    display: inline-block !important;
  }
  .d-md-block {
    display: block !important;
  }
  .d-md-grid {
    display: grid !important;
  }
  .d-md-table {
    display: table !important;
  }
  .d-md-table-row {
    display: table-row !important;
  }
  .d-md-table-cell {
    display: table-cell !important;
  }
  .d-md-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-md-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
  .d-md-none {
    display: none !important;
  }
  .border-md-solid {
    border-style: solid !important;
  }
  .border-md-dashed {
    border-style: dashed !important;
  }
  .border-md-none {
    border-style: none !important;
  }
  .flex-md-fill {
    -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important;
  }
  .flex-md-row {
    -ms-flex-direction: row !important;
        flex-direction: row !important;
  }
  .flex-md-column {
    -ms-flex-direction: column !important;
        flex-direction: column !important;
  }
  .flex-md-row-reverse {
    -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
  }
  .flex-md-column-reverse {
    -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important;
  }
  .flex-md-grow-0 {
    -ms-flex-positive: 0 !important;
        flex-grow: 0 !important;
  }
  .flex-md-grow-1 {
    -ms-flex-positive: 1 !important;
        flex-grow: 1 !important;
  }
  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
  }
  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
  }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
  }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
  }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
  }
  .justify-content-md-start {
    -ms-flex-pack: start !important;
        justify-content: flex-start !important;
  }
  .justify-content-md-end {
    -ms-flex-pack: end !important;
        justify-content: flex-end !important;
  }
  .justify-content-md-center {
    -ms-flex-pack: center !important;
        justify-content: center !important;
  }
  .justify-content-md-between {
    -ms-flex-pack: justify !important;
        justify-content: space-between !important;
  }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
  }
  .justify-content-md-evenly {
    -ms-flex-pack: space-evenly !important;
        justify-content: space-evenly !important;
  }
  .align-items-md-start {
    -ms-flex-align: start !important;
        align-items: flex-start !important;
  }
  .align-items-md-end {
    -ms-flex-align: end !important;
        align-items: flex-end !important;
  }
  .align-items-md-center {
    -ms-flex-align: center !important;
        align-items: center !important;
  }
  .align-items-md-baseline {
    -ms-flex-align: baseline !important;
        align-items: baseline !important;
  }
  .align-items-md-stretch {
    -ms-flex-align: stretch !important;
        align-items: stretch !important;
  }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
  }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
  }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important;
  }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
  }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
  }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
  }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important;
  }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important;
  }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important;
  }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
        align-self: center !important;
  }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
  }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
  }
  .order-md-first {
    -ms-flex-order: -1 !important;
        order: -1 !important;
  }
  .order-md-0 {
    -ms-flex-order: 0 !important;
        order: 0 !important;
  }
  .order-md-1 {
    -ms-flex-order: 1 !important;
        order: 1 !important;
  }
  .order-md-2 {
    -ms-flex-order: 2 !important;
        order: 2 !important;
  }
  .order-md-3 {
    -ms-flex-order: 3 !important;
        order: 3 !important;
  }
  .order-md-4 {
    -ms-flex-order: 4 !important;
        order: 4 !important;
  }
  .order-md-5 {
    -ms-flex-order: 5 !important;
        order: 5 !important;
  }
  .order-md-last {
    -ms-flex-order: 6 !important;
        order: 6 !important;
  }
  .m-md-0 {
    margin: 0 !important;
  }
  .m-md-1 {
    margin: 0.25rem !important;
  }
  .m-md-2 {
    margin: 0.5rem !important;
  }
  .m-md-3 {
    margin: 1rem !important;
  }
  .m-md-4 {
    margin: 1.5rem !important;
  }
  .m-md-5 {
    margin: 3rem !important;
  }
  .m-md-auto {
    margin: auto !important;
  }
  .mx-md-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-md-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-md-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-md-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-md-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-md-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-md-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-md-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-md-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-md-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-md-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-md-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-md-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-md-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-md-0 {
    margin-top: 0 !important;
  }
  .mt-md-1 {
    margin-top: 0.25rem !important;
  }
  .mt-md-2 {
    margin-top: 0.5rem !important;
  }
  .mt-md-3 {
    margin-top: 1rem !important;
  }
  .mt-md-4 {
    margin-top: 1.5rem !important;
  }
  .mt-md-5 {
    margin-top: 3rem !important;
  }
  .mt-md-auto {
    margin-top: auto !important;
  }
  .mb-md-0 {
    margin-bottom: 0 !important;
  }
  .mb-md-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-md-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-md-3 {
    margin-bottom: 1rem !important;
  }
  .mb-md-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-md-5 {
    margin-bottom: 3rem !important;
  }
  .mb-md-auto {
    margin-bottom: auto !important;
  }
  .m-md-n1 {
    margin: -0.25rem !important;
  }
  .m-md-n2 {
    margin: -0.5rem !important;
  }
  .m-md-n3 {
    margin: -1rem !important;
  }
  .m-md-n4 {
    margin: -1.5rem !important;
  }
  .m-md-n5 {
    margin: -3rem !important;
  }
  .mx-md-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-md-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-md-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-md-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-md-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .my-md-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-md-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-md-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-md-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-md-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .mt-md-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-md-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-md-n3 {
    margin-top: -1rem !important;
  }
  .mt-md-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-md-n5 {
    margin-top: -3rem !important;
  }
  .mb-md-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-md-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-md-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-md-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-md-n5 {
    margin-bottom: -3rem !important;
  }
  .p-md-0 {
    padding: 0 !important;
  }
  .p-md-1 {
    padding: 0.25rem !important;
  }
  .p-md-2 {
    padding: 0.5rem !important;
  }
  .p-md-3 {
    padding: 1rem !important;
  }
  .p-md-4 {
    padding: 1.5rem !important;
  }
  .p-md-5 {
    padding: 3rem !important;
  }
  .px-md-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-md-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-md-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-md-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-md-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-md-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-md-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-md-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-md-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-md-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-md-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-md-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-md-0 {
    padding-top: 0 !important;
  }
  .pt-md-1 {
    padding-top: 0.25rem !important;
  }
  .pt-md-2 {
    padding-top: 0.5rem !important;
  }
  .pt-md-3 {
    padding-top: 1rem !important;
  }
  .pt-md-4 {
    padding-top: 1.5rem !important;
  }
  .pt-md-5 {
    padding-top: 3rem !important;
  }
  .pb-md-0 {
    padding-bottom: 0 !important;
  }
  .pb-md-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-md-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-md-3 {
    padding-bottom: 1rem !important;
  }
  .pb-md-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-md-5 {
    padding-bottom: 3rem !important;
  }
  .gap-md-0 {
    gap: 0 !important;
  }
  .gap-md-1 {
    gap: 0.25rem !important;
  }
  .gap-md-2 {
    gap: 0.5rem !important;
  }
  .gap-md-3 {
    gap: 1rem !important;
  }
  .gap-md-4 {
    gap: 1.5rem !important;
  }
  .gap-md-5 {
    gap: 3rem !important;
  }
  .row-gap-md-0 {
    row-gap: 0 !important;
  }
  .row-gap-md-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-md-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-md-3 {
    row-gap: 1rem !important;
  }
  .row-gap-md-4 {
    row-gap: 1.5rem !important;
  }
  .row-gap-md-5 {
    row-gap: 3rem !important;
  }
  .column-gap-md-0 {
    -webkit-column-gap: 0 !important;
       -moz-column-gap: 0 !important;
            column-gap: 0 !important;
  }
  .column-gap-md-1 {
    -webkit-column-gap: 0.25rem !important;
       -moz-column-gap: 0.25rem !important;
            column-gap: 0.25rem !important;
  }
  .column-gap-md-2 {
    -webkit-column-gap: 0.5rem !important;
       -moz-column-gap: 0.5rem !important;
            column-gap: 0.5rem !important;
  }
  .column-gap-md-3 {
    -webkit-column-gap: 1rem !important;
       -moz-column-gap: 1rem !important;
            column-gap: 1rem !important;
  }
  .column-gap-md-4 {
    -webkit-column-gap: 1.5rem !important;
       -moz-column-gap: 1.5rem !important;
            column-gap: 1.5rem !important;
  }
  .column-gap-md-5 {
    -webkit-column-gap: 3rem !important;
       -moz-column-gap: 3rem !important;
            column-gap: 3rem !important;
  }
}
@media (min-width: 992px) {
  .object-fit-lg-contain {
    -o-object-fit: contain !important;
       object-fit: contain !important;
  }
  .object-fit-lg-cover {
    -o-object-fit: cover !important;
       object-fit: cover !important;
  }
  .object-fit-lg-fill {
    -o-object-fit: fill !important;
       object-fit: fill !important;
  }
  .object-fit-lg-scale {
    -o-object-fit: scale-down !important;
       object-fit: scale-down !important;
  }
  .object-fit-lg-none {
    -o-object-fit: none !important;
       object-fit: none !important;
  }
  .d-lg-inline {
    display: inline !important;
  }
  .d-lg-inline-block {
    display: inline-block !important;
  }
  .d-lg-block {
    display: block !important;
  }
  .d-lg-grid {
    display: grid !important;
  }
  .d-lg-table {
    display: table !important;
  }
  .d-lg-table-row {
    display: table-row !important;
  }
  .d-lg-table-cell {
    display: table-cell !important;
  }
  .d-lg-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-lg-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
  .d-lg-none {
    display: none !important;
  }
  .border-lg-solid {
    border-style: solid !important;
  }
  .border-lg-dashed {
    border-style: dashed !important;
  }
  .border-lg-none {
    border-style: none !important;
  }
  .flex-lg-fill {
    -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important;
  }
  .flex-lg-row {
    -ms-flex-direction: row !important;
        flex-direction: row !important;
  }
  .flex-lg-column {
    -ms-flex-direction: column !important;
        flex-direction: column !important;
  }
  .flex-lg-row-reverse {
    -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
  }
  .flex-lg-column-reverse {
    -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important;
  }
  .flex-lg-grow-0 {
    -ms-flex-positive: 0 !important;
        flex-grow: 0 !important;
  }
  .flex-lg-grow-1 {
    -ms-flex-positive: 1 !important;
        flex-grow: 1 !important;
  }
  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
  }
  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
  }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
  }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
  }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
  }
  .justify-content-lg-start {
    -ms-flex-pack: start !important;
        justify-content: flex-start !important;
  }
  .justify-content-lg-end {
    -ms-flex-pack: end !important;
        justify-content: flex-end !important;
  }
  .justify-content-lg-center {
    -ms-flex-pack: center !important;
        justify-content: center !important;
  }
  .justify-content-lg-between {
    -ms-flex-pack: justify !important;
        justify-content: space-between !important;
  }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
  }
  .justify-content-lg-evenly {
    -ms-flex-pack: space-evenly !important;
        justify-content: space-evenly !important;
  }
  .align-items-lg-start {
    -ms-flex-align: start !important;
        align-items: flex-start !important;
  }
  .align-items-lg-end {
    -ms-flex-align: end !important;
        align-items: flex-end !important;
  }
  .align-items-lg-center {
    -ms-flex-align: center !important;
        align-items: center !important;
  }
  .align-items-lg-baseline {
    -ms-flex-align: baseline !important;
        align-items: baseline !important;
  }
  .align-items-lg-stretch {
    -ms-flex-align: stretch !important;
        align-items: stretch !important;
  }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
  }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
  }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important;
  }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
  }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
  }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
  }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important;
  }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important;
  }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important;
  }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
        align-self: center !important;
  }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
  }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
  }
  .order-lg-first {
    -ms-flex-order: -1 !important;
        order: -1 !important;
  }
  .order-lg-0 {
    -ms-flex-order: 0 !important;
        order: 0 !important;
  }
  .order-lg-1 {
    -ms-flex-order: 1 !important;
        order: 1 !important;
  }
  .order-lg-2 {
    -ms-flex-order: 2 !important;
        order: 2 !important;
  }
  .order-lg-3 {
    -ms-flex-order: 3 !important;
        order: 3 !important;
  }
  .order-lg-4 {
    -ms-flex-order: 4 !important;
        order: 4 !important;
  }
  .order-lg-5 {
    -ms-flex-order: 5 !important;
        order: 5 !important;
  }
  .order-lg-last {
    -ms-flex-order: 6 !important;
        order: 6 !important;
  }
  .m-lg-0 {
    margin: 0 !important;
  }
  .m-lg-1 {
    margin: 0.25rem !important;
  }
  .m-lg-2 {
    margin: 0.5rem !important;
  }
  .m-lg-3 {
    margin: 1rem !important;
  }
  .m-lg-4 {
    margin: 1.5rem !important;
  }
  .m-lg-5 {
    margin: 3rem !important;
  }
  .m-lg-auto {
    margin: auto !important;
  }
  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-lg-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-lg-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-lg-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-lg-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-lg-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-lg-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-lg-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-lg-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-lg-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-lg-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-lg-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-lg-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-lg-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-lg-0 {
    margin-top: 0 !important;
  }
  .mt-lg-1 {
    margin-top: 0.25rem !important;
  }
  .mt-lg-2 {
    margin-top: 0.5rem !important;
  }
  .mt-lg-3 {
    margin-top: 1rem !important;
  }
  .mt-lg-4 {
    margin-top: 1.5rem !important;
  }
  .mt-lg-5 {
    margin-top: 3rem !important;
  }
  .mt-lg-auto {
    margin-top: auto !important;
  }
  .mb-lg-0 {
    margin-bottom: 0 !important;
  }
  .mb-lg-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-lg-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-lg-3 {
    margin-bottom: 1rem !important;
  }
  .mb-lg-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-lg-5 {
    margin-bottom: 3rem !important;
  }
  .mb-lg-auto {
    margin-bottom: auto !important;
  }
  .m-lg-n1 {
    margin: -0.25rem !important;
  }
  .m-lg-n2 {
    margin: -0.5rem !important;
  }
  .m-lg-n3 {
    margin: -1rem !important;
  }
  .m-lg-n4 {
    margin: -1.5rem !important;
  }
  .m-lg-n5 {
    margin: -3rem !important;
  }
  .mx-lg-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-lg-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-lg-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-lg-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-lg-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .my-lg-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-lg-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-lg-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-lg-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-lg-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .mt-lg-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-lg-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-lg-n3 {
    margin-top: -1rem !important;
  }
  .mt-lg-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-lg-n5 {
    margin-top: -3rem !important;
  }
  .mb-lg-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-lg-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-lg-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-lg-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-lg-n5 {
    margin-bottom: -3rem !important;
  }
  .p-lg-0 {
    padding: 0 !important;
  }
  .p-lg-1 {
    padding: 0.25rem !important;
  }
  .p-lg-2 {
    padding: 0.5rem !important;
  }
  .p-lg-3 {
    padding: 1rem !important;
  }
  .p-lg-4 {
    padding: 1.5rem !important;
  }
  .p-lg-5 {
    padding: 3rem !important;
  }
  .px-lg-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-lg-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-lg-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-lg-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-lg-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-lg-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-lg-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-lg-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-lg-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-lg-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-lg-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-lg-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-lg-0 {
    padding-top: 0 !important;
  }
  .pt-lg-1 {
    padding-top: 0.25rem !important;
  }
  .pt-lg-2 {
    padding-top: 0.5rem !important;
  }
  .pt-lg-3 {
    padding-top: 1rem !important;
  }
  .pt-lg-4 {
    padding-top: 1.5rem !important;
  }
  .pt-lg-5 {
    padding-top: 3rem !important;
  }
  .pb-lg-0 {
    padding-bottom: 0 !important;
  }
  .pb-lg-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-lg-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-lg-3 {
    padding-bottom: 1rem !important;
  }
  .pb-lg-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-lg-5 {
    padding-bottom: 3rem !important;
  }
  .gap-lg-0 {
    gap: 0 !important;
  }
  .gap-lg-1 {
    gap: 0.25rem !important;
  }
  .gap-lg-2 {
    gap: 0.5rem !important;
  }
  .gap-lg-3 {
    gap: 1rem !important;
  }
  .gap-lg-4 {
    gap: 1.5rem !important;
  }
  .gap-lg-5 {
    gap: 3rem !important;
  }
  .row-gap-lg-0 {
    row-gap: 0 !important;
  }
  .row-gap-lg-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-lg-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-lg-3 {
    row-gap: 1rem !important;
  }
  .row-gap-lg-4 {
    row-gap: 1.5rem !important;
  }
  .row-gap-lg-5 {
    row-gap: 3rem !important;
  }
  .column-gap-lg-0 {
    -webkit-column-gap: 0 !important;
       -moz-column-gap: 0 !important;
            column-gap: 0 !important;
  }
  .column-gap-lg-1 {
    -webkit-column-gap: 0.25rem !important;
       -moz-column-gap: 0.25rem !important;
            column-gap: 0.25rem !important;
  }
  .column-gap-lg-2 {
    -webkit-column-gap: 0.5rem !important;
       -moz-column-gap: 0.5rem !important;
            column-gap: 0.5rem !important;
  }
  .column-gap-lg-3 {
    -webkit-column-gap: 1rem !important;
       -moz-column-gap: 1rem !important;
            column-gap: 1rem !important;
  }
  .column-gap-lg-4 {
    -webkit-column-gap: 1.5rem !important;
       -moz-column-gap: 1.5rem !important;
            column-gap: 1.5rem !important;
  }
  .column-gap-lg-5 {
    -webkit-column-gap: 3rem !important;
       -moz-column-gap: 3rem !important;
            column-gap: 3rem !important;
  }
}
@media (min-width: 1200px) {
  .object-fit-xl-contain {
    -o-object-fit: contain !important;
       object-fit: contain !important;
  }
  .object-fit-xl-cover {
    -o-object-fit: cover !important;
       object-fit: cover !important;
  }
  .object-fit-xl-fill {
    -o-object-fit: fill !important;
       object-fit: fill !important;
  }
  .object-fit-xl-scale {
    -o-object-fit: scale-down !important;
       object-fit: scale-down !important;
  }
  .object-fit-xl-none {
    -o-object-fit: none !important;
       object-fit: none !important;
  }
  .d-xl-inline {
    display: inline !important;
  }
  .d-xl-inline-block {
    display: inline-block !important;
  }
  .d-xl-block {
    display: block !important;
  }
  .d-xl-grid {
    display: grid !important;
  }
  .d-xl-table {
    display: table !important;
  }
  .d-xl-table-row {
    display: table-row !important;
  }
  .d-xl-table-cell {
    display: table-cell !important;
  }
  .d-xl-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-xl-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
  .d-xl-none {
    display: none !important;
  }
  .border-xl-solid {
    border-style: solid !important;
  }
  .border-xl-dashed {
    border-style: dashed !important;
  }
  .border-xl-none {
    border-style: none !important;
  }
  .flex-xl-fill {
    -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important;
  }
  .flex-xl-row {
    -ms-flex-direction: row !important;
        flex-direction: row !important;
  }
  .flex-xl-column {
    -ms-flex-direction: column !important;
        flex-direction: column !important;
  }
  .flex-xl-row-reverse {
    -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
  }
  .flex-xl-column-reverse {
    -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important;
  }
  .flex-xl-grow-0 {
    -ms-flex-positive: 0 !important;
        flex-grow: 0 !important;
  }
  .flex-xl-grow-1 {
    -ms-flex-positive: 1 !important;
        flex-grow: 1 !important;
  }
  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
  }
  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
  }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
  }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
  }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
  }
  .justify-content-xl-start {
    -ms-flex-pack: start !important;
        justify-content: flex-start !important;
  }
  .justify-content-xl-end {
    -ms-flex-pack: end !important;
        justify-content: flex-end !important;
  }
  .justify-content-xl-center {
    -ms-flex-pack: center !important;
        justify-content: center !important;
  }
  .justify-content-xl-between {
    -ms-flex-pack: justify !important;
        justify-content: space-between !important;
  }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
  }
  .justify-content-xl-evenly {
    -ms-flex-pack: space-evenly !important;
        justify-content: space-evenly !important;
  }
  .align-items-xl-start {
    -ms-flex-align: start !important;
        align-items: flex-start !important;
  }
  .align-items-xl-end {
    -ms-flex-align: end !important;
        align-items: flex-end !important;
  }
  .align-items-xl-center {
    -ms-flex-align: center !important;
        align-items: center !important;
  }
  .align-items-xl-baseline {
    -ms-flex-align: baseline !important;
        align-items: baseline !important;
  }
  .align-items-xl-stretch {
    -ms-flex-align: stretch !important;
        align-items: stretch !important;
  }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
  }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
  }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important;
  }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
  }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
  }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
  }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important;
  }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important;
  }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important;
  }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
        align-self: center !important;
  }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
  }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
  }
  .order-xl-first {
    -ms-flex-order: -1 !important;
        order: -1 !important;
  }
  .order-xl-0 {
    -ms-flex-order: 0 !important;
        order: 0 !important;
  }
  .order-xl-1 {
    -ms-flex-order: 1 !important;
        order: 1 !important;
  }
  .order-xl-2 {
    -ms-flex-order: 2 !important;
        order: 2 !important;
  }
  .order-xl-3 {
    -ms-flex-order: 3 !important;
        order: 3 !important;
  }
  .order-xl-4 {
    -ms-flex-order: 4 !important;
        order: 4 !important;
  }
  .order-xl-5 {
    -ms-flex-order: 5 !important;
        order: 5 !important;
  }
  .order-xl-last {
    -ms-flex-order: 6 !important;
        order: 6 !important;
  }
  .m-xl-0 {
    margin: 0 !important;
  }
  .m-xl-1 {
    margin: 0.25rem !important;
  }
  .m-xl-2 {
    margin: 0.5rem !important;
  }
  .m-xl-3 {
    margin: 1rem !important;
  }
  .m-xl-4 {
    margin: 1.5rem !important;
  }
  .m-xl-5 {
    margin: 3rem !important;
  }
  .m-xl-auto {
    margin: auto !important;
  }
  .mx-xl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xl-0 {
    margin-top: 0 !important;
  }
  .mt-xl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xl-3 {
    margin-top: 1rem !important;
  }
  .mt-xl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xl-5 {
    margin-top: 3rem !important;
  }
  .mt-xl-auto {
    margin-top: auto !important;
  }
  .mb-xl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xl-auto {
    margin-bottom: auto !important;
  }
  .m-xl-n1 {
    margin: -0.25rem !important;
  }
  .m-xl-n2 {
    margin: -0.5rem !important;
  }
  .m-xl-n3 {
    margin: -1rem !important;
  }
  .m-xl-n4 {
    margin: -1.5rem !important;
  }
  .m-xl-n5 {
    margin: -3rem !important;
  }
  .mx-xl-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-xl-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-xl-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-xl-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-xl-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .my-xl-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-xl-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-xl-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-xl-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-xl-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .mt-xl-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-xl-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-xl-n3 {
    margin-top: -1rem !important;
  }
  .mt-xl-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-xl-n5 {
    margin-top: -3rem !important;
  }
  .mb-xl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-xl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-xl-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-xl-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-xl-n5 {
    margin-bottom: -3rem !important;
  }
  .p-xl-0 {
    padding: 0 !important;
  }
  .p-xl-1 {
    padding: 0.25rem !important;
  }
  .p-xl-2 {
    padding: 0.5rem !important;
  }
  .p-xl-3 {
    padding: 1rem !important;
  }
  .p-xl-4 {
    padding: 1.5rem !important;
  }
  .p-xl-5 {
    padding: 3rem !important;
  }
  .px-xl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-xl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-xl-0 {
    padding-top: 0 !important;
  }
  .pt-xl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xl-3 {
    padding-top: 1rem !important;
  }
  .pt-xl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xl-5 {
    padding-top: 3rem !important;
  }
  .pb-xl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xl-5 {
    padding-bottom: 3rem !important;
  }
  .gap-xl-0 {
    gap: 0 !important;
  }
  .gap-xl-1 {
    gap: 0.25rem !important;
  }
  .gap-xl-2 {
    gap: 0.5rem !important;
  }
  .gap-xl-3 {
    gap: 1rem !important;
  }
  .gap-xl-4 {
    gap: 1.5rem !important;
  }
  .gap-xl-5 {
    gap: 3rem !important;
  }
  .row-gap-xl-0 {
    row-gap: 0 !important;
  }
  .row-gap-xl-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-xl-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-xl-3 {
    row-gap: 1rem !important;
  }
  .row-gap-xl-4 {
    row-gap: 1.5rem !important;
  }
  .row-gap-xl-5 {
    row-gap: 3rem !important;
  }
  .column-gap-xl-0 {
    -webkit-column-gap: 0 !important;
       -moz-column-gap: 0 !important;
            column-gap: 0 !important;
  }
  .column-gap-xl-1 {
    -webkit-column-gap: 0.25rem !important;
       -moz-column-gap: 0.25rem !important;
            column-gap: 0.25rem !important;
  }
  .column-gap-xl-2 {
    -webkit-column-gap: 0.5rem !important;
       -moz-column-gap: 0.5rem !important;
            column-gap: 0.5rem !important;
  }
  .column-gap-xl-3 {
    -webkit-column-gap: 1rem !important;
       -moz-column-gap: 1rem !important;
            column-gap: 1rem !important;
  }
  .column-gap-xl-4 {
    -webkit-column-gap: 1.5rem !important;
       -moz-column-gap: 1.5rem !important;
            column-gap: 1.5rem !important;
  }
  .column-gap-xl-5 {
    -webkit-column-gap: 3rem !important;
       -moz-column-gap: 3rem !important;
            column-gap: 3rem !important;
  }
}
@media (min-width: 1400px) {
  .object-fit-xxl-contain {
    -o-object-fit: contain !important;
       object-fit: contain !important;
  }
  .object-fit-xxl-cover {
    -o-object-fit: cover !important;
       object-fit: cover !important;
  }
  .object-fit-xxl-fill {
    -o-object-fit: fill !important;
       object-fit: fill !important;
  }
  .object-fit-xxl-scale {
    -o-object-fit: scale-down !important;
       object-fit: scale-down !important;
  }
  .object-fit-xxl-none {
    -o-object-fit: none !important;
       object-fit: none !important;
  }
  .d-xxl-inline {
    display: inline !important;
  }
  .d-xxl-inline-block {
    display: inline-block !important;
  }
  .d-xxl-block {
    display: block !important;
  }
  .d-xxl-grid {
    display: grid !important;
  }
  .d-xxl-table {
    display: table !important;
  }
  .d-xxl-table-row {
    display: table-row !important;
  }
  .d-xxl-table-cell {
    display: table-cell !important;
  }
  .d-xxl-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-xxl-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
  .d-xxl-none {
    display: none !important;
  }
  .border-xxl-solid {
    border-style: solid !important;
  }
  .border-xxl-dashed {
    border-style: dashed !important;
  }
  .border-xxl-none {
    border-style: none !important;
  }
  .flex-xxl-fill {
    -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important;
  }
  .flex-xxl-row {
    -ms-flex-direction: row !important;
        flex-direction: row !important;
  }
  .flex-xxl-column {
    -ms-flex-direction: column !important;
        flex-direction: column !important;
  }
  .flex-xxl-row-reverse {
    -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important;
  }
  .flex-xxl-column-reverse {
    -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important;
  }
  .flex-xxl-grow-0 {
    -ms-flex-positive: 0 !important;
        flex-grow: 0 !important;
  }
  .flex-xxl-grow-1 {
    -ms-flex-positive: 1 !important;
        flex-grow: 1 !important;
  }
  .flex-xxl-shrink-0 {
    -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important;
  }
  .flex-xxl-shrink-1 {
    -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important;
  }
  .flex-xxl-wrap {
    -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
  }
  .flex-xxl-nowrap {
    -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important;
  }
  .flex-xxl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important;
  }
  .justify-content-xxl-start {
    -ms-flex-pack: start !important;
        justify-content: flex-start !important;
  }
  .justify-content-xxl-end {
    -ms-flex-pack: end !important;
        justify-content: flex-end !important;
  }
  .justify-content-xxl-center {
    -ms-flex-pack: center !important;
        justify-content: center !important;
  }
  .justify-content-xxl-between {
    -ms-flex-pack: justify !important;
        justify-content: space-between !important;
  }
  .justify-content-xxl-around {
    -ms-flex-pack: distribute !important;
        justify-content: space-around !important;
  }
  .justify-content-xxl-evenly {
    -ms-flex-pack: space-evenly !important;
        justify-content: space-evenly !important;
  }
  .align-items-xxl-start {
    -ms-flex-align: start !important;
        align-items: flex-start !important;
  }
  .align-items-xxl-end {
    -ms-flex-align: end !important;
        align-items: flex-end !important;
  }
  .align-items-xxl-center {
    -ms-flex-align: center !important;
        align-items: center !important;
  }
  .align-items-xxl-baseline {
    -ms-flex-align: baseline !important;
        align-items: baseline !important;
  }
  .align-items-xxl-stretch {
    -ms-flex-align: stretch !important;
        align-items: stretch !important;
  }
  .align-content-xxl-start {
    -ms-flex-line-pack: start !important;
        align-content: flex-start !important;
  }
  .align-content-xxl-end {
    -ms-flex-line-pack: end !important;
        align-content: flex-end !important;
  }
  .align-content-xxl-center {
    -ms-flex-line-pack: center !important;
        align-content: center !important;
  }
  .align-content-xxl-between {
    -ms-flex-line-pack: justify !important;
        align-content: space-between !important;
  }
  .align-content-xxl-around {
    -ms-flex-line-pack: distribute !important;
        align-content: space-around !important;
  }
  .align-content-xxl-stretch {
    -ms-flex-line-pack: stretch !important;
        align-content: stretch !important;
  }
  .align-self-xxl-auto {
    -ms-flex-item-align: auto !important;
        align-self: auto !important;
  }
  .align-self-xxl-start {
    -ms-flex-item-align: start !important;
        align-self: flex-start !important;
  }
  .align-self-xxl-end {
    -ms-flex-item-align: end !important;
        align-self: flex-end !important;
  }
  .align-self-xxl-center {
    -ms-flex-item-align: center !important;
        align-self: center !important;
  }
  .align-self-xxl-baseline {
    -ms-flex-item-align: baseline !important;
        align-self: baseline !important;
  }
  .align-self-xxl-stretch {
    -ms-flex-item-align: stretch !important;
        align-self: stretch !important;
  }
  .order-xxl-first {
    -ms-flex-order: -1 !important;
        order: -1 !important;
  }
  .order-xxl-0 {
    -ms-flex-order: 0 !important;
        order: 0 !important;
  }
  .order-xxl-1 {
    -ms-flex-order: 1 !important;
        order: 1 !important;
  }
  .order-xxl-2 {
    -ms-flex-order: 2 !important;
        order: 2 !important;
  }
  .order-xxl-3 {
    -ms-flex-order: 3 !important;
        order: 3 !important;
  }
  .order-xxl-4 {
    -ms-flex-order: 4 !important;
        order: 4 !important;
  }
  .order-xxl-5 {
    -ms-flex-order: 5 !important;
        order: 5 !important;
  }
  .order-xxl-last {
    -ms-flex-order: 6 !important;
        order: 6 !important;
  }
  .m-xxl-0 {
    margin: 0 !important;
  }
  .m-xxl-1 {
    margin: 0.25rem !important;
  }
  .m-xxl-2 {
    margin: 0.5rem !important;
  }
  .m-xxl-3 {
    margin: 1rem !important;
  }
  .m-xxl-4 {
    margin: 1.5rem !important;
  }
  .m-xxl-5 {
    margin: 3rem !important;
  }
  .m-xxl-auto {
    margin: auto !important;
  }
  .mx-xxl-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .mx-xxl-1 {
    margin-right: 0.25rem !important;
    margin-left: 0.25rem !important;
  }
  .mx-xxl-2 {
    margin-right: 0.5rem !important;
    margin-left: 0.5rem !important;
  }
  .mx-xxl-3 {
    margin-right: 1rem !important;
    margin-left: 1rem !important;
  }
  .mx-xxl-4 {
    margin-right: 1.5rem !important;
    margin-left: 1.5rem !important;
  }
  .mx-xxl-5 {
    margin-right: 3rem !important;
    margin-left: 3rem !important;
  }
  .mx-xxl-auto {
    margin-right: auto !important;
    margin-left: auto !important;
  }
  .my-xxl-0 {
    margin-top: 0 !important;
    margin-bottom: 0 !important;
  }
  .my-xxl-1 {
    margin-top: 0.25rem !important;
    margin-bottom: 0.25rem !important;
  }
  .my-xxl-2 {
    margin-top: 0.5rem !important;
    margin-bottom: 0.5rem !important;
  }
  .my-xxl-3 {
    margin-top: 1rem !important;
    margin-bottom: 1rem !important;
  }
  .my-xxl-4 {
    margin-top: 1.5rem !important;
    margin-bottom: 1.5rem !important;
  }
  .my-xxl-5 {
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
  }
  .my-xxl-auto {
    margin-top: auto !important;
    margin-bottom: auto !important;
  }
  .mt-xxl-0 {
    margin-top: 0 !important;
  }
  .mt-xxl-1 {
    margin-top: 0.25rem !important;
  }
  .mt-xxl-2 {
    margin-top: 0.5rem !important;
  }
  .mt-xxl-3 {
    margin-top: 1rem !important;
  }
  .mt-xxl-4 {
    margin-top: 1.5rem !important;
  }
  .mt-xxl-5 {
    margin-top: 3rem !important;
  }
  .mt-xxl-auto {
    margin-top: auto !important;
  }
  .mb-xxl-0 {
    margin-bottom: 0 !important;
  }
  .mb-xxl-1 {
    margin-bottom: 0.25rem !important;
  }
  .mb-xxl-2 {
    margin-bottom: 0.5rem !important;
  }
  .mb-xxl-3 {
    margin-bottom: 1rem !important;
  }
  .mb-xxl-4 {
    margin-bottom: 1.5rem !important;
  }
  .mb-xxl-5 {
    margin-bottom: 3rem !important;
  }
  .mb-xxl-auto {
    margin-bottom: auto !important;
  }
  .m-xxl-n1 {
    margin: -0.25rem !important;
  }
  .m-xxl-n2 {
    margin: -0.5rem !important;
  }
  .m-xxl-n3 {
    margin: -1rem !important;
  }
  .m-xxl-n4 {
    margin: -1.5rem !important;
  }
  .m-xxl-n5 {
    margin: -3rem !important;
  }
  .mx-xxl-n1 {
    margin-right: -0.25rem !important;
    margin-left: -0.25rem !important;
  }
  .mx-xxl-n2 {
    margin-right: -0.5rem !important;
    margin-left: -0.5rem !important;
  }
  .mx-xxl-n3 {
    margin-right: -1rem !important;
    margin-left: -1rem !important;
  }
  .mx-xxl-n4 {
    margin-right: -1.5rem !important;
    margin-left: -1.5rem !important;
  }
  .mx-xxl-n5 {
    margin-right: -3rem !important;
    margin-left: -3rem !important;
  }
  .my-xxl-n1 {
    margin-top: -0.25rem !important;
    margin-bottom: -0.25rem !important;
  }
  .my-xxl-n2 {
    margin-top: -0.5rem !important;
    margin-bottom: -0.5rem !important;
  }
  .my-xxl-n3 {
    margin-top: -1rem !important;
    margin-bottom: -1rem !important;
  }
  .my-xxl-n4 {
    margin-top: -1.5rem !important;
    margin-bottom: -1.5rem !important;
  }
  .my-xxl-n5 {
    margin-top: -3rem !important;
    margin-bottom: -3rem !important;
  }
  .mt-xxl-n1 {
    margin-top: -0.25rem !important;
  }
  .mt-xxl-n2 {
    margin-top: -0.5rem !important;
  }
  .mt-xxl-n3 {
    margin-top: -1rem !important;
  }
  .mt-xxl-n4 {
    margin-top: -1.5rem !important;
  }
  .mt-xxl-n5 {
    margin-top: -3rem !important;
  }
  .mb-xxl-n1 {
    margin-bottom: -0.25rem !important;
  }
  .mb-xxl-n2 {
    margin-bottom: -0.5rem !important;
  }
  .mb-xxl-n3 {
    margin-bottom: -1rem !important;
  }
  .mb-xxl-n4 {
    margin-bottom: -1.5rem !important;
  }
  .mb-xxl-n5 {
    margin-bottom: -3rem !important;
  }
  .p-xxl-0 {
    padding: 0 !important;
  }
  .p-xxl-1 {
    padding: 0.25rem !important;
  }
  .p-xxl-2 {
    padding: 0.5rem !important;
  }
  .p-xxl-3 {
    padding: 1rem !important;
  }
  .p-xxl-4 {
    padding: 1.5rem !important;
  }
  .p-xxl-5 {
    padding: 3rem !important;
  }
  .px-xxl-0 {
    padding-right: 0 !important;
    padding-left: 0 !important;
  }
  .px-xxl-1 {
    padding-right: 0.25rem !important;
    padding-left: 0.25rem !important;
  }
  .px-xxl-2 {
    padding-right: 0.5rem !important;
    padding-left: 0.5rem !important;
  }
  .px-xxl-3 {
    padding-right: 1rem !important;
    padding-left: 1rem !important;
  }
  .px-xxl-4 {
    padding-right: 1.5rem !important;
    padding-left: 1.5rem !important;
  }
  .px-xxl-5 {
    padding-right: 3rem !important;
    padding-left: 3rem !important;
  }
  .py-xxl-0 {
    padding-top: 0 !important;
    padding-bottom: 0 !important;
  }
  .py-xxl-1 {
    padding-top: 0.25rem !important;
    padding-bottom: 0.25rem !important;
  }
  .py-xxl-2 {
    padding-top: 0.5rem !important;
    padding-bottom: 0.5rem !important;
  }
  .py-xxl-3 {
    padding-top: 1rem !important;
    padding-bottom: 1rem !important;
  }
  .py-xxl-4 {
    padding-top: 1.5rem !important;
    padding-bottom: 1.5rem !important;
  }
  .py-xxl-5 {
    padding-top: 3rem !important;
    padding-bottom: 3rem !important;
  }
  .pt-xxl-0 {
    padding-top: 0 !important;
  }
  .pt-xxl-1 {
    padding-top: 0.25rem !important;
  }
  .pt-xxl-2 {
    padding-top: 0.5rem !important;
  }
  .pt-xxl-3 {
    padding-top: 1rem !important;
  }
  .pt-xxl-4 {
    padding-top: 1.5rem !important;
  }
  .pt-xxl-5 {
    padding-top: 3rem !important;
  }
  .pb-xxl-0 {
    padding-bottom: 0 !important;
  }
  .pb-xxl-1 {
    padding-bottom: 0.25rem !important;
  }
  .pb-xxl-2 {
    padding-bottom: 0.5rem !important;
  }
  .pb-xxl-3 {
    padding-bottom: 1rem !important;
  }
  .pb-xxl-4 {
    padding-bottom: 1.5rem !important;
  }
  .pb-xxl-5 {
    padding-bottom: 3rem !important;
  }
  .gap-xxl-0 {
    gap: 0 !important;
  }
  .gap-xxl-1 {
    gap: 0.25rem !important;
  }
  .gap-xxl-2 {
    gap: 0.5rem !important;
  }
  .gap-xxl-3 {
    gap: 1rem !important;
  }
  .gap-xxl-4 {
    gap: 1.5rem !important;
  }
  .gap-xxl-5 {
    gap: 3rem !important;
  }
  .row-gap-xxl-0 {
    row-gap: 0 !important;
  }
  .row-gap-xxl-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-xxl-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-xxl-3 {
    row-gap: 1rem !important;
  }
  .row-gap-xxl-4 {
    row-gap: 1.5rem !important;
  }
  .row-gap-xxl-5 {
    row-gap: 3rem !important;
  }
  .column-gap-xxl-0 {
    -webkit-column-gap: 0 !important;
       -moz-column-gap: 0 !important;
            column-gap: 0 !important;
  }
  .column-gap-xxl-1 {
    -webkit-column-gap: 0.25rem !important;
       -moz-column-gap: 0.25rem !important;
            column-gap: 0.25rem !important;
  }
  .column-gap-xxl-2 {
    -webkit-column-gap: 0.5rem !important;
       -moz-column-gap: 0.5rem !important;
            column-gap: 0.5rem !important;
  }
  .column-gap-xxl-3 {
    -webkit-column-gap: 1rem !important;
       -moz-column-gap: 1rem !important;
            column-gap: 1rem !important;
  }
  .column-gap-xxl-4 {
    -webkit-column-gap: 1.5rem !important;
       -moz-column-gap: 1.5rem !important;
            column-gap: 1.5rem !important;
  }
  .column-gap-xxl-5 {
    -webkit-column-gap: 3rem !important;
       -moz-column-gap: 3rem !important;
            column-gap: 3rem !important;
  }
}
@media (min-width: 1200px) {
  .fs-1 {
    font-size: 2.375rem !important;
  }
  .fs-2 {
    font-size: 2rem !important;
  }
  .fs-3 {
    font-size: 1.625rem !important;
  }
  .fs-4 {
    font-size: 1.375rem !important;
  }
}
@media print {
  .d-print-inline {
    display: inline !important;
  }
  .d-print-inline-block {
    display: inline-block !important;
  }
  .d-print-block {
    display: block !important;
  }
  .d-print-grid {
    display: grid !important;
  }
  .d-print-table {
    display: table !important;
  }
  .d-print-table-row {
    display: table-row !important;
  }
  .d-print-table-cell {
    display: table-cell !important;
  }
  .d-print-flex {
    display: -ms-flexbox !important;
    display: flex !important;
  }
  .d-print-inline-flex {
    display: -ms-inline-flexbox !important;
    display: inline-flex !important;
  }
  .d-print-none {
    display: none !important;
  }
}
.object-fit-contain {
  -o-object-fit: contain !important;
     object-fit: contain !important;
}

.object-fit-cover {
  -o-object-fit: cover !important;
     object-fit: cover !important;
}

.object-fit-fill {
  -o-object-fit: fill !important;
     object-fit: fill !important;
}

.object-fit-scale {
  -o-object-fit: scale-down !important;
     object-fit: scale-down !important;
}

.object-fit-none {
  -o-object-fit: none !important;
     object-fit: none !important;
}

.border-solid {
  border-style: solid !important;
}

.border-dashed {
  border-style: dashed !important;
}

.border-none {
  border-style: none !important;
}

.border-opacity-10 {
  --bs-border-opacity: 0.1;
}

.border-opacity-25 {
  --bs-border-opacity: 0.25;
}

.border-opacity-50 {
  --bs-border-opacity: 0.5;
}

.border-opacity-75 {
  --bs-border-opacity: 0.75;
}

.border-opacity-100 {
  --bs-border-opacity: 1;
}

.row-gap-0 {
  row-gap: 0 !important;
}

.row-gap-1 {
  row-gap: 0.25rem !important;
}

.row-gap-2 {
  row-gap: 0.5rem !important;
}

.row-gap-3 {
  row-gap: 1rem !important;
}

.row-gap-4 {
  row-gap: 1.5rem !important;
}

.row-gap-5 {
  row-gap: 3rem !important;
}

.column-gap-0 {
  -webkit-column-gap: 0 !important;
     -moz-column-gap: 0 !important;
          column-gap: 0 !important;
}

.column-gap-1 {
  -webkit-column-gap: 0.25rem !important;
     -moz-column-gap: 0.25rem !important;
          column-gap: 0.25rem !important;
}

.column-gap-2 {
  -webkit-column-gap: 0.5rem !important;
     -moz-column-gap: 0.5rem !important;
          column-gap: 0.5rem !important;
}

.column-gap-3 {
  -webkit-column-gap: 1rem !important;
     -moz-column-gap: 1rem !important;
          column-gap: 1rem !important;
}

.column-gap-4 {
  -webkit-column-gap: 1.5rem !important;
     -moz-column-gap: 1.5rem !important;
          column-gap: 1.5rem !important;
}

.column-gap-5 {
  -webkit-column-gap: 3rem !important;
     -moz-column-gap: 3rem !important;
          column-gap: 3rem !important;
}

.text-opacity-25 {
  --bs-text-opacity: 0.25;
}

.text-opacity-50 {
  --bs-text-opacity: 0.5;
}

.text-opacity-75 {
  --bs-text-opacity: 0.75;
}

.text-opacity-100 {
  --bs-text-opacity: 1;
}

.link-opacity-10 {
  --bs-link-opacity: 0.1;
}

.link-opacity-10-hover:hover {
  --bs-link-opacity: 0.1;
}

.link-opacity-25 {
  --bs-link-opacity: 0.25;
}

.link-opacity-25-hover:hover {
  --bs-link-opacity: 0.25;
}

.link-opacity-50 {
  --bs-link-opacity: 0.5;
}

.link-opacity-50-hover:hover {
  --bs-link-opacity: 0.5;
}

.link-opacity-75 {
  --bs-link-opacity: 0.75;
}

.link-opacity-75-hover:hover {
  --bs-link-opacity: 0.75;
}

.link-opacity-100 {
  --bs-link-opacity: 1;
}

.link-opacity-100-hover:hover {
  --bs-link-opacity: 1;
}

.link-offset-1 {
  text-underline-offset: 0.125em !important;
}

.link-offset-1-hover:hover {
  text-underline-offset: 0.125em !important;
}

.link-offset-2 {
  text-underline-offset: 0.25em !important;
}

.link-offset-2-hover:hover {
  text-underline-offset: 0.25em !important;
}

.link-offset-3 {
  text-underline-offset: 0.375em !important;
}

.link-offset-3-hover:hover {
  text-underline-offset: 0.375em !important;
}

.link-underline-primary {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-primary-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-primary-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-secondary {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-secondary-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-secondary-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-success {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-success-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-success-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-info {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-info-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-info-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-warning {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-warning-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-warning-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-danger {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-danger-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-danger-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-light {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-light-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-light-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-dark {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-dark-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-dark-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline-gray {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-gray-rgb), var(--bs-link-underline-opacity)) !important;
          text-decoration-color: rgba(var(--bs-gray-rgb), var(--bs-link-underline-opacity)) !important;
}

.link-underline {
  --bs-link-underline-opacity: 1;
  -webkit-text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-underline-opacity, 1)) !important;
          text-decoration-color: rgba(var(--bs-link-color-rgb), var(--bs-link-underline-opacity, 1)) !important;
}

.link-underline-opacity-0 {
  --bs-link-underline-opacity: 0;
}

.link-underline-opacity-0-hover:hover {
  --bs-link-underline-opacity: 0;
}

.link-underline-opacity-10 {
  --bs-link-underline-opacity: 0.1;
}

.link-underline-opacity-10-hover:hover {
  --bs-link-underline-opacity: 0.1;
}

.link-underline-opacity-25 {
  --bs-link-underline-opacity: 0.25;
}

.link-underline-opacity-25-hover:hover {
  --bs-link-underline-opacity: 0.25;
}

.link-underline-opacity-50 {
  --bs-link-underline-opacity: 0.5;
}

.link-underline-opacity-50-hover:hover {
  --bs-link-underline-opacity: 0.5;
}

.link-underline-opacity-75 {
  --bs-link-underline-opacity: 0.75;
}

.link-underline-opacity-75-hover:hover {
  --bs-link-underline-opacity: 0.75;
}

.link-underline-opacity-100 {
  --bs-link-underline-opacity: 1;
}

.link-underline-opacity-100-hover:hover {
  --bs-link-underline-opacity: 1;
}

.bg-opacity-10 {
  --bs-bg-opacity: 0.1;
}

.bg-opacity-25 {
  --bs-bg-opacity: 0.25;
}

.bg-opacity-50 {
  --bs-bg-opacity: 0.5;
}

.bg-opacity-75 {
  --bs-bg-opacity: 0.75;
}

.bg-opacity-100 {
  --bs-bg-opacity: 1;
}

.bg-primary-subtle {
  background-color: var(--bs-primary-bg-subtle) !important;
}

.bg-secondary-subtle {
  background-color: var(--bs-secondary-bg-subtle) !important;
}

.bg-success-subtle {
  background-color: var(--bs-success-bg-subtle) !important;
}

.bg-info-subtle {
  background-color: var(--bs-info-bg-subtle) !important;
}

.bg-warning-subtle {
  background-color: var(--bs-warning-bg-subtle) !important;
}

.bg-danger-subtle {
  background-color: var(--bs-danger-bg-subtle) !important;
}

.bg-light-subtle {
  background-color: var(--bs-light-bg-subtle) !important;
}

.bg-dark-subtle {
  background-color: var(--bs-dark-bg-subtle) !important;
}

.z-n1 {
  z-index: -1 !important;
}

.z-0 {
  z-index: 0 !important;
}

.z-1 {
  z-index: 1 !important;
}

.z-2 {
  z-index: 2 !important;
}

.z-3 {
  z-index: 3 !important;
}

.z-4 {
  z-index: 4 !important;
}

.z-5 {
  z-index: 5 !important;
}

.float-start {
  float: left !important;
}

.float-end {
  float: right !important;
}

.float-none {
  float: none !important;
}

.end-0 {
  right: 0 !important;
}

.end-50 {
  right: 50% !important;
}

.end-100 {
  right: 100% !important;
}

.start-0 {
  left: 0 !important;
}

.start-50 {
  left: 50% !important;
}

.start-100 {
  left: 100% !important;
}

.translate-middle {
  -webkit-transform: translate(-50%, -50%) !important;
          transform: translate(-50%, -50%) !important;
}

.translate-middle-x {
  -webkit-transform: translateX(-50%) !important;
          transform: translateX(-50%) !important;
}

.translate-middle-y {
  -webkit-transform: translateY(-50%) !important;
          transform: translateY(-50%) !important;
}

.border-end {
  border-right: 1px solid #e7e7e8 !important;
}

.border-end-0 {
  border-right: 0 !important;
}

.border-start {
  border-left: 1px solid #e7e7e8 !important;
}

.border-start-0 {
  border-left: 0 !important;
}

.text-start {
  text-align: left !important;
}

.text-end {
  text-align: right !important;
}

.text-center {
  text-align: center !important;
}

.rounded-end {
  border-top-right-radius: 0.3125rem !important;
  border-bottom-right-radius: 0.3125rem !important;
}

.rounded-start {
  border-bottom-left-radius: 0.3125rem !important;
  border-top-left-radius: 0.3125rem !important;
}

.rounded-start-top {
  border-top-left-radius: 0.3125rem !important;
}

.rounded-start-bottom {
  border-bottom-left-radius: 0.3125rem !important;
}

.rounded-end-top {
  border-top-right-radius: 0.3125rem !important;
}

.rounded-end-bottom {
  border-bottom-right-radius: 0.3125rem !important;
}

.me-0 {
  margin-right: 0 !important;
}

.me-1 {
  margin-right: 0.25rem !important;
}

.me-2 {
  margin-right: 0.5rem !important;
}

.me-3 {
  margin-right: 1rem !important;
}

.me-4 {
  margin-right: 1.5rem !important;
}

.me-5 {
  margin-right: 3rem !important;
}

.me-auto {
  margin-right: auto !important;
}

.ms-0 {
  margin-left: 0 !important;
}

.ms-1 {
  margin-left: 0.25rem !important;
}

.ms-2 {
  margin-left: 0.5rem !important;
}

.ms-3 {
  margin-left: 1rem !important;
}

.ms-4 {
  margin-left: 1.5rem !important;
}

.ms-5 {
  margin-left: 3rem !important;
}

.ms-auto {
  margin-left: auto !important;
}

.me-n1 {
  margin-right: -0.25rem !important;
}

.me-n2 {
  margin-right: -0.5rem !important;
}

.me-n3 {
  margin-right: -1rem !important;
}

.me-n4 {
  margin-right: -1.5rem !important;
}

.me-n5 {
  margin-right: -3rem !important;
}

.ms-n1 {
  margin-left: -0.25rem !important;
}

.ms-n2 {
  margin-left: -0.5rem !important;
}

.ms-n3 {
  margin-left: -1rem !important;
}

.ms-n4 {
  margin-left: -1.5rem !important;
}

.ms-n5 {
  margin-left: -3rem !important;
}

.pe-0 {
  padding-right: 0 !important;
}

.pe-1 {
  padding-right: 0.25rem !important;
}

.pe-2 {
  padding-right: 0.5rem !important;
}

.pe-3 {
  padding-right: 1rem !important;
}

.pe-4 {
  padding-right: 1.5rem !important;
}

.pe-5 {
  padding-right: 3rem !important;
}

.ps-0 {
  padding-left: 0 !important;
}

.ps-1 {
  padding-left: 0.25rem !important;
}

.ps-2 {
  padding-left: 0.5rem !important;
}

.ps-3 {
  padding-left: 1rem !important;
}

.ps-4 {
  padding-left: 1.5rem !important;
}

.ps-5 {
  padding-left: 3rem !important;
}

.rotate-0 {
  -webkit-transform: rotate(0deg) !important;
          transform: rotate(0deg) !important;
}

.rotate-90 {
  -webkit-transform: rotate(90deg) !important;
          transform: rotate(90deg) !important;
}

.rotate-180 {
  -webkit-transform: rotate(180deg) !important;
          transform: rotate(180deg) !important;
}

.rotate-270 {
  -webkit-transform: rotate(270deg) !important;
          transform: rotate(270deg) !important;
}

.rotate-n90 {
  -webkit-transform: rotate(-90deg) !important;
          transform: rotate(-90deg) !important;
}

.rotate-n180 {
  -webkit-transform: rotate(-180deg) !important;
          transform: rotate(-180deg) !important;
}

.rotate-n270 {
  -webkit-transform: rotate(-270deg) !important;
          transform: rotate(-270deg) !important;
}

.scaleX-n1 {
  -webkit-transform: scaleX(-1) !important;
          transform: scaleX(-1) !important;
}

.scaleY-n1 {
  -webkit-transform: scaleY(-1) !important;
          transform: scaleY(-1) !important;
}

@media (min-width: 576px) {
  .object-fit-sm-contain {
    -o-object-fit: contain !important;
       object-fit: contain !important;
  }
  .object-fit-sm-cover {
    -o-object-fit: cover !important;
       object-fit: cover !important;
  }
  .object-fit-sm-fill {
    -o-object-fit: fill !important;
       object-fit: fill !important;
  }
  .object-fit-sm-scale {
    -o-object-fit: scale-down !important;
       object-fit: scale-down !important;
  }
  .object-fit-sm-none {
    -o-object-fit: none !important;
       object-fit: none !important;
  }
  .border-sm-solid {
    border-style: solid !important;
  }
  .border-sm-dashed {
    border-style: dashed !important;
  }
  .border-sm-none {
    border-style: none !important;
  }
  .row-gap-sm-0 {
    row-gap: 0 !important;
  }
  .row-gap-sm-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-sm-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-sm-3 {
    row-gap: 1rem !important;
  }
  .row-gap-sm-4 {
    row-gap: 1.5rem !important;
  }
  .row-gap-sm-5 {
    row-gap: 3rem !important;
  }
  .column-gap-sm-0 {
    -webkit-column-gap: 0 !important;
       -moz-column-gap: 0 !important;
            column-gap: 0 !important;
  }
  .column-gap-sm-1 {
    -webkit-column-gap: 0.25rem !important;
       -moz-column-gap: 0.25rem !important;
            column-gap: 0.25rem !important;
  }
  .column-gap-sm-2 {
    -webkit-column-gap: 0.5rem !important;
       -moz-column-gap: 0.5rem !important;
            column-gap: 0.5rem !important;
  }
  .column-gap-sm-3 {
    -webkit-column-gap: 1rem !important;
       -moz-column-gap: 1rem !important;
            column-gap: 1rem !important;
  }
  .column-gap-sm-4 {
    -webkit-column-gap: 1.5rem !important;
       -moz-column-gap: 1.5rem !important;
            column-gap: 1.5rem !important;
  }
  .column-gap-sm-5 {
    -webkit-column-gap: 3rem !important;
       -moz-column-gap: 3rem !important;
            column-gap: 3rem !important;
  }
  .float-sm-start {
    float: left !important;
  }
  .float-sm-end {
    float: right !important;
  }
  .float-sm-none {
    float: none !important;
  }
  .text-sm-start {
    text-align: left !important;
  }
  .text-sm-end {
    text-align: right !important;
  }
  .text-sm-center {
    text-align: center !important;
  }
  .me-sm-0 {
    margin-right: 0 !important;
  }
  .me-sm-1 {
    margin-right: 0.25rem !important;
  }
  .me-sm-2 {
    margin-right: 0.5rem !important;
  }
  .me-sm-3 {
    margin-right: 1rem !important;
  }
  .me-sm-4 {
    margin-right: 1.5rem !important;
  }
  .me-sm-5 {
    margin-right: 3rem !important;
  }
  .me-sm-auto {
    margin-right: auto !important;
  }
  .ms-sm-0 {
    margin-left: 0 !important;
  }
  .ms-sm-1 {
    margin-left: 0.25rem !important;
  }
  .ms-sm-2 {
    margin-left: 0.5rem !important;
  }
  .ms-sm-3 {
    margin-left: 1rem !important;
  }
  .ms-sm-4 {
    margin-left: 1.5rem !important;
  }
  .ms-sm-5 {
    margin-left: 3rem !important;
  }
  .ms-sm-auto {
    margin-left: auto !important;
  }
  .me-sm-n1 {
    margin-right: -0.25rem !important;
  }
  .me-sm-n2 {
    margin-right: -0.5rem !important;
  }
  .me-sm-n3 {
    margin-right: -1rem !important;
  }
  .me-sm-n4 {
    margin-right: -1.5rem !important;
  }
  .me-sm-n5 {
    margin-right: -3rem !important;
  }
  .ms-sm-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-sm-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-sm-n3 {
    margin-left: -1rem !important;
  }
  .ms-sm-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-sm-n5 {
    margin-left: -3rem !important;
  }
  .pe-sm-0 {
    padding-right: 0 !important;
  }
  .pe-sm-1 {
    padding-right: 0.25rem !important;
  }
  .pe-sm-2 {
    padding-right: 0.5rem !important;
  }
  .pe-sm-3 {
    padding-right: 1rem !important;
  }
  .pe-sm-4 {
    padding-right: 1.5rem !important;
  }
  .pe-sm-5 {
    padding-right: 3rem !important;
  }
  .ps-sm-0 {
    padding-left: 0 !important;
  }
  .ps-sm-1 {
    padding-left: 0.25rem !important;
  }
  .ps-sm-2 {
    padding-left: 0.5rem !important;
  }
  .ps-sm-3 {
    padding-left: 1rem !important;
  }
  .ps-sm-4 {
    padding-left: 1.5rem !important;
  }
  .ps-sm-5 {
    padding-left: 3rem !important;
  }
}
@media (min-width: 768px) {
  .object-fit-md-contain {
    -o-object-fit: contain !important;
       object-fit: contain !important;
  }
  .object-fit-md-cover {
    -o-object-fit: cover !important;
       object-fit: cover !important;
  }
  .object-fit-md-fill {
    -o-object-fit: fill !important;
       object-fit: fill !important;
  }
  .object-fit-md-scale {
    -o-object-fit: scale-down !important;
       object-fit: scale-down !important;
  }
  .object-fit-md-none {
    -o-object-fit: none !important;
       object-fit: none !important;
  }
  .border-md-solid {
    border-style: solid !important;
  }
  .border-md-dashed {
    border-style: dashed !important;
  }
  .border-md-none {
    border-style: none !important;
  }
  .row-gap-md-0 {
    row-gap: 0 !important;
  }
  .row-gap-md-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-md-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-md-3 {
    row-gap: 1rem !important;
  }
  .row-gap-md-4 {
    row-gap: 1.5rem !important;
  }
  .row-gap-md-5 {
    row-gap: 3rem !important;
  }
  .column-gap-md-0 {
    -webkit-column-gap: 0 !important;
       -moz-column-gap: 0 !important;
            column-gap: 0 !important;
  }
  .column-gap-md-1 {
    -webkit-column-gap: 0.25rem !important;
       -moz-column-gap: 0.25rem !important;
            column-gap: 0.25rem !important;
  }
  .column-gap-md-2 {
    -webkit-column-gap: 0.5rem !important;
       -moz-column-gap: 0.5rem !important;
            column-gap: 0.5rem !important;
  }
  .column-gap-md-3 {
    -webkit-column-gap: 1rem !important;
       -moz-column-gap: 1rem !important;
            column-gap: 1rem !important;
  }
  .column-gap-md-4 {
    -webkit-column-gap: 1.5rem !important;
       -moz-column-gap: 1.5rem !important;
            column-gap: 1.5rem !important;
  }
  .column-gap-md-5 {
    -webkit-column-gap: 3rem !important;
       -moz-column-gap: 3rem !important;
            column-gap: 3rem !important;
  }
  .float-md-start {
    float: left !important;
  }
  .float-md-end {
    float: right !important;
  }
  .float-md-none {
    float: none !important;
  }
  .text-md-start {
    text-align: left !important;
  }
  .text-md-end {
    text-align: right !important;
  }
  .text-md-center {
    text-align: center !important;
  }
  .me-md-0 {
    margin-right: 0 !important;
  }
  .me-md-1 {
    margin-right: 0.25rem !important;
  }
  .me-md-2 {
    margin-right: 0.5rem !important;
  }
  .me-md-3 {
    margin-right: 1rem !important;
  }
  .me-md-4 {
    margin-right: 1.5rem !important;
  }
  .me-md-5 {
    margin-right: 3rem !important;
  }
  .me-md-auto {
    margin-right: auto !important;
  }
  .ms-md-0 {
    margin-left: 0 !important;
  }
  .ms-md-1 {
    margin-left: 0.25rem !important;
  }
  .ms-md-2 {
    margin-left: 0.5rem !important;
  }
  .ms-md-3 {
    margin-left: 1rem !important;
  }
  .ms-md-4 {
    margin-left: 1.5rem !important;
  }
  .ms-md-5 {
    margin-left: 3rem !important;
  }
  .ms-md-auto {
    margin-left: auto !important;
  }
  .me-md-n1 {
    margin-right: -0.25rem !important;
  }
  .me-md-n2 {
    margin-right: -0.5rem !important;
  }
  .me-md-n3 {
    margin-right: -1rem !important;
  }
  .me-md-n4 {
    margin-right: -1.5rem !important;
  }
  .me-md-n5 {
    margin-right: -3rem !important;
  }
  .ms-md-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-md-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-md-n3 {
    margin-left: -1rem !important;
  }
  .ms-md-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-md-n5 {
    margin-left: -3rem !important;
  }
  .pe-md-0 {
    padding-right: 0 !important;
  }
  .pe-md-1 {
    padding-right: 0.25rem !important;
  }
  .pe-md-2 {
    padding-right: 0.5rem !important;
  }
  .pe-md-3 {
    padding-right: 1rem !important;
  }
  .pe-md-4 {
    padding-right: 1.5rem !important;
  }
  .pe-md-5 {
    padding-right: 3rem !important;
  }
  .ps-md-0 {
    padding-left: 0 !important;
  }
  .ps-md-1 {
    padding-left: 0.25rem !important;
  }
  .ps-md-2 {
    padding-left: 0.5rem !important;
  }
  .ps-md-3 {
    padding-left: 1rem !important;
  }
  .ps-md-4 {
    padding-left: 1.5rem !important;
  }
  .ps-md-5 {
    padding-left: 3rem !important;
  }
}
@media (min-width: 992px) {
  .object-fit-lg-contain {
    -o-object-fit: contain !important;
       object-fit: contain !important;
  }
  .object-fit-lg-cover {
    -o-object-fit: cover !important;
       object-fit: cover !important;
  }
  .object-fit-lg-fill {
    -o-object-fit: fill !important;
       object-fit: fill !important;
  }
  .object-fit-lg-scale {
    -o-object-fit: scale-down !important;
       object-fit: scale-down !important;
  }
  .object-fit-lg-none {
    -o-object-fit: none !important;
       object-fit: none !important;
  }
  .border-lg-solid {
    border-style: solid !important;
  }
  .border-lg-dashed {
    border-style: dashed !important;
  }
  .border-lg-none {
    border-style: none !important;
  }
  .row-gap-lg-0 {
    row-gap: 0 !important;
  }
  .row-gap-lg-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-lg-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-lg-3 {
    row-gap: 1rem !important;
  }
  .row-gap-lg-4 {
    row-gap: 1.5rem !important;
  }
  .row-gap-lg-5 {
    row-gap: 3rem !important;
  }
  .column-gap-lg-0 {
    -webkit-column-gap: 0 !important;
       -moz-column-gap: 0 !important;
            column-gap: 0 !important;
  }
  .column-gap-lg-1 {
    -webkit-column-gap: 0.25rem !important;
       -moz-column-gap: 0.25rem !important;
            column-gap: 0.25rem !important;
  }
  .column-gap-lg-2 {
    -webkit-column-gap: 0.5rem !important;
       -moz-column-gap: 0.5rem !important;
            column-gap: 0.5rem !important;
  }
  .column-gap-lg-3 {
    -webkit-column-gap: 1rem !important;
       -moz-column-gap: 1rem !important;
            column-gap: 1rem !important;
  }
  .column-gap-lg-4 {
    -webkit-column-gap: 1.5rem !important;
       -moz-column-gap: 1.5rem !important;
            column-gap: 1.5rem !important;
  }
  .column-gap-lg-5 {
    -webkit-column-gap: 3rem !important;
       -moz-column-gap: 3rem !important;
            column-gap: 3rem !important;
  }
  .float-lg-start {
    float: left !important;
  }
  .float-lg-end {
    float: right !important;
  }
  .float-lg-none {
    float: none !important;
  }
  .text-lg-start {
    text-align: left !important;
  }
  .text-lg-end {
    text-align: right !important;
  }
  .text-lg-center {
    text-align: center !important;
  }
  .me-lg-0 {
    margin-right: 0 !important;
  }
  .me-lg-1 {
    margin-right: 0.25rem !important;
  }
  .me-lg-2 {
    margin-right: 0.5rem !important;
  }
  .me-lg-3 {
    margin-right: 1rem !important;
  }
  .me-lg-4 {
    margin-right: 1.5rem !important;
  }
  .me-lg-5 {
    margin-right: 3rem !important;
  }
  .me-lg-auto {
    margin-right: auto !important;
  }
  .ms-lg-0 {
    margin-left: 0 !important;
  }
  .ms-lg-1 {
    margin-left: 0.25rem !important;
  }
  .ms-lg-2 {
    margin-left: 0.5rem !important;
  }
  .ms-lg-3 {
    margin-left: 1rem !important;
  }
  .ms-lg-4 {
    margin-left: 1.5rem !important;
  }
  .ms-lg-5 {
    margin-left: 3rem !important;
  }
  .ms-lg-auto {
    margin-left: auto !important;
  }
  .me-lg-n1 {
    margin-right: -0.25rem !important;
  }
  .me-lg-n2 {
    margin-right: -0.5rem !important;
  }
  .me-lg-n3 {
    margin-right: -1rem !important;
  }
  .me-lg-n4 {
    margin-right: -1.5rem !important;
  }
  .me-lg-n5 {
    margin-right: -3rem !important;
  }
  .ms-lg-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-lg-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-lg-n3 {
    margin-left: -1rem !important;
  }
  .ms-lg-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-lg-n5 {
    margin-left: -3rem !important;
  }
  .pe-lg-0 {
    padding-right: 0 !important;
  }
  .pe-lg-1 {
    padding-right: 0.25rem !important;
  }
  .pe-lg-2 {
    padding-right: 0.5rem !important;
  }
  .pe-lg-3 {
    padding-right: 1rem !important;
  }
  .pe-lg-4 {
    padding-right: 1.5rem !important;
  }
  .pe-lg-5 {
    padding-right: 3rem !important;
  }
  .ps-lg-0 {
    padding-left: 0 !important;
  }
  .ps-lg-1 {
    padding-left: 0.25rem !important;
  }
  .ps-lg-2 {
    padding-left: 0.5rem !important;
  }
  .ps-lg-3 {
    padding-left: 1rem !important;
  }
  .ps-lg-4 {
    padding-left: 1.5rem !important;
  }
  .ps-lg-5 {
    padding-left: 3rem !important;
  }
}
@media (min-width: 1200px) {
  .object-fit-xl-contain {
    -o-object-fit: contain !important;
       object-fit: contain !important;
  }
  .object-fit-xl-cover {
    -o-object-fit: cover !important;
       object-fit: cover !important;
  }
  .object-fit-xl-fill {
    -o-object-fit: fill !important;
       object-fit: fill !important;
  }
  .object-fit-xl-scale {
    -o-object-fit: scale-down !important;
       object-fit: scale-down !important;
  }
  .object-fit-xl-none {
    -o-object-fit: none !important;
       object-fit: none !important;
  }
  .border-xl-solid {
    border-style: solid !important;
  }
  .border-xl-dashed {
    border-style: dashed !important;
  }
  .border-xl-none {
    border-style: none !important;
  }
  .row-gap-xl-0 {
    row-gap: 0 !important;
  }
  .row-gap-xl-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-xl-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-xl-3 {
    row-gap: 1rem !important;
  }
  .row-gap-xl-4 {
    row-gap: 1.5rem !important;
  }
  .row-gap-xl-5 {
    row-gap: 3rem !important;
  }
  .column-gap-xl-0 {
    -webkit-column-gap: 0 !important;
       -moz-column-gap: 0 !important;
            column-gap: 0 !important;
  }
  .column-gap-xl-1 {
    -webkit-column-gap: 0.25rem !important;
       -moz-column-gap: 0.25rem !important;
            column-gap: 0.25rem !important;
  }
  .column-gap-xl-2 {
    -webkit-column-gap: 0.5rem !important;
       -moz-column-gap: 0.5rem !important;
            column-gap: 0.5rem !important;
  }
  .column-gap-xl-3 {
    -webkit-column-gap: 1rem !important;
       -moz-column-gap: 1rem !important;
            column-gap: 1rem !important;
  }
  .column-gap-xl-4 {
    -webkit-column-gap: 1.5rem !important;
       -moz-column-gap: 1.5rem !important;
            column-gap: 1.5rem !important;
  }
  .column-gap-xl-5 {
    -webkit-column-gap: 3rem !important;
       -moz-column-gap: 3rem !important;
            column-gap: 3rem !important;
  }
  .float-xl-start {
    float: left !important;
  }
  .float-xl-end {
    float: right !important;
  }
  .float-xl-none {
    float: none !important;
  }
  .text-xl-start {
    text-align: left !important;
  }
  .text-xl-end {
    text-align: right !important;
  }
  .text-xl-center {
    text-align: center !important;
  }
  .me-xl-0 {
    margin-right: 0 !important;
  }
  .me-xl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xl-3 {
    margin-right: 1rem !important;
  }
  .me-xl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xl-5 {
    margin-right: 3rem !important;
  }
  .me-xl-auto {
    margin-right: auto !important;
  }
  .ms-xl-0 {
    margin-left: 0 !important;
  }
  .ms-xl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xl-3 {
    margin-left: 1rem !important;
  }
  .ms-xl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xl-5 {
    margin-left: 3rem !important;
  }
  .ms-xl-auto {
    margin-left: auto !important;
  }
  .me-xl-n1 {
    margin-right: -0.25rem !important;
  }
  .me-xl-n2 {
    margin-right: -0.5rem !important;
  }
  .me-xl-n3 {
    margin-right: -1rem !important;
  }
  .me-xl-n4 {
    margin-right: -1.5rem !important;
  }
  .me-xl-n5 {
    margin-right: -3rem !important;
  }
  .ms-xl-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-xl-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-xl-n3 {
    margin-left: -1rem !important;
  }
  .ms-xl-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-xl-n5 {
    margin-left: -3rem !important;
  }
  .pe-xl-0 {
    padding-right: 0 !important;
  }
  .pe-xl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xl-3 {
    padding-right: 1rem !important;
  }
  .pe-xl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xl-5 {
    padding-right: 3rem !important;
  }
  .ps-xl-0 {
    padding-left: 0 !important;
  }
  .ps-xl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xl-3 {
    padding-left: 1rem !important;
  }
  .ps-xl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xl-5 {
    padding-left: 3rem !important;
  }
}
@media (min-width: 1400px) {
  .object-fit-xxl-contain {
    -o-object-fit: contain !important;
       object-fit: contain !important;
  }
  .object-fit-xxl-cover {
    -o-object-fit: cover !important;
       object-fit: cover !important;
  }
  .object-fit-xxl-fill {
    -o-object-fit: fill !important;
       object-fit: fill !important;
  }
  .object-fit-xxl-scale {
    -o-object-fit: scale-down !important;
       object-fit: scale-down !important;
  }
  .object-fit-xxl-none {
    -o-object-fit: none !important;
       object-fit: none !important;
  }
  .border-xxl-solid {
    border-style: solid !important;
  }
  .border-xxl-dashed {
    border-style: dashed !important;
  }
  .border-xxl-none {
    border-style: none !important;
  }
  .row-gap-xxl-0 {
    row-gap: 0 !important;
  }
  .row-gap-xxl-1 {
    row-gap: 0.25rem !important;
  }
  .row-gap-xxl-2 {
    row-gap: 0.5rem !important;
  }
  .row-gap-xxl-3 {
    row-gap: 1rem !important;
  }
  .row-gap-xxl-4 {
    row-gap: 1.5rem !important;
  }
  .row-gap-xxl-5 {
    row-gap: 3rem !important;
  }
  .column-gap-xxl-0 {
    -webkit-column-gap: 0 !important;
       -moz-column-gap: 0 !important;
            column-gap: 0 !important;
  }
  .column-gap-xxl-1 {
    -webkit-column-gap: 0.25rem !important;
       -moz-column-gap: 0.25rem !important;
            column-gap: 0.25rem !important;
  }
  .column-gap-xxl-2 {
    -webkit-column-gap: 0.5rem !important;
       -moz-column-gap: 0.5rem !important;
            column-gap: 0.5rem !important;
  }
  .column-gap-xxl-3 {
    -webkit-column-gap: 1rem !important;
       -moz-column-gap: 1rem !important;
            column-gap: 1rem !important;
  }
  .column-gap-xxl-4 {
    -webkit-column-gap: 1.5rem !important;
       -moz-column-gap: 1.5rem !important;
            column-gap: 1.5rem !important;
  }
  .column-gap-xxl-5 {
    -webkit-column-gap: 3rem !important;
       -moz-column-gap: 3rem !important;
            column-gap: 3rem !important;
  }
  .float-xxl-start {
    float: left !important;
  }
  .float-xxl-end {
    float: right !important;
  }
  .float-xxl-none {
    float: none !important;
  }
  .text-xxl-start {
    text-align: left !important;
  }
  .text-xxl-end {
    text-align: right !important;
  }
  .text-xxl-center {
    text-align: center !important;
  }
  .me-xxl-0 {
    margin-right: 0 !important;
  }
  .me-xxl-1 {
    margin-right: 0.25rem !important;
  }
  .me-xxl-2 {
    margin-right: 0.5rem !important;
  }
  .me-xxl-3 {
    margin-right: 1rem !important;
  }
  .me-xxl-4 {
    margin-right: 1.5rem !important;
  }
  .me-xxl-5 {
    margin-right: 3rem !important;
  }
  .me-xxl-auto {
    margin-right: auto !important;
  }
  .ms-xxl-0 {
    margin-left: 0 !important;
  }
  .ms-xxl-1 {
    margin-left: 0.25rem !important;
  }
  .ms-xxl-2 {
    margin-left: 0.5rem !important;
  }
  .ms-xxl-3 {
    margin-left: 1rem !important;
  }
  .ms-xxl-4 {
    margin-left: 1.5rem !important;
  }
  .ms-xxl-5 {
    margin-left: 3rem !important;
  }
  .ms-xxl-auto {
    margin-left: auto !important;
  }
  .me-xxl-n1 {
    margin-right: -0.25rem !important;
  }
  .me-xxl-n2 {
    margin-right: -0.5rem !important;
  }
  .me-xxl-n3 {
    margin-right: -1rem !important;
  }
  .me-xxl-n4 {
    margin-right: -1.5rem !important;
  }
  .me-xxl-n5 {
    margin-right: -3rem !important;
  }
  .ms-xxl-n1 {
    margin-left: -0.25rem !important;
  }
  .ms-xxl-n2 {
    margin-left: -0.5rem !important;
  }
  .ms-xxl-n3 {
    margin-left: -1rem !important;
  }
  .ms-xxl-n4 {
    margin-left: -1.5rem !important;
  }
  .ms-xxl-n5 {
    margin-left: -3rem !important;
  }
  .pe-xxl-0 {
    padding-right: 0 !important;
  }
  .pe-xxl-1 {
    padding-right: 0.25rem !important;
  }
  .pe-xxl-2 {
    padding-right: 0.5rem !important;
  }
  .pe-xxl-3 {
    padding-right: 1rem !important;
  }
  .pe-xxl-4 {
    padding-right: 1.5rem !important;
  }
  .pe-xxl-5 {
    padding-right: 3rem !important;
  }
  .ps-xxl-0 {
    padding-left: 0 !important;
  }
  .ps-xxl-1 {
    padding-left: 0.25rem !important;
  }
  .ps-xxl-2 {
    padding-left: 0.5rem !important;
  }
  .ps-xxl-3 {
    padding-left: 1rem !important;
  }
  .ps-xxl-4 {
    padding-left: 1.5rem !important;
  }
  .ps-xxl-5 {
    padding-left: 3rem !important;
  }
}
body {
  text-rendering: optimizeLegibility;
  font-smoothing: antialiased;
  -moz-font-feature-settings: "liga" on;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  letter-spacing: 0.15px;
}

@media (min-width: 768px) {
  button.list-group-item {
    outline: none;
  }
}
.app-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(58, 53, 65, 0.5);
  visibility: hidden;
  z-index: 3;
  transition: all 0.25s ease;
}
.app-overlay.show {
  visibility: visible;
}

.container,
.container-fluid,
.container-sm,
.container-md,
.container-lg,
.container-xl,
.container-xxl {
  padding-right: 1rem;
  padding-left: 1rem;
}
@media (min-width: 992px) {
  .container,
  .container-fluid,
  .container-sm,
  .container-md,
  .container-lg,
  .container-xl,
  .container-xxl {
    padding-right: 1.5rem;
    padding-left: 1.5rem;
  }
}

.img-thumbnail {
  position: relative;
  display: block;
}
.img-thumbnail img {
  z-index: 1;
}

.img-thumbnail-content {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 3;
  display: block;
  opacity: 0;
  transition: all 0.2s ease-in-out;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.img-thumbnail:hover .img-thumbnail-content, .img-thumbnail:focus .img-thumbnail-content {
  opacity: 1;
}

.img-thumbnail-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
  display: block;
  transition: all 0.2s ease-in-out;
}
.img-thumbnail:not(:hover):not(:focus) .img-thumbnail-overlay {
  opacity: 0 !important;
}

.img-thumbnail-shadow {
  transition: box-shadow 0.2s;
}
.img-thumbnail-shadow:hover, .img-thumbnail-shadow:focus {
  box-shadow: 0 5px 20px rgba(58, 53, 65, 0.4);
}

.img-thumbnail-zoom-in {
  overflow: hidden;
}
.img-thumbnail-zoom-in img {
  transition: all 0.3s ease-in-out;
  -webkit-transform: translate3d(0);
          transform: translate3d(0);
}
.img-thumbnail-zoom-in .img-thumbnail-content {
  -webkit-transform: translate(-50%, -50%) scale(0.6);
          transform: translate(-50%, -50%) scale(0.6);
}
.img-thumbnail-zoom-in:hover img, .img-thumbnail-zoom-in:focus img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.img-thumbnail-zoom-in:hover .img-thumbnail-content, .img-thumbnail-zoom-in:focus .img-thumbnail-content {
  -webkit-transform: translate(-50%, -50%) scale(1);
          transform: translate(-50%, -50%) scale(1);
}

@-webkit-keyframes dropdownAnimation {
  0% {
    opacity: 0;
    visibility: hidden;
  }
  100% {
    opacity: 1;
    visibility: visible;
  }
}
@keyframes dropdownAnimation {
  0% {
    opacity: 0;
    visibility: hidden;
  }
  100% {
    opacity: 1;
    visibility: visible;
  }
}
@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .card,
  .card-body,
  .media,
  .flex-column,
  .tab-content {
    min-height: 1px;
  }
  img {
    min-height: 1px;
    height: auto;
  }
}
.buy-now .btn-buy-now {
  position: fixed;
  bottom: 3rem;
  right: 1.5rem;
  z-index: 1080;
  box-shadow: 0 1px 20px 1px #ea5455 !important;
}
.buy-now .btn-buy-now:hover {
  box-shadow: none !important;
}

.ui-square,
.ui-rect,
.ui-rect-30,
.ui-rect-60,
.ui-rect-67,
.ui-rect-75 {
  position: relative !important;
  display: block !important;
  padding-top: 100% !important;
  width: 100% !important;
}

.ui-square {
  padding-top: 100% !important;
}

.ui-rect {
  padding-top: 50% !important;
}

.ui-rect-30 {
  padding-top: 30% !important;
}

.ui-rect-60 {
  padding-top: 60% !important;
}

.ui-rect-67 {
  padding-top: 67% !important;
}

.ui-rect-75 {
  padding-top: 75% !important;
}

.ui-square-content,
.ui-rect-content {
  position: absolute !important;
  top: 0 !important;
  right: 0 !important;
  bottom: 0 !important;
  left: 0 !important;
}

.text-strike-through {
  text-decoration: line-through;
}

.line-clamp-1 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 1;
  -webkit-box-orient: vertical;
}

.line-clamp-2 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}

.line-clamp-3 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
}

.ui-stars,
.ui-star,
.ui-star > * {
  height: 1.1em;
  -webkit-user-drag: none;
  -khtml-user-drag: none;
  -moz-user-drag: none;
  -o-user-drag: none;
  user-drag: none;
}

.ui-stars {
  display: inline-block;
  vertical-align: middle;
  white-space: nowrap;
}

.ui-star {
  position: relative;
  display: block;
  float: left;
  width: 1.1em;
  height: 1.1em;
  text-decoration: none !important;
  font-size: 1.1em;
  line-height: 1;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.ui-star + .ui-star {
  margin-left: -0.1em;
}
.ui-star > *,
.ui-star > *::before,
.ui-star > *::after {
  position: absolute;
  left: 0.55em;
  height: 100%;
  font-size: 1em;
  line-height: 1;
  -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
}
.ui-star > * {
  top: 0;
  width: 100%;
  text-align: center;
}
.ui-star > *:first-child {
  z-index: 10;
  display: none;
  overflow: hidden;
  color: #ffd950;
}
.ui-star > *:last-child {
  z-index: 5;
  display: block;
}
.ui-star.half-filled > *:first-child {
  width: 50%;
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
}
.ui-star.filled > *:first-child, .ui-star.half-filled > *:first-child {
  display: block;
}
.ui-star.filled > *:last-child {
  display: none;
}

.ui-stars.hoverable .ui-star > *:first-child {
  display: block;
}

.ui-stars.hoverable .ui-star:first-child:not(.filled) > *:first-child,
.ui-stars.hoverable .ui-star:first-child:not(.filled) ~ .ui-star > *:first-child,
.ui-stars.hoverable .ui-star:first-child:not(.half-filled) > *:first-child,
.ui-stars.hoverable .ui-star:first-child:not(.half-filled) ~ .ui-star > *:first-child {
  display: none;
}

.ui-stars.hoverable .ui-star.filled > *:first-child,
.ui-stars.hoverable .ui-star.half-filled > *:first-child {
  display: block !important;
}

.ui-stars.hoverable:hover .ui-star > *:first-child {
  display: block !important;
  width: 100% !important;
  -webkit-transform: translateX(-50%) !important;
          transform: translateX(-50%) !important;
}

.ui-stars.hoverable .ui-star:hover ~ .ui-star > *:first-child {
  display: none !important;
}
.ui-stars.hoverable .ui-star:hover ~ .ui-star > *:last-child {
  display: block !important;
}

.ui-bg-cover {
  background-color: rgba(0, 0, 0, 0);
  background-position: center center;
  background-size: cover;
}

.ui-bg-overlay-container,
.ui-bg-video-container {
  position: relative;
}
.ui-bg-overlay-container > *,
.ui-bg-video-container > * {
  position: relative;
}

.ui-bg-overlay-container .ui-bg-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: block;
}

.light-style .ui-bordered {
  border: 1px solid #e7e7e8;
}
.light-style .ui-star > *:last-child {
  color: rgba(58, 53, 65, 0.12);
}

.menu {
  display: -ms-flexbox;
  display: flex;
}
.menu .app-brand {
  width: 100%;
  transition: padding 0.3s ease-in-out;
}
.menu .ps__thumb-y,
.menu .ps__rail-y {
  width: 0.125rem !important;
}
.menu .ps__rail-y {
  right: 0.25rem !important;
  left: auto !important;
  background: none !important;
}
.menu .ps__rail-y:hover,
.menu .ps__rail-y:focus,
.menu .ps__rail-y.ps--clicking,
.menu .ps__rail-y:hover > .ps__thumb-y,
.menu .ps__rail-y:focus > .ps__thumb-y,
.menu .ps__rail-y.ps--clicking > .ps__thumb-y {
  width: 0.375rem !important;
}

.menu-inner {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
      align-items: flex-start;
  -ms-flex-pack: start;
      justify-content: flex-start;
  margin: 0;
  padding: 0;
  height: 100%;
}

.menu-inner-shadow {
  display: none;
  position: absolute;
  top: 3.5rem;
  height: 3rem;
  width: 100%;
  pointer-events: none;
  z-index: 2;
}
html:not(.layout-menu-fixed) .menu-inner-shadow {
  display: none !important;
}

.menu-item {
  -ms-flex-align: start;
      align-items: flex-start;
  -ms-flex-pack: start;
      justify-content: flex-start;
}
.menu-item.menu-item-animating {
  transition: height 0.3s ease-in-out;
}

.menu-item,
.menu-header,
.menu-divider,
.menu-block {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
  -ms-flex-direction: column;
      flex-direction: column;
  margin: 0;
  padding: 0;
  list-style: none;
}

.menu-header {
  opacity: 1;
  transition: opacity 0.3s ease-in-out;
}
.menu-header .menu-header-text {
  -webkit-column-gap: 0.625rem;
     -moz-column-gap: 0.625rem;
          column-gap: 0.625rem;
  text-transform: uppercase;
  font-size: 0.75rem;
  letter-spacing: 0.4px;
  white-space: nowrap;
  color: #b4b2b7;
}

.menu-inner > .menu-header {
  display: -ms-flexbox;
  display: flex;
  white-space: nowrap;
  line-height: normal;
  width: 100%;
  -ms-flex-direction: row;
      flex-direction: row;
  -ms-flex-align: center;
      align-items: center;
}
.menu-inner > .menu-header::before, .menu-inner > .menu-header::after {
  content: "";
  display: block;
  height: 1px;
  background-color: rgba(58, 53, 65, 0.12);
}
.menu-inner > .menu-header::before {
  width: 8%;
  margin-left: -1.25rem;
  margin-right: 0.5rem;
}
.menu-inner > .menu-header::after {
  width: 90%;
  margin-left: 0.5rem;
}
@media (max-width: 1199.98px) {
  .menu-inner > .menu-header {
    margin-inline: 0 !important;
  }
}

.menu-icon {
  -ms-flex-positive: 0;
      flex-grow: 0;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  margin-right: 0.5rem;
  line-height: 1;
}
.menu-icon::before {
  font-size: 1.5rem;
}
.menu:not(.menu-no-animation) .menu-icon {
  transition: margin-right 0.3s ease;
}

.menu-link {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
      align-items: center;
  -ms-flex: 0 1 auto;
      flex: 0 1 auto;
  margin: 0;
}
.menu-item.active > .menu-link {
  font-weight: 500;
}
.menu-item.disabled .menu-link {
  cursor: not-allowed !important;
}
.menu-link > :not(.menu-icon) {
  -ms-flex: 0 1 auto;
      flex: 0 1 auto;
  opacity: 1;
}

.menu-sub {
  display: none;
  -ms-flex-direction: column;
      flex-direction: column;
  margin: 0;
  padding: 0;
}
.menu:not(.menu-no-animation) .menu-sub {
  transition: background-color 0.3s;
}
.menu-item.open > .menu-sub {
  display: -ms-flexbox;
  display: flex;
}

.menu-toggle::after {
  position: absolute;
  top: 50%;
  display: block;
  font-family: "Material Design Icons";
  font-size: 1.5rem;
  color: #89868d;
  -webkit-transform: translateY(-49%);
          transform: translateY(-49%);
  content: "\f0142";
}
.menu:not(.menu-no-animation) .menu-toggle::after {
  transition-duration: 0.3s;
  transition-property: -webkit-transform, transform;
}

.menu-divider {
  width: 100%;
  border: 0;
  border-top: 1px solid;
}

.menu-vertical {
  overflow: hidden;
  -ms-flex-direction: column;
      flex-direction: column;
}
.menu-vertical:not(.menu-no-animation) {
  transition: width 0.3s;
}
.menu-vertical,
.menu-vertical .menu-block,
.menu-vertical .menu-inner > .menu-item {
  width: 16.25rem;
}
.menu-vertical:first-of-type,
.menu-vertical .menu-block:first-of-type,
.menu-vertical .menu-inner > .menu-item:first-of-type {
  margin-top: 0;
}
.menu-vertical .menu-inner {
  -ms-flex-direction: column;
      flex-direction: column;
  -ms-flex: 1 1 auto;
      flex: 1 1 auto;
}
.menu-vertical .menu-inner .menu-item {
  margin: 0.375rem 0 0;
}
.menu-vertical .menu-inner .menu-item.active > .menu-link {
  font-weight: 500;
}
.menu-vertical .menu-item .menu-link,
.menu-vertical .menu-header,
.menu-vertical .menu-block {
  padding: 0.564rem 1.25rem;
  margin-block: 0;
  margin-inline: 1.125rem;
  border-radius: 0 50rem 50rem 0;
  margin-left: 0;
}
.menu-vertical .menu-item .menu-link {
  font-size: 1rem;
  letter-spacing: 0.15px;
}
.menu-vertical .menu-item .menu-link > div:not(.badge) {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.menu-vertical .menu-item .menu-link.waves-effect:focus .waves-ripple {
  background: radial-gradient(rgba(58, 53, 65, 0.1) 0, rgba(58, 53, 65, 0.15) 70%, rgba(58, 53, 65, 0.2) 80%, rgba(58, 53, 65, 0.25) 90%, rgba(255, 255, 255, 0) 95%);
}
.light-style .menu-vertical .menu-item .menu-link:hover {
  background-color: rgba(58, 53, 65, 0.04);
}
.light-style .menu-vertical .menu-item.active > .menu-toggle,
.light-style .menu-vertical .menu-item.open > .menu-toggle {
  background-color: rgba(58, 53, 65, 0.08);
}
.menu-vertical .menu-item .menu-toggle {
  padding-right: calc(1.25rem + 1.05em);
}
.menu-vertical .menu-item .menu-toggle::after {
  right: calc(1.25rem - 0.4rem);
}
.menu-vertical .menu-item.open:not(.menu-item-closing) > .menu-link:after {
  -webkit-transform: translateY(-50%) rotate(90deg);
          transform: translateY(-50%) rotate(90deg);
}
.menu-vertical .menu-divider {
  margin-top: 0.564rem;
  margin-bottom: 0.564rem;
  padding: 0;
}
.menu-vertical .menu-sub .menu-link {
  padding-top: 0.564rem;
  padding-bottom: 0.564rem;
}
.layout-wrapper:not(.layout-horizontal) .menu-vertical .menu-inner > .menu-item > .menu-sub > .menu-item > .menu-link::before {
  content: "";
  height: 11.67px;
  width: 11.67px;
  border-radius: 50rem;
  position: absolute;
  left: 1.55rem;
  border: 1px solid #89868d;
}
.menu-vertical .menu-sub .menu-icon {
  margin-right: 0;
}
@media (max-width: 1199.98px) {
  .menu-vertical .menu-sub .menu-icon {
    display: none;
  }
}
.menu-vertical .menu-horizontal-wrapper {
  -ms-flex: none;
      flex: none;
}
.layout-wrapper:not(.layout-horizontal) .menu-vertical .menu-sub .menu-link {
  padding-left: 3.25rem;
}

.menu-collapsed:not(:hover) {
  width: 4.25rem;
}
.menu-collapsed:not(:hover) .menu-inner > .menu-item {
  width: 4.25rem;
}
.menu-collapsed:not(:hover) .menu-inner > .menu-item > .menu-link,
.menu-collapsed:not(:hover) .menu-inner > .menu-block,
.menu-collapsed:not(:hover) .menu-inner > .menu-header {
  padding-left: 1.22rem;
  margin-inline: calc(1.125rem / 2);
  margin-left: 0;
}
.menu-collapsed:not(:hover):not(.layout-menu-hover) .menu-inner > .menu-item > .menu-link,
.menu-collapsed:not(:hover):not(.layout-menu-hover) .menu-inner > .menu-block,
.menu-collapsed:not(:hover):not(.layout-menu-hover) .menu-inner > .menu-header {
  padding-left: 1.26rem;
}
.menu-collapsed:not(:hover) .menu-inner > .menu-header,
.menu-collapsed:not(:hover) .menu-block {
  width: 16.25rem;
}
.menu-collapsed:not(:hover) .menu-inner > .menu-header .menu-header-text,
.menu-collapsed:not(:hover) .menu-block .menu-header-text {
  overflow: hidden;
  opacity: 0;
}
.menu-collapsed:not(:hover) .menu-inner > .menu-header::before {
  margin-left: 0;
  width: 18%;
}
.menu-collapsed:not(:hover) .app-brand {
  padding-left: 1.05rem;
}
.menu-collapsed:not(:hover) .menu-inner > .menu-item div:not(.menu-block) {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  opacity: 0;
}
.menu-collapsed:not(:hover) .menu-inner > .menu-item > .menu-sub,
.menu-collapsed:not(:hover) .menu-inner > .menu-item.open > .menu-sub {
  display: none;
}
.menu-collapsed:not(:hover) .menu-inner > .menu-item > .menu-toggle::after {
  display: none;
}
.menu-collapsed:not(:hover) .menu-inner > .menu-item > .menu-link .menu-icon {
  text-align: center;
  margin-right: 0;
}

.layout-container {
  min-height: 100vh;
}

.layout-wrapper,
.layout-container {
  width: 100%;
  display: -ms-flexbox;
  display: flex;
  -ms-flex: 1 1 auto;
      flex: 1 1 auto;
  -ms-flex-align: stretch;
      align-items: stretch;
}

.layout-menu-offcanvas .layout-wrapper,
.layout-menu-fixed-offcanvas .layout-wrapper {
  overflow: hidden;
}

.layout-menu-offcanvas .layout-navbar .layout-menu-toggle,
.layout-menu-fixed-offcanvas .layout-navbar .layout-menu-toggle {
  display: block !important;
}

@media (min-width: 1200px) {
  .layout-menu-offcanvas .layout-menu .layout-menu-toggle,
  .layout-menu-fixed-offcanvas .layout-menu .layout-menu-toggle {
    display: none;
  }
}
.layout-page,
.content-wrapper,
.content-wrapper > *,
.layout-menu {
  min-height: 1px;
}

.layout-navbar,
.content-footer {
  -ms-flex: 0 0 auto;
      flex: 0 0 auto;
}

.layout-page {
  display: -ms-flexbox;
  display: flex;
  -ms-flex: 1 1 auto;
      flex: 1 1 auto;
  -ms-flex-align: stretch;
      align-items: stretch;
  padding: 0;
}
.layout-without-menu .layout-page {
  padding-right: 0 !important;
  padding-left: 0 !important;
}

.content-wrapper {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: stretch;
      align-items: stretch;
  -ms-flex: 1 1 auto;
      flex: 1 1 auto;
  -ms-flex-direction: column;
      flex-direction: column;
  -ms-flex-pack: justify;
      justify-content: space-between;
}

.content-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1;
  width: 100vw;
  height: 100vh;
  background-color: #3a3541;
}
.content-backdrop.fade {
  opacity: 0;
}
.content-backdrop.show {
  opacity: 0.5;
}
.layout-menu-fixed .content-backdrop {
  z-index: 10;
}
.content-backdrop.fade {
  z-index: -1;
}

.layout-navbar {
  position: relative;
  padding-top: 0.25rem;
  padding-bottom: 0.2rem;
  height: 4rem;
  -ms-flex-wrap: nowrap;
      flex-wrap: nowrap;
  color: #89868d;
  z-index: 2;
  -webkit-backdrop-filter: blur(7.5px);
          backdrop-filter: blur(7.5px);
}
.layout-navbar .navbar {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.layout-navbar .navbar-nav-right {
  -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
}
.layout-navbar.navbar-detached {
  transition: padding 0.2s ease, background-color 0.18s ease;
  padding: 0;
  width: calc(100% - 1.5rem * 2);
  border-bottom-right-radius: 0.625rem;
  border-bottom-left-radius: 0.625rem;
}
.layout-navbar-fixed .window-scrolled .layout-navbar.navbar-detached {
  box-shadow: 0px 4px 8px -4px rgba(58, 53, 65, 0.42);
  padding: 0 1.25rem;
}
.layout-navbar-fixed .window-scrolled .layout-navbar.navbar-detached .search-input:focus {
  padding-left: 1.25rem;
  padding-right: 1.25rem;
}
.layout-navbar-fixed .layout-page:not(.window-scrolled) .layout-navbar.navbar-detached .search-input {
  background-color: #f4f5fa;
}
.layout-navbar.navbar-detached .search-input {
  transition: padding 0.2s ease, background-color 0.18s ease;
}
.layout-navbar.navbar-detached.container-xxl {
  max-width: calc(1440px - 1.5rem * 2);
}
.layout-navbar-fixed .layout-navbar.navbar-detached {
  width: calc(100% - 1.5rem * 2 - 16.25rem);
}
@media (max-width: 1199.98px) {
  .layout-navbar-fixed .layout-navbar.navbar-detached {
    width: calc(100% - 1.5rem * 2) !important;
  }
}
@media (max-width: 991.98px) {
  .layout-navbar-fixed .layout-navbar.navbar-detached {
    width: calc(100% - 1rem * 2) !important;
  }
}
.layout-navbar-fixed.layout-menu-collapsed .layout-navbar.navbar-detached {
  width: calc(100% - 1.5rem * 2 - 4.25rem);
}
@media (max-width: 1199.98px) {
  .layout-navbar.navbar-detached {
    width: calc(100vw - (100vw - 100%) - 1.5rem * 2) !important;
  }
}
@media (max-width: 991.98px) {
  .layout-navbar.navbar-detached {
    width: calc(100vw - (100vw - 100%) - 1rem * 2) !important;
  }
}
.layout-menu-collapsed .layout-navbar.navbar-detached, .layout-without-menu .layout-navbar.navbar-detached {
  width: calc(100% - 1.5rem * 2);
}
.layout-navbar .search-input-wrapper .search-toggler {
  position: absolute;
  top: 1.25rem;
  right: 1rem;
  z-index: 1;
}
.layout-navbar .search-input {
  height: 100%;
  box-shadow: none;
}
@media (max-width: 1199.98px) {
  .layout-navbar .navbar-nav .nav-item.dropdown .dropdown-menu {
    position: absolute;
  }
  .layout-navbar .navbar-nav .nav-item.dropdown .dropdown-menu .last-login {
    white-space: nowrap;
  }
}
@media (max-width: 767.98px) {
  .layout-navbar .navbar-nav .nav-item.dropdown {
    position: static;
    float: left;
  }
  .layout-navbar .navbar-nav .nav-item.dropdown .badge-notifications {
    top: auto;
  }
  .layout-navbar .navbar-nav .nav-item.dropdown .dropdown-menu {
    position: absolute;
    left: 0.9rem;
    min-width: auto;
    width: 92%;
  }
}

@media (max-width: 1199.98px) {
  .layout-navbar {
    z-index: 1080;
  }
}
.layout-menu {
  position: relative;
  -ms-flex: 1 0 auto;
      flex: 1 0 auto;
}
.layout-menu a:focus-visible {
  outline: none;
}
.layout-menu .menu {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.layout-menu .menu-vertical {
  height: 100%;
}

.layout-content-navbar .layout-page {
  -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
  -ms-flex-direction: column;
      flex-direction: column;
  width: 0;
  min-width: 0;
  max-width: 100%;
}
.layout-content-navbar .content-wrapper {
  width: 100%;
}

@media (min-width: 1200px) {
  .layout-menu-fixed .layout-menu,
  .layout-menu-fixed-offcanvas .layout-menu {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    margin-right: 0 !important;
    margin-left: 0 !important;
  }
  .layout-menu-fixed:not(.layout-menu-collapsed) .layout-page,
  .layout-menu-fixed-offcanvas:not(.layout-menu-collapsed) .layout-page {
    padding-left: 16.25rem;
  }
}
html:not(.layout-navbar-fixed):not(.layout-menu-fixed):not(.layout-menu-fixed-offcanvas) .layout-page,
html:not(.layout-navbar-fixed) .layout-content-navbar .layout-page {
  padding-top: 0 !important;
}

html:not(.layout-footer-fixed) .content-wrapper {
  padding-bottom: 0 !important;
}

@media (max-width: 1199.98px) {
  .layout-menu-fixed .layout-wrapper.layout-navbar-full .layout-menu,
  .layout-menu-fixed-offcanvas .layout-wrapper.layout-navbar-full .layout-menu {
    top: 0 !important;
  }
  html:not(.layout-navbar-fixed) .layout-navbar-full .layout-page {
    padding-top: 0 !important;
  }
}
.layout-navbar-hidden .layout-navbar {
  display: none;
}

.layout-navbar-fixed .layout-navbar {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
}

@media (min-width: 1200px) {
  .layout-menu-fixed .layout-navbar-full .layout-navbar,
  .layout-menu-fixed-offcanvas .layout-navbar-full .layout-navbar {
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
  }
  .layout-navbar-fixed:not(.layout-menu-collapsed) .layout-content-navbar:not(.layout-without-menu) .layout-navbar,
  .layout-menu-fixed.layout-navbar-fixed:not(.layout-menu-collapsed) .layout-content-navbar:not(.layout-without-menu) .layout-navbar,
  .layout-menu-fixed-offcanvas.layout-navbar-fixed:not(.layout-menu-collapsed) .layout-content-navbar:not(.layout-without-menu) .layout-navbar {
    left: 16.25rem;
  }
}
.layout-footer-fixed .content-footer {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
}

@media (min-width: 1200px) {
  .layout-footer-fixed:not(.layout-menu-collapsed) .layout-wrapper:not(.layout-without-menu) .content-footer {
    left: 16.25rem;
  }
}
@media (max-width: 1199.98px) {
  .layout-menu {
    position: fixed !important;
    top: 0 !important;
    height: 100% !important;
    left: 0 !important;
    margin-right: 0 !important;
    margin-left: 0 !important;
    -webkit-transform: translate3d(-100%, 0, 0);
            transform: translate3d(-100%, 0, 0);
    will-change: transform, -webkit-transform;
  }
  .layout-menu-flipped .layout-menu {
    right: 0 !important;
    left: auto !important;
    -webkit-transform: translate3d(100%, 0, 0);
            transform: translate3d(100%, 0, 0);
  }
  .layout-menu-expanded .layout-menu {
    -webkit-transform: translate3d(0, 0, 0) !important;
            transform: translate3d(0, 0, 0) !important;
  }
  .layout-menu-expanded body {
    overflow: hidden;
  }
  .layout-overlay {
    position: fixed;
    top: 0;
    right: 0;
    height: 100% !important;
    left: 0;
    display: none;
    background: #3a3541;
    opacity: 0.5;
    cursor: pointer;
  }
  .layout-menu-expanded .layout-overlay {
    display: block;
  }
  .layout-menu-100vh .layout-menu,
  .layout-menu-100vh .layout-overlay {
    height: 100vh !important;
  }
}
.layout-navbar-fixed body:not(.modal-open) .layout-navbar-full .layout-navbar,
.layout-menu-fixed body:not(.modal-open) .layout-navbar-full .layout-navbar,
.layout-menu-fixed-offcanvas body:not(.modal-open) .layout-navbar-full .layout-navbar {
  z-index: 1080;
}
.layout-navbar-fixed body:not(.modal-open) .layout-content-navbar .layout-navbar,
.layout-menu-fixed body:not(.modal-open) .layout-content-navbar .layout-navbar,
.layout-menu-fixed-offcanvas body:not(.modal-open) .layout-content-navbar .layout-navbar {
  z-index: 1075;
}

.layout-footer-fixed .content-footer {
  z-index: 1030;
}

@media (max-width: 1199.98px) {
  .layout-menu {
    z-index: 1100;
  }
  .layout-overlay {
    z-index: 1099;
  }
}
@media (min-width: 1200px) {
  .layout-navbar-full .layout-navbar {
    z-index: 10;
  }
  .layout-navbar-full .layout-menu {
    z-index: 9;
  }
  .layout-content-navbar .layout-navbar {
    z-index: 9;
  }
  .layout-content-navbar .layout-menu {
    z-index: 10;
  }
  .layout-menu-fixed body:not(.modal-open) .layout-navbar-full .layout-menu,
  .layout-menu-fixed-offcanvas body:not(.modal-open) .layout-navbar-full .layout-menu {
    z-index: 1075;
  }
  .layout-navbar-fixed body:not(.modal-open) .layout-content-navbar .layout-menu,
  .layout-menu-fixed body:not(.modal-open) .layout-content-navbar .layout-menu,
  .layout-menu-fixed-offcanvas body:not(.modal-open) .layout-content-navbar .layout-menu {
    z-index: 1080;
  }
}
.layout-menu-link-no-transition .layout-menu .menu-link,
.layout-menu-link-no-transition .layout-menu-horizontal .menu-link {
  transition: none !important;
  -webkit-animation: none !important;
          animation: none !important;
}

.layout-no-transition .layout-menu, .layout-no-transition .layout-menu .menu, .layout-no-transition .layout-menu .menu-item,
.layout-no-transition .layout-menu-horizontal,
.layout-no-transition .layout-menu-horizontal .menu,
.layout-no-transition .layout-menu-horizontal .menu-item {
  transition: none !important;
  -webkit-animation: none !important;
          animation: none !important;
}

@media (max-width: 1199.98px) {
  .layout-transitioning .layout-overlay {
    -webkit-animation: menuAnimation 0.3s;
            animation: menuAnimation 0.3s;
  }
  .layout-transitioning .layout-menu {
    transition-duration: 0.3s;
    transition-property: transform, -webkit-transform;
  }
}
@media (min-width: 1200px) {
  .layout-menu-collapsed:not(.layout-transitioning):not(.layout-menu-offcanvas):not(.layout-menu-fixed):not(.layout-menu-fixed-offcanvas) .layout-menu {
    transition-duration: 0.3s;
    transition-property: margin-left, margin-right, width;
  }
  .layout-transitioning.layout-menu-offcanvas .layout-menu {
    transition-duration: 0.3s;
    transition-property: margin-left, margin-right, transform, -webkit-transform;
  }
  .layout-transitioning.layout-menu-fixed .layout-page, .layout-transitioning.layout-menu-fixed-offcanvas .layout-page {
    transition-duration: 0.3s;
    transition-property: padding-left, padding-right;
  }
  .layout-transitioning.layout-menu-fixed .layout-menu {
    transition: width 0.3s;
  }
  .layout-transitioning.layout-menu-fixed-offcanvas .layout-menu {
    transition-duration: 0.3s;
    transition-property: transform, -webkit-transform;
  }
  .layout-transitioning.layout-navbar-fixed .layout-content-navbar .layout-navbar, .layout-transitioning.layout-footer-fixed .content-footer {
    transition-duration: 0.3s;
    transition-property: left, right;
  }
  .layout-transitioning:not(.layout-menu-offcanvas):not(.layout-menu-fixed):not(.layout-menu-fixed-offcanvas) .layout-menu {
    transition-duration: 0.3s;
    transition-property: margin-left, margin-right, width;
  }
}
@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .menu,
  .layout-menu,
  .layout-page,
  .layout-navbar,
  .content-footer {
    transition: none !important;
    transition-duration: 0s !important;
  }
  .layout-overlay {
    -webkit-animation: none !important;
            animation: none !important;
  }
}
@-webkit-keyframes menuAnimation {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 0.5;
  }
}
@keyframes menuAnimation {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 0.5;
  }
}
.app-brand {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-positive: 0;
      flex-grow: 0;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  overflow: hidden;
  line-height: 1;
  min-height: 1px;
  -ms-flex-align: center;
      align-items: center;
}

.auth-cover-brand {
  position: absolute;
  z-index: 1;
  inset-block-start: 1.8rem;
  inset-inline-start: 2.5rem;
}

.app-brand-link {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
      align-items: center;
}
.app-brand-logo2 {
  display: flex;
  -ms-flex-positive: 0;
      flex-grow: 0;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  overflow: hidden;
  min-height: 1px;
  align-content: center;
  justify-content: center;
  flex-wrap: wrap;
}
.app-brand-logo {
  display: flex;
  -ms-flex-positive: 0;
      flex-grow: 0;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  overflow: hidden;
  min-height: 1px;
  align-content: center;

  flex-wrap: wrap;
}
.app-brand-logo img,
.app-brand-logo svg {
  display: block;
}

.app-brand-text {
  text-transform: uppercase;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  opacity: 1;
  transition: opacity 0.1s ease-in-out;
}

.app-brand-img-collapsed {
  display: none;
}

.app-brand .layout-menu-toggle {
  display: block;
}
.app-brand .layout-menu-toggle svg {
  color: #3a3541;
}

.menu-vertical .app-brand {
  padding-right: 1.5rem;
  padding-left: 1.5rem;
}

.menu-horizontal .app-brand,
.menu-horizontal .app-brand + .menu-divider {
  display: none !important;
}

:not(.layout-menu) > .menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand {
  width: 4.25rem;
}
:not(.layout-menu) > .menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-logo,
:not(.layout-menu) > .menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-link,
:not(.layout-menu) > .menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-text {
  margin-right: auto;
  margin-left: auto;
}
:not(.layout-menu) > .menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-logo ~ .app-brand-text,
:not(.layout-menu) > .menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand .layout-menu-toggle {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  opacity: 0;
}
:not(.layout-menu) > .menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-img {
  display: none;
}
:not(.layout-menu) > .menu-vertical.menu-collapsed:not(.layout-menu):not(:hover) .app-brand-img-collapsed {
  display: block;
}

@media (min-width: 1200px) {
  .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand {
    width: 4.25rem;
  }
  .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-logo,
  .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-link,
  .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-text {
    margin-right: auto;
    margin-left: auto;
  }
  .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-logo ~ .app-brand-text,
  .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand .layout-menu-toggle {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    opacity: 0;
  }
  .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-img {
    display: none;
  }
  .layout-menu-collapsed:not(.layout-menu-hover):not(.layout-menu-offcanvas):not(.layout-menu-fixed-offcanvas) .layout-menu .app-brand-img-collapsed {
    display: block;
  }
}
.avatar {
  position: relative;
  width: 2.5rem;
  height: 2.5rem;
  cursor: pointer;
}
.avatar img {
  width: 100%;
  height: 100%;
}
.avatar .avatar-initial {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  text-transform: uppercase;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
      align-items: center;
  -ms-flex-pack: center;
      justify-content: center;
  color: #fff;
  background-color: #8a8d93;
  font-size: 1.125rem;
  font-weight: 500;
}
.avatar.avatar-md .avatar-initial {
  line-height: 1.3;
}
.avatar.avatar-online:after, .avatar.avatar-offline:after, .avatar.avatar-away:after, .avatar.avatar-busy:after {
  content: "";
  position: absolute;
  bottom: 0;
  right: 3px;
  width: 8px;
  height: 8px;
  border-radius: 100%;
  box-shadow: 0 0 0 2px #fff;
}
.avatar.avatar-online .avatar-initial, .avatar.avatar-offline .avatar-initial, .avatar.avatar-away .avatar-initial, .avatar.avatar-busy .avatar-initial {
  line-height: 1.4;
}
.avatar.avatar-online:after {
  background-color: #56ca00;
}
.avatar.avatar-offline:after {
  background-color: #8a8d93;
}
.avatar.avatar-away:after {
  background-color: #ffb400;
}
.avatar.avatar-busy:after {
  background-color: #ff4c51;
}

.pull-up {
  transition: all 0.25s ease;
}
.pull-up:hover {
  -webkit-transform: translateY(-4px) scale(1.02);
          transform: translateY(-4px) scale(1.02);
  box-shadow: 0 0.25rem 0.5rem rgba(58, 53, 65, 0.1);
  z-index: 30 !important;
  border-radius: 50%;
}

.avatar-xs {
  width: 1.563rem;
  height: 1.563rem;
}
.avatar-xs .avatar-initial {
  font-size: 0.625rem;
}
.avatar-xs.avatar-online:after, .avatar-xs.avatar-offline:after, .avatar-xs.avatar-away:after, .avatar-xs.avatar-busy:after {
  width: 0.3126rem;
  height: 0.3126rem;
  right: 1px;
}

.avatar-sm {
  width: 2rem;
  height: 2rem;
}
.avatar-sm .avatar-initial {
  font-size: 0.75rem;
}
.avatar-sm.avatar-online:after, .avatar-sm.avatar-offline:after, .avatar-sm.avatar-away:after, .avatar-sm.avatar-busy:after {
  width: 0.4rem;
  height: 0.4rem;
  right: 2px;
}

.avatar-md {
  width: 3rem;
  height: 3rem;
}
.avatar-md .avatar-initial {
  font-size: 1.25rem;
}
.avatar-md.avatar-online:after, .avatar-md.avatar-offline:after, .avatar-md.avatar-away:after, .avatar-md.avatar-busy:after {
  width: 0.6rem;
  height: 0.6rem;
  right: 4px;
}

.avatar-lg {
  width: 3.5rem;
  height: 3.5rem;
}
.avatar-lg .avatar-initial {
  font-size: 1.5rem;
}
.avatar-lg.avatar-online:after, .avatar-lg.avatar-offline:after, .avatar-lg.avatar-away:after, .avatar-lg.avatar-busy:after {
  width: 0.7rem;
  height: 0.7rem;
  right: 5px;
}

.avatar-xl {
  width: 4rem;
  height: 4rem;
}
.avatar-xl .avatar-initial {
  font-size: 1.875rem;
}
.avatar-xl.avatar-online:after, .avatar-xl.avatar-offline:after, .avatar-xl.avatar-away:after, .avatar-xl.avatar-busy:after {
  width: 0.8rem;
  height: 0.8rem;
  right: 6px;
}

.avatar-group .avatar {
  transition: all 0.25s ease;
}
.avatar-group .avatar img,
.avatar-group .avatar .avatar-initial {
  border: 2px solid #fff;
}
.avatar-group .avatar .avatar-initial {
  background-color: #a1a4a9;
}
.avatar-group .avatar:hover {
  z-index: 30 !important;
  transition: all 0.25s ease;
}

.avatar-group .avatar:nth-child(1) {
  z-index: 8;
}

.avatar-group .avatar:nth-child(2) {
  z-index: 7;
}

.avatar-group .avatar:nth-child(3) {
  z-index: 6;
}

.avatar-group .avatar:nth-child(4) {
  z-index: 5;
}

.avatar-group .avatar:nth-child(5) {
  z-index: 4;
}

.avatar-group .avatar:nth-child(6) {
  z-index: 3;
}

.avatar-group .avatar:nth-child(7) {
  z-index: 2;
}

.avatar-group .avatar {
  margin-left: -0.65rem;
}
.avatar-group .avatar:first-child {
  margin-left: 0 !important;
}
.avatar-group .avatar-xs {
  margin-left: -0.5rem !important;
}
.avatar-group .avatar-sm {
  margin-left: -0.6rem !important;
}
.avatar-group .avatar-md {
  margin-left: -0.8rem !important;
}
.avatar-group .avatar-lg {
  margin-left: -1rem !important;
}
.avatar-group .avatar-xl {
  margin-left: -1.1rem !important;
}

.divider {
  display: block;
  text-align: center;
  margin: 1rem 0;
  overflow: hidden;
  white-space: nowrap;
}
.divider .divider-text {
  position: relative;
  display: inline-block;
  font-size: 0.8rem;
  padding: 0rem 1rem;
}
.divider .divider-text i {
  font-size: 1rem;
}
.divider .divider-text i::before {
  font-size: 1rem;
}
.divider .divider-text:before, .divider .divider-text:after {
  content: "";
  position: absolute;
  top: 50%;
  width: 100vw;
  border-top: 1px solid rgba(58, 53, 65, 0.12);
}
.divider .divider-text:before {
  right: 100%;
}
.divider .divider-text:after {
  left: 100%;
}
.divider.text-start .divider-text {
  padding-left: 0;
}
.divider.text-end .divider-text {
  padding-right: 0;
}
.divider.text-start-center .divider-text {
  left: -25%;
}
.divider.text-end-center .divider-text {
  right: -25%;
}
.divider.divider-dotted .divider-text:before, .divider.divider-dotted .divider-text:after, .divider.divider-dotted:before, .divider.divider-dotted:after {
  border-style: dotted;
  border-width: 0 1px 1px;
  border-color: rgba(58, 53, 65, 0.12);
}
.divider.divider-dashed .divider-text:before, .divider.divider-dashed .divider-text:after, .divider.divider-dashed:before, .divider.divider-dashed:after {
  border-style: dashed;
  border-width: 0 1px 1px;
  border-color: rgba(58, 53, 65, 0.12);
}

.divider.divider-secondary .divider-text:before, .divider.divider-secondary .divider-text:after {
  border-color: #8a8d93;
}

.divider.divider-success .divider-text:before, .divider.divider-success .divider-text:after {
  border-color: #56ca00;
}

.divider.divider-info .divider-text:before, .divider.divider-info .divider-text:after {
  border-color: #16b1ff;
}

.divider.divider-warning .divider-text:before, .divider.divider-warning .divider-text:after {
  border-color: #ffb400;
}

.divider.divider-danger .divider-text:before, .divider.divider-danger .divider-text:after {
  border-color: #ff4c51;
}

.divider.divider-dark .divider-text:before, .divider.divider-dark .divider-text:after {
  border-color: #4b4b4b;
}

.divider.divider-gray .divider-text:before, .divider.divider-gray .divider-text:after {
  border-color: rgba(58, 53, 65, 0.06);
}

.footer-link {
  display: inline-block;
  color: rgba(58, 53, 65, 0.5);
}

.footer-light {
  color: rgba(58, 53, 65, 0.5);
}
.footer-light .footer-text {
  color: #89868d;
}
.footer-light .footer-link {
  color: rgba(58, 53, 65, 0.5);
}
.footer-light .footer-link:hover, .footer-light .footer-link:focus {
  color: #89868d;
}
.footer-light .footer-link.disabled {
  color: rgba(58, 53, 65, 0.22) !important;
}
.footer-light .show > .footer-link,
.footer-light .active > .footer-link,
.footer-light .footer-link.show,
.footer-light .footer-link.active {
  color: #89868d;
}
.footer-light hr {
  border-color: rgba(0, 0, 0, 0.06);
}

.navbar.bg-secondary {
  color: #eaebec;
}
.navbar.bg-secondary .navbar-brand,
.navbar.bg-secondary .navbar-brand a {
  color: #fff;
}
.navbar.bg-secondary .navbar-brand:hover, .navbar.bg-secondary .navbar-brand:focus,
.navbar.bg-secondary .navbar-brand a:hover,
.navbar.bg-secondary .navbar-brand a:focus {
  color: #fff;
}
.navbar.bg-secondary .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-secondary .navbar-search-wrapper .search-input {
  color: #eaebec;
}
.navbar.bg-secondary .search-input-wrapper .search-input,
.navbar.bg-secondary .search-input-wrapper .search-toggler {
  color: #eaebec;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar.bg-secondary .navbar-nav > .nav-link,
.navbar.bg-secondary .navbar-nav > .nav-item > .nav-link,
.navbar.bg-secondary .navbar-nav > .nav > .nav-item > .nav-link {
  color: #eaebec;
}
.navbar.bg-secondary .navbar-nav > .nav-link:hover, .navbar.bg-secondary .navbar-nav > .nav-link:focus,
.navbar.bg-secondary .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-secondary .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-secondary .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-secondary .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #fff;
}
.navbar.bg-secondary .navbar-nav > .nav-link.disabled,
.navbar.bg-secondary .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-secondary .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #c4c5c8 !important;
}
.navbar.bg-secondary .navbar-nav .show > .nav-link,
.navbar.bg-secondary .navbar-nav .active > .nav-link,
.navbar.bg-secondary .navbar-nav .nav-link.show,
.navbar.bg-secondary .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar.bg-secondary .navbar-toggler {
  color: #eaebec;
  border-color: rgba(255, 255, 255, 0.15);
}
.navbar.bg-secondary .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='rgba(255, 255, 255, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
}
.navbar.bg-secondary .navbar-text {
  color: #eaebec;
}
.navbar.bg-secondary .navbar-text a {
  color: #fff;
}
.navbar.bg-secondary .navbar-text a:hover, .navbar.bg-secondary .navbar-text a:focus {
  color: #fff;
}
.navbar.bg-secondary hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.navbar.bg-success {
  color: #e2f6d3;
}
.navbar.bg-success .navbar-brand,
.navbar.bg-success .navbar-brand a {
  color: #fff;
}
.navbar.bg-success .navbar-brand:hover, .navbar.bg-success .navbar-brand:focus,
.navbar.bg-success .navbar-brand a:hover,
.navbar.bg-success .navbar-brand a:focus {
  color: #fff;
}
.navbar.bg-success .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-success .navbar-search-wrapper .search-input {
  color: #e2f6d3;
}
.navbar.bg-success .search-input-wrapper .search-input,
.navbar.bg-success .search-input-wrapper .search-toggler {
  color: #e2f6d3;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar.bg-success .navbar-nav > .nav-link,
.navbar.bg-success .navbar-nav > .nav-item > .nav-link,
.navbar.bg-success .navbar-nav > .nav > .nav-item > .nav-link {
  color: #e2f6d3;
}
.navbar.bg-success .navbar-nav > .nav-link:hover, .navbar.bg-success .navbar-nav > .nav-link:focus,
.navbar.bg-success .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-success .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-success .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-success .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #fff;
}
.navbar.bg-success .navbar-nav > .nav-link.disabled,
.navbar.bg-success .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-success .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #aae47f !important;
}
.navbar.bg-success .navbar-nav .show > .nav-link,
.navbar.bg-success .navbar-nav .active > .nav-link,
.navbar.bg-success .navbar-nav .nav-link.show,
.navbar.bg-success .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar.bg-success .navbar-toggler {
  color: #e2f6d3;
  border-color: rgba(255, 255, 255, 0.15);
}
.navbar.bg-success .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='rgba(255, 255, 255, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
}
.navbar.bg-success .navbar-text {
  color: #e2f6d3;
}
.navbar.bg-success .navbar-text a {
  color: #fff;
}
.navbar.bg-success .navbar-text a:hover, .navbar.bg-success .navbar-text a:focus {
  color: #fff;
}
.navbar.bg-success hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.navbar.bg-info {
  color: #d5f1ff;
}
.navbar.bg-info .navbar-brand,
.navbar.bg-info .navbar-brand a {
  color: #fff;
}
.navbar.bg-info .navbar-brand:hover, .navbar.bg-info .navbar-brand:focus,
.navbar.bg-info .navbar-brand a:hover,
.navbar.bg-info .navbar-brand a:focus {
  color: #fff;
}
.navbar.bg-info .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-info .navbar-search-wrapper .search-input {
  color: #d5f1ff;
}
.navbar.bg-info .search-input-wrapper .search-input,
.navbar.bg-info .search-input-wrapper .search-toggler {
  color: #d5f1ff;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar.bg-info .navbar-nav > .nav-link,
.navbar.bg-info .navbar-nav > .nav-item > .nav-link,
.navbar.bg-info .navbar-nav > .nav > .nav-item > .nav-link {
  color: #d5f1ff;
}
.navbar.bg-info .navbar-nav > .nav-link:hover, .navbar.bg-info .navbar-nav > .nav-link:focus,
.navbar.bg-info .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-info .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-info .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-info .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #fff;
}
.navbar.bg-info .navbar-nav > .nav-link.disabled,
.navbar.bg-info .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-info .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #89d7ff !important;
}
.navbar.bg-info .navbar-nav .show > .nav-link,
.navbar.bg-info .navbar-nav .active > .nav-link,
.navbar.bg-info .navbar-nav .nav-link.show,
.navbar.bg-info .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar.bg-info .navbar-toggler {
  color: #d5f1ff;
  border-color: rgba(255, 255, 255, 0.15);
}
.navbar.bg-info .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='rgba(255, 255, 255, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
}
.navbar.bg-info .navbar-text {
  color: #d5f1ff;
}
.navbar.bg-info .navbar-text a {
  color: #fff;
}
.navbar.bg-info .navbar-text a:hover, .navbar.bg-info .navbar-text a:focus {
  color: #fff;
}
.navbar.bg-info hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.navbar.bg-warning {
  color: #fff6e2;
}
.navbar.bg-warning .navbar-brand,
.navbar.bg-warning .navbar-brand a {
  color: #fff;
}
.navbar.bg-warning .navbar-brand:hover, .navbar.bg-warning .navbar-brand:focus,
.navbar.bg-warning .navbar-brand a:hover,
.navbar.bg-warning .navbar-brand a:focus {
  color: #fff;
}
.navbar.bg-warning .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-warning .navbar-search-wrapper .search-input {
  color: #fff6e2;
}
.navbar.bg-warning .search-input-wrapper .search-input,
.navbar.bg-warning .search-input-wrapper .search-toggler {
  color: #fff6e2;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar.bg-warning .navbar-nav > .nav-link,
.navbar.bg-warning .navbar-nav > .nav-item > .nav-link,
.navbar.bg-warning .navbar-nav > .nav > .nav-item > .nav-link {
  color: #fff6e2;
}
.navbar.bg-warning .navbar-nav > .nav-link:hover, .navbar.bg-warning .navbar-nav > .nav-link:focus,
.navbar.bg-warning .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-warning .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-warning .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-warning .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #fff;
}
.navbar.bg-warning .navbar-nav > .nav-link.disabled,
.navbar.bg-warning .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-warning .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #ffdc88 !important;
}
.navbar.bg-warning .navbar-nav .show > .nav-link,
.navbar.bg-warning .navbar-nav .active > .nav-link,
.navbar.bg-warning .navbar-nav .nav-link.show,
.navbar.bg-warning .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar.bg-warning .navbar-toggler {
  color: #fff6e2;
  border-color: rgba(255, 255, 255, 0.15);
}
.navbar.bg-warning .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='rgba(255, 255, 255, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
}
.navbar.bg-warning .navbar-text {
  color: #fff6e2;
}
.navbar.bg-warning .navbar-text a {
  color: #fff;
}
.navbar.bg-warning .navbar-text a:hover, .navbar.bg-warning .navbar-text a:focus {
  color: #fff;
}
.navbar.bg-warning hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.navbar.bg-danger {
  color: #ffdcdd;
}
.navbar.bg-danger .navbar-brand,
.navbar.bg-danger .navbar-brand a {
  color: #fff;
}
.navbar.bg-danger .navbar-brand:hover, .navbar.bg-danger .navbar-brand:focus,
.navbar.bg-danger .navbar-brand a:hover,
.navbar.bg-danger .navbar-brand a:focus {
  color: #fff;
}
.navbar.bg-danger .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-danger .navbar-search-wrapper .search-input {
  color: #ffdcdd;
}
.navbar.bg-danger .search-input-wrapper .search-input,
.navbar.bg-danger .search-input-wrapper .search-toggler {
  color: #ffdcdd;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar.bg-danger .navbar-nav > .nav-link,
.navbar.bg-danger .navbar-nav > .nav-item > .nav-link,
.navbar.bg-danger .navbar-nav > .nav > .nav-item > .nav-link {
  color: #ffdcdd;
}
.navbar.bg-danger .navbar-nav > .nav-link:hover, .navbar.bg-danger .navbar-nav > .nav-link:focus,
.navbar.bg-danger .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-danger .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-danger .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-danger .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #fff;
}
.navbar.bg-danger .navbar-nav > .nav-link.disabled,
.navbar.bg-danger .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-danger .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #ffa2a5 !important;
}
.navbar.bg-danger .navbar-nav .show > .nav-link,
.navbar.bg-danger .navbar-nav .active > .nav-link,
.navbar.bg-danger .navbar-nav .nav-link.show,
.navbar.bg-danger .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar.bg-danger .navbar-toggler {
  color: #ffdcdd;
  border-color: rgba(255, 255, 255, 0.15);
}
.navbar.bg-danger .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='rgba(255, 255, 255, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
}
.navbar.bg-danger .navbar-text {
  color: #ffdcdd;
}
.navbar.bg-danger .navbar-text a {
  color: #fff;
}
.navbar.bg-danger .navbar-text a:hover, .navbar.bg-danger .navbar-text a:focus {
  color: #fff;
}
.navbar.bg-danger hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.navbar.bg-dark {
  color: #cccccc;
}
.navbar.bg-dark .navbar-brand,
.navbar.bg-dark .navbar-brand a {
  color: #fff;
}
.navbar.bg-dark .navbar-brand:hover, .navbar.bg-dark .navbar-brand:focus,
.navbar.bg-dark .navbar-brand a:hover,
.navbar.bg-dark .navbar-brand a:focus {
  color: #fff;
}
.navbar.bg-dark .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-dark .navbar-search-wrapper .search-input {
  color: #cccccc;
}
.navbar.bg-dark .search-input-wrapper .search-input,
.navbar.bg-dark .search-input-wrapper .search-toggler {
  color: #cccccc;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar.bg-dark .navbar-nav > .nav-link,
.navbar.bg-dark .navbar-nav > .nav-item > .nav-link,
.navbar.bg-dark .navbar-nav > .nav > .nav-item > .nav-link {
  color: #cccccc;
}
.navbar.bg-dark .navbar-nav > .nav-link:hover, .navbar.bg-dark .navbar-nav > .nav-link:focus,
.navbar.bg-dark .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-dark .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-dark .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-dark .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #fff;
}
.navbar.bg-dark .navbar-nav > .nav-link.disabled,
.navbar.bg-dark .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-dark .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #989898 !important;
}
.navbar.bg-dark .navbar-nav .show > .nav-link,
.navbar.bg-dark .navbar-nav .active > .nav-link,
.navbar.bg-dark .navbar-nav .nav-link.show,
.navbar.bg-dark .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar.bg-dark .navbar-toggler {
  color: #cccccc;
  border-color: rgba(255, 255, 255, 0.15);
}
.navbar.bg-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='rgba(255, 255, 255, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
}
.navbar.bg-dark .navbar-text {
  color: #cccccc;
}
.navbar.bg-dark .navbar-text a {
  color: #fff;
}
.navbar.bg-dark .navbar-text a:hover, .navbar.bg-dark .navbar-text a:focus {
  color: #fff;
}
.navbar.bg-dark hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.navbar.bg-gray {
  color: #817d85;
}
.navbar.bg-gray .navbar-brand,
.navbar.bg-gray .navbar-brand a {
  color: #3a3541;
}
.navbar.bg-gray .navbar-brand:hover, .navbar.bg-gray .navbar-brand:focus,
.navbar.bg-gray .navbar-brand a:hover,
.navbar.bg-gray .navbar-brand a:focus {
  color: #3a3541;
}
.navbar.bg-gray .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-gray .navbar-search-wrapper .search-input {
  color: #817d85;
}
.navbar.bg-gray .search-input-wrapper .search-input,
.navbar.bg-gray .search-input-wrapper .search-toggler {
  color: #817d85;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar.bg-gray .navbar-nav > .nav-link,
.navbar.bg-gray .navbar-nav > .nav-item > .nav-link,
.navbar.bg-gray .navbar-nav > .nav > .nav-item > .nav-link {
  color: #817d85;
}
.navbar.bg-gray .navbar-nav > .nav-link:hover, .navbar.bg-gray .navbar-nav > .nav-link:focus,
.navbar.bg-gray .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-gray .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-gray .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-gray .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #3a3541;
}
.navbar.bg-gray .navbar-nav > .nav-link.disabled,
.navbar.bg-gray .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-gray .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #afacb1 !important;
}
.navbar.bg-gray .navbar-nav .show > .nav-link,
.navbar.bg-gray .navbar-nav .active > .nav-link,
.navbar.bg-gray .navbar-nav .nav-link.show,
.navbar.bg-gray .navbar-nav .nav-link.active {
  color: #3a3541;
}
.navbar.bg-gray .navbar-toggler {
  color: #817d85;
  border-color: rgba(58, 53, 65, 0.0773305882);
}
.navbar.bg-gray .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='rgba(137, 134, 141, 0.75)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
}
.navbar.bg-gray .navbar-text {
  color: #817d85;
}
.navbar.bg-gray .navbar-text a {
  color: #3a3541;
}
.navbar.bg-gray .navbar-text a:hover, .navbar.bg-gray .navbar-text a:focus {
  color: #3a3541;
}
.navbar.bg-gray hr {
  border-color: rgba(58, 53, 65, 0.0773305882);
}

.navbar.bg-white {
  color: #b4b2b7;
}
.navbar.bg-white .navbar-brand,
.navbar.bg-white .navbar-brand a {
  color: #89868d;
}
.navbar.bg-white .navbar-brand:hover, .navbar.bg-white .navbar-brand:focus,
.navbar.bg-white .navbar-brand a:hover,
.navbar.bg-white .navbar-brand a:focus {
  color: #89868d;
}
.navbar.bg-white .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-white .navbar-search-wrapper .search-input {
  color: #b4b2b7;
}
.navbar.bg-white .search-input-wrapper .search-input,
.navbar.bg-white .search-input-wrapper .search-toggler {
  color: #b4b2b7;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar.bg-white .navbar-nav > .nav-link,
.navbar.bg-white .navbar-nav > .nav-item > .nav-link,
.navbar.bg-white .navbar-nav > .nav > .nav-item > .nav-link {
  color: #b4b2b7;
}
.navbar.bg-white .navbar-nav > .nav-link:hover, .navbar.bg-white .navbar-nav > .nav-link:focus,
.navbar.bg-white .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-white .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-white .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-white .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #89868d;
}
.navbar.bg-white .navbar-nav > .nav-link.disabled,
.navbar.bg-white .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-white .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #d2d1d4 !important;
}
.navbar.bg-white .navbar-nav .show > .nav-link,
.navbar.bg-white .navbar-nav .active > .nav-link,
.navbar.bg-white .navbar-nav .nav-link.show,
.navbar.bg-white .navbar-nav .nav-link.active {
  color: #89868d;
}
.navbar.bg-white .navbar-toggler {
  color: #b4b2b7;
  border-color: rgba(137, 134, 141, 0.075);
}
.navbar.bg-white .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='rgba(137, 134, 141, 0.75)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
}
.navbar.bg-white .navbar-text {
  color: #b4b2b7;
}
.navbar.bg-white .navbar-text a {
  color: #89868d;
}
.navbar.bg-white .navbar-text a:hover, .navbar.bg-white .navbar-text a:focus {
  color: #89868d;
}
.navbar.bg-white hr {
  border-color: rgba(137, 134, 141, 0.075);
}

.navbar.bg-light {
  color: #89868d;
}
.navbar.bg-light .navbar-brand,
.navbar.bg-light .navbar-brand a {
  color: #544f5a;
}
.navbar.bg-light .navbar-brand:hover, .navbar.bg-light .navbar-brand:focus,
.navbar.bg-light .navbar-brand a:hover,
.navbar.bg-light .navbar-brand a:focus {
  color: #544f5a;
}
.navbar.bg-light .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-light .navbar-search-wrapper .search-input {
  color: #89868d;
}
.navbar.bg-light .search-input-wrapper .search-input,
.navbar.bg-light .search-input-wrapper .search-toggler {
  color: #89868d;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar.bg-light .navbar-nav > .nav-link,
.navbar.bg-light .navbar-nav > .nav-item > .nav-link,
.navbar.bg-light .navbar-nav > .nav > .nav-item > .nav-link {
  color: #89868d;
}
.navbar.bg-light .navbar-nav > .nav-link:hover, .navbar.bg-light .navbar-nav > .nav-link:focus,
.navbar.bg-light .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-light .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-light .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-light .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #544f5a;
}
.navbar.bg-light .navbar-nav > .nav-link.disabled,
.navbar.bg-light .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-light .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #abaaaf !important;
}
.navbar.bg-light .navbar-nav .show > .nav-link,
.navbar.bg-light .navbar-nav .active > .nav-link,
.navbar.bg-light .navbar-nav .nav-link.show,
.navbar.bg-light .navbar-nav .nav-link.active {
  color: #544f5a;
}
.navbar.bg-light .navbar-toggler {
  color: #89868d;
  border-color: rgba(84, 79, 90, 0.081185098);
}
.navbar.bg-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='rgba(137, 134, 141, 0.75)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
}
.navbar.bg-light .navbar-text {
  color: #89868d;
}
.navbar.bg-light .navbar-text a {
  color: #544f5a;
}
.navbar.bg-light .navbar-text a:hover, .navbar.bg-light .navbar-text a:focus {
  color: #544f5a;
}
.navbar.bg-light hr {
  border-color: rgba(84, 79, 90, 0.081185098);
}

.navbar.bg-lighter {
  color: #89868d;
}
.navbar.bg-lighter .navbar-brand,
.navbar.bg-lighter .navbar-brand a {
  color: #544f5a;
}
.navbar.bg-lighter .navbar-brand:hover, .navbar.bg-lighter .navbar-brand:focus,
.navbar.bg-lighter .navbar-brand a:hover,
.navbar.bg-lighter .navbar-brand a:focus {
  color: #544f5a;
}
.navbar.bg-lighter .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-lighter .navbar-search-wrapper .search-input {
  color: #89868d;
}
.navbar.bg-lighter .search-input-wrapper .search-input,
.navbar.bg-lighter .search-input-wrapper .search-toggler {
  color: #89868d;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar.bg-lighter .navbar-nav > .nav-link,
.navbar.bg-lighter .navbar-nav > .nav-item > .nav-link,
.navbar.bg-lighter .navbar-nav > .nav > .nav-item > .nav-link {
  color: #89868d;
}
.navbar.bg-lighter .navbar-nav > .nav-link:hover, .navbar.bg-lighter .navbar-nav > .nav-link:focus,
.navbar.bg-lighter .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-lighter .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-lighter .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-lighter .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #544f5a;
}
.navbar.bg-lighter .navbar-nav > .nav-link.disabled,
.navbar.bg-lighter .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-lighter .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #b5b3b7 !important;
}
.navbar.bg-lighter .navbar-nav .show > .nav-link,
.navbar.bg-lighter .navbar-nav .active > .nav-link,
.navbar.bg-lighter .navbar-nav .nav-link.show,
.navbar.bg-lighter .navbar-nav .nav-link.active {
  color: #544f5a;
}
.navbar.bg-lighter .navbar-toggler {
  color: #89868d;
  border-color: rgba(84, 79, 90, 0.0765686274);
}
.navbar.bg-lighter .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='rgba(137, 134, 141, 0.75)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
}
.navbar.bg-lighter .navbar-text {
  color: #89868d;
}
.navbar.bg-lighter .navbar-text a {
  color: #544f5a;
}
.navbar.bg-lighter .navbar-text a:hover, .navbar.bg-lighter .navbar-text a:focus {
  color: #544f5a;
}
.navbar.bg-lighter hr {
  border-color: rgba(84, 79, 90, 0.0765686274);
}

.footer.bg-secondary {
  color: #eaebec;
}
.footer.bg-secondary .footer-link {
  color: #eaebec;
}
.footer.bg-secondary .footer-link:hover, .footer.bg-secondary .footer-link:focus {
  color: #eaebec;
}
.footer.bg-secondary .footer-link.disabled {
  color: #c4c5c8 !important;
}
.footer.bg-secondary .footer-text {
  color: #fff;
}
.footer.bg-secondary .show > .footer-link,
.footer.bg-secondary .active > .footer-link,
.footer.bg-secondary .footer-link.show,
.footer.bg-secondary .footer-link.active {
  color: #fff;
}
.footer.bg-secondary hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.footer.bg-success {
  color: #e2f6d3;
}
.footer.bg-success .footer-link {
  color: #e2f6d3;
}
.footer.bg-success .footer-link:hover, .footer.bg-success .footer-link:focus {
  color: #e2f6d3;
}
.footer.bg-success .footer-link.disabled {
  color: #aae47f !important;
}
.footer.bg-success .footer-text {
  color: #fff;
}
.footer.bg-success .show > .footer-link,
.footer.bg-success .active > .footer-link,
.footer.bg-success .footer-link.show,
.footer.bg-success .footer-link.active {
  color: #fff;
}
.footer.bg-success hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.footer.bg-info {
  color: #d5f1ff;
}
.footer.bg-info .footer-link {
  color: #d5f1ff;
}
.footer.bg-info .footer-link:hover, .footer.bg-info .footer-link:focus {
  color: #d5f1ff;
}
.footer.bg-info .footer-link.disabled {
  color: #89d7ff !important;
}
.footer.bg-info .footer-text {
  color: #fff;
}
.footer.bg-info .show > .footer-link,
.footer.bg-info .active > .footer-link,
.footer.bg-info .footer-link.show,
.footer.bg-info .footer-link.active {
  color: #fff;
}
.footer.bg-info hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.footer.bg-warning {
  color: #fff6e2;
}
.footer.bg-warning .footer-link {
  color: #fff6e2;
}
.footer.bg-warning .footer-link:hover, .footer.bg-warning .footer-link:focus {
  color: #fff6e2;
}
.footer.bg-warning .footer-link.disabled {
  color: #ffdc88 !important;
}
.footer.bg-warning .footer-text {
  color: #fff;
}
.footer.bg-warning .show > .footer-link,
.footer.bg-warning .active > .footer-link,
.footer.bg-warning .footer-link.show,
.footer.bg-warning .footer-link.active {
  color: #fff;
}
.footer.bg-warning hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.footer.bg-danger {
  color: #ffdcdd;
}
.footer.bg-danger .footer-link {
  color: #ffdcdd;
}
.footer.bg-danger .footer-link:hover, .footer.bg-danger .footer-link:focus {
  color: #ffdcdd;
}
.footer.bg-danger .footer-link.disabled {
  color: #ffa2a5 !important;
}
.footer.bg-danger .footer-text {
  color: #fff;
}
.footer.bg-danger .show > .footer-link,
.footer.bg-danger .active > .footer-link,
.footer.bg-danger .footer-link.show,
.footer.bg-danger .footer-link.active {
  color: #fff;
}
.footer.bg-danger hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.footer.bg-dark {
  color: #cccccc;
}
.footer.bg-dark .footer-link {
  color: #cccccc;
}
.footer.bg-dark .footer-link:hover, .footer.bg-dark .footer-link:focus {
  color: #cccccc;
}
.footer.bg-dark .footer-link.disabled {
  color: #989898 !important;
}
.footer.bg-dark .footer-text {
  color: #fff;
}
.footer.bg-dark .show > .footer-link,
.footer.bg-dark .active > .footer-link,
.footer.bg-dark .footer-link.show,
.footer.bg-dark .footer-link.active {
  color: #fff;
}
.footer.bg-dark hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.footer.bg-gray {
  color: #817d85;
}
.footer.bg-gray .footer-link {
  color: #817d85;
}
.footer.bg-gray .footer-link:hover, .footer.bg-gray .footer-link:focus {
  color: #817d85;
}
.footer.bg-gray .footer-link.disabled {
  color: #afacb1 !important;
}
.footer.bg-gray .footer-text {
  color: #3a3541;
}
.footer.bg-gray .show > .footer-link,
.footer.bg-gray .active > .footer-link,
.footer.bg-gray .footer-link.show,
.footer.bg-gray .footer-link.active {
  color: #3a3541;
}
.footer.bg-gray hr {
  border-color: rgba(58, 53, 65, 0.0773305882);
}

.footer.bg-white {
  color: #b4b2b7;
}
.footer.bg-white .footer-link {
  color: #b4b2b7;
}
.footer.bg-white .footer-link:hover, .footer.bg-white .footer-link:focus {
  color: #b4b2b7;
}
.footer.bg-white .footer-link.disabled {
  color: #d2d1d4 !important;
}
.footer.bg-white .footer-text {
  color: #89868d;
}
.footer.bg-white .show > .footer-link,
.footer.bg-white .active > .footer-link,
.footer.bg-white .footer-link.show,
.footer.bg-white .footer-link.active {
  color: #89868d;
}
.footer.bg-white hr {
  border-color: rgba(137, 134, 141, 0.075);
}

.footer.bg-light {
  color: #89868d;
}
.footer.bg-light .footer-link {
  color: #89868d;
}
.footer.bg-light .footer-link:hover, .footer.bg-light .footer-link:focus {
  color: #89868d;
}
.footer.bg-light .footer-link.disabled {
  color: #abaaaf !important;
}
.footer.bg-light .footer-text {
  color: #544f5a;
}
.footer.bg-light .show > .footer-link,
.footer.bg-light .active > .footer-link,
.footer.bg-light .footer-link.show,
.footer.bg-light .footer-link.active {
  color: #544f5a;
}
.footer.bg-light hr {
  border-color: rgba(84, 79, 90, 0.081185098);
}

.footer.bg-lighter {
  color: #89868d;
}
.footer.bg-lighter .footer-link {
  color: #89868d;
}
.footer.bg-lighter .footer-link:hover, .footer.bg-lighter .footer-link:focus {
  color: #89868d;
}
.footer.bg-lighter .footer-link.disabled {
  color: #b5b3b7 !important;
}
.footer.bg-lighter .footer-text {
  color: #544f5a;
}
.footer.bg-lighter .show > .footer-link,
.footer.bg-lighter .active > .footer-link,
.footer.bg-lighter .footer-link.show,
.footer.bg-lighter .footer-link.active {
  color: #544f5a;
}
.footer.bg-lighter hr {
  border-color: rgba(84, 79, 90, 0.0765686274);
}

body {
  background: #f4f5fa;
}

.bg-body {
  background: #f4f5fa !important;
}

.text-primary {
  color: #24235b  !important;
}

.text-body[href]:hover {
  color: #24235b !important;
}

.bg-primary {
  background-color: #24235b  !important;
}

a.bg-primary:hover, a.bg-primary:focus {
  background-color: #24235b  !important;
}

.dropdown-notifications-item:not(.mark-as-read) .dropdown-notifications-read span {
  background-color: #24235b;
}

.bg-label-primary {
  background-color: #eee6ff !important;
  color: #24235b !important;
}

.page-item.active .page-link, .page-item.active .page-link:hover, .page-item.active .page-link:focus,
.pagination li.active > a:not(.page-link),
.pagination li.active > a:not(.page-link):hover,
.pagination li.active > a:not(.page-link):focus {
  border-color: #24235b;
  background-color: #24235b;
  color: #fff;
}
.page-item.active .page-link.waves-effect .waves-ripple,
.pagination li.active > a:not(.page-link).waves-effect .waves-ripple {
  background: radial-gradient(rgba(255, 255, 255, 0.2) 0, rgba(255, 255, 255, 0.3) 40%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}

.pagination-outline-primary .page-item.active .page-link, .pagination-outline-primary .page-item.active .page-link:hover, .pagination-outline-primary .page-item.active .page-link:focus,
.pagination-outline-primary.pagination li.active > a:not(.page-link),
.pagination-outline-primary.pagination li.active > a:not(.page-link):hover,
.pagination-outline-primary.pagination li.active > a:not(.page-link):focus {
  border-color: #9594ff;
  color: #24235b;
  background-color: #f6f1ff;
}
.pagination-outline-primary .page-item.active .page-link.waves-effect .waves-ripple,
.pagination-outline-primary.pagination li.active > a:not(.page-link).waves-effect .waves-ripple {
  background: radial-gradient(rgba(144, 85, 253, 0.2) 0, rgba(144, 85, 253, 0.3) 40%, rgba(144, 85, 253, 0.4) 50%, rgba(144, 85, 253, 0.5) 60%, rgba(58, 53, 65, 0) 70%);
}

.progress-bar {
  background-color: #24235b;
}

.list-group-item-primary {
  border-color: #24235b;
  background-color: #f2ebff;
  color: #24235b !important;
}

a.list-group-item-primary,
button.list-group-item-primary {
  color: #24235b;
}
a.list-group-item-primary:hover, a.list-group-item-primary:focus,
button.list-group-item-primary:hover,
button.list-group-item-primary:focus {
  border-color: #24235b;
  background-color: #e6dff2;
  color: #24235b;
}
a.list-group-item-primary.active,
button.list-group-item-primary.active {
  border-color: #24235b !important;
  background-color: #24235b !important;
  color: #fff !important;
}

.list-group-item.active {
  background-color: #f6f1ff;
  color: #544f5a;
}
.list-group-item.active.waves-effect .waves-ripple {
  background: radial-gradient(rgba(144, 85, 253, 0.2) 0, rgba(144, 85, 253, 0.3) 40%, rgba(144, 85, 253, 0.4) 50%, rgba(144, 85, 253, 0.5) 60%, rgba(58, 53, 65, 0) 70%);
}

.alert-primary {
  background-color: #f2ebff;
  border-color: #f2ebff;
  color: #24235b;
}
.alert-primary .btn-close {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%2324235b'><path d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/></svg>");
}
.alert-primary .alert-link {
  color: #24235b;
}

.alert-primary hr {
  background-color: #24235b !important;
}

.table-primary {
  --bs-table-bg: #e9ddff;
  --bs-table-striped-bg: #e0d5f6;
  --bs-table-striped-color: #3a3541;
  --bs-table-active-bg: #dbd0f0;
  --bs-table-active-color: #3a3541;
  --bs-table-hover-bg: #e2d6f7;
  --bs-table-hover-color: #3a3541;
  color: #3a3541;
  border-color: #d4c9e8;
}
.table-primary .btn-icon {
  color: #3a3541;
}

.btn-primary {
  color: #fff;
  background-color: #050b2D;
  border-color: #24235b;
}
.btn-primary:hover {
  color: #fff !important;
  background-color: #24235b  !important;
  border-color: #24235b !important;
}
.btn-check:focus + .btn-primary, .btn-primary:focus, .btn-primary.focus {
  color: #fff;
  background-color: #24235b;
  border-color: #24235b;
  box-shadow: none;
}
.btn-check:checked + .btn-primary, .btn-check:active + .btn-primary, .btn-primary:active, .btn-primary.active, .btn-primary.show.dropdown-toggle, .show > .btn-primary.dropdown-toggle {
  color: #fff !important;
  background-color: #24235b !important;
  border-color: #24235b !important;
}
.btn-check:checked + .btn-primary:focus, .btn-check:active + .btn-primary:focus, .btn-primary:active:focus, .btn-primary.active:focus, .btn-primary.show.dropdown-toggle:focus, .show > .btn-primary.dropdown-toggle:focus {
  box-shadow: none;
}

.btn-group .btn-primary,
.input-group .btn-primary {
  border-right: 1px solid #24235b;
  border-left: 1px solid #24235b;
}

.btn-group-vertical .btn-primary {
  border-top: 1px solid #24235b;
  border-bottom: 1px solid #24235b;
}

.btn-outline-primary {
  color: #9594ff;
  border-color: #9594ff;
  background: transparent;
}
.btn-outline-primary.waves-effect .waves-ripple {
  background: radial-gradient(rgba(144, 85, 253, 0.2) 0, rgba(144, 85, 253, 0.3) 40%, rgba(144, 85, 253, 0.4) 50%, rgba(144, 85, 253, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}
.btn-outline-primary:hover {
  color: #24235b !important;
  background-color: #f7f3ff !important;
  border-color: #9594ff !important;
}
.btn-check:focus + .btn-outline-primary, .btn-outline-primary:focus {
  color: #24235b;
  background-color: #e4d6ff;
  border-color: #9594ff;
}
.btn-check:checked + .btn-outline-primary, .btn-check:active + .btn-outline-primary, .btn-outline-primary:active, .btn-outline-primary.active, .btn-outline-primary.dropdown-toggle.show {
  color: #24235b !important;
  background-color: #e0cffe !important;
  border-color: #9594ff !important;
}

.btn-outline-primary .badge {
  background: #24235b;
  border-color: #24235b;
  color: #fff;
}

.btn-outline-primary:hover .badge,
.btn-outline-primary:focus:hover .badge,
.btn-outline-primary:active .badge,
.btn-outline-primary.active .badge,
.show > .btn-outline-primary.dropdown-toggle .badge {
  background: #24235b;
  border-color: #24235b;
  color: #fff;
}

.dropdown-item.waves-effect .waves-ripple {
  background: radial-gradient(rgba(144, 85, 253, 0.2) 0, rgba(144, 85, 253, 0.3) 40%, rgba(144, 85, 253, 0.4) 50%, rgba(144, 85, 253, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}
.dropdown-item:not(.disabled).active, .dropdown-item:not(.disabled):active {
  background-color: rgba(144, 85, 253, 0.1);
  color: #24235b !important;
}

.dropdown-menu > li:not(.disabled) > a:not(.dropdown-item):active,
.dropdown-menu > li.active:not(.disabled) > a:not(.dropdown-item) {
  background-color: rgba(144, 85, 253, 0.1);
  color: #24235b !important;
}
.dropdown-menu > li:not(.disabled) > a:not(.dropdown-item):active.btn,
.dropdown-menu > li.active:not(.disabled) > a:not(.dropdown-item).btn {
  color: #fff !important;
}

.nav .nav-link:hover, .nav .nav-link:focus {
  color: #24235b;
}

.nav-pills .nav-link.active, .nav-pills .nav-link.active:hover, .nav-pills .nav-link.active:focus {
  background-color: #24235b;
  color: #fff;
}

.nav-tabs .nav-link.active, .nav-tabs .nav-link.active:hover, .nav-tabs .nav-link.active:focus {
  color: #24235b;
}
.nav-tabs .nav-link.waves-effect .waves-ripple {
  background: radial-gradient(rgba(144, 85, 253, 0.2) 0, rgba(144, 85, 253, 0.3) 40%, rgba(144, 85, 253, 0.4) 50%, rgba(144, 85, 253, 0.5) 60%, rgba(255, 255, 255, 0) 70%);
}
.nav-tabs .tab-slider {
  background-color: #24235b;
}

.form-control:focus,
.form-select:focus {
  border-color: #24235b !important;
}
.form-floating-outline .form-control:focus,
.form-floating-outline .form-select:focus {
  border-color: #24235b !important;
}

.input-group:not(.input-group-floating):focus-within .form-control,
.input-group:not(.input-group-floating):focus-within .input-group-text {
  border-color: #24235b;
}

.form-check-input:focus {
  border-color: #24235b;
}
.form-check-input:active {
  border-color: #24235b;
}
.form-check-input:hover::after {
  background: rgba(58, 53, 65, 0.04);
}
.form-check-input:checked {
  background-color: #24235b;
  border-color: #24235b;
}
.form-check-input:checked::after {
  background: rgba(144, 85, 253, 0.08) !important;
}
.form-check-input[type=checkbox]:indeterminate {
  background-color: #24235b;
  border-color: #24235b;
}

.form-switch .form-check-input:focus {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%2324235b'/%3e%3c/svg%3e");
}
.form-switch .form-check-input:checked {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
}

.form-control:focus ~ .form-label {
  border-color: #24235b;
}
.form-control:focus ~ .form-label::after {
  border-color: inherit;
}

.form-range::-webkit-slider-thumb {
  background-color: #24235b;
}
.form-range::-webkit-slider-thumb:hover {
  box-shadow: 0 0 0 8px rgba(144, 85, 253, 0.15), 0px 3px 14px 0px rgba(58, 53, 65, 0.14);
}
.form-range::-webkit-slider-thumb:active {
  background-color: #24235b;
  box-shadow: 0 0 0 10px rgba(144, 85, 253, 0.2), 0px 3px 14px 0px rgba(58, 53, 65, 0.14);
}
.form-range::-moz-range-thumb:hover {
  box-shadow: 0 0 0 8px rgba(144, 85, 253, 0.15), 0px 3px 14px 0px rgba(58, 53, 65, 0.14);
}
.form-range::-moz-range-thumb:active {
  box-shadow: 0 0 0 10px rgba(144, 85, 253, 0.2), 0px 3px 14px 0px rgba(58, 53, 65, 0.14);
}
.form-range::-webkit-slider-runnable-track {
  background-color: #24235b;
}
.form-range::-moz-range-track {
  background-color: #24235b;
}

.divider.divider-primary .divider-text:before, .divider.divider-primary .divider-text:after {
  border-color: #24235b;
}

.navbar.bg-primary {
  color: #e8dbff;
}
.navbar.bg-primary .navbar-brand,
.navbar.bg-primary .navbar-brand a {
  color: #fff;
}
.navbar.bg-primary .navbar-brand:hover, .navbar.bg-primary .navbar-brand:focus,
.navbar.bg-primary .navbar-brand a:hover,
.navbar.bg-primary .navbar-brand a:focus {
  color: #fff;
}
.navbar.bg-primary .navbar-search-wrapper .navbar-search-icon,
.navbar.bg-primary .navbar-search-wrapper .search-input {
  color: #e8dbff;
}
.navbar.bg-primary .search-input-wrapper .search-input,
.navbar.bg-primary .search-input-wrapper .search-toggler {
  color: #e8dbff;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar.bg-primary .navbar-nav > .nav-link,
.navbar.bg-primary .navbar-nav > .nav-item > .nav-link,
.navbar.bg-primary .navbar-nav > .nav > .nav-item > .nav-link {
  color: #e8dbff;
}
.navbar.bg-primary .navbar-nav > .nav-link:hover, .navbar.bg-primary .navbar-nav > .nav-link:focus,
.navbar.bg-primary .navbar-nav > .nav-item > .nav-link:hover,
.navbar.bg-primary .navbar-nav > .nav-item > .nav-link:focus,
.navbar.bg-primary .navbar-nav > .nav > .nav-item > .nav-link:hover,
.navbar.bg-primary .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #fff;
}
.navbar.bg-primary .navbar-nav > .nav-link.disabled,
.navbar.bg-primary .navbar-nav > .nav-item > .nav-link.disabled,
.navbar.bg-primary .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #c5a5fe !important;
}
.navbar.bg-primary .navbar-nav .show > .nav-link,
.navbar.bg-primary .navbar-nav .active > .nav-link,
.navbar.bg-primary .navbar-nav .nav-link.show,
.navbar.bg-primary .navbar-nav .nav-link.active {
  color: #fff;
}
.navbar.bg-primary .navbar-toggler {
  color: #e8dbff;
  border-color: rgba(255, 255, 255, 0.15);
}
.navbar.bg-primary .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='rgba(255, 255, 255, 0.8)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
}
.navbar.bg-primary .navbar-text {
  color: #e8dbff;
}
.navbar.bg-primary .navbar-text a {
  color: #fff;
}
.navbar.bg-primary .navbar-text a:hover, .navbar.bg-primary .navbar-text a:focus {
  color: #fff;
}
.navbar.bg-primary hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.menu.bg-primary {
  background-color: #24235b !important;
  color: #e8dbff;
}
.menu.bg-primary .menu-link,
.menu.bg-primary .menu-horizontal-prev,
.menu.bg-primary .menu-horizontal-next {
  color: #e8dbff;
}
.menu.bg-primary .menu-link:hover, .menu.bg-primary .menu-link:focus,
.menu.bg-primary .menu-horizontal-prev:hover,
.menu.bg-primary .menu-horizontal-prev:focus,
.menu.bg-primary .menu-horizontal-next:hover,
.menu.bg-primary .menu-horizontal-next:focus {
  color: #fff;
}
.menu.bg-primary .menu-link.active,
.menu.bg-primary .menu-horizontal-prev.active,
.menu.bg-primary .menu-horizontal-next.active {
  color: #fff;
}
.menu.bg-primary .menu-item.disabled .menu-link,
.menu.bg-primary .menu-horizontal-prev.disabled,
.menu.bg-primary .menu-horizontal-next.disabled {
  color: #c5a5fe !important;
}
.menu.bg-primary .menu-item.active:not(.open) > .menu-link:not(.menu-toggle), .menu.bg-primary .menu-item.active:not(.open) > .menu-link:not(.menu-toggle)::before {
  color: #fff !important;
  border-color: #fff !important;
}
.menu.bg-primary .menu-item.active > .menu-link:not(.menu-toggle) {
  background: linear-gradient(270deg, #24235b 0%, #c6a7fe 100%);
}
.menu.bg-primary.menu-horizontal .menu-sub > .menu-item.active > .menu-link:not(.menu-toggle), .menu.bg-primary.menu-horizontal .menu-sub > .menu-item.active > .menu-link:not(.menu-toggle)::before {
  background: #f2ebff;
  color: #24235b !important;
}
.menu.bg-primary.menu-horizontal .menu-inner > .menu-item.active > .menu-link.menu-toggle {
  background: linear-gradient(270deg, #24235b 0%, #c6a7fe 100%);
}
.menu.bg-primary.menu-horizontal .menu-inner > .menu-item.active > .menu-link.menu-toggle, .menu.bg-primary.menu-horizontal .menu-inner > .menu-item.active > .menu-link.menu-toggle:after {
  color: #fff;
}
.menu.bg-primary .menu-inner-shadow {
  background: linear-gradient(#24235b 5%, rgba(144, 85, 253, 0.75) 45%, rgba(144, 85, 253, 0.2) 80%, transparent);
}
.menu.bg-primary .menu-text {
  color: #fff;
}
.menu.bg-primary .menu-header {
  color: #d2baff;
}
.menu.bg-primary hr,
.menu.bg-primary .menu-divider,
.menu.bg-primary .menu-inner > .menu-item.open > .menu-sub::before {
  border-color: rgba(255, 255, 255, 0.15) !important;
}
.menu.bg-primary .menu-block::before {
  background-color: #d2baff;
}
.menu.bg-primary .ps__thumb-y,
.menu.bg-primary .ps__rail-y.ps--clicking > .ps__thumb-y {
  background: rgba(255, 255, 255, 0.5910478431) !important;
}

.footer.bg-primary {
  color: #e8dbff;
}
.footer.bg-primary .footer-link {
  color: #e8dbff;
}
.footer.bg-primary .footer-link:hover, .footer.bg-primary .footer-link:focus {
  color: #e8dbff;
}
.footer.bg-primary .footer-link.disabled {
  color: #c5a5fe !important;
}
.footer.bg-primary .footer-text {
  color: #fff;
}
.footer.bg-primary .show > .footer-link,
.footer.bg-primary .active > .footer-link,
.footer.bg-primary .footer-link.show,
.footer.bg-primary .footer-link.active {
  color: #fff;
}
.footer.bg-primary hr {
  border-color: rgba(255, 255, 255, 0.15);
}

.form-floating > .form-control:focus:not(:-moz-placeholder-shown) ~ label, .form-floating > .form-select:focus:not(:-moz-placeholder-shown) ~ label {
  color: #24235b;
}

.form-floating > .form-control:focus:not(:-ms-input-placeholder) ~ label, .form-floating > .form-select:focus:not(:-ms-input-placeholder) ~ label {
  color: #24235b;
}

.form-floating > .form-control:focus ~ label,
.form-floating > .form-control:focus:not(:placeholder-shown) ~ label,
.form-floating > .form-select:focus ~ label,
.form-floating > .form-select:focus:not(:placeholder-shown) ~ label {
  color: #24235b;
}

.form-floating-outline :not(select):focus + label,
.form-floating-outline :not(select):focus + span {
  color: #24235b;
}
.form-floating-outline label::after,
.form-floating-outline > span::after {
  background: #fff;
}
.form-floating-outline label.bg-body::after,
.form-floating-outline > span.bg-body::after {
  background: #f4f5fa !important;
}

.svg-illustration svg {
  fill: #24235b;
}

html:not([dir=rtl]) .border-primary,
html[dir=rtl] .border-primary {
  border-color: #24235b !important;
}

a {
  color: #24235b;
}
a:hover {
  color: #24235b;
}

.fill-primary {
  fill: #24235b;
}

.bg-navbar-theme {
  color: #544f5a;
}
.bg-navbar-theme .navbar-brand,
.bg-navbar-theme .navbar-brand a {
  color: #544f5a;
}
.bg-navbar-theme .navbar-brand:hover, .bg-navbar-theme .navbar-brand:focus,
.bg-navbar-theme .navbar-brand a:hover,
.bg-navbar-theme .navbar-brand a:focus {
  color: #544f5a;
}
.bg-navbar-theme .navbar-search-wrapper .navbar-search-icon,
.bg-navbar-theme .navbar-search-wrapper .search-input {
  color: #544f5a;
}
.bg-navbar-theme .search-input-wrapper .search-input,
.bg-navbar-theme .search-input-wrapper .search-toggler {
  color: #544f5a;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.bg-navbar-theme .navbar-nav > .nav-link,
.bg-navbar-theme .navbar-nav > .nav-item > .nav-link,
.bg-navbar-theme .navbar-nav > .nav > .nav-item > .nav-link {
  color: #544f5a;
}
.bg-navbar-theme .navbar-nav > .nav-link:hover, .bg-navbar-theme .navbar-nav > .nav-link:focus,
.bg-navbar-theme .navbar-nav > .nav-item > .nav-link:hover,
.bg-navbar-theme .navbar-nav > .nav-item > .nav-link:focus,
.bg-navbar-theme .navbar-nav > .nav > .nav-item > .nav-link:hover,
.bg-navbar-theme .navbar-nav > .nav > .nav-item > .nav-link:focus {
  color: #544f5a;
}
.bg-navbar-theme .navbar-nav > .nav-link.disabled,
.bg-navbar-theme .navbar-nav > .nav-item > .nav-link.disabled,
.bg-navbar-theme .navbar-nav > .nav > .nav-item > .nav-link.disabled {
  color: #94919a !important;
}
.bg-navbar-theme .navbar-nav .show > .nav-link,
.bg-navbar-theme .navbar-nav .active > .nav-link,
.bg-navbar-theme .navbar-nav .nav-link.show,
.bg-navbar-theme .navbar-nav .nav-link.active {
  color: #544f5a;
}
.bg-navbar-theme .navbar-toggler {
  color: #544f5a;
  border-color: rgba(84, 79, 90, 0.0769076471);
}
.bg-navbar-theme .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='rgba(137, 134, 141, 0.75)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>");
}
.bg-navbar-theme .navbar-text {
  color: #544f5a;
}
.bg-navbar-theme .navbar-text a {
  color: #544f5a;
}
.bg-navbar-theme .navbar-text a:hover, .bg-navbar-theme .navbar-text a:focus {
  color: #544f5a;
}
.bg-navbar-theme hr {
  border-color: rgba(84, 79, 90, 0.0769076471);
}

.bg-menu-theme {
  background-color: #f4f5fa !important;
  color: #544f5a;
}
.bg-menu-theme .menu-link,
.bg-menu-theme .menu-horizontal-prev,
.bg-menu-theme .menu-horizontal-next {
  color: #544f5a;
}
.bg-menu-theme .menu-link:hover, .bg-menu-theme .menu-link:focus,
.bg-menu-theme .menu-horizontal-prev:hover,
.bg-menu-theme .menu-horizontal-prev:focus,
.bg-menu-theme .menu-horizontal-next:hover,
.bg-menu-theme .menu-horizontal-next:focus {
  color: #544f5a;
}
.bg-menu-theme .menu-link.active,
.bg-menu-theme .menu-horizontal-prev.active,
.bg-menu-theme .menu-horizontal-next.active {
  color: #544f5a;
}
.bg-menu-theme .menu-item.disabled .menu-link,
.bg-menu-theme .menu-horizontal-prev.disabled,
.bg-menu-theme .menu-horizontal-next.disabled {
  color: #94919a !important;
}
.bg-menu-theme .menu-item.active:not(.open) > .menu-link:not(.menu-toggle), .bg-menu-theme .menu-item.active:not(.open) > .menu-link:not(.menu-toggle)::before {
  color: #fff !important;
  border-color: #fff !important;
}
.bg-menu-theme .menu-item.active > .menu-link:not(.menu-toggle) {
  background: linear-gradient(270deg, #24235b 0%, #c4a5fe 100%);
}
.bg-menu-theme.menu-horizontal .menu-sub > .menu-item.active > .menu-link:not(.menu-toggle), .bg-menu-theme.menu-horizontal .menu-sub > .menu-item.active > .menu-link:not(.menu-toggle)::before {
  background: #f2ebff;
  color: #24235b !important;
}
.bg-menu-theme.menu-horizontal .menu-inner > .menu-item.active > .menu-link.menu-toggle {
  background: linear-gradient(270deg, #24235b 0%, #c4a5fe 100%);
}
.bg-menu-theme.menu-horizontal .menu-inner > .menu-item.active > .menu-link.menu-toggle, .bg-menu-theme.menu-horizontal .menu-inner > .menu-item.active > .menu-link.menu-toggle:after {
  color: #fff;
}
.bg-menu-theme .menu-inner-shadow {
  background: linear-gradient(#f4f5fa 5%, rgba(244, 245, 250, 0.75) 45%, rgba(244, 245, 250, 0.2) 80%, transparent);
}
.bg-menu-theme .menu-text {
  color: #544f5a;
}
.bg-menu-theme .menu-header {
  color: #7c7982;
}
.bg-menu-theme hr,
.bg-menu-theme .menu-divider,
.bg-menu-theme .menu-inner > .menu-item.open > .menu-sub::before {
  border-color: transparent !important;
}
.bg-menu-theme .menu-block::before {
  background-color: #7c7982;
}
.bg-menu-theme .ps__thumb-y,
.bg-menu-theme .ps__rail-y.ps--clicking > .ps__thumb-y {
  background: rgba(84, 79, 90, 0.2152611765) !important;
}

@media (min-width: 1200px) {
  .layout-menu-collapsed.layout-menu-hover .bg-menu-theme {
    box-shadow: 0 0.625rem 0.875rem rgba(58, 53, 65, 0.12);
  }
}
.bg-footer-theme {
  color: #24235b;
}
.bg-footer-theme .footer-link {
  color: #24235b;
}
.bg-footer-theme .footer-link:hover, .bg-footer-theme .footer-link:focus {
  color: #24235b;
}
.bg-footer-theme .footer-link.disabled {
  color: #b895fc !important;
}
.bg-footer-theme .footer-text {
  color: #544f5a;
}
.bg-footer-theme .show > .footer-link,
.bg-footer-theme .active > .footer-link,
.bg-footer-theme .footer-link.show,
.bg-footer-theme .footer-link.active {
  color: #544f5a;
}
.bg-footer-theme hr {
  border-color: rgba(84, 79, 90, 0.0769076471);
}
/*
* demo.css
* File include item demo only specific css only
******************************************************************************/

.menu .app-brand.demo {
  height: 64px;
}

.dark-style .menu .app-brand.demo {
  height: 64px;
}

.app-brand-logo.demo svg {
  width: 30px;
  height: 24px;
}

.app-brand-text.demo {
  font-size: 1.25rem;
}

/* ! For .layout-navbar-fixed added fix padding top tpo .layout-page */
.layout-navbar-fixed .layout-wrapper:not(.layout-without-menu) .layout-page {
  padding-top: 64px !important;
}

/* Navbar page z-index issue solution */
.content-wrapper .navbar {
  z-index: auto;
}

/*
* Content
******************************************************************************/

.demo-blocks > * {
  display: block !important;
}

.demo-inline-spacing > * {
  margin: 1rem 0.375rem 0 0 !important;
}

/* ? .demo-vertical-spacing class is used to have vertical margins between elements. To remove margin-top from the first-child, use .demo-only-element class with .demo-vertical-spacing class. For example, we have used this class in forms-input-groups.html file. */
.demo-vertical-spacing > * {
  margin-top: 1.25rem !important;
  margin-bottom: 0 !important;
}
.demo-vertical-spacing.demo-only-element > :first-child {
  margin-top: 0 !important;
}

.demo-vertical-spacing-lg > * {
  margin-top: 1.875rem !important;
  margin-bottom: 0 !important;
}
.demo-vertical-spacing-lg.demo-only-element > :first-child {
  margin-top: 0 !important;
}

.demo-vertical-spacing-xl > * {
  margin-top: 5rem !important;
  margin-bottom: 0 !important;
}
.demo-vertical-spacing-xl.demo-only-element > :first-child {
  margin-top: 0 !important;
}

.rtl-only {
  display: none !important;
  text-align: left !important;
  direction: ltr !important;
}

[dir='rtl'] .rtl-only {
  display: block !important;
}

/* Dropdown buttons going out of small screens */
@media (max-width: 576px) {
  #dropdown-variation-demo .btn-group .text-truncate {
    width: 300px;
    position: relative;
  }
  #dropdown-variation-demo .btn-group .text-truncate::after {
    position: absolute;
    top: 45%;
    right: 0.65rem;
  }
}
/*
* Layout demo
******************************************************************************/

.layout-demo-wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  margin-top: 1.25rem;
}
.layout-demo-placeholder img {
  width: 900px;
}
.layout-demo-info {
  text-align: center;
  margin-top: 1.25rem;
}

</style>

</head>

<body>
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">INSURANCE/</span>INTERMODAL INTERCHANGE CERTIFICATE OF
        INSURANCE
    </h4>
    <p>THIS CERTIFICATE IS ISSUED AS A MATTER OF INFORMATION ONLY AND CONFERS NO RIGHTS UPON THE CERTIFICATE HOLDER.
        THIS
        CERTIFICATE DOES NOT AFFIRMATIVELY OR NEGATIVELY AMEND, EXTEND OR ALTER THE COVERAGE AFFORDED BY THE POLICIES
        BELOW. THIS CERTIFICATE OF INSURANCE DOES NOT CONSTITUTE A CONTRACT BETWEEN THE ISSUING INSURER(S), AUTHORIZED
        REPRESENTATIVE OR PRODUCER, AND THE CERTIFICATE HOLDER.</p>
    <!-- Basic Layout -->

    <div class="row">

        <!--------------- PRODUCER -------------->
        @include('agent.producer')

        <!----------- PRODUCER CONTACT info -------------->
        @include('agent.producer-contact')

        <!----------- INSURED info -------------->
        @include('agent.insured')

        <!----------- INSURER(S) AFFORDING COVERAGE -------------->
        @include('agent.insurance_company2')

    </div>


    <h4 class="py-3 mb-4">TYPE OF INSURANCE <span class="text-muted fw-light">INSURANCE/</span>COVERAGES</h4>
    <p>POLICIES. AGGREGATE LIMITS SHOWN MAY HAVE BEEN REDUCED BY PAID CLAIMS.
        MAY PERTAIN, THE INSURANCE AFFORDED BY THE POLICIES DESCRIBED HEREIN IS SUBJECT TO ALL THE TERMS, EXCLUSIONS AND
        CONDITIONS OF SUCH
        ANY REQUIREMENT, TERM OR CONDITION OF ANY CONTRACT OR OTHER DOCUMENT WITH RESPECT TO WHICH THIS CERTIFICATE MAY
        BE ISSUED OR
        THE POLICIES OF INSURANCE LISTED BELOW HAVE BEEN ISSUED TO THE INSURED NAMED ABOVE FOR THE POLICY PERIOD
        INDICATED. NOTWITHSTANDING</p>

    @include('agent.agent-policy2')

</body>

</html>
