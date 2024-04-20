{{-- @php
$isMenu = false;
$navbarHideToggle = false;
@endphp --}}
@extends('layouts/guest')
{{-- @section('title', ' Certificate Form') --}}

@push('body-css')
<style>
    [_nghost-rgn-c237] {
        position: relative;
        display: flex;
        flex: 1 1 auto;
        width: 100%;
        height: 100%;
        min-width: 0
    }

    [_nghost-rgn-c237] .theme-options-button[_ngcontent-rgn-c237] {
        position: absolute;
        top: 160px;
        right: 0;
        width: 48px;
        height: 48px;
        line-height: 48px;
        text-align: center;
        cursor: pointer;
        border-radius: 0;
        margin: 0;
        pointer-events: auto;
        opacity: .9;
        z-index: 998
    }

    @media screen and (min-width: 1280px) {
        [_nghost-rgn-c237] .theme-options-button.right-side-panel[_ngcontent-rgn-c237] {
            right: 70px
        }
    }

    [_nghost-rgn-c237] .theme-options-button.side-panel-hidden[_ngcontent-rgn-c237] {
        right: 0 !important
    }

    [_nghost-rgn-c237] .theme-options-button[_ngcontent-rgn-c237] mat-icon[_ngcontent-rgn-c237] {
        animation: rotating 3s linear infinite
    }

    [_nghost-rgn-c237] .theme-options-button[_ngcontent-rgn-c237]:hover {
        opacity: 1
    }

    [_nghost-rgn-c237] .theme-options-sidebar[_ngcontent-rgn-c237] {
        width: 360px;
        min-width: 360px;
        max-width: 360px
    }

    fuse-progress-bar {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        z-index: 99998
    }

    fuse-progress-bar mat-progress-bar .mat-progress-bar-buffer {
        background-color: #c5c6cb !important
    }

    fuse-sidebar {
        display: flex;
        flex-direction: column;
        flex: 1 0 auto;
        position: absolute;
        top: 0;
        bottom: 0;
        overflow-x: hidden;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        width: 280px;
        min-width: 280px;
        max-width: 280px;
        z-index: 1000;
        box-shadow: 0 2px 8px #00000059
    }

    @media screen and (max-width: 599px) {
        fuse-sidebar {
            min-width: 0 !important;
            max-width: 80vw !important;
            width: 80vw !important
        }
    }

    fuse-sidebar.left-positioned {
        left: 0;
        transform: translate(-100%)
    }

    fuse-sidebar.right-positioned {
        right: 0;
        transform: translate(100%)
    }

    fuse-sidebar.open {
        transform: translate(0)
    }

    fuse-sidebar.locked-open {
        position: relative !important;
        transform: translate(0) !important
    }

    fuse-sidebar.folded {
        position: absolute !important;
        top: 0;
        bottom: 0
    }

    fuse-sidebar.animations-enabled {
        transition-property: transform, width, min-width, max-width;
        transition-duration: .15s;
        transition-timing-function: ease-in-out
    }

    .fuse-sidebar-overlay {
        position: absolute;
        inset: 0;
        z-index: 999;
        opacity: 0
    }


    @media screen and (min-width: 600px),
    screen and (min-width: 960px),
    screen and (min-width: 1280px),
    screen and (min-width: 1920px),
    screen and (min-width: 1920px) and (max-width: 4999.98px),
    screen and (max-width: 1919.98px),
    screen and (min-width: 1280px) and (max-width: 1919.98px),
    screen and (max-width: 1279.98px),
    screen and (min-width: 960px) and (max-width: 1279.98px),
    screen and (max-width: 959.98px),
    screen and (min-width: 600px) and (max-width: 959.98px),
    screen and (max-width: 599.98px),
    screen and (min-width: 0px) and (max-width: 599.98px),
    print {
        .fx-query-test {}
    }

    @keyframes rotating {
        0% {
            transform: rotate(0)
        }

        to {
            transform: rotate(360deg)
        }
    }

    fuse-theme-options {
        display: flex;
        overflow: hidden
    }

    fuse-theme-options .theme-options-panel {
        display: flex;
        flex-direction: column;
        flex: 1 0 auto;
        padding: 40px 24px 24px;
        overflow: auto;
        -webkit-overflow-scrolling: touch
    }

    fuse-theme-options .theme-options-panel .header {
        display: flex;
        flex: 0 1 auto;
        margin-bottom: 32px;
        align-items: center;
        justify-content: space-between
    }

    fuse-theme-options .theme-options-panel .header .title {
        font-size: 20px;
        font-weight: 600;
        padding-left: 4px
    }

    fuse-theme-options .theme-options-panel form {
        display: flex;
        flex: 1 1 auto;
        flex-direction: column
    }

    fuse-theme-options .theme-options-panel form .group {
        display: flex;
        flex: 1 0 auto;
        flex-direction: column;
        position: relative;
        border-radius: 2px;
        padding: 28px 16px 8px;
        margin: 16px 0
    }

    fuse-theme-options .theme-options-panel form .group h2 {
        position: absolute;
        top: -11px;
        left: 8px;
        margin: 0;
        padding: 0 8px;
        font-size: 16px;
        font-weight: 600
    }

    fuse-theme-options .theme-options-panel form .group h3 {
        font-size: 14px;
        font-weight: 600;
        margin: 24px 0 16px;
        padding: 0
    }

    fuse-theme-options .theme-options-panel form .group h3:first-of-type {
        margin-top: 0
    }

    .header_spinner[_ngcontent-rgn-c211] {
        position: relative;
        left: 16px
    }

    .cur_ad_sp[_ngcontent-rgn-c211] {
        position: absolute;
        left: 18px;
        top: 5px
    }

    .header_dialog_spinner[_ngcontent-rgn-c211] {
        position: relative;
        left: 18px;
        top: -6px
    }

    .top_27[_ngcontent-rgn-c211] {
        top: 27px
    }

    .top_3[_ngcontent-rgn-c211] {
        top: 3px
    }

    .la_text[_ngcontent-rgn-c211] {
        color: #006ed0;
        padding-left: 18px;
        font-weight: 500;
        font-size: 12px;
        margin: 0;
        line-height: 18px;
        width: 157px
    }

    .loading-text {
        transform: translate(-18%, -60%) !important
    }

    .la-sm {
        left: 133px !important
    }

    .dialog_spinner .la-ball-pulse.la-sm {
        left: 133px !important
    }

    .mat-button .mat-button-focus-overlay,
    .mat-icon-button .mat-button-focus-overlay {
        opacity: 0
    }

    .mat-button:hover:not(.mat-button-disabled) .mat-button-focus-overlay,
    .mat-stroked-button:hover:not(.mat-button-disabled) .mat-button-focus-overlay {
        opacity: .04
    }

    @media(hover: none) {

        .mat-button:hover:not(.mat-button-disabled) .mat-button-focus-overlay,
        .mat-stroked-button:hover:not(.mat-button-disabled) .mat-button-focus-overlay {
            opacity: 0
        }
    }

    .mat-button,
    .mat-icon-button,
    .mat-stroked-button,
    .mat-flat-button {
        box-sizing: border-box;
        position: relative;
        -webkit-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: none;
        border: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        display: inline-block;
        white-space: nowrap;
        text-decoration: none;
        vertical-align: baseline;
        text-align: center;
        margin: 0;
        min-width: 64px;
        line-height: 36px;
        padding: 0 16px;
        border-radius: 4px;
        overflow: visible
    }

    .mat-button::-moz-focus-inner,
    .mat-icon-button::-moz-focus-inner,
    .mat-stroked-button::-moz-focus-inner,
    .mat-flat-button::-moz-focus-inner {
        border: 0
    }

    .mat-button.mat-button-disabled,
    .mat-icon-button.mat-button-disabled,
    .mat-stroked-button.mat-button-disabled,
    .mat-flat-button.mat-button-disabled {
        cursor: default
    }

    .mat-button.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-button.cdk-program-focused .mat-button-focus-overlay,
    .mat-icon-button.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-icon-button.cdk-program-focused .mat-button-focus-overlay,
    .mat-stroked-button.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-stroked-button.cdk-program-focused .mat-button-focus-overlay,
    .mat-flat-button.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-flat-button.cdk-program-focused .mat-button-focus-overlay {
        opacity: .12
    }

    .mat-button::-moz-focus-inner,
    .mat-icon-button::-moz-focus-inner,
    .mat-stroked-button::-moz-focus-inner,
    .mat-flat-button::-moz-focus-inner {
        border: 0
    }

    .mat-raised-button {
        box-sizing: border-box;
        position: relative;
        -webkit-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: none;
        border: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        display: inline-block;
        white-space: nowrap;
        text-decoration: none;
        vertical-align: baseline;
        text-align: center;
        margin: 0;
        min-width: 64px;
        line-height: 36px;
        padding: 0 16px;
        border-radius: 4px;
        overflow: visible;
        transform: translate3d(0, 0, 0);
        transition: background 400ms cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1)
    }

    .mat-raised-button::-moz-focus-inner {
        border: 0
    }

    .mat-raised-button.mat-button-disabled {
        cursor: default
    }

    .mat-raised-button.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-raised-button.cdk-program-focused .mat-button-focus-overlay {
        opacity: .12
    }

    .mat-raised-button::-moz-focus-inner {
        border: 0
    }

    .mat-raised-button._mat-animation-noopable {
        transition: none !important;
        animation: none !important
    }

    .mat-stroked-button {
        border: 1px solid currentColor;
        padding: 0 15px;
        line-height: 34px
    }

    .mat-stroked-button .mat-button-ripple.mat-ripple,
    .mat-stroked-button .mat-button-focus-overlay {
        top: -1px;
        left: -1px;
        right: -1px;
        bottom: -1px
    }

    .mat-fab {
        box-sizing: border-box;
        position: relative;
        -webkit-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: none;
        border: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        display: inline-block;
        white-space: nowrap;
        text-decoration: none;
        vertical-align: baseline;
        text-align: center;
        margin: 0;
        min-width: 64px;
        line-height: 36px;
        padding: 0 16px;
        border-radius: 4px;
        overflow: visible;
        transform: translate3d(0, 0, 0);
        transition: background 400ms cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
        min-width: 0;
        border-radius: 50%;
        width: 56px;
        height: 56px;
        padding: 0;
        flex-shrink: 0
    }

    .mat-fab::-moz-focus-inner {
        border: 0
    }

    .mat-fab.mat-button-disabled {
        cursor: default
    }

    .mat-fab.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-fab.cdk-program-focused .mat-button-focus-overlay {
        opacity: .12
    }

    .mat-fab::-moz-focus-inner {
        border: 0
    }

    .mat-fab._mat-animation-noopable {
        transition: none !important;
        animation: none !important
    }


    .mat-mini-fab {
        box-sizing: border-box;
        position: relative;
        -webkit-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: none;
        border: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        display: inline-block;
        white-space: nowrap;
        text-decoration: none;
        vertical-align: baseline;
        text-align: center;
        margin: 0;
        min-width: 64px;
        line-height: 36px;
        padding: 0 16px;
        border-radius: 4px;
        overflow: visible;
        transform: translate3d(0, 0, 0);
        transition: background 400ms cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
        min-width: 0;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        padding: 0;
        flex-shrink: 0
    }

    .mat-mini-fab::-moz-focus-inner {
        border: 0
    }

    .mat-mini-fab.mat-button-disabled {
        cursor: default
    }

    .mat-mini-fab.cdk-keyboard-focused .mat-button-focus-overlay,
    .mat-mini-fab.cdk-program-focused .mat-button-focus-overlay {
        opacity: .12
    }

    .mat-mini-fab::-moz-focus-inner {
        border: 0
    }

    .mat-mini-fab._mat-animation-noopable {
        transition: none !important;
        animation: none !important
    }



    .mat-icon-button {
        padding: 0;
        min-width: 0;
        width: 40px;
        height: 40px;
        flex-shrink: 0;
        line-height: 40px;
        border-radius: 50%
    }

    .mat-icon-button i,
    .mat-icon-button .mat-icon {
        line-height: 24px
    }

    .mat-button-ripple.mat-ripple,
    .mat-button-focus-overlay {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        pointer-events: none;
        border-radius: inherit
    }

    .mat-button-ripple.mat-ripple:not(:empty) {
        transform: translateZ(0)
    }

    .mat-button-focus-overlay {
        opacity: 0;
        transition: opacity 200ms cubic-bezier(0.35, 0, 0.25, 1), background-color 200ms cubic-bezier(0.35, 0, 0.25, 1)
    }

    ._mat-animation-noopable .mat-button-focus-overlay {
        transition: none
    }

    .mat-button-ripple-round {
        border-radius: 50%;
        z-index: 1
    }



    .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button,
    .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        font-size: inherit;
        width: 2.5em;
        height: 2.5em
    }

    .mat-flat-button::before,
    .mat-raised-button::before,
    .mat-fab::before,
    .mat-mini-fab::before {
        margin: calc(calc(var(--mat-focus-indicator-border-width, 3px) + 2px) * -1)
    }

    .mat-stroked-button::before {
        margin: calc(calc(var(--mat-focus-indicator-border-width, 3px) + 3px) * -1)
    }

    .cdk-high-contrast-active .mat-button,
    .cdk-high-contrast-active .mat-flat-button,
    .cdk-high-contrast-active .mat-raised-button,
    .cdk-high-contrast-active .mat-icon-button,
    .cdk-high-contrast-active .mat-fab,
    .cdk-high-contrast-active .mat-mini-fab {
        outline: solid 1px
    }

    .mat-icon {
        -webkit-user-select: none;
        user-select: none;
        background-repeat: no-repeat;
        display: inline-block;
        fill: currentColor;
        height: 24px;
        width: 24px;
        overflow: hidden
    }

    .mat-icon.mat-icon-inline {
        font-size: inherit;
        height: inherit;
        line-height: inherit;
        width: inherit
    }

    .mat-icon.mat-ligature-font[fontIcon]::before {
        content: attr(fontIcon)
    }

    [dir=rtl] .mat-icon-rtl-mirror {
        transform: scale(-1, 1)
    }

    .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon,
    .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon {
        display: block
    }

    .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-prefix .mat-icon-button .mat-icon,
    .mat-form-field:not(.mat-form-field-appearance-legacy) .mat-form-field-suffix .mat-icon-button .mat-icon {
        margin: auto
    }

    .mat-radio-button {
        display: inline-block;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        outline: 0
    }

    .mat-radio-label {
        -webkit-user-select: none;
        user-select: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        white-space: nowrap;
        vertical-align: middle;
        width: 100%
    }

    .mat-radio-container {
        box-sizing: border-box;
        display: inline-block;
        position: relative;
        width: 20px;
        height: 20px;
        flex-shrink: 0
    }

    .mat-radio-outer-circle {
        box-sizing: border-box;
        display: block;
        height: 20px;
        left: 0;
        position: absolute;
        top: 0;
        transition: border-color ease 280ms;
        width: 20px;
        border-width: 2px;
        border-style: solid;
        border-radius: 50%
    }

    ._mat-animation-noopable .mat-radio-outer-circle {
        transition: none
    }

    .mat-radio-inner-circle {
        border-radius: 50%;
        box-sizing: border-box;
        display: block;
        height: 20px;
        left: 0;
        position: absolute;
        top: 0;
        opacity: 0;
        transition: transform ease 280ms, background-color ease 280ms, opacity linear 1ms 280ms;
        width: 20px;
        transform: scale(0.001);
        -webkit-print-color-adjust: exact;
        color-adjust: exact
    }

    .mat-radio-checked .mat-radio-inner-circle {
        transform: scale(0.5);
        opacity: 1;
        transition: transform ease 280ms, background-color ease 280ms
    }

    .cdk-high-contrast-active .mat-radio-checked .mat-radio-inner-circle {
        border: solid 10px
    }

    ._mat-animation-noopable .mat-radio-inner-circle {
        transition: none
    }

    .mat-radio-label-content {
        -webkit-user-select: auto;
        user-select: auto;
        display: inline-block;
        order: 0;
        line-height: inherit;
        padding-left: 8px;
        padding-right: 0
    }

    [dir=rtl] .mat-radio-label-content {
        padding-right: 8px;
        padding-left: 0
    }

    .mat-radio-label-content.mat-radio-label-before {
        order: -1;
        padding-left: 0;
        padding-right: 8px
    }

    [dir=rtl] .mat-radio-label-content.mat-radio-label-before {
        padding-right: 0;
        padding-left: 8px
    }

    .mat-radio-disabled,
    .mat-radio-disabled .mat-radio-label {
        cursor: default
    }

    .mat-radio-button .mat-radio-ripple {
        position: absolute;
        left: calc(50% - 20px);
        top: calc(50% - 20px);
        height: 40px;
        width: 40px;
        z-index: 1;
        pointer-events: none
    }

    .mat-radio-button .mat-radio-ripple .mat-ripple-element:not(.mat-radio-persistent-ripple) {
        opacity: .16
    }

    .mat-radio-persistent-ripple {
        width: 100%;
        height: 100%;
        transform: none;
        top: 0;
        left: 0
    }

    .mat-radio-container:hover .mat-radio-persistent-ripple {
        opacity: .04
    }

    .mat-radio-button:not(.mat-radio-disabled).cdk-keyboard-focused .mat-radio-persistent-ripple,
    .mat-radio-button:not(.mat-radio-disabled).cdk-program-focused .mat-radio-persistent-ripple {
        opacity: .12
    }

    .mat-radio-persistent-ripple,
    .mat-radio-disabled .mat-radio-container:hover .mat-radio-persistent-ripple {
        opacity: 0
    }

    @media(hover: none) {
        .mat-radio-container:hover .mat-radio-persistent-ripple {
            display: none
        }
    }

    .mat-radio-input {
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        margin: 0;
        width: 100%;
        height: 100%;
        cursor: inherit;
        z-index: -1
    }

    .mat-radio-input:focus~.mat-focus-indicator::before {
        content: ""
    }

    .cdk-high-contrast-active .mat-radio-disabled {
        opacity: .5
    }

    .mat-slide-toggle {
        display: inline-block;
        height: 24px;
        max-width: 100%;
        line-height: 24px;
        white-space: nowrap;
        outline: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    .mat-slide-toggle.mat-checked .mat-slide-toggle-thumb-container {
        transform: translate3d(16px, 0, 0)
    }

    [dir=rtl] .mat-slide-toggle.mat-checked .mat-slide-toggle-thumb-container {
        transform: translate3d(-16px, 0, 0)
    }

    .mat-slide-toggle.mat-disabled {
        opacity: .38
    }

    .mat-slide-toggle.mat-disabled .mat-slide-toggle-label,
    .mat-slide-toggle.mat-disabled .mat-slide-toggle-thumb-container {
        cursor: default
    }

    .mat-slide-toggle-label {
        -webkit-user-select: none;
        user-select: none;
        display: flex;
        flex: 1;
        flex-direction: row;
        align-items: center;
        height: inherit;
        cursor: pointer
    }

    .mat-slide-toggle-content {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }

    .mat-slide-toggle-label-before .mat-slide-toggle-label {
        order: 1
    }

    .mat-slide-toggle-label-before .mat-slide-toggle-bar {
        order: 2
    }

    [dir=rtl] .mat-slide-toggle-label-before .mat-slide-toggle-bar,
    .mat-slide-toggle-bar {
        margin-right: 8px;
        margin-left: 0
    }

    [dir=rtl] .mat-slide-toggle-bar,
    .mat-slide-toggle-label-before .mat-slide-toggle-bar {
        margin-left: 8px;
        margin-right: 0
    }

    .mat-slide-toggle-bar-no-side-margin {
        margin-left: 0;
        margin-right: 0
    }

    .mat-slide-toggle-thumb-container {
        position: absolute;
        z-index: 1;
        width: 20px;
        height: 20px;
        top: -3px;
        left: 0;
        transform: translate3d(0, 0, 0);
        transition: all 80ms linear;
        transition-property: transform
    }

    ._mat-animation-noopable .mat-slide-toggle-thumb-container {
        transition: none
    }

    [dir=rtl] .mat-slide-toggle-thumb-container {
        left: auto;
        right: 0
    }

    .mat-slide-toggle-thumb {
        height: 20px;
        width: 20px;
        border-radius: 50%;
        display: block
    }

    .mat-slide-toggle-bar {
        position: relative;
        width: 36px;
        height: 14px;
        flex-shrink: 0;
        border-radius: 8px
    }

    .mat-slide-toggle-input {
        bottom: 0;
        left: 10px
    }

    [dir=rtl] .mat-slide-toggle-input {
        left: auto;
        right: 10px
    }

    .mat-slide-toggle-bar,
    .mat-slide-toggle-thumb {
        transition: all 80ms linear;
        transition-property: background-color;
        transition-delay: 50ms
    }

    ._mat-animation-noopable .mat-slide-toggle-bar,
    ._mat-animation-noopable .mat-slide-toggle-thumb {
        transition: none
    }

    .mat-slide-toggle .mat-slide-toggle-ripple {
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        height: 40px;
        width: 40px;
        z-index: 1;
        pointer-events: none
    }

    .mat-slide-toggle .mat-slide-toggle-ripple .mat-ripple-element:not(.mat-slide-toggle-persistent-ripple) {
        opacity: .12
    }

    .mat-slide-toggle-persistent-ripple {
        width: 100%;
        height: 100%;
        transform: none
    }

    .mat-slide-toggle-bar:hover .mat-slide-toggle-persistent-ripple {
        opacity: .04
    }

    .mat-slide-toggle:not(.mat-disabled).cdk-keyboard-focused .mat-slide-toggle-persistent-ripple {
        opacity: .12
    }

    .mat-slide-toggle-persistent-ripple,
    .mat-slide-toggle.mat-disabled .mat-slide-toggle-bar:hover .mat-slide-toggle-persistent-ripple {
        opacity: 0
    }

    @media(hover: none) {
        .mat-slide-toggle-bar:hover .mat-slide-toggle-persistent-ripple {
            display: none
        }
    }

    .mat-slide-toggle-input:focus~.mat-slide-toggle-thumb-container .mat-focus-indicator::before {
        content: ""
    }

    .cdk-high-contrast-active .mat-slide-toggle-thumb,
    .cdk-high-contrast-active .mat-slide-toggle-bar {
        border: 1px solid
    }

    .ngx-spinner-overlay[_ngcontent-rgn-c29] {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%
    }

    .ngx-spinner-overlay[_ngcontent-rgn-c29]>div[_ngcontent-rgn-c29]:not(.loading-text) {
        top: 50%;
        left: 50%;
        margin: 0;
        position: absolute;
        transform: translate(-50%, -50%)
    }

    .loading-text[_ngcontent-rgn-c29] {
        position: absolute;
        top: 60%;
        left: 50%;
        transform: translate(-50%, -60%)
    }


    horizontal-layout-1 {
        display: flex;
        flex: 1 1 auto;
        width: 100%;
        height: 100%
    }

    horizontal-layout-1 #main {
        position: relative;
        display: flex;
        flex: 1 1 auto;
        flex-direction: column;
        width: 100%;
        height: 100%;
        z-index: 1;
        min-width: 0
    }

    horizontal-layout-1 #main>.container {
        position: relative;
        display: flex;
        flex: 1 1 0%;
        width: 100%;
        min-height: 0;
        min-width: 0
    }

    horizontal-layout-1 #main>.container>.container {
        position: relative;
        display: flex;
        flex: 1 1 0%;
        flex-direction: column;
        min-width: 0
    }

    horizontal-layout-1 #main>.container>.container>.container {
        position: relative;
        display: flex;
        flex: 1 1 0%;
        flex-direction: column;
        overflow-x: hidden;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch
    }

    horizontal-layout-1 #main>.container>.container>.container content.inner-scroll {
        flex: 1 1 0%;
        min-height: 0
    }

    horizontal-layout-1 #main>.container>.container>.container content.inner-scroll>*:not(router-outlet) {
        flex: 1 1 0%
    }


    content {
        position: relative;
        display: flex;
        z-index: 1;
        flex: 1 0 auto
    }

    content>*:not(router-outlet) {
        display: flex;
        flex: 1 0 auto;
        width: 100%;
        min-width: 100%
    }


    quick-panel {
        display: flex;
        flex-direction: column;
        flex: 1 1 auto;
        width: 280px;
        min-width: 280px;
        max-width: 280px;
        z-index: 99
    }

    quick-panel .mat-slide-toggle-content {
        flex: 1
    }

    .mat-subheader {
        display: flex;
        box-sizing: border-box;
        padding: 16px;
        align-items: center
    }

    .mat-list-base .mat-subheader {
        margin: 0
    }

    button.mat-list-item,
    button.mat-list-option {
        padding: 0;
        width: 100%;
        background: none;
        color: inherit;
        border: none;
        outline: inherit;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        text-align: left
    }

    [dir=rtl] button.mat-list-item,
    [dir=rtl] button.mat-list-option {
        text-align: right
    }

    button.mat-list-item::-moz-focus-inner,
    button.mat-list-option::-moz-focus-inner {
        border: 0
    }

    .mat-list-base {
        padding-top: 8px;
        display: block;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    .mat-list-base .mat-subheader {
        height: 48px;
        line-height: 16px
    }

    .mat-list-base .mat-subheader:first-child {
        margin-top: -8px
    }

    .mat-list-base .mat-list-item,
    .mat-list-base .mat-list-option {
        display: block;
        height: 48px;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        width: 100%;
        padding: 0
    }

    .mat-list-base .mat-list-item .mat-list-item-content,
    .mat-list-base .mat-list-option .mat-list-item-content {
        display: flex;
        flex-direction: row;
        align-items: center;
        box-sizing: border-box;
        padding: 0 16px;
        position: relative;
        height: inherit
    }

    .mat-list-base .mat-list-item .mat-list-item-content-reverse,
    .mat-list-base .mat-list-option .mat-list-item-content-reverse {
        display: flex;
        align-items: center;
        padding: 0 16px;
        flex-direction: row-reverse;
        justify-content: space-around
    }

    .mat-list-base .mat-list-item .mat-list-item-ripple,
    .mat-list-base .mat-list-option .mat-list-item-ripple {
        display: block;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        pointer-events: none
    }

    .mat-list-base .mat-list-item.mat-list-item-with-avatar,
    .mat-list-base .mat-list-option.mat-list-item-with-avatar {
        height: 56px
    }

    .mat-list-base .mat-list-item.mat-2-line,
    .mat-list-base .mat-list-option.mat-2-line {
        height: 72px
    }

    .mat-list-base .mat-list-item.mat-3-line,
    .mat-list-base .mat-list-option.mat-3-line {
        height: 88px
    }

    .mat-list-base .mat-list-item.mat-multi-line,
    .mat-list-base .mat-list-option.mat-multi-line {
        height: auto
    }

    .mat-list-base .mat-list-item.mat-multi-line .mat-list-item-content,
    .mat-list-base .mat-list-option.mat-multi-line .mat-list-item-content {
        padding-top: 16px;
        padding-bottom: 16px
    }

    .mat-list-base .mat-list-item .mat-list-text,
    .mat-list-base .mat-list-option .mat-list-text {
        display: flex;
        flex-direction: column;
        flex: auto;
        box-sizing: border-box;
        overflow: hidden;
        padding: 0
    }

    .mat-list-base .mat-list-item .mat-list-text>*,
    .mat-list-base .mat-list-option .mat-list-text>* {
        margin: 0;
        padding: 0;
        font-weight: normal;
        font-size: inherit
    }

    .mat-list-base .mat-list-item .mat-list-text:empty,
    .mat-list-base .mat-list-option .mat-list-text:empty {
        display: none
    }

    .mat-list-base .mat-list-item.mat-list-item-with-avatar .mat-list-item-content .mat-list-text,
    .mat-list-base .mat-list-item.mat-list-option .mat-list-item-content .mat-list-text,
    .mat-list-base .mat-list-option.mat-list-item-with-avatar .mat-list-item-content .mat-list-text,
    .mat-list-base .mat-list-option.mat-list-option .mat-list-item-content .mat-list-text {
        padding-right: 0;
        padding-left: 16px
    }

    [dir=rtl] .mat-list-base .mat-list-item.mat-list-item-with-avatar .mat-list-item-content .mat-list-text,
    [dir=rtl] .mat-list-base .mat-list-item.mat-list-option .mat-list-item-content .mat-list-text,
    [dir=rtl] .mat-list-base .mat-list-option.mat-list-item-with-avatar .mat-list-item-content .mat-list-text,
    [dir=rtl] .mat-list-base .mat-list-option.mat-list-option .mat-list-item-content .mat-list-text {
        padding-right: 16px;
        padding-left: 0
    }

    .mat-list-base .mat-list-item.mat-list-item-with-avatar .mat-list-item-content-reverse .mat-list-text,
    .mat-list-base .mat-list-item.mat-list-option .mat-list-item-content-reverse .mat-list-text,
    .mat-list-base .mat-list-option.mat-list-item-with-avatar .mat-list-item-content-reverse .mat-list-text,
    .mat-list-base .mat-list-option.mat-list-option .mat-list-item-content-reverse .mat-list-text {
        padding-left: 0;
        padding-right: 16px
    }

    [dir=rtl] .mat-list-base .mat-list-item.mat-list-item-with-avatar .mat-list-item-content-reverse .mat-list-text,
    [dir=rtl] .mat-list-base .mat-list-item.mat-list-option .mat-list-item-content-reverse .mat-list-text,
    [dir=rtl] .mat-list-base .mat-list-option.mat-list-item-with-avatar .mat-list-item-content-reverse .mat-list-text,
    [dir=rtl] .mat-list-base .mat-list-option.mat-list-option .mat-list-item-content-reverse .mat-list-text {
        padding-right: 0;
        padding-left: 16px
    }

    .mat-list-base .mat-list-item.mat-list-item-with-avatar.mat-list-option .mat-list-item-content-reverse .mat-list-text,
    .mat-list-base .mat-list-item.mat-list-item-with-avatar.mat-list-option .mat-list-item-content .mat-list-text,
    .mat-list-base .mat-list-option.mat-list-item-with-avatar.mat-list-option .mat-list-item-content-reverse .mat-list-text,
    .mat-list-base .mat-list-option.mat-list-item-with-avatar.mat-list-option .mat-list-item-content .mat-list-text {
        padding-right: 16px;
        padding-left: 16px
    }

    .mat-list-base .mat-list-item .mat-list-avatar,
    .mat-list-base .mat-list-option .mat-list-avatar {
        flex-shrink: 0;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover
    }

    .mat-list-base .mat-list-item .mat-list-avatar~.mat-divider-inset,
    .mat-list-base .mat-list-option .mat-list-avatar~.mat-divider-inset {
        margin-left: 72px;
        width: calc(100% - 72px)
    }

    [dir=rtl] .mat-list-base .mat-list-item .mat-list-avatar~.mat-divider-inset,
    [dir=rtl] .mat-list-base .mat-list-option .mat-list-avatar~.mat-divider-inset {
        margin-left: auto;
        margin-right: 72px
    }

    .mat-list-base .mat-list-item .mat-list-icon,
    .mat-list-base .mat-list-option .mat-list-icon {
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        font-size: 24px;
        box-sizing: content-box;
        border-radius: 50%;
        padding: 4px
    }

    .mat-list-base .mat-list-item .mat-list-icon~.mat-divider-inset,
    .mat-list-base .mat-list-option .mat-list-icon~.mat-divider-inset {
        margin-left: 64px;
        width: calc(100% - 64px)
    }

    [dir=rtl] .mat-list-base .mat-list-item .mat-list-icon~.mat-divider-inset,
    [dir=rtl] .mat-list-base .mat-list-option .mat-list-icon~.mat-divider-inset {
        margin-left: auto;
        margin-right: 64px
    }

    .mat-list-base .mat-list-item .mat-divider,
    .mat-list-base .mat-list-option .mat-divider {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        margin: 0
    }

    [dir=rtl] .mat-list-base .mat-list-item .mat-divider,
    [dir=rtl] .mat-list-base .mat-list-option .mat-divider {
        margin-left: auto;
        margin-right: 0
    }

    .mat-list-base .mat-list-item .mat-divider.mat-divider-inset,
    .mat-list-base .mat-list-option .mat-divider.mat-divider-inset {
        position: absolute
    }

    .mat-list-base[dense] {
        padding-top: 4px;
        display: block
    }

    .mat-list-base[dense] .mat-subheader {
        height: 40px;
        line-height: 8px
    }

    .mat-list-base[dense] .mat-subheader:first-child {
        margin-top: -4px
    }

    .mat-list-base[dense] .mat-list-item,
    .mat-list-base[dense] .mat-list-option {
        display: block;
        height: 40px;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        width: 100%;
        padding: 0
    }

    .mat-list-base[dense] .mat-list-item .mat-list-item-content,
    .mat-list-base[dense] .mat-list-option .mat-list-item-content {
        display: flex;
        flex-direction: row;
        align-items: center;
        box-sizing: border-box;
        padding: 0 16px;
        position: relative;
        height: inherit
    }

    .mat-list-base[dense] .mat-list-item .mat-list-item-content-reverse,
    .mat-list-base[dense] .mat-list-option .mat-list-item-content-reverse {
        display: flex;
        align-items: center;
        padding: 0 16px;
        flex-direction: row-reverse;
        justify-content: space-around
    }

    .mat-list-base[dense] .mat-list-item .mat-list-item-ripple,
    .mat-list-base[dense] .mat-list-option .mat-list-item-ripple {
        display: block;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        pointer-events: none
    }

    .mat-list-base[dense] .mat-list-item.mat-list-item-with-avatar,
    .mat-list-base[dense] .mat-list-option.mat-list-item-with-avatar {
        height: 48px
    }

    .mat-list-base[dense] .mat-list-item.mat-2-line,
    .mat-list-base[dense] .mat-list-option.mat-2-line {
        height: 60px
    }

    .mat-list-base[dense] .mat-list-item.mat-3-line,
    .mat-list-base[dense] .mat-list-option.mat-3-line {
        height: 76px
    }

    .mat-list-base[dense] .mat-list-item.mat-multi-line,
    .mat-list-base[dense] .mat-list-option.mat-multi-line {
        height: auto
    }

    .mat-list-base[dense] .mat-list-item.mat-multi-line .mat-list-item-content,
    .mat-list-base[dense] .mat-list-option.mat-multi-line .mat-list-item-content {
        padding-top: 16px;
        padding-bottom: 16px
    }

    .mat-list-base[dense] .mat-list-item .mat-list-text,
    .mat-list-base[dense] .mat-list-option .mat-list-text {
        display: flex;
        flex-direction: column;
        flex: auto;
        box-sizing: border-box;
        overflow: hidden;
        padding: 0
    }

    .mat-list-base[dense] .mat-list-item .mat-list-text>*,
    .mat-list-base[dense] .mat-list-option .mat-list-text>* {
        margin: 0;
        padding: 0;
        font-weight: normal;
        font-size: inherit
    }

    .mat-list-base[dense] .mat-list-item .mat-list-text:empty,
    .mat-list-base[dense] .mat-list-option .mat-list-text:empty {
        display: none
    }

    .mat-list-base[dense] .mat-list-item.mat-list-item-with-avatar .mat-list-item-content .mat-list-text,
    .mat-list-base[dense] .mat-list-item.mat-list-option .mat-list-item-content .mat-list-text,
    .mat-list-base[dense] .mat-list-option.mat-list-item-with-avatar .mat-list-item-content .mat-list-text,
    .mat-list-base[dense] .mat-list-option.mat-list-option .mat-list-item-content .mat-list-text {
        padding-right: 0;
        padding-left: 16px
    }

    [dir=rtl] .mat-list-base[dense] .mat-list-item.mat-list-item-with-avatar .mat-list-item-content .mat-list-text,
    [dir=rtl] .mat-list-base[dense] .mat-list-item.mat-list-option .mat-list-item-content .mat-list-text,
    [dir=rtl] .mat-list-base[dense] .mat-list-option.mat-list-item-with-avatar .mat-list-item-content .mat-list-text,
    [dir=rtl] .mat-list-base[dense] .mat-list-option.mat-list-option .mat-list-item-content .mat-list-text {
        padding-right: 16px;
        padding-left: 0
    }

    .mat-list-base[dense] .mat-list-item.mat-list-item-with-avatar .mat-list-item-content-reverse .mat-list-text,
    .mat-list-base[dense] .mat-list-item.mat-list-option .mat-list-item-content-reverse .mat-list-text,
    .mat-list-base[dense] .mat-list-option.mat-list-item-with-avatar .mat-list-item-content-reverse .mat-list-text,
    .mat-list-base[dense] .mat-list-option.mat-list-option .mat-list-item-content-reverse .mat-list-text {
        padding-left: 0;
        padding-right: 16px
    }

    [dir=rtl] .mat-list-base[dense] .mat-list-item.mat-list-item-with-avatar .mat-list-item-content-reverse .mat-list-text,
    [dir=rtl] .mat-list-base[dense] .mat-list-item.mat-list-option .mat-list-item-content-reverse .mat-list-text,
    [dir=rtl] .mat-list-base[dense] .mat-list-option.mat-list-item-with-avatar .mat-list-item-content-reverse .mat-list-text,
    [dir=rtl] .mat-list-base[dense] .mat-list-option.mat-list-option .mat-list-item-content-reverse .mat-list-text {
        padding-right: 0;
        padding-left: 16px
    }

    .mat-list-base[dense] .mat-list-item.mat-list-item-with-avatar.mat-list-option .mat-list-item-content-reverse .mat-list-text,
    .mat-list-base[dense] .mat-list-item.mat-list-item-with-avatar.mat-list-option .mat-list-item-content .mat-list-text,
    .mat-list-base[dense] .mat-list-option.mat-list-item-with-avatar.mat-list-option .mat-list-item-content-reverse .mat-list-text,
    .mat-list-base[dense] .mat-list-option.mat-list-item-with-avatar.mat-list-option .mat-list-item-content .mat-list-text {
        padding-right: 16px;
        padding-left: 16px
    }

    .mat-list-base[dense] .mat-list-item .mat-list-avatar,
    .mat-list-base[dense] .mat-list-option .mat-list-avatar {
        flex-shrink: 0;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        object-fit: cover
    }

    .mat-list-base[dense] .mat-list-item .mat-list-avatar~.mat-divider-inset,
    .mat-list-base[dense] .mat-list-option .mat-list-avatar~.mat-divider-inset {
        margin-left: 68px;
        width: calc(100% - 68px)
    }

    [dir=rtl] .mat-list-base[dense] .mat-list-item .mat-list-avatar~.mat-divider-inset,
    [dir=rtl] .mat-list-base[dense] .mat-list-option .mat-list-avatar~.mat-divider-inset {
        margin-left: auto;
        margin-right: 68px
    }

    .mat-list-base[dense] .mat-list-item .mat-list-icon,
    .mat-list-base[dense] .mat-list-option .mat-list-icon {
        flex-shrink: 0;
        width: 20px;
        height: 20px;
        font-size: 20px;
        box-sizing: content-box;
        border-radius: 50%;
        padding: 4px
    }

    .mat-list-base[dense] .mat-list-item .mat-list-icon~.mat-divider-inset,
    .mat-list-base[dense] .mat-list-option .mat-list-icon~.mat-divider-inset {
        margin-left: 60px;
        width: calc(100% - 60px)
    }

    [dir=rtl] .mat-list-base[dense] .mat-list-item .mat-list-icon~.mat-divider-inset,
    [dir=rtl] .mat-list-base[dense] .mat-list-option .mat-list-icon~.mat-divider-inset {
        margin-left: auto;
        margin-right: 60px
    }

    .mat-list-base[dense] .mat-list-item .mat-divider,
    .mat-list-base[dense] .mat-list-option .mat-divider {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        margin: 0
    }

    [dir=rtl] .mat-list-base[dense] .mat-list-item .mat-divider,
    [dir=rtl] .mat-list-base[dense] .mat-list-option .mat-divider {
        margin-left: auto;
        margin-right: 0
    }

    .mat-list-base[dense] .mat-list-item .mat-divider.mat-divider-inset,
    .mat-list-base[dense] .mat-list-option .mat-divider.mat-divider-inset {
        position: absolute
    }

    .mat-nav-list a {
        text-decoration: none;
        color: inherit
    }

    .mat-nav-list .mat-list-item {
        cursor: pointer;
        outline: none
    }

    mat-action-list .mat-list-item {
        cursor: pointer;
        outline: inherit
    }

    .mat-list-option:not(.mat-list-item-disabled) {
        cursor: pointer;
        outline: none
    }

    .mat-list-item-disabled {
        pointer-events: none
    }

    .cdk-high-contrast-active .mat-list-item-disabled {
        opacity: .5
    }

    .cdk-high-contrast-active :host .mat-list-item-disabled {
        opacity: .5
    }

    .cdk-high-contrast-active .mat-list-option:hover,
    .cdk-high-contrast-active .mat-nav-list .mat-list-item:hover,
    .cdk-high-contrast-active mat-action-list .mat-list-item:hover {
        outline: dotted 1px;
        z-index: 1
    }

    .cdk-high-contrast-active .mat-list-single-selected-option::after {
        content: "";
        position: absolute;
        top: 50%;
        right: 16px;
        transform: translateY(-50%);
        width: 10px;
        height: 0;
        border-bottom: solid 10px;
        border-radius: 10px
    }

    .cdk-high-contrast-active [dir=rtl] .mat-list-single-selected-option::after {
        right: auto;
        left: 16px
    }

    @media(hover: none) {

        .mat-list-option:not(.mat-list-single-selected-option):not(.mat-list-item-disabled):hover,
        .mat-nav-list .mat-list-item:not(.mat-list-item-disabled):hover,
        .mat-action-list .mat-list-item:not(.mat-list-item-disabled):hover {
            background: none
        }
    }

    .mat-divider {
        display: block;
        margin: 0;
        border-top-width: 1px;
        border-top-style: solid
    }

    .mat-divider.mat-divider-vertical {
        border-top: 0;
        border-right-width: 1px;
        border-right-style: solid
    }

    .mat-divider.mat-divider-inset {
        margin-left: 80px
    }

    [dir=rtl] .mat-divider.mat-divider-inset {
        margin-left: auto;
        margin-right: 80px
    }

    toolbar {
        position: relative;
        display: flex;
        flex: 0 0 auto;
        z-index: 4;
        background: rgba(245, 245, 245, .2705882353) !important
    }

    toolbar.below {
        z-index: 2
    }

    toolbar .mat-toolbar-row,
    toolbar .mat-toolbar-single-row {
        height: 82px
    }

    @media screen and (min-width: 600px) and (max-width: 959px) {

        toolbar .mat-toolbar-row,
        toolbar .mat-toolbar-single-row {
            height: 65px
        }
    }

    @media screen and (max-width: 599px) {

        toolbar .mat-toolbar-row,
        toolbar .mat-toolbar-single-row {
            height: 56px
        }
    }

    toolbar .mat-toolbar {
        position: relative;
        background: inherit !important;
        color: inherit !important
    }

    toolbar .logo {
        display: flex;
        align-items: center;
        padding-top: 0
    }

    toolbar .logo .logo-icon {
        height: 82px;
        padding: 5px 0
    }

    @media screen and (max-width: 599px) {
        toolbar .logo .logo-icon {
            height: 47px
        }
    }

    @media screen and (min-width: 600px) and (max-width: 959px) {
        toolbar .logo .logo-icon {
            height: 55px
        }
    }

    toolbar .user-button,
    toolbar fuse-search-bar,
    toolbar .language-button,
    toolbar .chat-panel-toggle-button,
    toolbar .quick-panel-toggle-button {
        min-width: 64px;
        height: 64px
    }

    @media screen and (max-width: 599px) {

        toolbar .user-button,
        toolbar fuse-search-bar,
        toolbar .language-button,
        toolbar .chat-panel-toggle-button,
        toolbar .quick-panel-toggle-button {
            height: 56px
        }
    }

    toolbar .navbar-toggle-button {
        min-width: 56px;
        height: 56px
    }

    toolbar .toolbar-separator {
        height: 64px;
        width: 1px
    }

    @media screen and (max-width: 599px) {
        toolbar .toolbar-separator {
            height: 56px
        }
    }

    toolbar .mat-elevation-z1 {
        box-shadow: 0 2px 1px -4px #000c, 0 1px 1px #00000012, 0 1px 3px #00000003 !important
    }

    @media screen and (min-width: 960px) and (max-width: 1280px) {
        toolbar .mat-toolbar-single-row {
            height: 64px
        }

        toolbar .logo .logo-icon {
            height: 57px
        }
    }

    toolbar .need_help {
        font-size: 13px;
        font-weight: 500;
        padding: 10px;
        margin: 0 !important;
        color: #046ed0;
        border: 1px solid #f1f1f1;
        border-radius: 4px;
        box-shadow: 0 3px 20px #0000000b;
        background: #fff;
        text-decoration: none !important;
        cursor: pointer;
        line-height: 22px
    }

    @media screen and (min-width: 600px) and (max-width: 959px) {
        toolbar .need_help {
            font-size: 12px
        }
    }

    @media screen and (max-width: 599px) {
        toolbar .need_help {
            font-size: 11px
        }
    }

    toolbar .need_help .mat-icon {
        font-size: 22px;
        vertical-align: middle !important;
        min-width: auto !important;
        height: auto !important;
        min-height: auto !important;
        width: auto !important;
        margin-right: 5px
    }

    .username {
        text-align: right;
        font-weight: 500;
        font-size: 13px;
        position: relative;
        min-width: 130px
    }

    .c_name {
        width: 100%;
        display: block;
        color: #e95a27;
        padding-right: 30px
    }

    .menu_add {
        max-width: 320px !important
    }

    .address_box {
        border-bottom: 1px solid #e8e8e8 !important;
        padding-bottom: 5px;
        min-width: 320px
    }

    .profile_pc {
        text-align: left;
        padding: 5px
    }

    .profile_pc>img {
        width: 100%;
        height: 100%;
        margin-left: 10px;
        border-radius: 0
    }

    .addres {
        text-align: right;
        padding: 5px 4px 5px 13px;
        font-size: 12px;
        margin: 0 !important
    }

    .addres>p {
        margin: 0 !important;
        font-size: 13px !important;
        line-height: 22px;
        text-align: left
    }

    .add_f {
        color: #000;
        font-weight: 500;
        font-size: 13px !important;
        line-height: 16px !important
    }

    .mr-10 {
        margin-right: 10px !important
    }

    .ac_no {
        color: #006ed0;
        display: block;
        padding-right: 30px
    }

    .flname {
        padding-right: 30px
    }

    .hig_75 {
        height: 85px !important;
        padding: 0 !important;
        margin: 0 !important
    }

    .pro_ic_tp {
        width: auto !important;
        height: auto !important;
        min-width: 24 !important;
        min-height: auto !important;
        font-size: 16px;
        vertical-align: middle;
        color: #757575;
        text-align: center
    }

    .addre_flx {
        display: flex;
        justify-content: flex-start;
        flex-direction: row;
        flex-wrap: nowrap;
        align-content: center;
        align-items: flex-start
    }

    .addre_f_icon {
        font-size: 22px;
        margin-right: 4px
    }

    .email {
        margin-left: 5px !important;
        cursor: pointer !important;
        color: #23527c !important;
        font-weight: 700
    }

    .ac_no_color {
        color: #616161 !important
    }

    .cst_not {
        color: #64748b !important;
        margin-left: 10px;
        margin-right: 5px;
        cursor: pointer
    }

    .cst_not .mat-badge-content {
        background: #f43f5e !important;
        width: 12px !important;
        height: 12px !important;
        line-height: 12px !important;
        right: -1px !important;
        top: -1px !important
    }

    .user_status {
        position: absolute;
        display: block;
        height: 22px;
        z-index: 1000;
        right: 0;
        top: 12px;
        width: 22px;
        border-radius: 110px
    }

    .ur_st_ACTIVE {
        color: green !important
    }

    .ur_st_CANCELLED {
        color: #1d2959 !important
    }

    .ur_st_DELETED {
        color: red
    }

    .ur_st_PENDING {
        color: #fca016 !important
    }

    .user_status>.mat-icon {
        font-size: 24px;
        width: auto !important;
        height: auto !important;
        min-width: auto !important;
        min-height: auto !important;
        text-align: center;
        line-height: 20px !important;
        padding-left: 0;
        padding-top: 1px
    }

    .user_logout {
        position: absolute;
        display: block;
        height: 22px;
        z-index: 1000;
        right: 0;
        top: 25px;
        width: 22px;
        border-radius: 110px
    }

    .user_logout>.mat-icon {
        font-size: 24px;
        width: auto !important;
        height: auto !important;
        min-width: auto !important;
        min-height: auto !important;
        text-align: center;
        line-height: 20px !important;
        padding-left: 0;
        padding-top: 1px;
        color: #036ac6
    }

    .back_btn {
        border: 1px solid rgba(207, 200, 200, .3411764706);
        background: #ffffff;
        color: #0a0a0a !important
    }

    .back_btn>.mat-icon {
        color: #e95a27
    }

    .search_link {
        background: #fff;
        padding: 10px 25px;
        font-size: 16px;
        color: #000 !important;
        border: 1px solid #f3f3f3;
        border-radius: 4px;
        display: flex;
        flex-direction: column;
        line-height: 20px;
        text-decoration: none;
        margin: 0 5px
    }

    .search_link:hover {
        text-decoration: none !important;
        text-transform: none
    }

    .search_link>.mat-icon {
        vertical-align: middle;
        width: auto;
        height: auto;
        min-height: auto;
        min-width: auto;
        font-size: 24px;
        color: #e95a27
    }

    .back_uiia {
        flex-direction: row;
        justify-content: center;
        align-items: center
    }

    .menu_uiia_lnk {
        min-width: 65px;
        text-align: center;
        margin-right: -2px !important;
        border-right: 0 !important;
        border-radius: 0 !important;
        box-shadow: none !important
    }

    .need_help:hover {
        background: #fdfdfd
    }

    .need_help:nth-child(2) {
        border-radius: 4px 0 0 4px !important
    }

    .need_help:nth-child(7) {
        border-radius: 0 4px 4px 0 !important
    }

    .uiiamenumobile {
        display: none
    }

    @media screen and (min-width: 600px) and (max-width: 959px) {
        .need_help {
            font-size: 12px !important;
            padding: 5px 10px !important
        }

        .menu_uiia_lnk {
            min-width: auto !important
        }
    }

    @media screen and (max-width: 599px) {
        .need_help {
            display: none
        }

        .uiiamenumobile {
            display: block;
            position: fixed;
            left: 5px;
            bottom: 45px;
            margin: 0 !important;
            padding: 0 !important;
            min-width: auto
        }

        .uiiamenumobile img {
            height: 45px
        }

        .uiiamenumobilelink {
            background: none !important;
            box-shadow: none !important
        }

        .uiiamenumobilelink>.mat-menu-content {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap
        }

        .uiiamenumobilelink>.mat-menu-content>a {
            margin: 5px 10px;
            background: #ffffff;
            padding: 10px;
            box-shadow: 0 3px 20px #0000000b;
            background-color: #fff;
            border-radius: .375rem;
            font-size: 13px;
            font-weight: 500;
            color: #000000de;
            border: 1px solid #f7f7f7
        }

        .uiiamenumobilelink>.mat-menu-content>a:hover {
            background: #006ed0;
            color: #fff
        }

        .uiiamenumobilelink>.mat-menu-content>a>.mat-icon {
            height: 18px;
            width: 18px;
            vertical-align: middle;
            font-size: 18px;
            min-width: 20px;
            min-height: 20px
        }
    }

    .cdk-high-contrast-active .mat-toolbar {
        outline: solid 1px
    }

    .mat-toolbar-row,
    .mat-toolbar-single-row {
        display: flex;
        box-sizing: border-box;
        padding: 0 16px;
        width: 100%;
        flex-direction: row;
        align-items: center;
        white-space: nowrap
    }

    .mat-toolbar-multiple-rows {
        display: flex;
        box-sizing: border-box;
        flex-direction: column;
        width: 100%
    }

    @media screen and (max-width: 959px) {
        [_nghost-rgn-c231] #fuse-shortcuts.show-mobile-panel[_ngcontent-rgn-c231] {
            position: absolute;
            inset: 0;
            z-index: 99;
            padding: 0 8px
        }

        [_nghost-rgn-c231] #fuse-shortcuts.show-mobile-panel[_ngcontent-rgn-c231] .shortcuts[_ngcontent-rgn-c231] {
            display: flex !important;
            flex: 1;
            height: 100%
        }

        [_nghost-rgn-c231] #fuse-shortcuts.show-mobile-panel[_ngcontent-rgn-c231] .shortcuts[_ngcontent-rgn-c231]>div[_ngcontent-rgn-c231] {
            flex: 1 1 auto !important
        }
    }

    mat-menu {
        display: none
    }

    .mat-menu-panel {
        min-width: 112px;
        max-width: 280px;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        max-height: calc(100vh - 48px);
        border-radius: 4px;
        outline: 0;
        min-height: 64px;
        position: relative
    }

    .mat-menu-panel.ng-animating {
        pointer-events: none
    }

    .cdk-high-contrast-active .mat-menu-panel {
        outline: solid 1px
    }

    .mat-menu-content:not(:empty) {
        padding-top: 8px;
        padding-bottom: 8px
    }

    .mat-menu-item {
        -webkit-user-select: none;
        user-select: none;
        cursor: pointer;
        outline: none;
        border: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        line-height: 48px;
        height: 48px;
        padding: 0 16px;
        text-align: left;
        text-decoration: none;
        max-width: 100%;
        position: relative
    }

    .mat-menu-item::-moz-focus-inner {
        border: 0
    }

    .mat-menu-item[disabled] {
        cursor: default
    }

    [dir=rtl] .mat-menu-item {
        text-align: right
    }

    .mat-menu-item .mat-icon {
        margin-right: 16px;
        vertical-align: middle
    }

    .mat-menu-item .mat-icon svg {
        vertical-align: top
    }

    [dir=rtl] .mat-menu-item .mat-icon {
        margin-left: 16px;
        margin-right: 0
    }

    .mat-menu-item[disabled]::after {
        display: block;
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        bottom: 0;
        right: 0
    }

    .cdk-high-contrast-active .mat-menu-item {
        margin-top: 1px
    }

    .mat-menu-item-submenu-trigger {
        padding-right: 32px
    }

    [dir=rtl] .mat-menu-item-submenu-trigger {
        padding-right: 16px;
        padding-left: 32px
    }

    .mat-menu-submenu-icon {
        position: absolute;
        top: 50%;
        right: 16px;
        transform: translateY(-50%);
        width: 5px;
        height: 10px;
        fill: currentColor
    }

    [dir=rtl] .mat-menu-submenu-icon {
        right: auto;
        left: 16px;
        transform: translateY(-50%) scaleX(-1)
    }

    .cdk-high-contrast-active .mat-menu-submenu-icon {
        fill: CanvasText
    }

    button.mat-menu-item {
        width: 100%
    }

    .mat-menu-item .mat-menu-ripple {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        pointer-events: none
    }

    .mat-form-field {
        display: inline-block;
        position: relative;
        text-align: left
    }

    [dir=rtl] .mat-form-field {
        text-align: right
    }

    .mat-form-field-wrapper {
        position: relative
    }

    .mat-form-field-flex {
        display: inline-flex;
        align-items: baseline;
        box-sizing: border-box;
        width: 100%
    }

    .mat-form-field-prefix,
    .mat-form-field-suffix {
        white-space: nowrap;
        flex: none;
        position: relative
    }

    .mat-form-field-infix {
        display: block;
        position: relative;
        flex: auto;
        min-width: 0;
        width: 180px
    }

    .cdk-high-contrast-active .mat-form-field-infix {
        border-image: linear-gradient(transparent, transparent)
    }

    .mat-form-field-label-wrapper {
        position: absolute;
        left: 0;
        box-sizing: content-box;
        width: 100%;
        height: 100%;
        overflow: hidden;
        pointer-events: none
    }

    [dir=rtl] .mat-form-field-label-wrapper {
        left: auto;
        right: 0
    }

    .mat-form-field-label {
        position: absolute;
        left: 0;
        font: inherit;
        pointer-events: none;
        width: 100%;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        transform-origin: 0 0;
        transition: transform 400ms cubic-bezier(0.25, 0.8, 0.25, 1), color 400ms cubic-bezier(0.25, 0.8, 0.25, 1), width 400ms cubic-bezier(0.25, 0.8, 0.25, 1);
        display: none
    }

    [dir=rtl] .mat-form-field-label {
        transform-origin: 100% 0;
        left: auto;
        right: 0
    }

    .cdk-high-contrast-active .mat-form-field-disabled .mat-form-field-label {
        color: GrayText
    }

    .mat-form-field-empty.mat-form-field-label,
    .mat-form-field-can-float.mat-form-field-should-float .mat-form-field-label {
        display: block
    }

    .mat-form-field-autofill-control:-webkit-autofill+.mat-form-field-label-wrapper .mat-form-field-label {
        display: none
    }

    .mat-form-field-can-float .mat-form-field-autofill-control:-webkit-autofill+.mat-form-field-label-wrapper .mat-form-field-label {
        display: block;
        transition: none
    }

    .mat-input-server:focus+.mat-form-field-label-wrapper .mat-form-field-label,
    .mat-input-server[placeholder]:not(:placeholder-shown)+.mat-form-field-label-wrapper .mat-form-field-label {
        display: none
    }

    .mat-form-field-can-float .mat-input-server:focus+.mat-form-field-label-wrapper .mat-form-field-label,
    .mat-form-field-can-float .mat-input-server[placeholder]:not(:placeholder-shown)+.mat-form-field-label-wrapper .mat-form-field-label {
        display: block
    }

    .mat-form-field-label:not(.mat-form-field-empty) {
        transition: none
    }

    .mat-form-field-underline {
        position: absolute;
        width: 100%;
        pointer-events: none;
        transform: scale3d(1, 1.0001, 1)
    }

    .mat-form-field-ripple {
        position: absolute;
        left: 0;
        width: 100%;
        transform-origin: 50%;
        transform: scaleX(0.5);
        opacity: 0;
        transition: background-color 300ms cubic-bezier(0.55, 0, 0.55, 0.2)
    }

    .mat-form-field.mat-focused .mat-form-field-ripple,
    .mat-form-field.mat-form-field-invalid .mat-form-field-ripple {
        opacity: 1;
        transform: none;
        transition: transform 300ms cubic-bezier(0.25, 0.8, 0.25, 1), opacity 100ms cubic-bezier(0.25, 0.8, 0.25, 1), background-color 300ms cubic-bezier(0.25, 0.8, 0.25, 1)
    }

    .mat-form-field-subscript-wrapper {
        position: absolute;
        box-sizing: border-box;
        width: 100%;
        overflow: hidden
    }

    .mat-form-field-subscript-wrapper .mat-icon,
    .mat-form-field-label-wrapper .mat-icon {
        width: 1em;
        height: 1em;
        font-size: inherit;
        vertical-align: baseline
    }

    .mat-form-field-hint-wrapper {
        display: flex
    }

    .mat-form-field-hint-spacer {
        flex: 1 0 1em
    }

    .mat-error {
        display: block
    }

    .mat-form-field-control-wrapper {
        position: relative
    }

    .mat-form-field-hint-end {
        order: 1
    }

    .mat-form-field._mat-animation-noopable .mat-form-field-label,
    .mat-form-field._mat-animation-noopable .mat-form-field-ripple {
        transition: none
    }

    .mat-form-field-appearance-fill .mat-form-field-flex {
        border-radius: 4px 4px 0 0;
        padding: .75em .75em 0 .75em
    }

    .cdk-high-contrast-active .mat-form-field-appearance-fill .mat-form-field-flex {
        outline: solid 1px
    }

    .cdk-high-contrast-active .mat-form-field-appearance-fill.mat-form-field-disabled .mat-form-field-flex {
        outline-color: GrayText
    }

    .cdk-high-contrast-active .mat-form-field-appearance-fill.mat-focused .mat-form-field-flex {
        outline: dashed 3px
    }

    .mat-form-field-appearance-fill .mat-form-field-underline::before {
        content: "";
        display: block;
        position: absolute;
        bottom: 0;
        height: 1px;
        width: 100%
    }

    .mat-form-field-appearance-fill .mat-form-field-ripple {
        bottom: 0;
        height: 2px
    }

    .cdk-high-contrast-active .mat-form-field-appearance-fill .mat-form-field-ripple {
        height: 0
    }

    .mat-form-field-appearance-fill:not(.mat-form-field-disabled) .mat-form-field-flex:hover~.mat-form-field-underline .mat-form-field-ripple {
        opacity: 1;
        transform: none;
        transition: opacity 600ms cubic-bezier(0.25, 0.8, 0.25, 1)
    }

    .mat-form-field-appearance-fill._mat-animation-noopable:not(.mat-form-field-disabled) .mat-form-field-flex:hover~.mat-form-field-underline .mat-form-field-ripple {
        transition: none
    }

    .mat-form-field-appearance-fill .mat-form-field-subscript-wrapper {
        padding: 0 1em
    }

    .mat-input-element {
        font: inherit;
        background: rgba(0, 0, 0, 0);
        color: currentColor;
        border: none;
        outline: none;
        padding: 0;
        margin: 0;
        width: 131%;
        max-width: 131%;
        vertical-align: bottom;
        text-align: inherit;
        box-sizing: content-box
    }

    .mat-input-element:-moz-ui-invalid {
        box-shadow: none
    }

    .mat-input-element,
    .mat-input-element::-webkit-search-cancel-button,
    .mat-input-element::-webkit-search-decoration,
    .mat-input-element::-webkit-search-results-button,
    .mat-input-element::-webkit-search-results-decoration {
        -webkit-appearance: none
    }

    .mat-input-element::-webkit-contacts-auto-fill-button,
    .mat-input-element::-webkit-caps-lock-indicator,
    .mat-input-element:not([type=password])::-webkit-credentials-auto-fill-button {
        visibility: hidden
    }

    .mat-input-element[type=date],
    .mat-input-element[type=datetime],
    .mat-input-element[type=datetime-local],
    .mat-input-element[type=month],
    .mat-input-element[type=week],
    .mat-input-element[type=time] {
        line-height: 1
    }

    .mat-input-element[type=date]::after,
    .mat-input-element[type=datetime]::after,
    .mat-input-element[type=datetime-local]::after,
    .mat-input-element[type=month]::after,
    .mat-input-element[type=week]::after,
    .mat-input-element[type=time]::after {
        content: " ";
        white-space: pre;
        width: 1px
    }

    .mat-input-element::-webkit-inner-spin-button,
    .mat-input-element::-webkit-calendar-picker-indicator,
    .mat-input-element::-webkit-clear-button {
        font-size: .75em
    }

    .mat-input-element::placeholder {
        -webkit-user-select: none;
        user-select: none;
        transition: color 400ms 133.3333333333ms cubic-bezier(0.25, 0.8, 0.25, 1)
    }

    .mat-input-element::-moz-placeholder {
        -webkit-user-select: none;
        user-select: none;
        transition: color 400ms 133.3333333333ms cubic-bezier(0.25, 0.8, 0.25, 1)
    }

    .mat-input-element::-webkit-input-placeholder {
        -webkit-user-select: none;
        user-select: none;
        transition: color 400ms 133.3333333333ms cubic-bezier(0.25, 0.8, 0.25, 1)
    }

    .mat-input-element:-ms-input-placeholder {
        -webkit-user-select: none;
        user-select: none;
        transition: color 400ms 133.3333333333ms cubic-bezier(0.25, 0.8, 0.25, 1)
    }

    .mat-form-field-hide-placeholder .mat-input-element::placeholder {
        color: rgba(0, 0, 0, 0) !important;
        -webkit-text-fill-color: rgba(0, 0, 0, 0);
        transition: none
    }

    .cdk-high-contrast-active .mat-form-field-hide-placeholder .mat-input-element::placeholder {
        opacity: 0
    }

    .mat-form-field-hide-placeholder .mat-input-element::-moz-placeholder {
        color: rgba(0, 0, 0, 0) !important;
        -webkit-text-fill-color: rgba(0, 0, 0, 0);
        transition: none
    }

    .cdk-high-contrast-active .mat-form-field-hide-placeholder .mat-input-element::-moz-placeholder {
        opacity: 0
    }

    .mat-form-field-hide-placeholder .mat-input-element::-webkit-input-placeholder {
        color: rgba(0, 0, 0, 0) !important;
        -webkit-text-fill-color: rgba(0, 0, 0, 0);
        transition: none
    }

    .cdk-high-contrast-active .mat-form-field-hide-placeholder .mat-input-element::-webkit-input-placeholder {
        opacity: 0
    }

    .mat-form-field-hide-placeholder .mat-input-element:-ms-input-placeholder {
        color: rgba(0, 0, 0, 0) !important;
        -webkit-text-fill-color: rgba(0, 0, 0, 0);
        transition: none
    }

    .cdk-high-contrast-active .mat-form-field-hide-placeholder .mat-input-element:-ms-input-placeholder {
        opacity: 0
    }

    ._mat-animation-noopable .mat-input-element::placeholder {
        transition: none
    }

    ._mat-animation-noopable .mat-input-element::-moz-placeholder {
        transition: none
    }

    ._mat-animation-noopable .mat-input-element::-webkit-input-placeholder {
        transition: none
    }

    ._mat-animation-noopable .mat-input-element:-ms-input-placeholder {
        transition: none
    }

    textarea.mat-input-element {
        resize: vertical;
        overflow: auto
    }

    textarea.mat-input-element.cdk-textarea-autosize {
        resize: none
    }

    textarea.mat-input-element {
        padding: 2px 0;
        margin: -2px 0
    }

    select.mat-input-element {
        -moz-appearance: none;
        -webkit-appearance: none;
        position: relative;
        background-color: rgba(0, 0, 0, 0);
        display: inline-flex;
        box-sizing: border-box;
        padding-top: 1em;
        top: -1em;
        margin-bottom: -1em
    }

    select.mat-input-element::-moz-focus-inner {
        border: 0
    }

    select.mat-input-element:not(:disabled) {
        cursor: pointer
    }

    .mat-form-field-type-mat-native-select .mat-form-field-infix::after {
        content: "";
        width: 0;
        height: 0;
        border-left: 5px solid rgba(0, 0, 0, 0);
        border-right: 5px solid rgba(0, 0, 0, 0);
        border-top: 5px solid;
        position: absolute;
        top: 50%;
        right: 0;
        margin-top: -2.5px;
        pointer-events: none
    }

    [dir=rtl] .mat-form-field-type-mat-native-select .mat-form-field-infix::after {
        right: auto;
        left: 0
    }

    .mat-form-field-type-mat-native-select .mat-input-element {
        padding-right: 15px
    }

    [dir=rtl] .mat-form-field-type-mat-native-select .mat-input-element {
        padding-right: 0;
        padding-left: 15px
    }

    .mat-form-field-type-mat-native-select .mat-form-field-label-wrapper {
        max-width: calc(100% - 10px)
    }

    .mat-form-field-type-mat-native-select.mat-form-field-appearance-outline .mat-form-field-infix::after {
        margin-top: -5px
    }

    .mat-form-field-type-mat-native-select.mat-form-field-appearance-fill .mat-form-field-infix::after {
        margin-top: -10px
    }

    .mat-form-field-appearance-legacy .mat-form-field-label {
        transform: perspective(100px)
    }

    .mat-form-field-appearance-legacy .mat-form-field-prefix .mat-icon,
    .mat-form-field-appearance-legacy .mat-form-field-suffix .mat-icon {
        width: 1em
    }

    .mat-form-field-appearance-legacy .mat-form-field-prefix .mat-icon-button,
    .mat-form-field-appearance-legacy .mat-form-field-suffix .mat-icon-button {
        font: inherit;
        vertical-align: baseline
    }

    .mat-form-field-appearance-legacy .mat-form-field-prefix .mat-icon-button .mat-icon,
    .mat-form-field-appearance-legacy .mat-form-field-suffix .mat-icon-button .mat-icon {
        font-size: inherit
    }

    .mat-form-field-appearance-legacy .mat-form-field-underline {
        height: 1px
    }

    .cdk-high-contrast-active .mat-form-field-appearance-legacy .mat-form-field-underline {
        height: 0;
        border-top: solid 1px
    }

    .mat-form-field-appearance-legacy .mat-form-field-ripple {
        top: 0;
        height: 2px;
        overflow: hidden
    }

    .cdk-high-contrast-active .mat-form-field-appearance-legacy .mat-form-field-ripple {
        height: 0;
        border-top: solid 2px
    }

    .mat-form-field-appearance-legacy.mat-form-field-disabled .mat-form-field-underline {
        background-position: 0;
        background-color: rgba(0, 0, 0, 0)
    }

    .cdk-high-contrast-active .mat-form-field-appearance-legacy.mat-form-field-disabled .mat-form-field-underline {
        border-top-style: dotted;
        border-top-width: 2px;
        border-top-color: GrayText
    }

    .mat-form-field-appearance-legacy.mat-form-field-invalid:not(.mat-focused) .mat-form-field-ripple {
        height: 1px
    }

    .mat-form-field-appearance-outline .mat-form-field-wrapper {
        margin: .25em 0
    }

    .mat-form-field-appearance-outline .mat-form-field-flex {
        padding: 0 .75em 0 .75em;
        margin-top: -0.25em;
        position: relative
    }

    .mat-form-field-appearance-outline .mat-form-field-prefix,
    .mat-form-field-appearance-outline .mat-form-field-suffix {
        top: .25em
    }

    .mat-form-field-appearance-outline .mat-form-field-outline {
        display: flex;
        position: absolute;
        top: .25em;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none
    }

    .mat-form-field-appearance-outline .mat-form-field-outline-start,
    .mat-form-field-appearance-outline .mat-form-field-outline-end {
        border: 1px solid currentColor;
        min-width: 5px
    }

    .mat-form-field-appearance-outline .mat-form-field-outline-start {
        border-radius: 5px 0 0 5px;
        border-right-style: none
    }

    [dir=rtl] .mat-form-field-appearance-outline .mat-form-field-outline-start {
        border-right-style: solid;
        border-left-style: none;
        border-radius: 0 5px 5px 0
    }

    .mat-form-field-appearance-outline .mat-form-field-outline-end {
        border-radius: 0 5px 5px 0;
        border-left-style: none;
        flex-grow: 1
    }

    [dir=rtl] .mat-form-field-appearance-outline .mat-form-field-outline-end {
        border-left-style: solid;
        border-right-style: none;
        border-radius: 5px 0 0 5px
    }

    .mat-form-field-appearance-outline .mat-form-field-outline-gap {
        border-radius: .000001px;
        border: 1px solid currentColor;
        border-left-style: none;
        border-right-style: none
    }

    .mat-form-field-appearance-outline.mat-form-field-can-float.mat-form-field-should-float .mat-form-field-outline-gap {
        border-top-color: rgba(0, 0, 0, 0)
    }

    .mat-form-field-appearance-outline .mat-form-field-outline-thick {
        opacity: 0
    }

    .mat-form-field-appearance-outline .mat-form-field-outline-thick .mat-form-field-outline-start,
    .mat-form-field-appearance-outline .mat-form-field-outline-thick .mat-form-field-outline-end,
    .mat-form-field-appearance-outline .mat-form-field-outline-thick .mat-form-field-outline-gap {
        border-width: 2px
    }

    .mat-form-field-appearance-outline.mat-focused .mat-form-field-outline,
    .mat-form-field-appearance-outline.mat-form-field-invalid .mat-form-field-outline {
        opacity: 0;
        transition: opacity 100ms cubic-bezier(0.25, 0.8, 0.25, 1)
    }

    .mat-form-field-appearance-outline.mat-focused .mat-form-field-outline-thick,
    .mat-form-field-appearance-outline.mat-form-field-invalid .mat-form-field-outline-thick {
        opacity: 1
    }

    .cdk-high-contrast-active .mat-form-field-appearance-outline.mat-focused .mat-form-field-outline-thick {
        border: 3px dashed
    }

    .mat-form-field-appearance-outline:not(.mat-form-field-disabled) .mat-form-field-flex:hover .mat-form-field-outline {
        opacity: 0;
        transition: opacity 600ms cubic-bezier(0.25, 0.8, 0.25, 1)
    }

    .mat-form-field-appearance-outline:not(.mat-form-field-disabled) .mat-form-field-flex:hover .mat-form-field-outline-thick {
        opacity: 1
    }

    .mat-form-field-appearance-outline .mat-form-field-subscript-wrapper {
        padding: 0 1em
    }

    .cdk-high-contrast-active .mat-form-field-appearance-outline.mat-form-field-disabled .mat-form-field-outline {
        color: GrayText
    }

    .mat-form-field-appearance-outline._mat-animation-noopable:not(.mat-form-field-disabled) .mat-form-field-flex:hover~.mat-form-field-outline,
    .mat-form-field-appearance-outline._mat-animation-noopable .mat-form-field-outline,
    .mat-form-field-appearance-outline._mat-animation-noopable .mat-form-field-outline-start,
    .mat-form-field-appearance-outline._mat-animation-noopable .mat-form-field-outline-end,
    .mat-form-field-appearance-outline._mat-animation-noopable .mat-form-field-outline-gap {
        transition: none
    }

    .mat-form-field-appearance-standard .mat-form-field-flex {
        padding-top: .75em
    }

    .mat-form-field-appearance-standard .mat-form-field-underline {
        height: 1px
    }

    .cdk-high-contrast-active .mat-form-field-appearance-standard .mat-form-field-underline {
        height: 0;
        border-top: solid 1px
    }

    .mat-form-field-appearance-standard .mat-form-field-ripple {
        bottom: 0;
        height: 2px
    }

    .cdk-high-contrast-active .mat-form-field-appearance-standard .mat-form-field-ripple {
        height: 0;
        border-top: solid 2px
    }

    .mat-form-field-appearance-standard.mat-form-field-disabled .mat-form-field-underline {
        background-position: 0;
        background-color: rgba(0, 0, 0, 0)
    }

    .cdk-high-contrast-active .mat-form-field-appearance-standard.mat-form-field-disabled .mat-form-field-underline {
        border-top-style: dotted;
        border-top-width: 2px
    }

    .mat-form-field-appearance-standard:not(.mat-form-field-disabled) .mat-form-field-flex:hover~.mat-form-field-underline .mat-form-field-ripple {
        opacity: 1;
        transform: none;
        transition: opacity 600ms cubic-bezier(0.25, 0.8, 0.25, 1)
    }

    .mat-form-field-appearance-standard._mat-animation-noopable:not(.mat-form-field-disabled) .mat-form-field-flex:hover~.mat-form-field-underline .mat-form-field-ripple {
        transition: none
    }

    #iananavMenu {
        background-color: #f1f5f8 !important
    }

    #iananavMenu .nav_bar {
        background: #e2e8f0;
        height: 75px
    }

    #iananavMenu .navb {
        position: relative
    }

    #iananavMenu div.nav_bar .navb {
        background-color: #fff;
        padding: 8px 0;
        min-height: 60px;
        box-shadow: 0 3px 20px #0d87c92b
    }

    #iananavMenu .menu_bg {
        background-image: linear-gradient(#fff, #fff);
        width: 100%;
        position: absolute;
        height: 52px;
        bottom: 0;
        left: 0
    }

    #iananavMenu ul.main-nav {
        list-style-type: none;
        padding: 0;
        font-size: 0px;
        margin: 2px auto 0
    }

    #iananavMenu ul.main-nav>.nav-custom-item>li {
        display: inline-block;
        padding: 0;
        position: relative
    }

    #iananavMenu .home_icon {
        margin: 0 5px !important;
        padding: 12px !important;
        border-radius: 4px !important
    }

    #iananavMenu .home_icon>span.desk_icon {
        font-size: 22px !important;
        vertical-align: middle !important;
        width: auto !important;
        height: auto !important;
        min-height: auto !important;
        min-width: auto !important
    }

    #iananavMenu .home_icon>span.title {
        vertical-align: middle;
        font-size: 13px;
        margin-left: 5px
    }

    #iananavMenu ul.main-nav>.nav-custom-item>li>a {
        display: block;
        padding: 13px 15px;
        position: relative;
        color: #1e293b;
        font-size: 13px;
        font-weight: 500;
        box-sizing: border-box;
        text-decoration: none;
        border-radius: 0;
        box-shadow: 0 0 #0000004a;
        border: none !important;
        cursor: pointer;
        line-height: 18px !important
    }

    #iananavMenu ul.main-nav>.nav-custom-item>li>a:hover {
        background-color: #f2f4f6 !important;
        border: none !important;
        color: #006ed0 !important;
        font-weight: 500
    }

    #iananavMenu ul.main-nav>.nav-custom-item>li.active>a.mega-menu,
    #iananavMenu ul.main-nav>.nav-custom-item>li.active>a.menu-single {
        background-color: #f2f4f6 !important;
        border: none !important;
        color: #000 !important;
        font-weight: 500;
        z-index: 11;
        border-radius: 4px
    }

    #iananavMenu ul.main-nav>.nav-custom-item>li.active>a.mega-menu span:after {
        border-top: 5px solid #666
    }

    #iananavMenu ul.main-nav>.nav-custom-item>li>div.sub-menu-block>ul.sub-menu-lists>.nav-custom-item>li.active>a.mega-menu,
    #iananavMenu ul.main-nav>.nav-custom-item>li>div.sub-menu-block>ul.sub-menu-lists>.nav-custom-item>li.active>a.menu-single {
        background-color: #e7eaed !important;
        border: none !important;
        color: #e95a26 !important;
        font-weight: 500;
        height: 48px;
        z-index: 11;
        background-size: 100% 49px !important;
        background-size: cover
    }

    #iananavMenu ul.main-nav>.nav-custom-item>li>div.sub-menu-block>ul.sub-menu-lists>.nav-custom-item>li.active>a.home_icon {
        background-size: cover !important
    }

    #iananavMenu li.activeLink>a {
        background-color: #f2f4f6 !important;
        color: #006ed0 !important
    }

    #iananavMenu #menu-tg>li.activeLink div.tg_sub_me {
        background-color: #e5f3fe !important;
        visibility: visible;
        display: block
    }

    #iananavMenu ul.main-nav>.nav-custom-item>li:hover>a {
        background-color: #f2f4f6 !important;
        border: none !important;
        color: #006ed0 !important;
        font-weight: 500;
        border-radius: 4px
    }

    #iananavMenu ul.main-nav>.nav-custom-item>li:hover {
        text-decoration: none
    }

    #iananavMenu ul.main-nav>.nav-custom-item>li ul.sub-menu-lists {
        margin: 0;
        padding: 0;
        list-style-type: none;
        display: block
    }

    #iananavMenu ul.main-nav>.nav-custom-item>li ul.sub-menu-lists>.nav-custom-item>li {
        padding: 0;
        display: inline-block;
        width: 100%;
        position: relative
    }

    #iananavMenu ul.main-nav>.nav-custom-item>li ul.sub-menu-lists>.nav-custom-item>li>a {
        font-size: 13px;
        font-weight: 500;
        background: #ffffff;
        padding: 10px 12px;
        border-radius: 0;
        cursor: pointer;
        color: #1e293b
    }

    #iananavMenu ul.main-nav>.nav-custom-item>li ul.sub-menu-lists>.nav-custom-item>li>a:hover {
        background-color: #f2f4f6 !important;
        text-decoration: none;
        color: #006ed0 !important
    }

    #iananavMenu .sub-menu-head {
        margin: 10px 0
    }

    @media only screen and (max-width: 768px) {
        #iananavMenu nav {
            background-color: transparent
        }

        #iananavMenu ul.main-nav {
            z-index: 2;
            padding: 50px 0;
            position: fixed;
            right: 0;
            top: 0;
            width: 0px;
            background-color: #000;
            height: 100%;
            overflow: auto;
            transition-property: background, width;
            transition-duration: .6s
        }

        #iananavMenu ul.main-nav>* {
            transition-property: opacity;
            transition-duration: .4s;
            opacity: 0
        }

        #iananavMenu ul.main-nav>.nav-custom-item>li>a:after {
            display: none
        }

        #iananavMenu ul.main-nav>.nav-custom-item>li:first-child {
            border-radius: 0
        }

        #iananavMenu ul.main-nav>.nav-custom-item>li {
            display: block;
            border-bottom: 1px solid #444
        }

        #iananavMenu ul.main-nav>.nav-custom-item>li>a {
            font-weight: 600
        }

        #iananavMenu ul.main-nav>.nav-custom-item>li ul.sub-menu-lists>.nav-custom-item>li a {
            color: #eee;
            font-size: 14px
        }

        #iananavMenu .sub-menu-head {
            font-size: 16px
        }

        #iananavMenu ul.main-nav>.nav-custom-item>li:hover {
            background-color: transparent
        }

        #iananavMenu ul.main-nav>.nav-custom-item>li:hover>a {
            color: #fff;
            text-decoration: none;
            font-weight: 600
        }

        #iananavMenu .sub-menu-block {
            padding: 0 30px
        }

        #iananavMenu .banners-area {
            padding-bottom: 0
        }

        #iananavMenu .banners-area div {
            margin-bottom: 15px
        }

        #iananavMenu .banners-area {
            border-top: 1px solid #444
        }
    }

    @media only screen and (min-width: 769px) {
        #iananavMenu ul.main-nav {
            display: block;
            position: relative
        }

        #iananavMenu .sub-menu-block {
            padding: 15px
        }

        #iananavMenu ul.main-nav>.nav-custom-item>li>div.sub-menu-block {
            visibility: hidden;
            background-color: #f9f9f9;
            position: absolute;
            margin-top: 0;
            width: 100%;
            color: #333;
            left: 0;
            box-sizing: border-box;
            z-index: 3;
            font-size: 16px;
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            opacity: 0;
            transition: all .4s ease 0s;
            transform: rotateX(90deg);
            transform-origin: top center
        }

        #iananavMenu ul.main-nav>.nav-custom-item>li:hover>div.sub-menu-block {
            background-color: #fff;
            visibility: visible;
            opacity: 1;
            transform: rotateX(0);
            width: auto;
            border: 0px solid #bcd7ed;
            box-shadow: 0 2px 4px -1px #0003, 0 4px 5px #00000024, 0 1px 10px #0000001f;
            border-radius: 4px;
            min-width: 100%
        }

        #iananavMenu ul.main-nav>.nav-custom-item>li>div.sub-menu-block>* {
            transition-property: opacity;
            transition-duration: .4s;
            opacity: 0
        }

        #iananavMenu ul.main-nav>.nav-custom-item>li:hover>div.sub-menu-block>* {
            opacity: 1
        }

        #iananavMenu ul.main-nav>.nav-custom-item>li>a:after {
            content: "";
            width: 1px;
            height: 62px;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 2
        }

        #iananavMenu ul.main-nav>.nav-custom-item>li>a.mega-menu>span {
            display: block
        }

        #iananavMenu ul.main-nav>.nav-custom-item>li>a.mega-menu>span:after {
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 5px solid #64748B;
            content: "";
            background-color: transparent;
            display: inline-block;
            margin-left: 10px;
            vertical-align: middle
        }

        #iananavMenu ul.main-nav>.nav-custom-item>li:hover>a.mega-menu span:after {
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-top: 0px solid transparent;
            border-bottom: 5px solid #666
        }
    }

    #iananavMenu .menu_box {
        box-shadow: 0 3px 20px #0000000b;
        background-color: #fff;
        border-radius: .375rem;
        padding: 7px 8px 2px
    }

    #iananavMenu .me_box {
        box-shadow: 0 3px 20px #0000000b !important;
        --bg-opacity: 1;
        background-color: #fff !important;
        background-color: rgba(255, 255, 255, var(--bg-opacity));
        border-radius: .375rem !important;
        margin-bottom: 5px !important;
        border: 0 !important
    }

    #iananavMenu #menuToggle {
        display: block;
        position: absolute;
        top: 17px;
        right: 17px;
        z-index: 1;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
        z-index: 10
    }

    #iananavMenu #menuToggle input {
        display: block;
        width: 50px;
        height: 40px;
        position: absolute;
        top: -2px;
        left: 0;
        cursor: pointer;
        opacity: 0;
        z-index: 2;
        -webkit-touch-callout: none
    }

    #iananavMenu #menuToggle span {
        display: block;
        width: 25px;
        height: 4px;
        margin-bottom: 4px;
        position: relative;
        background: #006ed0;
        border-radius: 3px;
        z-index: 1;
        transform-origin: 4px 0px;
        transition: transform .5s cubic-bezier(.77, .2, .05, 1), background .5s cubic-bezier(.77, .2, .05, 1), opacity .55s ease
    }

    #iananavMenu #menuToggle span:first-child {
        transform-origin: 0% 0%
    }

    #iananavMenu #menuToggle span:nth-last-child(2) {
        transform-origin: 0% 100%
    }

    #iananavMenu #menuToggle input:checked~span {
        opacity: 1;
        transform: rotate(43deg) translate(-2px, 2px);
        background: #006ed0
    }

    #iananavMenu #menuToggle input:checked~span:nth-last-child(3) {
        opacity: 0;
        transform: rotate(0) scale(.2)
    }

    #iananavMenu #menuToggle input:checked~span:nth-last-child(2) {
        transform: rotate(-42deg) translateY(-4px)
    }

    #iananavMenu #menuToggle input:checked~ul {
        transform: translate(-86%)
    }

    #iananavMenu #menu-tg {
        position: absolute;
        width: 300px;
        margin: -38px 0 0;
        padding: 42px 15px 15px;
        background: #ededed;
        list-style-type: none;
        -webkit-font-smoothing: antialiased;
        transform-origin: 0% 0%;
        transform: translate(20%);
        transition: transform .5s cubic-bezier(.77, .2, .05, 1);
        border: 1px solid #e1e1e1 !important
    }

    #iananavMenu #menu-tg li {
        padding: 2px 0
    }

    #iananavMenu #menu-tg li a {
        text-decoration: none;
        transition: color .3s ease;
        font-size: 14px;
        width: 100%;
        display: block;
        border-radius: 8px;
        padding: 8px 10px;
        color: #006ed0;
        font-weight: 500
    }

    #iananavMenu .tg_menu_ar {
        position: relative
    }

    #iananavMenu .tg_menu_ar:after {
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 5px solid #006ed0;
        content: "";
        background-color: transparent;
        display: inline-block;
        margin-left: 10px;
        vertical-align: middle;
        position: absolute;
        right: 15px;
        top: 12px
    }

    #iananavMenu .tg_menu_ar:hover:after {
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-top: 0px solid transparent;
        border-bottom: 5px solid #ffffff
    }

    #iananavMenu #menu-tg li a:hover {
        background: #006ed0;
        color: #fff
    }

    #iananavMenu #menu-tg li a:hover .tg_sub_me {
        display: block
    }

    #iananavMenu .tg_sub_me {
        display: none
    }

    #iananavMenu #menu-tg li a:hover>.tg_sub_me {
        display: block
    }

    #iananavMenu #menu-tg>li ul.tg-sub-menu-lists {
        margin: 0;
        padding: 0;
        list-style-type: none;
        display: block
    }

    #iananavMenu #menu-tg>li>div.tg_sub_me {
        visibility: hidden
    }

    #iananavMenu #menu-tg>li:hover>div.tg_sub_me {
        background-color: #e5f3fe !important;
        visibility: visible;
        display: block
    }

    #iananavMenu div.tg_sub_me {
        box-shadow: 0 3px 20px #0000000b !important;
        background-color: #e5f3fe !important;
        border-radius: 0 0 .475rem .475rem !important;
        position: relative !important;
        margin-bottom: 5px !important;
        border: 0 !important;
        padding: 8px
    }

    #iananavMenu div.tg_sub_me>ul.tg-sub-menu-lists>li>a {
        background: #ffffff !important;
        color: #094478;
        font-weight: 500
    }

    #iananavMenu div.tg_sub_me>ul.tg-sub-menu-lists>li>a:hover {
        background: #006ed0 !important;
        color: #fff !important
    }

    #iananavMenu .link {
        cursor: pointer !important
    }

    #iananavMenu ul>.nav-custom-item>li>.sub-menu-block {
        padding: 0
    }

    #iananavMenu ul.main-nav>.nav-custom-item>li ul.sub-menu-lists>.nav-custom-item>li>a {
        margin-bottom: 0;
        display: block;
        padding: 15px;
        white-space: nowrap
    }

    #iananavMenu ul>.nav-custom-item>li>.sub-menu-block>ul>.nav-custom-item>li>a.sub-mu-sub {
        display: block;
        margin-bottom: 0
    }

    #iananavMenu ul>.nav-custom-item>li>.sub-menu-block>ul>.nav-custom-item>li>a.sub-mu-sub span {
        display: block
    }

    #iananavMenu ul>.nav-custom-item>li>.sub-menu-block>ul>.nav-custom-item>li>a.sub-mu-sub span:after {
        width: 0;
        height: 0;
        content: "";
        background-color: transparent;
        display: inline-block;
        margin-left: 10px;
        vertical-align: middle;
        position: absolute;
        right: 11px;
        top: 40%;
        border-top: 5px solid transparent;
        border-right: none;
        border-left: 5px solid #666;
        border-bottom: 5px solid transparent
    }

    #iananavMenu ul.main-nav>.nav-custom-item>li ul.sub-menu-lists>.nav-custom-item>li:first-child>a {
        border-radius: 4px !important
    }

    #iananavMenu ul.main-nav>.nav-custom-item>li ul.sub-menu-lists>.nav-custom-item>li:last-child>a {
        border-radius: 4px !important
    }

    #iananavMenu ul>.nav-custom-item>li>.sub-menu-block>ul>.nav-custom-item>li:hover>a.sub-mu-sub span:after {
        border-left: 5px solid transparent;
        border-top: 5px solid transparent;
        border-right: none;
        border-left: 5px solid #000;
        border-bottom: 5px solid transparent
    }

    #iananavMenu ul>.nav-custom-item>li>.sub-menu-block>ul>.nav-custom-item>li:hover>a {
        background-color: #f2f4f6 !important;
        color: #1e293b !important
    }

    #iananavMenu ul>.nav-custom-item>li>.sub-menu-block>ul>.nav-custom-item>li>.sub-menu-block-sub {
        visibility: hidden;
        background-color: #f9f9f9;
        position: absolute;
        margin-top: 0;
        width: 100%;
        color: #333;
        box-sizing: border-box;
        z-index: 3;
        font-size: 16px;
        opacity: 0;
        top: 0;
        left: 100%;
        padding: 0;
        transition: all .4s ease 0s;
        transform: rotateX(90deg);
        transform-origin: top center;
        border-radius: 4px
    }

    #iananavMenu ul>.nav-custom-item>li>.sub-menu-block>ul>.nav-custom-item>li:hover>div.sub-menu-block-sub {
        background-color: #f9f9f9;
        visibility: visible;
        opacity: 1;
        transform: rotateX(0);
        width: 100%;
        border-top: 0px solid #bcd7ed;
        box-shadow: 3px 0 10px #0000001a, 0 10px 10px -5px #0000000a
    }

    #iananavMenu body {
        --is-dark: false;
        --fuse-bg-app-bar: #FFFFFF;
        --fuse-bg-app-bar-rgb: 255, 255, 255;
        --fuse-bg-card: #FFFFFF;
        --fuse-bg-card-rgb: 255, 255, 255;
        --fuse-bg-default: #f1f5f9;
        --fuse-bg-default-rgb: 241, 245, 249;
        --fuse-bg-dialog: #FFFFFF;
        --fuse-bg-dialog-rgb: 255, 255, 255;
        --fuse-bg-hover: rgba(148, 163, 184, .12);
        --fuse-bg-hover-rgb: 148, 163, 184;
        --fuse-bg-status-bar: #cbd5e1;
        --fuse-bg-status-bar-rgb: 203, 213, 225;
        --fuse-text-default: #1e293b;
        --fuse-text-default-rgb: 30, 41, 59;
        --fuse-text-secondary: #64748b;
        --fuse-text-secondary-rgb: 100, 116, 139;
        --fuse-text-hint: #94a3b8;
        --fuse-text-hint-rgb: 148, 163, 184;
        --fuse-text-disabled: #94a3b8;
        --fuse-text-disabled-rgb: 148, 163, 184;
        --fuse-border: #e2e8f0;
        --fuse-border-rgb: 226, 232, 240;
        --fuse-divider: #e2e8f0;
        --fuse-divider-rgb: 226, 232, 240;
        --fuse-icon: #64748b;
        --fuse-icon-rgb: 100, 116, 139;
        --fuse-mat-icon: #64748b;
        --fuse-mat-icon-rgb: 100, 116, 139
    }

    #iananavMenu .bg1 {
        background-color: rgba(var(--fuse-bg-card-rgb), var(--tw-bg-opacity)) !important
    }

    #iananavMenu .main_menu_icon {
        font-size: 21px;
        vertical-align: middle;
        min-width: auto !important;
        width: auto !important;
        min-height: auto !important;
        height: auto !important;
        margin-right: 5px;
        color: #64748b
    }

    @media (min-width: 1280px) and (max-width: 1537px) {
        #iananavMenu .mat-tab-label {
            padding: 0 19px !important;
            font-size: 12px
        }

        #iananavMenu .mat-tab-label-active {
            padding: 0 19px !important
        }

        #iananavMenu .mat-badge-medium.mat-badge-after .mat-badge-content {
            right: -17px
        }

        #iananavMenu .mat-badge-medium.mat-badge-above .mat-badge-content {
            top: -9px
        }

        #iananavMenu ul.main-nav>.nav-custom-item:last-child>li:last-child>div.sub-menu-block {
            left: auto;
            right: 0 !important;
            width: -moz-fit-content;
            width: fit-content
        }

        #iananavMenu ul>.nav-custom-item:last-child>li:last-child>.sub-menu-block>ul>.nav-custom-item>li>.sub-menu-block-sub {
            left: -100%
        }
    }

    @media (min-width: 1280px) and (max-width: 1542px) {
        #iananavMenu ul.main-nav>.nav-custom-item:last-child>li:last-child>div.sub-menu-block {
            left: auto;
            right: 0 !important;
            width: -moz-fit-content;
            width: fit-content
        }

        #iananavMenu ul>.nav-custom-item:last-child>li:last-child>.sub-menu-block>ul>.nav-custom-item>li>.sub-menu-block-sub {
            left: -100%
        }
    }

    @media screen and (min-width: 1280px) and (max-width: 1412px) {
        #iananavMenu ul.main-nav>.nav-custom-item>li>a {
            padding: 15px 13px
        }
    }

    fuse-sidebar.navbar-fuse-sidebar {
        overflow: hidden
    }

    fuse-sidebar.navbar-fuse-sidebar.folded:not(.unfolded) navbar navbar-vertical-style-1 .navbar-top {
        padding: 12px 0;
        justify-content: center
    }

    fuse-sidebar.navbar-fuse-sidebar.folded:not(.unfolded) navbar navbar-vertical-style-1 .navbar-top .buttons {
        display: none
    }

    fuse-sidebar.navbar-fuse-sidebar.folded:not(.unfolded) navbar navbar-vertical-style-1 .navbar-top .logo .logo-icon {
        width: 32px;
        height: 32px
    }

    fuse-sidebar.navbar-fuse-sidebar.folded:not(.unfolded) navbar navbar-vertical-style-1 .navbar-top .logo .logo-text {
        display: none
    }

    fuse-sidebar.navbar-fuse-sidebar.folded:not(.unfolded) navbar navbar-vertical-style-1 .navbar-scroll-container .user {
        padding: 12px 0;
        height: 64px;
        min-height: 64px;
        max-height: 64px
    }

    fuse-sidebar.navbar-fuse-sidebar.folded:not(.unfolded) navbar navbar-vertical-style-1 .navbar-scroll-container .user .avatar-container {
        position: relative;
        top: auto;
        padding: 0;
        transform: translate(0);
        left: auto
    }

    fuse-sidebar.navbar-fuse-sidebar.folded:not(.unfolded) navbar navbar-vertical-style-1 .navbar-scroll-container .user .avatar-container .avatar {
        width: 40px;
        height: 40px
    }

    fuse-sidebar.navbar-fuse-sidebar.folded:not(.unfolded) navbar navbar-vertical-style-1 .navbar-scroll-container .user .username,
    fuse-sidebar.navbar-fuse-sidebar.folded:not(.unfolded) navbar navbar-vertical-style-1 .navbar-scroll-container .user .email {
        display: none
    }

    fuse-sidebar.navbar-fuse-sidebar.folded:not(.unfolded) navbar navbar-vertical-style-1 .navbar-scroll-container .navbar-content {
        padding-top: 0
    }

    fuse-sidebar.navbar-fuse-sidebar.folded:not(.unfolded) navbar navbar-vertical-style-1 .navbar-scroll-container .navbar-content .material2 .nav-item .nav-link {
        border-radius: 20px;
        margin: 0 12px;
        padding: 0 12px
    }

    navbar.vertical-style-1 {
        display: flex;
        flex-direction: column;
        flex: 1 1 auto;
        width: 100%;
        height: 100%
    }

    navbar.vertical-style-1.right-navbar .toggle-sidebar-opened mat-icon {
        transform: rotate(180deg)
    }

    navbar navbar-vertical-style-1 {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%
    }

    navbar navbar-vertical-style-1 .navbar-top {
        display: flex;
        flex-direction: row;
        flex: 1 0 auto;
        align-items: center;
        justify-content: space-between;
        min-height: 64px;
        max-height: 64px;
        height: 64px;
        padding: 12px 12px 12px 20px
    }

    @media screen and (max-width: 599px) {
        navbar navbar-vertical-style-1 .navbar-top {
            min-height: 56px;
            max-height: 56px;
            height: 56px
        }
    }

    navbar navbar-vertical-style-1 .navbar-top .logo {
        display: flex;
        align-items: center
    }

    navbar navbar-vertical-style-1 .navbar-top .logo .logo-icon {
        width: 24px;
        height: 24px
    }

    navbar navbar-vertical-style-1 .navbar-top .logo .logo-text {
        margin-left: 12px;
        font-size: 16px;
        font-weight: 300;
        letter-spacing: .4px;
        line-height: normal;
        font-weight: bolder;
        color: #1d2959 !important
    }

    navbar navbar-vertical-style-1 .navbar-top .buttons {
        display: flex;
        align-items: center
    }

    navbar navbar-vertical-style-1 .navbar-scroll-container {
        display: flex;
        flex-direction: column;
        flex: 1 1 auto;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
        background: linear-gradient(rgba(0, 0, 0, 0) 30%, rgba(0, 0, 0, 0) 30%), linear-gradient(rgba(0, 0, 0, .25) 0, rgba(0, 0, 0, 0) 40%);
        background-repeat: no-repeat;
        background-size: 100% 40px, 100% 10px;
        background-attachment: local, scroll
    }

    navbar navbar-vertical-style-1 .navbar-scroll-container .user {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        width: 100%;
        height: 136px;
        min-height: 136px;
        max-height: 136px;
        padding: 24px 0 64px
    }

    navbar navbar-vertical-style-1 .navbar-scroll-container .user .avatar-container {
        position: absolute;
        top: 92px;
        border-radius: 50%;
        padding: 8px;
        transform: translate(-50%);
        left: 50%
    }

    navbar navbar-vertical-style-1 .navbar-scroll-container .user .avatar-container .avatar {
        width: 72px;
        height: 72px;
        margin: 0
    }

    navbar navbar-vertical-style-1 .navbar-scroll-container .navbar-content {
        flex: 1 1 auto;
        padding-top: 32px
    }

    fuse-navigation {
        display: flex;
        flex: 1 0 auto
    }

    fuse-navigation>.nav {
        margin: 0;
        padding: 0;
        width: 100%
    }

    @media (min-width: 1280px) {
        navbar-horizontal-style-1 .fuse-navy-700 {
            background: #006ed0 !important
        }

        .nav.horizontal .nav-item.nav-collapsable .children .nav-link {
            border-bottom: 1px solid rgba(0, 111, 208, .6392156863)
        }

        .nav.horizontal .nav-item.nav-collapsable .children .nav-link.active,
        .nav.horizontal .nav-item.nav-collapsable .children .nav-link:hover {
            background: #006ed0 !important
        }
    }

    [_nghost-rgn-c218] {
        display: flex;
        flex: 0 0 auto;
        z-index: 3
    }

    [_nghost-rgn-c218] .mat-toolbar[_ngcontent-rgn-c218] {
        background: inherit;
        color: inherit;
        box-shadow: 0 -1px 1px -1px #0003, 0 0 1px #00000024, 0 -1px 3px #0000001f
    }

    .above[_nghost-rgn-c218] {
        position: relative;
        z-index: 99
    }

    .fuse-material-color-picker-menu {
        width: 245px
    }

    .fuse-material-color-picker-menu .mat-menu-content {
        padding: 0
    }

    .fuse-material-color-picker-menu .mat-menu-content .views {
        display: flex;
        flex-direction: column;
        min-height: 165px
    }

    .fuse-material-color-picker-menu .mat-menu-content .views .view {
        overflow: hidden
    }

    .fuse-material-color-picker-menu .mat-menu-content .views .view .colors {
        padding: 1px 0 0;
        margin-left: -1px
    }

    .fuse-material-color-picker-menu .mat-menu-content .views .view .colors .color {
        width: 40px;
        height: 40px;
        margin: 0 0 1px 1px;
        border-radius: 0;
        cursor: pointer;
        transition: border-radius .4s cubic-bezier(.25, .8, .25, 1)
    }

    .fuse-material-color-picker-menu .mat-menu-content .views .view .colors .color:hover {
        border-radius: 20%
    }

    .fuse-material-color-picker-menu .mat-menu-content .views .view .colors .color.selected {
        border-radius: 50% !important
    }

    @keyframes mat-checkbox-fade-in-background {
        0% {
            opacity: 0
        }

        50% {
            opacity: 1
        }
    }

    @keyframes mat-checkbox-fade-out-background {

        0%,
        50% {
            opacity: 1
        }

        100% {
            opacity: 0
        }
    }

    @keyframes mat-checkbox-unchecked-checked-checkmark-path {

        0%,
        50% {
            stroke-dashoffset: 22.910259
        }

        50% {
            animation-timing-function: cubic-bezier(0, 0, 0.2, 0.1)
        }

        100% {
            stroke-dashoffset: 0
        }
    }

    @keyframes mat-checkbox-unchecked-indeterminate-mixedmark {

        0%,
        68.2% {
            transform: scaleX(0)
        }

        68.2% {
            animation-timing-function: cubic-bezier(0, 0, 0, 1)
        }

        100% {
            transform: scaleX(1)
        }
    }

    @keyframes mat-checkbox-checked-unchecked-checkmark-path {
        from {
            animation-timing-function: cubic-bezier(0.4, 0, 1, 1);
            stroke-dashoffset: 0
        }

        to {
            stroke-dashoffset: -22.910259
        }
    }

    @keyframes mat-checkbox-checked-indeterminate-checkmark {
        from {
            animation-timing-function: cubic-bezier(0, 0, 0.2, 0.1);
            opacity: 1;
            transform: rotate(0deg)
        }

        to {
            opacity: 0;
            transform: rotate(45deg)
        }
    }

    @keyframes mat-checkbox-indeterminate-checked-checkmark {
        from {
            animation-timing-function: cubic-bezier(0.14, 0, 0, 1);
            opacity: 0;
            transform: rotate(45deg)
        }

        to {
            opacity: 1;
            transform: rotate(360deg)
        }
    }

    @keyframes mat-checkbox-checked-indeterminate-mixedmark {
        from {
            animation-timing-function: cubic-bezier(0, 0, 0.2, 0.1);
            opacity: 0;
            transform: rotate(-45deg)
        }

        to {
            opacity: 1;
            transform: rotate(0deg)
        }
    }

    @keyframes mat-checkbox-indeterminate-checked-mixedmark {
        from {
            animation-timing-function: cubic-bezier(0.14, 0, 0, 1);
            opacity: 1;
            transform: rotate(0deg)
        }

        to {
            opacity: 0;
            transform: rotate(315deg)
        }
    }

    @keyframes mat-checkbox-indeterminate-unchecked-mixedmark {
        0% {
            animation-timing-function: linear;
            opacity: 1;
            transform: scaleX(1)
        }

        32.8%,
        100% {
            opacity: 0;
            transform: scaleX(0)
        }
    }

    .mat-checkbox-background,
    .mat-checkbox-frame {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        border-radius: 2px;
        box-sizing: border-box;
        pointer-events: none
    }

    .mat-checkbox {
        display: inline-block;
        transition: background 400ms cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 280ms cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        position: relative
    }

    .mat-checkbox._mat-animation-noopable {
        transition: none !important;
        animation: none !important
    }

    .mat-checkbox .mat-ripple-element:not(.mat-checkbox-persistent-ripple) {
        opacity: .16
    }

    .mat-checkbox .mat-checkbox-ripple {
        position: absolute;
        left: calc(50% - 20px);
        top: calc(50% - 20px);
        height: 40px;
        width: 40px;
        z-index: 1;
        pointer-events: none
    }

    .mat-checkbox-layout {
        -webkit-user-select: none;
        user-select: none;
        cursor: inherit;
        align-items: baseline;
        vertical-align: middle;
        display: inline-flex;
        white-space: nowrap
    }

    .mat-checkbox-label {
        -webkit-user-select: auto;
        user-select: auto
    }

    .mat-checkbox-inner-container {
        display: inline-block;
        height: 16px;
        line-height: 0;
        margin: auto;
        margin-right: 8px;
        order: 0;
        position: relative;
        vertical-align: middle;
        white-space: nowrap;
        width: 16px;
        flex-shrink: 0
    }

    [dir=rtl] .mat-checkbox-inner-container {
        margin-left: 8px;
        margin-right: auto
    }

    .mat-checkbox-inner-container-no-side-margin {
        margin-left: 0;
        margin-right: 0
    }

    .mat-checkbox-frame {
        background-color: rgba(0, 0, 0, 0);
        transition: border-color 90ms cubic-bezier(0, 0, 0.2, 0.1);
        border-width: 2px;
        border-style: solid
    }

    ._mat-animation-noopable .mat-checkbox-frame {
        transition: none
    }

    .mat-checkbox-background {
        align-items: center;
        display: inline-flex;
        justify-content: center;
        transition: background-color 90ms cubic-bezier(0, 0, 0.2, 0.1), opacity 90ms cubic-bezier(0, 0, 0.2, 0.1);
        -webkit-print-color-adjust: exact;
        color-adjust: exact
    }

    ._mat-animation-noopable .mat-checkbox-background {
        transition: none
    }

    .cdk-high-contrast-active .mat-checkbox .mat-checkbox-background {
        background: none
    }

    .mat-checkbox-persistent-ripple {
        display: block;
        width: 100%;
        height: 100%;
        transform: none
    }

    .mat-checkbox-inner-container:hover .mat-checkbox-persistent-ripple {
        opacity: .04
    }

    .mat-checkbox.cdk-keyboard-focused .mat-checkbox-persistent-ripple {
        opacity: .12
    }

    .mat-checkbox-persistent-ripple,
    .mat-checkbox.mat-checkbox-disabled .mat-checkbox-inner-container:hover .mat-checkbox-persistent-ripple {
        opacity: 0
    }

    @media(hover: none) {
        .mat-checkbox-inner-container:hover .mat-checkbox-persistent-ripple {
            display: none
        }
    }

    .mat-checkbox-checkmark {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        width: 100%
    }

    .mat-checkbox-checkmark-path {
        stroke-dashoffset: 22.910259;
        stroke-dasharray: 22.910259;
        stroke-width: 2.1333333333px
    }

    .cdk-high-contrast-black-on-white .mat-checkbox-checkmark-path {
        stroke: #000 !important
    }

    .mat-checkbox-mixedmark {
        width: calc(100% - 6px);
        height: 2px;
        opacity: 0;
        transform: scaleX(0) rotate(0deg);
        border-radius: 2px
    }

    .cdk-high-contrast-active .mat-checkbox-mixedmark {
        height: 0;
        border-top: solid 2px;
        margin-top: 2px
    }

    .mat-checkbox-label-before .mat-checkbox-inner-container {
        order: 1;
        margin-left: 8px;
        margin-right: auto
    }

    [dir=rtl] .mat-checkbox-label-before .mat-checkbox-inner-container {
        margin-left: auto;
        margin-right: 8px
    }

    .mat-checkbox-checked .mat-checkbox-checkmark {
        opacity: 1
    }

    .mat-checkbox-checked .mat-checkbox-checkmark-path {
        stroke-dashoffset: 0
    }

    .mat-checkbox-checked .mat-checkbox-mixedmark {
        transform: scaleX(1) rotate(-45deg)
    }

    .mat-checkbox-indeterminate .mat-checkbox-checkmark {
        opacity: 0;
        transform: rotate(45deg)
    }

    .mat-checkbox-indeterminate .mat-checkbox-checkmark-path {
        stroke-dashoffset: 0
    }

    .mat-checkbox-indeterminate .mat-checkbox-mixedmark {
        opacity: 1;
        transform: scaleX(1) rotate(0deg)
    }

    .mat-checkbox-unchecked .mat-checkbox-background {
        background-color: rgba(0, 0, 0, 0)
    }

    .mat-checkbox-disabled {
        cursor: default
    }

    .cdk-high-contrast-active .mat-checkbox-disabled {
        opacity: .5
    }

    .mat-checkbox-anim-unchecked-checked .mat-checkbox-background {
        animation: 180ms linear 0ms mat-checkbox-fade-in-background
    }

    .mat-checkbox-anim-unchecked-checked .mat-checkbox-checkmark-path {
        animation: 180ms linear 0ms mat-checkbox-unchecked-checked-checkmark-path
    }

    .mat-checkbox-anim-unchecked-indeterminate .mat-checkbox-background {
        animation: 180ms linear 0ms mat-checkbox-fade-in-background
    }

    .mat-checkbox-anim-unchecked-indeterminate .mat-checkbox-mixedmark {
        animation: 90ms linear 0ms mat-checkbox-unchecked-indeterminate-mixedmark
    }

    .mat-checkbox-anim-checked-unchecked .mat-checkbox-background {
        animation: 180ms linear 0ms mat-checkbox-fade-out-background
    }

    .mat-checkbox-anim-checked-unchecked .mat-checkbox-checkmark-path {
        animation: 90ms linear 0ms mat-checkbox-checked-unchecked-checkmark-path
    }

    .mat-checkbox-anim-checked-indeterminate .mat-checkbox-checkmark {
        animation: 90ms linear 0ms mat-checkbox-checked-indeterminate-checkmark
    }

    .mat-checkbox-anim-checked-indeterminate .mat-checkbox-mixedmark {
        animation: 90ms linear 0ms mat-checkbox-checked-indeterminate-mixedmark
    }

    .mat-checkbox-anim-indeterminate-checked .mat-checkbox-checkmark {
        animation: 500ms linear 0ms mat-checkbox-indeterminate-checked-checkmark
    }

    .mat-checkbox-anim-indeterminate-checked .mat-checkbox-mixedmark {
        animation: 500ms linear 0ms mat-checkbox-indeterminate-checked-mixedmark
    }

    .mat-checkbox-anim-indeterminate-unchecked .mat-checkbox-background {
        animation: 180ms linear 0ms mat-checkbox-fade-out-background
    }

    .mat-checkbox-anim-indeterminate-unchecked .mat-checkbox-mixedmark {
        animation: 300ms linear 0ms mat-checkbox-indeterminate-unchecked-mixedmark
    }

    .mat-checkbox-input {
        bottom: 0;
        left: 50%
    }

    .mat-checkbox-input:focus~.mat-focus-indicator::before {
        content: ""
    }

    .mat-progress-bar {
        display: block;
        height: 4px;
        overflow: hidden;
        position: relative;
        transition: opacity 250ms linear;
        width: 100%
    }

    .mat-progress-bar._mat-animation-noopable {
        transition: none !important;
        animation: none !important
    }

    .mat-progress-bar .mat-progress-bar-element,
    .mat-progress-bar .mat-progress-bar-fill::after {
        height: 100%;
        position: absolute;
        width: 100%
    }

    .mat-progress-bar .mat-progress-bar-background {
        width: calc(100% + 10px)
    }

    .cdk-high-contrast-active .mat-progress-bar .mat-progress-bar-background {
        display: none
    }

    .mat-progress-bar .mat-progress-bar-buffer {
        transform-origin: top left;
        transition: transform 250ms ease
    }

    .cdk-high-contrast-active .mat-progress-bar .mat-progress-bar-buffer {
        border-top: solid 5px;
        opacity: .5
    }

    .mat-progress-bar .mat-progress-bar-secondary {
        display: none
    }

    .mat-progress-bar .mat-progress-bar-fill {
        animation: none;
        transform-origin: top left;
        transition: transform 250ms ease
    }

    .cdk-high-contrast-active .mat-progress-bar .mat-progress-bar-fill {
        border-top: solid 4px
    }

    .mat-progress-bar .mat-progress-bar-fill::after {
        animation: none;
        content: "";
        display: inline-block;
        left: 0
    }

    .mat-progress-bar[dir=rtl],
    [dir=rtl] .mat-progress-bar {
        transform: rotateY(180deg)
    }

    .mat-progress-bar[mode=query] {
        transform: rotateZ(180deg)
    }

    .mat-progress-bar[mode=query][dir=rtl],
    [dir=rtl] .mat-progress-bar[mode=query] {
        transform: rotateZ(180deg) rotateY(180deg)
    }

    .mat-progress-bar[mode=indeterminate] .mat-progress-bar-fill,
    .mat-progress-bar[mode=query] .mat-progress-bar-fill {
        transition: none
    }

    .mat-progress-bar[mode=indeterminate] .mat-progress-bar-primary,
    .mat-progress-bar[mode=query] .mat-progress-bar-primary {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        animation: mat-progress-bar-primary-indeterminate-translate 2000ms infinite linear;
        left: -145.166611%
    }

    .mat-progress-bar[mode=indeterminate] .mat-progress-bar-primary.mat-progress-bar-fill::after,
    .mat-progress-bar[mode=query] .mat-progress-bar-primary.mat-progress-bar-fill::after {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        animation: mat-progress-bar-primary-indeterminate-scale 2000ms infinite linear
    }

    .mat-progress-bar[mode=indeterminate] .mat-progress-bar-secondary,
    .mat-progress-bar[mode=query] .mat-progress-bar-secondary {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        animation: mat-progress-bar-secondary-indeterminate-translate 2000ms infinite linear;
        left: -54.888891%;
        display: block
    }

    .mat-progress-bar[mode=indeterminate] .mat-progress-bar-secondary.mat-progress-bar-fill::after,
    .mat-progress-bar[mode=query] .mat-progress-bar-secondary.mat-progress-bar-fill::after {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        animation: mat-progress-bar-secondary-indeterminate-scale 2000ms infinite linear
    }

    .mat-progress-bar[mode=buffer] .mat-progress-bar-background {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        animation: mat-progress-bar-background-scroll 250ms infinite linear;
        display: block
    }

    .mat-progress-bar._mat-animation-noopable .mat-progress-bar-fill,
    .mat-progress-bar._mat-animation-noopable .mat-progress-bar-fill::after,
    .mat-progress-bar._mat-animation-noopable .mat-progress-bar-buffer,
    .mat-progress-bar._mat-animation-noopable .mat-progress-bar-primary,
    .mat-progress-bar._mat-animation-noopable .mat-progress-bar-primary.mat-progress-bar-fill::after,
    .mat-progress-bar._mat-animation-noopable .mat-progress-bar-secondary,
    .mat-progress-bar._mat-animation-noopable .mat-progress-bar-secondary.mat-progress-bar-fill::after,
    .mat-progress-bar._mat-animation-noopable .mat-progress-bar-background {
        animation: none;
        transition-duration: 1ms
    }

    @keyframes mat-progress-bar-primary-indeterminate-translate {
        0% {
            transform: translateX(0)
        }

        20% {
            animation-timing-function: cubic-bezier(0.5, 0, 0.701732, 0.495819);
            transform: translateX(0)
        }

        59.15% {
            animation-timing-function: cubic-bezier(0.302435, 0.381352, 0.55, 0.956352);
            transform: translateX(83.67142%)
        }

        100% {
            transform: translateX(200.611057%)
        }
    }

    @keyframes mat-progress-bar-primary-indeterminate-scale {
        0% {
            transform: scaleX(0.08)
        }

        36.65% {
            animation-timing-function: cubic-bezier(0.334731, 0.12482, 0.785844, 1);
            transform: scaleX(0.08)
        }

        69.15% {
            animation-timing-function: cubic-bezier(0.06, 0.11, 0.6, 1);
            transform: scaleX(0.661479)
        }

        100% {
            transform: scaleX(0.08)
        }
    }

    @keyframes mat-progress-bar-secondary-indeterminate-translate {
        0% {
            animation-timing-function: cubic-bezier(0.15, 0, 0.515058, 0.409685);
            transform: translateX(0)
        }

        25% {
            animation-timing-function: cubic-bezier(0.31033, 0.284058, 0.8, 0.733712);
            transform: translateX(37.651913%)
        }

        48.35% {
            animation-timing-function: cubic-bezier(0.4, 0.627035, 0.6, 0.902026);
            transform: translateX(84.386165%)
        }

        100% {
            transform: translateX(160.277782%)
        }
    }

    @keyframes mat-progress-bar-secondary-indeterminate-scale {
        0% {
            animation-timing-function: cubic-bezier(0.15, 0, 0.515058, 0.409685);
            transform: scaleX(0.08)
        }

        19.15% {
            animation-timing-function: cubic-bezier(0.31033, 0.284058, 0.8, 0.733712);
            transform: scaleX(0.457104)
        }

        44.15% {
            animation-timing-function: cubic-bezier(0.4, 0.627035, 0.6, 0.902026);
            transform: scaleX(0.72796)
        }

        100% {
            transform: scaleX(0.08)
        }
    }

    @keyframes mat-progress-bar-background-scroll {
        to {
            transform: translateX(-8px)
        }
    }

    #login {
        width: 100%;
        background: #f5f5f5;
        background-size: cover
    }

    #login #login-form-wrapper {
        flex: 1 0 auto;
        padding: 32px
    }

    @media screen and (min-width: 1280px) and (max-width: 1919px) {
        #login #login-form-wrapper {
            padding: 0
        }
    }

    @media screen and (max-width: 599px) {
        #login #login-form-wrapper {
            padding: 16px
        }
    }

    @media screen and (min-width: 960px) and (max-width: 1279px) {
        #login #login-form-wrapper {
            padding: 16px
        }
    }

    #login #login-form-wrapper #login-form {
        display: flex;
        flex-direction: column;
        max-width: 357px;
        padding: 0 32px 32px;
        box-shadow: 0 8px 10px -5px #0003, 0 16px 24px 2px #00000024, 0 6px 30px 5px #0000001f;
        box-shadow: none !important
    }

    @media screen and (max-width: 599px) {
        #login #login-form-wrapper #login-form {
            padding: 24px;
            width: 100%
        }
    }

    #login #login-form-wrapper #login-form .login-form-header {
        display: flex;
        flex: 1 0 auto
    }

    #login #login-form-wrapper #login-form .login-form-header .avatar-container {
        position: relative;
        margin-right: 16px
    }

    #login #login-form-wrapper #login-form .login-form-header .avatar-container .avatar {
        margin: 0
    }

    @media screen and (max-width: 599px) {
        #login #login-form-wrapper #login-form .login-form-header .avatar-container {
            margin-right: 0
        }
    }

    #login #login-form-wrapper #login-form .login-form-header .avatar-container mat-icon {
        position: absolute;
        bottom: -2px;
        right: -6px
    }

    #login #login-form-wrapper #login-form .login-form-header .title {
        font-size: 20px;
        margin-bottom: 8px
    }

    @media screen and (max-width: 599px) {
        #login #login-form-wrapper #login-form .login-form-header .title {
            margin-top: 16px;
            text-align: center
        }
    }

    @media screen and (max-width: 599px) {
        #login #login-form-wrapper #login-form .login-form-header .subtitle {
            text-align: center
        }
    }

    #login #login-form-wrapper #login-form form {
        width: 100%;
        margin: 32px 0 0
    }

    #login #login-form-wrapper #login-form form mat-form-field {
        width: 100%
    }

    #login #login-form-wrapper #login-form form .submit-button {
        width: 220px;
        margin: 16px auto;
        display: block
    }

    @media screen and (max-width: 599px) {
        #login #login-form-wrapper #login-form form .submit-button {
            width: 90%
        }
    }

    #login #login-form-wrapper #login-form .message {
        font-weight: 600;
        text-align: center
    }

    #login #login-form-wrapper .register {
        text-align: center;
        display: inline-block !important;
        width: 100%;
        border-top: 1px solid #d7d7d7;
        padding-top: 10px
    }

    #login #login-form-wrapper .secondary-register {
        text-align: center;
        display: inline-block !important;
        width: 100%;
        padding-top: 10px
    }

    #login #login-form-wrapper .register a:hover,
    #login #login-form-wrapper .secondary-register a:hover {
        text-decoration: none
    }

    #login .boxshadow {
        border-radius: 15px;
        background: #fff;
        box-shadow: 0 3px 20px #0000000b
    }

    #login .leftBox {
        min-height: 470px;
        justify-content: center;
        background: #24235b !important;
        color: #fff;
        border-radius: 15px 0 0 15px
    }

    #login .rightBox {
        min-height: 350px;
        border-radius: 0 15px 15px 0;
        justify-content: center
    }

    #login .loader-show {
        display: inline-flex;
        margin-left: 10px
    }

    #login .left-logo {
        width: 300px
    }

    @media screen and (max-width: 599px) {
        #login .left-logo {
            width: 250px
        }
    }

    #login .logo {
        margin-bottom: 10px
    }
