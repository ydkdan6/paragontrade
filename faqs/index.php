<?php

 require_once './account/Dashboard/includes/session.php';

 $isLoggedIn = isset($_SESSION['user_id']);

 $userEmail = isset($_SESSION['user_email']) ? $_SESSION['user_email'] : null;

// If the user is logged in and email is available, get the Gravatar

$username = $_SESSION['username']; 

$avatarUrl = './assets/icon.png';

 ?>


<!DOCTYPE html>
<html class="html" lang="en-US">

<head>
	<meta charset="UTF-8">
 
	<title>FAQs &#8211; ParagonTradeInvestmentpro.com</title>
	<meta name='robots' content='max-image-preview:large' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="alternate" type="application/rss+xml" title="ParagonTradeInvestmentpro.com &raquo; Feed"
		href="../feed/index.html" />
	<link rel="alternate" type="application/rss+xml" title="ParagonTradeInvestmentpro.com &raquo; Comments Feed"
		href="../comments/feed/index.html" />
	<script>
		window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/ParagonTradeInvestmentpro.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.5.5" } };
		/*! This file is auto-generated */
		!function (i, n) { var o, s, e; function c(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(o, JSON.stringify(t)) } catch (e) { } } function p(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data), r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)); return t.every(function (e, t) { return e === r[t] }) } function u(e, t, n) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b") }return !1 } function f(e, t, n) { var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"), a = r.getContext("2d", { willReadFrequently: !0 }), o = (a.textBaseline = "top", a.font = "600 32px Arial", {}); return e.forEach(function (e) { o[e] = t(a, e, n) }), o } function t(e) { var t = i.createElement("script"); t.src = e, t.defer = !0, i.head.appendChild(t) } "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = { everything: !0, everythingExceptFlag: !0 }, e = new Promise(function (e) { i.addEventListener("DOMContentLoaded", e, { once: !0 }) }), new Promise(function (t) { var n = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests } catch (e) { } return null }(); if (!n) { if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try { var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));", r = new Blob([e], { type: "text/javascript" }), a = new Worker(URL.createObjectURL(r), { name: "wpTestEmojiSupports" }); return void (a.onmessage = function (e) { c(n = e.data), a.terminate(), t(n) }) } catch (e) { } c(n = f(s, u, p)) } t(n) }).then(function (e) { for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]); n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () { n.DOMReady = !0 } }).then(function () { return e }).then(function () { var e; n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji))) })) }((window, document), window._wpemojiSettings);
	</script>
	<link rel='stylesheet' id='elementor-frontend-css'
		href='../wp-content/plugins/elementor/assets/css/frontend-lite.min4d52.css?ver=3.22.1' media='all' />
	<link rel='stylesheet' id='elementor-post-9-css'
		href='../wp-content/uploads/elementor/css/post-9896d.css?ver=1731183393' media='all' />
	<link rel='stylesheet' id='elementor-post-95-css'
		href='../wp-content/uploads/elementor/css/post-95896d.css?ver=1731183393' media='all' />
	<link rel='stylesheet' id='hfe-widgets-style-css'
		href='../wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend4f2e.css?ver=1.6.36' media='all' />
	<link rel='stylesheet' id='sina-morphing-anim-css'
		href='../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/sina-morphing.mind63f.css?ver=2.1.5'
		media='all' />
	<link rel='stylesheet' id='de-scroll-animation-css-css'
		href='../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/de-scroll-animationd63f.css?ver=2.1.5'
		media='all' />
	<link rel='stylesheet' id='de-reveal-animation-css-css'
		href='../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/de-reveal-animationd63f.css?ver=2.1.5'
		media='all' />
	<link rel='stylesheet' id='de-curtain-animation-revealer-css'
		href='../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/revealerd63f.css?ver=2.1.5'
		media='all' />
	<link rel='stylesheet' id='de-reveal-curtain-animation-css-css'
		href='../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/de-reveal-curtain-animationd63f.css?ver=2.1.5'
		media='all' />
	<link rel='stylesheet' id='de-reveal-letter-decolines-css-css'
		href='../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/letter/decolinesd63f.css?ver=2.1.5'
		media='all' />
	<link rel='stylesheet' id='de-reveal-letter-normalize-css-css'
		href='../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/letter/normalized63f.css?ver=2.1.5'
		media='all' />
	<link rel='stylesheet' id='de-reveal-letter-lettereffect-css-css'
		href='../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/letter/lettereffectd63f.css?ver=2.1.5'
		media='all' />
	<link rel='stylesheet' id='de-reveal-letter-pater-css-css'
		href='../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/letter/paterd63f.css?ver=2.1.5'
		media='all' />
	<link rel='stylesheet' id='de-staggering-animate-css'
		href='../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/de_staggering/animated63f.css?ver=2.1.5'
		media='all' />
	<link rel='stylesheet' id='de-staggering-css-css'
		href='../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/css/de_staggering/de-staggeringd63f.css?ver=2.1.5'
		media='all' />
	<style id='wp-emoji-styles-inline-css'>
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<style id='classic-theme-styles-inline-css'>
		/*! This file is auto-generated */
		.wp-block-button__link {
			color: #fff;
			background-color: #32373c;
			border-radius: 9999px;
			box-shadow: none;
			text-decoration: none;
			padding: calc(.667em + 2px) calc(1.333em + 2px);
			font-size: 1.125em
		}

		.wp-block-file__button {
			background: #32373c;
			color: #fff;
			text-decoration: none
		}
	</style>
	<style id='global-styles-inline-css'>
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
			--wp--preset--spacing--20: 0.44rem;
			--wp--preset--spacing--30: 0.67rem;
			--wp--preset--spacing--40: 1rem;
			--wp--preset--spacing--50: 1.5rem;
			--wp--preset--spacing--60: 2.25rem;
			--wp--preset--spacing--70: 3.38rem;
			--wp--preset--spacing--80: 5.06rem;
			--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
			--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
			--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
			--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
		}

		:where(.is-layout-flex) {
			gap: 0.5em;
		}

		:where(.is-layout-grid) {
			gap: 0.5em;
		}

		body .is-layout-flex {
			display: flex;
		}

		body .is-layout-flex {
			flex-wrap: wrap;
			align-items: center;
		}

		body .is-layout-flex>* {
			margin: 0;
		}

		body .is-layout-grid {
			display: grid;
		}

		body .is-layout-grid>* {
			margin: 0;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}

		.wp-block-navigation a:where(:not(.wp-element-button)) {
			color: inherit;
		}

		:where(.wp-block-post-template.is-layout-flex) {
			gap: 1.25em;
		}

		:where(.wp-block-post-template.is-layout-grid) {
			gap: 1.25em;
		}

		:where(.wp-block-columns.is-layout-flex) {
			gap: 2em;
		}

		:where(.wp-block-columns.is-layout-grid) {
			gap: 2em;
		}

		.wp-block-pullquote {
			font-size: 1.5em;
			line-height: 1.6;
		}
	</style>
	<link rel='stylesheet' id='mwp-herd-effect-css'
		href='../wp-content/plugins/mwp-herd-effect/public/assets/css/style.minf049.css?ver=6.0' media='all' />
	<link rel='stylesheet' id='mwp-herd-effect-fontawesome-css'
		href='../wp-content/plugins/mwp-herd-effect/vendors/fontawesome/css/alld3c7.css?ver=6.5.1' media='all' />
	<link rel='stylesheet' id='hfe-style-css'
		href='../wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor4f2e.css?ver=1.6.36'
		media='all' />
	<link rel='stylesheet' id='swiper-css'
		href='../wp-content/plugins/elementor/assets/lib/swiper/v8/css/swiper.min94a4.css?ver=8.4.5' media='all' />
	<link rel='stylesheet' id='elementor-post-151-css'
		href='../wp-content/uploads/elementor/css/post-151a3cd.css?ver=1731183394' media='all' />
	<link rel='stylesheet' id='elementor-pro-css'
		href='../wp-content/plugins/elementor-pro/assets/css/frontend-lite.minf0b4.css?ver=3.11.6' media='all' />
	<link rel='stylesheet' id='de-sticky-frontend-css'
		href='../wp-content/plugins/dethemekit-for-elementor/assets/css/de-sticky-frontendd63f.css?ver=2.1.5'
		media='all' />
	<link rel='stylesheet' id='de-product-display-css'
		href='../wp-content/plugins/dethemekit-for-elementor/assets/css/de-product-displayd63f.css?ver=2.1.5'
		media='all' />
	<link rel='stylesheet' id='font-awesome-5-all-css'
		href='../wp-content/plugins/elementor/assets/lib/font-awesome/css/all.mind63f.css?ver=2.1.5' media='all' />
	<link rel='stylesheet' id='font-awesome-4-shim-css'
		href='../wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min4d52.css?ver=3.22.1'
		media='all' />
	<link rel='stylesheet' id='she-header-style-css'
		href='../wp-content/plugins/sticky-header-effects-for-elementor/assets/css/she-header-stylea242.css?ver=1.6.11'
		media='all' />
	<link rel='stylesheet' id='elementor-post-33-css'
		href='../wp-content/uploads/elementor/css/post-332259.css?ver=1732809576' media='all' />
	<link rel='stylesheet' id='cute-alert-css'
		href='../wp-content/plugins/metform/public/assets/lib/cute-alert/style6f61.css?ver=3.8.9' media='all' />
	<link rel='stylesheet' id='text-editor-style-css'
		href='../wp-content/plugins/metform/public/assets/css/text-editor6f61.css?ver=3.8.9' media='all' />
	<link rel='stylesheet' id='font-awesome-css'
		href='../wp-content/themes/oceanwp/assets/fonts/fontawesome/css/all.min1e39.css?ver=6.4.2' media='all' />
	<link rel='stylesheet' id='simple-line-icons-css'
		href='../wp-content/themes/oceanwp/assets/css/third/simple-line-icons.min8d5a.css?ver=2.4.0' media='all' />
	<link rel='stylesheet' id='oceanwp-style-css'
		href='../wp-content/themes/oceanwp/assets/css/style.minf8ee.css?ver=3.5.7' media='all' />
	<link rel='stylesheet' id='font-awesome-four-css'
		href='../wp-content/plugins/dethemekit-for-elementor/assets/css/font-awesome.mind63f.css?ver=2.1.5'
		media='all' />
	<link rel='stylesheet' id='simple-line-icons-wl-css'
		href='../wp-content/plugins/dethemekit-for-elementor/assets/css/simple-line-iconsd63f.css?ver=2.1.5'
		media='all' />
	<link rel='stylesheet' id='htflexboxgrid-css'
		href='../wp-content/plugins/dethemekit-for-elementor/assets/css/htflexboxgridd63f.css?ver=2.1.5' media='all' />
	<link rel='stylesheet' id='slick-css'
		href='../wp-content/plugins/dethemekit-for-elementor/assets/css/slickd63f.css?ver=2.1.5' media='all' />
	<link rel='stylesheet' id='dethemekit-widgets-css'
		href='../wp-content/plugins/dethemekit-for-elementor/assets/css/dethemekit-widgetsd63f.css?ver=2.1.5'
		media='all' />
	<style id='dethemekit-widgets-inline-css'>
		.woocommerce #respond input#submit.alt,
		.woocommerce a.button.alt,
		.woocommerce button.button.alt,
		.woocommerce input.button.alt,
		.woocommerce #respond input#submit.alt:hover,
		.woocommerce a.button.alt:hover,
		.woocommerce button.button.alt:hover,
		.woocommerce input.button.alt:hover,
		.woocommerce a.button,
		.woocommerce a.button:hover,
		.woocommerce button.button,
		.woocommerce button.button:hover,
		.woocommerce a.remove:hover,
		.woocommerce a.button.wc-backward,
		.woocommerce a.button.wc-backward:hover {
			background-color:
		}

		.woocommerce #respond input#submit.alt,
		.woocommerce a.button.alt,
		.woocommerce button.button.alt,
		.woocommerce input.button.alt,
		.woocommerce #respond input#submit.alt:hover,
		.woocommerce a.button.alt:hover,
		.woocommerce button.button.alt:hover,
		.woocommerce input.button.alt:hover,
		.woocommerce a.button,
		.woocommerce a.button:hover,
		.woocommerce button.button,
		.woocommerce button.button:hover,
		.woocommerce a.button.wc-backward,
		.woocommerce button.button:disabled,
		.woocommerce button.button:disabled[disabled],
		.woocommerce .cart-collaterals .cart_totals .wc-proceed-to-checkout a.wc-forward {
			color:
		}

		.woocommerce a.remove {
			color: !important
		}

		.woocommerce .woocommerce-cart-form a.button,
		.woocommerce .woocommerce-cart-form button.button[type="submit"],
		.woocommerce .cart-collaterals a.checkout-button,
		.woocommerce .return-to-shop a.button.wc-backward {
			border: 1px
		}

		.woocommerce-info,
		.woocommerce-message,
		.woocommerce-error {
			border-top-color:
		}

		.woocommerce-info::before,
		.woocommerce-message::before,
		.woocommerce-error::before {
			color: !important
		}

			{
			color: #F9F7F5 !important
		}

			{
			color: #F9F7F5 !important
		}

			{
			color: #F9F7F5 !important
		}

			{
			color: #F9F7F5 !important
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			color:
		}

		body,
		a {
			color:
		}
	</style>
	<link rel='stylesheet' id='dethemekit-de-carousel-css'
		href='../wp-content/plugins/dethemekit-for-elementor/assets/css/dethemekit-de-carouseld63f.css?ver=2.1.5'
		media='all' />
	<link rel='stylesheet' id='elementor-icons-ekiticons-css'
		href='../wp-content/plugins/elementskit-lite/modules/elementskit-icon-pack/assets/css/ekiticons55a0.css?ver=3.2.0'
		media='all' />
	<link rel='stylesheet' id='ekit-widget-styles-css'
		href='../wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles55a0.css?ver=3.2.0'
		media='all' />
	<link rel='stylesheet' id='ekit-responsive-css'
		href='../wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive55a0.css?ver=3.2.0'
		media='all' />
	<link rel='stylesheet' id='oe-widgets-style-css'
		href='../wp-content/plugins/ocean-extra/assets/css/widgetsadc6.css?ver=6.5.5' media='all' />
	<link rel='stylesheet' id='ecs-styles-css'
		href='../wp-content/plugins/dethemekit-for-elementor/assets/css/de_loop/ecs-styled63f.css?ver=2.1.5'
		media='all' />
	<link rel='stylesheet' id='google-fonts-1-css'
		href='https://fonts.googleapis.com/css?family=DM+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CEpilogue%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=swap&amp;ver=6.5.5'
		media='all' />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<script src="../wp-content/plugins/dethemekit-for-elementor/assets/js/jquery-1.12.4-wpadc6.js?ver=6.5.5"
		id="jquery-js"></script>
	<script src="../wp-content/plugins/dethemekit-for-elementor/assets/js/jquery-migrate-1.4.1-wpadc6.js?ver=6.5.5"
		id="jquery-migrate-js"></script>
	<script src="../wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min4d52.js?ver=3.22.1"
		id="font-awesome-4-shim-js"></script>
	<script src="../wp-content/plugins/sticky-header-effects-for-elementor/assets/js/she-headera242.js?ver=1.6.11"
		id="she-header-js"></script>
	<script id="dtk_ajax_load-js-extra">
		var ecs_ajax_params = { "ajaxurl": "https:\/\/ParagonTradeInvestmentpro.com\/wp-admin\/admin-ajax.php", "posts": "{\"page\":0,\"pagename\":\"faqs\",\"error\":\"\",\"m\":\"\",\"p\":0,\"post_parent\":\"\",\"subpost\":\"\",\"subpost_id\":\"\",\"attachment\":\"\",\"attachment_id\":0,\"name\":\"faqs\",\"page_id\":0,\"second\":\"\",\"minute\":\"\",\"hour\":\"\",\"day\":0,\"monthnum\":0,\"year\":0,\"w\":0,\"category_name\":\"\",\"tag\":\"\",\"cat\":\"\",\"tag_id\":\"\",\"author\":\"\",\"author_name\":\"\",\"feed\":\"\",\"tb\":\"\",\"paged\":0,\"meta_key\":\"\",\"meta_value\":\"\",\"preview\":\"\",\"s\":\"\",\"sentence\":\"\",\"title\":\"\",\"fields\":\"\",\"menu_order\":\"\",\"embed\":\"\",\"category__in\":[],\"category__not_in\":[],\"category__and\":[],\"post__in\":[],\"post__not_in\":[],\"post_name__in\":[],\"tag__in\":[],\"tag__not_in\":[],\"tag__and\":[],\"tag_slug__in\":[],\"tag_slug__and\":[],\"post_parent__in\":[],\"post_parent__not_in\":[],\"author__in\":[],\"author__not_in\":[],\"search_columns\":[],\"post_type\":[\"post\",\"page\",\"e-landing-page\"],\"ignore_sticky_posts\":false,\"suppress_filters\":false,\"cache_results\":true,\"update_post_term_cache\":true,\"update_menu_item_cache\":false,\"lazy_load_term_meta\":true,\"update_post_meta_cache\":true,\"posts_per_page\":10,\"nopaging\":false,\"comments_per_page\":\"50\",\"no_found_rows\":false,\"order\":\"DESC\"}" };
	</script>
	<script src="../wp-content/plugins/dethemekit-for-elementor/assets/js/de_loop/ecs_ajax_paginationd63f.js?ver=2.1.5"
		id="dtk_ajax_load-js"></script>
	<script src="../wp-content/plugins/dethemekit-for-elementor/assets/js/de_loop/ecsd63f.js?ver=2.1.5"
		id="ecs-script-js"></script>
	<link rel="https://api.w.org/" href="../wp-json/index.html" />
	<link rel="alternate" type="application/json" href="../wp-json/wp/v2/pages/33.json" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
	<meta name="generator" content="WordPress 6.5.5" />
	<link rel="canonical" href="index.html" />
	<link rel='shortlink' href='../indexdd23.html?p=33' />
	<link rel="alternate" type="application/json+oembed"
		href="../wp-json/oembed/1.0/embed3b66.json?url=https%3A%2F%2FParagonTradeInvestmentpro.com%2Ffaqs%2F" />
	<link rel="alternate" type="text/xml+oembed"
		href="../wp-json/oembed/1.0/embed1773?url=https%3A%2F%2FParagonTradeInvestmentpro.com%2Ffaqs%2F&amp;format=xml" />
	<meta name="generator"
		content="Elementor 3.22.1; features: e_optimized_assets_loading, e_optimized_css_loading, e_font_icon_svg, additional_custom_breakpoints, e_optimized_control_loading, e_lazyload, e_element_cache; settings: css_print_method-external, google_font-enabled, font_display-swap">
	<style>
		.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload),
		.e-con.e-parent:nth-of-type(n+4):not(.e-lazyloaded):not(.e-no-lazyload) * {
			background-image: none !important;
		}

		@media screen and (max-height: 1024px) {

			.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload),
			.e-con.e-parent:nth-of-type(n+3):not(.e-lazyloaded):not(.e-no-lazyload) * {
				background-image: none !important;
			}
		}

		@media screen and (max-height: 640px) {

			.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload),
			.e-con.e-parent:nth-of-type(n+2):not(.e-lazyloaded):not(.e-no-lazyload) * {
				background-image: none !important;
			}
		}
	</style>
	<meta name="theme-color" content="#FFFFFF">
	<link rel="icon" href="../wp-content/uploads/2024/06/Screenshot_2024-06-23_171031-removebg-preview-150x150.png"
		sizes="32x32" />
	<link rel="icon" href="../wp-content/uploads/2024/06/Screenshot_2024-06-23_171031-removebg-preview.png"
		sizes="192x192" />
	<link rel="apple-touch-icon"
		href="../wp-content/uploads/2024/06/Screenshot_2024-06-23_171031-removebg-preview.png" />
	<meta name="msapplication-TileImage"
		content="https://ParagonTradeInvestmentpro.com/wp-content/uploads/2024/06/Screenshot_2024-06-23_171031-removebg-preview.png" />
	<!-- OceanWP CSS -->
	<style type="text/css">
		/* Header CSS */
		#site-header.has-header-media .overlay-header-media {
			background-color: rgba(0, 0, 0, 0.5)
		}
	</style>
	<style id="wpforms-css-vars-root">
		:root {
			--wpforms-field-border-radius: 3px;
			--wpforms-field-border-style: solid;
			--wpforms-field-border-size: 1px;
			--wpforms-field-background-color: #ffffff;
			--wpforms-field-border-color: rgba(0, 0, 0, 0.25);
			--wpforms-field-border-color-spare: rgba(0, 0, 0, 0.25);
			--wpforms-field-text-color: rgba(0, 0, 0, 0.7);
			--wpforms-field-menu-color: #ffffff;
			--wpforms-label-color: rgba(0, 0, 0, 0.85);
			--wpforms-label-sublabel-color: rgba(0, 0, 0, 0.55);
			--wpforms-label-error-color: #d63637;
			--wpforms-button-border-radius: 3px;
			--wpforms-button-border-style: none;
			--wpforms-button-border-size: 1px;
			--wpforms-button-background-color: #066aab;
			--wpforms-button-border-color: #066aab;
			--wpforms-button-text-color: #ffffff;
			--wpforms-page-break-color: #066aab;
			--wpforms-background-image: none;
			--wpforms-background-position: center center;
			--wpforms-background-repeat: no-repeat;
			--wpforms-background-size: cover;
			--wpforms-background-width: 100px;
			--wpforms-background-height: 100px;
			--wpforms-background-color: rgba(0, 0, 0, 0);
			--wpforms-background-url: none;
			--wpforms-container-padding: 0px;
			--wpforms-container-border-style: none;
			--wpforms-container-border-width: 1px;
			--wpforms-container-border-color: #000000;
			--wpforms-container-border-radius: 3px;
			--wpforms-field-size-input-height: 43px;
			--wpforms-field-size-input-spacing: 15px;
			--wpforms-field-size-font-size: 16px;
			--wpforms-field-size-line-height: 19px;
			--wpforms-field-size-padding-h: 14px;
			--wpforms-field-size-checkbox-size: 16px;
			--wpforms-field-size-sublabel-spacing: 5px;
			--wpforms-field-size-icon-size: 1;
			--wpforms-label-size-font-size: 16px;
			--wpforms-label-size-line-height: 19px;
			--wpforms-label-size-sublabel-font-size: 14px;
			--wpforms-label-size-sublabel-line-height: 17px;
			--wpforms-button-size-font-size: 17px;
			--wpforms-button-size-height: 41px;
			--wpforms-button-size-padding-h: 15px;
			--wpforms-button-size-margin-top: 10px;
			--wpforms-container-shadow-size-box-shadow: none;

		}
	</style>
