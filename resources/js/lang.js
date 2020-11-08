import lang from 'lang.js';
import Translation from './translation';

const Lang = new lang({
    messages: Translation,
    locale: 'ru',
    fallback: 'en', //alt locale
});

export default Lang;