</style>


@endpush
@section('content')
<form method="post" action="{{ route('update_cert') }}">
    @csrf
<div id="acordPage" fxlayout="row" class="page-layout simple right-sidebar ng-tns-c268-42"
    style="flex-direction: row; box-sizing: border-box; display: flex;">
<input type="hidden" name="cert_id" value="{{request()->id}}">

    <div fuseperfectscrollbar="" class="center ng-tns-c268-42 ps"
        style="flex-direction: column; box-sizing: border-box; display: flex;">
        <div class="ps__rail-x" style="left: 0px; top: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; left: 0px; height: 1357px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
        <div fxlayout="column" fxlayoutalign="space-between" class="header ng-tns-c268-42"
            style="flex-direction: column; box-sizing: border-box; display: flex; place-content: stretch space-between; align-items: stretch;">
            <div fxlayout="row wrap" fxflex="100%" fxflex.xs="100%" fxflex.sm="100%"
                class="widget-group tableBox pt-0 ng-tns-c268-42 ng-trigger ng-trigger-animateStagger"
                style="flex-flow: wrap; box-sizing: border-box; display: flex; flex: 1 1 100%; max-height: 100%;">
                <div fxlayout="row" fxflex="100%" fxflex.xs="100%" fxflex.sm="100%"
                    class="widget ng-tns-c268-42 ng-trigger ng-trigger-animate"
                    style="flex-direction: row; box-sizing: border-box; display: flex; flex: 1 1 100%; max-width: 100%;">
                    <div class="fuse-widget-front ng-tns-c268-42">
                        <div fxlayout="row wrap" fxlayoutalign="start"
                            class="ng-tns-c268-42 ng-trigger ng-trigger-slideIn ng-star-inserted"
                            style="flex-flow: wrap; box-sizing: border-box; display: flex; place-content: stretch flex-start; align-items: stretch;">
                            <div fxlayout="column" fxflex="100" fxflex.gt-xs="100" fxflex.gt-md="100"
                                class="widget p-lr-24 ng-tns-c268-42 ng-trigger ng-trigger-animate"
                                style="flex-direction: column; box-sizing: border-box; display: flex; flex: 1 1 100%; max-width: 100%;">
                                <div class="widget-front box m-0 bn_n ng-tns-c268-42">
                                    <div fxlayout="row" fxlayoutalign="start" class="p-10 ng-tns-c268-42"
                                        style="flex-direction: row; box-sizing: border-box; display: flex; place-content: stretch flex-start; align-items: stretch;">
                                        <form novalidate="" name="acordForm" style="width: 100% !important;"
                                            class="ng-tns-c268-42 ng-untouched ng-pristine ng-invalid">
                                            <div id="accord_container" class="ng-tns-c268-42">
                                                <table border="0" cellpadding="0" cellspacing="0"
                                                    class="tftable ng-tns-c268-42">
                                                    <tbody class="ng-tns-c268-42">
                                                        <tr class="ng-tns-c268-42">
                                                            <td colspan="2" valign="middle" class="p-0 ng-tns-c268-42">
                                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                                    border="0" class="ng-tns-c268-42">
                                                                    <tr class="ng-tns-c268-42">
                                                                        <td class="ng-tns-c268-42"><span
                                                                                class="acord_title ng-tns-c268-42"><img
                                                                                src="{{ asset('assets/img/nlogo.png')}}"
                                                                                    width="91" height="39"
                                                                                    class="ng-tns-c268-42">
                                                                                &nbsp;&nbsp;INTERMODAL INTERCHANGE
                                                                                CERTIFICATE OF
                                                                                INSURANCE</span></td>
                                                                        <td width="180" class="date_top ng-tns-c268-42">
                                                                            {{-- <div class="date_lable ng-tns-c268-42">DATE
                                                                                (MM/DD/YYYY)
                                                                            </div> --}}
                                                                            <mat-form-field appearance="outline"
                                                                                class="mat-form-field ng-tns-c268-42 ng-tns-c70-48 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-star-inserted mat-form-field-should-float mat-form-field-disabled"
                                                                                style="width: 170px !important;">
                                                                                <div
                                                                                    class="mat-form-field-wrapper ng-tns-c70-48">
                                                                                    {{-- <div
                                                                                        class="mat-form-field-flex ng-tns-c70-48">
                                                                                        <div
                                                                                            class="mat-form-field-outline ng-tns-c70-48 ng-star-inserted">
                                                                                            <div class="mat-form-field-outline-start ng-tns-c70-48"
                                                                                                style="width: 0px;">
                                                                                            </div>
                                                                                            <div class="mat-form-field-outline-gap ng-tns-c70-48"
                                                                                                style="width: 0px;">
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline-end ng-tns-c70-48">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-48 ng-star-inserted">
                                                                                            <div class="mat-form-field-outline-start ng-tns-c70-48"
                                                                                                style="width: 0px;">
                                                                                            </div>
                                                                                            <div class="mat-form-field-outline-gap ng-tns-c70-48"
                                                                                                style="width: 0px;">
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline-end ng-tns-c70-48">
                                                                                            </div>
                                                                                        </div> --}}
                                                                                        <div
                                                                                            class="mat-form-field-infix ng-tns-c70-48">
                                                                                            {{-- <input type="date"
                                                                                            matinput=""
                                                                                                formcontrolname="acordCertiDate"
                                                                                                placeholder="Choose a date"
                                                                                                class="mat-input-element mat-form-field-autofill-control mat-datepicker-input acordCertiDateCls l_h_23 ng-tns-c70-48 ng-untouched ng-pristine cdk-text-field-autofill-monitored"
                                                                                                id="mat-input-4"
                                                                                                data-placeholder="Choose a date"
                                                                                                aria-invalid="false"
                                                                                                aria-required="false"
                                                                                                aria-haspopup="dialog"
                                                                                                data-mat-calendar="mat-datepicker-0"
                                                                                                disabled=""> --}}
                                                                                            <mat-datepicker
                                                                                                class="ng-tns-c70-48">
                                                                                            </mat-datepicker><span
                                                                                                class="mat-form-field-label-wrapper ng-tns-c70-48"></span>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-suffix ng-tns-c70-48 ng-star-inserted">
                                                                                            <mat-datepicker-toggle
                                                                                                matsuffix=""
                                                                                                class="mat-datepicker-toggle ng-tns-c70-48"
                                                                                                data-mat-calendar="mat-datepicker-0">
                                                                                                <button
                                                                                                    mat-icon-button=""
                                                                                                    type="button"
                                                                                                    class="mat-focus-indicator mat-icon-button mat-button-base mat-button-disabled"
                                                                                                    aria-haspopup="dialog"
                                                                                                    aria-label="Open calendar"
                                                                                                    tabindex="-1"
                                                                                                    disabled="true"><span
                                                                                                        matripple=""
                                                                                                        class="mat-ripple mat-button-ripple mat-button-ripple-round"></span><span
                                                                                                        class="mat-button-focus-overlay"></span></button>
                                                                                            </mat-datepicker-toggle>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="mat-form-field-subscript-wrapper ng-tns-c70-48">
                                                                                        <div class="mat-form-field-hint-wrapper ng-tns-c70-48 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                            style="opacity: 1; transform: translateY(0%);">
                                                                                            <div
                                                                                                class="mat-form-field-hint-spacer ng-tns-c70-48">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </mat-form-field>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr class="ng-tns-c268-42">
                                                            <td colspan="2" class="ng-tns-c268-42">
                                                                <div class="acord_title_matter ng-tns-c268-42">THIS
                                                                    CERTIFICATE IS
                                                                    ISSUED AS A MATTER OF INFORMATION ONLY AND CONFERS
                                                                    NO RIGHTS
                                                                    UPON THE CERTIFICATE HOLDER. THIS CERTIFICATE DOES
                                                                    NOT
                                                                    AFFIRMATIVELY OR NEGATIVELY AMEND, EXTEND OR ALTER
                                                                    THE COVERAGE
                                                                    AFFORDED BY THE POLICIES BELOW. THIS CERTIFICATE OF
                                                                    INSURANCE
                                                                    DOES NOT CONSTITUTE A CONTRACT BETWEEN THE ISSUING
                                                                    INSURER(S),
                                                                    AUTHORIZED REPRESENTATIVE OR PRODUCER, AND THE
                                                                    CERTIFICATE
                                                                    HOLDER. </div>
                                                            </td>
                                                        </tr>
                                                        <tr class="ng-tns-c268-42">
                                                            <td width="35%" valign="top" class="p-0 ng-tns-c268-42">
                                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                                    border="0" style="min-height: 90px;"
                                                                    class="ng-tns-c268-42">
                                                                    <tbody class="ng-tns-c268-42">
                                                                        <tr height="73" class="ng-tns-c268-42">
                                                                            <td width="100" valign="middle"
                                                                                class="lable_title ng-tns-c268-42">
                                                                                PRODUCER</td>
                                                                            <td valign="top"
                                                                                class="lable_title_normal ng-tns-c268-42">
                                                                                {{ $agent->agencies[0]->agency_name }}<br
                                                                                class="ng-tns-c268-42">
                                                                                {{ $agent->agencies[0]->agency_address }}<br
                                                                                    class="ng-tns-c268-42"> {{ $agent->agencies[0]->agency_city }}
                                                                                    {{ $agent->agencies[0]->agency_state }}
                                                                                ,
                                                                               {{ $agent->agencies[0]->agency_zip }} <br
                                                                                    class="ng-tns-c268-42">
                                                                              </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td width="65%" valign="top" class="p-0 ng-tns-c268-42">
                                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                                    border="0"
                                                                    class="agenc_sub_table a_s_t_b ng-tns-c268-42"
                                                                    style="min-height: 90px;">
                                                                    <tbody class="ng-tns-c268-42">
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td
                                                                                class="lable_title tab_fild_set ng-tns-c268-42">
                                                                                CONTACT NAME:</td>
                                                                            <td colspan="3" class="ng-tns-c268-42"> Nick
                                                                                {{ $agent->name }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td width="22%"
                                                                                class="lable_title ng-tns-c268-42"><span
                                                                                    class="ng-tns-c268-42">PHONE</span>
                                                                                (A/C, No,
                                                                                Ext): </td>
                                                                            <td class="ng-tns-c268-42">{{ $agent->agencies[0]->agency_cellphone }}</td>
                                                                            <td width="26%"
                                                                                class="lable_title tab_fild_set ng-tns-c268-42">
                                                                                <span class="ng-tns-c268-42">FAX (A/C,
                                                                                    No):</span>
                                                                            </td>
                                                                            <td width="26%"
                                                                                class="tab_fild_set ng-tns-c268-42">{{ $agent->agencies[0]->agency_fax }}
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td width="22%"
                                                                                class="lable_title ng-tns-c268-42"><span
                                                                                    class="ng-tns-c268-42">E-MAIL</span>
                                                                                ADDRESS:
                                                                            </td>
                                                                            <td width="26%" class="ng-tns-c268-42">
                                                                                {{ $agent->agencies[0]->agency_extra_email }} </td>
                                                                            <td width="25%"
                                                                                class="lable_title ng-tns-c268-42"><span
                                                                                    class="ng-tns-c268-42">PRODUCER</span>
                                                                                CUSTOMER
                                                                                ID #: </td>
                                                                            <td width="25%" class="ng-tns-c268-42">
                                                                                {{ $agent->agencies[0]->producer_customer_number }}</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <tr class="ng-tns-c268-42">
                                                            <td width="35%" valign="top" class="p-0 ng-tns-c268-42">
                                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                                    border="0" style="min-height: 205px;"
                                                                    class="ng-tns-c268-42">
                                                                    <tbody class="ng-tns-c268-42">
                                                                        <tr height="173" class="ng-tns-c268-42">
                                                                            <td width="100" valign="middle"
                                                                                class="lable_title ng-tns-c268-42">
                                                                                INSURED</td>
                                                                            <td valign="top"
                                                                                class="lable_title_normal pt-30 ng-tns-c268-42">
                                                                                {{ $driver->name }}<br
                                                                                    class="ng-tns-c268-42">
                                                                                    {{ $driver->truckers[0]->address }} <br class="ng-tns-c268-42">
                                                                                    {{ $driver->truckers[0]->city }}
                                                                                    {{ $driver->truckers[0]->state }} <br class="ng-tns-c268-42"> ,
                                                                                    {{ $driver->truckers[0]->zip }}
                                                                                <br class="ng-tns-c268-42">
                                                                                {{ $driver->truckers[0]->contact_info }} ,
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td width="65%" valign="top" class="p-0 ng-tns-c268-42">
                                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                                    border="0" formgroupname="iaInsurerForm"
                                                                    class="agenc_sub_table a_s_t_b ng-tns-c268-42 ng-untouched ng-pristine ng-valid"
                                                                    style="min-height: 205px;">
                                                                    <tbody class="ng-tns-c268-42">
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td width="22%"
                                                                                class="w-120 tab_fild_set ng-tns-c268-42">
                                                                            </td>
                                                                            <td width="26%" align="center"
                                                                                class="lable_title ng-tns-c268-42">
                                                                                INSURER(S)
                                                                                AFFORDING COVERAGE</td>
                                                                            <td width="26%" align="center"
                                                                                class="lable_title tab_fild_set ng-tns-c268-42">
                                                                                NAIC
                                                                                #</td>
                                                                            <td width="26%" align="center"
                                                                                class="lable_title tab_fild_set ng-tns-c268-42">
                                                                                BEST
                                                                                RATING</td>
                                                                        </tr>
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td class="lable_title ng-tns-c268-42">
                                                                                INSURER A : </td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field full-width-text ng-tns-c268-42 ng-tns-c70-49 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-valid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-49">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-49">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-49 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-49"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-49"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-49">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-49 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-49"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-49"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-49">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-49">
                                                                                                <input matinput=""
                                                                                                    placeholder="Enter Insurer A Details"
                                                                                                    formcontrolname="insurerA"
                                                                                                    value="@if (isset(  $certPolicy ) ){{ $certPolicy->first()->insuranceProvider->name }} @endif"
                                                                                                    class="js-example-basic-single form-control mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-49 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                                                                    id="insurA"
                                                                                                    data-placeholder="Enter Insurer A Details"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="false"
                                                                                                    autocomplete="off"
                                                                                                    role="combobox"
                                                                                                    aria-autocomplete="list"
                                                                                                    aria-expanded="false"
                                                                                                    aria-haspopup="listbox">
                                                                                                    <input type="hidden" id="insurance_provider_id_A" name="insurance_provider_id[]" value="@if(isset($certPolicy)){{$certPolicy->first()->insuranceProvider->id}}@endif"/>
                                                                                                    <div id="insurerAList">
                                                                                                    </div>
                                                                                                <mat-autocomplete
                                                                                                    panelwidth="auto"
                                                                                                    class="mat-autocomplete ng-tns-c70-49">
                                                                                                </mat-autocomplete><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-49"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-49">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-49 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-49">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                            <td class="opd_td ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field full-width-text ng-tns-c268-42 ng-tns-c70-50 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-valid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-50">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-50">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-50 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-50"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-50"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-50">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-50 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-50"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-50"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-50">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-50">
                                                                                                <input matinput=""
                                                                                                    placeholder="Enter Insurer A Details"
                                                                                                    formcontrolname="insNaicNoA"
                                                                                                    value="@if (isset(  $certPolicy ) ){{ $certPolicy->first()->insuranceProvider->naic_number }} @endif"
                                                                                                    class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-50 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                                                                    id="naic_a"
                                                                                                    data-placeholder="Enter Insurer A Details"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="false"
                                                                                                    autocomplete="off"
                                                                                                    role="combobox"
                                                                                                    aria-autocomplete="list"
                                                                                                    aria-expanded="false"
                                                                                                    aria-haspopup="listbox" readonly>
                                                                                                <mat-autocomplete
                                                                                                    panelwidth="auto"
                                                                                                    class="mat-autocomplete ng-tns-c70-50">
                                                                                                </mat-autocomplete><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-50"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-50">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-50 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-50">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field full-width-text ng-tns-c268-42 ng-tns-c70-51 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-valid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-51">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-51">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-51 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-51"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-51"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-51">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-51 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-51"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-51"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-51">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-51">
                                                                                                <input
                                                                                                    autocomplete="off"
                                                                                                    matinput=""
                                                                                                    formcontrolname="insBestRatingA"
                                                                                                    readonly="true"
                                                                                                    value="@if (isset(  $certPolicy ) ){{ $certPolicy->first()->insuranceProvider->best_rating_number }} @endif"
                                                                                                    class="mat-input-element mat-form-field-autofill-control ng-tns-c70-51 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                                                                    id="br_a"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="false" readonly><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-51"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-51">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-51 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-51">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td class="lable_title ng-tns-c268-42">
                                                                                INSURER B : </td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field full-width-text ng-tns-c268-42 ng-tns-c70-52 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-valid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-52">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-52">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-52 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-52"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-52"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-52">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-52 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-52"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-52"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-52">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-52">
                                                                                                <input matinput=""
                                                                                                    placeholder="Enter Insurer B Details"
                                                                                                    formcontrolname="insurerB"
                                                                                                    value=""
                                                                                                    class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-52 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                                                                    id="mat-input-8"
                                                                                                    data-placeholder="Enter Insurer B Details"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="false"
                                                                                                    autocomplete="off"
                                                                                                    role="combobox"
                                                                                                    aria-autocomplete="list"
                                                                                                    aria-expanded="false"
                                                                                                    aria-haspopup="listbox">
                                                                                                <mat-autocomplete
                                                                                                    panelwidth="auto"
                                                                                                    class="mat-autocomplete ng-tns-c70-52">
                                                                                                </mat-autocomplete><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-52"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-52">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-52 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-52">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field full-width-text ng-tns-c268-42 ng-tns-c70-53 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-valid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-53">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-53">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-53 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-53"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-53"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-53">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-53 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-53"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-53"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-53">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-53">
                                                                                                <input matinput=""
                                                                                                    placeholder="Enter Insurer B Details"
                                                                                                    formcontrolname="insNaicNoB"
                                                                                                    value=""
                                                                                                    class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-53 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                                                                    id="mat-input-9"
                                                                                                    data-placeholder="Enter Insurer B Details"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="false"
                                                                                                    autocomplete="off"
                                                                                                    role="combobox"
                                                                                                    aria-autocomplete="list"
                                                                                                    aria-expanded="false"
                                                                                                    aria-haspopup="listbox">
                                                                                                <mat-autocomplete
                                                                                                    panelwidth="auto"
                                                                                                    class="mat-autocomplete ng-tns-c70-53">
                                                                                                </mat-autocomplete><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-53"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-53">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-53 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-53">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field full-width-text ng-tns-c268-42 ng-tns-c70-54 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-valid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-54">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-54">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-54 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-54"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-54"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-54">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-54 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-54"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-54"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-54">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-54">
                                                                                                <input
                                                                                                    autocomplete="off"
                                                                                                    matinput=""
                                                                                                    formcontrolname="insBestRatingB"
                                                                                                    readonly="true"
                                                                                                    value=""
                                                                                                    class="mat-input-element mat-form-field-autofill-control ng-tns-c70-54 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                                                                    id="mat-input-10"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="false"><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-54"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-54">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-54 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-54">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td class="lable_title ng-tns-c268-42">
                                                                                INSURER C : </td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field full-width-text ng-tns-c268-42 ng-tns-c70-55 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-valid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-55">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-55">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-55 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-55"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-55"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-55">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-55 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-55"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-55"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-55">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-55">
                                                                                                <input matinput=""
                                                                                                    placeholder="Enter Insurer C Details"
                                                                                                    formcontrolname="insurerC"
                                                                                                    value=""
                                                                                                    class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-55 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                                                                    id="mat-input-11"
                                                                                                    data-placeholder="Enter Insurer C Details"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="false"
                                                                                                    autocomplete="off"
                                                                                                    role="combobox"
                                                                                                    aria-autocomplete="list"
                                                                                                    aria-expanded="false"
                                                                                                    aria-haspopup="listbox">
                                                                                                <mat-autocomplete
                                                                                                    panelwidth="auto"
                                                                                                    class="mat-autocomplete ng-tns-c70-55">
                                                                                                </mat-autocomplete><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-55"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-55">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-55 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-55">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field full-width-text ng-tns-c268-42 ng-tns-c70-56 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-valid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-56">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-56">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-56 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-56"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-56"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-56">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-56 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-56"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-56"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-56">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-56">
                                                                                                <input matinput=""
                                                                                                    placeholder="Enter Insurer C Details"
                                                                                                    formcontrolname="insNaicNoC"
                                                                                                    value=""
                                                                                                    class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-56 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                                                                    id="mat-input-12"
                                                                                                    data-placeholder="Enter Insurer C Details"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="false"
                                                                                                    autocomplete="off"
                                                                                                    role="combobox"
                                                                                                    aria-autocomplete="list"
                                                                                                    aria-expanded="false"
                                                                                                    aria-haspopup="listbox">
                                                                                                <mat-autocomplete
                                                                                                    panelwidth="auto"
                                                                                                    class="mat-autocomplete ng-tns-c70-56">
                                                                                                </mat-autocomplete><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-56"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-56">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-56 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-56">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field full-width-text ng-tns-c268-42 ng-tns-c70-57 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-valid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-57">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-57">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-57 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-57"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-57"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-57">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-57 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-57"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-57"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-57">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-57">
                                                                                                <input
                                                                                                    autocomplete="off"
                                                                                                    matinput=""
                                                                                                    formcontrolname="insBestRatingC"
                                                                                                    readonly="true"
                                                                                                    value=""
                                                                                                    class="mat-input-element mat-form-field-autofill-control ng-tns-c70-57 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                                                                    id="mat-input-13"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="false"><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-57"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-57">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-57 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-57">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td class="lable_title ng-tns-c268-42">
                                                                                INSURER D : </td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field full-width-text ng-tns-c268-42 ng-tns-c70-58 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-valid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-58">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-58">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-58 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-58"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-58"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-58">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-58 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-58"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-58"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-58">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-58">
                                                                                                <input matinput=""
                                                                                                    placeholder="Enter Insurer D Details"
                                                                                                    formcontrolname="insurerD"
                                                                                                    value=""
                                                                                                    class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-58 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                                                                    id="mat-input-14"
                                                                                                    data-placeholder="Enter Insurer D Details"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="false"
                                                                                                    autocomplete="off"
                                                                                                    role="combobox"
                                                                                                    aria-autocomplete="list"
                                                                                                    aria-expanded="false"
                                                                                                    aria-haspopup="listbox">
                                                                                                <mat-autocomplete
                                                                                                    panelwidth="auto"
                                                                                                    class="mat-autocomplete ng-tns-c70-58">
                                                                                                </mat-autocomplete><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-58"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-58">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-58 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-58">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field full-width-text ng-tns-c268-42 ng-tns-c70-59 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-valid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-59">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-59">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-59 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-59"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-59"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-59">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-59 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-59"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-59"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-59">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-59">
                                                                                                <input matinput=""
                                                                                                    placeholder="Enter Insurer D Details"
                                                                                                    formcontrolname="insNaicNoD"
                                                                                                    value=""
                                                                                                    class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-59 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                                                                    id="mat-input-15"
                                                                                                    data-placeholder="Enter Insurer D Details"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="false"
                                                                                                    autocomplete="off"
                                                                                                    role="combobox"
                                                                                                    aria-autocomplete="list"
                                                                                                    aria-expanded="false"
                                                                                                    aria-haspopup="listbox">
                                                                                                <mat-autocomplete
                                                                                                    panelwidth="auto"
                                                                                                    class="mat-autocomplete ng-tns-c70-59">
                                                                                                </mat-autocomplete><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-59"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-59">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-59 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-59">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field full-width-text ng-tns-c268-42 ng-tns-c70-60 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-valid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-60">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-60">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-60 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-60"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-60"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-60">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-60 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-60"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-60"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-60">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-60">
                                                                                                <input
                                                                                                    autocomplete="off"
                                                                                                    matinput=""
                                                                                                    formcontrolname="insBestRatingD"
                                                                                                    readonly="true"
                                                                                                    value=""
                                                                                                    class="mat-input-element mat-form-field-autofill-control ng-tns-c70-60 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                                                                    id="mat-input-16"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="false"><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-60"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-60">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-60 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-60">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td class="lable_title ng-tns-c268-42">
                                                                                INSURER E : </td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field full-width-text ng-tns-c268-42 ng-tns-c70-61 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-valid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-61">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-61">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-61 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-61"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-61"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-61">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-61 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-61"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-61"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-61">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-61">
                                                                                                <input matinput=""
                                                                                                    placeholder="Enter Insurer E Details"
                                                                                                    formcontrolname="insurerE"
                                                                                                    value=""
                                                                                                    class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-61 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                                                                    id="mat-input-17"
                                                                                                    data-placeholder="Enter Insurer E Details"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="false"
                                                                                                    autocomplete="off"
                                                                                                    role="combobox"
                                                                                                    aria-autocomplete="list"
                                                                                                    aria-expanded="false"
                                                                                                    aria-haspopup="listbox">
                                                                                                <mat-autocomplete
                                                                                                    panelwidth="auto"
                                                                                                    class="mat-autocomplete ng-tns-c70-61">
                                                                                                </mat-autocomplete><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-61"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-61">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-61 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-61">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field full-width-text ng-tns-c268-42 ng-tns-c70-62 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-valid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-62">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-62">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-62 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-62"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-62"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-62">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-62 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-62"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-62"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-62">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-62">
                                                                                                <input matinput=""
                                                                                                    placeholder="Enter Insurer E Details"
                                                                                                    formcontrolname="insNaicNoE"
                                                                                                    value=""
                                                                                                    class="mat-input-element mat-form-field-autofill-control mat-autocomplete-trigger ng-tns-c70-62 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                                                                    id="mat-input-18"
                                                                                                    data-placeholder="Enter Insurer E Details"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="false"
                                                                                                    autocomplete="off"
                                                                                                    role="combobox"
                                                                                                    aria-autocomplete="list"
                                                                                                    aria-expanded="false"
                                                                                                    aria-haspopup="listbox">
                                                                                                <mat-autocomplete
                                                                                                    panelwidth="auto"
                                                                                                    class="mat-autocomplete ng-tns-c70-62">
                                                                                                </mat-autocomplete><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-62"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-62">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-62 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-62">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field full-width-text ng-tns-c268-42 ng-tns-c70-63 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-valid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-63">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-63">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-63 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-63"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-63"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-63">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-63 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-63"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-63"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-63">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-63">
                                                                                                <input
                                                                                                    autocomplete="off"
                                                                                                    matinput=""
                                                                                                    formcontrolname="insBestRatingE"
                                                                                                    readonly="true"
                                                                                                    value=""
                                                                                                    class="mat-input-element mat-form-field-autofill-control ng-tns-c70-63 ng-untouched ng-pristine ng-valid cdk-text-field-autofill-monitored"
                                                                                                    id="mat-input-19"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="false"><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-63"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-63">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-63 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-63">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="p-t-b-10 ng-tns-c268-42"><span
                                                        class="agenc_sub_titel ng-tns-c268-42"
                                                        style="float: left;">COVERAGES</span>
                                                    <div style="float: right;" class="ng-tns-c268-42"><span
                                                            style="font-family: Arial; font-size: 12px; font-weight: bold; margin-right: 10px;"
                                                            class="ng-tns-c268-42">Currency</span><span
                                                            style="font-family: Arial; font-size: 12px;"
                                                            class="ng-tns-c268-42"><select formcontrolname="currency"
                                                                id="currency"
                                                                class="drop_box ng-tns-c268-42 ng-untouched ng-pristine ng-valid">
                                                                <option value="CND" class="ng-tns-c268-42">Canadian
                                                                    Dollar</option>
                                                                <option value="MEX" class="ng-tns-c268-42">Mexican
                                                                    Dollar</option>
                                                                <option value="USD" selected="selected"
                                                                    class="ng-tns-c268-42">US
                                                                    Dollar</option>
                                                            </select></span></div>
                                                    <div class="clearfix ng-tns-c268-42"></div>
                                                </div>
                                                <table border="1" width="100%" cellpadding="0" cellspacing="0"
                                                    class="tftable ng-tns-c268-42">
                                                    <tbody class="ng-tns-c268-42">
                                                        <tr class="ng-tns-c268-42">
                                                            <td colspan="7" class="ng-tns-c268-42">
                                                                <div style="font-family: Arial; font-size: 11px; margin: 2px;"
                                                                    class="ng-tns-c268-42"> THE POLICIES OF INSURANCE
                                                                    LISTED BELOW
                                                                    HAVE BEEN ISSUED TO THE INSURED NAMED ABOVE FOR THE
                                                                    POLICY
                                                                    PERIOD INDICATED. NOTWITHSTANDING THIS CERTIFICATE
                                                                    MAY BE ISSUED
                                                                    OR MAY PERTAIN, THE INSURANCE AFFORDED BY THE
                                                                    POLICIES DESCRIBED
                                                                    HEREIN IS SUBJECT TO ALL THE TERMS, EXCLUSIONS AND
                                                                    CONDITIONS OF
                                                                    SUCH POLICIES. AGGREGATE LIMITS SHOWN MAY HAVE BEEN
                                                                    REDUCED BY
                                                                    PAID CLAIMS. </div>
                                                            </td>
                                                        </tr>
                                                        <tr id="scrollToPolicyHeaderTR" class="ng-tns-c268-42">
                                                            <td width="3%" class="lable_title ng-tns-c268-42">INSR LTR
                                                            </td>
                                                            <td width="3%" class="lable_title ng-tns-c268-42">ADDL INSR
                                                            </td>
                                                            <td width="20%" class="lable_title ng-tns-c268-42">
                                                                <div align="center" class="ng-tns-c268-42">TYPE OF
                                                                    INSURANCE</div>
                                                            </td>
                                                            <td width="20%" class="lable_title ng-tns-c268-42">
                                                                <div align="center" class="ng-tns-c268-42">POLICY NUMBER
                                                                </div>
                                                            </td>
                                                            <td width="10%" class="lable_title ng-tns-c268-42">
                                                                <div align="left" class="ng-tns-c268-42">POLICY
                                                                    EFFECTIVE<br class="ng-tns-c268-42">DATE
                                                                    (MM/DD/YYYY)</div>
                                                            </td>
                                                            <td width="10%" class="lable_title ng-tns-c268-42">
                                                                <div align="left" class="ng-tns-c268-42">POLICY
                                                                    EXPIRATION<br class="ng-tns-c268-42">DATE
                                                                    (MM/DD/YYYY)</div>
                                                            </td>
                                                            <td width="28%" class="lable_title ng-tns-c268-42">
                                                                <div align="center" class="ng-tns-c268-42">LIMITS</div>
                                                            </td>
                                                        </tr>
                                                        {{-- this start of  GENERAL LIABILITY --}}
                                                        @foreach ($policytypes as $pt)
                                                        <tr class="ng-tns-c268-42 ng-trigger ng-trigger-slideUpDown ng-star-inserted"
                                                            style="">
                                                            <td colspan="7" class="chkb_lable_title ng-tns-c268-42">
                                                                <mat-checkbox
                                                                    class="mat-checkbox ng-tns-c268-42 mat-accent mat-checkbox-checked"
                                                                    id="mat-checkbox-28">
                                                                      <input class="form-check-input" type="checkbox" value="{{ $pt->id }}"
                                                                    name=""
                                                                    />
                                                                </mat-checkbox> {{$pt->type_name}}
                                                            </td>
                                                        </tr>
                                                        {{-- this start of table  GENERAL LIABILITY --}}
                                                        <tr formgroupname="iaGeneralDetForm" id="GeneralPolicyRow"
                                                            class="ng-tns-c268-42 ng-trigger ng-trigger-slideUpDown ng-untouched ng-pristine ng-invalid ng-star-inserted"
                                                            style="">
                                                            <td align="center" class="ng-tns-c268-42">
                                                                <mat-form-field appearance="outline"
                                                                    class="mat-form-field width-40 input_c_r ng-tns-c268-42 ng-tns-c70-64 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-invalid ng-star-inserted"
                                                                    style="">
                                                                    <div class="mat-form-field-wrapper ng-tns-c70-64">
                                                                        <div class="mat-form-field-flex ng-tns-c70-64">
                                                                            <div
                                                                                class="mat-form-field-outline ng-tns-c70-64 ng-star-inserted">
                                                                                <div class="mat-form-field-outline-start ng-tns-c70-64"
                                                                                    style="width: 0px;"></div>
                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-64"
                                                                                    style="width: 0px;"></div>
                                                                                <div
                                                                                    class="mat-form-field-outline-end ng-tns-c70-64">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-64 ng-star-inserted">
                                                                                <div class="mat-form-field-outline-start ng-tns-c70-64"
                                                                                    style="width: 0px;"></div>
                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-64"
                                                                                    style="width: 0px;"></div>

                                                                            </div>
                                                                            <div
                                                                                class="mat-form-field-infix ng-tns-c70-64">
                                                                                <input autocomplete="off" matinput=""
                                                                                    formcontrolname="insrLtrGL" name="insurance_provider_code[{{ $pt->id }}]"
                                                                                    maxlength="1" minlength="1" value=""
                                                                                    oninput="this.value = this.value.toUpperCase()"
                                                                                    class="mat-input-element mat-form-field-autofill-control ng-tns-c70-64 ng-untouched ng-pristine ng-invalid cdk-text-field-autofill-monitored"
                                                                                    required="" id="mat-input-20"
                                                                                    aria-required="true"><span
                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-64"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-64">
                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-64 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                <div
                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-64">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </mat-form-field>
                                                            </td>
                                                            <td align="center" class="ng-tns-c268-42">
                                                                <mat-form-field appearance="outline"
                                                                    class="mat-form-field width-40 input_c_r ng-tns-c268-42 ng-tns-c70-65 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float mat-form-field-disabled ng-star-inserted"
                                                                    style="">
                                                                    <div class="mat-form-field-wrapper ng-tns-c70-65">
                                                                        <div class="mat-form-field-flex ng-tns-c70-65">
                                                                            <div
                                                                                class="mat-form-field-outline ng-tns-c70-65 ng-star-inserted">
                                                                                <div class="mat-form-field-outline-start ng-tns-c70-65"
                                                                                    style="width: 0px;"></div>
                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-65"
                                                                                    style="width: 0px;"></div>
                                                                                <div
                                                                                    class="mat-form-field-outline-end ng-tns-c70-65">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-65 ng-star-inserted">
                                                                                <div class="mat-form-field-outline-start ng-tns-c70-65"
                                                                                    style="width: 0px;"></div>
                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-65"
                                                                                    style="width: 0px;"></div>
                                                                                <div
                                                                                    class="mat-form-field-outline-end ng-tns-c70-65">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="mat-form-field-infix ng-tns-c70-65">
                                                                                <input autocomplete="off" matinput=""
                                                                                    value="" disabled=""
                                                                                    class="mat-input-element mat-form-field-autofill-control ng-tns-c70-65 cdk-text-field-autofill-monitored"
                                                                                    id="mat-input-21"
                                                                                    aria-invalid="false"
                                                                                    aria-required="false"><span
                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-65"></span>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-65">
                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-65 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                <div
                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-65">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </mat-form-field>
                                                            </td>
                                                            <td valign="top" class="p-0 ng-tns-c268-42">
                                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                                    border="0" class="agenc_sub_table ng-tns-c268-42">
                                                                    <tbody class="ng-tns-c268-42">
                                                                        <tr height="30" class="ng-tns-c268-42">
                                                                            <td colspan="4"
                                                                                class="lable_title ng-tns-c268-42">
                                                                                {{$pt->type_name}}</td>
                                                                        </tr>
                                                                        @foreach ($pt->policies as $pp)
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td class="text-center ng-tns-c268-42">
                                                                                <mat-checkbox
                                                                                    formcontrolname="glLiability"
                                                                                    class="mat-checkbox ng-tns-c268-42 mat-accent ng-untouched ng-pristine ng-valid"
                                                                                    id="mat-checkbox-29">
                                                                                    <input class="form-check-input" type="checkbox" value="{{ $pp->id }}"
                                                                                    name="main_policy_sub[{{ str_replace(' ', '_', $pt->id) }}][{{ $pp->id }}]"
                                                                                    id="{{ $pp->policy_title }}"

                                                                                      @if (isset(  $certPolicy ) )
                                                                                           {{ $certPolicy->where('policy_id', $pp->id)->first() ? 'checked' : '' }}
                                                                                    @endif
                                                                                 />
                                                                                </mat-checkbox>
                                                                            </td>
                                                                            <td colspan="3"
                                                                                class="lable_title_normal ng-tns-c268-42">
                                                                                <span class="ng-tns-c268-42">  {{ $pp->policy_title }}</span></td>
                                                                        </tr>
                                                                        @endforeach

                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td valign="top" class="p-0 ng-tns-c268-42">
                                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                                    border="0" class="agenc_sub_table ng-tns-c268-42">
                                                                    <tbody class="ng-tns-c268-42">
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td align="center" class="ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field input_c_r w-95p ng-tns-c268-42 ng-tns-c70-67 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-invalid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-67">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-67">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-67 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-67"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-67"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-67">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-67 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-67"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-67"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-67">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-67">
                                                                                                <input
                                                                                                    autocomplete="off"
                                                                                                    matinput=""
                                                                                                    formcontrolname="policyNumberGL"
                                                                                                    maxlength="20" name="main_policy_polnum[{{ $pt->id }}]"
                                                                                                    value="@if (isset(  $certPolicy ) ) {{ $certPolicy->where('policy_type_id', $pt->id)->first()->policy_number }} @endif"
                                                                                                    oninput="this.value = this.value.toUpperCase()"
                                                                                                    class="mat-input-element mat-form-field-autofill-control ng-tns-c70-67 ng-untouched ng-pristine ng-invalid cdk-text-field-autofill-monitored"
                                                                                                    required=""
                                                                                                    id="mat-input-23"
                                                                                                    aria-required="true"><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-67"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-67">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-67 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-67">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td
                                                                                class="lable_title_large ng-tns-c268-42">
                                                                                <div style="margin-top: 5px; margin-bottom: 5px; padding-left: 5px;"
                                                                                    class="ng-tns-c268-42"> Is This
                                                                                    Policy Through A
                                                                                    Risk Retention Insurance
                                                                                    Company?&nbsp; </div>
                                                                                <mat-slide-toggle
                                                                                    formcontrolname="rrgFlagGL"
                                                                                    class="mat-slide-toggle ng-tns-c268-42 mat-accent ng-untouched ng-pristine ng-valid"
                                                                                    id="mat-slide-toggle-10"><label
                                                                                        class="mat-slide-toggle-label"
                                                                                        for="mat-slide-toggle-10-input"><span
                                                                                            class="mat-slide-toggle-bar"><input
                                                                                                type="checkbox"
                                                                                                role="switch"
                                                                                                class="mat-slide-toggle-input cdk-visually-hidden"
                                                                                                id="mat-slide-toggle-10-input"
                                                                                                tabindex="0"
                                                                                                aria-checked="false"><span
                                                                                                class="mat-slide-toggle-thumb-container"><span
                                                                                                    class="mat-slide-toggle-thumb"></span><span
                                                                                                    mat-ripple=""
                                                                                                    class="mat-ripple mat-slide-toggle-ripple mat-focus-indicator"><span
                                                                                                        class="mat-ripple-element mat-slide-toggle-persistent-ripple"></span></span></span></span><span
                                                                                            class="mat-slide-toggle-content"><span
                                                                                                style="display: none;">&nbsp;</span>No</span></label>
                                                                                </mat-slide-toggle>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                            <td valign="middle" align="center" class="ng-tns-c268-42">
                                                                <mat-form-field appearance="outline"
                                                                    class="mat-form-field input_c_r w-120 ng-tns-c268-42 ng-tns-c70-68 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-invalid ng-star-inserted"
                                                                    style="">
                                                                    <div class="mat-form-field-wrapper ng-tns-c70-68">
                                                                        <div class="mat-form-field-flex ng-tns-c70-68">
                                                                            <div
                                                                                class="mat-form-field-outline ng-tns-c70-68 ng-star-inserted">
                                                                                <div class="mat-form-field-outline-start ng-tns-c70-68"
                                                                                    style="width: 0px;"></div>
                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-68"
                                                                                    style="width: 0px;"></div>
                                                                                <div
                                                                                    class="mat-form-field-outline-end ng-tns-c70-68">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-68 ng-star-inserted">
                                                                                <div class="mat-form-field-outline-start ng-tns-c70-68"
                                                                                    style="width: 0px;"></div>
                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-68"
                                                                                    style="width: 0px;"></div>
                                                                                <div
                                                                                    class="mat-form-field-outline-end ng-tns-c70-68">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="mat-form-field-infix ng-tns-c70-68">
                                                                                <input
                                                                                @if ($r==1)
                                                                                type="text"
                                                                                @else
                                                                                type="date"
                                                                                @endif

                                                                                   name="main_policy_eff_date[{{ $pt->id }}]"
                                                                                    class="mat-input-element mat-form-field-autofill-control mat-datepicker-input l_h_23 ng-tns-c70-68 ng-untouched ng-pristine ng-invalid cdk-text-field-autofill-monitored"
                                                                                    value="@if(isset($certPolicy)){{date('Y-m-d', strtotime($certPolicy->where('policy_type_id', $pt->id)->first()->start_date))}}@endif"
                                                                                 >
                                                                                <mat-datepicker class="ng-tns-c70-68">
                                                                                </mat-datepicker><span
                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-68"></span>
                                                                            </div>
                                                                            <div
                                                                                class="mat-form-field-suffix ng-tns-c70-68 ng-star-inserted">
                                                                                <mat-datepicker-toggle matsuffix=""
                                                                                    class="mat-datepicker-toggle ng-tns-c70-68"
                                                                                    data-mat-calendar="mat-datepicker-1">
                                                                                    <button mat-icon-button=""
                                                                                        type="button"
                                                                                        class="mat-focus-indicator mat-icon-button mat-button-base"
                                                                                        aria-haspopup="dialog"
                                                                                        aria-label="Open calendar"
                                                                                        tabindex="0"><span
                                                                                            matripple=""
                                                                                            class="mat-ripple mat-button-ripple mat-button-ripple-round"></span><span
                                                                                            class="mat-button-focus-overlay"></span></button>
                                                                                </mat-datepicker-toggle>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-68">
                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-68 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                <div
                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-68">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </mat-form-field>
                                                            </td>
                                                            <td valign="middle" align="center" class="ng-tns-c268-42">
                                                                <mat-form-field appearance="outline"
                                                                    class="mat-form-field input_c_r w-120 ng-tns-c268-42 ng-tns-c70-69 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float ng-untouched ng-pristine ng-invalid ng-star-inserted"
                                                                    style="">
                                                                    <div class="mat-form-field-wrapper ng-tns-c70-69">
                                                                        <div class="mat-form-field-flex ng-tns-c70-69">
                                                                            <div
                                                                                class="mat-form-field-outline ng-tns-c70-69 ng-star-inserted">
                                                                                <div class="mat-form-field-outline-start ng-tns-c70-69"
                                                                                    style="width: 0px;"></div>
                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-69"
                                                                                    style="width: 0px;"></div>
                                                                                <div
                                                                                    class="mat-form-field-outline-end ng-tns-c70-69">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-69 ng-star-inserted">
                                                                                <div class="mat-form-field-outline-start ng-tns-c70-69"
                                                                                    style="width: 0px;"></div>
                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-69"
                                                                                    style="width: 0px;"></div>
                                                                                <div
                                                                                    class="mat-form-field-outline-end ng-tns-c70-69">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="mat-form-field-infix ng-tns-c70-69">
                                                                                <input  @if ($r==1)
                                                                                type="text"
                                                                                @else
                                                                                type="date"
                                                                                @endif
                                                                                     name="main_policy_exp_date[{{ $pt->id }}]"
                                                                                    class="mat-input-element mat-form-field-autofill-control mat-datepicker-input l_h_23 ng-tns-c70-69 ng-untouched ng-pristine ng-invalid cdk-text-field-autofill-monitored"
                                                                                    value="@if(isset($certPolicy)){{date('Y-m-d', strtotime($certPolicy->where('policy_type_id', $pt->id)->first()->expiry_date))}}@endif"
                                                                                    >
                                                                                <mat-datepicker class="ng-tns-c70-69">
                                                                                </mat-datepicker><span
                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-69"></span>
                                                                            </div>
                                                                            <div
                                                                                class="mat-form-field-suffix ng-tns-c70-69 ng-star-inserted">
                                                                                <mat-datepicker-toggle matsuffix=""
                                                                                    class="mat-datepicker-toggle ng-tns-c70-69"
                                                                                    data-mat-calendar="mat-datepicker-2">
                                                                                    <button mat-icon-button=""
                                                                                        type="button"
                                                                                        class="mat-focus-indicator mat-icon-button mat-button-base"
                                                                                        aria-haspopup="dialog"
                                                                                        aria-label="Open calendar"
                                                                                        tabindex="0"><span
                                                                                            matripple=""
                                                                                            class="mat-ripple mat-button-ripple mat-button-ripple-round"></span><span
                                                                                            class="mat-button-focus-overlay"></span></button>
                                                                                </mat-datepicker-toggle>
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-69">
                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-69 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                <div
                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-69">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </mat-form-field>
                                                            </td>
                                                            <td valign="top" class="p-0 ng-tns-c268-42">
                                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                                    border="0" class="agenc_sub_table ng-tns-c268-42">
                                                                    <tbody class="ng-tns-c268-42">
                                                                        @foreach ($pt->policyLimits as $pl)
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td width="50%"
                                                                                class="lable_title_normal ng-tns-c268-42">
                                                                                {{ $pl->coverage_item }}</td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <mat-form-field appearance="outline"
                                                                                    class="mat-form-field dolinpu input_c_r ng-tns-c268-42 ng-tns-c70-70 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float mat-form-field-should-float ng-untouched ng-pristine ng-valid ng-star-inserted"
                                                                                    style="">
                                                                                    <div
                                                                                        class="mat-form-field-wrapper ng-tns-c70-70">
                                                                                        <div
                                                                                            class="mat-form-field-flex ng-tns-c70-70">
                                                                                            <div
                                                                                                class="mat-form-field-outline ng-tns-c70-70 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-70"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-70"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-70">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c70-70 ng-star-inserted">
                                                                                                <div class="mat-form-field-outline-start ng-tns-c70-70"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div class="mat-form-field-outline-gap ng-tns-c70-70"
                                                                                                    style="width: 0px;">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="mat-form-field-outline-end ng-tns-c70-70">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-prefix ng-tns-c70-70 ng-star-inserted">
                                                                                                <span matprefix=""
                                                                                                    class="ng-tns-c70-70">$&nbsp;</span>
                                                                                            </div>
                                                                                            <div
                                                                                                class="mat-form-field-infix ng-tns-c70-70">
                                                                                                <input type="text" class="form-control" id="{{ $pl->coverage_item }}"
                                     name="main_policy_coverage[{{ str_replace(' ', '_', $pt->id) }}][{{ $pl->id }}]"
                                     placeholder=""
                                     value="@if(isset($certPolimit)){{$certPolimit->where('policy_limit_id', $pl->id)->first()->amount??0}}@endif"
                                                                                                    aria-invalid="false"
                                                                                                    aria-required="true"><span
                                                                                                    class="mat-form-field-label-wrapper ng-tns-c70-70"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="mat-form-field-subscript-wrapper ng-tns-c70-70">
                                                                                            <div class="mat-form-field-hint-wrapper ng-tns-c70-70 ng-trigger ng-trigger-transitionMessages ng-star-inserted"
                                                                                                style="opacity: 1; transform: translateY(0%);">
                                                                                                <div
                                                                                                    class="mat-form-field-hint-spacer ng-tns-c70-70">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </mat-form-field>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach

                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>

                                                        @endforeach














                                                        <tr class="ng-tns-c268-42">
                                                            <td colspan="7" style="padding: 10px;"
                                                                class="ng-tns-c268-42">
                                                                <div style="font-size: 11px;" class="ng-tns-c268-42">
                                                                    DESCRIPTION OF
                                                                    OPERATIONS / VEHICLES / EXCLUSIONS ADDED BY
                                                                    ENDORSEMENT /
                                                                    SPECIAL PROVISIONS (Attach <a
                                                                        href="javascript:void(0);" id="acordBox"
                                                                        class="ng-tns-c268-42">ACORD 101</a>,
                                                                    Additional Remarks Schedule, if more space is
                                                                    required) </div>
                                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                                    border="0" class="ng-tns-c268-42">
                                                                    <tbody class="ng-tns-c268-42">
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td align="center" valign="middle"
                                                                                formgroupname="autoDetForm"
                                                                                class="age_checkbox ng-tns-c268-42 ng-untouched ng-pristine ng-invalid">
                                                                                <mat-checkbox
                                                                                    formcontrolname="stdEndorse"
                                                                                    class="mat-checkbox ng-tns-c268-42 mat-accent ng-untouched ng-pristine ng-valid"
                                                                                    id="mat-checkbox-16"><label
                                                                                        class="mat-checkbox-layout"
                                                                                        for="mat-checkbox-16-input"><span
                                                                                            class="mat-checkbox-inner-container mat-checkbox-inner-container-no-side-margin"><input
                                                                                                type="checkbox"
                                                                                                class="mat-checkbox-input cdk-visually-hidden"
                                                                                                id="mat-checkbox-16-input"
                                                                                                tabindex="0"
                                                                                                aria-checked="false"><span
                                                                                                matripple=""
                                                                                                class="mat-ripple mat-checkbox-ripple mat-focus-indicator"><span
                                                                                                    class="mat-ripple-element mat-checkbox-persistent-ripple"></span></span><span
                                                                                                class="mat-checkbox-frame"></span><span
                                                                                                class="mat-checkbox-background"><svg
                                                                                                    version="1.1"
                                                                                                    focusable="false"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    aria-hidden="true"
                                                                                                    class="mat-checkbox-checkmark">
                                                                                                    <path fill="none"
                                                                                                        stroke="white"
                                                                                                        d="M4.1,12.7 9,17.6 20.3,6.3"
                                                                                                        class="mat-checkbox-checkmark-path">
                                                                                                    </path>
                                                                                                </svg><span
                                                                                                    class="mat-checkbox-mixedmark"></span></span></span><span
                                                                                            class="mat-checkbox-label"><span
                                                                                                style="display: none;">&nbsp;</span></span></label>
                                                                                </mat-checkbox>
                                                                            </td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <div class="age_text ng-tns-c268-42">
                                                                                    The Truckers
                                                                                    Uniform Intermodal Interchange
                                                                                    Endorsement (Form
                                                                                    <a href="javascript:void(0);"
                                                                                        class="ng-tns-c268-42">UIIE-1</a>
                                                                                    or <a href="javascript:void(0);"
                                                                                        class="ng-tns-c268-42">CA
                                                                                        23-17</a>
                                                                                    equivalent) is part of the auto
                                                                                    policy(ies).
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td align="center" valign="middle"
                                                                                class="age_checkbox ng-tns-c268-42">
                                                                                <mat-checkbox formcontrolname="gltiFlag"
                                                                                    class="mat-checkbox ng-tns-c268-42 mat-accent ng-untouched ng-pristine ng-valid"
                                                                                    id="mat-checkbox-17"><label
                                                                                        class="mat-checkbox-layout"
                                                                                        for="mat-checkbox-17-input"><span
                                                                                            class="mat-checkbox-inner-container mat-checkbox-inner-container-no-side-margin"><input
                                                                                                type="checkbox"
                                                                                                class="mat-checkbox-input cdk-visually-hidden"
                                                                                                id="mat-checkbox-17-input"
                                                                                                tabindex="0"
                                                                                                aria-checked="false"><span
                                                                                                matripple=""
                                                                                                class="mat-ripple mat-checkbox-ripple mat-focus-indicator"><span
                                                                                                    class="mat-ripple-element mat-checkbox-persistent-ripple"></span></span><span
                                                                                                class="mat-checkbox-frame"></span><span
                                                                                                class="mat-checkbox-background"><svg
                                                                                                    version="1.1"
                                                                                                    focusable="false"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    aria-hidden="true"
                                                                                                    class="mat-checkbox-checkmark">
                                                                                                    <path fill="none"
                                                                                                        stroke="white"
                                                                                                        d="M4.1,12.7 9,17.6 20.3,6.3"
                                                                                                        class="mat-checkbox-checkmark-path">
                                                                                                    </path>
                                                                                                </svg><span
                                                                                                    class="mat-checkbox-mixedmark"></span></span></span><span
                                                                                            class="mat-checkbox-label"><span
                                                                                                style="display: none;">&nbsp;</span></span></label>
                                                                                </mat-checkbox>
                                                                            </td>
                                                                            <td class="ng-tns-c268-42">
                                                                                <div class="age_text ng-tns-c268-42">
                                                                                    Below list of
                                                                                    providers are additional insureds in
                                                                                    regards to
                                                                                    the auto liability. Those providers
                                                                                    with (*) are
                                                                                    additional insureds on the general
                                                                                    liability and
                                                                                    those with (**) are additional
                                                                                    insureds on
                                                                                    trailer interchange coverage. </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <table width="100%" cellpadding="0" cellspacing="0" border="0"
                                                    style="margin-top: 9px;" class="ng-tns-c268-42">
                                                    <tbody class="ng-tns-c268-42">
                                                        <tr class="ng-tns-c268-42">
                                                            <td style="width: 50%; font-size: 15px; font-weight: bold;"
                                                                class="ng-tns-c268-42">CERTIFICATE HOLDER</td>
                                                            <td style="width: 50%; font-size: 15px; font-weight: bold;"
                                                                class="ng-tns-c268-42">CANCELLATION</td>
                                                        </tr>
                                                        <tr class="ng-tns-c268-42">
                                                            <td valign="top" colspan="2" class="p-0 ng-tns-c268-42">
                                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                                    border="0" class="tftable m-t-b-10 ng-tns-c268-42">
                                                                    <tbody class="ng-tns-c268-42">
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td rowspan="2" width="50%"
                                                                                class="ct_holder ng-tns-c268-42">
                                                                                President <br class="ng-tns-c268-42">
                                                                                The Intermodal
                                                                                Association of North America <br
                                                                                    class="ng-tns-c268-42"> 11785
                                                                                Beltsville Drive
                                                                                <br class="ng-tns-c268-42"> Suite
                                                                                1100<br class="ng-tns-c268-42">
                                                                                Calverton, MD
                                                                                20705-4048<br class="ng-tns-c268-42">
                                                                            </td>
                                                                            <td class="fot_titel ng-tns-c268-42"> SHOULD
                                                                                ANY OF THE
                                                                                ABOVE DESCRIBED POLICIES BE CANCELLED
                                                                                BEFORE THE
                                                                                EXPIRATION DATE THEREOF, NOTICE WILL BE
                                                                                DELIVERED IN
                                                                                ACCORDANCE WITH THE POLICY PROVISIONS.
                                                                            </td>
                                                                        </tr>
                                                                        <tr class="ng-tns-c268-42">
                                                                            <td class="fot_titel ng-tns-c268-42">
                                                                                AUTHORIZED
                                                                                REPRESENTATIVE <textarea cols="38"
                                                                                    rows="3" readonly="readonly"
                                                                                    style="vertical-align: middle; margin-left: 10px;"
                                                                                    class="ng-tns-c268-42"></textarea>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="rights_reserved ng-tns-c268-42">2006 -2024 ACORD CORPORATION. All rights
                                    reserved.</div>
                            </div>
                            <div fxlayout="row" fxlayoutalign="center center" class="acord-button-row ng-tns-c268-42"
                                style="flex-direction: row; box-sizing: border-box; display: flex; place-content: center; align-items: center;">
                                <button mat-flat-button="" color="accent" id="btn"  type="submit"
                                    class="mat-focus-indicator action-buttion ng-tns-c268-42 mat-flat-button mat-button-base mat-accent">

                                    <span
                                        class="mat-button-wrapper"> Update
                                        </span><span matripple="" class="mat-ripple mat-button-ripple"></span><span
                                        class="mat-button-focus-overlay"></span></button>

                                        <a mat-flat-button="" href="{{ route('formlist') }}"
                                    color="warn"
                                    class="mat-focus-indicator action-buttion ng-tns-c268-42 mat-flat-button mat-button-base mat-warn"><span
                                        class="mat-button-wrapper">
                               Close
                                    </span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</form>
@include('agent.agent-script')

@endsection