</head>

<body
	class="page-template page-template-elementor_header_footer page page-id-33 wp-embed-responsive ehf-template-oceanwp ehf-stylesheet-oceanwp oceanwp-theme dropdown-mobile default-breakpoint content-full-screen has-topbar page-header-disabled has-breadcrumbs elementor-default elementor-template-full-width elementor-kit-151 elementor-page elementor-page-33"
	itemscope="itemscope" itemtype="https://schema.org/WebPage">



	<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main">Skip to content</a>


		<div id="wrap" class="clr">


			<div class="ekit-template-content-markup ekit-template-content-header">
				<div data-elementor-type="wp-post" data-elementor-id="9" class="elementor elementor-9">
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-b16ff23 she-header-yes she-header-hide-on-scroll-yes elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="b16ff23" data-element_type="section"
						data-settings="{&quot;transparent&quot;:&quot;yes&quot;,&quot;transparent_header_show&quot;:&quot;yes&quot;,&quot;background_show&quot;:&quot;yes&quot;,&quot;background&quot;:&quot;#000000&quot;,&quot;hide_header&quot;:&quot;yes&quot;,&quot;scroll_distance_hide_header&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:60,&quot;sizes&quot;:[]},&quot;transparent_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;scroll_distance&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:60,&quot;sizes&quot;:[]},&quot;scroll_distance_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;scroll_distance_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;scroll_distance_hide_header_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;scroll_distance_hide_header_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-476aff5 elementor-invisible"
								data-id="476aff5" data-element_type="column"
								data-settings="{&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-301849d de_scroll_animation_no elementor-widget elementor-widget-image"
										data-id="301849d" data-element_type="widget" data-widget_type="image.default">
										<div class="elementor-widget-container">
											<style>
												/*! elementor - v3.22.0 - 17-06-2024 */
												.elementor-widget-image {
													text-align: center
												}

												.elementor-widget-image a {
													display: inline-block
												}

												.elementor-widget-image a img[src$=".svg"] {
													width: 48px
												}

												.elementor-widget-image img {
													vertical-align: middle;
													display: inline-block
												}
											</style> <a href="../index.html">
												<img fetchpriority="high" width="668" height="231"
													src="../wp-content/uploads/2024/06/WhatsApp_Image_2024-06-23_at_16.24.55_6961f816-removebg-preview.png"
													class="elementor-animation-float attachment-large size-large wp-image-67"
													alt=""
													srcset="https://ParagonTradeInvestmentpro.com/wp-content/uploads/2024/06/WhatsApp_Image_2024-06-23_at_16.24.55_6961f816-removebg-preview.png 668w, https://ParagonTradeInvestmentpro.com/wp-content/uploads/2024/06/WhatsApp_Image_2024-06-23_at_16.24.55_6961f816-removebg-preview-300x104.png 300w"
													sizes="(max-width: 668px) 100vw, 668px" /> </a>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-53ca4f7d"
								data-id="53ca4f7d" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<section
										class="elementor-section elementor-inner-section elementor-element elementor-element-3f8a7334 elementor-section-full_width elementor-reverse-tablet elementor-reverse-mobile elementor-section-height-default elementor-section-height-default"
										data-id="3f8a7334" data-element_type="section">
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5179a5b2"
												data-id="5179a5b2" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-12f6636f de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-ekit-nav-menu"
														data-id="12f6636f" data-element_type="widget"
														data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;}"
														data-widget_type="ekit-nav-menu.default">
														<div class="elementor-widget-container">
															<div class="ekit-wid-con ekit_menu_responsive_tablet"
																data-hamburger-icon="icon icon-burger-menu"
																data-hamburger-icon-type="icon"
																data-responsive-breakpoint="1024"> <button
																	class="elementskit-menu-hamburger elementskit-menu-toggler"
																	type="button" aria-label="hamburger-icon">
																	<i aria-hidden="true"
																		class="ekit-menu-icon icon icon-burger-menu"></i>
																</button>
																<div id="ekit-megamenu-site-menu"
																	class="elementskit-menu-container elementskit-menu-offcanvas-elements elementskit-navbar-nav-default ekit-nav-menu-one-page- ekit-nav-dropdown-hover">
																	<ul id="menu-site-menu"
																		class="elementskit-navbar-nav elementskit-menu-po-center submenu-click-on-icon">
																		<li id="menu-item-52"
																			class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-52 nav-item elementskit-mobile-builder-content"
																			data-vertical-menu=750px><a
																				href="../index.html"
																				class="ekit-menu-nav-link">Home</a></li>
																		<li id="menu-item-51"
																			class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-51 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content"
																			data-vertical-menu=750px><a
																				href="../about/index.html"
																				class="ekit-menu-nav-link ekit-menu-dropdown-toggle">About<i
																					aria-hidden="true"
																					class="icon icon-down-arrow1 elementskit-submenu-indicator"></i></a>
																			<ul
																				class="elementskit-dropdown elementskit-submenu-panel">
																				<li id="menu-item-44"
																					class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44 nav-item elementskit-mobile-builder-content"
																					data-vertical-menu=750px><a
																						href="../accounts/index.html"
																						class=" dropdown-item">Accounts</a>
																				<li id="menu-item-678"
																					class="menu-item menu-item-type-custom menu-item-object-custom menu-item-678 nav-item elementskit-mobile-builder-content"
																					data-vertical-menu=750px><a
																						href="../account/login.php"
																						class=" dropdown-item">Login</a>
																				<li id="menu-item-679"
																					class="menu-item menu-item-type-custom menu-item-object-custom menu-item-679 nav-item elementskit-mobile-builder-content"
																					data-vertical-menu=750px><a
																						href="../account/register.php"
																						class=" dropdown-item">Register</a>
																			</ul>
																		</li>
																		<li id="menu-item-50"
																			class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-50 nav-item elementskit-dropdown-has relative_position elementskit-dropdown-menu-default_width elementskit-mobile-builder-content"
																			data-vertical-menu=750px><a
																				href="../services/index.html"
																				class="ekit-menu-nav-link ekit-menu-dropdown-toggle">Services<i
																					aria-hidden="true"
																					class="icon icon-down-arrow1 elementskit-submenu-indicator"></i></a>
																			<ul
																				class="elementskit-dropdown elementskit-submenu-panel">
																				<li id="menu-item-47"
																					class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-33 current_page_item menu-item-47 nav-item elementskit-mobile-builder-content active"
																					data-vertical-menu=750px><a
																						href="index.html"
																						class=" dropdown-item active">FAQs</a>
																				<li id="menu-item-48"
																					class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48 nav-item elementskit-mobile-builder-content"
																					data-vertical-menu=750px><a
																						href="../investment-plan/index.html"
																						class=" dropdown-item">Investment
																						Plan</a>
																			</ul>
																		</li>
																		<li id="menu-item-45"
																			class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45 nav-item elementskit-mobile-builder-content"
																			data-vertical-menu=750px><a
																				href="../stocks/index.html"
																				class="ekit-menu-nav-link">Stocks</a>
																		</li>
																		<li id="menu-item-46"
																			class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46 nav-item elementskit-mobile-builder-content"
																			data-vertical-menu=750px><a
																				href="../case-studies/index.html"
																				class="ekit-menu-nav-link">Case
																				Studies</a></li>
																		<li id="menu-item-49"
																			class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49 nav-item elementskit-mobile-builder-content"
																			data-vertical-menu=750px><a
																				href="../contact/index.html"
																				class="ekit-menu-nav-link">Contact</a>
																		</li>
																	</ul>
																	<div class="elementskit-nav-identity-panel">
																		<div class="elementskit-site-title">
																			<a class="elementskit-nav-logo"
																				href="../index.html" target="_self"
																				rel="">
																				<img width="265" height="265"
																					src="../wp-content/uploads/2024/06/Screenshot_2024-06-23_171031-removebg-preview.png"
																					class="attachment-full size-full"
																					alt="" decoding="async"
																					srcset="https://ParagonTradeInvestmentpro.com/wp-content/uploads/2024/06/Screenshot_2024-06-23_171031-removebg-preview.png 265w, https://ParagonTradeInvestmentpro.com/wp-content/uploads/2024/06/Screenshot_2024-06-23_171031-removebg-preview-150x150.png 150w"
																					sizes="(max-width: 265px) 100vw, 265px" />
																			</a>
																		</div><button
																			class="elementskit-menu-close elementskit-menu-toggler"
																			type="button">X</button>
																	</div>
																</div>
																<div
																	class="elementskit-menu-overlay elementskit-menu-offcanvas-elements elementskit-menu-toggler ekit-nav-menu--overlay">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-199e9812"
												data-id="199e9812" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-8cf7496 elementor-align-right elementor-widget__width-initial de_scroll_animation_no elementor-widget elementor-widget-button"
														data-id="8cf7496" data-element_type="widget"
														data-widget_type="button.default">
														<div class="elementor-widget-container">
															<div class="elementor-button-wrapper">
																<a class="elementor-button elementor-button-link elementor-size-sm"
																	href=".././account/login.html">
																	<span class="elementor-button-content-wrapper">
																		<span class="elementor-button-text">Login</span>
																	</span>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4c541f9"
												data-id="4c541f9" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-22f7535b elementor-align-right elementor-widget__width-initial elementor-hidden-mobile de_scroll_animation_no elementor-widget elementor-widget-button"
														data-id="22f7535b" data-element_type="widget"
														data-widget_type="button.default">
														<div class="elementor-widget-container">
															<div class="elementor-button-wrapper">
																<a class="elementor-button elementor-button-link elementor-size-sm"
																	href=".././account/register.php">
																	<span class="elementor-button-content-wrapper">
																		<span class="elementor-button-text"> Sign
																			up</span>
																	</span>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>

			<main id="main" class="site-main clr" role="main">

				<div data-elementor-type="wp-page" data-elementor-id="33" class="elementor elementor-33">
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-54aac751 elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
						data-id="54aac751" data-element_type="section"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;tilt&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-shape elementor-shape-bottom" data-negative="false">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
								<path class="elementor-shape-fill" d="M0,6V0h1000v100L0,6z" />
							</svg>
						</div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4a9049c8"
								data-id="4a9049c8" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-22865ab8 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading"
										data-id="22865ab8" data-element_type="widget"
										data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
										data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<style>
												/*! elementor - v3.22.0 - 17-06-2024 */
												.elementor-heading-title {
													padding: 0;
													margin: 0;
													line-height: 1
												}

												.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>a {
													color: inherit;
													font-size: inherit;
													line-height: inherit
												}

												.elementor-widget-heading .elementor-heading-title.elementor-size-small {
													font-size: 15px
												}

												.elementor-widget-heading .elementor-heading-title.elementor-size-medium {
													font-size: 19px
												}

												.elementor-widget-heading .elementor-heading-title.elementor-size-large {
													font-size: 29px
												}

												.elementor-widget-heading .elementor-heading-title.elementor-size-xl {
													font-size: 39px
												}

												.elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
													font-size: 59px
												}
											</style>
											<h2 class="elementor-heading-title elementor-size-default">FAQs Page</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-27c5634b elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-icon-list"
										data-id="27c5634b" data-element_type="widget"
										data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
										data-widget_type="icon-list.default">
										<div class="elementor-widget-container">
											<link rel="stylesheet"
												href="../wp-content/plugins/elementor/assets/css/widget-icon-list.min.css">
											<ul class="elementor-icon-list-items elementor-inline-items">
												<li class="elementor-icon-list-item elementor-inline-item">
													<span class="elementor-icon-list-text">Home</span>
												</li>
												<li class="elementor-icon-list-item elementor-inline-item">
													<span class="elementor-icon-list-icon">
														<i aria-hidden="true" class="icon icon-right-arrow"></i> </span>
													<span class="elementor-icon-list-text">FAQs</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<div class="elementor-element elementor-element-2904276 e-flex e-con-boxed e-con e-parent"
						data-id="2904276" data-element_type="container">
						<div class="e-con-inner">
							<div class="elementor-element elementor-element-569464b de_scroll_animation_no elementor-widget elementor-widget-html"
								data-id="569464b" data-element_type="widget" data-widget_type="html.default">
								<div class="elementor-widget-container">
									<script
										src="../../widgets.coingecko.com/coingecko-coin-price-marquee-widget.js"></script>
									<coingecko-coin-price-marquee-widget coin-ids="bitcoin,ethereum,eos,ripple,litecoin"
										currency="usd" background-color="#ffffff"
										locale="en"></coingecko-coin-price-marquee-widget>
								</div>
							</div>
						</div>
					</div>
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-7719b9c9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="7719b9c9" data-element_type="section"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f54791"
								data-id="f54791" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-339bd194 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor"
										data-id="339bd194" data-element_type="widget"
										data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
										data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											<style>
												/*! elementor - v3.22.0 - 17-06-2024 */
												.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
													background-color: #69727d;
													color: #fff
												}

												.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap {
													color: #69727d;
													border: 3px solid;
													background-color: transparent
												}

												.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap {
													margin-top: 8px
												}

												.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter {
													width: 1em;
													height: 1em
												}

												.elementor-widget-text-editor .elementor-drop-cap {
													float: left;
													text-align: center;
													line-height: 1;
													font-size: 50px
												}

												.elementor-widget-text-editor .elementor-drop-cap-letter {
													display: inline-block
												}
											</style>
											<p>FAQs</p>
										</div>
									</div>
									<div class="elementor-element elementor-element-39638162 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading"
										data-id="39638162" data-element_type="widget"
										data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
										data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">Frequently Asked
												Questions</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-61caa181 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor"
										data-id="61caa181" data-element_type="widget"
										data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}"
										data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											<p>Our team give quick answers to common questions about our services and
												how we can assist you in achieving your real estate goals. Whether
												you&#8217;re buying, selling, or investing, these FAQs provide clarity
												on what to expect when working with our expert team.&#8221;</p>
										</div>
									</div>
									<div class="elementor-element elementor-element-57647618 elementor-mobile-align-center de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-button"
										data-id="57647618" data-element_type="widget"
										data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:800}"
										data-widget_type="button.default">
										<div class="elementor-widget-container">
											<div class="elementor-button-wrapper">
												<a class="elementor-button elementor-button-link elementor-size-sm"
													href="../metform-form/contact-us/index.html">
													<span class="elementor-button-content-wrapper">
														<span class="elementor-button-icon">
															<svg aria-hidden="true" class="e-font-icon-svg e-fas-phone"
																viewBox="0 0 512 512"
																xmlns="http://www.w3.org/2000/svg">
																<path
																	d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
																</path>
															</svg> </span>
														<span class="elementor-button-text">Contact Us</span>
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1f0753f6"
								data-id="1f0753f6" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-3893f85d de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-elementskit-accordion"
										data-id="3893f85d" data-element_type="widget"
										data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}"
										data-widget_type="elementskit-accordion.default">
										<div class="elementor-widget-container">
											<div class="ekit-wid-con">
												<div class="elementskit-accordion accoedion-primary"
													id="accordion-6751ebc25e33f">


													<div class="elementskit-card active">
														<div class="elementskit-card-header"
															id="primaryHeading-0-3893f85d">
															<a href="#collapse-06b79346751ebc25e33f"
																class="ekit-accordion--toggler elementskit-btn-link collapsed"
																data-ekit-toggle="collapse"
																data-target="#Collapse-06b79346751ebc25e33f"
																aria-expanded="true"
																aria-controls="Collapse-06b79346751ebc25e33f">

																<span class="ekit-accordion-title">What fees are
																	typically involved when working with a
																	broker?</span>


																<div class="ekit_accordion_icon_group">
																	<div class="ekit_accordion_normal_icon">
																		<!-- Normal Icon -->
																		<i aria-hidden="true"
																			class="icon-open icon-right icon icon-down-arrow1"></i>
																	</div>

																	<div class="ekit_accordion_active_icon">
																		<!-- Active Icon -->
																		<i aria-hidden="true"
																			class="icon-closed icon-right icon icon-left-arrows"></i>
																	</div>

																</div>


															</a>
														</div>

														<div id="Collapse-06b79346751ebc25e33f" class=" show collapse"
															aria-labelledby="primaryHeading-0-3893f85d"
															data-parent="#accordion-6751ebc25e33f">

															<div class="elementskit-card-body ekit-accordion--content">
																<p>Broker fees can vary but often include commissions
																	based on the sale price of a property. These fees
																	cover the broker's services, including marketing,
																	negotiations, and transaction management. It's
																	important to discuss fees upfront with your broker
																	to understand the cost structure.</p>
															</div>

														</div>

													</div><!-- .elementskit-card END -->


													<div class="elementskit-card ">
														<div class="elementskit-card-header"
															id="primaryHeading-1-3893f85d">
															<a href="#collapse-90a908d6751ebc25e33f"
																class="ekit-accordion--toggler elementskit-btn-link collapsed"
																data-ekit-toggle="collapse"
																data-target="#Collapse-90a908d6751ebc25e33f"
																aria-expanded="false"
																aria-controls="Collapse-90a908d6751ebc25e33f">

																<span class="ekit-accordion-title">How do I choose the
																	right broker for my needs?</span>


																<div class="ekit_accordion_icon_group">
																	<div class="ekit_accordion_normal_icon">
																		<!-- Normal Icon -->
																		<i aria-hidden="true"
																			class="icon-open icon-right icon icon-down-arrow1"></i>
																	</div>

																	<div class="ekit_accordion_active_icon">
																		<!-- Active Icon -->
																		<i aria-hidden="true"
																			class="icon-closed icon-right icon icon-left-arrows"></i>
																	</div>

																</div>


															</a>
														</div>

														<div id="Collapse-90a908d6751ebc25e33f" class=" collapse"
															aria-labelledby="primaryHeading-1-3893f85d"
															data-parent="#accordion-6751ebc25e33f">

															<div class="elementskit-card-body ekit-accordion--content">
																<p>When selecting a broker, consider their experience in
																	your market area, track record of successful
																	transactions, and client testimonials. Personal
																	rapport and communication style also play a crucial
																	role. Interview multiple brokers to find the one who
																	aligns best with your goals and preferences.</p>
															</div>

														</div>

													</div><!-- .elementskit-card END -->


													<div class="elementskit-card ">
														<div class="elementskit-card-header"
															id="primaryHeading-2-3893f85d">
															<a href="#collapse-24a31a36751ebc25e33f"
																class="ekit-accordion--toggler elementskit-btn-link collapsed"
																data-ekit-toggle="collapse"
																data-target="#Collapse-24a31a36751ebc25e33f"
																aria-expanded="false"
																aria-controls="Collapse-24a31a36751ebc25e33f">

																<span class="ekit-accordion-title">How can a broker help
																	me buy or sell a property?</span>


																<div class="ekit_accordion_icon_group">
																	<div class="ekit_accordion_normal_icon">
																		<!-- Normal Icon -->
																		<i aria-hidden="true"
																			class="icon-open icon-right icon icon-down-arrow1"></i>
																	</div>

																	<div class="ekit_accordion_active_icon">
																		<!-- Active Icon -->
																		<i aria-hidden="true"
																			class="icon-closed icon-right icon icon-left-arrows"></i>
																	</div>

																</div>


															</a>
														</div>

														<div id="Collapse-24a31a36751ebc25e33f" class=" collapse"
															aria-labelledby="primaryHeading-2-3893f85d"
															data-parent="#accordion-6751ebc25e33f">

															<div class="elementskit-card-body ekit-accordion--content">
																<p>Brokers provide expertise in navigating the real
																	estate market. They assist buyers by finding
																	suitable properties, negotiating offers, and guiding
																	through the closing process. For sellers, brokers
																	market the property effectively, handle
																	negotiations, and ensure a smooth transaction.</p>
															</div>

														</div>

													</div><!-- .elementskit-card END -->

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-28022bfb elementor-reverse-mobile elementor-section-full_width elementor-section-height-default elementor-section-height-default"
						data-id="28022bfb" data-element_type="section"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5098e27c elementor-invisible"
								data-id="5098e27c" data-element_type="column"
								data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:200}">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-2bfb9643 ekit-equal-height-disable de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-elementskit-icon-box"
										data-id="2bfb9643" data-element_type="widget"
										data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:600}"
										data-widget_type="elementskit-icon-box.default">
										<div class="elementor-widget-container">
											<div class="ekit-wid-con"> <!-- link opening -->
												<a href="#" class="ekit_global_links">
													<!-- end link opening -->

													<div
														class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
														<div class="elementskit-box-header elementor-animation-">
															<div class="elementskit-info-box-icon  text-center">
																<svg aria-hidden="true"
																	class="elementkit-infobox-icon e-font-icon-svg e-fas-map-marker-alt"
																	viewBox="0 0 384 512"
																	xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
																	</path>
																</svg>
															</div>
														</div>
														<div class="box-body">
															<h4 class="elementskit-info-box-title">
																Address </h4>
															<p>457 Morningview Lane, New York</p>
														</div>


													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-4419daac ekit-equal-height-disable de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-elementskit-icon-box"
										data-id="4419daac" data-element_type="widget"
										data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:600}"
										data-widget_type="elementskit-icon-box.default">
										<div class="elementor-widget-container">
											<div class="ekit-wid-con"> <!-- link opening -->
												<a href="#" class="ekit_global_links">
													<!-- end link opening -->

													<div
														class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
														<div class="elementskit-box-header elementor-animation-">
															<div class="elementskit-info-box-icon  text-center">
																<svg aria-hidden="true"
																	class="elementkit-infobox-icon e-font-icon-svg e-fas-phone-alt"
																	viewBox="0 0 512 512"
																	xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
																	</path>
																</svg>
															</div>
														</div>
														<div class="box-body">
															<h4 class="elementskit-info-box-title">
																Contact </h4>
															<p>+1 251-241-1540</p>
														</div>


													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-657c950e ekit-equal-height-disable de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-elementskit-icon-box"
										data-id="657c950e" data-element_type="widget"
										data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:600}"
										data-widget_type="elementskit-icon-box.default">
										<div class="elementor-widget-container">
											<div class="ekit-wid-con"> <!-- link opening -->
												<a href="#" class="ekit_global_links">
													<!-- end link opening -->

													<div
														class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
														<div class="elementskit-box-header elementor-animation-">
															<div class="elementskit-info-box-icon  text-center">
																<svg aria-hidden="true"
																	class="elementkit-infobox-icon e-font-icon-svg e-fas-envelope"
																	viewBox="0 0 512 512"
																	xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
																	</path>
																</svg>
															</div>
														</div>
														<div class="box-body">
															<h4 class="elementskit-info-box-title">
																Email </h4>
															<p>info.0010011@gmail.com </p>
														</div>


													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-7e57f105 ekit-equal-height-disable de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-elementskit-icon-box"
										data-id="7e57f105" data-element_type="widget"
										data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:600}"
										data-widget_type="elementskit-icon-box.default">
										<div class="elementor-widget-container">
											<div class="ekit-wid-con"> <!-- link opening -->
												<a href="#" class="ekit_global_links">
													<!-- end link opening -->

													<div
														class="elementskit-infobox text-left text-left icon-lef-right-aligin elementor-animation- media  ">
														<div class="elementskit-box-header elementor-animation-">
															<div class="elementskit-info-box-icon  text-center">
																<svg aria-hidden="true"
																	class="elementkit-infobox-icon e-font-icon-svg e-fas-globe"
																	viewBox="0 0 496 512"
																	xmlns="http://www.w3.org/2000/svg">
																	<path
																		d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z">
																	</path>
																</svg>
															</div>
														</div>
														<div class="box-body">
															<h4 class="elementskit-info-box-title">
																Website </h4>
															<p>ParagonTradeInvestment</p>
														</div>


													</div>
												</a>
											</div>
										</div>
									</div>
									<div class="elementor-element elementor-element-68a62013 elementor-shape-circle e-grid-align-left e-grid-align-mobile-center elementor-grid-0 de_scroll_animation_no elementor-widget elementor-widget-social-icons"
										data-id="68a62013" data-element_type="widget"
										data-widget_type="social-icons.default">
										<div class="elementor-widget-container">
											<style>
												/*! elementor - v3.22.0 - 17-06-2024 */
												.elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
												.elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
												.elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
													line-height: 1;
													font-size: 0
												}

												.elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
													display: inline-grid
												}

												.elementor-widget-social-icons .elementor-grid {
													grid-column-gap: var(--grid-column-gap, 5px);
													grid-row-gap: var(--grid-row-gap, 5px);
													grid-template-columns: var(--grid-template-columns);
													justify-content: var(--justify-content, center);
													justify-items: var(--justify-content, center)
												}

												.elementor-icon.elementor-social-icon {
													font-size: var(--icon-size, 25px);
													line-height: var(--icon-size, 25px);
													width: calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em));
													height: calc(var(--icon-size, 25px) + 2 * var(--icon-padding, .5em))
												}

												.elementor-social-icon {
													--e-social-icon-icon-color: #fff;
													display: inline-flex;
													background-color: #69727d;
													align-items: center;
													justify-content: center;
													text-align: center;
													cursor: pointer
												}

												.elementor-social-icon i {
													color: var(--e-social-icon-icon-color)
												}

												.elementor-social-icon svg {
													fill: var(--e-social-icon-icon-color)
												}

												.elementor-social-icon:last-child {
													margin: 0
												}

												.elementor-social-icon:hover {
													opacity: .9;
													color: #fff
												}

												.elementor-social-icon-android {
													background-color: #a4c639
												}

												.elementor-social-icon-apple {
													background-color: #999
												}

												.elementor-social-icon-behance {
													background-color: #1769ff
												}

												.elementor-social-icon-bitbucket {
													background-color: #205081
												}

												.elementor-social-icon-codepen {
													background-color: #000
												}

												.elementor-social-icon-delicious {
													background-color: #39f
												}

												.elementor-social-icon-deviantart {
													background-color: #05cc47
												}

												.elementor-social-icon-digg {
													background-color: #005be2
												}

												.elementor-social-icon-dribbble {
													background-color: #ea4c89
												}

												.elementor-social-icon-elementor {
													background-color: #d30c5c
												}

												.elementor-social-icon-envelope {
													background-color: #ea4335
												}

												.elementor-social-icon-facebook,
												.elementor-social-icon-facebook-f {
													background-color: #3b5998
												}

												.elementor-social-icon-flickr {
													background-color: #0063dc
												}

												.elementor-social-icon-foursquare {
													background-color: #2d5be3
												}

												.elementor-social-icon-free-code-camp,
												.elementor-social-icon-freecodecamp {
													background-color: #006400
												}

												.elementor-social-icon-github {
													background-color: #333
												}

												.elementor-social-icon-gitlab {
													background-color: #e24329
												}

												.elementor-social-icon-globe {
													background-color: #69727d
												}

												.elementor-social-icon-google-plus,
												.elementor-social-icon-google-plus-g {
													background-color: #dd4b39
												}

												.elementor-social-icon-houzz {
													background-color: #7ac142
												}

												.elementor-social-icon-instagram {
													background-color: #262626
												}

												.elementor-social-icon-jsfiddle {
													background-color: #487aa2
												}

												.elementor-social-icon-link {
													background-color: #818a91
												}

												.elementor-social-icon-linkedin,
												.elementor-social-icon-linkedin-in {
													background-color: #0077b5
												}

												.elementor-social-icon-medium {
													background-color: #00ab6b
												}

												.elementor-social-icon-meetup {
													background-color: #ec1c40
												}

												.elementor-social-icon-mixcloud {
													background-color: #273a4b
												}

												.elementor-social-icon-odnoklassniki {
													background-color: #f4731c
												}

												.elementor-social-icon-pinterest {
													background-color: #bd081c
												}

												.elementor-social-icon-product-hunt {
													background-color: #da552f
												}

												.elementor-social-icon-reddit {
													background-color: #ff4500
												}

												.elementor-social-icon-rss {
													background-color: #f26522
												}

												.elementor-social-icon-shopping-cart {
													background-color: #4caf50
												}

												.elementor-social-icon-skype {
													background-color: #00aff0
												}

												.elementor-social-icon-slideshare {
													background-color: #0077b5
												}

												.elementor-social-icon-snapchat {
													background-color: #fffc00
												}

												.elementor-social-icon-soundcloud {
													background-color: #f80
												}

												.elementor-social-icon-spotify {
													background-color: #2ebd59
												}

												.elementor-social-icon-stack-overflow {
													background-color: #fe7a15
												}

												.elementor-social-icon-steam {
													background-color: #00adee
												}

												.elementor-social-icon-stumbleupon {
													background-color: #eb4924
												}

												.elementor-social-icon-telegram {
													background-color: #2ca5e0
												}

												.elementor-social-icon-threads {
													background-color: #000
												}

												.elementor-social-icon-thumb-tack {
													background-color: #1aa1d8
												}

												.elementor-social-icon-tripadvisor {
													background-color: #589442
												}

												.elementor-social-icon-tumblr {
													background-color: #35465c
												}

												.elementor-social-icon-twitch {
													background-color: #6441a5
												}

												.elementor-social-icon-twitter {
													background-color: #1da1f2
												}

												.elementor-social-icon-viber {
													background-color: #665cac
												}

												.elementor-social-icon-vimeo {
													background-color: #1ab7ea
												}

												.elementor-social-icon-vk {
													background-color: #45668e
												}

												.elementor-social-icon-weibo {
													background-color: #dd2430
												}

												.elementor-social-icon-weixin {
													background-color: #31a918
												}

												.elementor-social-icon-whatsapp {
													background-color: #25d366
												}

												.elementor-social-icon-wordpress {
													background-color: #21759b
												}

												.elementor-social-icon-x-twitter {
													background-color: #000
												}

												.elementor-social-icon-xing {
													background-color: #026466
												}

												.elementor-social-icon-yelp {
													background-color: #af0606
												}

												.elementor-social-icon-youtube {
													background-color: #cd201f
												}

												.elementor-social-icon-500px {
													background-color: #0099e5
												}

												.elementor-shape-rounded .elementor-icon.elementor-social-icon {
													border-radius: 10%
												}

												.elementor-shape-circle .elementor-icon.elementor-social-icon {
													border-radius: 50%
												}
											</style>
											<div class="elementor-social-icons-wrapper elementor-grid">
												<span class="elementor-grid-item">
													<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-f27eb82"
														target="_blank">
														<span class="elementor-screen-only">Facebook</span>
														<svg class="e-font-icon-svg e-fab-facebook"
															viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
															</path>
														</svg> </a>
												</span>
												<span class="elementor-grid-item">
													<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-4067d8b"
														target="_blank">
														<span class="elementor-screen-only">Twitter</span>
														<svg class="e-font-icon-svg e-fab-twitter" viewBox="0 0 512 512"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
															</path>
														</svg> </a>
												</span>
												<span class="elementor-grid-item">
													<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-f172d08"
														target="_blank">
														<span class="elementor-screen-only">Youtube</span>
														<svg class="e-font-icon-svg e-fab-youtube" viewBox="0 0 576 512"
															xmlns="http://www.w3.org/2000/svg">
															<path
																d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
															</path>
														</svg> </a>
												</span>
												<span class="elementor-grid-item">
													<a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-6e48336"
														target="_blank">
														<span class="elementor-screen-only">Linkedin</span>
														<svg class="e-font-icon-svg e-fab-linkedin"
															viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
															<path
																d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
															</path>
														</svg> </a>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4ef5c180"
								data-id="4ef5c180" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-34ba715f de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor"
										data-id="34ba715f" data-element_type="widget"
										data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
										data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											<p>Our Contact</p>
										</div>
									</div>
									<div class="elementor-element elementor-element-4a97848e de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading"
										data-id="4a97848e" data-element_type="widget"
										data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
										data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">Ask Us Anything
											</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-20c5828 e-flex e-con-boxed e-con e-parent"
										data-id="20c5828" data-element_type="container">
										<div class="e-con-inner">
											<div class="elementor-element elementor-element-2babb11 de_scroll_animation_no elementor-widget elementor-widget-image"
												data-id="2babb11" data-element_type="widget"
												data-widget_type="image.default">
												<div class="elementor-widget-container">
													<img decoding="async" width="900" height="500"
														src="../wp-content/uploads/2024/06/hp-sophisticated-traders-900x500-1.png"
														class="attachment-large size-large wp-image-327" alt=""
														srcset="https://ParagonTradeInvestmentpro.com/wp-content/uploads/2024/06/hp-sophisticated-traders-900x500-1.png 900w, https://ParagonTradeInvestmentpro.com/wp-content/uploads/2024/06/hp-sophisticated-traders-900x500-1-300x167.png 300w, https://ParagonTradeInvestmentpro.com/wp-content/uploads/2024/06/hp-sophisticated-traders-900x500-1-768x427.png 768w"
														sizes="(max-width: 900px) 100vw, 900px" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<div class="elementor-element elementor-element-e8b938d e-flex e-con-boxed e-con e-parent"
						data-id="e8b938d" data-element_type="container">
						<div class="e-con-inner">
							<div class="elementor-element elementor-element-2d90cc1 de_scroll_animation_no elementor-widget elementor-widget-html"
								data-id="2d90cc1" data-element_type="widget" data-widget_type="html.default">
								<div class="elementor-widget-container">
									<div class="js-screener-widget-wizard">
										<div
											class="tv-external-tools__padding_standard tv-content__highlight-background">
											<div class="widget-wizard-screener-settings__preview">
												<div class="tv-external-tools__widget-iframe-wrap js-widget-wizard__example"
													style="width: 100%; height: 523px; overflow: hidden;">
													<div class="tradingview-widget-container"
														style="width: 100%; height: 523px;">
														<iframe allowtransparency="true" frameborder="0"
															src="https://www.tradingview-widget.com/embed-widget/screener/?locale=en#%7B%22width%22%3A1100%2C%22height%22%3A523%2C%22defaultColumn%22%3A%22overview%22%2C%22defaultScreen%22%3A%22general%22%2C%22market%22%3A%22forex%22%2C%22showToolbar%22%3Atrue%2C%22colorTheme%22%3A%22light%22%2C%22enableScrolling%22%3Atrue%2C%22utm_source%22%3A%22www.tradingview.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22forexscreener%22%2C%22page-uri%22%3A%22www.tradingview.com%2Fwidget%2Fscreener%2F%22%7D"
															title="screener TradingView widget" lang="en"
															style="user-select: none; box-sizing: border-box; display: block; height: calc(100% - 32px); width: 100%;"></iframe>
														<div class="tradingview-widget-copyright"><a
																href="https://www.tradingview.com/?utm_source=www.tradingview.com&amp;utm_medium=widget_new&amp;utm_campaign=forexscreener"
																rel="noopener nofollow" target="_blank"><span
																	class="blue-text">Track all markets on
																	TradingView</span></a></div>
													</div>
												</div>
											</div>
										</div>
									</div>

			</main><!-- #main -->




			<div class="ekit-template-content-markup ekit-template-content-footer">
				<div data-elementor-type="wp-post" data-elementor-id="95" class="elementor elementor-95">
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-69467f79 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="69467f79" data-element_type="section"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_top&quot;:&quot;tilt&quot;}">
						<div class="elementor-shape elementor-shape-top" data-negative="false">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
								<path class="elementor-shape-fill" d="M0,6V0h1000v100L0,6z" />
							</svg>
						</div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-59dd89e5"
								data-id="59dd89e5" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-7c9a88b7 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-heading"
										data-id="7c9a88b7" data-element_type="widget"
										data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
										data-widget_type="heading.default">
										<div class="elementor-widget-container">
											<h2 class="elementor-heading-title elementor-size-default">Beyond the
												Numbers</h2>
										</div>
									</div>
									<div class="elementor-element elementor-element-1dbff3f9 de_scroll_animation_no elementor-invisible elementor-widget elementor-widget-text-editor"
										data-id="1dbff3f9" data-element_type="widget"
										data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
										data-widget_type="text-editor.default">
										<div class="elementor-widget-container">
											<p>Subscribe to Our Monthly Newslettter</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section
						class="elementor-section elementor-top-section elementor-element elementor-element-477db123 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
						data-id="477db123" data-element_type="section"
						data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
						<div class="elementor-background-overlay"></div>
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2ebae50"
								data-id="2ebae50" data-element_type="column">
								<div class="elementor-widget-wrap elementor-element-populated">
									<section
										class="elementor-section elementor-inner-section elementor-element elementor-element-14c6df6e elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="14c6df6e" data-element_type="section">
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2da9b5cd"
												data-id="2da9b5cd" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-7b14c8f1 de_scroll_animation_no elementor-widget elementor-widget-image"
														data-id="7b14c8f1" data-element_type="widget"
														data-widget_type="image.default">
														<div class="elementor-widget-container">
															<img width="668" height="231"
																src="../wp-content/uploads/2024/06/WhatsApp_Image_2024-06-23_at_16.24.55_6961f816-removebg-preview.png"
																class="attachment-large size-large wp-image-67" alt=""
																srcset="https://ParagonTradeInvestmentpro.com/wp-content/uploads/2024/06/WhatsApp_Image_2024-06-23_at_16.24.55_6961f816-removebg-preview.png 668w, https://ParagonTradeInvestmentpro.com/wp-content/uploads/2024/06/WhatsApp_Image_2024-06-23_at_16.24.55_6961f816-removebg-preview-300x104.png 300w"
																sizes="(max-width: 668px) 100vw, 668px" />
														</div>
													</div>
													<div class="elementor-element elementor-element-797c0cb7 de_scroll_animation_no elementor-widget elementor-widget-text-editor"
														data-id="797c0cb7" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<p>You can reach us on any of our social platforms</p>
														</div>
													</div>
													<div class="elementor-element elementor-element-32f871c9 elementor-shape-circle e-grid-align-left e-grid-align-mobile-center e-grid-align-tablet-center elementor-grid-0 de_scroll_animation_no elementor-widget elementor-widget-social-icons"
														data-id="32f871c9" data-element_type="widget"
														data-widget_type="social-icons.default">
														<div class="elementor-widget-container">
															<div class="elementor-social-icons-wrapper elementor-grid">
																<span class="elementor-grid-item">
																	<a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-f27eb82"
																		target="_blank">
																		<span
																			class="elementor-screen-only">Facebook</span>
																		<svg class="e-font-icon-svg e-fab-facebook"
																			viewBox="0 0 512 512"
																			xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
																			</path>
																		</svg> </a>
																</span>
																<span class="elementor-grid-item">
																	<a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-4067d8b"
																		target="_blank">
																		<span
																			class="elementor-screen-only">Twitter</span>
																		<svg class="e-font-icon-svg e-fab-twitter"
																			viewBox="0 0 512 512"
																			xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
																			</path>
																		</svg> </a>
																</span>
																<span class="elementor-grid-item">
																	<a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-repeater-item-f172d08"
																		target="_blank">
																		<span
																			class="elementor-screen-only">Youtube</span>
																		<svg class="e-font-icon-svg e-fab-youtube"
																			viewBox="0 0 576 512"
																			xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z">
																			</path>
																		</svg> </a>
																</span>
																<span class="elementor-grid-item">
																	<a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-6e48336"
																		target="_blank">
																		<span
																			class="elementor-screen-only">Linkedin</span>
																		<svg class="e-font-icon-svg e-fab-linkedin"
																			viewBox="0 0 448 512"
																			xmlns="http://www.w3.org/2000/svg">
																			<path
																				d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
																			</path>
																		</svg> </a>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-78cf307c"
												data-id="78cf307c" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-2a5b7b0d de_scroll_animation_no elementor-widget elementor-widget-heading"
														data-id="2a5b7b0d" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h4 class="elementor-heading-title elementor-size-default">
																Get In Touch</h4>
														</div>
													</div>
													<div class="elementor-element elementor-element-5826440c de_scroll_animation_no elementor-widget elementor-widget-elementskit-header-info"
														data-id="5826440c" data-element_type="widget"
														data-widget_type="elementskit-header-info.default">
														<div class="elementor-widget-container">
															<div class="ekit-wid-con">
																<ul class="ekit-header-info">
																	<li>
																		<a>
																			<svg aria-hidden="true"
																				class="e-font-icon-svg e-fas-map-marker-alt"
																				viewBox="0 0 384 512"
																				xmlns="http://www.w3.org/2000/svg">
																				<path
																					d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z">
																				</path>
																			</svg> 2955 Fulton Street, Morgantown, West
																			Virginia </a>
																	</li>

																</ul>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-5d10adca de_scroll_animation_no elementor-widget elementor-widget-elementskit-header-info"
														data-id="5d10adca" data-element_type="widget"
														data-widget_type="elementskit-header-info.default">
														<div class="elementor-widget-container">
															<div class="ekit-wid-con">
																<ul class="ekit-header-info">
																	<li>
																		<a href="mailto:info.0010011@gmail.com" target="_blank"
																			rel="nofollow">
																			<svg aria-hidden="true"
																				class="e-font-icon-svg e-fas-envelope"
																				viewBox="0 0 512 512"
																				xmlns="http://www.w3.org/2000/svg">
																				<path
																					d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
																				</path>
																			</svg> info.0010011@gmail.com 
																		</a>
																	</li>

																</ul>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-11dee486 de_scroll_animation_no elementor-widget elementor-widget-elementskit-header-info"
														data-id="11dee486" data-element_type="widget"
														data-widget_type="elementskit-header-info.default">
														<div class="elementor-widget-container">
															<div class="ekit-wid-con">
																<ul class="ekit-header-info">
																	<li>
																		<a href="tel:+1 251-241-1540" target="_blank"
																			rel="nofollow">
																			<svg aria-hidden="true"
																				class="e-font-icon-svg e-fas-phone-alt"
																				viewBox="0 0 512 512"
																				xmlns="http://www.w3.org/2000/svg">
																				<path
																					d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
																				</path>
																			</svg> +1 251-241-1540 </a>
																	</li>

																</ul>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-e037c8d de_scroll_animation_no elementor-widget elementor-widget-elementskit-header-info"
														data-id="e037c8d" data-element_type="widget"
														data-widget_type="elementskit-header-info.default">
														<div class="elementor-widget-container">
															<div class="ekit-wid-con">
																<ul class="ekit-header-info">
																	<li>
																		<a>
																			<svg aria-hidden="true"
																				class="e-font-icon-svg e-fas-clock"
																				viewBox="0 0 512 512"
																				xmlns="http://www.w3.org/2000/svg">
																				<path
																					d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z">
																				</path>
																			</svg> 9:00am-2:00pm </a>
																	</li>

																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-575adb77"
												data-id="575adb77" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-20a6ed28 de_scroll_animation_no elementor-widget elementor-widget-heading"
														data-id="20a6ed28" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h4 class="elementor-heading-title elementor-size-default">
																Quicklinks</h4>
														</div>
													</div>
													<div class="elementor-element elementor-element-76f7c287 hfe-nav-menu__breakpoint-none hfe-nav-menu__align-left hfe-submenu-icon-arrow hfe-link-redirect-child de_scroll_animation_no elementor-widget elementor-widget-navigation-menu"
														data-id="76f7c287" data-element_type="widget"
														data-settings="{&quot;padding_horizontal_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;dropdown_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;0&quot;,&quot;right&quot;:&quot;0&quot;,&quot;bottom&quot;:&quot;0&quot;,&quot;left&quot;:&quot;0&quot;,&quot;isLinked&quot;:false},&quot;padding_vertical_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:3,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;dropdown_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;padding_horizontal_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
														data-widget_type="navigation-menu.default">
														<div class="elementor-widget-container">
															<div class="hfe-nav-menu hfe-layout-vertical hfe-nav-menu-layout vertical"
																data-layout="vertical">
																<div role="button"
																	class="hfe-nav-menu__toggle elementor-clickable">
																	<span class="screen-reader-text">Menu</span>
																	<div class="hfe-nav-menu-icon">
																	</div>
																</div>
																<nav class="hfe-nav-menu__layout-vertical hfe-nav-menu__submenu-arrow"
																	data-toggle-icon="" data-close-icon=""
																	data-full-width="">
																	<ul id="menu-1-76f7c287" class="hfe-nav-menu">
																		<li id="menu-item-52"
																			class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home parent hfe-creative-menu">
																			<a href="../index.html"
																				class="hfe-menu-item">Home</a></li>
																		<li id="menu-item-51"
																			class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children parent hfe-has-submenu hfe-creative-menu">
																			<div class="hfe-has-submenu-container"><a
																					href="../about/index.html"
																					class="hfe-menu-item">About<span
																						class='hfe-menu-toggle sub-arrow hfe-menu-child-0'><i
																							class='fa'></i></span></a>
																			</div>
																			<ul class="sub-menu">
																				<li id="menu-item-44"
																					class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
																					<a href="../accounts/index.html"
																						class="hfe-sub-menu-item">Accounts</a>
																				</li>
																				<li id="menu-item-678"
																					class="menu-item menu-item-type-custom menu-item-object-custom hfe-creative-menu">
																					<a href="../account/login.php"
																						class="hfe-sub-menu-item">Login</a>
																				</li>
																				<li id="menu-item-679"
																					class="menu-item menu-item-type-custom menu-item-object-custom hfe-creative-menu">
																					<a href="../account/register.php"
																						class="hfe-sub-menu-item">Register</a>
																				</li>
																			</ul>
																		</li>
																		<li id="menu-item-50"
																			class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children parent hfe-has-submenu hfe-creative-menu">
																			<div class="hfe-has-submenu-container"><a
																					href="../services/index.html"
																					class="hfe-menu-item">Services<span
																						class='hfe-menu-toggle sub-arrow hfe-menu-child-0'><i
																							class='fa'></i></span></a>
																			</div>
																			<ul class="sub-menu">
																				<li id="menu-item-47"
																					class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-33 current_page_item hfe-creative-menu">
																					<a href="index.html"
																						class="hfe-sub-menu-item hfe-sub-menu-item-active">FAQs</a>
																				</li>
																				<li id="menu-item-48"
																					class="menu-item menu-item-type-post_type menu-item-object-page hfe-creative-menu">
																					<a href="../investment-plan/index.html"
																						class="hfe-sub-menu-item">Investment
																						Plan</a></li>
																			</ul>
																		</li>
																		<li id="menu-item-45"
																			class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
																			<a href="../stocks/index.html"
																				class="hfe-menu-item">Stocks</a></li>
																		<li id="menu-item-46"
																			class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
																			<a href="../case-studies/index.html"
																				class="hfe-menu-item">Case Studies</a>
																		</li>
																		<li id="menu-item-49"
																			class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
																			<a href="../contact/index.html"
																				class="hfe-menu-item">Contact</a></li>
																	</ul>
																</nav>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4b4fbc58"
												data-id="4b4fbc58" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-10b354e2 de_scroll_animation_no elementor-widget elementor-widget-heading"
														data-id="10b354e2" data-element_type="widget"
														data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h4 class="elementor-heading-title elementor-size-default">
																Support</h4>
														</div>
													</div>
													<div class="elementor-element elementor-element-14e18a47 elementor-icon-list--layout-traditional elementor-list-item-link-full_width de_scroll_animation_no elementor-widget elementor-widget-icon-list"
														data-id="14e18a47" data-element_type="widget"
														data-widget_type="icon-list.default">
														<div class="elementor-widget-container">
															<ul class="elementor-icon-list-items">
																<li class="elementor-icon-list-item">
																	<a href="../contact/index.html">

																		<span class="elementor-icon-list-text">Help
																			Center</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a href="../case-studies/index.html">

																		<span
																			class="elementor-icon-list-text">Career</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a href="index.html">

																		<span
																			class="elementor-icon-list-text">FAQs</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a href="../index.html">

																		<span class="elementor-icon-list-text">Privacy
																			Policy</span>
																	</a>
																</li>
																<li class="elementor-icon-list-item">
																	<a href="../contact/index.html">

																		<span
																			class="elementor-icon-list-text">Contact</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<section
										class="elementor-section elementor-inner-section elementor-element elementor-element-5dec1594 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
										data-id="5dec1594" data-element_type="section">
										<div class="elementor-container elementor-column-gap-default">
											<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-49b2951"
												data-id="49b2951" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-407cdf04 de_scroll_animation_no elementor-widget elementor-widget-text-editor"
														data-id="407cdf04" data-element_type="widget"
														data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<p>Copyright ©
																 2024 <em><strong>ParagonTradeInvestmentpro</strong></em>
															</p>
														</div>
													</div>
												</div>
											</div>
											<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2325e62b"
												data-id="2325e62b" data-element_type="column">
												<div class="elementor-widget-wrap elementor-element-populated">
													<div class="elementor-element elementor-element-42dfce1 elementor-widget__width-auto de_scroll_animation_no elementor-widget elementor-widget-button"
														data-id="42dfce1" data-element_type="widget"
														data-widget_type="button.default">
														<div class="elementor-widget-container">
															<div class="elementor-button-wrapper">
																<a class="elementor-button elementor-button-link elementor-size-sm"
																	href="#">
																	<span class="elementor-button-content-wrapper">
																		<span class="elementor-button-text">Privacy
																			Policy</span>
																	</span>
																</a>
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-6dcd239b elementor-widget__width-auto de_scroll_animation_no elementor-widget elementor-widget-button"
														data-id="6dcd239b" data-element_type="widget"
														data-widget_type="button.default">
														<div class="elementor-widget-container">
															<div class="elementor-button-wrapper">
																<a class="elementor-button elementor-button-link elementor-size-sm"
																	href="#">
																	<span class="elementor-button-content-wrapper">
																		<span class="elementor-button-text">Terms &
																			Services</span>
																	</span>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>


		</div><!-- #wrap -->


	</div><!-- #outer-wrap -->



	<a aria-label="Scroll to the top of the page" href="#" id="scroll-top" class="scroll-top-right"><i
			class=" fa fa-angle-up" aria-hidden="true" role="img"></i></a>




	<div class="gtranslate_wrapper" id="gt-wrapper-17071706"></div>
	<div id="wow-notification-1" class="wow-notification">
		<div class="wow-notification-block">
			<div class="wow-notification-img"><img
					src="../wp-content/uploads/2024/06/Screenshot_2024-06-23_171031-removebg-preview.png"></div>
			<div class="wow-notification-text-block">
				<div class="wow-wow-notification-text">
					<p>[variable_1] from [variable_2] made a withdrawal of [variable_3] few minutes ago.</p>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var _smartsupp = _smartsupp || {};
		_smartsupp.key = 'ad46fa57f494bf3dcc1f757957fedc58f9c5f07b';
		_smartsupp.cookieDomain = 'ParagonTradeInvestmentpro.com';
		_smartsupp.sitePlatform = 'WP 6.5.5';
		window.smartsupp || (function (d) {
			var s, c, o = smartsupp = function () { o._.push(arguments) }; o._ = [];
			s = d.getElementsByTagName('script')[0]; c = d.createElement('script');
			c.type = 'text/javascript'; c.charset = 'utf-8'; c.async = true;
			c.src = '../../www.smartsuppchat.com/loader.js'; s.parentNode.insertBefore(c, s);
		})(document);
	</script>
	<script type='text/javascript'>
		const lazyloadRunObserver = () => {
			const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
			const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
				entries.forEach((entry) => {
					if (entry.isIntersecting) {
						let lazyloadBackground = entry.target;
						if (lazyloadBackground) {
							lazyloadBackground.classList.add('e-lazyloaded');
						}
						lazyloadBackgroundObserver.unobserve(entry.target);
					}
				});
			}, { rootMargin: '200px 0px 200px 0px' });
			lazyloadBackgrounds.forEach((lazyloadBackground) => {
				lazyloadBackgroundObserver.observe(lazyloadBackground);
			});
		};
		const events = [
			'DOMContentLoaded',
			'elementor/lazyload/observe',
		];
		events.forEach((event) => {
			document.addEventListener(event, lazyloadRunObserver);
		});
	</script>
	<link rel='stylesheet' id='e-animations-css'
		href='../wp-content/plugins/elementor/assets/lib/animations/animations.min4d52.css?ver=3.22.1' media='all' />
	<script src="../wp-includes/js/dist/vendor/wp-polyfill-inert.min0226.js?ver=3.1.2"
		id="wp-polyfill-inert-js"></script>
	<script src="../wp-includes/js/dist/vendor/regenerator-runtime.min6c85.js?ver=0.14.0"
		id="regenerator-runtime-js"></script>
	<script src="../wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0" id="wp-polyfill-js"></script>
	<script src="../wp-includes/js/dist/dom-ready.min5346.js?ver=f77871ff7694fffea381" id="wp-dom-ready-js"></script>
	<script id="starter-templates-zip-preview-js-extra">
		var starter_templates_zip_preview = { "AstColorPaletteVarPrefix": "--ast-global-", "AstEleColorPaletteVarPrefix": "--ast-global-" };
	</script>
	<script
		src="../wp-content/plugins/astra-sites/inc/lib/onboarding/assets/dist/template-preview/maina11c.js?ver=06758d4d807d9d22c6ea"
		id="starter-templates-zip-preview-js"></script>
	<script src="../wp-content/plugins/metform/public/assets/lib/cute-alert/cute-alert6f61.js?ver=3.8.9"
		id="cute-alert-js"></script>
	<script src="../wp-includes/js/imagesloaded.minbb93.js?ver=5.0.0" id="imagesloaded-js"></script>
	<script id="oceanwp-main-js-extra">
		var oceanwpLocalize = { "nonce": "10d391884f", "isRTL": "", "menuSearchStyle": "drop_down", "mobileMenuSearchStyle": "disabled", "sidrSource": null, "sidrDisplace": "1", "sidrSide": "left", "sidrDropdownTarget": "link", "verticalHeaderTarget": "link", "customScrollOffset": "0", "customSelects": ".woocommerce-ordering .orderby, #dropdown_product_cat, .widget_categories select, .widget_archive select, .single-product .variations_form .variations select", "ajax_url": "https:\/\/ParagonTradeInvestmentpro.com\/wp-admin\/admin-ajax.php", "oe_mc_wpnonce": "bfe79cfad2" };
	</script>
	<script src="../wp-content/themes/oceanwp/assets/js/theme.minf8ee.js?ver=3.5.7" id="oceanwp-main-js"></script>
	<script src="../wp-content/themes/oceanwp/assets/js/drop-down-mobile-menu.minf8ee.js?ver=3.5.7"
		id="oceanwp-drop-down-mobile-menu-js"></script>
	<script src="../wp-content/themes/oceanwp/assets/js/drop-down-search.minf8ee.js?ver=3.5.7"
		id="oceanwp-drop-down-search-js"></script>
	<script src="../wp-content/themes/oceanwp/assets/js/vendors/magnific-popup.minf8ee.js?ver=3.5.7"
		id="ow-magnific-popup-js"></script>
	<script src="../wp-content/themes/oceanwp/assets/js/ow-lightbox.minf8ee.js?ver=3.5.7"
		id="oceanwp-lightbox-js"></script>
	<script src="../wp-content/themes/oceanwp/assets/js/vendors/flickity.pkgd.minf8ee.js?ver=3.5.7"
		id="ow-flickity-js"></script>
	<script src="../wp-content/themes/oceanwp/assets/js/ow-slider.minf8ee.js?ver=3.5.7" id="oceanwp-slider-js"></script>
	<script src="../wp-content/themes/oceanwp/assets/js/scroll-effect.minf8ee.js?ver=3.5.7"
		id="oceanwp-scroll-effect-js"></script>
	<script src="../wp-content/themes/oceanwp/assets/js/scroll-top.minf8ee.js?ver=3.5.7"
		id="oceanwp-scroll-top-js"></script>
	<script src="../wp-content/themes/oceanwp/assets/js/select.minf8ee.js?ver=3.5.7" id="oceanwp-select-js"></script>
	<script src="../wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script55a0.js?ver=3.2.0"
		id="elementskit-framework-js-frontend-js"></script>
	<script id="elementskit-framework-js-frontend-js-after">
		var elementskit = {
			resturl: 'https://ParagonTradeInvestmentpro.com/wp-json/elementskit/v1/',
		}


	</script>
	<script src="../wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts55a0.js?ver=3.2.0"
		id="ekit-widget-scripts-js"></script>
	<script id="flickr-widget-script-js-extra">
		var flickrWidgetParams = { "widgets": [] };
	</script>
	<script src="../wp-content/plugins/ocean-extra/includes/widgets/js/flickr.minadc6.js?ver=6.5.5"
		id="flickr-widget-script-js"></script>
	<script src="../wp-content/plugins/header-footer-elementor/inc/js/frontend4f2e.js?ver=1.6.36"
		id="hfe-frontend-js-js"></script>
	<script id="gt_widget_script_17071706-js-before">
		window.gtranslateSettings = /* document.write */ window.gtranslateSettings || {}; window.gtranslateSettings['17071706'] = { "default_language": "en", "languages": ["ar", "zh-CN", "nl", "en", "fr", "de", "it", "la", "pt", "ru", "es", "sv", "tr"], "url_structure": "none", "flag_style": "2d", "wrapper_selector": "#gt-wrapper-17071706", "alt_flags": { "en": "usa" }, "float_switcher_open_direction": "top", "switcher_horizontal_position": "left", "switcher_vertical_position": "bottom", "flags_location": "\/wp-content\/plugins\/gtranslate\/flags\/" };
	</script>
	<script src="../wp-content/plugins/gtranslate/js/floatadc6.js?ver=6.5.5" data-no-optimize="1" data-no-minify="1"
		data-gt-orig-url="/faqs/" data-gt-orig-domain="ParagonTradeInvestmentpro.com" data-gt-widget-id="17071706"
		defer></script>
	<script id="mwp-herd-effect-js-extra">
		var HerdEffectsObj = { "wow-notification-1": { "openTime": { "type": "stable", "min": 5 }, "number": 20, "variables": { "amount": [1, 25], "1": ["Riley", " Spencer", " Morgan H.", " Taylor", " Casey Ben", " Jordan", " Alex", " Lucas", " Mia", " Oliver", " Isabella", " Ethan", " Harper", " Ryan", " Terry", " Eliot", " James", " Mike", " Desmond", " Nelly", " Emelda", ""], "2": ["United States", " Canada", " Mexico", " Brazil", " Argentina", " United Kingdom", " France", " Germany", " Italy", " Spain", " China", " Japan", " India", " Australia", " South Africa", " Egypt", " Russia", " Turkey", " Saudi Arabia", " Iran", " South Korea", " Indonesia", " Thailand", " Canada", " Mexico", " Brazil", " Argentina", " United Kingdom", " France"], "3": ["$500", " $3200", " $1500", " $750", " $4500", " $6200", " $1080", " $920", " $655", " $4200", " $20000", " $8700", " $5000", " $8500", " $30800", " $20000", " $6700", " $3500", " $4800", " $2600", " $8900", " $1200", " $5500", " $9500", " $4300", " $3100", " $7800", " $4000", " $5500"] }, "style": { "--radius": "5px", "--inset": "auto auto 10% 10px", "--text-block": "200px", "--text-size": "14px", "--text-line": "18px", "--text-color": "#ffffff", "--text-background": "rgb(0,121,209)", "--text-font": "inherit", "--text-padding": "10px", "--text-height": "auto", "--img-block": "60px", "--img-size": "40px", "--img-background": "rgba(0,108,232,0.49)", "--img-color": "#ffffff" } } };
	</script>
	<script src="../wp-content/plugins/mwp-herd-effect/public/assets/js/script.minf049.js?ver=6.0"
		id="mwp-herd-effect-js"></script>
	<script src="../wp-content/plugins/dethemekit-for-elementor/assets/js/lib/ResizeSensor.min7d4c.js?ver=1.7.0"
		id="de-resize-sensor-js"></script>
	<script
		src="../wp-content/plugins/dethemekit-for-elementor/assets/js/lib/sticky-sidebar/sticky-sidebar.min3d36.js?ver=3.3.1"
		id="de-sticky-sidebar-js"></script>
	<script src="../wp-content/plugins/dethemekit-for-elementor/assets/js/lib/jsticky/jquery.jstickyf488.js?ver=1.1.0"
		id="jsticky-js"></script>
	<script src="../wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.minf0b4.js?ver=3.11.6"
		id="elementor-pro-webpack-runtime-js"></script>
	<script src="../wp-content/plugins/elementor/assets/js/webpack.runtime.min4d52.js?ver=3.22.1"
		id="elementor-webpack-runtime-js"></script>
	<script src="../wp-content/plugins/elementor/assets/js/frontend-modules.min4d52.js?ver=3.22.1"
		id="elementor-frontend-modules-js"></script>
	<script src="../wp-includes/js/dist/hooks.min2757.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
	<script src="../wp-includes/js/dist/i18n.minc33c.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
	<script id="wp-i18n-js-after">
		wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
	</script>
	<script id="elementor-pro-frontend-js-before">
		var ElementorProFrontendConfig = { "ajaxurl": "https:\/\/ParagonTradeInvestmentpro.com\/wp-admin\/admin-ajax.php", "nonce": "470d8c1ad9", "urls": { "assets": "https:\/\/ParagonTradeInvestmentpro.com\/wp-content\/plugins\/elementor-pro\/assets\/", "rest": "https:\/\/ParagonTradeInvestmentpro.com\/wp-json\/" }, "shareButtonsNetworks": { "facebook": { "title": "Facebook", "has_counter": true }, "twitter": { "title": "Twitter" }, "linkedin": { "title": "LinkedIn", "has_counter": true }, "pinterest": { "title": "Pinterest", "has_counter": true }, "reddit": { "title": "Reddit", "has_counter": true }, "vk": { "title": "VK", "has_counter": true }, "odnoklassniki": { "title": "OK", "has_counter": true }, "tumblr": { "title": "Tumblr" }, "digg": { "title": "Digg" }, "skype": { "title": "Skype" }, "stumbleupon": { "title": "StumbleUpon", "has_counter": true }, "mix": { "title": "Mix" }, "telegram": { "title": "Telegram" }, "pocket": { "title": "Pocket", "has_counter": true }, "xing": { "title": "XING", "has_counter": true }, "whatsapp": { "title": "WhatsApp" }, "email": { "title": "Email" }, "print": { "title": "Print" } }, "facebook_sdk": { "lang": "en_US", "app_id": "" }, "lottie": { "defaultAnimationUrl": "https:\/\/ParagonTradeInvestmentpro.com\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json" } };
	</script>
	<script src="../wp-content/plugins/elementor-pro/assets/js/frontend.minf0b4.js?ver=3.11.6"
		id="elementor-pro-frontend-js"></script>
	<script src="../wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2"
		id="elementor-waypoints-js"></script>
	<script src="../wp-includes/js/jquery/ui/core.min3f14.js?ver=1.13.2" id="jquery-ui-core-js"></script>
	<script id="elementor-frontend-js-before">
		var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close", "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right", "a11yCarouselPrevSlideMessage": "Previous slide", "a11yCarouselNextSlideMessage": "Next slide", "a11yCarouselFirstSlideMessage": "This is the first slide", "a11yCarouselLastSlideMessage": "This is the last slide", "a11yCarouselPaginationBulletMessage": "Go to slide" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile Portrait", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Landscape", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet Portrait", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Landscape", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.22.1", "is_static": false, "experimentalFeatures": { "e_optimized_assets_loading": true, "e_optimized_css_loading": true, "e_font_icon_svg": true, "additional_custom_breakpoints": true, "container": true, "container_grid": true, "e_swiper_latest": true, "e_optimized_control_loading": true, "e_onboarding": true, "theme_builder_v2": true, "home_screen": true, "editor_v2": true, "ai-layout": true, "landing-pages": true, "nested-elements": true, "e_lazyload": true, "e_element_cache": true, "page-transitions": true, "notes": true, "loop": true, "form-submissions": true, "e_scroll_snap": true }, "urls": { "assets": "https:\/\/ParagonTradeInvestmentpro.com\/wp-content\/plugins\/elementor\/assets\/" }, "swiperClass": "swiper", "settings": { "page": [], "editorPreferences": [] }, "kit": { "body_background_background": "classic", "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 33, "title": "FAQs%20%E2%80%93%20ParagonTradeInvestmentpro.com", "excerpt": "", "featuredImage": false } };
	</script>
	<script src="../wp-content/plugins/elementor/assets/js/frontend.min4d52.js?ver=3.22.1"
		id="elementor-frontend-js"></script>
	<script src="../wp-content/plugins/elementor-pro/assets/js/elements-handlers.minf0b4.js?ver=3.11.6"
		id="pro-elements-handlers-js"></script>
	<script id="de-sticky-frontend-js-extra">
		var DeStickySettings = { "elements_data": { "sections": [], "columns": [] } };
	</script>
	<script src="../wp-content/plugins/dethemekit-for-elementor/assets/js/de-sticky-frontendd63f.js?ver=2.1.5"
		id="de-sticky-frontend-js"></script>
	<script src="../wp-content/plugins/dethemekit-for-elementor/assets/js/de-active-icon-boxd63f.js?ver=2.1.5"
		id="de-active-icon-box-js"></script>
	<script src="../wp-content/plugins/dethemekit-for-elementor/assets/js/de-active-columnd63f.js?ver=2.1.5"
		id="de-active-column-js"></script>
	<script src="../wp-content/plugins/elementskit-lite/widgets/init/assets/js/animate-circle.min55a0.js?ver=3.2.0"
		id="animate-circle-js"></script>
	<script id="elementskit-elementor-js-extra">
		var ekit_config = { "ajaxurl": "https:\/\/ParagonTradeInvestmentpro.com\/wp-admin\/admin-ajax.php", "nonce": "5e23d786b7" };
	</script>
	<script src="../wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor55a0.js?ver=3.2.0"
		id="elementskit-elementor-js"></script>
	<script src="../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/anime.minadc6.js?ver=6.5.5"
		id="dethemekit-anime-js-js"></script>
	<script
		src="../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/scrollMonitoradc6.js?ver=6.5.5"
		id="de-scroll-animation-scrollmonitor-js"></script>
	<script
		src="../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/de_scroll_animation.previewadc6.js?ver=6.5.5"
		id="de-scroll-animation-preview-js-js"></script>
	<script
		src="../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/intersectionobserveradc6.js?ver=6.5.5"
		id="de-reveal-animation-intersection-observer-js"></script>
	<script
		src="../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/letter/charming.minadc6.js?ver=6.5.5"
		id="de-reveal-letter-charming-js-js"></script>
	<script
		src="../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/letter/lineMakeradc6.js?ver=6.5.5"
		id="de-reveal-letter-lineMaker-js-js"></script>
	<script
		src="../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/letter/imagesloaded.pkgd.minadc6.js?ver=6.5.5"
		id="de-reveal-letter-imagesloaded-js-js"></script>
	<script
		src="../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/letter/textfxadc6.js?ver=6.5.5"
		id="de-reveal-letter-textfx-js-js"></script>
	<script src="../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/mainadc6.js?ver=6.5.5"
		id="de-curtain-animation-main-js"></script>
	<script
		src="../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/de_reveal_animation.previewadc6.js?ver=6.5.5"
		id="de-reveal-animation-preview-js"></script>
	<script
		src="../wp-content/plugins/dethemekit-for-elementor/includes/ext/sina/assets/js/de_staggering/de_staggeringadc6.js?ver=6.5.5"
		id="de-staggering-js"></script>
	<script src="../wp-includes/js/underscore.mind584.js?ver=1.13.4" id="underscore-js"></script>
	<script id="wp-util-js-extra">
		var _wpUtilSettings = { "ajax": { "url": "\/wp-admin\/admin-ajax.php" } };
	</script>
	<script src="../wp-includes/js/wp-util.minadc6.js?ver=6.5.5" id="wp-util-js"></script>
	<script id="wpforms-elementor-js-extra">
		var wpformsElementorVars = { "captcha_provider": "recaptcha", "recaptcha_type": "v2" };
	</script>
	<script src="../wp-content/plugins/wpforms-lite/assets/js/integrations/elementor/frontend.minad28.js?ver=1.8.9.2"
		id="wpforms-elementor-js"></script>
</body>


</html>

