<?php

declare(strict_types=1);

namespace Infrastructure\Shared\Symfony\Twig;

use OutOfBoundsException;

/**
 * Class Icon.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
class Icon
{
    /**
     * Using a key => index to use O(1) search algorithm.
     *
     * @see https://stackoverflow.com/questions/2473989/list-of-big-o-for-php-functions
     */
    public const ICONS = [
        'centos' => 'centos',
        'covid' => 'covid',
        'fedora' => 'fedora',
        'hot-fill' => 'hot-fill',
        'hot' => 'hot',
        'linux-server' => 'linux-server',
        'linux' => 'linux',
        'note-add-fill' => 'note-add-fill',
        'repeat-fill' => 'repeat-fill',
        'tranx-fill' => 'tranx-fill',
        'ubuntu' => 'ubuntu',
        'virus' => 'virus',
        'b-chrome' => 'b-chrome',
        'b-edge' => 'b-edge',
        'b-firefox' => 'b-firefox',
        'b-ie' => 'b-ie',
        'b-opera' => 'b-opera',
        'b-safari' => 'b-safari',
        'b-si' => 'b-si',
        'b-uc' => 'b-uc',
        'brick-fill' => 'brick-fill',
        'brick' => 'brick',
        'col-3s' => 'col-3s',
        'col-4s' => 'col-4s',
        'col-2s' => 'col-2s',
        'comments' => 'comments',
        'dot-sq' => 'dot-sq',
        'dot' => 'dot',
        'footer' => 'footer',
        'header' => 'header',
        'heading' => 'heading',
        'layout-alt-fill' => 'layout-alt-fill',
        'layout-alt' => 'layout-alt',
        'layout-fill1' => 'layout-fill1',
        'layout1' => 'layout1',
        'list-index-fill' => 'list-index-fill',
        'list-index' => 'list-index',
        'list-thumb-alt-fill' => 'list-thumb-alt-fill',
        'list-thumb-alt' => 'list-thumb-alt',
        'list-thumb-fill' => 'list-thumb-fill',
        'list-thumb' => 'list-thumb',
        'masonry-fill' => 'masonry-fill',
        'masonry' => 'masonry',
        'menu-circled' => 'menu-circled',
        'menu-squared' => 'menu-squared',
        'notice' => 'notice',
        'pen2' => 'pen2',
        'property-blank' => 'property-blank',
        'property-add' => 'property-add',
        'property-alt' => 'property-alt',
        'property-remove' => 'property-remove',
        'property' => 'property',
        'puzzle-fill' => 'puzzle-fill',
        'puzzle' => 'puzzle',
        'quote-left' => 'quote-left',
        'quote-right' => 'quote-right',
        'row-mix' => 'row-mix',
        'row-view1' => 'row-view1',
        'sidebar-r' => 'sidebar-r',
        'text2' => 'text2',
        'tile-thumb-fill' => 'tile-thumb-fill',
        'tile-thumb' => 'tile-thumb',
        'view-col-fill' => 'view-col-fill',
        'view-col-sq' => 'view-col-sq',
        'view-col' => 'view-col',
        'view-col2' => 'view-col2',
        'view-col3' => 'view-col3',
        'view-cols-fill' => 'view-cols-fill',
        'view-cols-sq' => 'view-cols-sq',
        'view-cols' => 'view-cols',
        'view-grid-fill' => 'view-grid-fill',
        'view-grid-sq' => 'view-grid-sq',
        'view-grid-wd' => 'view-grid-wd',
        'view-grid' => 'view-grid',
        'view-grid2-wd' => 'view-grid2-wd',
        'view-grid3-wd' => 'view-grid3-wd',
        'view-group-fill' => 'view-group-fill',
        'view-group-wd' => 'view-group-wd',
        'view-list-fill' => 'view-list-fill',
        'view-list-sq' => 'view-list-sq',
        'view-list-wd' => 'view-list-wd',
        'view-list' => 'view-list',
        'view-panel-fill' => 'view-panel-fill',
        'view-panel-sq' => 'view-panel-sq',
        'view-panel' => 'view-panel',
        'view-row-fill' => 'view-row-fill',
        'view-row-sq' => 'view-row-sq',
        'view-row-wd' => 'view-row-wd',
        'view-row' => 'view-row',
        'view-x1' => 'view-x1',
        'view-x2' => 'view-x2',
        'view-x3' => 'view-x3',
        'view-x4' => 'view-x4',
        'view-x5' => 'view-x5',
        'view-x6' => 'view-x6',
        'view-x7' => 'view-x7',
        'dashlite' => 'dashlite',
        'dashlite-circle' => 'dashlite-circle',
        'dashlite-alt' => 'dashlite-alt',
        'master-card' => 'master-card',
        'paypal' => 'paypal',
        'visa-alt' => 'visa-alt',
        'coin-eur' => 'coin-eur',
        'coin-gbp' => 'coin-gbp',
        'sign-ada-alt' => 'sign-ada-alt',
        'sign-bch-alt' => 'sign-bch-alt',
        'sign-bgp-alt' => 'sign-bgp-alt',
        'sign-bnb-alt' => 'sign-bnb-alt',
        'sign-brl-alt' => 'sign-brl-alt',
        'sign-btc-alt' => 'sign-btc-alt',
        'sign-cc-alt' => 'sign-cc-alt',
        'sign-cc-alt2' => 'sign-cc-alt2',
        'sign-chf-alt' => 'sign-chf-alt',
        'sign-cny-alt' => 'sign-cny-alt',
        'sign-czk-alt' => 'sign-czk-alt',
        'sign-dash-alt' => 'sign-dash-alt',
        'sign-dkk-alt' => 'sign-dkk-alt',
        'sign-eos-alt' => 'sign-eos-alt',
        'sign-eth-alt' => 'sign-eth-alt',
        'sign-eur-alt2' => 'sign-eur-alt2',
        'sign-euro-alt' => 'sign-euro-alt',
        'sign-gbp-alt2' => 'sign-gbp-alt2',
        'sign-hkd-alt' => 'sign-hkd-alt',
        'sign-idr-alt' => 'sign-idr-alt',
        'sign-inr-alt' => 'sign-inr-alt',
        'sign-jpy-alt' => 'sign-jpy-alt',
        'sign-kr-alt' => 'sign-kr-alt',
        'sign-ltc-alt' => 'sign-ltc-alt',
        'sign-ltc' => 'sign-ltc',
        'sign-mxn-alt' => 'sign-mxn-alt',
        'sign-mxr-alt' => 'sign-mxr-alt',
        'sign-myr-alt' => 'sign-myr-alt',
        'sign-paypal-alt' => 'sign-paypal-alt',
        'sign-paypal-full' => 'sign-paypal-full',
        'sign-php-alt' => 'sign-php-alt',
        'sign-pln-alt' => 'sign-pln-alt',
        'sign-rub-alt' => 'sign-rub-alt',
        'sign-sek-alt' => 'sign-sek-alt',
        'sign-sgd-alt' => 'sign-sgd-alt',
        'sign-kobo-alt' => 'sign-kobo-alt',
        'sign-steem-alt' => 'sign-steem-alt',
        'sign-steller-alt' => 'sign-steller-alt',
        'sign-stripe-fulll' => 'sign-stripe-fulll',
        'sign-thb-alt' => 'sign-thb-alt',
        'sign-trx-alt' => 'sign-trx-alt',
        'sign-try-alt' => 'sign-try-alt',
        'sign-usd-alt' => 'sign-usd-alt',
        'sign-usd-alt2' => 'sign-usd-alt2',
        'sign-usdc-alt' => 'sign-usdc-alt',
        'sign-usdt-alt' => 'sign-usdt-alt',
        'sign-visa-alt' => 'sign-visa-alt',
        'sign-vnd-alt' => 'sign-vnd-alt',
        'sign-waves-alt' => 'sign-waves-alt',
        'sign-xem-alt' => 'sign-xem-alt',
        'sign-xrp-new-alt' => 'sign-xrp-new-alt',
        'sign-xrp-old-alt' => 'sign-xrp-old-alt',
        'sign-zcash-alt' => 'sign-zcash-alt',
        'chevron-left' => 'chevron-left',
        'chevron-right' => 'chevron-right',
        'chevron-up' => 'chevron-up',
        'chevron-down' => 'chevron-down',
        'chevron-left-round' => 'chevron-left-round',
        'chevron-right-round' => 'chevron-right-round',
        'chevron-up-round' => 'chevron-up-round',
        'chevron-down-round' => 'chevron-down-round',
        'chevron-left-round-fill' => 'chevron-left-round-fill',
        'chevron-right-round-fill' => 'chevron-right-round-fill',
        'chevron-up-round-fill' => 'chevron-up-round-fill',
        'chevron-down-round-fill' => 'chevron-down-round-fill',
        'chevron-left-c' => 'chevron-left-c',
        'chevron-right-c' => 'chevron-right-c',
        'chevron-up-c' => 'chevron-up-c',
        'chevron-down-c' => 'chevron-down-c',
        'chevron-left-fill-c' => 'chevron-left-fill-c',
        'chevron-right-fill-c' => 'chevron-right-fill-c',
        'chevron-up-fill-c' => 'chevron-up-fill-c',
        'chevron-down-fill-c' => 'chevron-down-fill-c',
        'chevron-left-circle' => 'chevron-left-circle',
        'chevron-right-circle' => 'chevron-right-circle',
        'chevron-up-circle' => 'chevron-up-circle',
        'chevron-down-circle' => 'chevron-down-circle',
        'chevron-left-circle-fill' => 'chevron-left-circle-fill',
        'chevron-right-circle-fill' => 'chevron-right-circle-fill',
        'chevron-up-circle-fill' => 'chevron-up-circle-fill',
        'chevron-down-circle-fill' => 'chevron-down-circle-fill',
        'caret-left' => 'caret-left',
        'caret-right' => 'caret-right',
        'caret-up' => 'caret-up',
        'caret-down' => 'caret-down',
        'caret-left-fill' => 'caret-left-fill',
        'caret-right-fill' => 'caret-right-fill',
        'caret-up-fill' => 'caret-up-fill',
        'caret-down-fill' => 'caret-down-fill',
        'sort' => 'sort',
        'sort-up' => 'sort-up',
        'sort-down' => 'sort-down',
        'sort-fill' => 'sort-fill',
        'sort-up-fill' => 'sort-up-fill',
        'sort-down-fill' => 'sort-down-fill',
        'sort-v' => 'sort-v',
        'swap-v' => 'swap-v',
        'swap' => 'swap',
        'arrow-left-round' => 'arrow-left-round',
        'arrow-right-round' => 'arrow-right-round',
        'arrow-up-round' => 'arrow-up-round',
        'arrow-down-round' => 'arrow-down-round',
        'arrow-left-round-fill' => 'arrow-left-round-fill',
        'arrow-right-round-fill' => 'arrow-right-round-fill',
        'arrow-up-round-fill' => 'arrow-up-round-fill',
        'arrow-down-round-fill' => 'arrow-down-round-fill',
        'arrow-left-c' => 'arrow-left-c',
        'arrow-right-c' => 'arrow-right-c',
        'arrow-up-c' => 'arrow-up-c',
        'arrow-down-c' => 'arrow-down-c',
        'arrow-left-fill-c' => 'arrow-left-fill-c',
        'arrow-right-fill-c' => 'arrow-right-fill-c',
        'arrow-up-fill-c' => 'arrow-up-fill-c',
        'arrow-down-fill-c' => 'arrow-down-fill-c',
        'arrow-left-circle' => 'arrow-left-circle',
        'arrow-right-circle' => 'arrow-right-circle',
        'arrow-up-circle' => 'arrow-up-circle',
        'arrow-down-circle' => 'arrow-down-circle',
        'arrow-left-circle-fill' => 'arrow-left-circle-fill',
        'arrow-up-circle-fill' => 'arrow-up-circle-fill',
        'arrow-down-circle-fill' => 'arrow-down-circle-fill',
        'arrow-right-circle-fill' => 'arrow-right-circle-fill',
        'chevrons-left' => 'chevrons-left',
        'chevrons-right' => 'chevrons-right',
        'chevrons-up' => 'chevrons-up',
        'chevrons-down' => 'chevrons-down',
        'first' => 'first',
        'last' => 'last',
        'back-ios' => 'back-ios',
        'forward-ios' => 'forward-ios',
        'upword-ios' => 'upword-ios',
        'downward-ios' => 'downward-ios',
        'back-alt' => 'back-alt',
        'forward-alt' => 'forward-alt',
        'upword-alt' => 'upword-alt',
        'downward-alt' => 'downward-alt',
        'back-alt-fill' => 'back-alt-fill',
        'forward-alt-fill' => 'forward-alt-fill',
        'upword-alt-fill' => 'upword-alt-fill',
        'downward-alt-fill' => 'downward-alt-fill',
        'arrow-long-left' => 'arrow-long-left',
        'arrow-long-right' => 'arrow-long-right',
        'arrow-long-up' => 'arrow-long-up',
        'arrow-long-down' => 'arrow-long-down',
        'arrow-left' => 'arrow-left',
        'arrow-right' => 'arrow-right',
        'arrow-up' => 'arrow-up',
        'arrow-down' => 'arrow-down',
        'arrow-up-left' => 'arrow-up-left',
        'arrow-up-right' => 'arrow-up-right',
        'arrow-down-left' => 'arrow-down-left',
        'arrow-down-right' => 'arrow-down-right',
        'arrow-to-left' => 'arrow-to-left',
        'arrow-to-right' => 'arrow-to-right',
        'arrow-to-up' => 'arrow-to-up',
        'arrow-to-down' => 'arrow-to-down',
        'arrow-from-left' => 'arrow-from-left',
        'arrow-from-right' => 'arrow-from-right',
        'arrow-from-up' => 'arrow-from-up',
        'arrow-from-down' => 'arrow-from-down',
        'curve-down-left' => 'curve-down-left',
        'curve-up-right' => 'curve-up-right',
        'curve-up-left' => 'curve-up-left',
        'curve-down-right' => 'curve-down-right',
        'curve-left-up' => 'curve-left-up',
        'curve-right-up' => 'curve-right-up',
        'curve-left-down' => 'curve-left-down',
        'curve-right-down' => 'curve-right-down',
        'back-arrow' => 'back-arrow',
        'forward-arrow' => 'forward-arrow',
        'back-arrow-fill' => 'back-arrow-fill',
        'forward-arrow-fill' => 'forward-arrow-fill',
        'navigate' => 'navigate',
        'navigate-up' => 'navigate-up',
        'navigate-fill' => 'navigate-fill',
        'navigate-up-fill' => 'navigate-up-fill',
        'send' => 'send',
        'send-alt' => 'send-alt',
        'unfold-less' => 'unfold-less',
        'unfold-more' => 'unfold-more',
        'exchange-v' => 'exchange-v',
        'exchange' => 'exchange',
        'expand' => 'expand',
        'shrink' => 'shrink',
        'focus' => 'focus',
        'maximize' => 'maximize',
        'minimize' => 'minimize',
        'maximize-alt' => 'maximize-alt',
        'minimize-alt' => 'minimize-alt',
        'shuffle' => 'shuffle',
        'cross-sm' => 'cross-sm',
        'cross' => 'cross',
        'cross-round' => 'cross-round',
        'cross-circle' => 'cross-circle',
        'cross-c' => 'cross-c',
        'cross-round-fill' => 'cross-round-fill',
        'cross-circle-fill' => 'cross-circle-fill',
        'cross-fill-c' => 'cross-fill-c',
        'na' => 'na',
        'check' => 'check',
        'check-thick' => 'check-thick',
        'done' => 'done',
        'check-round' => 'check-round',
        'check-circle' => 'check-circle',
        'check-c' => 'check-c',
        'check-round-fill' => 'check-round-fill',
        'check-circle-fill' => 'check-circle-fill',
        'check-fill-c' => 'check-fill-c',
        'check-circle-cut' => 'check-circle-cut',
        'check-round-cut' => 'check-round-cut',
        'bullet' => 'bullet',
        'circle' => 'circle',
        'square' => 'square',
        'square-c' => 'square-c',
        'bullet-fill' => 'bullet-fill',
        'circle-fill' => 'circle-fill',
        'square-fill' => 'square-fill',
        'square-fill-c' => 'square-fill-c',
        'plus-sm' => 'plus-sm',
        'minus-sm' => 'minus-sm',
        'plus' => 'plus',
        'minus' => 'minus',
        'plus-round' => 'plus-round',
        'minus-round' => 'minus-round',
        'plus-circle' => 'plus-circle',
        'minus-circle' => 'minus-circle',
        'plus-c' => 'plus-c',
        'minus-c' => 'minus-c',
        'plus-round-fill' => 'plus-round-fill',
        'plus-circle-fill' => 'plus-circle-fill',
        'minus-round-fill' => 'minus-round-fill',
        'minus-circle-fill' => 'minus-circle-fill',
        'plus-fill-c' => 'plus-fill-c',
        'minus-fill-c' => 'minus-fill-c',
        'plus-medi' => 'plus-medi',
        'plus-medi-fill' => 'plus-medi-fill',
        'equal-sm' => 'equal-sm',
        'equal' => 'equal',
        'calc' => 'calc',
        'search' => 'search',
        'zoom-out' => 'zoom-out',
        'zoom-in' => 'zoom-in',
        'play' => 'play',
        'play-fill' => 'play-fill',
        'play-circle' => 'play-circle',
        'play-circle-fill' => 'play-circle-fill',
        'pause' => 'pause',
        'pause-fill' => 'pause-fill',
        'pause-circle' => 'pause-circle',
        'pause-circle-fill' => 'pause-circle-fill',
        'stop' => 'stop',
        'stop-fill' => 'stop-fill',
        'stop-circle' => 'stop-circle',
        'stop-circle-fill' => 'stop-circle-fill',
        'rewind' => 'rewind',
        'forward' => 'forward',
        'rewind-fill' => 'rewind-fill',
        'forward-fill' => 'forward-fill',
        'step-back' => 'step-back',
        'step-forward' => 'step-forward',
        'vol-off' => 'vol-off',
        'vol-no' => 'vol-no',
        'vol-half' => 'vol-half',
        'vol' => 'vol',
        'mic' => 'mic',
        'mic-off' => 'mic-off',
        'video' => 'video',
        'video-off' => 'video-off',
        'video-fill' => 'video-fill',
        'loader' => 'loader',
        'power' => 'power',
        'signout' => 'signout',
        'signin' => 'signin',
        'upload' => 'upload',
        'download' => 'download',
        'alert-circle' => 'alert-circle',
        'alert' => 'alert',
        'caution' => 'caution',
        'report' => 'report',
        'alert-c' => 'alert-c',
        'alert-circle-fill' => 'alert-circle-fill',
        'alert-fill' => 'alert-fill',
        'caution-fill' => 'caution-fill',
        'report-fill' => 'report-fill',
        'alert-fill-c' => 'alert-fill-c',
        'info-i' => 'info-i',
        'info' => 'info',
        'info-fill' => 'info-fill',
        'help' => 'help',
        'help-fill' => 'help-fill',
        'archived' => 'archived',
        'archive' => 'archive',
        'unarchive' => 'unarchive',
        'archived-fill' => 'archived-fill',
        'archive-fill' => 'archive-fill',
        'unarchive-fill' => 'unarchive-fill',
        'bag' => 'bag',
        'bag-fill' => 'bag-fill',
        'bell' => 'bell',
        'bell-off' => 'bell-off',
        'bell-fill' => 'bell-fill',
        'bell-off-fill' => 'bell-off-fill',
        'wifi' => 'wifi',
        'wifi-off' => 'wifi-off',
        'live' => 'live',
        'signal' => 'signal',
        'bluetooth' => 'bluetooth',
        'blank-alt' => 'blank-alt',
        'blank' => 'blank',
        'blank-fill' => 'blank-fill',
        'block-over' => 'block-over',
        'book-read' => 'book-read',
        'book' => 'book',
        'book-fill' => 'book-fill',
        'bulb-fill' => 'bulb-fill',
        'bulb' => 'bulb',
        'calendar-alt-fill' => 'calendar-alt-fill',
        'calendar-alt' => 'calendar-alt',
        'calendar-booking-fill' => 'calendar-booking-fill',
        'calendar-booking' => 'calendar-booking',
        'calendar-check-fill' => 'calendar-check-fill',
        'calendar-check' => 'calendar-check',
        'calendar-fill' => 'calendar-fill',
        'calendar' => 'calendar',
        'calender-date-fill' => 'calender-date-fill',
        'calender-date' => 'calender-date',
        'call' => 'call',
        'call-alt' => 'call-alt',
        'call-alt-fill' => 'call-alt-fill',
        'call-fill' => 'call-fill',
        'camera-fill' => 'camera-fill',
        'camera' => 'camera',
        'capsule' => 'capsule',
        'capsule-fill' => 'capsule-fill',
        'cards' => 'cards',
        'cards-fill' => 'cards-fill',
        'cart' => 'cart',
        'cart-fill' => 'cart-fill',
        'cc' => 'cc',
        'cc-alt' => 'cc-alt',
        'cc-alt2' => 'cc-alt2',
        'cc-secure' => 'cc-secure',
        'cc-new' => 'cc-new',
        'cc-off' => 'cc-off',
        'cc-fill' => 'cc-fill',
        'cc-alt-fill' => 'cc-alt-fill',
        'cc-alt2-fill' => 'cc-alt2-fill',
        'cc-secure-fill' => 'cc-secure-fill',
        'msg-circle' => 'msg-circle',
        'chat-circle' => 'chat-circle',
        'msg' => 'msg',
        'chat' => 'chat',
        'question-alt' => 'question-alt',
        'question' => 'question',
        'msg-circle-fill' => 'msg-circle-fill',
        'chat-circle-fill' => 'chat-circle-fill',
        'msg-fill' => 'msg-fill',
        'chat-fill' => 'chat-fill',
        'clip-h' => 'clip-h',
        'clip-v' => 'clip-v',
        'clip' => 'clip',
        'link-alt' => 'link-alt',
        'unlink' => 'unlink',
        'unlink-alt' => 'unlink-alt',
        'link-h' => 'link-h',
        'link-v' => 'link-v',
        'link' => 'link',
        'clipboard' => 'clipboard',
        'clipboad-check' => 'clipboad-check',
        'clipboard-fill' => 'clipboard-fill',
        'clipboad-check-fill' => 'clipboad-check-fill',
        'clock' => 'clock',
        'clock-fill' => 'clock-fill',
        'cloud' => 'cloud',
        'upload-cloud' => 'upload-cloud',
        'download-cloud' => 'download-cloud',
        'cloud-fill' => 'cloud-fill',
        'contact' => 'contact',
        'contact-fill' => 'contact-fill',
        'coffee' => 'coffee',
        'coffee-fill' => 'coffee-fill',
        'box-view' => 'box-view',
        'col-view' => 'col-view',
        'sidebar' => 'sidebar',
        'layout' => 'layout',
        'table-view' => 'table-view',
        'layout2' => 'layout2',
        'row-view' => 'row-view',
        'dot-box' => 'dot-box',
        'layout-fill' => 'layout-fill',
        'box-view-fill' => 'box-view-fill',
        'sidebar-fill' => 'sidebar-fill',
        'table-view-fill' => 'table-view-fill',
        'dot-box-fill' => 'dot-box-fill',
        'template' => 'template',
        'browser' => 'browser',
        'toolbar' => 'toolbar',
        'browser-fill' => 'browser-fill',
        'toolbar-fill' => 'toolbar-fill',
        'template-fill' => 'template-fill',
        'box' => 'box',
        'package' => 'package',
        'layer' => 'layer',
        'layers' => 'layers',
        'panel' => 'panel',
        'server' => 'server',
        'layer-fill' => 'layer-fill',
        'layers-fill' => 'layers-fill',
        'package-fill' => 'package-fill',
        'panel-fill' => 'panel-fill',
        'server-fill' => 'server-fill',
        'color-palette' => 'color-palette',
        'color-palette-fill' => 'color-palette-fill',
        'copy' => 'copy',
        'copy-fill' => 'copy-fill',
        'crop-alt' => 'crop-alt',
        'crop' => 'crop',
        'target' => 'target',
        'crosshair' => 'crosshair',
        'crosshair-fill' => 'crosshair-fill',
        'db-fill' => 'db-fill',
        'db' => 'db',
        'hard-drive' => 'hard-drive',
        'cpu' => 'cpu',
        'disk' => 'disk',
        'pen' => 'pen',
        'edit-alt' => 'edit-alt',
        'pen-fill' => 'pen-fill',
        'edit-alt-fill' => 'edit-alt-fill',
        'pen-alt-fill' => 'pen-alt-fill',
        'edit-fill' => 'edit-fill',
        'edit' => 'edit',
        'external-alt' => 'external-alt',
        'external' => 'external',
        'eye-alt' => 'eye-alt',
        'eye-alt-fill' => 'eye-alt-fill',
        'eye' => 'eye',
        'eye-fill' => 'eye-fill',
        'eye-off' => 'eye-off',
        'eye-off-fill' => 'eye-off-fill',
        'file' => 'file',
        'file-minus' => 'file-minus',
        'file-plus' => 'file-plus',
        'file-remove' => 'file-remove',
        'file-check' => 'file-check',
        'file-code' => 'file-code',
        'file-docs' => 'file-docs',
        'file-img' => 'file-img',
        'file-doc' => 'file-doc',
        'file-pdf' => 'file-pdf',
        'file-xls' => 'file-xls',
        'file-zip' => 'file-zip',
        'file-download' => 'file-download',
        'file-text' => 'file-text',
        'files' => 'files',
        'file-fill' => 'file-fill',
        'file-minus-fill' => 'file-minus-fill',
        'file-plus-fill' => 'file-plus-fill',
        'file-remove-fill' => 'file-remove-fill',
        'file-check-fill' => 'file-check-fill',
        'file-text-fill' => 'file-text-fill',
        'files-fill' => 'files-fill',
        'folder' => 'folder',
        'folder-minus' => 'folder-minus',
        'folder-plus' => 'folder-plus',
        'folder-remove' => 'folder-remove',
        'folder-check' => 'folder-check',
        'folder-list' => 'folder-list',
        'folders' => 'folders',
        'folder-fill' => 'folder-fill',
        'folders-fill' => 'folders-fill',
        'filter-alt' => 'filter-alt',
        'sort-line' => 'sort-line',
        'filter-fill' => 'filter-fill',
        'filter' => 'filter',
        'flag' => 'flag',
        'flag-fill' => 'flag-fill',
        'notify' => 'notify',
        'dashboard' => 'dashboard',
        'dashboard-fill' => 'dashboard-fill',
        'grid-sq' => 'grid-sq',
        'grid' => 'grid',
        'grid-c' => 'grid-c',
        'grid-alt' => 'grid-alt',
        'grid-plus' => 'grid-plus',
        'grid-add-c' => 'grid-add-c',
        'grid-fill' => 'grid-fill',
        'grid-fill-c' => 'grid-fill-c',
        'grid-alt-fill' => 'grid-alt-fill',
        'grid-plus-fill' => 'grid-plus-fill',
        'grid-add-fill-c' => 'grid-add-fill-c',
        'grid-box-alt-fill' => 'grid-box-alt-fill',
        'grid-box-alt' => 'grid-box-alt',
        'grid-box' => 'grid-box',
        'grid-box-fill' => 'grid-box-fill',
        'grid-line' => 'grid-line',
        'menu-alt-left' => 'menu-alt-left',
        'menu-alt-r' => 'menu-alt-r',
        'menu-alt' => 'menu-alt',
        'menu-center' => 'menu-center',
        'menu-left' => 'menu-left',
        'menu-right' => 'menu-right',
        'menu' => 'menu',
        'trend-up' => 'trend-up',
        'trend-down' => 'trend-down',
        'line-chart-down' => 'line-chart-down',
        'line-chart-up' => 'line-chart-up',
        'line-chart' => 'line-chart',
        'bar-chart' => 'bar-chart',
        'bar-chart-alt' => 'bar-chart-alt',
        'chart-up' => 'chart-up',
        'chart-down' => 'chart-down',
        'growth' => 'growth',
        'growth-fill' => 'growth-fill',
        'bar-chart-fill' => 'bar-chart-fill',
        'bar-c' => 'bar-c',
        'bar-fill-c' => 'bar-fill-c',
        'pie' => 'pie',
        'pie-alt' => 'pie-alt',
        'pie-fill' => 'pie-fill',
        'activity' => 'activity',
        'activity-alt' => 'activity-alt',
        'activity-round' => 'activity-round',
        'activity-round-fill' => 'activity-round-fill',
        'meter' => 'meter',
        'speed' => 'speed',
        'happy' => 'happy',
        'sad' => 'sad',
        'meh' => 'meh',
        'happy-fill' => 'happy-fill',
        'sad-fill' => 'sad-fill',
        'meh-fill' => 'meh-fill',
        'home' => 'home',
        'home-alt' => 'home-alt',
        'home-fill' => 'home-fill',
        'img' => 'img',
        'img-fill' => 'img-fill',
        'inbox' => 'inbox',
        'inbox-in' => 'inbox-in',
        'inbox-out' => 'inbox-out',
        'inbox-fill' => 'inbox-fill',
        'inbox-in-fill' => 'inbox-in-fill',
        'inbox-out-fill' => 'inbox-out-fill',
        'link-group' => 'link-group',
        'lock' => 'lock',
        'lock-alt' => 'lock-alt',
        'lock-fill' => 'lock-fill',
        'lock-alt-fill' => 'lock-alt-fill',
        'unlock' => 'unlock',
        'unlock-fill' => 'unlock-fill',
        'mail' => 'mail',
        'emails' => 'emails',
        'mail-fill' => 'mail-fill',
        'emails-fill' => 'emails-fill',
        'map-pin' => 'map-pin',
        'location' => 'location',
        'map' => 'map',
        'map-pin-fill' => 'map-pin-fill',
        'list' => 'list',
        'list-ol' => 'list-ol',
        'align-center' => 'align-center',
        'align-justify' => 'align-justify',
        'align-left' => 'align-left',
        'align-right' => 'align-right',
        'list-check' => 'list-check',
        'list-round' => 'list-round',
        'card-view' => 'card-view',
        'list-fill' => 'list-fill',
        'save' => 'save',
        'save-fill' => 'save-fill',
        'move' => 'move',
        'scissor' => 'scissor',
        'text' => 'text',
        'text-a' => 'text-a',
        'bold' => 'bold',
        'italic' => 'italic',
        'underline' => 'underline',
        'percent' => 'percent',
        'at' => 'at',
        'hash' => 'hash',
        'code' => 'code',
        'code-download' => 'code-download',
        'terminal' => 'terminal',
        'cmd' => 'cmd',
        'sun' => 'sun',
        'sun-fill' => 'sun-fill',
        'moon-fill' => 'moon-fill',
        'moon' => 'moon',
        'light' => 'light',
        'light-fill' => 'light-fill',
        'more-v' => 'more-v',
        'more-h' => 'more-h',
        'more-h-alt' => 'more-h-alt',
        'more-v-alt' => 'more-v-alt',
        'music' => 'music',
        'movie' => 'movie',
        'offer' => 'offer',
        'offer-fill' => 'offer-fill',
        'opt-alt' => 'opt-alt',
        'opt' => 'opt',
        'opt-dot-alt' => 'opt-dot-alt',
        'opt-dot' => 'opt-dot',
        'opt-dot-fill' => 'opt-dot-fill',
        'opt-alt-fill' => 'opt-alt-fill',
        'user-alt' => 'user-alt',
        'user-alt-fill' => 'user-alt-fill',
        'user' => 'user',
        'users' => 'users',
        'user-add' => 'user-add',
        'user-remove' => 'user-remove',
        'user-check' => 'user-check',
        'user-cross' => 'user-cross',
        'account-setting' => 'account-setting',
        'account-setting-alt' => 'account-setting-alt',
        'user-list' => 'user-list',
        'user-fill' => 'user-fill',
        'users-fill' => 'users-fill',
        'user-add-fill' => 'user-add-fill',
        'user-remove-fill' => 'user-remove-fill',
        'user-check-fill' => 'user-check-fill',
        'user-cross-fill' => 'user-cross-fill',
        'account-setting-fill' => 'account-setting-fill',
        'user-list-fill' => 'user-list-fill',
        'user-circle' => 'user-circle',
        'user-circle-fill' => 'user-circle-fill',
        'user-c' => 'user-c',
        'user-fill-c' => 'user-fill-c',
        'user-round' => 'user-round',
        'printer' => 'printer',
        'printer-fill' => 'printer-fill',
        'laptop' => 'laptop',
        'monitor' => 'monitor',
        'tablet' => 'tablet',
        'mobile' => 'mobile',
        'undo' => 'undo',
        'redo' => 'redo',
        'reload-alt' => 'reload-alt',
        'reload' => 'reload',
        'regen-alt' => 'regen-alt',
        'regen' => 'regen',
        'invest' => 'invest',
        'history' => 'history',
        'histroy' => 'histroy',
        'update' => 'update',
        'repeat' => 'repeat',
        'repeat-v' => 'repeat-v',
        'tranx' => 'tranx',
        'reply-all' => 'reply-all',
        'reply' => 'reply',
        'reply-fill' => 'reply-fill',
        'reply-all-fill' => 'reply-all-fill',
        'notes' => 'notes',
        'note-add' => 'note-add',
        'notes-alt' => 'notes-alt',
        'article' => 'article',
        'text-rich' => 'text-rich',
        'todo' => 'todo',
        'report-profit' => 'report-profit',
        'reports-alt' => 'reports-alt',
        'reports' => 'reports',
        'task' => 'task',
        'note-add-c' => 'note-add-c',
        'task-c' => 'task-c',
        'todo-fill' => 'todo-fill',
        'note-add-fill-c' => 'note-add-fill-c',
        'task-fill-c' => 'task-fill-c',
        'scan-fill' => 'scan-fill',
        'scan' => 'scan',
        'qr' => 'qr',
        'money' => 'money',
        'coins' => 'coins',
        'coin' => 'coin',
        'coin-alt' => 'coin-alt',
        'coin-alt-fill' => 'coin-alt-fill',
        'setting-alt-fill' => 'setting-alt-fill',
        'setting-alt' => 'setting-alt',
        'setting-fill' => 'setting-fill',
        'setting' => 'setting',
        'share-alt' => 'share-alt',
        'share-fill' => 'share-fill',
        'share' => 'share',
        'network' => 'network',
        'rss' => 'rss',
        'shield' => 'shield',
        'shield-star' => 'shield-star',
        'shield-check' => 'shield-check',
        'shield-alert' => 'shield-alert',
        'shield-off' => 'shield-off',
        'security' => 'security',
        'policy' => 'policy',
        'shield-alert-fill' => 'shield-alert-fill',
        'shield-check-fill' => 'shield-check-fill',
        'shield-fill' => 'shield-fill',
        'shield-half' => 'shield-half',
        'shield-star-fill' => 'shield-star-fill',
        'policy-fill' => 'policy-fill',
        'spark' => 'spark',
        'spark-off' => 'spark-off',
        'spark-fill' => 'spark-fill',
        'spark-off-fill' => 'spark-off-fill',
        'wallet' => 'wallet',
        'wallet-alt' => 'wallet-alt',
        'wallet-in' => 'wallet-in',
        'wallet-out' => 'wallet-out',
        'wallet-saving' => 'wallet-saving',
        'wallet-fill' => 'wallet-fill',
        'star' => 'star',
        'star-half' => 'star-half',
        'star-half-fill' => 'star-half-fill',
        'star-fill' => 'star-fill',
        'star-round' => 'star-round',
        'heart' => 'heart',
        'heart-fill' => 'heart-fill',
        'swap-alt-fill' => 'swap-alt-fill',
        'swap-alt' => 'swap-alt',
        'thumbs-down' => 'thumbs-down',
        'thumbs-up' => 'thumbs-up',
        'tag' => 'tag',
        'tag-alt' => 'tag-alt',
        'tags' => 'tags',
        'tag-fill' => 'tag-fill',
        'tag-alt-fill' => 'tag-alt-fill',
        'tags-fill' => 'tags-fill',
        'bookmark' => 'bookmark',
        'bookmark-fill' => 'bookmark-fill',
        'label' => 'label',
        'label-fill' => 'label-fill',
        'priority' => 'priority',
        'piority' => 'piority',
        'priority-fill' => 'priority-fill',
        'piority-fill' => 'piority-fill',
        'label-alt' => 'label-alt',
        'label-alt-fill' => 'label-alt-fill',
        'ticket-alt' => 'ticket-alt',
        'ticket' => 'ticket',
        'ticket-minus' => 'ticket-minus',
        'ticket-plus' => 'ticket-plus',
        'ticket-alt-fill' => 'ticket-alt-fill',
        'ticket-fill' => 'ticket-fill',
        'ticket-minus-fill' => 'ticket-minus-fill',
        'ticket-plus-fill' => 'ticket-plus-fill',
        'toggle-off' => 'toggle-off',
        'toggle-on' => 'toggle-on',
        'trash-alt' => 'trash-alt',
        'trash-empty' => 'trash-empty',
        'trash' => 'trash',
        'trash-fill' => 'trash-fill',
        'trash-empty-fill' => 'trash-empty-fill',
        'delete-fill' => 'delete-fill',
        'delete' => 'delete',
        'alarm-alt' => 'alarm-alt',
        'alarm' => 'alarm',
        'bugs' => 'bugs',
        'building' => 'building',
        'building-fill' => 'building-fill',
        'headphone' => 'headphone',
        'headphone-fill' => 'headphone-fill',
        'aperture' => 'aperture',
        'help-alt' => 'help-alt',
        'award' => 'award',
        'briefcase' => 'briefcase',
        'gift' => 'gift',
        'globe' => 'globe',
        'umbrela' => 'umbrela',
        'truck' => 'truck',
        'sign-usd' => 'sign-usd',
        'sign-dollar' => 'sign-dollar',
        'sign-mxn' => 'sign-mxn',
        'sign-sgd' => 'sign-sgd',
        'sign-euro' => 'sign-euro',
        'sign-eur' => 'sign-eur',
        'sign-gbp' => 'sign-gbp',
        'sign-pound' => 'sign-pound',
        'sign-thb' => 'sign-thb',
        'sign-inr' => 'sign-inr',
        'sign-jpy' => 'sign-jpy',
        'sign-yen' => 'sign-yen',
        'sign-cny' => 'sign-cny',
        'sign-kobo' => 'sign-kobo',
        'sign-chf' => 'sign-chf',
        'sign-vnd' => 'sign-vnd',
        'sign-php' => 'sign-php',
        'sign-brl' => 'sign-brl',
        'sign-idr' => 'sign-idr',
        'sign-czk' => 'sign-czk',
        'sign-hkd' => 'sign-hkd',
        'sign-kr' => 'sign-kr',
        'sign-dkk' => 'sign-dkk',
        'sign-nok' => 'sign-nok',
        'sign-sek' => 'sign-sek',
        'sign-rub' => 'sign-rub',
        'sign-myr' => 'sign-myr',
        'sign-pln' => 'sign-pln',
        'sign-try' => 'sign-try',
        'sign-waves' => 'sign-waves',
        'sign-trx' => 'sign-trx',
        'sign-xem' => 'sign-xem',
        'sign-mxr' => 'sign-mxr',
        'sign-usdc' => 'sign-usdc',
        'sign-steller' => 'sign-steller',
        'sign-steem' => 'sign-steem',
        'sign-usdt' => 'sign-usdt',
        'tether' => 'tether',
        'sign-btc' => 'sign-btc',
        'bitcoin' => 'bitcoin',
        'sign-bch' => 'sign-bch',
        'bitcoin-cash' => 'bitcoin-cash',
        'sign-bnb' => 'sign-bnb',
        'sign-ada' => 'sign-ada',
        'sign-zcash' => 'sign-zcash',
        'sign-eth' => 'sign-eth',
        'sign-dash' => 'sign-dash',
        'sign-xrp-old' => 'sign-xrp-old',
        'sign-eos' => 'sign-eos',
        'sign-xrp' => 'sign-xrp',
        'american-express' => 'american-express',
        'cc-jcb' => 'cc-jcb',
        'cc-mc' => 'cc-mc',
        'cc-discover' => 'cc-discover',
        'cc-visa' => 'cc-visa',
        'cc-paypal' => 'cc-paypal',
        'cc-stripe' => 'cc-stripe',
        'amazon-pay' => 'amazon-pay',
        'amazon-pay-fill' => 'amazon-pay-fill',
        'google-pay' => 'google-pay',
        'google-pay-fill' => 'google-pay-fill',
        'apple-pay' => 'apple-pay',
        'apple-pay-fill' => 'apple-pay-fill',
        'angular' => 'angular',
        'react' => 'react',
        'laravel' => 'laravel',
        'html5' => 'html5',
        'css3-fill' => 'css3-fill',
        'css3' => 'css3',
        'js' => 'js',
        'php' => 'php',
        'python' => 'python',
        'bootstrap' => 'bootstrap',
        'ebay' => 'ebay',
        'google-wallet' => 'google-wallet',
        'google-drive' => 'google-drive',
        'google-play-store' => 'google-play-store',
        'android' => 'android',
        'blogger-fill' => 'blogger-fill',
        'blogger' => 'blogger',
        'hangout' => 'hangout',
        'apple-store' => 'apple-store',
        'apple-store-ios' => 'apple-store-ios',
        'stripe' => 'stripe',
        'apple' => 'apple',
        'microsoft' => 'microsoft',
        'windows' => 'windows',
        'amazon' => 'amazon',
        'paypal-alt' => 'paypal-alt',
        'airbnb' => 'airbnb',
        'adobe' => 'adobe',
        'mailchimp' => 'mailchimp',
        'dropbox' => 'dropbox',
        'digital-ocean' => 'digital-ocean',
        'slack' => 'slack',
        'slack-hash' => 'slack-hash',
        'stack-overflow' => 'stack-overflow',
        'soundcloud' => 'soundcloud',
        'blackberry' => 'blackberry',
        'spotify' => 'spotify',
        'kickstarter' => 'kickstarter',
        'houzz' => 'houzz',
        'vine' => 'vine',
        'yelp' => 'yelp',
        'yoast' => 'yoast',
        'envato' => 'envato',
        'wordpress' => 'wordpress',
        'wp' => 'wp',
        'wordpress-fill' => 'wordpress-fill',
        'elementor' => 'elementor',
        'joomla' => 'joomla',
        'megento' => 'megento',
        'git' => 'git',
        'github' => 'github',
        'github-round' => 'github-round',
        'github-circle' => 'github-circle',
        'dribbble' => 'dribbble',
        'dribbble-round' => 'dribbble-round',
        'behance' => 'behance',
        'behance-fill' => 'behance-fill',
        'flickr' => 'flickr',
        'flickr-round' => 'flickr-round',
        'medium' => 'medium',
        'medium-round' => 'medium-round',
        'reddit' => 'reddit',
        'reddit-round' => 'reddit-round',
        'reddit-circle' => 'reddit-circle',
        'google' => 'google',
        'facebook-f' => 'facebook-f',
        'facebook-fill' => 'facebook-fill',
        'facebook-circle' => 'facebook-circle',
        'instagram' => 'instagram',
        'instagram-round' => 'instagram-round',
        'linkedin' => 'linkedin',
        'linkedin-round' => 'linkedin-round',
        'twitter' => 'twitter',
        'twitter-round' => 'twitter-round',
        'pinterest' => 'pinterest',
        'pinterest-round' => 'pinterest-round',
        'pinterest-circle' => 'pinterest-circle',
        'tumblr' => 'tumblr',
        'tumblr-round' => 'tumblr-round',
        'skype' => 'skype',
        'viber' => 'viber',
        'whatsapp' => 'whatsapp',
        'whatsapp-round' => 'whatsapp-round',
        'snapchat' => 'snapchat',
        'snapchat-fill' => 'snapchat-fill',
        'telegram' => 'telegram',
        'telegram-circle' => 'telegram-circle',
        'youtube' => 'youtube',
        'youtube-fill' => 'youtube-fill',
        'youtube-round' => 'youtube-round',
        'vimeo' => 'vimeo',
        'vimeo-fill' => 'vimeo-fill',
    ];

    /**
     * @author bernard-ng <bernard@devscast.tech>
     */
    public static function get(string $name): string
    {
        if (array_key_exists($name, self::ICONS)) {
            return $name;
        }
        throw new OutOfBoundsException(sprintf('Unknown "%s" icon', $name));
    }
}
