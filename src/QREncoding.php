<?php

namespace chillerlan\QRCode;

/**
 * Class QREncoding
 * A list of available ECI (Extended Channel Interpretations) encodings.
 *
 * @link https://strokescribe.com/en/ECI.html
 * @package chillerlan\QRCode
 * @license      MIT
 */
class QREncoding {
	const DEFAULT               = 0;
	const GLI                   = 1;
	const ECI_000000_WO_GLI     = 2;
	const ISO_IEC_8859_1        = 3;
	const ISO_IEC_8859_2        = 4;
	const ISO_IEC_8859_3        = 5;
	const ISO_IEC_8859_4        = 6;
	const ISO_IEC_8859_5        = 7;
	const ISO_IEC_8859_6        = 8;
	const ISO_IEC_8859_7        = 9;
	const ISO_IEC_8859_8        = 10;
	const ISO_IEC_8859_9        = 11;
	const ISO_IEC_8859_10       = 12;
	const ISO_IEC_8859_11       = 13;
	// 14 reserved
	const ISO_IEC_8859_13       = 15;
	const ISO_IEC_8859_14       = 16;
	const ISO_IEC_8859_15       = 17;
	const ISO_IEC_8859_16       = 18;
	// 19 reserved
	const SHIFT_JIS             = 20;
	const WINDOWS_1250_LATIN_2  = 21;
	const WINDOWS_1251_CYRILLIC = 22;
	const WINDOWS_1252_LATIN_1  = 23;
	const WINDOWS_1256_ARABIC   = 24;
	const ISO_IEC_10646_UCS_2   = 25;
	const ISO_IEC_10646_UTF_8   = 26;
	const ISO_IEC_646_1991      = 27;
	const BIG_5                 = 28; // Big 5 (Taiwan) Chinese Character Set
	const GB_PRC                = 29; // GB (PRC) Chinese Character Set
	const KOREAN                = 30; // Korean Character Set
}
